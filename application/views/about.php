<?php
        // DATA MATA KULIAH
        $no_sk = isset($data_ijazah->Nomor_SK) ? $data_ijazah->Nomor_SK : '';
        $no_ijazah = isset($data_ijazah->Nomor_Ijazah) ? $data_ijazah->Nomor_Ijazah : '';
        $no_seri = isset($data_ijazah->Nomor_Seri) ? $data_ijazah->Nomor_Seri : '';
        $tanggal_ijazah = isset($data_ijazah->Tanggal_Ijazah) ? $data_ijazah->Tanggal_Ijazah : '';
        $nama_taruna = isset($data_taruna->Nama) ? $data_taruna->Nama : '';
        $ttl = isset($data_kota->Nama) ? $data_kota->Nama : '';
        $tanggal_lahir = isset($data_taruna->Tanggal_Lahir) ? $data_taruna->Tanggal_Lahir : '';
        $no_taruna = isset($data_taruna->Nomor_Taruna) ? $data_taruna->Nomor_Taruna : '';
        $akreditasi = isset($data_prodi->Akreditasi) ? $data_prodi->Akreditasi : '';
        $propen = isset($data_prodi->Program_Pendidikan) ? $data_prodi->Program_Pendidikan : '';
        $prodi = isset($data_prodi->Nama) ? $data_prodi->Nama : '';
        $direk = isset($data_pejabat->Nama) ? $data_pejabat->Nama : '';
    ?>
<div class="container" align="right">
<a class="btn btn-info pull-right mb hp" onclick="window.print()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
</div>
<div class="services">
<div class="print-screen" align="center">
    <style>
        body, h1, h2, h3, h4, h5, h6, td  {
        font-family: "Bookman Old Style" ;
        }
        .table{font-size: 11px;}
        .table.siswa{margin-left: 15%;}
        .table.siswa>tbody>tr>td {
            border-top:none;
            padding: 0!important;
        }
        .table.ttd{
        text-align:center;
        margin-left: 10%;
        border-top:none;}
        .table.ttd>tbody>tr>td{
        font-family: "Calibri" ;
        border-top:none;
        margin-right:10px;
        padding: 5px;
        }
        #data {
        text-align: justify;
        padding-left: 10%;
        padding-right: 10%;
        }
        @media print-screen {
        .table.ttd{
            text-align:center;
            border-top:none;
            font-size: 16px;
        }
        }
    </style>
    <div class="col-sm-12" id="data">
    <table class="table siswa">
            <tbody>
                <tr> 
                    <td>No. Seri :</td>
                    <td style="font-weight:bold"><?=$no_seri?></td>
                    <td>No. Ijazah:</td>
                    <td style="font-weight:bold"><?=$no_ijazah?></td>
                </tr>
            </tbody>
            </table>
    <div>
        <h3 style="text-transform: uppercase;font-size: 26px;text-align:center;"><b>IJAZAH<br></b></h3>
    <div class="col-sm-12" id="data">
        <table class="table siswa">
        <tbody>
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
                <td>TERAKREDITASI <span style="font-weight:bold;">"<?=$akreditasi?>"</span></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><p style="font-style:italic;">Berdasarkan Keputusan BAN-PT No.321</p></td>
            </tr>
        </tbody>
        </table>
        <p>Ijazah ini diserahkan berdasarkan Surat Keputusan Direktur Politeknik XYZ Nomor : <?=$no_sk?> Tahun 2023 setelah yang
        bersangkutan memenuhi semua persyaratan yang telah ditentukan dan kepadanya dilimpahkan segala wewenang dan hak yang
        berhubungan dengan Ijazah yang dimilikinya serta berhak menggunakan Gelar Akademik <span style="font-weight:bold;"> Ahli Madya Komputer (A.Md)</span>.</p>
        <table class="table ttd">
        <tbody>
            <tr>
            <td></td>
            <td style="font-family: Bookman Old Style;">Jakarta, <?= $tanggal_ijazah ?></td>
            </tr>
            <tr>
                <td>WAKIL DIREKTUR</td>
                <td>DIREKTUR</td>
            </tr>
            <tr>
                <td>Politeknik XYZ</td>
                <td>Politeknik XYZ</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><?=$direk?></td>
                <td><?=$wadirek?></td>
            </tr>
            <tr>
                <td>NIP.<?=$nip?></td>
                <td>NIP.<?=$nip2?></td>
            </tr>
        </tbody>
        </table>
    </div>
</div>
</div>