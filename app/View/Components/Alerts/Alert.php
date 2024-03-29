<?php

namespace App\View\Components\Alerts;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
</div>
blade;
    }
}
