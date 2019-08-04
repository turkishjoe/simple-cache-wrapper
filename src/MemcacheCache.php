<?php

namespace Cache;

class MemcacheCache implements CacheInterface {
    private $memcache;

    public function __construct($options)
    {
       $this->memcache = new \Memcache();
       $this->memcache->addServer(...$options);
    }

    /**
     * @param $key
     * @param $value
     * @return void
     */
    public function store($key, $value){
        $this->memcache->set($key, $value);
    }

    /**
     * Returns false if no data
     *
     * @param $key
     * @return mixed
     */
    public function retrieve($key){
        return $this->memcache->get($key);
    }
}