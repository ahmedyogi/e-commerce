<x-layout>

    <div class="container mx-auto py-8 px-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">طلباتي</h2>
        <a href="/" class="text-blue-600 hover:underline text-sm font-medium">العودة للرئيسية</a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
        <table class="min-w-full leading-normal">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200">
                    <th class="px-5 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        رقم الطلب
                    </th>
                    <th class="px-5 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        التاريخ
                    </th>
                    <th class="px-5 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        الإجمالي
                    </th>
                    <th class="px-5 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        الحالة
                    </th>
                    <th class="px-5 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        الإجراءات
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-5 py-5 text-sm">
                        <p class="text-gray-900 whitespace-no-wrap font-bold">#12345</p>
                    </td>
                    <td class="px-5 py-5 text-sm text-gray-600">
                        2 فبراير 2026
                    </td>
                    <td class="px-5 py-5 text-sm">
                        <p class="text-gray-900 font-medium">1,250 ج.م</p>
                    </td>
                    <td class="px-5 py-5 text-sm">
                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative text-xs">تم التوصيل</span>
                        </span>
                    </td>
                    <td class="px-5 py-5 text-sm text-center">
                        <button class="text-blue-500 hover:text-blue-700 font-semibold transition duration-200">
                            عرض التفاصيل
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-5 py-5 text-sm">
                        <p class="text-gray-900 whitespace-no-wrap font-bold">#12346</p>
                    </td>
                    <td class="px-5 py-5 text-sm text-gray-600">
                        4 فبراير 2026
                    </td>
                    <td class="px-5 py-5 text-sm">
                        <p class="text-gray-900 font-medium">850 ج.م</p>
                    </td>
                    <td class="px-5 py-5 text-sm">
                        <span class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                            <span class="relative text-xs">قيد الانتظار</span>
                        </span>
                    </td>
                    <td class="px-5 py-5 text-sm text-center">
                        <button class="text-blue-500 hover:text-blue-700 font-semibold">عرض التفاصيل</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</x-layout>