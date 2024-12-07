@extends('layout')
@section('main')
<form action="/shorten" class="my-6" method="POST">
    @csrf
    <h1 class="text-5xl font-bold text-custom-gray">
        Paste the URL to be shortened
    </h1>
    <div class="flex items-center justify-center my-5">
        <input type="url" class="outline-none h-12 py-5 px-3 text-xl w-full border-gray-600 border-2 @error('original_url')
            {{'border-red-600'}}
        @enderror" placeholder="Paste Your Link here" name="original_url" value="{{ old('original_url') }}"
            required autocomplete="off" />

        <button type="submit" class="bg-accent py-3 text-custom-gray px-10 w-1/3 text-xl font-bold">
            Shorten URL
        </button>
    </div>
    @error('original_url')
    <div class="text-red-600 text-left text-lg">
        {{ $message }}
    </div>
    @enderror
    <p class="text-lg">
        XotaLink is a free tool to shorten URLs and generate short
        links URL shortener allows to create a shortened link making
        it easy to share
    </p>
</form>
@endsection