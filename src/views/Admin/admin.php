<?php
require_once "login.php";
include_once "bootstrap.php";

if (isset($_POST['newTitle'])) {
  $newPage = new Models\Pages($_POST['newTitle'], $_POST['newContent']);
  $entityManager->persist($newPage);
  $entityManager->flush();
  header("Location: " . $rootPath . "admin");
}

if (isset($_GET['pageDelete'])) {
  $pageDelete = $entityManager->find('Models\Pages', $_GET['pageDelete']);
  $entityManager->remove($pageDelete);
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
  <link rel="icon" href="src/assets/admin.png" />
  <link href="src/styles/styles.css" rel="stylesheet" type="text/css" />
  <title>CMS Admin</title>
</head>

<body>
  <div id="loginForm" <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
                        ? print("style = \"display: none\"")
                        : print("style = \"display: block\"") ?>>
    <h2>Enter Username and Password</h2>
    <form action="" method="post" <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
                                    ? print("style = \"display: none\"")
                                    : print("style = \"display: block\"") ?>>
      <div>
        <input type="text" name="username" placeholder="Username = Admin" required autofocus></br>
        <input type="password" name="password" placeholder="Password = 1234" required>
      </div>
      <button type="submit" name="login">LOG IN</button>
      <h4><?php echo ($loginMsg); ?></h4>
    </form>
  </div>
  <div <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
          ? print("style = \"display: block\"")
          : print("style = \"display: none\"") ?>>

    <?php include "adminHeader.php" ?>

    <div class="container">
      <h2>Existing pages:</h2>
      <div class="pageListDiv">
        <?php
        print("<table>");
        print("<tr>");
        print("<th>Page title</th>");
        print("<th>Actions</th>");
        print("</tr>");
        foreach ($pages as $page) {
          $id = $page->getId();
          $title = $page->getTitle();
          print("<tr>");
          print("<td>" . $title . "</td>");
          print("<td><div>");
          print("<a class='mainLink' href='" . $_SERVER["REQUEST_URI"] . "/edit?id=$id'>Edit</a>");
          if ($title !== "Home") {
            print("<a class='mainLink' href='javascript:pageDelete(" . $id . ");'>Delete</a>");
          }
          print("</div>");
          print("</td>");
          print("</tr>");
        }
        print("</table>");
        print("<div><a class='mainLink' href='" . $_SERVER["REQUEST_URI"] . "/create'>Add new page</a></div>");
        ?>
      </div>
    </div>
    <?php
    include "src/views/partials/Footer.php";
    ?>
  </div>

  <script>
    function pageDelete(id) {
      if (confirm("Are you sure you want to delete the page?")) {
        window.location.href = '<?php print($_SERVER["REQUEST_URI"]) ?>?pageDelete=' + id;
      }
    }
  </script>
</body>

</html>