<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class FormUser extends Component
{
    public $nik;
    public $name;
    public $role;
    public $password;

    public $statusUpdate = false;

    use LivewireAlert;

    public function render()
    {
        return view('livewire.user.form-user');
    }

    private function clearInput()
    {
        $this->nik = null;
        $this->name = null;
        $this->role = null;
        $this->password = null;
    }
    public function store()
    {
        $this->validate([
            'nik'       => 'required|unique:users|min:5|max:255',
            'name'      => 'required',
            'role'      => 'required',
            'password'  => 'required|min:8|max:255'
        ]);

        $user = user::create(
            [
                'nik' => $this->nik,
                'name' => $this->name,
                'role' => $this->role,
                'password' => Hash::make($this->password),
            ]
        );
        $this->clearInput();
        $this->emit('loadDataUsers', $user);
    }
}
