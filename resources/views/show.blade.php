@extends('layouts.app')

@section('content')

<div id="poll">
    <h3>Brotherhood of steal or The Railroad </h3>
    <form id="voteForm">
        @csrf
        <label>
            The Railroad: <input type="radio" name="vote" value="0">
        </label>
        <label>
            Brotherhood of steal: <input type="radio" name="vote" value="1">
        </label>
        <button type="button" onclick="getVote()">Submit Vote</button>
    </form>
</div>


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
