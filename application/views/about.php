<div class="container" align="right" class="print-screen">
    <button onClick="print()" class="btn btn-primary btn-lg print-screen">Cetak</button>
</div>
<div class="services">
    <div class="container" align="center" class="print-screen">
    <style>
body, h1, h2, h3, h4, h5, h6, td  {
  font-family: "Bookman Old Style" ;
}
.table{margin-left: 15%;}
.table.siswa>tbody>tr>td {
    border-top:none;
}
</style>
    <h3 style="text-transform: uppercase;font-size: 26px;"><b>IJAZAH<br></b></h3>
<?php
    // DATA MATA KULIAH
    $no_sk = isset($data_ijazah->nomor_sk) ? $data_ijazah->nomor_sk : '';
    $nama_taruna = isset($data_taruna->nama) ? $data_taruna->nama : '';
    $ttl = isset($data_kota->nama) ? $data_kota->nama : '';
    $tanggal_lahir = isset($data_taruna->tanggal_lahir) ? $data_taruna->tanggal_lahir : '';
    $no_taruna = isset($data_taruna->nomor_taruna) ? $data_taruna->nomor_taruna : '';
    $propen = isset($data_prodi->program_pendidikan) ? $data_prodi->program_pendidikan : '';
    $prodi = isset($data_prodi->nama_prodi) ? $data_prodi->nama_prodi : '';
    $direk = isset($data_pejabat->nama) ? $data_pejabat->nama : '';
    $wadirek = isset($data_pejabat->nama) ? $data_pejabat->nama : '';
?>
    <div class="col-sm-12" id="data">
    <table class="table siswa">
    <tbody style="font-size: 11;">
        <tr> 
            <td>Memberikan Ijazah Kepada</td>
            <td width="5px">:</td>
            <td style="font-weight:bold"><?=$nama_taruna?></td>
        </tr>
        <tr>
            <td>Tempat dan Tanggal Lahir</td>
            <td width="5px">:</td>
            <td><?=$ttl?>, <?=$tanggal_lahir?></td>
        </tr>
        <tr>
            <td>No Taruna</td>
            <td width="5px">:</td>
            <td><?=$no_taruna?></td>
        </tr>
        <tr>
            <td>Program Pendidikan</td>
            <td width="5px">:</td>
            <td><?=$propen?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td width="5px">:</td>
            <td><?=$prodi?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td width="5px">:</td>
            <td>TERAKREDITASI "BAIK"<br><p style="font-style:italic;">Berdasarkan Keputusan BAN-PT No.321</p></td>
        </tr>
    </tbody>
    </table>
</div>
<div class="col-md-12 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 600ms; -moz-animation-delay: 600ms; animation-delay: 600ms; text-align: justify;">
    <p>Ijazah ini diserahkan berdasarkan Surat Keputusan Direktur Politeknik XYZ Nomor : <?=$no_sk?> Tahun 2023 setelah yang
bersangkutan memenuhi semua persyaratan yang telah ditentukan dan kepadanya dilimpahkan segala wewenang dan hak yang
berhubungan dengan Ijazah yang dimilikinya serta berhak menggunakan Gelar Akademik <span style="font-weight:bold;"> Ahli Madya Komputer (A.Md)</span>.</p>
    </div>
    <div class="col-sm-9" id="data">
    <table class="table siswa">
    <tbody style="font-size: 11; text-align:center;">
        <tr>
        <td></td>    
        <td>Jakarta, 29 Juli 2023</td>
        </tr>
        <tr>
            <td>WAKIL DIREKTUR</td>
            <td>DIREKTUR</td>
        </tr>
        <tr style="height:100px">
            <td>Politeknik XYZ</td>
            <td>Politeknik XYZ</td>
        </tr>
        <tr>
            <td><?=$direk?></td>
            <td><?=$wadirek?></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>NIP</td>
        </tr>
        </tbody>
    </table>
    </div>