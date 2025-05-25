@props(['article'])

<a href="{{ route('article',$article->id)}}" class="flex text-xs gap-2 items-center shadow hover:shadow-lg w-full">

    <img class="w-1/3 h-20 object-cover" src="{{ asset($article->image) }}" alt="{{ $article->title }}">
    <div class="w-2/3">
        <h3 class="text-sm font-semibold line-clamp-1">
            {{ $article->title }}
        </h3>
        <div class="line-clamp-2">
            {!! $article->content !!}
        </div>
        <small>
            {{ nepalidate($article->created_at) }}
        </small>
    </div>
</a>
