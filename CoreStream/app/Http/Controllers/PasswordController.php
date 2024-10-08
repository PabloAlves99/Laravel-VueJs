<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate(rules: [
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $user = User::findOrFail(id: $id);
        $user->update([
            'password' => Hash::make(value: $validated['password']),
        ]);

        return back()->with(
            key: 'flash',
            value: [
                'success' => 'Senha atualizado com sucesso!'
            ]
        );
    }
}
