    <x-layout>
        <x-slot:title>login</x-slot:title>

    <div class="min-h-screen bg-slate-900 flex items-center justify-center p-6">
        <div class="card bg-slate-800 w-full max-w-sm shadow-xl p-8 rounded-2xl">
            <h2 class="text-white text-xl font-bold mb-6">Login</h2>
            
            <form method="POST" action="/login">
                @csrf
                <div class="form-control w-full mb-4">
                    <label class="label"><span class="label-text text-gray-400">Email</span></label>
                    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                        class="input input-bordered bg-slate-700 text-white w-full focus:border-blue-500" />
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <div class="form-control w-full mb-6">
                    <label class="label"><span class="label-text text-gray-400">Password</span></label>
                    <input name="password" type="password" placeholder="Password"
                        class="input input-bordered bg-slate-700 text-white w-full focus:border-blue-500" />
                </div>

                <button class="btn btn-block bg-black text-white hover:bg-gray-900 border-none">Login</button>
            </form>
            <p>don't have an account? <a href="/signup">sign up</a></p>
        </div>
    </div>
    </x-layout>
