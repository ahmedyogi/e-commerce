<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? '' }} </title>
</head>

<body>
    <nav>
        <div class="drawer lg:drawer-open">
            <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Navbar -->
                <nav class="navbar w-full bg-base-300">
                    <label for="my-drawer-4" aria-label="open sidebar" class="btn btn-square btn-ghost">
                        <!-- Sidebar toggle icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                            stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                            class="my-1.5 inline-block size-4">
                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                            </path>
                            <path d="M9 4v16"></path>
                            <path d="M14 10l2 2l-2 2"></path>
                        </svg>
                    </label>
                    <div class="px-4">Admin Dashboard</div>
                </nav>
                <!-- Page content here -->
                <div class="p-4">{{ $slot }}</div>
            </div>

            <div class="drawer-side is-drawer-close:overflow-visible">
                <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
                <div class="flex min-h-full flex-col items-start bg-base-200 is-drawer-close:w-14 is-drawer-open:w-64">
                    <!-- Sidebar content here -->
                    <ul class="menu w-full grow">
                        <!-- List item -->
                        <li>
                            <a href="/admin/home" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Homepage">
                                <!-- Home icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                                    stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                                    class="my-1.5 inline-block size-4">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg>
                                <span class="is-drawer-close:hidden">Homepage</span>
                            </a>
                        </li>
                        </li>
                        <!-- List item -->
                        <li>
                            <a href =" /admin/products " class="is-drawer-close:tooltip is-drawer-close:tooltip-right"
                                data-tip="Products">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                                    stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                                    class="my-1.5 inline-block size-4">
                                    <path d="m7.5 4.27 9 5.15"></path>
                                    <path
                                        d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z">
                                    </path>
                                    <path d="m3.3 7 8.7 5 8.7-5"></path>
                                    <path d="M12 22V12"></path>
                                </svg>
                                <span class="is-drawer-close:hidden">Products</span>
                            </a>
                        </li>
                        {{-- list item  --}}
                        <li>
                            <a href="/admin/users" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="users">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                                    stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                                    class="my-1.5 inline-block size-4">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg> <span class="is-drawer-close:hidden">users</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </nav>
</body>

</html>
