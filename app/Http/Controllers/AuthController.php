<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogInRequest;
use App\Http\Requests\RegistrationRequest;
use App\Services\AuthService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * @return Application|Factory|View
     *
     */
    function login(){
        return view('auth.login');
    }

    /**
     * @return Application|Factory|View
     */
    function register(){
        return view('auth.register');
    }

    /**
     * Registration
     *
     * @param RegistrationRequest $req
     * @return RedirectResponse
     */
    function registration(RegistrationRequest $req): RedirectResponse
    {
        //        return (new AuthResource($authData))->toArray($req);
//        $validatedData = $req->validated();
        return $this->authService->registration($req);
    }

    /**
     * @param LogInRequest $req
     * @return RedirectResponse
     */
    function signIn(LogInRequest $req): RedirectResponse
    {
        return $this->authService->signIn($req);
    }

    /**
     * @return RedirectResponse
     */
    function logout(): RedirectResponse
    {
        return $this->authService->logout();
    }
}
