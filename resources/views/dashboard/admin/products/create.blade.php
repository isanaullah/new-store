@extends('dashboard.admin.layouts.app')

@section('title')
    <title>{{ __('Add Products') }}</title>
@endsection

@section('admin-content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Add Products') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                    </div>
                    <div class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('Products') }}</a></div>
                    <div class="breadcrumb-item">{{ __('Add') }}</div>
                </div>
            </div>

            <div class="section-body">
                <div class="dashboard__content-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="instructor__profile-form-wrap mt-4">
                                        <form action="{{ route('products.store') }}" method="POST"
                                            enctype="multipart/form-data" class="instructor__profile-form product-form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="category_id">{{ __('Category') }} <code>*</code></label>
                                                        <select id="category_id" name="category_id" class="form-control">
                                                            <option value="">{{ __('Select Category') }}</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title">{{ __('Title') }} <code>*</code></label>
                                                        <input id="title" name="title" type="text"
                                                            class="form-control" placeholder="Enter product title"
                                                            value="{{ old('title') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="slug">{{ __('Slug') }} <code>*</code></label>
                                                        <input id="slug" name="slug" type="text"
                                                            class="form-control" placeholder="Enter slug"
                                                            value="{{ old('slug') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">{{ __('Description') }} <code>*</code></label>
                                                        <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="price">{{ __('Price') }} <code>*</code></label>
                                                        <input id="price" name="price" type="number" step="0.01"
                                                            class="form-control" placeholder="Enter price"
                                                            value="{{ old('price') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sale_price">{{ __('Sale Price') }}</label>
                                                        <input id="sale_price" name="sale_price" type="number" step="0.01"
                                                            class="form-control" placeholder="Enter sale price"
                                                            value="{{ old('sale_price') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sku">{{ __('SKU') }}</label>
                                                        <input id="sku" name="sku" type="text"
                                                            class="form-control" placeholder="Enter SKU"
                                                            value="{{ old('sku') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="stock_qty">{{ __('Stock Quantity') }} <code>*</code></label>
                                                        <input id="stock_qty" name="stock_qty" type="number"
                                                            class="form-control" placeholder="Enter stock quantity"
                                                            value="{{ old('stock_qty') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="stock_status">{{ __('Stock Status') }} <code>*</code></label>
                                                        <select id="stock_status" name="stock_status" class="form-control">
                                                            <option value="in_stock" {{ old('stock_status') == 'in_stock' ? 'selected' : '' }}>{{ __('In Stock') }}</option>
                                                            <option value="out_of_stock" {{ old('stock_status') == 'out_of_stock' ? 'selected' : '' }}>{{ __('Out of Stock') }}</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="brand">{{ __('Brand') }}</label>
                                                        <input id="brand" name="brand" type="text"
                                                            class="form-control" placeholder="Enter brand"
                                                            value="{{ old('brand') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="tags">{{ __('Tags') }}</label>
                                                        <input id="tags" name="tags" type="text"
                                                            class="form-control" placeholder="Enter tags (comma separated)"
                                                            value="{{ old('tags') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="thumbnail">{{ __('Thumbnail') }}</label>
                                                        <input id="thumbnail" name="thumbnail" type="file"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">{{ __('Save') }}</button>
                                            <a href="{{ route('products.index') }}"
                                                class="btn btn-default float-right">{{ __('Cancel') }}</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#description"))
            .then((editor) => {
                console.log(editor);
            })
            .catch((error) => {
                console.error(error);
            });
    </script>
@endpush
