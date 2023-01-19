<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <th>NO</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Email</th>
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
					<td><?php echo $evan->username?> </td>
						<td><?php $password = password_hash("admin", PASSWORD_DEFAULT);echo $password;?></td> 

					<td><?php echo $evan->nama_level?> </td>
					<td><?php echo $evan->email?> </td>
					<td>
                    <a class="btn btn-warning" href="<?php echo base_url('home/reset_password/'. $evan->id_user) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                    Reset Password</a>
						<a href="<?=base_url('/home/hapus_user/'.$evan->id_user)?>"> <button class="btn btn-danger"><i class="fa fa-edit"></i></button></a>
					</td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>







