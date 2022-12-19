<?php
require('dbconnect.php');
require('components/header.php');

switch ($_GET['page']){
    case 'catalog':{
        require "components/products_list.php";
        break;
    }

    case 'product':{
        require "components/product_info.php";
        break;
    }

    default:{
        require('components/company_info.php');
    }
}
require('components/footer.php');
?>