<?php

namespace App\Http\Requests;

use App\Models\Partner;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class PartnerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'image'=>['image','nullable', 'max:300', 'mimes:jpeg,png,jpg,gif,svg'],
            'name'=>['required', 'string'],
        ];
    }

    public function createpartner(){
        try{
            Partner::create([
                'image'=>upload_single_image('partner', 'image'),
                'name'=>$this->input('name'),
            ]);
            return true;
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
