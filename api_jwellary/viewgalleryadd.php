<?php

include"connection.php";

$responce=array();

$result=mysqli_query($conn,"select * from tbl_gallery  where isdisplay='yes' ORDER BY gallery_id DESC LIMIT 3");

if($result)
{
    while($row = mysqli_fetch_assoc($result)){
        $responce["status"] = "true";
        $responce["message"] = "Found!";
        $responce["data"][] = $row;
    }
}
else{
    $responce["status"] = "false";
    $responce["message"] = "Found!";
}
echo json_encode($responce);

?>