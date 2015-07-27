<!doctype html>
<head>

    <!-- Meta -->
    <meta charset="utf-8">

    <title>Handerblad | PHP Web Developer</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Styles -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300|Pathway+Gothic+One">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="build/handerblad.min.css">



</head>
<body>
<div class="container">

    <?php
    $birthDate = "06/26/1987";
    $birthDate = explode("/", $birthDate);
    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
    ?>

    <div class="row" id="logo_cont">
        <div id="logo">
            <span class="small" id="small_title">PHP Web developer</span>
            <span class="small" id="small_img"><img id="profile_img" src="lib/img/i.jpg" /></span>
            <span class="big" id="big_age"><?=$age;?></span>
            <span class="big" id="big_h">Ha</span>
            <div id="left">
                <span class="small" id="small_hannes">Hannes Anderblad</span>
                <span class="small" id="small_age">1987</span>
                <span class="small" id="small_sthlm">Stockholm</span>
            </div>
        </div>
    </div>

    <div class="row">
        <h1>Hello!</h1>
        <div class="col-md-12 main">
            <p>I am a web developer with PHP, HTML/CSS, MySQL and Javascript/jQuery, integrated with Wordpress or MVC-­based framework.</p>
            <p>To find out if I am currently looking for work, check my <a href="https://www.linkedin.com/pub/hannes-anderblad/2a/b53/493">LinkedIn</a>.</p>
        </div>
    </div> 

    <hr/>

    <div class="row work">
        <h1>Places of work</h1>
        <div class="col-md-4 main">
        <a href="http://www.framtidsutveckling.se/" target="_blank">
            <h2>Framtidsutveckling AB, 2015</h2>
            <img class="logo_img" src="lib/img/fra.png" />
        </a>
        </div>
        <div class="col-md-4 main">
            <a href="http://improveme.se/" target="_blank">
                <h2>Skönhetsportalen AB, 2013 - 2015</h2>
                <img class="logo_img" src="lib/img/imp.png" />
            </a>
        </div>
        <div class="col-md-4 main">
            <a href="http://agigen.se/" target="_blank">
                <h2>Agile Generation AB, 2012</h2>
                <img class="logo_img" src="lib/img/agi.png" />
            </a>
        </div>
    </div> 

    <hr>

    <div class="row">

        <h1>Experience</h1>
        <div class="col-md-6 main">
            <h2>Languages</h2>
            <ul>
                <li>HTML5 + CSS</li>
                <li>PHP​­</li>
                <li>MySQL​­</li>
                <li>JavaScript/jQuery</li>                
            </ul>
        </div>
        <div class="col-md-6 main">
            <h2>CMS & Frameworks</h2>
            <ul>
                <li>Wordpress​­</li>
                <li>Drupal​­</li>
                <li>Codeigniter​­</li>
                <li>CakePHP​­</li>
                <li>Zend Framework​­ </li>
            </ul>
        </div>
    
        <div class="col-md-6 main">
            <h2>Awesome tools</h2>
            <ul>
                <li>GITHUB</li> 
                <li>Vagrant/Virtualbox</li>
                <li>GRUNTJS</li>
                <li>Adobe Photoshop Adobe Illustrator</li>
                <li>Bootstrap/Foundation CSS LESS</li>
                <li>RSS/Podcasting Mailchimp/Getanewsletter Google Analytics</li>
                <li>Google DFP/Analytics</li>
            </ul>
        </div>   

        <div class="col-md-6 main">

            <h2>Education</h2>
            <p>
                <ul>
                    <li>Webbutveckling, serversidan​ 7.5p, Stockholms universitet.</li>
                    <li>IT, medier och design,​180p, Södertörns högskola. </li>
                    <li>Mediainriktning,​International IT College of Sweden gymnasium.</li>
                </ul>
            </p>   

        </div>

    </div>

    <hr/>

    <div class="row article">
        <h1>Some side projects</h1>
        <div class="col-md-12 main">
            <h2><a href="">Bättre Aftonbladet</a> – A site that curls aftonbladets latest articles and displays them nicer (cURL, XML).</h2>
            <h2><a href="">Facebook Bingo</a> – Play Bingo with your facebook-feed (jQuery)</h2>
        </div>
    </div> 

    <hr>

    <div class="row">
        <h1><a href="/p/">Random portfolio</a></h1>
        <div class="col-md-12 main">
            <p>This is a folder with exercises and stuff I'm working on. Most of it won't work.</p>
        </div>
    </div> 

    <hr>

    <p>Contact: <a href="https://www.linkedin.com/pub/hannes-anderblad/2a/b53/493">LinkedIn</a></p>

    <!-- Scripts -->
    <script src="lib/jquery.min.js"></script>
    <script src="lib/bootstrap.min.js"></script>
    <script src="build/handerblad.min.js"></script>

</div>
</body>
</html>