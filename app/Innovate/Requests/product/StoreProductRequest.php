<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 5/23/2016
 * Time: 3:37 AM
 */

namespace Innovate\Requests\product;


class StoreProductRequest extends Request  {

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
     * @return array
     * @internal param InnovateImageUploadContract $image
     */
    public function rules()
    {
        $rules=  [
            "meta_title" => 'required|min:3',
            "meta_description" => 'required|min:10',

            "image" => 'required',
            "name_en" => 'required',
            "description_en" => 'required',
        ];

        if (Re::has('status')) {
            $rules['status'] = 'required';
        }

        return $rules ;
    }
}