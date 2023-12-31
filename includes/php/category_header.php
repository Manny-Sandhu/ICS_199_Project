<?php

$all = '"index.php?all=true"';
$breakfast = '"index.php?breakfast=true"';
$burger = '"index.php?burger=true"';
$pizza = '"index.php?pizza=true"';
$dessert = '"index.php?dessert=true"';
$beverage = '"index.php?beverage=true"';

if (isset($_SESSION['user_name'])) { // When user is logged in

    $sessionUser = $_SESSION['user_name'];
    $sql = "SELECT role from users where username ='$sessionUser'; ";
    $result = mysqli_query($dbc, $sql);
    $row = mysqli_fetch_array($result);

    if ($row['role'] == 'A') { // When the role of user is admin
        print '<!-- navigation bar to show categories -->
            <nav class="navbar navbar-expand-lg bg fixed-top">
                <div class="container-fluid d-flex bg">
                    <a class="navbar-brand" href="./index.php?all=true">Nom Nom Express</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="mr-5 collapse navbar-collapse justify-content-lg-end" id="navbarNavAltMarkup">

                        <!-- categories -->
                        <div class="navbar-nav align-items-center">
                            <a class="nav-link" href=' . $all . '>All</a>
                            <a class="nav-link" href=' . $breakfast . '>Breakfast</a>
                            <a class="nav-link" href=' . $burger . '>Burgers</a>
                            <a class="nav-link" href=' . $pizza . '>Pizza</a>
                            <a class="nav-link" href=' . $dessert . '>Desserts</a>
                            <a class="nav-link" href=' . $beverage . '>Beverages</a>
                            <a class="nav-link" href="./admin.php">Admin Page</a>
                            <form action="./includes/php/logout.php" method="post">	<!-- logout button form action takes you to the logout page (will probably update to just take them back to the landing page) -->
                                <input type="hidden" name="logout" value="true" >
                                <input class="nav-link" type="submit" value="Logout" > <!-- logout submit button -->
                            </form>
                        </div>

                    </div>
                </div>
            </nav>';
    } else { // When the role of user is customer
        print '<!-- navigation bar to show categories -->
                    <nav class="navbar navbar-expand-lg bg fixed-top">
                        <div class="container-fluid d-flex bg">
                            <a class="navbar-brand" href="./index.php?all=true">Nom Nom Express</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="mr-5 collapse navbar-collapse justify-content-lg-end" id="navbarNavAltMarkup">

                                <!-- categories -->
                                <div class="navbar-nav align-items-center">
                                    <a class="nav-link" href=' . $all . '>All</a>
                                    <a class="nav-link" href=' . $breakfast . '>Breakfast</a>
                                    <a class="nav-link" href=' . $burger . '>Burgers</a>
                                    <a class="nav-link" href=' . $pizza . '>Pizza</a>
                                    <a class="nav-link" href=' . $dessert . '>Desserts</a>
                                    <a class="nav-link" href=' . $beverage . '>Beverages</a>
                                    <a class="nav-link" href="./includes/php/account.php">Account Info</a>
                                    <form action="./includes/php/logout.php" method="post">	<!-- logout button form action takes you to the logout page (will probably update to just take them back to the landing page) -->
                                        <input type="hidden" name="logout" value="true" >
                                        <input class="nav-link" type="submit" value="Logout" > <!-- logout submit button -->
                                    </form>
                                    <a class="nav-link" href="./includes/php/cart.php">
                                        Cart
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </nav>';
    }
} else {
    print '<!-- navigation bar to show categories -->
            <nav class="navbar navbar-expand-lg bg fixed-top">
                <div class="container-fluid d-flex bg">
                    <a class="navbar-brand" href="./index.php?all=true">Nom Nom Express</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="mr-5 collapse navbar-collapse justify-content-lg-end" id="navbarNavAltMarkup">

                        <!-- categories -->
                        <div class="navbar-nav align-items-center">
                            <a class="nav-link" href=' . $all . '>All</a>
                            <a class="nav-link" href=' . $breakfast . '>Breakfast</a>
                            <a class="nav-link" href=' . $burger . '>Burgers</a>
                            <a class="nav-link" href=' . $pizza . '>Pizza</a>
                            <a class="nav-link" href=' . $dessert . '>Desserts</a>
                            <a class="nav-link" href=' . $beverage . '>Beverages</a>
                            <a class="nav-link btn" id="logon" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                        </div>

                    </div>
                </div>
            </nav>';
}

print '<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="loginModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">';

include('./includes/php/login.php');

print '</div>
            <div class="modal-footer">
                <a class="btn btn-primary" role="button" data-bs-target="#privacy" data-bs-toggle="modal">Create a New Account</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="privacy" aria-hidden="true" aria-labelledby="privacyModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="privacyModalLabel">General Data Protection Regulation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
            <p>
            The Canadian federal government introduced a new privacy protection law called
            the <b>General Data Protection Regulation</b>. This law requires that individuals must give explicit permission
            for their data to be used and give individuals the right to know who is accessing their information and what it
            will be used for. All companies collecting and/or using personal information on Canadian citizens must comply
            with this new law.
            </p>
            <p>
            Nom Nom Express collects the following information for purposes of Account Registration, Order Tracking and Order Delivery:
                <ul>
                    <li>Name</li> 
                    <li>Email</li> 
                    <li>Phone Number</li>
                    <li>Street Address including city, province, and postal code</li>
                </ul>
            </p>
            <p>
            To create an account you must agree to Nom Nom Express collecting this information by clicking the \'Accept\' button below.
            You can change your selection to opt out at any time in User Account settings.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-target="#loginModal" data-bs-toggle="modal">Decline</button>
                <a class="btn btn-primary" href="./includes/php/registration.php">Accept</a>
            </div>
        </div>
    </div>
</div>';
?>