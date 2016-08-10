<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <script type = "text/javascript" 
                src = "js/jquery-1.4.2.min.js">
        </script>
        <meta name="viewport" content="width=940">
        <title>
            tchm biz
        </title>
        
</head>
<body style="margin: 0"   onLoad="auto();">
    <div id="container">
        <div class="header_wrapper">
            <div class="header">
                <a href="#" class="logo" title="Drum Cussac Logo">
                    <img src="/images/homecare.png" alt="logo"/>
                </a>

                <ul id="navigation">
                    <li><span><a href="#" title="Accueil">Acceuil</a></span></li>
                    <li><span><a href="#" title="Accueil">TCHM</a></span></li>
                    <li><span><a href="#" title="Accueil">Notre Présence</a></span></li>
                    <li><span><a href="#" title="Accueil">Produits</a></span></li>
                    <li><span><a href="#" title="Accueil">Partenaires</a></span></li>
                    <li><span><a href="#" title="Accueil">Contact</a></span></li>
                </ul>
            </div>
        </div>

        <div class="content" onload="auto();">
            <div class="content">
                <img src="/images/index.jpeg" id="image1"/>
            </div>
            <div id="grid">
                <p>something is here</p>
            </div>
        </div>


        <div id="footer">
            <p>Footer</p>
            <span style="color: white">title</span>
            <a href="#">List one</a>
        </div>

    </div>
    <script type="text/javascript">
        var x = 0;
        var images = new Array("../images/index.jpeg", "../images/homecare.png", "../images/index2.jpeg");
        var i = setInterval(auto, 4000);

        function auto()
        {
            x++;
            if (x == images.length)
                x = 0;
            document.getElementById('image1').src = images[x];
        }
    </script>
</body>
</html>
