@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Result Page</h2>

        <div class="card shadow mb-3">
            <div class="card-body">
                @if(count($getData) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Question Number</th>
                            <th>Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getData as $data)
                            <tr>
                                <td>{{ $data->question_no }}</td>
                                <td>{{ $data->answer }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <p>No data found.</p>
                @endif
            </div>
        </div>

    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card shadow">
            <div class="card-body">
                @if(count($answerCounts) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Answer</th>
                            <th>Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($answerCounts as $data)
                            <tr>
                                <td>{{ $data->answer }}</td>
                                <td>{{ $data->count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <p>No data found.</p>
                @endif
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card shadow">
            <div class="card-body">
                <h4>Result</h4>
                <div>
                    @if($isAGreater)
                        <p>
                            Empathy You are emphatic. You see yourself in someone else’s situation before doing decisions. You tend to listen to other’s voices.
                        </p>
                    @elseif($isBGreater)
                        <p>
                            Self-Awareness You are conscious of your own character, feelings, motives, and desires. The process can be painful but it leads to greater self-awareness
                        </p>
                    @elseif($isCGreater)
                        <p>
                            Self-Management You manage yourself well; You take responsibility for your own behavior and well-being.
                        </p>
                    @elseif($isEqual)
                        <p>
                            Self-Awareness You are conscious of your own character, feelings, motives, and desires. The process can be painful but it leads to greater self-awareness.
                        </p>
                    @endif
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection