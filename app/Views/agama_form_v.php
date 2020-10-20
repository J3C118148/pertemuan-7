<section class="my-4">
        <div class="container">
            <h2>Agama</h2>
            <form method="post" action="<?php echo site_url('Agama/save'); ?>">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="kode" name="kode" required maxlength="11" value="<?php if (!empty($dataAgama)) echo $dataAgama->kode_agama; ?>">
                        <input type="hidden" id="id" name="id" value="<?php if (!empty($dataAgama)) echo $dataAgama->kode_agama; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Agama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" required value="<?php if (!empty($dataAgama)) echo $dataAgama->nama_agama; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </form>
        </div>
    </section>