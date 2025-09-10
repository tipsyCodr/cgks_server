<?php

namespace App\Services;

use App\Models\Notification;
use App\Models\Referral;
use App\Models\ThankYou;
use App\Models\OneToOne;
use App\Models\User;

class NotificationService
{
    /**
     * Create a notification for a new referral
     */
    public static function createReferralNotification(Referral $referral)
    {
        try {
            // Get sender and recipient user details
            $sender = User::find($referral->from);
            $recipient = User::find($referral->to);
            
            if (!$sender || !$recipient) {
                \Log::error('Failed to create referral notification: User not found', [
                    'referral_id' => $referral->id,
                    'from' => $referral->from,
                    'to' => $referral->to
                ]);
                return false;
            }
            
            // Create notification
            $notification = new Notification();
            $notification->from = $referral->from;
            $notification->to = $referral->to;
            $notification->type = 'referral';
            $notification->related_id = $referral->id;
            $notification->title = 'New Referral Received';
            $notification->message = "{$sender->name} has sent you a new referral for {$referral->referral_contact_name}.";
            $notification->read = false;
            $notification->cleared = false;
            $notification->save();
            
            return true;
        } catch (\Exception $e) {
            \Log::error('Failed to create referral notification: ' . $e->getMessage(), [
                'referral_id' => $referral->id ?? null
            ]);
            return false;
        }
    }
    
    /**
     * Create a notification for a new thank you
     */
    public static function createThankYouNotification(ThankYou $thankYou)
    {
        try {
            // Get sender and recipient user details
            $sender = User::find($thankYou->from);
            $recipient = User::find($thankYou->to);
            
            if (!$sender || !$recipient) {
                \Log::error('Failed to create thank you notification: User not found', [
                    'thank_you_id' => $thankYou->id,
                    'from' => $thankYou->from,
                    'to' => $thankYou->to
                ]);
                return false;
            }
            
            // Format the amount
            $amount = number_format($thankYou->amount, 2);
            
            // Create notification
            $notification = new Notification();
            $notification->from = $thankYou->from;
            $notification->to = $thankYou->to;
            $notification->type = 'tyfcb';
            $notification->related_id = $thankYou->id;
            $notification->title = 'New Thank You Received';
            $notification->message = "{$sender->name} has sent you a thank you of ₹{$amount} for {$thankYou->business_type} business.";
            $notification->read = false;
            $notification->cleared = false;
            $notification->save();
            
            return true;
        } catch (\Exception $e) {
            \Log::error('Failed to create thank you notification: ' . $e->getMessage(), [
                'thank_you_id' => $thankYou->id ?? null
            ]);
            return false;
        }
    }
    
    /**
     * Create a notification for a new one-to-one meeting
     */
    public static function createOneToOneNotification(OneToOne $oneToOne)
    {
        try {
            // Get sender and recipient user details
            $sender = User::find($oneToOne->user_id);
            $recipient = User::find($oneToOne->met_with);
            
            if (!$sender || !$recipient) {
                \Log::error('Failed to create one-to-one notification: User not found', [
                    'one_to_one_id' => $oneToOne->id,
                    'from' => $oneToOne->user_id,
                    'to' => $oneToOne->met_with
                ]);
                return false;
            }
            
            // Format meeting date
            $meetingDate = date('j M Y', strtotime($oneToOne->meeting_date));
            
            // Create notification
            $notification = new Notification();
            $notification->from = $oneToOne->user_id;
            $notification->to = $oneToOne->met_with;
            $notification->type = 'oto';
            $notification->related_id = $oneToOne->id;
            $notification->title = 'New One-to-One Meeting Request';
            $notification->message = "{$sender->name} has scheduled a one-to-one meeting with you on {$meetingDate}.";
            $notification->read = false;
            $notification->cleared = false;
            $notification->save();
            
            return true;
        } catch (\Exception $e) {
            \Log::error('Failed to create one-to-one notification: ' . $e->getMessage(), [
                'one_to_one_id' => $oneToOne->id ?? null
            ]);
            return false;
        }
    }
} 