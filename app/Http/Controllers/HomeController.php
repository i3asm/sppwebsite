<?php

namespace App\Http\Controllers;

use App\archive;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $years = \DB::table('archives')->orderBy('year', 'desc')->distinct()->pluck('year');
        $persons = \DB::table('archives')->get();
        return view("dashboard", [
            'years' => $years,
            'persons' => $persons,
        ]);

    }

    // Store a newly created resource in storage.
    public function store()
    {
        request()->validate([
            'year' => 'required',
            'name' => 'required',
            'position' => 'required'
        ]);

        $archive = new archive();
        $archive->year = request('year');
        $archive->name = request('name');
        $archive->position = request('position');
        $archive->save();

        return redirect('/dashboard');
    }

    // Show the form for editing the specified resource.
    public function edit(archive $archive)
    {
        $years = \DB::table('archives')->orderBy('year', 'desc')->distinct()->pluck('year');
        $persons = \DB::table('archives')->get();
        return view("dashboard", [
            'years' => $years,
            'persons' => $persons,
        ]);
    }

    // Update the specified resource in storage.
    public function update()
    {
        $archive = archive::find(request('id'));
        $archive->year = request('year');
        $archive->name = request('name');
        $archive->position = request('position');
        $archive->save();

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\archive $archive
     * @return \Illuminate\Http\Response
     */
    public function destroy(archive $archive)
    {
        $archive = archive::find(request('id'));
        $archive->delete();
        return redirect('/dashboard');
    }

}
