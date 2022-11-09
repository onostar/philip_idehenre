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
        <title>Contact us | Philip Idehenre Foundation</title>
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
                        <h2>Contact us</h2>
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
    <main>
        <section id="investment">
            
            <div class="intro" id="intro_title">
                <p>get in touch</p>
                <div class="add_info">
                    <i class="fas fa-street-view"></i>
                    <p>Our Head office is located at 1 Edo street Off Irhirhi road, Benin city, Edo state</p>
                </div>
                <!-- <div class="add_info">
                    <i class="fas fa-database"></i>
                    <p>Our Storage Facility is situated at Ajagbodudu community, Warri North LGA, Koko, Delta state, Nigeria</p>
                </div> -->
                <div class="add_info">
                    <i class="fas fa-phone"></i>
                    <p>You can also call us on these numbers:<br> +234 806 1234 567, +234 812 1234 890, +234 807 180 6789 111</p>
                </div>
                <div class="add_info">
                    <i class="fas fa-envelope"></i>
                    <p>Send us an email at info@philipidehenrefoundation.org, contact@philipidehenrefoundation.org</p>
                </div>
            </div>
            <div class="invest_form">
                <form action="controller/contact_us.php" method="POST" id="contact_form">
                    <h3>Send us a message</h3>
                    <div class="datas">
                        <label for="name">Full Name</label>
                        <input type="text" name="full_name" id="full_name" placeholder="Jonathan Taylor">
                    </div>
                    <div class="datas">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" placeholder="example@mail.com">
                    </div>
                    <div class="datas">
                        <label for="message">Your message</label>
                        <textarea name="message" id="message" cols="50" rows="10"></textarea>
                    </div>
                    <button type="submit" name="send_message" id="send_message">Send message <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </section>
        
    </main>
    <?php include "footer.php"?>

    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>