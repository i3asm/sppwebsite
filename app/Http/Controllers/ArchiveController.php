<?php

namespace App\Http\Controllers;

use App\archive;

class ArchiveController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$years = \DB::table('archives')->orderBy('year', 'desc')->distinct()->pluck('year');
		$persons = \DB::table('archives')->get();
		return view("archive", [
			'years' => $years,
			'persons' => $persons,
		]);
	}

	// Display the specified resource.
	// actually this method never used I was just playing with it
	public function show(archive $archive)
	{
		$person = \DB::table('archive')->where('name', $archive)->firstOrFail();
		return view("news", [
			'person' => $person
		]);
	}

	// Show the form for creating a new resource.
	public function create()
	{
		return view('dashboard.addArchive');
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
		return view("DashBoard", [
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
