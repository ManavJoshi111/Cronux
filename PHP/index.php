<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="icon" href="../Images/OTTplayer.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../css/home.css">
    <title>Cronux - OTT Ka Adda</title>
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- link of css file -->
</head>
<style>
    @import 'https://fonts.googleapis.com/css?family=Raleway';
    @import url('https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Istok+Web&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@700&display=swap');

    body {
        margin: 0;
        display: flex;
        justify-content: center;
        background: #121b25;
        border: 0px solid rebeccapurple;
    }
</style>
<body>
    <div id="box">
        <header>
            <img src="../Images/logo.png" alt="" id="logo">
            <div class="navbar borderYtoX">
                <a href="index.php" id="active">HOME</a>
                <a href="../markup/webshow.html" id="inactive">WEB SHOWS</a>
                <a href="../markup/movies.html" id="inactive">MOVIES</a>
                <a href="../markup/about2.html" id="inactive">ABOUT</a>
                <?php
                session_start();
                if(isset($_SESSION['loggedin']))
                    echo "";
                else
                {
                    echo '<a href="../PHP/register.php" id="inactive">SIGN UP</a>';
                }
                ?>
                </div>
                <div class="icons" align="right">
                <?php
                if(isset($_SESSION['loggedin']))
                {
                    echo '<a href="logout.php"><span class="material-symbols-outlined login">
                    logout
                    </span></a>&nbsp&nbsp&nbsp
                    <a href="accountinfo.php"><span class="material-symbols-outlined">account_circle</span></a>
                    ';
                }
                else
                {
                    echo '<a href="login.php"><span class="material-symbols-outlined login">
                    login
                    </span></a>';
                }
                ?>
                </div>
        </header>
        <div class="carousel" data-flickity='{ "wrapAround": true }'>
            <div class="carousel-cell"
                style="background-image: url(https://www.filmywapzone.com/wp-content/uploads/2021/07/Asur-2-Web-Series-Release-Date-Cast-Trailer-Poster-All-Episodes-Watch-Online-Free-Download.jpg);">
            </div>
            <div class="carousel-cell"
                style="background-image: url(https://wallpapercave.com/wp/wp10670329.jpg);">
            </div>
            <div class="carousel-cell"
                style="background-image: url(https://1.bp.blogspot.com/-f6IBltxvMLQ/Xs4JmFyES6I/AAAAAAAAMi8/FJ9oQ3x2BPoFaA9bAV19jc1p594nY1cFQCLcBGAsYHQ/s1600/ek_thi_begum_online_5998399-m.jpg);">
            </div>
            <div class="carousel-cell"
                style="background-image: url(https://th.bing.com/th/id/OIP.o8BbACIDERluYgnm3iwouwHaEn?pid=ImgDet&rs=1);">
            </div>
            <div class="carousel-cell"
                style="background-image: url(https://www.iwmbuzz.com/wp-content/uploads/2019/06/mirzapur-the-best-indian-web-series-made-till-date.jpg);">
            </div>
            <div class="carousel-cell"
                style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0ret3HECsdsRPL2tHMhz30UIodGGU0QY0Gg&usqp=CAU);">
            </div>

        </div>
        <div class="moviecontainer">
            <h1 class="list-title">
                POPULAR SHOWS
            </h1>
            <div class="wrapper">
                <div id="list">
                    <a href="https://www.youtube.com/watch?v=-wOsSh2-zFk">
                        <div class="movieitem">

                            <img src="" alt="" class="movieimage">
                            <!-- <div class="info"> -->
                            <!-- <p class="moviedesc"></p> -->
                            <!-- <button class="watch">WATCH</button> -->
                            <!-- </div> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="additional">
            <div class="information">
                <h2>Family Friendly</h2>
                <p>With easy to use Parental Controls and a dedicated kids page, enjoy secure, ad-free
                    entertainment. Kids can enjoy popular TV shows like Peppa Pig, Powerpuff Girls, and Chhota Bheem.
                </p>
            </div>
            <div class="img">

            </div>
        </div>
        <div class="lastdiv">
            <div class="logo"><img src="" alt=""></div>
            <center><span>Created With <span style="color: red;">&#10084</span> by Manav & Kushang</span>
            </center>
            <footer>
                <br>
                <center> © Copyright 2014, All Rights Reserved</center>
            </footer>
        </div>
    </div>




</body>
<script src="../JS/script.js"></script>
<script src="../JS/index_movies.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


</html>