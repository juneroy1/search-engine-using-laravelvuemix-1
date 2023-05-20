<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserStoreRequest;
use Validator;
use App\Contracts\UserServiceInterface;

class UserController extends Controller
{
    public $userService;
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userCreate(UserStoreRequest $request){

        $validated = $request->validated();      
        
        try{
            $userService = $this->userService->createUser($validated); 
        }catch(Exception $e){
            // else error
            return response()->json([
                    'sucess'    => false,
                    'message'   => $e->getMessage(),
            ]);
        }
        // check if success
        // return response with data created
        return response()->json([
            'sucess'    => true,
            'message'   => 'Successfully created new User',
            'data'      => $userService
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
