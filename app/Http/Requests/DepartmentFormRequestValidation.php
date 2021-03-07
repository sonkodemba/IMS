<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentFormRequestValidation extends FormRequest
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
            'code' => 'required|max:10|min:2|unique',
            'name' => 'required|min:2 |min:50| unique',
            'descriptions' => 'required| min:3| max:255'
        ];
    }

    public function messages(){

        return [
            'code.required' => 'Department Code is Required',
            'code.max' => 'Code required atleast 10 Characters',
            'code.min' => 'Code requires minimum of 2 Characters',
            'code.unique' => 'Code Should be Unique',
            'name.required' => 'Department Name is Required',
            'name.min' => 'Name Requires atleast 2 Characters',
            'name.max' => 'Department Name cannot be More than 50 Characters'
        ];
    }
}
