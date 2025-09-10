<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VisitorRegistered extends Notification
{
    use Queueable;
    protected $visitor;

    /**
     * Create a new notification instance.
     */
    public function __construct($visitor)
    {
        $this->visitor = $visitor;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('📣 बने के निहोरा हे!')
            ->line('आप मन ला आमंत्रित करत हन CBN - छत्तीसगढ़ बिजनेस नेटवर्क के एक खास मीटिंग म, जिहां व्यवसायी मन मिलथें, सींखथें अउ एक दूसर ला मदद करथें।')
            // ->line('🗓 तारीख: [तारीख डारव]')
            // ->line('🕘 टाइम: [टाइम डारव]')
            // ->line('📍 जगह: [जगह डारव]')
            // ->line('💰 फीस: ₹500 (नास्ता समेते)')
            ->line('ए मीटिंग म आप मन ला मिलही:')
            ->line('✅ दूसर व्यवसायी संग जान-पहिचान')
            ->line('✅ अपन व्यवसाय के प्रस्तुती के मौका')
            ->line('✅ रेफरल ले व्यापार बढ़ाय के तरीका')
            ->line('✅ नवा बात सींखे के मौका')
            ->line('सीट सीमित हे!')
            // ->line('कृपा करके अपन आवक के पक्का जानकारी देवव – [मोबाइल नंबर डारव] म कॉल करके या एही मेसेज म रिप्लाय करके।')
            ->line('CBN – लोकल व्यापार, सबले मजबूत संग')
            ->line('चलव, अपन छत्तीसगढ़ के व्यवसाय ला एक संगे आगे बढ़ावन।');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
