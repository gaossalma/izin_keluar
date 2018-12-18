@extends('izin_pulangs.my')

@section('content')

<center>

<br><br>

<a href="pdf" class="btnprn btn">Print Preview</a></center>

<script type="text/javascript">

     $(document).ready(function(){

              $('.btnprn').printPage();

     });

</script>

<center>
  <!-- Nama Santri Field -->
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $izinPulang->id !!}</p>
</div>

<!-- Nama Santri Field -->
<div class="form-group">
    {!! Form::label('nama_santri', 'Nama Santri:') !!}
    <p>{!! $izinPulang->nama_santri !!}</p>
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

<!-- data tabel keseluruhan -->
<!-- <table class="table table-responsive" id="izinPulangs-table">
    <thead>
        <th>Nama Santri</th>
        <th>Orang Tua</th>
        <th>Pembimbing</th>
        <th>Tgl Pulang</th>
        <th>Tgl Kembali</th>
        <th>Keperluan</th>
        <th>Jam Kedatangan</th>
    </thead>
    <tbody>
    @foreach($izinPulangs as $izinPulang)
        <tr>
            <td>{!! $izinPulang->santri_nama->nama !!}</td>
            <td>{!! $izinPulang->santri_nama->orang_tua !!}</td>
            <td>{!! $izinPulang->santri_nama->a!!}</td>
            <td>{!! $izinPulang->tgl_pulang !!}</td>
            <td>{!! $izinPulang->tgl_kembali !!}</td>
            <td>{!! $izinPulang->alasan->keperluan !!}</td>
            <td>{!! $izinPulang->jam_kedatangan !!}</td>
        </tr>
    @endforeach
    </tbody>
</table> -->
@endsection