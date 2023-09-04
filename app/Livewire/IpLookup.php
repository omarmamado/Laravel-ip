<?php

namespace App\Livewire;

use Livewire\Component;

class IpLookup extends Component
{
    public $ip;
    public $results;

    protected $rules = [
        'ip' => ['required', 'ip']
    ];
    public function render()
    {
        return view('livewire.ip-lookup');
    }
    public function findIp()
    {
        $this->validate();
        $this->results = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$this->ip"));
        // dd($this->results);
    }
}
