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
    // tal gheda
    case "rank":
        //        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/mathematicien/1687');
        $base2 = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        //$top = $base['data']['segments'][0]['stats']['rank']['rank']
        //$RR = $base['data']['segments'][0]['stats']['rank']['value'];
        $elo = $base['data']['elo'];
        $tier = $base['data']['ranking_in_tier'];
        //$rank = $base['data']['segments'][0]['stats']['rank']['metadata']['tierName'];
        $rank = $base['data']['currenttierpatched'];
        $top = $base2['data']['segments'][0]['stats']['rank']['rank'];
        //echo "Rank Dial Mathe Daba : " . $rank . " #" . $top . " - " . $RR ."RR" ;
        //echo "Rank Dial Mathe Daba : " . $rank . "." ;
        echo "Rank Dial Mathe Daba : " . $rank . " / Tier : " . $tier . " / Elo : " . $elo ."";
    break;
    case "rankbouazaoui":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/bouazaoui/euw');
        
        $elo = $base['data']['elo'];
        $tier = $base['data']['ranking_in_tier'];

        $rank = $base['data']['currenttierpatched'];
    echo "Rank : " . $rank . " | Tier : " . $tier . " | Elo : " . $elo ."";
    break;
    case "rankbazouya":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/bazouya/baz');
        
        $elo = $base['data']['elo'];
        $tier = $base['data']['ranking_in_tier'];

        $rank = $base['data']['currenttierpatched'];
    echo "Rank : " . $rank . " | Tier : " . $tier . " | Elo : " . $elo ."";
    break;
    case "rankbazouzou":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/bazouzou/baz');
        
        $elo = $base['data']['elo'];
        $tier = $base['data']['ranking_in_tier'];

        $rank = $base['data']['currenttierpatched'];
    echo "Rank : " . $rank . " | Tier : " . $tier . " | Elo : " . $elo ."";
    break;
    case "lastgame":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/mathematicien/1687');

        $lg = $base['data']['mmr_change_to_last_game'];
        
        
        echo "Ha ch7al zadoh ola ne9soh f lastgame : " . $lg . "" ;
    break;
        case "mostkills":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        //$top = $base['data']['segments'][0]['stats']

        $aw3arkills = $base['data']['segments'][0]['stats']['mostKillsInMatch']['value'];
        
        
        echo "Aktar kills jab mathe f chi game : " . $aw3arkills . " (competitive data)" ;
    break;
    case "wins":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $winers2005 = $base['data']['segments'][0]['stats']['matchesWon']['value'];
        
        
        //echo "Rank Dial Mathe Daba : " . $rank . " #" . $top . " - " . $RR ."RR" ;
        echo "Ha mathe ch7al jayb mn win f comptetive : " . $winers2005 . " ." ;
    break;
    case "aces":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $aces = $base['data']['segments'][0]['stats']['aces']['value'];
        
        
        echo "Mathe jab f comptetive : " . $aces . " aces" ;
    break;
    case "clutches":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $clutches = $base['data']['segments'][0]['stats']['clutches']['value'];
        
        
        echo "Mathe jab f comptetive : " . $clutches . " clutches" ;
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
        echo "ask walid mnach l mochkil";
}
