<?php
namespace Modules\Core\Http\Controllers\Frontend\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Modules\Core\Http\Controllers\BaseFrontendController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends BaseFrontendController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;

    public $layout = '2-column-left';

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
        // set dependencies
        $this->setDependencies(
            app('Teepluss\Theme\Contracts\Theme'),
            app('Illuminate\Filesystem\Filesystem')
        );
    }

    /**
     * Render the login form.
     */
    public function showLoginForm()
    {
        $this->setLayout('1-column');
        return $this->setView('partials.core.login', [], 'theme');
    }
}
