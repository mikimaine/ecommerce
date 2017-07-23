<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/14/2016
 * Time: 10:08 PM.
 */

namespace Innovate\Image;

use Intervention\Image\Filters\FilterInterface;
use Intervention\Image\Image;

class InnovateImageFilter implements FilterInterface
{
    /**
     * Default size of filter effects.
     */
    const DEFAULT_SIZE = 10;

    /**
     * Size of filter effects.
     *
     * @var int
     */
    private $size;

    /**
     * Creates new instance of filter.
     *
     * @param int $size
     */
    public function __construct($size = null)
    {
        $this->size = is_numeric($size) ? intval($size) : self::DEFAULT_SIZE;
    }

    /**
     * Applies filter to given image.
     *
     * @param Image $image
     *
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        $image->pixelate($this->size);
        $image->greyscale();

        return $image;
    }
}
