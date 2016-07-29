<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 7:17 PM.
 */
namespace Innovate\Repositories\Order;

use Innovate\Order\DownloadLink;
use Innovate\Repositories\BaseRepository;

class EloquentDownloadableLinkRepository extends BaseRepository implements DownloadableLinkContract
{
    protected $modelName = 'Innovate\Order\DownloadLink';

    /**
     * @param $input
     *
     * @return Tax
     */
    protected function createStub($input)
    {
        $download_link = new DownloadLink();
        $download_link->order_id = $input['order_id'];
        $download_link->no_of_downloads_bought = $input['no_of_downloads_bought'];
        $download_link->no_of_downloads_user = $input['no_of_downloads_user'];


        return $download_link;
    }
}
