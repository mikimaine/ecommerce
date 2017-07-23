<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/23/2016
 * Time: 11:43 PM.
 */

namespace Innovate\Api\ApiUser\Traits\Relationship;

/**
 * Class ApiUserRelationship.
 */
trait ApiUserRelationship
{
    /**
     * returns the user who owns this api_user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User', 'user_id');
    }
}
