<?php

// app/Http/Controllers/VoteController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VoteController extends Controller
{
    public function show()
    {
        $filename = storage_path('app/poll_result.txt');
        $content = File::get($filename);
        $votes = explode("||", $content);

        $totalVotes = $votes[0] + $votes[1];
        $yesPercentage = $totalVotes > 0 ? round(($votes[0] / $totalVotes) * 100, 2) : 0;
        $noPercentage = $totalVotes > 0 ? round(($votes[1] / $totalVotes) * 100, 2) : 0;

        return view('vote.show', compact('yesPercentage', 'noPercentage'));
    }

    public function vote(Request $request)
    {
        $vote = $request->input('vote', -1);

        if ($vote == 0 || $vote == 1) {
            $filename = storage_path('app/poll_result.txt');
            $content = File::get($filename);
            $votes = explode("||", $content);

            $votes[$vote]++;
            $newContent = implode("||", $votes);
            File::put($filename, $newContent);
        }

        return redirect()->route('vote.show');
    }
}
