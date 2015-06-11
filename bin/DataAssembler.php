<?php
namespace pandaoknight\ACF;

class DataAssembler {
    public $ctime;

    static public function getInstance(){
        static $_inst = null;
        is_null($_inst) && $_inst = new static;
        return $_inst;
    }

    private function __construct(){
        $this->ctime = time();
        sleep(2);
    }
}

/// Inline test
if(!debug_backtrace()){
    print DataAssembler::getInstance()->ctime ."\n";
    print DataAssembler::getInstance()->ctime ."\n";
}
