<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
   
        $users=User::where('username','!=','admin')->get();
        return view('listuser',compact('users'));
    }

    public function create(Request $request){

        return view('registration');
    }

        public function store(Request $request){

            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
                // other rules...
            ]);
           $data=$request->all();

           $registerdata=User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
            'city'=>$request->city,
            'gender'=>$request->gender,
            'hobbies'=>$request->hobbies,
            'view_user'=>$request->view_user,
            'edit_user'=>$request->edit_user,
            'create_user'=>$request->create_user,
            'delete_user'=>$request->delete_user,

           ]);

            if($registerdata){
                return redirect()->route()->with('success','Data Added Successfully');
            }
            else{
                return redirect()->back()->with('msg','Data not added');
            }

        }

        public function edit($id){
            
            dd($id);       
        }


}
