<?php
include_once('../db/config.php');
$id = $_GET['id'];
$is_delete = 1;
$sql = $con->prepare("update product set is_delete=? WHERE id=?");
$sql->bindParam(1, $is_delete);
$sql->bindParam(2, $id);
$sql1 = $con->prepare("SELECT * FROM product WHERE id=?");
$sql1->bindParam(1, $id);
$sql1->execute();
$product_data = $sql1->fetchAll();
foreach ($product_data as $data) {
    $proimg = $data['productimg'];
}
if ($sql->execute()) {
    if (file_exists('./upload/' . $proimg)) {
        unlink('./upload/' . $proimg);
    }
    header('Location:http://localhost/ecomerce/admin/product_list/product.php');
}
