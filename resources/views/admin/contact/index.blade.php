@extends('admin.layout.app')


@push('main')
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $contact)
              <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->mobile }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->message }}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#replyModal">Reply</button>
                    @include('admin.contact.reply')
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endpush