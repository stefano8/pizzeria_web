<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-17 14:08:19
  from "/Applications/MAMP/htdocs/pizzeria_web/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_59958733161210_60003141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c62143b238a25a56988a2a90e22087bda89c8305' => 
    array (
      0 => '/Applications/MAMP/htdocs/pizzeria_web/templates/index.tpl',
      1 => 1502971698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59958733161210_60003141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '628596052599587330f3041_44515631';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PizzeriaWeb</title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">


    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/nivo-lightbox.css">
    <link rel="stylesheet" href="./css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>


<body>


    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- home section -->
    <section id="home" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Pizzeria</h1>
                    <h2>WEB</h2>
                    <a href="#gallery" class="smoothScroll btn btn-default">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>







    <!-- gallery section -->
    <section id="gallery" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
                    <h1 class="heading">Food Gallery</h1>
                    <hr>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="images/gallery-img1.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img1.jpg" alt="gallery img"></a>
                    <div>
                        <h3>Lemon-Rosemary Prawn</h3>
                        <span>Seafood / Shrimp / Lemon</span>
                    </div>
                    <a href="images/gallery-img2.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img2.jpg" alt="gallery img"></a>
                    <div>
                        <h3>Lemon-Rosemary Vegetables</h3>
                        <span>Tomato / Rosemary / Lemon</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                    <a href="images/gallery-img3.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img3.jpg" alt="gallery img"></a>
                    <div>
                        <h3>Lemon-Rosemary Bakery</h3>
                        <span>Bread / Rosemary / Orange</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
                    <a href="images/gallery-img4.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img4.jpg" alt="gallery img"></a>
                    <div>
                        <h3>Lemon-Rosemary Salad</h3>
                        <span>Chicken / Rosemary / Green</span>
                    </div>
                    <a href="images/gallery-img5.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img5.jpg" alt="gallery img"></a>
                    <div>
                        <h3>Lemon-Rosemary Pizza</h3>
                        <span>Pasta / Rosemary / Green</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- menu section -->
    <section id="menu" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
                    <h1 class="heading">Special Menu</h1>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Lemon-Rosemary Vegetable ................ <span>$20.50</span></h4>
                    <h5>Chicken / Rosemary / Lemon</h5>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Lemon-Rosemary Meat ........................... <span>$30.50</span></h4>
                    <h5>Meat / Rosemary / Lemon</h5>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Lemon-Rosemary Pork ........................ <span>$40.75</span></h4>
                    <h5>Pork / Tooplate / Lemon</h5>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Orange-Rosemary Salad .......................... <span>$55.00</span></h4>
                    <h5>Salad / Rosemary / Orange</h5>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Lemon-Rosemary Squid ...................... <span>$65.00</span></h4>
                    <h5>Squid / Rosemary / Lemon</h5>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Orange-Rosemary Shrimp ........................ <span>$70.50</span></h4>
                    <h5>Shrimp / Rosemary / Orange</h5>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Lemon-Rosemary Prawn ................... <span>$110.75</span></h4>
                    <h5>Chicken / Rosemary / Lemon</h5>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Lemon-Rosemary Seafood ..................... <span>$220.50</span></h4>
                    <h5>Seafood / Rosemary / Lemon</h5>
                </div>
            </div>
        </div>
    </section>


    <!-- team section -->
    <section id="team" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
                    <h1 class="heading">chefs</h1>
                    <hr>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="images/team1.jpg" class="img-responsive center-block" alt="team img">
                    <h4>Thanya</h4>
                    <h3>Main Chef</h3>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                    <img src="images/team2.jpg" class="img-responsive center-block" alt="team img">
                    <h4>Lynda</h4>
                    <h3>Pizza Specialist</h3>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
                    <img src="images/team3.jpg" class="img-responsive center-block" alt="team img">
                    <h4>Jenny Ko</h4>
                    <h3>New Baker</h3>
                </div>
            </div>
        </div>
    </section>


    <!-- contact section -->
    <section id="contact" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
                    <h1 class="heading">Contact Us</h1>
                    <hr>
                </div>
                <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
                    <form action="#" method="post">
                        <div class="col-md-6 col-sm-6">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <textarea name="message" rows="8" class="form-control" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                            <input name="submit" type="submit" class="form-control" id="submit" value="make a reservation">
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-sm-1"></div>
            </div>
        </div>
    </section>






        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- JAVASCRIPT JS FILES -->
    <?php echo '<script'; ?>
 src="./js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/jquery.parallax.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/smoothscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/nivo-lightbox.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/custom.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
