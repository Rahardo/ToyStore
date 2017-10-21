<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
		<ol class="breadcrumb">
			<li><a href="index.html">Admin Panel</a></li>
			<li><a href="#">Dashboard</a></li>
			<li class="active">Berita</li>
		</ol>

		<div class="container">
			<div class="row">

				<div class="container">
					<div class="row">
						<div class="table-responsive">
							<h4 class="margin-bottom-15">Tambah Data</h4>
							<table class="table table-striped table-hover table-bordered">
								<div>
									<span class="btn btn-primary">
										<a href="#">Tambah Data</a>
									</span>
								</div>
								<thead>
									<tr style="background: gray;">
										<th>idPost</th>
										<th>judul</th>
										<th>isiBerita</th>
										<th>EDIT</th>
										<th>DELETE</th>
										<th>Gambar</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($product as $b){ ?>
									<tr>
										<th><?php echo $b['productID']; ?></th>
										<th><?php echo $b['productName']; ?></th>
										<th><?php echo $b['productDetail']; ?></th>
										<td align="center"><a href="<?php echo base_url()."index.php/admin/edit_dataB/".$b['productID']; ?>"><button>EDIT</button></a></td>
										<td align="center"><a href="<?php echo base_url()."index.php/admin/do_deleteB/".$b['productID']; ?>"><button>DELETE</button></a></td>
										<td>
											<img src="<?php echo base_url().$b['productPic1']; ?>" width="400" height="300">
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
