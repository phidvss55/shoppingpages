<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for=""> Tiêu đề trang </label>
                <input type="text" name="ps_name" value="{{ old('ps_name', isset($pages->ps_name) ? $pages->ps_name : '') }}" class="form-control" placeholder=" Tiêu đề trang ... " required>
            </div>
            <div class="form-group">
                <label for=""> Chọn trang </label>
                <select name="ps_type" id="" class="form-control">
                    <option value="1"> Về chúng tôi </option>
                    <option value="2"> Thông tin giao hàng </option>
                    <option value="3"> Chính sách bảo mật </option>
                    <option value="4"> Điều khoản sử dụng </option>
                </select>
            </div>
            <div class="form-group">
                <label for="icon"> Nội dung </label>
                <textarea name="ps_content" required class="form-control" cols="30" rows="3" placeholder=" Nội dung bài viết ... ">{{ old('ps_content', isset($pages->ps_content) ? $pages->ps_content : '') }}</textarea>
            </div>
            <a href="{{ route('admin.get.list.page_static') }}" class="btn btn-primary"> Back </a>
            <button class="btn btn-success" type="submit"> Lưu thông tin </button>
        </div>
    </div>
</form>