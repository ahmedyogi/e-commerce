{{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"> --}}
<div class="card bg-base-100 shadow-xl hover:scale-105 transition-transform duration-300 border">
    <figure class="px-4 pt-4">
        <img src="https://picsum.photos/seed/{{ rand(0, 1000000) }}/500/400" alt="Product Image" />
    </figure>
    <div class="card-body items-center text-center">
        <h2 class="card-title text-secondary">{{ $name ?? '' }}</h2>
        <p>{{ $description ?? '' }}</p>
        <p class="text-lg text-blue-300">price: {{ $price ?? '' }}</p>
        <a href="{{ auth()->check() ? '/checkout/' : '/login' }}" class="btn btn-primary btn-sm w-full">
            buy now
        </a>
        <div class="card-actions">
        </div>
    </div>
</div>
