<?php

namespace App\Repositories;

/**
 * Interface OnboardRepositoryInterface
 * @package App\Repositories
 */
interface OnboardRepositoryInterface
{

    /**
     * @return mixed
     */
    public function all();

    /**
     * @return mixed
     */
    public function getInsights();

}