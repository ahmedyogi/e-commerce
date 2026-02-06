<x-adminLayout>
    <x-slot:title>Home Dashboard</x-slot:title>

    <div class="p-6 space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div
                class="card bg-white shadow-sm border border-gray-100 transition-all duration-300 hover:scale-105 hover:shadow-md cursor-pointer">
                <div class="card-body flex-row items-center gap-4">
                    <div class="w-12 h-12 flex items-center justify-center bg-slate-100 text-slate-800 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Products</p>
                        <div class="flex items-center gap-2">
                            <h2 class="text-2xl font-bold text-slate-800">{{ $productsCount }}</h2>
                            <span
                                class="flex items-center text-xs font-bold text-emerald-500 bg-emerald-50 px-1.5 py-0.5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-0.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 15l7-7 7 7" />
                                </svg>
                                +2.5%
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="card bg-white shadow-sm border border-gray-100 transition-all duration-300 hover:scale-105 hover:shadow-md cursor-pointer">
                <div class="card-body flex-row items-center gap-4">
                    <div class="w-12 h-12 flex items-center justify-center bg-blue-50 text-blue-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Users</p>
                        <div class="flex items-center gap-2">
                            <h2 class="text-2xl font-bold text-slate-800">{{ $usersCount }}</h2>
                            <span
                                class="flex items-center text-xs font-bold text-emerald-500 bg-emerald-50 px-1.5 py-0.5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-0.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 15l7-7 7 7" />
                                </svg>
                                +2.5%
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="p-6 bg-white rounded-3xl shadow-sm border border-gray-100">
            <div class="flex flex-col md:flex-row justify-between items-start mb-8 gap-4">
                <div>
                    <h3 class="text-lg font-bold text-slate-800">Your sales report</h3>
                    <p class="text-sm text-gray-400">Look at your sales performance</p>
                    <div class="mt-4">
                        <h1 class="text-5xl font-bold text-slate-900">$4,435.70</h1>
                        <p class="text-emerald-500 text-sm font-semibold mt-1 flex items-center">
                            <span class="bg-emerald-100 rounded-full p-0.5 mr-1 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 15l7-7 7 7" />
                                </svg>
                            </span>
                            $2,330.00 (+2.5%)
                        </p>
                    </div>
                </div>

                <div class="flex gap-1 bg-gray-50 p-1 rounded-xl">
                    <button class="px-3 py-1 text-sm font-medium text-gray-400 hover:text-slate-900">1d</button>
                    <button
                        class="px-3 py-1 text-sm font-medium bg-slate-900 text-white rounded-lg shadow-md">7d</button>
                    <button class="px-3 py-1 text-sm font-medium text-gray-400 hover:text-slate-900">30d</button>
                    <button class="px-3 py-1 text-sm font-medium text-gray-400 hover:text-slate-900">1m</button>
                    <button class="px-3 py-1 text-sm font-medium text-gray-400 hover:text-slate-900">Max</button>
                </div>
            </div>

            <div class="relative h-64 w-full border-b border-gray-100 mt-10">
                <div class="absolute inset-0 flex justify-between px-2">
                    @foreach (['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'] as $month)
                        <div class="flex flex-col justify-between h-full group">
                            <div
                                class="border-l border-dashed border-gray-200 h-full mx-auto group-hover:border-gray-400 transition-colors">
                            </div>
                            <span class="text-xs text-gray-400 mt-2">{{ $month }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="absolute right-[15%] top-10 z-10">
                    <div class="bg-slate-900 text-white p-3 rounded-2xl shadow-2xl relative">
                        <p class="text-[10px] font-bold mb-1 opacity-70">14 Aug 2026</p>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="w-1 h-3 bg-blue-400 rounded-full"></span>
                                <span class="text-xs">222 Trans.</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-1 h-3 bg-orange-400 rounded-full"></span>
                                <span class="text-xs">44 Product</span>
                            </div>
                        </div>
                        <div
                            class="absolute top-1/2 -right-1 transform -translate-y-1/2 w-3 h-3 bg-slate-900 rotate-45">
                        </div>
                    </div>
                </div>

                <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="none">
                    <path d="M0 160 Q 100 120, 200 180 T 400 140 T 600 170 T 800 80" fill="none" stroke="#60a5fa"
                        stroke-width="3" />
                    <path d="M0 190 Q 100 170, 200 210 T 400 200 T 600 220 T 800 160" fill="none" stroke="#fb923c"
                        stroke-width="3" />
                </svg>
            </div>
        </div>
    </div>
</x-adminLayout>
