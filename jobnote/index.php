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

                    <table class="table table-striped">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Matakuliah</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Matakuliah">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tugas</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rincian Tugas">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Batas tugas</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Batas pengumpulan tugas">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keterangan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan tugas">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>