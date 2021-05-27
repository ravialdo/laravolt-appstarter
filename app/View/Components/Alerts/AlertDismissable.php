<?php

namespace App\View\Components\Alerts;

use Illuminate\View\Component;

class AlertDismissable extends Component
{
	public $alert;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($alert)
    {
        $this->alert = $alert;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div class="alert alert-{{ $alert }} alert-dismissible fade show" role="alert">
	<span class="fas fa-bullhorn me-1"></span>
		{{ $slot }}
	<button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
blade;
    }
}
