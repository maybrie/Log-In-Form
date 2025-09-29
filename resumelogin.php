<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: loginform.php");
    exit();
}

$name = "Faye Carubio";
$title = "Lead UX/UI Designer";
$phone = "+63 927 822 4121";
$email = "faye@gmail.com";
$instatwitgit = "fayebcarubio";

$profile = "I am a Lead Designer highly experienced in solving <strong>performance, accessibility</strong>, and <strong>User experience issues</strong>.
I spent the last 10 years <strong>designing websites and applications</strong> & pushing organizations forward. <br> I also have hands-on experience in <strong>PHP development</strong>, creating web systems using <strong>XAMPP</strong>, which gives me a solid understanding of <strong>Front-End and Back-End constraints</strong>.
This allows me to fill the gap between designers and developers in a team, delivering solutions based on <strong>Atomic Design</strong> and tools like <strong>Design Systems</strong>.";

$skills = ["User Experience (UX)", "Web Developer", "Wireframing / Prototyping", 
           "User Interface / Design (UI)", "Front-End Development", "Back-End Development"];

$tools = ["Figma, Framer", "WordPress", "PHP, MySQL", "VS Code, Git", "XAMPP", "Laravel"];

$projects = [
    "<strong>https://github.com/maybrie/Inventory-Management-System",
    "<strong>https://</strong> https://github.com/maybrie/Basic-POS-System",
    "<strong>https://</strong> – https://github.com/maybrie/Shape-Identifier",
    "<strong>https://</strong> – https://github.com/maybrie/Water-Refilling-System"
];

$trainings = [
    "Engaging in topic of Cybersecurity",
    "Engaging in topic of Network",
    "DEVCON (April 23, 2023)",
    "Computer Networking"
];

