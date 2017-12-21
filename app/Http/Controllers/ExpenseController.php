<?php

namespace App\Http\Controllers;

use App\City;
use App\Expense;
use App\Http\Requests\ExpenseRequest;
use App\State;
use App\User;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all()->get();
        return view('expense');
    }

    public function showExpenseInput(){
        $expenses = Expense::where('type', '=', 1)->get();
        return view('expense.inputlist');
    }

    public function showExpenseOutput(){
        $expenses = Expense::where('type', '=', 2)->get();
        return view('expense.outputlist');
    }

    public function input()
    {
        $cities = City::all();
        $states = State::all();
//        $users = User::all();
        return view('expense.input')->with('cities', $cities, 'states', $states);
//        return view('expense.input')->with('cities', $cities, 'states', $states, 'users', $users);
    }

    public function storeInput(ExpenseRequest $request){
        dd($request);
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//            'cpf' => $data['cpf'],
//            'rg' => $data['rg'],
//            'type' => $data['type'],
//            'dtbirthday'=> $data['dtbirthday']
//        ]);
    }

    public function output()
    {
        $users = User::all();
        return view('expense.output');
    }


    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        return view('expenses.edit',compact('expense'));
    }

    public function destroy($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();
        return redirect()->route('expenses.index')->with('alert-success','Expense has been deleted!');
    }
}
