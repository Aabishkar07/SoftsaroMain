@extends('admin/layouts/app')
@section('page_title', 'FAQs')
@section('faq_select', 'bg-black text-white')
@section('body')
    <div class="w-full">
        @include('admin.include.toastmessage')

        <div class="px-4 flex justify-between w-full">
            <div class="text-xl font-bold">Frequently Asked Questions</div>
            <div class="flex">
                <a href="{{ route('admin.faqs.create') }}"
                    class="bg-[#04033b] rounded-lg text-white px-3 py-1 text-sm flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z" />
                    </svg>
                    <span>Add FAQ</span>
                </a>
            </div>
        </div>

        <div class="py-1">
            @if($faqs->count() > 0)
                <div class="product-table bg-[#e5e3e8] mt-3 shadow">
                    <div class="relative overflow-x-auto">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="">
                                <tr class="text-xs text-center text-gray-600 uppercase">
                                    <th class="p-2 font-semibold">Order</th>
                                    <th class="p-2 font-semibold">Question</th>
                                    <th class="p-2 font-semibold">Answer Preview</th>
                                    <th class="p-2 font-semibold">Status</th>
                                    <th class="p-2 font-semibold">Created</th>
                                    <th class="p-2 font-semibold text-left">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200" id="faq-tbody">
                                @foreach($faqs as $faq)
                                    <tr data-id="{{ $faq->id }}" class="faq-row hover:bg-[#eeeef7] text-center cursor-pointer">
                                        <td class="px-5 py-3">
                                            <input type="number" class="order-input w-16 px-2 py-1 border border-gray-300 rounded text-center text-sm"
                                                   value="{{ $faq->order }}" min="0">
                                        </td>

                                        <td class="px-5 py-3">
                                            <div class="text-left">
                                                <p class="text-black font-medium text-sm">{{ Str::limit($faq->question, 60) }}</p>
                                            </div>
                                        </td>

                                        <td class="px-5 py-3">
                                            <div class="text-left">
                                                <p class="text-gray-600 text-sm">{{ Str::limit(strip_tags($faq->answer), 80) }}</p>
                                            </div>
                                        </td>

                                        <td class="px-5 py-3">
                                            <div class="flex items-center justify-center">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="status-toggle sr-only peer"
                                                           data-id="{{ $faq->id }}"
                                                           {{ $faq->is_active ? 'checked' : '' }}>
                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                                    <span class="ml-3 text-sm font-medium text-gray-900">
                                                        {{ $faq->is_active ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </label>
                                            </div>
                                        </td>

                                        <td class="px-5 py-3 text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $faq->created_at->format('jS M Y') }}
                                            </p>
                                        </td>

                                        <td>
                                            <div class="flex justify-center">
                                                <a href="{{ route('admin.faqs.edit', $faq) }}" class="mr-2">
                                                    <div class="bg-blue-500 py-1 px-2 text-white flex rounded-md hover:bg-blue-600 transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                    </div>
                                                </a>

                                                <a href="{{ route('admin.faqs.show', $faq) }}" class="mr-2">
                                                    <div class="bg-green-500 py-1 px-2 text-white flex rounded-md hover:bg-green-600 transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                                        </svg>
                                                    </div>
                                                </a>

                                                <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" class="d-inline"
                                                      onsubmit="return confirm('Are you sure you want to delete this FAQ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 py-1 px-2 text-white flex rounded-md hover:bg-red-600 transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-4 flex justify-end">
                    <button type="button" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors" id="save-order">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                            <polyline points="17,21 17,13 7,13 7,21"></polyline>
                            <polyline points="7,3 7,8 15,8"></polyline>
                        </svg>
                        Save Order
                    </button>
                </div>
            @else
                <div class="text-center py-12">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="mx-auto text-gray-400">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <path d="M12 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No FAQs found</h3>
                    <p class="text-gray-500 mb-6">Start by adding your first frequently asked question.</p>
                    <a href="{{ route('admin.faqs.create') }}" class="bg-[#04033b] text-white px-4 py-2 rounded-lg hover:bg-[#020123] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline mr-2">
                            <path d="M12 5v14"></path>
                            <path d="M5 12h14"></path>
                        </svg>
                        Add First FAQ
                    </a>
                </div>
            @endif
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Save order functionality
    const saveOrderBtn = document.getElementById('save-order');
    if (saveOrderBtn) {
        saveOrderBtn.addEventListener('click', function() {
            const rows = document.querySelectorAll('.faq-row');
            const faqs = [];

            rows.forEach((row, index) => {
                const id = row.dataset.id;
                const order = row.querySelector('.order-input').value;
                faqs.push({ id: id, order: order });
            });

            fetch('{{ route("admin.faqs.updateOrder") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ faqs: faqs })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    const toast = document.createElement('div');
                    toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
                    toast.innerHTML = 'Order saved successfully!';
                    document.body.appendChild(toast);

                    // Auto-hide after 3 seconds
                    setTimeout(() => {
                        toast.remove();
                    }, 3000);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error saving order. Please try again.');
            });
        });
    }

    // Status toggle functionality
    document.querySelectorAll('.status-toggle').forEach(toggle => {
        toggle.addEventListener('change', function() {
            const id = this.dataset.id;
            const isActive = this.checked;
            const label = this.parentNode.querySelector('span');

            fetch(`/admin/faqs/${id}/toggle-status`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    label.textContent = data.is_active ? 'Active' : 'Inactive';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                this.checked = !isActive; // Revert the toggle
                alert('Error updating status. Please try again.');
            });
        });
    });
});
</script>
@endsection
