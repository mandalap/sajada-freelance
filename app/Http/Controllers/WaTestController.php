<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaTestController extends Controller
{
    /**
     * Tampilkan halaman test WA API
     */
    public function index()
    {
        // Default values dari RegisterSuccessJobs
        $defaults = [
            'api_key' => 'WSY8Xmnu6CNcd0YFtjqicnxM38WgXY',
            'sender' => '6285696686753',
            'url' => 'https://wablitz.web.id/send-message',
            'number' => '',
            'message' => 'Halo! Ini adalah pesan test dari WA Test API. 🚀'
        ];

        return view('wa-test', compact('defaults'));
    }

    /**
     * Kirim test message
     */
    public function send(Request $request)
    {
        $validated = $request->validate([
            'api_key' => 'required|string',
            'sender' => 'required|string',
            'url' => 'required|url',
            'number' => 'required|string',
            'message' => 'required|string'
        ]);

        $data = [
            'api_key' => $validated['api_key'],
            'sender' => $validated['sender'],
            'number' => $validated['number'],
            'message' => $validated['message']
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $validated['url'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $error = curl_error($curl);

        curl_close($curl);

        // Tentukan status
        $success = !$error && $httpCode >= 200 && $httpCode < 300;

        return redirect()
            ->route('wa-test.index')
            ->withInput()
            ->with([
                'test_result' => [
                    'success' => $success,
                    'http_code' => $httpCode,
                    'response' => $response,
                    'error' => $error
                ]
            ]);
    }
}
