<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(Request $request){
        $user = new User;
        if(User::where('username', $request->username)->first()){
            return redirect('/cadastro')->with('msg', 'O Nome de usuário já está em uso!');
        }else{
            $user->username = $request->username;
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            if  (User::where('email', $request->email)->first()){
                return redirect('/cadastro')->with('msg', 'O Email já está em uso!');
            }else{
                $user->email = $request->email;
                if ($request->password == $request->cpassword){
                    $user->password = bcrypt($request->password);
                    if($request->username == null || $request->name == null || $request->lastname == null || $request->email == null || $request->password == null ){
                        return redirect('/cadastro')->with('msg', 'Favor, preencher todos os campos!');
                    }
                    $user->save();
                    return redirect('/')->with('msg2', 'Usuário cadastrado com sucesso!');
                }else{
                    return redirect('/cadastro')->with('msg', 'As senhas não coincidem!');
                }
            }
        }
    }
    public function destroy(){
        $user = Auth::user();
        $user->delete();
        return redirect('/')->with('msg2', 'Perfil deletado com sucesso!');
    }
    public function update(Request $request){
        $user = Auth::user();
        if($request->password == null){
            $user->update([
                'username'=>$request->username,
                'name'=>$request->name,
                'lastname'=>$request->lastname,
                'email'=>$request->email
            ]);
        }else{
            $user->update([
                'username'=>$request->username,
                'name'=>$request->name,
                'lastname'=>$request->lastname,
                'email'=>$request->email, 
                'password'=>bcrypt($request->password)  
            ]);
        }
        return redirect('/perfil')->with('msg', 'Informações salvas com sucesso!');
    }
}