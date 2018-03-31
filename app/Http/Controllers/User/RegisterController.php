<?php

namespace App\Http\Controllers\User;

use App\Http\Resources\RegisterResource;
use App\Repositories\User\RegistionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RegisterController extends Controller
{
    protected $registionRepository;

    public function __construct(RegistionRepository $registionRepository)
    {
        $this->registionRepository = $registionRepository;
    }

    public function showRegisteionForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        return $this->validator($request->all());
    }

    public function validator(array $data)
    {

        $validator = \Validator::make($data, [
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password'  => 'required|string|min:6'
        ]);


        if ($validator->fails()) {
            return self::failed('参数错误， 用户名或邮箱可能已经存在');
        }
        $user = $this->registionRepository->create([
            'name'  => $data['name'],
            'email'  => $data['email'],
            'password'  => bcrypt($data['password']),
            'avatar'    => 'images/avatar/20160203022635285.png'
        ]);

        $this->guard()->login($user);
        return self::success(new RegisterResource(Auth::user()));

    }

    public function guard()
    {
        return Auth::guard();
    }
}
