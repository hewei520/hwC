<?php


/**
 * @file index
 * @synopsis index文件
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/9
 */
class index
{
    public $i = 0;
    public function __construct($i = 0){
        if(!empty($i)){
            $this->i = $i;
        }
    }

    public function getI(){
        return $this->i;
    }
}