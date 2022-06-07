<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snippets - Have a read.</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <div class="nav-bar">
        <div class="nav-title">
            <a href="index.php">
                <div class="title-name">Snippets</div>
                <div class="title-tag">Take a short break and have a read.</div>
            </a>
        </div>
        <div class="nav-link">
             <ul class="nav-list page-nav">
                <li><a href="browse.php">BROWSE</a></li>
                <li><a href="submit.php">SUBMIT</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul> 
        </div>
    </div>
    <div class='content'>
        <div class="content-title">FEATURED</div>
        <div class="content-body">
            <?php 

            include 'DBConnector.php';

            $sql = 'SELECT * FROM story ORDER BY date';
            $result = $conn -> query($sql);

            if($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()) {
                    echo '<div class="content-cont">'.
                            '<div class="story-info">'.
                                '<p><b>'.$row["title"].'</b></p>'.
                                '<p><em>'.$row["alias"].'</em></p>'.
                            '</div>'.
                            '<br/>'.
                            '<div class="story-info">'.
                                '<p>#horror</p>'.
                                '<div class="stat-cont">'.
                                    '<div class="stat-field">'.
                                        '<img src="img/view-filled.png" width="16" height="16" />'.
                                        '<p>156</p>'.
                                    '</div>'.
                                    '<div class="stat-field">'.
                                        '<img src="img/heart-filled.png" width="16" height="16" />'.
                                        '<p>109</p>'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                            '<div class="story-text">'.
                                '<p>';
                                echo nl2br($row["text"]);
                    echo '</p>'.
                            '</div>'.
                            '<div class="button-link">'.
                                '<button type="button"><a href="story.php">READ MORE</a></button>'.
                            '</div>'.
                        '</div>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>