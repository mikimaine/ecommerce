<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 1:51 PM
 */

namespace Innovate\Repositories\Category;


use App\Exceptions\GeneralException;
use Innovate\Category\Category;


class EloquentCategoryRepository implements CategoryContract{

    private $categoryDescription;

    /**
     * @param CategoryDescriptionContract $categoryDescriptionContract
     */
    function __construct(CategoryDescriptionContract $categoryDescriptionContract)
    {
        $this->categoryDescription = $categoryDescriptionContract;

    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        $category = Category::find($id);

        if (!is_null($category)) {
            return $category;
        }

        throw new GeneralException('That Category does not exist.');
    }

    /**
     * @param  $per_page
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     * @internal param $status
     */
    public function getCategoryPaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        return Category::orderBy($order_by, $sort)->paginate($per_page);
    }

    /**
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     */
    public function getAllCategory($order_by = 'id', $sort = 'asc')
    {
        return Category::orderBy($order_by, $sort)->get();
    }

    /**
     * @param $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function create($input)
    {
        $category = $this->createCategoryStub($input);
        try{
            if($category->save())
            {
                $input['category_id'] = $category->id;
                $this->categoryDescription->create($input);
                return true;
            }
        }catch (Exception $e){
            //Do things with the Errors

        }throw new GeneralException('There was a problem creating this Product Category. Please try again!');

    }

    /**
     * @param  $id
     * @param  $input
     * @return mixed
     * @internal param $roles
     */
    public function update($id, $input)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param  $id
     * @return mixed
     */
    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    /**
     * @param  $id
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }


    public function eagerLoad($table,$order_by = 'id', $sort = 'asc')
    {

        return Category::with(['category_description' => function($query){
                        $query->orderBy('id', 'asc');
                        }])->get();
    }

    private function createCategoryStub($input)
    {
        $category = new Category();
        $category->image = trim($input['valid_image']);
        $category->parent_id = $input['parent_category'];
        isset($input['status']) ?  $category['status']= 1 : $category['status']= 0;
        isset($input['parent_category']) ?  $category->parent_id= $input['parent_category'] : $category->parent_id= NULL;

        return $category;
    }


}