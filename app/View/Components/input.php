<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public $type;
    public $name;
    public $placeholder;   
    public $inputmode;   
    public function __construct($type, $name, $placeholder, $inputmode)
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->inputmode = $inputmode;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
