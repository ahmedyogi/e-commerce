<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <title>{{ $title ?? '' }}</title>
</head>

<body class="bg-gray-800 text-white mt-2">
    <div class="navbar bg-base-100 shadow-md sticky top-0 z-50 px-4 md:px-12">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>home</a></li>
                    <li><a>our products</a></li>
                    <li><a>about us</a></li>
                    <li><a> contact us </a></li>
                </ul>
            </div>
            <a class="btn btn-ghost flex items-center gap-2 text-xl font-bold text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-primary">
                    <rect x="3" y="3" width="18" height="18" rx="2" />
                    <path d="M9 3v18" />
                    <circle cx="15" cy="12" r="1.5" fill="currentColor" />
                </svg>
                <a href="/">
                    <span class="tracking-tighter">النخبة<span class="text-white">METAL</span></span>
                </a>
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 gap-4 font-semibold">
                <li><a href="/">home</a></li>
                <li><a href="/products">our products </a></li>
                <li><a href="/about">about us</a></li>
                <li><a href="/contact"> contact us </a></li>
            </ul>
        </div>
        <div class="navbar-end gap-2">
            @guest
                <a href="/login" class="btn btn-primary text-white">login</a>
                <a href="/signup" class="btn btn-ghost text-white">sign up</a>
            @endguest

            @auth
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar border-2 border-primary">
                        <div class="w-10 rounded-full">
                            <img alt="User"
                                src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=641ae6&color=fff" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="mt-3 p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52 text-white border border-gray-700">
                        <li class="px-4 py-2 font-bold text-primary">{{ auth()->user()->name }}</li>
                        <li><a href="/users/{{ auth()->user()->id }}">My Profile</a></li>
                        <li><a href="/orders">My Orders</a></li>
                        <li>
                            <button type="submit" form="logout-form" class="text-error">Logout</button>
                        </li>
                    </ul>
                </div>

                <form id="logout-form" action="/logout" method="POST" class="hidden">
                    @csrf
                    @method('DELETE')
                </form>
            @endauth
        </div>
    </div>

    </div>
    <main>
        {{ $slot }}

    </main>
</body>

</html>
