<div class="banner-area banner-relative">
    <div class="overlay banner-overlay">
        <div class="banner-container">
            <div class="row height align-items-center justify-content-center">
                <div class="banner-content text-center">
                    @foreach ($about as $indexAbout)
                    <img src="/images/abouts/{{ $indexAbout->banner }}">
                    <h1 class="text-upperclass">
                        <span>{{ $title }}</span>
                        <br>
                        {{ $indexAbout->banner_text }}
                    </h1>
                    <p class="text-white">"{{ $indexAbout->banner_span }}"</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>