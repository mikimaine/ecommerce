<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 5/24/2016
 * Time: 9:38 AM.
 */

namespace Innovate\Products;

class PostDownloadableProductCommand
{
    /**
     * @var
     */
    public $input;

    /**
     * @param $inputs
     */
    public function __construct($inputs)
    {
        $this->input = $inputs;
       // dd($input);
    }
}
