<?php
require_once "login.php";
include_once "bootstrap.php";

if (isset($_POST['newTitle'])) {
  $pageEdit = $entityManager->find('Models\Pages', $_GET['id']);
  $pageEdit->__construct($_POST['newTitle'], $_POST['newContent']);
  $entityManager->persist($pageEdit);
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
      <!-- <main> -->
        <div class="editBlockHead flex">
          <h3>Editing "<?php print($pages[$_GET["id"] - 1]->getTitle()) ?>" page </h3>
          <a href="<?php echo $rootPath . "admin" ?>">Cancel</a>
        </div>
        <div class="editFormDiv">
          <form action="" method="POST">
            <div class="flex">
              <label for="newTitle">Title:</label>
              <input type="text" name="newTitle" value="<?php print($pages[$_GET["id"] - 1]->getTitle()) ?>"><br>
            </div>
            <label for="newContent">Content:</label><br>
            <textarea name="newContent" cols="100" rows="20"><?php print($pages[$_GET["id"] - 1]->getContent()) ?></textarea><br>
            <input type="submit" value="Submit">
          </form>
        </div>
    </div>
    <!-- </main> -->
  </div>
  <?php
  include "src/views/partials/Footer.php";
  ?>
  </div>
</body>

</html>