<?php
include('connect.php');

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $sql = "DELETE FROM `uploads` WHERE id = '$delete_id'";

    $re = mysqli_query($con, $sql);

    if ($re) {
?>
<script>
window.location.href = "./view_uploads.php";
</script>
<?php
    }
}

?>