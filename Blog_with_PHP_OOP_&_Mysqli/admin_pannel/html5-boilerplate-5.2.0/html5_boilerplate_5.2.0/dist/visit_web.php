<?php include '../dist/inc/headerpart.php'; ?>
<?php include '../dist/inc/sidebarpart.php'; ?>
                    <article class="maincontent clear">
                        <div class="content">
                            <h2>Article List</h2>
                            
                            <div class="catoption">
                            
                            <table class="mytable">
                                <tr>
                                    <th width="15%">Title</th>
                                    <th width="30%">Description</th>
                                    <th width="10%">Category</th>
                                    <th width="15%">Image</th>
                                    <th width="10%">Action</th>
                                </tr>
                                <tr>
                                    <td>Artricle Title</td>
                                    <td>Artricle Description</td>
                                    <td>Artricle Category</td>
                                    <td><img src="" alt="Article1 Image"/></td>
                                    <td><a href="edit_article.html">Edit</a>||<a href="">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>Artricle Title</td>
                                    <td>Artricle Description</td>
                                    <td>Artricle Category</td>
                                    <td><img src="" alt="Article 2 Image"/></td>
                                    <td><a href="edit_article.html">Edit</a>||<a href="">Delete</a></td>
                                </tr>
                                    <td>Artricle Title</td>
                                    <td>Artricle Description</td>
                                    <td>Artricle Category</td>
                                    <td><img src="" alt="Article 3 Image"/></td>
                                    <td><a href="edit_article.html">Edit</a>||<a href="">Delete</a></td>
                                </tr>
                            </table>
                        </div>
                      </div>
                    </article>
                </section>
                <?php include '../dist/inc/footerpart.php'; ?>
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
