<?php

namespace App\View\Components\Breadcrumbs;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $breadcrumb;
	
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-text-light breadcrumb-{{ $breadcrumb }} text-white">
		{{ $slot }}
	</ol>
</div>
blade;
    }
}
