<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class notifications extends Model
{
    use HasFactory;

    protected $table='notifications';
    protected $fillable = [
        'name',
        'endDate',
    ];
    protected $appends=['extra'];

        public function getExtraAttribute()
       {
            $time = $this->endDate; // Burada db'de kayıtlı mevcut tarihi alıyorum.
            $date = Carbon::parse($time); // Db'deki zamanı Zaman formatına  çeviriyoruz
            $now = Carbon::now('Europe/Istanbul');
            $date->locale('tr'); // Localization işlemi yapıyoruz.
            if ($date >= $now) {
                $diff = $date->diffForHumans($now, ['long' => true, 'parts' => 4]); // Burada mevcut zamandan db'deki zamanı hesaplıyoruz ve ekrana yazdırıyoruz. Eğer bildirimin süresi geçmemişse kalan zamanı ekrana aldık.
                return  $diff;
            }
            else {
                return "Bildirim " . $diff = $date->diffForHumans($now, ['long' => true, 'parts' => 4]) . " sona erdi"; // burada ise eğer süre geçmiş ise şu kadar süre geçmiş diyoruz.
            }
        }

}
