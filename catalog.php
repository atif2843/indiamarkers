<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalog</title>
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
                                <li><span>Catalog</span></li>
                            </ul>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">Catalog</h1>
                            <!--<div class="uk-text-meta uk-margin-xsmall-top">641 items</div>-->
                        </div>
                        <div>
                            <div class="uk-grid-medium" uk-grid>
                                <aside class="uk-width-1-4 uk-visible@m tm-aside-column">
                                    <nav class="uk-card uk-card-default uk-card-body uk-card-small"
                                        uk-sticky="bottom: true; offset: 90">
                                        <ul class="uk-nav uk-nav-default"
                                            uk-scrollspy-nav="closest: li; scroll: true; offset: 90">
                                            <li><a href="#Metal_Marker">Metal Marker</a></li>
                                            <li><a href="#Textile_Markers">Textile Markers</a></li>
                                            <li><a href="#Paint_Marker">Paint Marker</a></li>
                                            <li><a href="#Stainless_Steel_Marker">Stainless Steel Marker</a></li>
                                            <li><a href="#Plastic_Marker">Plastic Marker</a></li>
                                            <li><a href="#Chalk_Marking">Chalk Marking</a></li>
                                            <li><a href="#Security_Check">Security Check</a></li>
                                        </ul>
                                    </nav>
                                </aside>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                                        <section id="Metal_Marker">
                                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                                <header class="uk-card-header">
                                                    <div class="uk-grid-small uk-flex-middle" uk-grid><a
                                                            href="category.php"><img src="images/catalog/computers.svg"
                                                                alt="Laptops &amp; Tablets" width="50" height="50"></a>
                                                        <div class="uk-width-expand">
                                                            <h2 class="uk-h4 uk-margin-remove"><a
                                                                    class="uk-link-heading" href="category.php">Metal Marker</a></h2>
                                                            <!--<div class="uk-text-meta">367 items</div>-->
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="uk-card-body">
                                                    <ul class="uk-list">
                                                        <li><a href="subcategory.php">Metal Marker Tube Type</a></li>
                                                        <li><a href="subcategory.php">Fine Tip Metal Marker</a></li>
                                                        <li><a href="subcategory.php">Pump Type Metal Marker</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="Textile_Markers">
                                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                                <header class="uk-card-header">
                                                    <div class="uk-grid-small uk-flex-middle" uk-grid><a
                                                            href="category.php"><img src="images/catalog/phones.svg"
                                                                alt="Phones &amp; Gadgets" width="50" height="50"></a>
                                                        <div class="uk-width-expand">
                                                            <h2 class="uk-h4 uk-margin-remove"><a
                                                                    class="uk-link-heading" href="category.php">Textile Markers</a></h2>
                                                            <!--<div class="uk-text-meta">144 items</div>-->
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="uk-card-body">
                                                    <ul class="uk-list">
                                                        <li><a href="subcategory.php">Tex Marker</a></li>
                                                        <li><a href="subcategory.php">Everon Marker</a></li>
                                                        <li><a href="subcategory.php">Everon Pen</a></li>
                                                        <li><a href="subcategory.php">Textile Shrinkage Template</a></li>
                                                        <li><a href="subcategory.php">Laundry Pen</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="Paint_Marker">
                                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                                <header class="uk-card-header">
                                                    <div class="uk-grid-small uk-flex-middle" uk-grid><a
                                                            href="category.php"><img src="images/catalog/tv.svg"
                                                                alt="TV &amp; Video" width="50" height="50"></a>
                                                        <div class="uk-width-expand">
                                                            <h2 class="uk-h4 uk-margin-remove"><a
                                                                    class="uk-link-heading" href="category.php">Paint Marker</a></h2>
                                                            <!--<div class="uk-text-meta">58 items</div>-->
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="uk-card-body">
                                                    <ul class="uk-list">
                                                        <li><a href="subcategory.php">Bleed Thru</a></li>
                                                        <li><a href="subcategory.php">Galvanizer Paint Marker</a></li>
                                                        <li><a href="subcategory.php">High Temperature Marker</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="Stainless_Steel_Marker">
                                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                                <header class="uk-card-header">
                                                    <div class="uk-grid-small uk-flex-middle" uk-grid><a
                                                            href="category.php"><img src="images/catalog/games.svg"
                                                                alt="Games &amp; Entertainment" width="50"
                                                                height="50"></a>
                                                        <div class="uk-width-expand">
                                                            <h2 class="uk-h4 uk-margin-remove"><a
                                                                    class="uk-link-heading" href="category.php">Stainless Steel Marker</a></h2>
                                                            <!--<div class="uk-text-meta">13 items</div>-->
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="uk-card-body">
                                                    <ul class="uk-list">
                                                        <li><a href="subcategory.php">Nuclear Grade Stainless Steel Marker</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="Plastic_Marker">
                                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                                <header class="uk-card-header">
                                                    <div class="uk-grid-small uk-flex-middle" uk-grid><a
                                                            href="category.php"><img src="images/catalog/photo.svg"
                                                                alt="Photo" width="50" height="50"></a>
                                                        <div class="uk-width-expand">
                                                            <h2 class="uk-h4 uk-margin-remove"><a
                                                                    class="uk-link-heading"
                                                                    href="category.php">Plastic Marker</a></h2>
                                                            <!--<div class="uk-text-meta">59 items</div>-->
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="uk-card-body">
                                                    <ul class="uk-list">
                                                        <li><a href="subcategory.php">Century's Plastic Marker</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
										<section id="Chalk_Marking">
                                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                                <header class="uk-card-header">
                                                    <div class="uk-grid-small uk-flex-middle" uk-grid><a
                                                            href="category.php"><img src="images/catalog/photo.svg"
                                                                alt="Photo" width="50" height="50"></a>
                                                        <div class="uk-width-expand">
                                                            <h2 class="uk-h4 uk-margin-remove"><a
                                                                    class="uk-link-heading"
                                                                    href="category.php">Chalk Marking</a></h2>
                                                            <!--<div class="uk-text-meta">59 items</div>-->
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="uk-card-body">
                                                    <ul class="uk-list">
                                                        <li><a href="subcategory.php">Hot Marking Chalk</a></li>
                                                        <li><a href="subcategory.php">Cold Marking Chalk</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
										<section id="Security_Check">
                                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                                <header class="uk-card-header">
                                                    <div class="uk-grid-small uk-flex-middle" uk-grid><a
                                                            href="category.php"><img src="images/catalog/photo.svg"
                                                                alt="Photo" width="50" height="50"></a>
                                                        <div class="uk-width-expand">
                                                            <h2 class="uk-h4 uk-margin-remove"><a
                                                                    class="uk-link-heading"
                                                                    href="category.php">Security Check</a></h2>
                                                            <!--<div class="uk-text-meta">59 items</div>-->
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="uk-card-body">
                                                    <ul class="uk-list">
                                                        <li><a href="subcategory.php">UV Security Paint Marker</a></li>
                                                        <li><a href="subcategory.php">Temper Check</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
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