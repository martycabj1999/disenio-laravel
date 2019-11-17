<?php

namespace App\Http\Controllers;

use App\Quota;
use Illuminate\Http\Request;

class QuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotas = Quota::all();
        return $quotas;
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
     * @param  \App\Quota  $quota
     * @return \Illuminate\Http\Response
     */
    public function show(Quota $quota)
    {
        return Quota::where('id', $quota->id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quota  $quota
     * @return \Illuminate\Http\Response
     */
    public function edit(Quota $quota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quota  $quota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quota $quota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quota  $quota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quota $quota)
    {
        //
    }
}
