@extends('layouts.admin.master')
@section('controller', 'Category')
@section('action', 'Add')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('elements.error')
    <form action="{{ route('admin.cates.postAdd') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="sltParent">
                <option value="0">Please Choose Category</option>
                <?php \Common::cate_parent($parent, 0, '--', old('sltParent')); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Category Name</label>
            <input class="form-control" name="txtCateName" value="{{ old('txtCateName') }}" placeholder="Please Enter Category Name"/>
        </div>
        <div class="form-group">
            <label>Category Order</label>
            <input class="form-control" name="txtOrder" value="{{ old('txtOrder') }}" placeholder="Please Enter Category Order"/>
        </div>
        <div class="form-group">
            <label>Category Keywords</label>
            <input class="form-control" name="txtKeywords" value="{{ old('txtKeywords') }}" placeholder="Please Enter Category Keywords"/>
        </div>
        <div class="form-group">
            <label>Category Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{{ old('txtDescription') }}</textarea>
        </div>
        <div class="form-group">
            <label>Category Status</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Visible
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Invisible
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Category Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection