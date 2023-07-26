<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>


  

<body>
<header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <div class="row header-content">
                    <div class="header-title col-md-8">
                      
                    </div>
                    <div class="header-menu col-md-4">
                        <ul>
                            <li>
                                <a href="index.php" style="opacity: 100%;">Home</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                            <li>
                                <a href="admin_panel.php"> Admin</a>
                            </li>
                            <li>
                                <a href="share_post.php"> Share Post</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

  <h1>Admin Panel</h1>
  <h2>Gönderilen Mesajlar</h2>
  <?php
 
    $db = new SQLite3('iletisim.db');


    $query = "SELECT * FROM contact";
    $result = $db->query($query);


    while ($row = $result->fetchArray()) {
      echo '<div class="post">';
      echo '<h3>' . $row['nam'] . ' - ' . $row['mail'] . ' - ' . $row['sub'] . '</h3>';
      echo '<p>' . $row['mes'] . '</p>';
      echo '<a href="delete_post.php?id=' . $row['id'] . '">Sil</a>';
      echo '</div>';
    }


    $db->close();
  ?>
</body>
</html>