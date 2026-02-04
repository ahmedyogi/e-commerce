<x-layout>
<x-slot:title>home</x-slot:title>


    <main>
        <div class="hero min-h-[60vh] bg-base-200"
            style="background-image: url('https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=2069&auto=format&fit=crop'); background-blend-mode: overlay; background-color: rgba(0,0,0,0.5);">
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold text-white">أناقة الباب تبدأ من تفاصيله</h1>
                    <p class="mb-5 text-gray-200">نحن متخصصون في تصنيع أجود أنواع مقابض الأبواب، المفصلات، والإكسسوارات
                        المعدنية بأحدث التقنيات العالمية.</p>
                    <a href="/products" class="btn btn-primary">تصفح الكتالوج</a>
                </div>
            </div>
        </div>

        <section class="py-16 px-4 md:px-12 bg-white">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">منتجاتنا المتميزة</h2>
                <div class="divider w-24 mx-auto divider-primary"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-10">
                @foreach ($products as $product)
                    <x-productcard>
                        <x-slot:name>{{ $product->name }}</x-slot:name>
                        <x-slot:price>{{ $product->price }}</x-slot:price>
                        <x-slot:description>{{ $product->description }}</x-slot:description>
                    </x-productcard>
                @endforeach
            </div>
        </section>
    </main>

    <footer class="footer p-10 bg-neutral text-neutral-content">
        <nav>
            <h6 class="footer-title">الخدمات</h6>
            <a class="link link-hover">تصنيع خاص</a>
            <a class="link link-hover">توريد مشاريع</a>
            <a class="link link-hover">صيانة</a>
        </nav>
        <nav>
            <h6 class="footer-title">المصنع</h6>
            <a class="link link-hover">من نحن</a>
            <a class="link link-hover">تواصل معنا</a>
            <a class="link link-hover">الشهادات</a>
        </nav>
        <nav>
            <h6 class="footer-title">القوانين</h6>
            <a class="link link-hover">شروط الاستخدام</a>
            <a class="link link-hover">سياسة الخصوصية</a>
        </nav>
    </footer>
    <footer class="footer px-10 py-4 border-t bg-neutral text-neutral-content border-base-300">
        <aside class="items-center grid-flow-col">
            <p>© 2026 مصنع النخبة لإكسسوارات الأبواب - جميع الحقوق محفوظة</p>
        </aside>
    </footer>
</x-layout>
