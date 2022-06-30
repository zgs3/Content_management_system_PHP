<?php
require_once "login.php";
include_once "bootstrap.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <!-- <main> -->
        <h3>Existing pages:</h3>
        <div class="pageListDiv">
          <?php
          print("<table>");
          print("<tr>");
          print("<th>Page name</th>");
          print("<th>Actions</th>");
          print("</tr>");
          foreach ($pages as $page) {
            $id = $page->getId();
            $title = $page->getTitle();
            print("<tr>");
            print("<td>" . $title . "</td>");
            print("<td><a href='" . $_SERVER["REQUEST_URI"] . "/edit?id=$id'>Edit</a></td>");
            print("</tr>");
          }
          print("</table>");
          ?>
        </div>
      <!-- </main> -->
    </div>
    <?php
    include "src/views/partials/Footer.php";
    ?>
  </div>
</body>

</html>