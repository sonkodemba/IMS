<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaveCategoryFormRequestValidation extends FormRequest
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
        +------------------+-----------------+------+-----+---------+----------------+
        | Field            | Type            | Null | Key | Default | Extra          |
        +------------------+-----------------+------+-----+---------+----------------+
        | id               | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name             | varchar(255)    | NO   | UNI | NULL    |                |
        | duration_in_days | int unsigned    | NO   |     | NULL    |                |
        | descriptions     | longtext        | YES  |     | NULL    |                |
        | deleted_at       | timestamp       | YES  |     | NULL    |                |
        | created_at       | timestamp       | YES  |     | NULL    |                |
        | updated_at       | timestamp       | YES  |     | NULL    |                |
        +------------------+-----------------+------+-----+---------+----------------+
        */
        return [
            'name' => 'required|unique',
            'duration_in_days' => 'required',
            'descriptions' => 'required'
        ];
    }
}
