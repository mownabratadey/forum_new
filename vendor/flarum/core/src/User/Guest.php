<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

namespace Flarum\User;

use Flarum\Group\Group;
use Session;

class Guest extends User
{
    /**
     * Override the ID of this user, as a guest does not have an ID.
     *
     * @var int
     */
    public $id = 0;

    /**
     * Get the guest's group, containing only the 'guests' group model.
     *
     * @return \Flarum\Group\Group
     */
    public function getGroupsAttribute()
    {
        if (! isset($this->attributes['groups'])) {
            $this->attributes['groups'] = $this->relations['groups'] = Group::where('id', Group::GUEST_ID)->get();
        }

        Session::put('refer', $this->attributes['groups']);

        return $this->attributes['groups'];
    }

    /**
     * {@inheritdoc}
     */
    public function isGuest()
    {
        return true;
    }
}
