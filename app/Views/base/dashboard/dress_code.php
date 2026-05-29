<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row mb-3">

        <!-- Pengaturan Dress Code -->
        <div class="col-xl-5 col-lg-5 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pengaturan Dress Code</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="font-weight-bold">Judul</label>
                        <input id="judul_dresscode" type="text" class="form-control" placeholder="Contoh : Dress Code Undangan">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea id="deskripsi_dresscode" class="form-control" rows="3" placeholder="Contoh : Tamu undangan diharapkan mengenakan pakaian dengan warna yang sesuai tema."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Status Tampil</label>
                        <div class="custom-control custom-switch mt-1">
                            <input type="checkbox" class="custom-control-input" id="switchDressCode" checked>
                            <label class="custom-control-label" for="switchDressCode">Aktif</label>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="font-weight-bold mb-0">Palet Warna</label>
                        <a id="addWarna" class="btn btn-sm btn-primary" style="color:#fff;">
                            <i class="fas fa-plus fa-sm"></i> Tambah Warna
                        </a>
                    </div>
                    <div id="konten-warna">

                        <div class="warna-item border rounded p-3 mb-2" id="warna1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold text-muted" style="font-size:13px;">#1</span>
                                <a class="btn btn-sm btn-danger btn_remove_warna" data-id="1" style="font-size:11px;padding:3px 8px;">Hapus</a>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <input type="text" class="form-control form-control-sm warna-nama" placeholder="Nama warna" value="Dusty Rose">
                                </div>
                                <div class="col-5">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text p-1">
                                                <input type="color" class="color-picker" value="#d4a5a5" style="width:26px;height:26px;border:none;cursor:pointer;padding:0;">
                                            </span>
                                        </div>
                                        <input type="text" class="form-control color-hex" value="#d4a5a5" maxlength="7">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="warna-item border rounded p-3 mb-2" id="warna2">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold text-muted" style="font-size:13px;">#2</span>
                                <a class="btn btn-sm btn-danger btn_remove_warna" data-id="2" style="font-size:11px;padding:3px 8px;">Hapus</a>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <input type="text" class="form-control form-control-sm warna-nama" placeholder="Nama warna" value="Sage Green">
                                </div>
                                <div class="col-5">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text p-1">
                                                <input type="color" class="color-picker" value="#9caf88" style="width:26px;height:26px;border:none;cursor:pointer;padding:0;">
                                            </span>
                                        </div>
                                        <input type="text" class="form-control color-hex" value="#9caf88" maxlength="7">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="warna-item border rounded p-3 mb-2" id="warna3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold text-muted" style="font-size:13px;">#3</span>
                                <a class="btn btn-sm btn-danger btn_remove_warna" data-id="3" style="font-size:11px;padding:3px 8px;">Hapus</a>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <input type="text" class="form-control form-control-sm warna-nama" placeholder="Nama warna" value="Ivory White">
                                </div>
                                <div class="col-5">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text p-1">
                                                <input type="color" class="color-picker" value="#f5f0e8" style="width:26px;height:26px;border:none;cursor:pointer;padding:0;">
                                            </span>
                                        </div>
                                        <input type="text" class="form-control color-hex" value="#f5f0e8" maxlength="7">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalSimpan">
                            <i class="fas fa-save fa-sm mr-1"></i> Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preview -->
        <div class="col-xl-7 col-lg-7 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Preview Tampilan di Undangan</h6>
                </div>
                <div class="card-body">

                    <!-- Preview Card Undangan -->
                    <div id="preview-card" style="background: linear-gradient(135deg, #fdf6f0 0%, #f9ede5 100%); border-radius: 16px; padding: 36px 24px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.08); max-width: 420px; margin: 0 auto;">
                        <div style="font-size:11px; letter-spacing:3px; text-transform:uppercase; color:#b08d7a; margin-bottom:6px;">Wedding Invitation</div>
                        <div id="preview-judul" style="font-size:22px; font-weight:700; color:#5a3e36; margin-bottom:10px; font-family: Georgia, serif;">Dress Code Undangan</div>
                        <div style="width:40px; height:2px; background:#c9a07a; margin:0 auto 14px;"></div>
                        <div id="preview-deskripsi" style="font-size:13px; color:#7a6055; line-height:1.7; margin-bottom:24px;">
                            Tamu undangan diharapkan mengenakan pakaian dengan warna yang sesuai tema.
                        </div>
                        <div id="preview-palet" class="d-flex justify-content-center flex-wrap" style="gap:16px;">
                            <!-- palet warna di-render oleh JS -->
                        </div>
                    </div>

                    <!-- Keterangan -->
                    <div class="mt-4">
                        <p class="text-muted" style="font-size:12px;"><i class="fas fa-info-circle mr-1"></i> Preview akan berubah secara langsung sesuai data yang kamu isi di form kiri.</p>
                    </div>

                </div>
            </div>

            <!-- Tips -->
            <div class="card shadow border-left-info">
                <div class="card-body py-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto mr-3">
                            <i class="fas fa-lightbulb fa-2x text-info"></i>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold text-info mb-1">Tips Pilihan Warna</div>
                            <div style="font-size:12px; color:#555;">
                                Gunakan 2–4 warna yang serasi. Tambahkan nama warna agar tamu lebih mudah memahami kode warna. Contoh: <em>Dusty Rose, Sage Green, Ivory, Navy</em>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal Konfirmasi Simpan -->
