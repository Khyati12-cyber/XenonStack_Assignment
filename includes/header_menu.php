

<!--Navigation bar start-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">
            <div class="container">
                    <a href="index.php" class="navbar-brand" style="font-family: 'Delius Swash Caps'">Treasury Store</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav">
                       <li class="nav-item dropdown">
                           <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                               Products
                            </a>
                               <div class="dropdown-menu">
                                   <a href="products.php#watch" class="dropdown-item">Watches</a>
                                   <a href="products.php#shirt" class="dropdown-item">T-Shirts</a>
                                   <a href="products.php#shoes" class="dropdown-item">Shoes</a>
                                   <a href="products.php#headphones" class="dropdown-item">Headphones/Speakers</a>
                               </div>
                           
                       </li>
                      
                       <li class="nav-item"><a href="about.php" class="nav-link">Contact Us</a></li>
                     
                    </ul>
                    
                    <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Logout</a></li>
                       <li class="nav-item"><a  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
                    </ul>
                    <?php
                } else {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item "><a href="signup.php"  class="nav-link" ><i class="fa fa-user"></i> Sign Up</a></li>
                       <li class="nav-item "><a href="login.php" class="nav-link" ><i class="fa fa-sign-in"></i> Log In</a></li>
                    </ul>
                    <?php 
                }
                    ?>
                    </div>
                </div>
            </div>
        </nav>
    <!--navigation bar end-->
 