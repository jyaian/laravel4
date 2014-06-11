<?php

class TestController extends BaseController {

    public function getBoards()
    {
        $boards = Board::all();

        return View::make('boards')->with('boards', $boards);
    }

    public function addBoards()
    {
        $input = Input::only('user_name', 'comment');

        $validator = Validator::make(
            array('user_name' => $input['user_name'],
                  'comment'   => $input['comment']
            ),
            array('user_name' => 'required|min:2',                //パイプで区切ってもよし
                  'comment'   => array('required', 'max:100')     //配列にしてもよし
            )
        );

        if ($validator->fails())
        {
            return Redirect::to('boards')->withErrors($validator)->withInput();
        }
        else
        {
            //insert data
            $board = new Board;
            // $board->category_id = 0;
            $board->user_name = $input['user_name'];
            $board->comment = $input['comment'];
            $board->lastup_datetime = date('Y-m-d H:i:s');
            $board->create_datetime = date('Y-m-d H:i:s');
            // $board->disable = 0;
            $board->save();

            //get all data
            $boards = Board::all();
            return View::make('boards')->with('boards', $boards);
        }
    }
}
