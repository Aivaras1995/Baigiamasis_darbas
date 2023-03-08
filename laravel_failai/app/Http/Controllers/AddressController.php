<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();

        return view('admin.address.index', compact('addresses'));    }

    public function create()
    {
        $users = User::all();
        return view('admin.address.create', compact('users'));
    }

    public function store(AddressRequest $request)
    {
        $address = Address::create($request->all());
        return redirect()->route('addresses.show', $address);
    }

    public function show(Address $address)
    {
        return view('admin.address.show', ['address' => $address]);
    }

    public function edit(Address $address)
    {
        return view('admin.address.edit', compact('address'));
    }

    public function update(AddressRequest $request, Address $address)
    {
        $address->update($request->all());
        return redirect()->route('address.show', $address);
    }

    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('admin.address.index');
    }
}
