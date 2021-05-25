<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reserv;
use Livewire\WithPagination;

class ReservForm extends Component
{
    public $name;
    public $number;
    public $service;
    public $date;
    public $time;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function submitReserv()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:5',
            'number' => 'required|min:4',
            'service' => 'required|min:8',
            'time' => 'required',
            'date' => 'required',
        ]);
   
        Reserv::create($validatedData);

        $this->reset(['name', 'number', 'service', 'date', 'time']);
        session()->flash('message', 'Rezervacija sėkmingai sukurtas!');
    }
    public function render()
    {
        return view('livewire.reserv-form', [
            'reservs' => Reserv::all()->sortByDesc('date'),
            ]);
    }
}
