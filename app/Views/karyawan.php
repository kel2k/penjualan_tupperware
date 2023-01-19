<div class="x_panel">
					<div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <a href="<?=base_url('/home/tambah_karyawan/'.$evan->id_brg_msk)?>"> <button class="btn btn-check">+</i></button></a>
                          <tr>
					<th>NO</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>No HP</th>
				<th>Alamat</th>
				<th>Tanggal Lahir</th>
				<th>Tempat Lahir</th>
				<th>Jabatan</th>
				<th>Gaji</th>
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
					<td><?php echo $evan->nik?> </td>
					<td><?php echo $evan->nama?> </td>
					<td><?php echo $evan->jenis?> </td>
					<td><?php echo $evan->nohp?> </td>
					<td><?php echo $evan->alamat?> </td>
					<td><?php echo $evan->tgl?> </td>
					<td><?php echo $evan->tempat?> </td>
					<td><?php echo $evan->nama_level?> </td>
					<td><?php echo $evan->gaji?> </td>
					
					<td> 
						<a href="<?=base_url('/home/edit_karyawan/'.$evan->user)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
						<a href="<?=base_url('/home/hapus_karyawan/'.$evan->user)?>"> <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
						<td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
