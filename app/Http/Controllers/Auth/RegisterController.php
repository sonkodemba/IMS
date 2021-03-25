<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
    // +-----------------------+-----------------+------+-----+---------+----------------+
    // | Field                 | Type            | Null | Key | Default | Extra          |
    // +-----------------------+-----------------+------+-----+---------+----------------+
    // | id                    | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    // | name                  | varchar(255)    | NO   |     | NULL    |                |
    // | staff_id              | int unsigned    | NO   | UNI | NULL    |                |
    // | social_security_num   | int unsigned    | NO   |     | NULL    |                |
    // | mobile_num            | int unsigned    | NO   | UNI | NULL    |                |
    // | gender_id             | bigint unsigned | NO   | MUL | NULL    |                |
    // | marital_status_id     | bigint unsigned | NO   | MUL | NULL    |                |
    // | department_id         | bigint unsigned | NO   | MUL | NULL    |                |
    // | designation_id        | bigint unsigned | NO   | MUL | NULL    |                |
    // | branch_id             | bigint unsigned | NO   | MUL | NULL    |                |
    // | pay_grade_id          | bigint unsigned | NO   | MUL | NULL    |                |
    // | employee_category_id  | bigint unsigned | NO   | MUL | NULL    |                |
    // | employee_education_id | bigint unsigned | NO   | MUL | NULL    |                |
    // | user_group_id         | bigint unsigned | NO   | MUL | NULL    |                |
    // | profile_img           | mediumtext      | YES  |     | NULL    |                |
    // | email                 | varchar(255)    | NO   | UNI | NULL    |                |
    // | email_verified_at     | timestamp       | YES  |     | NULL    |                |
    // | password              | varchar(255)    | NO   |     | NULL    |                |
    // | remember_token        | varchar(100)    | YES  |     | NULL    |                |
    // | deleted_at            | timestamp       | YES  |     | NULL    |                |
    // | created_at            | timestamp       | YES  |     | NULL    |                |
    // | updated_at            | timestamp       | YES  |     | NULL    |                |
    // +-----------------------+-----------------+------+-----+---------+----------------+
        request() -> validate(User::$rules);
        User::create($request -> all());
        return redirect() -> route('users.index');
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }
}