<div class="modal fade" id="modalSimpan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Peringatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin ingin menyimpan perubahan?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" id="btnSimpanDressCode">Ya, Simpan</button>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<style>
    .warna-item { transition: box-shadow .2s; }
    .warna-item:hover { box-shadow: 0 2px 8px rgba(0,0,0,0.10); }
    .color-picker { border-radius: 3px; }
    #preview-palet .palet-bulat { transition: transform .2s; cursor: default; }
    #preview-palet .palet-bulat:hover { transform: scale(1.1); }
</style>

<script>
    var warnaCount = 3;

    function renderPreview() {
        // Judul & deskripsi
        var judul = $('#judul_dresscode').val().trim();
        var desk  = $('#deskripsi_dresscode').val().trim();
        $('#preview-judul').text(judul || 'Dress Code Undangan');
        $('#preview-deskripsi').text(desk || 'Tamu undangan diharapkan mengenakan pakaian dengan warna yang sesuai tema.');

        // Palet
        var html = '';
        $('.warna-item').each(function() {
            var nama  = $(this).find('.warna-nama').val() || '';
            var hex   = $(this).find('.color-hex').val() || '#cccccc';
            html += '<div class="palet-bulat text-center mx-2 mb-2">' +
                '<div style="width:60px;height:60px;border-radius:50%;background:' + hex + ';margin:0 auto;box-shadow:0 3px 10px rgba(0,0,0,0.15);border:3px solid #fff;"></div>' +
                '<div style="font-size:11px;margin-top:6px;color:#5a3e36;font-weight:600;">' + nama + '</div>' +
                '<div style="font-size:10px;color:#b08d7a;">' + hex + '</div>' +
            '</div>';
        });
        $('#preview-palet').html(html);
    }

    // Tambah warna baru
    $('#addWarna').click(function() {
        warnaCount++;
        var n = warnaCount;
        var tpl = '<div class="warna-item border rounded p-3 mb-2" id="warna' + n + '">' +
            '<div class="d-flex align-items-center justify-content-between mb-2">' +
                '<span class="font-weight-bold text-muted" style="font-size:13px;">#' + n + '</span>' +
                '<a class="btn btn-sm btn-danger btn_remove_warna" data-id="' + n + '" style="font-size:11px;padding:3px 8px;">Hapus</a>' +
            '</div>' +
            '<div class="row">' +
                '<div class="col-7">' +
                    '<input type="text" class="form-control form-control-sm warna-nama" placeholder="Nama warna" value="">' +
                '</div>' +
                '<div class="col-5">' +
                    '<div class="input-group input-group-sm">' +
                        '<div class="input-group-prepend">' +
                            '<span class="input-group-text p-1">' +
                                '<input type="color" class="color-picker" value="#cccccc" style="width:26px;height:26px;border:none;cursor:pointer;padding:0;">' +
                            '</span>' +
                        '</div>' +
                        '<input type="text" class="form-control color-hex" value="#cccccc" maxlength="7">' +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</div>';
        $('#konten-warna').append(tpl);
        bindEvents();
        renderPreview();
    });

    // Hapus warna
    $(document).on('click', '.btn_remove_warna', function() {
        var id = $(this).data('id');
        $('#warna' + id).remove();
        renderPreview();
    });

    function bindEvents() {
        // color picker → hex input
        $(document).off('input', '.color-picker').on('input', '.color-picker', function() {
            $(this).closest('.input-group').find('.color-hex').val($(this).val());
            renderPreview();
        });
        // hex input → color picker
        $(document).off('input', '.color-hex').on('input', '.color-hex', function() {
            var val = $(this).val();
            if (/^#[0-9A-Fa-f]{6}$/.test(val)) {
                $(this).closest('.input-group').find('.color-picker').val(val);
            }
            renderPreview();
        });
        // nama warna
        $(document).off('input', '.warna-nama').on('input', '.warna-nama', function() {
            renderPreview();
        });
    }

    bindEvents();

    // Judul & deskripsi live preview
    $('#judul_dresscode, #deskripsi_dresscode').on('input', function() {
        renderPreview();
    });

    // Tombol simpan (belum terhubung ke backend)
    $('#btnSimpanDressCode').on('click', function() {
        $('#modalSimpan').modal('hide');
        // TODO: hubungkan ke backend
    });

    // Render awal
    renderPreview();
</script>
