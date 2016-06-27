<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 1:43 PM
 */

namespace Innovate\Category\Traits\Attribute;


trait CategoryAttribute {
    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        if (access()->can('edit-users')) {
            return '<a href="' . route('admin.order.edit', $this->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="' . trans('crud.edit_button') . '"></i></a> ';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        if (access()->can('view-innovate-ecommerce')) {
            return '<a href="' . route('admin.category.destroy', $this->id) . '" data-method="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="' . trans('crud.delete_button') . '"></i></a>';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return  $this->getDeleteButtonAttribute();
    }
}