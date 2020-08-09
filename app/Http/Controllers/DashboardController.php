<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
<<<<<<< HEAD

    public function index()
    {
        return view('pages.dashboard');
=======
    
    public function index() {
        $user_id = Auth::user()->id;
        $moneytotal = Money::where('user_id', $user_id)->first();
        $want = Money::where('user_id', $user_id)->where('type',"Want")->first();
        $essential = Money::where('user_id', $user_id)->where('type',"Essential")->first();
        $saving = Money::where('user_id', $user_id)->where('type','Saving')->first();
        $bank = Money::where('user_id', $user_id)->where('type',"Bank")->first();

        $items = Transaction::orderBy('date','DESC')->orderBy('time','DESC')->take(10)->get();

        $pie = [
            'want'=>Transaction::where('type','Want')->sum('price'),
            'essential'=>Transaction::where('type','Essential')->sum('price'),
            'store'=> $bank ->amount
        ];
        return view('pages.dashboard',[
            'moneytotal' => $moneytotal,
            'want' => $want,
            'essential' => $essential,
            'saving' => $saving,
            'bank' => $bank,
            'pie' => $pie,
            'items' => $items
        ]);
>>>>>>> 914e147251b7721e89cc67ca71bc0295410c47d0
    }
}
