<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function vote(Request $request)
    {
        $vote = $request->input('vote');


        $filename = storage_path('app/public/poll_result.txt');
        $content = file($filename);


        $array = explode("||", $content[0]);
        $yes = $array[0];
        $no = $array[1];

        if ($vote == 0) {
            $yes = $yes + 1;
        }
        if ($vote == 1) {
            $no = $no + 1;
        }

        // Insert votes into txt file
        $insertVote = $yes . "||" . $no;
        file_put_contents($filename, $insertVote);

        // Return the updated result
        return response()->json([
            'yes_percentage' => round(100 * $yes / ($no + $yes), 2),
            'no_percentage' => round(100 * $no / ($no + $yes), 2),
        ]);
    }
}
