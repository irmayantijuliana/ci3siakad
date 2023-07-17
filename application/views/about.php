<div class="container" align="right" class="print-screen">
    <button onClick="print()" class="btn btn-primary btn-lg print-screen">Cetak</button>
</div>
<div class="services">
    <div class="container" align="center" class="print-screen">
    <style>
body, h1, h2, h3, h4, h5, h6, td  {
  font-family: "Bookman Old Style" ;
}
.table.siswa>tbody>tr>td {
    border-top:none;
}
</style>
    <h3 style="text-transform: uppercase;font-size: 26px;"><b>IJAZAH<br></b></h3>
<?php
    // DATA MATA KULIAH
    $nama_taruna = isset($data_taruna->nama) ? $data_taruna->nama : '';
    $tl = isset($data_tmpt->tempat_lahir) ? $data_tmpt->tempat_lahir : '';
    $tanggal_lahir = isset($data_taruna->tanggal_lahir) ? $data_taruna->tanggal_lahir : '';
?>
    <div class="col-sm-9" id="data">
    <table class="table siswa">
    <tbody style="font-size: 11;">
        <tr> 
            <td>Memberikan Ijazah Kepada</td>
            <td width="5px">:</td>
            <td><?=$nama_taruna?></td>
        </tr>
        <tr>
            <td>Tempat dan Tanggal Lahir</td>
            <td width="5px">:</td>
            <td><?=$tl?>asd</td>
            <td><?=$tanggal_lahir?></td>
        </tr>
        <tr>
            <td>Memberikan Ijazah Kepada</td>
            <td width="5px">:</td>
            <td><?=$nama_taruna?></td>
        </tr>
        <tr>
            <td>Tempat dan Tanggal Lahir</td>
            <td width="5px">:</td>
            <td><?=$tl?>asd</td>
        </tr>
    </tbody>
    </table>
</div>