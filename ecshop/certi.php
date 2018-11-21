<?php

/**
 * ECSHOP 证书反查文件
 * $Author: wangleisvn $
 * $Id: certi.php 16075 2009-05-22 02:19:40Z wangleisvn $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'includes/cls_certificate.php');
$cert = new certificate();
/*------------------------------------------------------ */
//-- 获取证书反查地址
/*------------------------------------------------------ */
$return = array();
$temp_arr = $_POST;
$store_key = STORE_KEY;
$certi_ac = $cert->make_shopex_ac($temp_arr,$store_key);
if($_POST['certi_ac'] == $certi_ac ){
    $token = $_POST['token'];
    $license = $_POST['license'];
    $node_id = $_POST['node_id'];
    $return = array(
        'res' => 'succ',
        'msg' => '',
        'info' => ''
        );
        echo json_encode($return);exit;
}else{
    $return = array(
        'res' => 'fail',
        'msg' => '000001',
        'info' => 'You have the different ac!'
        );
        echo json_encode($return);exit;
}

?>