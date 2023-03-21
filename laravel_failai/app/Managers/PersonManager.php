<?php

namespace App\Managers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PersonManager
{
    public function createPerson(Request $request): Person //metodas priima request argumenta (HTTP užklausa)
    {
        DB::beginTransaction(); //leidžia atikti keletą pakeitimų db
        // ir juos atvaizduoti kaip viena logiska vieneta

        $user = User::create([ //Sukuriamas naujas "User" objektas, naudojant $request duomenis
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make(Str::random(8)),   //  Slaptažodis užšifruojamas
        ]);

        $personArray = $request->all() + ['user_id' => $user->id];//Gauti visi $request duomenys ir pridėti naujojo vartotojo ID.
        // Sujungti duomenys priskiriami $personArray kintamajam.

        $person = Person::create($personArray);//Sukuriamas naujas "Person" objektas, naudojant $personArray duomenis.

        DB::commit();//Naujasis "Person" objektas yra išsaugomas duomenų bazėje.

        return  $person;//gražinamas sukurtas person objektas
    }
}
