<?php
require_once('php/connect.php');
// if(isset($_GET['tag'])){
//     $tag = $_GET['tag'];

// }else{
//     $tag = 'all';
// }

// $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
// $sql = "SELECT * FROM `articles` WHERE `tag` LIKE '%".$tag."%'";
// $result = $conn->query($sql);
// if(!$result){
//     header('Location: blog.php');
// }


$tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
$tag = mysqli_real_escape_string($conn, $tag); // ป้องกัน quote และ injection
$sql = "SELECT * FROM `articles` WHERE `tag` LIKE '%$tag%'";
$result = $conn->query($sql);

if(!$result){
    header('Location: blog.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<!-- เบราว์เซอร์อาจเก็บแคชของหน้าเว็บเก่า ลองกด Ctrl + Shift + R หรือเปิดในโหมด Incognito (ไม่ระบุตัวตน) เพื่อตรวจสอบ 
     ล้างแคชด้วยการกด F12 → ไปที่ Network → ติ๊ก Disable cache → รีเฟรช-->


<head>
    <meta charset="UTF-8">
    <!-- ทำให้บนมือถือซูมไม่ได้ (เฉพาะบางเบราเซอร์)-->
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" c content="ie=edge">
    <title>BookWEB</title>
    <meta name="title" content="BookWEB">
    <meta name="description"
        content="รับทำเว็บไซต์ด้วย HTML, CSS, JS, PHP พร้อมใช้ XAMPP, GitHub และ Generative AI ได้ ภาษาไทยดี อังกฤษพอใช้ จบครุศาสตร์อุตสาหกรรม วิศวกรรมคอมพิวเตอร์ มทร.ล้านนา เชียงใหม่">
    <meta name="keywords" content="HTML,CSS,javascript">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://metatags.io/" />
    <meta property="og:title" content="BookWEB" />
    <meta property="og:description"
        content="รับทำเว็บไซต์ด้วย HTML, CSS, JS, PHP พร้อมใช้ XAMPP, GitHub และ Generative AI ได้ ภาษาไทยดี อังกฤษพอใช้ จบครุศาสตร์อุตสาหกรรม วิศวกรรมคอมพิวเตอร์ มทร.ล้านนา เชียงใหม่" />
    <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://metatags.io/" />
    <meta property="twitter:title" content="BookWEB" />
    <meta property="twitter:description"
        content="รับทำเว็บไซต์ด้วย HTML, CSS, JS, PHP พร้อมใช้ XAMPP, GitHub และ Generative AI ได้ ภาษาไทยดี อังกฤษพอใช้ จบครุศาสตร์อุตสาหกรรม วิศวกรรมคอมพิวเตอร์ มทร.ล้านนา เชียงใหม่" />
    <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Meta Tags Generated with https://metatags.io -->


    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="assets/images/favicons/favicon.svg" />
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="BookWeb" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Section Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</head>

<body>


    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Section header -->
    <header data-jarallax='{"speed":0.6}' class="page-title jarallax"
        style="background-image: url('https://images.unsplash.com/photo-1484417894907-623942c8ee29?w=1350&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGNvZGV8ZW58MHx8MHx8fDA%3D');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 font-weight -bold">บทความ</h1>
                    <p class="lead">" สังคมแห่งการให้ความรู้ "</p>
                </div>
            </div>
        </div>
    </header>



    <!-- Section Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Section Blog -->
    <section class="container  py-5">
        <div class="row">

            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=all">
                        <button class="btn btn-primary active">ทั้งหมด</button>
                    </a>
                    <a href="blog.php?tag=html">
                        <button class="btn btn-primary">HTML</button>
                    </a>
                    <a href="blog.php?tag=css">
                        <button class="btn btn-primary">CSS</button>
                    </a>
                    <a href="blog.php?tag=Javascript">
                        <button class="btn btn-primary">Javascript</button>
                    </a>
                    <a href="blog.php?tag=PHP">
                        <button class="btn btn-primary">PHP</button>
                    </a>
                    <a href="blog.php?tag=MySQL">
                        <button class="btn btn-primary">MySQL</button>
                    </a>
                  
                </div>
            </div>
        </div>
        <div class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <section class="col-12 col-sm-6 col-md-4 p-3">
                    <div class="card h-100 ">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                            <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                            <p class="card-text"><?php echo $row['sub_title'] ?></p>
                            <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                </section>
            <?php } ?>

        </div>
    </section>

    <!-- Footer -->
    <?php include_once('includes/footer.php') ?>

    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>