<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Info</title>
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
                                            <li class="uk-active"><a href="personal.php">Personal Info</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                <header class="uk-card-header">
                                    <h1 class="uk-h2">Personal Info</h1>
                                </header>
                                <div class="uk-card-body">
                                    <form class="uk-form-stacked">
                                        <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                                            <fieldset class="uk-fieldset">
                                                <legend class="uk-h4">Contact</legend>
                                                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s"
                                                    uk-grid>
                                                    <div><label>
                                                            <div class="uk-form-label">First Name</div><input
                                                                class="uk-input" type="text" value="Thomas">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">Last Name</div><input
                                                                class="uk-input" type="text" value="Bruns">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">Phone Number</div><input
                                                                class="uk-input" type="tel" value="8 (800) 555-35-35">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">Date of Birth</div><input
                                                                class="uk-input" type="date" value="1990-01-01">
                                                        </label></div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="uk-fieldset">
                                                <legend class="uk-h4">Address</legend>
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="uk-width-1-1"><label>
                                                            <div class="uk-form-label">Country</div><select
                                                                class="uk-select">
                                                                <option>Choose the country</option>
                                                                <option value="RU">Russia</option>
                                                            </select>
                                                        </label></div>
                                                </div>
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="uk-width-expand"><label>
                                                            <div class="uk-form-label">City</div><input class="uk-input"
                                                                type="text">
                                                        </label></div>
                                                    <div class="uk-width-1-3 uk-width-1-6@s"><label>
                                                            <div class="uk-form-label">Post Code</div><input
                                                                class="uk-input" type="text">
                                                        </label></div>
                                                </div>
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="uk-width-expand"><label>
                                                            <div class="uk-form-label">Street</div><input
                                                                class="uk-input" type="text">
                                                        </label></div>
                                                    <div class="uk-width-1-3 uk-width-1-6@s"><label>
                                                            <div class="uk-form-label">House</div><input
                                                                class="uk-input" type="text">
                                                        </label></div>
                                                </div>
                                                <div class="uk-grid-small uk-child-width-1-3 uk-child-width-1-4@s"
                                                    uk-grid>
                                                    <div><label>
                                                            <div class="uk-form-label">Building</div><input
                                                                class="uk-input" type="text">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">Entrance</div><input
                                                                class="uk-input" type="text">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">Floor</div><input
                                                                class="uk-input" type="text">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">Apartment</div><input
                                                                class="uk-input" type="text">
                                                        </label></div>
                                                    <div class="uk-width-1-1"><label>
                                                            <div class="uk-form-label">Comment</div><textarea
                                                                class="uk-textarea" rows="5"
                                                                placeholder="Additional information: phone numbers or doorphone code"></textarea>
                                                        </label></div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </form>
                                </div>
                                <div class="uk-card-footer uk-text-center"><button
                                        class="uk-button uk-button-primary">save</button></div>
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