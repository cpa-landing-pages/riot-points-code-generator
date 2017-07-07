<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Riot Points Gift</title>
    <meta name="description" content="">
    <meta name="author" content="dvL-den">

    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="img/meta.jpg">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">

    <link rel="icon" type="image/png" href="img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://cdn.unpacker.org/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.unpacker.org/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.min.css">
</head>

<body>
    <div class="bg-container">
        <div class="bg-video hidden-xs">
            <video preload="metadata" loop autoplay muted="true" id="video-loop" poster="img/bg.jpg">
                <source type="video/mp4" src="video/loop.mp4">
            </video>
        </div>

        <div class="bg-img visible-xs"></div>

        <div class="bg-overlay"></div>
    </div>

    <div class="header">
        <a href="javascript:;" class="animate logo" data-scroll="#section-home">
            <span class="logo-img logo-svg"></span>
        </a>
    </div>

    <div class="section-container first" id="section-home">
        <div class="intro-frame">
            <h1>Free Riot Points Prepaid Cards</h1>

            <span class="h1 text-uppercase">
                <small>Free Riot Points - fast and simple!</small>
            </span>

            <hr class="short translucent">

            <p>
                Do you need one Riot Points Code? Press the button below and the process will begin!
            </p>

            <button
                type="button"
                class="btn btn-lg btn-outline"
                data-scroll="#section-generator">
                Generate Code!
            </button>
        </div>
    </div>

    <div class="section-container" id="section-generator">
        <div class="container">
            <div class="section-title">
                <h1>
                    Generate Riot Points Code
                    <small>by using our website</small>
                </h1>
            </div>

            <p class="lead text-center">
                Fill in the form below, in order to receive your Riot Points code.
            </p>

            <div class="row">
                <div class="centerize">
                    <div class="col-md-6">
                        <div class="card-container">
                            <div class="card-bg"></div>
                            <div class="card-type"></div>
                            <div class="card-amount">
                                <span class="card-currency"></span>
                                <span id="card-value"></span>
                            </div>
                            <div class="logo-svg card-logo"></div>
                            <div class="card-title">
                                <span class="title-primary">
                                    Riot Points Prepaid Card
                                </span>
                                <span class="title-sub">
                                    Unlock new champions, skins, boosts and more with Riot Points.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form action="inc/codegen" method="post" id="form-request">
                            <div class="form-group">
                                <label for="request-user">Username(Optional)</label>
                                <input
                                    type="text"
                                    name="request-user"
                                    id="request-user"
                                    class="form-control"
                                    placeholder="Anonymous">
                            </div>

                            <div class="form-group">
                                <label for="form-server">Region</label>

                                <select
                                    name="request-server"
                                    id="request-server"
                                    class="form-control selectpicker"
                                    data-title="Choose Region">
                                    <?php
                                        $regions = require('inc/regions.php');

                                        foreach ($regions as $regionShort => $regionLong) {
                                            echo "<option value='$regionShort'>$regionLong</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="form-amount">Amount</label>

                                <select
                                    name="request-amount"
                                    id="request-amount"
                                    class="form-control selectpicker"
                                    data-title="Choose Amount">
                                    <?php
                                        $amounts = [10, 25, 50];

                                        foreach ($amounts as $amount) {
                                            echo "<option
                                                value=\"$amount\"
                                                data-content=\"<span class='card-currency'></span>$amount\">
                                                $amount
                                            </option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <button
                                type="submit"
                                id="form-request-submit"
                                class="btn btn-block btn-outline"
                                data-loading-text="Processing">
                                Generate Code
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container last" id="section-info">
        <div class="container">
            <div class="section-title">
                <h1>
                    More information
                    <small>about our website</small>
                </h1>
            </div>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magnam ipsam tenetur similique deserunt dolorum voluptates quasi temporibus dolores veritatis, suscipit voluptas unde non est rerum, libero facilis debitis voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, similique porro eum veritatis, fuga pariatur neque debitis voluptatum facilis. Recusandae ab asperiores, odit maxime earum, esse quam ratione aspernatur quidem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptatum ea, nam necessitatibus repudiandae, amet itaque possimus temporibus, soluta asperiores velit impedit, esse. Rem praesentium in nostrum, commodi laborum placeat.
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ipsa officiis assumenda dicta odio vero facere adipisci fugit ipsum perferendis, nam vel nobis animi, obcaecati aspernatur, quibusdam. Tempora, exercitationem unde?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sit, id sunt eos, totam iste. Ex blanditiis nihil velit eligendi quasi, quod dolorum obcaecati rem dolores dicta inventore nobis non.
            </p>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="social-container">
                <a
                    href="#"
                    target="_blank"
                    title="Redirect to Facebook Fan Page">
                    <span class="fa fa-facebook"></span>
                </a>

                <a
                    href="#"
                    target="_blank"
                    title="Redirect to Twitter Profile">
                    <span class="fa fa-twitter"></span>
                </a>
            </div>

            <div class="copyrights">
                &copy; 2015. All rights reserved.

                <span class="copyright-notice">
                    This website is in no way affiliated with, authorized, maintained, sponsored or endorsed by the Riot or any of its affiliates or subsidiaries.
                </span>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-generator">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <span class="spinner spinner-lg" id="generator-spinner"></span>

                    <div class="console-container">
                        <ul id="console-messages" class="console-messages"></ul>
                    </div>

                    <div id="code-container" class="hide-it">
                        <hr class="light">

                        <div id="code-query" class="code-query"></div>

                        <p>
                            This is your code. We have hidden the last 4 digits, which will show up when you complete one short offer for our sponsors.
                        </p>

                        <button
                            type="button"
                            class="btn btn-block btn-outline"
                            id="offers-open"
                            data-loading-text="Please Wait"
                            onclick="alert('demo')">
                            Complete Offer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.App = {
            locker: function () {
                alert('demo');
            },
            consoleMessages: [
                'Initializing generator',
                'Please wait',
                'Processing user data',
                '{user} has requested {amount} worth code for {server} region',
                'Connecting to database',
                'Querying through database',
                'Success! Database has returned requested code',
                'Status of returned code has been set to "PENDING" and will be removed from database after you complete verification'
            ]
        };
    </script>

    <script src="//cdn.unpacker.org/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.unpacker.org/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/plugins.min.js"></script>
    <script src="js/app.min.js"></script>
</body>
</html>
