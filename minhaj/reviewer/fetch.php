<?php

session_start();
if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
    $pass = $_SESSION['Password'];

    $con = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
    $sql1 = mysqli_query($con, "SELECT * FROM reviewer where email='$name' && password='$pass'");
    $review = mysqli_fetch_assoc($sql1);
    $dept = $review['dept'];

    if (isset($_POST['view'])) {
// $con = mysqli_connect("localhost", "root", "", "notif");
        if ($_POST["view"] != '') {
            $update_query = "UPDATE abstract SET comment_status = 1 WHERE comment_status=0";
            mysqli_query($con, $update_query);
        }
        $query = "SELECT * FROM abstract where subTheme='$dept' ORDER BY id DESC LIMIT 5";
        $result = mysqli_query($con, $query);
        $output = '';
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output .= '
  <li>
  <a href="http://localhost:10080/minhaj/reviewer/abstract.php">
  <strong>' . $row["firstAuthor"] . '</strong><br />
  <small><em>' . $row["subTheme"] . '</em></small>
  </a>
  </li>
  ';
            }
        } else {
            $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
        }
        $status_query = "SELECT * FROM abstract WHERE comment_status=0";
        $result_query = mysqli_query($con, $status_query);
        $count = mysqli_num_rows($result_query);
        $data = array(
            'notification' => $output,
            'unseen_notification' => $count
        );
        echo json_encode($data);
    }
}
?>
