<!DOCTYPE html>
<html lang="en" dir="lrt">
<head>
	<meta charset="utf-8">
	<title>GlobalQuran.com (Beta)</title>
	<meta name="description" content="Browse, Search, and Listen to the Holy Quran. With accurate quran text and quran translations in various languages." />
	<meta name="keywords" content="Quran Translation Authentic Accurate Qur'an Text Kuran Roots Koran Recitation Tartil Tarteel Learn Quraan Online Application Download" />

	<meta property="og:site_name" content="GlobalQuran.com" />
	<meta property="og:image" content="http://GlobalQuran.com/images/logo.png" />
	<meta property="og:type" content="book" />

	<?php ;//include('lint.php'); ?>
	<title>GlobalQuran.com (Beta)</title>
	<meta name="description" content="Browse, Search, and Listen to the Holy Quran. With accurate quran text and quran translations in various languages." />

	<meta property="og:title" content="GlobalQuran.com : Quran Navigator" />
	<meta property="og:description" content="Browse, Search, and Listen to the Holy Quran. With accurate quran text and quran translations in various languages." />
	<meta property="og:url" content="http://GlobalQuran.com" />

	<base href="/" />

	<link rel="shortcut icon" href="http://GlobalQuran.com/favicon.ico" />
	<link rel="stylesheet" href="images/themes/default/css/global.css" media="screen,print" />
	<link rel="stylesheet" href="images/themes/default/css/print.css" media="print" />
