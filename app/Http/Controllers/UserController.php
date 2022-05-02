<?php

namespace App\Http\Controllers;

use App\Http\Controllers\action\UtilitiesController;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles  = Role::where('disabled', false)->get();
        $permissions  = Permission::where('disabled', false)->get();
        $users = User::all();
        return view('users.index', compact('roles', 'users', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {

            $this->validate($request, [
                'first_name' => 'required|bail|string',
                'last_name' => 'required|bail|string',
                'phone' => 'required|bail|string',
                'email' => 'required|bail|email',
                'employee_id' => 'required|bail',
                'role' => 'required|bail',
                'username' => 'required|bail|string',
                'password' => 'required|string|confirmed|min:6',
                'picture' => 'image|nullable|max:4999',
            ]);


            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->employee_id = $request->employee_id;
            $user->username = $request->username;
            $user->role_id = $request->role;
            $user->permission_id = $request->permission;
            $user->password = Hash::make($request->password);
            $image = $request->file('picture');
            if ($request->hasFile('picture')) {
                $call = new UtilitiesController();
                $fileNameToStore = $call->fileNameToStore($image);
                $user->picture = $fileNameToStore;
            }
            $user->save();

            // try {
            //     $email = $user->email;
            //     $admin = 'info@campdavid.com.ng';
            //     Mail::to($email)
            //         ->bcc($admin)
            //         ->send(new NewAccount($user->id));
            //     Log::alert("email sent sucessfully for to {$email}");
            // } catch (\Throwable $th) {
            //     Log::alert("new account email to {$email} failed to send due to " . $th->getMessage());
            //     // return redirect()->route('user.biodata')->with('error', $th->getMessage());
            // }

            return redirect()->back()->with('success', 'New User Added Successfully!');
        } catch (ValidationException $th) {
            Log::alert($th->validator->errors()->first());
            return redirect()->back()->withInput()->with('error', $th->validator->errors()->first());
        } catch (\Throwable $th) {
            Log::alert($th->getMessage());
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {

            $this->validate($request, [
                'first_name' => 'required|bail|string',
                'last_name' => 'required|bail|string',
                'phone' => 'required|bail|string',
                'email' => 'required|bail|email',
                'employee_id' => 'required|bail',
                'role' => 'required|bail',
                'username' => 'required|bail|string',
                'password' => 'nullable|string|confirmed|min:6',
                'picture' => 'image|nullable|max:4999',
            ]);

            // $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->employee_id = $request->employee_id;
            $user->username = $request->username;
            $user->role_id = $request->role;
            $user->permission_id = $request->permission;
            if ($request->password != null) {
                $user->password = Hash::make($request->password);
            }
            $image = $request->file('picture');
            if ($request->hasFile('picture')) {
                $call = new UtilitiesController();
                $fileNameToStore = $call->fileNameToStore($image);
                $user->picture = $fileNameToStore;
            }
            $user->save();

            return redirect()->back()->with('success', 'User Updated Successfully!');
        } catch (ValidationException $th) {
            Log::alert($th->validator->errors()->first());
            return redirect()->back()->withInput()->with('error', $th->validator->errors()->first());
        } catch (\Throwable $th) {
            Log::alert($th->getMessage());
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'Record Deleted Successfully');
    }
}
