<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index');
    }

    public function create()
    {
        return view('payment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $payment = Payment::create($request->all());
        return redirect()->route('payment.show', $payment);
    }

    public function show(Payment $payment)
    {
        return $payment;
    }

    public function edit(Payment $payment)
    {
        return view('payment.edit', compact('payment'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $payment->update($request->all());
        return redirect()->route('payment.show', $payment);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payment.index');
    }
}
