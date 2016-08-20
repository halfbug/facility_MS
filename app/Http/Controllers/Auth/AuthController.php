<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
         //   'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        
        $user= User::create([
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
           // 'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'is_approved' => 0,
            'approved_date' => "000:00"
        ]);
        
        $user->facilities()->attach($data['facility']);
        
        return $user;
    }
    
    
    public function registerUser()
    {
//       return "i m here";
        $facilities = \App\Facility::all('name','id');
        $parents= \App\Facility::all()->where('parent_id',null);
        return view('auth.register',[
        'facilities' => $facilities,
        'parents' => $parents,
    ]);


        
      
    }
    
     public function postRegisterUser()
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

//        Auth::guard($this->getGuard())->login($this->create($request->all()));

        $data = array(
        'name' => $request->first_name." ".$request->last_name,
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('sadaf_cu@hotmail.com', 'welcome');

        $message->to($request->email)->subject('Registration emailS');

    });

        return redirect($this->redirectPath());
    }
    
    public function getCredentials($request)
    {
        $credentials = $request->only($this->loginUsername(), 'password');

        return array_add($credentials, 'is_approved', '1');
    }
}
