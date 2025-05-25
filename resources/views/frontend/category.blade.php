<x-frontend-layout :title="$category->title" :description="$category->meta_description" :keywords="$category->meta_keywords">
    <section class="py-10">
        <div class="container flex mx-auto">

           <div class="py-10 space-y-10 pr-24">
                @foreach ($articles as $article)
                    <x-article-card :article="$article" />
                @endforeach
                {{ $articles->links('pagination::simple-tailwind') }}
            </div>

            <div class="w-1/2 pl-24">

                <div class="p-6 rounded-md">
                    @foreach ($advertises as $ad)
                        <div class="flex items-center mb-4 bg-white rounded shadow overflow-hidden"
                            style="height: 200px; width: 400px">
                            <a href="{{ $ad->link }}" target="_blank" class="h-full">
                                <img class="object-cover h-full w-64" src="{{ asset($ad->image) }}"
                                    alt="{{ $ad->company_name }}">
                            </a>
                            <div class="flex-1 p-4 h-full flex flex-col justify-center bg-gray-100">
                                <h3 class="text-sm font-semibold line-clamp-1">
                                    {{ $ad->company_name }}
                                </h3>
                                <div>
                                    {{ $ad->contact }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
