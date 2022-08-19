<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Coupon;
use Livewire\WithPagination;

class CouponForm extends Component
{
    public $name;
    public $number;
    public $service;
    public $price;
    public $email;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function submitCoupon()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:5',
            'number' => 'required|min:4',
            'service' => 'required|min:8',
            'price' => 'required|min:2',
            'email' => 'required|email',
        ]);
   
        Coupon::create($validatedData);

        $this->reset(['name', 'email', 'number']);
        session()->flash('message', 'Kuponas sėkmingai sukurtas!');
    }
    public function render()
    {
        return view('livewire.coupon-form', [
            'coups' => Coupon::all()->sortByDesc('created_at'),
        ]);
    }
    public function destroy($id)
    {
        // delete
        $coupon = Coupon::find($id);
        $coupon->delete();

        session()->flash('message', 'Kuponas sėkmingai ištrintas!');
    }
}
