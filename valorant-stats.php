<?php
include('./utils/functions.php');
header('Content-type: text/plain');

$request = strtolower($_GET['command']);
if (!$request)
{
    echo '\'&command=\' parameter not defined! (Options: \'rank\', \'stats\')';
    return;
};
// test hhddddd


$riotid = $player . '%23' . $tag;

switch ($request)
{
    // tal gheda
    case "rank":
        //        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');
        $baseeu = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/Mathematicien/frax');
        $basena = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/na/mathematicien/000');

        $tiereu = $baseeu['data']['ranking_in_tier'];
        $rankeu = $baseeu['data']['currenttierpatched'];
        
        $tierna = $basena['data']['ranking_in_tier'];
        $rankna = $basena['data']['currenttierpatched'];

        echo "Mathematicien's current rank in NA server: ". $rankna." ". $tierna."RR| EU server: ". $rankeu." ". $tiereu."RR";
    break;
    case "minirank":
        $baseeu = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/eu/Mathematicien/frax');
        $basena = _getJSON('https://api.henrikdev.xyz/valorant/v1/mmr/na/mathematicien/000');
        
        $rankeu = $baseeu['data']['currenttierpatched'];
        $rankna = $basena['data']['currenttierpatched'];
    echo "NA rank: ". $rankna. " |EU rank: ".$rankeu. ". Subscribe for details ;)";
    break;
        case "mostkills":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        //$top = $base['data']['segments'][0]['stats']

        $aw3arkills = $base['data']['segments'][0]['stats']['mostKillsInMatch']['value'];
        
        
        echo "Aktar kills jab mathe f chi game: ". $aw3arkills. " (competitive data)" ;
    break;
    case "wins":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $winers2005 = $base['data']['segments'][0]['stats']['matchesWon']['value'];
        
       
        echo "Ha mathe ch7al jayb mn win f comptetive: ". $winers2005. "." ;
    break;
    case "aces":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $aces = $base['data']['segments'][0]['stats']['aces']['value'];
        
        
        echo "Mathe jab f comptetive: ". $aces. " aces" ;
    break;
    case "clutches":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $clutches = $base['data']['segments'][0]['stats']['clutches']['value'];
        
        
        echo "Mathe jab f comptetive: ". $clutches. " clutches" ;
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "chamber":
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
    break;
    case "sova":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "astra":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "sage":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "breach":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "kayo":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "skye":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "viper":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "yoru":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "omen":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "brimstone":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "reyna":
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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "jett":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%23frax');

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

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "phoenix":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][22]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][22]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][22]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][22]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][22]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][22]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][22]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][22]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][22]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][22]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][22]['stats']['timePlayed']['displayValue'];

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
    case "raze":
        $base = _getJSON('https://api.tracker.gg/api/v2/valorant/standard/profile/riot/mathematicien%231687');

        $matchesplayed = $base['data']['segments'][23]['stats']['matchesPlayed']['displayValue'];
        $matcheswon = $base['data']['segments'][23]['stats']['matchesWon']['displayValue'];
        $matcheslose = $base['data']['segments'][23]['stats']['matchesLost']['displayValue'];
        $win = $base['data']['segments'][23]['stats']['matchesWinPct']['displayValue'];
        
        $kills = $base['data']['segments'][23]['stats']['kills']['displayValue'];
        $HS = $base['data']['segments'][23]['stats']['headshots']['displayValue'];
        $firstBloods = $base['data']['segments'][23]['stats']['firstBloods']['displayValue'];
        $firstBloodspermatch = $base['data']['segments'][23]['stats']['firstBloodsPerMatch']['displayValue'];
        $clutches = $base['data']['segments'][23]['stats']['clutches']['displayValue'];
        $aces = $base['data']['segments'][23]['stats']['aces']['displayValue'];
        $timeplayed = $base['data']['segments'][23]['stats']['timePlayed']['displayValue'];

        echo "Time Played: ". $timeplayed. " | Matches Played: ". $matchesplayed. " [(". $matcheswon."W-". $matcheslose."L), Win%: ". $win. "] | Total Kills: ". $kills. " (". $HS. " HS) | First Bloods: ". $firstBloods." (". $firstBloodspermatch. " per match) | Clutches: ". $clutches. " |  Aces: ". $aces. " ";
    break;
        //lastmatch test
    case "redteam":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v3/by-puuid/matches/na/a96c09fd-88c6-5e0c-a9e7-019e90c6bd49');
        $gamemode = $base['data'][0]['metadata']['mode'];
        $server = $base['data'][0]['metadata']['cluster'];
        
        $player1name = $base['data'][0]['players']['red'][0]['name'];
        $player1tag = $base['data'][0]['players']['red'][0]['tag'];
        $player1character = $base['data'][0]['players']['red'][0]['character'];
        $player1rank = $base['data'][0]['players']['red'][0]['currenttier_patched'];
        $player1kills = $base['data'][0]['players']['red'][0]['stats']['kills'];
        $player1deaths = $base['data'][0]['players']['red'][0]['stats']['deaths'];
        $player1assists = $base['data'][0]['players']['red'][0]['stats']['assists'];
        
        $player2name = $base['data'][0]['players']['red'][1]['name'];
        $player2tag = $base['data'][0]['players']['red'][1]['tag'];
        $player2character = $base['data'][0]['players']['red'][1]['character'];
        $player2rank = $base['data'][0]['players']['red'][1]['currenttier_patched'];
        $player2kills = $base['data'][0]['players']['red'][1]['stats']['kills'];
        $player2deaths = $base['data'][0]['players']['red'][1]['stats']['deaths'];
        $player2assists = $base['data'][0]['players']['red'][1]['stats']['assists'];
        
        $player3name = $base['data'][0]['players']['red'][2]['name'];
        $player3tag = $base['data'][0]['players']['red'][2]['tag'];
        $player3character = $base['data'][0]['players']['red'][2]['character'];
        $player3rank = $base['data'][0]['players']['red'][2]['currenttier_patched'];
        $player3kills = $base['data'][0]['players']['red'][2]['stats']['kills'];
        $player3deaths = $base['data'][0]['players']['red'][2]['stats']['deaths'];
        $player3assists = $base['data'][0]['players']['red'][2]['stats']['assists'];
        
        $player4name = $base['data'][0]['players']['red'][3]['name'];
        $player4tag = $base['data'][0]['players']['red'][3]['tag'];
        $player4character = $base['data'][0]['players']['red'][3]['character'];
        $player4rank = $base['data'][0]['players']['red'][3]['currenttier_patched'];
        $player4kills = $base['data'][0]['players']['red'][3]['stats']['kills'];
        $player4deaths = $base['data'][0]['players']['red'][3]['stats']['deaths'];
        $player4assists = $base['data'][0]['players']['red'][3]['stats']['assists'];
        
        $player5name = $base['data'][0]['players']['red'][4]['name'];
        $player5tag = $base['data'][0]['players']['red'][4]['tag'];
        $player5character = $base['data'][0]['players']['red'][4]['character'];
        $player5rank = $base['data'][0]['players']['red'][4]['currenttier_patched'];
        $player5kills = $base['data'][0]['players']['red'][4]['stats']['kills'];
        $player5deaths = $base['data'][0]['players']['red'][4]['stats']['deaths'];
        $player5assists = $base['data'][0]['players']['red'][4]['stats']['assists'];
        
        
        
        echo "Red Team Players: ".$player1name."#".$player1tag.", character: ".$player1character. ", rank: ".$player1rank. ", score: ".$player1kills."/".$player1deaths."/".$player1assists." | ".$player2name."#".$player2tag.", character: ".$player2character. ", rank: ".$player2rank. ", score: ".$player2kills."/".$player2deaths."/".$player2assists." | ".$player3name."#".$player3tag.", character: ".$player3character. ", rank: ".$player3rank. ", score: ".$player3kills."/".$player3deaths."/".$player3assists." | ".$player4name."#".$player4tag.", character: ".$player4character. ", rank: ".$player4rank. ", score: ".$player4kills."/".$player4deaths."/".$player4assists." | ".$player5name."#".$player5tag.", character: ".$player5character. ", rank: ".$player5rank. ", score: ".$player5kills."/".$player5deaths."/".$player5assists." ";
    break;
    case "blueteam":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v3/by-puuid/matches/na/a96c09fd-88c6-5e0c-a9e7-019e90c6bd49');
        
        $player1name = $base['data'][0]['players']['blue'][0]['name'];
        $player1tag = $base['data'][0]['players']['blue'][0]['tag'];
        $player1character = $base['data'][0]['players']['blue'][0]['character'];
        $player1rank = $base['data'][0]['players']['blue'][0]['currenttier_patched'];
        $player1kills = $base['data'][0]['players']['blue'][0]['stats']['kills'];
        $player1deaths = $base['data'][0]['players']['blue'][0]['stats']['deaths'];
        $player1assists = $base['data'][0]['players']['blue'][0]['stats']['assists'];
        
        $player2name = $base['data'][0]['players']['blue'][1]['name'];
        $player2tag = $base['data'][0]['players']['blue'][1]['tag'];
        $player2character = $base['data'][0]['players']['blue'][1]['character'];
        $player2rank = $base['data'][0]['players']['blue'][1]['currenttier_patched'];
        $player2kills = $base['data'][0]['players']['blue'][1]['stats']['kills'];
        $player2deaths = $base['data'][0]['players']['blue'][1]['stats']['deaths'];
        $player2assists = $base['data'][0]['players']['blue'][1]['stats']['assists'];
        
        $player3name = $base['data'][0]['players']['blue'][2]['name'];
        $player3tag = $base['data'][0]['players']['blue'][2]['tag'];
        $player3character = $base['data'][0]['players']['blue'][2]['character'];
        $player3rank = $base['data'][0]['players']['blue'][2]['currenttier_patched'];
        $player3kills = $base['data'][0]['players']['blue'][2]['stats']['kills'];
        $player3deaths = $base['data'][0]['players']['blue'][2]['stats']['deaths'];
        $player3assists = $base['data'][0]['players']['blue'][2]['stats']['assists'];
        
        $player4name = $base['data'][0]['players']['blue'][3]['name'];
        $player4tag = $base['data'][0]['players']['blue'][3]['tag'];
        $player4character = $base['data'][0]['players']['blue'][3]['character'];
        $player4rank = $base['data'][0]['players']['blue'][3]['currenttier_patched'];
        $player4kills = $base['data'][0]['players']['blue'][3]['stats']['kills'];
        $player4deaths = $base['data'][0]['players']['blue'][3]['stats']['deaths'];
        $player4assists = $base['data'][0]['players']['blue'][3]['stats']['assists'];
        
        $player5name = $base['data'][0]['players']['blue'][4]['name'];
        $player5tag = $base['data'][0]['players']['blue'][4]['tag'];
        $player5character = $base['data'][0]['players']['blue'][4]['character'];
        $player5rank = $base['data'][0]['players']['blue'][4]['currenttier_patched'];
        $player5kills = $base['data'][0]['players']['blue'][4]['stats']['kills'];
        $player5deaths = $base['data'][0]['players']['blue'][4]['stats']['deaths'];
        $player5assists = $base['data'][0]['players']['blue'][4]['stats']['assists'];
        
        
        
        echo "Blue Team Players: ".$player1name."#".$player1tag.", character: ".$player1character. ", rank: ".$player1rank. ", score: ".$player1kills."/".$player1deaths."/".$player1assists." | ".$player2name."#".$player2tag.", character: ".$player2character. ", rank: ".$player2rank. ", score: ".$player2kills."/".$player2deaths."/".$player2assists." | ".$player3name."#".$player3tag.", character: ".$player3character. ", rank: ".$player3rank. ", score: ".$player3kills."/".$player3deaths."/".$player3assists." | ".$player4name."#".$player4tag.", character: ".$player4character. ", rank: ".$player4rank. ", score: ".$player4kills."/".$player4deaths."/".$player4assists." | ".$player5name."#".$player5tag.", character: ".$player5character. ", rank: ".$player5rank. ", score: ".$player5kills."/".$player5deaths."/".$player5assists." ";
    break;
    case "gameinfos":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v3/by-puuid/matches/na/0c188f85-f188-5c60-a3aa-3a1a59928494');
        $base2 = _getJSON('https://api.henrikdev.xyz/valorant/v1/by-puuid/mmr/na/0c188f85-f188-5c60-a3aa-3a1a59928494');

        //$base = _getJSON('https://api.henrikdev.xyz/valorant/v3/by-puuid/matches/na/a96c09fd-88c6-5e0c-a9e7-019e90c6bd49');
        //$base2 = _getJSON('https://api.henrikdev.xyz/valorant/v1/by-puuid/mmr/na/a96c09fd-88c6-5e0c-a9e7-019e90c6bd49');
        
        //$base = _getJSON('https://api.henrikdev.xyz/valorant/v3/by-puuid/matches/eu/882a4c1c-fc72-521b-904e-8bcec9726d5d');
        //$base2 = _getJSON('https://api.henrikdev.xyz/valorant/v1/by-puuid/mmr/eu/882a4c1c-fc72-521b-904e-8bcec9726d5d');
        
        $lg = $base2['data']['mmr_change_to_last_game'];

        $map = $base['data'][0]['metadata']['map'];
        $gamemode = $base['data'][0]['metadata']['mode'];
        $server = $base['data'][0]['metadata']['cluster'];
        echo "Gamemode: ".$gamemode." | Server: ".$server." | Map: ".$map." | MMR change: ".$lg."";
    break;
    case "gameresult":
        $base = _getJSON('https://api.henrikdev.xyz/valorant/v3/by-puuid/matches/na/0c188f85-f188-5c60-a3aa-3a1a59928494');
        //$base = _getJSON('https://api.henrikdev.xyz/valorant/v3/by-puuid/matches/eu/882a4c1c-fc72-521b-904e-8bcec9726d5d');
        //$base = _getJSON('https://api.henrikdev.xyz/valorant/v3/by-puuid/matches/na/a96c09fd-88c6-5e0c-a9e7-019e90c6bd49');
        
        $redteamscore = $base['data'][0]['teams']['red']['rounds_won'];
        $blueteamscore = $base['data'][0]['teams']['blue']['rounds_won'];
        
        echo "Game results: Blue Team ".$blueteamscore. " | ".$redteamscore. " Red Team";
    break;
    default:
        echo "fin ghadi a dak rass l 9alwa xDD";
}
