<section class="py-8 px-4 bg-gray-900 min-h-screen text-white ">
  <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    {{-- Dummy Card --}}
    @for ($i = 0; $i < 6; $i++)
    <article class="rounded overflow-hidden shadow-lg bg-gray-700 dark:bg-white transition hover:scale-105 duration-200">
      <img src="{{ asset('169.jpg') }}"
           alt="Sunset in the mountains"
           class="w-full aspect-video object-cover rounded-t">

      <div class="px-6 py-4">
        <div class="font-bold text-xl text-white dark:text-black mb-2">The Coldest Sunset</div>
        <p class="text-gray-300 dark:text-gray-700 text-sm">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
        </p>
      </div>
    </article>
    @endfor

  </div>
</section>
