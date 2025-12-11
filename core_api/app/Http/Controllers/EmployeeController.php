<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index()
    {
        $users = DB::connection('mysql_external')->table('employees')->get();

        //return view('user.index', ['users' => $users]);
         return response()->json($users);
    }
}