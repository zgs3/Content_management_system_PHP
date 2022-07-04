<?php
require_once "login.php";
include_once "bootstrap.php";

if (isset($_POST['title'])) {
  $pageEdit = $entityManager->find('Models\Pages', $_GET['id']);
  $pageEdit->__construct($_POST['title'], $_POST['content']);
  $entityManager->persist($pageEdit);
  $entityManager->flush();
  header("Location: " . $rootPath . "admin");
}


$pageToEdit = $entityManager->find('Models\Pages', $_GET['id']);

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

        <h2>Editing "<?php print($pageToEdit->getTitle()) ?>" page </h2>
        <a href="<?php echo $rootPath . "admin" ?>" class="mainLink">Cancel</a>
      </div>
      <div class="editFormDiv">
        <form action="" method="POST">
          <div class="flex">
            <label for="title">Title:</label>
            <input type="text" name="title" value="<?php print($pageToEdit->getTitle()) ?>"><br>
          </div>
          <label for="content">Content:</label><br>
          <textarea name="content" cols="100" rows="20"><?php print($pageToEdit->getContent()) ?></textarea><br>
          <input type="submit" value="Submit">
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