@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5 mb-5 shadow">
        <div class="card-header">
          <b><h3>H2 Coding Examination</h3></b>
        </div>
        <form id="submitAnswer" action="javascript:void(0)" method="POST">
            <div class="card-body">
                <div class="card-body shadow text-center" style="background-color: #fff6f6">
                    <b>Question #1</b>
                    <div>
                        You went to a party last night and when you arrived to school the next day, everybody is talking about something you didn’t do. What will you do?
                    </div>
                    <div class="mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 1" id="answer1Question1" value="A" required>
                            <label class="form-check-label" for="answer1Question1">Avoid everything and go with your friends</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 1" id="answer2Question1" value="B" required>
                            <label class="form-check-label" for="answer2Question1">Go and talk with the person that started the rumors</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 1" id="answer3Question1" value="C" required>
                            <label class="form-check-label" for="answer3Question1">Go and talk with the teacher</label>
                        </div>
                    </div>
                </div>
                <div class="card-body shadow text-center mt-2" style="background-color: #fff6f6">
                    <b>Question #2</b>
                    <div>
                        What quality do you excel the most?
                    </div>
                    <div class="mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 2" id="answer1Question2" value="A" required>
                            <label class="form-check-label" for="answer1Question2">Empathy</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 2" id="answer2Question2" value="B" required>
                            <label class="form-check-label" for="answer2Question2">Curiosity</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 2" id="answer3Question2" value="C" required> 
                            <label class="form-check-label" for="answer3Question2">Perseverance</label>
                        </div>
                    </div>
                </div>
                <div class="card-body shadow text-center mt-2" style="background-color: #fff6f6">
                    <b>Question #3</b>
                    <div>
                        You are walking down the street when you see an old lady trying to cross, what will you do?
                    </div>
                    <div class="mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 3" id="answer1Question3" value="A" required>
                            <label class="form-check-label" for="answer1Question3">Go and help her</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 3" id="answer2Question3" value="B" required>
                            <label class="form-check-label" for="answer2Question3">Go for a policeman and ask him to help</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 3" id="answer3Question3" value="C" required>
                            <label class="form-check-label" for="answer3Question3">Keep walking ahead</label>
                        </div>
                    </div>
                </div>
                <div class="card-body shadow text-center mt-2" style="background-color: #fff6f6">
                    <b>Question #4</b>
                    <div>
                        You had a very difficult day at school, you will maintain a ____ attitude
                    </div>
                    <div class="mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 4" id="answer1Question4" value="A" required>
                            <label class="form-check-label" for="answer1Question4">Depends on the situation</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 4" id="answer2Question4" value="B" required>
                            <label class="form-check-label" for="answer2Question4">Positive</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 4" id="answer3Question4" value="C" required>
                            <label class="form-check-label" for="answer3Question4">Negative</label>
                        </div>
                    </div>
                </div>
                <div class="card-body shadow text-center mt-2" style="background-color: #fff6f6">
                    <b>Question #5</b>
                    <div>
                        You are at a party and a friend of yours comes over and offers you a drink, what do you do?
                    </div>
                    <div class="mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 5" id="answer1Question5" value="A" required>
                            <label class="form-check-label" for="answer1Question5">Say no thanks</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 5" id="answer2Question5" value="B" required>
                            <label class="form-check-label" for="answer2Question5">Drink it until it is finished</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 5" id="answer3Question5" value="C" required>
                            <label class="form-check-label" for="answer3Question5">Ignore him and get angry at him</label>
                        </div>
                    </div>
                </div>
                <div class="card-body shadow text-center mt-2" style="background-color: #fff6f6">
                    <b>Question #6</b>
                    <div>
                        You just started in a new school, you will...
                    </div>
                    <div class="mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 6" id="answer1Question6" value="A" required>
                            <label class="form-check-label" for="answer1Question6">Go and talk with the person next to you</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 6" id="answer2Question6" value="B" required>
                            <label class="form-check-label" for="answer2Question6">Wait until someone comes over you</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 6" id="answer3Question6" value="C" required>
                            <label class="form-check-label" for="answer3Question6">Not talk to anyone</label>
                        </div>
                    </div>
                </div>
                <div class="card-body shadow text-center mt-2" style="background-color: #fff6f6">
                    <b>Question #7</b>
                    <div>
                        In a typical Friday, you would like to..
                    </div>
                    <div class="mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 7" id="answer1Question7" value="A" required>
                            <label class="form-check-label" for="answer1Question7">Go out with your close friends to eat</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 7" id="answer2Question7" value="B" required>
                            <label class="form-check-label" for="answer2Question7">Go to a social club and meet more people</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 7" id="answer3Question7" value="C" required>
                            <label class="form-check-label" for="answer3Question7">Invite one of your friends to your house</label>
                        </div>
                    </div>
                </div>
                <div class="card-body shadow text-center mt-2" style="background-color: #fff6f6">
                    <b>Question #8</b>
                    <div>
                        Your relationship with your parents is..
                    </div>
                    <div class="mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 8" id="answer1Question8" value="A" required>
                            <label class="form-check-label" for="answer1Question8">I like both equally</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 8" id="answer2Question8" value="B" required>
                            <label class="form-check-label" for="answer2Question8">I like my Dad the most</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Question 8" id="answer3Question8" value="C" required>
                            <label class="form-check-label" for="answer3Question8">I like my Mom the most</label>
                        </div>
                    </div>
                </div>
                <div class="footer text-end">
                    <button type="submit" class="btn btn-secondary btn-sm mt-3">Clear</button>
                    <button type="submit" id="saveData" class="btn btn-primary btn-sm mt-3">Submit Answer</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#submitAnswer').submit(function(e) {
            e.preventDefault();

            if (!validateForm()) {
                return;
            }

            var formData = $('#submitAnswer').serialize();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            })

            $.ajax({
                type: 'POST',
                url: '{{ url('save-data') }}',
                data: formData,
                success: function(response){
                    console.log(response)
                    alert('Form submitted successfully!');
                    $('#submitAnswer')[0].reset();
                    window.location.href = '{{ url('/result') }}';
                },
                error: function(response){
                    alert('Something went wrong!');
                    console.log(response)
                }
            })
        })

        function validateForm() {
            var radioButtonChecked = $('input[name^="Question 1"]:checked').length > 0 &&
                                    $('input[name^="Question 2"]:checked').length > 0 &&
                                    $('input[name^="Question 3"]:checked').length > 0 &&
                                    $('input[name^="Question 4"]:checked').length > 0 &&
                                    $('input[name^="Question 5"]:checked').length > 0 &&
                                    $('input[name^="Question 6"]:checked').length > 0 &&
                                    $('input[name^="Question 7"]:checked').length > 0 &&
                                    $('input[name^="Question 8"]:checked').length > 0;
            return radioButtonChecked;
        }
    }); 
</script>
@endsection
