@extends('layouts.frontend.app')

@section('content')
    <div class="elementor-widget-container">
        <div class="elemntor-text-editor elementor-clerfix">
            <div class="row text-center">
                @foreach ($categories as $category)
                    <a href="{{ route('frontend.gallery', [ 'id'=> $category->id ]) }}">{{ $category->name }}</a>
                @endforeach
            </div>
            @forelse ($photos as $photo)
                <a href="{{ $photo->path }}" class="example-image-link">
                    <img src="{{ $photo->path }}" alt="">
                </a>
                <img src="{{ $photo->path }}" alt="">
            @empty
                <div class="alert alert-danger">Нет фотографии</div>
            @endforelse
        </div>
    </div>
    <script>
        lightbox.option({
            resizeDuration: 200,
            wrapAround: true,
            fadeDuration: 250,
            imageFadeDuration: 250
        });
    </script>
@endsection
