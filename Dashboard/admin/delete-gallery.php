<?php
include('../component/connection.php');

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $sql = "DELETE FROM `gallery`  WHERE id = '$delete_id'";

    $re = mysqli_query($con, $sql);

    if ($re) {
?>
<script>
window.location.href = "./overview-gallery.php";
</script>
<?php
    }
}

?>