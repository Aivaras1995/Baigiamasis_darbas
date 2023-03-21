<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('login'); //Jei user'is nepraeina autentifikacijos
            //yra gražinamas į logino puslapi.
        }

        $user = Auth::user(); //funkcija, kuri grąžina prisijungusio vartotojo objektą
        // su visais jo duomenimis. Vartotojo objektas priskiriamas kintamajam $user.
        $roles = explode('|', $role); //dalijamas tekstas pagal '|' simbolį ir grąžinamas masyvas su atskirtais vaidmenimis.
        // Masyvas priskiriamas kintamajam $roles.


        if (in_array($user->role, $roles)) { // patikrina, ar prisijungusio vartotojo vaidmuo
            // yra $roles masyve
            return $next($request); // leidžiama tęsti užklausos gavimą
            // ir perduoti užklausą kitam tarpininkui arba kontroleriui
        }
        return redirect('home');
    }
}
