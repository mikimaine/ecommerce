<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 12:56 PM
 */

namespace Innovate\Products;


class PostProductCommand {


    public  $title;

    public $description;

    function __construct($title,$description)
    {
        $this->description = $description;
        $this->title = $title;


    }
}