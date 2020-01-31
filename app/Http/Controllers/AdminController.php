<?php

namespace App\Http\Controllers;

use App\archive;
use App\homePage;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /*
        // Display the specified resource.
        // actually this method never used I was just playing with it
        public function show(archive $archive)
        {
            $person = \DB::table('archive')->where('name', $archive)->firstOrFail();
            return view("news", [
                'person' => $person
            ]);
        }
    */

    // Show the form for creating a new resource.
    public function create()
    {
        return view('dashboard.addArchive');
    }

    // Store a newly created resource in storage.
    public function store()
    {
        request()->validate([
            'year' => ['required', 'numeric', 'min:1350', 'max:2050'],
            'name' => 'required',
            'position' => 'required',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'phone' => 'nullable|numeric',
            'email' => 'nullable|email',
            'avatar' => 'nullable|image',
        ]);

        $archive = new archive();

        if (\request('avatar') != null) {
            // name the new one
            $avatarName = 'new_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();
            // store it with the name
            request()->avatar->storeAs('public/archives', $avatarName);
            // update the name in the database
            $archive->avatar = $avatarName;
        }

        $archive->year = request('year');
        $archive->name = request('name');
        $archive->position = request('position');
        $archive->twitter = request('twitter');
        $archive->linkedin = request('linkedin');
        $archive->phone = request('phone');
        $archive->email = request('email');
        $archive->save();

        return redirect('/admin');
    }

    // Show the form for editing the specified resource.
    public function edit()
    {
        $years = \DB::table('archives')->orderBy('year', 'desc')->distinct()->pluck('year');
        $persons = \DB::table('archives')->get();
        $users = \DB::table('users')->orderBy('id', 'asc')->get();
        $homes = \DB::table('home_pages')->get();
        return view("dashboard", [
            'years' => $years,
            'persons' => $persons,
            'users' => $users,
            'homes' => $homes,
        ]);
    }

    // Update the specified resource in storage.
    public function update($id)
    {

        request()->validate([
            'year' => ['required', 'numeric', 'max:2050', 'min:1350'],
            'name' => 'required',
            'position' => 'required',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'phone' => 'nullable|numeric',
            'email' => 'nullable|email',
            'avatar' => 'nullable|image',
        ]);

        $archive = archive::find($id);

        if (\request('avatar') != null) {
            // delete the old avatar if it's not the default one
            if ($archive->avatar != 'user.jpg')
                try {
                    unlink(storage_path('app/public/archives/' . $archive->avatar));
                } catch (\Exception $e) {
                    log::error('probably did not find the old image');
                }
//            name the new one
            $avatarName = $archive->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();
            // store it with the name
            request()->avatar->storeAs('public/archives', $avatarName);
            // update the name in the database
            $archive->avatar = $avatarName;
        }
        $archive->year = request('year');
        $archive->name = request('name');
        $archive->position = request('position');
        $archive->twitter = request('twitter');
        $archive->linkedin = request('linkedin');
        $archive->phone = request('phone');
        $archive->email = request('email');
        $archive->save();

        return redirect('/admin');
    }

//     Remove the specified resource from storage.
    public function destroy($id)
    {
        $archive = archive::find($id);
        unlink(storage_path('app/public/archives/' . $archive->avatar));
        $archive->delete();
        return redirect('/admin');
    }

    public function update_avatar($id)
    {
        request()->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $archive = archive::find($id);
        //delete the old avatar if it's not the default one
        if ($archive->avatar != 'user.jpg')
            unlink(storage_path('app/public/archives/' . $archive->avatar));
        //name the new one
        $avatarName = $archive->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();
        // store it with the name
        request()->avatar->storeAs('public/archives', $avatarName);
//        update the name in the database
        $archive->avatar = $avatarName;
        $archive->save();

        return redirect('admin');
    }

}
