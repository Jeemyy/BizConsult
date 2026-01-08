<?php

namespace App\View\Components\Fronts;

use App\Models\Testimonial;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontTestimonials extends Component
{
    /**
     * Create a new component instance.
     */
    public $testimonials;
    public function __construct()
    {
        $this->testimonials = Testimonial::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fronts.front-testimonials');
    }
}
