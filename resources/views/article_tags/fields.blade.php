<!-- Article Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('article_id', 'Article Id:') !!}
    {!! Form::number('article_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tag Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tag_id', 'Tag Id:') !!}
    {!! Form::number('tag_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('articleTags.index') }}" class="btn btn-secondary">Cancel</a>
</div>
