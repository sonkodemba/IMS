<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeFormRequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        /*            
        +----------------------+-----------------+------+-----+---------+----------------+
        | Field                | Type            | Null | Key | Default | Extra          |
        +----------------------+-----------------+------+-----+---------+----------------+
        | id                   | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name                 | varchar(255)    | NO   |     | NULL    |                |
        | staff_id             | int unsigned    | NO   | UNI | NULL    |                |
        | gender_id            | bigint unsigned | NO   | MUL | NULL    |                |
        | marital_status_id    | bigint unsigned | NO   |     | NULL    |                |
        | department_id        | bigint unsigned | NO   | MUL | NULL    |                |
        | designation_id       | bigint unsigned | NO   | MUL | NULL    |                |
        | branch_id            | bigint unsigned | NO   | MUL | NULL    |                |
        | social_security_num  | int unsigned    | NO   |     | NULL    |                |
        | pay_grade_id         | bigint unsigned | NO   | MUL | NULL    |                |
        | employee_category_id | bigint unsigned | NO   | MUL | NULL    |                |
        | mobile_num           | int unsigned    | NO   | UNI | NULL    |                |
        | profile_img          | mediumtext      | YES  |     | NULL    |                |
        | deleted_at           | timestamp       | YES  |     | NULL    |                |
        | created_at           | timestamp       | YES  |     | NULL    |                |
        | updated_at           | timestamp       | YES  |     | NULL    |                |
        +----------------------+-----------------+------+-----+---------+----------------+

        */
        'name' => 'required',
        'staff_id' => 'required|unique|min:2',
        'gender_id' => 'required',
        'marital_status_id' => 'required',
        'department_id' => 'required',
        'designation_id' => 'required',
        'branch_id' => 'required',
        'social_security_num' => 'required|unique|min:3',
        'pay_grade_id' => 'required',
        'employee_category_id' => 'required',
        'mobile_num' => 'required|unique|min:7',
        'profile_img' => 'required'

        ];
    }
}
