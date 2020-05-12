<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\RemoteConfig;

class IndexController extends Controller
{
    private $remoteremoteConfig;

    public function index(RemoteConfig $remoteConfig) {
        $this->remoteConfig = $remoteConfig;
        $voice = array_values((array)$this->remoteConfig->get()->parameters()['VoiceId']->defaultValue())[0];
        return view('index', compact('voice'));
    }
}
