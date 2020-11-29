<!DOCTYPE html>
<html lang="en">

<head>
<?php require 'headtag-metas.html';?>
</head>

<body>
<?php require 'header-default.html';?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Real Wedding Submission Form</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-section">
                    <h1 class="page-title">Real Wedding Submission Form</h1></div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="wedding-form">
                                <h2>Please fill out the form below and attach your images directly using the file uploader &amp; details.</h2>
                                <form class="form-wedding">
                                    <!-- Form Name -->
                                    <h2>Wedding Details</h2>
                                    <div class="row">
                                        <!-- Text input-->
                                        <div class="col-md-6">
                                            <label class=" control-label" for="bridefname">Bride’s First Name<span class="required">*</span></label>
                                            <div class="">
                                                <input id="bridefname" name="bridefname" type="text" placeholder="Bride’s First Name *" class="form-control input-md" required="">
                                                <span class="help-block"> </span>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-6">
                                            <label class=" control-label" for="bridelname">Bride’s Last Name<span class="required">*</span></label>
                                            <div class="">
                                                <input id="bridelname" name="bridelname" type="text" placeholder="Bride’s Last Name *" class="form-control input-md" required="">
                                                <span class="help-block"> </span>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-6">
                                            <label class="control-label" for="groomfname">Groom’s First Name <span class="required">*</span></label>
                                            <input id="groomfname" name="groomfname" type="text" placeholder="Groom’s First Name *" class="form-control" required="">
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-6">
                                            <label class="control-label" for="groomlname">Groom’s Last Name <span class="required">*</span></label>
                                            <input id="groomlname" name="groomlname" type="text" placeholder=" Groom’s Last Name *" class="form-control" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label" for="email">E-Mail <span class="required">*</span></label>
                                            <input id="email" name="email" type="email" placeholder="E-Mail Address" class="form-control" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label" for="Phone">Phone </label>
                                            <input id="Phone" name="Phone" type="text" placeholder="Phone" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="weddingdate">Weddign Date<span class="required">*</span></label>
                                            <input id="weddingdate" name="weddingdate" type="text" placeholder="Groom’s First Name *" class="form-control" required="">
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-12">
                                            <h2>Upload Image &amp; Video</h2>
                                            <hr>
                                        </div>
                                        <!-- File Button -->
                                        <div class="col-md-12">
                                            <label class="control-label" for="filebutton">Attach Photos (Must be high resolutions.)</label>
                                            <div class="">
                                                <input id="filebutton" name="filebutton" class="input-file btn btn-default" type="file">
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Video">Video <small>(If you upload video send URL)</small></label>
                                            <input id="Video" name="Video" type="text" placeholder="Video" class="form-control" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <h2>Vendor Credits</h2>
                                            <hr>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-12">
                                            <label class="control-label" for="Photography">Photography</label>
                                            <input id="Photography" name="Photography" type="text" placeholder="Photography" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Gown">Gown</label>
                                            <input id="Gown" name="Gown" type="text" placeholder="Gown" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Shoes">Shoes</label>
                                            <input id="Shoes" name="Shoes" type="text" placeholder="Shoes" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Hair">Hair Salon</label>
                                            <input id="Hair" name="Hair" type="text" placeholder="Hair Salon" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="BridesmaidDresses">Bridesmaid Dresses</label>
                                            <input id="BridesmaidDresses" name="BridesmaidDresses" type="text" placeholder="BridesmaidDresses" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Makeup">Makeup</label>
                                            <input id="Makeup" name="Makeup" type="text" placeholder="Makeup" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Rings">Rings</label>
                                            <input id="Rings" name="Rings" type="text" placeholder="Rings" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Flowers">Flowers</label>
                                            <input id="Flowers" name="Flowers" type="text" placeholder="Flowers" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Cake">Cake</label>
                                            <input id="Cake" name="Cake" type="text" placeholder="Cake" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Ceremony/Reception">Ceremony/Reception</label>
                                            <input id="Ceremony/Reception" name="Ceremony/Reception" type="text" placeholder="Ceremony/Reception" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" for="Venue">Venue</label>
                                            <input id="Venue" name="Venue" type="text" placeholder="Venue" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-default" type="submit">Submit Wedding</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-categories">
                                <!-- widget category start -->
                                <h2 class="widget-title">categories</h2>
                                <ul>
                                    <li><a href="#">Planning</a> <span class="badge">6</span></li>
                                    <li><a href="#">Real Weddings</a><span class="badge">2</span></li>
                                    <li><a href="#">Fashion</a><span class="badge">9</span></li>
                                    <li><a href="#">Gallery</a><span class="badge">4</span></li>
                                    <li><a href="#">Destinations</a><span class="badge">8</span></li>
                                </ul>
                            </div>
                            <!-- widget category start -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget-bg widget-newsletter">
                                <div class="">
                                    <div class="newsletter-bg">
                                        <h1>Helping you plan your big day subscribe us today</h1>
                                        <p>Subscribe with your email to get updates about wedding news &amp; offers.</p>
                                        <form method="post" action="newsletter.php">
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="sr-only  control-label" for="e-mail">E-Mail</label>
                                                <input id="e-mail" name="e-mail" type="text" placeholder="Email Address" class="form-control input-md" required="">
                                            </div>
                                            <!-- Button -->
                                            <div class="form-group">
                                                <label class="sr-only control-label" for="submit">Submit</label>
                                                <button id="submit" name="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- widget category start -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-social">
                                <!-- widget category start -->
                                <h2 class="widget-title">Share with us</h2>
                                <ul>
                                    <li><a href="#">Facebook <i class="fa fa-facebook-square pull-right widget-social-icon"></i></a></li>
                                    <li><a href="#">Twitter <i class="fa fa-twitter-square pull-right widget-social-icon"></i></a></li>
                                    <li><a href="#">Instagram <i class="fa fa-instagram pull-right widget-social-icon"></i></a></li>
                                    <li><a href="#">Google Plus <i class="fa fa-google-plus-square pull-right widget-social-icon"></i></a></li>
                                    <li><a href="#">Pinterest <i class="fa fa-pinterest-square pull-right widget-social-icon"></i></a></li>
                                </ul>
                            </div>
                            <!-- widget category start -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-recent-news">
                                <!-- widget category start -->
                                <h2 class="widget-title">Recent news</h2>
                                <ul>
                                    <li>
                                        <h4><a href="#" class="post-title">Vegan Breakfasts: Baked Eggs in Popped Beans and Cherry</a></h4>
                                        <p class="meta"><span class="meta-category"><a href="#" class="meta-link">Destinations</a></span> <span class="meta-date">19 Jan, 2017</span>
                                        </p>
                                    </li>
                                    <li>
                                        <h4><a href="#" class="post-title">Gluten Free Vegan Apple Pie</a></h4>
                                        <p class="meta"><span class="meta-category"><a href="#" class="meta-link">Real Weddings</a></span> <span class="meta-date">19 Jan, 2017</span>
                                        </p>
                                    </li>
                                    <li>
                                        <h4><a href="#" class="post-title"> 10 Ways in Which Vegans Save the Earth Each</a></h4>
                                        <p class="meta"><span class="meta-category"><a href="#" class="meta-link">Planning</a></span> <span class="meta-date">19 Jan, 2017</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <!-- widget category start -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-tags">
                                <!-- widget category start -->
                                <h2 class="widget-title">Tags</h2>
                                <div class="tags">
                                    <a href="#">Wedding</a>
                                    <a href="#">Wedding dress</a>
                                    <a href="#">planning</a>
                                    <a href="#">venue</a>
                                    <a href="#">destinations</a>
                                    <a href="#">beauty</a>
                                    <a href="#">Wedding planning</a>
                                </div>
                            </div>
                            <!-- widget category start -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-archive">
                                <!-- widget category start -->
                                <h2 class="widget-title">Archives</h2>
                                <ul>
                                    <li><a href="#">June 2018</a></li>
                                    <li><a href="#">March 2018</a></li>
                                    <li><a href="#">February 2018</a></li>
                                    <li><a href="#">January 2018</a></li>
                                </ul>
                            </div>
                            <!-- widget category start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'footer-default.html';?>
</body>

</html>
