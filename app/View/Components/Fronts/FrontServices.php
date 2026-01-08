<?php

namespace App\View\Components\Fronts;

use App\Models\Service;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontServices extends Component
{
    /**
     * Create a new component instance.
     */
    public $services;
    public function __construct()
    {
        $this->services = Service::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fronts.front-services');
    }
}
