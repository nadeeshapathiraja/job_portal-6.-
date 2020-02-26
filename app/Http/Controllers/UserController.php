<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function updateAccess($id){

        $users=User::find($id);
        $users->userApprove=1;
        $users->save();
        return redirect()->back();

    }

    public function updateNotAccess($id){

        $users=User::find($id);
        $users->userApprove=0;
        $users->save();
        return redirect()->back();

    }
    public function destroy($id)
    {
        // $candidateDeleteProfile=User::find($id);
        // $candidateDeleteProfile->delete($id);
        // return redirect()->back();

        $post =User::where('id',$id)->first();

        if ($post != null) {
            $post->delete();
            return redirect()->back()->with(['message'=> 'Successfully deleted!!']);
        }

        return redirect()->back()->with(['message'=> 'Wrong ID!!']);
    }

}
