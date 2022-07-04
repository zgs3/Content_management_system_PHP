<?php
require_once "login.php";
include_once "bootstrap.php";

if (isset($_POST['newTitle'])) {
  $newPage = new Models\Pages($_POST['newTitle'], $_POST['newContent']);
  $entityManager->persist($newPage);
  $entityManager->flush();
  header("Location: " . $rootPath . "admin");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../src/styles/styles.css" rel="stylesheet" type="text/css" />
  <title>CMS Admin</title>
</head>

<body>
  <div <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
          ? print("style = \"display: block\"")
          : print("style = \"display: none\"") ?>>

    <?php include "adminHeader.php" ?>

    <div class="container">
      <div class="editBlockHead flex">
        <h2>Add new page </h2>
        <a href="<?php echo $rootPath . "admin" ?>" class="mainLink">Cancel</a>
      </div>
      <div class="editFormDiv">
        <form action="" method="POST">
          <div class="flex">
            <label for="newTitle">Title:</label>
            <input type="text" name="newTitle" placeholder="New page title"><br>
          </div>
          <label for="newContent">Content:</label><br>
          <textarea name="newContent" cols="100" rows="18" maxlength="1000000" placeholder="New page content in HTML"></textarea><br>
          <div>
            <input type="submit" value="Submit" class="mainLink">
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  include "src/views/partials/Footer.php";
  ?>
  </div>
</body>

</html>