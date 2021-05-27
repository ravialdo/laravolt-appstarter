<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class SelectInput extends Component
{
	public $label, $name;
	
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name)
    {
        $this->label = $label;
	   $this->name = $name;
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
	<label class="my-1 me-2">{{ $label }}</label>
	<select class="form-select @error($name) is-invalid @enderror" name="{{ $name }}">
		{{ $slot }}
	</select>
	<div class="invalid-feedback">
		@error($name)
			{{ $message }}
		@enderror
	</div>
</div>
blade;
    }
}
