<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.components.navbar');
    }

    public function logout()
    {
        Auth::logout();

        session()->flash('success', "You are logged out successfully");

        return redirect()->route('login');
    }
}
