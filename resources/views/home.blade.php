<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Site name</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling.css" rel="stylesheet">


</head>

<body>

<!-- Intro Section -->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/img.jpg">
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Intro Section</h1>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Gallery Section -->
<section id="gallery" class="gallery-section">
    <div class="container">


        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>


            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-12">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 thumb">
                        <gem>
                            <a class="thumbnail" href="#">
                                <img class="img-responsive animation-element" src="http://placehold.it/400x300" alt="">
                                <img class="cat-icon appear" src="http://i.imgur.com/imG6TE2.png">
                            </a>
                        </gem>
                    </div>






                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>About Section</h1>
            </div>
        </div>
    </div>
</section>


<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/parallax.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script>
    $( ".thumb gem" ).hover(
            function() {
                // Fade cat icon in on hover, at 200ms to opacity 1
                $(this).find('.cat-icon').fadeTo(200, 1);
            }, function() {
                // Fade cat icon out when hover leaves, at 200ms to opacity 0
                $(this).find('.cat-icon').fadeTo(200, 0);
            }
    );

</script>


<!--Animation-->
<script>
    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {1
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position+$window.height()*0.1) &&
                    (element_top_position <= window_bottom_position-$window.height()*0.1)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
</script>



<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="240.75px" height="188px" viewBox="0 0 240.75 188" enable-background="new 0 0 240.75 188" xml:space="preserve">
<path class="path" fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M60.75,41.25C112,37.5,189.5,37.5,189.5,51.25
	s-20,35-26.25,38.75S112,123.75,124.5,125s15,30,15,30s-36.25,11.25-51.25,5s-52.5-52.5-35-56.25s45-3.75,45-3.75S47,78.75,42,75
	S60.75,41.25,60.75,41.25z"/>
</svg>



<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="340px" height="333px" viewBox="0 0 340 333" enable-background="new 0 0 340 333" xml:space="preserve">

  <path class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M66.039,133.545c0,0-21-57,18-67s49-4,65,8
    s30,41,53,27s66,4,58,32s-5,44,18,57s22,46,0,45s-54-40-68-16s-40,88-83,48s11-61-11-80s-79-7-70-41
    C46.039,146.545,53.039,128.545,66.039,133.545z"/>

</svg>





<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="841.89px" height="1190.55px" viewBox="0 0 841.89 1190.55" enable-background="new 0 0 841.89 1190.55"
     xml:space="preserve">

<path class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M257.396,786.915c15.921-0.058,32.812-2.366,48.392,1.798c-0.582-1.025-1.164-2.051-1.746-3.076
			c-1.951,12.079-12.697,21.061-24.234,23.736c-4.816,1.117-10.37,0.726-14.183-2.699c-4.996-4.486-4.627-12.459-3.842-18.485
			c0.416-3.19-4.589-3.15-5,0c-0.982,7.538-0.52,15.653,4.823,21.541c4.27,4.704,11.267,5.753,17.253,4.867
			c13.961-2.067,27.691-13.311,30.004-27.63c0.216-1.337-0.325-2.695-1.746-3.076c-16.063-4.293-33.315-2.035-49.721-1.976
			C254.173,781.927,254.171,786.927,257.396,786.915L257.396,786.915z"/>

    <path class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M272.219,817.752c3.728,7.144,4.608,16.23,0.093,23.246c-5.492,8.533-12.249-1.533-14.644-6.901
			c-1.312-2.94-5.619-0.395-4.317,2.523c3.72,8.34,12.322,17.675,21.18,9.474c8.273-7.659,6.687-21.896,2.005-30.865
			C275.044,812.369,270.729,814.897,272.219,817.752L272.219,817.752z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M274.486,849.864c5.377,0.848,10.818,1.267,15.842-1.196c5.126-2.513,7.151-8.543,7.988-13.758
			c0.506-3.153-4.312-4.507-4.821-1.33c-0.673,4.193-1.784,8.508-5.691,10.771c-3.426,1.984-8.3,1.273-11.989,0.691
			C272.662,844.545,271.309,849.362,274.486,849.864L274.486,849.864z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M325.321,775.595c51.315-0.339,97.579-29.849,149.056-28.302c3.227,0.097,3.217-4.903,0-5
			c-51.542-1.549-97.767,27.963-149.056,28.302C322.098,770.616,322.096,775.616,325.321,775.595L325.321,775.595z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M325.44,784.296c12.201,11.757,29.063,15.758,43.902,23.032c2.883,1.414,5.418-2.897,2.523-4.316
			c-14.381-7.052-31.079-10.87-42.891-22.251C326.654,778.523,323.114,782.056,325.44,784.296L325.44,784.296z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M323.162,802.658c9.677,13.236,22.785,23.027,34.354,34.468c2.293,2.269,5.831-1.266,3.535-3.535
			c-11.232-11.108-24.177-20.606-33.571-33.456C325.598,797.561,321.256,800.051,323.162,802.658L323.162,802.658z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M239.193,761.249c-48.887-7.788-98.282-13.223-147.834-13.296c-3.225-0.005-3.224,4.995,0,5
			c49.104,0.072,98.059,5.399,146.505,13.118C241.017,766.573,242.37,761.756,239.193,761.249L239.193,761.249z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M232.868,774.368c-28.352,0.087-56.554,3.687-84.906,3.773c-3.224,0.01-3.225,5.01,0,5
			c28.352-0.087,56.554-3.687,84.906-3.773C236.092,779.358,236.093,774.358,232.868,774.368L232.868,774.368z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M242.302,791.35c-27.939,0.294-53.709,12.683-79.91,20.843c-3.068,0.956-1.758,5.783,1.329,4.822
			c25.728-8.014,51.15-20.377,78.581-20.665C245.524,796.315,245.527,791.315,242.302,791.35L242.302,791.35z"/>

    <path class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M234.755,696.35c3.224,0,3.224-5,0-5S231.531,696.35,234.755,696.35L234.755,696.35z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M351.736,703.896c3.224,0,3.224-5,0-5S348.512,703.896,351.736,703.896L351.736,703.896z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M206.725,598.885c7.464-9.696,10.926-21.444,15.346-32.673c-1.224,0.498-2.448,0.996-3.672,1.494
			c11.119,5.867,19.278,16.965,23.379,28.694c1.057,3.023,5.889,1.723,4.821-1.329c-4.518-12.922-13.399-25.205-25.677-31.683
			c-1.539-0.812-3.07-0.037-3.672,1.494c-4.271,10.849-7.631,22.111-14.842,31.479C200.44,598.916,204.787,601.401,206.725,598.885
			L206.725,598.885z"/>

    <path	class="path" fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" d="M357.277,605.051c9.425-9.506,18.047-19.751,26.416-30.189c-1.178,0-2.357,0-3.535,0
			c13.214,13.43,23.454,30.127,29.545,47.955c1.037,3.032,5.867,1.73,4.821-1.33c-6.375-18.655-16.996-36.098-30.832-50.16
			c-0.877-0.892-2.687-1.059-3.535,0c-8.369,10.437-16.991,20.683-26.416,30.189C351.47,603.807,355.004,607.343,357.277,605.051
			L357.277,605.051z"/>

</svg>




</body>

</html>
