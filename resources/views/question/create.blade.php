@extends('Admin.board')
@section('title','Create questions')
@section('style')
    <style>
        .form-control{
            width: 50%;
        }
        .card{
            padding: 30px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            questions
        </h2>
    </div>
        <form class="card" method="post" action="{{route('questions.store')}}">
            @csrf
            <div class="form-group">
                <label for="question">Question</label>
                <input name="question" value="{{old('question')}}" type="text" class="form-control" id="question" placeholder="{{__('lang.Name')}}">
            </div>

            <div class="form-group">
                <label for="question">Answer</label>
                <input name="answer" value="{{old('answer')}}" type="text" class="form-control" id="question" placeholder="{{__('lang.Name')}}">
            </div>

            <button type="submit" class="btn btn-primary col-md-2">{{__('lang.submit')}}</button>
          </form>

@endsection

@section('script')

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
            focus: true,
        });

    });

</script>
@endsection
