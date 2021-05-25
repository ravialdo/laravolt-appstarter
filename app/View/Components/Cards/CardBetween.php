<?php

namespace App\View\Components\Cards;

use Illuminate\View\Component;

class CardBetween extends Component
{
	public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div class="card border-light shadow-sm">
	<div class="card-header border-bottom border-light d-flex justify-content-between">
     	<h2 class="h5 mb-0">{{ $title }}</h2>
			{{ $between }}
     </div>
     <div class="card-body">
        {{ $slot }}
     </div>
 </div>
blade;
    }
}
