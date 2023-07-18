<?php
        // DATA MATA KULIAH
        $no_sk = isset($data_ijazah->nomor_sk) ? $data_ijazah->nomor_sk : '';
        $no_ijazah = isset($data_ijazah->nomor_ijazah) ? $data_ijazah->nomor_ijazah : '';
        $no_seri = isset($data_ijazah->nomor_seri) ? $data_ijazah->nomor_seri : '';
        $tanggal_yudisium = isset($data_ijazah->tanggal_yudisium) ? $data_ijazah->tanggal_yudisium : '';
        $tanggal_ijazah = isset($data_ijazah->tanggal_ijazah) ? $data_ijazah->tanggal_ijazah : '';
        $nama_taruna = isset($data_taruna->nama) ? $data_taruna->nama : '';
        $ttl = isset($data_kota->nama) ? $data_kota->nama : '';
        $tanggal_lahir = isset($data_taruna->tanggal_lahir) ? $data_taruna->tanggal_lahir : '';
        $no_taruna = isset($data_taruna->nomor_taruna) ? $data_taruna->nomor_taruna : '';
        $propen = isset($data_prodi->program_pendidikan) ? $data_prodi->program_pendidikan : '';
        $prodi = isset($data_prodi->nama_prodi) ? $data_prodi->nama_prodi : '';
        $direk = isset($data_pejabat->nama) ? $data_pejabat->nama : '';
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