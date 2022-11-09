<?php
    session_start();
    require "../controller/connections.php";
    if(isset($_SESSION['user'])){
        $username = $_SESSION['user'];
    
    $user_details = $connectdb->prepare("SELECT * FROM users WHERE user_email = :user_email");
    $user_details->bindvalue("user_email", $username);
    $user_details->execute();

    $users = $user_details->fetchAll();
    foreach($users as $user):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ippssolar is an energy company which offers short, medium and long term, high-yield crypto and save energy investments to the general public. We believe that everyone should have the freedom to invest on their own terms.">
    <meta name="keyword" content="Recovolt energy, investments, crypto, crypto-currencies, bitcoin" />
	<meta name="author" content=""/>
	<meta name="og:url" property="og:url" content="https://ippssolar.com">
    <meta name="og:type "property="og:type" content="website">
    <meta name="og:title" property="og:title" content="" />
    <meta name="og:site_name" property="og:site_name" content="Ippssolar" />
    <meta name="og:description" property="og:description" content="Ippssolar is an energy company which offers short, medium and long term, high-yield crypto and save energy investments to the general public. We believe that everyone should have the freedom to invest on their own terms.">
    <meta name="og:image" property="og:image" itemprop="image" content="images/ippssolar_logo2.png">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <title>Recovolt Energy | Welcome <?php echo $user->first_name. $user->last_name?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.min.css">
    
    <link rel="icon" href="../images/ippssolar_logo2.png" type="image/png" size="32X32">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- <div class="loader">
        <img src="images/psn_logo.jpg" alt="PSN">
        <h2>Welcome to PSN national Conference registration</h2>
    </div> -->
    <main>
        
    <header id="otherHeader" class="main_header">
    <h1>
                <a href="index.html">
                    <img src="../images/ippssolar_logo2.png" alt="logo">
                </a>
            </h1>
            <nav id="navigation">
                <ul>
                    <li><a href="about.html" title="who we are">Who we are</a></li>
                    <li>
                        <a href="javascript:void(0);" title="What we do">Our services <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="wind.html">Wind generators</a></li>
                            <li><a href="solar_panel.php">Solar power installation</a></li>
                            <li><a href="">Solar pv materials</a></li>
                            <li><a href="">Battery materials</a></li>
                            <li><a href="">Hydropower plants</a></li>
                            <li><a href="">Solar power mentainance</a></li>
                            <li><a href="">Charge controller</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="index.html#investment" title="Investment plans">Investment</a></li>
                    <li><a href="contact.html" title="Contact us">Get in touch</a></li>
                    <!-- <li><a href="recruitment.html" title="Job recruitment">Career</a></li> -->
                    <!-- <li><a href="blog.html" title="Job recruitment">Our Blog</a></li> -->
                    <!-- <li id="login"><a href="views/login_page.php" title="Login">Login <i class="fas fa-sign-in-alt"></i></a></li> -->
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
    
        <div class="welcome">
            <h2>Welcome to Ippssolar Investment Platform.</h2>
            <p>Congratulations! Your Registration was successful</p>
            <p>Continue to your dashboard to Invest and grow your funds</p>
            <a href="users.php">Continue <i class="fas fa-sign-in-alt"></i></a>
        </div>
        
            
        
        
            
    <div id="chat">
        <div class="chat_icon">
            <i class="fas fa-chat-alt"></i>
        </div>
    </div>
    </main>
    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
</body>
</html>

<?php 
    endforeach;
    }else{
        header("Location: ../index.html");
    }
?>