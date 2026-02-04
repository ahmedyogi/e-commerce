<x-layout>
    <x-slot:title>products</x-slot:title>

    <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

        <div class="text-right mb-10 border-r-4 border-primary pr-4">
            <h1 class="text-3xl font-bold text-white mb-2">كتالوج المنتجات</h1>
            <p class="text-gray-400">اكتشف تشكيلة واسعة من إكسسوارات الأبواب عالية الجودة</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">


            <div class="flex-1">
                {{-- <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6"> --}}

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-10">
                        @foreach ($products as $product)
                            <x-productcard>
                                <x-slot:name>{{ $product->name }}</x-slot:name>
                                <x-slot:price>{{ $product->price }}</x-slot:price>
                                <x-slot:description>{{ $product->description }}</x-slot:description>
                            </x-productcard>
                        @endforeach
                    </div>

                </div>

            </div>

            <div class="flex justify-center mt-12">
                <div class="join border border-gray-600">
                    <button class="join-item btn btn-md bg-gray-700 text-white">«</button>
                    <button class="join-item btn btn-md btn-primary">صفحة 1</button>
                    <button class="join-item btn btn-md bg-gray-700 text-white">»</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
