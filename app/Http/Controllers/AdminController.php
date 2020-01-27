<?php

namespace App\Http\Controllers;

use App\archive;
use Auth;
use Illuminate\Http\Request;

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
            'position' => 'required'
        ]);

        $archive = new archive();
        $archive->year = request('year');
        $archive->name = request('name');
        $archive->position = request('position');
        $archive->save();

        return redirect('/admin');
    }

    // Show the form for editing the specified resource.
    public function edit()
    {
//        dd(\request());
        $years = \DB::table('archives')->orderBy('year', 'desc')->distinct()->pluck('year');
        $persons = \DB::table('archives')->get();
        $users = \DB::table('users')->orderBy('id', 'asc')->get();
        return view("dashboard", [
            'years' => $years,
            'persons' => $persons,
            'users' => $users,
        ]);
    }

    // Update the specified resource in storage.
    public function update($id)
    {
        request()->validate([
            'year' => ['required', 'numeric', 'max:2050', 'min:1350'],
            'name' => 'required',
            'position' => 'required'
        ]);

        $archive = archive::find($id);
        $archive->year = request('year');
        $archive->name = request('name');
        $archive->position = request('position');
        $archive->save();

        return redirect('/admin');
    }

//     Remove the specified resource from storage.
    public function destroy($id)
    {
        $archive = archive::find($id);
        $archive->delete();
        return redirect('/admin');
    }

}
