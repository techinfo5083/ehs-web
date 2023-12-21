<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UpdateUser extends Component
{
    public $name;
    public $role;
    public $userId;
    public $statusUpdate = true;

    protected $listeners = [
        'getUser' => 'showUser'
    ];

    use LivewireAlert;

    public function render()
    {
        return view('livewire.user.update-user');
    }

    private function clearInput(){
        $this->name = "";
        $this->role = "";
    }
    public function showUser($user)
    {
        $this->name = $user['name'];
        $this->role = $user['role'];
        $this->userId = $user['id'];
    }

    public function update()
    {
        $this->validate([
            'name'      => 'required',
            'role'      => 'required',
        ]);

        if ($this->userId) {
            $user = user::find($this->userId);
            $user->update([
                'name' => $this->name,
                'role' => $this->role,
            ]);
        }

        $this->clearInput();
        $this->emit('loadDataUserUpdate', $user);
    }
}
