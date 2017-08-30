<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/20/2016
 * Time: 9:46 AM.
 */

namespace Innovate\SEOProvider;

interface SEOProviderContract
{
    public function set(ObjectFlat $objectFlat);

    public function fire();
}
