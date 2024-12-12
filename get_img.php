<?php
/*
 * tncode 1.2
 * https://gitee.com/zhaoxianfang/tncode
 */
error_reporting(0);
require_once dirname(__FILE__) . '/TnCode.php';

$tn = new TnCode();
$tn->make([
    dirname(__FILE__) . '/bg/1.png',
    dirname(__FILE__) . '/bg/2.png',
    dirname(__FILE__) . '/bg/3.png'
]);
