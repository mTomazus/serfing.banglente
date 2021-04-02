<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pamokos;
use Livewire\WithPagination;

class PamokosTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.pamokos-table',[
            'lines'=>Pamokos::simplePaginate(5),
        ]);
    }
}
