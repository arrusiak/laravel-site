<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\ProfileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class ProfileController extends Controller
{
    public $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    /**
     * @return Application|Factory|View
     *
     */
    function profile(){
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('profile', $data);
    }

    /**
     * @return Collection|User[]
     */
    function profiles()
    {
        return $this->profileService->profiles();
    }
}
