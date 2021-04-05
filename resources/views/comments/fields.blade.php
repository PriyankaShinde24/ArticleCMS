<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<!-- Article Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('article_id', $articles->id, ['class' => 'form-control']) !!}
</div>

<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Your Comment:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}   
    <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
</div>
