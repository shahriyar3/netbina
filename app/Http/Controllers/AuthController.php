<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;

class AuthController extends Controller
{
    /**
     * only logout method need auth middleware
     *
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth'])->only('logout');
    }

    /**
     * return login form
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Login validation with form request and attempt data to login
     *
     * @param LoginUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(LoginUserRequest $request)
    {
        if (!auth()->attempt($request->validated(), request('remember', false))) {
            return redirect()->back()->with('errors', [__('messages.Login Failed')]);
        }
        return redirect()->route('home');
    }

    /**
     * logout user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('message', __('messages.Logout Success'));
    }
}
