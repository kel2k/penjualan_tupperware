<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma:no-cache");
header("Expires:0");
?>

<table border = "1" cellpadding = "5" align = "center">
	<thead align = "center">
		<tr class="table1">
			<th>NO</th>
			<th>Nomor Nota</th>
			<th>Tanggal</th>
			<th>Total Bayar</th>
			
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
				
			</tr>
			
			<?php
		}
		?>


	</table>