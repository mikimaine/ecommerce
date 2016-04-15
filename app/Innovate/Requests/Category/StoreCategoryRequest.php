<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/14/2016
 * Time: 7:35 PM
 */

namespace Innovate\Requests\Category;


use Illuminate\Http\Request  as Re;

use App\Http\Requests\Request;
use Illuminate\Support\Str;
use Innovate\Image\InnovateImageUploadContract;

class StoreCategoryRequest extends Request  {




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
              "meta_keywords" => 'required|min:4',
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