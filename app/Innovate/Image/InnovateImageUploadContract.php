<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/14/2016
 * Time: 10:30 PM.
 */

namespace Innovate\Image;

interface InnovateImageUploadContract
{
    public function up($image, $path);

    public function validate();
}
