@extends('admin.layouts.app')

@section('body')
<div class="max-w-4xl mx-auto p-6 bg-white rounded-xl shadow-md mt-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">Edit Client</h2>

    <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Client Name<span class="text-red-500">*</span></label>
            <input type="text" name="name" id="name" value="{{ old('name', $client->name) }}" required class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        </div>

        <!-- Email & Phone -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $client->email) }}" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone', $client->phone) }}" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>
        </div>

        <!-- Project Info -->
        <div>
            <label for="project_name" class="block text-sm font-medium text-gray-700">Project Name</label>
            <input type="text" name="project_name" id="project_name" value="{{ old('project_name', $client->project_name) }}" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $client->start_date) }}" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>
            <div>
                <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
                <input type="date" name="due_date" id="due_date" value="{{ old('due_date', $client->due_date) }}" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>
        </div>

        <!-- Priority & Status -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
                <select name="priority" id="priority" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    <option value="Low" {{ old('priority', $client->priority) == 'Low' ? 'selected' : '' }}>Low</option>
                    <option value="Medium" {{ old('priority', $client->priority) == 'Medium' ? 'selected' : '' }}>Medium</option>
                    <option value="High" {{ old('priority', $client->priority) == 'High' ? 'selected' : '' }}>High</option>
                </select>
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Project Status</label>
                <select name="status" id="status" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    <option value="Not Started" {{ old('status', $client->status) == 'Not Started' ? 'selected' : '' }}>Not Started</option>
                    <option value="In Progress" {{ old('status', $client->status) == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="Completed" {{ old('status', $client->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>
        </div>

        <!-- Percentage -->
        <div>
            <label for="percentage" class="block text-sm font-medium text-gray-700">Project Completion (%)<span class="text-red-500">*</span></label>
            <input type="number" name="percentage" id="percentage" value="{{ old('percentage', $client->percentage) }}" min="0" max="100" step="0.01" required class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        </div>

        <!-- Remarks -->
        <div>
            <label for="remarks" class="block text-sm font-medium text-gray-700">Remarks</label>
            <textarea name="remarks" id="remarks" rows="3" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">{{ old('remarks', $client->remarks) }}</textarea>
        </div>

        <!-- Deal Done -->
        <div class="flex items-center space-x-2">
            <input type="checkbox" name="deal_done" id="deal_done" value="1" {{ old('deal_done', $client->deal_done) ? 'checked' : '' }} class="w-5 h-5 text-blue-600 border-gray-300 rounded">
            <label for="deal_done" class="text-sm text-gray-700">Deal Done</label>
        </div>

        <!-- Submit Button -->
        <div class="text-right">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200">
                Update Client
            </button>
        </div>
    </form>
</div>
@endsection
