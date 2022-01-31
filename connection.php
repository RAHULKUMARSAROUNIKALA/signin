<?php
$username="root";
$password="";
$server='localhost';
$db='formfill';
$con=mysqli_connect($server,$username,$password,$db);
if($con){
    ?>
    <script>
    alert('connction success');
    </script>
    <?php
    // echo"connection successful";
}else{
    echo"no successfull";
}

?>