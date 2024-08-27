<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Varzybos;
use Livewire\WithPagination;

class VarzybuTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.varzybu-table',[
            'lines'=>Varzybos::orderBy('division_id', 'desc')->simplePaginate(30),
        ]);
    }
}
