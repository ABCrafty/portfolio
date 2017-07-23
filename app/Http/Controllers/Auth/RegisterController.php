<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UsersRequest;
use App\Models\Role;
use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/';

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


    protected function create() {
        return view('ammaAuth.register');
    }

    protected function store(UsersRequest $request) {
        $input = $request->all();

        foreach($input as $key => $value)
            if($value == null || !isset($key))
                $input[$key] ='';

        $role = Role::updateOrCreate([
            'name' => 'guest',
            'display_name' => 'Invité',
            'description' => 'Role basique sur le site',
        ]);

        $user = User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => $input['password'],
            'description' => '',
            'avatar' => ''
        ]);

        $user->attachRole($role);

        auth()->login($user);

        return redirect()->route('home');

    }
}
