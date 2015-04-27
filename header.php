<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

$navurl = 'http://www.bendbulletin.com';

?>

<!DOCTYPE html>
<html>
<head>
	<title>><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="  "/>
	<meta name="keywords" content="  "/>

	<![if !IE]>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<![endif]>
	<!--[if lt IE 10]>
		<link href="http://www.bendbulletin.com/csp/mediapool/sites/BendBulletin/assets/css/screen.css" rel="stylesheet">
	<![endif] -->
	<!--[if lt IE 9]>
		<link href="http://www.bendbulletin.com/csp/mediapool/sites/BendBulletin/assets/css/ie8.css" rel="stylesheet">
	<![endif]-->
	
	<?php /* <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> */ ?>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo('charset'); ?>">
	<![if !IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]>
	<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=7">
	<![endif] -->
	<link rel="shortcut icon" href="http://statics.bendbulletin.com/images/favicon.ico" type="image/x-icon"/>
	<link rel="fluid-icon" href="https://statics.bendbulletin.com/images/fluidicon.png" title="GitHub">
	<link rel="logo" type="image/svg" href="https://statics.bendbulletin.com/images/thebulletin-logo.svg">
	<meta name="msapplication-TileImage" content="http://statics.bendbulletin.com/images/thebulletin_retro_nav_small.png/images/bb-windows-tile.png">
	<meta name="msapplication-TileColor" content="#035CB6"/>
	<!--[if lt IE 9 ]> <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> <![endif]-->
	<!--[if (gt IE 8)|!(IE)]><!-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<!--<![endif]-->
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script src="http://statics.bendbulletin.com/js/jquery.mobile.custom.min.js"></script>
	<script src="http://statics.bendbulletin.com/js/dfp.gpt.logger.override.js"></script>
	<script src="http://statics.bendbulletin.com/js/progress.js"></script>
	<script src="http://statics.bendbulletin.com/js/jquery.movingboxes.js"></script>
	<script src="http://statics.bendbulletin.com/js/bootstrapValidator.js"></script>
	<script src="http://statics.bendbulletin.com/js/mcformvalrules.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://statics.bendbulletin.com/js/Respond.js"></script>
		<script type='text/javascript' src="../../assets/js/css3-mediaqueries.js"></script> 
    	<![endif]-->
	<![if !IE]>
		<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.0.6-development-only.js"></script>
	<![endif]>
	<!--[if IE 9]>
		<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.0.6-development-only.js"></script>
	<![endif]-->
	<script type='text/javascript'>
		(function() {
			var useSSL = 'https:' == document.location.protocol;
			var src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
			document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
		})();
	</script>
	<script type="text/javascript">
		var _qevents = _qevents || [];
		(function() {
			var elem = document.createElement('script');
			elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
			elem.async = true;
			elem.type = "text/javascript";
			var scpt = document.getElementsByTagName('script')[0];
			scpt.parentNode.insertBefore(elem, scpt);  
		})();
	</script>
	<script type='text/javascript'>
			googletag.cmd.push(function () {
				// set up var ahead of time
				var width = document.documentElement.clientWidth;
				var sizesuperleaderboard;
				var sizetopleaderboard;
				var	sizebottomleaderboard;
				var	sizerail3;
				var	sizerail4;
				var	sizerail5;
				var	sizeinline;

				if (width >= 320 && width < 470) { 			//320--469
					sizesuperleaderboard = [320, 50];
					sizetopleaderboard = [320, 50];
					sizebottomleaderboard = [320, 50];
					sizerail3 = [180, 150];
					sizerail4 = [180, 150];
					sizerail5 = [180, 150];
					sizeinline = [320, 50];
				} else if(width >= 470 && width < 768) {	//470--767
					sizesuperleaderboard = [468, 60];
					sizetopleaderboard = [468, 60];
					sizebottomleaderboard = [468, 60];
					sizerail3 = [300, 100];
					sizerail4 = [300, 100];
					sizerail5 = [300, 100];
					sizeinline = [468, 60];
				} else if(width >= 768 && width < 992) {	//768--991
					sizesuperleaderboard = [728,90];
					sizetopleaderboard = [728,90];
					sizebottomleaderboard = [728, 90];
					sizerail3 = [[300, 250],[300, 100]];
					sizerail4 = [[300, 250],[300, 100]];
					sizerail5 = [[300, 250],[300, 100]];
					sizeinline = [[468, 60]];
				} else if(width >= 992) {					//992+
					sizesuperleaderboard = [[970, 90], [728,90]];
					sizetopleaderboard = [728,90]; 	// desktop display, super leaderboard
					sizebottomleaderboard = [[970, 90], [728,90]];
					sizerail3 = [[300,600],[300, 250],[300, 100]];
					sizerail4 = [[300,600],[300, 250],[300, 100]];
					sizerail5 = [[300, 250],[300, 100]];
					sizeinline = [[468, 60]];
				} else {
					sizesuperleaderboard = [[970, 90], [728,90]];
					sizetopleaderboard = [728,90];
					sizebottomleaderboard = [[970, 90], [728,90]];
					sizerail3 = [300, 250];
					sizerail4 = [300, 250];
					sizerail5 = [300, 250];
					sizeinline = [[468, 60]];
				}

				var gadsgenerateId = 1381792238282;
				var gadssectionkey = "frequencyblog";

				googletag.on("gpt-slot_rendered",function(e,level,message,service,slot,reference){
					var slotId = slot.getSlotId(),
					$slot = $("#"+slotId.getDomId());
					var scanId = '/38749147/SuperLeaderboard_0'; 		// look for the SuperLeaderboard ad unit
					var sniffer = slotId.getDomId()+'_ad_container';	// look to see if it's actually rendering an ad

					if(slotId == scanId) {								// if the current ad slot == the SuperLeaderboard slot, do these if statements
						if($("#" + sniffer).length == 0) {				// if SuperLeaderboard has no ad to render, remove it's entire id from rendering
							$('#adsSuperlead').removeClass();
							$('#adsSuperlead').addClass('collapse');
						} else {										// if SuperLeaderboard has an ad to render, show it, and remove the div of the top two ads
							$('#adsTopTwo').removeClass();
							$('#adsTopTwo').addClass('collapse');
						}
					}
				});

				var slot01 = googletag.defineSlot('/38749147/SuperLeaderboard', sizesuperleaderboard, 'div-gpt-ad-' + gadsgenerateId + '-400').addService(googletag.pubads());	
				var slot02 = googletag.defineSlot('/38749147/DesktopBottomLeaderboard', sizebottomleaderboard, 'div-gpt-ad-' + gadsgenerateId + '-0').addService(googletag.pubads());
				var slot03 = googletag.defineSlot('/38749147/DesktopHalfPageAd', [300, 600], 'div-gpt-ad-' + gadsgenerateId + '-1').addService(googletag.pubads());
				var slot04 = googletag.defineSlot('/38749147/DesktopLeaderboard', sizetopleaderboard, 'div-gpt-ad-' + gadsgenerateId + '-22').addService(googletag.pubads());
				var slot05 = googletag.defineSlot('/38749147/DesktopRightRail0', sizerail3, 'div-gpt-ad-' + gadsgenerateId + '-3').addService(googletag.pubads());
				var slot06 = googletag.defineSlot('/38749147/DesktopRightRail1', sizerail4, 'div-gpt-ad-' + gadsgenerateId + '-4').addService(googletag.pubads());
				var slot07 = googletag.defineSlot('/38749147/DesktopRightRail2', sizerail5, 'div-gpt-ad-' + gadsgenerateId + '-5').addService(googletag.pubads());
				var slot08 = googletag.defineSlot('/38749147/SectionFrontInline0', sizeinline, 'div-gpt-ad-' + gadsgenerateId + '-6').addService(googletag.pubads());
				var slot09 = googletag.defineSlot('/38749147/SectionFrontInline1', sizeinline, 'div-gpt-ad-' + gadsgenerateId + '-7').addService(googletag.pubads());
				var slot10 = googletag.defineSlot('/38749147/SectionFrontInline2', sizeinline, 'div-gpt-ad-' + gadsgenerateId + '-8').addService(googletag.pubads());
				var slot11 = googletag.defineSlot('/38749147/SectionFrontInline3', sizeinline, 'div-gpt-ad-' + gadsgenerateId + '-9').addService(googletag.pubads());
				var slot12 = googletag.defineSlot('/38749147/SkyScraper0', [160, 600], 'div-gpt-ad-' + gadsgenerateId + '-10').addService(googletag.pubads());
				var slot13 = googletag.defineSlot('/38749147/Top_230_90', [230, 90], 'div-gpt-ad-' + gadsgenerateId + '-11').addService(googletag.pubads());
				var slot14 = googletag.defineSlot('/38749147/BB-slideshow', sizebottomleaderboard, 'div-gpt-ad-' + gadsgenerateId + '-12').addService(googletag.pubads());
				var slot15 = googletag.defineSlot('/38749147/SectionFrontInline4', sizeinline, 'div-gpt-ad-' + gadsgenerateId + '-13').addService(googletag.pubads());		
				var slot16 = googletag.defineSlot('/38749147/BB_storyInterstitial', [300, 600], 'div-gpt-ad-' + gadsgenerateId + '-14').addService(googletag.pubads());
				var slot17 = googletag.defineSlot('/38749147/BB_blockGrid1', [300, 250], 'div-gpt-ad-' + gadsgenerateId + '-31').addService(googletag.pubads());
				var slot18 = googletag.defineSlot('/38749147/BB_blockGrid1', [300, 250], 'div-gpt-ad-' + gadsgenerateId + '-32').addService(googletag.pubads());
				var slot19 = googletag.defineSlot('/38749147/BB_blockGrid1', [300, 250], 'div-gpt-ad-' + gadsgenerateId + '-33').addService(googletag.pubads());
				var slot20 = googletag.defineSlot('/38749147/BB_blockGrid1', [300, 250], 'div-gpt-ad-' + gadsgenerateId + '-34').addService(googletag.pubads());
				var slot21 = googletag.defineSlot('/38749147/BB_blockGrid1', [300, 250], 'div-gpt-ad-' + gadsgenerateId + '-35').addService(googletag.pubads());
				var slot22 = googletag.defineSlot('/38749147/BB_blockGrid1', [300, 250], 'div-gpt-ad-' + gadsgenerateId + '-36').addService(googletag.pubads());

				slot01.setTargeting("section", [gadssectionkey]);
				slot02.setTargeting("section", [gadssectionkey]);
				slot03.setTargeting("section", [gadssectionkey]);
				slot04.setTargeting("section", [gadssectionkey]);
				slot05.setTargeting("section", [gadssectionkey]);
				slot06.setTargeting("section", [gadssectionkey]);
				slot07.setTargeting("section", [gadssectionkey]);
				slot08.setTargeting("section", [gadssectionkey]);
				slot09.setTargeting("section", [gadssectionkey]);
				slot10.setTargeting("section", [gadssectionkey]);
				slot11.setTargeting("section", [gadssectionkey]);
				slot12.setTargeting("section", [gadssectionkey]);
				slot13.setTargeting("section", [gadssectionkey]);
				slot14.setTargeting("section", [gadssectionkey]);
				slot15.setTargeting("section", [gadssectionkey]);
				slot16.setTargeting("section", [gadssectionkey]);
				slot17.setTargeting("section", [gadssectionkey]);
				slot18.setTargeting("section", [gadssectionkey]);
				slot19.setTargeting("section", [gadssectionkey]);
				slot20.setTargeting("section", [gadssectionkey]);
				slot21.setTargeting("section", [gadssectionkey]);
				slot22.setTargeting("section", [gadssectionkey]);

				googletag.pubads().collapseEmptyDivs();
				googletag.enableServices();

				$(window).resize(function () {
					googletag.pubads().refresh([slot01, slot02, slot03, slot04, slot05, slot06, slot07, slot08, slot09, slot10, slot11, slot12, slot13, slot14, slot15, slot16, slot17]);
				});	
			});

			function refreshAd(slotName) {
				googletag.pubads().refresh();
			}

		</script>

		<script type="text/javascript">
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-1968161-2', 'auto');
			ga('send', 'pageview');

		</script>

		<script type="text/javascript">
				$(function() {

					//track viewport dimensions
					var _gaq = _gaq || [];
					var viewportWidth = $(window).width();
					_gaq.push(['_trackEvent', 'Viewport Dimensions', 'Viewport Dimensions Initial', viewportWidth + 'x' + $(window).height(), viewportWidth, true]);
					//track viewport dimensions being changed by resize (throttled)
					var gaResizeCompleteHl;
					$(window).resize(function() {
						clearTimeout(gaResizeCompleteHl);
						gaResizeCompleteHl = setTimeout(function() {
							var viewportWidth = $(window).width();
							_gaq.push(['_trackEvent', 'Viewport Dimensions', 'Viewport Dimensions Resized', viewportWidth + 'x' + $(window).height(), viewportWidth, true]);
						}, 500);
					});
				});

			//}

		</script>

		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>

