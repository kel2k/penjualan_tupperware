<div class="container">
        <h1></h1>
    <h2 align="center">TABLE PENJUALAN</h2>
    <table border = "1" cellpadding = "5" align = "center">
    <thead align = "center">
        <tr class="table1">
		
			
			
			<tr>
				<th>NO</th>
				<th>Id Penjualan</th>
				<th>Id Barang</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Id Nota</th>

			</tr>
			<?php
			$no=1;
			foreach ($okta as $evan) {

				?>

				<tr>

					<td><?php echo $no++ ?></td>
					<td><?php echo $evan->id_penjualan?> </td>
					<td><?php echo $evan->id_barang?> </td>
					<td><?php echo $evan->jumlah?> </td>
					<td><?php echo $evan->harga?> </td>
					<td><?php echo $evan->id_nota?> </td>
					
					
					 <td> 
					 	<a href="<?=base_url('/home/edit_barang/'.$evan->id_barang)?>"> <button class="btn btn-primary">Edit</button></a>
						<a href="<?=base_url('/home/hapus_barang/'.$evan->id_barang)?>"> <button class="btn btn-danger">Delete</button></a>

					</td> 
					

				</tr>
				<?php
			}
			?>

		</table>
		
	</div>
</body>
</html>
