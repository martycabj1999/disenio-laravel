<?php

namespace App\Http\Controllers;

use App\ScholarshipPerson;
use Illuminate\Http\Request;

class ScholarshipPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarshipPersons = ScholarshipPerson::all();
        return $scholarshipPersons;
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
     * @param  \App\ScholarshipPerson  $scholarshipPerson
     * @return \Illuminate\Http\Response
     */
    public function show(ScholarshipPerson $scholarshipPerson)
    {
        return ScholarshipPerson::where('id', $scholarshipPerson->id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScholarshipPerson  $scholarshipPerson
     * @return \Illuminate\Http\Response
     */
    public function edit(ScholarshipPerson $scholarshipPerson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScholarshipPerson  $scholarshipPerson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScholarshipPerson $scholarshipPerson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScholarshipPerson  $scholarshipPerson
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScholarshipPerson $scholarshipPerson)
    {
        //
    }
}
