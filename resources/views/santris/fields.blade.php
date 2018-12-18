<!-- Nis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nis', 'Nis:') !!}
    {!! Form::text('nis', null, ['class' => 'form-control']) !!}
</div>

<!-- Kelas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelas_id', 'Kelas Id:') !!}
    {!! Form::text('kelas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_lahir', 'Tgl Lahir:') !!}
    {!! Form::date('tgl_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Asrama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asrama', 'Asrama:') !!}
    {!! Form::text('asrama', null, ['class' => 'form-control']) !!}
</div>

<!-- Orang Tua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orang_tua', 'Orang Tua:') !!}
    {!! Form::text('orang_tua', null, ['class' => 'form-control']) !!}
</div>

<!-- No Hp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_hp', 'No Hp:') !!}
    {!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('santris.index') !!}" class="btn btn-default">Cancel</a>
</div>
