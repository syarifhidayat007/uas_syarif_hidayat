@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Transaksi</b></h1>
<br>
<form action="{{ asset('views_master_yosi/edit_proses_yosi') }}" method="POST">
@csrf
<input type="hidden" name="id_perkiraan" value="<?php echo $views_master_yosi->id_perkiraan ?>">
<div class="mb-3 row">
    <label for="nomor_perkiraan" class="col-sm-2 col-form-label">Nomor Perkiraan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nomor_perkiraan" name="nomor_perkiraan" value="<?php echo $views_master_yosi->nomor_perkiraan ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_perkiraan" class="col-sm-2 col-form-label">Nama Perkiraan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_perkiraan" name="nama_perkiraan" value="<?php echo $views_master_yosi->nama_perkiraan ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tipe" name="tipe" value="<?php echo $views_master_yosi->tipe ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="induk" class="col-sm-2 col-form-label">Induk</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="induk" name="induk" value="<?php echo $views_master_yosi->induk ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="level" class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="level" name="level" value="<?php echo $views_master_yosi->level ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="kelompok" class="col-sm-2 col-form-label">Kelompok</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="kelompok" name="kelompok" value="<?php echo $views_master_yosi->kelompok ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="normal" class="col-sm-2 col-form-label">Normal</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="normal" name="normal" value="<?php echo $views_master_yosi->normal ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="awal_debet" class="col-sm-2 col-form-label">Awal Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="awal_debet" name="awal_debet" value="<?php echo $views_master_yosi->awal_debet ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="awal_kredit" class="col-sm-2 col-form-label">Awal Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="awal_kredit" name="awal_kredit" value="<?php echo $views_master_yosi->awal_kredit ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="mut_debet" class="col-sm-2 col-form-label">Mut Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="mut_debet" name="mut_debet" value="<?php echo $views_master_yosi->mut_debet ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="mut_kredit" class="col-sm-2 col-form-label">Mut Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="mut_kredit" name="mut_kredit" value="<?php echo $views_master_yosi->mut_kredit ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="sisa_debet" class="col-sm-2 col-form-label">Sisa Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="sisa_debet" name="sisa_debet" value="<?php echo $views_master_yosi->sisa_debet ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="sisa_kredit" class="col-sm-2 col-form-label">Sisa Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="sisa_kredit" name="sisa_kredit" value="<?php echo $views_master_yosi->sisa_kredit ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="rl_debet" class="col-sm-2 col-form-label">RL Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="rl_debet" name="rl_debet" value="<?php echo $views_master_yosi->rl_debet ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="rl_kredit" class="col-sm-2 col-form-label">RL Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="rl_kredit" name="rl_kredit" value="<?php echo $views_master_yosi->rl_kredit ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="nrc_debet" class="col-sm-2 col-form-label">NRC Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="nrc_debet" name="nrc_debet" value="<?php echo $views_master_yosi->nrc_debet ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="nrc_kredit" class="col-sm-2 col-form-label">NRC Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="nrc_kredit" name="nrc_kredit" value="<?php echo $views_master_yosi->nrc_kredit ?>">
    </div>
</div>
<input type="submit" value="Simpan">
</form>

@endsection