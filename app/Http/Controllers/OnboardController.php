<?php

namespace App\Http\Controllers;

use App\Repositories\OnboardRepositoryInterface;

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
     * @return void
     */
    public function index()
    {
        return view('onboards.weekly-insight');
    }

    public function insight()
    {
        $insight = $this->insight->getInsights();
        return response()->json($insight)->setEncodingOptions(JSON_NUMERIC_CHECK);
    }


}
