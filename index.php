<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Simple CRUD pakai AJAX</title>
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		<script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<link rel="stylesheet" href="style/css/style.css">

	
	</head>
	<body>
		<div class="container">
	      <div class="header clearfix">
	        <nav>
	          <ul class="nav nav-pills pull-right">
	            <li class="active"><button type="button" class="btn btn-primary" data-toggle='modal' data-target='#tambahdata'>Tambah Data</button></li>
	          </ul>
	        </nav>
	        <h3 class="text-muted">Data APA AJA ~</h3>
	      </div>

	      <div class="row">
	        <table class="table">
				<thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Ketampanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="tr_wrapper">
	                    <tr>
	                        <td width="3%">Trident</td>
	                        <td width="27%">Internet Explorer 4.0</td>
	                        <td width="30%">Win 95+</td>
	                        <td width="20%" class="center">4</td>
	                        <td width="20%" class="center">X</td>
	                    </tr>
                </tbody>
			</table>
	      </div>

	      <footer class="footer">
	        <p>&copy; 2016 <a href="christiawan.github.io">Christiawan</a>, Inc. | </p>
	      </footer>

	    </div>


	    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" >
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Data Orang Tampan</h4>
		      </div>
		      <div class="modal-body">
		        <form>
		          <div class="form-group">
		            <label for="recipient-name" class="control-label" >Nama</label>
		            <input type="text" class="form-control" placeholder="nama" id="nama" required>
		          </div>
		          <div class="form-group">
		            <label for="message-text" class="control-label" >Alamat:</label>
		            <textarea class="form-control" id="alamat"  placeholder="alamat"  required ></textarea>
		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" id="kirim_data" class="btn btn-primary">Kirim</button>
		      </div>
		    </div>
		  </div>
		</div>

		<script type="text/javascript">
		$('#kirim_data').on('click',function(){
			var nama = $('#nama').val();
			var alamat = $('#alamat').val();
			$.ajax({
				method	: 'POST',
				url		: 'funcAjax/data.php',
				data 	: {	datanama : nama , dataalamat : alamat , type : 'tambah' },

				success	: function(data){
					$('#tr_wrapper').prepend(data);
					$('#tambahdata').modal('hide')
				    $('#nama').val('');
					$('#alamat').val('');
					
				}
			});

		});

		</script>
	</body>
</html>