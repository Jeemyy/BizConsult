<?php

namespace App\View\Components\Fronts;

use App\Models\Company;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontCompanies extends Component
{
    /**
     * Create a new component instance.
     */
    public $companies;
    public function __construct()
    {
        $this->companies = Company::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fronts.front-companies');
    }
}
