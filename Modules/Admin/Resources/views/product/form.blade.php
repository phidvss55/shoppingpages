<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="name"> Tên sản phẩm </label>
                <input type="text" id="name" name="name" value="{{ old('name', isset($category->c_name) ? $category->c_name : '') }}" class="form-control" placeholder=" Tên sản phảm ... ">
                @if($errors->has('name'))
                    <div class="error-text">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="icon"> Mô tả </label>
                <textarea name="description" class="form-control" cols="30" rows="3" placeholder=" Mô tả ngắn gọn sản phẩm ... "></textarea>
            </div>
            <div class="form-group">
                <label for="icon"> Nội dung </label>
                <textarea name="content" class="form-control" cols="30" rows="3" placeholder=" Nội dung về sản phẩm ... "></textarea>
            </div>
            <div class="form-group">
                <label for="name"> Meta title </label>
                <input type="text" id="c_title_seo" name="c_title_seo" class="form-control" value="{{ old('c_title_seo', isset($category->c_title_seo) ? $category->c_title_seo : '') }}" placeholder=" Meta title ... ">
            </div>
            <div class="form-group">
                <label for="name"> Meta description </label>
                <input type="text" id="c_description_seo" name="c_description_seo" class="form-control" value="{{ old('c_description_seo', isset($category->c_description_seo) ? $category->c_description_seo : '') }}" placeholder=" Meta description ... ">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="name"> Loại sản phẩm </label>
                <select name="" id="" class="form-control">
                    <option value=""> --- Chọn loại sản phẩm ---</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <label for="price"> Giá Sản Phẩm </label>
                <input type="number" class="form-control" placeholder=" Giá sản phảm ... ">
            </div>
            <div class="form-group">
                <label for="price"> Khuyến mãi <span style="color:indianred">(%)</span> </label>
                <input type="number" class="form-control" placeholder=" Phần trăm khuyến mãi ... ">
            </div>
            <div class="form-group">
                <label for="avatar"> Avatar </label>
                <input type="file" name="avatar" class="form-control">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label for=""><input type="checkbox" name="hot"> Nổi Bật </label>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('admin.get.list.product') }}" class="btn btn-primary"> Back </a>
    <button class="btn btn-success" type="submit"> Lưu thông tin </button>
</form>