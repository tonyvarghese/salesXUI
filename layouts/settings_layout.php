<?php

include_once("../config.php");

session_start();

if(isset($_SESSION['login'])){
    $userData = $_SESSION['login'];
    $userData = json_decode($userData);
    $currentUser = $userData->current_user_details;
    //var_dump($currentUser);
    $username = $currentUser->username;
    $firstName = $currentUser->user_profile->first_name;
}
else
    $userData = [];
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flexbox Grid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/style.css" type="text/css" >
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <script type="text/javascript">var documentRoot = "<?= DOCUMENT_ROOT ?>";</script>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/scripts.js"></script>

</head>
<body class="layout">
<div class="page js-page">

    <div class="wrap container-fluid">

        <div class="header-wrapper">
            <?php include_once("../includes/header.html"); ?>
        </div>


        <div class="row main-content">

            <div class="col-xs-3">
                <div class="box-container sidebar-wrapper">
                    <?php include_once("../includes/sidebar.html"); ?>
                </div>
            </div>

            <div class="col-xs-9">
                <div class="box-container" id="dynamic-contents">
                    <?php include_once("../src/settings_profile.php"); ?>
                </div>
            </div>


        </div>


        <!--<footer class="page-footer">-->
        <!--<div class="row">-->
        <!--<div class="col-xs start"><a class="tag" href="#">@Waybeo</a></div>-->
        <!--<div class="col-xs end"><a class="link-top" href="#top">...</a></div>-->
        <!--</div>-->
        <!--</footer>-->

    </div>
</div>

<div class="msg-box" id="msg-box"></div>

<script>
    $(document).ready(function(){

//        $.ajax({url: "demo_test.txt", success: function(result){
//            $("#div1").html(result);
//        }});

    });
</script>

</body>
</html>