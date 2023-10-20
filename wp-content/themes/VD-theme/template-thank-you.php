<?php

get_header();

/*
Template Name: Thank you
*/

?>
<div class="wrapper">
        <h3 class="title">
            Vielen Dank für Ihre Anfrage. Wir melden uns am nächsten Werktag bei Ihnen. <br>
            <span style="display: block; margin-top: 15px">Team impact digital recruiting</span>
        </h3>
        <div class="bottom">
            <a type="button" class="close-btn black-button" href="/">Zurück zur Seite</a>
        </div>
    </div>


    <style>
        .wrapper{
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .title{
            color: #212529;
            display: block;
            text-align: center;
        }        
        .bottom{
            display: flex;
            justify-content: center;
            margin-top: 1.5rem!important;
        }
        .black-button{
            padding: 10px 20px;
            border-radius: 30px;
            border: none;
            background: #020b25;
            color: #fff;
            font-weight: 500;
        }
    </style>
<?php
get_footer();
?>
