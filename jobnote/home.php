<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Vue JS</title>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
        <link rel="stylesheet" href="./dist/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="http://localhost/jobnote/css/bootstrap.min.css">
    </head>
    <body id="belajar">

        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Anda" v-model="nama"/>
                    </div>

                    <h2>Hello {{ nama }}</h2>
                </div>
                <div class="col-lg-10">

                    <p></p>

                    <button @click="tambahBarang" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
                        Tambah Barang
                    </button>

                    <p></p>

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID Barang</th>
                                <th class="text-center">Nama Barang</th>
                                <th class="text-center">Jenis Barang</th>
                                <th class="text-center">Tanggal Kadaluarsa</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="b in dataBarang">
                                <td>{{ b.idBarang }}</td>
                                <td>{{ b.namaBarang }}</td>
                                <td>{{ b.jenisBarang }}</td>
                                <td>{{ b.tanggalKadaluarsa }}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal" @click="editBarang(b)">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" @click="hapusBarang(b)">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 v-if="enable" class="modal-title">Tambah Barang</h4>
                        <h4 v-else="enable" class="modal-title">Edit Barang</h4>
                    </div>
                    <div class="modal-body">
                        <form v-if="enable">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Barang" v-model="inputDataBarang.namaBarang"/>
                            </div>
                            <div class="form-group">
                                <label>Jenis Barang</label>
                                <select class="form-control" v-model="inputDataBarang.jenisBarang">
                                    <option value="" disabled>Pilih Jenis Barang</option>
                                    <option value="gas">Gas</option>
                                    <option value="padat">Padat</option>
                                    <option value="cair">Cair</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" placeholder="Masukkan Tanggal Kadaluarsa" v-model="inputDataBarang.tanggalKadaluarsa"/>
                            </div>
                        </form>
                        <form v-else="enable">
                            <div class="form-group">
                                <label>ID Barang</label>
                                <input type="text" class="form-control" v-model="inputDataBarang.idBarang" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Barang" v-model="inputDataBarang.namaBarang"/>
                            </div>
                            <div class="form-group">
                                <label>Jenis Barang</label>
                                <select class="form-control" placeholder="Pilih Jenis Barang" v-model="inputDataBarang.jenisBarang">
                                    <option value="" disabled>Pilih Jenis Barang</option>
                                    <option value="gas">Gas</option>
                                    <option value="padat">Padat</option>
                                    <option value="cair">Cair</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" placeholder="Masukkan Tanggal Kadaluarsa" v-model="inputDataBarang.tanggalKadaluarsa"/>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                        <button v-if="enable" type="button" class="btn btn-primary" data-dismiss="modal" @click="simpanBarang(inputDataBarang)">Simpan</button>
                        <button v-else="enable" type="button" class="btn btn-success" data-dismiss="modal" @click="updateBarang(inputDataBarang)">Update</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="./dist/js/jquery.min.js"></script>
        <script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./dist/js/vue.min.js"></script>
        <script type="text/javascript" src="./app.js"></script>
        <script type="text/javascript" src="http://localhost/jobnote/js/dist/vue.min.js"></script>
    <script type="text/javascript" src="http://localhost/jobnote/js/appnote.js"></script>
    </body>
</html>