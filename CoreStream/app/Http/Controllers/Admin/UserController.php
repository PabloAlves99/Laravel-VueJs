<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function registration()
    {
        $users = User::paginate(10);

        return Inertia::render('Admin/Users/UsersRegistration', [
            'users' => $users,
        ]);
    }
}
