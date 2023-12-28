<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserForm;
use GuzzleHttp\Promise\Create;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
    public function index()
    {
        return view("create");
    }

    public function create(Request $request)
    {
        $user = new UserForm();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->country = $request->country;
        $user->subject = $request->subject;
        $user->save();
        return view('create');
    }
    public function Read()
    {
        $getData = UserForm::all();
        // dd($getData);
        return view('Read', ['getData' => $getData]);
    }
    public function Delete($id)
    {
        $user = UserForm::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('Read')->with('success', 'User deleted successfully');
        } else {
            return redirect()->route('Read')->with('error', 'User not found');
        }
    }
    public function update($id)
    {
        $userUpdate = UserForm::find($id);
        return view('create', ['userUpdate' => $userUpdate]);
    }
    public function UserUpdate(Request $request, $id)
    {
        $user =  UserForm::find($id);
        dd('$user');
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->country = $request->country;
        $user->subject = $request->subject;
        // dd($user);
        $user->save();

        return view('create');
    }
}
