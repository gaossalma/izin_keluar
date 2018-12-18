<!-- Nis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nis', 'Nis:') !!}
    {!! Form::text('nis', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Kelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelas', 'Kelas:') !!}
    <select name="kelas" class="form-control">
        @php
            $data = \App\Models\Kelas::get();
        @endphp
        <option>--Pilih--</option>
        @foreach($data as $value)
        @if(isset($data_santris))
            <option 
                @if($data_santris->kelas == $value->id)
                selected
                @endif
            value="{{ $value->id }}">{{ $value->kelas }}</option>
        @else
            <option value="{{ $value->id }}">{{ $value->kelas }}</option>
        @endif
        @endforeach
    </select>
    <!-- {!! Form::text('kelas', null, ['class' => 'form-control']) !!} -->
</div>

<!-- Tgl Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_lahir', 'Tgl Lahir:') !!}
    {!! Form::date('tgl_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Asrama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asrama', 'Asrama:') !!}
    <select name="asrama" class="form-control">
        @php
            $data = \App\Models\Asrama::get();
        @endphp
        <option>--Pilih--</option>
        @foreach($data as $value)
        @if(isset($data_santri))
            <option 
                @if($data_santri->asrama == $value->id)
                selected
                @endif
            value="{{ $value->id }}">{{ $value->nama }}</option>
        @else
            <option value="{{ $value->id }}">{{ $value->nama }}</option>
        @endif
        @endforeach
    </select>
    <!-- {!! Form::text('asrama', null, ['class' => 'form-control']) !!} -->
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
    <a href="{!! route('dataSantris.index') !!}" class="btn btn-default">Cancel</a>
</div>
