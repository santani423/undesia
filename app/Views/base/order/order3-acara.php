<div class="konten" style="display: flex;flex-grow: 1;overflow-x: hidden;flex-direction: row;margin-top: 60px;margin-bottom: 40px;">
    <section class="fdb-block" style="padding-top: 20px;flex:1; ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-8 col-xl-6">
            <div class="row">
              <div class="col text-center">
                <h1 style="color: #3498db;margin-bottom:0px;">Acara!</h1>
                <p tyle="font-size: 15px;font-weight:500; ">Hai kak! di isi dulu ya datanya </p>
              </div>
            </div>
            
            <div class="progress" style="margin-top: 10px;">
              <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">30%</div>
            </div>

        <form method="post" action="<?php echo base_url('order/4'); ?>">
         <div id="konten-acara" >
            <div id="acara1">
                <a style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;margin-top: 15px;display: flex;">#1</a>
                <div class="row align-items-center">
                  <div class="col">
                    <label>Judul Acara</label>
                    <input name="nama_acara[]" type="text" class="form-control" placeholder="Contoh : Akad Nikah" value="<?php if(isset($_SESSION['nama_acara0'])) echo $_SESSION['nama_acara0'] ?>" required>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                   <div class="col">
                    <label>Tanggal</label>
                    <input name="datepicker1" type="text" class="form-control" placeholder="Tanggal" id="datepicker1" readonly="readonly" style="cursor:pointer; background-color: #FFFFFF" value="<?php if(isset($_SESSION['tgl_acara0'])) echo $_SESSION['tgl_acara0']; ?>" required>
                    <input type="hidden" id="tgl_acara1" name="tgl_acara[]" value="<?php if(isset($_SESSION['tgl_acara0'])){ echo $_SESSION['tgl_acara0']; }else{ echo date("Y/m/d"); }
                    ?>">
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col mt-2">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Waktu / Jam </label>
                            <input name="waktu_mulai[]" type="time" class="form-control" placeholder="Contoh : 10.00 Pagi" value="<?php if(isset($_SESSION['waktu_mulai0'])) echo $_SESSION['waktu_mulai0'] ?>" required>
                        </div>
                        <div class="col-md-6">
                          <label>Waktu / Jam </label>
                          <input name="waktu_akhir[]" type="time" class="form-control" placeholder="Contoh : 10.00 Pagi" value="<?php if(isset($_SESSION['waktu_akhir0'])) echo $_SESSION['waktu_akhir0'] ?>" required>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <label>Tempat Acara</label>
                    <input name="tempat_acara[]" type="text" class="form-control" placeholder="Contoh : Kediaman Mempelai Wanita" value="<?php if(isset($_SESSION['tempat_acara0'])) echo $_SESSION['tempat_acara0'] ?>" required>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <label>Alamat Acara</label>
                    <textarea name="alamat_acara[]" type="text" class="form-control" required><?php if(isset($_SESSION['alamat_acara0'])) echo $_SESSION['alamat_acara0'] ?></textarea>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <label>Google Maps</label>
                    <textarea name="maps[]" type="text" class="form-control maps-embed-input" id="maps_embed_1"><?php if(isset($_SESSION['maps0'])) echo $_SESSION['maps0'] ?></textarea>
                    <div class="mt-2 d-flex align-items-center" style="gap:10px;">
                      <button type="button" class="btn btn-sm btn-outline-info btn-pilih-lokasi" data-target="maps_embed_1">
                        <i class="lni-map-marker"></i> Pilih Lokasi di Peta
                      </button>
                      <a href="<?php echo base_url('maps'); ?>" style="color:#17a2b8;font-size:13px;"><i class="lni-question-circle"></i>&nbsp;Cara Menambahkan Maps</a>
                    </div>
                  </div>
                </div>
                
              </div>

              <div id="acara2">
                <div class="row align-items-center mt-3">
                  <div class="col-auto">
                     <a style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;display: flex;">#2</a>
                  </div>
                  <div class="col">
                    <a id="2" class="btn btn-sm btn_remove" style="background-color: #dc3545;padding: 5px;font-size: 12px;border-radius: 5px;">Hapus</a>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col">
                    <label>Judul Acara</label>
                    <input name="nama_acara[]" type="text" class="form-control" placeholder="Contoh : Resepsi Pernikahan" value="<?php if(isset($_SESSION['nama_acara1'])) echo $_SESSION['nama_acara1'] ?>" required>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                   <div class="col">
                    <label>Tanggal</label>
                    <input name="datepicker2" type="text" class="form-control" placeholder="Tanggal" id="datepicker2" readonly="readonly" style="cursor:pointer; background-color: #FFFFFF" value="<?php if(isset($_SESSION['tgl_acara1'])) echo $_SESSION['tgl_acara1']; ?>" required>
                    <input type="hidden" id="tgl_acara2" name="tgl_acara[]" value="<?php if(isset($_SESSION['tgl_acara1'])) { echo $_SESSION['tgl_acara1']; }else{ echo date("Y/m/d"); } ?>">
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col mt-2">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Waktu / Jam </label>
                            <input name="waktu_mulai[]" type="time" class="form-control" placeholder="Contoh : 10.00 Pagi" value="<?php if(isset($_SESSION['waktu_mulai1'])) echo $_SESSION['waktu_mulai1'] ?>" required>
                        </div>
                        <div class="col-md-6">
                          <label>Waktu / Jam </label>
                          <input name="waktu_akhir[]" type="time" class="form-control" placeholder="Contoh : 10.00 Pagi" value="<?php if(isset($_SESSION['waktu_akhir1'])) echo $_SESSION['waktu_akhir1'] ?>" required>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <label>Tempat Acara</label>
                    <input name="tempat_acara[]" type="text" class="form-control" placeholder="Contoh : Kediaman Mempelai Wanita" value="<?php if(isset($_SESSION['tempat_acara1'])) echo $_SESSION['tempat_acara1'] ?>" required>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <label>Alamat Acara</label>
                    <textarea name="alamat_acara[]" type="text" class="form-control" required><?php if(isset($_SESSION['alamat_acara1'])) echo $_SESSION['alamat_acara1'] ?></textarea>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <label>Google Maps</label>
                    <textarea name="maps[]" type="text" class="form-control maps-embed-input" id="maps_embed_2"><?php if(isset($_SESSION['maps1'])) echo $_SESSION['maps1'] ?></textarea>
                    <div class="mt-2 d-flex align-items-center" style="gap:10px;">
                      <button type="button" class="btn btn-sm btn-outline-info btn-pilih-lokasi" data-target="maps_embed_2">
                        <i class="lni-map-marker"></i> Pilih Lokasi di Peta
                      </button>
                      <a href="<?php echo base_url('maps'); ?>" style="color:#17a2b8;font-size:13px;"><i class="lni-question-circle"></i>&nbsp;Cara Menambahkan Maps</a>
                    </div>
                  </div>
                </div>
                
              </div>

              <?php 
              if(isset($_SESSION['jml_acara'])) {
                if($_SESSION['jml_acara'] > 2) {
                  for($i=2;$i < $_SESSION['jml_acara'];$i++){ 
              
              ?>
                <div id="acara<?php echo $i+1 ?>">
                <div class="row align-items-center mt-3">
                  <div class="col-auto">
                     <a style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;display: flex;">#<?php echo $i+1 ?></a>
                  </div>
                  <div class="col">
                    <a id="<?php echo $i+1 ?>" class="btn btn-sm btn_remove" style="background-color: #dc3545;padding: 5px;font-size: 12px;border-radius: 5px;">Hapus</a>
                  </div>
                </div>
                
                <div class="row align-items-center">
                  <div class="col">
                    <label>Judul Acara</label>
                    <input name="nama_acara[]" type="text" class="form-control" placeholder="Contoh : Pertama Bertemu" value="<?php if(isset($_SESSION['nama_acara'.$i])) echo $_SESSION['nama_acara'.$i] ?>" required>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                   <div class="col">
                    <label>Tanggal</label>
                    <input name="datepicker<?php echo $i+1 ?>" type="text" class="form-control" placeholder="Tanggal" id="datepicker<?php echo $i+1 ?>" readonly="readonly" style="cursor:pointer; background-color: #FFFFFF" value="<?php if(isset($_SESSION['tgl_acara'.$i])) echo $_SESSION['tgl_acara'.$i] ?>" required>
                    <input type="hidden" id="tgl_acara<?php echo $i+1 ?>" name="tgl_acara[]" value="<?php if(isset($_SESSION['tgl_acara'.$i])) echo $_SESSION['tgl_acara'.$i] ?>">
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col mt-2">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Waktu / Jam </label>
                            <input name="waktu_mulai[]" type="time" class="form-control" placeholder="Contoh : 10.00 Pagi" value="<?php if(isset($_SESSION['waktu_mulai'.$i])) echo $_SESSION['waktu_mulai'.$i] ?>" required>
                        </div>
                        <div class="col-md-6">
                          <label>Waktu / Jam </label>
                          <input name="waktu_akhir[]" type="time" class="form-control" placeholder="Contoh : 10.00 Pagi" value="<?php if(isset($_SESSION['waktu_akhir'.$i])) echo $_SESSION['waktu_akhir'.$i] ?>" required>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <label>Tempat Acara</label>
                    <input name="tempat_acara[]" type="text" class="form-control" placeholder="Contoh : Kediaman Mempelai Wanita" value="<?php if(isset($_SESSION['tempat_acara'.$i])) echo $_SESSION['tempat_acara'.$i] ?>" required>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <label>Alamat Acara</label>
                    <textarea name="alamat_acara[]" type="text" class="form-control" required><?php if(isset($_SESSION['alamat_acara'.$i])) echo $_SESSION['alamat_acara'.$i] ?></textarea>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <label>Google Maps</label>
                    <textarea name="maps[]" type="text" class="form-control maps-embed-input" id="maps_embed_<?php echo $i+1 ?>"><?php if(isset($_SESSION['maps'.$i])) { echo $_SESSION['maps'.$i]; } ?></textarea>
                    <div class="mt-2 d-flex align-items-center" style="gap:10px;">
                      <button type="button" class="btn btn-sm btn-outline-info btn-pilih-lokasi" data-target="maps_embed_<?php echo $i+1 ?>">
                        <i class="lni-map-marker"></i> Pilih Lokasi di Peta
                      </button>
                      <a href="<?php echo base_url('maps'); ?>" style="color:#17a2b8;font-size:13px;"><i class="lni-question-circle"></i>&nbsp;Cara Menambahkan Maps</a>
                    </div>
                  </div>
                </div>
                
              </div>

              <?php } 
                  }
                }
              ?>

            </div>

            <div class="row mt-2" >
              <div class="col text-center">
                <a id="addAcara" class="btn btn-primary btn-order btn-order-secondary btn-block"  >Tambah acara</a>
              </div>
            </div>

            <div class="row justify-content-start mt-3" >
              <div class="col">
                <div class="row">
                  
                  <div class="col-auto">
                    <a href="<?php echo base_url('order/2'); ?>" class="btn btn-secondary btn-order">Kembali</a>
                  </div>
                  <div class="col">
                    <input name="submit" type="submit" class="btn btn-primary btn-order btn-block" style="background-color: #3498db;" value="Lanjut">
                  </div>
                </div>   
              </div>
            </div>

            </form>

          </div>
        </div>
      </div>
    </section>
