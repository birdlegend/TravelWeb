<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script type = "text/javascript" src = "/travel/Public/js/jquery.min.js"></script>
		<script type = "text/javascript" src = "/travel/Public/js/navigation.js"></script>
		<script type = "text/javascript" src = "/travel/Public/js/navigationT.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "/travel/Public/css/navigation.css">	
		<link rel = "stylesheet" type = "text/css" href = "/travel/Public/css/navigationT.css">	
		<link rel = "stylesheet" type = "text/css" href = "/travel/Public/css/home_style.css">	
		<link rel = "stylesheet" type = "text/css" href = "/travel/Public/css/note_style.css">	
		<script type = "text/javascript">
		var col
		function ChangeCol(){
			if(col == 1){
		 $("div.metro_nav").show();
		 $("div.metro_na").hide();
			}else if(col == 2){
		$("div.metro_nav").show();
		 $("div.metro_na").hide();
			}else if(col == 3){
				$("div.metro_nav").hide();
				$("div.metro_na").show();
			}
			setColors();
		}
		</script>

		<style>
			body{
				margin : 0;
			}
			img{
				border : none;
			}
		</style>

	<title>发表游记</title>
</head>
<body>
	<div class= "metro_nav" style="display:none" id="secondshow">
		<div class= "nav_title">自游网</div>
			<ul>
				<li>
					<a href = "<?php echo U('Home/Index/index');?>"><img src = "/travel/Public/images/icon_home.png"/><span>首页</span></a>
				</li>

				<li>
					<a><img src = "/travel/Public/images/icon_settings.png"/><span>目的地</span></a>
					
					<ul>
						<li><a href = "#"><img src = "/travel/Public/images/icon_account.png"/><span></span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_edit.png"/><span></span></a></li>
					</ul>
				</li>
							
				<li>
					<a href = "#"><img src = "/travel/Public/images/icon_shopping.png"/><span>攻略</span></a>
					<ul>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>

					</ul>
				</li>
				
				<li>
					<a href = "#"><img src = "/travel/Public/images/icon_gallery.png"/><span>游记</span></a>
					<ul>
						<li><a href ="<?php echo U('Home/Picture/index');?>"><img src = "/travel/Public/images/icon_menu.png"/><span>画册</span></a></li>
						<li><a href = "<?php echo U('Home/Note/index');?>"><img src = "/travel/Public/images/icon_menu.png"/><span>发表</span></a></li>
						<li><a href = "<?php echo U('Home/Note/manage');?>"><img src = "/travel/Public/images/icon_menu.png"/><span>管理</span></a></li>
					</ul>
				</li>

				<li>
					<a href = "#"><img src = "/travel/Public/images/icon_apps.png"/><span>行程</span></a>
					<ul>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
						<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>

					</ul>
				</li>
				<li>
					<a href = "<?php echo U('Home/Login/index');?>"><img src = "/travel/Public/images/icon_account.png"/><span>注册/登录</span></a>
				</li>
			</ul>
		</div>
	<div class="metro_nav" id="firstshow">
			<div class="nav_title">
				游记
				<span class="back_button" onclick="document.getElementById('firstshow').style.display='none';document.getElementById('secondshow').style.display='';"></span>
			</div>
			<ul>
				<li>
					<a href="<?php echo U('Home/Picture/index');?>">
						<img src="/travel/Public/images/icon_menu.png">		
						<span>画册</span>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Note/index');?>">
						<img src="/travel/Public/images/icon_menu.png">		
						<span>发表</span>
					</a>
				</li>
				<li><a href = "<?php echo U('Home/Note/manage');?>"><img src = "/travel/Public/images/icon_menu.png"/><span>管理</span></a></li>
			</ul>
	</div>	
	<div class="notebox">
		<div class="title">
			<form name="noteform" action="<?php echo U('Home/Note/submit');?>" method="post">
				<label>
					<span style="color: red;">*</span>
					游记标题&nbsp;&nbsp;&nbsp;
				</label>
				<input id="titleinput" name="titlename" type="text" value="">
				<script id="container" name="content" type="text/plain">
		            
		        </script>
		        <input id="contenthead" name="contenthead" type="hidden" value="" >
				<a href="#" id="pushlish_top" class="publish" onclick="mySubmit()">
					<span class="publish-icon">发布游记</span>
				</a>														
			</form>
		</div>
		<div class="containerarea">
			<!-- 加载编辑器的容器 -->
			<script type="text/javascript">
				window.UEDITOR_HOME_URL='/travel/Public/ueditor/';
			</script>
			<a href="#" onclick="mySubmit()" class="commit"></a>
		    <!-- 配置文件 -->
		    <script type="text/javascript" src="/travel/Public/ueditor/ueditor.config.js"></script>
		    <!-- 编辑器源码文件 -->
		    <script type="text/javascript" src="/travel/Public/ueditor/ueditor.all.js"></script>
		    <!-- 实例化编辑器 -->
		    <script type="text/javascript">
		        var ue = UE.getEditor('container', {
						    initialFrameWidth:document.body.clientWidth*0.55,
						    initialFrameHeight:400,
						});

		    </script>
		    <div class="commitarea">
		    	<!-- <script type="text/javascript">
					//对编辑器的操作最好在编辑器ready之后再做
					function txt() {
					    //设置编辑器的内容
					    // ue.setContent('');
					    //获取html内容，返回: <p>hello</p>
					    // var html = ue.getContent();
					    //获取纯文本内容，返回: hello
					    var txt = ue.getContent();
					    return txt;
					};
		    	</script> -->
<!-- 				<span class="commit" onclick="javascript:alert(txt());">
					 <a href="#"></a> 
				</span>  -->
			</div>
		</div>
		<div class="container-right">
			<label>最新照片</label>
		</div>

	</div>
		<script type="text/javascript">
			function mySubmit(){
				var txt = ue.getContentTxt();
				var str = txt.substring(0,10);
				document.getElementById('contenthead').value=str;
				if(ue.hasContents()){
		            ue.sync();       //同步内容
		            document.noteform.submit();
		        }
		        else
		        	alert("没有内容哦！");
			}
		</script>
</body>

</html>