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

interface OnboardRepositoryInterface
{
    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all();

    public function getInsights();

}