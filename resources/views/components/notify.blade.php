@if (session('message'))
    <div class="alert {{ session('class') }}" role="alert">
        {{ session('message') }}
    </div>
@endif
