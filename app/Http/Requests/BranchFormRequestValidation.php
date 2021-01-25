<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchFormRequestValidation extends FormRequest
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
        */
        'location_id' => 'required',
        'code' => 'required|min:3|max:10',
        'name' => 'required| min:3',
        'mobile'=> 'required| min:6|unique',
        'address' => 'required| max:200'
        ];

    }

    public function messages()
    {
        # code...
    }
}
