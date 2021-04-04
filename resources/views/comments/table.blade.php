<div class="table-responsive-sm">
    <table class="table table-striped" id="comments-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Article Id</th>
        <th>Text</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->user_id }}</td>
            <td>{{ $comment->article_id }}</td>
            <td>{{ $comment->text }}</td>
                <td>
                    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comments.show', [$comment->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('comments.edit', [$comment->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>