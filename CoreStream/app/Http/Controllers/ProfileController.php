<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request, User $user): Response
    {
        return Inertia::render('Profile/Edit', [
            'loggedInUser' => $request->user(), // O usuário logado
            'user' => $user, // O usuário a ser editado
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, User $user)
    {
        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit', $user->id)->with(
        'flash',
        [
            'success' => 'Perfil atualizado com sucesso!'
        ]
    );
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        if ($user->id === $request->user()->id){

            Auth::logout();

            $request->user()->delete();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return Redirect::to('/')->with(
                'flash',
                [
                    'success' => 'Conta excluída com sucesso!'
                ]
            );
        } else {
            $user->delete();

            return Redirect::to('admin/registered')->with(
                'flash',
                [
                    'success' => 'Usuário excluído com sucesso!'
                ]
            );
        }
    }
}
