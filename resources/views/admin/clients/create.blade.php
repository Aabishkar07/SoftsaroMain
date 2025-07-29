@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Add Client</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="deal_done" name="deal_done" value="1">
            <label class="form-check-label" for="deal_done">Deal Done</label>
        </div>
        <div class="mb-3">
            <label for="percentage" class="form-label">Percentage</label>
            <input type="number" class="form-control" id="percentage" name="percentage" min="0" max="100" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Client</button>
    </form>
</div>
@endsection 