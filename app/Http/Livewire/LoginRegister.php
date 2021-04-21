<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use Hash;
use App\Models\User;

class LoginRegister extends Component
{
    public $users, $email, $password, $type, $name;
    public $registerForm = false;

    public function render()
    {
        return view('livewire.login-register');
    }

    private function isAdmin() {
        if (Auth::user() && Auth::user()->type == 'admin') {
            return true;           
        } 
        return false; 
    }

    public function redirectPath() {

        if ($this->isAdmin() == true) {
            return redirect('admin');
        }

        return redirect('user');

    }

    private function resetInputFields(){
        $this->reset(['password', 'email', 'name']);
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            session()->flash('message', "You are Login successful.");
            return $this->redirectPath();
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('./');
    }

    public function registerUser()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $this->password = Hash::make($this->password); 

        User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        session()->flash('message', 'Your register successfully.');

        $this->resetInputFields();

        return redirect()->route('login');

    }

}