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
        'loadDataUserUpdate',
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
        $this->alert('success', 'User '. $user['name'] .' Berhasil Ditambahkan!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }


    public function loadDataUserUpdate($user)
    {
        $this->statusUpdate = false;
        $this->alert('success', 'Data '. $user['name'] .' Berhasil diubah!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function destroy($id)
    {
        dd($id);
        // user::find($id)->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'User Berhasil dihapus'
        ]);
        redirect('/dashboard/user');
    }

    public function getUser($id)
    {
        $this->statusUpdate = true;
        $user = user::find($id);
        // dd($user);
        $this->emit('getUser', $user);
    }
}
