<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500">
      <link rel="stylesheet" href="styles/style.css">
      
      
      
      
      <script src="scripts/uikit.js"></script>
      <script src="scripts/uikit-icons.js"></script>
      
      
   </head>
   <body>
      <div class="uk-offcanvas-content">
	  
         <?php include('header.php'); ?>
         <main>
		 
		<div class="uk-alert-primary  uk-position-fixed" style="z-index:5000" uk-alert>
		<div class="floatedform">
		<a class="uk-alert-close floatedform-close" uk-close></a>
		<p class="uk-text-large uk-text-bold floatedform-close">Form</p></div>
    <form>
    <fieldset class="uk-fieldset">

        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Name">
			<input class="uk-input" type="number" placeholder="Mobile Number" style="margin:10px 0">
			<input class="uk-input" type="email" placeholder="Email Address">
        </div>
		<div class="uk-margin">
            <button class="uk-button uk-button-secondary">Submit</button>
        </div>

    </fieldset>
</form>
</div>

	  
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; ratio: 7:3; autoplay:true; animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/promo/Slide_1.jpg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom hidden-slideshow-content">
                <h3 class="uk-margin-remove">Bottom</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="images/promo/Slide_2.jpg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom hidden-slideshow-content">
                <h3 class="uk-margin-remove">Metal Marker</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="images/promo/Slide_3.jpg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom hidden-slideshow-content">
                <h3 class="uk-margin-remove">Texture Marker</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
		<li>
            <img src="images/promo/Slide_4.jpg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom hidden-slideshow-content">
                <h3 class="uk-margin-remove">Stainless Steel Marker</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
		<li>
            <img src="images/promo/Slide_5.jpg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom hidden-slideshow-content">
                <h3 class="uk-margin-remove">Paint Marker</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
            
            <section class="uk-section uk-section-small">
               <div class="uk-container">
                  <h2 class="uk-text-center">Latest Products</h2>
                  <div class="uk-card uk-card-default tm-ignore-container">
                     <div class="uk-grid-collapse uk-child-width-1-3 uk-child-width-1-4@m tm-products-grid" uk-grid>
                        <article class="tm-product-card">
                           <div class="tm-product-card-media">
                              <div class="tm-ratio tm-ratio-4-3">
                                 <a class="tm-media-box" href="product.php">
                                    <div class="tm-product-card-labels"><span class="uk-label uk-label-warning">top selling</span><span class="uk-label uk-label-danger">trade-in</span></div>
                                    <figure class="tm-media-box-wrap"><img src="images/products/text-marker.jpg" alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)"/></figure>
                                 </a>
                              </div>
                           </div>
                           <div class="tm-product-card-body">
                              <div class="tm-product-card-info">
                                 <div class="uk-text-meta uk-margin-xsmall-bottom">Metal Marker</div>
                                 <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.php">Tex Marker</a></h3>
                                 <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <!--<li><span class="uk-text-muted">Diagonal display: </span><span>15.4"</span></li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i7</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">Video Card: </span><span>AMD Radeon Pro 555</span></li>-->
                                 </ul>
                              </div>
                              <div class="tm-product-card-shop">
                                 <div class="tm-product-card-prices">
                                    <del class="uk-text-meta">₹1899</del>
                                    <div class="tm-product-card-price">₹1599</div>
                                 </div>
                                 <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions"><a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to" title="Add to favorites"><span uk-icon="icon: heart; ratio: .75;"></span><span class="tm-product-card-action-text">Add to favorites</span></a><a class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to" title="Add to compare"><span uk-icon="icon: copy; ratio: .75;"></span><span class="tm-product-card-action-text">Add to compare</span></a></div>
                                    <button class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span class="tm-product-card-add-button-icon" uk-icon="cart"></span><span class="tm-product-card-add-button-text">add to cart</span></button>
                                 </div>
                              </div>
                           </div>
                        </article>
                        <article class="tm-product-card">
                           <div class="tm-product-card-media">
                              <div class="tm-ratio tm-ratio-4-3">
                                 <a class="tm-media-box" href="product.php">
                                    <div class="tm-product-card-labels"><span class="uk-label uk-label-success">new</span><span class="uk-label uk-label-danger">trade-in</span></div>
                                    <figure class="tm-media-box-wrap"><img src="images/products/everon-marker.jpg" alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)"/></figure>
                                 </a>
                              </div>
                           </div>
                           <div class="tm-product-card-body">
                              <div class="tm-product-card-info">
                                 <div class="uk-text-meta uk-margin-xsmall-bottom">Marker</div>
                                 <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.php">Everon Pen</a></h3>
                                 <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <!--<li><span class="uk-text-muted">Diagonal display: </span><span>12"</span></li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i5</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics 615</span></li>-->
                                 </ul>
                              </div>
                              <div class="tm-product-card-shop">
                                 <div class="tm-product-card-prices">
                                    <div class="tm-product-card-price">₹1549.00</div>
                                 </div>
                                 <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions"><a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to" title="Add to favorites"><span uk-icon="icon: heart; ratio: .75;"></span><span class="tm-product-card-action-text">Add to favorites</span></a><a class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to" title="Add to compare"><span uk-icon="icon: copy; ratio: .75;"></span><span class="tm-product-card-action-text">Add to compare</span></a></div>
                                    <button class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span class="tm-product-card-add-button-icon" uk-icon="cart"></span><span class="tm-product-card-add-button-text">add to cart</span></button>
                                 </div>
                              </div>
                           </div>
                        </article>
                        <article class="tm-product-card">
                           <div class="tm-product-card-media">
                              <div class="tm-ratio tm-ratio-4-3">
                                 <a class="tm-media-box" href="product.php">
                                    <figure class="tm-media-box-wrap"><img src="images/products/metal-marker-tube-type.jpg" alt="Lenovo IdeaPad YOGA 920-13IKB 80Y7001RRK (Copper)"/></figure>
                                 </a>
                              </div>
                           </div>
                           <div class="tm-product-card-body">
                              <div class="tm-product-card-info">
                                 <div class="uk-text-meta uk-margin-xsmall-bottom">Metal Marke</div>
                                 <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.php">Metal Marker Tube Type</a></h3>
                                 <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <!--<li><span class="uk-text-muted">Diagonal display: </span><span>13.9"</span></li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i7 8550U</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics 620</span></li>-->
                                 </ul>
                              </div>
                              <div class="tm-product-card-shop">
                                 <div class="tm-product-card-prices">
                                    <div class="tm-product-card-price">₹1199.00</div>
                                 </div>
                                 <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions"><a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to" title="Add to favorites"><span uk-icon="icon: heart; ratio: .75;"></span><span class="tm-product-card-action-text">Add to favorites</span></a><a class="tm-product-card-action js-add-to js-add-to-compare" title="Add to compare"><span uk-icon="icon: copy; ratio: .75;"></span><span class="tm-product-card-action-text">Add to compare</span></a></div>
                                    <button class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span class="tm-product-card-add-button-icon" uk-icon="cart"></span><span class="tm-product-card-add-button-text">add to cart</span></button>
                                 </div>
                              </div>
                           </div>
                        </article>
                        <article class="tm-product-card">
                           <div class="tm-product-card-media">
                              <div class="tm-ratio tm-ratio-4-3">
                                 <a class="tm-media-box" href="product.php">
                                    <div class="tm-product-card-labels"><span class="uk-label uk-label-warning">top selling</span></div>
                                    <figure class="tm-media-box-wrap"><img src="images/products/metal-marker-finetip.jpg" alt="ASUS Zenbook UX330UA-FC020T (Rose Gold)"/></figure>
                                 </a>
                              </div>
                           </div>
                           <div class="tm-product-card-body">
                              <div class="tm-product-card-info">
                                 <div class="uk-text-meta uk-margin-xsmall-bottom">Metal Marker</div>
                                 <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.php">Metal Marker Fine Tip</a></h3>
                                 <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <!--<li><span class="uk-text-muted">Diagonal display: </span><span>13.3"</span></li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i7-6500U</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics 520</span></li>-->
                                 </ul>
                              </div>
                              <div class="tm-product-card-shop">
                                 <div class="tm-product-card-prices">
                                    <div class="tm-product-card-price">₹749.00</div>
                                 </div>
                                 <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions"><a class="tm-product-card-action js-add-to js-add-to-favorites" title="Add to favorites"><span uk-icon="icon: heart; ratio: .75;"></span><span class="tm-product-card-action-text">Add to favorites</span></a><a class="tm-product-card-action js-add-to js-add-to-compare" title="Add to compare"><span uk-icon="icon: copy; ratio: .75;"></span><span class="tm-product-card-action-text">Add to compare</span></a></div>
                                    <button class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span class="tm-product-card-add-button-icon" uk-icon="cart"></span><span class="tm-product-card-add-button-text">add to cart</span></button>
                                 </div>
                              </div>
                           </div>
                        </article>
                        <article class="tm-product-card">
                           <div class="tm-product-card-media">
                              <div class="tm-ratio tm-ratio-4-3">
                                 <a class="tm-media-box" href="product.php">
                                    <figure class="tm-media-box-wrap"><img src="images/products/metal-marker-pump-type.jpg" alt="Dell XPS 15 9560-8968 (Silver)"/></figure>
                                 </a>
                              </div>
                           </div>
                           <div class="tm-product-card-body">
                              <div class="tm-product-card-info">
                                 <div class="uk-text-meta uk-margin-xsmall-bottom">Metal Marker</div>
                                 <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.php">Metal Marker Pump type</a></h3>
                                 <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <!--<li><span class="uk-text-muted">Diagonal display: </span><span>15.6"</span></li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i7 7700HQ</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">Video Card: </span><span>NVIDIA GeForce GTX 960M</span></li>-->
                                 </ul>
                              </div>
                              <div class="tm-product-card-shop">
                                 <div class="tm-product-card-prices">
                                    <del class="uk-text-meta">₹999.00</del>
                                    <div class="tm-product-card-price">₹949.00</div>
                                 </div>
                                 <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions"><a class="tm-product-card-action js-add-to js-add-to-favorites" title="Add to favorites"><span uk-icon="icon: heart; ratio: .75;"></span><span class="tm-product-card-action-text">Add to favorites</span></a><a class="tm-product-card-action js-add-to js-add-to-compare" title="Add to compare"><span uk-icon="icon: copy; ratio: .75;"></span><span class="tm-product-card-action-text">Add to compare</span></a></div>
                                    <button class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span class="tm-product-card-add-button-icon" uk-icon="cart"></span><span class="tm-product-card-add-button-text">add to cart</span></button>
                                 </div>
                              </div>
                           </div>
                        </article>
                        <article class="tm-product-card">
                           <div class="tm-product-card-media">
                              <div class="tm-ratio tm-ratio-4-3">
                                 <a class="tm-media-box" href="product.php">
                                    <div class="tm-product-card-labels"><span class="uk-label uk-label-danger">trade-in</span></div>
                                    <figure class="tm-media-box-wrap"><img src="images/products/temper-check.png" alt="Apple MacBook Air 13&quot; MQD32LL/A 128GB (Silver)"/></figure>
                                 </a>
                              </div>
                           </div>
                           <div class="tm-product-card-body">
                              <div class="tm-product-card-info">
                                 <div class="uk-text-meta uk-margin-xsmall-bottom">Paste</div>
                                 <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.php">Tamper Check Paste</a></h3>
                                 <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <!--<li><span class="uk-text-muted">Diagonal display: </span><span>13.3"</span></li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i5</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics 6000</span></li>-->
                                 </ul>
                              </div>
                              <div class="tm-product-card-shop">
                                 <div class="tm-product-card-prices">
                                    <div class="tm-product-card-price">₹849.00</div>
                                 </div>
                                 <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions"><a class="tm-product-card-action js-add-to js-add-to-favorites" title="Add to favorites"><span uk-icon="icon: heart; ratio: .75;"></span><span class="tm-product-card-action-text">Add to favorites</span></a><a class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to" title="Add to compare"><span uk-icon="icon: copy; ratio: .75;"></span><span class="tm-product-card-action-text">Add to compare</span></a></div>
                                    <button class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span class="tm-product-card-add-button-icon" uk-icon="cart"></span><span class="tm-product-card-add-button-text">add to cart</span></button>
                                 </div>
                              </div>
                           </div>
                        </article>
                        <article class="tm-product-card">
                           <div class="tm-product-card-media">
                              <div class="tm-ratio tm-ratio-4-3">
                                 <a class="tm-media-box" href="product.php">
                                    <figure class="tm-media-box-wrap"><img src="images/products/stainless-steel.jpg" alt="Dell Inspiron 5378-2063 (Gray)"/></figure>
                                 </a>
                              </div>
                           </div>
                           <div class="tm-product-card-body">
                              <div class="tm-product-card-info">
                                 <div class="uk-text-meta uk-margin-xsmall-bottom">Metal Marker</div>
                                 <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.php">Nuclear Grade Stainless Steel Marker</a></h3>
                                 <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <!--<li><span class="uk-text-muted">Diagonal display: </span><span>13.3"</span></li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i3-7100U</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>4&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">HDD Capacity: </span><span>1&nbsp;TB</span></li>-->
                                 </ul>
                              </div>
                              <div class="tm-product-card-shop">
                                 <div class="tm-product-card-prices">
                                    <del class="uk-text-meta">₹599.00</del>
                                    <div class="tm-product-card-price">₹579.00</div>
                                 </div>
                                 <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions"><a class="tm-product-card-action js-add-to js-add-to-favorites" title="Add to favorites"><span uk-icon="icon: heart; ratio: .75;"></span><span class="tm-product-card-action-text">Add to favorites</span></a><a class="tm-product-card-action js-add-to js-add-to-compare" title="Add to compare"><span uk-icon="icon: copy; ratio: .75;"></span><span class="tm-product-card-action-text">Add to compare</span></a></div>
                                    <button class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span class="tm-product-card-add-button-icon" uk-icon="cart"></span><span class="tm-product-card-add-button-text">add to cart</span></button>
                                 </div>
                              </div>
                           </div>
                        </article>
                        <article class="tm-product-card">
                           <div class="tm-product-card-media">
                              <div class="tm-ratio tm-ratio-4-3">
                                 <a class="tm-media-box" href="product.php">
                                    <div class="tm-product-card-labels"><span class="uk-label uk-label-success">new</span></div>
                                    <figure class="tm-media-box-wrap"><img src="images/products/laundry-marker.jpg" alt="Lenovo Yoga 720-13IKB 80X60059RK (Silver)"/></figure>
                                 </a>
                              </div>
                           </div>
                           <div class="tm-product-card-body">
                              <div class="tm-product-card-info">
                                 <div class="uk-text-meta uk-margin-xsmall-bottom">Pen</div>
                                 <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.php">Laundry Pen</a></h3>
                                 <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <!--<li><span class="uk-text-muted">Diagonal display: </span><span>13.3"</span></li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i5-7200U</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics 620</span></li>-->
                                 </ul>
                              </div>
                              <div class="tm-product-card-shop">
                                 <div class="tm-product-card-prices">
                                    <div class="tm-product-card-price">₹1099.00</div>
                                 </div>
                                 <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions"><a class="tm-product-card-action js-add-to js-add-to-favorites" title="Add to favorites"><span uk-icon="icon: heart; ratio: .75;"></span><span class="tm-product-card-action-text">Add to favorites</span></a><a class="tm-product-card-action js-add-to js-add-to-compare" title="Add to compare"><span uk-icon="icon: copy; ratio: .75;"></span><span class="tm-product-card-action-text">Add to compare</span></a></div>
                                    <button class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span class="tm-product-card-add-button-icon" uk-icon="cart"></span><span class="tm-product-card-add-button-text">add to cart</span></button>
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
                  <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all" href="subcategory.php"><span>View all</span><span uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
               </div>
            </section>
			
    <div class="uk-section">
    <div class="uk-container uk-text-center">
		<h1>About</h1>
		<p>ivamus ornare tortor elit, sed rutrum felis iaculis in. Nunc ut molestie neque. Aenean vitae elementum arcu, at rutrum ligula. Pellentesque fringilla dictum viverra.</p>
	</div>
	</div>

			<section class="uk-section uk-section-small">
               <div class="uk-container">
                  <h2 class="uk-text-center">Blog</h2>
                  <div class="uk-grid-medium uk-grid-match uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                     <div>
                        <a href="article.php">
                           <article class="uk-card uk-card-default uk-card-small uk-article uk-overflow-hidden uk-box-shadow-hover-large uk-height-1-1 tm-ignore-container">
                              <div class="tm-ratio tm-ratio-16-9">
                                 <figure class="tm-media-box uk-cover-container uk-margin-remove"><img src="images/articles/macbook-photo.jpg" alt="Everything You Need to Know About the MacBook Pro" uk-cover="uk-cover"/></figure>
                              </div>
                              <div class="uk-card-body">
                                 <div class="uk-article-body">
                                    <div class="uk-article-meta uk-margin-xsmall-bottom"><time>May 21, 2018</time></div>
                                    <div>
                                       <h3 class="uk-margin-remove">Everything You Need to Know About the MacBook Pro</h3>
                                    </div>
                                    <div class="uk-margin-small-top">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales eget ipsum id aliquam. Nam consectetur interdum nibh eget sodales. Cras volutpat efficitur ornare.</p>
                                    </div>
                                 </div>
                              </div>
                           </article>
                        </a>
                     </div>
                     <div>
                        <a href="article.php">
                           <article class="uk-card uk-card-default uk-card-small uk-article uk-overflow-hidden uk-box-shadow-hover-large uk-height-1-1 tm-ignore-container">
                              <div class="tm-ratio tm-ratio-16-9">
                                 <figure class="tm-media-box uk-cover-container uk-margin-remove"><img src="images/articles/macos.jpg" alt="Apple introduces macOS Mojave" uk-cover="uk-cover"/></figure>
                              </div>
                              <div class="uk-card-body">
                                 <div class="uk-article-body">
                                    <div class="uk-article-meta uk-margin-xsmall-bottom"><time>May 21, 2018</time></div>
                                    <div>
                                       <h3 class="uk-margin-remove">Apple introduces macOS Mojave</h3>
                                    </div>
                                    <div class="uk-margin-small-top">
                                       <p>Praesent consequat justo eu massa malesuada posuere. Donec ultricies tincidunt nisl, sed euismod nulla venenatis maximus. Maecenas sit amet semper tellus. Pellentesque imperdiet finibus sapien, a consectetur eros auctor a.</p>
                                    </div>
                                 </div>
                              </div>
                           </article>
                        </a>
                     </div>
                  </div>
                  <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all" href="blog.php"><span>see all articles</span><span uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
               </div>
            </section>
            <section class="uk-section uk-section-primary uk-section-small uk-light">
               <div class="uk-container">
                  <div class="uk-text-center">
                     <div class="uk-h2 uk-margin-remove">Subscribe for updates</div>
                     <div>Be aware of new products and special offers.</div>
                  </div>
                  <div class="uk-margin">
                     <form>
                        <div class="uk-grid-small uk-flex-center" uk-grid>
                           <div class="uk-width-1-1 uk-width-medium@s">
                              <div class="uk-inline uk-width-1-1"><span class="uk-form-icon" uk-icon="mail"></span><input class="uk-input" type="email" placeholder="Your email" required></div>
                           </div>
                           <div><button class="uk-button uk-button-primary">subscribe</button></div>
                        </div>
                     </form>
                  </div>
               </div>
            </section>
            <!--<section class="uk-section uk-section-default uk-section-small">
               <div class="uk-container">
                  <div uk-slider>
                     <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid">
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
            </section>-->
         </main>
                 <?php include('footer.php') ?>
      <?php include('nav-offcanvas.php') ?>
      <?php include('cart-offcanvas.php') ?>
      </div>
      <script src="scripts/script.js"></script>
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap" async defer></script>
   </body>
</html>