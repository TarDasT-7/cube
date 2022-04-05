<script src="{{asset("site/js/jquery-3.5.1.min.js")}}"></script>
<script src="{{asset("site/js/popper.min.js")}}"></script>
<script src="{{asset("site/js/bootstrap.min.js")}}"></script>
<script src="{{asset("site/js/bootstrap-select.js")}}"></script>
<script src="{{asset("site/js/main_js.js")}}"></script>
<script src="{{asset("site/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("site/js/video.min.js")}}"></script>
<script>
    $(document).ready(function() {
        var owl = $('.vbvc');
        owl.owlCarousel({
            rtl:true,
            items:1,
            nav:true,
            navText: ['<svg class="navsvg" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>','<svg class="navsvg" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>'],
            margin:0,
            loop: true,
            autoplay:false,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,

        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    })
</script>
<script>
    // global vars
    var winWidth = $(window).width();
    var winHeight = $(window).height();

    // set initial div height / width
    $('img.sl_blogimg').css({

        'height': winHeight - 150,
    });


    // make sure div stays full width/height on resize
    $(window).resize(function(){
        $('img.sl_blogimg').css({

            'height': winHeight,
        });

    });
</script>
<script>

    $(document).ready(function() {
        var owl = $('.educts_vidtxtsl');
        owl.owlCarousel({
            rtl:true,
            items:1,
            nav:false,
            navText: ['<svg class="navsvg" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>','<svg class="navsvg" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>'],
            loop: true,
            margin:0,
            autoplay:true,
            autoplaySpeed:1200,
            autoplayTimeout:3000,
            autoplayHoverPause: true,

        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    })
</script>
<script>

    $(document).ready(function() {
        var owl = $('.sp_offers_crl');
        owl.owlCarousel({
            rtl:true,
            items:4,
            nav:true,
            navText: ['<svg class="navsvg_sl_spoff" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>','<svg class="navsvg_sl_spoff" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>'],
            loop: true,
            margin:15,
            autoplay:false,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    })
</script>
<script>

    $(document).ready(function() {
        var owl = $('.pdcst_slcont');
        owl.owlCarousel({
            rtl:true,
            items:5,
            nav:true,
            navText: ['<svg class="navsvg_sl_spoff" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>','<svg class="navsvg_sl_spoff" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>'],
            loop: true,
            margin:15,
            autoplay:false,
            slideBy:5,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    })
</script>
<script>

    $(document).ready(function() {
        var owl = $('.pckg_sl');
        owl.owlCarousel({
            rtl:true,
            items:4,
            nav:true,
            navText: ['<svg class="navsvg_sl_spoff" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>','<svg class="navsvg_sl_spoff" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>'],
            loop: true,
            margin:15,
            autoplay:false,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    })
</script>

<!--	<script>
		var player = videojs("my-player" ,
			{ "preload": "none"

			});
	  </script>-->
<script>
    (function(){

        var videos = document.getElementsByTagName('video');

        for(i=0;i<videos.length;i++) {
            var video = videos[i];
            if(video.className.indexOf('video-js') > -1) {
                videojs(video.id).ready(function(){
                    var player = this;
                });
            }
        }
    })();


</script>
