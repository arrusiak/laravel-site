<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
class ProfileService
{
    /**
     * @return Application|Factory|View
     */
    public function profiles()
    {
        $users = User::all();
        return view('profiles', compact('users'));
    }
}
