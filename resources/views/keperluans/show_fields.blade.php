<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $keperluan->id !!}</p>
</div>

<!-- Keperluan Field -->
<div class="form-group">
    {!! Form::label('keperluan', 'Keperluan:') !!}
    <p>{!! $keperluan->keperluan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $keperluan->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $keperluan->updated_at !!}</p>
</div>