</head>
<body class="ltr">
<noscript> <p>JavaScript must be enabled to use this site. Please enable JavaScript in your browser and refresh the page. <a href="http://www.google.com.pk/search?q=how+to+enable+javascript">How to enable javascript?</a></p> </noscript>
<div id="gqMain" style="display:none;">
	<div id="globalHeader">
		<div class="logoBox"><a href="#home" class="icon logo">GlobalQuran</a></div>
		<!-- nav here -->
		<div id="topNav">
			<div id="playerNavBox">
				<ul id="pageNav">
					<li class="page"><span class="pageOn">1</span> <span class="sep">of</span> <span class="totalPages">604</span></li>
					<li id="prevPage"><a href="#!/ur.junagarhi|quran-tajweed/1:1" class="prevPage button rndL tips" data-tips-position="left center"><span class="icon prevPage">Previous Page</span></a></li>
					<li id="nextPage"><a href="#!/ur.junagarhi|quran-tajweed/1:1" class="nextPage button rndR tips" data-tips-position="right center"><span class="icon nextPage">Next Page</span></a></li>
				</ul>
				<ul id="playerNav">
					<li id="recitor" class="dropOption" style="display:none;"><a href="#" class="dropLink tips" data-tips-position="right center"><span class="icon recitor">Select Recitor</span></a>
						<ul class="recitorList"></ul>
					</li>
					<li id="prevAyah" style="display:none;"><a href="#" class="icon prevAyah">Previous Ayah</a></li>
					<li id="nextAyah" style="display:none;"><a href="#" class="icon nextAyah">Next Ayah</a></li>
					<li id="play"><a href="#" class="icon play">play</a></li>
					<li id="progressBar" style="display:none;">
						<div class="progressBar" title="0:00"><span class="buffer" style="width: 0%;"></span></div>
					</li>
					<li id="time" style="display:none;"><span class="playingTime">0:00</span><span class="sep">/</span><span class="totalTime">0:00</span></li>
					<li id="bandwidthOption" class="dropOption" style="display:none;"><span class="dropLink tips" data-tips-position="right center" title="Audio Quality"><span class="bandwidthOption">192 kbs</span> <span class="icon arrowDown"></span></span>
						<ul class="bandwidthList"></ul>
					</li>
					<li id="volume" class="dropOption" style="display:none;"><a href="#" class="dropLink tips" title="Click to Mute Volume" data-tips-position="right center"><span class="icon volume full">Volume</span></a>
						<ul>
							<li class="volumePercent">68%</li>
							<li><div class="volumeBar"></div></li>
						</ul>
					</li>
					<li id="repeat" class="dropOption" style="display:none;"><a href="#" class="dropLink active tips" data-tips-position="right center"><span class="icon repeat">Repeat</span></a>
						<ul class="repeatOptions">
							<li><label>Repeat Each</label> <select class="repeatEach" name="repeatEach"><option value="ayah">Ayah</option><option value="page">Page</option><option value="surah">Surah</option><option value="Juz">Juz</option></select></li>
							<li><label>Repeat Times</label> <select class="repeatTimes" name="repeatTimes"><option value="1">x1</option><option value="2">x2</option><option value="3">x3</option><option value="4">x4</option><option value="5">x5</option><option value="6">x6</option><option value="7">x7</option><option value="8">x8</option><option value="9">x9</option><option value="0">&infin;</option></select></li>
							<li><label>Delay</label> <select class="audioDelay" name="audiotDelay"><option value="0">0 sec</option><option value="1">1 sec</option><option value="2">2 sec</option><option value="3">3 sec</option><option value="4">4 sec</option><option value="5">5 sec</option><option value="6">6 sec</option><option value="7">7 sec</option><option value="8">8 sec</option><option value="9">9 sec</option><option value="ayah">Ayah Duration</option></select></li>
						</ul>
					</li>
				</ul>
			</div>
			<div id="searchInfoBox" style="display:none;">
				<ul id="searchNav">
					<li id="searchAbout">About <span class="bold">300,000,000</span> results (0.14 seconds)</li>
				</ul>
				<ul id="searchInfo">
					<li><a href="#home" class="bold">Done Searching Go Back</a></li>
				</ul>
			</div>
			<div id="statusNav">
				<span class="currentAyah tips" title="Surah Al Nas"  data-tips-position="bottom center" data-tips-dynamic="true">00:00</span>
				<ul>
					<li><a href="http://blog.globalquran.com/feature-list/" class="gq spotLight">Feature List</a></li>
					<!--
					<li class="dropOption"><a href="#" class="dropLink">Tag</a>
						<ul>
							<li><span style="white-space:nowrap;">Tags coming very soon insha'Allah</span></li>
						</ul>
					</li>
					 -->
					<li><a href="#" class="print">Print</a></li>
					<li class="dropOption"><a href="#" class="dropLink">Share</a>
						<ul id="share">

							<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a></li>
							<li><div class="g-plusone" data-size="tall" data-annotation="none"></div></li>
							<li>
								<div class="addthis_toolbox addthis_default_style">
									<a class="addthis_counter addthis_pill_style"></a>
								</div>
							</li>
							<li class="fbLike"><div class="fb-like" data-send="false" data-width="50" data-show-faces="false"></div></li>

						</ul>
					</li>
					<li class="dropOption"><a href="#" class="dropLink">Link</a>
						<ul class="linkShare">
							<li><span>Paste link in <b>email</b>, <b>IM</b> or <b>Facebook</b> status.</span>
								<label>Page URL:</label> <input type="text" class="pageUrl" value="#!/ur.junagarhi|quran-tajweed/601" />
							</li>
							<li><label>Ayah URL:</label> <input type="text" class="ayahUrl" value="#!/ur.junagarhi|quran-tajweed/103:3" /></li>
							<li><a href="#" class="bookmark">Bookmark</a> </li>
						</ul>
					</li>
				</ul>
			</div>
			<div id="messageBox" style="display:none;">
				<span class="error">msg</span> <a href="#" class="icon close tips">close</a>
			</div>
			<div id="searchBox">
				<form action="#" method="post" id="searchForm">
					<input type="text" name="search" id="search" value="" placeholder="Search..." />
					<!-- TODO <a href="#" class="searchTips">Tips</a> -->
					<input type="submit" name="searchSubmit" id="searchSubmit" value="Submit" />
				</form>
			</div>
			<div id="surahBox">
				<form action="#" method="post">
					<select name="surah" id="surah" class="customSurah"></select>
					<input type="submit" name="surahSubmit" id="surahSubmit" value="Submit" />
				</form>
			</div>
			<div id="extraTools">
				<ul>
					<li></li>
					<li class="book"  style="display:none;"><a href="#" class="icon book tips" data-tips-position="left center">Book View</a></li>
					<li class="zoomOUT"><a href="#" class="icon zoomOUT tips" data-tips-position="left center">Smaller Fonts</a></li>
					<li class="zoomIN"><a href="#" class="icon zoomIN tips" data-tips-position="left center">Bigger Fonts</a></li>
					<li class="fullScreen"><a href="#" class="icon fullScreen tips" data-tips-position="left center">Full Screen</a></li>
					<li class="sideBarOptions" style="display:none;"><a href="#" class="sideBarOptions" data-tips-position="left center"><span class="off">Show Options</span><span class="on">Hide Options</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="gqContent">
		<div id="infoSidebar">
			<div id="quranSideBar">
				<div class="headerTitle">
					<h4>Quran</h4>
					<a href="#" class="sideLink quranSettings">Settings</a>
				</div>
				<ul id="quranSettings" style="display:none;">
					<li class="right"><a href="#" class="icon close tips">close</a>
					<li><label>Quran Fonts [ <a href="#" class="lighter tips" title="Quran fonts are applied to quran text only">?</a> ]</label>
						<select id="quranFont"><option selected="selected" value='auto'>Auto Select [Recommanded]</option><option value="me_quran">Me-Quran</option> <option value="Scheherazade">Scheherazade</option><option value="_PDMS_Saleem_QuranFont">PDMS Saleem Quran</option><option value="KFGQPC Uthman Taha Naskh">KFGQPC Uthman Taha Naskh</option><option value="Traditional Arabic">Traditional Arabic</option><option value="Arabic Typesetting">Arabic Typesetting</option><option value="Sakkal Majalla">Sakkal Majalla</option><option value="MS Uighur">MS Uighur</option><option value="XB Zar">XB Zar</option><option value="Arial">Arial</option><option value="Custom">Custom</option></select>
					</li>
					<li><label><input type="checkbox" id="showSigns" value='yes'> Show Pause Marks</label></li>
					<li><label><input type="checkbox" id="showAlef" value='yes'> Show Small-Alef</label></li>
					<li><label><input type="checkbox" id="wbwMouseOver" value='yes'> Word by Word Show On Mouse Over</label></li>
				</ul>
				<ul class="sideNav" id="quranList"></ul>

				<div class="headerTitle">
					<h4>All Languages</h4>
				</div>
				<input type="text" id="languageSearch" name="languageSearch" value="" placeholder="Search..." />
				<ul class="sideNav" id="translationList"></ul>
			<!--
				<ul class="sideHelpLinks">
					<li><a href="#">How to use the site [video]</a></li>
					<li><a href="#">Keyboard Shortcuts</a></li>
					<li><a href="#">Tajweed Rules</a></li>
				</ul>
			-->
			</div>
			<div id="searchSideBar" style="display:none;">
				<div class="headerTitle">
					<h4>Search Tips</h4>
				</div>
				<ul class="sideNav">
					<li><b>55</b> - jump quickly to page "55"</li>
					<li><br /></li>
					<li><b>114:1</b> - go to surah An-Nass 114</li>
					<li><b>114:4</b> - go to surah An-Nass 114 and ayah 4</li>
				</ul>
				<div class="headerTitle">
					<h4>got suggestions? </h4>
				</div>
				<p>sent us your feedback.</p>
			</div>
		</div>
		<div id="quranContentArea" class="contentHalfSidebar single medium">
			<img src="images/themes/default/ajax-loader-large.gif" />
		</div>
	</div>
	<div class="tajweedQuickHelp hide">
		<ul>
			<li><span class="color ikhf"></span> <span class="txt">ikhafa</span></li>
			<li><span class="color ikhf_shfw"></span> <span class="txt">ikhafa Meem Saakin</span></li>
			<li><span class="color qlq"></span> <span class="txt">Qalqala</span></li>
			<li><span class="color iqlb"></span> <span class="txt">Qalb</span></li>
			<li><span class="color idghm_shfw"></span> <span class="txt">Idghaam Meem Saakin</span></li>
			<li><span class="color idgh_ghn"></span> <span class="txt">Idghaam with Ghunna</span></li>
			<li><span class="color idgh_w_ghn"></span> <span class="txt">Idghaam without Ghunna</span></li>
			<li><span class="color ghn"></span> <span class="txt">Ghunna</span></li>
			<li><a href="#">learn'em (coming soon)</a></li>
		</ul>
	</div>
	<!-- end content -->
	<div id="globalFooter">
		<div class="copyright"> GlobalQuran.com © 2006 - 2011 ·</div>
		<div class="globalLanguage">
			<ul>
				<li><a href="#change_language" title="Use this site in another language.">English (US)</a> coming soon)</li>
			</ul>
		</div>
		<div class="socialLike">
			<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FQuran-GlobalQurancom%2F192781430775518&layout=button&show_faces=false&width=50&action=like&colorscheme=light&height=24" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:24px;" allowTransparency="true"></iframe>
			<div class="g-plusone" data-annotation="none" data-href="http://GlobalQuran.com"></div>
			<a href="https://twitter.com/GlobalQuran" class="twitter-follow-button" data-show-screen-name="false" data-show-count="false">Follow</a>
			<div class="supportMsg">click on like to support our project.</div>
		</div>
		<div class="gq nav">
			<ul>
				<li><a href="/">Home</a></li><li>·</li>
				<li>Download - coming soon</li><li>·</li>
				<li>API - writing documentation</li><li>·</li>
				<li><a href="https://github.com/imegah/GlobalQuran.com-code">code</a></li><li>·</li>
				<li><a href="http://blog.globalquran.com">blog</a></li><li>·</li>
				<li><a href="http://blog.globalquran.com/about-us">about us</a></li><li>·</li>
				<li><a href="http://blog.globalquran.com/contact-us">contact us</a> </li>
			</ul>
		</div>
	</div>
</div>
<script src="javascript/jqueryWithTools.pack.js"></script>
<!-- development use only
<script src="javascript/jquery/jquery.js"></script>
<script src="javascript/jquery/jquery.qtip.min.js"></script>
<script src="javascript/jquery/jquery-ui-1.8.15.custom.min.js"></script>
<script src="javascript/jquery/jquery.jplayer.js"></script>
 -->
<!-- for production - use GlobalQuran.js and remove following three js files -->
<script src="javascript/Quran.js"></script>
<script src="javascript/GQ.js"></script>
<script src="javascript/Layout.js"></script>
<script src="app.settings.js"></script>
<script type="text/javascript">
  (function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	po.src = 'https://apis.google.com/js/plusone.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script type="text/javascript">
  (function(){
	var twitterWidgets = document.createElement('script');
	twitterWidgets.type = 'text/javascript';
	twitterWidgets.async = true;
	twitterWidgets.src = '//platform.twitter.com/widgets.js';
	document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
  })();
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#appId=291496434200831&xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- AddThis Button BEGIN -->
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e753ce6632eaacf"></script>
<!-- AddThis Button END -->
</body>
</html>