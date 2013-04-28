<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Evolution 9.0.4.1748 - www.websitex5.com" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		<script type="text/javascript" src="res/swfobject.js"></script>
		<script type="text/javascript" src="res/jquery.js"></script>
		<script type="text/javascript" src="res/x5engine.js"></script>
		<script type="text/javascript" src="res/x5cartengine.js"></script>
		<script type="text/javascript" src="res/l10n.js"></script>
		<script type="text/javascript" src="res/x5settings.js"></script>
		
		
		<title>Search - test</title>
		<!-- CSS -->
		<script type="text/javascript">x5engine.imQueue.push_init('x5engine.imSearch.Load()')</script>
	</head>
	<body>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">test</h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
			<a id="imGoToMenu"></a><p class="imHidden">Main menu</p>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					<li id="imMnMnNode0">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Home Page</span>
							</span>
						</a>
					</li>
					<li id="imMnMnNode3">
						<a href="page-1.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Page 1</span>
							</span>
						</a>
					</li>
					<li id="imMnMnNode4">
						<a href="page-2.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Page 2</span>
							</span>
						</a>
					</li>
					<li id="imMnMnNode5">
						<a href="page-3.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Page 3</span>
							</span>
						</a>
					</li>
				</ul><script type="text/javascript">x5engine.imQueue.push_init("x5engine.utils.imPreloadImages(['menu/index_h.png','menu/page-1_h.png','menu/page-2_h.png','menu/page-3_h.png','menu/sub.png','menu/sub_h.png','menu/sub_f.png','menu/sub_f_h.png','menu/sub_l.png','menu/sub_l_h.png','menu/sub_m.png','menu/sub_m_h.png','res/imLoad.gif','res/imClose.png'])",false);</script>
				
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<?php
$search = new imSearch();
$search->search(@$_GET['search'], @$_GET['page']);
?>
				<div class="imClear"></div>
			</div>
		</div>
		<div id="imFooterBg">
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a> | <a href="#imGoToMenu" title="Read this site again">Back to main menu</a></span>
		
	</body>
</html>
