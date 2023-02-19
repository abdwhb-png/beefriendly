<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\UserRolesServiceProvider;
use App\Models\User;

class HomeController extends Controller
{
    protected $userRoles = UserRolesServiceProvider::ROLES;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $count_all_users = User::where('type', $this->userRoles['user'])->get();
        $count_all_users = count($count_all_users);
        $users = User::where('type', $this->userRoles['user'])->orderBy('id')->paginate(15);
        return view('adminHome', compact('count_all_users', 'users'));
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
