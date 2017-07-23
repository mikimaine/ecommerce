<?php

/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/29/2016
 * Time: 6:08 PM.
 */

namespace App\Http\Controllers\Backend\Eav\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Innovate\Repositories\Eav\Category\EavCategoryContract;
use Innovate\Requests\Eav\Category\StoreEavCategoryRequest;

/**
 * Class EavProductAttributeCategory.
 */
class EavProductAttributeCategory extends Controller
{
    /**
     * @var
     */
    public $eavProductCategory;

    /**
     * @param $eavProductCategory
     */
    public function __construct(EavCategoryContract $eavProductCategory)
    {
        $this->eavProductCategory = $eavProductCategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.eav.category.index')
            ->withProductattributecategorys($this->eavProductCategory->getEavCategoryPaginated(30));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.eav.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEavCategoryRequest|Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEavCategoryRequest $request)
    {
        $this->eavProductCategory->create($request->all());

        return redirect()->route('admin.eav.category.index')->withFlashSuccess(trans('eav.alerts.eav_category_created'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->eavProductCategory->findOrThrowException($id);
        //$cc->product_attributes->toArray();
        return view('backend.eav.category.show')
            ->withCategory($category);
        //dd($category->product_attributes[0]['title']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->eavProductCategory->findOrThrowException($id, true);

        return view('backend.eav.category.edit')
            ->withCategory($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->eavProductCategory->update($id, $request->all());

        return redirect()->route('admin.eav.category.index')->withFlashSuccess(trans('eav.alerts.eav_category_updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->eavProductCategory->destroy($id);

        return redirect()->back()->withFlashSuccess(trans('eav.alerts.eav_category_deleted'));
    }
}
