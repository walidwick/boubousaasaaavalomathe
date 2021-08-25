<?php
include('./utils/functions.php');
header('Content-type: text/plain');

$request = strtolower($_GET['command']);
if (!$request)
{
    echo '\'&command=\' parameter not defined! (Options: \'rank\', \'stats\')';
    return;
};
// test hh


$riotid = $player . '%23' . $tag;

switch ($request)
{
    // tal gheda
    case "rank":
        //        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/Mathematicien/1687');
        $base2 = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        //$top = $base['data']['segments'][0]['stats']['rank']['rank']
        //$RR = $base['data']['segments'][0]['stats']['rank']['value'];
        $RR = $base['data']['segments'][0]['stats']['rank']['value'];
        $elo = $base['data']['elo'];
        $tier = $base['data']['ranking_in_tier'];
        //$rank = $base['data']['segments'][0]['stats']['rank']['metadata']['tierName'];
        //$rank = $base['data']['currenttierpatched'];
        $rank = $base['data']['currenttierpatched'];
        $top = $base2['data']['segments'][0]['stats']['rank']['rank'];
        //echo "Rank Dial Mathe Daba : " . $rank . " #" . $top . " - " . $RR ."RR" ;
        //echo "Rank Dial Mathe Daba : " . $rank . "." ;
        //echo "" . $rank . " | " . $tier . "/100 (Elo : " . $elo .")" ;
        //echo "" . $rank . " " . $tier . "RR | #" . $top ." EU" ;
        echo "" . $rank . " " . $tier . "RR | #" . $top ." EU" ;
    break;
    case "minirank":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/Mathematicien/1687');

        $rank = $base['data']['currenttierpatched'];
    echo "" . $rank . ". Subscribe for details ;)";
    break;
    case "bazouya":
        $challenge = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/ABRAMI%20SAL3OS/BAZ');
        $main = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/bouazaoui/EUW');
        
        $challengerank = $challenge['data']['currenttierpatched'];
        $challengetier = $challenge['data']['ranking_in_tier'];
        
        $mainrank = $main['data']['currenttierpatched'];
        $maintier = $main['data']['ranking_in_tier'];
        
    echo "Main :  " . $mainrank . ", " . $maintier . "/100 | Challenge : " . $challengerank . ", " . $challengetier . "/100";
    break;
    case "timeplayed":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');
        
        $timep = $base['data']['segments'][0]['stats']['timePlayed']['displayValue'];

    echo "Valorant total time played : " . $timep . "";
    break;
    case "rankrizkou":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/rizk/god');
        
        $tier = $base['data']['ranking_in_tier'];
        $rank = $base['data']['currenttierpatched'];
        
    echo "Main account Rank : " . $rank . " / Tier : " . $tier . "";
    break;
    case "ranksmurf":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/Ninja1di1Milano/euw');
        
        $tier = $base['data']['ranking_in_tier'];
        $rank = $base['data']['currenttierpatched'];
        
    echo "" . $rank . " [Tier : " . $tier . "]";
    break;
    case "lastgame":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/mathematicien/1687');

        $lg = $base['data']['mmr_change_to_last_game'];
        
        //echo "Ha ch7al zadoh ola ne9soh f lastgame : " . $lg . "" ;
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
// AGENTS STATS
    default:
        echo "fin ghadi a dak rass l 9alwa xDD";
}
