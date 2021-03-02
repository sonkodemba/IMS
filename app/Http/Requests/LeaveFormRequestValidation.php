<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaveFormRequestValidation extends FormRequest
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
        /*
        +-------------------+-----------------+------+-----+---------+----------------+
        | Field             | Type            | Null | Key | Default | Extra          |
        +-------------------+-----------------+------+-----+---------+----------------+
        | id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | staff_id          | bigint unsigned | NO   | MUL | NULL    |                |
        | leave_category_id | bigint unsigned | NO   |     | NULL    |                |
        | start_date        | date            | NO   |     | NULL    |                |
        | end_date          | date            | NO   |     | NULL    |                |
        | descriptions      | longtext        | NO   |     | NULL    |                |
        | deleted_at        | timestamp       | YES  |     | NULL    |                |
        | created_at        | timestamp       | YES  |     | NULL    |                |
        | updated_at        | timestamp       | YES  |     | NULL    |                |
        +-------------------+-----------------+------+-----+---------+----------------+
        */
        return [
            'staff_id' => 'required',
            'leave_category_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'descriptions' => 'required'
        ];
    }
}
