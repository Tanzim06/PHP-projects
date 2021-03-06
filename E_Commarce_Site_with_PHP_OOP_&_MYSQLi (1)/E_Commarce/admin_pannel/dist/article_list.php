<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Panel|| Article List</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--><!-- Add your site or application content here -->

        <div class="templete">
         <header class="headeroption clear">
                <h2>Admin Area</h2>
            <nav class="mainmenu clear">
                <ul>
                    <li><a href="Index.php">Home</a></li>
                    <li><a href="user.php">User</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
           </nav>
         </header>
                <section class="contentsection clear">
                    <aside class="leftsidebar clear">
                        <div class="samesidebar">
                            <h2>Theme Option</h2>
                            <ul>
                                <li><a href="update_social.php">Social option</a></li>
                                <li><a href="header.php">Header option</a></li>
                                <li><a href="footer.php">Footer option</a></li>
                            </ul>
                        </div>
                         <div class="samesidebar">
                            <h2>UI Option</h2>
                            <ul>
                                <li><a href="bg_change.php">Change Site Background</a></li>
                                <li><a href="font_change.php">Change Site Fonts</a></li>
                            </ul>
                        </div>
                         <div class="samesidebar">
                            <h2>Comments Option</h2>
                            <ul>
                                <li><a href="comments.php">Show comments</a></li>
                            </ul>
                        </div>
                        <div class="samesidebar">
                            <h2>Category Option</h2>
                            <ul>
                                <li><a href="category.php">Add Category</a></li>
                            </ul>
                        </div>
                        <div class="samesidebar">
                            <h2>Article option</h2>
                            <ul>
                                <li><a href="add_article.php">Add Article</a></li>
                                <li><a href="article_list.php">Article List</a></li>
                            </ul>
                        </div>
                    </aside>
                    <article class="maincontent clear">
                        <div class="content">
                            <h2>Article List</h2>
                            
                            <div class="catoption">
                            
                            <table class="mytable">
                                <tr>
                                    <th width="10%">No.</th>
                                    <th width="15%">Title</th>
                                    <th width="30%">Description</th>
                                    <th width="10%">Category</th>
                                    <th width="10%">Tags</th>
                                    <th width="15%">Image</th>
                                    <th width="10%">Action</th>
                                </tr>
                                <tr>
                                    <td>01.</td>
                                    <td>Artricle Title</td>
                                    <td>Artricle Description</td>
                                    <td>Artricle Category</td>
                                    <td>Tag1 Tag2 Tag3</td>
                                    <td><img src="" alt="Article1 Image"/></td>
                                    <td><a href="edit_article.php">Edit</a>||<a href="">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>02.</td>
                                    <td>Artricle Title</td>
                                    <td>Artricle Description</td>
                                    <td>Artricle Category</td>
                                    <td>Tag1 Tag2 Tag3</td>
                                    <td><img src="" alt="Article 2 Image"/></td>
                                    <td><a href="edit_article.php">Edit</a>||<a href="">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>03.</td>
                                    <td>Artricle Title</td>
                                    <td>Artricle Description</td>
                                    <td>Artricle Category</td>
                                    <td>Tag1 Tag2 Tag3</td>
                                    <td><img src="" alt="Article 3 Image"/></td>
                                    <td><a href="edit_article.php">Edit</a>||<a href="">Delete</a></td>
                                </tr>
                            </table>
                        </div>
                      </div>
                    </article>
                </section>
                <footer class="footersection clear">
                    <h3>&copy; Tanzim06</h3>
                </footer>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
