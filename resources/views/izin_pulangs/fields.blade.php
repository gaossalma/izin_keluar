<!-- Nama Santri Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_santri', 'Nama Santri:') !!}
    <select name="nama_santri" class="form-control">
        @php
            $data = \App\Models\DataSantri::get();
        @endphp
        <option>--Pilih--</option>
        @foreach($data as $value)
        @if(isset($izin_pulang))
            <option 
                @if($izin_pulang->nama_santri == $value->id)
                selected
                @endif
            value="{{ $value->id }}">{{ $value->nama }}</option>
        @else
            <option value="{{ $value->id }}">{{ $value->nama }}</option>
        @endif
        @endforeach
    </select>
    <!-- {!! Form::text('nama_santri', null, ['class' => 'form-control']) !!} -->
</div>

<!-- Tgl Pulang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_pulang', 'Tgl Pulang:') !!}
    {!! Form::date('tgl_pulang', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Kembali Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_kembali', 'Tgl Kembali:') !!}
    {!! Form::date('tgl_kembali', null, ['class' => 'form-control']) !!}
</div>

<!-- Keperluan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keperluan', 'Keperluan:') !!}
    <select name="keperluan" class="form-control">
        @php
            $data = \App\Models\Keperluan::get();
        @endphp
        <option>--Pilih--</option>
        @foreach($data as $value)
        @if(isset($izin_pulang))
            <option 
                @if($izin_pulang->keperluan == $value->id)
                selected
                @endif
            value="{{ $value->id }}">{{ $value->keperluan }}</option>
        @else
            <option value="{{ $value->id }}">{{ $value->keperluan }}</option>
        @endif
        @endforeach
    </select>
    <!-- {!! Form::text('keperluan', null, ['class' => 'form-control']) !!} -->
</div>

<!-- Jam Kedatangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jam_kedatangan', 'Jam Kedatangan:') !!}
    {!! Form::text('jam_kedatangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('izinPulangs.index') !!}" class="btn btn-default">Cancel</a>
</div>
