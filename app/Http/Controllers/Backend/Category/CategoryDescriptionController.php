<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 11:05 AM
 */

namespace App\Http\Controllers\Backend\Category;



use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use Innovate\Repositories\Category\CategoryDescriptionContract;

/**
 * Class CategoryDescriptionController
 * @package App\Http\Controllers\Backend\Category
 */
class CategoryDescriptionController   extends Controller{

    public $categoryDescription;


    /**
     * @param CategoryDescriptionContract $categoryDescriptionContract
     */
    public function __construct(CategoryDescriptionContract $categoryDescriptionContract)
    {
        $this->categoryDescription = $categoryDescriptionContract;

    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     * @internal param CategoryDescriptionContract $categoryDescriptionContract
     */
    public function index()
    {
        dd('u are her in catdescr');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}