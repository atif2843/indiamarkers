<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacts</title>
    <link rel="stylesheet" href="fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/uikit.js"></script>
    <script src="scripts/uikit-icons.js"></script>
</head>

<body>
    <div class="uk-offcanvas-content">
        <?php include('header.php'); ?>
        <main>
            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                        <div class="uk-text-center">
                            <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Contacts</span></li>
                            </ul>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">Contacts</h1>
                        </div>
                        <div>
                            <div class="uk-grid-medium" uk-grid>
                                <section class="uk-width-1-1 uk-width-expand@m">
                                    <article
                                        class="uk-card uk-card-default uk-card-small uk-card-body uk-article tm-ignore-container">
                                        <!--<div class="tm-wrapper">
                                            <figure class="tm-ratio tm-ratio-16-9 js-map" data-latitude="59.9356728"
                                                data-longitude="30.3258604" data-zoom="14"></figure>
                                        </div>-->
                                        <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-margin-top" uk-grid>
                                            <section>
                                                <h3>Store</h3>
                                                <ul class="uk-list">
                                                    <li><a class="uk-link-heading" href="#"><span
                                                                class="uk-margin-small-right"
                                                                uk-icon="receiver"></span><span class="tm-pseudo">8879856446</span></a></li>
                                                    <li><a class="uk-link-heading" href="#"><span
                                                                class="uk-margin-small-right"
                                                                uk-icon="mail"></span><span
                                                                class="tm-pseudo">inof@indiamarkers.com</span></a></li>
                                                    <li>
                                                        <div><span class="uk-margin-small-right"
                                                                uk-icon="location"></span><span>Mumbai Maharashrta</span></div>
                                                    </li>
                                                    
                                                </ul>
                                            </section>
                                            <section>
                                                <h3>Feedback</h3>
                                                <dl class="uk-description-list">
                                                    <dt>Cooperation</dt>
                                                    <dd><a class="uk-link-muted" href="#">cooperation@example.com</a>
                                                    </dd>
                                                    <dt>Partners</dt>
                                                    <dd><a class="uk-link-muted" href="#">partners@example.com</a></dd>
                                                    <dt>Press</dt>
                                                    <dd><a class="uk-link-muted" href="#">press@example.com</a></dd>
                                                </dl>
                                            </section>
                                            <section class="uk-width-1-1">
                                                <h2 class="uk-text-center">Contact Us</h2>
                                                <form>
                                                    <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                                        <div><label>
                                                                <div class="uk-form-label uk-form-label-required">Name
                                                                </div><input class="uk-input" type="text" required>
                                                            </label></div>
                                                        <div><label>
                                                                <div class="uk-form-label uk-form-label-required">Email
                                                                </div><input class="uk-input" type="email" required>
                                                            </label></div>
                                                        <div><label>
                                                                <div class="uk-form-label">Topic</div><select
                                                                    class="uk-select">
                                                                    <option>Customer service</option>
                                                                    <option>Tech support</option>
                                                                    <option>Other</option>
                                                                </select>
                                                            </label></div>
                                                        <div><label>
                                                                <div class="uk-form-label">Message</div><textarea
                                                                    class="uk-textarea" rows="5"></textarea>
                                                            </label></div>
                                                        <div class="uk-text-center"><button
                                                                class="uk-button uk-button-primary">Send</button></div>
                                                    </div>
                                                </form>
                                            </section>
                                        </div>
                                    </article>
                                </section>
                                <aside class="uk-width-1-4 uk-visible@m tm-aside-column">
                                    <section class="uk-card uk-card-default uk-card-small"
                                        uk-sticky="offset: 90; bottom: true;">
                                        <nav>
                                            <ul class="uk-nav uk-nav-default tm-nav">
                                                <li><a href="about.php">About</a></li>
                                                <li class="uk-active"><a href="contacts.php">Contacts</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                                <!--<li><a href="news.php">News</a></li>
                                                <li><a href="faq.php">FAQ</a></li>
                                                <li><a href="delivery.php">Delivery</a></li>-->
                                            </ul>
                                        </nav>
                                    </section>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        <?php include('footer.php') ?>
		<?php include('nav-offcanvas.php') ?>
		<?php include('cart-offcanvas.php') ?>        
        
        
    </div>
    <script src="scripts/script.js"></script>
    <script src="maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap"
        async defer></script>
</body>

</html>