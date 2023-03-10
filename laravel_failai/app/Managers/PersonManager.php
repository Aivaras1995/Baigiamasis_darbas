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
    public function createPerson(Request $request): Person
    {
        DB::beginTransaction();

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make(Str::random(8)),   // random password
        ]);

        $personArray = $request->all() + ['user_id' => $user->id];

        $person = Person::create($personArray);

        DB::commit();

        return  $person;
    }
}
