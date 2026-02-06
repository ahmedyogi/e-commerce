<x-adminLayout>
        <div class="min-h-[calc(100vh-80px)] flex items-center justify-center p-4">
        <div class="card w-full max-w-md bg-base-100 shadow-2xl border border-gray-700">
            <div class="card-body">
                <h2 class="card-title text-2xl font-bold text-primary mb-6">تحديث البيانات</h2>

                <form action="/admin/edit_products/{{ $product->id }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PATCH') 

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold"> product name</span>
                        </label>
                        <input 
                        type="text" 
                            name="name"
                            placeholder=" enter your product name" 
                            value="{{ old('name',$product->name) }}"
                            class="input input-bordered w-full focus:input-primary bg-gray-900 text-white" />
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold"> product price</span>
                        </label>
                        <input 
                        type="text" 
                            name="price"
                            placeholder=" enter your product price" 
                            value="{{ old('name',$product->price) }}"
                            class="input input-bordered w-full focus:input-primary bg-gray-900 text-white" />
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold"> product id</span>
                        </label>
                        <input 
                        type="text" 
                            name="id"
                            placeholder=" enter your product id" 
                            value="{{ old('name',$product->id) }}"
                            class="input input-bordered w-full focus:input-primary bg-gray-900 text-white" />
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold"> product description</span>
                        </label>
                        <input 
                        type="text" 
                            name="description"
                            placeholder=" enter your product description" 
                            value="{{ old('name',$product->description) }}"
                            class="input input-bordered w-full focus:input-primary bg-gray-900 text-white" />
                    </div>


                    <div class="card-actions justify-end mt-6">
                        <a href="/admin/products" type="button" class="btn btn-ghost text-white">cancel</a>
                        <button type="submit" class="btn btn-primary px-8 text-white"> save changes </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-adminLayout>