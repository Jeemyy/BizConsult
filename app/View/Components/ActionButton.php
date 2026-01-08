<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ActionButton extends Component
{
    /**
     * Create a new component instance.
     */
    public string $color;
    public string $text;
    public function __construct(public string $href, public string $type)
    {
        switch($type){
            case 'create_about':
                $this->color = 'primary';
                $this->text = __("keywords.add_new_about");
                break;
            case 'create_service':
                $this->color = 'primary';
                $this->text = __("keywords.add_new_service");
                break;
            case 'create_feature':
                $this->color = 'primary';
                $this->text = __("keywords.add_new_feature");
                break;
            case 'create_testimonial':
                $this->color = 'primary';
                $this->text = __("keywords.add_new_testimonial");
                break;
            case 'create_company':
                $this->color = 'primary';
                $this->text = __("keywords.add_new_company");
                break;
            case 'create_member':
                $this->color = 'primary';
                $this->text = __("keywords.add_new_member");
                break;
            case 'create':
                $this->color = 'primary';
                $this->text = __("keywords.add_new");
                break;
            case 'show':
                $this->color = 'success';
                $this->text = '<i class="fe fe-eye"></i>';
                break;
            case 'edit':
                $this->color = 'warning ';
                $this->text = '<i class="fe fe-edit"></i>';
                break;
            case 'delete':
                $this->color = 'danger';
                $this->text = '<i class="fe fe-trash-2"></i>';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
