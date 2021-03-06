<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>攻略查看</title>
  <link rel="stylesheet" href="/travel/Public/css/Index/responsiveslides.css">
  <link href="/travel/Public/css/raider/styles.css" rel="stylesheet" type="text/css" />
  <link href="/travel/Public/css/Index/style.css" rel="stylesheet" type="text/css"  media="all" />  


</head>
<body>
    <div class="header">
      <div class="wrap">
        <div class="top-nav">
        <ul>
          <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
          <li><a href="<?php echo U('Home/City/index');?>">目的地</a></li>
          <li class="active"><a href="<?php echo U('Home/Service/index');?>">服务</a></li>
          <li><a href="<?php echo U('Home/Note/index');?>">游记</a></li>
          <li><a href="<?php echo U('Home/Picture/index');?>">画册</a></li>
          <li><a href="<?php if (session('?username')) {echo(U('Home/Login/myspace'));} else echo(U('Home/Login/index')); ?>">个人中心</a></li>
          <li><a href="<?php echo U('Home/Login/logout');?>">退出</a></li>
        </ul>
      </div>
      <div>

      </div>
      <div class="clear"> </div>
    </div>
  </div>
  <div id="main_bg">
    <div id="main"> 
      <div class="top">
        <ul class="round">
          <li><img src="/travel/Public/images/raider/0001.jpg" alt="" /></li>
          <li><img src="/travel/Public/images/raider/0002.jpg" alt="" /></li>
          <li><img src="/travel/Public/images/raider/0003.jpg" alt="" /></li>
          <li><img src="/travel/Public/images/raider/0004.jpg" alt="" /></li>
          <li><img src="/travel/Public/images/raider/0005.jpg" alt="" /></li>
          <li><img src="/travel/Public/images/raider/0006.jpg" alt="" /></li>
        </ul>
        <script type="text/javascript" src="/travel/Public/js/raider/jquery.js"></script> 
        <script type="text/javascript" src="/travel/Public/js/raider/jquery.roundabout.js"></script> 
        <script type="text/javascript">

          $(document).ready(function() {
            $('.round').roundabout();
          });

        </script> 
      </div>

      <!-- content begins -->
      <div class="cont_top"></div>

      <div id="content">
              <div style="height:10px"></div>
        <!-- content begins -->
        <div class="cont_top"></div>
        <div class="cont_home">
          <div class="home_box">
            <h1>武隆攻略 </h1>
            <div style="height:15px"></div>
            <img src="/travel/Public/images/raider/0007.jpg" alt="" />
            <div style="height:10px;"></div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;从低处往上看的三桥，往低处走的地缝，一切与众不同 （三桥的壮观和地缝的秀美是照片无法体现出来的，只有亲临其中才能感受到）<br />
            &nbsp;&nbsp;&nbsp;身临天生三桥 ，内心对大自然的敬畏之心将会油然而生。 天生三桥和龙水峡地缝游记很多，这里， 既是《满城尽带黄金甲》的外景拍摄地，又是 好莱坞大片《变形金刚4：绝迹重生》……
            <div style="height:5px"></div>
            <div style="height:20px;"><a class="read_l" href="r_wulong.html">查 看</a></div>
          </div>
          <div style="width: 40px; height:20px; float: left;"></div>
          <div class="home_box">
            <h1>成都攻略</h1>
            <div style="height:15px"></div>
            <img src="/travel/Public/images/raider/0008.jpg" alt="" />
            <div style="height:10px;"></div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;蓉城一个蓉字，已足够千娇百媚，百转千回。它不像西安、北京或南京这样作过集权帝国首都的都市，只要踏入城市的核心区，就能看到巍峨、充满威权和豪情的城池残桓。早在大跃进之前，这座两千多年历史的西蜀古城，已经在毛泽东的授意下，拆去了象征古典地位的城墙，只剩疏朗的城市格局。但吊诡的是，尽管城墙不再，……
            <div style="height:5px"></div>
            <div style="height:20px;"><a class="read_l" href="r_chengdu.html">查看</a></div>
          </div>
          <div style="width: 40px; height:20px; float: left;"></div>
          <div class="home_box">
            <h1>西安攻略</h1>
            <div style="height:15px"></div>
            <img src="/travel/Public/images/raider/0009.jpg" alt="" />
            <div style="height:10px;"></div>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;漫步古都西安，随手抓一把黄土，都会感到历史的凝重。西安，古时叫长安。现在听起来，仿佛被唤作长安城时候的它，更有一些难以言传的魅力。也许是年代久远，也许是盛世传言。 </p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;这座城，那些人，都贴着一些莫名哀愁或莫名欣喜的标签，来自于梦中的都城。如此寂寞的年少时代，敏感又具有侵略内核的少年……</p>
            <div style="height:5px"></div>
            <div style="height:20px;"><a class="read_l" href="#">查 看</a></div>
          </div>
          <div style="clear: both"></div>
        </div>
      </div>
      <div class="cont_bot"></div>
      <!-- content ends -->

      <div style="height:15px"></div>
      <!-- bottom begin -->

      <div id="bottom">
        <div style="height:10px"></div>
        <!-- content begins -->
        <div class="cont_top"></div>
        <div id="content">
          <div class="cont_home">
            <div class="home_box">
              <h1>九寨沟攻略 </h1>
              <div style="height:15px"></div>
              <img src="/travel/Public/images/raider/0010.jpg" alt="" />
              <div style="height:10px;"></div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“黄山归来不看云，九寨归来不看水”，九寨山水，天然原始，四季景色变幻无穷，尤其是秋季，沿湖连绵数十里彩林美不胜收。
            </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;九寨沟的精灵是水，湖、泉、河、滩连缀一体，千颜万色，高低错落的群瀑高唱低吟，大大小小的群海碧蓝澄澈，水中倒映红叶、绿树、雪峰、蓝天，变幻无穷；水在树间流，树在水中长，花树开在水中央……<br />
            </p>
            <div style="height:5px"></div>
            <div style="height:20px;"><a class="read_l" href="#">查 看</a></div>
          </div>
          <div style="width: 40px; height:20px; float: left;"></div>
          <div class="home_box">
            <h1>凤凰古城攻略</h1>
            <div style="height:15px"></div>
            <img src="/travel/Public/images/raider/0011.jpg" alt="" />
            <div style="height:10px;"></div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    一座青山抱古城，一弯江水绕城过，一条红红石板街，一排小巧吊脚楼，一道风雨古城墙，一座沧桑老城堡，一个奇绝奇梁洞，一座雄伟古石桥，一群闻名世界的人…为了你，这座古城已等待了千年。
          </p>
          <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;凤凰的美，是种从恬静舒适中散发出来的美，不似江南小镇那般柔美，也不像丽江那样浮华，它含蓄而又多情。沱江水、石板街、吊脚楼……</p>
          <div style="height:5px"></div>
          <div style="height:20px;"><a class="read_l" href="#">查 看</a></div>
        </div>
        <div style="width: 40px; height:20px; float: left;"></div>
        <div class="home_box">
          <h1>张家界攻略</h1>
          <div style="height:15px"></div>
          <img src="/travel/Public/images/raider/0012.jpg" alt="" />
          <div style="height:10px;"></div>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;这里的春，是摇曳着诗画山水的风韵情致悠然而来的。流淌在这里的春色，是一

            种没有诗香墨痕影响而诗画之情自在喷发的印象，晴雨咸宜，时时尽美。
            。 </p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;晨有旭

              照群峰，明暗变幻于莫测之奇，云闲雾逸，花鸟争闹于溪林之秀；暮则烟柳斜阳
              
              ，晚霞绘景于山水之美，夜月如水，群峰缥缈于星空之幽。或飞絮飘洒，雾气氤
              
              氲，峰林隐 ……</p>
              <div style="height:5px"></div>
              <div style="height:20px;"><a class="read_l" href="#">查 看</a></div>
            </div>
            <div style="clear: both"></div>
          </div>
        </div>
        <div class="cont_bot"></div>
        <!-- content ends -->
        <div style="clear: both;"></div>
      </div>
      <div class="cont_bot"></div>

      <!-- bottom end --> 
    </div>
  </div>
</body>
</html>