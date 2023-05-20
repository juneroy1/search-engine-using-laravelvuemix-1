<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userCreate(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'address' => 'required|max:255',
            'description' => 'required|max:255',
            'email' => 'required|max:255|email|unique:user',
        ]);
        

        if ($validator->fails()) {
            return response()->json([
                'sucess'    => false,
                'message'   => 'Validation errors',
                'data'      => $validator->errors()
            ],403);
        }         
        
        // get all data
        $data = $request->all();
        $data['name'] = $request->first_name.' '. $request->last_name;
        $data['password'] = '';

        // create user
        $user = User::create($data);

        // check if success
        if ($user) {

            // return response with data created
            return response()->json([
                'sucess'    => true,
                'message'   => 'Successfully created new User',
                'data'      => $user
            ]);
        }

        // else error
        return response()->json([
                'sucess'    => true,
                'message'   => 'Something went wrong',
        ]);

        
    }
    public function index()
    {
        $users = User::all();

        return response()->json([
            'users' => $users
        ],200);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
