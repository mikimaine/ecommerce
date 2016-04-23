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
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Innovate\Eav\Attribute\ProductAttribute;
use Monolog\Logger;
use Psy\Exception\ErrorException;

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
        $attribute = ProductAttribute::find($id);

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
        try{
            if($attribute->save()) {
                return true;
            }
        }catch (Exception $e){
            //Do things with the Error

        }throw new GeneralException('There was a problem creating this Attribute. Please try again!');
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

        isset($input['notnull']) ?  $input['notnull']= 1 : $input['notnull']= 0;
        try{
                if($attribute->update($input))
                {
                    return true;
                }
        }catch (Exception $e){
                    //Do things with the Error

        }throw new GeneralException('There was a problem updating this Attribute. Please try again.');

    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     */
    public function destroy($id)
    {
        $attribute = $this->findOrThrowException($id);
        try{
                if ($attribute->delete())
                {
                    return true;
                }
        }catch (Exception $e){
            //Do things with the Error

        }throw new GeneralException('There was a problem deleting this Attribute. Please try again.');

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
        $attribute->datatype = $input['datatype'];

        isset($input['notnull']) ?  $attribute['notnull']= 1 : $attribute['notnull']= 0;


        return $attribute;
    }

    public function eagerLoadPaginated($table,$per_page)
    {

        return ProductAttribute::with(['product_attribute_category' => function($query){
                                $query->orderBy('id', 'asc');
                            }])->paginate($per_page);
    }

}