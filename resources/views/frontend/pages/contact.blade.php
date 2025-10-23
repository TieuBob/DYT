@extends('frontend.layout.pages-layout')
@section('title', isset($title) ? $title : 'Page title here')
@section('meta_tags')
    {!! SEO::generate() !!}
@endsection
@section('content')
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Contact
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->
        <div class="mb-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2772.1577206131606!2d106.94189630696705!3d10.701816844906618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317519302ff89c2f%3A0x75e0371d4b81086b!2sDae%20Young%20Textile%20Viet%20Nam%20Co%20.%2C%20LTD!5e0!3m2!1sen!2s!4v1761205635577!5m2!1sen!2s"
                width="100%" height="514" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container">
            <div class="row mb-10">
                <div class="col-md-8 col-xl-9">
                    <div class="mr-xl-6">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title mb-0 pb-2 font-size-25">Leave us a Message</h3>
                        </div>
                        <p class="max-width-830-xl text-gray-90">Maecenas dolor elit, semper a sem sed, pulvinar molestie
                            lacus. Aliquam dignissim, elit non mattis ultrices, neque odio ultricies tellus, eu porttitor
                            nisl ipsum eu massa.</p>
                        <form method="POST" action="{{ route('send_email') }}" class="js-validate" novalidate="novalidate">
                            @csrf
                            <x-form-alerts></x-form-alerts>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-4">
                                        <label class="form-label">
                                            First name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="" aria-label="" data-msg="Please enter your frist name."
                                            data-error-class="u-has-error" data-success-class="u-has-success"
                                            autocomplete="off" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger ml-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-4">
                                        <label class="form-label">
                                            Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="" aria-label="" data-msg="Please enter your last name."
                                            data-error-class="u-has-error" data-success-class="u-has-success"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger ml-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="col-md-12">
                                    <!-- Input -->
                                    <div class="js-form-message mb-4">
                                        <label class="form-label">
                                            Subject
                                        </label>
                                        <input type="text" name="subject" id="subject" class="form-control"
                                            placeholder="" aria-label="" data-msg="Please enter subject."
                                            data-error-class="u-has-error" data-success-class="u-has-success"
                                            value="{{ old('subject') }}">
                                        @error('subject')
                                            <span class="text-danger ml-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- End Input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="js-form-message mb-4">
                                        <label class="form-label">Your Message</label>
                                        <div class="input-group">
                                            <textarea name="message" id="message" value="{{ old('message') }}" class="form-control p-5" rows="4"
                                                placeholder=""></textarea>
                                        </div>
                                        @error('message')
                                            <span class="text-danger ml-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary-dark-w px-5">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-xl-3">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title mb-0 pb-2 font-size-25">Our Company</h3>
                    </div>
                    <div class="mr-xl-6">
                        <address class="mb-6">
                            Long Thọ, Nhơn Trạch, Đồng Nai<br>
                        </address>
                        <h5 class="font-size-14 font-weight-bold mb-3">Hours of Operation</h5>
                        <ul class="list-unstyled mb-6">
                            <li class="flex-center-between mb-1"><span class="">Monday:</span><span
                                    class="">7:30 AM - 16:30 PM</span></li>
                            <li class="flex-center-between mb-1"><span class="">Tuesday:</span><span
                                    class="">7:30 AM - 16:30 PM</span></li>
                            <li class="flex-center-between mb-1"><span class="">Wednesday:</span><span
                                    class="">7:30 AM - 16:30 PM</span></li>
                            <li class="flex-center-between mb-1"><span class="">Thursday:</span><span
                                    class="">7:30 AM - 16:30 PM</span></li>
                            <li class="flex-center-between mb-1"><span class="">Friday:</span><span
                                    class="">7:30 AM - 16:30 PM</span></li>
                            <li class="flex-center-between mb-1"><span class="">Saturday:</span><span
                                    class="">7:30 AM - 16:30 PM</span></li>
                            <li class="flex-center-between"><span class="">Sunday</span><span
                                    class="">Closed</span></li>
                        </ul>
                        <h5 class="font-size-14 font-weight-bold mb-3">Careers</h5>
                        <p class="text-gray-90">If you’re interested in employment opportunities at Our company, please
                            email
                            us: <a class="text-blue text-decoration-on"
                                href="mailto:{{ isset(settings()->site_email) ? settings()->site_email : '' }}">{{ isset(settings()->site_email) ? settings()->site_email : '' }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
