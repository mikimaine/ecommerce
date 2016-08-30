<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/20/2016
 * Time: 4:59 PM.
 */
namespace Innovate\Repositories\Tax;

use Innovate\Repositories\BaseRepository;
use Innovate\Taxs\Tax;

/**
 * Class EloquentTaxRepository.
 */
class EloquentTaxRepository extends BaseRepository implements TaxContract
{
    protected $modelName = 'Innovate\Taxs\Tax';

    /**
     * @param $input
     *
     * @return Tax
     */
    protected function createStub($input)
    {
        $tax = new Tax();
        $tax->name = $input['name'];
        $tax->rate = $input['rate'];

        return $tax;
    }
}
