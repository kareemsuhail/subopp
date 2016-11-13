<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobsRequest extends FormRequest
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
            'title' => 'required',
            'user_id' => 'required',
            'price' => 'required|integer',
            'length' => 'required|integer',
            'description' => 'required',
            'specialty' => 'required',
            'skills' => 'required',
            'file' => 'max:51200',
            
        ];
    }
}
