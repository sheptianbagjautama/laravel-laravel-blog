<?php

namespace App\Http\Controllers;

use App\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();

        return view('settings.index',compact('settings'));
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
        $this->validate($request, [
            'title' => 'required',
            'tagline' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);

        Setting::updateOrCreate([
            'id' => 1
        ], $request->all());


//        $setting = Setting::findOrFail(1);
////        $setting->id             = $request->get('id');
//        $setting->title             = $request->get('title');
//        $setting->tagline           = $request->get('tagline');
//        $setting->email             = $request->get('email');
//        $setting->phone             = $request->get('phone');
//        $setting->address           = $request->get('address');
//        $setting->so_facebook       = $request->get('so_facebook');
//        $setting->so_instagram      = $request->get('so_instagram');
//        $setting->so_twitter        = $request->get('so_twitter');
//
//        $setting->save;

        return redirect()->route('settings.index')->with('status','Berhasil mengubah data setting');
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
        $titleForm = "Edit Setting Data";
        $setting = Setting::findOrFail($id);

        return view('settings.edit',compact(['titleForm','setting']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $this->validate($request, [
//            'title' => 'required',
//            'tagline' => 'required',
//            'email' => 'required|email',
//            'phone' => 'required',
//            'address' => 'required'
//        ]);

        $setting = Setting::findOrFail($id);
        $setting->update($request->all());

        return redirect()->route('admin.settings.edit',['id' => $id])->with('status','Berhasil mengubah data setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
