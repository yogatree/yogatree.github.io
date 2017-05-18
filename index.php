<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yogatree</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v2.1.0/dist/mini-default.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/styles.min.css">
    <link rel="icon" type="image/png" href="images/fav.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="js/code.min.js"></script>

    <style>
        table.double-header {
            border-collapse: collapse;
        }
        
        .double-header th {
            width: 150px;
        }
        
        .double-header td,
        .double-header th {
            border: 1px #ddd solid;
            padding: 10px;
        }
        
        .double-header {
            margin: 20px 0;
        }
        
        @media all and (min-width: 990px) {
            .double-header {
                float: left;
            }
            .double-header~.double-header td,
            .double-header~.double-header th {
                border-left: 0;
            }
            .double-header~.double-header tr:first-child th:first-child {
                display: none;
            }
            .double-header~.double-header tr:not(:first-child) th {
                display: none;
            }
        }
        
        table.preset.double-header:nth-child(2n) td {
            background: #A9D075;
        }
        
        table.preset td.green {
            background: #59B548!important;
            color: #d7e4d1;
        }
    </style>
</head>

<body>
    <header class="shadow-none border-none bd-bot">
        <div class="container hideonmobile">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#">
                                <img src="images/logo.png" alt="Yogatree" id="logo">
                            </a>
                        </div>
                        <div class="col-md-offset-2 col-md-7 col-lg-offset-5 col-lg-4" style="text-align: right;">
                            <span style="line-height: 2.8;">
                        <a href="#studio">Studio</a>
                        <a href="#classes">Classes</a>
                        <a href="#contact">Contact</a>
                     </span>
                            <span>
                        <a target="_blank" href="https://www.facebook.com/Yogatree-153466858049421/">
                           <img style="width:20px;" src="images/Facebook-logo-black.png" alt="">
                        </a>
                     </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mobile-only topnav" id="myTopnav">
            <div class="row">
                <div class="col-sm-5">
                    <a href="#">
                        <img src="images/logo.png" alt="Yogatree" style="height:60px;">
                    </a>
                </div>
                <div class="drawer">
                    <!--<a href="javascript:void(0);" style="font-size:15px;" class="icon">&#9776;</a>
               <a href="#studio" >Studio</a>
               <a href="#classes" >Classes</a>
               <a href="#contact">Contact</a>-->
                    <img class="hamburger" src="images/hamburger-green.png" alt="hamburger-menu" style="margin-right: 20px">
                </div>
            </div>
            <div id="sidemenu" class="relative border-none shadow-none">
                <div id="holder" class="bgap margin-top-l border-none shadow-none">
                    <!--<div><img class="hamburger" src="images/hamburger-green.png" alt="hamburger-menu"></div>-->
                    <div><a href="#studio">Studio</a></div>
                    <div><a href="#classes">Classes</a></div>
                    <div><a href="#contact">Contact</a></div>
                    <div>
                        <a target="_blank" href="https://www.facebook.com/Yogatree-153466858049421/">
                            <img style="width:20px;" src="images/Facebook-logo-black.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="col-sm-12 slider-parent">
            <div class="main slick-slider" style="position:relative">
                <div class="bg center mainBanner" style="background-image: url(images/explore.jpg)">
                    <div class="info" style="background:transparent">
                        <h2 class="slider-heading mtop-0" style="background:transparent">Explore</h2>
                        <p style="background:transparent">your infinite potential with Yogatree</p>
                    </div>
                </div>
                <div class="bg center mainBanner" style="background-image: url(images/transform.jpg)">
                    <div class="info" style="background:transparent">
                        <h2 class="slider-heading mtop-0" style="background:transparent">Journey</h2>
                        <p style="background:transparent">within to discover yourself with Yogatree</p>
                    </div>
                </div>
                <div class="bg center mainBanner" style="background-image: url(images/journey.jpg)">
                    <div class="info" style="background:transparent">
                        <h2 class="slider-heading mtop-0" style="background:transparent">Transform</h2>
                        <p style="background:transparent">it’s a new day, everyday with Yogatree</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 section t-center" id="studio">
            <h2 class="mtop-0">You'll love this space</h2>
            <p class="">
                Yogatree’s yoga studio is thoughtfully designed to bring out the best in your yoga practice. The brainchild of Mayuri, who
                discovered yoga while recovering from a life threatening accident, Yogatree has all the elements necessary
                for a fulfilling yoga experience. Mayuri’s innate desire to help others with the knowledge that changed her
                own life is evident in the thought and love that has gone into designing every detail in the studio. She
                believes that everyday practice is key to understanding your body and benefiting from yoga. Every element
                at Yogatree — from the way the studio looks, smells, and feels — is designed to encourage daily practice.
            </p>
            <br>
            <p class="">
                Come, experience this space for yourself and benefit from the fruit of the tree of yoga.
            </p>
        </div>
        <div class="col-sm-12 bg section bg-venue mtop-0" style="background-image:url(images/erfr.jpg);"></div>
        <div class="col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 section t-center" id="classes">
            <h2 class="mtop-0">Meet our teachers</h2>
            <p class="">
                At Yogatree, our teachers respect yoga for the positive change that it has brought to their lives. Trained in multiple styles
                of yoga, they are knowledgeable, experienced and great fun to train with. Their deep sense of empathy, by
                virtue of their own challenging journeys as yoga practitioners has helped them develop a strong connect with
                the students to help them grow and get better in their quest for a healthy body and a quiet mind. Each one
                brings in their unique style of teaching yoga. But what connects them is a deep personal experience of yoga
                and the missionary zeal to spread the benefits of yoga.
            </p>
        </div>
        <div class="col-sm-12 bg section bg-class" style="background-image:url(images/class.jpg);"></div>

        <div class="row section">
            <div class="col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 t-center">
                <div class="row" id="trainers">
                    <div class="col-sm-12 col-md-4 t-center">
                        <div class="trainer">
                            <h2>Ila</h2>
                            <p>Dreamer &amp; Discoverer</p>
                            <p><img class="wp-image-160 alignnone size-medium" src="images/ila.png" alt="">
                            </p>
                            <div class="text">
                                <p>
                                    Ila left behind a successful (and stressful) career in journalism to discover herself through yoga. Life on the yoga mat
                                    has been a fulfilling and enriching journey for her. She has trained and certified in
                                    the Vinyasa style of yoga. Vinyasa flow has given her the strength and courage to become
                                    a passionate long distance runner. Ila believes that yoga is the worship that helps us
                                    identify with the Creator. As a teacher, Ila likes to push her students through challenging
                                    asanas, to expand their boundaries and discover themselves in the process.
                                </p>
                            </div>
                        </div>
                        <div class="trainer">
                            <h2>Avinash</h2>
                            <p>Driven &amp; Different</p>
                            <p><img class="wp-image-179 alignnone size-medium" src="images/avinash.png" alt="">
                            </p>
                            <div class="text">
                                <p>Avinash is an Electronics Engineer and works in the field of Digital Design on ASIC Platform.
                                    He came to Yoga after trying all forms of Fitness regime. Yoga brought the much needed
                                    discipline and clarity of thoughts required to perform his highly complex Chip designing
                                    work. Over a period of time, Avinash started going deeper into the practice and got himself
                                    certified in Sivananda style of Yoga. For Avinash, teaching Yoga is " Svadhyaya" - study
                                    of self. His dedication & passion for Yoga is infectious and motivates his students</p>
                            </div>
                        </div>
                        <div class="trainer">
                            <h2>Preeti</h2>
                            <p>Young &amp; Enthusiastic</p>
                            <p><img class="wp-image-172 alignnone size-medium" src="images/Preeti.png" alt="">
                            </p>
                            <div class="text">
                                <p>
                                    Preeti is a certified Ashtanga yoga teacher. She is energetic and eager to go deep into yogic practice. Preeti started her
                                    career as an IT engineer at Accenture, but soon found her true calling with yoga. As
                                    a young and enthusiastic yoga teacher, Preeti exudes positivity and her classes are full
                                    of free-flowing positive energy.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 t-center">
                        <div class="trainer">
                            <h2>Mayuri</h2>
                            <p>The Guiding Light</p>
                            <p><img class="wp-image-159 alignnone size-medium" src="images/mayuri.png" alt="">
                            </p>
                            <div class="text">
                                <p>
                                    Mayuri was happy with her corporate job and raising a happy family when she met with a life-threatening accident while trekking
                                    in the Himalayas. She sustained 14 fractures, broken scapula and collar bones, compressed
                                    cervical spine, a 3-inch cut on the skull and blurred vision. It took her four months
                                    to walk again. Her life changed completely. Mayuri took to Yoga as part of her rehabilitation
                                    and was pleased with how well she was able to bounce back to life. Yoga soon became the
                                    purpose of her existence as Mayuri embarked on an exciting journey of learning and self-discovery.
                                    She has since studied various styles of yogic practices like Sivananda, Ashtanga, Iyengar
                                    yoga and Bihar School of Yoga under the guidance of internationally renowned teachers.
                                    As a yoga teacher, Mayuri aims to provide encouraging and gentle guidance for injury-free
                                    practice. She understands that every individual is unique in their abilities and her
                                    yoga classes are designed to suit the individual need of every practitioner.
                                </p>
                            </div>
                        </div>
                        <div class="trainer">
                            <h2>Susi</h2>
                            <p>Smiling &amp; Solid</p>
                            <p><img src="images/susi.png" alt="">
                            </p>
                            <div class="text">
                                <p>
                                    Susithra , as a yoga teacher, brings in a lot of empathy and care into her sessions. She is constantly learning and exploring
                                    the different styles of yoga practices, which makes her equally apt in a vinyasa as well
                                    as a hatha yoga class. Her gentle and motivating words help the practitioners to relax
                                    and enjoy the session.
                                </p>
                            </div>
                        </div>
                        <div class="trainer">
                            <h2>Sahana</h2>
                            <p>Creative &amp; Positive</p>
                            <p><img class="wp-image-173 alignnone size-medium" src="images/Sahana.png" alt="">
                            </p>
                            <div class="text">
                                <p>
                                    Sahana started her yoga journey with Yogatree where she fell in love with yoga. As an IT solutions designer, she started
                                    yoga to keep herself fit and active. Eventually, as her passion for yoga grew through
                                    years, she decided to pursue it by getting herself certified as a yoga teacher. Her creative
                                    sequences and positive energy can put anyone in a good mood right away.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 t-center">
                        <div class="trainer">
                            <h2>Gyani</h2>

                            <p>Strong &amp; Sporty</p>
                            <p><img class="wp-image-165 alignnone size-medium" src="images/gyani.png" alt="">
                            </p>
                            <div class="text">
                                <p>
                                    Gyani is an engineer and MBA from IIM-Bangalore. She works for a multinational company in Engineering & Electronics. Gyani
                                    has been interested in sports and fitness since her teenage years but, she went through
                                    a phase where she sustained sports injuries. She turned to yoga for rehabilitation and
                                    was surprised at how quickly she was able to recover. Yoga made her stronger than before.
                                    Gyani believes that yoga is in everything that we do – from breathing to overcoming life’s
                                    challenges. Her motto is to help people to realize their potential and guide them towards
                                    a stronger mind and body through yoga.
                                </p>
                            </div>
                        </div>
                        <div class="trainer" style=" border-bottom: 2px solid #e6e6e6;">
                            <h2>Fathima</h2>
                            <p>Fun &amp; Focused</p>
                            <p><img class="wp-image-170 alignnone size-medium" src="images/fathima.png" alt="">
                            </p>
                            <div class="text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <h2 class="t-center">We are making a difference</h2>
        </div>
        <div class="row">
            <div class="col-sm-12" id="testimonials">
                <div class="testimonial-parent slick-slider ">
                    <div class="testimonial" style=" background: #85b24d">
                        <div class="row">
                            <div class="t1 bg bg-testimonial col-sm-12 col-md-7 col-lg-8 flex-col center t-center" style="background:url(images/t1.jpg) no-repeat center left;">
                                <h3 class="testimonial-caption sub-heading" style="margin-bottom:0; margin-top:0;line-height: 1;">“Undivided attention”</h3>
                                <div class="description">
                                    <p>
                                        “Over the past few years, Yogatree has played a pivotal role in refining our physical well being, through their well established
                                        practice sessions. The experienced instructors under the guidance of Mayuri strive
                                        to provide undivided attention to us during these sessions thereby aligning with
                                        the above objective. We definitely recommend and also enjoy being a part of Yogatree”</p>
                                </div>
                                <p>
                                    - PRASAD YEZHUVATH, ACCENTURE
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-5 col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/p1.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="testimonial" style="background: #85b24d">
                        <div class="row">
                            <div class="t2 bg bg-testimonial t2 col-sm-12 col-md-7 col-lg-8 flex-col center t-center" style="background:url(images/t2.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Incredible”</h3>
                                <div class="description">
                                    <p>
                                        “My experience with Mayuri and her team at Yogatree has been incredible as the studio effectively caters to one's physical
                                        and inner wellbeing. Every mentor at Yogatree is effectively caters to one's physical
                                        and inner wellbeing. Every mentor at Yogatree is overcoming challenges such as anxiousness
                                        and stress. I have succeeded in creating positive temperament towards myself.”</p>
                                </div>
                                <p>
                                    - DR. N. BHARANI (Ph.D), LECTURER IN POLITICAL SCIENCE
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-5 col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/p2a.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="testimonial" style="background: #85b24d">
                        <div class="row">
                            <div class="t3 bg bg-testimonial col-sm-12 col-md-7 col-lg-8 flex-col center t-center" style="background:url(images/t3a.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Magical”</h3>
                                <div class="description">
                                    <p>
                                        “Yogatree has made a big impact to my life over the past four years. It has not just enhanced my overall fitness, energy
                                        and exibility but also helped me achieve inner peace and happiness. I certainly look
                                        forward to my classes everyday at Yogatree where the experience is magical due to
                                        serence ambience committed instructors. Yoga is an experience that everyone should
                                        go through and Yogatree is one of the nicest places where one can experience it.”</p>
                                </div>
                                <p>
                                    - RAMKUMAR KALEESWARAN, SENIOR PRODUCT MANAGER, CISCO SYSTEMS
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-5 col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/p3a.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="testimonial" style="background: #85b24d">
                        <div class="row">
                            <div class="t4 bg bg-testimonial col-sm-12 col-md-7 col-lg-8 flex-col center t-center" style="background:url(images/t4a.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Overwhelming”</h3>
                                <div class="description">
                                    <p>
                                        “The dedication and enthusiasm shown by Mayuri and her team is so overwhelming that one cannot think of missing a single
                                        class. I have been going to Yogatree for the past 1.5 yrs and have not seen a single
                                        instance of an unplanned cancellation of a class. With the variations brought in
                                        various classes with different set of asanas and personalized correction of postures;
                                        I have benefited a lot through the practice. Yogatree rocks !!”</p>
                                </div>
                                <p>
                                    - ANUP
                                </p>
                            </div>
                            <!--<div class="">-->
                            <!--<div>-->
                            <img id="" src="images/testimonials/p4a.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class=" testimonial" style="background: #85b24d">
                        <div class="row">
                            <div class="t5 bg bg-testimonial col-sm-12 col-md-7 col-lg-8 flex-col center t-center" style="background:url(images/t5.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Refreshing”</h3>
                                <div class="description">
                                    <p>
                                        “One thing I look forward to everyday is the practice at Yogatree. It's the energy booster. Love that refreshing feeling
                                        of the mind and the body after the practice. It keeps me energetic through the day,
                                        helps me stay calm and think clearly all the time.
                                    </p>
                                    <p>
                                        The passion of the instructors, their constant positive reinforcement and individual care have been highly motivating. When
                                        my back pain, which was hurting me over 10 years, started bothering me during the
                                        practice, Mayuri and Suchitra promptly took charge of the issue, got it magically
                                        cured with the therapy classes and other tips in just a few weeks. Thank you Yogatree
                                        for introducing me to Yoga and making it a part of me.”
                                    </p>
                                </div>
                                <p>
                                    - SANDHYA
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-5 col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/p5a.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="testimonial" style="background: #85b24d">
                        <div class="row">
                            <div class="t6 bg bg-testimonial col-sm-12 col-md-7 col-lg-8 flex-col center t-center" style="background:url(images/t6a.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Perfect”</h3>
                                <div class="description">
                                    <p>
                                        “Mayuri's is a very airy, fragrant, neat, tidy and beautifully decorated class with light music, it is just perfect for the
                                        body and mind. The two days of therapy classes for back pain has done wonders to
                                        my back and knees. I feel secure in Mayuri's class as she watches and checks if I
                                        am doing my practice correctly which is so important to prevent injury and that is
                                        because she is aware of the bodily requirements of each and every student. Yogatree
                                        really helps me pamper my body and soul.
                                    </p>
                                </div>
                                <p>Thank you Yogatree.”</p>
                                <p>
                                    - MARYANNE THOMAS, LAWYER
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-5 col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/p6a.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="testimonial" style="background: #85b24d">
                        <div class="row">
                            <div class="t7 bg bg-testimonial col-sm-12 col-md-7 col-lg-8 flex-col center t-center" style="background:url(images/t7.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Holistic”</h3>
                                <div class="description">
                                    <p>
                                        “First of all I would like to thank Mayuri for giving me this space to share my experience at Yogatree. I have been practicing
                                        Yoga here for more than one and a half year now and it has been a beautiful journey
                                        so far... life transforming. Mayuri has a wonderful team, everybody having a holistic
                                        approach towards the practice. Most importantantly they taught us how to breathe
                                        - When to inhale and when to exhale and how proper breathing is the fuel of Life.
                                        Such constant explanations are given to the practioners while they perform the asanas
                                        which ensures that the mind is actively focused on and communicating with the body.
                                        This oneness allows the body to respond more effectively to the Asanas, encouraging
                                        to keep pushing one's limits higher and deeper. Yogatree has shown me the path towards
                                        a healthy and stressfree life. Trust the vibes and the energy in this studio... the
                                        practice here aligns the mind .. the body and everything just flows making Yoga effortless.
                                    </p>
                                    <p>Thanks for everything Mayuri....”</p>
                                </div>
                                <p>
                                    - SWETHA
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-5  col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/p7a.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="testimonial" style="background: #85b24d">
                        <div class="row">
                            <div class="t8 bg bg-testimonial col-sm-12 col-md-7 col-lg-8 flex-col center t-center" style="background:url(images/t8.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Positive impact”</h3>
                                <div class="description">
                                    <p>
                                        “My wife started yoga with Yogatree about 4 years ago and I joined a year later - very much influenced by her pleasant experiences
                                        with Yogatree and the benefits she derived from yoga – better stamina, reduced anxiety
                                        and calmer mind being some of them. I have thoroughly enjoyed my yoga journey – starting
                                        with reducing the struggle I had with my shoulder/back pain, increased stamina and
                                        calmness (to combat the crazy Bangalore traffic) and reduce stress levels overall.
                                        While the student's efforts are important, we think the teachers at Yogatree made
                                        a huge impact on our practice - classes are well paced, enough variety through the
                                        week, personal attention and constantly improving themselves by asking for feedback.
                                        There is a saying : ‘When the student is ready, the teacher appears’. We truly believe
                                        this in our yoga learning and thank Yogatree for making such a positive impact on
                                        our lives.”</p>
                                </div>
                                <p>
                                    - RAMESH
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-5  col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/p8a.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="testimonial" style="background: #85b24d">
                        <div class="row">
                            <div class="t9 bg bg-testimonial col-sm-12 col-md-7 col-lg-8 flex-col center" style="background: url(images/t7.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Self confidence booster”</h3>
                                <div class="description">
                                    <p>
                                        “Yogatree has been instrumental in getting my self-confidence back. thanks to the Yogatree team, I feel so energised that
                                        I carry the aura of positivity for the rest of my day.”</p>
                                </div>
                                <p>
                                    - FARZI AHMED, MANAGER, HUMAN RESOURCES, TECSOL SOFTWARE PVT. LTD
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-5 col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/t1.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="testimonial" style="background: #85b24d">
                        <div class="row">
                            <div class="t10 bg bg-testimonial col-sm-12 col-md-7 col-lg-8 flex-col center t-center" style="background: url(images/t10.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Overcoming fear”</h3>
                                <div class="description">
                                    <p>
                                        “I was diagnosed with stage 2 malignancy. While I received the best in class medical treatment, I needed to overcome the
                                        physical and mental trauma of the event. Yoga practice at Yogatree helped me through
                                        overcoming fear and bringing back life to the years extended by the medical treatment.”</p>
                                </div>
                                <p>
                                    – SANJEEB , CRO, EZETAP MOBILE SOLUTIONS
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-5 col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/p10a.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class=" testimonial  " style="background: #85b24d">
                        <div class="row w-100">
                            <div class="t11 col-sm-12 col-md-6 col-lg-8 flex-col center bg bg-testimonial t-center" style="background:  url(images/t11.jpg) no-repeat center left;">
                                <h3 class="sub-heading testimonial-caption" style="margin-bottom:0; margin-top:0;line-height: 1;">“Rocks”</h3>
                                <div class="description">
                                    <p>
                                        “One of our frequest customer of kid’s Yoga, all she has to say is “Yogatree rocks””</p>
                                </div>
                                <p>
                                    - SANJANA
                                </p>
                            </div>
                            <!--<div class="col-sm-12 col-md-6 col-lg-4">-->
                            <!--<div>-->
                            <img src="images/testimonials/p11a.jpg" alt="">
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row section">
        <div class="col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 t-center">
            <h2 class="mtop-0">A different twist everyday</h2>
            <p class="">
                Drawing from our teachers’ collective experience of all major schools of yoga such as Mysore Ashtanga, BKS Iyengar, Sivananda
                and the Bihar School of Yoga, we have designed a weekly schedule that is a delightful combination of the
                uniqueness of these schools and styles, with focus on flexibility, strength and endurance. Our distinctive
                schedule enourages people to continue with daily practice and motivates them to make yoga a part of their
                daily life.
            </p>
            <p class="t-left">Do read what some of our practitioners have to say about their continuing experience with Yogatree.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 bg-gray tgap-l bgap-l">
            <div class="row section">
                <div class="col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 t-center">
                    <h2 class="t-center mtop-0">Choose your transformation schedule</h2>
                    <p class="">
                        Yoga is 1% theory and 99% practice. Read on for details of our classes. We encourage you to turn theory into practice and
                        come experience the benefits of yoga firsthand at Yogatree
                    </p>
                    <div class="col-sm-12 section preset">
                        <h3 class="t-center">Weekday</h3>
                        <table class="preset shadow-none border-none desktop-only">
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>6:30 A.M.</td>
                                        <th>8:00 A.M.</td>
                                            <th>9:05 A.M.</td>
                                                <th>10:15 A.M.</td>
                                                    <th>5:30 P.M.</td>
                                                        <th>7:00 P.M.</td>
                                </tr>
                                <tr>
                                    <th>Monday</th>
                                    <td>Breathe & Stretch (Hatha Moderate)</td>
                                    <td>Breathe & Stretch (Vinyasa Moderate)</td>
                                    <td>Breathe & Stretch (Hatha Moderate)</td>
                                    <td>Breathe & Stretch (Vinyasa Moderate)</td>
                                    <td>Breathe & Stretch (Hatha Moderate)</td>
                                    <td>Breathe & Stretch (Vinyasa Moderate)</td>
                                </tr>
                                <tr>
                                    <th>Tuesday</th>
                                    <td>Flex & Twist (Hatha Moderate)</td>
                                    <td class="green">Healing Touch (Iyengar Yoga therapy)</td>
                                    <td>Flex & Twist (Hatha Moderate)</td>
                                    <td>Flex & Twist (Hatha Intense)</td>
                                    <td>Flex & Twist (Hatha Moderate)</td>
                                    <td>Flex & Twist (Hatha Intense)</td>
                                </tr>
                                <tr>
                                    <th>Wednesday</th>
                                    <td>Strength & Stamina (Hatha Intense)</td>
                                    <td>Strength & Stamina (Vinyasa Flow)</td>
                                    <td>Strength & Stamina (Hatha Moderate)</td>
                                    <td>Strength & Stamina (Vinyasa Flow)</td>
                                    <td>Strength & Stamina (Hatha Moderate)</td>
                                    <td>Strength & Stamina (Vinyasa Flow)</td>
                                </tr>
                                <tr>
                                    <th>Thursday</th>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                    <td class="green">Healing Touch (Iyengar Yoga therapy)</td>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                </tr>
                                <tr>
                                    <th>Friday</th>
                                    <td>Breaking Boundaries (Hatha Intense)</td>
                                    <td>Hour With Power (Vinyasa Flow)</td>
                                    <td>Breaking Boundaries (Hatha Intense)</td>
                                    <td>Hour With Power (Vinyasa Flow)</td>
                                    <td>Breaking Boundaries (Hatha Intense)</td>
                                    <td>Hour With Power (Vinyasa Flow)</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="hide-desktop">
                            <table class="double-header preset border-none shadow-none w-100">
                                <tr>
                                    <th></th>
                                    <th scope="col">6:30 A.M.</th>
                                </tr>
                                <tr>
                                    <th scope="row">Monday</th>
                                    <td>Breathe & Stretch (Hatha Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tuesday</th>
                                    <td>Flex & Twist (Hatha Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wednesday</th>
                                    <td>Strength & Stamina (Hatha Intense)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Thursday</th>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Friday</th>
                                    <td>Breaking Boundaries (Hatha Intense)</td>
                                </tr>
                            </table>
                            <table class="double-header preset border-none shadow-none w-100">
                                <tr>
                                    <th></th>
                                    <th scope="col">8:00 A.M.</th>
                                </tr>
                                <tr>
                                    <th scope="row">Monday</th>
                                    <td>Breathe & Stretch (Vinyasa Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tuesday</th>
                                    <td class="green">Healing Touch (Iyengar Yoga therapy)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wednesday</th>
                                    <td>Strength & Stamina (Vinyasa Flow)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Thursday</th>
                                    <td class="green">Healing Touch (Iyengar Yoga therapy)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Friday</th>
                                    <td>Hour With Power (Vinyasa Flow)</td>
                                </tr>
                            </table>
                            <table class="double-header preset border-none shadow-none w-100">
                                <tr>
                                    <th></th>
                                    <th scope="col">9:05 A.M.</th>
                                </tr>
                                <tr>
                                    <th scope="row">Monday</th>
                                    <td>Breathe & Stretch (Hatha Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tuesday</th>
                                    <td>Flex & Twist (Hatha Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wednesday</th>
                                    <td>Strength & Stamina (Hatha Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Thursday</th>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Friday</th>
                                    <td>Breaking Boundaries (Hatha Intense)</td>
                                </tr>
                            </table>
                            <table class="double-header preset border-none shadow-none w-100">
                                <tr>
                                    <th></th>
                                    <th scope="col">10:15 A.M.</th>
                                </tr>
                                <tr>
                                    <th scope="row">Monday</th>
                                    <td>Breathe & Stretch (Vinyasa Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tuesday</th>
                                    <td>Flex & Twist (Hatha Intense)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wednesday</th>
                                    <td>Strength & Stamina (Vinyasa Flow)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Thursday</th>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Friday</th>
                                    <td>Hour With Power (Vinyasa Flow)</td>
                                </tr>
                            </table>
                            <table class="double-header preset border-none shadow-none w-100">
                                <tr>
                                    <th></th>
                                    <th scope="col">5:30 P.M.</th>
                                </tr>
                                <tr>
                                    <th scope="row">Monday</th>
                                    <td>Breathe & Stretch (Hatha Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tuesday</th>
                                    <td>Flex & Twist (Hatha Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wednesday</th>
                                    <td>Strength & Stamina (Hatha Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Thursday</th>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Friday</th>
                                    <td>Breaking Boundaries (Hatha Intense)</td>
                                </tr>
                            </table>
                            <table class="double-header preset border-none shadow-none w-100">
                                <tr>
                                    <th></th>
                                    <th scope="col">7:00 P.M.</th>
                                </tr>
                                <tr>
                                    <th scope="row">Monday</th>
                                    <td>Breathe & Stretch (Vinyasa Moderate)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tuesday</th>
                                    <td>Flex & Twist (Hatha Intense)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wednesday</th>
                                    <td>Strength & Stamina (Vinyasa Flow)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Thursday</th>
                                    <td>Restore & Renew (Pranayama, Meditation & Asana)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Friday</th>
                                    <td>Hour With Power (Vinyasa Flow)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                    <div class="row" style="align-items:center">
                        <div class="col-sm-12 col-md-12 col-lg-7">
                            <h3 class="sub-heading t-center">Weekend</h3>
                            <table class="preset w-100 margin-none border-none shadow-none hideonmobile">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th>7:00 A.M.</td>
                                            <th>8:30 A.M.</td>
                                                <th>10:00 A.M.</td>
                                    </tr>
                                    <tr>
                                        <th>Saturday</th>
                                        <td>Breathe & Balance (Hatha Moderate)</td>
                                        <td>Hour With Power (Vinyasa Flow)</td>
                                        <td>Move & Meditate (Hatha Moderate)</td>
                                    </tr>
                                    <tr>
                                        <th>Sunday</th>
                                        <td>Breathe & Balance (Hatha Moderate)</td>
                                        <td>Hour With Power (Vinyasa Flow)</td>
                                        <td>Move & Meditate (Hatha Moderate)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mobile-only">
                                <table class="double-header preset border-none shadow-none w-100">
                                    <tr>
                                        <th></th>
                                        <th scope="col">7:00 A.M.</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Saturday</th>
                                        <td>Breathe & Balance (Hatha Moderate)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sunday</th>
                                        <td>Breathe & Balance (Hatha Moderate)</td>
                                    </tr>

                                </table>
                                <table class="double-header preset border-none shadow-none w-100">
                                    <tr>
                                        <th></th>
                                        <th scope="col">8:30 A.M.</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Saturday</th>
                                        <td>Hour With Power (Vinyasa Flow)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sunday</th>
                                        <td>Hour With Power (Vinyasa Flow)</td>
                                    </tr>
                                </table>
                                <table class="double-header preset border-none shadow-none w-100">
                                    <tr>
                                        <th></th>
                                        <th scope="col">10:00 A.M.</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Saturday</th>
                                        <td>Move & Meditate (Hatha Moderate)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sunday</th>
                                        <td>Move & Meditate (Hatha Moderate)</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-offset-2 col-lg-3 t-center align-end">
                            <div class="legend light-green">All Levels</div>
                            <div class="green legend">Therapy</div>
                            <div class="legend yellow">Intermediate/<br/>Advanced</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row section">
        <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="row">
                <div class="col-sm-12 col-md-6 t-center pad-lr">
                    <div>
                        <img src="images/pow.png" alt="">
                    </div>
                    <h4>Power Yoga</h4>
                    <p class="">
                        As the name suggests, power yoga challenges your stamina, strength and flexibility. It is an intense work out through steady
                        yet controlled movements from one asana to another, synchronized with the breath. The teacher will
                        help you work with your body, expand your physical limits and create the highest levels of energy,
                        vitality and freedom. If you are looking for a challenging workout to tone your body, lose those
                        extra kilos and feel confident about yourself, this is the class to be in. Don’t forget to bring
                        your hand towel as power yoga will make you work out a good sweat!
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 t-center pad-lr tab-tgap-l">
                    <div>
                        <img src="images/hatha-1.png" alt="">
                    </div>
                    <h4>Hatha Yoga</h4>
                    <p class="">
                        In this class, the teacher leads the practitioner through a set of asanas designed to align the body, breath and mind. The
                        asanas are chosen to help open up the channels of the body with primary focus on the spine. Hatha
                        Yoga creates balance in the body and restores health and vitality. With this practice, one can develop
                        a balance between strength and flexibility, a balance between effort and surrender in every espect
                        of life. The Hatha Yoga class is designed to bring the practitioner’s attention to breath, which
                        is the bridge between the body and the mind. It helps to still the fluctuations of the mind and teaches
                        one to be present in the moment. Excellent for maintaining an active body and quiet mind, Hatha Yoga
                        can help you manage stress successfully and improve your immunity tremendously.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 t-center pad-lr tab-tgap-l">
                    <div>
                        <img src="images/ther.png" alt="">
                    </div>
                    <h4>Therapy Yoga</h4>
                    <p class="">
                        Therapy Yoga is a comprehensive system of restorative yoga poses combined with breath work and guided meditation, specifically
                        designed to enhance the body’s own capacity to heal. Although yoga as a practice is therapeautic,
                        in a yoga therapy session the intention completely focuses towards the specific healing need of the
                        practitioner. In Yogatree, we have been succesfully helping the members to manage or cure lower back
                        pain, neck and shoulder pain, knee pain and insomnia. Here we believe ” yoga teaches us to cure what
                        need not be endured and endure what cannot be cured”.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 t-center pad-lr tab-tgap-l">
                    <div>
                        <img src="images/rest.png" alt="">
                    </div>
                    <h4>Restorative Iyengar Yoga</h4>
                    <p class="">
                        This class focuses on deep relaxation through pranayama and stress-relieving asanas. The teacher encourages the use of different
                        props like a belt, bolster and a wooden brick to get into the postures and remain there effortlessly.
                        The slow pace of this practice accompanied by deep breathing, stimulates the parasympathetic nervous
                        system from the very beginning of the session. At the end, the practitioner experinces a prolonged
                        calmness of the mind with expanded awareness of the self. This is one of the most popular classes
                        in our studio, because of its track record in alleviating stress successfully.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 t-center pad-lr tab-tgap-l">
                    <div>
                        <img src="images/yin.png" alt="">
                    </div>
                    <h4>Yin Yoga</h4>
                    <p class="">
                        A passive practice, Yin Yoga involves variations of seated and supine poses typically held for longer duration. This style
                        of yoga practice generally targets the connective tissues such as ligaments, bones, even the joints
                        of mainly the hips, pelvis and lower spine. Yin yoga is a perfect complement to the dynamic and active
                        styles of yoga practices such as vinyasa or power yoga. It is also quite challenging in its own way
                        as you are expected to hold the postures for longer duration. This brings in a meditative approach
                        to the practice aimed at cultivating awareness of inner silence, and bringing to light a universal,
                        interconnecting quality.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 t-center pad-lr tab-tgap-l">
                    <div>
                        <img src="images/presentation.png" alt="">
                    </div>
                    <h4>Vinyasa Flow Yoga</h4>
                    <p class="">
                        The term Vinyasa refers to gradual progression, it also refers to the alignment of breath and movement that makes up the
                        steps and leads to the next. In this class, the practitioner experiences a dynamic flow of asanas
                        which can be intense, vigorous, stimulating as well as focused and fully absorbing. Traditionally,
                        the Surya Namaskara remains a integral part of the flow. These intense sessions help the body to
                        detoxify and reenergize while completely relaxing the mind. Our practitioners love the experience
                        of getting into the “Flow”.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 bg bg-today flex-col" style="background-image:url(images/today.jpg);" id="booking">
            <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 flex-col justify-center booking">
                <h2 class="mtop-0">Today</h2>
                <div>
                    <p class="font-light">IS A GOOD DAY TO START.</p>
                    <p class="font-light">BOOK YOUR CLASS NOW!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 section" id="contact">
            <h2 class="t-center">Get in touch with us</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 bg bg-contain bg-bldg" style="background-image:url(images/yoga-tree-studio-pic.jpg);"></div>
    </div>
    <div class="row section">
        <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3 class="sub-heading">Leave us a message</h3>
                    <!--?php
                                                                  if(isset($_GET['success']) && $_GET['success'] = "yes")
                                                                  { ?-->
                    <p class="contact_success_message hidden">Your form has been submitted successfully !</p>
                    <!--?php
                                                               } ?-->
                    <form method="post" name="contact" class="padding-left-0 shadow-none border-none cont for validate-form" action="send-form1.php"
                        novalidate="novalidate">
                        <div class="form-group f-sty">
                            <input class="form-control input required green w-100" type="text" name="fname" id="fname" placeholder="Name*">
                        </div>
                        <div class="form-group f-sty">
                            <input class="form-control input required green w-100" type="email" name="email" id="email" placeholder="Email*">
                        </div>
                        <div class="form-group f-sty">
                            <textarea class="form-control text-area text-area1 green w-100" type="text" name="message" id="message" placeholder="Comments"></textarea>
                        </div>
                        <button id="submit" value="Send" class="shadow-none btn" name="submit" type="submit"></button>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3 class="sub-heading">Drop by our studio</h3>
                    <div class="col-sm-12">
                        <table class="contact-info shadow-none border-none margin-none">
                            <tbody>
                                <tr>
                                    <td valign="top"><img src="images/marker.png"></td>
                                    <td valign="top">
                                        2nd Floor, KSM Arcade(Above Lakme), No.74, 4th<br> Cross, Panduranga Nagar, Banerghatta
                                        Road, Bengaluru, Karnataka 560076
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/phone.png"></td>
                                    <td><a style="color:inherit;" href="tel:09900220033">099002 20033</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.2362257798677!2d77.59531431435302!3d12.892526220097878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1524bf664c5b%3A0xe35f05f360999e85!2sYogatree!5e0!3m2!1sen!2sin!4v1469515761103"
            width="100%" height="450" frameborder="0" style="border:0; vertical-align:bottom;" allowfullscreen></iframe>
    </div>
    </div>
    <footer class="t-center">
        <div class="row">
            <div class="col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <p class="green text-white">&copy; 2017 Yogatree. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>