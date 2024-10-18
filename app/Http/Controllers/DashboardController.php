<?php

namespace App\Http\Controllers;

use App\Models\Rubro;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard() {
        $rubros = Rubro::all();

        $user = Auth::user();
        $auth_user = User::where('id', $user->id)->first();
        if($auth_user && $auth_user->primer_login == true) {
            $auth_user->primer_login = false;
            $auth_user->save();
            return view('pages.configuracion-inicial', compact('rubros'));
        } else {
            return view('dashboard');
        }
    }

    public function updateRubro($rubro_id) {
        $user = Auth::user();

        $auth_user = User::where('id', $user->id)->first();
        $auth_user->rubro_id = $rubro_id;
        $auth_user->save();

        return redirect()->route('dashboard')->with('success', 'Rubro establecido correctamente.');
    }
}
