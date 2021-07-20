<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>后台系统管理</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font/iconfont.css">
		<style>
			body,html{
				height: 100%;
			}
			ul{
				list-style: none;
				margin: 0;
				padding: 0;
			}
			
			header{
				border-bottom: 1px solid #fff;
				line-height: 60px;
			}
			header.left{
				background-color: #001529;
			}
			aside.list{
				background-color: #001529;
				overflow-y: auto;
				padding:0;
				scrollbar-width: none;
			}
			nav{
				margin-top: 60px;
				
			}
			nav ul li>h6{
				line-height: 60px;
				margin-bottom: 0;
				padding-left:15px;
			}
			nav ul li i{
				padding-right:10px;
			}
		
			.collapse li{
				padding-left:30px;
				line-height: 60px;
			}
			.collapse li:hover{
				background-color: #aaa;
			}
			nav li.active{
				background-color: #1a86ee;
			}
			.right header{
				border-bottom: 1px solid #aaa;
			}
			.btn-tab{
				margin-top:60px;
				border-bottom: 1px solid #ccc;
				overflow-x: auto;
		
			}
			.btn-tab i{
				font-size: 12px;
				padding-left: 10px;
			}
		</style>
	</head>
	<body>
		<section class="container-fluid h-100">
			<div class="row h-100">
				<header class="left text-center text-white fixed-top col-md-2 mb-2 ">后台管理系统</header>
				<aside class="col-md-2 text-white h-100 list">
					
					<!-- 侧边栏导航开始 -->
					<nav>
						<ul>
							<li class="item" data-src="work"><h6><a>工作台</a></h6></li>
							<li>
								<h6 data-toggle="collapse" data-target=".data"><i class="iconfont icon-shujufenxi"></i>数据分析</h6>
								<ul class="collapse data">
									<li class="item" data-src="dataMain"><a><i class="iconfont icon-wenjian"></i>主控数据</a></li>
									<li class="item" data-src="dataController"><a><i class="iconfont icon-wenjian"></i>监控数据</a></li>
								</ul>
							</li>
							<li>
								<h6 data-toggle="collapse" data-target=".product"><i class="iconfont icon-wenjianbao"></i>产品管理</h6>
								<ul  class="collapse product">
									<li class="item" data-src="productDoing"><a><i class="iconfont icon-wenjian"></i>在售产品</a></li>
									<li class="item" data-src="productWait"><a><i class="iconfont icon-wenjian"></i>待上架产品</a></li>
									<li class="item" data-src="productOff"><a><i class="iconfont icon-wenjian"></i>已下架产品</a></li>
									<li class="item" data-src="productClass"><a><i class="iconfont icon-wenjian"></i>产品分类</a></li>
								</ul>
							</li>
							<li>
								<h6 data-toggle="collapse" data-target=".buju"><i class="iconfont icon-buju"></i>布局控制</h6>
								<ul  class="collapse buju">
									<li class="item" data-src="bujuAd"><a><i class="iconfont icon-wenjian"></i>广告</a></li>
									<li class="item" data-src="bujuCarousel"><a><i class="iconfont icon-wenjian"></i>首页轮播图</a></li>
									<li class="item" data-src="bujuWord"><a><i class="iconfont icon-wenjian"></i>关键词</a></li>
									<li class="item" data-src="bujuNotice"><a><i class="iconfont icon-wenjian"></i>公告</a></li>
								</ul>
							</li>
							<li>
								<h6 data-toggle="collapse" data-target=".controller"><i class="iconfont icon-svg-"></i>营销控制</h6>
								<ul  class="collapse controller">
									<li class="item" data-src="seckillTime"><a><i class="iconfont icon-wenjian"></i>秒杀时间段</a></li>
									<li class="item" data-src="seckillProduct"><a><i class="iconfont icon-wenjian"></i>秒杀产品</a></li>
									<li class="item" data-src="specialZone"><a><i class="iconfont icon-wenjian"></i>特色专区</a></li>
									<li class="item" data-src="selectedClass"><a><i class="iconfont icon-wenjian"></i>精选分类</a></li>
								</ul>
							</li>
							<li>
								<h6 data-toggle="collapse" data-target=".cardManage"><i class="iconfont icon-qiaquanguanli"></i>卡券管理</h6>
								<ul  class="collapse cardManage">
									<li class="item" data-src="coupon"><a><i class="iconfont icon-wenjian"></i>优惠券</a></li>
									<li class="item" data-src="coupon"><a><i class="iconfont icon-wenjian"></i>优惠券列表</a></li>
								</ul>
							</li>
							<li class="item" data-src="user">
								<h6><a><i class="iconfont icon-yonghu"></i>个人中心</a></h6>
							</li>
						</ul>
					</nav>
					<!-- 侧边栏导航结束 -->
				</aside>
				<article class="col-md-10 right">
					<header class="d-flex offset-md-2 justify-content-between fixed-top pl-2 pr-2 bg-white">
						<div class="pos">首页 / 工作台</div>
						<div class="user">admin</div>
					</header>
					<section>
						<div class="btn-tab p-2">
							<!-- 添加标签页 -->
						</div>
						<div id="content">
							<!-- 具体内容 -->
						</div>
					</section>
				</article>
			</div>
		</section>
		
		
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			$(function(){
				// 存储已经打开的标签页
				var tabList=[];
				
				// 存储当前状态的索引值
				var index;
				
				// 给侧边栏绑定点击事件
				$("nav .item").click(function(){
					var _self=$(this)
					// 设置当前导航样式
					navActive(_self);
					
					// 添加标签页
					var loadSrc=_self.attr("data-src");
					var txt=_self.text();
					var parentTxt=_self.parent().prev().text();
					if(tabList.indexOf(txt)==-1){
						// 移除当前标签页样式
						$(".btn-tab button").removeClass("btn-primary").addClass("btn-outline-secondary");
						// 添加标签页
						var str='<button class="btn btn-sm btn-primary mr-1 " data-parent="'+parentTxt+'" data-src="'+loadSrc+'">'+txt+'<i class="iconfont icon-guanbi"></i></button>';
						$(".btn-tab").append(str);
						tabList.push(txt);
						index=tabList.length-1;
						
					}else{
						// 添加当前标签页样式
						var el=$(".btn-tab button").eq(tabList.indexOf(txt));
						tabActive(el);
						index=tabList.indexOf(txt);
					}
					// 加载页面
					loadPage(loadSrc,txt,parentTxt);
					
				})
				
				// 给标签页绑定事件
				$(".btn-tab").on('click','button',function(){
					// 给标签页添加样式
					tabActive($(this));
					// 给当前导航添加样式
					navItem($(this));
					index=$(this).index();
					// 加载指定页面
					loadPage($(this).attr("data-src"),$(this).txt,$(this).attr("data-parent"));
				})
				
				// 给标签页的关闭按钮绑定事件
				$(".btn-tab").on('click','i',function(e){
					// 阻止冒泡
					e.stopPropagation();
					
					var i=$(this).parent().index();
					var preEl;
					
					
					// 判断当前需要关闭的标签页是否是现在已经打开的标签页
					if(i==index){
						preEl=$(this).parent().prev();
						tabActive(preEl);
						index--;
						// 点亮对应导航
						navItem(preEl);
						// 加载指定页面
						loadPage(preEl.attr("data-src"),preEl.text(),preEl.attr("data-parent")); 
					}
					// 移除标签页
					$(this).parent().remove();
					// 把数组中存储的数据移除
					tabList.splice(i,1);
				})
			})
			
			// 当前导航样式
			function navActive(el){
				if(el.parents("li").length){
					el.addClass("active").siblings().removeClass("active").parents("li").siblings().removeClass("active").find("li").removeClass("active");
				}else{
					el.addClass("active").siblings().removeClass("active").find("li").removeClass("active");
				}	
			}
			
			// 给标签页添加样式
			function tabActive(el){
				el.addClass("btn-primary").removeClass("btn-outline-secondary").siblings().addClass("btn-outline-secondary").removeClass("btn-primary");
			}
			
			
			// 遍历左侧导航
			function navItem(el){
				console.log(el.text());
				$("nav .item").each(function(){
					if($(this).text()==el.text()){
						navActive($(this));
					}
				})
			}
			
			// 加载指定页面
			function loadPage(loadSrc,txt,parentTxt){
				if(parentTxt){
					$(".pos").html('首页 / '+ parentTxt +' / '+txt);
				}else{
					$(".pos").html('首页 /'+txt);
				}
				$("#content").load(loadSrc+".html");
			}
		</script>
	</body>
</html>
