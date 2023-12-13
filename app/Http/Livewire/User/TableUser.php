<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TableUser extends Component
{
    use LivewireAlert;
    public $statusUpdate = false;

    protected $listeners = [
        'loadDataUsers',
    ];

    public function render()
    {
        $data = [
            'tittle' => 'User',
            'DataUser' => user::all()
        ];
        return view('livewire.user.table-user', $data);
    }

    public function loadDataUsers($user)
    {
    }

    public function destroy($id)
    {
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'User Berhasil dihapus'
        ]);
        // user::find($id)->delete();
    }

    public function getUserId($id)
    {
        $this->statusUpdate = true;
        $user = User::find($id);
        $this->emit('getUserId', $user);
    }
}
