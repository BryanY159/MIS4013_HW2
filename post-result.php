<?php
$pageTitle = "Post Result";
include "view-header.php";
?>

<h1>Post Result</h1>

<?php

if(isset($_POST['post-text-box'])) {
?>
  <p>The value sent is:</p>
<?php
  echo $_POST['post-text-box'];
} else {
?>
  <p>Nothing was posted to the page.</p>
<?php
}

include "view-footer.php";
?>
