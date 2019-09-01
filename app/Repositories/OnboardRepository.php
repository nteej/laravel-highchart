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
use Illuminate\Support\Facades\DB;

class OnboardRepository implements OnboardRepositoryInterface
{
    protected $chart;

    function __construct()
    {
        $categoryArray = array(
            '0',
            '20',
            '40',
            '50',
            '70',
            '90',
            '99',
            '100'
        );
        $this->chart = [
            "chart" => [
                "type" => "spline"
            ],
            "credits" => [
                "enabled" => false
            ],
            "title" => ["text" => "Onboarding Flow Weekly Retention Insight"]
            ,
            "subtitle" => ["text" => "Source: temper.work/dev-test.php"]
            ,
            "yAxis" => [
                "title" => ["text" => "Onboard Progress"],
                "labels" => [
                    "format" => "{value}%"
                ],
                "min" => "0",
                "max" => "100"
            ],
            "xAxis" => [
                "categories" => $categoryArray
            ],

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

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all()
    {
        return Onboard::all();
    }

    public function getInsights()
    {
        $insight = Onboard::select(
            [
                DB::raw('DATE_ADD(created_at, INTERVAL(2-DAYOFWEEK(created_at)) DAY) AS week_start'),
                DB::raw('CONCAT(YEAR(created_at), "/", WEEK(created_at))'),
                DB::raw('SUM(CASE WHEN onboarding_perentage <= 100 THEN 1 ELSE 0 END) AS Step1'),
                DB::raw('SUM(CASE WHEN onboarding_perentage > 0 AND onboarding_perentage <= 100 THEN 1 ELSE 0 END) Step2'),
                DB::raw('SUM(CASE WHEN onboarding_perentage > 20 AND onboarding_perentage <= 100 THEN 1 ELSE 0 END) Step3'),
                DB::raw('SUM(CASE WHEN onboarding_perentage > 40 AND onboarding_perentage <= 100 THEN 1 ELSE 0 END) Step4'),
                DB::raw('SUM(CASE WHEN onboarding_perentage > 50 AND onboarding_perentage <= 100 THEN 1 ELSE 0 END) Step5'),
                DB::raw('SUM(CASE WHEN onboarding_perentage > 70 AND onboarding_perentage <= 100 THEN 1 ELSE 0 END) Step6'),
                DB::raw('SUM(CASE WHEN onboarding_perentage > 90 AND onboarding_perentage <= 100 THEN 1 ELSE 0 END) Step7'),
                DB::raw('SUM(CASE WHEN onboarding_perentage = 100 THEN 1 ELSE 0 END) Step8')
            ]
        )
            ->groupBy('created_at')
            ->orderBy(DB::raw('YEAR(created_at)'), 'ASC')
            ->orderBy(DB::raw('WEEK(created_at)'), 'ASC')
            ->get();
        return $this->processInsight($insight);

    }

    private function processInsight($insight)
    {
        foreach ($insight as $item) {
            $series = array();
            for ($i = 1; $i <= 8; $i++) {
                if ($i == 1) {
                    $series[] = 100;
                } else {
                    $series[] = round(($item->{"Step" . $i} / $item->Step1) * 100);
                }
            }
            $dataSeries = array(
                "name" => $item->week_start,
                "data" => $series
            );
            $this->chart ["series"] [] = $dataSeries;
        }
        return $this->chart;
    }

}