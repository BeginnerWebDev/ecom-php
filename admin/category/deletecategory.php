<?php
include_once('../db/config.php');
$id = $_GET['id'];
$is_delete = 0;
$sql = $con->prepare("update category set is_delete=? WHERE id=?");
$sql->bindParam(1, $is_delete);
$sql->bindParam(2, $id);
$sql1 = $con->prepare("SELECT * FROM category WHERE id=?");
$sql1->bindParam(1, $id);
$sql1->execute();
$product_data = $sql1->fetchAll();
foreach ($product_data as $data) {
    $proimg = $data['cat_image'];
}
if ($sql->execute()) {
    if (file_exists('./upload/categoryimg/' . $proimg)) {
        unlink('./upload/categoryimg/' . $proimg);
    }
    header('Location:http://localhost/ecomerce/admin/category/category.php');
}
