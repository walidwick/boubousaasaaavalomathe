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
    case "bigboi":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/bigboiii404/big');
        
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
        
        
        
    case "cypher":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][7]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][7]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][7]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][7]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][7]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][7]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][7]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][7]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][7]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][7]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][7]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "killjoy":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][8]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][8]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][8]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][8]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][8]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][8]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][8]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][8]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][8]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][8]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][8]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "sova":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][9]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][9]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][9]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][9]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][9]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][9]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][9]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][9]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][9]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][9]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][9]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "astra":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][10]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][10]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][10]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][10]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][10]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][10]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][10]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][10]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][10]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][10]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][10]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "sage":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][11]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][11]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][11]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][11]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][11]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][11]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][11]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][11]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][11]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][11]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][11]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "breach":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][12]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][12]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][12]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][12]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][12]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][12]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][12]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][12]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][12]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][12]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][12]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "kayo":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][13]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][13]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][13]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][13]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][13]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][13]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][13]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][13]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][13]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][13]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][13]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "skye":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][14]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][14]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][14]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][14]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][14]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][14]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][14]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][14]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][14]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][14]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][14]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "viper":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][15]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][15]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][15]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][15]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][15]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][15]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][15]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][15]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][15]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][15]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][15]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "yoru":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][16]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][16]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][16]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][16]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][16]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][16]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][16]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][16]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][16]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][16]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][16]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "omen":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][17]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][17]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][17]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][17]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][17]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][17]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][17]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][17]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][17]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][17]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][17]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "reyna":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][18]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][18]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][18]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][18]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][18]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][18]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][18]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][18]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][18]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][18]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][18]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "jett":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][19]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][19]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][19]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][19]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][19]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][19]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][19]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][19]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][19]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][19]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][19]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "phoenix":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][20]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][20]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][20]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][20]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][20]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][20]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][20]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][20]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][20]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][20]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][20]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    case "raze":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][21]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][21]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][21]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][21]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][21]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][21]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][21]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][21]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][21]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][21]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][21]['stats']['timePlayed']['displayValue'];

        echo "Time Played : ". $timeplayed . " | Matches Played : " . $matchesplayed . " [(". $matcheswon ."W-". $matcheslose ."L), Win% : ". $win . "] | Total Kills : ". $kills . " (" . $HS . " HS) | First Bloods : ". $firstBloods ." (". $firstBloodspermatch . " per match) | Clutches : " . $clutches . " |  Aces : " . $aces . " ";
    break;
    default:
        echo "fin ghadi a dak rass l 9alwa xDD";
}
