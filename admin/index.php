<?php
    include "../controller/connections.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Philip Idehenre Foundation is a non-governmental, non-profit and non-political organisation set up to help distressed children, fight for the rights of women, as well as support individualas to stand on their feet financially">
        <meta name="keyword" content="Philip Idehenre Foundation, Charity, charity organsation, distressed children, skill acquisition, rights of women, development, child abuse, women brutality." />
        <meta name="author" content=""/>
        <meta name="og:url" property="og:url" content="https://">
        <meta name="og:type "property="og:type" content="website">
        <meta name="og:title" property="og:title" content="" />
        <meta name="og:site_name" property="og:site_name" content="" />
        <meta name="og:description" property="og:description" content="Philip Idehenre Foundation is a non-governmental, non-profit and non-political organisation set up to help distressed children, fight for the rights of women, as well as support individualas to stand on their feet financially">
        <meta name="keyword" content="Philip Idehenre Foundation, Charity, charity organsation, distressed children, skill acquisition, rights of women, development, child abuse, women brutality">
        <meta name="og:image" property="og:image" itemprop="image" content="images/logo.jpg">
        <meta property="og:image:width" content="300" />
        <meta property="og:image:height" content="300" />
        <title>Philip Idehenre Foundation | Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.min.css">
    
    <link rel="icon" href="../images/logo.png" type="image/png" size="32X32">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<main>
            <section class="reg_log">
                
                <div class="login_page">
                    <h1>
                        <a href="../index.php">
                            <img src="../images/logo.png" alt="logo">
                        </a>
                    </h1>
                    
                    <h2>Welcome back!</h2>
                    <p>Sign in to continue</p>
                    <?php
                        if(isset($_SESSION['success'])){
                            echo "<p class='success'>" . $_SESSION['success']. "</p>";
                            unset($_SESSION['success']);
                        }
                    ?>
                    <?php
                        if(isset($_SESSION['error'])){
                            echo "<p class='error'>" . $_SESSION['error']. "</p>";
                            unset($_SESSION['error']);
                        }
                    ?>
                    <form action="../controller/login.php" method="POST">
                        <div class="data">
                            <label for="username">User ID</label>
                            <input type="text" name="username" id="username" placeholder="Enter username" required>
                        </div>
                        <div class="data">
                            <div class="pass">
                                <label for="password">Password</label>
                                <a href="forgot_password.php" title="Recover your password">Forgot password?</a>
                            </div>
                            <input type="password" name="user_password" id="user_password" placeholder="Enter password">
                        </div>
                        <div class="data">
                            <button type="submit" name="login">Login <i class="fas fa-sign-in"></i></button>

                        </div>
                        
                    </form>
                    <!-- <div class="signup_option">
                        <p>Don't have an account yet? <a href="registration.php">Open a free account</a></p>
                    </div> -->
                    <div id="foot">
                        <p>&copy;<?php echo Date("Y");?> Philip Idehenre Foundation. All Rights Reserved.</p>

                    </div>

                </div>
                <div class="adds">
                    <img src="../images/humanitarian.jpg" alt="background">
                </div>
            </section>
    </main>
    
<!-- </div> -->
    <!-- <div class="help" id="help">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=2348157985866"><i class="fab fa-whatsapp"></i> Hello, How can we help?</a>
    </div> -->
    
    <div class="toTop">
        <a href="#topHeader"><i class="fas fa-chevron-up" style="color:#fff;" size="10"></i></a>
    </div>
    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
</body>
</html>