<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class ButtonOutline extends Component
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
    <!-- Very little is needed to make a happy life. - Marcus Antoninus -->
</div>
blade;
    }
}
