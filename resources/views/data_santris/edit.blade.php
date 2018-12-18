@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Santri
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dataSantri, ['route' => ['dataSantris.update', $dataSantri->id], 'method' => 'patch']) !!}

                        @include('data_santris.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection