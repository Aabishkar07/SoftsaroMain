@extends('admin.layouts.app')
@section('body')
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>


    @include('admin.include.toastmessage')

    <div class="flex items-center">
        <div class="flex-1">
            <h2 class="w-full text-2xl font-bold text-secondary ">Contacts</h2>
        </div>
        <a href="{{ route('admin.contacts.export') }}"
            class="inline-block px-4 py-2 mb-4 text-white hover:text-[#6a68AF] border-[#6a68AF] border bg-[#6a68AF] rounded hover:bg-white">
            Download CSV
        </a>
    </div>


    <div class="py-3 ">
        <div class="mt-1">
            {{-- -mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto z-[0] max-h-screen overflow-y-auto --}}
            <div class="relative mt-10 text-white bg-[#6a68AF] shadow product-tablerounded-lg ">
                <div class="overflow-x-auto ">
                    {{-- max-h-screen min-w-full shadow rounded-lg z-[0] overflow-y-hidden --}}
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="">
                            <tr>
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Name</th>
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Email</th>
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Phone Number</th>
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Subject</th>


                                <th class="px-5 py-3 font-semibold text-left ">
                                    Conatct Date</th>

                                <th class="px-5 py-3 font-semibold text-left ">
                                    Actions</th>
                            </tr>
                        </thead>



                        @foreach ($contacts as $key => $contact)
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                <tr>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $contact->name }}</p>
                                    </td>

                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $contact->email }}</p>
                                    </td>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $contact->phone }}</p>
                                    </td>
                                    </td>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $contact->subject }}</p>
                                    </td>
                                    </td>





                                    <td class="w-48 px-5 py-3 text-sm">
                                        <p class="text-gray-900 ">
                                            {{ $contact->created_at->format('jS M Y') }}
                                        </p>
                                    </td>


                                    <td>
                                        <div class="flex items-center p-2">
                                            <!-- View Button -->
                                            <button type="button" onclick="viewItem({{ $contact->id }})"
                                                class="flex px-2 py-1 mx-2 text-white bg-blue-500 hover:bg-blue-600 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-eye" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 4c-5 0 -9 4 -9 8s4 8 9 8s9 -4 9 -8s-4 -8 -9 -8z"></path>
                                                    <path d="M15 12c0 1.5 -1.5 3 -3 3s-3 -1.5 -3 -3s1.5 -3 3 -3s3 1.5 3 3z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <!-- Delete Button -->
                                            <form method="POST" action="{{ route('admin.contactdelete', $contact->id) }}"
                                                id="delete-form-{{ $contact->id }}">
                                                @csrf
                                                @method('delete')
                                                <button type="button" onclick="deleteItem({{ $contact->id }})"
                                                    class="flex px-2 py-1 mx-2 text-white bg-red-500 hover:bg-red-600 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
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

                                    <!-- Modal for Viewing Contact Details -->
                                    <div id="view-modal-{{ $contact->id }}"
                                        class=" max-sm:p-4 fixed z-[999] inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 hidden"
                                        onclick="closeViewModalIfClickedOutside(event, {{ $contact->id }})">
                                        <div class="bg-white max-h-[60vh] overflow-auto text-gray-600 p-6 rounded-lg w-96 shadow-lg"
                                            onclick="event.stopPropagation()">
                                            <h3 class="text-2xl font-semibold text-center mb-4">Contact Details</h3>
                                            <div class="space-y-2">
                                                <p><strong>Name:</strong> {{ $contact->name }}</p>
                                                <p><strong>Email:</strong> {{ $contact->email }}</p>
                                                <p><strong>Phone:</strong> {{ $contact->phone }}</p>
                                                <p><strong>Subject:</strong> {{ $contact->subject }}</p>
                                                <p><strong>Message:</strong> {{ $contact->message }}</p>
                                            </div>
                                            <div class="mt-4 ">
                                                <button onclick="closeViewModal({{ $contact->id }})"
                                                    class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        // Show View Modal
                                        function viewItem(contactId) {
                                            const modal = document.getElementById(`view-modal-${contactId}`);
                                            modal.classList.remove('hidden');
                                        }

                                        // Close View Modal
                                        function closeViewModal(contactId) {
                                            const modal = document.getElementById(`view-modal-${contactId}`);
                                            modal.classList.add('hidden');
                                        }

                                        // Close View Modal when clicking outside the modal content
                                        function closeViewModalIfClickedOutside(event, contactId) {
                                            // Close modal if the click is outside the modal content (on the background overlay)
                                            if (event.target === event.currentTarget) {
                                                closeViewModal(contactId);
                                            }
                                        }
                                    </script>




                                </tr>
                            </tbody>
                        @endforeach

                    </table>

                </div>
            </div>
            <div class="z-0 mt-3">
                {{ $contacts->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </div>
@endsection
