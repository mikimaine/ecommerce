<?php

namespace App\Http\Controllers\Backend\StaticPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Innovate\Repositories\StaticPages\CheckOutAgreement\CheckOutAgreementContract;

class CheckOutAgreementController extends Controller
{
    /**
     * @var
     */
    public $checkOutAgreement;

    /**
     * @param $checkOutAgreement
     */
    public function __construct(CheckOutAgreementContract $checkOutAgreement)
    {
        $this->checkOutAgreement = $checkOutAgreement;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.staticPage.check_out_agreement.index')
            ->withCheckouts($this->checkOutAgreement->Paginated(config('access.users.default_per_page')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staticPage.check_out_agreement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->checkOutAgreement->create($request->all());

        return redirect()->route('admin.check_out_agreement.index')->withFlashSuccess(trans('tax.alerts.created'));
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
        //
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
        $checkout = $this->checkOutAgreement->findOrThrowException($id, true);

        return view('backend.staticPage.check_out_agreement.edit')
            ->withCheckout($checkout);
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
        //
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
        $this->checkOutAgreement->destroy($id);

        return redirect()->back()->withFlashSuccess(trans('alerts.users.deleted'));
    }


    public function deleted()
    {
        return view('backend.staticPage.check_out_agreement.deleted')
            ->withCheckouts($this->checkOutAgreement->getDeletedPaginated(25));
    }

    public function restore($id)
    {
        $this->checkOutAgreement->restore($id);

        return redirect()->back()->withFlashSuccess(trans('alerts.users.restored'));
    }

    public function delete($id)
    {
        $this->checkOutAgreement->delete($id);

        return redirect()->back()->withFlashSuccess(trans('alerts.users.deleted_permanently'));
    }
}
