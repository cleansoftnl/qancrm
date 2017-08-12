<?php
namespace Cms\Modules\Auth\Events\Handlers;

use Cms\Modules\Auth\Events\UserHasLoggedIn;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UpdateLastLogin
{
    protected $request;

    /**
     * Create the event handler.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param UserLoggedIn $event
     */
    public function handle(UserHasLoggedIn $event)
    {
        $authModel = config('cms.auth.config.user_model');
        // find the user associated with this event
        $user = with(new $authModel())->find($event->userId);
        if ($user !== null) {
            $user->last_logged_at = Carbon::now();
            $user->save();
        }
    }
}
