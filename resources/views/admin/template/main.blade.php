<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		<title>
			QuetzalEdu | @yield('title', 'Default') 
		</title>
		<link rel="icon" href="{{asset('img/favicon.png')}}"/>
	    <link rel="stylesheet" href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}"/>
	    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
	    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
	    <link rel="stylesheet" href="{{asset('css/fileinput.min.css')}}"/>
	</head>
<body>
	@include('admin.template.partials.nav')
	@yield('section')
	@include('flash::message')
	<script src="{{asset('jquery-3.1.1/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/fileinput.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>

	

    <script type="text/javascript">

   $('#flash-overlay-modal').modal();

   $("#informacion").fileinput({

	showUpload: false,
			
			});

   $("#video").fileinput({

	showUpload: false,
			
			});

   $("#actividades").fileinput({

	showUpload: false,
			
			});

    $("#mochila").fileinput({

	showUpload: false,
			
			});

  	</script>

	<!-- livezilla.net code -->
		<script type="text/javascript" id="7d00d1a6ace747e1ffac6af0bed7c229" src="http://localhost/livez/livezilla/script.php?id=7d00d1a6ace747e1ffac6af0bed7c229"></script>
	<!-- http://www.livezilla.net -->

</body>
</html>