<?php

namespace App\Http\Controllers\Backend\StaticPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Innovate\Repositories\StaticPages\BankTransferInfo\BankTransferInfoContract;
use Innovate\Requests\StaticPage\StoreBankTransferInfoRequest;
use Innovate\Requests\StaticPage\UpdateBankTransferInfoRequest;

class BankTransferInfoController extends Controller
{
    public $bankTransferInfo;

    /**
     * @param BankTransferInfoContract $bankTransferInfoContract
     */
    public function __construct(BankTransferInfoContract $bankTransferInfoContract)
    {
        $this->bankTransferInfo = $bankTransferInfoContract;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('backend.staticPage.bank_transfer.info')
            ->withBanks($this->bankTransferInfo->Paginated(config('access.users.default_per_page')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.staticPage.bank_transfer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|StoreBankTransferInfoRequest $request
     *
     * @return Response
     */
    public function store(StoreBankTransferInfoRequest $request)
    {
        $this->bankTransferInfo->create($request->all());

        return redirect()->route('admin.bank_transfer_info.index')->withFlashSuccess(trans('tax.alerts.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
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
     * @return Response
     *
     * @internal param UpdateBankTransferInfoRequest $request
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
     * @param Request|UpdateBankTransferInfoRequest $request
     * @param int                                   $id
     *
     * @return Response
     */
    public function update(UpdateBankTransferInfoRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->bankTransferInfo->destroy($id);

        return redirect()->back()->withFlashSuccess(trans('alerts.users.deleted'));
    }

    public function deleted()
    {
        return view('backend.staticPage.bank_transfer.deleted')
            ->withBanks($this->bankTransferInfo->getDeletedPaginated(25));
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function restore($id)
    {
        $this->bankTransferInfo->restore($id);

        return redirect()->back()->withFlashSuccess(trans('alerts.users.restored'));
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete($id)
    {
        $this->bankTransferInfo->delete($id);

        return redirect()->back()->withFlashSuccess(trans('alerts.users.deleted_permanently'));
    }
}
