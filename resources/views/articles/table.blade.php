<div class="table-responsive-sm">
    <table class="table table-striped" id="articles-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $articles)
            <tr>
                <td>{{ $articles->user_id }}</td>
            <td>{{ $articles->title }}</td>
            <td>{{ $articles->description }}</td>
            <td>{{ $articles->image }}</td>
                <td>
                    {!! Form::open(['route' => ['articles.destroy', $articles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articles.show', [$articles->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('articles.edit', [$articles->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>