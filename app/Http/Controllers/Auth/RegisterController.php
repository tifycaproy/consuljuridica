<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     public function list()
     {
          $usuarios = DB::table('users')
                          ->join('role_user', 'users.id', '=', 'role_user.user_id')
                          ->join('roles', 'roles.id', '=', 'role_user.role_id')
                         ->select('users.name','users.email','roles.description','users.created_at')
                         ->get();

          // dd($usuarios);
          return view('Backend.usuarios',['usuarios'=>$usuarios]);
     }
     public function form()
     {
         return view('auth.register');
     }
    protected function create(Request $request)
    {
      // dd($data);
            $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        $user->roles()
            ->attach(Role::where('name', 'user')->first());
            $usuarios = DB::table('users')
                            ->join('role_user', 'users.id', '=', 'role_user.user_id')
                            ->join('roles', 'roles.id', '=', 'role_user.role_id')
                           ->select('users.name','users.email',DB::raw('roles.name as rol'),'users.created_at')
                           ->get();
        return  view('Backend.usuarios',['usuarios'=>  $usuarios]);
    }
}