</head>

<body>

	<div class="ads-toptwo" id="adsTopTwo">
		<div class="container">
			<div class="row clearfix">
				<div class="adunit-left west" id='div-gpt-ad-1381792238282-22'>
					<script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1381792238282-22'); });</script>
				</div>
				<div class="adunit-right" id='div-gpt-ad-1381792238282-11'>
					<script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1381792238282-11'); });</script>
				</div>
			</div>
		</div>
	</div>
	<div class="ads-superlead" id="adsSuperlead">
	  	<div class="container">
	    		<div class="row">
	      			<div class="adunit" id='div-gpt-ad-1381792238282-400'>
					<script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1381792238282-400'); });</script>
	      			</div>
	    		</div>
		</div>
	</div>

	<header id="header" class="container">
		<div class="row masthead">
			<div class="col-sm-3 weather-top hidden-xs">
				<div class="row masthead">
					<div class="col-sm-5 col-md-4 masthead-icon">
						<a href="/weather/"> <img src="http://statics.bendbulletin.com/weather/graphics/masthead/66.png"> </a>
          					<h4 class="media-heading masthead-temp">39&deg; F </h4>
        				</div>
        				<div class="col-sm-7 col-md-8 masthead-body"> <a href="/weather/">View the complete Central Oregon forecast</a> </div>
      				</div>
    			</div>
			<div class="col-sm-6 logo hidden-xs">
				<a title="BendBulletin.com home" href="http://www.bendbulletin.com?referrer=logo"><img alt="The Bulletin" src="http://statics.bendbulletin.com/images/bulletin_md_logo.png"></a>
      				<p class="logoText">Serving Central Oregon since 1903</p>
      				<time><?php echo date('l, F j, Y'); ?></time>
    			</div>
			<div class="col-sm-3 signIn hidden-xs">
				<div class="headerAcctNav">
					<p><a type="button" class="btn btn-primary btn-sm btn-block" href="https://www.syncaccess.net/wc/bb/account/logon?returnUrl=http%3A%2F%2Fwww.bendbulletin.com%2F">Subscriber Sign In</a></p>
					<p><a type="button" class="btn btn-primary btn-sm btn-block" href="https://tbbiservices.dticloud.com/cgi-bin/cmo_cmo.sh/custservice/web/login.html?siteid=BULL">Manage Account</a></p>
				</div>
			</div>
		</div>

		<div class="row navbarRow">
    		<nav id="nav" role="navigation" class="navbar navbar-bulletin">
      			<div class="navbar-header"> 
                	<a href="/?referrer=navLogo" class="navbar-brand"><img src="http://statics.bendbulletin.com/images/thebulletin_retro_nav_small.png"></a>
        			<button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      			</div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="BigNav">
                      <li> <a href="<?php echo $navurl; ?>/?referrer=nav" title="return to BendBulletin.com"><span class="fa fa-home navHomeIcon"></span></a> </li>
                      <li class="dropdown"> <a href="<?php echo $navurl; ?>/localState/?referrer=nav">Local/State</a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo $navurl; ?>/localState/education/?referrer=nav">Education</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/localState/environment/?referrer=nav">Environment</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/localState/bend/?referrer=nav">Bend</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/localState/deschutescounty/?referrer=nav">Deschutes County</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/localState/politics/?referrer=nav">Politics</a> </li>
                          <li> <a href="http://www.bendbulletin.com/osuc?referrer=nav">OSU-Cascades</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/localState/elections/?referrer=nav">Elections</a> </li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="<?php echo $navurl; ?>/business/?referrer=nav">Business</a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo $navurl; ?>/business/centraloregonbusinessindex/?referrer=nav">Central Oregon Business Index</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/business/realestate/?referrer=nav">Real Estate</a> </li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="<?php echo $navurl; ?>/sports/?referrer=nav">Sports</a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo $navurl; ?>/sports/highschool/?referrer=nav">High School</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/sports/ducks/?referrer=nav">Ducks</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/sports/beavers/?referrer=nav">Beavers</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/sports/golf/?referrer=nav">Golf</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/sports/communitysports/?referrer=nav">Community Sports</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/outdoors/?referrer=nav">Outdoors</a> </li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="<?php echo $navurl; ?>/lifestyle/?referrer=nav">Lifestyle</a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo $navurl; ?>/lifestyle/restaurants/?referrer=nav">Restaurants</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/lifestyle/drinks/?referrer=nav">Drinks</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/lifestyle/food/?referrer=nav">Food</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/lifestyle/homeandgarden/?referrer=nav">Home & Garden</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/lifestyle/handgtours/?referrer=nav">Home & Garden Slideshows</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/lifestyle/family/?referrer=nav">Family</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/lifestyle/milestones/?referrer=nav">Milestones</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/lifestyle/travel/?referrer=nav">Travel</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/outdoors/?referrer=nav">Outdoors</a> </li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="<?php echo $navurl; ?>/opinion/?referrer=nav">Opinion</a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo $navurl; ?>/opinion/editorials/?referrer=nav">Editorials</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/opinion/lettertotheeditor/?referrer=nav">Letters to the Editor</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/opinion/endorsements/?referrer=nav">Endorsements</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/about/1309563-151/submission-policies">Submission Policies</a> </li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="<?php echo $navurl; ?>/health/?referrer=nav">Health</a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo $navurl; ?>/health/pulse/?referrer=nav">Pulse Magazine</a> </li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="<?php echo $navurl; ?>/entertainment/?referrer=nav">Entertainment</a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo $navurl; ?>/entertainment/music/?referrer=nav">Music</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/entertainment/movies/?referrer=nav">Movies</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/entertainment/finearts/?referrer=nav">Arts</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/entertainment/restaurants/?referrer=nav">Restaurants</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/lifestyle/drinks/?referrer=nav">Drinks</a> </li>
                          <li> <a href="http://frequency.blogs.bendbulletin.com/">Frequency Blog</a> </li>
                          <li> <a href="http://affiliate.zap2it.com/tvlistings/ZBChooseProvider.do?aid=orbebb&method=getProviders&zipcode=97701&ref=footer">TV</a> </li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="<?php echo $navurl; ?>/nation/?referrer=nav">Nation</a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo $navurl; ?>/nation/webextras/?referrer=nav">Web Extras</a> </li>
                        </ul>
                      </li>
                      <li> <a href="<?php echo $navurl; ?>/obituaries/">Obits</a> </li>
                      <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> MORE <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo $navurl; ?>/events/?referrer=nav">Events</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/outdoors/?referrer=nav">Outdoors</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/classifieds/?referrer=nav">Classifieds</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/specialpublications/?referrer=nav">Special Publications</a> </li>
                          <li> <a href="http://www.bendhomes.com?referrer=nav">BendHomes.com</a> </li>
                          <li> <a target="_blank" href="https://tbbiservices.dticloud.com/cgi-bin/cmo_cmo.sh/custservice/web/zipcampaign?siteid=bull">Subscribe</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/replicaPage/?referrer=nav">Replica Edition</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/Slideshows?referrer=nav">Slideshows</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/photos/?referrer=nav">Photo Archive</a> </li>
                          <li> <a href="<?php echo $navurl; ?>/submitphoto?referrer=nav">Submit Image</a> </li>
                        </ul>
                      </li>
                      <li>
                        <form class="pull-right navbar-search" action="<?php echo $navurl; ?>/Search" method="get" name="fmResultsSearch" id="fmResultsSearch">
                          <input type="text" class="search-query" placeholder=" Search..." name="q"/>
                          <button type="submit" class="btn myBtn"><img src="http://statics.bendbulletin.com/images/search_256.png" title="Click here to go to search page" width="20px"/></button>
                        </form>
                      </li>
                    </ul>
                	<ul class="nav navbar-nav" id="mobileNav">
                  		<br />
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/home/">Home</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/localState/">Local/State</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/business/">Business</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/sports/">Sports</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/lifestyle/">Lifestyle</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/opinion/">Opinion</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/health/">Health</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/entertainment/">Entertainment</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/nation/">Nation</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/obituaries/">Obits</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/events/">Events</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/Slideshows">Slideshows</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/submitphoto">Submit Image</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/localState/httpwwwbendbulletincomosuc/?referrer=nav">OSU-Cascades</a></li>
                        <li class="dropdown"><a href="<?php echo $navurl; ?>/localState/elections/?referrer=nav">Elections</a></li>
                        <li>
                        <form class="navbar-search" action="<?php echo $navurl; ?>/Search" method="get" name="fmResultsSearch" target="_top" id="fmResultsSearch">
                          <input type="text" class="search-query" placeholder=" Search..." name="q"/>
                          <button type="submit" class="btn myBtn"><img src="http://statics.bendbulletin.com/images/search_256.png" title="Click here to go to search page" width="20px"/></button>
                        </form>
                        </li>
 					</ul>
                    <div class="subNavBar">
                        <ul class="nav navbar-nav sub-nav"></ul>
                    </div>
					<script type="text/javascript">
                        $(document).ready(function(){
                            var navButtons = document.getElementsByClassName('navbar-nav');
                        });
                    </script>
                </div>
    	    </nav>
  	</div>
        <div class="row">
            <ul class="breadcrumb undefined bullBread">
                <li><a href="http://www.bendbulletin.com/home/" >Home</a></li>
            	<li><a href="http://www.bendbulletin.com/entertainment/">Entertainment</a></li>
		<li><a href="http://www.bendbulletin.com/entertainment/music/">Music</a></li>
		<li><?php bloginfo('name'); ?></li>
	    </ul>
        </div>
	</header>
    <div class="container frontpageContainer">
        <div class="row">
        	<div class="col-md-8 mainBody">

                      <nav id="specPageNav">
                        <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
                        <p><?php bloginfo('description'); ?></p>
                        <ul class="topNavigation">
                            <li><a href="/about-2/" title="About Frequency blog">About</a></li>
                            <li><a href="/contact/" title="Contact Frequency">Contact</a></li>
                            <li><a href="/archives/" title="Frequency Archives">Archives / Categories</a></li>
                            <li><a style="background-image: none;" href="/category/mp3-download/" title="MP3 Downloads">Downloads</a></li>
                        </ul>
                        <div style="clear: both;"></div>
                      </nav>
                
                	<section>
