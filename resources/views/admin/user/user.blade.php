@extends('admin.layouts.admin')

@section('title', 'User Management')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">User Management</h5>
    </div>
    <div class="card-body">

        {{-- Success & Error Messages --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if ($users->isEmpty())
            <p>No user found.</p>
        @else
            <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item d-flex justify-content-between align-items-start flex-column flex-md-row">
                        <div>
                            <p><strong>Name:</strong> {{ $user->name }}</p>
                            <p><strong>Email:</strong> {{ $user->email }}</p>
                            <p><strong>Phone:</strong> {{ $user->phone ?? 'No Phone Number' }}</p>
                            <p><strong>Address:</strong> {{ $user->address ?? 'No Address' }}</p>
                        </div>

                        <div>
                            <form class="delete-user-form" action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mt-2 mt-md-0">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

<!-- Dynamic Confirmation Box -->
<div id="confirm-box" style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
">
    <div style="
        background: #fff;
        padding: 20px 30px;
        border-radius: 8px;
        text-align: center;
        max-width: 400px;
        width: 90%;
    ">
        <p id="confirm-message" style="margin-bottom: 20px; font-size: 16px;">Are you sure?</p>
        <button id="confirm-yes" class="btn btn-danger me-2">Yes</button>
        <button id="confirm-no" class="btn btn-secondary">No</button>
    </div>
</div>

<script>
window.addEventListener('load', function () {
    const confirmBox = document.getElementById('confirm-box');
    const confirmMessage = document.getElementById('confirm-message');
    const confirmYes = document.getElementById('confirm-yes');
    const confirmNo = document.getElementById('confirm-no');

    let formToSubmit = null;

    // Attach event to all delete forms
    document.querySelectorAll('.delete-user-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Stop default submit
            formToSubmit = this;

            // Show dynamic confirmation
            confirmMessage.innerText = 'Are you sure you want to delete this user?';
            confirmBox.style.display = 'flex';
        });
    });

    // Cancel delete
    confirmNo.addEventListener('click', function() {
        formToSubmit = null;
        confirmBox.style.display = 'none';
    });

    // Confirm delete
    confirmYes.addEventListener('click', function() {
        if(formToSubmit) {
            formToSubmit.submit(); // Original form submit
        }
        confirmBox.style.display = 'none';
    });
});
</script>
@endsection
