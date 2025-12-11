<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\departments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class DepartementsController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index()
    {
       
        $users = departments::all();
       // $users_ = DB::connection('mysql_external')->table('Departments')->get();

        //return view('user.index', ['users' => $users]);
       
        return response()->json($users);
    }

    public function store(Request $request)
  {
     $user = departments::create($request->validate([
            'department_name'   => 'required|string'
           
        ]));
        
         return response()->json($user, 201);
        // return response()->json([
        //     'message' => 'User registered successfully!',
        //     'user' => $user,
        // ], 201);
  }

   public function update(Request $request, departments $post)
    {

        //  $post = Validator::make($request->all(), [
        //     'department_name' => 'required|string|max:255'
        
        // ]);

    
         if ($post->fails()) {
            return response()->json([
                'data' => [],
                'message' => $post->errors(),
                'success' => false
            ]);
        }

         $post->update([
            'department_name' => $request->get('department_name')
          
        ]);

          return response()->json([
           // 'data' => new departments($post),
            'message' => 'Post updated successfully',
            'success' => true
        ]);
    }
}