<!DOCTYPE html> 
<html>

<head>
	<title>VoteCaster</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="upstart.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

	
<body> 

<div id="fb-root"></div>
<script>
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '381701561907159', // App ID
      channelUrl : 'http://corgiland.com/CS147/week5/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    FB.getLoginStatus(function(response) {
	  if (response.status === 'connected') {
	    // connected
	  } else if (response.status === 'not_authorized') {
	    // not_authorized
	  } else {
	    // not_logged_in
	  }
	 });

    // Additional init code here

  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>

<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header">
		<h1>Multi-Page</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>Welcome <span id="username"></span></h2>
		
		<p>The neat thing about this example is that you can swipe right and left to navigate between pages, and you can also see in the code that the entire three page sequence within here is bundled into one page.</p>	

		<h3>Show internal pages:</h3>
		<a href="#" data-role="button" id="fbconnect">FB Connect</a>
		 <div id="logout">
   <p><button onClick="FB.logout();">Logout</button></p>
 </div>
		<a href="#" style="width: 48%;" data-inline="true" data-role="button" onclick="publishStory('Mitt Romney');">Vote for Mitt Romney</a>
		<a href="#" style="width: 48%;" data-inline="true" data-role="button" onclick="publishStory('Barack Obama');">Vote for Barack Obama</a>

<script>
function publishStory(person) {
  FB.ui({
    method: 'feed',
    name: 'I\'m voting for ' + person + '!',
    caption: 'And you should really vote for him too.',
    description: 'Check out VoteCaster to see what\'s up with the 2012 elections',
    link: 'http://www.youtube.com/watch?v=9bZkp7q19f0',
    picture: 'http://corgiland.com/CS147/week5/images/bigbird.png'
  }, 
  function(response) {
    console.log('publishStory response: ', response);
  });
  return false;
}
</script>
		<p><a href="#two" data-role="button">Show page "two"</a></p>	
		<p><a href="#popup" data-role="button" data-rel="dialog" data-transition="pop">Show page "popup" (as a dialog)</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li class="lolol"><a href="index.php" id="home" data-icon="custom" class="ui-btn-active">Home</a></li>
				<li class="lolol"><a href="login.php" id="key" data-icon="custom">Login</a></li>
				<li class="lolol"><a href="filter.php" id="beer" data-icon="custom">Filter</a></li>
				<li class="lolol"><a href="#" id="skull" data-icon="custom">Settings</a></li>
			</ul>
		</div>
	</div>
</div>
	
</div><!-- /page one -->


<!-- Start of second page: #two -->
<div data-role="page" id="two" data-add-back-btn="true">

	<div data-role="header">
		<h1>Two</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>Two</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<p><a href="#one" data-direction="reverse" data-role="button" data-theme="b">Back to page "one"</a></p>	
		
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		
		<ul>
			<li><a href="index.php" id="home" class="index" data-icon="custom">Home</a></li>
			<li><a href="login.php" id="key" class="login" data-icon="custom">Login</a></li>
			<li><a href="filter.php" id="beer" class="filter" data-icon="custom">Filter</a></li>
			<li><a href="#" id="skull" data-icon="custom">Settings</a></li>
		</ul>
		</div>
	</div>
</div>
</div><!-- /page two -->


<!-- Start of third page: #popup -->
<div data-role="page" id="popup">

	<div data-role="header" data-theme="e">
		<h1>Dialog</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
		<h2>Popup</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>		
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back to page "one"</a></p>	
	</div><!-- /content -->
	
	<? include_once('footer.php'); ?>
</div>
</div><!-- /page popup -->

<script type="text/javascript">

$(document).ready(function() {
	//alert(document.URL);
	var theURL = document.URL;
	var URLSplit = theURL.split('/');
	var rightOne = URLSplit[URLSplit.length - 1];
	$('.lolol').each(function() {
		console.log($(this).html);
	});
	//class="ui-btn-active"

});
// This handles all the swiping between each page. You really
// needn't understand it all.
$(document).on('pageshow', 'div:jqmData(role="page")', function(){

     var page = $(this), nextpage, prevpage;
     // check if the page being shown already has a binding
      if ( page.jqmData('bound') != true ){
            // if not, set blocker
            page.jqmData('bound', true)
            // bind
                .on('swipeleft.paginate', function() {
                    console.log("binding to swipe-left on "+page.attr('id'));
                    nextpage = page.next('div[data-role="page"]');
                    if (nextpage.length > 0) {
                       $.mobile.changePage(nextpage,{transition: "slide"}, false, true);
                        }
                    })
                .on('swiperight.paginate', function(){
                    console.log("binding to swipe-right "+page.attr('id'));
                    prevpage = page.prev('div[data-role="page"]');
                    if (prevpage.length > 0) {
                        $.mobile.changePage(prevpage, {transition: "slide",
	reverse: true}, true, true);
                        };
                     });
            }
        });

	function login() {
	    FB.login(function(response) {
	        if (response.authResponse) {
            	FB.api('/me', function(response) {
	            	$('#fbconnect').html(response.name);
	        	});
	        } else {

	        }
	    });
	}

	function testAPI() {
 	   console.log('Welcome!  Fetching your information.... ');
    	FB.api('/me', function(response) {
        	console.log('Good to see you, ' + response.name + '.');
    	});
	}

	$('#fbconnect').click(function() {
		login();
	});

</script>

</body>
</html>