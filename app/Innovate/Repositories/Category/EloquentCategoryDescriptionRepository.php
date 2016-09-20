<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 1:52 PM.
 */
namespace Innovate\Repositories\Category;

use App\Exceptions\GeneralException;
use Innovate\Category\CategoryDescription;

/**
 * Class EloquentCategoryDescriptionRepository.
 */
class EloquentCategoryDescriptionRepository implements CategoryDescriptionContract
{
    /**
     * @param $id
     *
     * @throws GeneralException
     *
     * @return mixed
     *
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        $categoryDescription = CategoryDescription::find($id);

        if (!is_null($categoryDescription)) {
            return $categoryDescription;
        }

        throw new GeneralException('That Category Description does not exist.');
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
    public function getCategoryDescriptionPaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        return CategoryDescription::orderBy($order_by, $sort)->paginate($per_page);
    }

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAllCategoryDescription($order_by = 'id', $sort = 'asc')
    {
        return CategoryDescription::orderBy($order_by, $sort)->get();
    }

    /**
     * @param $input
     *
     * @throws GeneralException
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function create($input)
    {
        $categoryDescription = $this->createCategoryDescriptionStub($input);

        try {
            if ($categoryDescription->save()) {
                $categoryDescriptionLocal = $this->createLocalStub($input, $categoryDescription);
                try {
                    if ($categoryDescriptionLocal->save()) {
                        return true;
                    }
                } catch (GeneralException $e) {
                }
                throw new GeneralException('There was a problem creating this Product Description Localization. Please try again!');
            }
        } catch (GeneralException $e) {
        }
        throw new GeneralException('There was a problem creating this Product Description. Please try again!');
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

    public function eagerLoad($id, $order_by = 'id', $sort = 'asc')
    {
        return CategoryDescription::with('category_description_translations')->where('id', '=', $id)->get();
    }

    /**
     * returns categoryDescription Object with its data
     * Prepare.
     *
     * @param $input
     *
     * @return CategoryDescription
     */
    private function createCategoryDescriptionStub($input)
    {
        $categoryDescription = new CategoryDescription();
        $categoryDescription->meta_title = $input['meta_title'];
        $categoryDescription->meta_description = $input['meta_description'];
        $categoryDescription->category_id = $input['category_id'];

        return $categoryDescription;
    }

    /**
     * Prepare the input for insertion in to the Translation table.
     *
     * @param $input
     * @param $categoryDescription
     */
    protected function createLocalStub($input, $categoryDescription)
    {
        $categoryDescription->translateOrNew('en')->name = $input['name_en'];
        $categoryDescription->translateOrNew('en')->description = $input['description_en'];

        isset($input['name_am']) ? $categoryDescription->translateOrNew('am')->name = $input['name_am'] : 1;
        isset($input['description_am']) ? $categoryDescription->translateOrNew('am')->description = $input['description_am'] = $input['description_am'] : 1;

        return $categoryDescription;
    }
}
