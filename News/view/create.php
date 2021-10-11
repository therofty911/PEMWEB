<?php
//   include '..\..\News\controller\create.php';
//   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])){
//     createData();
//   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form News - Admin Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

    <link rel="shorcut icon" href="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/fontawesome/all.min.css">
    <link rel="stylesheet" href="../assets/vendors/toastify/toastify.css">
    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">

    <style>
        .fontawesome-icons {
            text-align: center;
        }

        article dl {
            background-color: rgba(0, 0, 0, .02);
            padding: 20px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="..\view\home_admin.php"><img src="../assets/images/logo/logo.png" alt="Logo" srcset="" style="width: 250px; height: auto;"></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
    <ul class="menu">
            <li class="sidebar-title">Main Menu</li>
            
            <li
                class="sidebar-item  ">
                <a href="..\..\News\view\dashboard.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Components</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="component-alert.html">Alert</a>
                    </li>
                </ul>
            </li>
            <li
                class="sidebar-item  ">
                <a href="..\..\News\view\create.php" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>Create</span>
                </a>
            </li>
            <li
                class="sidebar-item  ">
                <a href="..\..\News\view\list_news.php" class='sidebar-link'>
                    <i class="bi bi-card-list"></i>
                    <span>List</span>
                </a>
            </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">John Ducky</h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Hello, John!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                            Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content"> 
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Form News</h3>
                                <p class="text-subtitle text-muted">Buatlah berita yang menarik sehingga berita mu akan masuk ke rekomendasi</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- start the form -->

                    <section class="section">
                        <div class="row match-height justify-content-center">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form form-vertical" action="upload.php" method="POST" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div class="card">
                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <p class="card-text">Upload the Banner</p>
                                                                        <!-- Auto crop image file uploader -->
                                                                        <!-- <input type="file" name="image" class="image-crop-filepond" image-crop-aspect-ratio="16:9"> -->
                                                                        <input type="file" name="image" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for=" title">Title</label>
                                                                <input type="text" id="title" class="form-control" name="news_title" placeholder="Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="news_category" id="category" value="Technology">
                                                                        <label class="form-check-label" for="category">
                                                                            Technology
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="news_category" id="category" value="Music">
                                                                        <label class="form-check-label" for="category">
                                                                            Music
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="news_category" id="category" value="Game">
                                                                        <label class="form-check-label" for="category">
                                                                            Game
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="news_category" id="category" value="Politic">
                                                                        <label class="form-check-label" for="category">
                                                                            Politic
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="news_category" id="category" value="Art">
                                                                        <label class="form-check-label" for="category">
                                                                            Art
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="news_category" id="category" value="Automotive">
                                                                        <label class="form-check-label" for="category">
                                                                            Automotive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="news_category" id="category" value="Fashion">
                                                                        <label class="form-check-label" for="category">
                                                                            Fashion
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="news_category" id="category" value="Healthy">
                                                                        <label class="form-check-label" for="category">
                                                                            Healthy
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="sdesc">Short Description</label>
                                                                <input type="text" id="sdesc" class="form-control"
                                                                    name="news_short_description" placeholder="Short Description">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="fullcontent">Full content</label>
                                                                    <textarea id="dark" cols="30" rows="10" name="news_full_content"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="author">Author</label>
                                                                <input type="text" id="author" class="form-control"
                                                                    name="news_author" placeholder="Author">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="published">Published on</label>
                                                                <input type="date" id="published" class="form-control"
                                                                    name="news_published_on" placeholder="Published on">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-start mt-3">
                                                            <button type="submit" name="upload" class="btn btn-success me-1 mb-1">Submit <i class="fas fa-paper-plane"></i></button>
                                                            <button type="reset"
                                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- END THE FORM -->

                </div>  

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                                by <a href="https://ahmadsaugi.com">Saugi</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- TINYMCE TEXTAREA -->
<script src="../assets/vendors/tinymce/tinymce.min.js"></script>
<script src="../assets/vendors/tinymce/plugins/code/plugin.min.js"></script>

<!-- fontawesome-icons -->
<script src="../assets/vendors/fontawesome/all.min.js"></script>

<!-- filepond validation -->
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<!-- image editor -->
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

<!-- toastify -->
<script src="../assets/vendors/toastify/toastify.js"></script>

<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // register desired plugins...
    FilePond.registerPlugin(
        // validates the size of the file...
        FilePondPluginFileValidateSize,
        // validates the file type...
        FilePondPluginFileValidateType,
        // calculates & dds cropping info based on the input image dimensions and the set crop ratio...
        FilePondPluginImageCrop,
        // preview the image file type...
        FilePondPluginImagePreview,
        // filter the image file
        FilePondPluginImageFilter,
        // corrects mobile image orientation...
        FilePondPluginImageExifOrientation,
        // calculates & adds resize information...
        FilePondPluginImageResize,
    );
    // Filepond: Image Crop
    FilePond.create(document.querySelector('.image-crop-filepond'), {
        allowImagePreview: true,
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: true,
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });
</script>
<script>
    tinymce.init({ selector: '#default' });
    tinymce.init({ selector: '#dark', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
</script>
    
    <script src="../assets/js/mazer.js"></script>
</body>
</html>