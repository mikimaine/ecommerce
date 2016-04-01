<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/29/2016
 * Time: 5:54 PM
 */

namespace Innovate\Repositories\Eav\Category;


use App\Exceptions\GeneralException;
use Innovate\Eav\Category\ProductAttributeCategory;

/**
 * Class EloquentEavCategoryRepository
 * @package Innovate\Repositories\Eav\Category
 */
class EloquentEavCategoryRepository implements EavCategoryContract{


    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        $category = ProductAttributeCategory::find(id);

        if (!is_null($category)) {
            return $category;
        }

        throw new GeneralException('That Attribute set does not exist.');
    }

    /**
     * @param  $per_page
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     * @internal param $status
     */
    public function getEavCategoryPaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        return ProductAttributeCategory::orderBy($order_by, $sort)->paginate($per_page);

    }

    /**
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     */
    public function getAllEavCategory($order_by = 'id', $sort = 'asc')
    {
        return ProductAttributeCategory::orderBy($order_by, $sort)->get();
    }

    /**
     * @param $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function create($input)
    {
        $category = $this->createEavCategoryStub($input);

        if($category->save())
        {
            return true;
        }

        throw new GeneralException('There was a problem creating this Attribute Set. Please try again!');

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
        $category = $this->findOrThrowException($id);

        if($category->update($input))
        {
            return true;
        }
        throw new GeneralException('There was a problem updating this Attribute set. Please try again.');
    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     */
    public function destroy($id)
    {
        $category = $this->findOrThrowException($id);
        if ($category->delete())
        {
            return true;
        }

        throw new GeneralException('There was a problem deleting this Attribute set. Please try again.');

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
     * @return ProductAttributeCategory
     */
    private function createEavCategoryStub($input)
    {
        $category = new ProductAttributeCategory();

        $category->Attribute_set_name = $input['Attribute_set_name'];

        return $category;
    }
}