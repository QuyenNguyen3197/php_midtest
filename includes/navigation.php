
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                        <?php
                            if(!isset($_SESSION['s_email'])){
                        ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <?php
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['s_email'])){
                        ?>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>