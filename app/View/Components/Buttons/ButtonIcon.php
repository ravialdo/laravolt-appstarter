<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class ButtonIcon extends Component
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
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
</div>
blade;
    }
}
