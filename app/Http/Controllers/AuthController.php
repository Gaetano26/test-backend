<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegistrationRequest $request)
    {

        // Creazione dell'utente
        $user = new User([
            'name' => $request->validated('name'),
            'surname' => $request->validated('surname'),
            'slug' => Str::slug($request->validated('name') . '-' . $request->validated('surname')),
            'email' => $request->validated('email'),
            'password' => Hash::make($request->validated('password')),
        ]);

        $user->save();







        // Restituisci una risposta di successo
        return response()->json([
            'message' => 'Registrazione avvenuta con successo',
        ], 201);
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'utente è stato autenticato con successo
            $user = Auth::user();
            return response()->json(['message' => 'Autenticazione avvenuta con successo', 'user' => $user]);
        }

        // Se l'autenticazione fallisce, restituisci un messaggio di errore
        return response()->json(['message' => 'Credenziali non valide'], 401);
    }






}
