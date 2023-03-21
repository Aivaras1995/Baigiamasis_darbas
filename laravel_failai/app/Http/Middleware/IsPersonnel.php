<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IsPersonnel
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        if (!auth()->user()?->isPersonnel()) {//sąlyga patikrina, ar prisijungęs vartotojas yra "personnel".
            return redirect()->route('home')->with('error', __('Neturite leidimo prisijungti prie šio puslapio'));//Jei vartotojas nėra "personnel",
            // ši eilutė nukreipia vartotoją į namų puslapį
        }

        return $next($request);//Jei vartotojas yra "personnel",
        // ši eilutė perduoda užklausą į kitą middleware sluoksnį arba kontrolerį
    }
}
