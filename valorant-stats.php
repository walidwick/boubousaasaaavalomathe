<?php
include('./utils/functions.php');
header('Content-type: text/plain');

$request = strtolower($_GET['command']);
if (!$request)
{
    echo '\'&command=\' parameter not defined! (Options: \'rank\', \'stats\')';
    return;
};

$player = $_GET['nick'];
if (!$player)
{
    echo '\'&nick=\' parameter not defined!';
    return;
};
$tag = $_GET['tag'];
if (!$tag)
{
    echo '\'&tag=\' parameter not defined!';
    return;
};

// combine the player name with tag numnber i.e: rehkloos#001
$riotid = $player . '%23' . $tag;

switch ($request)
{
    case "stats":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/' . $player . '%23' . $tag);

        // Valortant stat calls
        $kills = $base['data']['segments'][0]['stats']['kills']['value'];
        $mKills = intval($base['data']['segments'][0]['stats']['mostKillsInAGame']['value']);
        $deaths = intval($base['data']['segments'][0]['stats']['deaths']['value']);
        $kdr = intval($base['data']['segments'][0]['stats']['kDRatio']['value']);
        $wins = intval($base['data']['segments'][0]['stats']['wins']['value']);
        $winr  = intval($base['data']['segments'][0]['stats']['wlratio']['value']);
        //timePlayedTotal
        $timeplayed  = $base['data']['segments'][0]['stats']['timePlayedTotal']['value'];


        echo "Time Played: " . timeSeconds($timeplayed) . " | Wins: " . $wins . " | Win/Loss: " . $winr . "% | Kills: " . $kills . " | Most Kills in Game: " . $mKills . " | KDR: " . round($kdr) . " | Deaths: " . $deaths ." (" . urldecode($riotid) . ")";
    break;
    case "rank":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        // {"data":{"platformInfo":{"platformSlug":"riot","platformUserId":"31219320-c9a5-4c66-a777-e0907d35ae77","platformUserHandle":"Mathematicien#1687","platformUserIdentifier":"Mathematicien#1687","avatarUrl":"https://titles.trackercdn.com/valorant-api/playercards/a80d8898-464d-1b63-4b1b-149930c22b6b/displayicon.png","additionalParameters":null},"userInfo":{"userId":null,"isPremium":false,"isVerified":false,"isInfluencer":false,"isPartner":false,"countryCode":null,"customAvatarUrl":null,"customHeroUrl":null,"socialAccounts":[],"pageviews":497,"isSuspicious":null},"metadata":{"schema":"riot-api","privacy":"public","defaultPlaylist":"competitive"},"segments":[{"type":"playlist","attributes":{"key":"competitive","playlist":"competitive"},"metadata":{"name":"Competitive"},"expiryDate":"0001-01-01T00:00:00+00:00","stats":{"timePlayed":{"rank":null,"percentile":null,"displayName":"Time Played","displayCategory":"Combat","category":"combat","metadata":{},"value":1696667832,"displayValue":"19d 15h 17m","displayType":"TimeMilliseconds"}
        // new = {"rank":17283,"percentile":null,"displayName":"Rating","displayCategory":null,"category":"mmr","metadata":{"iconUrl":"https://trackercdn.com/cdn/tracker.gg/valorant/icons/tiers/19.png","tierName":"Diamond 2"}
        //$top = $base['data']['segments'][0]['rank']['rank']['value']
        $rank = $base['data']['segments'][0]['rank']['metadata']['tierName'];

        echo $rank . "." ;
    break;
    case "time":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/' . $player . '%23' . $tag);

        // Valortant stat calls
        $timeplayedCOMP  = $base['data']['segments'][0]['stats']['timePlayed']['value']; // competitive
        $timeplayedDMS   = $base['data']['segments'][1]['stats']['timePlayed']['value']; // deathmatch
        $timeplayedSPKR  = $base['data']['segments'][2]['stats']['timePlayed']['value']; // spikerush
        $timeplayedURTD  = $base['data']['segments'][3]['stats']['timePlayed']['value']; // unrated
        $TTP = $timeplayedCOMP + $timeplayedDMS + $timeplayedSPKR + $timeplayedURTD; // Total Sum of time played between all playlists

        //TimeMilliseconds to Days conversion
        $time = $TTP / 1000;
        $days = floor($time / (24*60*60));
        $hours = floor(($time - ($days*24*60*60)) / (60*60));
        $minutes = floor(($time - ($days*24*60*60)-($hours*60*60)) / 60);
        $seconds = ($time - ($days*24*60*60) - ($hours*60*60) - ($minutes*60)) % 60;

        echo "Total Time Played: " . $days.'d '.$hours.'h '.$minutes.'m ' .$seconds.'s '. " (" . urldecode($riotid) . ")";
    break;
    default:
        echo "need to add &command=stats, &command=rank, or &command=time";
}
