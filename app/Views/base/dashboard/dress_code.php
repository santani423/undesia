<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('user/update_dress_code') ?>">

    <div class="row mb-3">

        <!-- Kolom Kiri: Pengaturan -->
        <div class="col-xl-5 col-lg-5 mb-4">

            <!-- Pengaturan Utama -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengaturan Dress Code</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="font-weight-bold">Judul</label>
                        <input id="judul_dresscode" name="title" type="text" class="form-control"
                            placeholder="Contoh : Dress Code Undangan"
                            value="<?= $dress_code ? esc($dress_code->title) : '' ?>">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea id="deskripsi_dresscode" name="description" class="form-control" rows="3"
                            placeholder="Contoh : Tamu undangan diharapkan mengenakan pakaian formal."><?= $dress_code ? esc($dress_code->description) : '' ?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Warna Background</label>
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text p-1">
                                            <input type="color" id="bg_color_picker" value="<?= $dress_code ? esc($dress_code->background_color) : '#ffffff' ?>"
                                                style="width:26px;height:26px;border:none;cursor:pointer;padding:0;">
                                        </span>
                                    </div>
                                    <input type="text" name="background_color" id="bg_color_hex" class="form-control"
                                        value="<?= $dress_code ? esc($dress_code->background_color) : '#ffffff' ?>" maxlength="7">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Warna Teks</label>
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text p-1">
                                            <input type="color" id="text_color_picker" value="<?= $dress_code ? esc($dress_code->text_color) : '#333333' ?>"
                                                style="width:26px;height:26px;border:none;cursor:pointer;padding:0;">
                                        </span>
                                    </div>
                                    <input type="text" name="text_color" id="text_color_hex" class="form-control"
                                        value="<?= $dress_code ? esc($dress_code->text_color) : '#333333' ?>" maxlength="7">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Status Tampil</label>
                        <div class="custom-control custom-switch mt-1">
                            <input type="checkbox" class="custom-control-input" id="switchDressCode"
                                name="is_active" value="1"
                                <?= ($dress_code && $dress_code->is_active == 1) || !$dress_code ? 'checked' : '' ?>>
                            <label class="custom-control-label" for="switchDressCode">Aktif</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Palet Warna -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Palet Warna</h6>
                    <a id="addWarna" class="btn btn-sm btn-primary" style="color:#fff;">
                        <i class="fas fa-plus fa-sm"></i> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <div id="konten-warna">
                        <?php if(!empty($colors)): ?>
                            <?php foreach($colors as $i => $clr): ?>
                            <div class="warna-item border rounded p-3 mb-2" id="warna<?= $i+1 ?>">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold text-muted" style="font-size:13px;">#<?= $i+1 ?></span>
                                    <a class="btn btn-sm btn-danger btn_remove_warna" data-id="<?= $i+1 ?>" style="font-size:11px;padding:3px 8px;">Hapus</a>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <input type="text" class="form-control form-control-sm warna-nama"
                                            name="color_name[]" placeholder="Nama warna"
                                            value="<?= esc($clr->color_name) ?>">
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text p-1">
                                                    <input type="color" class="color-picker" value="<?= esc($clr->color_hex) ?>"
                                                        style="width:26px;height:26px;border:none;cursor:pointer;padding:0;">
                                                </span>
                                            </div>
                                            <input type="text" class="form-control color-hex" name="color_hex[]"
                                                value="<?= esc($clr->color_hex) ?>" maxlength="7">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="warna-item border rounded p-3 mb-2" id="warna1">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold text-muted" style="font-size:13px;">#1</span>
                                    <a class="btn btn-sm btn-danger btn_remove_warna" data-id="1" style="font-size:11px;padding:3px 8px;">Hapus</a>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <input type="text" class="form-control form-control-sm warna-nama"
                                            name="color_name[]" placeholder="Nama warna" value="">
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text p-1">
                                                    <input type="color" class="color-picker" value="#d4a5a5"
                                                        style="width:26px;height:26px;border:none;cursor:pointer;padding:0;">
                                                </span>
                                            </div>
                                            <input type="text" class="form-control color-hex" name="color_hex[]"
                                                value="#d4a5a5" maxlength="7">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Item Dress Code (Pria / Wanita / dll) -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Kategori Pakaian</h6>
                    <a id="addItem" class="btn btn-sm btn-primary" style="color:#fff;">
                        <i class="fas fa-plus fa-sm"></i> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <div id="konten-item">
                        <?php if(!empty($items)): ?>
                            <?php foreach($items as $i => $itm): ?>
                            <div class="item-dresscode border rounded p-3 mb-2" id="item<?= $i+1 ?>">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold text-muted" style="font-size:13px;">#<?= $i+1 ?></span>
                                    <a class="btn btn-sm btn-danger btn_remove_item" data-id="<?= $i+1 ?>" style="font-size:11px;padding:3px 8px;">Hapus</a>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-sm item-judul"
                                        name="item_title[]" placeholder="Contoh : Pria / Wanita"
                                        value="<?= esc($itm->title) ?>">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-sm"
                                        name="item_type[]" placeholder="Tipe (contoh: pria / wanita / umum)"
                                        value="<?= esc($itm->type) ?>">
                                </div>
                                <div class="form-group mb-0">
                                    <textarea class="form-control form-control-sm item-desc"
                                        name="item_description[]" rows="2"
                                        placeholder="Deskripsi pakaian..."><?= esc($itm->description) ?></textarea>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="item-dresscode border rounded p-3 mb-2" id="item1">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold text-muted" style="font-size:13px;">#1</span>
                                    <a class="btn btn-sm btn-danger btn_remove_item" data-id="1" style="font-size:11px;padding:3px 8px;">Hapus</a>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-sm item-judul"
                                        name="item_title[]" placeholder="Contoh : Pria" value="">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-sm"
                                        name="item_type[]" placeholder="Tipe (contoh: pria / wanita / umum)" value="">
                                </div>
                                <div class="form-group mb-0">
                                    <textarea class="form-control form-control-sm item-desc"
                                        name="item_description[]" rows="2"
                                        placeholder="Deskripsi pakaian..."></textarea>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">
                <i class="fas fa-save mr-1"></i> Simpan Perubahan
            </button>

        </div>

        <!-- Kolom Kanan: Preview -->
        <div class="col-xl-7 col-lg-7 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Preview Tampilan</h6>
                </div>
                <div class="card-body">
                    <div id="preview-card" style="border-radius:16px;padding:36px 24px;text-align:center;box-shadow:0 4px 20px rgba(0,0,0,0.08);max-width:460px;margin:0 auto;transition:background .3s;">
                        <div style="font-size:11px;letter-spacing:3px;text-transform:uppercase;margin-bottom:6px;opacity:.6;" id="preview-sub">Wedding Invitation</div>
                        <div id="preview-judul" style="font-size:22px;font-weight:700;margin-bottom:10px;font-family:Georgia,serif;">
                            <?= $dress_code ? esc($dress_code->title) : 'Dress Code Undangan' ?>
                        </div>
                        <div style="width:40px;height:2px;background:currentColor;margin:0 auto 14px;opacity:.4;"></div>
                        <div id="preview-deskripsi" style="font-size:13px;line-height:1.7;margin-bottom:24px;opacity:.75;">
                            <?= $dress_code ? esc($dress_code->description) : 'Tamu undangan diharapkan mengenakan pakaian dengan warna yang sesuai tema.' ?>
                        </div>
                        <div id="preview-palet" class="d-flex justify-content-center flex-wrap mb-4" style="gap:12px;"></div>
                        <div id="preview-items" class="d-flex justify-content-center flex-wrap" style="gap:12px;"></div>
                    </div>
                    <p class="text-muted mt-3 mb-0" style="font-size:12px;text-align:center;">
                        <i class="fas fa-info-circle mr-1"></i> Preview berubah langsung sesuai input di form kiri.
                    </p>
                </div>
            </div>

            <div class="card shadow border-left-info">
                <div class="card-body py-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto mr-3">
                            <i class="fas fa-lightbulb fa-2x text-info"></i>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold text-info mb-1">Tips</div>
                            <div style="font-size:12px;color:#555;">
                                Gunakan 2–4 warna serasi. Tambahkan kategori <em>Pria</em> dan <em>Wanita</em> agar tamu lebih mudah memahami dress code yang diminta.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </form>
