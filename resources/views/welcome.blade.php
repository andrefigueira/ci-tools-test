<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CI Tools Evaluation - By Andre</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        /*
 * Globals
 */

        body {
            font-family: Georgia, "Times New Roman", Times, serif;
            color: #555;
        }

        h1, .h1,
        h2, .h2,
        h3, .h3,
        h4, .h4,
        h5, .h5,
        h6, .h6 {
            margin-top: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: normal;
            color: #333;
        }


        /*
         * Override Bootstrap's default container.
         */

        @media (min-width: 1200px) {
            .container {
                width: 970px;
            }
        }


        /*
         * Masthead for nav
         */

        .blog-masthead {
            background-color: #428bca;
            -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
            box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
        }

        /* Nav links */
        .blog-nav-item {
            position: relative;
            display: inline-block;
            padding: 10px;
            font-weight: 500;
            color: #cdddeb;
        }
        .blog-nav-item:hover,
        .blog-nav-item:focus {
            color: #fff;
            text-decoration: none;
        }

        /* Active state gets a caret at the bottom */
        .blog-nav .active {
            color: #fff;
        }
        .blog-nav .active:after {
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 0;
            margin-left: -5px;
            vertical-align: middle;
            content: " ";
            border-right: 5px solid transparent;
            border-bottom: 5px solid;
            border-left: 5px solid transparent;
        }


        /*
         * Blog name and description
         */

        .blog-header {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .blog-title {
            margin-top: 30px;
            margin-bottom: 0;
            font-size: 60px;
            font-weight: normal;
        }
        .blog-description {
            font-size: 20px;
            color: #999;
        }


        /*
         * Main column and sidebar layout
         */

        .blog-main {
            font-size: 18px;
            line-height: 1.5;
        }

        /* Sidebar modules for boxing content */
        .sidebar-module {
            padding: 15px;
            margin: 0 -15px 15px;
        }
        .sidebar-module-inset {
            padding: 15px;
            background-color: #f5f5f5;
            border-radius: 4px;
        }
        .sidebar-module-inset p:last-child,
        .sidebar-module-inset ul:last-child,
        .sidebar-module-inset ol:last-child {
            margin-bottom: 0;
        }


        /* Pagination */
        .pager {
            margin-bottom: 60px;
            text-align: left;
        }
        .pager > li > a {
            width: 140px;
            padding: 10px 20px;
            text-align: center;
            border-radius: 30px;
        }


        /*
         * Blog posts
         */

        .blog-post {
            margin-bottom: 60px;
        }
        .blog-post-title {
            margin-bottom: 5px;
            font-size: 40px;
        }
        .blog-post-meta {
            margin-bottom: 20px;
            color: #999;
        }


        /*
         * Footer
         */

        .blog-footer {
            padding: 40px 0;
            color: #999;
            text-align: center;
            background-color: #f9f9f9;
            border-top: 1px solid #e5e5e5;
        }
        .blog-footer p:last-child {
            margin-bottom: 0;
        }

        .table {
            margin: 20px 0;
        }

        h2 {
            margin: 20px 0;
        }

        h3 {
            margin: 20px 0;
        }

        .score {
            font-size: 28px;
            border-top: 1px solid #E9E9E9;
            padding: 20px 0 0 0;
            margin: 20px 0 0 0;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">CI Tools Evaluation</h1>
        <p class="lead blog-description">Comparing real examples of Codeship, Jenkins and Bamboo...</p>
    </div>

    <div class="row">

        <div class="col-sm-12 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">Codeship</h2>

                <table class="table table-bordered">
                    <tr>
                        <th>Time to setup</th>
                        <td>1 hour 30 minutes</td>
                    </tr>
                    <tr>
                        <th>Difficulty</th>
                        <td>Easy</td>
                    </tr>
                </table>

                <h3>Maintenance</h3>
                <p>Medium, will need to manage full pipelines in the web app, a lot of different configurations need to be tied together</p>

                <h3>Deployment Setup</h3>
                <p>Easy, so long as the server is properly configured it's a breeze, supports Capistrano, Heroku, custom script...</p>

                <h3>Notes</h3>
                <ul>
                    <li>Notifications of build statuses inbuilt, e.g. Slack, email, github, etc...</li>
                    <li>Had a 500 error on setup at one point after getting quite far, however issue was solved within
                        15 minutes, support were very responsive</li>
                    <li>This does highlight a very important point, If our own hosted solution were to break down, it
                        would bring us grinding to a halt in terms of deployment in addition, this shows the benefit of
                        ofsetting the risk to a third party, they will be the ones that investigate and fix any issues
                        with their platform, so there may be downtime, but this would exist with our own platform too,
                        except, downtime on a platform we maintain ourselves, will be costing us more due to having to
                        get engineers on the path to resolving issues.</li>
                </ul>

                <h3>Pros</h3>

                <ul>
                    <li>Fast to setup</li>
                    <li>Easy to use</li>
                    <li>Easy setup end to end with project pipelines baked in</li>
                    <li>Most of the work for setting up environments is done already by Codeship</li>
                    <li>Ability to run builds in parralel no need for additional maintenance of more servers</li>
                    <li>Used by some top companies, so very stable to use</li>
                    <li>Supports Capistrano :)</li>
                </ul>

                <h3>Cons</h3>

                <ul>
                    <li>IF, the guys in Manchester want to use Codeship, there is the cost of migrating </li>
                </ul>

                <div class="score">
                    <strong>Rating</strong> 7/10
                </div>

            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">Bamboo</h2>

                <table class="table table-bordered">
                    <tr>
                        <th>Time to setup</th>
                        <td>Incomplete</td>
                    </tr>
                    <tr>
                        <th>Difficulty</th>
                        <td>Medium</td>
                    </tr>
                </table>

                <h3>Maintenance</h3>
                <p>Moderate, we will need to maintain an infrastructure for it as Bamboo cloud has been discontinued. In addition
                A full PHP environment for running our builds will need to be configured as there is none by default and there
                aren't any relevant plugins on the Atlassian marketplace which would conform to our needs.</p>

                <h3>Deployment Setup</h3>
                <p>Moderate, I setup locally using a prebuilt docker image, but can be setup as the install in provided as a
                tarball, then you just run the installation and install the licence key. In addition to the server setup there
                are also Runner Agents that need to be maintained, these are smaller servers with the job of actually running
                the "Plans" (Builds), these are leased from Atlassian at a cost, the starting cost for 1 agent is $800 per month.</p>

                <h3>Notes</h3>
                <ul>
                    <li>Notifications of build statuses inbuilt, e.g. Slack, email, github, etc...</li>
                    <li>Had a few issues in configuring the build server to setup for PHP as it's not configured out of the box to handle
                    PHP system builds</li>
                    <li>Maintenance costs are sold in 12 month periods, with the first 12 months free</li>
                    <li>The cost for agents starts at $800 and increments to 5, at $2,200, topping out at 250 agents for $40,000</li>
                    <li>We could most likely start with a minimum of 5 agents at a cost of $2,200</li>
                </ul>

                <h3>Pros</h3>

                <ul>
                    <li>Feature rich in terms of build reporting</li>
                    <li>Good setup for pipelines of tasks to run as part of a build</li>
                    <li>Many plugins available in Atlassian marketplace which can be easily installed</li>
                    <li>Used by some top companies, so very stable to use</li>
                </ul>

                <h3>Cons</h3>

                <ul>
                    <li>IF, the guys in Manchester want to use Bamboo, there is the cost of migrating</li>
                    <li>Bamboo cloud is no longer available, so means maintaining a Bamboo instance ourselves</li>
                    <li>PHP workflow not inbuilt so needs to be done by us</li>
                    <li>Jira is relativley expensive compared to other solutions</li>
                    <li>Plugins are expensive and not maintained by Atlassian themselves</li>
                    <li>Remote agents are very expensive and the costs do not scale appropriatley</li>
                </ul>

                <div class="score">
                    <strong>Rating</strong> 6/10
                </div>

            </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</div><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
