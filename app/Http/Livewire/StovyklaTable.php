<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Stovyklos;
use Livewire\WithPagination;

class StovyklaTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.stovykla-table',[
            'lines'=>Stovyklos::orderBy('id', 'desc')->simplePaginate(12),
        ]);
    }
}