</div>

<style>
    .warna-item, .item-dresscode { transition: box-shadow .2s; }
    .warna-item:hover, .item-dresscode:hover { box-shadow: 0 2px 8px rgba(0,0,0,0.10); }
</style>

<script>
    var warnaCount = <?= !empty($colors) ? count($colors) : 1 ?>;
    var itemCount  = <?= !empty($items)  ? count($items)  : 1 ?>;

    // ===== PREVIEW =====
    function renderPreview() {
        var bg   = $('#bg_color_hex').val()   || '#ffffff';
        var tc   = $('#text_color_hex').val() || '#333333';
        var judul = $('#judul_dresscode').val().trim();
        var desk  = $('#deskripsi_dresscode').val().trim();

        $('#preview-card').css({ background: bg, color: tc });
        $('#preview-judul').text(judul || 'Dress Code Undangan');
        $('#preview-deskripsi').text(desk || 'Tamu undangan diharapkan mengenakan pakaian dengan warna yang sesuai tema.');

        // Palet warna
        var palHtml = '';
        $('.warna-item').each(function(){
            var nama = $(this).find('.warna-nama').val() || '';
            var hex  = $(this).find('.color-hex').val()  || '#cccccc';
            palHtml += '<div class="text-center">' +
                '<div style="width:56px;height:56px;border-radius:50%;background:' + hex + ';margin:0 auto;box-shadow:0 3px 10px rgba(0,0,0,0.15);border:3px solid rgba(255,255,255,0.6);"></div>' +
                '<div style="font-size:11px;margin-top:5px;font-weight:600;">' + nama + '</div>' +
                '<div style="font-size:10px;opacity:.6;">' + hex + '</div>' +
            '</div>';
        });
        $('#preview-palet').html(palHtml);

        // Item kategori
        var itmHtml = '';
        $('.item-dresscode').each(function(){
            var judul_item = $(this).find('.item-judul').val() || '';
            var desc_item  = $(this).find('.item-desc').val()  || '';
            if(!judul_item) return;
            itmHtml += '<div style="background:rgba(255,255,255,0.25);border-radius:10px;padding:10px 16px;min-width:120px;">' +
                '<div style="font-weight:700;font-size:13px;margin-bottom:4px;">' + judul_item + '</div>' +
                '<div style="font-size:11px;opacity:.75;">' + desc_item + '</div>' +
            '</div>';
        });
        $('#preview-items').html(itmHtml);
    }

    // ===== TAMBAH WARNA =====
    $('#addWarna').click(function(){
        warnaCount++;
        var n = warnaCount;
        var tpl = '<div class="warna-item border rounded p-3 mb-2" id="warna' + n + '">' +
            '<div class="d-flex align-items-center justify-content-between mb-2">' +
                '<span class="font-weight-bold text-muted" style="font-size:13px;">#' + n + '</span>' +
                '<a class="btn btn-sm btn-danger btn_remove_warna" data-id="' + n + '" style="font-size:11px;padding:3px 8px;">Hapus</a>' +
            '</div>' +
            '<div class="row">' +
                '<div class="col-7"><input type="text" class="form-control form-control-sm warna-nama" name="color_name[]" placeholder="Nama warna" value=""></div>' +
                '<div class="col-5"><div class="input-group input-group-sm">' +
                    '<div class="input-group-prepend"><span class="input-group-text p-1">' +
                        '<input type="color" class="color-picker" value="#cccccc" style="width:26px;height:26px;border:none;cursor:pointer;padding:0;">' +
                    '</span></div>' +
                    '<input type="text" class="form-control color-hex" name="color_hex[]" value="#cccccc" maxlength="7">' +
                '</div></div>' +
            '</div>' +
        '</div>';
        $('#konten-warna').append(tpl);
        renderPreview();
    });

    // ===== TAMBAH ITEM =====
    $('#addItem').click(function(){
        itemCount++;
        var n = itemCount;
        var tpl = '<div class="item-dresscode border rounded p-3 mb-2" id="item' + n + '">' +
            '<div class="d-flex align-items-center justify-content-between mb-2">' +
                '<span class="font-weight-bold text-muted" style="font-size:13px;">#' + n + '</span>' +
                '<a class="btn btn-sm btn-danger btn_remove_item" data-id="' + n + '" style="font-size:11px;padding:3px 8px;">Hapus</a>' +
            '</div>' +
            '<div class="form-group mb-2"><input type="text" class="form-control form-control-sm item-judul" name="item_title[]" placeholder="Contoh : Pria" value=""></div>' +
            '<div class="form-group mb-2"><input type="text" class="form-control form-control-sm" name="item_type[]" placeholder="Tipe (contoh: pria / wanita / umum)" value=""></div>' +
            '<div class="form-group mb-0"><textarea class="form-control form-control-sm item-desc" name="item_description[]" rows="2" placeholder="Deskripsi pakaian..."></textarea></div>' +
        '</div>';
        $('#konten-item').append(tpl);
        renderPreview();
    });

    // ===== HAPUS =====
    $(document).on('click', '.btn_remove_warna', function(){
        $('#warna' + $(this).data('id')).remove();
        renderPreview();
    });
    $(document).on('click', '.btn_remove_item', function(){
        $('#item' + $(this).data('id')).remove();
        renderPreview();
    });

    // ===== SYNC COLOR PICKER =====
    $(document).on('input', '.color-picker', function(){
        $(this).closest('.input-group').find('.color-hex').val($(this).val());
        renderPreview();
    });
    $(document).on('input', '.color-hex', function(){
        var val = $(this).val();
        if(/^#[0-9A-Fa-f]{6}$/.test(val)) $(this).closest('.input-group').find('.color-picker').val(val);
        renderPreview();
    });

    // ===== BG & TEXT COLOR =====
    $('#bg_color_picker').on('input', function(){ $('#bg_color_hex').val($(this).val()); renderPreview(); });
    $('#bg_color_hex').on('input', function(){
        if(/^#[0-9A-Fa-f]{6}$/.test($(this).val())) $('#bg_color_picker').val($(this).val());
        renderPreview();
    });
    $('#text_color_picker').on('input', function(){ $('#text_color_hex').val($(this).val()); renderPreview(); });
    $('#text_color_hex').on('input', function(){
        if(/^#[0-9A-Fa-f]{6}$/.test($(this).val())) $('#text_color_picker').val($(this).val());
        renderPreview();
    });

    // ===== LIVE INPUT =====
    $(document).on('input', '#judul_dresscode, #deskripsi_dresscode, .warna-nama, .item-judul, .item-desc', renderPreview);

    // Render awal
    renderPreview();
</script>
