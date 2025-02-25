<?php

namespace App\Http\Controllers\API;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{


    public function index()
    {
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|string',
            'role_id' => 'required|integer', Role::unique('role_id'),
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', Password::defaults()]
        ]);

        $user = new User();
        $user->fill($formFields);
        $user->password = bcrypt($formFields['password']); // Hachage du mot de passe
        $user->save();

        return response()->json($user);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function update(Request $request, User $user)
    {
        $formFields = $request->validate([
            'name' => 'string',
            'role_id' => 'required|integer', Role::unique('role_id'),
            'email' => ['string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => ['confirmed', Password::defaults()]
        ]);

        $user->fill($formFields);
        if (isset($formFields['password'])) {
            $user->password = bcrypt($formFields['password']); // Hachage du mot de passe
        }
        $user->save();

        return response()->json($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['success' => 'success']);
    }
}
