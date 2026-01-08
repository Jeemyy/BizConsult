<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'address'       =>   'required|string',
            'phone'         =>   'required',
            'email'         =>   'required|email',
            'facebook'      =>   'required',
            'instagram'     =>   'required',
            'twitter'       =>   'required',
            'linkedin'      =>   'required',
        ];
    }
    public function attributes()
    {
        return [
            'address'       =>   __("keywords.address") ,
            'phone'         =>   __("keywords.phone") ,
            'email'         =>   __("keywords.email") ,
            'facebook'      =>   __("keywords.facebook") ,
            'instagram'     =>   __("keywords.instagram") ,
            'twitter'       =>   __("keywords.twitter") ,
            'linkedin'      =>   __("keywords.linkedin") ,
        ];
    }

}
