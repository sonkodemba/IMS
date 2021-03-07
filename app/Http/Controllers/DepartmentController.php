<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::latest() -> simplePaginate(5);
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, DepartmentFormRequestValidation $department)
     {
        /* 
        +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | code         | varchar(255)    | NO   | UNI | NULL    |                |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | deleted_at   | timestamp       | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+
        */
        $department -> code = $request['code'];
        $department -> name = $request['name'];
        $department -> descriptions = $request['descriptions'];
        $department -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepartmentFormRequestValidation $department)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
