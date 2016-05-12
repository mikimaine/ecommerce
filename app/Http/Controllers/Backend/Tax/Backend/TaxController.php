<?php

namespace App\Http\Controllers\Backend\Tax\Backend;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Innovate\Repositories\Tax\TaxContract;
use Innovate\Requests\Tax\StoreTaxRequest;
use Innovate\Requests\Tax\UpdateTaxRequest;

/**
 * Class TaxController
 * @package App\Http\Controllers\Tax\Backend
 */
class TaxController extends Controller
{

    /**
     * @var
     */
    public  $tax;

    /**
     * @param TaxContract $tax
     */
    function __construct(TaxContract $tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return mixed
     */
    public function  index()
    {
        return view('backend.tax.tax')
                ->withTaxs($this->tax->getPaginated(config('access.users.default_per_page')));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

         return view('backend.tax.create');

    }

    /**
     * @param StoreTaxRequest $request
     */
    public function store(StoreTaxRequest $request)
    {
        $this->tax->create($request->all());
        return redirect()->route('admin.tax.index')->withFlashSuccess(trans('eav.alerts.eav_attribute_created'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $tax = $this->tax->findOrThrowException($id, true);
        return view('backend.tax.edit')
               ->withTax($tax);
    }

    /**
     * @param $id
     * @param UpdateTaxRequest $request
     */
    public function update($id,UpdateTaxRequest $request)
    {

        $this->tax->update($id,$request->all());
        return redirect()->route('admin.tax.index')->withFlashSuccess(trans('tax.alerts.updated'));
    }


    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $this->tax->destroy($id);
        return redirect()->back()->withFlashSuccess(trans('tax.alerts.deleted'));

    }

}
