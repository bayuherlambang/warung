@extends('guest.layout.home')
@section('content')
	<div class="container container-body">
	  <!-- Main component for a primary marketing message or call to action -->
		<div class="row-atas">
			<div class="boxCari">
				<form class="" role="search">
					<div class="form-group">
					<input type="text" class="form-control kolomCari" placeholder="Cari Sesuatu...">
					</div>
				</form>
			</div>
			<div class="boxTombol">
				<div class="areaKategori">
					<button id="myBtn" class="btn btn-default tblKategori">Kategori</button>
				</div>
				<div class="areaUrutkan">
					<select class="form-control kolomCari selectSort" id="sort">
						<option value="" selected disabled>Urutkan</option>
						<option>Harga</option>
						<option>Tanggal</option>
						<option>Dilihat</option>
					</select>
				</div>
			</div>
	  	</div>
	</div>
	<div class="container container-body">
		<div class="judul">
			<span class="judulDagangan">Produk Etalase Terbaru</span>
		</div>
	  <div class="dagangan">
	  	<ul class="list-unstyled">
	  		<li class="itemDagangan">
				<div id="headerDiv">
					<div class="innerDiv">
						<img src="img/thumbnail.jpg" />
					</div>
				</div>
				<div id="footDiv" class="row">
					<div class="col-lg-8 footerKiri">
						<a href="#" class="namaBarang">Nama Barang</a><br>
						<span class="hrgBarang">Rp.100.000</span><br>
						<span class="penjual">Dijual oleh <a href="#">Marfuah Lubis</a></span>
					</div>
					<div class="col-lg-4 footerKanan">
						<button class="btn btn-default tblBeli">Beli Sekarang</button>
					</div>
				</div>
	  		</li>
	  		<li class="itemDagangan">
				<div id="headerDiv">
					<div class="innerDiv">
						<img src="img/thumbnail.jpg" />
					</div>
				</div>
				<div id="footDiv" class="row">
					<div class="col-lg-8 footerKiri">
						<a href="#" class="namaBarang">Nama Barang</a><br>
						<span class="hrgBarang">Rp.100.000</span><br>
						<span class="penjual">Dijual oleh penjual</span>
					</div>
					<div class="col-lg-4 footerKanan">
						<button class="btn btn-default tblBeli">Beli Sekarang</button>
					</div>
				</div>
	  		</li>
	  		<li class="itemDagangan">
				<div id="headerDiv">
					<div class="innerDiv">
						<img src="img/thumbnail.jpg" />
					</div>
				</div>
				<div id="footDiv" class="row">
					<div class="col-lg-8 footerKiri">
						<a href="#" class="namaBarang">Nama Barang</a><br>
						<span class="hrgBarang">Rp.100.000</span><br>
						<span class="penjual">Dijual oleh penjual</span>
					</div>
					<div class="col-lg-4 footerKanan">
						<button class="btn btn-default tblBeli">Beli Sekarang</button>
					</div>
				</div>
	  		</li>
	  		<li class="itemDagangan">
				<div id="headerDiv">
					<div class="innerDiv">
						<img src="img/thumbnail.jpg" />
					</div>
				</div>
				<div id="footDiv" class="row">
					<div class="col-lg-8 footerKiri">
						<a href="#" class="namaBarang">Nama Barang</a><br>
						<span class="hrgBarang">Rp.100.000</span><br>
						<span class="penjual">Dijual oleh penjual</span>
					</div>
					<div class="col-lg-4 footerKanan">
						<button class="btn btn-default tblBeli">Beli Sekarang</button>
					</div>
				</div>
	  		</li>

	  	</ul>
	  </div>
	</div> 
	<!--modal-->
	<div id="myModal" class="modal">
		<!-- Modal content -->
	  <div class="modal-content">
	    <div class="modal-header">
	      <span class="close">&times;</span>
	      <h4>Kategori</h4>
	    </div>
	    <div class="modal-body">
	      <ul class="list-unstyled">
	      	<li><a href="#">Pernak-pernik</a></li>
	      	<li>Miniatur</li>
	      	<li>Souvenir</li>
	      	<li>Jasa</li>
	      </ul>
	    </div>
	  </div>
	</div>
@endsection