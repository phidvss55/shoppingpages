<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for=""> Tên bài viết </label>
                <input type="text" name="a_name" value="{{ old('a_name', isset($article->a_name) ? $article->a_name : '') }}" class="form-control" placeholder=" Tên bài viết ... ">
                @if($errors->has('a_name'))
                    <div class="error-text">
                        {{ $errors->first('a_name') }} 
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="icon"> Mô tả </label>
                <textarea name="a_description" class="form-control" cols="30" rows="3" placeholder=" Mô tả bài viết ... ">{{ old('a_description', isset($article->a_description) ? $article->a_description : '') }}</textarea>
                @if($errors->has('a_description'))
                    <div class="error-text">
                        {{ $errors->first('a_description') }} 
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="icon"> Nội dung </label>
                <textarea name="a_content" class="form-control" cols="30" rows="3" placeholder=" Nội dung bài viết ... ">{{ old('a_content', isset($article->a_content) ? $article->a_content : '') }}</textarea>
                @if($errors->has('a_content'))
                    <div class="error-text">
                        {{ $errors->first('a_content') }} 
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name"> Meta title </label>
                <input type="text" id="a_title_seo" name="a_title_seo" class="form-control" value="{{ old('a_title_seo', isset($article->a_title_seo) ? $article->a_title_seo : '') }}" placeholder=" Meta title ... ">
            </div>
            <div class="form-group">
                <label for="a_description_seo"> Meta description </label>
                <input type="text" id="a_description_seo" name="a_description_seo" class="form-control" value="{{ old('a_description_seo', isset($article->a_description_seo) ? $article->a_description_seo : '') }}" placeholder=" Meta description ... ">
            </div>
            <div class="form-group">
                <label for="a_avatar"> Avatar </label>
                <input type="file" name="a_avatar" class="form-control">
            </div>
            <a href="{{ route('admin.get.list.article') }}" class="btn btn-primary"> Back </a>
            <button class="btn btn-success" type="submit"> Lưu thông tin </button>
        </div>
    </div>
</form>