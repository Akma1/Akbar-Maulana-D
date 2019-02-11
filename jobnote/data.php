<!DOCTYPE html>
<html>
<head>
	<title>Catatan Tugas Kuliah</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/jobnote/css/bootstrap.min.css">
	<script type="text/javascript" src="http://localhost/jobnote/js/dist/vue.min.js"></script>
	<script type="text/javascript" src="http://localhost/jobnote/js/appnote.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Add Note</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="data.php">Look for my jobs</a>
		      </li>
		    </ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="col-sm">
					<p></p>

					<table class="table table-striped table-bordered table-hover">

						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">Nama Matakuliah</th>
								<th class="text-center">Tugas</th>
								<th class="text-center">Batas Akhir Tugas</th>
								<th class="text-center">Ket</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{  }}</td>
								<td>{{  }}</td>
								<td>{{  }}</td>
								<td>{{  }}</td>
								<td>{{  }}</td>
								<td class="text-center">
									<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
									<button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
								</td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Recipient:</label>
	            <input type="text" class="form-control" id="recipient-name">
	          </div>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Message:</label>
	            <textarea class="form-control" id="message-text"></textarea>
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Send message</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>