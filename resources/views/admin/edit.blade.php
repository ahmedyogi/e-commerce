<x-adminLayout>
    <div class="min-h-[calc(100vh-80px)] flex items-center justify-center p-4">
        <div class="card w-full max-w-md bg-base-100 shadow-2xl border border-gray-700">
            <div class="card-body">
                <h2 class="card-title text-2xl font-bold text-primary mb-6">تحديث البيانات</h2>

                <form action="/admin/edit_user/{{ $user->id }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PATCH') 

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold"> full name</span>
                        </label>
                        <input 
                        type="text" 
                            name="name"
                            placeholder=" enter your email" 
                            value="{{ old('name', $user->name) }}"
                            class="input input-bordered w-full focus:input-primary bg-gray-900 text-white" />
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold"> email </span>
                        </label>
                        <input 
                            type="email" 
                            name="email"
                            placeholder="example@mail.com" 
                            value="{{ old('email', $user->email) }}" 
                            class="input input-bordered w-full focus:input-primary bg-gray-900 text-white" />
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold"> enter a new password</span>
                        </label>
                        <input 
                            type="password" 
                            name="password"
                            placeholder="••••••••" 
                            class="input input-bordered w-full focus:input-primary bg-gray-900 text-white" />
                        <label class="label">
                            <span class="label-text-alt text-gray-500"></span>
                        </label>
                    </div>

                    <div class="card-actions justify-end mt-6">
                        <a href="/admin/users" type="button" class="btn btn-ghost text-white">cancel</a>
                        <button type="submit" class="btn btn-primary px-8 text-white"> save changes </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-adminLayout>