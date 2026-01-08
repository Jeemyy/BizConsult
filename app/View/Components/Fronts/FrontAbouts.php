<?php

namespace App\View\Components\Fronts;

use App\Models\About;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontAbouts extends Component
{
    /**
     * Create a new component instance.
     */
    public $abouts;
    public function __construct()
    {
        $this->abouts = About::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fronts.front-abouts');
    }
}
