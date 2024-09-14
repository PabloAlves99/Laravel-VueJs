<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function registered()
    {
        $users = User::all();

        return Inertia::render('Admin/Users/UsersRegistered', [
            'users' => $users,
        ]);
    }
}
