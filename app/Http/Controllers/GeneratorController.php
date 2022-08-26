<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Validator;

class GeneratorController extends Controller
{
    public function index()
    {
        $transactions = Transaction::latest()->get();
        return view('index', compact('transactions'));
    }

    public function transaction(Request $request)
    {
        $validation = Validator::make($request->all(), ['amount' => 'required', 'tag' => 'required']);

        if($validation->fails())
        {
            dd($validation->first());
        }

        $transaction = Transaction::create([
            'amount' => $request->amount,
            'tag' => $request->tag,
        ]);

        return \redirect()->route('home');
    }
}
