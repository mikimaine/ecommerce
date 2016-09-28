<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/31/2016
 * Time: 3:48 PM.
 */
namespace Innovate\Requests\Eav\Attribute;

use App\Http\Requests\Request;

class StoreEavAttributeRequest extends Request
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
            'title'                  => 'required|min:3',
            'product_category_id'    => 'required',
            'datatype'               => 'required',
        ];
    }
}
