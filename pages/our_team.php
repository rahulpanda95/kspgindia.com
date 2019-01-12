<?php
/**
 * Created by IntelliJ IDEA.
 * User: rahul
 * Date: 2019-01-12
 * Time: 11:35
 */
?>
<html lang="en">
<style>
    .column {
        float: left;
        width: 30%;
        margin-bottom: 16px;
        margin-left: 15px;
        margin-right: 15px;
        padding-left: 10px;
        margin-top: 20px;
    }

    /* Display the columns below each other instead of side by side on small screens */
    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
            padding-left: 10%;
        }
    }

    /* Add some shadows to create a card effect */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    /* Some left and right padding inside the container */
    .container {
        padding: 0 16px;
        padding-left: 10px;
    }

    /* Clear floats */
    .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #3189e1;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }
</style>
<body>
<div class="row" style="margin-left: 5%; margin-right: 5%">
    <div class="column">
        <div class="card">
            <img src="img1.jpg" alt="Jane" style="width:100%">
            <div class="container">
                <h2 align="center">Dr.Debashisha Panda</h2>
                <p class="title" align="center">Co-Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>example@example.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="img2.jpg" alt="Mike" style="width:100%">
            <div class="container">
                <h2 align="center">Smt. Sarita Panda</h2>
                <p class="title" align="center">Co-Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>example@example.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="img3.jpg" alt="John" style="width:100%">
            <div class="container">
                <h2 align="center">Mr. Rahul Panda</h2>
                <p class="title" align="center">Co-Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>example@example.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>
</div>
</body>

</html>