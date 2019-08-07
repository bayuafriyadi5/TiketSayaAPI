<?php
    include 'includes/user_token.php';
    include 'includes/myfirebase.php';

    // data admin
    $reference = 'Admin/'.$_SESSION['username'];
    $checkdata = $database->getReference($reference)->getValue();

    // cetak data admin
    $nama_admin_f = $checkdata['nama_admin'];
?>

<html>

<head>
    <title>Add New User — TiketSaya</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="TiketSaya, Web Dashboard TiketSaya, Login TiketSaya">
    <meta name="author" content="BWA Team">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>


    <div class="side-left">
        <div class="shortcut" onmouseover="showAdminProfile()">
            <div class="emblemapp">
                <img src="images/emblemapp.png" height="29" alt="">
            </div>
            <div class="menus">

                <div class="item-menu inactive">
                    <a href="dashboard.php">
                        <p class="icon-item-menu">
                            <i class="fab fa-delicious"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="sales.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="wisata.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-globe"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu">
                    <a href="customer.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-users"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="setting.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-cog"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="#">
                        <p class="icon-item-menu">
                            <i class="fas fa-power-off"></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="admin-profile" id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
            <div class="admin-picture">
                <img src="images/admin_picture.png" alt="">
            </div>
            <p class="admin-name">
            <?php echo $nama_admin_f; ?> 
            </p>
            <p class="admin-level">
                Super Admin
            </p>
            <ul class="admin-menus">
                <a href="dashboard.php">
                    <li>
                        My Dashboard
                    </li>
                </a>
                <a href="sales.php">
                    <li>
                        Ticket Sales
                    </li>
                </a>
                <a href="wisata.php">
                    <li>
                        Manage Wisata
                    </li>
                </a>
                <a href="customer.php">
                    <li class="active-link">
                        Customers
                    </li>
                </a>
                <a href="setting.php">
                    <li>
                        Account Settings
                    </li>
                </a>
                <a href="#">
                    <li style="padding-top: 120px;">
                        Log Out
                    </li>
                </a>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="header row">
            <div class="col-md-12">
                <p class="header-title">
                    Add New User
                </p>
                <nav aria-label="sitemap-ts breadcrumb">
                    <ol class="breadcrumb" style="margin-left: -15px; background: none;">
                        <li class="breadcrumb-item"><a style="color: #C7C7C7;" href="customer.php">Customer</a></li>
                        <li style="color: #21272C;" class="breadcrumb-item active" aria-current="page">Let's we add new
                            user
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row report-group">

            <div class="col-md-12">
                <div class="item-big-report col-md-12">

                    <div class="row">
                        <div class="col-4">
                            <div class="wrap-user-picture-circle" method="POST" action="includes/data_model.php">
                                <img class="primary-user-picture-circle" name="url_photo_profile" src="data:image/png;base64,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" />
                            </div>
                        </div>
                    </div>

                    <div class="form-new-user row">
                        <div class="col-md-6">
                            <form method="POST" action="includes/data_model.php">

                                    <div class="form-group content-sign-in">
                                            <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Username</label>
                                            <input name="username" type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama User">
                                        </div>

                                <div class="form-group content-sign-in">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Nama
                                        Pengguna</label>
                                    <input name="nama_lengkap" type="text" class="form-control input-type-primary-tiketsaya"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputPassword1">Alamat Email</label>
                                    <input name="email_address" type="text" class="form-control input-type-primary-tiketsaya"
                                        id="exampleInputPassword1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputPassword1">Kata Sandi</label>
                                    <input name="password" type="password" class="form-control input-type-primary-tiketsaya"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="title-input-type-primary-tiketsaya"
                                                for="exampleInputPassword1">Bio</label>
                                            <input name="bio" type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Bio">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="title-input-type-primary-tiketsaya"
                                                for="exampleInputPassword1">Balance (US$)</label>
                                            <input name="user_balance" type="number" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Balance">
                                        </div>
                                    </div>
                                </div>
                                <button name="addUser" type="submit" class="btn btn-primary btn-primary-tiketsaya">Save Now</button>
                                <a href="customer.php" style="margin-left: 10px;" 
                                    class="btn btn-cancel-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>

                </div>



            </div>



        </div>
    </div>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>