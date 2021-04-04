<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $comment->user_id }}</p>
</div>

<!-- Article Id Field -->
<div class="form-group">
    {!! Form::label('article_id', 'Article Id:') !!}
    <p>{{ $comment->article_id }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{{ $comment->text }}</p>
</div>

