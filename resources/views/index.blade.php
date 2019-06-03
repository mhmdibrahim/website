<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" />
	<meta name="author" content="">
	<title>HIMU - OnePage HTML Parallax template</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/prettyPhoto.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	{{--<link href="/css/font-awesome.min.css" rel="stylesheet">--}}
	<link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script>
	<script src="/js/respond.min.js"></script> <![endif]-->
	<link rel="shortcut icon" href="images/ico/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner">
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation">
<!--/navbar-->
@include('sections.navigation')
	</header> <!--/#navigation-->

<!-- slider section !-->
@include('sections.slider')

<!--/#about-us-->
@include('sections.about-us')

<!--/#service-->
@include('sections.service')

<!--/#Our-Team-->
@include('sections.our-team')
<!--/#portfolio-->
@include('sections.portofolio')
<!--/#clients-->
@include('sections.clients')
 <!--/#blog-->
@include('sections.blog')
 <!--/#contact-->
@include('sections.contact')

	<footer id="footer">
		<div class="container">
			<div class="text-center">
				<p>Copyright &copy; 2014 - <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p>
			</div>
		</div>
	</footer> <!--/#footer-->

	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/smoothscroll.js"></script>
	<script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="/js/jquery.parallax.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).on("click","#send_message",function () {
            var email=$('#email').val();
            var name=$('#name').val();
            var message =$('#message').val();
            var fd = new FormData();
            fd.append('_token',$("input[name='_token']").val());
            fd.append('email',email);
            fd.append('name',name);
            fd.append('message',message);
            alert(fd);
            $.ajax({
                url: "/",
                type:'POST',
                contentType: false,
                processData: false,
                data: fd,
                success: function(data) {
                    if(data.success){
                        swal("Done", data.success, "success");
                        $('#name').val('');
                        $('#email').val('');
                        $('#message').val('');
                    }
                },
            });

        });

    </script>
    <script type="text/javascript">



//		  $(document).on("click","#send_message", function (e) {
//		    var name =$('#name').val();
//		    var email =$('#email').val();
//		    var message =$('#message').val();
//
//		    $.ajax({ type: 'POST',
//                     url: "message.php",
//                     data: {name :name ,email:email, message:message}
//                  }).done(function (data) {
//		                alert(data);
//		             });
//                   e.preventDefault();
//              });



// var data = {name:"name" ,email:"email", message:"message"};
//        $.post("message.php",data,function(response){
// 		 	 // $('#result').html(data);
// 		       alert(response);
// 		 	});


//});
	</script>


</body>
</html>
