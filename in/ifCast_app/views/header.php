<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	
	<?php if(isset($sitePageName))
            {
                echo $sitePageName;
            }
            else
            {
                echo 'iFCast - Job Portal & Consultancy Services';
            } 
        ?>
	
	</title>

	<meta name="description" content="<?php if(isset($sitePageDescription)){ echo $sitePageDescription; } else{ echo 'iFCast - Job Portal & Consultancy Services'; } 
        ?>">
 	<meta name="keywords" content="HTML,CSS,XML,JavaScript">



	 <meta property="og:url"  content="https://www.ifcast.com/" />
	 <meta property="og:type" content="Website" />
	 <meta property="og:title" content="iFCast - Best Online Job Search Portal in India" />
	 <meta property="og:description" content="With iFCast, dreamers and enablers can search for millions of Online Job Vacancies and Resumes. Use various features and tools to search for the best hires and jobs to help employers and job seekers at every step of the way with the best online job search portal in India." />
	 <meta property="og:image" content="https://www.ifcast.com/in/assets/images/ifcast-logo.svg" />


	 <meta name="twitter:card" content="summary" />
	 <meta name="twitter:site" content="@Ifcast1" />		
	 <meta name="twitter:creator" content="@Ifcast1" />
	 <meta property="og:url" content="https://www.ifcast.com/" />
	 <meta property="og:title" content="iFCast - Best Online Job Search Portal in India" />
	 <meta property="og:description" content="With iFCast, dreamers and enablers can search for millions of Online Job Vacancies and Resumes. Use various features and tools to search for the best hires and jobs to help employers and job seekers at every step of the way with the best online job search portal in India." />
	 <meta property="og:image" content="https://www.ifcast.com/in/assets/images/ifcast-logo.svg" />




	<base href="<?php echo BASE_PATH; ?>" >
	<link rel="icon" href="<?php echo BASE_PATH; ?>"assets/images/ifcast-logo-color.png" type="image/gif" sizes="16x16">


	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="assets/css_old/jquery.dataTables.min.css" />
	<!--<link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css" /> -->


	<!-- <link rel="stylesheet" href="assets/css/ifcast-stylesheet.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="assets/css/ifcast-stylesheet-animation.css?v=<?php echo time(); ?>"> -->



	<!-- <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css"> -->
		
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css">	
	



	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet">   
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">  
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.css" rel="stylesheet">  
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">  

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/et-line.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/plyr.css" />
    <link rel="stylesheet" href="assets/css/flag.css" />
    <link rel="stylesheet" href="assets/css/slick.css" /> 
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.nstSlider.min.css" />

    <!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">
	

	

    <script src="assets/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.js"></script> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script> 
       

	<!-- <script src="assets/js/libs/dropzone-4.3.0.min.js"></script>
	<script src="assets/js/libs/ckeditor/ckeditor.js"></script> -->
	<script src="assets/js_old/libs/jquery.dataTables.min.js"></script>  

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132831158-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-132831158-1');
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "iFCast",
  "url": "https://www.ifcast.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.ifcast.com/in/login{search_term_string}https://www.ifcast.com/in/recruiter/login",
    "query-input": "required name=search_term_string"
  }
}
</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5e2eda64daaca76c6fd00aec/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<a style="color: white; position: fixed; bottom: 30px; left: 30px;width:60px;height:60px;" href="https://api.whatsapp.com/send?phone=919130060061&amp;text=Hi%20I%20am%20Interested%20to%20know%20more">
	<img src="<?php echo base_url(); ?>assets/images/whatsapp.svg" alt="">
</a>
  <script>
	  new WOW().init();
  </script>


	<style>
.loader{
	display:none;
}

.err {
	color: #d80f0f;
	font-size: 12px;
	font-weight: 400;
	display: none;
	font-style: italic;
}

.error {
	background-color: #f2dede;
	border-color: #e4aeb6 !important;
	color: #a94442;

	padding: 15px;
	padding-top: 10px;
	padding-right: 15px;
	padding-bottom: 10px;
	padding-left: 15px;
	margin-bottom: 20px;
	border: 1px solid transparent;
	border-radius: 4px;

	font-size: 12px;
	font-weight: bold;
	display: none;
}

.success {
	background-color: #b0f8b7;
	border-color: #8af09c !important;
	color: #0a9507;

	padding: 15px;
	padding-top: 10px;
	padding-right: 15px;
	padding-bottom: 10px;
	padding-left: 15px;
	margin-bottom: 20px;
	border: 1px solid transparent;
	border-radius: 4px;

	font-size: 12px;
	font-weight: bold;
	display: none;
}


</style>

    </head>


	<body>
	<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-12 p-0 mt-0">
				<div class="ifcast-style-reg-header-1" id="myHeader">
					<div class="container">
		               
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<?php 
	load_menus();
?>
</body>




<script>
var base_url = "<?php echo base_url(); ?>";    
function check_fileType(id, fileType)
{
	$(".err").stop().fadeOut();
	switch(fileType)
	{
		case 'doc': var ext = $('#'+id).val().split('.').pop().toLowerCase();
					if($.inArray(ext, ['doc','pdf','docx']) == -1) {

						$('#err_'+id).html("&#9888 Oops, selected file must be in 'doc','pdf','docx' formats");
						$("#err_"+id).fadeIn(1000);

						$('#'+id).val('')    		

					}
					break;
					
					
		case 'img': var ext = $('#'+id).val().split('.').pop().toLowerCase();
					if($.inArray(ext, ['jpeg','jpg','png','gif']) == -1) {

						$('#err_'+id).html("&#9888 Oops, selected file must be in 'jpeg','jpg','png','gif' formats");
						$("#err_"+id).fadeIn(1000);

						$('#'+id).val('')    		

					}
					break;
	}
		
}
    

</script>

