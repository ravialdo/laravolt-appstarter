<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;

class ButtonModal extends Component
{
	public $target;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($target)
    {
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<button type="button" data-bs-toggle="modal" data-bs-target="{{ $target }}" {{ $attributes->merge(['class' => 'btn btn-block btn-primary mb-3']) }}>{{ $slot }}</button>
blade;
    }
}
