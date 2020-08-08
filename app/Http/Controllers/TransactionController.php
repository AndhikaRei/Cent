<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $type = $request->type;
        $items = Transaction::where('user_id',$user_id)->where('type',$type)->get();
        return view("pages.$type.index", [
            'items'=>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user_id = Auth::user()->id;
        $type = $request->type;
        if ($type =="Total") {
            $money = Money::where('user_id', $user_id)->first();
        }else {
            $money = Money::where('user_id', $user_id)->where('type',$type)->first();
        }
        $saving = Money::where('user_id', $user_id)->where('type','Saving')->first();
        return view("pages.$type.create", [
            'money' => $money,
            'saving' => $saving
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {
        $user_id = Auth::user()->id;
        $data = $request->all();
        $data['user_id'] = $user_id;

        $moneytotal = Money::where('user_id', $user_id)->first();
        $money = Money::where('user_id', $user_id)->where('type',$request->type)->first();
        $saving = Money::where('user_id', $user_id)->where('type','Saving')->first();
        if ($money->amount < $request->price){
            if(($money->amount + $saving->amount) < $request->price) {
                return redirect()->back()->with(['moneyerror'=>'You have insufficient money']);
            } else {
                $saving->update(['amount'=> $money->amount + $saving->amount - $request->price]);
                $money->update(['amount'=>0]);
                $moneytotal->update(['amount'=>$moneytotal->amount - $request->price]);
                $data['status'] = 'Failed';
            }
        } else {
            $money->update(['amount'=> $money->amount - $request->price ]);
            $moneytotal->update(['amount'=>$moneytotal->amount - $request->price]);
            $data['status'] = 'Success';
        }
        Transaction::create($data);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::findOrFail($id);
        $type = $item->type;
        return view("pages.$type.show",[
            'item'=> $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaction::findOrFail($id);
        $item->delete();
        return redirect()->route('dashboard');
    }
}
