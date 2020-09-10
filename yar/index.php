<?php


/**
 * @file index.php
 * @synopsis 服务端文件
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/9
 */
class index
{
    /**
     * the doc info will be generated automatically into service info page.
     * @params
     * @return
     */
    public function api($parameter, $option = "foo") {
        return 123;
    }
    protected function client_can_not_see() {
    }
}
$service = new Yar_Server(new index());
$service->handle();