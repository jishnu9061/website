<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Holidays extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('system-settings.weekend_holiday');
    }
    public function addholiday()
    {
        return view('system-settings.add_new_holiday');
    }
    public function holiday2017()
    {
        return view('system-settings.holiday_2017');
    }
    public function holiday2018()
    {
        return view('system-settings.holiday_2018');
    }
    public function holiday2019()
    {
        return view('system-settings.holiday_2019');
    }
    public function holiday2020()
    {
        return view('system-settings.holiday_2020');
    }
    public function holiday2021()
    {
        return view('system-settings.holiday_2021');
    }
    public function holiday2022()
    {
        return view('system-settings.holiday_2022');
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
