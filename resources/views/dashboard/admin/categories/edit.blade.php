@extends('dashboard.admin.layouts.app')

@section('title')
    <title>{{ __('Edit Categories') }}</title>
@endsection

@section('admin-content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Edit Categories') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                    </div>
                    <div class="breadcrumb-item"><a href="{{ route('categories.index') }}">{{ __('Categories') }}</a></div>
                    <div class="breadcrumb-item">{{ __('Edit') }}</div>
                </div>
            </div>

            <div class="section-body">
                <div class="dashboard__content-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="instructor__profile-form-wrap mt-4">
                                        <form action="{{ route('categories.update', $category->id) }}" method="POST"
                                            enctype="multipart/form-data" class="instructor__profile-form category-form">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">{{ __('Name') }} <code>*</code></label>
                                                        <input id="name" name="name" type="text"
                                                            class="form-control" placeholder="Enter category name"
                                                            value="{{ old('name', $category->name) }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="slug">{{ __('Slug') }} <code>*</code></label>
                                                        <input id="slug" name="slug" type="text"
                                                            class="form-control" placeholder="Enter slug"
                                                            value="{{ old('slug', $category->slug) }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">{{ __('Description') }}</label>
                                                        <textarea id="description" name="description" class="form-control">{{ old('description', $category->description) }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="image">{{ __('Image') }}</label>
                                                        <input id="image" name="image" type="file"
                                                            class="form-control">
                                                        @if ($category->image)
                                                            <figure class="figure mt-2">
                                                                <img src="{{ asset($category->image) }}"
                                                                    class="figure-img img-fluid rounded img-thumbnail"
                                                                    alt="Category Image">
                                                            </figure>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="status">{{ __('Status') }}</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="status" name="status" value="1" {{ $category->status ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="status">
                                                                {{ __('Active') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">{{ __('Update') }}</button>
                                            <a href="{{ route('categories.index') }}"
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
