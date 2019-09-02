<?php

namespace App\Http\Controllers;

use App\Repositories\OnboardRepositoryInterface;
use Illuminate\Http\JsonResponse;

/**
 * Class OnboardController
 * @package App\Http\Controllers
 */
class OnboardController extends Controller
{
    /**
     * @var OnboardRepositoryInterface
     */
    protected $insight;

    /**
     * OnboardController constructor.
     * @param OnboardRepositoryInterface $onboard
     */
    public function __construct(OnboardRepositoryInterface $onboard)
    {
        $this->insight = $onboard;
        $this->middleware('auth');
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

    /**
     * @return JsonResponse
     */
    public function insight()
    {
        $insight = $this->insight->getInsights();
        return response()->json($insight)->setEncodingOptions(JSON_NUMERIC_CHECK);
    }


}
