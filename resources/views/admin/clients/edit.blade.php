@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Client</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $client->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $client->email) }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $client->phone) }}">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="deal_done" name="deal_done" value="1" {{ old('deal_done', $client->deal_done) ? 'checked' : '' }}>
            <label class="form-check-label" for="deal_done">Deal Done</label>
        </div>
        <div class="mb-3">
            <label for="percentage" class="form-label">Percentage</label>
            <input type="number" class="form-control" id="percentage" name="percentage" min="0" max="100" step="0.01" value="{{ old('percentage', $client->percentage) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Client</button>
    </form>
</div>
@endsection 