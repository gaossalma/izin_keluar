<table class="table table-responsive" id="pembimbings-table">
    <thead>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Tgl Lahir</th>
        <th>No Hp</th>
        <th>Alamat</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pembimbings as $pembimbing)
        <tr>
            <td>{!! $pembimbing->nama !!}</td>
            <td>{!! $pembimbing->jabatan !!}</td>
            <td>{!! $pembimbing->tgl_lahir !!}</td>
            <td>{!! $pembimbing->no_hp !!}</td>
            <td>{!! $pembimbing->alamat !!}</td>
            <td>
                {!! Form::open(['route' => ['pembimbings.destroy', $pembimbing->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pembimbings.show', [$pembimbing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pembimbings.edit', [$pembimbing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>