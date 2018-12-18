<table class="table table-responsive" id="dataSantris-table">
    <thead>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tgl Lahir</th>
        <th>Asrama</th>
        <th>Pembimbing</th>
        <th>Orang Tua</th>
        <th>No Hp</th>
        <th>Alamat</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($dataSantris as $dataSantri)
        <tr>
            <td>{!! $dataSantri->nis !!}</td>
            <td>{!! $dataSantri->nama !!}</td>
            <td>{!! $dataSantri->Kelas->kelas !!}</td>
            <td>{!! $dataSantri->tgl_lahir !!}</td>
            <td>{!! $dataSantri->Asrama->nama !!}</td>
            <td>{!! $dataSantri->Asrama->pembimbing->nama !!}</td>
            <td>{!! $dataSantri->orang_tua !!}</td>
            <td>{!! $dataSantri->no_hp !!}</td>
            <td>{!! $dataSantri->alamat !!}</td>
            <td>
                {!! Form::open(['route' => ['dataSantris.destroy', $dataSantri->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dataSantris.show', [$dataSantri->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('dataSantris.edit', [$dataSantri->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>