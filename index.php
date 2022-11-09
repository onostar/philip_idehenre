<?php
    require "controller/connections.php";
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
    <title>Welcome to Philip Idehenre Foundation</title>
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
    <section class="top_head" id="topHeader">
        <div class="social_media">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="contact_phone">
            <ul>
                <li>
                    <a><i class="fas fa-phone-square"></i>+2347038445940</a>
                </li>
                <li><a href="javascript:void(0)"><i class="far fa-envelope"></i>info@philipidehenrefoundation.org</a></li>
               
                <li><a href="donation.php"><i class="fas fa-hand-holding-dollar"></i>Donate</a></li>
                <li><a href="javascript:void(0)" class="showRequest">Join us<i class="fas fa-hand-fist"></i></a></li>
            </ul>
        </div>
    </section>
    <section id="banner">
        <header id="mainHeader" class="main_header">
            <h1>
                <a href="index.php">
                    <img src="images/logo.png" alt="logo">
                </a>
            </h1>
            <nav id="navigation">
                <ul>
                    <li><a href="about.php" title="who we are"><i class="fas fa-users"></i>Who we are</a></li>
                    <li>
                        <a href="javascript:void(0);" title="Our services"><i class="fa-solid fa-ribbon"></i>Our causes <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="child_education.php"><i class="fa-solid fa-user-graduate"></i>Child Education</a></li>
                            <li><a href="distressed_widows.php"><i class="fas fa-hands-holding"></i> Distressed women & children</a></li>
                            <li><a href="health_care.php"><i class="fas fa-bed-pulse"></i> Access to health care</a></li>
                            <li><a href="skill_acquisition.php"><i class="fas fa-screwdriver-wrench"></i> Skill Acquisition programmes</a></li>
                            <li><a href="javascript:void(0)"><i class="fas fa-school"></i> Building Orphanages</a></li>
                            <li><a href="javascript:void(0)"><i class="fas fa-hand-holding-heart"></i> Awareness on women & children rights</a></li>
                            
                            
                        </ul>
                    </li>
                    
                    <li><a href="news.php" title="News and updates"><i class="fa-solid fa-calendar-days"></i>Events</a></li>
                    <li><a href="gallery.php" title="Our photos and media"><i class="fa-solid fa-photo-video"></i>Gallery</a></li>
                    <!-- <li><a href="recruitment.html" title="Job recruitment">Career</a></li> -->
                    <!-- <li><a href="blog.html" title="Job recruitment">Our Blog</a></li> -->
                    <li id="login"><a href="contact.php" title="Contact us">Contact us<i class="fas fa-headset"></i></a></li>
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        <div id="slider">
            <div class="slides">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/school_kids.jpg" alt=" Banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Welcome to Philip Idehenre Foundation</h2>
                            <p>We strive to bring hope to millions of women and children in the world's hardest places</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Join us <i class="fas fa-hand-fist"></i></a>
                                <a href="donation.php">Donate <i class="fa-solid fa-hand-holding-dollar"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/women.jpg" alt="Banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Raise your helping hand. </h2>
                            <p>We help the distressed get a better future by Providing quality, sustainable and affordable health care, and empowerment for the grassroot.</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a href="javascript:void(0)" class="showRequest">Donate <i class="fa-solid fa-hand-holding-dollar"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/skill_acquisition.jpg" alt="Banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Providing Innovative solutions</h2>
                            <p>We are here to provide you With the best and recent skills to empower our youths and women</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a href="javascript:void(0)" class="applySkilll">Apply Now <i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>
            
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <!-- news update -->
    <section id="trending">
        <h4><i class="fas fa-newspaper"></i> Updates</h4>
        <div class="trendings">
            <marquee behavior="" direction="">
                <?php
                    $get_trends = $connectdb->prepare("SELECT * FROM news_events ORDER BY post_date DESC LIMIT 6"); 
                    $get_trends->execute();
                    $trends = $get_trends->fetchAll();
                    foreach($trends as $trend):
                ?>
                        <a href="javascript:void(0)" onclick="viewArticle('<?php echo $trend->article_id?>')"><i class="fas fa-angle-double-right"></i> <?php echo $trend->title?></a>
                <?php endforeach?>
                <?php
                    if(!$get_trends->rowCount() > 0 ){
                        echo "<h3>No recent stories</h3>";
                    }

                ?>
            </marquee>
            
        </div>
    </section>
    <!-- summary of services -->
    <section id="service_summary">
        <div class="sum_serv">
            <div class="sums_banner">
                <img src="images/girls_school.png" alt="summary banner">
            </div>
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-hand-pointer"></i>
                </div>
                <h3>Become a volunteer</h3>
                <hr>
                <p>Join our foundation today and help improve the quality of living for distressed women(widows) and children</p>
                <div class="serv_icon2">
                    <a href="javascript:void(0)" title="Join our team">Join us<i class="fas fa-hand-fist"></i></a>
                </div>
            </div>
            
        </div>
        <div class="sum_serv">
            <div class="sums_banner">
                <img src="images/help_children.jpg" alt="summary banner">
            </div>
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-hands-holding"></i>
                </div>
                <h3>Raise a helping hand</h3>
                <hr>
                <p>Support the mission by donating towards the improvemnent of livelihood and health care of distressed people</p>
                <div class="serv_icon2">
                    <a href="donation.php" title="Donate">Donate <i class="fas fa-hand-holding-dollar"></i></a>
                </div>
            </div>
            
        </div>
        <div class="sum_serv">
            <div class="sums_banner">
                <img src="images/skills.jpg" alt="summary banner">
            </div>
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-screwdriver-wrench"></i>
                </div>
                <h3>Skill Acquisition</h3>
                <hr>
                <p>Enroll today in our skill acquisition programmes, select a course and get the neccessary skills to become fiancially free</p>
                <div class="serv_icon2">
                    <a href="javascript:void(0)" title="Apply for skill acquisition program" class="applySkilll">Apply now <i class="fas fa-sign-in-alt"></i></a>
                </div>
            </div>
            
        </div>
        
        <div class="sum_serv">
            <div class="sums_banner">
                <img src="images/woman_crying.webp" alt="summary banner">
            </div>
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3>Emergency contact</h3>
                <hr>
                <p>Report aany form of emergency, from child or women molestation, distressed children, etc. We will respond promptly </p>
                <div class="serv_icon2">
                    <a href="contact.php" title="Report an emergency">Contact us<i class="fas fa-headset"></i></a>
                </div>
            </div>
            
        </div>
    </section>
    
    <main>
        <!-- features -->
        <section id="features">
            <div class="features">
                <h3>Features</h3>
                <h4>Our causes</h4>
                <h2>We specialise in offering General Humanitarian services</h2>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                        <div class="feat_details">
                            <h3>Distressed Widows & child rehabilitation</h3>
                            <p>We assist in rendering help to widows and helpless children. </p>
                        </div>
                        
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <div class="feat_details">
                            <h3>Skill acquisition</h3>
                            <p>Empowering the jobless by teaching skills for wealth making</p>
                        </div>
                        
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-building"></i>
                        <div class="feat_details">
                            <h3>Community development</h3>
                            <p>Ensuring commitments by NGOs and Government towards the development of society.</p>
                        </div>
                        
                    </div>
                    <div class="feat">
                        <i class="fas fa-bed-pulse"></i>
                        <div class="feat_details">
                            <h3>Health care</h3>
                            <p>We provide opportunity to the less privilege to access adequate health care</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="feature_img">
                <img src="images/photo.jpg" alt="Our services">
            </div>
        </section>
        <!-- about page -->
        <section id="about_us">
            <div class="about_banner">
                <div class="banner_img">
                    <img src="images/humanitarian.jpg" alt="banner">
                </div>
                <div class="clients">
                    <img src="images/happy_kids.jpg" alt="banner">

                </div>
            </div>
            <div class="about_text">
                <h3>Who we are</h3>
                <h2>Philip Idehenre Foundation!</h2>
                <div class="notes">
                    <div class="notes_1">
                        <p>Philip Idehenre Foundation is a non-governmental and non-profit organisation set up to help distressed children, fight for the rights of women, as well as support individuals to stand on their feet financially</p><br>
                        <p>The foundation was first setup in 2018 but was incorporated by the CAC on 15th September 2022.<br>
                        Guided by an enduring legacy of integrity, professionalism, professional ethics, and continuous learning that Philip Idehenre Foundation is known for, the Foundation focuses on Education and health care as its key strategic initiative. Particular attention is given to educating the public on the rights of women, children and the means of enforcing such rights for the achievement of equality. <br><br>The Foundation also aims to make contributions in improving the livelyhood of individuals by empowering widows, offering scholarship to helpless children and teaching technical skills.
                        </p>
                        <a href="about.php"class="about_btn">Read more <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <!-- why choose us -->
        <section id="why_choose">
            <div class="reasons">
                <h3 id="this">What makes us unique</h3>
                <h2>We are Building a Sustainable Future for the distressed widows & children</h2>
                <div class="all_reasons">
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="reason_note">
                            <h3>Our mission</h3>
                            <p>To educate the public on the rights of women (widows) and children and means of enforcing such rights for the achievement of equality.</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-bus"></i>
                        </div>
                        <div class="reason_note">
                            <h3>Our vision</h3>
                            <p>To set up temporary abode, and improve the lives of distressed widows and children as well as the less priviledge</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="reason_note">
                            <h3>Core value</h3>
                            <p>integrity, professionalism, professional ethics and continuous learning</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our_service">
                <div class="service_box" id="box1">
                    <div class="service_img">
                        <img src="images/school_children.jpg" alt="hero">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-user-graduate"></i>
                        <h3>Scholarships</h3>
                        <p>We look to empower over 2000 helpless children through school over the next 2 years</p>
                    </div>
                </div>
                <div class="service_box">
                <div class="service_img">
                        <img src="images/school_children.jpg" alt="hero">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-user-graduate"></i>
                        <h3>Scholarships</h3>
                        <p>We look to empower over 2000 helpless children through school over the next 2 years</p>
                    </div>
                </div>
                <div class="service_box" id="box3">
                    <div class="service_img">
                        <img src="images/women.jpg" alt="hero">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h3>Helping the helpless</h3>
                        <p>Giving hope to hopeless and empowering the needy to make wealth</p>
                    </div>
                </div>
                
                
                <div class="service_box" id="box4">
                    <div class="service_img">
                        <img src="images/women.jpg" alt="hero">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h3>Helping the helpless</h3>
                        <p>Giving hope to hopeless and empowering the needy to make wealth</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- admission section -->
        <section id="covid" class="whyChoose">
                <?php
                    $get_events = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 30) AS details, article_id, title, photo FROM news_events ORDER BY post_date DESC LIMIT 1");
                    $get_events->execute();
                    $views = $get_events->fetchAll();
                    foreach($views as $view):
                ?>
                <img src="<?php echo 'media/'.$view->photo?>" alt="banner">
            <div class="choose_text">
                
                <div class="chooseImg">
                <img src="<?php echo 'media/'.$view->photo?>" alt="banner">
                    
                </div>
                <div class="texts">
                
                    <h3>Recent Event</h3> 
                    <h2><?php echo $view->title?></h2>
                    <p><?php echo $view->details?>      <span>Read more...</span></p>
                    <div class="btns">
                        <a href="javascript:void(0)" onclick="viewArticle('<?php echo $view->article_id?>')">Learn More <i class="fas fa-info"></i></a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            
        </section>
        <!-- team -->
        <section id="team">
            <h2>The Amazing team behind the Foundation</h2>
            <hr>
            <p>Our board of trustees is made up of qualified leaders and elders in the community dedicatd to empowering women and children</p>
            <div class="team">
                <figure>
                    <div class="board">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <!-- <img src="images/lecturer.jpg" alt="management photo"> -->
                    <figcaption>
                        <h3>Philip Idehenre<span>MD/CEO</span></h3>
                    </figcaption>
                </figure>
                <figure>
                    <div class="board">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <figcaption>
                        <h3>Rita Omozer<span>Board of Trustee</span></h3>
                    </figcaption>
                </figure>
                <figure>
                    <div class="board">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <figcaption>
                        <h3>Micheal Egboh<span>Board of Trustee</span></h3>
                    </figcaption>
                </figure>
                <figure>
                    <div class="board">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <figcaption>
                        <h3>Aliyu Hussaini<span>Board of Trustee</span></h3>
                    </figcaption>
                </figure>
            </div>
            <!-- <div class="more_team">
                <a href="about.html#team" title="View team members">View more <i class="fas fa-angle-double-right"></i></a>
            </div> -->
        </section>
        <!--Partners -->
        <!-- <section id="partners">
            <h3>Our Partners</h3>
            <div class="partners">
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
            </div>
        </section> -->
        <!-- online courses -->
        <Section id="plans">
            <h3 class="plans_title">Ongoing projects</h3>
            <h2>Check out ongoing projects and events</h2>
            <p class="first_p">Projects enagaged by members of the foundation</p>
            <div class="plans">
                <?php 
                    $get_projects = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 20) AS details, title, photo,post_date FROM projects ORDER BY post_date LIMIT 4");
                    $get_projects->execute();
                    $projects = $get_projects->fetchAll();
                    foreach($projects as $project):
                ?>
                <div class="plan_form" id="plan1">
                    <figure>
                        <div class="project_img">
                            <div class="pro_img">
                                <img src="<?php echo 'media/'.$project->photo?>" alt="projects">
                            </div>
                            <a href="javascript:void(0)">Read more <i class="fas fa-eye"></i></a>
                        </div>
                        <figcaption>
                            <h3><?php echo $project->title?></h3>
                            <p class="post_date"><?php echo date("jS M, Y", strtotime($project->post_date))?></p>
                            <div class="clear"></div>
                            <p class="course_details"><?php echo $project->details?></p>
                            <div class="author">
                                <img src="images/logo.png" alt="lecturer">
                                <p class="author_name">Peter Idehenre Foundation</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach?>
            </div>
            <a id="moreProjects" href="projects.php" title="View more projects">View all projects <i class="fas fa-angle-double-right"></i></a>

        </Section>
        <!-- gallery -->
        <Section id="gallery">
            <h3 class="plans_title">Our Gallery</h3>
            <!-- <h2>Photos and media</h2> -->
            <p class="first_p">Student gallery for the past sessions</p>
            <div class="plans">
                <?php 
                    $get_photos = $connectdb->prepare("SELECT * FROM gallery ORDER BY post_date DESC LIMIT 8");
                    $get_photos->execute();
                    $photos = $get_photos->fetchAll();
                    foreach($photos as $photo):
                ?>
                <div class="plan_form">
                    <figure>
                        <div class="gallery_img">
                            <img src="<?php echo 'media/'.$photo->photo?>" alt="gallery">

                        </div>
                        <figcaption>
                            <h3><?php echo $photo->title?></h3>
                            
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach?>
                
                
                <a id="moreProjects" href="gallery.php" title="View more photos">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
        </Section>
        
        <!-- hero -->
        <section class="investment">
            <div class="invest_img">
                <img src="images/boy.jpg" alt="Help a child">

            </div>
            <div class="intro">
                <p>Raise a helping hand</p>
                <h2>Giving hope to the helpless</h2>
                <p>At Philip Idehenre Foundation, we are determined to improve the livelihood of helpless widows and children across Nigeria and beyond by giving access to good healthcare, skill acquisition prgrammes and scholarships.</p><br>
                <p>We look to improve the lives of helpless children across areas in Nigeria by giving scholarships to over 2000 helpless children across the nation.</p>
                <p>Join us today to help save our future by giving quality education to these children who deserves it.</p>
                <a href="javascript:void(0)">Join us <i class="fas fa-hand-fist"></i></a>
            </div>
        </section>
        <!-- skill acquisition programme -->
        <section id="investment">
            <div class="intro">
                <p>Create a better tomorrow for the less privilege</p>
                <h2>We excel in empowering the less privilege skillfully</h2>
                <p>Join Philip Idehenre Foundation skill acquisition programme and empower yourself with indemand skills to help you succeed in this era of inflation and economic turmoil.<br><br>We look to empower over 1000 helpless widows so they can fend for themsleves and their children</p>
                <a href="javascript:void(0)"><i class="fa-solid fa-graduation-cap"></i> Apply now <i class="fa-solid fa-angle-double-right"></i></a>
            </div>
            <div class="invest_img">
                <img src="images//skill_acquisition.jpg" alt="Investment">

            </div>
        </section>
        <!-- hero -->
        <!-- <section id="hero">
            <div class="hero_image">
                <img src="images/happy_kids.jpg" alt="hero image">
            </div> 
            <div class="hero_notes">
                <div class="note">
                    <i class="fas fa-user-graduate"></i>
                    <h3>300+</h3>
                    <p>Children Educated</p>
                </div>
                <div class="note">
                <i class="fas fa-users"></i>
                    <h3>150+</h3>
                    <p>Distressed helped</p>
                </div>
                <div class="note">
                    <i class="fas fa-screwdriver-wrench"></i>
                    <h3>100+</h3>
                    <p>People empowered</p>
                </div>
                <div class="note">
                    <i class="fas fa-building"></i>
                    <h3>30+</h3>
                    <p>Projects completed</p>
                </div>
            </div>
        </section> -->
        <!-- <section id="testimonies">
            <h2>testimonies from our Clients</h2>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_01-540x518.jpg" alt="James Chester">
                        </div>
                        <div class="test_note">
                            <p>"I couldn’t be happier with the service I was provided. Everyone took ample time with me to ensure that my visit exceeded my expectations."</p>
                            <div class="testifier">
                                <img src="images/team_01-540x518.jpg" alt="testifier">
                                <span>- James Chester</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_02-540x518.jpg" alt="Andre Coleman morgans">
                        </div>
                        <div class="test_note">
                            <p>"We have used Bob and sil to provide services that our competitions cannot begin to offer. That has given us a decisive edge in our market. Now we can produce even more with sustainable energy"</p>
                            <div class="testifier">
                                <img src="images/team_02-540x518.jpg" alt="testifier">
                                <span>- Eddie Smith</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_03-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"We have been engaged with Bob and sil for several months now. They have been very responsive to all requests. Investing with Irecco has brought more financial value to us as a company as well as development."</p>
                            <div class="testifier">
                                <img src="images/team_03-540x518.jpg" alt="testifier">
                                <span>- Damian wilsbrock</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_04-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"Bob and SIl globale an excellent service, be it on a business or personal level.I found the company's various investment plans very helpful to the growth of my business and i am heading on a great path to finanncial freedom"</p>
                            <div class="testifier">
                                <img src="images/team_04-540x518.jpg" alt="testifier">
                                <span>- Sean Mendoz</span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section> -->
        <!-- hero 2 -->
        
        
        
        <!-- events and stories -->
        <section class="trends">
            <h2>Latest News and Events</h2>
            <hr>
            <div class="topics">
                <?php
                    $get_events = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 40) AS details, article_id, title, photo FROM news_events ORDER BY post_date DESC LIMIT 2");
                    $get_events->execute();
                    $views = $get_events->fetchAll();
                    foreach($views as $view):
                ?>
                <article>
                    <a href="javascript:void(0)" onclick="viewArticle('<?php echo $view->article_id?>')">
                        <img src="<?php echo 'media/'.$view->photo?>" alt="Impact of covid">
                        <div class="summary">
                            <h3><?php echo $view->title?></h3>
                            <p><?php echo $view->details?> <span>Read more...</span></p>
                        </div>
                    </a>
                </article>
                <?php endforeach?>
                <?php
                    if(!$get_events->rowCount() > 0 ){
                        echo "<h3>No recent stories</h3>";
                    }

                ?>
            </div>
            <div class="more">
                <a href="events_news.php">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
        </section>
        
    </main>
    
    <?php include "footer.php"?>
</body>
</html>