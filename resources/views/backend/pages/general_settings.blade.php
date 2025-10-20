@extends('backend.layout.pages-layout')
@section('title', isset($title) ? $title : 'Page title here')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Settings</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Settings
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="pd-20 card-box mb-4">
        @livewire('admin.settings')
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            //select file logo new
            $('input[name="site_logo"]').on('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;

                //check type file
                const allowed = ['image/jpeg', 'image/png', 'image/jpg'];
                if (!allowed.includes(file.type)) {
                    alert('Invalid file type. Please upload JPG or PNG image.');
                    $(this).val('');
                    return;
                }

                //show preview img
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_site_logo').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            });

            $('#updateLogoForm').submit(function(e) {
                e.preventDefault();
                var form = this;
                var inputVal = $(form).find('input[type="file"]').val();
                var errorElement = $(form).find('span.text-danger');
                errorElement.text('');

                if (inputVal.length > 0) {
                    $.ajax({
                        url: $(form).attr('action'),
                        method: $(form).attr('method'),
                        data: new FormData(form),
                        processData: false,
                        dataType: 'json',
                        contentType: false,
                        success: function(response) {
                            if (response.status == 1) {
                                $(form)[0].reset();
                                toastr.success(response.message);
                                $('#preview_site_logo').attr('src', '/' + response.image_path);
                            } else {
                                toastr.error(response.message);
                            }
                        }
                    });
                } else {
                    errorElement.text('Please, select an image file');
                }
            });
        });

        $(document).ready(function() {
            //select file favicon new
            $('input[name="site_favicon"]').on('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;

                //check type file
                const allowed = ['image/jpeg', 'image/png', 'image/jpg'];
                if (!allowed.includes(file.type)) {
                    alert('Invalid file type. Please upload JPG or PNG image.');
                    $(this).val('');
                    return;
                }

                //show preview img
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_site_favicon').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            });
            // $('input[type="file"][name="site_favicon"]').ijaboViewer({
            //     preview: 'img#preview_site_logo',
            //     imageShape: 'square',
            //     allowedExtensions: ['jpg', 'jpeg', 'png', 'ico'],
            //     onErrorShape: function(message, element) {
            //         alert(message);
            //     },
            //     onInvalidType: function(message, element) {
            //         alert(message);
            //     },
            //     onSuccess: function(message, element) {}
            // });

            $('#updateFaviconForm').submit(function(e) {
                e.preventDefault();
                var form = this;
                var inputVal = $(form).find('input[type="file"]').val();
                var errorElement = $(form).find('span.text-danger');
                errorElement.text('');

                if (inputVal.length > 0) {
                    $.ajax({
                        url: $(form).attr('action'),
                        method: $(form).attr('method'),
                        data: new FormData(form),
                        processData: false,
                        dataType: 'json',
                        contentType: false,
                        beforeSend: function() {},
                        success: function(response) {
                            if (response.status == 1) {
                                $(form)[0].reset();
                                var linkElement = document.querySelector('link[rel="icon"]');
                                linkElement.href = '/' + response.image_path;
                                toastr.success(response.message);
                                $('img.site_favicon').each(function() {
                                    $(this).attr('src', '/' + response.image_path);
                                });
                            } else {
                                toastr.error(response.message);
                            }
                        }
                    });
                } else {
                    errorElement.text('Please, select an image file');
                }
            });
        });
    </script>
@endpush
