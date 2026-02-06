<x-adminLayout>
        <div class="min-h-screen bg-slate-900 flex items-center justify-center p-6">
        <div class="card bg-slate-800 w-full max-w-sm shadow-xl p-8 rounded-2xl">
            <h2 class="text-white text-xl font-bold mb-6">sign-up</h2>

            <form action="/admin/create" method="POST">
                @csrf

                <div class="form-control w-full mb-4">
                    <label class="label"><span class="label-text text-gray-400">name</span></label>
                    <input name="name" type="name" placeholder="Name"
                        class="input input-bordered bg-slate-700 text-white w-full focus:border-blue-500" />
                </div>
                @error('name')
                    <p class="font-bold text-red-400">the name is requiered</p>
                @enderror
                <div class="form-control w-full mb-4">
                    <label class="label"><span class="label-text text-gray-400">Email</span></label>
                    <input name="email" type="email" placeholder="Email"
                        class="input input-bordered bg-slate-700 text-white w-full focus:border-blue-500" />
                </div>
                @error('email')
                    <p class="font-bold text-red-400">enter a validate email</p>
                @enderror

                <div class="form-control w-full mb-6">
                    <label class="label"><span class="label-text text-gray-400">Password</span></label>
                    <input name="password" type="password" placeholder="Password"
                        class="input input-bordered bg-slate-700 text-white w-full focus:border-blue-500" />
                </div>
                @error('password')
                    <p class="font-bold text-red-400">enter a validate password</p>
                @enderror
                <div class="form-control w-full mb-6">
                    <label class="label"><span class="label-text text-gray-400">confirm password</span></label>
                    <input name="password_confirmation" type="password" placeholder="confirm password"
                        class="input input-bordered bg-slate-700 text-white w-full focus:border-blue-500" />
                </div>
                @error('password_confirmation')
                    <p class="font-bold text-red-400">this field must match the password</p>
                @enderror

                <button class="btn btn-block bg-black text-white hover:bg-gray-900 border-none">sign up</button>
            </form>
        </div>
    </div>

</x-adminLayout>