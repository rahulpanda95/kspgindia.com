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
        width: 25%;
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
<div class="row" style="margin-left: 10%; margin-right: 10%">
    <div class="column">
        <div class="card">
            <img src="img/profile/rahul.png" alt="Rahul Panda" style="width:100%">
            <div class="container">
                <h5 align="center" style="color: #3189e1; padding-top: 2%">Mr. Rahul Panda</h5>
                <p class="title" align="center" style="color: #e1395a"><strong>Co-Founder</strong></p>
                <p>Data Analyst, Expert in Systems Architecture & Head of Technology Support</p>
                <p style="color: darkblue"><a href="mailto:rahul@kspgindia.com">rahul@kspgindia.com</a></p>
                <p><button class="button" href="mailto:rahul@kspgindia.com">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="img/profile/debashisha.png" alt="Debashisha Panda" style="width:100%">
            <div class="container">
                <h5 align="center" style="color: #3189e1; padding-top: 2%">Dr.Debashisha Panda</h5>
                <p class="title" align="center" style="color: #e1395a"><strong>Co-Founder</strong></p>
                <p>Health-care Expert, Head of Production, Strategist & Specialist in Pharmacy</p>
                <p style="color: darkblue"><a href="mailto:drdebashisha@kspgindia.com">drdebashisha@kspgindia.com</a></p>
                <p><button class="button" href="mailto:rahul@kspgindia.com">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="img/profile/sarita.png" alt="Sarita Panda" style="width:100%">
            <div class="container">
                <h5 align="center" style="color: #3189e1; padding-top: 2%">Smt. Sarita Panda</h5>
                <p class="title" align="center" style="color: #e1395a"><strong>Co-Founder</strong></p>
                <p>Author, Health-Counselor, Social-Activist & Head of Business Development and Delivery</p>
                <p style="color: darkblue"><a href="mailto:sarita@kspgindia.com">sarita@kspgindia.com</a></p>
                <p><button class="button" href="mailto:rahul@kspgindia.com">Contact</button></p>
            </div>
        </div>
    </div>


</div>
</body>

</html>