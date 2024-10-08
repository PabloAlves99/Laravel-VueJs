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
        return Inertia::render(component: 'Profile/Edit', props: [
            'loggedInUser' => $request->user(),
            'user' => $user,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, User $user): RedirectResponse
    {
        $user->fill(attributes: $request->validated());

        if ($user->isDirty(attributes: 'email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route(route: 'profile.edit', parameters: $user->id)->with(
            key: 'flash',
            value: [
                'success' => 'Perfil atualizado com sucesso!'
            ]
        );
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request, User $user): RedirectResponse
    {
        $request->validate(rules: [
            'password' => ['required', 'current_password'],
        ]);

        if (!$user) {
            return Redirect::to(path: 'admin/registered')->with(
                key: 'flash',
                value: [
                    'error' => 'Usuário não encontrado!'
                ]
            );
        }

        if ($user->id === $request->user()->id) {

            $user = $request->user();

            Auth::logout();

            $user->delete();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return Redirect::to(path: '/')->with(
                key: 'flash',
                value: [
                    'success' => 'Conta excluída com sucesso!'
                ]
            );
        }

        $user->delete();

        return Redirect::to(path: 'admin/registered')->with(
            key: 'flash',
            value: [
                'success' => 'Usuário excluído com sucesso!'
            ]
        );
    }
}
