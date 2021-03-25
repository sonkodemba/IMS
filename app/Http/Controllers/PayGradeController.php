<?php

namespace App\Http\Controllers;

use App\Models\PayGrade;
use Illuminate\Http\Request;

class PayGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = PayGrade::latest() -> simplePaginate(5);
        return view('pay-grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pay-grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #get the validated rules from the corresponding model
        request() -> validate(PayGrade::$rules);
        PayGrade::create($request -> all());
        return redirect() -> route('pay-grades.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayGrade  $payGrade
     * @return \Illuminate\Http\Response
     */
    public function show(PayGrade $payGrade)
    {
        return view('pay-grades.show', compact('payGrade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayGrade  $payGrade
     * @return \Illuminate\Http\Response
     */
    public function edit(PayGrade $payGrade)
    {
        return view('pay-grades.edit', compact('payGrade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayGrade  $payGrade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayGrade $payGrade)
    {
        $payGrade -> update($request -> all());
        return redirect() -> route('pay-grades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayGrade  $payGrade
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayGrade $payGrade)
    {
        #
        #Delete by the Grade ID,
        #
        $payGrade -> delete();
        return redirect() -> route('pay-grades.index');
    }
}
