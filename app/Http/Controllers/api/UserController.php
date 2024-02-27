<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = User::get();

        return response()->json([
            'message' => 'Data berhasil di temukan',
            'data' => $query,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddUserRequest $request)
    {

        $users = User::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil di buat',
            'data' => $users,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $user = User::find($id);

        if(!$user){
            return response()->json([
                'message' => 'Data tidak ditemukan',
                'data' => $null,
            ], 404);
        }

        return response()->json([
            'message' => 'Data berhasil ditemukan',
            'data' => $user,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);

        if(!$user){
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }
        $request->validate([
            'email' => 'required|email|unique:users,email,'. $user->id,
            'password' => 'required|min:6',
        ]);

        $user -> update($request->all());
    
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil di Update',
            'data' => $user,
        ], 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        User::destroy($id);

        return response()->json(
            [
                'success' => true,
                'message' => 'Data berhasil di hapus'
            ],
            200
        );
    }
}