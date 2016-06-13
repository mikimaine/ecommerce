<?php

namespace App\Models\Access\Permission;

use App\Models\Access\Permission\Traits\Attribute\PermissionAttribute;
use App\Models\Access\Permission\Traits\Relationship\PermissionRelationship;
use Illuminate\Database\Eloquent\Model;
use Innovate\BaseModel;

/**
 * Class Permission.
 */
class Permission extends BaseModel
{
    use PermissionRelationship, PermissionAttribute;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];


    public function __construct()
    {
        $this->table = config('access.permissions_table');
    }
}
