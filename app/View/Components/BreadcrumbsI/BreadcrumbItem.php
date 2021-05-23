<?php

namespace App\View\Components\Breaddcrumb;

use Illuminate\View\Component;

class BreadcrumbItem extends Component
{
	public $route, $text;
	
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $text)
    {
        $this->route = $route;
	   $tjhis->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<li class="breadcrumb-item">
	<a href="{{ $route }}">{{ $text }}</a>
</li>
blade;
    }
}
