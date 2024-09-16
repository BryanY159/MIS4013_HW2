<?php
$pageTitle = "Post Result";
include "view-header.php";
?>

<h1>Post Result</h1>

<?php

echo getDisplay();

include "view-footer.php";

function getDisplay() {
  if(isset($_POST['post-text-box'])) {
      return "<p>The value sent is:</p>".echo $_POST['post-text-box'];
  } 
  else {
      return "<p>Nothing was posted to the page.</p>";
  }
}
?>
