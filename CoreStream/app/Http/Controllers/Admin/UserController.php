<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function registered(): Response
    {
        $users = User::all();

        return Inertia::render(component: 'Admin/Users/UsersRegistered', props: [
            'users' => $users,
        ]);
    }
}
