<?php

namespace App\Http\Controllers;

use App\Onboard;
use App\Repositories\OnboardRepositoryInterface;
use Illuminate\Http\Request;

class OnboardController extends Controller
{
    protected $insight;

    public function __construct(OnboardRepositoryInterface $onboard)
    {
        $this->insight = $onboard;
    }

    /**
     * Display a listing of the resource.
     *
     * @param OnboardRepositoryInterface $onboard
     * @return void
     */
    public function index()
    {
        //
        $data=[
            'insights'=>$this->insight->all()
        ];
        var_dump($data);

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Onboard $onboard
     * @return \Illuminate\Http\Response
     */
    public function show(Onboard $onboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Onboard $onboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Onboard $onboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Onboard $onboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Onboard $onboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Onboard $onboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Onboard $onboard)
    {
        //
    }
}
