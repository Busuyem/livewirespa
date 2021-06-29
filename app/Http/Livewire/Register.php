<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.register');
    }

    /*
    //Alternative validation rule
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
    ];

    */

    public function submitForm()
    {
       $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        
        User::create($data);

        session()->flash('success', 'You have successfully registered. You can now login');
        
        return redirect()->route('login');



    }
}
