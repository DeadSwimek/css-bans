<?php

namespace App\Models\Rcon;

use App\Models\SaServer;
use Illuminate\Database\Eloquent\Model;

class Rcon extends Model
{
    public function server() {
        return $this->belongsTo(SaServer::class, 'server_id', 'server_id');
    }
}
