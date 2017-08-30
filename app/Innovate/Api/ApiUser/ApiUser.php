<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/23/2016
 * Time: 11:41 PM.
 */

namespace Innovate\Api\ApiUser;

use Illuminate\Database\Eloquent\Model;
use Innovate\Api\ApiUser\Traits\Attribute\ApiUserAttribute;
use Innovate\Api\ApiUser\Traits\Relationship\ApiUserRelationship;

class ApiUser extends Model
{
    use ApiUserAttribute,ApiUserRelationship;

    protected $table = 'api_user';
}