$languages = ["English: technical, conversational"];
$extras = ["Dancer, Singer", "Speaker/Writer"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?> - Resume</title>
    <style>
    body {
        margin: 0;
        background: #ccc;
        display: flex;
        justify-content: center;
    }

    .letter {
        width: 230mm;
        height: 340mm;
        background: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        font-family: Arial, sans-serif;
        line-height: 1.9;
    }

    .header {
        background: #1e2a38;
        color: white;
        padding: 20px 40px;
        display: flex;
        align-items: center;
        gap: 30px;
        height: 35mm;
    }
    .header img.profile {
        border-radius: 50%;
        width: 90px;
        height: 90px;
        object-fit: cover;
        display: block;
        margin-left: 30px;
    }

    .header-columns {
        display: grid;
        grid-template-columns: 1.6fr 1.6fr 1fr; 
        width: 100%;
        gap: 20px;
    }

    .header-columns div {
        font-size: 15px;
        line-height: 1.6;
    }

    .header-columns img.icon {
        width: 20px;
        height: 20px;
        margin-right: 8px;
        vertical-align: middle;
        border-radius: 0;
        object-fit: contain;
    }

    .left h1 {
        font-size: 22px;
        margin: 0 0 6px 0;
        color: #ffffff;
    }
    .left p { 
        margin: 0;
        font-size: 14px;
        font-weight: 500;
        color: #dcdcdc;
    }

    .left p.title {
        display: inline-block;           
        font-size: 15px;
        font-weight: 700;
        margin: 0;

        background: linear-gradient(90deg, #01DCBA 0%, #FA1BF2 100%);
        -webkit-background-clip: text;    
        -webkit-text-fill-color: transparent;
        background-clip: text;           
        color: transparent;           
    }

        .username p {
        font-size: 15px;
        font-weight: 550;
        margin-top: 2px;
        text-align: center;
    }
        .social-icons {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 0px;
        margin-bottom: 5px;
    }

    .social-icons .icon-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
    }

    .social-icons .icon-wrapper img {
        width: 23px;
        height: 23px;
        margin-left: 9px;
        align-items: center;
    }

    .social-icons .icon-wrapper::after {
        content: " ";
        display: block;
        width: 1px;
        height: 15px; 
        background: #4B78C4;
        margin-top: 5px;
    }

    .container {
        padding: 15mm;
        padding-top: 3mm;
        line-height: 2;
        
    }

    .section-title {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 18px;
        font-weight: bold;
        color: #3a73d9;
        margin: 20px 0 10px;
        line-height: 2.5;   
    }

    .section-title img {
        width: 24px;
        height: 24px;
    }

    .line {
        flex: 1;
        height: 1px;
        background: #4B76C4;
    }

    ul {
        list-style: none; 
        padding: 0;
        margin: 0;
        padding-left: 10px;
    }

    ul li {
        margin: 6px 0;
        padding-left: 35px; 
        background: url("dot.png") no-repeat left center;
        background-size: 12px 7.66px; 
    }

    strong {
        font-weight: bold;
        color: #000;
    }

    .two-column {
        display: grid;
        grid-template-columns: 1.4fr 1.3fr;
        gap: 5px;
        padding-top: 0.1px;
    }
    </style>
</head>
<body>
<div class="letter">
    <div class="header">
        <img src="me.jpg" alt="Profile Picture" class="profile">
        <div class="header-columns">
            <div class="left">
                <h1><?php echo $name; ?></h1>
                <p class="title"><?php echo $title; ?></p>
            </div>

            <div class="middle">
                <p><img src="telephone.png" alt="telephone" class="icon"> <?php echo $phone; ?></p>
                <p><img src="email.png" alt="email" class="icon"> <?php echo $email; ?></p>
            </div>

                <div class="right">
            <div class="social-icons">
                <div class="icon-wrapper">
                    <img src="twitter.png" alt="Twitter" class="icon">
                </div>
                <div class="icon-wrapper">
                    <img src="github.png" alt="GitHub" class="icon">
                </div>
                <div class="icon-wrapper">
                    <img src="insta.png" alt="LinkedIn" class="icon">
                </div>
            </div>
            <div class = username>
            <p><?php echo $instatwitgit; ?></p>
            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <div class="section-title">
                <img src="profile.png" alt="Profile Icon">
                <span>Profile</span>
                <div class="line"></div>
            </div>
            <p><?php echo $profile; ?></p>
        </div>

        <div class="two-column">
            <div class="section">
                <div class="section-title">
                    <img src="Main Skills.png" alt="Skills Icon">
                    <span>Main Skills</span>
                    <div class="line"></div>
                </div>
                <ul>
                    <?php foreach ($skills as $skill) { echo "<li>$skill</li>"; } ?>
                </ul>
            </div>

            <div class="section">
                <div class="section-title">
                    <img src="Tools Languages.png" alt="Tools Icon">
                    <span>Tools & Languages</span>
                    <div class="line"></div>
                </div>
                <ul>
                    <?php foreach ($tools as $tool) { echo "<li>$tool</li>"; } ?>
                </ul>
            </div>
        </div>

        <div class="section">
            <div class="section-title">
                <img src="Side Projects.png" alt="Projects Icon">
                <span>Side Projects</span>
                <div class="line"></div>
            </div>
            <ul>
                <?php foreach ($projects as $project) { echo "<li>$project</li>"; } ?>
            </ul>
        </div>

        <div class="two-column">
            <div class="section">
                <div class="section-title">
                    <img src="Trainings & Education.png" alt="Education Icon">
                    <span>Trainings & Education</span>
                    <div class="line"></div>
                </div>
                <ul>
                    <?php foreach ($trainings as $training) { echo "<li>$training</li>"; } ?>
                </ul>
            </div>

            <div class="section">
                <div class="section-title">
                    <img src="Languages & Extras.png" alt="Languages Icon">
                    <span>Languages & Extras</span>
                    <div class="line"></div>
                </div>
                <ul>
                    <?php foreach ($languages as $lang) { echo "<li>$lang</li>"; } ?>
                    <?php foreach ($extras as $extra) { echo "<li>$extra</li>"; } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>

