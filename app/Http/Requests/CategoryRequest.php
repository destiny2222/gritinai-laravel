<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CategoryRequest extends FormRequest
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
            'name'=>['required','string']
        ];
    }

    public function createCategory(){
    
        try{
            Category::create([
                'name'=>$this->input('name'),
                'slug'=>Str::slug($this->name),
            ]);
           return true;
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
        
    }
}
