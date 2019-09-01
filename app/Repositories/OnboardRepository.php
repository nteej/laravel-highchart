<?php
/**
 *
 * Sprii, Dubai, United Arab Emirates
 * @category    Sprii
 * @author      Sprii Team <technical@sprii.com>
 * Copyright (c) 2017.  Sprii. (http://www.sprii.com)
 *
 */


namespace App\Repositories;

use App\Onboard;

class OnboardRepository implements OnboardRepositoryInterface
{
    protected $chart;

    function __construct()
    {
        $this->chart = [
            "title" => ["text" => "Retention curve chart that shows how far a group of users (weekly cohorts) has progressed through the Onboarding Flow"]
            ,
            "subtitle" => ["text" => "Source: temper.work/dev-test.php"]
            ,
            "yAxis" => ["title" => ["text" => "Onboard Progress %"]]
            ,
            "legend" => [
                "layout" => 'vertical',
                "align" => "right",
                "verticalAlign" => "middle"
            ],
            "plotOptions" => [
                "series" => [
                    "label" => [
                        "connectorAllowed" => false
                    ]
                ]
            ]
        ];

    }

    public function getInsights()
    {

    }

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all()
    {
        return Onboard::all();
    }
}