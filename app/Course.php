<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses'; //digunakan untuk mendeklarasikan nama tabel, jika nama tabel dan nama model berbeda

    public function coba(){
        echo "Coba coba";
    }
}
