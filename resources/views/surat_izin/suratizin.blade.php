@extends('layouts.app')

@section('content')

 

<center>

<h1>Student Information List </h1>

<table class="table" >

<tr>
	<th>Nis</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Tgl Lahir</th>
    <th>Asrama</th>
    <th>Pembimbing</th>
    <th>Orang Tua</th>
    <th>No Hp</th>
     <th>Alamat</th></tr>

 

 <!-- @foreach($students as $student) -->

 <tr>
 	<!-- <td>{!! $izinPulang->santri_nama->nama !!}</td>
	<td>{!! $izinPulang->santri_nama->orang_tua !!}</td>
	<td>{!! $izinPulang->santri_nama->a!!}</td>
	<td>{!! $izinPulang->tgl_pulang !!}</td>
	<td>{!! $izinPulang->tgl_kembali !!}</td>
	<td>{!! $izinPulang->alasan->keperluan !!}</td>
	<td>{!! $izinPulang->jam_kedatangan !!}</td> -->

 

 </tr>

 <!-- @endforeach -->

 

</center>

@endsection

 