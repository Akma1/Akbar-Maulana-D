<!DOCTYPE html>
<html>
<head>
	<title>Catatan Tugas Kuliah</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/jobnote/css/bootstrap.min.css">
	<script type="text/javascript" src="http://localhost/jobnote/js/dist/vue.min.js"></script>
	<script type="text/javascript" src="http://localhost/jobnote/js/dist/vue.js"></script>
	<script type="text/javascript" src="http://localhost/jobnote/js/appnote.js"></script>
</head>
<body id="coba">
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
								<th class="text-center">Nama Matakuliah</th>
								<th class="text-center">Tugas</th>
								<th class="text-center">Batas Akhir Tugas</th>
								<th class="text-center">Ket</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="dataTugas">
								<td>{{  }}</td>
								<td>{{  }}</td>
								<td>{{  }}</td>
								<td>{{  }}</td>
								<td class="text-center">
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="index.php" @click="editBarang(b)">
                                        <i>Edit</i>
                                    </button>
                                    <button type="button" class="btn btn-danger" @click="hapusBarang(b)">
                                        <i>Delete</i>
                                    </button>
								</td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>