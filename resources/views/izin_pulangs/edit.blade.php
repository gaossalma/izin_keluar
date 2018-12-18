@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Izin Pulang
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($izinPulang, ['route' => ['izinPulangs.update', $izinPulang->id], 'method' => 'patch']) !!}

                        @include('izin_pulangs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection