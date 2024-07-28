<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Gemini;



class GeminiController extends Controller
{
    public function index(Request $request)
    {
        return view('consulting');
    }

    public function post(Request $request)
    {
        // バリデーション
        $request->validate([
            'sentence' => 'required',
        ]);

        // 画面で入力した質問
        $sentence = $request->input('sentence');

         // デバッグ用にリクエストデータをログに記録
        \Log::info('Request Sentence:', ['sentence' => $sentence]);

        // .env に設定したAPIキー
        // .env には GEMINI_API_KEY='' の形式でAPIキーを追加しておきます。
        // $yourApiKey = getenv('GEMINI_API_KEY');
        // $client = \Gemini\Gemini::client(getenv('GEMINI_API_KEY'));
        $client = Gemini::client(env('GEMINI_API_KEY'));


        $result = $client->geminiPro()->generateContent($sentence);        
        $response_text = $result->text(); // Gemini からの応答を取得

        return view('consulting', compact('sentence', 'response_text'));
    }

    
}
