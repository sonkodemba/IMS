<?php

namespace App\Http\Controllers;

use App\Models\LeaveApplication;
use Illuminate\Http\Request;

class LeaveApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $leave_applications = LeaveApplication::latest() -> simplePaginate(5);
        return view('leave-applications.index', compact('leave_applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('leave-applications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // +-------------------+-----------------+------+-----+---------+----------------+
    // | Field             | Type            | Null | Key | Default | Extra          |
    // +-------------------+-----------------+------+-----+---------+----------------+
    // | id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    // | staff_id          | bigint unsigned | NO   | MUL | NULL    |                |
    // | leave_category_id | bigint unsigned | NO   |     | NULL    |                |
    // | start_date        | date            | NO   |     | NULL    |                |
    // | end_date          | date            | NO   |     | NULL    |                |
    // | descriptions      | longtext        | NO   |     | NULL    |                |
    // | deleted_at        | timestamp       | YES  |     | NULL    |                |
    // | created_at        | timestamp       | YES  |     | NULL    |                |
    // | updated_at        | timestamp       | YES  |     | NULL    |                |
    // +-------------------+-----------------+------+-----+---------+----------------+


        request() -> validate(LeaveApplication::$rules);
        LeaveApplication::create($request -> all());
        return redirect() -> route('leave-applications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeaveApplication  $leaveApplication
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveApplication $leaveApplication)
    {
        return view('leave-applications.show', compact('leaveApplication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeaveApplication  $leaveApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaveApplication $leaveApplication)
    {
        return view('leave-applications.edit', compact('leaveApplication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LeaveApplication  $leaveApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaveApplication $leaveApplication)
    {

        $leaveApplication -> update($request -> all());
        return redirect() -> route('leave-applications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaveApplication  $leaveApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveApplication $leaveApplication)
    {
        $leaveApplication -> delete();
        return redirect() -> route('leave-applications.index');
    }
}
