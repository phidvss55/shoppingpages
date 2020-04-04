<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="name"> Tên danh mục </label>
        <input type="text" id="name" name="name" value="{{ old('name', isset($category->c_name) ? $category->c_name : '') }}" class="form-control" placeholder=" Tên danh mục ... ">
        @if($errors->has('name'))
            <div class="error-text">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="icon"> Icon </label>
        <input type="text" id="icon" name="icon" class="form-control" value="{{ old('icon', isset($category->c_icon) ? $category->c_icon : '') }}" placeholder=" fa fa-home ">
        @if($errors->has('icon'))
            <div class="error-text">
                {{ $errors->first('icon') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="name"> Meta title </label>
        <input type="text" id="c_title_seo" name="c_title_seo" class="form-control" value="{{ old('c_title_seo', isset($category->c_title_seo) ? $category->c_title_seo : '') }}" placeholder=" Meta title ... ">
    </div>
    <div class="form-group">
        <label for="name"> Meta description </label>
        <input type="text" id="c_description_seo" name="c_description_seo" class="form-control" value="{{ old('c_description_seo', isset($category->c_description_seo) ? $category->c_description_seo : '') }}" placeholder=" Meta description ... ">            </div>
    <div class="form-group">
        <div class="checkbox">
            <label for=""><input type="checkbox" name="hot"> Nổi bật </label>
        </div>
    </div>
    <a href="{{ route('admin.get.list.category') }}" class="btn btn-primary"> Back </a>
    <button class="btn btn-success" type="submit"> Lưu thông tin </button>
</form>