</div>

<!-- Modal Pilih Lokasi -->
<div class="modal fade" id="modalPilihLokasi" tabindex="-1" role="dialog" aria-labelledby="modalPilihLokasiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#3498db;color:#fff;padding:12px 16px;">
        <h5 class="modal-title" id="modalPilihLokasiLabel" style="font-size:16px;">Pilih Lokasi Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;opacity:1;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:12px;">
        <div class="input-group mb-2">
          <input type="text" id="map-search-input" class="form-control" placeholder="Cari lokasi... (contoh: Gedung Sari, Jakarta)">
          <div class="input-group-append">
            <button class="btn btn-info" type="button" id="btn-cari-lokasi">Cari</button>
          </div>
        </div>
        <ul id="map-search-results" class="list-group mb-2" style="max-height:140px;overflow-y:auto;display:none;"></ul>
        <div class="mb-2">
          <button type="button" class="btn btn-sm btn-outline-success" id="btn-lokasi-saya">
            <i class="lni-map-marker"></i> Gunakan Lokasi Saya Saat Ini
          </button>
          <small id="lokasi-saya-status" class="ml-2 text-muted"></small>
        </div>
        <div id="map-picker" style="height:340px;border-radius:8px;border:1px solid #ddd;"></div>
        <small class="text-muted mt-1 d-block">Klik pada peta atau seret marker untuk memilih lokasi yang tepat.</small>
        <div id="selected-location-info" class="alert alert-info mt-2 py-2" style="display:none;font-size:13px;"></div>
      </div>
      <div class="modal-footer" style="padding:8px 16px;">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary btn-sm" id="btn-pakai-lokasi" disabled>Pakai Lokasi Ini</button>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
