<?php 
    require_once ('php/connect.php');
    $sql = "SELECT * FROM articles WHERE id = '".$_GET['id']."' ";
    $result = $conn->query($sql) or die ($conn->error);
    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();
    }
    else{
        header('Location: blog.php');
        // รีไดเรก ถ้าหาหน้าไม่เจอจะมาหน้านี้

    }
    // echo $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<!-- เบราว์เซอร์อาจเก็บแคชของหน้าเว็บเก่า ลองกด Ctrl + Shift + R หรือเปิดในโหมด Incognito (ไม่ระบุตัวตน) เพื่อตรวจสอบ 
     ล้างแคชด้วยการกด F12 → ไปที่ Network → ติ๊ก Disable cache → รีเฟรช-->

<head>
    <meta charset="UTF-8">
    <!-- ทำให้บนมือถือซูมไม่ได้ (เฉพาะบางเบราเซอร์)-->
    <meta property="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" c content="ie=edge">
    <title><?php echo $row['subject']; ?></title>
    <meta property="title" content="BookWEB">
    <meta property="description"
        content="<?php echo $row['sub_title']; ?>">
    <meta property="keywords" content="HTML,CSS,javascript">
    <meta property="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="language" content="English">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://metatags.io/" />
    <meta property="og:title" content="BookWEB" />
    <meta property="og:description"
        content="<?php echo $row['sub_title']; ?>" />
    <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://metatags.io/" />
    <meta property="twitter:title" content="BookWEB" />
    <meta property="twitter:description"
    content="<?php echo $row['sub_title']; ?>" />
    <!-- <meta property="twitter:description"
        content="รับทำเว็บไซต์ด้วย HTML, CSS, JS, PHP พร้อมใช้ XAMPP, GitHub และ Generative AI ได้ ภาษาไทยดี อังกฤษพอใช้ จบครุศาสตร์อุตสาหกรรม วิศวกรรมคอมพิวเตอร์ มทร.ล้านนา เชียงใหม่" /> -->
    <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Meta Tags Generated with https://metatags.io -->


    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="assets/images/favicons/favicon.svg" />
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <meta property="apple-mobile-web-app-title" content="BookWeb" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/owl.carousel/distassets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/distassets/owl.theme.default.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">



</head>

<body>


    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Section Page Title -->
    <header class="jarallax" data-jarallax='{"speed":0.6}'
        style="background-image: url(<?php echo $row['image']; ?>);">

        <div class="blog-image">
            <h1 class="display-4 font-weight -bold"><?php echo $row['subject']; ?></h1>
            <p class="lead"><?php echo $row['sub_title']; ?></p>
        </div>

    </header>
    <!-- Section Blog  -->
    <section class="container blog-content">
        <div class="row">
          <div class="col-12">
            <?php echo $row['detail']; ?>
          </div>
        <div class="col-12 text-right">
            <hr>
            <div class="pw-server-widget" data-id="wid-deh6i0jj">
                <p class="text-muted"><?php echo date_format(new DateTime($row['update_at']),"j F Y"); ?></p>
            </div>
        </div>
         

            <!-- owl -->
            <div class="col-12">
                <div class="owl-carousel owl-theme">

                    <section class="col-12 p-3">
                        <div class="card">
                            <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </section>
                    <section class="col-12 p-3">
                        <div class="card">
                            <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </section>
                    <section class="col-12 p-3">
                        <div class="card">
                            <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </section>
                    <section class="col-12 p-3">
                        <div class="card">
                            <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </section>
                    <section class="col-12 p-3">
                        <div class="card">
                            <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </section>
                    <section class="col-12 p-3">
                        <div class="card">
                            <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </section>
                    <section class="col-12 p-3">
                        <div class="card">
                            <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </section>
                    
                </div>
            </div>
            

            <!-- fackbook -->
            <div class="col-12">

                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous"
                    src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v22.0"></script>
                <div class="fb-comments"
                    data-width="100%"
                    data-href="https://developers.facebook.com/docs/plugins/comments#configurator3"
                    data-width="" data-numposts="5"></div>

            </div>

        </div>
    </section>



    <!-- Section Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
    <?php include_once('includes/footer.php') ?>

    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>