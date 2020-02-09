@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about.jpeg"
        alt="About image"
        class="flex square-full h-70 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">
    <p class="mb-6">&nbsp;</p>
    <p class="mb-6">
        I live in London, England and am passionate about Modern PHP. I'm a Laravel enthusiast and have used the framework for many projects.  
    </p>
    <p class="mb-6">
        Follow me on <a href="https://twitter.com/rajkumarsakthi">Twitter</a> to know what keeps me busy. Want to know which IDE, apps and hardware I use? <a href="/uses">Here you go!</a>
    </p>

@endsection
