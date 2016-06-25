<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/14/2016
 * Time: 10:09 PM
 */

namespace Innovate\Image;

use  Intervention\Image\Facades\Image;


/**
 * Class InnovateImageUpload
 * @package Innovate\Image
 */
class InnovateImageUpload implements InnovateImageUploadContract {

    /**
     * Default horizontal size of filter effects
     */
    const DEFAULT_HORIZONTAL_SIZE = 250;

    /**
     * Default vertical size of filter effects
     */
    const DEFAULT_VERTICAL_SIZE = 250;

    /**
     * The default watermark image
     */
    const WATERMARK_IMG = '';

    /**
     * Horizontal size of the image
     * @var
     */
    private $horizontal;

    /**
     * Vertical size of the image
     * @var
     */
    private  $vertical;

    /**
     * the image to process
     * @var
     */
    private $image;


    /**
     * @param $horizontal
     * @param $vertical
     */
    function __construct($horizontal= null, $vertical = null)
    {
        $this->horizontal = is_numeric($horizontal) ? intval($horizontal) : self::DEFAULT_HORIZONTAL_SIZE;

        $this->vertical = is_numeric($vertical) ? intval($vertical) : self::DEFAULT_VERTICAL_SIZE;
        return  $this;
    }


    /**
     * upload the given image in to the given path using Intervention
     * @param $image
     * @param $path
     * @return Image
     */
    public function up($image,$path)
    {
            $this->image  = Image::make($image);
            return $this->image->resize($this->horizontal,$this->vertical)->save($path);

    }


    public function validate()
    {

    }


}