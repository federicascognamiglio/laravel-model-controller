<div class="card h-100">
    <div class="card-body">
        <h5 class="card-title">{{ $movie['title'] }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}</h6>
        <p class="card-text text-body-secondary">{{ $movie['nationality'] }}</p>
        <p class="card-text text-body-secondary">{{ $movie['date'] }}</p>
    </div>
    <div class="card-footer text-bg-primary">
        <small>
            @for ($i = 0; $i < 10; $i ++)
                @if ($i < floor($movie['vote']))
                    <i class="bi bi-star-fill"></i>
                @elseif ($i < ceil($movie['vote']))
                    <i class="bi bi-star-half"></i>
                @else
                    <i class="bi bi-star"></i>
                @endif
            @endfor
            {{ $movie['vote'] }}
        </small>
    </div>
</div>