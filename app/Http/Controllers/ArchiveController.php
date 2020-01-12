<?php

namespace App\Http\Controllers;

use App\archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$years = \DB::table('archives')->distinct()->pluck('year');
		$persons = \DB::table('archives')->get();
//		dd($persons);
		return view("archive", [
			'years' => $years,
			'persons' => $persons,
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\archive  $archive
	 * @return \Illuminate\Http\Response
	 */
	public function show(archive $archive)
	{
		$person = \DB::table('archive')->where('name', $archive)->firstOrFail();
		return view("news", [
			'person' => $person
		]);
	}

	/**
	 * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function edit(archive $archive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, archive $archive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function destroy(archive $archive)
    {
        //
    }
}
