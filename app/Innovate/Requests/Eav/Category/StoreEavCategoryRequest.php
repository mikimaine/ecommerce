<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/31/2016
 * Time: 3:49 PM
 */

namespace Innovate\Requests\Eav\Category;

use App\Http\Requests\Request;

class StoreEavCategoryRequest extends Request {

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
            'attribute_set_name'    => 'required|min:3|unique:product_attribute_category'
        ];
    }
}