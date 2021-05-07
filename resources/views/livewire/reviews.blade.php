<div >
    
    @if ($reviews->count() > 0)
    <div class="container max-auto px-14">
        <h1 class="text-xl mb-3">Reviews</h1>
        @foreach ($reviews as $review)
            <div class="relative px-5 mt-3 shadow-lg rounded-lg">
                <h1>{{ $review->name }}</h1>
                <p>{{ $review->review }}</p>
            </div>
        @endforeach
    </div>
    @endif
</div>
