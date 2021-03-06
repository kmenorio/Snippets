<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snippets - Submit your work.</title>
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
        <div class="content-body">
            <form method="post" name="story" onsubmit="return validateForm()"> 
                <table> 
                    <tr>
                        <td class="tlabel">Title:</td>
                        <td><input type="text" name="title"></td> 
                    </tr> 
                    <tr>
                        <td class="tlabel">Alias:</td>
                        <td><input type="text" name="alias"></td> 
                    </tr> 
                    <tr>
                        <td class="tlabel">Text:</td>
                        <td><textarea name="text"></textarea> 
                    </tr> 
                    <tr>
                        <td class="tlabel">Tags:</td>
                        <td><input type="text" name="tags" placeholder="e.g. horror,fantasy (Don't leave a space in between!)"></td> 
                    </tr>
                    <tr>
                        <td class="tlabel"></td>
                        <td><input class="button-link" type="submit" value="SUBMIT"></td> 
                    </tr> 
                </table> 
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/verify_submit.js"></script>
</body>
</html>