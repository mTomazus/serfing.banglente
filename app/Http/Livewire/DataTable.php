<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pamokos;
use App\Models\Contact;
use App\Models\Stovyklos;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.data-table',[
            'lines'=>Pamokos::all(),
            'lines2'=>Contact::simplePaginate(5),
            'lines3'=>Stovyklos::all(),
        ]);
    }
}
