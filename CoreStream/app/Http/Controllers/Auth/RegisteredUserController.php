<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Admin/Users/UsersRegister');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'login' => ['string', 'max:255'],
            'phone' => ['string', 'max:20'],
            'profile' => ['string', 'max:255', Rule::in(['Adm', 'Advogado', 'Atendente'])],

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'login' => $request->login,
            'phone' => $request->phone,
            'profile' => $request->profile,
        ]);

        event(new Registered($user));

        return redirect()
                    ->route('users.create.register')
                    ->with('flash', [
                        'success' => 'Usuário ' . $user->name . ' cadastrado com sucesso!'
                    ]
                );
    }
}
