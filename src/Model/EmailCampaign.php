<?php

namespace benlehr\MailTracker\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use benlehr\MailTracker\Model\SentEmail;

class EmailCampaign extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'date',
        'password',
        'opening_rate',
        'emails_send',
        'emails_opened',
    ];


    public function emails()
    {
        return $this->hasMany(SentEmail::class, 'campaign_id', 'id');
    }

}
