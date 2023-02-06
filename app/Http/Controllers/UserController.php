<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usersModel;
use App\Models\usersInfoModel;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function addnewuser(Request $request)
    {
        $validos = $request->validate([
            'fullname' => 'required|max:100',
            'emailuser' => 'required',
            'pass1' => 'required',
            'pass2' => 'required',
            'terms' => 'required'
        ]);
            if($request->input('pass1') != $request->input('pass1')){
                return redirect()->back();
                } else {
                    $strPassLink = base64_encode(
                        $request->input('emailuser')
                        .md5($request->input('pass1'))
                        ).'_|_'.$request->input('pass1');
                };
        try {
            $users = new usersModel;
                $users->email = $request->input('emailuser');
                $users->snhpwd = $strPassLink;
                $users->save();
            $userinfo = new usersInfoModel;
                $userinfo->fullname = $request->input('fullname');
                $userinfo->user_id = $users->id;
                $userinfo->save();
                return 'usuario salvo!!';
            } catch (\Exception $e) {
                //print_r($e).
                echo "Faill!";
            };
    }
}
