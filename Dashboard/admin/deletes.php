
<?php
include('connect.php');

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
    $sql = "DELETE FROM `dos_out_rep` WHERE id = '$delete_id'";

    $re = mysqli_query($con,$sql);

    if($re){
        ?>
        <script>
            window.location.href="./out_rep.php";
        </script>
        <?php
    }

}

?>