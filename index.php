<?php
require "server/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tech Box</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">


    <script>
        function checkEmail(str) {
            if (str.length == 0) {
                document.getElementById("hint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("hint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "check_email.php?e=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<script>
    function checkSearch(str)
    {
        if (str.length == 0) {
            document.getElementById("content").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "check_search.php?e=" + str, true);
            xmlhttp.send();
        }
    }
</script>
<body>

<header class="container-fluid">
    <span id="hint"></span>
    <div class="row">
        <div class="col-12 no-padding">
            <nav class="navbar navbar-light bg-light navbar-expand-sm fixed-top">
                <div class="input-group">
                    <input type="search" class="form-control"
                           id="search-bar" name="search"
                           placeholder="Find Mobile Phones, Laptops, and more.."
                        onkeyup="checkSearch(this.value)">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-lg" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
        </div>
        <article id="content" class="container-fluid bg-white">
            <article class="container-fluid bg-white">

                    <div class="row"  id="content">
                        <?php getPro(); ?>
                    </div>
            </article>
        </article>
    </div>
</header>
    <footer class="container-fluid">
        <div class="row">
            <div class="col text-center">
                &copy; 2019 by Muhammad Ali Makhdoom
            </div>
    </footer>
    </div>
    </footer>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>