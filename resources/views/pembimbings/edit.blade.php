@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pembimbing
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pembimbing, ['route' => ['pembimbings.update', $pembimbing->id], 'method' => 'patch']) !!}

                        @include('pembimbings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection