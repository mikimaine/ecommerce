<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/26/2016
 * Time: 10:59 PM.
 */
namespace Innovate\Order\Traits\Attribute;

trait OrderAttribute
{
    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        if (access()->can('edit-users')) {
            return '<a href="'.route('admin.order.edit', $this->id).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('crud.edit_button').'"></i></a> ';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        if (access()->can('view-innovate-ecommerce')) {
            return '<a href="'.route('admin.order.destroy', $this->id).'" data-method="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.trans('crud.delete_button').'"></i></a>';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return $this->getEditButtonAttribute().
        $this->getDeleteButtonAttribute();
    }
}
