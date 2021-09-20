<?php
include 'model/model.php';
$model = new Model();
$userID = $_REQUEST['userID'];
$delete = $model->delete($userID);
if ($delete) {
    echo "<script>alert('Deleted!');</script>";
    echo "<script>window.location.href='.?page=record';</script>";
} else {
    echo "<script>alert('empty');</script>";
    echo "<script>window.location.href='record.php';</script>";
}
?>
<script src="assets/back.js"></script>