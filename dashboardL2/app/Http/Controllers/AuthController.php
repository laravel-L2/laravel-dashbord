<?php
/* 
    =============== CONTROLLER FOR AUTHENTIFICATION =================
*/

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function inscrire(Request $request) {
        $donnees = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::create([
            'name' => $donnees['name'],
            'email' => $donnees['email'],
            'password' => bcrypt($donnees['password'])
        ]);

        return response([
            'message' => "Created successfully"
        ], 201);
    }

    public function authentifier(Request $request) {
        $donnees = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $user = User::where('email', $donnees['email'])->first();
        if(!$user || !Hash::check($donnees['password'], $user->password)) {
            return response([
                'message' => "Credentials incorrects !"
            ], 401);
        }
        $token = $user->createToken('laravel-ddsjrl')->plainTextToken;

        return response([
            'access_token' => $token
        ], 201);
    }
}
