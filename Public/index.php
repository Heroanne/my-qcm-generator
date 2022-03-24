
<?php 

function vd($parms) {
    echo "<pre>";
    print_r($parms);
    echo "</pre>";
    exit;
}
// vd($qcm);

require '../app/Manager/QcmManager.php';


$qcmManager = new QcmManager;
$qcm = $qcmManager -> getAll();


require '../template/index.tpl.php'

?>