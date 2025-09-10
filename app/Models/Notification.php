<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'referral_history';
    
    protected $fillable = [
        'from',
        'to',
        'type',
        'related_id',
        'title',
        'message',
        'read',
        'cleared'
    ];
    
    protected $casts = [
        'read' => 'boolean',
        'cleared' => 'boolean',
    ];
    
    /**
     * Get the user who sent the notification
     */
    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from');
    }
    
    /**
     * Get the user who received the notification
     */
    public function toUser()
    {
        return $this->belongsTo(User::class, 'to');
    }
    
    /**
     * Get the related record based on notification type
     */
    public function relatedRecord()
    {
        return match($this->type) {
            'referral' => $this->belongsTo(Referral::class, 'related_id'),
            'tyfcb' => $this->belongsTo(ThankYou::class, 'related_id'),
            'oto' => $this->belongsTo(OneToOne::class, 'related_id'),
            default => null,
        };
    }
} 