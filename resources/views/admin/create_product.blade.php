<x-adminLayout>
    <div class="p-6 bg-dark min-h-screen">
        <div class="text-sm breadcrumbs mb-4">
            <ul>
                <li><a>لوحة التحكم</a></li>
                <li><a>المنتجات</a></li>
                <li>إضافة منتج جديد</li>
            </ul>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="card bg-base-100 shadow-xl border border-gray-100">
                <div class="card-body">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="p-2 bg-primary/10 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <h2 class="card-title text-2xl font-bold text-gray-800">إضافة منتج جديد</h2>
                    </div>

                    <form action="create_product" method="POST" >
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text font-semibold">معرف المنتج (ID / SKU)</span>
                                </label>
                                <input type="text" name="id" placeholder="مثال: 100"
                                    class="input input-bordered w-full focus:border-primary" required />
                                <label class="label">
                                    <span class="label-text-alt text-gray-400">كود فريد للمنتج في المخزن</span>
                                </label>
                            </div>

                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text font-semibold">اسم المنتج</span>
                                </label>
                                <input type="text" name="name" placeholder="أدخل اسم المنتج"
                                    class="input input-bordered w-full focus:border-primary" required />
                            </div>

                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text font-semibold">السعر (ج.م)</span>
                                </label>
                                <div class="relative">
                                    <span
                                        class="absolute inset-y-0 left-3 flex items-center text-gray-500 font-bold">£</span>
                                    <input type="number" name="price" step="0.01" placeholder="0.00"
                                        class="input input-bordered w-full pl-8 focus:border-primary" required />
                                </div>
                            </div>


                            <div class="form-control w-full md:col-span-2">
                                <label class="label">
                                    <span class="label-text font-semibold">وصف المنتج</span>
                                </label>
                                <textarea name="description" class="textarea textarea-bordered h-32 focus:border-primary"
                                    placeholder="اكتب تفاصيل المنتج هنا..."></textarea>
                            </div>

                        </div>

                        <div class="card-actions justify-end mt-10 gap-2 border-t pt-6">
                            <a href="/admin/products" type="button" class="btn btn-ghost px-8">إلغاء</a>
                            <button type="submit" class="btn btn-primary text-white px-10">
                                حفظ المنتج
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-adminLayout>
