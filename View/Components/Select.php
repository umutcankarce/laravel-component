<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $dataValues;
    public $label;
    public $name;
    public $class;
    public $dataOptionValueName;
    public $dataOptionTitle;
    public $selectedOptionId;


    public function __construct($dataValues,$label,$name,$dataOptionValueName,$dataOptionTitle,$class,$selectedOptionId=null)
    {
        $this->dataOptionValueName = $dataOptionValueName;
        $this->dataValues          = $dataValues;
        $this->dataOptionTitle     = $dataOptionTitle;
        $this->selectedOptionId    = $selectedOptionId;
        $this->label = $label;
        $this->name  = $name;
        $this->class = $class;
    }


    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}