<!doctype html>
<!--[if IE 7]>    <html class="ie7" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="ie8" lang="en-US"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-US"> <!--<![endif]-->

    <!-- Mirrored from healthpress.inspirythemes.com/contact-us/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 22 Jul 2013 03:12:24 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <? include 'head.php'; ?>
    <body class="page page-id-88 page-template page-template-template-contact-php">				

        <!-- Starting Website Wrapper -->
        <div id="wrapper">

            <!-- Starting Header of the website -->
            <header id="header">
                <?
                include 'topo.php';
                include 'menu.php';
                ?>
            </header><!-- ending of header of the website -->                        
            <hgroup class="page-head">                        		

                <h1>Contate-<span>nos</span></h1>
            </hgroup>

            <div id="container" class="clearfix">

                <div id="content">

                    <div class="map-container clearfix">

                        <div id="map_canvas"></div>

                        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
                        <script type="text/javascript">

                            function initialize()
                            {
                                var geocoder = new google.maps.Geocoder();
                                var map;
                                var latlng = new google.maps.LatLng(-22.987852956736802, -43.36054130000002);
                                var infowindow = new google.maps.InfoWindow();
                                var myOptions = {
                                    zoom: 17,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };

                                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                                geocoder.geocode({'location': latlng},
                                function(results, status) {
                                    if (status == google.maps.GeocoderStatus.OK)
                                    {
                                        map.setCenter(results[0].geometry.location);
                                        var marker = new google.maps.Marker({
                                            map: map,
                                            position: results[0].geometry.location
                                        });
                                    }
                                    else
                                    {
                                        alert("Geocode was not successful for the following reason: " + status);
                                    }
                                });

                            }

                            initialize();

                        </script>
                    </div>
                    <address>
                        Av João Cabral de Melo Neto, 610 sala 1.305 Península | Barra da Tijuca | <br>
                        CEP 22775-057 Rio de Janeiro-RJ
                        <br>											</address>
                </div>

                <aside id="sidebar">
                    <section class="widget"><h3 class="title">Contato</h3>        <div class="contact-widget">
                            <p>
                                <strong>Telefones :</strong> 21 - 3311-5287 | 21 - 9530-5872<br/>
                            </p>
                            <hr/>
                            <p>
                                <a href="mailto:contato@espacomedicopeninsula.com">contato@espacomedicopeninsula.com</a>
                        </div>        
                    </section>									
                </aside>                                

            </div><!-- end of container -->

             <? include 'footer.php'; ?>

    </body>

    <!-- Mirrored from healthpress.inspirythemes.com/contact-us/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 22 Jul 2013 03:12:25 GMT -->
</html>	  

