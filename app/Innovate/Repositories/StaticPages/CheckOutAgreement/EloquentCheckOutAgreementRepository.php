<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/20/2016
 * Time: 4:59 PM
 */

namespace Innovate\Repositories\StaticPages\CheckOutAgreement;


use App\Exceptions\GeneralException;
use Innovate\StaticPages\CheckOutAgreement\CheckOutAgreement;


/**
 * Class EloquentCheckOutAgreementRepository
 * @package Innovate\Repositories\StaticPages\BankTransferInfo
 */
class EloquentCheckOutAgreementRepository implements CheckOutAgreementContract {

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        $checkout = CheckOutAgreement::withTrashed()->find($id);

        if (!is_null($checkout)) {
            return $checkout;
        }

        throw new GeneralException('That Bank Information. does not exist.');
    }

    /**
     * @param $per_page
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     * @internal param $status
     */
    public function Paginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        return CheckOutAgreement::orderBy($order_by, $sort)->paginate($per_page);
    }

    /**
     * @param $per_page
     * @param string $order_by
     * @param string $sort
     * @return mixed
     */
    public function getDeletedPaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        return CheckOutAgreement::onlyTrashed()->paginate($per_page);
    }

    /**
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     */
    public function getAll($order_by = 'id', $sort = 'asc')
    {
        return CheckOutAgreement::orderBy($order_by, $sort)->get();
    }

    /**
     * @param $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function create($input)
    {
        $checkout = $this->createBankTransferInfoStub($input);

        if($checkout->save())
        {
            return true;
        }

        throw new GeneralException('There was a problem creating this Bank Information. Please try again!');

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
        $checkout = $this->findOrThrowException($id);

        if($checkout->update($input))
        {
            return true;
        }
        throw new GeneralException('There was a problem updating this Bank Information. Please try again.');
    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     */
    public function destroy($id)
    {
        $checkout = $this->findOrThrowException($id);
        if ($checkout->delete())
        {
        return true;
        }

        throw new GeneralException('There was a problem deleting this Bank Information.. Please try again.');

    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     */
    public function delete($id)
    {
        $checkout = $this->findOrThrowException($id, true);

        try {
            $checkout->forceDelete();
        } catch (\Exception $e) {
            throw new GeneralException($e->getMessage());
        }
    }


    /**
     * @param $id
     * @return bool
     * @throws GeneralException
     */
    public function restore($id)
    {
        $bank = $this->findOrThrowException($id);

        if ($bank->restore()) {
            return true;
        }

        throw new GeneralException('There was a problem restoring this Bank Information. Please try again.');

    }
    /**
     * @param $input
     * @return Tax
     */
    private function createBankTransferInfoStub($input)
    {
            $checkoutagreement = new CheckOutAgreement();
            $checkoutagreement->name       = $input['name'];
            $checkoutagreement->content    = $input['bank_account_no'];
            $checkoutagreement->is_active   = $input['is_active'];

            return $checkoutagreement;
    }


}