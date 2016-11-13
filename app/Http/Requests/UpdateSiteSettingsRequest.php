<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiteSettingsRequest extends FormRequest
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
            'name' => 'required|unique:site_settings,name,'.$this->route('sitesetting'),
            'language_id' => 'required',
            'meta_tag' => 'required',
            'url' => 'required|unique:site_settings,url,'.$this->route('sitesetting'),
            
        ];
    }
}
