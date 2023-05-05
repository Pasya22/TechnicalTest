<nav class="col-md-2 d-none d-md-block bg-dark sidebar text-white">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Master <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="<?=site_url('Welcome/DataPegawai');?>" id="navbarDropdown" >
              Data Pegawai
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="<?=site_url('Welcome/DataJabatan')?>" id="navbarDropdown" >
              Data Jabatan
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="<?=site_url('Welcome/DataKontrak')?>" id="navbarDropdown" >
              Data Kontrak
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Data</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          <div class="btn-group mr-2">
            <a  class="btn btn-success" href="<?=site_url('Welcome/FromAddPegawai')?>">ADD DATA</a>
          </div>
          </div>
        </div> -->
      </div>
      <?php foreach ($show as $key => $abc) {?>
        
      
      <?php }?>
<form id="formAddDataPegawai" method="post" class="formAddDataPegawai" >
  <div class="form-group">
    <label for="nama">ID Pegawai</label>
    <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="<?= $abc->id_pegawai; ?>" readonly>
  </div>
  <div class="form-group">
    <label for="nama">Nama Pegawai:</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $abc->nama; ?>">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat:</label>
    <textarea class="form-control" id="alamat" name="alamat"></textarea>
  </div>
  <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
      <option value="L">--- pilih jenis Kelamin ---</option>
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
  <button type="button" name="submit" onclick="updatedata()"class="btn btn-outline-primary" id="submit">
      Save
</button>
</form>
</div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


    </main>
    
    <!-- <script>
function addData() {
  // Mendapatkan nilai input dari form
  var id_pegawai = document.getElementById("id_pegawai").value;
  var nama = document.getElementById("nama").value;
  var alamat = document.getElementById("alamat").value;
  var tanggal_lahir = document.getElementById("tanggal_lahir").value;
  var jenis_kelamin = document.getElementById("jenis_kelamin").value;

  // Membuat objek XMLHttpRequest
  var xhttp = new XMLHttpRequest();

  // Mengatur callback function ketika AJAX berhasil
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };

  // Membuat request AJAX
  xhttp.open("POST", "addDataPegawai", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id_pegawai=" + id_pegawai + "&nama=" + nama+"&alamat=" + alamat+"&tanggal_lahir=" + tanggal_lahir+"&jenis_kelamin=" + jenis_kelamin);
}
</script> -->

<script>
//  function addData() {
//     var data = $('.formAddDataPegawai').serialize();
//     console.log(data);
//     $.ajax({
//         type: 'POST',
//         url: "http://localhost/datakontrakpegawai2/index.php/Welcome/addDataPegawai",
//         data: data,
//         success: function(data) {
//             var datas = JSON.parse(data);
//             console.log(datas);
//             if (datas.status) {
//                 iziToast.success({
//                     title: 'Alhamdulilah',
//                     message: 'data Berhasil diinput',
//                     position: 'topRight'
//                 });
//                 setTimeout(function() {
//                     window.location.href =
//                         "<?= site_url('Welcome/DataPegawai/') ?>";
//                 }, 100);
//             } else {
//                 iziToast.error({
//                     title: 'Masyaallah',
//                     message: 'Data Tidak terinput',
//                     position: 'topRight'
//                 });

//             }


//         }
//     });
// }
function updatedata(id) {
    var data = $('.formAddDataPegawai' + id).serialize();
    console.log(data);
    $.ajax({
        type: 'POST',
        url: "http://localhost/datakontrakpegawai2/index.php/Welcome/editDataPegawai/" + <?= $this->uri->segment(3)?>,
        data: data,
        success: function(data) {
            var datas = JSON.parse(data);
            console.log(datas);
            if (datas.status) {
                iziToast.success({
                    title: 'Alhamdulilah',
                    message: 'data Berhasil DiUbah',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.href =
                        "<?= site_url('Welcome/DataPegawai/') ?>";
                }, 100);
            } else {
                iziToast.error({
                    title: 'Masyaallah',
                    message: 'data Berhasil tidak ke ubah, coba periksa lagi ya..',
                    position: 'topRight'
                });

            }


        }
    });
}
   
</script>





