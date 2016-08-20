<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Role;

use App\Permission;

use App\Facility;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * User approval page
     */
    public function approval(Request $request, User $newUser)
    {
   //    return $newUser->facilities()->get()->toArray();
        
        if($newUser->is_approved == 0)
        {
           $roles=Role::all();
           $facility=$newUser->facilities()->get();
         //  return $facility[0]['id'];
           $branches= Facility::all()->where('parent_id',$facility[0]->id);
        return view('user.approval',[
            'newUser'=>$newUser,
            'roles'=>$roles,
            'branches'=>$branches
            ]);
        }
    }
    
    public function approved(Request $request)
    {
        
        $user=User::find($request->newUser);
        $user->facilities()->attach($request->to);
        $user->roles()->attach($request->role);
        $user->approved_by= $request->user()->id;
        $user->approved_date=date('Y-m-d H:i:s');
        $user->is_approved = 1;
        $user->save();

        $data = array(
        'name' => $user->first_name." ".$user->last_name,
    );

    Mail::send('emails.approved', $data, function ($message) {

        $message->from('sadaf_cu@hotmail.com', 'etoots_info');

        $message->to($user->email)->subject('Account Approval Email');

    });

        return redirect('/home');
        
        
    }
    
    public function decline(Request $request, User $newUser)
    {
        
        $user=User::find($newUser);
        
        $user->is_approved = 2;  //for decline
        $user->save();
        return redirect('/home');
        
        
    }
    
}
