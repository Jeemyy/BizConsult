<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InputLabelv1 extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $type, public string $locale, public string $name='', public string $value='')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-labelv1');
    }
}
