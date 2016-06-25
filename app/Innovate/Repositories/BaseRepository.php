<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/24/2016
 * Time: 4:40 PM
 */

namespace Innovate\Repositories;


use App\Exceptions\GeneralException;

/**
 * Class BaseRepository
 * @package Innovate\Repositories
 */
class BaseRepository implements BaseContract{

    /**
     * @var
     */
    protected $modelName;

    /**
     * Returns the instance of the Model
     * @return mixed
     */
    protected function getNewInstance()
    {
        $model = $this->modelName;
        return new $model;
    }

    /**
     * @return mixed
     */
    protected function getModelNameFromNamespace()
    {
       return str_replace('\\', '.', get_class($this->getNewInstance()));
    }
    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        $instance = $this->getNewInstance();
        $collection = $instance->find($id);
        if (!is_null($collection)) {
            return $collection;
        }
        throw new GeneralException('That '.$this->getModelNameFromNamespace().' does not exist.');
    }

    /**
     * @param  $per_page
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     * @internal param $status
     */
    public function getPaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        $instance = $this->getNewInstance();
        return $instance->orderBy($order_by, $sort)->paginate($per_page);
    }
    /**
     * @param  $per_page
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     * @internal param $status
     */
    public function Paginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement Paginated() method.
    }

    /**
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     */
    public function getAll($order_by = 'id', $sort = 'asc')
    {

        $instance = $this->getNewInstance();
        return $instance->orderBy($order_by, $sort)->get();
    }

    /**
     * @param $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function create($input)
    {
        $preparedData = $this->createStub($input);

        try {
            if ($preparedData->save()) {
                return true;
            }
        }catch (Exception $e){
         //Do things with the Error

       }throw new GeneralException('There was a problem creating this '.$this->getModelNameFromNamespace().' Please try again!');

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
        $collection = $this->findOrThrowException($id);

        if($collection->update($input))
        {
            return true;
        }
        throw new GeneralException('There was a problem updating this'.$this->getModelNameFromNamespace().'. Please try again.');
    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     */
    public function destroy($id)
    {
        $collection = $this->findOrThrowException($id);
        if ($collection->delete())
        {
            return true;
        }

        throw new GeneralException('There was a problem deleting this '.$this->getModelNameFromNamespace().'. Please try again.');
    }

    /**
     * @param  $id
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }



}