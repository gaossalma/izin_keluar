<table class="table table-responsive" id="keperluans-table">
    <thead>
        <th>Keperluan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($keperluans as $keperluan)
        <tr>
            <td>{!! $keperluan->keperluan !!}</td>
            <td>
                {!! Form::open(['route' => ['keperluans.destroy', $keperluan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('keperluans.show', [$keperluan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('keperluans.edit', [$keperluan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>