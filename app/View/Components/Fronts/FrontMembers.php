<?php

namespace App\View\Components\Fronts;

use App\Models\Member;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontMembers extends Component
{
    /**
     * Create a new component instance.
     */
    public $members;
    public function __construct()
    {
        $this->members = Member::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fronts.front-members');
    }
}
