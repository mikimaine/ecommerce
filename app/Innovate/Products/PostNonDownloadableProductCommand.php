<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 5/24/2016
 * Time: 9:38 AM
 */

namespace Innovate\Products;


class PostNonDownloadableProductCommand  {
    /**
     * @var
     */
    public  $input ;


    /**
     * @param $inputs
     * @internal param $input
     * @internal param $title
     * @internal param $description
     */
    public function __construct($inputs)
    {
        $this->input = $inputs;
       // dd($input);
    }
}