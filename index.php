<?php
 include "koneksi.php";

 $query = mysqli_query($koneksi, "SELECT * FROM tb_about");
 $about = mysqli_fetch_array($query);
 $query = mysqli_query($koneksi, "SELECT * FROM tb_twitter");
 $twitter = mysqli_fetch_array($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>E-Katalog</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="assets_front/templatemo_style.css" rel="stylesheet"type="text/css" />
    <link rel="stylesheet" href="assets_front/css/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets_front/css/nivo-slider.css" type="text/css" media="screen" />
    <script type="text/javascript" src="assets_front/js/jquery.min.js"></script>
    <link rel="stylesheet" href="assets_front/css/slimbox2.css" type="text/css" media="screen" />
    <script type="text/JavaScript" src="assets_front/js/slimbox2.js"></script>
</head>
<body>
    <div id="templatemo_wrapper">
    	<div class="templatemo_header_box left">
        	<div id="site_title"><a href="http://www.templatemo.com/preview/templatemo_380_eco_tree" rel="nofollow">Eco Tree</a></div>
        </div> <!-- END of headar box -->
        <div id="templatemo_slider"><span class="sliderframe"></span>
             <div class="slider-wrapper theme-orman">
                <div id="slider" class="nivoSlider" style="position: relative; background: url(&quot;images/slider/04.jpg&quot;) no-repeat;">
                    <img src="images/slider/06.jpg" alt="Image 6" style="display: none;">
                    <img src="images/slider/02.jpg" alt="Image 2" style="display: none;">
                    <a rel="nofollow" href="http://www.templatemo.com/page/3" class="nivo-imageLink" style="display: none;"><img src="images/slider/03.jpg" alt="Image 3" title="This is an example caption." style="display: none;"></a>
                    <img src="images/slider/04.jpg" alt="Image 4" style="display: none;">
                    <img src="images/slider/01.jpg" alt="Image 1" title="This is another caption." style="display: none;">
                <div class="nivo-caption" style="opacity: 0.8; display: block;"><p>This is another caption.</p></div><div class="nivo-directionNav"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div><div class="nivo-slice" style="left: 0px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) 0px 0% no-repeat; top: 0px;"></div><div class="nivo-slice" style="left: 32px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -32px 0% no-repeat; bottom: 0px;"></div><div class="nivo-slice" style="left: 64px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -64px 0% no-repeat; top: 0px;"></div><div class="nivo-slice" style="left: 96px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -96px 0% no-repeat; bottom: 0px;"></div><div class="nivo-slice" style="left: 128px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -128px 0% no-repeat; top: 0px;"></div><div class="nivo-slice" style="left: 160px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -160px 0% no-repeat; bottom: 0px;"></div><div class="nivo-slice" style="left: 192px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -192px 0% no-repeat; top: 0px;"></div><div class="nivo-slice" style="left: 224px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -224px 0% no-repeat; bottom: 0px;"></div><div class="nivo-slice" style="left: 256px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -256px 0% no-repeat; top: 0px;"></div><div class="nivo-slice" style="left: 288px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -288px 0% no-repeat; bottom: 0px;"></div><div class="nivo-slice" style="left: 320px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -320px 0% no-repeat; top: 0px;"></div><div class="nivo-slice" style="left: 352px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -352px 0% no-repeat; bottom: 0px;"></div><div class="nivo-slice" style="left: 384px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -384px 0% no-repeat; top: 0px;"></div><div class="nivo-slice" style="left: 416px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -416px 0% no-repeat; bottom: 0px;"></div><div class="nivo-slice" style="left: 448px; width: 32px; height: 100%; opacity: 1; background: url(&quot;images/slider/01.jpg&quot;) -448px 0% no-repeat; top: 0px;"></div></div>
            </div> 
            <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
                    controlNav:false,
                 directionNavHide: false
                });
            });
            </script>
        </div><!-- END of templatemo_slider -->
        <div class="templatemo_header_box right">
            <ul id="templatemo_menu">
                <?php 
                    $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                <li><a href="index2.php?id=<?= $data['id']; ?>" class="selected home"><?= $data['nama_kategori']; ?></a></li>
                <?php } ?>
            </ul>
        </div> <!-- END of headar box -->
        <div class="clear"></div>
    
        <div id="templatemo_main"><span class="mf mft"></span><span class="mf mfb"></span>
            <?php
               
                $query = mysqli_query($koneksi, "SELECT * FROM data_barang");
                while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col col_3">
                    <h2><?= $data['nama_barang'] ?></h2>
                    <img width="200" src="admin/data_barang/gambar/<?=$data['gambar'] ?>" alt="image 1" class="img_nom img_border img_border_b" />
                    <p><em><?= $data['deskripsi'] ?></em></p>
                    <ul class="list_bullet">
                    <li>Rp. <?= number_format($data['harga']) ?></li>
                    </ul>
                    <a href="#" class="more">Beli</a>
                </div>
            <?php } ?>
            <div class="clear"></div>
        </div>
                <?php include_once("footer.php"); ?>
        <div id="templatemo_footer">
        Copyright © 2023 E-Katalog
        </div>

    </div>
</body>
</html>