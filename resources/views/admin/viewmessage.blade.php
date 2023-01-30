<!-- messages.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-white bg-primary">Messages</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($messages) > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-secondary text-white">
                                    <th>ID</th>
                                    <th>Recipient</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                <tr>
                                    <td>{{ $message->id }}</td>
                                    <td>{{ $message->recipient }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>{{ $message->created_at ? $message->created_at->format('Y-m-d H:i:s') : '' }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-center">No messages found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
