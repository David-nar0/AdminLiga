<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;
use App\Models\Game;
use App\Models\Goal;
use App\Models\President;
use PhpParser\Node\Stmt\TraitUseAdaptation\Precedence;

class ConsultasController extends Controller
{

    public function teamPlayers()
    {
        $team = Team::find(1);

        return $team->players;
    }

    public function president()
    {
        $team = Team::find(1);

        return $team->president;
    }

    public function consulta()
    {
        $player = Player::find(1);
        $team = Team::find(1);
        $game = Game::find(1);
        $goal = Goal::find(2);
        $president = President::find(1);

        // return $player->team;
        // return $team->players;
        // return $game->goals;
        return $goal->game;
        // return $president->teams;



        
        // $player = Player::with(['team', 'goals'])->get();

        // return $player;



    }
}
