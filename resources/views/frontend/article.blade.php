 <!-- This is for single article page -->
<x-frontend-layout :title="$article->title" :description="$article->meta_description" :keywords="$article->meta_keywords">

    <section class="py-10">
        <div class="container flex mx-auto">

           <div class="py-10 space-y-10 pr-24">
            {{ $article->views }}
              {!! $article->content !!}
            </div>

            <div class="w-1/2 pl-24">

                <div class="p-6 rounded-md">

                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
