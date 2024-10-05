<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailUpdateRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class EmailController extends Controller
{
    public function edit(Request $request, User $user): Response
    {
        return Inertia::render('Email/Edit', [
            'user' => $user,
        ]);
    }

    public function update(EmailUpdateRequest $request, User $user)
    {
        $user->email = $request->input('email');
        $user->email_verified_at = null;

        $user->save();

        return Redirect::route(
            'profile.edit',
            $user->id
        )->with(
            'flash',
            [
                'success' => 'Email atualizado com sucesso!'
            ]
        );
    }
}
