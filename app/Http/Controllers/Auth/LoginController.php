<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $inputVal = $request->all();

        $this->validate($request, [
            'nip' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('nip' => $inputVal['nip'], 'password' => $inputVal['password']))) {
            if (auth()->user()->level == 1) {
                return redirect()->route('calonpengawas.index');
            }
            else if (auth()->user()->level == 2) {
                return redirect()->route('adminkota.index');
            }
            else if (auth()->user()->level == 3) {
                return redirect()->route('adminprov.index');
            }
            else if (auth()->user()->level == 4) {
                return redirect()->route('adminpusat.index');
            }
            // if (auth()->user()->level == 5) {
            //     return redirect()->route('admin.kemenpan');
            // }
            // if (auth()->user()->level == 6) {
            //     return redirect()->route('admin.kemendikbud');
            // }
            else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')
            ->with('error', 'NIP & Password are incorrect.');
        }
    }
}
