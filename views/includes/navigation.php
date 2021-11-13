<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">CMS Front</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <?php
//                echo "asd";

//                foreach ($categories as $category) {
//                    $cat_title = $category['cat_title'];
//                    echo "<li><a href='#'>$cat_title</a></li>";
//                }
                ?>


                <?php if (\app\core\App::isGuest()){ ?>

                <li>
                    <a href="login">Login</a>
                </li>
                    <li>
                        <a href="register">Register</a>
                    </li>
                <?php }else{?>
                    <?php if (\app\core\App::isAdmin()){ ?>
                        <li>
                            <a href="admin">Admin</a>
                        </li>
                    <?php }?>
                    <li>
                        <a href="logout">Logout</a>
                    </li>
                <?php }?>
                <?php
                if (isset($_GET['post_id'])) {
                    $edit_post_id = $_GET['post_id'];
                    echo "<li><a href='admin/posts?source=edit_post&edit_id=$edit_post_id'>Edit</a></li>";
                }
                ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>