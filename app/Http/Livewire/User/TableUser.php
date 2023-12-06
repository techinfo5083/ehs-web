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
        $this->alert('warning', 'Peringatan!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'text' => 'Yakin Ingin Hapus Data Ini?',
            'showConfirmButton' => true,
            'onConfirmed' => User::find($id)->delete(),
            'confirmButtonText' => 'OK',
            'showDenyButton' => false,
            'onDenied' => '',
            'denyButtonText' => 'Batal',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);


        // User::find($id)->delete();

    }

    public function getUserId($id)
    {
        $this->statusUpdate = true;
        $user = User::find($id);
        $this->emit('getUserId', $user);
    }
}
