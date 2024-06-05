<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <img class="logo" src="logo.png" alt="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me" href="amenities.php">Amenities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me" href="contactUs.php">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex">
                <?php
                
                if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                    echo <<<data
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-dark shadow-none dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            {$_SESSION['name']}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="booking.php">Bookings</a></li>
                            <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                        </ul>
                    </div>
                data;
                } else {
                    echo <<<data
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        LOGIN
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                        REGISTER
                    </button>
                data;
                }
                ?>
            </div>
        </div>
    </div>
</nav>