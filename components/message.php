

<section class="message">
    <div class="container">

        <p class="message">
            <?php
            if ($msg){
                echo ($msg);
            }
            if ($_SESSION['msg']){
                echo "<script>alert(\"Вы успешно вышли.\");</script>";
                $_SESSION['msg'] = null;
            }
            ?>
        </p>

    </div>
</section>






<!---->
<?php
//
////prompt function
//function prompt($prompt_msg){
//    if ($prompt_msg){
//        echo("<script alert='alert/javascript'> var answer = alert('".$prompt_msg."'); </script>");
//    }
//    if ($output_msg){
//        echo ($_SESSION['msg']);
//        $_SESSION['msg'] = null;
//    }
//
//}
//
////program
//$prompt_msg = "Вы успешно вошли в систему";
//
//$output_msg = "Вы успешно вышли из системы";
//echo("<script alert='alert/javascript'> var answer = alert('".$output_msg."'); </script>");
//
//
//?>