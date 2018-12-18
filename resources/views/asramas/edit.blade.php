@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Asrama
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($asrama, ['route' => ['asramas.update', $asrama->id], 'method' => 'patch']) !!}

                        @include('asramas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection