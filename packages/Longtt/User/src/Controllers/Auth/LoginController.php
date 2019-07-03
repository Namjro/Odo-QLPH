<?php

namespace Longtt\User\Controllers\Auth;

use App\Http\Controllers\Controller;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;
use Longtt\Vaytien\Model\Loan;
use Longtt\Vaytien\Model\Loaner;
use Longtt\Vaytien\Model\Nguoi_duoc_gioi_thieu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;


class LoginController extends Controller
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        
        $facebookLoginUrl=$this->redirectToProvider();
        return view('user::auth.login',
            array("facebookLoginUrl"=>$facebookLoginUrl)
        );
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {

        return Socialite::driver('facebook')->redirect();

        //echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {

        $user = Socialite::driver('facebook')->user();
        $ref_code = Session::get('ma_gt');
        $faceBook_id = $user['id'];
        $member = DB::table('loaners')->pluck('facebook_id')->toArray();

        if(!in_array($user['id'],$member)){

            $loaner = new Loaner();
            $loaner->facebook_id = $faceBook_id;
            $loaner->email = $user->email;
            $password=substr(time(),0,6);
            $loaner->password=bcrypt($password);
            $loaner->refer_code = $ref_code;
            $loaner->save();

            return redirect('loaner/tao_ma_gioi_thieu/'.$ref_code)->with('notification','
                    <h1>Đăng ký thành công</h1>
                    <a class="button-FB" href="https://vaymuon.vn/">Tải app tại đây</a>
                ');;
        }else{

            return redirect('loaner/tao_ma_gioi_thieu/'.$ref_code)->with('notification','
                    <h1>Mã đăng ký này đã được sử dụng</h1>
                ');
        }


    }
}
