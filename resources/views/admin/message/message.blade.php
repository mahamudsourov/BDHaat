@extends('admin.layouts.admin')

@section('title', 'Messages')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <!-- Bootstrap CSS (if not already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">User Messages</h5>
        </div>
        <div class="card-body">
            @if ($messages->isEmpty())
                <p>No messages found.</p>
            @else
                <ul class="list-group">
                    @foreach ($messages as $message)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>
                                <p><strong>Name:</strong> {{ $message->name }}</p>
                                <p><strong>Email:</strong> {{ $message->email }}</p>
                                <p><strong>Subject:</strong> {{ $message->subject }}</p>
                                <p><strong>Message:</strong> {{ $message->message }}</p>
                                <p><small>Sent at: {{ $message->created_at->format('d M Y H:i') }}</small></p>
                            </div>
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $message->id }}">
                                Delete
                            </button>
                        </li>

                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{ $message->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel{{ $message->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $message->id }}">Confirm Delete</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this message from
                                        <strong>{{ $message->name }}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Bootstrap JS (if not already included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush
