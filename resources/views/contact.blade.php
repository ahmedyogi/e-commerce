<x-layout>
    <x-slot:title>contact us</x-slot:title>

    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-white mb-4">يسعدنا تواصلكم معنا</h1>
            <p class="text-gray-400 max-w-2xl mx-auto">سواء كنت تستفسر عن منتج معين أو ترغب في التعاون مع المصنع لتوريد
                مشروعك، فريقنا جاهز للرد على جميع استفساراتك.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            <div class="space-y-6">
                <div class="flex items-start gap-4 bg-gray-700/30 p-6 rounded-2xl border border-gray-600">
                    <div class="bg-primary/20 p-3 rounded-lg text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg">مقر المصنع</h3>
                        <p class="text-gray-400 text-sm">المنطقة الصناعية الثالثة، القاهرة، مصر</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-gray-700/30 p-6 rounded-2xl border border-gray-600">
                    <div class="bg-secondary/20 p-3 rounded-lg text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg">اتصل بنا</h3>
                        <p class="text-gray-400 text-sm" dir="ltr">+20 151 520 8801</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-gray-700/30 p-6 rounded-2xl border border-gray-600">
                    <div class="bg-accent/20 p-3 rounded-lg text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg">البريد الإلكتروني</h3>
                        <p class="text-gray-400 text-sm">ahmedeno543@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-gray-700/30 p-8 rounded-3xl border border-gray-600 shadow-xl">
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text text-gray-300">الاسم
                                        بالكامل</span></label>
                                <input type="text" placeholder="مثال: أحمد محمد"
                                    class="input input-bordered bg-gray-800 border-gray-600 text-white focus:border-primary"
                                    required />
                            </div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text text-gray-300">البريد
                                        الإلكتروني</span></label>
                                <input type="email" placeholder="email@example.com"
                                    class="input input-bordered bg-gray-800 border-gray-600 text-white focus:border-primary"
                                    required />
                            </div>
                        </div>

                        <div class="form-control w-full">
                            <label class="label"><span class="label-text text-gray-300">موضوع الرسالة</span></label>
                            <select
                                class="select select-bordered bg-gray-800 border-gray-600 text-white focus:border-primary">
                                <option disabled selected>اختر النوع</option>
                                <option>طلب توريد مشاريع</option>
                                <option>استفسار عن سعر</option>
                                <option>طلب صيانة</option>
                                <option>أخرى</option>
                            </select>
                        </div>

                        <div class="form-control w-full">
                            <label class="label"><span class="label-text text-gray-300">تفاصيل الرسالة</span></label>
                            <textarea class="textarea textarea-bordered bg-gray-800 border-gray-600 text-white focus:border-primary h-32"
                                placeholder="اكتب استفسارك هنا..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block text-white text-lg">إرسال الرسالة
                            الآن</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-layout>
