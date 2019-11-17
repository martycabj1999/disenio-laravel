<?php

namespace App\Http\Controllers;

use App\ServiceEnrollment;
use Illuminate\Http\Request;

class ServiceEnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceEnrollments = ServiceEnrollment::all();
        return $serviceEnrollments;
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
     * @param  \App\ServiceEnrollment  $serviceEnrollment
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceEnrollment $serviceEnrollment)
    {
        return ServiceEnrollment::where('id', $serviceEnrollment->id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceEnrollment  $serviceEnrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceEnrollment $serviceEnrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceEnrollment  $serviceEnrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceEnrollment $serviceEnrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceEnrollment  $serviceEnrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceEnrollment $serviceEnrollment)
    {
        //
    }
}
