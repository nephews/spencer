<?php //include 'classes.inc'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
  <!--[if IE]>
  	<link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->
	<link rel="stylesheet" type="text/css" href="js/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>
	<link href="/stylesheets/spencer.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <title>Spencer | Your mobile workplace assistant</title>
  <link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript" src="js/lazysizes/lazysizes.min.js" async=""></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/jQuery.headroom.js"></script>
	<script type="text/javascript" src="js/modernizr-custom.js"></script>
	<script type="text/javascript" src="js/spencer.js"></script>

	<link rel="stylesheet" href="js/fancyBox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancyBox/source/jquery.fancybox.pack.js?v=2.1.6"></script>

  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.spencer.co" />
  <meta property="og:title" content="Spencer is your mobile workplace assistant" />
  <meta property="og:image:secure_url" content="https://www.spencer.co/images/share-image.png" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:site_name" content="Spencer is your mobile workplace assistant" />
  <meta property="og:description" content="Making your workplace community more engaged, efficient and productive by making the tools you trust work together." />

  <meta name="msapplication-config" content="browserconfig.xml" />
  <link rel="manifest" href="manifest.json">
  <link rel='mask-icon' href='safari-pinned-tab.svg' color='#3aacd2'>
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
</head>
<body>
<?php
  //$image = new Image;
  //echo $image->getImages();
?>
<header>
  <div id="navigation-wrapper">
    <div id="logo-wrapper">
      <div id="logo">
        <a class="nav-item" href="#body-wrapper">
					<img src="images/logo_spencer.svg" alt="logo" class="icon logo-spencer"></a>
        <div id="mobile-nav-icon"><a href="#"><img src="images/mobile-nav.svg"></a></div>
      </div>
    </div>
    <nav id="navigation">
      <ul>
        <li><a class="nav-item" href="#nav-problem">Problem</a></li>
        <li><a class="nav-item" href="#nav-solution">Solution</a></li>
        <li><a class="nav-item" href="#nav-references">References</a></li>
        <li><a class="nav-item" href="https://spencerco.pr.co" target="_blank">News</a></li>
        <li><a class="nav-item" href="#nav-about">About</a></li>
        <li><a class="nav-item" href="#nav-jobs">Jobs</a></li>
        <li><a class="nav-item nav-contact" href="#nav-contact">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>

<div id="body-wrapper">
  <div id="nav-intro" class="content-container blue">
    <div id="intro" class="content container-2">
      <div class="col-1">
        <h1>Spencer is your mobile workplace assistant</h1>
        <p>Assisting your workplace community to be more engaged, efficient and productive by making the tools you trust work together.</p>
        <div id="intro-buttons">
          <a id="play-video" class="video-button" href="https://player.vimeo.com/video/255886139?autoplay=1&color=3AACD2"><span class="video-icon"></span><span class="video-text">PLAY VIDEO</span></a>
          <a id="read-announcement" class="button" href="https://novemberfive.co/blog/announcing-spencer/" target="_blank">READ ANNOUNCEMENT</a>
        </div>
      </div>
      <div class="col-2">
				<img
					data-sizes="auto"
					data-src="images/img_header.png"
					data-srcset="images/img_header.png 300w, images/img_header@2x.png 600w" class="lazyload" />
      </div>
    </div>
  </div>

	<div class="content-container grey">
		<div id="testimonials" class="carousel content">
      <div class="carousel-slide">
        <div class="testimonial-logo col-1">
					<div class="testimonial-logo-inner">
            <img
							data-sizes="auto"
							data-src="images/img_logo_telenet_full.png"
							data-srcset="images/img_logo_telenet_full.png 300w, images/img_logo_telenet_full@2x.png 600w" class="lazyload" />
          </div>
				</div>
        <div class="testimonial-content col-2">
          <h2>Spencer helps us combine our critical applications into a single, easy-to-use, mobile interface. The result: a more intuitive way-of-working, increased productivity and happier employees!</h2>
          <div class="testimonial-person telenet">
