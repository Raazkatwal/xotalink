@extends('layout')
@section('main')
<div class="my-6">
    <h1 class="text-5xl font-bold text-custom-gray">
        Your Shortened URL
    </h1>
    <div class="flex items-center justify-center my-5">
        <input type="url" id="url-input" class="outline-none h-12 py-5 px-3 text-xl w-full border-gray-600 border-2"
            value="{{ $short_url }}" readonly autocomplete="off" />

        <button class="bg-accent py-3 text-custom-gray px-10 w-1/3 text-xl font-bold" onclick="copyToClipboard()">
            Copy URL
        </button>
    </div>
    <p class="text-lg">
        Copy the short link and share it in messages, texts, posts, websites and other locations.
    </p>
</div>
@endsection

@push('scripts')
<script>
    function copyToClipboard() {
        var copyText = document.getElementById("url-input");
        navigator.clipboard.writeText(copyText.value);
    }
</script>
@endpush