<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 3:59 PM.
 */

namespace Innovate\Repositories\Eav\Value;

use App\Exceptions\GeneralException;
use Innovate\Eav\Value\ProductAttributeText;

class EloquentEavValueTextRepository implements EavValueTextContract
{
    /**
     * @param  $id
     *
     * @return mixed
     *
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        // TODO: Implement findOrThrowException() method.
    }

    /**
     * @param  $per_page
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     *
     * @internal param $status
     */
    public function Paginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement Paginated() method.
    }

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAll($order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @param  $input
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function create($input)
    {
        // TODO: Implement create() method.
    }

    /**
     * @param  $id
     * @param  $input
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function update($id, $input)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $product
     * @param $new_string
     * @param $value
     *
     * @throws GeneralException
     *
     * @return mixed
     *
     * @internal param $input
     * @internal param $roles
     */
    public function createFromInput($product, $new_string, $value)
    {
        $text = new ProductAttributeText();
        $text->product_id = $product->id;
        $text->product_attribute_id = $new_string[2];
        $text->value = $value;
        try {
            if ($text->save()) {
                return true;
            }
        } catch (GeneralException $e) {
        }
        throw new GeneralException('Something went wrong Inserting Custom Text Value. Try again later!');
    }
}
