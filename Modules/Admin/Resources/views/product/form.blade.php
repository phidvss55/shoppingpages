<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for=""> Tên sản phẩm </label>
                <input type="text" name="pro_name" value="{{ old('pro_name', isset($product->pro_name) ? $product->pro_name : '') }}" class="form-control" placeholder=" Tên sản phảm ... ">
                @if($errors->has('pro_name'))
                    <div class="error-text">
                        {{ $errors->first('pro_name') }} 
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="icon"> Mô tả </label>
                <textarea name="pro_description" class="form-control" cols="30" rows="3" placeholder=" Mô tả ngắn gọn sản phẩm ... ">{{ old('pro_description', isset($product->pro_description) ? $product->pro_description : '') }}</textarea>
                @if($errors->has('pro_description'))
                    <div class="error-text">
                        {{ $errors->first('pro_description') }} 
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="icon"> Nội dung </label>
                <textarea name="pro_content" class="form-control" cols="30" rows="3" placeholder=" Nội dung về sản phẩm ... ">{{ old('pro_content', isset($product->pro_content) ? $product->pro_content : '') }}</textarea>
                @if($errors->has('pro_content'))
                    <div class="error-text">
                        {{ $errors->first('pro_content') }} 
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name"> Meta title </label>
                <input type="text" id="pro_title_seo" name="pro_title_seo" class="form-control" value="{{ old('pro_title_seo', isset($product->pro_title_seo) ? $product->pro_title_seo : '') }}" placeholder=" Meta title ... ">
            </div>
            <div class="form-group">
                <label for="pro_description_seo"> Meta description </label>
                <input type="text" id="pro_description_seo" name="pro_description_seo" class="form-control" value="{{ old('pro_description_seo', isset($product->pro_description_seo) ? $product->pro_description_seo : '') }}" placeholder=" Meta description ... ">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="name"> Loại sản phẩm </label>
                <select name="pro_category_id" id="" class="form-control">
                    <option value=""> --- Chọn loại sản phẩm ---</option>
                    @if( isset($categories))
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('pro_category_id', isset($product->pro_category_id) ? $product->pro_category_id : '') == $category->id ? "selected='selected'" : '' }}>{{ $category->c_name }}</option>
                        @endforeach
                    @endif
                </select>
                @if($errors->has('pro_category_id'))
                    <div class="error-text">
                        {{ $errors->first('pro_category_id') }} 
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_price"> Giá Sản Phẩm </label>
                <input type="number" name="pro_price" class="form-control" value="{{ old('pro_price', isset($product->pro_price) ? $product->pro_price : 0) }}" placeholder=" Giá sản phảm ... ">
                @if($errors->has('pro_price'))
                    <div class="error-text">
                        {{ $errors->first('pro_price') }} 
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_sale"> Khuyến mãi <span style="color:indianred">(%)</span> </label>
                <input type="number" name="pro_sale" value="{{ old('pro_sale', isset($product->pro_sale) ? $product->pro_sale : 0) }}" class="form-control" placeholder=" Phần trăm khuyến mãi ... ">
            </div>
            <div class="form-group">
                <label for="pro_avatar"> Avatar </label>
                <input type="file" name="pro_avatar" class="form-control">
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