<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Esus.net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap-combined.no-icons.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css">
    <link rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fsocial-buttons.css">    
    <script src="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fjquery.js"></script>
    <script src="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,800" 
          rel="stylesheet" type="text/css">
    <style type="text/css">

      /* Large desktop */
      @media (min-width: 980px) { 
        body {
         padding-top: 60px;
        }
       .linediv-l {
         border-right: 1px white solid;
        }
       .linediv-r {
         border-left: 1px white solid;
       }
      }

      /* Landscape phones and down */
      @media (max-width: 480px) { 
       .copy {
         padding: 2.5% 10%;
       }
       .linediv-l {
         border-bottom: 1px white solid;
       }
       .linediv-r {
         border-top: 1px white solid;
       }
      }

      /* All form factors */

      /* Main body and headings */
      body{
        font-family: 'Open Sans', Helvetica, Arial, sans-serif;
      }
      .heading, .subheading {
        font-family: 'Ubuntu', Helvetica, Arial, sans-serif;
        text-align: center;
      }
      p.lead {
        padding-top: 1.5%;
        font-size: 24px;
        line-height: 30px;
      }
      p {
        font-size: 18px;
        line-height: 24px;
      }

      /* Video pitch and Action */
      .pitch {
        padding: 2.5% 0%;
      }
      .order {
        padding: 2% 0%;
      }
      .actions {
        background-color: #343434;
        padding: 3% 0%;
      }
      .video, .thermometer, .order, .social, .statistics {
        text-align: center;
      }
      .statistics h3, .statistics p {
        color: white;
      }

      /* Marketing Copy and Footer */
      .copy {
        padding-top: 2.5%;
        padding-bottom: 2.5%;
        text-align: justify;
      }
      .asset {
        padding: 2.5% 0%;
      }
      .footer {
        color: #cccccc;
        text-align: center;
      }
      .footer p {
        font-size: 11px;
      }
      .footer a {
        color: #ccccff;
      }
	   /* http://support.addthis.com/customer/portal/questions/1136093-share-buttons-in-center-	position */      
	 div.addthis_toolbox {
	  width:180px;
	  margin: 0 auto;
	 }
    </style>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-43159735-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
		<script type="text/javascript">
		//<![CDATA[
		function googleTranslateElementInit() {
		new google.translate.TranslateElement({pageLanguage: 'es'}, 'google_translate_element');
		}
		//]]>
		</script> <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript">
	</script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar"
                  data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.html"><b>Esus</b></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
			<li><a href="project.html">Proyecto</a></li>
			<li><a href="marginalized.html">Comunidades Marginadas</a></li>
              <li><a href="employment_exchange.html">Bolsa de trabajo</a></li>
              <li><a href="contact.html">Contacto</a></li>
			  <li><a href="donate.html">Donar</a></li>
            </ul>
			<div align="right" id="google_translate_element"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row-fluid heading">
        <div class="span12">
          <h1>Esus</h1>
        </div>
      </div> 
      <div class="row-fluid subheading">
        <div class="span12">
          <p class="lead">Cada paso, una nueva conciencia</p>
        </div>
      </div>
	  <div align="center">
		     <form class="form-horizontal">
<fieldset>

<?php

    $contactName = $_POST["nombre"];
    $contactEmail = $_POST["correo"];
	$contactList= $_POST["radios"];
	$contactComment= $_POST["comentario"];
	
	if (isset($contactName) && !empty ($contactName) && isset($contactEmail) && !empty ($contactEmail)  && isset($contactComment) && !empty ($contactComment)  )
	{
		$server= "mysql1.000webhost.com";
		$db= "a1524199_DBCONT";
		$user="a1524199_ADAM";
		$pw= "tro_lazo1";
		
		$con =  mysql_connect( $server,$user,$pw) or die("fallo autenticacion");
		mysql_select_db($db,$con) or die("error de conexion");
		mysql_query("INSERT INTO  TBL_CONTACTO (
                CNOMBRE,
                CCORREO,
                BLISTA,
				CCOMENTARIO
            ) values ( '$contactName', '$contactEmail', '$contactList', '$contactComment' )");
		    mysql_close($con);
	}
	else
	{
		echo "Error en captura de datos";
	}
    


?>
	<p>tu opinión será tomada en cuenta y esperamos responderla en menos de 24 horas.
	        <div align="center">
			<img class="img-polaroid" alt="Placeholder" src="img/photo5.jpg" >
		</div>
      <div class="row-fluid footer">
        <div class="span12">
          <p>Este trabajo está publicado sobre la licencia de
            <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC
              By-SA 3.0
            </a>Desarrollo Nómada
            </p>
        </div>
      </div>
    </div>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43159735-1', 'net63.net');
  ga('send', 'pageview');

</script>
  </body>
</html>