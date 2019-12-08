<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class UploadProductsRequest extends FormRequest
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
            'title' => 'required|min:2|max:200',
            'description' => 'required',
            'price' => 'required|integer',
            // 'compare_price' => 'integer',
            // 'qty' => 'integer',
            'images' => 'required'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'The <u>Title</u> is required',
            'description.required'  => 'The <u>Description</u> is required',
            'price.required'  => 'The <u>Price</u> is required',
            'qty.required'  => 'The <u>Quantity</u> is required',
            'images.required'  => 'The <u>Images</u> is required',
        ];
    }
}
