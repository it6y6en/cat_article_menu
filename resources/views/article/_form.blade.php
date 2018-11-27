<div class="form-group">
    <input type="text" class="form-control" name="title" value="{{ $article->title??'' }}" placeholder="Article Title">
</div>

<div class="form-group">
    <select name="categories[]" multiple="" class="form-control">
        @include('article._categories')
    </select>
</div>

<hr>

<button type="submit" class="btn btn-primary">Save</button>
