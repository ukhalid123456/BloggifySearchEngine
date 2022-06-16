<?php
    require("connectdb.php");
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
                <a class="home" href="index.html">Bloggify.</a>
                <div class="nav-right">
                    <a id="contactButton" href="#" onclick="contactFunction(); return false;">Contact</a>
                </div>
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Search">
            </div>

            <div class="posts-container">
                <?php   
		            try {

                    $query = "SELECT * FROM blogs";
                    $result = $db->query($query);
                    ?>
                    <?php
                    $sn=1;
                    
                    while($data = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <a href="displayBlog.php?id=<?php echo $data['pageID']?>"><div class="blogContainer">
                        <?php echo '<img style="width: 500px; height:1=500px" src="data:image/jpeg;base64,'.base64_encode( $data['thumbnail'] ). '"/>'; ?>
                            <?php echo $data['information']; ?>
                            <h1><?php echo $data['title']; ?></h1>
                        </div>
                        </a>
                        <?php
                    }
                    ?>
                    <?php
                    } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                    }
                ?>
            </div>
        </div>
    </section>

</body>
</html>