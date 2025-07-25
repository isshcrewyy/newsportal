<x-frontend-layout :title="'Home'" :description="'This is home page'" :keywords="'Jawaaf Home Jawaaf News'">
    <section>
        <div class="container py-10 grid md:grid-cols-3 gap-5">

            <div class="md:col-span-2">
                @foreach ($latest_articles as $index => $article)
                    @if ($index == 0)
                        <div>
                            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}">

                            <h1 class="text-xl font-semibold mt-2">
                                {{ $article->title }}
                            </h1>

                            <div>
                                {!! Str::limit(strip_tags($article->content), 100) !!}

                            </div>
                        </div>
                    @endif
                @endforeach

                {{-- Remaining articles --}}
                <div class="mt-10 md:grid grid-cols-2 gap-5">
                    @foreach ($latest_articles as $index => $article)
                        @if ($index !== 0)
                            <x-article-card :article="$article" />
                        @endif
                    @endforeach
                </div>
            </div>

            <div>
                <h2
                    class="border-l-4 border-[var(--primary)] bg-[var(--light-primary)] text-[var(--primary)] pl-4 py-2 ">
                    ट्रेन्डिङ</h2>

                <div class="space-y-5 mt-5">
                    @foreach ($trending_articles as $article)
                        <x-article-card :article="$article" />
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container py-10 space-y-10">
            @foreach ($categories as $category)
                <h2
                    class="border-l-4 border-[var(--primary)] bg-[var(--light-primary)] text-[var(--primary)] pl-4 py-2 ">
                    {{ $category->title }}
                </h2>

                <div class="md:grid grid-cols-3 gap-4">
                    @foreach ($category->articles as $article)
                        <x-article-card :article="$article" />
                    @endforeach
                </div>
            @endforeach

        </div>
    </section>
</x-frontend-layout>
