@extends('admin.layouts.admin')

@section('title', 'User Messages')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">User Messages</h5>
        </div>
        <div class="card-body">
            @if($messages->isEmpty())
                <p>No messages found.</p>
            @else
                <ul class="list-group">
                    @foreach($messages as $message)
                        <li class="list-group-item">
                            <p>Name {{ $message->name }}</p>
                            <p>Email: {{ $message->email }}</p>
                            <p>Subject: <strong>{{ $message->subject }}</strong></p>
                            <p>Message: {{ $message->message }}</p>
                            <p>Sent at: {{ $message->created_at->format('d M Y H:i') }}</p>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
