<?php

namespace Innovate\StaticPages\CheckOutAgreement\Traits\Attribute;


/**
 * Class UserAttribute
 * @package App\Models\Access\User\Traits\Attribute
 */
trait CheckOutAgreementAttribute
{
    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        if (access()->can('edit-users')) {
            return '<a href="' . route('admin.check_out_agreement.edit', $this->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="' . trans('crud.edit_button') . '"></i></a> ';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        if (access()->can('view-innovate-ecommerce')) {
            return '<a href="' . route('admin.check_out_agreement.destroy', $this->id) . '" data-method="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="' . trans('crud.delete_button') . '"></i></a>';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return $this->getEditButtonAttribute() .
        $this->getDeleteButtonAttribute();
    }
}
