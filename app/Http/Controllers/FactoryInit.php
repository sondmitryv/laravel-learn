<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class FactoryInit extends Controller
{
    public function index(){
        $user = factory(User::class, 10)->create();
        dd($user);
    }
}
