<nav
    class="navbar navbar-expand-lg border-bottom"
    style="background-color: #282626; height: 80px;"
    >
    <button
        class="btn btn"
        id="menu-toggle"
        style="background-color: #ecbe44;"
        >
        <i class="fa fa-bars" style="color: white;"></i>
    </button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h3 style="color: #ecbe44;"><?php echo $_SESSION["heading"]; ?></h3>

    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active" style="margin-top: 15px;">
                <a
                    class="nav-link"
                    style="color: white; font-size: 12px;"
                    href="#"
                    >Referral <span class="sr-only">(current)</span></a
                >
            </li>
            <img
                src="img/referral.svg"
                style="
                height: 20px;
                width: 20px;
                margin-top: 20px;
                margin-right: 20px;
                "
                />
            <li class="nav-item" style="margin-top: 15px;">
                <a
                    class="nav-link"
                    style="color: white; font-size: 12px;"
                    href="shippingcal.php"
                    >Shipping Calculator</a
                >
            </li>
            <img
                src="img/multiply.svg"
                style="
                height: 20px;
                width: 20px;
                margin-top: 20px;
                margin-right: 20px;
                "
                />
                                        <?php
                        $email = $_SESSION['email'];
                        $sql = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
                        while ($row = mysqli_fetch_assoc($sql)) { if($row['role'] !=='employee'){?>

            <li class="nav-item" style="margin-top: 15px;">
                <a
                    class="nav-link"
                    style="color: white; font-size: 12px;"
                    href="accountmanage.php"
                    >Account Management
                </a>
            </li>
            <i
                class="material-icons"
                style="color: white; margin-top: 20px; margin-right: 20px;"
                >&#xe8b8;</i
            > <?php } ?>
            <li
                class="nav-item"
                style="margin-top: 2px; text-align: right; margin-right: 10px;"
                >
                <a
                    class="nav-link"
                    style="color: #ecbe44; font-size: 12px;"
                    href="profile.php"
                    >
                            
                         <?php echo $row['first_name'].' '.$row['last_name']; } ?>
                        <br />
                    <p style="color: white;">Profile Setting</p></a
                >
            </li>
            <li class="nav-item" style="margin-top: 8px; margin-right: 20px;">
                <img
                    src="img/Ellipse_1@2x.png"
                    style="border-radius: 60px; width: 50px;"
                    class="img-fluid"
                    />
            </li>
        </ul>
    </div>
</nav>