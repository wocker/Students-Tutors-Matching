<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=auth()->user();
        return view('admin.profile.index',compact('user'));
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
        // email should belong to this domain:@ayudinga.org

        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:users,email,".$id ,
            // "email"=>"regex:/^[a-zA-Z0-9_.+-]+@ayudinga.org$/i"
        ]);

        $user=User::findOrFail($id);

        if($request->password){
            $request->validate([
                "password"=>"required|min:8",
                "old_password"=>"required",
            ]);

            if(!\Hash::check($request->old_password,$user->password)){
                return redirect()->back()->with("errors","La contraseña anterior es incorrecta");
            }

            $user->update([
                "password"=>bcrypt($request->password),
                "is_password_changed"=>true
            ]);
        }

        $user->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "position"=>$request->position,

        ]);


        return redirect()->route("admin.profile.index")->with("success","Actualizado con éxito");

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
