<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/20/2016
 * Time: 4:59 PM.
 */

namespace Innovate\Repositories\Activity;

use DB;
use Innovate\Activity\Activity;
use Innovate\Repositories\BaseRepository;

/**
 * Class EloquentTaxRepository.
 */
class EloquentActivityRepository extends BaseRepository implements ActivityContract
{
    protected $modelName = 'Innovate\Activity\Activity';

    public function delete_all()
    {
        if (env('DB_DRIVER') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }
        Activity::truncate();

        if (env('DB_DRIVER') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
