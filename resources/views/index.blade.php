<x-layouts.main>
    {{-- 1. Spalte ----------------------------------------------------------------------------------}}
    <div class="flex-1 space-y-5">

        @for ($i = 0; $i < 6; $i++)
            <div class="bg-white shadow rounded">
                <img src="https://picsum.photos/800/350?random={{rand(0,100)}}" alt="Random image" class="rounded-t">
                <div class="p-5">
                    <div class="font-bold text-xs text-blue-700">Datum</div>
                    <div class="text-3xl text-blue-900">Header</div>
                    <div class="text-lg text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad adipisci aliquid distinctio dolores,
                        doloribus, esse ex laudantium maiores modi molestiae natus necessitatibus officiis praesentium quos repellat repellendus saepe vitae.
                    </div>
                </div>
                <div class="footer rounded-b border-t border-gray-300 p-5 text-gray-700 font-bold text-xs bg-indigo-100">
                    Autor
                </div>
            </div>
        @endfor
    </div>
</x-layouts.main>
