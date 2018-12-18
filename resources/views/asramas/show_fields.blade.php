<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $asrama->id !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{!! $asrama->nama !!}</p>
</div>

<!-- Kapasitas Field -->
<div class="form-group">
    {!! Form::label('kapasitas', 'Kapasitas:') !!}
    <p>{!! $asrama->kapasitas !!}</p>
</div>

<!-- Pembimibing Id Field -->
<div class="form-group">
    {!! Form::label('pembimbing_id', 'Pembimbing Id:') !!}
    <p>{!! $asrama->pembimbing->nama !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $asrama->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $asrama->updated_at !!}</p>
</div>

