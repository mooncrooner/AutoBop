<?php

$jsfile = "autobop.js";
exec("cat $jsfile | jsmin/jsmin", $lines);
$jsmin = implode($lines);
$js = file_get_contents($jsfile);

?><html>
<head>
<title>AutoBop</title>
<link href="http://alexgorbatchev.com/pub/sh/current/styles/shCore.css" rel="stylesheet" type="text/css" />
<link href="http://alexgorbatchev.com/pub/sh/current/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js" type="text/javascript"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js" type="text/javascript"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js" type="text/javascript"></script>
</head>
<body>
	<h1>AutoBop</h1>
	<p>Auto-headbop mode for <a href="http://turntable.fm">Turntable.fm</a>.  After run, will press the "AWESOME!" button automatically once every 15 seconds.</p>
	<h3>How to use</h3>
	<ul>
		<li>Drag this link into your bookmarks bar:<br /><br /><strong><a href="javascript:<?php echo $jsmin ?>">AutoBop!</a></strong><br /><br /></li>
		<li>Load up your <a href="http://turntable.fm">Turntable</a> page, make sure the AWESOME! button is present</li>
		<li>Click the AutoBop! bookmark</li>
		<li>Profit</li>
	</ul>
	<br />
	Code (<a href="<?php echo $jsfile ?>">raw file</a>):
	<pre class="brush: js"><?php echo str_replace(array('<', '>'), array('&lt;', '&gt;'), $js); ?></pre>

	<p>Bookmarklet process: pass script through <a href="http://www.crockford.com/javascript/jsmin.html">JSMin</a>, remove newlines, and embed in an anchor tag</p>

<br />

	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-432412-3");
		pageTracker._trackPageview();
	} catch(err) {}</script>

</body>
</html>

