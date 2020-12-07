<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'headtag-metas.html';?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/form.js"></script>

</head>

<body>
    <?php require 'header-default.html';?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact us</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-section">
                    <h1 class="page-title">İletişim Adreslerimiz</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="section-header">
                                <p class="lead">Merak ettiğiniz bir soru için bize mesaj bırakabilirsiniz.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <form class="contact-form" action="insert-form.php" method="post">
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="control-label" for="name">Ad<span>*</span></label>
                                            <input id="name" name="name" type="text" placeholder="Adınız"
                                                class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group col-md-6">
                                            <label class="control-label" for="surname">Soyad<span>*</span></label>
                                            <input id="surname" name="surname" type="text" placeholder="Soyadınız"
                                                class="form-control input-md" required>                                   
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group col-md-12">
                                            <label class="control-label" for="email">E-posta<span>*</span></label>
                                            <input id="email" name="email" type="text" placeholder="epostam@adres.com"
                                               class="form-control input-md" required>
                                    </div>
                                    <!--textarea-->
                                    <div class="col-md-12">
                                        <label class="control-label" for="textarea">Mesajınız</label>
                                        <textarea class="form-control" id="textarea" name="textarea" rows="6"
                                            placeholder="Mesajınız"></textarea>
                                    </div>
                                    <!--Button-->
                                    <div class="form-group col-md-12">
                                            <button id="submit" name="submit"
                                                class="btn btn-default">Gönder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="conatct-info">
                                <div class="section-header">
                                    <h2 class="heading-line">HAYALLERİNİZDEKİ DÜĞÜNÜ YAŞAMANIZ İÇİN BURADAYIZ</h2>
                                </div>
                                <div class="contact-details">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="contact-icon"><i class="fa fa-envelope-o"></i></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <h4 class="contact-title">E-mail ADERSİMİZ</h4>
                                            <p>ornek@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-details">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="contact-icon"><i class="fa fa-home"></i></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <h4 class="contact-title">ADRESİMİZ</h4>
                                            <p>Silahtarağa, Üniversite 1.Sokak No:13, 59860 Çorlu/Tekirdağ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-details">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="contact-icon"><i class="fa fa-share"></i></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <h4 class="contact-title">TELEFON NUMARAMIZ</h4>
                                            <p>+90 555 999 1234</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="section-header">
                                <h2 class="heading-line">Konumumuz</h2>
                            </div>

                        </div>
                    </div>
                    <p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3002.8200995410994!2d27.81563811505901!3d41.18209087928356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b4e745bc85d6bf%3A0xf06945ec414379c0!2zTmFtxLFrIEtlbWFsIMOcbml2ZXJzaXRlc2kgw4dvcmx1IE3DvGhlbmRpc2xpayBGYWvDvGx0ZXNp!5e0!3m2!1str!2str!4v1603456044669!5m2!1str!2str"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </p>
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
                                            <h1>Size en güzel evlilik planlarını sunabilmek için</h1>
                                            <p>Aşağıdaki kutucuğa mail adresinizi bırakabilrisiniz.</p>
                                            <form method="post" action="newsletter.php">
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="sr-only  control-label" for="e-mail">E-Mail</label>
                                                    <input id="e-mail" name="e-mail" type="text"
                                                        placeholder="Email Address" class="form-control input-md"
                                                        required="">
                                                </div>
                                                <!-- Button -->
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="submit">Submit</label>
                                                    <button id="submit" name="submit"
                                                        class="btn btn-default">Submit</button>
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
                                        <li><a href="#">Facebook <i
                                                    class="fa fa-facebook-square pull-right widget-social-icon"></i></a>
                                        </li>
                                        <li><a href="#">Twitter <i
                                                    class="fa fa-twitter-square pull-right widget-social-icon"></i></a>
                                        </li>
                                        <li><a href="#">Instagram <i
                                                    class="fa fa-instagram pull-right widget-social-icon"></i></a></li>
                                        <li><a href="#">Google Plus <i
                                                    class="fa fa-google-plus-square pull-right widget-social-icon"></i></a>
                                        </li>
                                        <li><a href="#">Pinterest <i
                                                    class="fa fa-pinterest-square pull-right widget-social-icon"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- widget category start -->
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="widget widget-recent-news">
                                    <!-- widget category start -->
                                    <h2 class="widget-title">SON YENİLİKLER</h2>
                                    <ul>
                                        <li>
                                            <h4><a href="#" class="post-title">Vegan Breakfasts: Baked Eggs in Popped
                                                    Beans and Cherry</a></h4>
                                            <p class="meta"><span class="meta-category"><a href="#"
                                                        class="meta-link">Destinations</a></span> <span
                                                    class="meta-date">19 Jan, 2017</span>
                                            </p>
                                        </li>
                                        <li>
                                            <h4><a href="#" class="post-title">Gluten Free Vegan Apple Pie</a></h4>
                                            <p class="meta"><span class="meta-category"><a href="#"
                                                        class="meta-link">Real Weddings</a></span> <span
                                                    class="meta-date">19 Jan, 2017</span>
                                            </p>
                                        </li>
                                        <li>
                                            <h4><a href="#" class="post-title"> 10 Ways in Which Vegans Save the Earth
                                                    Each</a></h4>
                                            <p class="meta"><span class="meta-category"><a href="#"
                                                        class="meta-link">Planning</a></span> <span class="meta-date">19
                                                    Jan, 2017</span>
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
                                    <h2 class="widget-title">ARŞİV</h2>
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