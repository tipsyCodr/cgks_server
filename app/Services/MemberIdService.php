<?php

namespace App\Services;

class MemberIdService
{
    /**
     * Map of district keywords (both English & Hindi) to RTO prefix.
     */
    protected static array $districtMap = [
        // CG04 - Raipur
        'raipur' => 'CG04',
        'रायपुर' => 'CG04',

        // CG05 - Dhamtari
        'dhamtari' => 'CG05',
        'धमतरी' => 'CG05',

        // CG06 - Mahasamund
        'mahasamund' => 'CG06',
        'महासमुन्द' => 'CG06',
        'महासमुंद' => 'CG06',

        // CG07 - Durg
        'durg' => 'CG07',
        'दुर्ग' => 'CG07',

        // CG08 - Rajnandgaon
        'rajnandgaon' => 'CG08',
        'राजनांदगांव' => 'CG08',
        'राजनांदगाँव' => 'CG08',

        // CG09 - Kabirdham / Kawardha
        'kabirdham' => 'CG09',
        'kawardha' => 'CG09',
        'कबीरधाम' => 'CG09',
        'कवर्धा' => 'CG09',

        // CG10 - Bilaspur
        'bilaspur' => 'CG10',
        'बिलासपुर' => 'CG10',

        // CG11 - Janjgir-Champa
        'janjgir' => 'CG11',
        'champa' => 'CG11',
        'janjgir-champa' => 'CG11',
        'जांजगीर' => 'CG11',
        'चांपा' => 'CG11',
        'जांजगीर-चांपा' => 'CG11',
        'जांजगीर-चाम्पा' => 'CG11',

        // CG12 - Korba
        'korba' => 'CG12',
        'कोरबा' => 'CG12',

        // CG13 - Raigarh
        'raigarh' => 'CG13',
        'रायगढ़' => 'CG13',
        'रायगढ़' => 'CG13',

        // CG14 - Jashpur
        'jashpur' => 'CG14',
        'जशपुर' => 'CG14',

        // CG15 - Ambikapur / Surguja
        'ambikapur' => 'CG15',
        'surguja' => 'CG15',
        'अंबिकापुर' => 'CG15',
        'अम्बिकापुर' => 'CG15',
        'सरगुजा' => 'CG15',

        // CG16 - Baikunthpur / Koriya
        'baikunthpur' => 'CG16',
        'koriya' => 'CG16',
        'बैकुंठपुर' => 'CG16',
        'कोरिया' => 'CG16',

        // CG17 - Jagdalpur / Bastar
        'jagdalpur' => 'CG17',
        'bastar' => 'CG17',
        'जगदलपुर' => 'CG17',
        'बस्तर' => 'CG17',

        // CG18 - Dantewada
        'dantewada' => 'CG18',
        'दंतेवाड़ा' => 'CG18',
        'दंतेवाड़ा' => 'CG18',

        // CG19 - Kanker
        'kanker' => 'CG19',
        'कांकेर' => 'CG19',

        // CG20 - Bijapur
        'bijapur' => 'CG20',
        'बीजापुर' => 'CG20',

        // CG21 - Narayanpur
        'narayanpur' => 'CG21',
        'नारायणपुर' => 'CG21',

        // CG22 - Balodabazar
        'balodabazar' => 'CG22',
        'baloda bazar' => 'CG22',
        'बलौदाबाजार' => 'CG22',
        'बलौदाबाज़ार' => 'CG22',

        // CG23 - Gariyaband
        'gariyaband' => 'CG23',
        'गरियाबंद' => 'CG23',

        // CG24 - Balod
        'balod' => 'CG24',
        'बालोद' => 'CG24',

        // CG25 - Bemetara
        'bemetara' => 'CG25',
        'बेमेतरा' => 'CG25',

        // CG26 - Sukma
        'sukma' => 'CG26',
        'सुकमा' => 'CG26',

        // CG27 - Kondagaon
        'kondagaon' => 'CG27',
        'कोंडागांव' => 'CG27',
        'कोंडागाँव' => 'CG27',

        // CG28 - Mungeli
        'mungeli' => 'CG28',
        'मुंगेली' => 'CG28',

        // CG29 - Surajpur
        'surajpur' => 'CG29',
        'सूरजपुर' => 'CG29',

        // CG30 - Balrampur
        'balrampur' => 'CG30',
        'बलरामपुर' => 'CG30',

        // CG31 - Gaurela-Pendra-Marwahi
        'gaurela' => 'CG31',
        'pendra' => 'CG31',
        'marwahi' => 'CG31',
        'gpm' => 'CG31',
        'gaurela-pendra-marwahi' => 'CG31',
        'गौरेला' => 'CG31',
        'पेंड्रा' => 'CG31',
        'मरवाही' => 'CG31',
        'गौरेला-पेंड्रा-मरवाही' => 'CG31',
    ];

    /**
     * Get RTO prefix for a district name. Fallback is CG04.
     */
    public static function getPrefix(?string $district): string
    {
        if (empty($district)) {
            return 'CG04';
        }

        $normalized = mb_strtolower(trim($district));

        if (isset(self::$districtMap[$normalized])) {
            return self::$districtMap[$normalized];
        }

        foreach (self::$districtMap as $key => $prefix) {
            if (mb_strpos($normalized, $key) !== false || mb_strpos($key, $normalized) !== false) {
                return $prefix;
            }
        }

        return 'CG04';
    }

    /**
     * Generate member ID using district and user ID.
     * E.g. CG070001, CG071234
     */
    public static function generate(?string $district, int $userId): string
    {
        $prefix = self::getPrefix($district);
        $padded = str_pad((string)$userId, 4, '0', STR_PAD_LEFT);
        return $prefix . $padded;
    }
}
