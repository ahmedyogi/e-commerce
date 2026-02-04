<x-layout>
    <x-slot:title>about us</x-slot:title>

    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
        <div class="order-2 lg:order-1 text-right">
            <h2 class="text-primary font-bold text-lg mb-2">قصة النجاح</h2>
            <h1 class="text-4xl font-bold text-white mb-6">مصنع النخبة لإكسسوارات الأبواب</h1>
            <p class="text-gray-400 leading-relaxed mb-6">
                منذ تأسيسنا في عام 1992، وضعنا نصب أعيننا هدفاً واحداً وهو الجمع بين المتانة الفائقة والتصاميم العصرية. نحن لا نصنع مجرد مقابض، بل نصنع التفاصيل التي تمنح منزلك طابعاً خاصاً.
            </p>
            <div class="flex gap-4">
                <div class="flex flex-col border-r-4 border-primary pr-4">
                    <span class="text-2xl font-bold text-white">+30</span>
                    <span class="text-gray-500 text-sm">عام من الخبرة</span>
                </div>
                <div class="flex flex-col border-r-4 border-secondary pr-4">
                    <span class="text-2xl font-bold text-white">+500</span>
                    <span class="text-gray-500 text-sm">منتج متميز</span>
                </div>
            </div>
        </div>
        <div class="order-1 lg:order-2">
            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1000" alt="المصنع من الداخل" class="rounded-3xl shadow-2xl border border-gray-700 object-cover h-80 w-full" />
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
        <div class="bg-gray-700/30 p-8 rounded-2xl border border-gray-600 text-center hover:bg-gray-700/50 transition-all">
            <div class="bg-primary/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor font-bold">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">جودة لا تضاهى</h3>
            <p class="text-gray-400 text-sm">نستخدم أجود خامات النحاس والستانلس ستيل لضمان مقاومة الصدأ لسنوات طويلة.</p>
        </div>

        <div class="bg-gray-700/30 p-8 rounded-2xl border border-gray-600 text-center hover:bg-gray-700/50 transition-all">
            <div class="bg-secondary/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">سرعة التوريد</h3>
            <p class="text-gray-400 text-sm">نلتزم بمواعيد التسليم الدقيقة للمشاريع الكبرى والمحلات التجارية في جميع أنحاء الجمهورية.</p>
        </div>

        <div class="bg-gray-700/30 p-8 rounded-2xl border border-gray-600 text-center hover:bg-gray-700/50 transition-all">
            <div class="bg-accent/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">ابتكار دائم</h3>
            <p class="text-gray-400 text-sm">نواكب أحدث صيحات الديكور العالمية لنقدم لك تصاميم فريدة تعكس ذوقك الرفيع.</p>
        </div>
    </div>

    <div class="bg-primary rounded-3xl p-10 text-center shadow-xl">
        <h2 class="text-3xl font-bold text-white mb-4">هل لديك مشروع وتحتاج لتوريد كميات؟</h2>
        <p class="text-primary-content/90 mb-8 max-w-2xl mx-auto">يوفر المصنع أسعاراً تنافسية خاصة للمقاولين وشركات الديكور والطلبات بالجملة.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/contact" class="btn btn-neutral px-8">تواصل مع قسم المبيعات</a>
            <a href="https://wa.me/201234567890" class="btn btn-outline border-white text-white hover:bg-white hover:text-primary px-8">طلب عرض سعر عبر واتساب</a>
        </div>
    </div>
</div>
</x-layout>