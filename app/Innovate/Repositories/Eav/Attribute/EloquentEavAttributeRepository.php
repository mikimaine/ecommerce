<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/29/2016
 * Time: 6:08 PM
 */

namespace Innovate\Repositories\Eav\Attribute;


use App\Exceptions\GeneralException;
use Innovate\Eav\Attribute\ProductAttribute;

/**
 * Class EloquentEavAttributeRepository
 * @package Innovate\Repositories\Eav\Attribute
 */
class EloquentEavAttributeRepository implements EavAttributeContract{

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        $attribute = ProductAttribute::find(id);

        if (!is_null($attribute)) {
            return $attribute;
        }

        throw new GeneralException('That Attribute does not exist.');
    }

    /**
     * @param  $per_page
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     * @internal param $status
     */
    public function getEavAttributePaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        return ProductAttribute::orderBy($order_by, $sort)->paginate($per_page);
    }

    /**
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     */
    public function getAllEavAttribute($order_by = 'id', $sort = 'asc')
    {
        return ProductAttribute::orderBy($order_by, $sort)->get();
    }

    /**
     * @param $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function create($input)
    {
        $attribute = $this->createEavAttributeStub($input);

        if($attribute->save())
        {
            return true;
        }

        throw new GeneralException('There was a problem creating this Attribute. Please try again!');
    }

    /**
     * @param $id
     * @param $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function update($id, $input)
    {
        $attribute = $this->findOrThrowException($id);

        if($attribute->update($input))
        {
            return true;
        }
        throw new GeneralException('There was a problem updating this Attribute. Please try again.');

    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     */
    public function destroy($id)
    {
        $attribute = $this->findOrThrowException($id);
        if ($attribute->delete())
        {
            return true;
        }

        throw new GeneralException('There was a problem deleting this Attribute. Please try again.');

    }

    /**
     * @param  $id
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $input
     * @return ProductAttribute
     */
    private function createEavAttributeStub($input)
    {
        $attribute = new ProductAttribute();
        $attribute->product_category_id = $input['product_category_id'];
        $attribute->title = $input['title'];


        $attribute->notnull = 0 ;
        //check if Not Null value is set
        if($input['notnull']== 'on')
        {
            $attribute->notnull = 1 ;
        }
        $attribute->datatype = $input['datatype'];

        return $attribute;
    }
}