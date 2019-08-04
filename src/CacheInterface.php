<?php

namespace Cache;

interface CacheInterface{
    /**
     * @param $key
     * @param $value
     * @return void
     */
    public function store($key, $value);

    /**
     * Returns false if no data
     *
     * @param $key
     * @return mixed
     */
    public function retrieve($key);
}