@extends('layouts.main')

@section('title', 'Admin Inbox')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">📥 Contact Inbox</h2>

        <div class="card">
            <div class="card-body">
                <table class="table align-middle table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    No messages yet
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection
