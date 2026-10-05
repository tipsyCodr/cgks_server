<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>छत्तीसगढ़िया क्रान्ति सेना म स्वागत हे</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f5f7; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333333; line-height: 1.6;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f5f7; padding: 25px 10px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08); max-width: 600px;">
                    
                    <!-- Header -->
                    <tr>
                        <td align="center" style="background: linear-gradient(135deg, #b91c1c, #991b1b); padding: 30px 20px; color: #ffffff;">
                            <h1 style="margin: 0 0 8px 0; font-size: 26px; font-weight: bold; letter-spacing: 0.5px;">
                                छत्तीसगढ़िया क्रान्ति सेना
                            </h1>
                            <div style="font-size: 15px; color: #fecaca; margin-bottom: 6px; font-weight: 600;">
                                # जात-पात के करब बिदाई, छत्तीसगढ़िया भाई-भाई
                            </div>
                            <div style="font-size: 13px; color: #fed7aa;">
                                एक संगठित समाज, एक सशक्त छत्तीसगढ़
                            </div>
                        </td>
                    </tr>

                    <!-- Body Content -->
                    <tr>
                        <td style="padding: 30px 25px;">
                            
                            <h2 style="color: #991b1b; font-size: 20px; margin-top: 0; margin-bottom: 12px;">
                                जोहार {{ $user->name }},
                            </h2>

                            <p style="font-size: 15px; color: #4b5563; margin-top: 0;">
                                <strong>छत्तीसगढ़िया क्रान्ति सेना</strong> म आप मन के गाड़ा-गाड़ा स्वागत हे। आप संगठन के सदस्य बनके छत्तीसगढ़ महतारी के सेवा, स्वाभिमान के रक्षा अउ संस्कृति के संरक्षण बर हाथ बढ़ाय हव।
                            </p>

                            <!-- Account Details Box -->
                            <div style="background-color: #fef2f2; border: 1px solid #fee2e2; border-left: 4px solid #dc2626; border-radius: 6px; padding: 18px 20px; margin: 25px 0;">
                                <h3 style="margin: 0 0 12px 0; color: #991b1b; font-size: 16px;">
                                    🔐 आपके अकाउंट एवं सदस्यता जानकारी:
                                </h3>
                                <table width="100%" cellpadding="4" cellspacing="0" style="font-size: 14px; color: #374151;">
                                    <tr>
                                        <td width="130" style="font-weight: bold;">सदस्य के नाम:</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">मोबाइल नंबर:</td>
                                        <td>{{ $user->mobile }}</td>
                                    </tr>
                                    @if(!empty($user->email))
                                    <tr>
                                        <td style="font-weight: bold;">ईमेल:</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    @endif
                                    @if(!empty($user->referral_code))
                                    <tr>
                                        <td style="font-weight: bold;">रेफरल / सदस्यता कोड:</td>
                                        <td><span style="background-color: #dc2626; color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: bold;">{{ $user->referral_code }}</span></td>
                                    </tr>
                                    @endif
                                    @if(!empty($password))
                                    <tr>
                                        <td style="font-weight: bold;">पासवर्ड:</td>
                                        <td><code style="background: #e5e7eb; padding: 2px 6px; border-radius: 4px; font-size: 14px;">{{ $password }}</code></td>
                                    </tr>
                                    @endif
                                </table>
                            </div>

                            <!-- Objectives from Homepage -->
                            <h3 style="color: #1f2937; font-size: 16px; margin: 25px 0 12px 0; border-bottom: 2px solid #fee2e2; padding-bottom: 6px;">
                                🚩 हमर मुख्य उद्देश्य एवं संकल्प:
                            </h3>
                            <ul style="padding-left: 20px; margin: 0; color: #4b5563; font-size: 14px; line-height: 1.8;">
                                <li><strong>माटी अउ अधिकार के रक्षा:</strong> जल, जंगल, जमीन अउ स्थानीय अस्मिता के सशक्त आवाज।</li>
                                <li><strong>एकता अउ भाईचारा:</strong> जात-पात ले ऊपर उठ के सर्व छत्तीसगढ़िया समाज के निर्माण।</li>
                                <li><strong>भाखा अउ संस्कृति:</strong> महतारी भाखा, पुरखा मन के सम्मान अउ संस्कृति के संरक्षण।</li>
                                <li><strong>कार्यक्रम अउ आंदोलन:</strong> आगामी कार्यक्रम, बैठक अउ जनसंपर्क अभियान म सक्रिय सहभागिता।</li>
                            </ul>

                            <!-- App Download Section -->
                            <div style="background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 8px; padding: 20px; text-align: center; margin: 28px 0;">
                                <div style="font-size: 16px; font-weight: bold; color: #111827; margin-bottom: 6px;">
                                    📱 छत्तीसगढ़िया क्रान्ति सेना मोबाइल ऐप
                                </div>
                                <p style="font-size: 13px; color: #6b7280; margin: 0 0 16px 0;">
                                    संगठन के सबो गतिविधि, समाचार, प्रेस विज्ञप्ति अउ सदस्य नेटवर्क से जुड़े रहय बर ऐप डाउनलोड करव।
                                </p>
                                <a href="https://play.google.com/store/apps/details?id=com.pathideamultiskill.cgks" target="_blank" style="display: inline-block; background-color: #dc2626; color: #ffffff; text-decoration: none; padding: 12px 26px; border-radius: 6px; font-weight: bold; font-size: 14px; box-shadow: 0 2px 4px rgba(220,38,38,0.3);">
                                    Google Play Store से डाउनलोड करें
                                </a>
                            </div>

                            <p style="font-size: 14px; color: #6b7280; margin-bottom: 0;">
                                कोनो समस्या या सुझाव खातिर हमर ले संपर्क कर सकत हो।
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color: #1f2937; color: #9ca3af; padding: 22px 20px; font-size: 13px;">
                            <div style="font-size: 15px; font-weight: bold; color: #f3f4f6; margin-bottom: 6px;">
                                जय छत्तीसगढ़ महतारी 🙏
                            </div>
                            <div>
                                छत्तीसगढ़िया क्रान्ति सेना | <a href="{{ config('app.url') }}" style="color: #f87171; text-decoration: none;">{{ config('app.url') }}</a>
                            </div>
                            <div style="font-size: 11px; color: #6b7280; margin-top: 10px;">
                                &copy; {{ date('Y') }} {{ config('app.name') }}. सबो अधिकार सुरक्षित।
                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
