<?php

namespace App\Http\Controllers;

use App\archive;

class ArchiveController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
}

