<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
					<ul class="dropdown-menu" role="menu">
					</ul>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			
			<table id="datatable-buttons" class="table table-striped table-bordered">
				<thead>
					<a href="<?=base_url('/home/tambah_nota/'.$evan->id_nota)?>"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>
			<tr>
				<th>NO</th>
				<th>Nomor Nota</th>
				<th>Tanggal</th>
				<th>Total Bayar</th>
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
					<td><?php echo $evan->no_nota?> </td>
					<td><?php echo $evan->tanggal?> </td>
					<td><?php echo $evan->total?> </td>
					
					<td> 
						<button class="btn btn-warning" onclick="window.print()"><i class="fa fa-print"></i></button>
						<a href="<?=base_url('/home/detail/'.$evan->id_nota)?>"><button class="btn btn-primary">Detail Penjualan</button></a>
						<a href="<?=base_url('/home/pdf/'.$evan->id_nota)?>"><button class="btn btn-danger">PDF</button></a>
						<a href="<?=base_url('/home/excel_print/'.$evan->id_nota)?>"><button class="btn btn-success"><i class="fa fa-file-excel-o"></i></button></a>
						<a href="<?=base_url('/home/hapus_nota/'.$evan->id_nota)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
								
					</td>
					

				</tr>
				<?php
			}
			?>

		</tbody>
			</table>
		</div>
	</div>
</div>