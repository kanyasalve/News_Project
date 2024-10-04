<?php
if($_SESSION["user_role"]=='0'){
    header("Location:{$hostname}/admin/post.php");
}
    
include "config.php";
$cat_id=$_GET['cat_id'];
$sql="delete from category where category_id={$cat_id}";

if(mysqli_query($conn,$sql)){
    header("Location:{$hostname}/admin/category.php");
}else{
    echo "<p style = 'color:red;
    margin:10px 0;'>can not delete the category record.</p?";

}
mysqli_close($conn);
?>