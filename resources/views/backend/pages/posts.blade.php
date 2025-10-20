@extends('backend.layout.pages-layout')
@section('title', isset($title) ? $title : 'Page title here')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Posts</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            List
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <a href="{{ route('admin.add_post') }}" class="btn btn-primary">
                    <i class="icon-copy bi bi-plus-circle"> Add post</i>
                </a>
            </div>
        </div>
    </div>

    @livewire('admin.posts')

@endsection
@push('scripts')
    <script>
        window.addEventListener('deletePost', function(event) {
            var id = event.detail[0].id;
            Swal.fire({
                title: 'Are you sure?',
                html: 'You want to delete this post.',
                showCancelButton: true,
                cancelButtonText: 'Cancel',
                confirmButtonText: 'Yes, Delete',
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('deletePostAction', [id]);
                }
            });
        });
    </script>
@endpush
