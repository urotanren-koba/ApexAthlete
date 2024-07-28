<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;


class ResultController extends Controller
{
    public function index (Request $request)
    {
        // ログインしているユーザーのIDを取得
        $userId = Auth::id();

        // ソート順を取得（デフォルトは降順）
        $sort = $request->query('sort', 'desc');

        // ログインしているユーザーのデータを取得し、指定された順序でソート
        $results = Result::where('user_id', $userId)
                        ->orderBy('created_at', $sort)
                        ->get();

        return view('results.mypage', ['results' => $results]);
    }

    public function show($id)
    {
        // 指定されたIDのデータを取得
        $result = Result::findOrFail($id);

        // データをビューに渡す
        return view('results.show', ['result' => $result]);
    }

    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'response_text' => 'required|string',
        ]);

        // データベースに保存
        Result::create([
            'user_id' => Auth::id(), // 現在のユーザーのIDを取得して保存
            'response_text' => $request->response_text,
        ]);

        return back()->with('success', '練習メニューが保存されました。');
    }
}
