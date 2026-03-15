# استخدم صورة PHP 8.2 CLI
FROM php:8.2-cli

# تعيين مجلد العمل داخل الحاوية
WORKDIR /app

# تحديث الحزم وتثبيت المتطلبات
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ ملفات المشروع إلى الحاوية
COPY . .

# تثبيت الاعتمادات
RUN composer install --no-dev --optimize-autoloader

# إنشاء مجلد لتخزين cache وlogs
RUN mkdir -p storage/framework/cache/data \
    && mkdir -p storage/logs \
    && chown -R www-data:www-data storage

# نسخ ملفات البيئة
# تأكد أن لديك .env.production أو .env
COPY .env.example .env

# توليد مفتاح التطبيق
RUN php artisan key:generate

# تنظيف Cache
RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan route:clear
RUN php artisan view:clear

# CMD لتشغيل Laravel بعد التأكد من Migrations
# لاحظ: لا نفعل migrate داخل CMD مباشرة لأنه يحتاج DB جاهزة
CMD ["sh", "-c", "php artisan migrate --force && php artisan db:seed --force && php artisan serve --host=0.0.0.0 --port=8000"]
