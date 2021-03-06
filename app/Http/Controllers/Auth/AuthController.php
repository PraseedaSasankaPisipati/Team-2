<?php
namespace App\Http\Controllers\Auth;
use App\User;
use App\Buildingmanager;
use App\Propertymanager;
use App\Worker;
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
    //protected $redirectTo = '/';
    protected function authenticated($request, $user)
    {
       if($user->role === 'admin') 
       {
          //  if($user->roleid===4){
           return redirect()->intended('/users');
        echo "Admin Underconstruction!";
    }
        
        if($user->role === 'pman'){
           
          return redirect()->intended('/properties');
           // echo "Property Manager";
        }
        else if($user->role === 'bman'){
            return redirect()->intended('/buildings');
        }
        else if($user->role === 'work'){
            return redirect()->intended('/workorders');
        }
        //else if($user->roleid === 0){
        //return redirect()->intended('/home');
    //}
    
    }
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
            'name' => 'required|max:255',
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
		
       
		if($data['role'] === 'bman'){
			//echo "Building $$$$$$$$$$$$$$$$$$$$$$$$ Manager";
			 Buildingmanager::create([
            'buildingmanager_name' => $data['name'],
            'buildingmanager_email' => $data['email'],
            'buildingmanager_mobilephone' => "963852741",
        ]);
		}	else if ($data['role'] === 'pman'){
				 Propertymanager::create([
            'propertymanager_name' => $data['name'],
            'propertymanager_email' => $data['email'],
            'propertymanager_mobilephone' => "963852741",
        ]);	
		}else if($data['role'] === 'work'){
			 Worker::create([
            'worker_name' => $data['name'],
            'worker_mobilephone' => "123456789",
            'worker_skills' => "Skills",
		]);
		}
		return  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role'=>$data['role']
        ]);
		
    }
}