<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;

class Modal extends Component
{
	public $target, $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($target, $title)
    {
        $this->target = $target;
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
<div class="modal fade" id="{{ $target }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="{{ $target }}" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="h6 modal-title">{{ $title }}</h2>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			{{ $slot }}
		</div>
		<div class="modal-footer">
			{{ $footer }}
			<button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal">Tutup</button>
		</div>
	</div>
</div>
</div>
blade;
    }
}
