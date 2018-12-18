<table class="table table-responsive" id="asramas-table">
    <thead>
        <th>Nama</th>
        <th>Kapasitas</th>
        <th>Pembimibing</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($asramas as $asrama)
        <tr>
            <td>{!! $asrama->nama !!}</td>
            <td>{!! $asrama->kapasitas !!}</td>
            <td>{!! $asrama->pembimbing->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['asramas.destroy', $asrama->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('asramas.show', [$asrama->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asramas.edit', [$asrama->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>