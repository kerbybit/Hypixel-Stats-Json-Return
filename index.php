<?php

    include_once('HypixelPHP.php');
    $HypixelPHP = new HypixelPHP\HypixelPHP(['api_key' => '########-####-####-####-############']);

    if ($_GET!=null) {
        if ($_GET['name']!=null) {
            $player = $HypixelPHP->getPlayer(['name' => $_GET['name']]);
            if ($_GET['game']!=null && $player!=null) {
                $game = $_GET['game'];
                if (strtoupper($game) == "ARCADE") {
                    $coins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('coins',0);
                    if ($coins==null) {$coins=0;}
					
					$GWwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('sw_game_wins',0);
                    if ($GWwins==null) {$GWwins=0;}
					$GWkills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('sw_kills',0);
                    if ($GWkills==null) {$GWkills=0;}
					$GWdeaths = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('sw_deaths',0);
                    if ($GWdeaths==null) {$GWdeaths=0;}
					$GWkd=0; if ($GWdeaths!==0) {$GWkd = round($GWkills/$GWdeaths,2);}
					
					$BDwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_dayone',0);
                    if ($BDwins==null) {$BDwins=0;}
					$BDkills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('kills_dayone',0);
                    if ($BDkills==null) {$BDkills=0;}
					$BDhs = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('headshots_dayone',0);
                    if ($BDhs==null) {$BDhs=0;}
					
					$OQwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_oneinthequiver',0);
                    if ($OQwins==null) {$OQwins=0;}
					$OQkills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('kills_oneinthequiver',0);
                    if ($OQkills==null) {$OQkills=0;}
					$OQdeaths = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('deaths_oneinthequiver',0);
                    if ($OQdeaths==null) {$OQdeaths=0;} 
					$OQkd=0; if ($OQdeaths!==0) {$OQkd=round($OQkills/$OQdeaths,2);}
					
					$DWwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_dragonwars2',0);
                    if ($DWwins==null) {$DWwins=0;}
					$DWkills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('kills_dragonwars2',0);
                    if ($DWkills==null) {$DWkills=0;}
					
					$ESwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_ender',0);
                    if ($ESwins==null) {$ESwins=0;}
					
					$CAmax = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('max_wave',0);
                    if ($CAmax==null) {$CAmax=0;}
					
					$P1wins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_party',0);
                    if ($P1wins==null) {$P1wins=0;}
					$P2wins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_party_2',0);
                    if ($P2wins==null) {$P2wins=0;}
					$P3wins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_party_3',0);
                    if ($P3wins==null) {$P3wins=0;}
					
					$FHwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_farm_hunt',0);
                    if ($FHwins==null) {$FHwins=0;}
					$FHpoop = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('poop_collected',0);
                    if ($FHpoop==null) {$FHpoop=0;}
					
					$HWwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_hole_in_the_wall',0);
                    if ($HWwins==null) {$HWwins=0;}
					$HWq = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('hitw_record_q',0);
                    if ($HWq==null) {$HWq=0;}
					$HWf = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('hitw_record_f',0);
                    if ($HWf==null) {$HWf=0;}
					
					$BBwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_buildbattle',0);
                    if ($BBwins==null) {$BBwins=0;}
					$BBwinst = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_buildbattle_teams',0);
                    if ($BBwinst==null) {$BBwinst=0;}
					
					$SSwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::ARCADE)->get('wins_simon_says',0);
                    if ($SSwins==null) {$SSwins=0;}
					
					echo '{"game":"Arcade",';
					echo '"stats":"Coins: '.$coins.'",';
					echo '"stats":"",';
					echo '"stats":"GalaxyWars Wins: '.$GWwins.'",';
					echo '"stats":"GalaxyWars Kills: '.$GWkills.'",';
					echo '"stats":"GalaxyWars KD: '.$GWkd.'",';
					echo '"stats":"",';
					echo '"stats":"BlockingDead Wins: '.$BDwins.'",';
					echo '"stats":"BlockingDead Kills: '.$BDkills.'",';
					echo '"stats":"BlockingDead HeadShots: '.$BDhs.'",';
					echo '"stats":"",';
					echo '"stats":"OneInTheQuiver Wins: '.$OQwins.'",';
					echo '"stats":"OneInTheQuiver Kills: '.$OQkills.'",';
					echo '"stats":"OneInTheQuiver KD: '.$OQkd.'",';
					echo '"stats":"",';
					echo '"stats":"DragonWars Wins: '.$DWwins.'",';
					echo '"stats":"DragonWars Kills: '.$DWkills.'",';
					echo '"stats":"",';
					echo '"stats":"EnderSpeef Wins: '.$ESwins.'",';
					echo '"stats":"",';
					echo '"stats":"CreeperAttack Max Wave: '.$CAmax.'",';
					
					echo '"morestats":"PartyGames 1 Wins: '.$P1wins.'",';
					echo '"morestats":"PartyGames 2 Wins: '.$P2wins.'",';
					echo '"morestats":"PartyGames 3 Wins: '.$P3wins.'",';
					echo '"morestats":"",';
					echo '"morestats":"FarmHunt Wins: '.$FHwins.'",';
					echo '"morestats":"Poop Collected: '.$FHpoop.'",';
					echo '"morestats":"",';
					echo '"morestats":"HoleInTheWall Wins: '.$HWwins.'",';
					echo '"morestats":"Highest Score Qualifications: '.$HWq.'",';
					echo '"morestats":"Highest Score Finals: '.$HWf.'",';
					echo '"morestats":"",';
					echo '"morestats":"BuildBattle Wins: '.$BBwins.'",';
					echo '"morestats":"BuildBattle Team Wins: '.$BBwinst.'",';
					echo '"morestats":"",';
					echo '"morestats":"HypixelSays Wins: '.$SSwins.'"';
					echo '}';
                } 
                else if (strtoupper($game) == "ARENA") {
                    echo '{"game":"'.$game.'","stats":"No stats available yet!","morestats":"Check back later."}';
                } 
                else if (strtoupper($game) == "BATTLEGROUND" || strtoupper($game) == "WARLORDS"  || strtoupper($game) == "WL") {
                    echo '{"game":"'.$game.'","stats":"No stats available yet!","morestats":"Check back later."}';
                } 
                else if (strtoupper($game) == "HUNGERGAMES" || strtoupper($game) == "BLITZ" || strtoupper($game) == "BSG" || strtoupper($game) == "BLITZSURVIVALGAMES") {
                    $coins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::HUNGERGAMES)->get('coins',0);
                    if ($coins==null) {$coins=0;}
                    $kills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::HUNGERGAMES)->get('kills',0);
                    if ($kills==null) {$kills=0;}
                    $Swins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::HUNGERGAMES)->get('wins',0);
                    if ($Swins==null) {$Swins=0;}
                    $Twins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::HUNGERGAMES)->get('wins_teams',0);
                    if ($Twins==null) {$Twins=0;}
                    
                    $KD = $kills/$player->getStats()->getGameFromID(\HypixelPHP\GameTypes::HUNGERGAMES)->get('deaths',0);
                    if ($KD==null) {$KD=0;}
                    $KG = $kills/($player->getStats()->getGameFromID(\HypixelPHP\GameTypes::HUNGERGAMES)->get('deaths',0)+$Swins+$Twins);
                    if ($KG==null) {$KG=0;}
                    
                    echo '{"game":"Blitz Survival Games",';
                    echo '"stats":"Coins: '.$coins.'",';
                    echo '"stats":"Kills: '.$kills.'",';
                    echo '"stats":"Solo Wins: '.$Swins.'",';
                    echo '"stats":"Team Wins: '.$Twins.'",';
                    
                    echo '"morestats":"KD: '.round($KD,2).'",';
                    echo '"morestats":"Kills Per Game: '.round($KG,2).'",';
                    echo '}';
                } 
                else if (strtoupper($game) == "MCGO" || strtoupper($game) == "CVC" || strtoupper($game) == "COPSVCRIMS" || strtoupper($game) == "COPSVSCRIMS") {
                    $coins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::MCGO)->get('coins',0);
                    if ($coins==null) {$coins=0;}
                    $kills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::MCGO)->get('kills',0);
                    if ($kills==null) {$kills=0;}
                    $wins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::MCGO)->get('game_wins',0);
                    if ($wins==null) {$wins=0;}
                    $plant = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::MCGO)->get('bombs_planted',0);
                    if ($plant==null) {$plant=0;}
                    $defuse = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::MCGO)->get('bombs_defused',0);
                    if ($defuse==null) {$defuse=0;}
                    
                    
                    $KD = $kills/$player->getStats()->getGameFromID(\HypixelPHP\GameTypes::MCGO)->get('deaths',0);
                    if ($KD==null) {$KD=0;}
                    $headshots = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::MCGO)->get('headshot_kills',0);
                    if ($headshots==null) {$headshots=0;}
                    $shotsfired = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::MCGO)->get('shots_fired',0);
                    if ($shotsfired==null) {$shotsfired=0;}
                    
                    echo '{"game":"Cops Vs Crims",';
                    echo '"stats":"Coins: '.$coins.'",';
                    echo '"stats":"Kills: '.$kills.'",';
                    echo '"stats":"Wins: '.$wins.'",';
                    echo '"stats":"Bombs Planted: '.$plant.'",';
                    echo '"stats":"Bombs Defused: '.$defuse.'",';
                    
                    echo '"morestats":"KD: '.round($KD,2).'",';
                    echo '"morestats":"HeadShots: '.$headshots.'",';
                    echo '"morestats":"Shots Fired: '.$shotsfired.'",';
                    echo '}';
                } 
                else if (strtoupper($game) == "PAINTBALL" || strtoupper($game) == "PB") {
                    $coins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::PAINTBALL)->get('coins',0);
                    if ($coins==null) {$coins=0;}
                    $kills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::PAINTBALL)->get('kills',0);
                    if ($kills==null) {$kills=0;}
                    $killstreaks = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::PAINTBALL)->get('killstreaks',0);
                    if ($killstreaks==null) {$killstreaks=0;}
                    $wins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::PAINTBALL)->get('wins',0);
                    if ($wins==null) {$wins=0;}
                    $shotsfired = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::PAINTBALL)->get('shots_fired',0);
                    if ($shotsfired==null) {$shotsfired=0;}
                    
                    $KD = $kills/$player->getStats()->getGameFromID(\HypixelPHP\GameTypes::PAINTBALL)->get('deaths',0);
                    if ($KD==null) {$KD=0;}
                    $SK = $shotsfired/$kills;
                    if ($SK==null) {$SK=0;}
                    
                    echo '{"game":"PaintBall",';
                    echo '"stats":"Coins: '.$coins.'",';
                    echo '"stats":"Kills: '.$kills.'",';
                    echo '"stats":"KillStreaks: '.$killstreaks.'",';
                    echo '"stats":"Wins: '.$wins.'",';
                    echo '"stats":"Shots Fired: '.$shotsfired.'",';
                    
                    echo '"morestats":"KD: '.round($KD,2).'",';
                    echo '"morestats":"Shots per Kill: '.round($SK,2).'",';
                    echo '}';
                } 
                else if (strtoupper($game) == "QUAKE" || strtoupper($game) == "QUAKECRAFT") {
                    $coins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::QUAKE)->get('coins',0);
                    if ($coins==null) {$coins=0;}
                    $Swins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::QUAKE)->get('wins',0);
                    if ($Swins==null) {$Swins=0;}
                    $Skills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::QUAKE)->get('kills',0);
                    if ($Skills==null) {$Skills=0;}
                    $Skillstreaks = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::QUAKE)->get('killstreaks',0);
                    if ($Skillstreaks==null) {$Skillstreaks=0;}
                    $Twins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::QUAKE)->get('wins_teams',0);
                    if ($Twins==null) {$Twins=0;}
                    $Tkills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::QUAKE)->get('kills_teams',0);
                    if ($Tkills==null) {$Tkills=0;}
                    $Tkillstreaks = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::QUAKE)->get('killstreaks_teams',0);
                    if ($Tkillstreaks==null) {$Tkillstreaks=0;}
                    
                    $SKD = $Skills/$player->getStats()->getGameFromID(\HypixelPHP\GameTypes::QUAKE)->get('deaths',0);
                    if ($SKD==null) {$SKD=0;}
                    $TKD = $Tkills/$player->getStats()->getGameFromID(\HypixelPHP\GameTypes::QUAKE)->get('deaths_teams',0);
                    if ($TKD==null) {$TKD=0;}
                    
                    
                    echo '{"game":"QuakeCraft",';
                    echo '"stats":"Coins: '.$coins.'",';
                    echo '"stats":"Solo Wins: '.$Swins.'",';
                    echo '"stats":"Solo Kills: '.$Skills.'",';
                    echo '"stats":"Solo KillStreaks: '.$Skillstreaks.'",';
                    echo '"stats":"Team Wins: '.$Twins.'",';
                    echo '"stats":"Team Kills: '.$Tkills.'",';
                    echo '"stats":"Team KillStreaks: '.$Tkillstreaks.'",';
					
                    echo '"morestats":"Solo KD: '.round($SKD,2).'",';
                    echo '"morestats":"Team KD: '.round($TKD,2).'"';
                    echo '}';
                } 
                else if (strtoupper($game) == "TNTGames") {
                    echo '{"game":"'.$game.'","stats":"No stats available yet!","morestats":"Check back later."}';
                } 
                else if (strtoupper($game) == "UHC" || strtoupper($game) == "ULTRAHARDCORE" || strtoupper($game) == "UHCCHAMPIONS") {
                    echo '{"game":"'.$game.'","stats":"No stats available yet!","morestats":"Check back later."}';
                } 
                else if (strtoupper($game) == "VAMPIREZ" || strtoupper($game) == "VAMPZ" || strtoupper($game) == "VZ") {
                    echo '{"game":"'.$game.'","stats":"No stats available yet!","morestats":"Check back later."}';
                } 
                else if (strtoupper($game) == "WALLS" || strtoupper($game) == "WALLS2" || strtoupper($game) == "W") {
                    $coins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS)->get('coins',0);
                    if ($coins==null) {$coins=0;}
					$kills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS)->get('kills',0);
                    if ($kills==null) {$kills=0;}
					$deaths = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS)->get('deaths',0);
                    if ($deaths==null) {$deaths=0;}
					$wins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS)->get('wins',0);
                    if ($wins==null) {$wins=0;}
					$losses = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS)->get('losses',0);
                    if ($losses==null) {$losses=0;}
					
					$KD = $kills/$deaths;
                    if ($KD==null) {$KD=0;}
					
					echo '{"game":"Walls",';
                    echo '"stats":"Coins: '.$coins.'",';
					echo '"stats":"Kills: '.$kills.'",';
					echo '"stats":"Deaths: '.$deaths.'",';
					echo '"stats":"Wins: '.$wins.'",';
					echo '"stats":"Losses: '.$losses.'",';
                    
					echo '"morestats":"KD: '.round($KD,2).'",';
                    echo '}';
                } 
                else if (strtoupper($game) == "WALLS3" || strtoupper($game) == "MEGAWALLS" || strtoupper($game) == "MW") {
                    $coins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get('coins',0);
                    if ($coins==null) {$coins=0;}
					$kills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get('kills',0);
                    if ($kills==null) {$kills=0;}
					$wins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get('wins',0);
                    if ($wins==null) {$wins=0;}
					
					$class = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get('chosen_class',0);
                    if ($class==null) {$class="Zombie";}
					$anum = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get(strtolower($class).'_a',0);
                    if ($anum==null) {$anum=0;} $areturn = "";
					for ($i=0; $i<$anum; $i++) {$areturn=$areturn."&a█";} for ($i=$anum; $i<9; $i++) {$areturn=$areturn."&c█";}
					$bnum = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get(strtolower($class).'_b',0);
                    if ($bnum==null) {$bnum=0;} $breturn = "";
					for ($i=0; $i<$bnum; $i++) {$breturn=$breturn."&a█";} for ($i=$bnum; $i<9; $i++) {$breturn=$breturn."&c█";}
					$cnum = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get(strtolower($class).'_c',0);
                    if ($cnum==null) {$cnum=0;} $creturn = "";
					for ($i=0; $i<$cnum; $i++) {$creturn=$creturn."&a█";} for ($i=$cnum; $i<9; $i++) {$creturn=$creturn."&c█";}
					$dnum = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get(strtolower($class).'_d',0);
                    if ($dnum==null) {$dnum=0;} $dreturn = "";
					for ($i=0; $i<$dnum; $i++) {$dreturn=$dreturn."&a█";} for ($i=$dnum; $i<9; $i++) {$dreturn=$dreturn."&c█";}
					$gnum = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get(strtolower($class).'_g',0);
                    if ($gnum==null) {$anum=0;} $greturn = "";
					for ($i=0; $i<$gnum; $i++) {$greturn=$greturn."&a█";} for ($i=$gnum; $i<9; $i++) {$greturn=$greturn."&c█";}
					
					$deaths = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get('deaths',0);
					if ($deaths==null) {$deaths=0;}
					if ($deaths==0 or $kills==0) {$KD=0;} else {$KD=$kills/$deaths;}
					
					$losses = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::WALLS3)->get('losses',0);
					if ($losses==null) {$losses=0;}
					if ($losses==0 or $wins==0) {$WL=0;} else {$WL=$wins/$losses;}
					
					echo '{"game":"Mega Walls",';
                    echo '"stats":"Coins: '.$coins.'",';
					echo '"stats":"Kills: '.$kills.'",';
					echo '"stats":"Wins: '.$wins.'",';
					
					echo '"stats":"Class: '.$class.'",';
					echo '"stats":"'.$areturn.'",';
					echo '"stats":"'.$breturn.'",';
					echo '"stats":"'.$creturn.'",';
					echo '"stats":"'.$dreturn.'",';
					echo '"stats":"'.$greturn.'",';
					
					echo '"morestats":"Kill/Death: '.round($KD,2).'",';
					echo '"morestats":"Win/Loss: '.round($WL,2).'"';
					echo '}';
					
                } 
                else if (strtoupper($game) == "GINGERBREAD" || strtoupper($game) == "TURBOKARTRACERS" || strtoupper($game) == "TKR") {
                    echo '{"game":"'.$game.'","stats":"No stats available yet!","morestats":"Check back later."}';
                } 
                else if (strtoupper($game) == "SKYWARS" || strtoupper($game) == "SW") {
                    $coins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('coins',0);
					if ($coins==null) {$coins=0;}
					$Skills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('kills_solo',0);
					if ($Skills==null) {$Skills=0;}
					$Swins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('wins_solo',0);
					if ($Swins==null) {$Swins=0;}
					$Tkills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('kills_team',0);
					if ($Tkills==null) {$Tkills=0;}
					$Twins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('wins_team',0);
					if ($Twins==null) {$Twins=0;}
					$eggs = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('egg_thrown',0);
					if ($eggs==null) {$eggs='none?!?';}
					$totalkills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('kills',0);
					$totaldeaths = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('deaths',0);
					if ($totalkills==null) {$totalkills=0;} if ($totaldeaths==null) {$totaldeaths=0;}
					if ($totalkills==0 or $totaldeaths==0) {$KD=0;} else {$KD=$totalkills/$totaldeaths;}
					$totalwins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('wins',0);
					$totallosses = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SKYWARS)->get('losses',0);
					if ($totalwins==null) {$totalwins=0;} if ($totallosses==null) {$totallosses=0;}
					if ($totalwins==0 or $totallosses==0) {$WL=0;} else {$WL=$totalwins/$totallosses;}
					
					echo '{"game":"Sky Wars",';
					echo '"stats":"Coins: '.$coins.'",';
					echo '"stats":"Solo Kills: '.$Skills.'",';
					echo '"stats":"Solo Wins: '.$Swins.'",';
					echo '"stats":"Team Kills: '.$Tkills.'",';
					echo '"stats":"Team Wins: '.$Twins.'",';
					echo '"stats":"Eggs Thrown: '.$eggs.'",';
					
					echo '"morestats":"Kill/Death: '.round($KD,2).'",';
					echo '"morestats":"Win/Loss: '.round($WL,2).'",';
					
                } 
                else if (strtoupper($game) == "TRUECOMBAT" || strtoupper($game) == "CRAZYWALLS" || strtoupper($game) == "CW" || strtoupper($game) == "CRAZY") {
                    echo '{"game":"'.$game.'","stats":"No stats available yet!","morestats":"Check back later."}';
                }
				else if (strtoupper($game) == "SUPERSMASH" || strtoupper($game) == "SMASH" || strtoupper($game) == "SMASHHEROES") {
					$coins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('coins',0);
					if ($coins==null) {$coins=0;}
					$kills = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('kills',0);
					if ($kills==null) {$kills=0;}
					$Swins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('wins_normal',0);
					if ($Swins==null) {$Swins=0;}
					$Twins = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('wins_teams',0) + $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('wins_2v2',0);
					if ($Twins==null) {$Twins=0;}
					$hero = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('active_class',0);
					if ($hero==null) {$hero='THE_BULK';}
					$herolvl = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('lastLevel_'.$hero,0);
					if ($herolvl==null) {$herolvl=0;}
					$pg = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('pg_'.$hero,0);
					if ($pg==null) {$pg="";} else {$pg="&8P".$pg;}
					$sl = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('smash_level_total',0);
					if ($sl==null) {$sl=0;}
					
					$KD = $kills / $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('deaths',0);
					if ($KD==null) {$KD=0;}
					$WL = $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('wins',0) / $player->getStats()->getGameFromID(\HypixelPHP\GameTypes::SUPER_SMASH)->get('losses',0);
					if ($WL==null) {$WL=0;}
					
					echo '{"game":"Smash Heroes",';
					echo '"stats":"Coins: '.$coins.'",';
					echo '"stats":"Kills: '.$kills.'",';
					echo '"stats":"Solo Wins: '.$Swins.'",';
					echo '"stats":"Team Wins: '.$Twins.'",';
					$hero = ucwords(strtolower(str_replace('_', ' ', $hero)));
					echo '"stats":"Hero: '.$hero.' &7lvl'.$herolvl.$pg.'",';
					echo '"stats":"Smash Level: '.$sl.'",';
					
					echo '"morestats":"Kill/Death: '.round($KD,2).'",';
					echo '"morestats":"Win/Loss: '.round($WL,2).'"';
					echo '}';
				}
                else {
                    echo '{"game":"'.$game.'","stats":"That is not a game or username!","morestats":"That is not a game or username!"}';
                }
            } else {
                echo '{"game":"'.$game.'","stats":"That is not a game or username!","morestats":"That is not a game or username!"}';
            }
        }
    } else {
        echo 'no data! use ?username=$name&game=$game';
    }