(function() {
  var mapInstance = null;
  var mapMarker = null;
  var selectedLat = null;
  var selectedLng = null;
  var targetTextareaId = null;

  function initMap(lat, lng) {
    lat = lat || -6.2088;
    lng = lng || 106.8456;
    if (mapInstance) {
      mapInstance.remove();
      mapInstance = null;
      mapMarker = null;
    }
    mapInstance = L.map('map-picker').setView([lat, lng], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(mapInstance);
    mapMarker = L.marker([lat, lng], { draggable: true }).addTo(mapInstance);
    mapMarker.on('dragend', function(e) {
      var pos = e.target.getLatLng();
      updateSelectedLocation(pos.lat, pos.lng);
    });
    mapInstance.on('click', function(e) {
      mapMarker.setLatLng(e.latlng);
      updateSelectedLocation(e.latlng.lat, e.latlng.lng);
    });
    updateSelectedLocation(lat, lng);
  }

  function updateSelectedLocation(lat, lng) {
    selectedLat = lat;
    selectedLng = lng;
    document.getElementById('btn-pakai-lokasi').disabled = false;
    var info = document.getElementById('selected-location-info');
    info.style.display = 'block';
    info.innerHTML = 'Koordinat: <strong>' + lat.toFixed(6) + ', ' + lng.toFixed(6) + '</strong>';
    fetch('https://nominatim.openstreetmap.org/reverse?format=json&lat=' + lat + '&lon=' + lng)
      .then(function(r) { return r.json(); })
      .then(function(data) {
        var addr = data.display_name || (lat + ',' + lng);
        info.innerHTML = 'Lokasi: <strong>' + addr + '</strong><br><small class="text-muted">Koordinat: ' + lat.toFixed(6) + ', ' + lng.toFixed(6) + '</small>';
      })
      .catch(function() {});
  }

  document.addEventListener('click', function(e) {
    var btn = e.target.closest('.btn-pilih-lokasi');
    if (!btn) { return; }
    targetTextareaId = btn.getAttribute('data-target');
    document.getElementById('map-search-input').value = '';
    document.getElementById('map-search-results').style.display = 'none';
    document.getElementById('map-search-results').innerHTML = '';
    document.getElementById('selected-location-info').style.display = 'none';
    document.getElementById('btn-pakai-lokasi').disabled = true;
    document.getElementById('lokasi-saya-status').textContent = '';
    selectedLat = null; selectedLng = null;
    $('#modalPilihLokasi').modal('show');
  });

  $('#modalPilihLokasi').on('shown.bs.modal', function() {
    initMap(-6.2088, 106.8456);
  });

  $('#modalPilihLokasi').on('hidden.bs.modal', function() {
    if (mapInstance) { mapInstance.remove(); mapInstance = null; mapMarker = null; }
  });

  function doSearch() {
    var q = document.getElementById('map-search-input').value.trim();
    if (!q) { return; }
    var resultList = document.getElementById('map-search-results');
    resultList.innerHTML = '<li class="list-group-item text-muted" style="font-size:13px;">Mencari...</li>';
    resultList.style.display = 'block';
    fetch('https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(q) + '&limit=5&accept-language=id')
      .then(function(r) { return r.json(); })
      .then(function(data) {
        resultList.innerHTML = '';
        if (!data.length) {
          resultList.innerHTML = '<li class="list-group-item text-muted" style="font-size:13px;">Lokasi tidak ditemukan.</li>';
          return;
        }
        data.forEach(function(item) {
          var li = document.createElement('li');
          li.className = 'list-group-item list-group-item-action py-1';
          li.style.fontSize = '13px';
          li.style.cursor = 'pointer';
          li.textContent = item.display_name;
          li.addEventListener('click', function() {
            var lat = parseFloat(item.lat);
            var lng = parseFloat(item.lon);
            mapInstance.setView([lat, lng], 16);
            mapMarker.setLatLng([lat, lng]);
            updateSelectedLocation(lat, lng);
            resultList.style.display = 'none';
          });
          resultList.appendChild(li);
        });
      })
      .catch(function() {
        resultList.innerHTML = '<li class="list-group-item text-danger" style="font-size:13px;">Gagal mencari lokasi.</li>';
      });
  }

  document.getElementById('btn-cari-lokasi').addEventListener('click', doSearch);
  document.getElementById('map-search-input').addEventListener('keydown', function(e) {
    if (e.key === 'Enter') { e.preventDefault(); doSearch(); }
  });

  document.getElementById('btn-lokasi-saya').addEventListener('click', function() {
    var status = document.getElementById('lokasi-saya-status');
    if (!navigator.geolocation) {
      status.textContent = 'Browser tidak mendukung geolokasi.';
      return;
    }
    status.textContent = 'Mendapatkan lokasi...';
    navigator.geolocation.getCurrentPosition(function(pos) {
      status.textContent = '';
      var lat = pos.coords.latitude;
      var lng = pos.coords.longitude;
      mapInstance.setView([lat, lng], 17);
      mapMarker.setLatLng([lat, lng]);
      updateSelectedLocation(lat, lng);
    }, function() {
      status.textContent = 'Gagal mendapatkan lokasi. Pastikan izin lokasi diaktifkan.';
    });
  });

  document.getElementById('btn-pakai-lokasi').addEventListener('click', function() {
    if (!selectedLat || !selectedLng || !targetTextareaId) { return; }
    var embed = '<iframe src="https://maps.google.com/maps?q=' + selectedLat + ',' + selectedLng
      + '&hl=id&z=16&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    document.getElementById(targetTextareaId).value = embed;
    $('#modalPilihLokasi').modal('hide');
  });
})();
</script>