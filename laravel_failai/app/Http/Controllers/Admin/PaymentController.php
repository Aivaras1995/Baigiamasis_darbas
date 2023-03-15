<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PaymentRequest;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('admin.payment.index', compact(var_name: 'payments'));
    }

    public function create()
    {
        return view('admin.payment.create');
    }

    public function store(PaymentRequest $request)
    {
        $payment = Payment::create($request->all());
        return redirect()->route('payments.show', $payment);
    }

    public function show(Payment $payment)
    {
        return view('admin.payment.show', ['payment' => $payment]);
    }

    public function edit(Payment $payment)
    {
        return view('admin.payment.edit', compact('payment'));
    }

    public function update(PaymentRequest $request, Payment $payment)
    {
        $payment->update($request->all());
        return redirect()->route('payment.show', $payment);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payment.index');
    }
}
