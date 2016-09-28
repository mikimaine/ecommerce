<?php

namespace Innovate\Requests\StaticPage;

use App\Http\Requests\Request;

class StoreBankTransferInfoRequest extends Request
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
            'bank_name'              => 'required|min:4|unique:bank_transfer_info',
            'bank_account_no'        => 'required|min:6',
            'support_phone'          => 'required|min:9',
            'description'            => 'required|min:9 ',
        ];
    }
}
