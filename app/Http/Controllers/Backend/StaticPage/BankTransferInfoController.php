<?php

namespace App\Http\Controllers\Backend\StaticPage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Innovate\Repositories\StaticPages\BankTransferInfo\BankTransferInfoContract;

class BankTransferInfoController extends Controller
{

    public $bankTransferInfo;


    /**
     * @param BankTransferInfoContract $bankTransferInfoContract
     */
    function __construct(BankTransferInfoContract $bankTransferInfoContract)
    {
        $this->bankTransferInfo = $bankTransferInfoContract;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.staticPage.bank_transfer.info')
            ->withBanks($this->bankTransferInfo->getBankInfoPaginated(config('access.users.default_per_page')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staticPage.bank_transfer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->bankTransferInfo->create($request->all());
        return redirect()->route('admin.bank_transfer_info.index')->withFlashSuccess(trans('tax.alerts.created'));
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
        $bank = $this->bankTransferInfo->findOrThrowException($id, true);
        return view('backend.staticPage.bank_transfer.edit')
            ->withBank($bank);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->bankTransferInfo->destroy($id);
        return redirect()->back()->withFlashSuccess(trans('alerts.users.deleted'));
    }

    /**
     *
     */
    public function deleted()
    {

        return view('backend.staticPage.bank_transfer.deleted')
            ->withBanks($this->bankTransferInfo->getDeletedBankInfoPaginated(25));
    }

    public function restore($id)
    {
        $this->bankTransferInfo->restore($id);
        return redirect()->back()->withFlashSuccess(trans('alerts.users.restored'));
    }

    public function delete($id)
    {
        $this->bankTransferInfo->delete($id);
        return redirect()->back()->withFlashSuccess(trans('alerts.users.deleted_permanently'));
    }

}
