@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="nav-tabs-custom">
                <div class="tab-content">
                    <div class="form-group">
                        <label for="">Tên</label>
                        <input data-slug="source" placeholder="Title" name="vi[title]" type="text" id="vi[title]" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input data-slug="target" placeholder="Slug" name="vi[slug]" type="text" id="vi[slug]" class="form-control slug">
                    </div>

                    <div class="form-group">
                        <label for="">Link</label>
                        <input data-slug="target" placeholder="Slug" name="vi[slug]" type="text" id="vi[slug]" class="form-control slug">
                    </div>

                    <div class="form-group">
                        <label for="">Tags</label>
                        <input data-slug="target" placeholder="Slug" name="vi[slug]" type="text" id="vi[slug]" class="form-control slug">
                    </div>

                    <div class="form-group">
                        <label for="">Tập</label>
                        <input data-slug="target" placeholder="Slug" name="vi[slug]" type="text" id="vi[slug]" class="form-control slug">
                    </div>


                    <div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-flat">Create post</button>
                <button name="button" type="reset" class="btn btn-default btn-flat">Reset</button> <a href="http://localhost:8000/vi/backend/blog/posts" class="btn btn-danger pull-right btn-flat"><i class="fa fa-times"></i> Cancel</a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <select name="category_id" id="category" class="form-control">
                            <option value="">category 1</option>
                            <option value="">category 2</option>
                            <option value="">category 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">status 1</option>
                            <option value="">status 2</option>
                            <option value="">status 3</option>
                        </select>
                    </div>
                    @tags('asgardcms/post')
                    @mediaSingle('thumbnail')
                </div>
            </div>
        </div>
    </div>
@stop
