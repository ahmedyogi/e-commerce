<x-adminLayout>
    <div class="p-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-50">إدارة المنتجات</h1>
                <p class="text-sm text-gray-50">total products : {{ $productsCount }}</p>
            </div>
            <div class="flex gap-2">
                <a href="/admin/create_product" class="btn btn-primary text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    إضافة منتج جديد
                </a>
            </div>
        </div>



        <div class="overflow-x-auto bg-base-100 rounded-xl shadow-md border border-base-200">
            <table class="table table-zebra w-full">
                <thead class="bg-base-200 text-base-content">
                    <tr>
                        <th class="bg-base-200">
                            <label>
                                <input type="checkbox" class="checkbox checkbox-primary checkbox-sm" />
                            </label>
                        </th>
                        <th class="font-bold">ID المنتج</th>
                        <th class="font-bold">اسم المنتج</th>
                        <th class="font-bold">السعر</th>
                        <th class="font-bold">الوصف</th>
                        <th class="text-center font-bold">الإجراءات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr class="hover:bg-base-200/50 transition-colors">
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox checkbox-sm" />
                                </label>
                            </th>
                            <td class="font-mono text-xs text-gray-500">
                                #{{ $product->id }}
                            </td>
                            <td>
                                <div class="font-bold text-primary">{{ $product->name }}</div>
                            </td>
                            <td>
                                <span class="badge badge-ghost font-semibold">
                                    {{ number_format($product->price, 2) }} egp
                                </span>
                            </td>
                            <td>
                                <p class="truncate max-w-xs text-sm opacity-70" title="{{ $product->description }}">
                                    {{ $product->description }}
                                </p>
                            </td>
                            <td>
                                <div class="flex justify-center gap-2">
                                    <a href="/admin/edit_product/{{ $product->id }}"
                                        class="btn btn-square btn-sm btn-outline btn-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="/admin/products/{{ $product->id }}" method="POST"
                                        onsubmit="return confirm('are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-square btn-sm btn-outline btn-error">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($products->isEmpty())
                <div class="text-center py-10">
                    <p class="text-gray-400 italic">لا يوجد منتجات لعرضها حالياً.</p>
                </div>
            @endif
        </div>
    </div>
</x-adminLayout>
