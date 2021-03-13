<?php
require_once('smarty_setting.php');
require_once('config/connect.php');

$qry = "SELECT `id`, `username`, `password` FROM `login_details` WHERE 1";

    $exec = mysqli_query($con, $qry);

    while($row = mysqli_fetch_object($exec))
     {
        $res[] = [
            'id' => $row->id,
            'username' => $row->username,
            'password' => $row->password
        ];
    }
//echo $_GET['formstatus']; exit;
$smarty->assign('title', 'Smarty');
$smarty->assign('listdata', $res);
$smarty->assign('formstatus', isset($_GET['formstatus']) ? $_GET['formstatus'] : null);
$smarty->display('index_login.tpl');
