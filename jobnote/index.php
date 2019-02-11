<!DOCTYPE html>
<html>
<head>
    <title>Catatan Tugas Kuliah</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/jobnote/css/bootstrap.min.css">
    <script type="text/javascript" src="http://localhost/jobnote/js/dist/vue.min.js"></script>
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

                    <table class="table table-striped">
                        <form>
                            <div class="form-group">
                                <label>Matakuliah</label>
                                <input type="text" class="form-control" placeholder="Nama Matakuliah" v-model="inputDataTugas.namaMatakuliah"/>
                            </div>
                            <div class="form-group">
                                <label>Tugas</label>
                                <input type="text" class="form-control" placeholder="Rincian Tugas" v-model="inputDataTugas.tugas"/>
                            </div>
                            <div class="form-group">
                                <label>Batas tugas</label>
                                <input type="text" class="form-control" placeholder="Batas pengumpulan tugas" v-model="inputDataTugas.batasTugas"/>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" placeholder="Keterangan tugas" v-model="inputDataTugas.ket"/>
                            </div>
                            <button v-if="enable" type="button" class="btn btn-primary" @click="simpanTugas(inputDataTugas)">Simpan</button> &nbsp
                            <button v-else="enable" type="button" class="btn btn-success" @click="updateTugas(inputDataTugas)">Update</button>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
