<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'tittle' => 'Dashboard | User',
            'DataUser' => user::all()
        ];

        return view('admin.user', $data);
    }
}
