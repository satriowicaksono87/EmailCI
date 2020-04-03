<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/style.css">
  </head>
  <body>
    <h3 class="title ml-3 mt-4">Pesan tiket anda</h3>
    <form class="ml-3" action="index.html" method="post">
        <div class="form-group">
          <input type="text" name="nama" value="" placeholder="Nama lengkap">
        </div>
        <div class="form-group">
          <input type="email" name="email" value="" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="number" name="" value="" placeholder="Jumlah Tiket">
        </div>
        <div class="form-group">
          <label for="metode_bayar">Pilih metode pembayaran</label><br>
          <select class="metode_bayar" name="metode_bayar">
            <option value="">Gopay</option>
            <option value="">Bank BRI</option>
            <option value="">Bank BNI</option>
            <option value="">Bank Mandiri</option>
            <option value="">Bank BCA</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-sm btn-primary" name="" value="Pesan">
        </div>

    </form>

  </body>
</html>
