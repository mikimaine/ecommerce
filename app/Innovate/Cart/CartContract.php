<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/22/2016
 * Time: 10:14 PM.
 */
namespace Innovate\Cart;

/**
 * Interface CartContract.
 */
interface CartContract
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public function add($id);

    /**
     * @param $id
     * @param $data
     *
     * @return mixed
     */
    public function update($id, $data);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function remove($id);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function get($id);

    /**
     * @return mixed
     */
    public function content();

    /**
     * @return mixed
     */
    public function destroy();

    /**
     * @return mixed
     */
    public function total();

    /**
     * @return mixed
     */
    public function tax();

    /**
     * @return mixed
     */
    public function subtotal();

    /**
     * @return mixed
     */
    public function count();

    /**
     * @param $id
     *
     * @return mixed
     */
    public function search($id);
}
