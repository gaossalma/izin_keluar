<!-- Keperluan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keperluan', 'Keperluan:') !!}
    {!! Form::text('keperluan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('keperluans.index') !!}" class="btn btn-default">Cancel</a>
</div>
