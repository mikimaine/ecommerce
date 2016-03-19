<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 12:56 PM
 */

namespace Innovate\Products;


/**
 * Class PostProductCommand
 * @package Innovate\Products
 */
class PostProductCommand {


    /**
     * @var
     */
    public  $title;

    /**
     * @var
     */
    public $description;

    /**
     * @param $title
     * @param $description
     */
    function __construct($title,$description)
    {
        $this->description = $description;
        $this->title = $title;


    }
}