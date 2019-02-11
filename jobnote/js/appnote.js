new Vue({
  el: '#coba',
  data: function() {
    return {
      dataTugas: [],
      inputDataTugas: {},
      enable: false
    }
  },
  methods: {
    tambahTugas: function() {
      this.enable = true;
      this.inputDataTugas = {};
    },
    simpanTugas: function(tgs) {
      this.dataTugas.push({
        'namaMatakuliah': tgs.namaMatakuliah,
        'tugas': tgs.tugas,
        'batasTugas': tgs.batasTugas,
        'ket': tgs.ket
      });
    },
    editTugas: function(tgs) {
      this.enable = false;
      this.index = this.dataTugas.indexOf(tgs);
      this.inputDataTugas.namaMatakuliah = tgs.namaMatakuliah;
      this.inputDataTugas.tugas = tgs.tugas;
      this.inputDataTugas.batasTugas = tgs.batasTugas;
      this.inputDataTugas.ket = tgs.ket;
    },
    updateTugas: function(tgs) {
      this.dataTugas[this.index].namaMatakuliah = tgs.namaMatakuliah;
      this.dataTugas[this.index].tugas = tgs.tugas;
      this.dataTugas[this.index].batasTugas = tgs.batasTugas;
      this.dataTugas[this.index].ket = tgs.ket;
      this.inputDataTugas = {};
    },
    hapusTugas: function(tgs) {
      var result = confirm('Anda yakin menghapus tugas ini???');
      if (result) {
        this.index = this.dataTugas.indexOf(tgs);
        this.dataTugas.splice(this.index, 1);
      }
    }
  }
});
