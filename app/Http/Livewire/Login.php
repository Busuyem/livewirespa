<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.login');
    }

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function loginUser()
    {
       $this->validate();

       if(Auth::attempt(['email'=> $this->email, 'password'=>$this->password])){
           session()->flash('success', 'You have logged in successfully!');
           return redirect()->route('home');
       }else{
           return back();
       }

    }
}
