<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Favorites</title>
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
                    <div class="uk-grid-medium" uk-grid>
                        <div class="uk-width-1-1 uk-width-1-4@m tm-aside-column">
                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container"
                                uk-sticky="offset: 90; bottom: true; media: @m;">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                        <section>
                                            <div
                                                class="uk-width-1-3 uk-width-1-4@s uk-width-1-2@m uk-margin-auto uk-visible-toggle uk-position-relative uk-border-circle uk-overflow-hidden uk-light">
                                                <img class="uk-width-1-1" src="images/avatar.jpg"><a
                                                    class="uk-link-reset uk-overlay-primary uk-position-cover uk-hidden-hover"
                                                    href="#">
                                                    <div class="uk-position-center"><span
                                                            uk-icon="icon: camera; ratio: 1.25;"></span></div>
                                                </a></div>
                                        </section>
                                        <div class="uk-text-center">
                                            <div class="uk-h4 uk-margin-remove">Thomas Bruns</div>
                                            <div class="uk-text-meta">Joined June 6, 2018</div>
                                        </div>
                                        <div>
                                            <div class="uk-grid-small uk-flex-center" uk-grid>
                                                <div><a class="uk-button uk-button-default uk-button-small"
                                                        href="settings.php"><span class="uk-margin-xsmall-right"
                                                            uk-icon="icon: cog; ratio: .75;"></span><span>Settings</span></a>
                                                </div>
                                                <div><button class="uk-button uk-button-default uk-button-small"
                                                        href="#" title="Log out"><span
                                                            uk-icon="icon: sign-out; ratio: .75;"></span></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <nav>
                                        <ul class="uk-nav uk-nav-default tm-nav">
                                            <li><a href="account.php">Orders
                                                    <span>(2)</span></a></li>
                                            <li class="uk-active"><a href="favorites.php">Favorites
                                                    <span>(3)</span></a></li>
                                            <li><a href="personal.php">Personal Info</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                <header class="uk-card-header">
                                    <h1 class="uk-h2">Favorites</h1>
                                </header>
                                <div class="uk-grid-collapse tm-products-list" uk-grid>
                                    <article class="tm-product-card">
                                        <div class="tm-product-card-media">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
                                                    <div class="tm-product-card-labels"><span
                                                            class="uk-label uk-label-warning">top selling</span><span
                                                            class="uk-label uk-label-danger">trade-in</span></div>
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/everon-marker.jpg"
                                                            alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)" />
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="tm-product-card-body">
                                            <div class="tm-product-card-info">
                                                <div class="uk-text-meta uk-margin-xsmall-bottom">Marker</div>
                                                <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                        href="product.php">Everon Pen</a></h3>
                                                <ul class="uk-list uk-text-small tm-product-card-properties">
                                                    <!--<li><span class="uk-text-muted">Diagonal display:
                                                        </span><span>15.4"</span></li>
                                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                            i7</span></li>
                                                    <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span>
                                                    </li>
                                                    <li><span class="uk-text-muted">Video Card: </span><span>AMD Radeon
                                                            Pro 555</span></li>-->
                                                </ul>
                                            </div>
                                            <div class="tm-product-card-shop">
                                                <div class="tm-product-card-prices"><del
                                                        class="uk-text-meta">$1899.00</del>
                                                    <div class="tm-product-card-price">$1599.00</div>
                                                </div>
                                                <div class="tm-product-card-add">
                                                    <div class="uk-text-meta tm-product-card-actions"><a
                                                            class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                            title="Add to favorites"><span
                                                                uk-icon="icon: heart; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                favorites</span></a><a
                                                            class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                            title="Add to compare"><span
                                                                uk-icon="icon: copy; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                compare</span></a></div><button
                                                        class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                            class="tm-product-card-add-button-icon"
                                                            uk-icon="cart"></span><span
                                                            class="tm-product-card-add-button-text">add to
                                                            cart</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="tm-product-card">
                                        <div class="tm-product-card-media">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
                                                    <div class="tm-product-card-labels"><span
                                                            class="uk-label uk-label-success">new</span><span
                                                            class="uk-label uk-label-danger">trade-in</span></div>
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/laundry-marker.jpg"
                                                            alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)" />
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="tm-product-card-body">
                                            <div class="tm-product-card-info">
                                                <div class="uk-text-meta uk-margin-xsmall-bottom">Pen</div>
                                                <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                        href="product.php">Laundry Pen</a></h3>
                                                <ul class="uk-list uk-text-small tm-product-card-properties">
                                                    <!--<li><span class="uk-text-muted">Diagonal display:
                                                        </span><span>12"</span></li>
                                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                            i5</span></li>
                                                    <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span>
                                                    </li>
                                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD
                                                            Graphics 615</span></li>-->
                                                </ul>
                                            </div>
                                            <div class="tm-product-card-shop">
                                                <div class="tm-product-card-prices">
                                                    <div class="tm-product-card-price">$1549.00</div>
                                                </div>
                                                <div class="tm-product-card-add">
                                                    <div class="uk-text-meta tm-product-card-actions"><a
                                                            class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                            title="Add to favorites"><span
                                                                uk-icon="icon: heart; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                favorites</span></a><a
                                                            class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                            title="Add to compare"><span
                                                                uk-icon="icon: copy; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                compare</span></a></div><button
                                                        class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                            class="tm-product-card-add-button-icon"
                                                            uk-icon="cart"></span><span
                                                            class="tm-product-card-add-button-text">add to
                                                            cart</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="tm-product-card">
                                        <div class="tm-product-card-media">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/metal-marker-finetip.jpg"
                                                            alt="Lenovo IdeaPad YOGA 920-13IKB 80Y7001RRK (Copper)" />
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="tm-product-card-body">
                                            <div class="tm-product-card-info">
                                                <div class="uk-text-meta uk-margin-xsmall-bottom">Metal Marker</div>
                                                <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                        href="product.php">Metal Marker Fine Tip</a></h3>
                                                <ul class="uk-list uk-text-small tm-product-card-properties">
                                                    <li><span class="uk-text-muted">Diagonal display:
                                                        </span><span>13.9"</span></li>
                                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                            i7 8550U</span></li>
                                                    <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span>
                                                    </li>
                                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD
                                                            Graphics 620</span></li>
                                                </ul>
                                            </div>
                                            <div class="tm-product-card-shop">
                                                <div class="tm-product-card-prices">
                                                    <div class="tm-product-card-price">$1199.00</div>
                                                </div>
                                                <div class="tm-product-card-add">
                                                    <div class="uk-text-meta tm-product-card-actions"><a
                                                            class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                            title="Add to favorites"><span
                                                                uk-icon="icon: heart; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                favorites</span></a><a
                                                            class="tm-product-card-action js-add-to js-add-to-compare"
                                                            title="Add to compare"><span
                                                                uk-icon="icon: copy; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                compare</span></a></div><button
                                                        class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                            class="tm-product-card-add-button-icon"
                                                            uk-icon="cart"></span><span
                                                            class="tm-product-card-add-button-text">add to
                                                            cart</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
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