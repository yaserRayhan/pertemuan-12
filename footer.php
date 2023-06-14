<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>
<div class="col col_3">
<h4>Social</h4>
<ul class="nobullet social">
<?php
$query = mysqli_query($koneksi, "SELECT * FROM tb_social");
while ($data = mysqli_fetch_array($query)) {
?>
<li>
    <a href="<?= $data['link']; ?>" target="_blank">
        <img src="gambarSocial/<?= $data["icon"]; ?>" alt="<?= $data['nama_sosmed']; ?>" height="20" width="20">
        <?= $data['nama_sosmed']; ?>
    </a>
</li>   
<?php } ?>
</ul>
</div>
<div class="col col_3">
<h4><?= $twitter["judul"] ?></h4>
<?= htmlspecialchars_decode($twitter["isi"]) ?>
</div>
<div class="col col_3">
<h4><?= $about["judul"] ?></h4>
<?= htmlspecialchars_decode($about["isi"]) ?>
</div>
<div class="clear"></div>
</div>