﻿<?php
Session_start();
if(!@isset($_SESSION['id']))
{
   header("Location:index.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>主页 | 明曦（杭州）资产管理有限公司</title>
        <meta name="keywords" content = "明曦资本,明曦（杭州）资产管理有限公司,玉皇山南基金小镇" charset="utf-8">
        <meta name = "description" content = "明曦（杭州）资产管理有限公司（简称“明曦资本”），注册于杭州玉皇山南基金小镇。创始人团队来自华尔街顶级投行（高盛、花旗、德意志银行）和对冲基金（Worldquant、HBK）。多年从事量化投资工作，涵盖策略设计、平台搭建、交易系统、衍生品定价、风险管理等方面，拥有丰富的量化投资全流程实战经验。">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="明曦资本">
	<!--meta name="sharecontent" data-msg-img="缩略图地址" data-msg-title="标题" data-msg-content="简介" data-msg-callBack="" data-line-img="缩略图地址" data-line-title="标题" data-line-callBack=""/ --> 
	<!-- CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<script src="assets/js/wxshare.js"></script>
	<!-- IE 9 Fallback-->
	<!--[if IE 9]>
		<link href="assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.useso.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>
	<!-- FAVICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/repute144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/repute114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/repute72x72.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/repute57x57.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default " role="navigation">
			<div class="container">
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<a href="index.html" >
						<img style="width:192px;height:40px;margin-top:5px;" src="assets/img/logo/logo设计_画板 4.png" alt="明曦（杭州）资产管理有限公司">
					</a>
				</div>
				<!-- MAIN NAVIGATION -->
				<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">主页 <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.html">主页</a></li>
								
								
							</ul>
						</li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">明曦简介   <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="page-about-us.html">明曦简介</a></li>
								
								
							</ul>
						</li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">团队成员 <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="page-pricing-tables.html">团队成员</a></li>
								
								
							</ul>
						</li>
						<li class="dropdown mega-menu">
							<a href="#" data-toggle="dropdown">产品介绍 <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="page-services.html">明曦CTA1号</a></li>
								<li><a href="page-support.html">明曦FOF1号</a></li>
								<li><a href="page-terms.html">更多产品</a></li>
								
							</ul>
							
						</li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">招贤纳士 <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="portfolio-4-columns.html">量化程序员（quantitative developer）/实习生</a></li>
								<li><a href="portfolio-3-columns.html">量化投资套利策略研究员</a></li>
								
								
							</ul>
						</li>
						
						
					</ul>
				</div>
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- HERO UNIT -->
		<section class="hero-unit-slider slider-responsive no-margin">
			<div id="carousel-hero" class="slick-carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="assets/img/sliders/1111111.jpg" class="img-responsive" alt="Slider Image">
						
					</div>
					<div class="item">
						<img src="assets/img/sliders/炫酷背景图 (183).jpg" class="img-responsive" alt="Slider Image">
						
					</div>
					<div class="item">
						<img src="assets/img/sliders/543e6e4c4da68.jpg" class="img-responsive" alt="Slider Image">
						
					</div>
				</div>
			</div>
		</section>
		<!-- END HERO UNIT -->
		<!-- MAIN FEATURES -->
		<div class="main-features ">
			<div class="container">
				<div class="row" style="margin-top:16px;">
					<div class="col-md-3 col-sm-6">
						<a href="page-about-us.html" style="color:#94b6df;">
						<i class="fa fa-eye "></i>
						<h3 class="feature-heading" style="font-family:Microsoft YaHei"><strong>明曦简介</strong></h3>
						</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<a href="page-pricing-tables.html" style="color:#94b6df;">
						<i class="fa fa-group "></i>
						<h3 class="feature-heading" style="font-family:Microsoft YaHei"><strong>团队成员</strong></h3>
						</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<a href="page-services.html" style="color:#94b6df;">
						<i class="fa fa-line-chart "></i>
						<h3 class="feature-heading" style="font-family:Microsoft YaHei"><strong>产品介绍</strong></h3>
						</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<a href="portfolio-4-columns.html" style="color:#94b6df;">
						<i class="fa fa-search "></i>
						<h3 class="feature-heading" style="font-family:Microsoft YaHei"><strong>招贤纳士</strong></h3>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN FEATURES -->
		<!-- INTRO -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="section-heading" style="font-family:Microsoft YaHei"><strong>明曦简介</strong></h2>
						<p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;明曦（杭州）资产管理有限公司（简称“明曦资本”），注册于杭州玉皇山南基金小镇。创始人团队来自华尔街顶级投行（高盛、花旗、德意志银行）和对冲基金（Worldquant、HBK）。多年从事量化投资工作，涵盖策略设计、平台搭建、交易系统、衍生品定价、风险管理等方面，拥有丰富的量化投资全流程实战经验。</p>
						<p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们致力于以量化技术实现投资与科学的完美结合，我们专注于多品种、多策略、大容量、稳定回报和低风险的量化投资。我们的投资策略是用统计和数学的方法，从数据出发，通过科学严谨的回测论证，用模型和代码打造穿越经济周期的稳定收益。</p>
						<p></p>
						<p></p>
					</div>
					<div class="col-md-6">
						<img src="assets/img/56973e313a042.jpg" class="img-responsive" alt="Image Intro">
					</div>
				</div>
			</div>
		</section>
		<!-- END INTRO -->
		
		<!-- BOXED CONTENT 
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-flag"></i>
							<h2 class="boxed-content-title">GOAL ORIENTED</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-globe"></i>
							<h2 class="boxed-content-title">GLOBAL SERVICE</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-cog"></i>
							<h2 class="boxed-content-title">DYNAMIC CHANGE</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-users"></i>
							<h2 class="boxed-content-title">PROFESSIONAL SUPPORT</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END BOXED CONTENT -->
		<!-- WHY REPUTE 
		<section>
			<div class="container">
				<h2 class="section-heading sr-only">张曦</h2>
				<div class="tab-content">
					<div class="tab-pane fade in active text-center" id="tab-bottom1">
						<img src="assets/img/image001.jpg" class="img-responsive center-block margin-bottom-30px" alt="Ultra Responsive">
						<h3 class="text-accent-color">张曦</h3>
						<p class="lead">总经理</p>
						<p class="">曾在纽约的德意志银行、HBK对冲基金、高盛集团从事衍生品定价、交易策略设计、风险管理等工作，回国后参与平安集团投资管理中心架构重组，后在平安集团首席投资官办公室任资产策略经理，离开平安后创立旷腾农产品交易平台并任CEO。北京大学物理学士、美国Rice University物理博士，目前同时在上海交大研究生院担任企业导师，为2名硕士研究生提供金融领域的研究指导。</p>
					</div>
					<div class="tab-pane fade text-center" id="tab-bottom2">
						<img src="assets/img/965718.jpg" class="img-responsive center-block margin-bottom-30px" alt="Easy to Customize">
						<h3 class="text-accent-color">陈铭</h3>
						<p class="lead">投资总监</p>
						<p class="">曾就职于美国花旗集团、WorldQuant对冲基金、国泰君安资管公司，在量化投资方面拥有丰富的全流程经验，包括投资策略设计、平台搭建、交易系统、衍生品定价以及风险管理等各个方面。除了在美股、国内股票及期货市场均有很多优秀策略，还设计开发了一套智能化辅助策略生成系统，大大提高了策略研发效率。毕业于浙江大学，计算机系学士及博士，研究人工智能、机器学习，读博期间曾休学创立两家科技公司，获得近千万天使投资以及国家创新基金支持，拥有多项发明专利和软件著作权。</p>
					</div>
					
					
				</div>
				<div class="custom-tabs-line tabs-line-top">
					<ul class="nav" role="tablist">
						<li class="active"><a href="#tab-bottom1" role="tab" data-toggle="tab">张曦</a></li>
						<li><a href="#tab-bottom2" role="tab" data-toggle="tab">陈铭</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- END WHY REPUTE -->
		<!-- RECENT WORKS -->
		<!--
		<section class="recent-works">
			<div class="container">
				<h2 class="section-heading pull-left">产品介绍</h2>
				<a href="#" class="btn btn-primary pull-right">查看更多</a>
				<div class="clearfix"></div>
				<div class="portfolio-static">
					<div class="row">
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
									<h4 class="title">明曦CTA1号</h4>
									<p class="brief-description"></p>
									<a href="#" class="btn"></a>
								</div>
								<div class="media-wrapper">
									<img src="assets/img/portfolio/800x500/work5.png" alt="Item Thumbnail" />
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
									<h4 class="title">明曦FOF1号</h4>
									<p class="brief-description"></p>
									<a href="#" class="btn"></a>
								</div>
								<div class="media-wrapper">
									<img src="assets/img/portfolio/800x500/work6.png" alt="Item Thumbnail" />
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- END RECENT WORKS -->
		<!-- LATEST NEWS 
		<section>
			<div class="container">
				<h2 class="section-heading">招贤纳士</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="news-item news-featured">
							<a href="#"><img src="assets/img/news/58pic_5384cf2530703.jpg" class="img-responsive" alt="News Thumbnail"></a>
							<h3 class="news-title"><a href="#">交易系统开发工程师</a></h3>
							<p>【工作内容】1.设计、优化和维护公司的程序化下单系统，对接国内外主流交易接口；2.低延迟系统设计、开发和维护，涉及网络编程、数据库、进程间通讯等；3.为策略部门提供技术支持等。</p>
							<div class="news-meta">
								<span class="news-datetime"></span>
								<span class="news-comment-count pull-right"><a href="#"></a></span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="news-item news-featured">
							<a href="#"><img src="assets/img/news/5327fbb346b65.jpg" class="img-responsive" alt="News Thumbnail"></a>
							<h3 class="news-title"><a href="#">Java开发工程师</a></h3>
							<p>【工作内容】1.研发并优化公司的量化投资回测平台，对投资策略进行多方面的尝试；2.研发公司的交易监控、仓位管理和风险控制系统；3.研发公司的投资管理系统并维护等。</p>
							<div class="news-meta">
								<span class="news-datetime"></span>
								<span class="news-comment-count pull-right"><a href="#"></a></span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="news-item news-featured">
							<a href="#"><img src="assets/img/news/news3.png" class="img-responsive" alt="News Thumbnail"></a>
							<h3 class="news-title"><a href="#">人事/HR实习生</a></h3>
							<p>【工作内容】1.执行人事相关工作；2.执行招聘工作流程，协调、办理员工招聘、入职、离职等手续；3.负责管理人力资源相关文件和档案等。</p>
							<div class="news-meta">
								<span class="news-datetime"></span>
								<span class="news-comment-count pull-right"><a href="#"></a></span>
							</div>
						</div>
					</div>
				
					<!--
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="news-item margin-bottom-30px clearfix">
									<a href="#"><img src="assets/img/news/5327fbb346b65.jpg" class="img-responsive pull-left" alt="News Thumbnail"></a>
									<div class="right">
										<h3 class="news-title"><a href="#">Java开发工程师</a></h3>
										<p>【工作内容】1.研发并优化公司的量化投资回测平台，对投资策略进行多方面的尝试；2.研发公司的交易监控、仓位管理和风险控制系统；3.研发公司的投资管理系统并维护。</p>
									</div>
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="news-item margin-bottom-30px clearfix">
									<a href="#"><img src="assets/img/news/news3.png" class="img-responsive pull-left" alt="News Thumbnail"></a>
									<div class="right">
										<h3 class="news-title"><a href="#">人事/HR实习生 </a></h3>
										<p>【工作内容】1.执行人事相关工作；2.执行招聘工作流程，协调、办理员工招聘、入职、离职等手续；3.负责管理人力资源相关文件和档案等。</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					-->
				</div>
			</div>
		</section>
		<!-- END LATEST NEWS -->
		
		<!-- TESTIMONIAL -->
		<section id="testimoial-parallax" class="testimonial-with-bg parallax">
			<div class="container">
				<div class="testimonial slick-carousel">
					<div class="testimonial-container">
						<div class="testimonial-body">
							<p>We have three criteria: If it's publicly traded, liquid and amenable to modeling, we trade it.</p>
							<div class="testimonial-author">
								<img src="assets/img/800px-James_Simons_2007.jpg" alt="Author" class="pull-left">
								<span><span class="author-name">Jim Simons</span> <em>Founder and CEO of Renaissance Technologies</em></span>
							</div>
						</div>
						<div class="testimonial-body">
							<p>Markets are constantly in a state of uncertainty and flux and money is made by discounting the obvious and betting on the unexpected.</p>
							<div class="testimonial-author">
								<img src="assets/img/478px-George_Soros_47th_Munich_Security_Conference_2011_crop.jpg" alt="Author" class="pull-left">
								<span><span class="author-name">George Soros</span> <em>Chairman of Soros Fund Management</em></span>
							</div>
						</div>
						<div class="testimonial-body">
							<p>Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma - which is living with the results of other people's thinking. Don't let the noise of others' opinions drown out your own inner voice. And most important, have the courage to follow your heart and intuition.</p>
							<div class="testimonial-author">
								<img src="assets/img/9c16fdfaaf51f3de373a871497eef01f3a297931.jpg" alt="Author" class="pull-left">
								<span><span class="author-name">Steve Jobs</span> <em>Co-founder, Chairman, and CEO of Apple Inc.</em></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END TESTIMONIAL -->
		<!-- OUR CLIENTS -->
		<section class="clients">
			<div class="container">
				<h2 class="section-heading" style="font-family:Microsoft YaHei"><strong>合作伙伴</strong></h2>
				<ul class="list-inline list-client-logo" style="text-align:left">
					<li>
						<a href="#"><img src="assets/img/clients/20130628212726-699270308.jpg" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/20100629092751.jpg" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/12ZJ094aP-23M7.jpg" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/0021G4EDgy6YuBKQq0Sbe&690.png" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/cefc1e178a82b9018661c002728da9773912ef37.jpg" alt="logo"></a>
					</li>
					<!--
					<li>
						<a href="#"><img src="assets/img/clients/" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/.png" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/.png" alt="logo"></a>
					</li>
					-->
				</ul>
			</div>
		</section>
		<!-- END OUR CLIENTS -->
		<!-- CALL-TO-ACTION 
		<section class="call-to-action">
			<div class="container">
				<div class="pull-left">
					<h2 class="section-heading">联系我们</h2>
				</div>
				<div class="pull-right">
					<span>Email：contact@mingxifund.com </span>
				</div>
			</div>
		</section>
		<!-- END CALL-TO-ACTION -->
		<!-- FOOTER -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- COLUMN 1 -->
						<h2 class="footer-heading" style="font-family:Microsoft YaHei"><strong>明曦资本</strong></h2>
						
						
						
						<br>
						
						<!-- END COLUMN 1 -->
					</div>
					
					
					
					
					<div class="col-md-4">
						<!-- COLUMN 2 -->
						<address class="margin-bottom-30px">
							<ul class="list-unstyled">
								
								<li>联系电话: 0571-56570410</li>
								<li>&nbsp;&nbsp;</li>
								<li>联系邮箱: contact@mingxifund.com</li>
								<li>&nbsp;&nbsp;</li>
								<li>微信公众号：明曦资本</li>
							</ul>
						</address>
						<!-- END COLUMN 2 -->
						<!--
						<h3 class="footer-heading">USEFUL LINKS</h3>
						<div class="row margin-bottom-30px">
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li><a href="#">About Us</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Community</a></li>
									<li><a href="#">Career</a></li>
									<li><a href="#">Blog</a></li>
								</ul>
							</div>
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li><a href="#">Press Kit</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>
						
					</div>
					<div class="col-md-4">
						<!-- COLUMN 3 
						<div class="newsletter">
							<h3 class="footer-heading">NEWSLETTER</h3>
							<p>Get the latest update from us by subscribing to our newsletter.</p>
							<form class="newsletter-form" method="POST">
								<div class="input-group input-group-lg">
									<input type="email" class="form-control" name="email" placeholder="youremail@domain.com">
									<span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-spinner fa-spin"></i><span>SUBSCRIBE</span></button>
									</span>
								</div>
								<div class="alert"></div>
							</form>
						</div>
						<div class="social-connect">
							<h3 class="footer-heading">GET CONNECTED</h3>
							<ul class="list-inline social-icons">
								<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="googleplus-bg"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<!-- END COLUMN 3 -->
					</div>
					<div class="col-md-4">
						<!-- COLUMN 2 -->
						
						
						<img src="assets/img/qrcode_for_gh_e8e8bd0f13ba_430.jpg" height="150" width="150" class="img-responsive" alt="Image Intro">
						
						
						
						
						<!-- END COLUMN 2 -->
					</div>
				</div>
			</div>
			<!-- COPYRIGHT -->
			<div class="text-center copyright">
				&copy;2016 All Rights Reserved. 明曦（杭州）资产管理有限公司 浙ICP备16019070号-1
			</div>
			<!-- END COPYRIGHT -->
		</footer>
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPTS -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins/slick/slick.min.js"></script>
	<script src="assets/js/plugins/stellar/jquery.stellar.min.js"></script>
	<script src="assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script src="assets/js/repute-scripts.js"></script>
	
</body>

</html>