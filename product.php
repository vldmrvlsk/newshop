<?php

require('products_db_old.php');
require('components/header.php');

$id = $_GET['product_id'];

$title = get_product_title($id);
$img_url = get_img_url($id);

require('components/product_info.php');
require('components/footer.php');