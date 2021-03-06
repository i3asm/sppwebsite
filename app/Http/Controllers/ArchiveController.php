<?php

namespace App\Http\Controllers;

use App\archive;
use App\homePage;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $index
     * @return Factory|View
     */
    public function index($index)
    {
//        $test = factory(\App\archive::class, 22)->create();

//		$years = DB::table('archives')->orderBy('year', 'desc')->distinct()->pluck('year');
        $persons = DB::table('archives')->get()->chunk(12);
        $count = $persons->count();
        if ($index > $count-1)
            abort(404);
        return view("prevLeaders", [
//			'years' => $years,
            'title' => "رابطة القادة",
            'persons' => $persons[$index],
            'pages' => $count
        ]);
    }

//	// Display the specified resource.
//	// actually this method never used I was just playing with it
//	public function show(archive $archive)
//	{
//		$person = \DB::table('archive')->where('name', $archive)->firstOrFail();
//		return view("news", [
//			'person' => $person
//		]);
//	}
//
//	// Show the form for creating a new resource.
//	public function create()
//	{
//		return view('dashboard.addArchive');
//	}
//
//	// Store a newly created resource in storage.
//	public function store()
//	{
//		request()->validate([
//			'year' => 'required',
//			'name' => 'required',
//			'position' => 'required'
//		]);
//
//		$archive = new archive();
//		$archive->year = request('year');
//		$archive->name = request('name');
//		$archive->position = request('position');
//		$archive->save();
//
//		return redirect('/dashboard');
//	}
//
//	// Show the form for editing the specified resource.
//	public function edit(archive $archive)
//	{
//		$years = \DB::table('archives')->orderBy('year', 'desc')->distinct()->pluck('year');
//		$persons = \DB::table('archives')->get();
//		return view("DashBoard", [
//			'years' => $years,
//			'persons' => $persons,
//		]);
//	}
//
//	// Update the specified resource in storage.
//	public function update()
//	{
//		$archive = archive::find(request('id'));
//		$archive->year = request('year');
//		$archive->name = request('name');
//		$archive->position = request('position');
//		$archive->save();
//
//		return redirect('/dashboard');
//	}
//
//	/**
//	 * Remove the specified resource from storage.
//	 *
//	 * @param \App\archive $archive
//	 * @return \Illuminate\Http\Response
//	 */
//	public function destroy(archive $archive)
//	{
//		$archive = archive::find(request('id'));
//		$archive->delete();
//		return redirect('/dashboard');
//	}
}
