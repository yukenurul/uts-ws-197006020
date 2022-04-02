<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function browse ()
    {
        $json = Http::withToken('BQCXJU1FrelCLrskiBfQHdJw5EZepb5dZ3b94x6dk720URv6xy8TMLiicJ8qpiaHS4f8c-3F3mIloBGGlIuZ43HBLnHv3QpJ8lBx2OlnT38F3fpUNjJC6f7PPUrLrlkPnF1EDfVJoQdI9l90lA9wOU5K4DEQMSCsS-cyDcFE1TOSaOD-n6A7w3rOu8-2utrlUml1n3m7Qna9gu1UNOsj4AGgse1y9qrzrDNgzeGpGdg')
        ->get('https://api.spotify.com/v1/browse/new-releases')->json();
        return response()->json($json);
    }
    public function user ($user_id)
    {
        $json = Http::withToken('BQCXJU1FrelCLrskiBfQHdJw5EZepb5dZ3b94x6dk720URv6xy8TMLiicJ8qpiaHS4f8c-3F3mIloBGGlIuZ43HBLnHv3QpJ8lBx2OlnT38F3fpUNjJC6f7PPUrLrlkPnF1EDfVJoQdI9l90lA9wOU5K4DEQMSCsS-cyDcFE1TOSaOD-n6A7w3rOu8-2utrlUml1n3m7Qna9gu1UNOsj4AGgse1y9qrzrDNgzeGpGdg')
        ->get('https://api.spotify.com/v1/users/'.$user_id)->json();
        return response()->json($json);
    }
    public function playlist ($user_id)
    {
        $json = Http::withToken('BQCXJU1FrelCLrskiBfQHdJw5EZepb5dZ3b94x6dk720URv6xy8TMLiicJ8qpiaHS4f8c-3F3mIloBGGlIuZ43HBLnHv3QpJ8lBx2OlnT38F3fpUNjJC6f7PPUrLrlkPnF1EDfVJoQdI9l90lA9wOU5K4DEQMSCsS-cyDcFE1TOSaOD-n6A7w3rOu8-2utrlUml1n3m7Qna9gu1UNOsj4AGgse1y9qrzrDNgzeGpGdg')
        ->post('https://api.spotify.com/v1/users/'.$user_id.'/playlists')->json();
        return response()->json($json);
    }
    public function add_playlist ()
    {
        $json = Http::withToken('BQCXJU1FrelCLrskiBfQHdJw5EZepb5dZ3b94x6dk720URv6xy8TMLiicJ8qpiaHS4f8c-3F3mIloBGGlIuZ43HBLnHv3QpJ8lBx2OlnT38F3fpUNjJC6f7PPUrLrlkPnF1EDfVJoQdI9l90lA9wOU5K4DEQMSCsS-cyDcFE1TOSaOD-n6A7w3rOu8-2utrlUml1n3m7Qna9gu1UNOsj4AGgse1y9qrzrDNgzeGpGdg')
        ->post('https://api.spotify.com/v1/playlists/:playlistid/tracks?uris=spotify:track:4JozU4Ud30FGyDYzoUKasI')->json();
        return response()->json($json);
    }
    public function artist ($id)
    {
        $json = Http::withToken('BQCXJU1FrelCLrskiBfQHdJw5EZepb5dZ3b94x6dk720URv6xy8TMLiicJ8qpiaHS4f8c-3F3mIloBGGlIuZ43HBLnHv3QpJ8lBx2OlnT38F3fpUNjJC6f7PPUrLrlkPnF1EDfVJoQdI9l90lA9wOU5K4DEQMSCsS-cyDcFE1TOSaOD-n6A7w3rOu8-2utrlUml1n3m7Qna9gu1UNOsj4AGgse1y9qrzrDNgzeGpGdg')
        ->get('https://api.spotify.com/v1/artists/{id}/albums'.$id)->json();
        return response()->json($json);
    }
}
