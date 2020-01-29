<?php

namespace App\Http\Controllers;

use App\homePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $home = new homePage();
        $home->title = request('title');
        $home->body = request('body');
        $home->save();

        return redirect('/admin');
    }

    public function edit($id)
    {
        $home = homePage::find($id);

        switch (request()->input('action')) {
            case 'update':
                request()->validate([
                    'title' => 'required',
                    'body' => 'required',
                ]);
                $home->title = request('title');
                $home->body = request('body');
                $home->save();
                break;
            case 'delete':
                $home->delete();
                break;
        }

        return redirect('/admin');
    }
//
//    public function update($id)
//    {
//        $home = homePage::find($id);
//        $home->body = request('body');
//        $home->save();
//    }
//
//    public function destroy($id)
//    {
//        $home = homePage::find($id);
//        $home->delete();
//    }
//
//    public function create()
//    {
//        return view('dashboard.homeAdd');
//    }

//    public function edit()
//    {
//        $home = DB::table('homePage')->get();
//        return view('dashboard.homeEdit', [
//            'home' => $home,
//        ]);
//    }

}
