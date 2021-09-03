@extends('Admin.board')
@section('title', 'questions')

@section('content')
    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            Questions
        </h2>
    </div>
    <div class="col-md-3">
        <a style="background:rgb(108, 192, 115);color:white;float: right; width:188px;" class="btn btn-success"
            href="{{ asset('questions/create') }}"> {{__('lang.Add')}}</a>
    </div>

    <div class="card" style="margin-top:60px">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" width="5%">#</th>
                    <th scope="col">Question</th>
                    <th scope="col">Answer</th>
                    <th scope="col" width="22%">{{__('lang.Action')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->question }}</td>
                        <td>{{ strip_tags($item->answer) }}</td>
                        <td>
                            <form method='post' action="{{ route('questions.destroy', $item->id) }}">
                                @csrf
                                @method("delete")
                                <a href='{{ route('questions.edit', $item->id) }}' class=' btn-sm btn-primary'>{{__('lang.Edit')}}</a>
                                <button onclick='return confirm("Are you sure?")' type="submit"
                                    class="btn btn-sm btn-danger">{{__('lang.Delete')}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
