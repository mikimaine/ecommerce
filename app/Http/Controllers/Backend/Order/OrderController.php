<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/26/2016
 * Time: 10:39 PM.
 */
namespace app\Http\Controllers\Backend\Order;

use App\Http\Controllers\Controller;
use Innovate\Repositories\Order\OrderContract;
use Request;

class OrderController extends Controller
{
    private $order;

    public function __construct(OrderContract $order)
    {
        $this->order = $order;
    }

    public function index()
    {
        return view('backend.order.index')
               ->withOrders($this->order->getAll());
    }

    public function create()
    {
    }

    public function edit($id)
    {
        $order = $this->order->findOrThrowException($id);

        return view('backend.order.edit')
            ->withOrder($order);
    }

    public function update($id, Request $request)
    {
        $this->order->update($id, $request->all());
    }

    public function destroy($id)
    {
        $this->order->destroy($id);

        return redirect()->back()->withFlashSuccess(trans('order.alerts.deleted'));
    }

    /**
     * Returns products that are deleted.
     */
    public function deleted()
    {
        return view('backend.order.deleted')
            ->withOrders($this->order->getDeletedPaginated(25));
    }

    /**
     * restore products from deleted box.
     *
     * @param $id
     *
     * @return mixed
     */
    public function restore($id)
    {
        $this->order->restore($id);

        return redirect()->back()->withFlashSuccess(trans('order.restored'));
    }

    /**
     * Delete product beyond recovery.
     *
     * @param $id
     *
     * @return mixed
     */
    public function delete($id)
    {
        $this->order->delete($id);

        return redirect()->back()->withFlashSuccess(trans('order.deleted_permanently'));
    }
}
