<x-adminLayout>
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-300">Users Management</h2>
            <a href="/admin/create" class="btn btn-primary">create a new user </a>
        </div>

        <div class="overflow-x-auto bg-white rounded-2xl shadow-sm border border-gray-100">
            <table class="table table-lg w-full">
                <thead class="bg-slate-50">
                    <tr class="text-slate-600 border-b border-gray-100">
                        <th class="font-bold">Name</th>
                        <th class="font-bold">Email</th>
                        <th class="font-bold">Role</th>
                        <th class="font-bold text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="hover:bg-slate-50 transition-colors duration-200 border-b border-gray-50 group">
                            <td>
                                <div class="flex items-center space-x-3">
                                </div>
                                <div>
                                    <div class="font-bold text-slate-700">{{ $user->name }}</div>
                                    <div class="text-xs text-gray-400">ID: {{ $user->id }} </div>
                                </div>
        </div>
        </td>
        <td class="text-slate-600 font-medium">
            {{ $user->email }}
        </td>
        <td>
            <span class="badge badge-ghost font-semibold"> {{ $user->role }} </span>
        </td>
        <td class="text-center">
            <div class="flex justify-center gap-2">
                <a href="/admin/edit_user/{{ $user->id }}"
                    class="btn btn-ghost btn-xs text-blue-600 hover:bg-blue-50">Edit</a>

                <button form="delete-form-{{ $user->id }}"
                    class="btn btn-ghost btn-xs text-rose-600 hover:bg-rose-50">Delete</button>

                <form action="/admin/delete/{{ $user->id }}" method="POST" hidden
                    id="delete-form-{{ $user->id }}">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>

    <div class="mt-4">
    </div>
    </div>
</x-adminLayout>
