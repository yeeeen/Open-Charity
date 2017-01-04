<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OpenCharity</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <?php require_once "csscrush/core/CssCrush.php"; 
                csscrush_set('options', array(
                    'output_dir'=>'./assets/css/',
                    'minify' => 'true',
                    'formatter' => 'single-line',
                    'plugins' => array('color', 'ease', 'forms', 'ie-opacity', 'loop', 'px2em', 'rem', 'hocus-pocus')
                     ));
                echo csscrush_tag('csscrush/style.css');?>
</head>

<body>
    <div class="pageStart" id="home">
        <nav id="top-nav" class="topNav desktopNav">
            <div class="wrapper">
                <div id="topLogo" class="col col-span-2"> <a href="/">&nbsp;</a> </div>
                <div id="menuLinks" class="col col-span-10 desktopNav">
                    <ul>
                        <li><a href="/">About Open Charity</a></li>
                        <li><a href="/">The Blog</a></li>
                        <li><a href="/" class="btn">Join Us</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="mobileNav">
                <input type="checkbox" id="menu-open">
                <nav class="menu-list">
                    <ul>
                        <li><a href="/">About Open Charity</a></li>
                        <li><a href="/">The Blog</a></li>
                        <li><a href="/" class="btn">Join Us</a></li>
                    </ul>
                  </nav>
                
                <label for="menu-open" class="nav-btn">
                    <span></span>
                    <span></span>
                  <span></span>
                </label>
            </div>
        </nav>
        
        <section id="hero" class="heroPage">
            <h1 class="welcomeTitle">Sharing Ideas for Charities</h1>
            <div class="welcomeMsg">
                <p>Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</p>
                <p style="font-size:14px"> By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact. </p>
                <p>Together we can make a bigger diference.</p>
            </div>
        </section>
        <section id="banner-strip" class="eventStrip">
            <div class="wrapper">
                <div class="col col-span-6 next-event">
                    <h2 class="meta-time"><b>Next Event: </b>June 23<sup>rd</sup> 2016 <span class="time">18:30 - 21:00</span></h2>
                    <div class="meta-desc"> Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD </div>
                </div>
                <div class="col col-span-6 text-right event-register"> <a href="/" class="btn">Register</a> </div>
            </div>
        </section>
        <section id="getInvolved" class="content">
            <h1 class="title">Get Involved</h1>
            <div class="wrapper">
                <div class="col col-span-4"> <img src="assets/img/Meetup.png" />
                    <h3>We Do Meetings</h3>
                    <p>We organise our meetings through the OpenCharity Meetup group</p> <a href="/" class="btn outline">Meetup Group</a> </div>
                <div class="col col-span-4"> <img src="assets/img/Slack.png" />
                    <h3>We Collaborate</h3>
                    <p>OpenCharity have a slack group for daily collaboration</p> <a href="/" class="btn outline">Slack Group</a> </div>
                <div class="col col-span-4"> <img src="assets/img/Google.png" />
                    <h3>We Share</h3>
                    <p>We have a Google Group set up to share tools and documents</p> <a href="/" class="btn outline">Google Group</a> </div>
            </div>
        </section>
        <section id="ourMission" class="content">
            <h1 class="title">Our Mission</h1>
            <p class="mission-desc"> Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space. <big>
                 If you are a charity or a supplier, we are ready to welcome you.</big> </p>
            <div class="wrapper">
                <div class="col col-span-4 col-help">
                    <div class="icon-border">
                        <div class="icon"><img src="assets/img/icon-bulb.png" /></div>
                    </div>
                    <div class="mission-text">
                        <h3>We help charities</h3>
                        <p> share knowledge and working practice to make the best technology choices. </p>
                    </div>
                </div>
                <div class="col col-span-4 col-together">
                    <div class="icon-border">
                        <div class="icon"><img src="assets/img/icon-people.png" /></div>
                    </div>
                    <div class="mission-text">
                        <h3>We bring together</h3>
                        <p> charities and suppliers to the charity sector to share best practices. </p>
                    </div>
                </div>
                <div class="col col-span-4 col-together">
                    <div class="icon-border">
                        <div class="icon"><img src="assets/img/icon-thumb.png" /></div>
                    </div>
                    <div class="mission-text">
                        <h3>We encourage</h3>
                        <p> collaboration and innovation for the good of the charity sector. </p>
                    </div>
                </div>
            </div>
            <div class="wrapper members-carousel">
                <h1 class="title">Our Members</h1>
                    <div id="slider1">
                        <div class="viewport">
                            <ul class="overview">
                                <li><img src="assets/img/carousel/cancerresearcj.png" /></li>
                                <li><img src="assets/img/carousel/compucorp.png" /></li>
                                <li><img src="assets/img/carousel/kop.png" /></li>
                                <li><img src="assets/img/carousel/zing.png" /></li>
                                <li><img src="assets/img/carousel/comicrelief.png" /></li>
                            </ul>
                        </div>
                        
                        <ul class="bullets">
                        <li><a href="#" class="bullet active" data-slide="0"> </a></li>
                        <li><a href="#" class="bullet" data-slide="1"> </a></li>
                        <li><a href="#" class="bullet" data-slide="2"> </a></li>
                            <li><a href="#" class="bullet" data-slide="3"> </a></li>
                            <li><a href="#" class="bullet" data-slide="4"> </a></li>
    
                    </ul>
                    </div>
            </div>
        </section>
        
        <section id="ourBlog" class="content"> 
                <div class="wrapper">
                    <h1 class="title"> Blog</h1>
                    
                    <div id="slider2">
                        <a class="buttons prev" href="#"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a>
                        <div class="viewport">
                            <ul class="overview">
                                <li class="col col-span-3">
                                    <h3 class="blog-title">Online Donations Special...</h3>
                                    <p class="blog-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                    
                                    <div class="meta-date">14 Nov 2014</div>
                                </li>
                                
                                <li class="col col-span-3">
                                    <h3 class="blog-title">Online Donations Special...</h3>
                                    <p class="blog-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                    
                                    <div class="meta-date">14 Nov 2014</div>
                                </li>
                                
                                <li class="col col-span-3">
                                    <h3 class="blog-title">Online Donations Special...</h3>
                                    <p class="blog-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                    
                                    <div class="meta-date">14 Nov 2014</div>
                                </li>
                                
                                <li class="col col-span-3">
                                    <h3 class="blog-title">Online Donations Special...</h3>
                                    <p class="blog-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                    
                                    <div class="meta-date">14 Nov 2014</div>
                                </li>
                                
                                <li class="col col-span-3">
                                    <h3 class="blog-title">Online Donations Special...</h3>
                                    <p class="blog-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                    
                                    <div class="meta-date">14 Nov 2014</div>
                                </li>
                                
                                <li class="col col-span-3">
                                    <h3 class="blog-title">Online Donations Special...</h3>
                                    <p class="blog-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                    
                                    <div class="meta-date">14 Nov 2014</div>
                                </li>
                                
                                <li class="col col-span-3">
                                    <h3 class="blog-title">Online Donations Special...</h3>
                                    <p class="blog-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                    
                                    <div class="meta-date">14 Nov 2014</div>
                                </li>
                                
                                <li class="col col-span-3">
                                    <h3 class="blog-title">Online Donations Special...</h3>
                                    <p class="blog-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                    
                                    <div class="meta-date">14 Nov 2014</div>
                                </li>
                                
                               
                            </ul>
                        </div>
                        <a class="buttons next" href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        
                    </div>
                </div>
        </section>
            <footer id="footer">
                <div class="wrapper">
                <div class="footer-social"> 
                    <a href="/"><i class="fa fa-facebook" aria-hidden="true"> </i></a>
                    <a href="/"><i class="fa fa-twitter" aria-hidden="true"> </i></a>
                    <a href="/"><i class="fa fa-google-plus" aria-hidden="true"> </i></a>
                </div>
                <div class="footer-copytext"> 
                    This site was built as a collaboration between <a href="http://manifesto.co.uk/" target="_blank">Manifesto Digital</a> and <a href="http://www.compucorp.co.uk/">Compucorp</a>
                    </div>
                    </div>
            </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="assets/js/jquery.tinycarousel.min.js"></script>
    <script src="https://use.fontawesome.com/773e9631bd.js"></script>
    <script>
        $(document).ready(function()
		{
			$('#slider1').tinycarousel({
                bullets: true,
                buttons: false
            });
            
            $('#slider2').tinycarousel({
                
            });
		});
    </script>
</body>

</html>