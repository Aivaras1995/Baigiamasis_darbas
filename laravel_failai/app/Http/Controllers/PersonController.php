<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Managers\PersonManager;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __construct(protected PersonManager $manager)
    {
    }
    public function index()
    {
        $persons = Person::all();

        return view('admin.person.index', compact(var_name: 'persons'));
    }

    public function create()
    {
        return view('admin.person.create');
    }

    public function store(PersonRequest $request)
    {
        $person = $this->manager->createPerson($request);
        return redirect()->route('persons.show', $person);
    }

    public function show(Person $person)
    {
        return view ('admin.person.show', ['person'=>$person]);
    }

    public function edit(Person $person)
    {
        return view('admin.person.edit', compact('person'));
    }

    public function update(PersonRequest $request, Person $person)
    {
        $person->update($request->all());
        return redirect()->route('persons.show', $person);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persons.index');
    }
}
