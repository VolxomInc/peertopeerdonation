<?php

namespace App\Events\Auth;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class UserLoggedOut
 * @package App\Events\Frontend\Auth
 */
class UserLoggedOut extends Event
{
    use SerializesModels;

    /**
     * @var $user
     */
    public $user;

    /**
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}