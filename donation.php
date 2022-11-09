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
        <title>About us | Philip Idehenre Foundation</title>
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
                        <img src="images/help_children.jpg" alt="about us">
                    </div>
                    <div class="taglines">
                        <h2>Donate</h2>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <main>
        <section id="existence">
            <h2>Members donation & Commitment</h2>
            <hr>
            <div class="story">
                <p id="first_story">Members can donate to support ongoing projects and other events<br><br>
                Kindly make payment to any of our accounts below:

                <br>After which, you can upload your payment slip after filling the form below.
                    <!-- <a id="invest_link" href="contact.html" title="contact us">Get a quote <i class="fas fa-receipt"></i></a> -->
                   
                </p>
                <div class="more_notes">
                    <div class="invest_form">
                        <form action="controller/contact_us.php" method="POST" id="contact_form">
                            <h4>Fill in your payment details</h4>
                            <div class="inputs">
                                <div class="datas">
                                    <label for="name">Full Name</label>
                                    <input type="text" name="full_name" id="full_name" placeholder="Jonathan Taylor">
                                </div>
                                <div class="datas">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" placeholder="example@mail.com">
                                </div>
                                <div class="datas">
                                    <label for="phone">Phone number</label>
                                    <input type="text" name="tel" id="phone" placeholder="+2347067777779">
                                </div>
                                <div class="datas">
                                    <label for="amount">Amount donated</label>
                                    <input type="number" name="amount" id="amount" placeholder="50,000">
                                </div>
                                
                                <div class="datas">
                                    <label for="payment_slip">Payment slip</label>
                                    <input type="file" name="payment_slip" id="payment_slip">
                                </div>
                                <div class="datas">
                                <button type="submit" name="send_message" id="send_message">Submit payment <i class="fas fa-upload"></i></button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        
    </main>
    <?php include "footer.php"?>

    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>