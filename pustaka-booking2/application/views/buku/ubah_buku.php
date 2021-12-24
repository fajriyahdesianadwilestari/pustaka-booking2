<div class="contrainer-fluid">
	<?= $this->session->flashdata('pesan'); ?>
	<div class="row">
		<div class="col-lg-6">
			<?php if (validation_erros()) { ?>
				<div class="alert alert-danger" role="alert">
				<?= validation_erros(); ?>	
				</div>
			<?php } ?>
			<?= $this->session->flashdata('pesan'); ?>
			<?php foreach ($buku as $b) { ?>
			<form action="<?= base_url('buku/ubahBuku'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
					<input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masuk judul buku" value="<?=$b['judul_buku']; ?>">
				</div>
				<div class="form-group">
					<select name="id_kategori" class="form-control form-control-user">
						<option value="<?= $id; ?>" selected="selected"><?= $k; ?></option>
						<?php
						foreach ($kategori as $k) { ?>
						<option value="<?= $k['id']; ?>"><?= $k['kategori'];?></option>	
					<?php } ?>	
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masuk Nama Pengarang" value="<?= $b['pengarang']; ?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masuk Nama Penerbit" value="<?= $b['penerbit'];?>">
				</div>
				<div class="form-group">
					<select name="tahun" class="form-control form-control-user">
					<option value="<?= $b['tahun_terbit']; ?>"><?=$b['tahun_terbit'];?></option>
					<?php
					for ($i=date('Y'); $i>1500; $i--) {?> 
						<option value="<?= $i; ?>"><?=$i; ?></option>
					<?php }	?>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukan ISBN" value="<?=$b ['isbn']; ?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukan Nominal Stok" value="<?=$b ['stok']; ?>">
				</div>
				<div class="form-group">
					<?php
					if (isset($b['image'])) { ?>
						<input type="hidden" name="old_pict" value="<?= $b['image']; ?>">
						<picture>
							<source src="" type="image/svg+xml">
								<img src="<?= base_url('assets/img/upload/').$b['image']; ?>" class="rounded mx-auto mb-3 d-blok" alt="..." width="200" height="250">
						</picture>
					<?php } ?>
					<input type="file" class="form-control form-control-user" ig="image" name="image">
				</div>
					<div class="form-group">
						<input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
						<input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
					</div>
			</form>	
			<?php } ?>	
		</div>
	</div>