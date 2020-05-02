<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateUserRequest;



class Usuariocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
        $usuarios=User::all();
        //*dd($usuarios);
        return view('usuarios.index',compact('usuarios'));
                    //*$nombre='Edilson';
                   //* $apellido='Mamani';
                   //* return view('login',compact('nombre','apellido'));
                  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterUserRequest $request)
    {
       // dd($request->name);
        $usuario=new User();
        $usuario->name=$request->name;
        $usuario->email=$request->email;
        $usuario->password =  Hash::make( $request->password);
        $usuario->save();
        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //devuelve una vista
        // dd($id);
        $usuario= User::find($id);
    
return view('usuarios.edit',compact('usuario'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        //actualizacion
        $usuario=User::find($id);
        $usuario->name=$request->name;
        $usuario->email=$request->email;
        $usuario->update();
        return redirect('usuarios');
       // dd($id);
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
       // User::delete($id);
       // return redirect()->route('usuarios.destroy');
        $usuario = User::find($id);
        
        $usuario->delete();
 
        return redirect()->route('usuarios.index');
            

    }
    public function usuarioRegister(Request $request){
     
        dd($request);

    }

    public function getFormulario(){
        
        return view('login');
    }

}
