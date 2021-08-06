<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;
use DB;
use Auth;
use Input;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Crypt;

class LoginController extends Controller
{

    public function index()
    {
        return view('Login.login');
    }

    public function signin()
    {
        return view('Login.signin');
    }

    public function login(Request $request)
    {        
        //return $request->input();
              //$name       = $request->name;
             //$password   = $request->password;

        //  if(Auth::attempt(['name' => $name, 'password' =>$password])){
        // return redirect()->intended('/display');
        //}

        $user= User::where('name', $request->input('name'))->get();
       if(($user[0]->password)==$request->input('password'))
       {
        $request->session()->put('user', $user[0]->name);
        $request->session()->put('id', $user[0]->id);
        return redirect()->route('Login.userinfo', $user[0]->id);
       }

       else
       {        
          return redirect()->route('Login.signin')
                            ->with('error', 'Username & password incorrect');
            
        }

        
       
       
    }
    
         
 



    public function logincreate(Request $request)
    {
        // $user = new User;
        // $user->name = $request->input('name');
        // $user->password = Crypt::encrypt($request->input('password'));
        // $user->email = $request->input('email');
        // $user->state = $request->input('state');
        // $user->city = $request->input('city');

        // $user->save();

        User::create($request->all());

        return redirect()->route('Login.display')
                        ->with('success','Information Created Successfully.');
        
    }


    public function display()
    {   
        //  if(Auth::guest()){
        //  return redirect()->route('Login.signin');
        //  }

        $results = DB::select('select * from users');
        //$results = User::latest()->paginate(5);
        return view('Login.display',compact('results', $results))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


       public function destroy($id){  
       
        //$var=var_dump(parse_url($url, PHP_URL_QUERY));
        $del = DB::table('users')->delete($id);
       //$del= DB::table('users')->where('id', $id)->delete();      
        //$del= DB::delete('DELETE FROM users WHERE id = ?', [$id]);
       //DELETE FROM `users` WHERE `users`.`id` = $id

        //$result->delete();

        if ($del=true) {                    
                         
                return redirect()->route('Login.display')

                            ->with('success', 'Product Delete Succesfully');
            

            } 
        

       }


       public function info($id){

        $results = DB::Table('users')->select('*')->where('id', $id)->get();

        return view('Login.userinfo',compact('results', $results));

        }


        public function edit($id){

        $results = DB::Table('users')->select('*')->where('id', $id)->get();

        return view('Login.edit',compact('results', $results));

        }


        public function update(Request $request, User $result)
        {
           //return $request->input();
           $data = User::find($request->id);
           $data->name=$request->name;
            $data->email=$request->email;
            $data->state=$request->state;
            $data->city=$request->city;

            $data->save();
            //$results = DB::Table('users')->where('id', $id)->update( [ 'name' => $result['name'], 'email' => $result['email'], 'state' => $result['state'], 'city' => $result['city'] ]);
           //$result->update($request->all());
           //$result->save();

           return redirect()->route('Login.display')
                           ->with('success','Information Updated Successfully.');
            
        }


        public function logout(Request $request){

            $request->session()->flush();
            return redirect('/login');
        }


}