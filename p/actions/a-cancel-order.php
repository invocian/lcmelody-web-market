<?php require "./includes/header.php";

$id = $_POST['id'];

if ($id =="")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}


    $thequery1 = "UPDATE t_orders  SET `o_status` = '0' WHERE `o_id`='$id' AND `o_owner_cid`='$customerSessionId');";
    if ($conn->query($thequery1) === TRUE)
          show_result("success","that order has been canceled successfully","","","Lc Melody","current");
    else
          show_result("error","order is not cancled","","","Lc Melody","current");



require "./includes/footer.php";?>
