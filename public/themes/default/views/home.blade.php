@extends('default::layout/layout')

@section('content')
<!-- page content -->
<main id="adds" class="page-content no-bottom-padding">
    <!-- post1 -->
    <section id="post1" class="page-content">
        <div class="grid-row composer">
            <div class="columns-row">
                <div class="columns-col columns-col-6">
                    <h1 class="wow fadeInLeft animated" data-wow-duration="1s">Retina Ready<br /> <span class="colored">&amp; Fully Responsive</span></h1>
                    <p class="wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">"the 8" provides responsive and flexible layout. All pages look identically great regardless of the device’s resolution and pixel density.</p>
                </div>
                <div class="columns-col columns-col-6">
                    <div class="wysiwyg picture-cont">
                        <img class="wow fadeInLeft animated iphone" alt="" data-wow-duration="0.5s" data-wow-delay="0.2s"  src="{{ Theme::asset('default::pic/slider/iphone.png') }}">
                        <img class="wow fadeInRight animated ipad" alt="" data-wow-duration="0.5s" data-wow-delay="0.2s"  src="{{ Theme::asset('default::pic/slider/ipad.png') }} ">
                        <img class="wow fadeInRight animated ipad-shadow" alt="" data-wow-duration="0.5s" data-wow-delay="0.2s" src="{{ Theme::asset('default::pic/slider/ipad-shadow.png') }} ">
                        <img class="wow fadeIn animated macbook" alt="" data-wow-duration="1.0s"  src="{{ Theme::asset('default::pic/slider/macbook.png') }} ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /post1 -->
    <!-- post2 -->
    <section id="post2" class="page-content-alt">
        <div class="grid-row composer">
            <div class="columns-row">
                <div class="columns-col columns-col-6">
                    <div class="wysiwyg picture-cont">
                        <img class="wow fadeIn animated ipad" alt=""  data-wow-duration="0.7s" data-wow-delay="0.3s" src="{{ Theme::asset('default::pic/slider/2post/ipad.png') }}">
                        <img class="wow fadeInDown animated ipad-image" alt="" data-wow-delay="0.6s" data-wow-duration="0.5s"  src="{{ Theme::asset('default::pic/slider/2post/ipad-image.png') }}">
                        <img class="wow fadeInDown animated ipad-screan" alt="" data-wow-delay="0.9s" data-wow-duration="0.5s"  src="{{ Theme::asset('default::pic/slider/2post/ipad-screan.png') }}">
                    </div>
                </div>
                <div class="columns-col columns-col-6">
                    <h1 class="wow fadeInRight animated" data-wow-duration="1s" >Parallax Effect<br /> <span class="colored">Sections</span></h1>
                    <p class="wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1s" >"the 8" includes Parallax Effect sections. This makes the website look more attractive and creative. Perfect solution that suits your needs!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /post2 -->
    <!-- post3 -->
    <section id="post3" class="page-content">
        <div class="grid-row composer">
            <div class="columns-row">
                <div class="columns-col columns-col-6">
                    <h1 class="wow fadeInLeft animated" data-wow-duration="1s" >Extensive<br /> <span class="colored">Style Options</span></h1>
                    <p class="wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">"the 8" utilizes a color picker to let you dynamically change stylesheet color settings. Take a look and make a choice – create YOUR OWN color scheme within a few seconds!</p>
                </div>
                <div class="columns-col columns-col-6">
                    <div class="wysiwyg picture-cont">
                        <img class="wow fadeInRight animated window-1" alt="" data-wow-delay="0.3s" data-wow-duration="0.5s" src="{{ Theme::asset('default::pic/slider/3post/window-1.png') }}">
                        <img class="wow fadeInRight animated window-2" alt="" data-wow-delay="0.6s" data-wow-duration="0.5s"  src="{{ Theme::asset('default::pic/slider/3post/window-2.png') }}">
                        <img class="wow flipInY animated style-switcher" alt="" data-wow-delay="0.9s" data-wow-duration="0.5s" src="{{ Theme::asset('default::pic/slider/3post/style-switcher.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /post3 -->
    <!-- post4 -->
    <section id="post4" class="page-content-alt">
        <div class="grid-row composer">
            <div class="columns-row">
                <div class="columns-col columns-col-6">
                    <div class="wysiwyg picture-cont">
                        <img class="wow fadeInUp animated ipad" alt=""  src="pic/slider/post4/ipad.png">
                        <img class="wow fadeInLeft animated left-window" alt="" data-wow-delay="0.2s" data-wow-duration="0.5s" src="{{ Theme::asset('default::pic/slider/post4/left-window.png') }} ">
                        <img class="wow fadeInRight animated right-window" alt="" data-wow-delay="0.2s" data-wow-duration="0.5s"  src="{{ Theme::asset('default::pic/slider/post4/right-window.png') }} ">
                        <img class="wow fadeInUp animated tools-icon" alt="" data-wow-delay="0.5s" data-wow-duration="0.5s" src="{{ Theme::asset('default::pic/slider/post4/tools-icon.png') }} ">
                    </div>
                </div>
                <div class="columns-col columns-col-6">
                    <h1 class="wow fadeInRight animated" data-wow-duration="1.0s">iOS 8-inspired<br /><span class="colored">Design</span></h1>
                    <p class="wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1.0s">Clean design, inspired by iOS 8. <br />Complete with "flat" graphics and copious white space.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /post4 -->
    <!-- post5 -->
    <section id="post5" class="page-content">
        <div class="grid-row composer">
            <div class="columns-row">
                <div class="columns-col columns-col-6">
                    <h1 class="wow fadeInLeft animated " data-wow-duration="1.0s">Font Awesome<br /> <span class="colored">Icons integrated</span></h1>
                    <p class="wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1.0s">"the 8" comes with popular Icon Font - FontAwesome. Feel free to use over 200 icons to create distinguished and unique content — paragraphs, buttons, lists and much more!</p>
                </div>
                <div class="columns-col columns-col-6">
                    <div class="wysiwyg picture-cont">
                        <img class="wow fadeInLeft animated mac" alt=""  src="{{ Theme::asset('default::pic/slider/post5/mac.png') }} ">
                        <img class="wow fadeInUp animated icon-1" alt=""  data-wow-duration="0.7s" src="{{ Theme::asset('default::pic/slider/post5/icon-1.png') }}">
                        <img class="wow fadeInUp animated icon-2" alt=""  data-wow-delay="0.2s" data-wow-duration="0.7s" src="{{ Theme::asset('default::pic/slider/post5/icon-2.png') }}">
                        <img class="wow fadeInUp animated icon-3" alt=""  data-wow-delay="0.4s" data-wow-duration="0.7s" src="{{ Theme::asset('default::pic/slider/post5/icon-3.png') }}">
                        <img class="wow fadeInUp  animated icon-4" alt="" data-wow-delay="0.6s"  data-wow-duration="0.7s" src="{{ Theme::asset('default::pic/slider/post5/icon-4.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /post5 -->
    <!-- post6 -->
    <section id="post6" class="page-content-alt">
        <div class="grid-row composer">
            <div class="columns-row">
                <div class="columns-col columns-col-6">
                    <div class="wysiwyg picture-cont">
                        <img class="wow  fadeInLeft animated ipad-vertical" alt=""  data-wow-duration="0.6s" src="{{ Theme::asset('default::pic/slider/post6/ipad-vertical.png') }}">
                        <img class="wow fadeInLeft animated ipad-horizont" alt="" data-wow-delay="0.3s" data-wow-duration="0.6s" src="{{ Theme::asset('default::pic/slider/post6/ipad-horizont.png') }}">
                        <img class="wow flipInY animated icon" alt=""  data-wow-delay="0.3s" src="{{ Theme::asset('default::pic/slider/post6/icon.png') }}">
                    </div>
                </div>
                <div class="columns-col columns-col-6">
                    <h1 class="wow fadeInRight animated" data-wow-duration="1s">Styled Content<br /> <span class="colored">Elements</span></h1>
                    <p class="wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1s">"the 8" contains tons of vividly styled elements: <br />accordions, buttons, lists, charts and much more. Professional development directly into your website!</p>
                </div>
            </div>
        </div>
        <br />
        <br />
        <br />
    </section>
</main>
@endsection