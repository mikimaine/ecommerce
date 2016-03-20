<?php

namespace App\Http\Controllers\Tax\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Innovate\Repositories\Tax\TaxContract;

/**
 * Class TaxController
 * @package App\Http\Controllers\Tax\Backend
 */
class TaxController extends Controller
{

    /**
     * @var
     */
    public  $tax;

    /**
     * @param TaxContract $tax
     */
    function __construct(TaxContract $tax)
    {
        $this->tax = $tax;
    }


    /**
     *
     */
    public function store()
    {

        $input = Input::only('name','rate');

        $this->tax->create($input);

    }
}
