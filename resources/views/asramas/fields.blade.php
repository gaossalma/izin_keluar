<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Kapasitas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kapasitas', 'Kapasitas:') !!}
    {!! Form::text('kapasitas', null, ['class' => 'form-control']) !!}
</div>

<!-- Pembimibing Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pembimbing_id', 'Pembimbing Id:') !!}
    <select name="pembimbing_id" class="form-control">
    	@php
    		$data = \App\Models\Pembimbing::get();
    	@endphp
    	<option>--Pilih--</option>
    	@foreach($data as $value)
    	@if(isset($asramas))
    		<option 
    			@if($asramas->pembimbing_id == $value->id)
    			selected
    			@endif
    		value="{{ $value->id }}">{{ $value->nama }}</option>
    	@else
	    	<option value="{{ $value->id }}">{{ $value->nama }}</option>
    	@endif
    	@endforeach
	</select>

    <!-- {!! Form::text('pembimbing_id', null, ['class' => 'form-control']) !!} -->
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('asramas.index') !!}" class="btn btn-default">Cancel</a>
</div>
