<?php

namespace App\Http\Controllers\User;

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
        $user = $this->validator($request->all());
    }

    public function validator(array $data)
    {
        $validator = \Validator::make($data, [
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password'  => 'required|string|min:6'
        ]);
        if ($validator->fails()) {
            return 0;
        }
        $user = $this->registionRepository->create([
            'name'  => $data['name'],
            'email'  => $data['email'],
            'password'  => bcrypt($data['password'])
        ]);
        $this->guard()->login($user);

        $this->response([
            'user' => Auth::user(),
            'status' => 'success'
        ]);
    }

    public function guard()
    {
        return Auth::guard();
    }
}
