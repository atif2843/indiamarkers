<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compare</title>
    <link rel="stylesheet" href="fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/uikit.js"></script>
    <script src="scripts/uikit-icons.js"></script>
</head>

<body>
    <div class="uk-offcanvas-content">
        <header>
            
            <div class="uk-navbar-container tm-navbar-container" uk-sticky="cls-active: tm-navbar-container-fixed">
                <div class="uk-container" uk-navbar>
                    <div class="uk-navbar-left"><button class="uk-navbar-toggle uk-hidden@m"
                            uk-toggle="target: #nav-offcanvas" uk-navbar-toggle-icon></button><a
                            class="uk-navbar-item uk-logo" href="index.php"><img src="images/logo.svg" width="90"
                                height="32" alt="Logo"></a>
                        <nav class="uk-visible@m">
                            <ul class="uk-navbar-nav">
                                <li><a href="catalog.php">Catalog<span class="uk-margin-xsmall-left"
                                            uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                                    <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical"
                                        uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                        <div class="uk-container">
                                            <ul class="uk-navbar-dropdown-grid uk-child-width-1-5" uk-grid>
                                                <li>
                                                    <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                            href="category.php"><img
                                                                class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                                src="images/catalog/computers.svg"
                                                                alt="Laptops &amp; Tablets" width="80" height="80">
                                                            <div class="uk-text-bolder">Laptops &amp; Tablets</div>
                                                        </a>
                                                        <ul class="uk-nav uk-nav-default">
                                                            <li><a href="subcategory.php">Laptops</a></li>
                                                            <li><a href="subcategory.php">Tablets</a></li>
                                                            <li><a href="subcategory.php">Peripherals</a></li>
                                                            <li><a href="subcategory.php">Keyboards</a></li>
                                                            <li><a href="subcategory.php">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                            href="category.php"><img
                                                                class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                                src="images/catalog/phones.svg"
                                                                alt="Phones &amp; Gadgets" width="80" height="80">
                                                            <div class="uk-text-bolder">Phones &amp; Gadgets</div>
                                                        </a>
                                                        <ul class="uk-nav uk-nav-default">
                                                            <li><a href="subcategory.php">Smartphones</a></li>
                                                            <li><a href="subcategory.php">Mobile Phones</a></li>
                                                            <li><a href="subcategory.php">Smart watches</a></li>
                                                            <li><a href="subcategory.php">Charging and batteries</a>
                                                            </li>
                                                            <li><a href="subcategory.php">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                            href="category.php"><img
                                                                class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                                src="images/catalog/tv.svg" alt="TV &amp; Video"
                                                                width="80" height="80">
                                                            <div class="uk-text-bolder">TV &amp; Video</div>
                                                        </a>
                                                        <ul class="uk-nav uk-nav-default">
                                                            <li><a href="subcategory.php">TV</a></li>
                                                            <li><a href="subcategory.php">Home Cinema</a></li>
                                                            <li><a href="subcategory.php">Satellite &amp; Cable TV</a>
                                                            </li>
                                                            <li><a href="subcategory.php">Projectors</a></li>
                                                            <li><a href="subcategory.php">DVD &amp; Blu-ray</a></li>
                                                            <li><a href="subcategory.php">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                            href="category.php"><img
                                                                class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                                src="images/catalog/games.svg"
                                                                alt="Games &amp; Entertainment" width="80" height="80">
                                                            <div class="uk-text-bolder">Games &amp; Entertainment</div>
                                                        </a>
                                                        <ul class="uk-nav uk-nav-default">
                                                            <li><a href="subcategory.php">Gaming consoles</a></li>
                                                            <li><a href="subcategory.php">Games</a></li>
                                                            <li><a href="subcategory.php">Software</a></li>
                                                            <li><a href="subcategory.php">Joysticks &amp; gamepads</a>
                                                            </li>
                                                            <li><a href="subcategory.php">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                            href="category.php"><img
                                                                class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                                src="images/catalog/photo.svg" alt="Photo" width="80"
                                                                height="80">
                                                            <div class="uk-text-bolder">Photo</div>
                                                        </a>
                                                        <ul class="uk-nav uk-nav-default">
                                                            <li><a href="subcategory.php">Cameras</a></li>
                                                            <li><a href="subcategory.php">Lenses</a></li>
                                                            <li><a href="subcategory.php">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="brands.php">Brands<span class="uk-margin-xsmall-left"
                                            uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                                    <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical"
                                        uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                        <div class="uk-container uk-container-small uk-margin-top uk-margin-bottom">
                                            <ul class="uk-grid-small uk-child-width-1-6" uk-grid>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="Apple">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/apple.svg" alt="Apple"></figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="Samsung">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/samsung.svg" alt="Samsung">
                                                            </figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="Sony">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/sony.svg" alt="Sony"></figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="Microsoft">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/microsoft.svg" alt="Microsoft">
                                                            </figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="Intel">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/intel.svg" alt="Intel"></figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="HP">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/hp.svg" alt="HP"></figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="LG">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/lg.svg" alt="LG"></figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="Lenovo">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/lenovo.svg" alt="Lenovo">
                                                            </figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="ASUS">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/asus.svg" alt="ASUS"></figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="Acer">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/acer.svg" alt="Acer"></figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="Dell">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/dell.svg" alt="Dell"></figure>
                                                        </a></div>
                                                </li>
                                                <li>
                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                            class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                            href="#" title="Canon">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/brands/canon.svg" alt="Canon"></figure>
                                                        </a></div>
                                                </li>
                                            </ul>
                                            <div class="uk-text-center uk-margin"><a
                                                    class="uk-link-muted uk-text-uppercase tm-link-to-all"
                                                    href="brands.php"><span>See all brands</span><span
                                                        uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Pages<span class="uk-margin-xsmall-left"
                                            uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                                    <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical"
                                        uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                        <div class="uk-container uk-container-small uk-margin-top uk-margin-bottom">
                                            <ul class="uk-nav uk-nav-default uk-column-1-3">
                                                <li><a href="catalog.php">Catalog</a></li>
                                                <li><a href="category.php">Category</a></li>
                                                <li><a href="subcategory.php">Subcategory</a></li>
                                                <li><a href="product.php">Product</a></li>
                                                <li><a href="cart.php">Cart</a></li>
                                                <li><a href="checkout.php">Checkout</a></li>
                                                <li><a href="compare.php">Compare</a></li>
                                                <li><a href="brands.php">Brands</a></li>
                                                <li><a href="compare.php">Compare</a></li>
                                                <li><a href="account.php">Account</a></li>
                                                <li><a href="favorites.php">Favorites</a></li>
                                                <li><a href="personal.php">Personal</a></li>
                                                <li><a href="settings.php">Settings</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="contacts.php">Contacts</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="news.php">News</a></li>
                                                <li><a href="article.php">Article</a></li>
                                                <li><a href="faq.php">FAQ</a></li>
                                                <li><a href="delivery.php">Delivery</a></li>
                                                <li><a href="404.php">404</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contacts.php">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="uk-navbar-right"><a class="uk-navbar-toggle tm-navbar-button" href="#"
                            uk-search-icon></a>
                        <div class="uk-navbar-dropdown uk-padding-small uk-margin-remove"
                            uk-drop="mode: click;cls-drop: uk-navbar-dropdown;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                            <div class="uk-container">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <form class="uk-search uk-search-navbar uk-width-1-1"><input
                                                class="uk-search-input" type="search" placeholder="Search…" autofocus>
                                        </form>
                                    </div>
                                    <div class="uk-width-auto"><a class="uk-navbar-dropdown-close" href="#"
                                            uk-close></a></div>
                                </div>
                            </div>
                        </div><a class="uk-navbar-item uk-link-muted uk-visible@m tm-navbar-button"
                            href="compare.php"><span uk-icon="copy"></span><span class="uk-badge">3</span></a><a
                            class="uk-navbar-item uk-link-muted tm-navbar-button" href="account.php"
                            uk-icon="user"></a>
                        <div class="uk-padding-small uk-margin-remove"
                            uk-dropdown="pos: bottom-right; offset: -10; delay-hide: 200;" style="min-width: 150px;">
                            <ul class="uk-nav uk-dropdown-nav">
                                <li><a href="account.php">Orders
                                        <span>(2)</span></a></li>
                                <li><a href="favorites.php">Favorites
                                        <span>(3)</span></a></li>
                                <li><a href="personal.php">Personal</a></li>
                                <li><a href="settings.php">Settings</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Log out</a></li>
                            </ul>
                        </div><a class="uk-navbar-item uk-link-muted tm-navbar-button" href="cart.php"
                            uk-toggle="target: #cart-offcanvas" onclick="return false"><span uk-icon="cart"></span><span
                                class="uk-badge">2</span></a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                        <div class="uk-text-center">
                            <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Compare</span></li>
                            </ul>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">Compare</h1>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-overflow-auto tm-ignore-container">
                                <table class="uk-table uk-table-divider tm-compare-table">
                                    <thead>
                                        <tr class="uk-child-width-1-4">
                                            <td class="uk-table-middle uk-text-center tm-compare-column"><input
                                                    class="tm-checkbox" id="show-difference" type="checkbox"><label
                                                    for="show-difference">Show differences only</label></td>
                                            <td class="tm-compare-table-column">
                                                <div class="uk-height-1-1">
                                                    <div class="uk-grid-small uk-child-width-1-1 uk-height-1-1" uk-grid>
                                                        <div class="uk-text-center"><a
                                                                class="uk-text-small uk-text-danger" href="#"><span
                                                                    uk-icon="icon: close; ratio: .75;"></span><span
                                                                    class="uk-margin-xsmall-left tm-pseudo">Delete</span></a>
                                                        </div>
                                                        <div>
                                                            <div class="uk-grid-small uk-height-1-1" uk-grid="uk-grid">
                                                                <div class="uk-width-1-3">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/1/1-small.jpg"
                                                                                    alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="uk-width-expand">
                                                                    <div
                                                                        class="tm-product-card-body uk-padding-remove uk-height-1-1">
                                                                        <div class="tm-product-card-info">
                                                                            <div
                                                                                class="uk-text-meta uk-margin-xsmall-bottom">
                                                                                Laptop</div><a
                                                                                class="tm-product-card-title"
                                                                                href="product.php">Apple MacBook Pro
                                                                                15&quot; Touch Bar MPTU2LL/A 256GB
                                                                                (Silver)</a>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices"><del
                                                                                    class="uk-text-meta">$1899.00</del>
                                                                                <div class="tm-product-card-price">
                                                                                    $1599.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add"><button
                                                                                    class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                        class="tm-product-add-button-icon"
                                                                                        uk-icon="cart"></span><span
                                                                                        class="tm-product-card-add-button-text">add
                                                                                        to cart</span></button></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tm-compare-table-column">
                                                <div class="uk-height-1-1">
                                                    <div class="uk-grid-small uk-child-width-1-1 uk-height-1-1" uk-grid>
                                                        <div class="uk-text-center"><a
                                                                class="uk-text-small uk-text-danger" href="#"><span
                                                                    uk-icon="icon: close; ratio: .75;"></span><span
                                                                    class="uk-margin-xsmall-left tm-pseudo">Delete</span></a>
                                                        </div>
                                                        <div>
                                                            <div class="uk-grid-small uk-height-1-1" uk-grid="uk-grid">
                                                                <div class="uk-width-1-3">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/2/2-small.jpg"
                                                                                    alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="uk-width-expand">
                                                                    <div
                                                                        class="tm-product-card-body uk-padding-remove uk-height-1-1">
                                                                        <div class="tm-product-card-info">
                                                                            <div
                                                                                class="uk-text-meta uk-margin-xsmall-bottom">
                                                                                Laptop</div><a
                                                                                class="tm-product-card-title"
                                                                                href="product.php">Apple MacBook
                                                                                12&quot; MNYN2LL/A 512GB (Rose Gold)</a>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices">
                                                                                <div class="tm-product-card-price">
                                                                                    $1549.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add"><button
                                                                                    class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                        class="tm-product-add-button-icon"
                                                                                        uk-icon="cart"></span><span
                                                                                        class="tm-product-card-add-button-text">add
                                                                                        to cart</span></button></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tm-compare-table-column">
                                                <div class="uk-height-1-1">
                                                    <div class="uk-grid-small uk-child-width-1-1 uk-height-1-1" uk-grid>
                                                        <div class="uk-text-center"><a
                                                                class="uk-text-small uk-text-danger" href="#"><span
                                                                    uk-icon="icon: close; ratio: .75;"></span><span
                                                                    class="uk-margin-xsmall-left tm-pseudo">Delete</span></a>
                                                        </div>
                                                        <div>
                                                            <div class="uk-grid-small uk-height-1-1" uk-grid="uk-grid">
                                                                <div class="uk-width-1-3">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/6/6-small.jpg"
                                                                                    alt="Apple MacBook Air 13&quot; MQD32LL/A 128GB (Silver)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="uk-width-expand">
                                                                    <div
                                                                        class="tm-product-card-body uk-padding-remove uk-height-1-1">
                                                                        <div class="tm-product-card-info">
                                                                            <div
                                                                                class="uk-text-meta uk-margin-xsmall-bottom">
                                                                                Laptop</div><a
                                                                                class="tm-product-card-title"
                                                                                href="product.php">Apple MacBook Air
                                                                                13&quot; MQD32LL/A 128GB (Silver)</a>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices">
                                                                                <div class="tm-product-card-price">
                                                                                    $849.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add"><button
                                                                                    class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                        class="tm-product-add-button-icon"
                                                                                        uk-icon="cart"></span><span
                                                                                        class="tm-product-card-add-button-text">add
                                                                                        to cart</span></button></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th colspan="4">
                                                <h3 class="uk-margin-remove">Performance</h3>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Processor</th>
                                            <td>Intel&nbsp;Core i7&nbsp;Quad-Core</td>
                                            <td>Intel&nbsp;Core i5&nbsp;Dual-Core</td>
                                            <td>Intel&nbsp;Core i5&nbsp;Dual-Core</td>
                                        </tr>
                                        <tr>
                                            <th>Base Clock Speed</th>
                                            <td>2.8&nbsp;GHz</td>
                                            <td>1.3&nbsp;GHz</td>
                                            <td>1.8&nbsp;GHz</td>
                                        </tr>
                                        <tr>
                                            <th>Maximum Boost Speed</th>
                                            <td>3.8&nbsp;GHz</td>
                                            <td>3.2&nbsp;GHz</td>
                                            <td>2.9&nbsp;GHz</td>
                                        </tr>
                                        <tr>
                                            <th>Total Installed Memory</th>
                                            <td>16&nbsp;GB</td>
                                            <td>8&nbsp;GB</td>
                                            <td>8&nbsp;GB</td>
                                        </tr>
                                        <tr>
                                            <th>Memory Type</th>
                                            <td>LPDDR3&nbsp;SDRAM</td>
                                            <td>LPDDR3&nbsp;SDRAM</td>
                                            <td>LPDDR3&nbsp;SDRAM</td>
                                        </tr>
                                        <tr>
                                            <th>Memory Speed</th>
                                            <td>2133&nbsp;MHz</td>
                                            <td>1866&nbsp;MHz</td>
                                            <td>1600&nbsp;MHz</td>
                                        </tr>
                                        <tr>
                                            <th>Onboard Memory</th>
                                            <td>16&nbsp;GB</td>
                                            <td>8&nbsp;GB</td>
                                            <td>8&nbsp;GB</td>
                                        </tr>
                                        <tr>
                                            <th>Available Memory Slots</th>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <th>Graphics Type</th>
                                            <td>Hybrid</td>
                                            <td>Integrated</td>
                                            <td>Integrated</td>
                                        </tr>
                                        <tr>
                                            <th>GPU</th>
                                            <td>AMD Radeon&nbsp;Pro 555 with 2&nbsp;GB&nbsp;GDDR5 VRAM,<br>Intel HD
                                                Graphics&nbsp;630</td>
                                            <td>Intel HD Graphics&nbsp;615</td>
                                            <td>Intel HD Graphics&nbsp;6000</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th colspan="4">
                                                <h3 class="uk-margin-remove">Display</h3>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Graphics Type</th>
                                            <td>IPS</td>
                                            <td>IPS</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>Size</th>
                                            <td>15.4"</td>
                                            <td>12"</td>
                                            <td>13.3"</td>
                                        </tr>
                                        <tr>
                                            <th>Aspect Ratio</th>
                                            <td>16:10</td>
                                            <td>16:10</td>
                                            <td>16:10</td>
                                        </tr>
                                        <tr>
                                            <th>Native Resolution</th>
                                            <td>2880×1800</td>
                                            <td>2304×1440</td>
                                            <td>1440×900</td>
                                        </tr>
                                        <tr>
                                            <th>Touchscreen</th>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <th>Finish</th>
                                            <td>Glossy</td>
                                            <td>Glossy</td>
                                            <td>Glossy</td>
                                        </tr>
                                        <tr>
                                            <th>Brightness</th>
                                            <td>500&nbsp;cd/m<sup>2</sup></td>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>Viewing Angle</th>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>Refresh Rate</th>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>Response Time</th>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>Adaptive Sync Technology</th>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>External Resolution</th>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th colspan="4">
                                                <h3 class="uk-margin-remove">Drives</h3>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Available Slots</th>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <th>Total Capacity</th>
                                            <td>256&nbsp;GB</td>
                                            <td>512&nbsp;GB</td>
                                            <td>128&nbsp;GB</td>
                                        </tr>
                                        <tr>
                                            <th>Solid State Storage</th>
                                            <td>1 × 256&nbsp;GB&nbsp;Integrated PCIe</td>
                                            <td>1 × 512&nbsp;GB&nbsp;Integrated PCIe</td>
                                            <td>1 × 128&nbsp;GB&nbsp;Integrated PCIe</td>
                                        </tr>
                                        <tr>
                                            <th>Optical Drive</th>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th colspan="4">
                                                <h3 class="uk-margin-remove">Input/ Output Connectors</h3>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Ports</th>
                                            <td>4 × Thunderbolt 3&nbsp;via USB Type-C</td>
                                            <td>1 × USB 3.1 Gen 1&nbsp;Type-C</td>
                                            <td>2 × USB 3.1 Gen 1&nbsp;Type-A,<br>1 × Thunderbolt 2</td>
                                        </tr>
                                        <tr>
                                            <th>Display</th>
                                            <td>4 × DisplayPort&nbsp;via Type-C</td>
                                            <td>1 × DisplayPort&nbsp;1.2&nbsp;via Optional Cable,<br>1 × HDMI&nbsp;via
                                                Optional Cable,<br>1 × VGA&nbsp;via Optional Cable</td>
                                            <td>1 × Mini DisplayPort&nbsp;via Thunderbolt Port</td>
                                        </tr>
                                        <tr>
                                            <th>Audio</th>
                                            <td>1 × 1/8" (3.5&nbsp;mm) Headphone Output,<br>2 × Integrated Speaker,<br>3
                                                × Integrated Microphone</td>
                                            <td>1 × 1/8" (3.5&nbsp;mm) Headphone Output,<br>2 × Integrated Speaker,<br>2
                                                × Integrated Microphone</td>
                                            <td>1 × 1/8" (3.5&nbsp;mm) Headphone Output,<br>2 × Integrated Speaker,<br>2
                                                × Integrated Microphone</td>
                                        </tr>
                                        <tr>
                                            <th>Expansion Slots</th>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <th>Media Card Slots</th>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>SD/SDHC/SDXC</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th colspan="4">
                                                <h3 class="uk-margin-remove">Communications</h3>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Network</th>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <th>Modem</th>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <th>Wi-Fi</th>
                                            <td>802.11ac; Dual-Band</td>
                                            <td>802.11ac; Dual-Band</td>
                                            <td>802.11ac; Dual-Band</td>
                                        </tr>
                                        <tr>
                                            <th>Bluetooth</th>
                                            <td>Bluetooth 4.2</td>
                                            <td>Bluetooth 4.2</td>
                                            <td>Bluetooth 4.0</td>
                                        </tr>
                                        <tr>
                                            <th>Mobile Broadband</th>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <th>GPS</th>
                                            <td>Not specified</td>
                                            <td>—</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>NFC</th>
                                            <td>Not specified</td>
                                            <td>—</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>Webcam</th>
                                            <td>User-Facing: 720p Video</td>
                                            <td>User-Facing: 480p Video</td>
                                            <td>User-Facing: 720p Video</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th colspan="4">
                                                <h3 class="uk-margin-remove">Battery</h3>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Battery Chemistry</th>
                                            <td>Lithium-Ion Polymer</td>
                                            <td>Lithium-Ion Polymer</td>
                                            <td>Lithium-Ion Polymer</td>
                                        </tr>
                                        <tr>
                                            <th>Watt Hours / Type</th>
                                            <td>76&nbsp;Wh&nbsp;Non-Removable</td>
                                            <td>41.4&nbsp;Wh&nbsp;Non-Removable</td>
                                            <td>54&nbsp;Wh&nbsp;Non-Removable</td>
                                        </tr>
                                        <tr>
                                            <th>Cells</th>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>Output Voltage</th>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>Maximum Runtime</th>
                                            <td>10&nbsp;Hours</td>
                                            <td>10&nbsp;Hours</td>
                                            <td>12&nbsp;Hours</td>
                                        </tr>
                                        <tr>
                                            <th>Power Requirements</th>
                                            <td>100-240&nbsp;VAC, 50-60&nbsp;Hz</td>
                                            <td>100-240&nbsp;VAC, 50-60&nbsp;Hz</td>
                                            <td>100-240&nbsp;VAC, 50-60&nbsp;Hz</td>
                                        </tr>
                                        <tr>
                                            <th>Power Supply</th>
                                            <td>1 × 87&nbsp;W</td>
                                            <td>1 × 29&nbsp;W</td>
                                            <td>1 × 45&nbsp;W</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th colspan="4">
                                                <h3 class="uk-margin-remove">General</h3>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Operating System</th>
                                            <td>macOS High Sierra</td>
                                            <td>macOS High Sierra</td>
                                            <td>macOS High Sierra</td>
                                        </tr>
                                        <tr>
                                            <th>Security</th>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                            <td>Not specified</td>
                                        </tr>
                                        <tr>
                                            <th>Keyboard</th>
                                            <td>Keys: 64,<br>Type: Standard Notebook Keyboard,<br>Features: Backlight
                                            </td>
                                            <td>Keys: 78,<br>Type: Standard Notebook Keyboard,<br>Features: Backlight
                                            </td>
                                            <td>Keys: 78,<br>Type: Standard Notebook Keyboard,<br>Features: Backlight
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Pointing Device</th>
                                            <td>Force Touch Trackpad</td>
                                            <td>Force Touch Trackpad</td>
                                            <td>TouchPad</td>
                                        </tr>
                                        <tr>
                                            <th>Dimensions (W × H × D)</th>
                                            <td>13.8 × 0.6 × 9.5"&nbsp;/&nbsp;35.1 × 1.5 × 24.1&nbsp;cm</td>
                                            <td>11.0 × 0.5 × 7.7"&nbsp;/&nbsp;27.9 × 1.3 × 19.6&nbsp;cm</td>
                                            <td>12.8 × 0.7 × 8.9"&nbsp;/&nbsp;32.5 × 1.8 × 22.6&nbsp;cm</td>
                                        </tr>
                                        <tr>
                                            <th>Weight</th>
                                            <td>4.02&nbsp;lb&nbsp;/&nbsp;1.82&nbsp;kg</td>
                                            <td>2.03&nbsp;lb&nbsp;/&nbsp;.92&nbsp;kg</td>
                                            <td>2.96&nbsp;lb&nbsp;/&nbsp;1.34&nbsp;kg</td>
                                        </tr>
                                        <tr>
                                            <th>Warranty Length</th>
                                            <td>Limited 1-Year Warranty</td>
                                            <td>Limited 1-Year Warranty</td>
                                            <td>Limited 1-Year Warranty</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="uk-section uk-section-default uk-section-small">
                <div class="uk-container">
                    <div uk-slider>
                        <ul
                            class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid">
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: star; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Mauris placerat</div>
                                        <div class="uk-text-meta">Donec mollis nibh dolor, sit amet auctor</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: receiver; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Lorem ipsum</div>
                                        <div class="uk-text-meta">Sit amet, consectetur adipiscing elit</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: location; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Proin pharetra</div>
                                        <div class="uk-text-meta">Nec quam a fermentum ut viverra</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: comments; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Praesent ultrices</div>
                                        <div class="uk-text-meta">Praesent ultrices, orci nec finibus</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: happy; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Duis condimentum</div>
                                        <div class="uk-text-meta">Pellentesque eget varius arcu</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <section class="uk-section uk-section-secondary uk-section-small uk-light">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-4@m" uk-grid>
                        <div><a class="uk-logo" href="index.php"><img src="images/logo-inverse.svg" width="90"
                                    height="32" alt="Logo"></a>
                            <p class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut
                                mauris eros. Nulla quis ante sed tortor efficitur facilisis.</p>
                            <ul class="uk-iconnav">
                                <li><a href="#" title="Facebook" uk-icon="facebook"></a></li>
                                <li><a href="#" title="Twitter" uk-icon="twitter"></a></li>
                                <li><a href="#" title="YouTube" uk-icon="youtube"></a></li>
                                <li><a href="#" title="Instagram" uk-icon="instagram"></a></li>
                            </ul>
                        </div>
                        <div>
                            <nav class="uk-grid-small uk-child-width-1-2" uk-grid>
                                <div>
                                    <ul class="uk-nav uk-nav-default">
                                        <li><a href="catalog.php">Catalog</a></li>
                                        <li><a href="brands.php">Brands</a></li>
                                        <li><a href="delivery.php">Delivery</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
                                        <li><a href="#">Payment</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-nav uk-nav-default">
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contacts.php">Contacts</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="news.php">News</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div>
                            <ul class="uk-list uk-text-small">
                                <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right"
                                            uk-icon="receiver"></span><span class="tm-pseudo">8 800 799 99 99</span></a>
                                </li>
                                <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right"
                                            uk-icon="mail"></span><span class="tm-pseudo">example@example.com</span></a>
                                </li>
                                <li>
                                    <div class="uk-text-muted"><span class="uk-margin-small-right"
                                            uk-icon="location"></span><span>St.&nbsp;Petersburg,
                                            Nevsky&nbsp;Prospect&nbsp;28</span></div>
                                </li>
                                <li>
                                    <div class="uk-text-muted"><span class="uk-margin-small-right"
                                            uk-icon="clock"></span><span>Daily 10:00–22:00</span></div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <form class="uk-form-stacked"><label>
                                    <div class="uk-form-label uk-text-muted">Subscribe for updates</div>
                                    <div class="uk-inline uk-width-1-1"><a class="uk-form-icon uk-form-icon-flip"
                                            href="#" uk-icon="mail"></a><input class="uk-input" type="email"
                                            placeholder="Your email" required></div>
                                </label></form>
                            <div class="uk-margin uk-text-small uk-text-muted">Shopping Categories icons by Jaro Sigrist
                                from Noun Project</div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <div id="nav-offcanvas" uk-offcanvas="overlay: true">
            <aside class="uk-offcanvas-bar uk-padding-remove">
                <div class="uk-card uk-card-default uk-card-small tm-shadow-remove">
                    <header class="uk-card-header uk-flex uk-flex-middle">
                        <div><a class="uk-link-muted uk-text-bold" href="#">8 800 799 99 99</a>
                            <div class="uk-text-xsmall uk-text-muted" style="margin-top: -2px;">
                                <div>St.&nbsp;Petersburg, Nevsky&nbsp;Prospect&nbsp;28</div>
                                <div>Daily 10:00–22:00</div>
                            </div>
                        </div>
                    </header>
                    <nav class="uk-card-small uk-card-body">
                        <ul class="uk-nav-default uk-nav-parent-icon uk-list-divider" uk-nav>
                            <li class="uk-parent"><a href="catalog.php">Catalog</a>
                                <ul class="uk-nav-sub uk-list-divider">
                                    <li><a href="subcategory.php">Laptops &amp; Tablets</a></li>
                                    <li><a href="subcategory.php">Phones &amp; Gadgets</a></li>
                                    <li><a href="subcategory.php">TV &amp; Video</a></li>
                                    <li><a href="subcategory.php">Games &amp; Entertainment</a></li>
                                    <li><a href="subcategory.php">Photo</a></li>
                                    <li class="uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                                            href="catalog.php"><span>see all categories</span><span
                                                uk-icon="icon: chevron-right; ratio: .75;"></span></a></li>
                                </ul>
                            </li>
                            <li class="uk-parent"><a href="brands.php">Brands</a>
                                <ul class="uk-nav-sub uk-list-divider">
                                    <li><a href="subcategory.php">Apple</a></li>
                                    <li><a href="subcategory.php">Samsung</a></li>
                                    <li><a href="subcategory.php">Sony</a></li>
                                    <li><a href="subcategory.php">Microsoft</a></li>
                                    <li><a href="subcategory.php">Intel</a></li>
                                    <li><a href="subcategory.php">HP</a></li>
                                    <li><a href="subcategory.php">LG</a></li>
                                    <li><a href="subcategory.php">Lenovo</a></li>
                                    <li><a href="subcategory.php">ASUS</a></li>
                                    <li><a href="subcategory.php">Acer</a></li>
                                    <li><a href="subcategory.php">Dell</a></li>
                                    <li><a href="subcategory.php">Canon</a></li>
                                    <li class="uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                                            href="brands.php"><span>see all brands</span><span
                                                uk-icon="icon: chevron-right; ratio: .75;"></span></a></li>
                                </ul>
                            </li>
                            <li class="uk-parent"><a href="#">Pages</a>
                                <ul class="uk-nav-sub uk-list-divider">
                                    <li><a href="subcategory.php">Catalog</a></li>
                                    <li><a href="subcategory.php">Category</a></li>
                                    <li><a href="subcategory.php">Subcategory</a></li>
                                    <li><a href="subcategory.php">Product</a></li>
                                    <li><a href="subcategory.php">Cart</a></li>
                                    <li><a href="subcategory.php">Checkout</a></li>
                                    <li><a href="subcategory.php">Compare</a></li>
                                    <li><a href="subcategory.php">Brands</a></li>
                                    <li><a href="subcategory.php">Compare</a></li>
                                    <li><a href="subcategory.php">Account</a></li>
                                    <li><a href="subcategory.php">Favorites</a></li>
                                    <li><a href="subcategory.php">Personal</a></li>
                                    <li><a href="subcategory.php">Settings</a></li>
                                    <li><a href="subcategory.php">About</a></li>
                                    <li><a href="subcategory.php">Contacts</a></li>
                                    <li><a href="subcategory.php">Blog</a></li>
                                    <li><a href="subcategory.php">News</a></li>
                                    <li><a href="subcategory.php">Article</a></li>
                                    <li><a href="subcategory.php">FAQ</a></li>
                                    <li><a href="subcategory.php">Delivery</a></li>
                                    <li><a href="subcategory.php">404</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contacts.php">Contacts</a></li>
                            <li><a href="compare.php">Compare<span class="uk-badge uk-margin-xsmall-left">3</span></a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="uk-card-small uk-card-body">
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="news.php">News</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="#">Payment</a></li>
                        </ul>
                    </nav>
                    <nav class="uk-card-body">
                        <ul class="uk-iconnav uk-flex-center">
                            <li><a href="#" title="Facebook" uk-icon="facebook"></a></li>
                            <li><a href="#" title="Twitter" uk-icon="twitter"></a></li>
                            <li><a href="#" title="YouTube" uk-icon="youtube"></a></li>
                            <li><a href="#" title="Instagram" uk-icon="instagram"></a></li>
                        </ul>
                    </nav>
                </div>
            </aside>
        </div>
        <div id="cart-offcanvas" uk-offcanvas="overlay: true; flip: true">
            <aside class="uk-offcanvas-bar uk-padding-remove">
                <div
                    class="uk-card uk-card-default uk-card-small uk-height-1-1 uk-flex uk-flex-column tm-shadow-remove">
                    <header class="uk-card-header uk-flex uk-flex-middle">
                        <div class="uk-grid-small uk-flex-1" uk-grid>
                            <div class="uk-width-expand">
                                <div class="uk-h3">Cart</div>
                            </div><button class="uk-offcanvas-close" type="button" uk-close></button>
                        </div>
                    </header>
                    <div class="uk-card-body uk-overflow-auto">
                        <ul class="uk-list uk-list-divider">
                            <li class="uk-visible-toggle">
                                <arttcle>
                                    <div class="uk-grid-small" uk-grid>
                                        <div class="uk-width-1-4">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/1/1-small.jpg"
                                                            alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-text-meta uk-text-xsmall">Laptop</div><a
                                                class="uk-link-heading uk-text-small" href="product.php">Apple MacBook
                                                Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)</a>
                                            <div class="uk-margin-xsmall uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-text-bolder uk-text-small">$1599.00</div>
                                                <div class="uk-text-meta uk-text-xsmall">1 × $1599.00</div>
                                            </div>
                                        </div>
                                        <div><a class="uk-icon-link uk-text-danger uk-invisible-hover" href="#"
                                                uk-icon="icon: close; ratio: .75" uk-tooltip="Remove"></a></div>
                                    </div>
                                </arttcle>
                            </li>
                            <li class="uk-visible-toggle">
                                <arttcle>
                                    <div class="uk-grid-small" uk-grid>
                                        <div class="uk-width-1-4">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/2/2-small.jpg"
                                                            alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)">
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-text-meta uk-text-xsmall">Laptop</div><a
                                                class="uk-link-heading uk-text-small" href="product.php">Apple MacBook
                                                12&quot; MNYN2LL/A 512GB (Rose Gold)</a>
                                            <div class="uk-margin-xsmall uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-text-bolder uk-text-small">$1549.00</div>
                                                <div class="uk-text-meta uk-text-xsmall">1 × $1549.00</div>
                                            </div>
                                        </div>
                                        <div><a class="uk-icon-link uk-text-danger uk-invisible-hover" href="#"
                                                uk-icon="icon: close; ratio: .75" uk-tooltip="Remove"></a></div>
                                    </div>
                                </arttcle>
                            </li>
                        </ul>
                    </div>
                    <footer class="uk-card-footer">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-expand uk-text-muted uk-h4">Subtotal</div>
                            <div class="uk-h4 uk-text-bolder">$3148.00</div>
                        </div>
                        <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-margin-small" uk-grid>
                            <div><a class="uk-button uk-button-default uk-margin-small uk-width-1-1"
                                    href="cart.php">view cart</a></div>
                            <div><a class="uk-button uk-button-primary uk-margin-small uk-width-1-1"
                                    href="checkout.php">checkout</a></div>
                        </div>
                    </footer>
                </div>
            </aside>
        </div>
    </div>
    <script src="scripts/script.js"></script>
    <script src="maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap"
        async defer></script>
</body>

</html>