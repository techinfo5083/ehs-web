<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UpdateUser extends Component
{
    public $nik;
    public $name;
    public $role;
    public $password;
    public $userId;
    public $statusUpdate = true;

    protected $listeners = [
        'getUserId'
    ];
    public function render()
    {
        return view('livewire.user.update-user');
    }

    public function getUserId($user)
    {
        $this->nik = $user['nik'];
        $this->name = $user['name'];
        $this->role = $user['role'];
        $this->password = $user['password'];
        $this->userId = $user['id'];
    }
}
