<?php

namespace App\View\Components\Breadcrumbs;

use Illuminate\View\Component;

class BreadcrumbItemActive extends Component
{
    public $text;
	
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<li class="breadcrumb-item active" aria-current="page">{{ $text }}</li>
blade;
    }
}
