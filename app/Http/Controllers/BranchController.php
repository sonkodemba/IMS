<?php

namespace App\Http\Controllers;

use App\Http\Requests\BranchFormRequestValidation;
use App\Models\Branch;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use RealRashid\SweetAlert\Facades\Alert;
use SweetAlert;


class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {  
        
        $branches = Branch::latest() -> simplePaginate(5);
        return view('branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('branches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(BranchFormRequestValidation $request)
    {
    /*
        +-------------+-----------------+------+-----+---------+----------------+
        | Field       | Type            | Null | Key | Default | Extra          |
        +-------------+-----------------+------+-----+---------+----------------+
        | id          | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | location_id | bigint unsigned | NO   | MUL | NULL    |                |
        | code        | varchar(255)    | NO   | UNI | NULL    |                |
        | name        | varchar(255)    | NO   | UNI | NULL    |                |
        | mobile      | int unsigned    | NO   |     | NULL    |                |
        | address     | varchar(255)    | YES  |     | NULL    |                |
        | deleted_at  | timestamp       | YES  |     | NULL    |                |
        | created_at  | timestamp       | YES  |     | NULL    |                |
        | updated_at  | timestamp       | YES  |     | NULL    |                |
        +-------------+-----------------+------+-----+---------+----------------+
        
        @check the validations.
    */          
        $branch = Branch::create([
            'location_id' => $request['location'],
            'code' => $request['code'],
            'name' => $request['name'],
            'mobile' => $request['mobile_num'],
            'address' => $request['address']

        ]);
        return redirect() -> route('branches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return Response
     */
    public function show(Branch $branch)
    {

        return view('branches.show', compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return Response
     */
    public function edit(Branch $branch)
    {
        $findBranch = Branch::find($branch);
        return view('branches.edit',compact('findBranch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return Response
     */
    public function update(BranchFormRequestValidation $request, Branch $branch)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return Response
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
