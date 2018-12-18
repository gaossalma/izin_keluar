<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $dataSantri->id !!}</p>
</div>

<!-- Nis Field -->
<div class="form-group">
    {!! Form::label('nis', 'Nis:') !!}
    <p>{!! $dataSantri->nis !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{!! $dataSantri->nama !!}</p>
</div>

<!-- Kelas Field -->
<div class="form-group">
    {!! Form::label('kelas', 'Kelas:') !!}
    <p>{!! $dataSantri->kelas->kelas !!}</p>
</div>

<!-- Tgl Lahir Field -->
<div class="form-group">
    {!! Form::label('tgl_lahir', 'Tgl Lahir:') !!}
    <p>{!! $dataSantri->tgl_lahir !!}</p>
</div>

<!-- Asrama Field -->
<div class="form-group">
    {!! Form::label('asrama', 'Asrama:') !!}
    <p>{!! $dataSantri->asrama->nama !!}</p>
</div>

<!-- Orang Tua Field -->
<div class="form-group">
    {!! Form::label('orang_tua', 'Orang Tua:') !!}
    <p>{!! $dataSantri->orang_tua !!}</p>
</div>

<!-- No Hp Field -->
<div class="form-group">
    {!! Form::label('no_hp', 'No Hp:') !!}
    <p>{!! $dataSantri->no_hp !!}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{!! $dataSantri->alamat !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $dataSantri->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $dataSantri->updated_at !!}</p>
</div>

