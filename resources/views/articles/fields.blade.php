<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200,'required' => 'required']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','required' => 'required']) !!}
</div>
<?php
$tags = '';
if (isset($articles)) {
    $countTags = \App\Models\ArticleTag::where('article_id', $articles->id)->where('deleted_at', NULL)->get()->toArray();
//dd(count($countTags));
    for ($i = 0; $i < count($countTags); $i++) {
        $tags .= \App\Models\Tag::where('id', $countTags[$i]['tag_id'])->pluck('name', 'id')->first() . ",";
    }
}
?>
<!-- Tags Display -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! $tags !!}
</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Add new tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>
@php
if(isset($articles->image)) {
@endphp
<!-- Uploaded Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uploadedImage', 'Image:') !!}
    <img src="{!! asset('images/articles/'.$articles->image) !!}" width="150">
</div>
@php
}
@endphp
<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('images', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control', 'id' => 'image']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
</div>
