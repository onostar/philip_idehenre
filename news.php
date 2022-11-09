<?php
    session_start();
    include "controller/connections.php";
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
        <title>Events and news | Philip Idehenre Foundation</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
        <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
        
        <link rel="icon" href="images/logo.png" type="image/png" size="32X32">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <!-- <div class="loading">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div> -->
    <!-- <div class="main"> -->
        <?php include "header.php";?>
        <div id="slider">
            <div class="about_banner">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/humanitarian.jpg" alt="about us">
                    </div>
                    <div class="taglines">
                        <h2>Events and news</h2>
                        <!-- <p>We bring exceptional care close to you. Consult a Doctor any time, any day.</p> -->
                        <!-- <div class="btns">
                            <a href="javascrip:void(0);" class="showRequest">Schedule an Appointment Now</a>
                            <a href="contact.html">Get a Quote</a>
                        </div> -->
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <section class="trends">
            <h2>Recent Events and News updates</h2>
            <hr>
            <div class="topics">
                <?php
                    $get_events = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 30) AS details, article_id, title, photo FROM news_events ORDER BY post_date DESC");
                    $get_events->execute();
                    $views = $get_events->fetchAll();
                    foreach($views as $view):
                ?>
                <article class="articles">
                    <a href="javascript:void(0)" onclick="viewArticle('<?php echo $view->article_id?>')">
                        <img src="<?php echo 'media/'.$view->photo?>" alt="article">
                        <div class="summary">
                            <h3><?php echo $view->title?></h3>
                            <p><?php echo $view->details?> <span>Read more...</span></p>
                        </div>
                    </a>
                </article>
                <?php endforeach?>
            </div>
            
        </section>
    
        <?php include "footer.php"?>
        <script src="script.js"></script>
        <script src="jquery.js"></script>
</body>
</html>