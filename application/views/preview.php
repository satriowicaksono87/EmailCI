<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Pelanggan</h1>
<a href="<?php echo base_url("index.php/Datauser/cetak"); ?>">Cetak Data</a><br><br>


<?php
if( ! empty($user)){
    $no = 1;
    foreach($user as $data){
        echo "<tr>";
        echo "<p>ID &nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp".$data->id_user."</p>";
        echo "<p>Nama &nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp".$data->nama."</p>";
        echo "<p>Email &nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp".$data->email."</p>";
        echo "<p>Kelas &nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp".$data->id_user."</p>";
        echo "<p>Jumlah tiket &nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp".$data->id_user."</p>";

        $no++;
    }
}
?>

</body>
</html>
