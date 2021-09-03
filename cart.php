<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
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
                                <li><span>Cart</span></li>
                            </ul>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">Cart</h1>
                        </div>
                        <div>
                            <div class="uk-grid-medium" uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                        <header
                                            class="uk-card-header uk-text-uppercase uk-text-muted uk-text-center uk-text-small uk-visible@m">
                                            <div class="uk-grid-small uk-child-width-1-2" uk-grid>
                                                <div>product</div>
                                                <div>
                                                    <div class="uk-grid-small uk-child-width-expand" uk-grid>
                                                        <div>price</div>
                                                        <div class="tm-quantity-column">quantity</div>
                                                        <div>sum</div>
                                                        <div class="uk-width-auto">
                                                            <div style="width: 20px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle"
                                                uk-grid>
                                                <!-- Product cell-->
                                                <div>
                                                    <div class="uk-grid-small" uk-grid>
                                                        <div class="uk-width-1-3">
                                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                                    href="product.php">
                                                                    <figure class="tm-media-box-wrap"><img
                                                                            src="images/products/1/1-small.jpg"
                                                                            alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                    </figure>
                                                                </a></div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="uk-text-meta">Laptop</div><a
                                                                class="uk-link-heading" href="product.php">Apple
                                                                MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB
                                                                (Silver)</a>
                                                        </div>
                                                    </div>
                                                </div><!-- Other cells-->
                                                <div>
                                                    <div class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center"
                                                        uk-grid>
                                                        <div>
                                                            <div class="uk-text-muted uk-hidden@m">Price</div>
                                                            <div>$1599.00</div>
                                                        </div>
                                                        <div class="tm-cart-quantity-column"><a
                                                                onclick="increment(-1, 'product-1')"
                                                                uk-icon="icon: minus; ratio: .75"></a><input
                                                                class="uk-input tm-quantity-input" id="product-1"
                                                                type="text" maxlength="3" value="1" /><a
                                                                onclick="increment(+1, 'product-1')"
                                                                uk-icon="icon: plus; ratio: .75"></a></div>
                                                        <div>
                                                            <div class="uk-text-muted uk-hidden@m">Sum</div>
                                                            <div>$1599.00</div>
                                                        </div>
                                                        <div class="uk-width-auto@s"><a class="uk-text-danger"
                                                                uk-tooltip="Remove"><span uk-icon="close"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle"
                                                uk-grid>
                                                <!-- Product cell-->
                                                <div>
                                                    <div class="uk-grid-small" uk-grid>
                                                        <div class="uk-width-1-3">
                                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                                    href="product.php">
                                                                    <figure class="tm-media-box-wrap"><img
                                                                            src="images/products/2/2-small.jpg"
                                                                            alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)">
                                                                    </figure>
                                                                </a></div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="uk-text-meta">Laptop</div><a
                                                                class="uk-link-heading" href="product.php">Apple
                                                                MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)</a>
                                                        </div>
                                                    </div>
                                                </div><!-- Other cells-->
                                                <div>
                                                    <div class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center"
                                                        uk-grid>
                                                        <div>
                                                            <div class="uk-text-muted uk-hidden@m">Price</div>
                                                            <div>$1549.00</div>
                                                        </div>
                                                        <div class="tm-cart-quantity-column"><a
                                                                onclick="increment(-1, 'product-2')"
                                                                uk-icon="icon: minus; ratio: .75"></a><input
                                                                class="uk-input tm-quantity-input" id="product-2"
                                                                type="text" maxlength="3" value="1" /><a
                                                                onclick="increment(+1, 'product-2')"
                                                                uk-icon="icon: plus; ratio: .75"></a></div>
                                                        <div>
                                                            <div class="uk-text-muted uk-hidden@m">Sum</div>
                                                            <div>$1549.00</div>
                                                        </div>
                                                        <div class="uk-width-auto@s"><a class="uk-text-danger"
                                                                uk-tooltip="Remove"><span uk-icon="close"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-footer"><label><span
                                                    class="uk-form-label uk-margin-small-right">Promo Code</span>
                                                <div class="uk-inline"><a class="uk-form-icon uk-form-icon-flip"
                                                        href="#" uk-icon="arrow-right"></a><input
                                                        class="uk-input uk-form-width-small" type="text"></div>
                                            </label></div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 tm-aside-column uk-width-1-4@m">
                                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container"
                                        uk-sticky="offset: 30; bottom: true; media: @m;">
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand uk-text-muted">Subtotal</div>
                                                <div>$3148</div>
                                            </div>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand uk-text-muted">Discount</div>
                                                <div class="uk-text-danger">−$29</div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand uk-text-muted">Total</div>
                                                <div class="uk-text-lead uk-text-bolder">$3119</div>
                                            </div><a class="uk-button uk-button-primary uk-margin-small uk-width-1-1"
                                                href="checkout.php">checkout</a>
                                        </div>
                                    </div>
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