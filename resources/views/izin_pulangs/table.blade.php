<table class="table table-responsive" id="izinPulangs-table">
    <thead>
        <th>Nama Santri</th>
        <th>Orang Tua</th>
        <th>Pembimbing</th>
        <th>Tgl Pulang</th>
        <th>Tgl Kembali</th>
        <th>Keperluan</th>
        <th>Jam Kedatangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($izinPulangs as $izinPulang)
        <tr>
            <td>{!! $izinPulang->santri_nama->nama !!}</td>
            <td>{!! $izinPulang->santri_nama->orang_tua !!}</td>
            <td>{!! $izinPulang->santri_nama->a!!}</td>
            <td>{!! $izinPulang->tgl_pulang !!}</td>
            <td>{!! $izinPulang->tgl_kembali !!}</td>
            <td>{!! $izinPulang->alasan->keperluan !!}</td>
            <td>{!! $izinPulang->jam_kedatangan !!}</td>
            <td>
                {!! Form::open(['route' => ['izinPulangs.destroy', $izinPulang->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('izinPulangs.show', [$izinPulang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('izinPulangs.edit', [$izinPulang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <!-- <a href="{!! route('izinPulangs.pdf', [$izinPulang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-print"></i></a> -->
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>