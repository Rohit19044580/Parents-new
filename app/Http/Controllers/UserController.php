<?php

namespace App\Http\Controllers;

use App\User;
use App\type;
use App\Parents;
use Illuminate\Http\Request;
use Session; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view('users.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $types = type::all();
        // return $types;

        return view('users.create')->with(['types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            // 'profilePicture'=>'required',
            'email' => 'required',
            'accountId' => 'required',
            'password' => 'required',
            
            ]);

            $users=User::all();
            foreach ( $users as $u ) {
                if ( $u->email == $request->email ) {
                    $msg = "Email already Exists.";
              
                            return redirect()->route('users.create')
                            ->withErrors($msg);
                }
                
            }          
        User::create($request->all());


        return redirect()->route('users.index')
                        ->with('success','Registered successfully.');
    }
    public function logout(Request $request)
    {
        // Auth::logout();
        Session::flush();
        return redirect()->route('users.index')
                        ->with('success','Loged out successfully.'); 
    }


    public function login(Request $request)
    {
        // return $request->email;
        request()->validate([
            // 'profilePicture'=>'required',
            'email' => 'required',           
            'password' => 'required',
            
            ]);

            $users=User::all();
            $found=true;
           
            foreach ( $users as $u ) {
                if ( ($u->email == $request->email) && ($u->password==$request->password) ) {
                    $loggedUser=$u;
                    $type=type::find( $loggedUser->typeId);  
                    $role= $type->name;   
                    $found=true;              
                    
                    Session::put('role', $role);
                    Session::put('user', $u);
                    Session::put('loggedIn', true);

                    return view('students.home');
                 
      
       
                
                
                
            }  
        }
            if(!$found)    {
    $msg = "Email or Password is incorrect!.";
              
                    return redirect()->route('users.index')
                    ->withErrors($msg);
            }    
        
    }



   

    

}