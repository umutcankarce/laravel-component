<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    public const TYPES = ["text","checkbox","tel","number","color","radio","file","password","email"];

    public function __construct(
        public string $type,
        public string $name,
        public string $class,
        public string $placeholder,
        public string $id,
        public string $label,
        public string $required,
        public string $value="",
        public string $autocomplete="")
    {


    }

    public function render(): View|Closure|string
    {
        if(in_array($this->type,self::TYPES))
        {
            return view('components.input');
        }
        return "";
    }
}