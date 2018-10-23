<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
    {
        $this->middleware('auth:api');
    }
 
    public function index()
    {
        return User::latest()->paginate(10);
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
        $this->validate($request,[
            'name' => 'required|string| max:255',
            'password' => 'required| min:6',
            'email' => 'required|email|required'
            ]);
        return User::create([

            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
            'type' => $request->type,
            'photo' => $request->photo,
            'bio' => $request->bio,
            'password' => Hash::make($request['password'])
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

      public function profile()
    {
        return auth('api')->user();

       
    }

     public function updateProfile( Request $request)
    {

        $user =  auth('api')->user();
         $this->validate($request,[
            'name' => 'required|string| max:255',
            'password' => 'sometimes| min:6',
            'email' => 'required|email|unique:users,email,'.$user->id,
            ]);

        

         if ($request->photo != $user->photo) {
        $name = time(). '.'. explode('/',
            explode(':',
             substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];

        \Image::make($request->photo)->save(public_path('img/profile/').$name);

        $request->merge(['photo' => $name]);
        }

        if (!empty($request->password)) {
            $request->merge(['password' => Hash::make($request['password'])]);
        }

        $user->update($request->all());
        // $name;
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
        $user = User::findOrFail($id);
        $this->validate($request,[
            'name' => 'required|string| max:255',
            'password' => 'sometimes| min:6',
            'email' => 'required|email|unique:users,email,'.$user->id,
            ]);

    $user->update($request->all());

        return ['message' => 'User update succesfully'];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();
 
        return ['message'=> 'User deleted successfully'];
    }
}
