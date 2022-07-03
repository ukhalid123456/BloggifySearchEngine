<?php
    require("connectdb.php");
    $item_id = $db->quote($_GET['id']);
            try {
                $query = "SELECT * FROM blogs WHERE pageID=$item_id";
                $result = $db->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Bloggify</title>

    <meta name="viewport" content="width=device-width, 
    initial-scale=1, maximum-scale=1", minimum-scale="1" />

    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <script type="text/javascript" src="contact.js"></script>
</head>
<body>
<section class="s1">
        <div class="main-container">

            <div class="nav">
                <a class="home" href="index.php">Bloggify.</a>
                <div class="nav-right">
                    <a id="contactButton" href="#" onclick="contactFunction(); return false;">Contact</a>
                </div>
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Search">
            </div>

            <div class="title">
            <?php
                $sn=1;
                while($data = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <h1><?php echo $data['title']; ?></h1>
                    <?php echo '<img width="400" height="300" src="data:image/jpeg;base64,'.base64_encode( $data['thumbnail'] ). '"/>';?>
                    <p><?php echo $data['information']; ?></p>
            <?php
                }
            ?>
            </div>
            <?php
        } catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
        ?>
</section>

</body>
</html>