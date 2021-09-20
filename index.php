<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/head.php') ?>
</head>

<body>
    <!--  -->
    <header>
        <?php include('inc/navbar.php') ?>
    </header>
    <!-- Content -->
    <div class="container">
        <div class="container-fluid mt-5">
            <?php
            $folder = isset($_GET['folder']) ? $_GET['folder'] : 'pages/';
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            require_once($folder . $page . '.php');
            ?>
        </div>
        <!-- JavaScript -->
        <?php include('inc/script.php') ?>
    </div>
    <!-- Footer -->
    <section>
        <?php include('inc/footer.php') ?>
    </section>
</body>

</html>