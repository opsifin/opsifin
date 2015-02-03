<!doctype html>
<html lang="en" class="no-js">
	<head>
	  <meta charset="utf-8" />

	  <title>SimpleTabs | A lightweight tabs script</title>

	  <meta name="description" content="A lightweight tabs script" />
	  <meta name="keywords" content="simpletabs, simple, tabs, lightweight, script, javascript" />
	  <meta name="author" content="Nuevvo Webware Ltd." />

	  <link rel="shortcut icon" href="/favicon.ico" />
	  <link rel="apple-touch-icon" href="/assets/Nuevvo-Logo-v3-iOS-64x64.png" />

		<style type="text/css" media="screen">
			@import "css/style.css";
		</style>

		<!-- SimpleTabs -->
		<script type="text/javascript" src="js/simpletabs_1.3.js"></script>
		<style type="text/css" media="screen">
			@import "css/simpletabs.css";
		</style>

		<!-- Google Analytics -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-16375363-5']);
		  _gaq.push(['_setDomainName', '.nuevvo.com']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</head>
	<body>

		<div id="topContainer">
			<h1>SimpleTabs</h1>
			<a href="http://nuevvo.com/labs/simpletabs">Download</a>
			<p>SimpleTabs is a lightweight, unobtrusive and easy to use tabs script for any website :)</p>
			<span id="notice">(Version 1.3 - released June 25th, 2009)</span>
		</div>

		<div id="mainContainer">
		  <h2>Introduction</h2>
		  <p> <strong>SimpleTabs</strong> is an lightweight, unobtrusive and easy to use tabs script developed by <a href="#releaseNotes">Fotis Evangelou</a> with the following notable features:</p>
		  <ul>
		    <li>It does not depend on any third-part library like jQuery, Mootools etc. That means it won't conflict with scripts made with these libraries or any other script.</li>
		    <li>It does not need different IDs per tab container in order to have multiple tab sets. So, you can have as many SimpleTabs tab sets as you want on the same page.</li>
		    <li>It remembers the last tab clicked on and if you reload the page (e.g. navigate somewhere and return to the page containing the tabs) that specific tab is already active.</li>
		    <li>It's simple to implement, small in size and fast to load.</li>
		    <li>Works on all browsers.</li>
		  </ul>

		  <h2>Demos</h2>
		  <div class="simpleTabs">
		    <ul class="simpleTabsNavigation">
		      <li><a href="#">Tab 1</a></li>
		      <li><a href="#">Tab 2</a></li>
		      <li><a href="#">Other tab</a></li>
		    </ul>
            
		    <div class="simpleTabsContent">
		      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec turpis. Fusce aliquet lorem vitae est. In hac habitasse platea dictumst. Phasellus iaculis facilisis pede. Fusce vulputate elit non magna. Nunc commodo rhoncus dolor. Integer auctor. Aliquam tincidunt purus id mauris. Vivamus eros. Vestibulum velit libero, dapibus ac, consectetuer dignissim, adipiscing sed, libero. Ut mi metus, tempor eget, aliquet sit amet, euismod ut, est. Sed nec leo eu lacus laoreet venenatis. Praesent massa sem, facilisis quis, mollis non, consequat et, sapien. Vestibulum dui sapien, sollicitudin ut, hendrerit id, cursus sed, eros. Aliquam eu purus. Proin iaculis. Vestibulum elementum metus sed ipsum. Integer facilisis. Donec aliquam ligula eu neque. Etiam urna. </p>
		      <p> Cras pretium fringilla nibh. Duis posuere. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque semper. Ut quis arcu. Integer ac nulla. Ut auctor. Pellentesque scelerisque nisl in tortor. Integer eget purus. Ut volutpat, neque eu tincidunt tincidunt, justo tortor pretium elit, vitae varius mauris arcu a lectus. Phasellus bibendum pretium urna. Donec non quam in augue molestie congue. Aenean metus diam, volutpat vitae, tristique id, porttitor a, elit. Cras bibendum, augue non pulvinar aliquam, est nulla posuere nunc, gravida gravida magna leo nec arcu. Donec arcu mi, pellentesque quis, placerat quis, egestas id, leo. Morbi urna est, convallis eget, tristique at, egestas a, lectus.</p>
		    </div>
		    
            <div class="simpleTabsContent">
		      <div>
		        <div>
		          <div>
		            <div>
		              <p>Proin ullamcorper bibendum tellus. Donec vel ipsum sit amet mi convallis lacinia. Maecenas non nunc bibendum orci commodo aliquam. Integer vel justo. Sed vestibulum semper mi. Vestibulum tincidunt leo at augue. Morbi ut justo. Sed cursus, lorem nec lobortis blandit, urna nisl rhoncus erat, id vulputate dui sem sed erat. Sed velit diam, pretium in, hendrerit non, eleifend ut, nisi. Nullam at risus. Donec vitae tellus ut tellus dictum adipiscing. Sed nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam condimentum, odio at rhoncus cursus, dolor lacus malesuada est, in pulvinar arcu justo ultricies justo. Ut sagittis luctus dui. </p>
		              <p> Maecenas fringilla diam fermentum ante. Vivamus tempor, sem vitae semper aliquam, arcu nunc pretium quam, vitae auctor sapien dolor ut lorem. Integer eros. Sed pulvinar mi eu tortor. Pellentesque faucibus neque eu erat. Nullam pulvinar, urna vitae elementum malesuada, tortor lectus consequat nulla, in pharetra augue lacus et odio. Donec enim nulla, lacinia sed, interdum non, laoreet ut, nisi. Quisque posuere, purus id pretium luctus, dui ligula porttitor neque, vitae consequat sem arcu posuere metus. Duis dictum convallis ipsum. Nulla mi. </p>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
            
		    <div class="simpleTabsContent">
		      <p> Vestibulum sit amet arcu a leo dignissim lobortis. Quisque augue neque, adipiscing id, condimentum eu, congue at, pede. Vivamus rhoncus. Aliquam pulvinar justo et ligula. Pellentesque ligula elit, placerat vel, luctus ac, facilisis et, enim. Nulla malesuada venenatis metus. Etiam pellentesque tincidunt diam. Ut et pede. Cras ante. Maecenas sagittis mi vulputate neque. Aenean dignissim justo non lectus. Nulla facilisi. Maecenas enim lorem, lacinia non, bibendum at, varius consectetuer, ipsum. Fusce ut lacus in nulla rutrum pellentesque. Nunc velit. Vestibulum eleifend porta risus. Cras congue volutpat leo. Nam nec mi quis libero placerat ultrices. Nulla massa velit, scelerisque sed, rutrum in, sollicitudin nec, mi. Pellentesque imperdiet laoreet sapien. </p>
		    </div>
		  
          </div>
		  <p> More below... </p>
		  <div class="simpleTabs">
		    <ul class="simpleTabsNavigation">
		      <li><a href="#">Tab 1</a></li>
		      <li><a href="#">Tab 2</a></li>
		      <li><a href="#">Other tab</a></li>
		    </ul>
		    <div class="simpleTabsContent">
		      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec turpis. Fusce aliquet lorem vitae est. In hac habitasse platea dictumst. Phasellus iaculis facilisis pede. Fusce vulputate elit non magna. Nunc commodo rhoncus dolor. Integer auctor. Aliquam tincidunt purus id mauris. Vivamus eros. Vestibulum velit libero, dapibus ac, consectetuer dignissim, adipiscing sed, libero. Ut mi metus, tempor eget, aliquet sit amet, euismod ut, est. Sed nec leo eu lacus laoreet venenatis. Praesent massa sem, facilisis quis, mollis non, consequat et, sapien. Vestibulum dui sapien, sollicitudin ut, hendrerit id, cursus sed, eros. Aliquam eu purus. Proin iaculis. Vestibulum elementum metus sed ipsum. Integer facilisis. Donec aliquam ligula eu neque. Etiam urna. </p>
		      <p> Cras pretium fringilla nibh. Duis posuere. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque semper. Ut quis arcu. Integer ac nulla. Ut auctor. Pellentesque scelerisque nisl in tortor. Integer eget purus. Ut volutpat, neque eu tincidunt tincidunt, justo tortor pretium elit, vitae varius mauris arcu a lectus. Phasellus bibendum pretium urna. Donec non quam in augue molestie congue. Aenean metus diam, volutpat vitae, tristique id, porttitor a, elit. Cras bibendum, augue non pulvinar aliquam, est nulla posuere nunc, gravida gravida magna leo nec arcu. Donec arcu mi, pellentesque quis, placerat quis, egestas id, leo. Morbi urna est, convallis eget, tristique at, egestas a, lectus.</p>
		    </div>
		    <div class="simpleTabsContent">
		      <p>Proin ullamcorper bibendum tellus. Donec vel ipsum sit amet mi convallis lacinia. Maecenas non nunc bibendum orci commodo aliquam. Integer vel justo. Sed vestibulum semper mi. Vestibulum tincidunt leo at augue. Morbi ut justo. Sed cursus, lorem nec lobortis blandit, urna nisl rhoncus erat, id vulputate dui sem sed erat. Sed velit diam, pretium in, hendrerit non, eleifend ut, nisi. Nullam at risus. Donec vitae tellus ut tellus dictum adipiscing. Sed nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam condimentum, odio at rhoncus cursus, dolor lacus malesuada est, in pulvinar arcu justo ultricies justo. Ut sagittis luctus dui. </p>
		      <p> Maecenas fringilla diam fermentum ante. Vivamus tempor, sem vitae semper aliquam, arcu nunc pretium quam, vitae auctor sapien dolor ut lorem. Integer eros. Sed pulvinar mi eu tortor. Pellentesque faucibus neque eu erat. Nullam pulvinar, urna vitae elementum malesuada, tortor lectus consequat nulla, in pharetra augue lacus et odio. Donec enim nulla, lacinia sed, interdum non, laoreet ut, nisi. Quisque posuere, purus id pretium luctus, dui ligula porttitor neque, vitae consequat sem arcu posuere metus. Duis dictum convallis ipsum. Nulla mi. </p>
		    </div>
		    <div class="simpleTabsContent">
		      <p> Vestibulum sit amet arcu a leo dignissim lobortis. Quisque augue neque, adipiscing id, condimentum eu, congue at, pede. Vivamus rhoncus. Aliquam pulvinar justo et ligula. Pellentesque ligula elit, placerat vel, luctus ac, facilisis et, enim. Nulla malesuada venenatis metus. Etiam pellentesque tincidunt diam. Ut et pede. Cras ante. Maecenas sagittis mi vulputate neque. Aenean dignissim justo non lectus. Nulla facilisi. Maecenas enim lorem, lacinia non, bibendum at, varius consectetuer, ipsum. Fusce ut lacus in nulla rutrum pellentesque. Nunc velit. Vestibulum eleifend porta risus. Cras congue volutpat leo. Nam nec mi quis libero placerat ultrices. Nulla massa velit, scelerisque sed, rutrum in, sollicitudin nec, mi. Pellentesque imperdiet laoreet sapien. </p>
		    </div>
		  </div>
		  <p> ...and one more set... </p>
		  <div class="simpleTabs">
		    <ul class="simpleTabsNavigation">
		      <li><a href="#">Test</a></li>
		      <li><a href="#">Test again</a></li>
		      <li><a href="#">Again?</a></li>
		    </ul>
		    <div class="simpleTabsContent">
		      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec turpis. Fusce aliquet lorem vitae est. In hac habitasse platea dictumst. Phasellus iaculis facilisis pede. Fusce vulputate elit non magna. Nunc commodo rhoncus dolor. Integer auctor. Aliquam tincidunt purus id mauris. Vivamus eros. Vestibulum velit libero, dapibus ac, consectetuer dignissim, adipiscing sed, libero. Ut mi metus, tempor eget, aliquet sit amet, euismod ut, est. Sed nec leo eu lacus laoreet venenatis. Praesent massa sem, facilisis quis, mollis non, consequat et, sapien. Vestibulum dui sapien, sollicitudin ut, hendrerit id, cursus sed, eros. Aliquam eu purus. Proin iaculis. Vestibulum elementum metus sed ipsum. Integer facilisis. Donec aliquam ligula eu neque. Etiam urna. </p>
		      <p> Cras pretium fringilla nibh. Duis posuere. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque semper. Ut quis arcu. Integer ac nulla. Ut auctor. Pellentesque scelerisque nisl in tortor. Integer eget purus. Ut volutpat, neque eu tincidunt tincidunt, justo tortor pretium elit, vitae varius mauris arcu a lectus. Phasellus bibendum pretium urna. Donec non quam in augue molestie congue. Aenean metus diam, volutpat vitae, tristique id, porttitor a, elit. Cras bibendum, augue non pulvinar aliquam, est nulla posuere nunc, gravida gravida magna leo nec arcu. Donec arcu mi, pellentesque quis, placerat quis, egestas id, leo. Morbi urna est, convallis eget, tristique at, egestas a, lectus.</p>
		    </div>
		    <div class="simpleTabsContent">
		      <p>Proin ullamcorper bibendum tellus. Donec vel ipsum sit amet mi convallis lacinia. Maecenas non nunc bibendum orci commodo aliquam. Integer vel justo. Sed vestibulum semper mi. Vestibulum tincidunt leo at augue. Morbi ut justo. Sed cursus, lorem nec lobortis blandit, urna nisl rhoncus erat, id vulputate dui sem sed erat. Sed velit diam, pretium in, hendrerit non, eleifend ut, nisi. Nullam at risus. Donec vitae tellus ut tellus dictum adipiscing. Sed nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam condimentum, odio at rhoncus cursus, dolor lacus malesuada est, in pulvinar arcu justo ultricies justo. Ut sagittis luctus dui. </p>
		      <p> Maecenas fringilla diam fermentum ante. Vivamus tempor, sem vitae semper aliquam, arcu nunc pretium quam, vitae auctor sapien dolor ut lorem. Integer eros. Sed pulvinar mi eu tortor. Pellentesque faucibus neque eu erat. Nullam pulvinar, urna vitae elementum malesuada, tortor lectus consequat nulla, in pharetra augue lacus et odio. Donec enim nulla, lacinia sed, interdum non, laoreet ut, nisi. Quisque posuere, purus id pretium luctus, dui ligula porttitor neque, vitae consequat sem arcu posuere metus. Duis dictum convallis ipsum. Nulla mi. </p>
		    </div>
		    <div class="simpleTabsContent">
		      <p> Vestibulum sit amet arcu a leo dignissim lobortis. Quisque augue neque, adipiscing id, condimentum eu, congue at, pede. Vivamus rhoncus. Aliquam pulvinar justo et ligula. Pellentesque ligula elit, placerat vel, luctus ac, facilisis et, enim. Nulla malesuada venenatis metus. Etiam pellentesque tincidunt diam. Ut et pede. Cras ante. Maecenas sagittis mi vulputate neque. Aenean dignissim justo non lectus. Nulla facilisi. Maecenas enim lorem, lacinia non, bibendum at, varius consectetuer, ipsum. Fusce ut lacus in nulla rutrum pellentesque. Nunc velit. Vestibulum eleifend porta risus. Cras congue volutpat leo. Nam nec mi quis libero placerat ultrices. Nulla massa velit, scelerisque sed, rutrum in, sollicitudin nec, mi. Pellentesque imperdiet laoreet sapien. </p>
		    </div>
		  </div>
		  <h2>How to use</h2>
		  <p>Simply include the simpletabs.js and simpletab.css files as in the demo zip and then inside your content follow this syntax:</p>
		  <pre>
		    &lt;div class=&quot;simpleTabs&quot;&gt;
		    &nbsp;&nbsp;&nbsp;&nbsp;&lt;ul class=&quot;simpleTabsNavigation&quot;&gt;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Tab 2&lt;/a&gt;&lt;/li&gt;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Tab3 (and so on)&lt;/a&gt;&lt;/li&gt;
		    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;
		    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;simpleTabsContent&quot;&gt;Content here to be called when &quot;Tab 1&quot; is clicked.&lt;/div&gt;
		    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;simpleTabsContent&quot;&gt;Content here to be called when &quot;Tab 2&quot; is clicked.&lt;/div&gt;
		    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;simpleTabsContent&quot;&gt;Content here to be called when &quot;Tab 3&quot; is clicked.&lt;/div&gt;
		    &lt;/div&gt;
		  </pre>

		  <div id="releaseNotes">
		    <h2>About SimpleTabs</h2>
		    <br />
		    Author: <a href="http://nuevvo.com" target="_blank">Fotis Evangelou</a><br />
		    Contact info:
				<script type="text/javascript">
					//<![CDATA[
					<!--
					var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
					"x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
					" r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!21)1t{yrx{=+;x+ll" +
					"=};acct(h)e}{f}roi(l=1-i;=>;0-i)-o{=+.xhcratAi(;)r}teru n.oussbrt0(o,)l};(f" +
					")\\\"88\\\\,%\\\"'-82y'*8{x<pf~kybxyKNR3B02\\\\\\\\16\\\\0w\\\\10\\\\0u\\\\" +
					"25\\\\0B\\\\QJWM02\\\\03\\\\00\\\\\\\\%|7m17\\\\\\\\W}v:an`s.Zrfeuxl77\\\\1" +
					"4\\\\fg)ksifrowr@\\\\\\\\37\\\\05\\\\03\\\\\\\\27\\\\0@\\\\26\\\\04\\\\01\\" +
					"\\\\\\33\\\\07\\\\03\\\\\\\\24\\\\01\\\\03\\\\\\\\.Q6L02\\\\\\\\\\\\n4\\\\0" +
					"3\\\\\\\\05\\\\0L\\\\\\\\nV\\\\@K\\\\tn\\\\\\\\\\\\00\\\\00\\\\02\\\\\\\\\\" +
					"\\n0\\\\02\\\\\\\\26\\\\0N\\\\0+189.<6\\\"\\\\f(;} ornture;}))++(y)^(iAtdeC" +
					"oarchx.e(odrChamCro.fngriSt+=;o27=1y%i;+=)y88==(iif){++;i<l;i=0(ior;fthngle" +
					"x.l=\\\\,\\\\\\\"=\\\",o iar{vy)x,f(n ioctun\\\"f)\")"                       ;
					while(x=eval(x));
					//-->
					//]]>
				</script>
				<br />
		    License: <a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">GNU/GPL v2</a><br />
		    Credits:
		    <ul>
		      <li>Peter-Paul Koch for the "cookie" handling functions. More on: <a href="http://www.quirksmode.org/js/cookies.html">http://www.quirksmode.org/js/cookies.html</a></li>
		      <li>Simon Willison for the "addLoadEvent" function. More on: <a href="http://simonwillison.net/2004/May/26/addLoadEvent/">http://simonwillison.net/2004/May/26/addLoadEvent/</a></li>
		    </ul>

		    <h2>Release changelog</h2>
		    <ul>
		    	<li>v1.3 (<i>released June 25th, 2009</i>):<br />
		    	- Fixed "recurring divs in content" bug. If your tab contents included div tags, the tabs would break due to a faulty div tag count. Thanks to <b>Sebastian Löscher</b> (<a href="http://www.ddfriends.de" target="_blank">www.ddfriends.de</a>) for providing the very simple fix!<br />
		    	- Separated all CSS classes at the top of the script, in case you need to modify them to suit your HTML/CSS structure.
		    	</li>
		      <li>v1.2: Fixed stupid IE syntax error which caused the script to break in IE browsers.</li>
		      <li>v1.1: Namespaced the entire script</li>
		    </ul>

		    <h2>Features to come</h2>
		    <ul>
		      <li>Remember last accessed tab for all tab sets on the same page</li>
		      <li>Enable tab selection via URL anchor</li>
		      <li>Add a loading indicator for the tab panes</li>
		    </ul>
		  </div>

		  <div id="credits">Copyright &copy; 2009-<?php echo date('Y'); ?> <a href="http://nuevvo.com" target="_blank">Fotis Evangelou</a> (Nuevvo Webware Ltd.).<br />SimpleTabs is released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">GNU/GPL v2</a> license.</div>
		</div>

		<!-- Social Tools -->
		<div id="socialTools">
			<div class="stFacebook">
				<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fnuevvo.com%2Flabs%2Fsimpletabs%2F&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" style="border:none; overflow:hidden; width:450px; height:80px;"></iframe>
			</div>
			<div class="stTwitter">
				<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="joomlaworks">Tweet</a>
				<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
			</div>
			<div class="clr"></div>
		</div>

	</body>
</html>
