<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $izinPulang->id !!}</p>
</div>

<!-- Nama Santri Field -->
<div class="form-group">
    {!! Form::label('nama_santri', 'Nama Santri:') !!}
    <p>{!! $izinPulang->santri_nama->nama !!}</p>
</div>

<!-- Tgl Pulang Field -->
<div class="form-group">
    {!! Form::label('tgl_pulang', 'Tgl Pulang:') !!}
    <p>{!! $izinPulang->tgl_pulang !!}</p>
</div>

<!-- Tgl Kembali Field -->
<div class="form-group">
    {!! Form::label('tgl_kembali', 'Tgl Kembali:') !!}
    <p>{!! $izinPulang->tgl_kembali !!}</p>
</div>

<!-- Keperluan Field -->
<div class="form-group">
    {!! Form::label('keperluan', 'Keperluan:') !!}
    <p>{!! $izinPulang->keperluan !!}</p>
</div>

<!-- Jam Kedatangan Field -->
<div class="form-group">
    {!! Form::label('jam_kedatangan', 'Jam Kedatangan:') !!}
    <p>{!! $izinPulang->jam_kedatangan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $izinPulang->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $izinPulang->updated_at !!}</p>
</div>

