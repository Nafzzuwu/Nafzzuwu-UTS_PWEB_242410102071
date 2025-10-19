<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function doLogin(Request $request) {
        $username = $request ->input('username');
        $password = $request ->input('password');

        if($username !== 'NafzzWithYou') {
            return redirect()
            ->route ('login')
            ->with ('error', 'Username Not Found!');
        }

        if($password !== 'alamaknajisnyo') {
            return redirect()
            ->route ('login')
            ->with ('error', 'Password Doesnt Match!');
        }

        return redirect()
        ->route('dashboard',['username' => $username])
        ->with('success', 'Login Succesfully!');
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login');
        }
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request) {
        $username = $request->query('username');
        
        if (!$username) {
            return redirect()->route('login');
        }

        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request) {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login');
        }

        $skins = [
            [
                'id' => 1,
                'nama' => 'AK-47 | Redline',
                'harga' => '$85.50',
                'image' => 'https://cdn.oneesports.gg/cdn-data/2024/06/CS2_best_cases-450x253.jpg'
            ],
            [
                'id' => 2,
                'nama' => 'M4A1-S | Hyper Beast',
                'harga' => '$120.00',
                'image' => 'https://media.sketchfab.com/models/0cd3a01ad5044862bab42a9c2bce5e34/thumbnails/c8c1b26c8e4a496095809927acd59247/1024x576.jpeg'
            ],
            [
                'id' => 3,
                'nama' => 'AWP | Asiimov',
                'harga' => '$95.75',
                'image' => 'https://imageproxy.waxpeer.com/insecure/rs:fit:450:300:0/g:nowe/f:webp/plain/https://images.waxpeer.com/waxpeer-blogpost/1728901711995.png'
            ],
        ];

        return view('pengelolaan', compact('skins', 'username'));
    }

}
