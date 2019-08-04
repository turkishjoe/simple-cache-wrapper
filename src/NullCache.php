<?php

namespace Cache;

class NullCache implements CacheInterface {
    /**
     * @param $key
     * @param $value
     * @return void
     */
    public function store($key, $value){

    }

    /**
     * Returns false if no data
     *
     * @param $key
     * @return mixed
     */
    public function retrieve($key){
        return false;
    }
}