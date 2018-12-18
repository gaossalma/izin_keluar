<table class="table table-responsive" id="santris-table">
    <thead>
        <th>Nis</th>
        <th>Kelas Id</th>
        <th>Tgl Lahir</th>
        <th>Asrama</th>
        <th>Orang Tua</th>
        <th>No Hp</th>
        <th>Alamat</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($santris as $santri)
        <tr>
            <td>{!! $santri->nis !!}</td>
            <td>{!! $santri->kelas_id !!}</td>
            <td>{!! $santri->tgl_lahir !!}</td>
            <td>{!! $santri->asrama !!}</td>
            <td>{!! $santri->orang_tua !!}</td>
            <td>{!! $santri->no_hp !!}</td>
            <td>{!! $santri->alamat !!}</td>
            <td>
                {!! Form::open(['route' => ['santris.destroy', $santri->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('santris.show', [$santri->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('santris.edit', [$santri->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>