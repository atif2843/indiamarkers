<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings</title>
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
                                            <li><a href="favorites.php">Favorites
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
                                    <h1 class="uk-h2">Settings</h1>
                                </header>
                                <div class="uk-card-body">
                                    <form class="uk-form-stacked">
                                        <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                                            <fieldset class="uk-fieldset">
                                                <legend class="uk-h4">Email</legend>
                                                <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                                    <div><label>
                                                            <div class="uk-form-label">Current Email</div><input
                                                                class="uk-input uk-form-width-large" type="email"
                                                                value="example@example.com" disabled>
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">New Email</div><input
                                                                class="uk-input uk-form-width-large" type="email">
                                                        </label></div>
                                                    <div><button class="uk-button uk-button-primary">update
                                                            email</button></div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="uk-fieldset">
                                                <legend class="uk-h4">Password</legend>
                                                <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                                    <div><label>
                                                            <div class="uk-form-label">Current Password</div><input
                                                                class="uk-input uk-form-width-large" type="password">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">New Password</div><input
                                                                class="uk-input uk-form-width-large" type="password">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">Confirm Password</div><input
                                                                class="uk-input uk-form-width-large" type="password">
                                                        </label></div>
                                                    <div><button class="uk-button uk-button-primary">update
                                                            password</button></div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="uk-fieldset">
                                                <legend class="uk-h4">Email Notifications</legend>
                                                <ul class="uk-list uk-margin-remove">
                                                    <li><input class="tm-checkbox" id="notification-1" type="checkbox"
                                                            name="notification" value="1" checked><label
                                                            for="notification-1"><span>Weekly Newsletter</span></label>
                                                    </li>
                                                    <li><input class="tm-checkbox" id="notification-2" type="checkbox"
                                                            name="notification" value="1" checked><label
                                                            for="notification-2"><span>New Product
                                                                Announcements</span></label></li>
                                                    <li><input class="tm-checkbox" id="notification-3" type="checkbox"
                                                            name="notification" value="1" checked><label
                                                            for="notification-3"><span>Product Specials</span></label>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        <?php include('footer.php');?>
        <?php include('nav-offcanvas.php');?>
        <?php include('cart-offcanvas.php');?>
    </div>
    <script src="scripts/script.js"></script>
    <script src="maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap"
        async defer></script>
</body>

</html>