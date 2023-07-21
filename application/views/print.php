<html>
	<head>
		<meta charset="UTF-8" />
		<title>Transkrip</title>
		<style type="text/css">
			@media print {
				@page {
					size: legal landscape;
					margin: 1cm;
				}

				h1 {
					font-size: 16pt;
				}
			}

			@font-face {
				font-family: "Cambria";
			}

			* {
				font-family: Cambria, Georgia, serif;
				margin: 0;
				padding: 0;
			}

			th {
				vertical-align: top;
			}

			th {
				text-align: center;
			}

			.font-normal th {
				font-weight: normal;
				vertical-align: middle;
			}

			.header td,
			.header th {
				font-size: 16px;
			}

			.mid td,
			.mid th {
				font-size: 14px;
			}

			.center td,
			.center th {
				text-align: center;
				vertical-align: middle;
			}

			table.border {
				border-collapse: collapse;
			}

			table.border td {
				border-right: solid 2px black;
				border-left: solid 2px black;
				border-top: 0;
				border-bottom: 0;
			}

			table.border td .ujian {
				border-top: 2px;
				border-bottom: 2px;
			}

			table.border th {
				border: 2px solid black;
			}

			tr.noborder td,
			tr.noborder th {
				border: none;
			}

			hr {
				margin: 10px auto;
				border: 1px solid black;
				border-width: 1px 0 0 0;
			}

			.text-center {
				text-align: center;
			}

			.btn-flat {
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				border-radius: 0;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				box-shadow: none;
				border-width: 1px;
			}

			.btn.btn-primary {
				background-color: #0052a2;
				border-color: #008d4c;
			}

			.btn.btn-primary:hover,
			.btn.btn-primary:active,
			.btn.btn-primary.hover {
				background-color: #008d4c;
			}

			.bg-info {
				background-color: #d9edf7;
			}

			.bg-success {
				background-color: #dff0d8;
			}

			.title {
				font-size: 14px;
				font-weight: bold;
			}

			.padded th,
			.padded td {
				padding: 4px;
			}

			@media print {
				.col-md-1,
				.col-md-2,
				.col-md-3,
				.col-md-4,
				.col-md-5,
				.col-md-6,
				.col-md-7,
				.col-md-8,
				.col-md-9,
				.col-md-10,
				.col-md-11,
				.col-md-12 {
					float: left;
				}

				.col-md-12 {
					width: 100%;
				}

				.col-md-11 {
					width: 91.66666666666666%;
				}

				.col-md-10 {
					width: 83.33333333333334%;
				}

				.col-md-9 {
					width: 75%;
				}

				.col-md-8 {
					width: 66.66666666666666%;
				}

				.col-md-7 {
					width: 58.333333333333336%;
				}

				.col-md-6 {
					width: 50%;
				}

				.col-md-5 {
					width: 41.66666666666667%;
				}

				.col-md-4 {
					width: 33.33333333333333%;
				}

				.col-md-3 {
					width: 25%;
				}

				.col-md-2 {
					width: 16.666666666666664%;
				}

				.col-md-1 {
					width: 8.333333333333332%;
				}
			}
		</style>
	</head>

	<body>
		<div align="center">
			<div style="width: 900px">
				<style>
					@media print {
						table {
							break-after: auto;
						}

						tr {
							break-inside: avoid;
							break-after: auto;
						}

						td {
							break-inside: avoid;
							break-after: auto;
						}

						thead {
							display: table-header-group;
						}

						tfoot {
							display: table-footer-group;
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
					}
				</style>
				<div>
					<table class="data" style="margin-bottom: 2rem" align="left">
						<tbody>
							<tr>
								<td>Laporan Ijazah Nomor</td>
								<td>:</td>
								<td>&nbsp; <?php echo $ijazah->Nomor_Ijazah; ?></td>
							</tr>
						</tbody>
					</table>
					<br /><br /><br />
					<b
						style="
							font-size: 20pt;
							text-decoration: underline;
							font-weight: bold;
						"
						>TRANSKRIP NILAI AKADEMIK</b
					><br />
					<br /><br />
					<table
						class="data"
						width="70%"
						align="left"
						style="margin-bottom: 1rem"
					>
						<tbody>
							<tr>
								<td>NAMA</td>
								<td>:</td>
								<td>&nbsp;<?php echo $taruna->Nama;?></td>
							</tr>
							<tr>
								<td>NOMOR TARUNA</td>
								<td>:</td>
								<td>&nbsp;<?php echo $taruna->Nomor_Taruna;?></td>
							</tr>
							<tr>
								<td>TEMPAT / TANGGAL LAHIR</td>
								<td>:</td>
								<td>&nbsp;<?php echo $kota->Nama;?>, <?php echo $taruna->Tanggal_Lahir;?></td>
							</tr>
							<tr>
								<td>JURUSAN / PROGRAM STUDI</td>
								<td>:</td>
								<td>&nbsp;<?php echo $program_studi->Program_Pendidikan;?>, <?php echo $program_studi->Nama;?></td>
							</tr>
							<tr>
								<td>STATUS</td>
								<td>:</td>
								<td>&nbsp;TERAKREDITASI "<?php echo $program_studi->Akreditasi;?>"</td>
							</tr>
							<tr>
								<td>TANGGAL YUDISIUM</td>
								<td>:</td>
								<td>&nbsp;<?php echo $ijazah->Tanggal_Yudisium;?></td>
							</tr>
						</tbody>
					</table>

					<table
						class="tb_data border"
						border="2"
						width="100%"
						style="column-span: all"
					>
						<thead>
							<tr>
								<th width="30">NO</th>
								<th width="100">KODE</th>
								<th>MATA KULIAH</th>
								<th width="40">SKS</th>
								<th width="60">NILAI</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($nilai as $nilai_data) : ?>
							<?php $matakuliah_data = $nilai_data->Matakuliah ?>
							<tr>
								<td align="center"><?php echo $nilai_data->ID ?></td>
								<td align="center"><?php echo $matakuliah->Kode ?></td>
								<td align="center"><?php echo $matakuliah->Matakuliah ?></td>
								<td align="center"><?php echo $matakuliah->SKS ?></td>
								<td align="center"><b><?php echo $nilai_data->Nilai_Huruf ?></b></td>
							</tr>
							<?php endforeach; ?>
							
						</tbody>
					</table>
					<br />
					<p align="left">KETERANGAN : A=4;AB=3,50;B=3;BC=2,50;C=2;D=1;E=0</p>

					<br />
					<table width="100%">
						<tbody>
							<tr>
								<td align="center">
									<table align="left" border="0">
										<tbody>
											<tr>
												<td style="text-align: center">&nbsp;</td>
												<td style="text-align: center">&nbsp;</td>
												<td style="text-align: center">&nbsp;</td>
												<td style="text-align: center">&nbsp;</td>
											</tr>
											<tr>
												<td align="left" style="padding-left: 5px" width="">
													<br />
												</td>
												<td align="left" style="padding-left: 5px" width="">
													<br />
												</td>
												<td align="left" style="padding-left: 5px" width="">
													<br />
												</td>
												<td align="center" style="padding-left: 5px" width=""><br />
													WAKIL DIREKTUR I<br />POLITEKNIK XYZ<br />
													<div style="width: 3cm; height: 1.5cm"></div>
													<br /><?php echo $wadirek->Nama ?><br />NIP. <?php echo $wadirek->NIP ?>
													<br />
													<br />
												</td>
											</tr>
											<tr></tr>
										</tbody>
									</table>
									<table align="right" border="0">
										<tbody>
											<tr>
												<td style="text-align: center">&nbsp;</td>
												<td style="text-align: center">&nbsp;</td>
												<td style="text-align: center">&nbsp;</td>
												<td style="text-align: center">&nbsp;</td>
											</tr>
											<tr>
												<td align="left" style="padding-left: 5px" width="">
													<br />
												</td>
												<td align="left" style="padding-left: 5px" width="">
													<br />
												</td>
												<td align="left" style="padding-left: 5px" width="">
													<br />
												</td>
												<td align="center" style="padding-left: 5px" width="">
													Palembang, 24 Agustus 2022<br />DIREKTUR<br />POLITEKNIK XYZ<br />
													<div style="width: 3cm; height: 1.5cm"></div>
													<br /><?php echo $direk->Nama ?><br />NIP. <?php echo $direk->NIP ?>
													<br />
													<br />
												</td>
											</tr>
											<tr></tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
