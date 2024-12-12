<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Scheduler and Note Taking</title>
    <link rel="stylesheet" href="tasks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Signika+Negative&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    </head>
    <link rel="shortcut icon" type="image/png" href="icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@700&display=swap" rel="stylesheet">

<body>
    <div class="bg">
        <nav>
            <label class="logo">Os | Nt</label>
            <ul>
                <li><a href="tasks.html">Tasks</a></li>
                <li><a href="Notes.html">Notes</a></li>
                <li><a href="scheduler.html">Scheduler</a></li>
                <li><a href="extras.html">Extras</a></li>
                <li><a href="Feedback.html">Feedback</a></li>
            </ul>
        </nav>
        <!-- <hr size="3" noshade="" color="cyan" style="padding-top: -20px;"> -->
        <div id="timecontainer">
            <div id="DigitalCLOCK" class="clock" onload="showTime()"></div>
            <div id="daytoday" ></div>
        </div>
        <script  src="time.js"></script>
        <div id="remaining">
            <div class="whole">
                <h1><span class="styling">Your</span><span class="listtext"> Tasks</span></h1>
                <div class="inputDiv">
                    <input type="text" class="input" placeholder="Add a task">
                    <button class="add" id="textinbutton" >Add</button>
                </div>
                <div class="container">
                </div>
            </div>
            <div id="quotes">
                <!-- <h1>Get Inspired by Quotes!</h1> -->
                <div id="herequotes">

                </div>
                <div id="quotebutton">
                    <button onclick='newquote()' id="textinbutton" style="width: 130px; height: 55px;">Quote</button>
                </div>
                <script src="script.js"></script>
            </div>
            <script src='main.js'></script>
        </div>
    </div>
</body>

</html>