<div class="person-name">Patrick Vincent</div><div class="person-position">Chief Transformation Officer, Telenet, Telecom, 3.500 Employees</div>
          </div>
        </div>
      </div>

      <div class="carousel-slide alternate">
        <div class="testimonial-logo col-1">
          <div class="testimonial-logo-inner">
            <img
              data-sizes="auto"
              data-src="images/img_logo_proximus_active.png"
              data-srcset="images/img_logo_proximus_active.png 300w, images/img_logo_proximus_active@2x.png 600w" class="lazyload" />
          </div>
        </div>
        <div class="testimonial-content col-2">
          <h2>At Proximus, we employ a diverse, mobile, and of course technology focused group of employees. What Spencer brings to the table is an engaging tool that saves time and alleviates the frustration of heavy legacy programs.</h2>
          <div class="testimonial-person proximus">
<div class="person-name">Serge Peeters</div><div class="person-position">HR Director Employee Services & Operations, Proximus, Telecom, 18.000 Employees</div>
          </div>
        </div>
      </div>
      <div class="carousel-slide">
        <div class="testimonial-logo col-1">
          <div class="testimonial-logo-inner">
					  <img
						  	data-sizes="auto"
							  data-src="images/img_logo_deme_active.png"
							  data-srcset="images/img_logo_deme_active.png 300w, images/img_logo_deme_active@2x.png 600w" class="lazyload" />
          </div>
				</div>
        <div class="testimonial-content col-2">
          <h2>At DEME we have a highly mobile workforce, which is a major challenge for us in terms of keeping in touch. More and more, this mobile workforce relies heavily on their tablets and smartphones to manage and execute multiple work functions. This is precisely what Spencer does, which has made it a perfect fit for our teams.</h2>
          <div class="testimonial-person deme">
          <div class="person-name">Philip Hermans</div><div class="person-position">General Manager, DEME, Dredging, environmental and marine engineering, 4.500 employees</div>
          </div>
        </div>
      </div>
    </div>
	</div>

  <div id="nav-problem" class="content-container">
    <div id="oversaturated" class="content">
      <div class="oversat-container container-2">
        <h3 class="h3-1">Large enterprises are oversaturated with tools</h3>
        <div class="col-1">
          <h4>They don't communicate</h4>
          <p>Your company spent time and energy selecting tools to get the job done – unfortunately, these tools don’t work together and fragmentize your information.</p>
        </div>
        <div class="col-2">
          <h4>They eat up time</h4>
          <p>A great tool can be an invaluable asset to your business. But making employees jump from tool to tool is a productivity killer – bringing you back to square one.</p>
        </div>
      </div>
      <div class="oversat-container container-2">
        <h3 class="h3-2">Great consumer user experiences have raised the bar for business solutions</h3>
        <div class="col-1">
          <h4>Lack of conventions</h4>
          <p>Enterprise tools all have a different user experience, with few shared conventions. Each one asks fresh effort from your employees.</p>
        </div>
        <div class="col-2">
          <h4>Falling short of expectations</h4>
          <p>Employees' personal tools and apps have given them high expectations regarding user experience. However, many business tools fall short, with complicated interfaces and inconsistent flows.</p>
        </div>
      </div>
    </div>
  </div>

  <div  id="nav-solution" class="content-container blue">
    <div class="content functionality">
      <h5>Spencer presents familiar info and functionality in a simplified workflow, cutting the clutter from your workday.</h5>
      <div id="functionality">
        <div class="col-1">
          <ul>
            <li><a name="func-hr" href="#" class="active">HR</a></li>
            <li><a name="func-comm" href="#">COMMUNICATION</a></li>
            <li><a name="func-org" href="#">ORGANISATION</a></li>
            <li><a name="func-fac" href="#">FACILITIES</a></li>
            <li><a name="func-hosp" href="#">HOSPITALITY</a></li>
            <li><a name="func-fin" href="#">FINANCE</a></li>
          </ul>
          <div class="func-slide func-hr">
            <p class="white">Spencer handles everything: from scheduling holidays and automatically turning on your Out Of Office to calling in sick and uploading your doctor’s note. HR will never be out of the loop again!</p>
            <b>SHOWCASE</b>
            <div><a class="video-button func-video-button" name="hr-request-holiday" href="video/hr-request-holiday.mp4"><span class="video-icon"></span><span class="video-text">REQUEST HOLIDAY</span></a></div>
            <b>MORE FEATURES</b>
            <span class="feature">Ask sick leave</span>
            <span class="feature">Submit doctor's note</span>
            <span class="feature">Work from home</span>
          </div>

          <div class="func-slide func-comm">
            <p class="white">With Spencer in every employee's pocket, your internal communications get a boost in engagement – after all, we check our phones roughly 80 times per day. Make sure everyone stays on top of important news and send out simple, quick surveys and polls. Oh, and he can also tell you what’s for lunch.</p>
            <b>FEATURES</b>
            <span class="feature">Company news</span>
            <span class="feature">Lunch menu</span>
            <span class="feature">Survey</span>
          </div>

          <div class="func-slide func-org">
            <p class="white">Spencer is connected to everyone in your organisation. Need the phone number for that one designer in Marketing? Spencer will help you find and contact people. And he’ll also keep you posted if your fellow team members are out of the office.</p>
            <b>SHOWCASE</b>
            <div><a class="video-button func-video-button" name="organization-contactinfo" href="video/organization-contactinfo.mp4"><span class="video-icon"></span><span class="video-text">ORGANISATIONAL CHART</span></a></div>
            <b>MORE FEATURES</b>
            <span class="feature">My shift</span>
            <span class="feature">My team holiday</span>
          </div>

          <div class="func-slide func-fac">
            <p class="white">Realise you need a meeting room while you're already leading your guests to the elevator? Another issue with that printer down the hall whose ID number you can never remember? Spencer can help! He'll tell you which rooms are available, and can simply log that printer ticket for you.</p>
            <b>SHOWCASE</b>
            <div>
              <a class="video-button func-video-button" name="facilities-book-meeting-room" href="video/facilities-book-meeting-room.mp4"><span class="video-icon"></span><span class="video-text">BOOK MEETING ROOM<span></a>
              <a class="video-button func-video-button" name="facilities-report-issue" href="video/facilities-report-issue.mp4"><span class="video-icon"></span><span class="video-text">REPORT ISSUE</span></a>
            </div>
            <b>MORE FEATURES</b>
            <span class="feature">Time tracking</span>
          </div>

          <div class="func-slide func-hosp">
            <p class="white">Spencer is there for your employees, but also for your guests! The app makes it easy to exchange digital contact cards with your meeting invitees, and he’ll get everyone up and running on your guest WiFi.</p>
            <b>FEATURES</b>
            <span class="feature">Guest WiFi access</span>
            <span class="feature">Digital business card</span>
          </div>

          <div class="func-slide func-fin">
            <p class="white">File your expense reports and get smoother approvals for your purchase orders. Spencer allows you to take action in seconds while you run your day, wherever you are.</p>
            <b>SHOWCASE</b>
            <div>
              <a class="video-button func-video-button" name="finance-submit-expense" href="video/finance-submit-expense.mp4"><span class="video-icon"></span><span class="video-text">SUBMIT EXPENSE</span></a>
            </div>
            <b>MORE FEATURES</b>
            <span class="feature">Approve purchase order</span>
          </div>
        </div>
        <div class="col-2">
          <div id="feature-video" class="func-hr">
            <video id="feature-video-player" width="262">
              <source id="feature-video-source" src="" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content-container">
    <div id="cloud-layer" class="content container-2">
      <div class="col-1">
        <h3>Spencer is an intelligent cloud layer that communicates with all your existing solutions.</h3>
        <p>Spencer knows his way around the block: he taps into the data from numerous industry solutions and presents the essential information and actions in a more user-friendly way.</p>
      </div>
      <div class="col-2">
				<img src="images/img_cloud_mobile.svg" alt="mobile cloud">
			</div>
    </div>
  </div>

  <div class="content-container blue">
    <div class="content">
      <div id="mobile-app" class="container-2">
        <div class="col-1">
					<img
						data-sizes="auto"
						data-src="images/img_cards.png"
						data-srcset="images/img_cards.png 300w, images/img_cards@2x.png 600w" class="lazyload card-l card" />
					<img
						data-sizes="auto"
						data-src="images/img_cards_s.png"
						data-srcset="images/img_cards_s.png 300w, images/img_cards_s@2x.png 600w" class="lazyload card-m card" />
					<img
						data-sizes="auto"
						data-src="images/img_cards_xs.png"
						data-srcset="images/img_cards_xs.png 300w, images/img_cards_xs@2x.png 600w" class="lazyload card-s card" />
        </div>
        <div class="col-2">
          <div class="mobile-app-content">
            <h5 class="left">Our mobile application bundles what you need to know, into a single intuitive interface.</h5>
            <p class="white">Spencer combines relevant information from different tools in a unified and personalised interface. He also aggregates related actions into user-friendly workflows, eliminating the need to switch back and forth between applications.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content-container grey">
    <div id="resume-container" class="content">
      <h3>Main product characteristics</h3>
      <div id="resume" class="resume-container container-2">
        <div class="col-1 col">
          <div class="col-content">
            <h4>Modular approach</h4>
            <p>Spencer is modular. He adapts to the tools your company uses, with a fair pricing approach to make sure you only pay for what you need.</p>
          </div>
        </div>
        <div class="col-2 col">
          <div class="col-content">
            <h4>Smart, personal, contextual</h4>
            <p>Spencer is every employee’s indispensable personal assistant. He knows what they want before they do, and presents them with the info they need, when they need it.</p>
          </div>
        </div>

        <div class="col-1 col">
          <div class="col-content">
            <h4>Streamlined workflows</h4>
            <p>Spencer is an assistant, not a dictator. He functions as a layer between a team and its tools to streamline the flow of actions and information – he can’t make important decisions on his own.</p>
          </div>
        </div>
        <div class="col-2 col">
          <div class="col-content">
            <h4>Always available</h4>
            <p>Spencer never lets you down. We have duplicated all system-critical components – VPN, application servers, our internal staging and production environments, etc. – to make sure that downtime becomes a thing of the past.</p>
          </div>
        </div>

        <div class="col-1 col">
          <div class="col-content">
            <h4>Secure infrastructure</h4>
            <p>No agents, no data copies, and no super users. Spencer directly acts on behalf of the user he's assisting, and keeps the data where it belongs. All communication is secured and encrypted according to industry standards.</p>
          </div>
        </div>
        <div class="col-2 col">
          <div class="col-content">
            <h4>Tailored to your organisation</h4>
            <p>Spencer adapts to the needs of your enterprise, respecting operational flows and procedures – and your style manual.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="nav-references" class="content-container">
    <div class="content references">
      <div class="center">
        <div class="title-container">
          <h3>Spencer's reference clients</h3>
          <p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, cumque maxime vel reiciendis laboriosam quasi necessitatibus soluta iste praesentium dolorum alias, odio, ad.</p>
        </div>
      </div>
      <div id="references">
        <div id="references-navigation">
          <div class="col-1">
            <a href="#" id="ref-telenet" class="ref-nav active"></a>
          </div>
          <div class="col-2">
            <a href="#" id="ref-proximus" class="ref-nav"></a>
          </div>
          <div class="col-3">
            <a href="#" id="ref-deme" class="ref-nav"></a>
          </div>
        </div>
        <div id="references-body">

          <div id="ref-telenet-container" class="container-2 ref-container">
            <div class="col-1">
              <b>Telenet Group</b>
              <p>Spencer took his first steps at Telenet Group, helping them increase employee engagement and productivity. Spencer’s now facilitating both internal communication, hospitality services for guests, HR workflows and facilities.</p>
              <p class="quote">“Spencer helps us combine our critical applications into a single, easy-to-use, mobile interface. The result: a more intuitive way-of-working, increased productivity and happier employees!”</p>
              <div class="testimonial-person telenet">
                <div class="person-name">Patrick Vincent</div>
                <div class="person-position">Chief Transformation Officer</div>
              </div>
            </div>
            <div class="col-2">
							<img
								data-sizes="auto"
								data-src="images/img_showcase_telenet.png"
								data-srcset="images/img_showcase_telenet.png 300w, images/img_showcase_telenet@2x.png 600w" class="lazyload" />
            </div>
          </div>

          <div id="ref-proximus-container" class="container-2 ref-container">
            <div class="col-1">
              <b>Proximus</b>
              <p>Proximus’ ambition is to bring its digital enterprise tooling to mobile, and they selected Spencer as their flagship product. Starting with a number of HR modules, the team plans on bringing a large set of functionalities to Spencer in a phased approach - plugging new modules as they go.</p>
              <p class="quote">“At Proximus, we employ a diverse, mobile, and of course technology focused group of employees. What Spencer brings to the table is an engaging tool that saves time and alleviates the frustration of heavy legacy programs.”</p>
              <div class="testimonial-person proximus">
                <div class="person-name">Serge Peeters</div>
                <div class="person-position">HR Director Employee Services & Operations</div>
              </div>
            </div>
            <div class="col-2">
							<img
								data-sizes="auto"
								data-src="images/img_showcase_proximus.png"
								data-srcset="images/img_showcase_proximus.png 300w, images/img_showcase_proximus@2x.png 600w" class="lazyload" />
            </div>
          </div>

          <div id="ref-deme-container" class="container-2 ref-container">
            <div class="col-1">
              <b>DEME Dredging</b>
              <p>DEME came to us to start drawing up an internal employee engagement app that would help with communication, contacting colleagues overseas and HR processes. Spencer turned out to be a perfect fit! He will be the starting point of a much larger digital transformation at this world-leading dredging company.</p>
              <p class="quote">“At DEME we have a highly mobile workforce, which is a major challenge for us in terms of keeping in touch. More and more, this mobile workforce relies heavily on their tablets and smartphones to manage and execute multiple work functions. This is precisely what Spencer does, which has made it a perfect fit for our teams.”</p>
              <div class="testimonial-person deme">
                <div class="person-name">Philip Hermans</div>
                <div class="person-position">General Manager</div>
              </div>
            </div>
            <div class="col-2">
							<img
								data-sizes="auto"
								data-src="images/img_showcase_deme.png"
								data-srcset="images/img_showcase_deme.png 300w, images/img_showcase_deme@2x.png 600w" class="lazyload" />
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="content-container blue">
    <div id="five-step-container" class="content">
      <h3 class="white">A five-step plan to get Spencer integrated in your enterprise</h3>
      <div id="five-step" class="five-step-container container-2">
        <div class="col-1">
          <div class="step-wrapper">
            <div class="number-wrapper"><div class="number">1</div></div>
            <div class="col-content">
              <h4 class="white">Existing architecture & roadmap</h4>
              <p class="white">Spencer hooks into your company’s existing toolchain. To do this properly, we will assess together what services you use and create a roadmap to determine which ones Spencer should support, and when.</p>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="step-wrapper">
            <div class="number-wrapper"><div class="number">2</div></div>
            <div class="col-content">
              <h4 class="white">Technical assessment</h4>
              <p class="white">We’ll sit together to discuss how Spencer can be optimally integrated with the company’s existing security policies and on-premise infrastructure.</p>
            </div>
          </div>
        </div>

        <div class="col-1">
          <div class="step-wrapper">
            <div class="number-wrapper"><div class="number">3</div></div>
            <div class="col-content">
              <h4 class="white">Implementation & branding</h4>
              <p class="white">Using the roadmap that we defined early in the process, we’ll select the modules that Spencer will activate first and skin them to fit your brand.</p>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="step-wrapper">
            <div class="number-wrapper"><div class="number">4</div></div>
            <div class="col-content">
              <h4 class="white">Deployment & testing</h4>
              <p class="white">When the necessary modules are in place, we can move on to User Acceptance Testing to ensure everything works smoothly, before introducing your employees to their new personal assistant.</p>
            </div>
          </div>
        </div>

        <div class="col-1">
          <div class="step-wrapper">
            <div class="number-wrapper"><div class="number">5</div></div>
            <div class="col-content">
              <h4 class="white">Maintenance & support</h4>
              <p class="white">After the application is released to your employees, we'll follow up on its usage. We’ll measure the increase in employee engagement, the specific assistance your employees seek, and their satisfaction with the assistant. Finally, we'll monitor and maintain Spencer's overall well-being.</p>
            </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>
  </div>

  <div id="nav-about" class="content-container">
    <div id="team-container" class="content">
      <div class="center">
			<img src="images/img_logo_novemberfive.svg" alt="november five"></div>
      <h3>Hatched & nurtured at November Five, Spencer is ready to fly!</h3>
      <p>Spencer can count on his team. We’re a perfect mix: highly skilled developers, excited to bring their tech chops to the modern workplace; designers and customer experts who know how to put the user first; and a leadership team with the entrepreneurial and corporate experience to take Spencer to the top. And of course, we can always count on the solid expertise of November Five’s directors.</p>
      <div id="team" class="container-2">
        <div class="members-container">
          <div class="col-1 tom member">
            <div class="team-name">Tom Vroemans</div>
            <div class="team-position">Founder & Chairman</div>
          </div>
          <div class="col-2 maarten member">
            <div class="team-name">Maarten Raemdonck</div>
            <div class="team-position">CEO</div>
          </div>
          <div class="col-1 bruno member">
            <div class="team-name">Bruno De Poorter</div>
            <div class="team-position">Director of Product</div>
          </div>
          <div class="col-2 leo member">
            <div class="team-name">Leo Van Geyt</div>
            <div class="team-position">Director of Sales Benelux</div>
          </div>
          <div class="col-1 anthony member">
            <div class="team-name">Anthony Wijnen</div>
            <div class="team-position">Director of Operations</div>
          </div>
          <div class="col-2 tomdl member">
            <div class="team-name">Tom De Laet</div>
            <div class="team-position">Product Designer</div>
          </div>
          <div class="col-1 dries member">
            <div class="team-name">Dries Elliott</div>
            <div class="team-position">Technical Architect</div>
          </div>
          <div class="col-2 frederik member">
            <div class="team-name">Frederik De Backer</div>
            <div class="team-position">Project Manager</div>
          </div>
          <div class="col-1 kevin member">
            <div class="team-name">Kevin T’Syen</div>
            <div class="team-position">Lead Back-end Developer</div>
          </div>
          <div class="col-2 alexander member">
            <div class="team-name">Alexander Deruwe</div>
            <div class="team-position">Back-end Developer</div>
          </div>
          <div class="col-1 didier member">
            <div class="team-name">Didier De Maeyer</div>
            <div class="team-position">Back-end Developer</div>
          </div>
          <div class="col-2 domien member">
            <div class="team-name">Domien Jansen</div>
            <div class="team-position">Back-end Developer</div>
          </div>
          <div class="col-1 jeffrey member">
            <div class="team-name">Jeffrey Verreckt</div>
            <div class="team-position">Back-end Developer</div>
          </div>
          <div class="col-2 dusty member">
            <div class="team-name">Dusty Saman</div>
            <div class="team-position">Identity Developer</div>
          </div>
          <div class="col-1 yannick member">
            <div class="team-name">Yannick Bontemps</div>
            <div class="team-position">Lead iOS Developer</div>
          </div>
          <div class="col-2 michelle member">
            <div class="team-name">Michelle Ybanez</div>
            <div class="team-position">iOS Developer</div>
          </div>
          <div class="col-1 bart member">
            <div class="team-name">Bart Salters</div>
            <div class="team-position">Android Developer</div>
          </div>
          <div class="col-2 wouter member">
            <div class="team-name">Wouter Landuydt</div>
            <div class="team-position">Front-end Developer</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="nav-jobs" class="content-container dark">
    <div id="hiring-container" class="content">
      <h3 class="white">Spencer is hiring!</h3>
      <p class="white">Does this sound like your kind of team? Spencer is looking for more help! Take a look at our openings, and get in touch...</p>
      <p><a href="https://spencer.workable.com" target="_blank">JOIN THE TEAM</a></p>
    </div>
  </div>

  <div id="nav-contact" class="content-container blue">
    <div id="contact-container" class="content">
			<div class="unfinished">
				<h3 class="white">Want to meet Spencer?</h3>
				<p class="white">Do you think your company could use Spencer’s help? Fill out the form below and he’ll get in touch with you to go over all the details. We’d love to hear from you!</p>
				<div class="container-2">
					<div class="col-1">
						<label>Name</label>
						<input id="input-name" type="text">
					</div>
					<div class="col-2">
						<div class="container-2 clean">
							<div class="col-1">
								<label>Company</label>
								<input id="input-company" type="text">
							</div>
							<div class="col-2">
								<label>Number of employees</label>
								<input id="input-employees" type="text">
							</div>
						</div>
					</div>
					<div class="col-1">
						<label>Function</label>
						<input id="input-funct" type="text">
					</div>
					<div class="col-2">
						<label>Email address</label>
						<input id="input-email" type="text">
					</div>
				</div>
				<div class="center"><a id="send-demo" href="#">SEND DEMO REQUEST</a></div>
			</div>
			<div class="finished">
				<h3 class="white">Thank you!</h3>
				<p class="white success">Your form has been sent successfully.</p>
				<div class="center"><a id="send-another" href="#">SEND ANOTHER MESSAGE</a></div>
			</div>
    </div>
  </div>

  <div class="content-container">
    <div class="content">
      <div id="footer">
        <div class="col-1">
          <img src="images/logo_spencer_footer.svg" alt="spencer logo">
        </div>
        <div class="col-2">
          <b>Antwerp HQ</b>
          <p>Scheldestraat 11, 2000 Antwerp – Belgium<br /><a href="tel:+3235009221">+32 3 500 92 21</a> – <a href="mailto:info@spencer.co">info@spencer.co</a></p>
        </div>
        <div class="col-3">
          <b>Nordics</b>
          <p>Vasagatan 16, 111 20 Stockholm – Sweden<br /><a href="tel:+46735046682">+46 73 504 6682</a></p>
        </div>
        <div class="col-4">
          <div id="social-icons">
            <a href="https://www.facebook.com/spencerapp" target="_blank"><img src="images/ico_social_facebook.svg" alt="facebook"></a>
            <a href="https://twitter.com/spencer_works" target="_blank"><img src="images/ico_social_twitter.svg" alt="twitter"></a>
            <a href="https://www.linkedin.com/company/spencer.co" target="_blank"><img src="images/ico_social_linkedin.svg" alt="linkedin"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36944331-4']);
_gaq.push(['_trackPageview']);
(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</body>
</html>
