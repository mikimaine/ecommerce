<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 6:21 PM.
 */
namespace Innovate\Repositories\WishList;

use Innovate\Repositories\BaseRepository;
use Innovate\WishList\WishList;

class EloquentWishList extends BaseRepository implements WishListContract
{
    protected $modelName = 'Innovate\WishList\WishList';

    protected function createStub($input)
    {
        $wishlist = new WishList();
        $wishlist->product_id = $input['product_id'];
        $wishlist->customer_id = $input['customer_id'];

        return $wishlist;
    }
}
