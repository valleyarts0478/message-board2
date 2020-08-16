@extends('layouts.app')

@section('content')

<h1>メッセージ一覧</h1>

@if (count($messages) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>メッセージ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
                <td>{!! route('messages.show', $message->id, ['id' => $message->id]) !!}</td>
                <td>{{ $message->content }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

{!! route('messages.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection