
<!DOCTYPE html>
<html lang="vi">
<head>

		<title>Facebook Inbox Manager</title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="Đọc tin nhắn với access token !">
		<meta name="keyword" content="đọc tin nhắn , read inbox , đọc tin nhắn không hiện đã xem ,đọc inbox , đọc ib , đọc tin nhắn facebook , hệ thống đọc tin nhắn , hệ thông inbox , Auto like, sub, share ,tools facebook" />
		<meta name="robots" content="index, follow">
		<meta property="og:description" content="Đọc tin nhắn với access token !">
		<meta property="og:title" content="Facebook Inbox Manager">
		<meta property="og:image" content="https://i.ytimg.com/vi/u5rq3eFcOm0/maxresdefault.jpg">
		<link rel="stylesheet" href="style.css">
		<link href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' rel='stylesheet'/>


				<!-- Bootstrap  -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-50865692-10', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
<body role="document">
<!-- Main -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">FB INBOX</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang chủ</a></li>
				<li><a href="?p=get-token"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Lấy token</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">

			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
<<div class="container">
<main>
<?php if ($_GET["p"] == "get-token") { ?>
<div class="jumbotron">
        <p>
        Muốn đọc được tin nhắn bạn phải có <strong>Access Token</strong>.
        </p>
        <p>
        <strong>Vậy Access Token là gì?</strong><br>
        Access Token là một giấy phép mà Facebook cấp cho chúng ta để lấy thông tin từ nó. Tùy quyền hạn bạn cho phép trong ứng dụng, ứng dụng đó có thể lấy được những thông tin cần thiết.
        </p>
        <p>
        <strong>Lấy Access Token bằng cách nào?</strong><br>
        Để lấy được Access token, bạn phải từng đăng nhập facebook trên điện thoại. Các hệ điều hành IOS(Iphone, Ipad), Android(Samsung, htc, lenovo...), Window Phone(Nokia...). 
        </p>
        <p>
        <strong>Access token quan trọng không?</strong><br>
        Access Token là thông tin <strong>quan trọng</strong> của người dùng facebook! Chúng tôi cần access token là để hỗ trợ giúp bạn sử dụng công cụ nhanh hơn.
        </p>
        <p>
        <strong>Điều khoản sử dụng tools?</strong><br>
        Nghiêm cấm bạn sử dụng vào mục đích trái pháp luật, spam, phá hoại cá nhân hoặc tổ chức khác, chúng tôi không khuyến khích bạn sử dụng tools vào việc đó.
        Chúng tôi không chịu bất kỳ trách nhiệm cho những thông tin và nội dung bạn nhập vào trang. 
        </p>
</div>
	<p>Nếu bạn đã từng đăng nhập Facebook trên hệ điều hành nào của di động thì bạn click vào nút tương ứng. Sau đó sẽ chuyển hướng qua 1 trang khác, bạn copy(ctrl+c) access token trong ô khoanh đỏ, rồi trở về trang này để sử dụng. </p>
	<div class="col-sm-8 col-sm-offset-2">
        <a ng-href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=6628568379" target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=6628568379"><button type="button" class="btn btn-primary">Access token IOS</button></a>
        <a ng-href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=350685531728" target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=350685531728"><button type="button" class="btn btn-success">Access token Android</button></a>
        <a ng-href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=118051694880531" target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=118051694880531"><button type="button" class="btn btn-info">Access token BlackBerry</button></a>
        <a ng-href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=138483919580948" target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=138483919580948"><button type="button" class="btn btn-warning">Access token Window Phone</button></a>
    </div>
	<div class="col-sm-8 col-sm-offset-2">
  	    <img src="get-access-token.jpg" width="100%" style="margin-bottom:20px">
    </div>
<?php } else { ?>	
	<div class="col-sm-12" >
	<h3>Đọc tin nhắn Facebook</h3>
	<hr/>
	<div class="input-group" >
	<span class="input-group-addon" ><span class="glyphicon glyphicon-lock" ></span></span>
	<input type="text" placeholder="Nhập token tại đây" id="access_token" class="form-control" />
	<div class="input-group-btn" >
	<button type="button" class="btn btn-default" id="ancms" ><span class="glyphicon glyphicon-log-in" ></span> ENTER</button>
	</div>
	</div>

	<div id="get-token">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
	        <a ng-href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=6628568379" target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=6628568379"><button type="button" class="btn btn-primary">Access token IOS</button></a>
	        <a ng-href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=350685531728" target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=350685531728"><button type="button" class="btn btn-success">Access token Android</button></a>
	        <a ng-href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=118051694880531" target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=118051694880531"><button type="button" class="btn btn-info">Access token BlackBerry</button></a>
	        <a ng-href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=138483919580948" target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=138483919580948"><button type="button" class="btn btn-warning">Access token Window Phone</button></a>
	    </div>
    </div>
    </div>
	<p></p>

	<div class="row" style="display:none">
	<div class="col-sm-4 ancms" >
	<div class="panel panel-default">
			<div class="panel-heading">
			<span class="glyphicon glyphicon-inbox" ></span> Inbox <div class="pull-right" ><span class="badge" id="countmsg" >0</span></div>
			</div>
			<div class="panel-body"  >
			<div class="input-group" >
			<input type="text" class="form-control" id="input_search" placeholder="Search...." />
			<div class="input-group-btn" >
			<button type="button" id="search" class="btn btn-default" ><span  class="glyphicon glyphicon-search" ></span></button>
			</div>
			</div>
						</div>
			<div class="list-group" >
			<div id="select" style="overflow-y: auto; max-height: 280px;" ></div>
			<div class="search-empty" style="display:none" ><span class="list-group-item"  ><b>Không có kết quả</b></span></div>
			</div>
			</div>
	</div>
	<div class="col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<span class="glyphicon glyphicon-user"></span> <span id="user_inbox" >{{user_inbox}}</span><div class="pull-right" ><span class="badge" id="ducan">{{inbox}}</span></div>
			</div>
			<ul class="list-group" >
			<div class="panel-body"  style="overflow-y: auto; max-height: 300px;">
			
			<div class="direct-chat-messages"  id="inbox_main" >
                  </div>
			</div>
			</ul>
			<div class="panel-footer">
				<button type="button" id="download"  class="btn btn-primary" >Save conversation </button>
				<div class="pull-right" >
				<button type="button" id="reload" class="btn btn-primary" >Reload</button>
				</div>
			</div>
		</div>
	</div>
</div> <!--/row-->
<?php } ?>
	</div>
</main>
</div>
<footer>
<div class="container">
<div class="col-md-6">
<p>© 2016</p>
</div>
<div class="col-md-6">
<ul class="list-socials">
<li><a href="#"><i class="ion-android-mail"></i></a></li>
<li><a href="#"><i class="ion-social-facebook"></i></a></li>
<li><a href="#"><i class="ion-social-twitter"></i></a></li>
<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
<li><a href="#"><i class="ion-social-youtube"></i></a></li>
</ul>
</div>
</div>
</footer>
<!-- Javascript -->
<script type="text/javascript" src="fb.js" ></script>
</body>
</html>