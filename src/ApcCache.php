<?php

namespace Cache;

class ApcCache implements CacheInterface {
    /**
     * @param $key
     * @param $value
     * @return void
     */
    public function store($key, $value){
        apc_store($key, $value);
    }

    /**
     * Returns false if no data
     *
     * @param $key
     * @return mixed
     */
    public function retrieve($key){
        return apc_fetch($key);
    }
}
