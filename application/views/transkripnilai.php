<?php
        // DATA MATA KULIAH
        $no_sk = isset($data_ijazah->Nomor_SK) ? $data_ijazah->Nomor_SK : '';
        $no_ijazah = isset($data_ijazah->Nomor_Ijazah) ? $data_ijazah->Nomor_Ijazah : '';
        $no_seri = isset($data_ijazah->Nomor_Seri) ? $data_ijazah->Nomor_Seri : '';
        $tanggal_yudisium = isset($data_ijazah->Tanggal_Yudisium) ? $data_ijazah->Tanggal_Yudisium : '';
        $tanggal_ijazah = isset($data_ijazah->Tanggal_Ijazah) ? $data_ijazah->Tanggal_Ijazah : '';
        $nama_taruna = isset($data_taruna->Nama) ? $data_taruna->Nama : '';
        $ttl = isset($data_kota->Nama) ? $data_kota->Nama : '';
        $tanggal_lahir = isset($data_taruna->Tanggal_Lahir) ? $data_taruna->Tanggal_Lahir : '';
        $no_taruna = isset($data_taruna->Nomor_Taruna) ? $data_taruna->Nomor_Taruna : '';
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
        font-family: "Cambria";
        font-size: 11px;
        }
        .table.siswa{margin-left: 5%;}
        .table.siswa>tbody>tr>td {
            border-top:none;
            margin-left: 10%;
            padding: 0!important;
        }
        .table.nilai{
        width: 50%;
        text-align:center;
        text-transform: uppercase;
        }
        .table.nilai>tbody>tr>td{

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
                <td width="25%">Lampiran Ijazah Nomor</td>
                <td width="3%">:</td>
                <td><?=$no_seri?></td>
                </tr>
            </tbody>
            </table>
    </div>
    <div class="col-sm-12" id="data">
        <table class="table siswa">
        <tbody>
            <div>
            <h2 style="text-transform: uppercase;font-size: 16px;text-align:center;text-decoration-line: underline;"><b>Transkrip Nilai<br></b></h3>
            </div>
                <td width="25%">NAMA</td>
                <td width="3%">:</td>
                <td><?=$nama_taruna?></td>
            </tr>
            <tr> 
                <td>NOMOR TARUNA</td>
                <td>:</td>
                <td><?=$no_taruna?></td>
            </tr>
            <tr> 
                <td>TEMPAT / TANGGAL LAHIR</td>
                <td>:</td>
                <td><?=$ttl?>, <?=$tanggal_lahir?></td>
            </tr>
            <tr> 
                <td>JURUSAN / PROGRAM STUDI</td>
                <td>:</td>
                <td><?=$propen?> <?=$prodi?></td>
            </tr>
            <tr> 
                <td>STATUS</td>
                <td>:</td>
                <td>TERAKREDITASI "BAIK"</td>
            </tr>
            <tr> 
                <td>TANGGAL YUDISIUM</td>
                <td>:</td>
                <td><?=$tanggal_yudisium?></td>
            </tr>
        </tbody>
        </table>
        <table class="table nilai">
        <tbody>
            <tr>
                <td width="2%">NO</td>
                <td>KODE</td>
                <td>MATA KULIAH</td>
                <td>SKS</td>
                <td>NILAI</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>SEMESTER I (20 SKS)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td><ol><li></li></<ol>
            </td>
                <td><?=$no_seri?></td>
                <td><?=$no_seri?></td>
                <td>2</td>
                <td>B</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>SEMESTER II (21 SKS)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td><ol><li></li></<ol>
            </td>
                <td><?=$no_seri?></td>
                <td><?=$no_seri?></td>
                <td>2</td>
                <td>B</td>
            </tr>
        </tbody>
        </table>
    </div>
</div>
</div>