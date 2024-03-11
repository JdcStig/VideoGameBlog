@extends('layouts.app')

@section('content')

<div id="poll">
    <h3>Do you like PHP and AJAX so far?</h3>
    <form id="voteForm">
        @csrf
        <label>
            Yes: <input type="radio" name="vote" value="0">
        </label>
        <label>
            No: <input type="radio" name="vote" value="1">
        </label>
        <button type="button" onclick="getVote()">Submit Vote</button>
    </form>
</div>

<!-- Second form -->
<form action="{{ route('vote.vote') }}" method="post">
    @csrf
    <!-- your form fields go here -->
    <label for="comment">Enter your comment:</label>
    <input type="text" id="comment" name="comment">

    <button type="submit">Submit</button>
</form>

<script>
    function getVote() {
        var formData = new FormData(document.getElementById('voteForm'));

        fetch('/vote', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
        })
        .then(response => response.json())
        .then(data => {
            // Update your UI with the new voting results if needed
            console.log(data);
        })
        .catch(error => console.error('Error:', error));
    }
</script>

@endsection
