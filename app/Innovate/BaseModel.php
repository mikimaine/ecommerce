<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 5/27/2016
 * Time: 2:25 PM.
 */
namespace Innovate;

use Spiritix\LadaCache\Database\Model;
use Spiritix\LadaCache\Database\QueryBuilder;

/**
 * Class BaseModel.
 */
class BaseModel extends Model
{
    /**
     * @return \Illuminate\Database\Query\Builder|QueryBuilder
     */
    protected function newBaseQueryBuilder()
    {
        $conn = $this->getConnection();
        $grammar = $conn->getQueryGrammar();


<<<<<<< HEAD
        if (env('LADA_CACHE_DRIVER')) {
           $query = new QueryBuilder(
=======
        if (true) {
            $query = new QueryBuilder(
>>>>>>> 61cca9260d75f322faff49975dedaaa23a4b4fd6
                $conn,
                $grammar,
                $conn->getPostProcessor(),
                app()->make('lada.handler')
            );

            return $query;
        } else {
            return parent::newBaseQueryBuilder();
        }
    }
}
