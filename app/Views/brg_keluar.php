<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        	<a href="<?=base_url('/home/tambah_brg_keluar/'.$evan->id_brg_klr)?>"> <button class="btn btn-check">+</i></button></a>
                       <th>NO</th>
				<th>Kode Barang</th>
				<th>Tanggal Barang Keluar</th>
				<th>Jumlah Barang Keluar</th>
				<th>Harga</th>
				<th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      	<?php
			$no=1;
			foreach ($okta as $evan) {

				?>

				<tr>

					<td><?php echo $no++ ?></td>
					<td><?php echo $evan->kode_brg?> </td>
					<td><?php echo $evan->tanggal?> </td>
					<td><?php echo $evan->jumlah?> </td>
					<td><?php echo $evan->harga?> </td>
					
					 <td> 
						<a href="<?=base_url('/home/hapus_brg_keluar/'.$evan->id_brg_klr)?>"> <button class="btn btn-danger">Delete</button></a>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
