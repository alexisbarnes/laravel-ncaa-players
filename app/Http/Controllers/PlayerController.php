<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PlayerController extends Controller
{
  public function index ()
  {
    // GET /games
    // list
    $players = Player::all();
    return Response::json($players);
  }

  public function create (Request $request)
  {
    // POST /games
    // create new game
    Player::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ()
  {
    // GET /games/$id
    //show a single game
    $player = Player::find($id);
    return Response::json($player);
  }

  public function update (Request $request, $id)
  {
    // PUT /games/$id
    // update a single game
    $player = Player::find($id);
    $player->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function destroy ($id)
  {
    // DELETE /games/$id
    // remove a single game
    $player = Player::find($id);
    $player->delete();
    return Response::json(['deleted' => true]);
  }
}
