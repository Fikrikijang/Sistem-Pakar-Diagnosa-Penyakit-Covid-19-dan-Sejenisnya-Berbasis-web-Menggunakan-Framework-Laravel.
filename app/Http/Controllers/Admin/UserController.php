<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('tipe', 'LIKE', '0')->latest()->paginate(5);
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'tipe' => 'required'
        ]);

        if ($request->input('password')) {
            $password = bcrypt($request->password);
        } else {
            $password = bcrypt('1234');
        }

        $user = User::create([
            'name' => $request->name,
            'foto' => $request->foto,
            'email' => $request->email,
            'tipe' => $request->tipe,
            'password' => $password
        ]);

        return redirect()->route('user.index')->with('status', 'User Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //      $this->validate($request, [
    //         'name' => 'required|min:3|max:100',
    //         'tipe' => 'required'
    //       ]);

    //      if($request->input('password')) {
    //         $user_data = [
    //             'name' => $request->name,
    //             'tipe' => $request->tipe,
    //             'password' => bcrypt($request->password)
    //             ];
    //      }
    //      else{
    //         $user_data = [
    //             'name' => $request->name,
    //             'tipe' => $request->tipe
    //             ];
    //      }

    //      $user = User::find($id);
    //      $user->update($user_data);

    //      return redirect()->route('user.index')->with('status','berhasil diupdate');


    // }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'tipe' => 'required'
        ]);

        $user = User::findorfail($id);

        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            $foto->move('uploads/posts/', $new_foto);

            if ($request->input('password')) {
                $user_data = [
                    'name' => $request->name,
                    'foto' => 'uploads/posts/' . $new_foto,
                    'tipe' => $request->tipe,
                    'password' => bcrypt($request->password)
                ];
            } else {
                $user_data = [
                    'name' => $request->name,
                    'tipe' => $request->tipe
                ];
            }
        }

        $user->update($user_data);

        return redirect()->route('user.index')->with('status', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('status', 'Data berhasil dihapus!');
    }
}
