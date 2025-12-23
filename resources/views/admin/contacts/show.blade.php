@extends('layouts.main')

@section('title', 'Contact Detail')

@section('content')
    <div class="container py-5">
        <a href="{{ route('admin.contacts.index') }}" class="mb-3 btn btn-secondary">
            ← Back to Inbox
        </a>

        <div class="card">
            <div class="card-header">
                <strong>{{ $contact->subject }}</strong>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $contact->name }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Message:</strong></p>
                <div class="p-3 border rounded bg-light">
                    {{ $contact->message }}
                </div>
            </div>
            <div class="card-footer text-muted">
                Received at {{ $contact->created_at->format('d M Y H:i') }}
            </div>
        </div>
    </div>
@endsection
