
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dashboard/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dashboard/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dashboard/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dashboard/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dashboard/assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dashboard/assets/css/style.css">
<style type="text/css">
  #berita-teknologi{
    padding:5px;
  }

  .isi-berita{
    text-align:justify;
  }
</style>
<!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/dashboard/assets/js/html5shiv.min.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="pages/page.html">About</a></li>
              <li><a href="pages/contact.html">Contact</a></li>
              <li><a href="pages/404.html">Error Page</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="text" placeholder="Text to Search">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.html">mag<strong>Express</strong> <span>A Pro Magazine Template</span></a></div>
          <div class="header_bottom_right">
            <a href="<?= $iklan_header['url_iklan'] ?>">
              <img class="img-iklan" src="<?= base_url('assets/admin/upload/iklan/'.$iklan_header['img_iklan']); ?>" alt="<?= $iklan_header['judul_iklan']; ?>" style="width: 100%; height: 100px;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="index.html">Home</a></li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Archives</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="pages/archive-main.html">Archive</a></li>
                <li><a href="pages/archive1.html">Archive 1</a></li>
                <li><a href="pages/archive2.html">Archive 2</a></li>
                <li><a href="pages/archive3.html">Archive 3</a></li>
              </ul>
            </li>
            <li><a href="pages/single.html">Single page</a></li>
            <li><a href="pages/contact.html">Contact</a></li>
            <li><a href="pages/404.html">404 page</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">
              <div class="single_iteam"><img src="<?php echo base_url();?>assets/dashboard/images/550x330x1.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="<?php echo base_url();?>assets/dashboard/images/550x330x2.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="<?php echo base_url();?>assets/dashboard/images/550x330x3.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="<?php echo base_url();?>assets/dashboard/images/550x330x4.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="content_top_right">
            <ul class="featured_nav wow fadeInDown">
              <li style="width: 560px ;height: 430px">
                <img class="" src="<?= base_url('assets/admin/upload/iklan/'.$iklan_sidebar2['img_iklan']); ?>" alt="<?= $iklan_sidebar2['judul_iklan']; ?>" > 
                <div class="title_caption">
                  <a href="<?= $iklan_sidebar2['url_iklan']; ?>" ><?= $iklan_sidebar2['judul_iklan']; ?></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content_middle">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="content_middle_leftbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category1</a> </h2>
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/292x150x1.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/292x150x2.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="content_middle_middle">
          <div class="slick_slider2">
            <div class="single_featured_slide"> <a href="pages/single.html"><img src="<?php echo base_url();?>assets/dashboard/images/567x330x1.jpg" alt=""></a>
              <h2><a href="pages/single.html">Praesent vitae quam vitae arcu posuer 1</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
            <div class="single_featured_slide"> <a href="pages/single.html"><img src="<?php echo base_url();?>assets/dashboard/images/567x330x2.jpg" alt=""></a>
              <h2><a href="#">Praesent vitae quam vitae arcu posuer 2</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
            <div class="single_featured_slide"> <a href="pages/single.html"><img src="<?php echo base_url();?>assets/dashboard/images/567x330x3.jpg" alt=""></a>
              <h2><a href="#">Praesent vitae quam vitae arcu posuer 3</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category2</a> </h2>
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/292x150x1.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/292x150x2.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">TEKNOLOGI</a> </h2>
            <?php foreach ($listberitateknologi as $ba) { $jumlah = 100; ?>
              <div class="business_category_left wow fadeInDown" id="berita-teknologi">
                <ul class="fashion_catgnav">
                  <li>
                    <div class="catgimg2_container"> <a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><img alt="" src="<?php echo base_url('assets/admin/upload/berita/'.$ba['gambar']);?>"></a> </div>
                    <h2 class="catg_titile"><a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><?php echo $ba['judul_berita'];?></a></h2>
                    <div class="comments_box"> <span class="meta_date"><?php echo date('d-M-Y', strtotime($ba['tanggal'])) ?></span> <span class="meta_comment"><!-- <a href="#">No Comments</a></span> --> <span class="meta_more"><a  href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>">Read More...</a></span> </div>
                    <p class="isi-berita"><?php echo substr($ba['isi_berita'], '0', $jumlah);?></p>
                  </li>
                </ul>  
              </div>
            <?php } ?>
          </div>
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">SPORT</a> </h2>
            <?php foreach ($listberitasport as $ba) { $jumlah = 100; ?>
              <div class="business_category_left wow fadeInDown" id="berita-teknologi">
                <ul class="fashion_catgnav">
                  <li>
                    <div class="catgimg2_container"> <a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><img alt="" src="<?php echo base_url('assets/admin/upload/berita/'.$ba['gambar']);?>"></a> </div>
                    <h2 class="catg_titile"><a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><?php echo $ba['judul_berita'];?></a></h2>
                    <div class="comments_box"> <span class="meta_date"><?php echo date('d-M-Y', strtotime($ba['tanggal'])) ?></span> <span class="meta_comment"><!-- <a href="#">No Comments</a></span> --> <span class="meta_more"><a  href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>">Read More...</a></span> </div>
                    <p><?php echo substr($ba['isi_berita'], '0', $jumlah);?></p>
                  </li>
                </ul>  
              </div>
            <?php } ?>
          </div>
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">OTOMOTIF</a> </h2>
            <?php foreach ($listberitaotomotif as $ba) { $jumlah = 100; ?>
              <div class="business_category_left wow fadeInDown" id="berita-teknologi">
                <ul class="fashion_catgnav">
                  <li>
                    <div class="catgimg2_container"> <a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><img alt="" src="<?php echo base_url('assets/admin/upload/berita/'.$ba['gambar']);?>"></a> </div>
                    <h2 class="catg_titile"><a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><?php echo $ba['judul_berita'];?></a></h2>
                    <div class="comments_box"> <span class="meta_date"><?php echo date('d-M-Y', strtotime($ba['tanggal'])) ?></span> <span class="meta_comment"><!-- <a href="#">No Comments</a></span> --> <span class="meta_more"><a  href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>">Read More...</a></span> </div>
                    <p><?php echo substr($ba['isi_berita'], '0', $jumlah);?></p>
                  </li>
                </ul>  
              </div>
            <?php } ?>
          </div>
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">FINANCE</a> </h2>
            <?php foreach ($listberitafinance as $ba) { $jumlah = 100; ?>
              <div class="business_category_left wow fadeInDown" id="berita-teknologi">
                <ul class="fashion_catgnav">
                  <li>
                    <div class="catgimg2_container"> <a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><img alt="" src="<?php echo base_url('assets/admin/upload/berita/'.$ba['gambar']);?>"></a> </div>
                    <h2 class="catg_titile"><a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><?php echo $ba['judul_berita'];?></a></h2>
                    <div class="comments_box"> <span class="meta_date"><?php echo date('d-M-Y', strtotime($ba['tanggal'])) ?></span> <span class="meta_comment"><!-- <a href="#">No Comments</a></span> --> <span class="meta_more"><a  href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>">Read More...</a></span> </div>
                    <p><?php echo substr($ba['isi_berita'], '0', $jumlah);?></p>
                  </li>
                </ul>  
              </div>
            <?php } ?>
          </div>
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">FOOD</a> </h2>
            <?php foreach ($listberitafood as $ba) { $jumlah = 120; ?>
              <div class="business_category_left wow fadeInDown" id="berita-teknologi">
                <ul class="fashion_catgnav">
                  <li>
                    <div class="catgimg2_container"> <a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><img alt="" src="<?php echo base_url('assets/admin/upload/berita/'.$ba['gambar']);?>"></a> </div>
                    <h2 class="catg_titile"><a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><?php echo $ba['judul_berita'];?></a></h2>
                    <div class="comments_box"> <span class="meta_date"><?php echo date('d-M-Y', strtotime($ba['tanggal'])) ?></span> <span class="meta_comment"><span class="meta_more"><a  href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>">Read More...</a></span> </div>
                    <p><?php echo substr($ba['isi_berita'], '0', $jumlah);?></p>
                  </li>
                </ul>  
              </div>
            <?php } ?>
          </div>
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">HEALTH</a> </h2>
            <?php foreach ($listberitahealth as $ba) { $jumlah = 100; ?>
              <div class="business_category_left wow fadeInDown" id="berita-teknologi">
                <ul class="fashion_catgnav">
                  <li>
                    <div class="catgimg2_container"> <a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><img alt="" src="<?php echo base_url('assets/admin/upload/berita/'.$ba['gambar']);?>"></a> </div>
                    <h2 class="catg_titile"><a href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>"><?php echo $ba['judul_berita'];?></a></h2>
                    <div class="comments_box"> <span class="meta_date"><?php echo date('d-M-Y', strtotime($ba['tanggal'])) ?></span> <span class="meta_comment"><span class="meta_more"><a  href="<?php echo base_url('dashboard/detailberita/'.$ba['id_berita']);?>">Read More...</a></span> </div>
                    <p><?php echo substr($ba['isi_berita'], '0', $jumlah);?></p>
                  </li>
                </ul>  
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar">
            <h2>Recent Post</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_bottom_rightbar">
            <h2>Recent Post</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_bottom_rightbar">
            <h2>Recent Post</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_bottom_rightbar">
            <h2>Recent Post</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Most Popular</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Recent Comment</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo base_url();?>assets/dashboard/images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_bottom_rightbar">
            <h2>Blog Archive</h2>
            <div class="blog_archive wow fadeInDown">
              <form action="#">
                <select>
                  <option value="">Blog Archive</option>
                  <option value="">October(20)</option>
                </select>
              </form>
            </div>
          </div>
          <div class="single_bottom_rightbar wow fadeInDown">
            <h2>Popular Lnks</h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Blog Home</a></li>
              <li><a href="#">Error Page</a></li>
              <li><a href="#">Social link</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="container">
  <a href="<?php echo $iklan_footer['url_iklan']; ?>#" >
    <img src="<?= base_url('assets/admin/upload/iklan/'.$iklan_footer['img_iklan']); ?>" alt="<?= $iklan_header['judul_iklan']; ?>" style="width: 100%; height: 150px;"> 
  </a>
</div>
<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Flicker</h2>
            <ul class="flicker_nav">
              <li><a href="#"><img src="<?php echo base_url();?>assets/dashboard/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="<?php echo base_url();?>assets/dashboard/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="<?php echo base_url();?>assets/dashboard/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="<?php echo base_url();?>assets/dashboard/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="<?php echo base_url();?>assets/dashboard/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="<?php echo base_url();?>assets/dashboard/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="<?php echo base_url();?>assets/dashboard/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="<?php echo base_url();?>assets/dashboard/images/75x75.jpg" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2>Labels</h2>
            <ul class="labels_nav">
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Games</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Slider</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>About Us</h2>
            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nec laoreet orci, eget ullamcorper quam. Phasellus lorem neque, </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy; 2045 <a href="index.html">magExpress</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
            <p>Developed BY Wpfreeware</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo base_url();?>assets/dashboard/assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/dashboard/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/dashboard/assets/js/wow.min.js"></script> 
<script src="<?php echo base_url();?>assets/dashboard/assets/js/slick.min.js"></script> 
<script src="<?php echo base_url();?>assets/dashboard/assets/js/custom.js"></script>
</body>
</html>