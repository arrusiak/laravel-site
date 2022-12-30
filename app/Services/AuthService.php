<?php

namespace App\Services;

use App\Http\Requests\LogInRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * @param RegistrationRequest $req
     * @return RedirectResponse
     */
    public function registration(RegistrationRequest $req): RedirectResponse
    {
        $validatedData = $req->validated();
        $user = new User;
        $user->first_name =  $validatedData['first_name'];
        $user->last_name =  $validatedData['last_name'];
//        $user->profile_pic =  $validatedData->file('profile_pic')->getClientOriginalName();
        $user->profile_pic =  $req->file('profile_pic')->getClientOriginalName();
        $req->file('profile_pic')->storeAs('public/images', $user->profile_pic );

        $user->age =  $validatedData['age'];
        $user->email =  $validatedData['email'];
        $user->password =  Hash::make($validatedData['password']);
        $save =  $user->save();
//        $user = User::create($validatedData);
        if ($save){
            return back()->with('success', 'New User is created');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    /**
     * @param LogInRequest $req
     * @return RedirectResponse
     */
    public function signIn(LogInRequest $req): RedirectResponse
    {
        $validatedData = $req->validated();

        $userByEmail = User::where('email', '=', $validatedData['email'])->first();
        if (!$userByEmail){
            return back()->with('fail', 'Email does not exist');
        } else {
            if (Hash::check($validatedData['password'], $userByEmail->password)){
                $req->session()->put('LoggedUser', $userByEmail->id);
                return redirect('profile');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }


    /**
     * @return Application|RedirectResponse|Redirector|void
     */
    public function logout()
    {
      if (session()->has('LoggedUser')){
          session()->pull('LoggedUser');
          return redirect('auth/login');
      }
    }
}
