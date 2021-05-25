<?php

namespace App\View\Components\Tables;

use Illuminate\View\Component;

class Table extends Component
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
<div class="table-responsive py-3">
	<table class="table table-centered table-nowrap mb-0 rounded">
		<thead class="thead-light">
			<tr>
				{{ $thead }}
			</tr>
		</thead>
		<tbody>
			{{ $tbody }}
		</tbody>
	</table>
</div>
blade;
    }
}
