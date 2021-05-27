<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Button extends Component
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
<button {{ $attributes->merge(['class' => 'btn', 'type' => '']) }}>
	{{ $text }}
</button>
blade;
    }
}
