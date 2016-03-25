<div id="carousel-example" class="carousel slide" data-pause="false" data-interval="10000" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example" data-slide-to="1"></li>
        <li data-target="#carousel-example" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="item active">
            <div class="carousel-caption">
                <img src="/img/home-carousel/laravel52-examples.jpg"
                     data-animation="animated flipInY" >
                <h3 data-animation="animated bounceInLeft">
                    Laravel 5.2 Examples
                </h3>
                <button class="btn btn-primary btn-lg" data-animation="animated zoomInUp" id="btn-one">Click me</button>
            </div>
        </div> <!-- /.item active-->

        <!-- Second slide -->
        <div class="item">
            <div class="carousel-caption">
                <img src="/img/logo-large.png"
                     data-animation="animated flip" >
                <h3 data-animation="animated bounceInUp">
                    Created and Designed by SIADEV
                </h3>
                <button class="btn btn-primary btn-lg" data-animation="animated zoomInRight" id="btn-two">Click me</button>
            </div>
        </div><!-- /.item -->

        <!-- Third slide -->
        <div class="item">
            <div class="carousel-caption">
                <h3 class="icon-container" data-animation="animated zoomInLeft">
                    <span class="glyphicon glyphicon-glass"></span>
                </h3>
                <h3 data-animation="animated flipInX">
                    This is the caption for slide 3
                </h3>
                <button class="btn btn-primary btn-lg" data-animation="animated lightSpeedIn" id="btn-three">Click me</button>
            </div>
        </div><!-- /.item -->

    </div><!-- /.carousel-inner -->

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
