<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>画册</title>
		<link rel="stylesheet" type="text/css" href="/travel/Public/css/Pic/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/travel/Public/css/Pic/demo.css" />
		<link rel="stylesheet" type="text/css" href="/travel/Public/css/Pic/component.css" />
		<style>
		body {
			background: #444;
		}
		.codrops-demos a.current-demo {
			color: #999;
		}
		.codrops-header h1 {
			margin-top: 50px;
			font-family: 'Microsoft Yahei';
			color: #fff;
		}
		</style>
		<script src="/travel/Public/js/Pic/modernizr.custom.js"></script>
		<!--  -->
		<script type="text/javascript" src="/travel/Public/js/jquery.min.js"></script>
		<link href="/travel/Public/css/Index/style.css" rel="stylesheet" type="text/css"  media="all" />	
		<link rel="stylesheet" href="/travel/Public/css/Index/responsiveslides.css">
		<script src="/travel/Public/js/Index/jquery.min.js"></script>
		<script src="/travel/Public/js/Index/responsiveslides.min.js"></script>
		<script>
	    	$(function () {
		      // Slideshow 1
		       $("#slider1").responsiveSlides({
		      	maxwidth: 2500,
		      	speed: 600
		       });
		    });
		</script>
		<style type="text/css">
			.grid{
				border: 0;
			}
			.grid h3{
				border: 0;
			}
		</style>
	</head>
	<body>
			<!---start-header---->
		<div class="header">
			<div class="wrap">
				<div class="top-nav">
					<ul>
					<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
					<li><a href="<?php echo U('Home/City/index');?>">目的地</a></li>
					<li><a href="<?php echo U('Home/Service/index');?>">服务</a></li>
					<li><a href="<?php echo U('Home/Note/index');?>">游记</a></li>
					<li class="active"><a href="<?php echo U('Home/Picture/index');?>">画册</a></li>
					<li><a href="<?php if (session('?username')) {echo(U('Home/Login/myspace'));} else echo(U('Home/Login/index')); ?>">个人中心</a></li>
					<li><a href="<?php echo U('Home/Login/logout');?>">退出</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
			<!---End-header---->
		<div class="container">
			<section class="grid-wrap">
				<ul class="grid swipe-rotate" id="grid">
					<li>
						<a href="http://www.behance.net/gallery/15944679/Kenpo-News-April-2014-issue">
							<img src="/travel/Public/images/Pic/1.jpg" alt="img01">
							<h3>Kenpo News April 2014 issue</h3>
						</a>
					</li>
					<li>
						<a href="http://www.behance.net/gallery/15758125/SQUET-April-2014-issue">
							<img src="/travel/Public/images/Pic/2.jpg" alt="img02">
							<h3>SQUET April 2014 issue</h3>
						</a>
					</li>
					<li><a href="http://www.behance.net/gallery/15586227/MONOCLE-issue-72"><img src="/travel/Public/images/Pic/3.jpg" alt="img03"><h3>MONOCLE issue 72</h3></a></li>
					<li><a href="http://www.behance.net/gallery/11880495/TOWN-Winter-2013"><img src="/travel/Public/images/Pic/4.jpg" alt="img04"><h3>TOWN Winter 2013</h3></a></li>
					<li><a href="http://www.behance.net/gallery/11455333/Quarterly-Musashino-autumn-of-2013-issue"><img src="/travel/Public/images/Pic/5.jpg" alt="img05"><h3>Quarterly Musashino autumn of 2013 issue</h3></a></li>
					<li><a href="http://www.behance.net/gallery/12866129/MONOCLE-issue-69"><img src="/travel/Public/images/Pic/6.jpg" alt="img06"><h3>MONOCLE issue 69</h3></a></li>
					<li><a href="http://www.behance.net/gallery/16631085/Real-Simple-May-2014"><img src="/travel/Public/images/Pic/7.jpg" alt="img07"><h3>Real Simple May 2014</h3></a></li>
					<li><a href="http://www.behance.net/gallery/11727343/The-65th-Book-Week"><img src="/travel/Public/images/Pic/8.jpg" alt="img08"><h3>The 65th Book Week</h3></a></li>
					<li><a href="http://www.behance.net/gallery/16631085/Real-Simple-May-2014"><img src="/travel/Public/images/Pic/9.jpg" alt="img09"><h3>Real Simple May 2014</h3></a></li>
					<li><a href="http://www.behance.net/gallery/15566747/Quarterly-Musashino-spring-of-2014-issue"><img src="/travel/Public/images/Pic/10.jpg" alt="img10"><h3>Quarterly Musashino spring of 2014 issue</h3></a></li>
					<li><a href="http://www.behance.net/gallery/11134427/MAJESTY-express-vol-01"><img src="/travel/Public/images/Pic/11.jpg" alt="img11"><h3>MAJESTY express vol. 01</h3></a></li>
					<li><a href="http://www.behance.net/gallery/13329103/Shitamachi-Rocket"><img src="/travel/Public/images/Pic/12.jpg" alt="img12"><h3>Shitamachi Rocket</h3></a></li>
					<li><a href="http://www.behance.net/gallery/13285315/Quarterly-Musashino-winter-of-2013-issue"><img src="/travel/Public/images/Pic/13.jpg" alt="img13"><h3>Quarterly Musashino winter of 2013 issue</h3></a></li>
					<li><a href="http://www.behance.net/gallery/16541811/MAINICHI-CHUUGOKUGO-May-2014"><img src="/travel/Public/images/Pic/14.jpg" alt="img14"><h3>MAINICHI CHUUGOKUGO April 2014</h3></a></li>
					<li><a href="http://www.behance.net/gallery/15944679/Kenpo-News-April-2014-issue"><img src="/travel/Public/images/Pic/1.jpg" alt="img01"><h3>Kenpo News April 2014 issue</h3></a></li>
					<li><a href="http://www.behance.net/gallery/15758125/SQUET-April-2014-issue"><img src="/travel/Public/images/Pic/2.jpg" alt="img02"><h3>SQUET April 2014 issue</h3></a></li>
					<li><a href="http://www.behance.net/gallery/15586227/MONOCLE-issue-72"><img src="/travel/Public/images/Pic/3.jpg" alt="img03"><h3>MONOCLE issue 72</h3></a></li>
					<li><a href="http://www.behance.net/gallery/11880495/TOWN-Winter-2013"><img src="/travel/Public/images/Pic/4.jpg" alt="img04"><h3>TOWN Winter 2013</h3></a></li>
					<li><a href="http://www.behance.net/gallery/11455333/Quarterly-Musashino-autumn-of-2013-issue"><img src="/travel/Public/images/Pic/5.jpg" alt="img05"><h3>Quarterly Musashino autumn of 2013 issue</h3></a></li>
					<li><a href="http://www.behance.net/gallery/12866129/MONOCLE-issue-69"><img src="/travel/Public/images/Pic/6.jpg" alt="img06"><h3>MONOCLE issue 69</h3></a></li>
					<li><a href="http://www.behance.net/gallery/16631085/Real-Simple-May-2014"><img src="/travel/Public/images/Pic/7.jpg" alt="img07"><h3>Real Simple May 2014</h3></a></li>
					<li><a href="http://www.behance.net/gallery/11727343/The-65th-Book-Week"><img src="/travel/Public/images/Pic/8.jpg" alt="img08"><h3>The 65th Book Week</h3></a></li>
					<li><a href="http://www.behance.net/gallery/16631085/Real-Simple-May-2014"><img src="/travel/Public/images/Pic/9.jpg" alt="img09"><h3>Real Simple May 2014</h3></a></li>
					<li><a href="http://www.behance.net/gallery/15566747/Quarterly-Musashino-spring-of-2014-issue"><img src="/travel/Public/images/Pic/10.jpg" alt="img10"><h3>Quarterly Musashino spring of 2014 issue</h3></a></li>
					<li><a href="http://www.behance.net/gallery/11134427/MAJESTY-express-vol-01"><img src="/travel/Public/images/Pic/11.jpg" alt="img11"><h3>MAJESTY express vol. 01</h3></a></li>
					<li><a href="http://www.behance.net/gallery/13329103/Shitamachi-Rocket"><img src="/travel/Public/images/Pic/12.jpg" alt="img12"><h3>Shitamachi Rocket</h3></a></li>
					<li><a href="http://www.behance.net/gallery/13285315/Quarterly-Musashino-winter-of-2013-issue"><img src="/travel/Public/images/Pic/13.jpg" alt="img13"><h3>Quarterly Musashino winter of 2013 issue</h3></a></li>
					<li><a href="http://www.behance.net/gallery/16541811/MAINICHI-CHUUGOKUGO-May-2014"><img src="/travel/Public/images/Pic/14.jpg" alt="img14"><h3>MAINICHI CHUUGOKUGO April 2014</h3></a></li>
				</ul>
			</section>
		</div><!-- /container -->
		<div class="footer-banner" style="width:728px; margin:160px auto 100px"></div>
		<script src="/travel/Public/js/Pic/masonry.pkgd.min.js"></script>
		<script src="/travel/Public/js/Pic/imagesloaded.pkgd.min.js"></script>
		<script src="/travel/Public/js/Pic/classie.js"></script>
		<script src="/travel/Public/js/Pic/colorfinder-1.1.js"></script>
		<script src="/travel/Public/js/Pic/gridScrollFx.js"></script>
		<script>
			new GridScrollFx( document.getElementById( 'grid' ), {
				viewportFactor : 0.4
			} );
		</script>
	</body>
</html>