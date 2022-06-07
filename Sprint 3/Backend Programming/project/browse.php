<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snippets - Browse stories.</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body onload="setCurrent(1)">
    <script type="text/javascript" src="js/browse_change.js"></script>
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
        <div class="nav-link">
             <ul class="nav-list nav-b"><form action="#" method="post">
                <li><a href="#"><input id="p1"  name="p1" type="submit" class="nav-p" value="TRENDING" onclick="setCurrent(1)"></a></li>
                <li><a href="#"><input id="p2"  name="p2" type="submit" class="nav-p" value="TOP" onclick="setCurrent(2)"></a></li>
                <li><a href="#"><input id="p3"  name="p3" type="submit" class="nav-p" value="NEW" onclick="setCurrent(3)"></a></li>
                <li><a href="#"><input id="p4"  name="p4" type="submit" class="nav-p" value="RANDOM" onclick="setCurrent(4)"></a></li>
                <li><a href="#"><input id="p5"  name="p5" type="submit" class="nav-p" value="TAGS" onclick="setCurrent(5)"></a></li>
            </ul> 
        </div>
        <div class="content-body">
            <!--TO BE POPULATED BY PHP-->
            <div class="content-cont">
                <div class="story-info">
                    <p><b>The Mask of the Red Death</b></p>
                    <p><em>eapoe</em></p>
                </div>
                <br/>
                <div class="story-info">
                    <p>#horror</p>
                    <div class="stat-cont">
                        <div class="stat-field">
                            <img src="img/view-filled.png" width="16" height="16" />
                            <p>156</p>
                        </div>
                        <div class="stat-field">
                            <img src="img/heart-filled.png" width="16" height="16" />
                            <p>109</p>
                        </div>
                    </div>
                </div>
                <div class="story-text">
                    <p>
                        The "Red Death" had long devastated the country. No pestilence had ever been so fatal, or so hideous. Blood was its Avatar and its seal - the redness and the horror of blood. There were sharp pains, and sudden dizziness, and then profuse bleeding at the pores, with dissolution. The scarlet stains upon the body and especially upon the face of the victim, were the pest ban which shut him out from the aid and from the sympathy of his fellow-men. And the whole seizure, progress and termination of the disease, were the incidents of half an hour.
                        <br/><br/>
                        But the Prince Prospero was happy and dauntless and sagacious. When his dominions were half depopulated, he summoned to his presence a thousand hale and light-hearted friends from among the knights and dames of his court, and with these retired to the deep seclusion of one of his castellated abbeys. This was an extensive and magnificent structure, the creation of the prince's own eccentric yet august taste. A strong and lofty wall girdled it in. This wall had gates of iron. The courtiers, having entered, brought furnaces and massy hammers and welded the bolts. They resolved to leave means neither of ingress or egress to the sudden impulses of despair or of frenzy from within. The abbey was amply provisioned. With such precautions the courtiers might bid defiance to contagion. The external world could take care of itself. In the meantime it was folly to grieve, or to think. The prince had provided all the appliances of pleasure. There were buffoons, there were improvisatori, there were ballet-dancers, there were musicians, there was Beauty, there was wine. All these and security were within. Without was the "Red Death."
                    </p>
                </div>
                <div class="button-link">
                    <button type="button"><a href="story.php">READ MORE</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>