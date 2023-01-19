<!-- <style>
	::selection{background-color: #e13330; color: white} 
	::-moz-selection{background-color: #e13330; color: white}
	main{
		margin-top: 70px;
		margin-left: auto;
		margin-right: auto; 
		width: 80%; 
		padding: 20px; 
		background-color: white;
		min-height: 300px; 
		border-radius: 5px;
		box-shadow: 0 0 8px#d0d0d0;
	}
	table{
		border-top: border-top: solid thin #000; 
		padding: 6px 12px;
	}
	a{
		color: #003399;
		background-color: transparent; 
		font-weight: normal;
	}
	footer{
		margin-top:24%;
	}
</style> -->

<body>
	<main>
		<div class="container">

        <h1></h1>
    <h2 align="center">TABLE NOTA</h2>
    <table border = "1" cellpadding = "5" align = "center">
    <thead align = "center">
        <tr class="table1">
						<th>NO</th>
				<th>Nomor Nota</th>
				<th>Tanggal</th>
				<th>Total Bayar</th>
				<th>Action</th>
					</thead>
				<?php
			$no=1;
			foreach ($okta as $evan) {

				?>

				<tr>

					<td><?php echo $no++ ?></td>
					<td><?php echo $evan->no_nota?> </td>
					<td><?php echo $evan->tanggal?> </td>
					<td><?php echo $evan->total?> </td>
					<td>
					<a href="<?php echo base_url('home/excel_print/'. $evan->id_nota)?>" class="btn btn-primary my-1">Export Excel</a>
				</td>
			</tr>
				
				<?php
			}
			?>

		</table>
	</div>
</main> 
</body>