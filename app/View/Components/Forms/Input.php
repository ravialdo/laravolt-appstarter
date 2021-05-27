<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
	public $label, $type, $name, $placeholder;
	
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $type, $name, $placeholder)
    {
        $this->label = $label;
	   $this->type = $type;
        $this->name = $name;
	   $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div class="mb-3">
	<label class="form-label">{{ $label }}</label>
	<input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" value="{{ old($name) }}" placeholder="{{ $placeholder }}">
	<div class="invalid-feedback">
		@error($name)
			{{ $message }}
		@enderror
	</div>
</div>
blade;
    }
}
