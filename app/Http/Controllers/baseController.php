<?php

namespace App\Http\Controllers;
use App\Models\Move;

use Illuminate\Http\Request;

class baseController extends Controller
{
    public function addMove(Request $req){
        $move = new Move();
       $s= $req->move;
        if('up'==  $s){   
        $move->up = 1;
        $move->save();
        return response()->json($move);
        
        
        }
        else if ('right'==  $s){
            $move->right = 1;
            $move->save();
            return response()->json($move);

            
        }
        else if ('left'==  $s){
            $move->left = 1;
            $move->save();
            return response()->json($move);

        }
        else if ('down'==  $s){
            $move->down = 1;
            $move->save();
            return response()->json($move);

        }
        else if ('stop'==  $s){
            $move->stop = 1;
            $move->save();
            return response()->json($move);
 
        }
    
    } 

    function showLastMove (){
        $maxId=Move::max('id');
        return Move::where('id',$maxId)->first();
    }
}
