<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MemberJoined extends Notification
{
    use Queueable;
    protected $user;
    protected $un_en_password;

    /**
     * Create a new notification instance.
     */
    public function __construct($user, $un_en_password)
    {
        $this->user = $user;
        $this->un_en_password = $un_en_password;
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
            ->line('📲 CBN जुड़ाव – मोबाइल ऐप और वेब लॉगिन जानकारी')
            ->line('नमस्कार CBN सदस्य,')
            ->line('आपके नेटवर्किंग अनुभव ला अउ बेहतर बनाय बर, हम लांच करे हन CBN जुड़ाव मोबाइल ऐप और वेब पोर्टल – जिहां आप अपन व्यवसाय प्रोफाइल, रेफरल, मीटिंग जानकारी अउ नेटवर्क म सदस्य मन के जानकारी एक जगह देख सकथो।')
            ->line('👉 मोबाइल ऐप डाउनलोड करें:')
            ->line('📱 CBN जुड़ाव App')
            ->action('🔗Google Play Store लिंक डारव', url('https://play.google.com/store/apps/details?id=com.cbn.app'))
            ->line('(जल्द ही iOS वर्जन घलो आवत हे)')
            ->line('🔐 लॉगिन डिटेल्स:')
            ->line('👤 यूज़रनेम: ' . $notifiable->email)
            ->line('🔑 पासवर्ड: ' . $this->un_en_password)
            ->line('📌 लॉगिन करके आप कर सकथो:')
            ->line('✅ प्रोफाइल अपडेट')
            ->line('✅ रेफरल भेजना और ट्रैक करना')
            ->line('✅ मीटिंग अपडेट और अलर्ट देखना')
            ->line('✅ दूसर सदस्य संग डायरेक्ट संपर्क');
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
