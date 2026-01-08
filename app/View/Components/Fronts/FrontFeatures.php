<?php

namespace App\View\Components\Fronts;

use App\Models\Feature;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontFeatures extends Component
{
    /**
     * Create a new component instance.
     */
    public $features;
    public function __construct()
    {
        $this->features = Feature::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fronts.front-features');
    }
}
