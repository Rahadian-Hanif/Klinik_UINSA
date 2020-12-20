<!doctype html>
<html lang="en"><head>
  <title>No Antrian</title>
</head><body>
    <?php foreach($data as $d):
    ?>
    <div style="text-align: center;">
      <img src="assets/img/logo_sikuin.png" width="260" height="90">
      <p>Jl. Ahmad Yani No.117, Jemur Wonosari, Kec. Wonocolo, Kota SBY, Jawa Timur 60237</p>
      <p>____________________________________________________________________________________</p>
      <p><strong>No Antrian</strong></p>
      <h1><?php echo $d->no_pengunjung;?></h1>
      <h2><?php echo $d->antrian;?></h2>
      <p><?php echo date('d F Y', strtotime($d->tanggal));?></p>
      <p>Patuh Protokol Kesehatan, Kunci Mengakhiri Pandemi Covid-19</p>
    </div>
    <?php endforeach;?>
  </body></html>