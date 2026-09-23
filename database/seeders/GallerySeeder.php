<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryPhoto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $albums = array (
  0 => 
  array (
    'id' => 2,
    'title' => 'जबर गोहार लोगो Jabar gohar logo',
    'cover_image' => '1458570355.jpg',
    'post_date' => '21-Mar-2016',
    'photos_count' => 0,
  ),
  1 => 
  array (
    'id' => 3,
    'title' => 'Cks logo',
    'cover_image' => '1458571373.jpg',
    'post_date' => '21-Mar-2016',
    'photos_count' => 0,
  ),
  2 => 
  array (
    'id' => 4,
    'title' => 'जबर गोहर बसना 30 जन&#2',
    'cover_image' => '1485877746134.jpg',
    'post_date' => '31-Jan-2017',
    'photos_count' => 0,
  ),
  3 => 
  array (
    'id' => 5,
    'title' => 'जबर गोहर बसना 30 जन&#2',
    'cover_image' => '1485877924137.jpg',
    'post_date' => '31-Jan-2017',
    'photos_count' => 0,
  ),
  4 => 
  array (
    'id' => 6,
    'title' => 'जबर गोहर बसना 30 जन&#2',
    'cover_image' => '1485877937150.jpg',
    'post_date' => '31-Jan-2017',
    'photos_count' => 0,
  ),
  5 => 
  array (
    'id' => 7,
    'title' => 'जबर गोहर बसना 30 जन&#2',
    'cover_image' => '1485877950160.jpg',
    'post_date' => '31-Jan-2017',
    'photos_count' => 0,
  ),
  6 => 
  array (
    'id' => 8,
    'title' => 'जबर गोहर बसना 30 जन&#2',
    'cover_image' => '1485877980165.jpg',
    'post_date' => '31-Jan-2017',
    'photos_count' => 0,
  ),
  7 => 
  array (
    'id' => 9,
    'title' => 'जबर गोहर बसना 30 जन&#2',
    'cover_image' => '1485877992163.jpg',
    'post_date' => '31-Jan-2017',
    'photos_count' => 0,
  ),
  8 => 
  array (
    'id' => 12,
    'title' => 'दिनांकः१४ फ़रवरी २०१७ को छत्तीसगढ़िया क्रान्ति सेना ने प्रख्यात पंडवानी गायक पद्मश्री पूनाराम निषाद जी को दिया श्रद्धांजलि',
    'cover_image' => '14880048860170214-WA0034.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  9 => 
  array (
    'id' => 13,
    'title' => 'दिनांकः१४ फ़रवरी २०१७ को छत्तीसगढ़िया क्रान्ति सेना ने प्रख्यात पंडवानी गायक पद्मश्री पूनाराम निषाद जी को दिया श्रद्धांजलि',
    'cover_image' => '1488004907843_389668091392232_5755652026835029393_n.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  10 => 
  array (
    'id' => 14,
    'title' => 'दिनांकः१४ फ़रवरी २०१७ को छत्तीसगढ़िया क्रान्ति सेना ने प्रख्यात पंडवानी गायक पद्मश्री पूनाराम निषाद जी को दिया श्रद्धांजलि',
    'cover_image' => '14880049430170214-WA0033.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  11 => 
  array (
    'id' => 15,
    'title' => 'गैलरी 15',
    'cover_image' => '1488005940nshot_2017-02-25-12-23-16.png',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  12 => 
  array (
    'id' => 16,
    'title' => 'गैलरी 16',
    'cover_image' => '14880064290170222-WA0008.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  13 => 
  array (
    'id' => 17,
    'title' => 'गैलरी 17',
    'cover_image' => '14880064890170222-WA0014.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  14 => 
  array (
    'id' => 18,
    'title' => '३० जनवरी २०१७: जबर गोहार बसना',
    'cover_image' => '1488006712626_632300686972819_3396922278145375093_n.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  15 => 
  array (
    'id' => 19,
    'title' => '३० जनवरी २०१७: जबर गोहार बसना',
    'cover_image' => '1488006999161_260771707691288_4342991187839854004_o.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  16 => 
  array (
    'id' => 20,
    'title' => '३० जनवरी २०१७: जबर गोहार बसना',
    'cover_image' => '1488007062452_1233810656674120_8710151254233771264_o.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  17 => 
  array (
    'id' => 21,
    'title' => '३० जनवरी २०१७: जबर गोहार बसना',
    'cover_image' => '1488007180256_397571607301784_1214823157991127485_o.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  18 => 
  array (
    'id' => 22,
    'title' => '३० जनवरी २०१७: जबर गोहार बसना',
    'cover_image' => '1488007235947_1389186407789812_2774939512851906012_o.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  19 => 
  array (
    'id' => 23,
    'title' => '३० जनवरी २०१७: जबर गोहार बसना',
    'cover_image' => '1488007392845_1389186127789840_852909534016945197_o.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  20 => 
  array (
    'id' => 24,
    'title' => 'छत्तीसगढ़ महतारी चौक',
    'cover_image' => '14880418450170225-WA0018.jpg',
    'post_date' => '25-Feb-2017',
    'photos_count' => 0,
  ),
  21 => 
  array (
    'id' => 25,
    'title' => 'छत्तीसगढ़िया क्रान्ति सेना के जनजागरूकता अभियान महतारी भाखा छत्तीसगढ़ी म लिखबो, पढ़बो, गोठियाबो अउ बगराबो के उदिम: 26 फ़रवरी 2017',
    'cover_image' => '14880985150170226_122856_365.jpg',
    'post_date' => '26-Feb-2017',
    'photos_count' => 0,
  ),
  22 => 
  array (
    'id' => 26,
    'title' => 'छत्तीसगढ़िया क्रान्ति सेना के जनजागरूकता अभियान महतारी भाखा छत्तीसगढ़ी म लिखबो, पढ़बो, गोठियाबो अउ बगराबो के उदिम: 26 फ़रवरी 2017',
    'cover_image' => '14880985710170226_123027_186.jpg',
    'post_date' => '26-Feb-2017',
    'photos_count' => 0,
  ),
  23 => 
  array (
    'id' => 27,
    'title' => 'गोठियाबो-लिखबो-पढ़बो- \\"छत्तीसगढ़ी\\" सिविक सेक्टर भिलाई २६ मार्च २०१७',
    'cover_image' => '1490506789328_10208056178115358_7474618114145728416_n.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  24 => 
  array (
    'id' => 28,
    'title' => 'गोठियाबो-लिखबो-पढ़बो- \\"छत्तीसगढ़ी\\" सिविक सेक्टर भिलाई २६ मार्च २०१७',
    'cover_image' => '1490506817364_10208056178235361_2312403622915652564_n.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  25 => 
  array (
    'id' => 29,
    'title' => 'गोठियाबो-लिखबो-पढ़बो- \\"छत्तीसगढ़ी\\" सिविक सेक्टर भिलाई २६ मार्च २०१७',
    'cover_image' => '1490506835169_10208056180075407_3143547282864700312_n.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  26 => 
  array (
    'id' => 30,
    'title' => '23 March at 10:51 ·',
    'cover_image' => '1490507227096_680615775474643_3242944571890938925_n.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  27 => 
  array (
    'id' => 31,
    'title' => 'जयलाल राठिया के सम्मान म छत्तीसगढ़िया क्रांति सेना मैदान म',
    'cover_image' => '1490507267087_680615742141313_6867937480169280097_n.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  28 => 
  array (
    'id' => 32,
    'title' => 'गोठियाबो-लिखबो-पढ़बो- \\"छत्तीसगढ़ी\\" राम नगर गुढ़ियारी रायपुर २६ मार्च २०१७',
    'cover_image' => '1490507908299_1285741778147674_7579591531357629393_n.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  29 => 
  array (
    'id' => 33,
    'title' => 'गोठियाबो-लिखबो-पढ़बो- \\"छत्तीसगढ़ी\\" राम नगर गुढ़ियारी रायपुर २६ मार्च २०१७',
    'cover_image' => '1490507937405_1285741854814333_2446441774174237612_n.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  30 => 
  array (
    'id' => 34,
    'title' => 'गोठियाबो-लिखबो-पढ़बो-',
    'cover_image' => '1490507965674_1285741834814335_3703544401678882354_n.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  31 => 
  array (
    'id' => 35,
    'title' => 'विज्ञप्ति : छत्तीसगढ़िया महिला क्रान्ति सेना ने विधानसभा में छत्तीसगढ़ी भाषा के लिये मुख्यमंत्री को दिया ज्ञापन २१ मार्च २०१७',
    'cover_image' => '1490510180702.JPG',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  32 => 
  array (
    'id' => 36,
    'title' => 'विज्ञप्ति : छत्तीसगढ़िया महिला क्रान्ति सेना ने विधानसभा में छत्तीसगढ़ी भाषा के लिये मुख्यमंत्री को दिया ज्ञापन २१ मार्च २०१७',
    'cover_image' => '1490510208057_1129528297157870_233704070387969220_o.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  33 => 
  array (
    'id' => 37,
    'title' => 'विज्ञप्ति : छत्तीसगढ़िया महिला क्रान्ति सेना ने विधानसभा में छत्तीसगढ़ी भाषा के लिये मुख्यमंत्री को दिया ज्ञापन २१ मार्च २०१७',
    'cover_image' => '1490510246.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  34 => 
  array (
    'id' => 38,
    'title' => 'विज्ञप्ति : छत्तीसगढ़िया महिला क्रान्ति सेना ने विधानसभा में छत्तीसगढ़ी भाषा के लिये मुख्यमंत्री को दिया ज्ञापन २१ मार्च २०१७',
    'cover_image' => '1490510284.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  35 => 
  array (
    'id' => 39,
    'title' => 'विज्ञप्ति : छत्तीसगढ़िया महिला क्रान्ति सेना ने विधानसभा में छत्तीसगढ़ी भाषा के लिये मुख्यमंत्री को दिया ज्ञापन २१ मार्च २०१७',
    'cover_image' => '1490510317.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  36 => 
  array (
    'id' => 40,
    'title' => 'विज्ञप्ति : छत्तीसगढ़िया महिला क्रान्ति सेना ने विधानसभा में छत्तीसगढ़ी भाषा के लिये मुख्यमंत्री को दिया ज्ञापन २१ मार्च २०१७',
    'cover_image' => '1490510348.jpg',
    'post_date' => '26-Mar-2017',
    'photos_count' => 0,
  ),
  37 => 
  array (
    'id' => 41,
    'title' => '1 August 2017',
    'cover_image' => '1501256594st_cks.jpg',
    'post_date' => '28-Jul-2017',
    'photos_count' => 0,
  ),
  38 => 
  array (
    'id' => 42,
    'title' => 'भाठापारा',
    'cover_image' => '1505060886para_CKS_1st_baithak.jpg',
    'post_date' => '10-Sep-2017',
    'photos_count' => 0,
  ),
  39 => 
  array (
    'id' => 44,
    'title' => 'भाठापारा कार्यरिणी गठित',
    'cover_image' => '1505103011G_15051028082091593.jpg',
    'post_date' => '11-Sep-2017',
    'photos_count' => 0,
  ),
  40 => 
  array (
    'id' => 45,
    'title' => 'devari tihar',
    'cover_image' => '1508475383ewari.jpg',
    'post_date' => '20-Oct-2017',
    'photos_count' => 0,
  ),
  41 => 
  array (
    'id' => 46,
    'title' => 'Kranti Sena',
    'cover_image' => '1537694619atter_head_1_-_Copy.jpg',
    'post_date' => '23-Sep-2018',
    'photos_count' => 0,
  ),
  42 => 
  array (
    'id' => 47,
    'title' => 'Kranti Sena',
    'cover_image' => '1574863010.JPG',
    'post_date' => '23-Sep-2018',
    'photos_count' => 0,
  ),
  43 => 
  array (
    'id' => 48,
    'title' => 'Hareli 2017',
    'cover_image' => '1574860167.JPG',
    'post_date' => '23-Sep-2018',
    'photos_count' => 6,
  ),
  44 => 
  array (
    'id' => 49,
    'title' => 'Hareli',
    'cover_image' => '1574859167.JPG',
    'post_date' => '27-Nov-2019',
    'photos_count' => 46,
  ),
  45 => 
  array (
    'id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'cover_image' => '161726842684130768.jpg',
    'post_date' => '14-4-2017',
    'photos_count' => 36,
  ),
  46 => 
  array (
    'id' => 51,
    'title' => 'Jabar Gohar Devi Iron 2017',
    'cover_image' => '161726939286312450.jpg',
    'post_date' => '1-8-2017',
    'photos_count' => 9,
  ),
  47 => 
  array (
    'id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'cover_image' => '1617275286066.jpg',
    'post_date' => '3-7-2018',
    'photos_count' => 95,
  ),
  48 => 
  array (
    'id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'cover_image' => '1617277888007.jpg',
    'post_date' => '16-7-2017',
    'photos_count' => 100,
  ),
  49 => 
  array (
    'id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'cover_image' => '1617282403415.jpg',
    'post_date' => '24-6-2017',
    'photos_count' => 40,
  ),
  50 => 
  array (
    'id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'cover_image' => '16172836750170214_185528.jpg',
    'post_date' => '3-10-2019',
    'photos_count' => 18,
  ),
  51 => 
  array (
    'id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'cover_image' => '1617285720296.jpg',
    'post_date' => '1-1-2018',
    'photos_count' => 20,
  ),
  52 => 
  array (
    'id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'cover_image' => '1617346187022.jpg',
    'post_date' => '7-10-2017',
    'photos_count' => 29,
  ),
  53 => 
  array (
    'id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'cover_image' => '1617352934002.jpg',
    'post_date' => '24-6-2017',
    'photos_count' => 12,
  ),
  54 => 
  array (
    'id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'cover_image' => '1617623155027.jpg',
    'post_date' => '22-12-2017',
    'photos_count' => 21,
  ),
  55 => 
  array (
    'id' => 60,
    'title' => 'Rajim CKS 2017',
    'cover_image' => '1617623579304.jpg',
    'post_date' => '21-5-2017',
    'photos_count' => 41,
  ),
  56 => 
  array (
    'id' => 61,
    'title' => 'Meeting CKS 2017',
    'cover_image' => '1617625107042.jpg',
    'post_date' => '19-12-2017',
    'photos_count' => 34,
  ),
  57 => 
  array (
    'id' => 62,
    'title' => 'GRS CKS 2017',
    'cover_image' => '1617628077337.jpg',
    'post_date' => '14-9-2017',
    'photos_count' => 19,
  ),
  58 => 
  array (
    'id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'cover_image' => '1617628502014.jpg',
    'post_date' => '10-9-2017',
    'photos_count' => 21,
  ),
  59 => 
  array (
    'id' => 64,
    'title' => 'Jabar Hareli 2017',
    'cover_image' => '1617628987460.jpg',
    'post_date' => '18-7-2017',
    'photos_count' => 49,
  ),
  60 => 
  array (
    'id' => 65,
    'title' => 'CKS Hareli 2017',
    'cover_image' => '1617793388952.jpg',
    'post_date' => '1-1-2017',
    'photos_count' => 20,
  ),
  61 => 
  array (
    'id' => 66,
    'title' => 'Chhattisgadhi Taffari',
    'cover_image' => '1617794209048.jpg',
    'post_date' => '2-4-2017',
    'photos_count' => 15,
  ),
  62 => 
  array (
    'id' => 67,
    'title' => 'Balodabazar-2017',
    'cover_image' => '1617795011216.jpg',
    'post_date' => '14-5-2017',
    'photos_count' => 26,
  ),
  63 => 
  array (
    'id' => 68,
    'title' => 'Rajim CKS-2017',
    'cover_image' => '1617795977243.jpg',
    'post_date' => '26-5-2017',
    'photos_count' => 20,
  ),
  64 => 
  array (
    'id' => 69,
    'title' => '#Save Bastar',
    'cover_image' => '1622274195.jpg',
    'post_date' => '2021-05-29',
    'photos_count' => 8,
  ),
  65 => 
  array (
    'id' => 70,
    'title' => 'भीष्म पितामह दाऊ दुलार सिंह साव  मंदराजी',
    'cover_image' => '1632491207.jpg',
    'post_date' => '2021-09-24',
    'photos_count' => 0,
  ),
  66 => 
  array (
    'id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना जेल जाबो आंदोलन 2021',
    'cover_image' => '1632982597.jpg',
    'post_date' => '2021-09-30',
    'photos_count' => 13,
  ),
  67 => 
  array (
    'id' => 72,
    'title' => '\\"जबर परचार\\" रइपुर चलव ,रइपुर चलव,रइपुर चलव  2 अक्टूबर जबर जेल भरो',
    'cover_image' => '1633068996.jpg',
    'post_date' => '2021-10-01',
    'photos_count' => 14,
  ),
  68 => 
  array (
    'id' => 73,
    'title' => '\\"छत्तीसगढ़िया क्रान्ति सेना\\" रइपुर राजधानी में 2 अक्टूबर के हजारो के जन सैलाब में करिन जेल जाबो आंदोलन',
    'cover_image' => '1633341548.jpg',
    'post_date' => '2021-10-04',
    'photos_count' => 1,
  ),
  69 => 
  array (
    'id' => 74,
    'title' => 'छत्तीसगढ़िया वाणिज्य एवम उद्योग महासंघ   देवारी नेवता',
    'cover_image' => '1636542106.jpg',
    'post_date' => '2021-11-10',
    'photos_count' => 4,
  ),
  70 => 
  array (
    'id' => 76,
    'title' => 'हमर छत्तीसगढ़िया ब्यापारी भाई विनय साहू जी आर. एस. होन्डा. सेजबहार के संचालक',
    'cover_image' => '1637997107.jpg',
    'post_date' => '2021-11-27',
    'photos_count' => 2,
  ),
  71 => 
  array (
    'id' => 77,
    'title' => 'अभनपुर ब्लाक के ग्राम खोरपा मे आज दिनांक 28.11.2021  के जबर सदस्य्ता अभियान चलाय गिस ।  जोहार छत्तीसगढ़',
    'cover_image' => '1638167477.jpg',
    'post_date' => '2021-11-29',
    'photos_count' => 3,
  ),
  72 => 
  array (
    'id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प.',
    'cover_image' => '1681036147.jpeg',
    'post_date' => '2023-04-09',
    'photos_count' => 17,
  ),
  73 => 
  array (
    'id' => 80,
    'title' => 'CG',
    'cover_image' => '1697734344222.jpeg',
    'post_date' => '2023-10-19',
    'photos_count' => 1,
  ),
);
        $photos = array (
  0 => 
  array (
    'id' => 17,
    'gallery_id' => 48,
    'title' => 'Hareli 2017',
    'image' => '15748620196.JPG',
    'thumb' => 'r_15748620196.JPG',
  ),
  1 => 
  array (
    'id' => 16,
    'gallery_id' => 48,
    'title' => 'Hareli 2017',
    'image' => '15748613175.JPG',
    'thumb' => 'r_15748613175.JPG',
  ),
  2 => 
  array (
    'id' => 14,
    'gallery_id' => 48,
    'title' => 'Hareli 2017',
    'image' => '15748606322.JPG',
    'thumb' => 'r_15748606322.JPG',
  ),
  3 => 
  array (
    'id' => 15,
    'gallery_id' => 48,
    'title' => 'Hareli 2017',
    'image' => '15748606923.JPG',
    'thumb' => 'r_15748606923.JPG',
  ),
  4 => 
  array (
    'id' => 20,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0363.jpg',
    'thumb' => 'r_1617263899DSC_0363.jpg',
  ),
  5 => 
  array (
    'id' => 21,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0377.jpg',
    'thumb' => 'r_1617263899DSC_0377.jpg',
  ),
  6 => 
  array (
    'id' => 22,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0397.jpg',
    'thumb' => 'r_1617263899DSC_0397.jpg',
  ),
  7 => 
  array (
    'id' => 23,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0398.jpg',
    'thumb' => 'r_1617263899DSC_0398.jpg',
  ),
  8 => 
  array (
    'id' => 24,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0401.jpg',
    'thumb' => 'r_1617263899DSC_0401.jpg',
  ),
  9 => 
  array (
    'id' => 25,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0407.jpg',
    'thumb' => 'r_1617263899DSC_0407.jpg',
  ),
  10 => 
  array (
    'id' => 26,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0408.jpg',
    'thumb' => 'r_1617263899DSC_0408.jpg',
  ),
  11 => 
  array (
    'id' => 18,
    'gallery_id' => 48,
    'title' => 'Hareli 2017',
    'image' => '15748622537.JPG',
    'thumb' => 'r_15748622537.JPG',
  ),
  12 => 
  array (
    'id' => 19,
    'gallery_id' => 48,
    'title' => 'Hareli 2017',
    'image' => '15748624618.JPG',
    'thumb' => 'r_15748624618.JPG',
  ),
  13 => 
  array (
    'id' => 27,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0415.jpg',
    'thumb' => 'r_1617263899DSC_0415.jpg',
  ),
  14 => 
  array (
    'id' => 28,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0418.jpg',
    'thumb' => 'r_1617263899DSC_0418.jpg',
  ),
  15 => 
  array (
    'id' => 29,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617263899DSC_0423.jpg',
    'thumb' => 'r_1617263899DSC_0423.jpg',
  ),
  16 => 
  array (
    'id' => 30,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0455.jpg',
    'thumb' => 'r_1617265571DSC_0455.jpg',
  ),
  17 => 
  array (
    'id' => 31,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0459.jpg',
    'thumb' => 'r_1617265571DSC_0459.jpg',
  ),
  18 => 
  array (
    'id' => 32,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0461.jpg',
    'thumb' => 'r_1617265571DSC_0461.jpg',
  ),
  19 => 
  array (
    'id' => 33,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0474.jpg',
    'thumb' => 'r_1617265571DSC_0474.jpg',
  ),
  20 => 
  array (
    'id' => 34,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0479.jpg',
    'thumb' => 'r_1617265571DSC_0479.jpg',
  ),
  21 => 
  array (
    'id' => 35,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0497.jpg',
    'thumb' => 'r_1617265571DSC_0497.jpg',
  ),
  22 => 
  array (
    'id' => 36,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0504.jpg',
    'thumb' => 'r_1617265571DSC_0504.jpg',
  ),
  23 => 
  array (
    'id' => 37,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0508.jpg',
    'thumb' => 'r_1617265571DSC_0508.jpg',
  ),
  24 => 
  array (
    'id' => 38,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0514.jpg',
    'thumb' => 'r_1617265571DSC_0514.jpg',
  ),
  25 => 
  array (
    'id' => 39,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617265571DSC_0518.jpg',
    'thumb' => 'r_1617265571DSC_0518.jpg',
  ),
  26 => 
  array (
    'id' => 40,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0533.jpg',
    'thumb' => 'r_1617266916DSC_0533.jpg',
  ),
  27 => 
  array (
    'id' => 41,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0537.jpg',
    'thumb' => 'r_1617266916DSC_0537.jpg',
  ),
  28 => 
  array (
    'id' => 42,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0540.jpg',
    'thumb' => 'r_1617266916DSC_0540.jpg',
  ),
  29 => 
  array (
    'id' => 43,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0575.jpg',
    'thumb' => 'r_1617266916DSC_0575.jpg',
  ),
  30 => 
  array (
    'id' => 44,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0577.jpg',
    'thumb' => 'r_1617266916DSC_0577.jpg',
  ),
  31 => 
  array (
    'id' => 45,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0579.jpg',
    'thumb' => 'r_1617266916DSC_0579.jpg',
  ),
  32 => 
  array (
    'id' => 46,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0583.jpg',
    'thumb' => 'r_1617266916DSC_0583.jpg',
  ),
  33 => 
  array (
    'id' => 47,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0596.jpg',
    'thumb' => 'r_1617266916DSC_0596.jpg',
  ),
  34 => 
  array (
    'id' => 48,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0623.jpg',
    'thumb' => 'r_1617266916DSC_0623.jpg',
  ),
  35 => 
  array (
    'id' => 49,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617266916DSC_0628.jpg',
    'thumb' => 'r_1617266916DSC_0628.jpg',
  ),
  36 => 
  array (
    'id' => 50,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '16172669160DSC_0645.jpg',
    'thumb' => 'r_16172669160DSC_0645.jpg',
  ),
  37 => 
  array (
    'id' => 51,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '16172669161DSC_0678.jpg',
    'thumb' => 'r_16172669161DSC_0678.jpg',
  ),
  38 => 
  array (
    'id' => 52,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '16172669162DSC_0680.jpg',
    'thumb' => 'r_16172669162DSC_0680.jpg',
  ),
  39 => 
  array (
    'id' => 53,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0673.jpg',
    'thumb' => 'r_1617267437DSC_0673.jpg',
  ),
  40 => 
  array (
    'id' => 54,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0697.jpg',
    'thumb' => 'r_1617267437DSC_0697.jpg',
  ),
  41 => 
  array (
    'id' => 55,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0724.jpg',
    'thumb' => 'r_1617267437DSC_0724.jpg',
  ),
  42 => 
  array (
    'id' => 56,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0726.jpg',
    'thumb' => 'r_1617267437DSC_0726.jpg',
  ),
  43 => 
  array (
    'id' => 57,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0734.jpg',
    'thumb' => 'r_1617267437DSC_0734.jpg',
  ),
  44 => 
  array (
    'id' => 58,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0766.jpg',
    'thumb' => 'r_1617267437DSC_0766.jpg',
  ),
  45 => 
  array (
    'id' => 59,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0777.jpg',
    'thumb' => 'r_1617267437DSC_0777.jpg',
  ),
  46 => 
  array (
    'id' => 60,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0784.jpg',
    'thumb' => 'r_1617267437DSC_0784.jpg',
  ),
  47 => 
  array (
    'id' => 61,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0826.jpg',
    'thumb' => 'r_1617267437DSC_0826.jpg',
  ),
  48 => 
  array (
    'id' => 62,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '1617267437DSC_0841.jpg',
    'thumb' => 'r_1617267437DSC_0841.jpg',
  ),
  49 => 
  array (
    'id' => 63,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '16172674370DSC_0846.jpg',
    'thumb' => 'r_16172674370DSC_0846.jpg',
  ),
  50 => 
  array (
    'id' => 64,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '16172674371DSC_0895.jpg',
    'thumb' => 'r_16172674371DSC_0895.jpg',
  ),
  51 => 
  array (
    'id' => 65,
    'gallery_id' => 49,
    'title' => 'Hareli',
    'image' => '16172674372DSC_0897.jpg',
    'thumb' => 'r_16172674372DSC_0897.jpg',
  ),
  52 => 
  array (
    'id' => 66,
    'gallery_id' => 51,
    'title' => 'Jabar Gohar Devi Iron',
    'image' => '16172694401501584130768.jpg',
    'thumb' => 'r_16172694401501584130768.jpg',
  ),
  53 => 
  array (
    'id' => 67,
    'gallery_id' => 51,
    'title' => 'Jabar Gohar Devi Iron',
    'image' => '16172694401501586312450.jpg',
    'thumb' => 'r_16172694401501586312450.jpg',
  ),
  54 => 
  array (
    'id' => 68,
    'gallery_id' => 51,
    'title' => 'Jabar Gohar Devi Iron',
    'image' => '16172694401501586430889.jpg',
    'thumb' => 'r_16172694401501586430889.jpg',
  ),
  55 => 
  array (
    'id' => 69,
    'gallery_id' => 51,
    'title' => 'Jabar Gohar Devi Iron',
    'image' => '16172694401501586680222.jpg',
    'thumb' => 'r_16172694401501586680222.jpg',
  ),
  56 => 
  array (
    'id' => 70,
    'gallery_id' => 51,
    'title' => 'Jabar Gohar Devi Iron',
    'image' => '16172694401501586730353.jpg',
    'thumb' => 'r_16172694401501586730353.jpg',
  ),
  57 => 
  array (
    'id' => 71,
    'gallery_id' => 51,
    'title' => 'Jabar Gohar Devi Iron',
    'image' => '16172694401501586995930.jpg',
    'thumb' => 'r_16172694401501586995930.jpg',
  ),
  58 => 
  array (
    'id' => 72,
    'gallery_id' => 51,
    'title' => 'Jabar Gohar Devi Iron',
    'image' => '16172694401501588810105.jpg',
    'thumb' => 'r_16172694401501588810105.jpg',
  ),
  59 => 
  array (
    'id' => 73,
    'gallery_id' => 51,
    'title' => 'Jabar Gohar Devi Iron',
    'image' => '16172694401501589051104.jpg',
    'thumb' => 'r_16172694401501589051104.jpg',
  ),
  60 => 
  array (
    'id' => 74,
    'gallery_id' => 51,
    'title' => 'Jabar Gohar Devi Iron',
    'image' => '16172694401501589059610.jpg',
    'thumb' => 'r_16172694401501589059610.jpg',
  ),
  61 => 
  array (
    'id' => 75,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9320.jpg',
    'thumb' => 'r_1617269913DSCN9320.jpg',
  ),
  62 => 
  array (
    'id' => 76,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9322.jpg',
    'thumb' => 'r_1617269913DSCN9322.jpg',
  ),
  63 => 
  array (
    'id' => 77,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9323.jpg',
    'thumb' => 'r_1617269913DSCN9323.jpg',
  ),
  64 => 
  array (
    'id' => 78,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9325.jpg',
    'thumb' => 'r_1617269913DSCN9325.jpg',
  ),
  65 => 
  array (
    'id' => 79,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9331.jpg',
    'thumb' => 'r_1617269913DSCN9331.jpg',
  ),
  66 => 
  array (
    'id' => 80,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9333.jpg',
    'thumb' => 'r_1617269913DSCN9333.jpg',
  ),
  67 => 
  array (
    'id' => 81,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9334.jpg',
    'thumb' => 'r_1617269913DSCN9334.jpg',
  ),
  68 => 
  array (
    'id' => 82,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9341.jpg',
    'thumb' => 'r_1617269913DSCN9341.jpg',
  ),
  69 => 
  array (
    'id' => 83,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9343.jpg',
    'thumb' => 'r_1617269913DSCN9343.jpg',
  ),
  70 => 
  array (
    'id' => 84,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617269913DSCN9346.jpg',
    'thumb' => 'r_1617269913DSCN9346.jpg',
  ),
  71 => 
  array (
    'id' => 85,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172699130DSCN9348.jpg',
    'thumb' => 'r_16172699130DSCN9348.jpg',
  ),
  72 => 
  array (
    'id' => 86,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172699131DSCN9352.jpg',
    'thumb' => 'r_16172699131DSCN9352.jpg',
  ),
  73 => 
  array (
    'id' => 87,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172699132DSCN9354.jpg',
    'thumb' => 'r_16172699132DSCN9354.jpg',
  ),
  74 => 
  array (
    'id' => 88,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172699133DSCN9358.jpg',
    'thumb' => 'r_16172699133DSCN9358.jpg',
  ),
  75 => 
  array (
    'id' => 89,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172699134DSCN9362.jpg',
    'thumb' => 'r_16172699134DSCN9362.jpg',
  ),
  76 => 
  array (
    'id' => 90,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172699135DSCN9365.jpg',
    'thumb' => 'r_16172699135DSCN9365.jpg',
  ),
  77 => 
  array (
    'id' => 91,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9356.jpg',
    'thumb' => 'r_1617274617DSCN9356.jpg',
  ),
  78 => 
  array (
    'id' => 92,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9365.jpg',
    'thumb' => 'r_1617274617DSCN9365.jpg',
  ),
  79 => 
  array (
    'id' => 93,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9371.jpg',
    'thumb' => 'r_1617274617DSCN9371.jpg',
  ),
  80 => 
  array (
    'id' => 94,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9374.jpg',
    'thumb' => 'r_1617274617DSCN9374.jpg',
  ),
  81 => 
  array (
    'id' => 95,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9387.jpg',
    'thumb' => 'r_1617274617DSCN9387.jpg',
  ),
  82 => 
  array (
    'id' => 96,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9389.jpg',
    'thumb' => 'r_1617274617DSCN9389.jpg',
  ),
  83 => 
  array (
    'id' => 97,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9390.jpg',
    'thumb' => 'r_1617274617DSCN9390.jpg',
  ),
  84 => 
  array (
    'id' => 98,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9392.jpg',
    'thumb' => 'r_1617274617DSCN9392.jpg',
  ),
  85 => 
  array (
    'id' => 99,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9394.jpg',
    'thumb' => 'r_1617274617DSCN9394.jpg',
  ),
  86 => 
  array (
    'id' => 100,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '1617274617DSCN9399.jpg',
    'thumb' => 'r_1617274617DSCN9399.jpg',
  ),
  87 => 
  array (
    'id' => 101,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746180DSCN9409.jpg',
    'thumb' => 'r_16172746180DSCN9409.jpg',
  ),
  88 => 
  array (
    'id' => 102,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746181DSCN9418.jpg',
    'thumb' => 'r_16172746181DSCN9418.jpg',
  ),
  89 => 
  array (
    'id' => 103,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746182DSCN9423.jpg',
    'thumb' => 'r_16172746182DSCN9423.jpg',
  ),
  90 => 
  array (
    'id' => 104,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746183DSCN9425.jpg',
    'thumb' => 'r_16172746183DSCN9425.jpg',
  ),
  91 => 
  array (
    'id' => 105,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746184DSCN9426.jpg',
    'thumb' => 'r_16172746184DSCN9426.jpg',
  ),
  92 => 
  array (
    'id' => 106,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746185DSCN9438.jpg',
    'thumb' => 'r_16172746185DSCN9438.jpg',
  ),
  93 => 
  array (
    'id' => 107,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746186DSCN9453.jpg',
    'thumb' => 'r_16172746186DSCN9453.jpg',
  ),
  94 => 
  array (
    'id' => 108,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746187DSCN9458.jpg',
    'thumb' => 'r_16172746187DSCN9458.jpg',
  ),
  95 => 
  array (
    'id' => 109,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746188DSCN9459.jpg',
    'thumb' => 'r_16172746188DSCN9459.jpg',
  ),
  96 => 
  array (
    'id' => 110,
    'gallery_id' => 50,
    'title' => 'Jabar Lauthi Raili BalaudaBajar2017',
    'image' => '16172746189DSCN9463.jpg',
    'thumb' => 'r_16172746189DSCN9463.jpg',
  ),
  97 => 
  array (
    'id' => 111,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0072.jpg',
    'thumb' => 'r_1617275623DSC_0072.jpg',
  ),
  98 => 
  array (
    'id' => 112,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0075.jpg',
    'thumb' => 'r_1617275623DSC_0075.jpg',
  ),
  99 => 
  array (
    'id' => 113,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0082.jpg',
    'thumb' => 'r_1617275623DSC_0082.jpg',
  ),
  100 => 
  array (
    'id' => 114,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0086.jpg',
    'thumb' => 'r_1617275623DSC_0086.jpg',
  ),
  101 => 
  array (
    'id' => 115,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0090.jpg',
    'thumb' => 'r_1617275623DSC_0090.jpg',
  ),
  102 => 
  array (
    'id' => 116,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0094.jpg',
    'thumb' => 'r_1617275623DSC_0094.jpg',
  ),
  103 => 
  array (
    'id' => 117,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0096.jpg',
    'thumb' => 'r_1617275623DSC_0096.jpg',
  ),
  104 => 
  array (
    'id' => 118,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0099.jpg',
    'thumb' => 'r_1617275623DSC_0099.jpg',
  ),
  105 => 
  array (
    'id' => 119,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0101.jpg',
    'thumb' => 'r_1617275623DSC_0101.jpg',
  ),
  106 => 
  array (
    'id' => 120,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617275623DSC_0104.jpg',
    'thumb' => 'r_1617275623DSC_0104.jpg',
  ),
  107 => 
  array (
    'id' => 121,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756230DSC_0107.jpg',
    'thumb' => 'r_16172756230DSC_0107.jpg',
  ),
  108 => 
  array (
    'id' => 122,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756231DSC_0109.jpg',
    'thumb' => 'r_16172756231DSC_0109.jpg',
  ),
  109 => 
  array (
    'id' => 123,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756232DSC_0114.jpg',
    'thumb' => 'r_16172756232DSC_0114.jpg',
  ),
  110 => 
  array (
    'id' => 124,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756233DSC_0117.jpg',
    'thumb' => 'r_16172756233DSC_0117.jpg',
  ),
  111 => 
  array (
    'id' => 125,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756234DSC_0119.jpg',
    'thumb' => 'r_16172756234DSC_0119.jpg',
  ),
  112 => 
  array (
    'id' => 126,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756235DSC_0122.jpg',
    'thumb' => 'r_16172756235DSC_0122.jpg',
  ),
  113 => 
  array (
    'id' => 127,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756236DSC_0125.jpg',
    'thumb' => 'r_16172756236DSC_0125.jpg',
  ),
  114 => 
  array (
    'id' => 128,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756237DSC_0126.jpg',
    'thumb' => 'r_16172756237DSC_0126.jpg',
  ),
  115 => 
  array (
    'id' => 129,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756238DSC_0127.jpg',
    'thumb' => 'r_16172756238DSC_0127.jpg',
  ),
  116 => 
  array (
    'id' => 130,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172756239DSC_0131.jpg',
    'thumb' => 'r_16172756239DSC_0131.jpg',
  ),
  117 => 
  array (
    'id' => 131,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0119.jpg',
    'thumb' => 'r_1617276224DSC_0119.jpg',
  ),
  118 => 
  array (
    'id' => 132,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0125.jpg',
    'thumb' => 'r_1617276224DSC_0125.jpg',
  ),
  119 => 
  array (
    'id' => 133,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0136.jpg',
    'thumb' => 'r_1617276224DSC_0136.jpg',
  ),
  120 => 
  array (
    'id' => 134,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0140.jpg',
    'thumb' => 'r_1617276224DSC_0140.jpg',
  ),
  121 => 
  array (
    'id' => 135,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0160.jpg',
    'thumb' => 'r_1617276224DSC_0160.jpg',
  ),
  122 => 
  array (
    'id' => 136,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0163.jpg',
    'thumb' => 'r_1617276224DSC_0163.jpg',
  ),
  123 => 
  array (
    'id' => 137,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0168.jpg',
    'thumb' => 'r_1617276224DSC_0168.jpg',
  ),
  124 => 
  array (
    'id' => 138,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0169.jpg',
    'thumb' => 'r_1617276224DSC_0169.jpg',
  ),
  125 => 
  array (
    'id' => 139,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0170.jpg',
    'thumb' => 'r_1617276224DSC_0170.jpg',
  ),
  126 => 
  array (
    'id' => 140,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276224DSC_0172.jpg',
    'thumb' => 'r_1617276224DSC_0172.jpg',
  ),
  127 => 
  array (
    'id' => 141,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172762240DSC_0173.jpg',
    'thumb' => 'r_16172762240DSC_0173.jpg',
  ),
  128 => 
  array (
    'id' => 142,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172762241DSC_0174.jpg',
    'thumb' => 'r_16172762241DSC_0174.jpg',
  ),
  129 => 
  array (
    'id' => 143,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172762242DSC_0176.jpg',
    'thumb' => 'r_16172762242DSC_0176.jpg',
  ),
  130 => 
  array (
    'id' => 144,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172762243DSC_0177.jpg',
    'thumb' => 'r_16172762243DSC_0177.jpg',
  ),
  131 => 
  array (
    'id' => 145,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172762244DSC_0178.jpg',
    'thumb' => 'r_16172762244DSC_0178.jpg',
  ),
  132 => 
  array (
    'id' => 146,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172762245DSC_0186.jpg',
    'thumb' => 'r_16172762245DSC_0186.jpg',
  ),
  133 => 
  array (
    'id' => 147,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172762246DSC_0188.jpg',
    'thumb' => 'r_16172762246DSC_0188.jpg',
  ),
  134 => 
  array (
    'id' => 148,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172762247DSC_0193.jpg',
    'thumb' => 'r_16172762247DSC_0193.jpg',
  ),
  135 => 
  array (
    'id' => 149,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172762248DSC_0199.jpg',
    'thumb' => 'r_16172762248DSC_0199.jpg',
  ),
  136 => 
  array (
    'id' => 151,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0224.jpg',
    'thumb' => 'r_1617276416DSC_0224.jpg',
  ),
  137 => 
  array (
    'id' => 152,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0231.jpg',
    'thumb' => 'r_1617276416DSC_0231.jpg',
  ),
  138 => 
  array (
    'id' => 153,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0236.jpg',
    'thumb' => 'r_1617276416DSC_0236.jpg',
  ),
  139 => 
  array (
    'id' => 154,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0242.jpg',
    'thumb' => 'r_1617276416DSC_0242.jpg',
  ),
  140 => 
  array (
    'id' => 155,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0245.jpg',
    'thumb' => 'r_1617276416DSC_0245.jpg',
  ),
  141 => 
  array (
    'id' => 156,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0262.jpg',
    'thumb' => 'r_1617276416DSC_0262.jpg',
  ),
  142 => 
  array (
    'id' => 157,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0266.jpg',
    'thumb' => 'r_1617276416DSC_0266.jpg',
  ),
  143 => 
  array (
    'id' => 158,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0268.jpg',
    'thumb' => 'r_1617276416DSC_0268.jpg',
  ),
  144 => 
  array (
    'id' => 159,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0274.jpg',
    'thumb' => 'r_1617276416DSC_0274.jpg',
  ),
  145 => 
  array (
    'id' => 160,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276416DSC_0282.jpg',
    'thumb' => 'r_1617276416DSC_0282.jpg',
  ),
  146 => 
  array (
    'id' => 161,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172764160DSC_0285.jpg',
    'thumb' => 'r_16172764160DSC_0285.jpg',
  ),
  147 => 
  array (
    'id' => 162,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172764161DSC_0287.jpg',
    'thumb' => 'r_16172764161DSC_0287.jpg',
  ),
  148 => 
  array (
    'id' => 163,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172764162DSC_0295.jpg',
    'thumb' => 'r_16172764162DSC_0295.jpg',
  ),
  149 => 
  array (
    'id' => 164,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172764173DSC_0298.jpg',
    'thumb' => 'r_16172764173DSC_0298.jpg',
  ),
  150 => 
  array (
    'id' => 165,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172764174DSC_0301.jpg',
    'thumb' => 'r_16172764174DSC_0301.jpg',
  ),
  151 => 
  array (
    'id' => 166,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172764175DSC_0307.jpg',
    'thumb' => 'r_16172764175DSC_0307.jpg',
  ),
  152 => 
  array (
    'id' => 167,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276777DSC_0202.jpg',
    'thumb' => 'r_1617276777DSC_0202.jpg',
  ),
  153 => 
  array (
    'id' => 168,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276777DSC_0218.jpg',
    'thumb' => 'r_1617276777DSC_0218.jpg',
  ),
  154 => 
  array (
    'id' => 169,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276777DSC_0222.jpg',
    'thumb' => 'r_1617276777DSC_0222.jpg',
  ),
  155 => 
  array (
    'id' => 170,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276777DSC_0223.jpg',
    'thumb' => 'r_1617276777DSC_0223.jpg',
  ),
  156 => 
  array (
    'id' => 171,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276778DSC_0225.jpg',
    'thumb' => 'r_1617276778DSC_0225.jpg',
  ),
  157 => 
  array (
    'id' => 172,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276778DSC_0236.jpg',
    'thumb' => 'r_1617276778DSC_0236.jpg',
  ),
  158 => 
  array (
    'id' => 173,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276778DSC_0240.jpg',
    'thumb' => 'r_1617276778DSC_0240.jpg',
  ),
  159 => 
  array (
    'id' => 174,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276778DSC_0265.jpg',
    'thumb' => 'r_1617276778DSC_0265.jpg',
  ),
  160 => 
  array (
    'id' => 175,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276778DSC_0268.jpg',
    'thumb' => 'r_1617276778DSC_0268.jpg',
  ),
  161 => 
  array (
    'id' => 176,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276778DSC_0273.jpg',
    'thumb' => 'r_1617276778DSC_0273.jpg',
  ),
  162 => 
  array (
    'id' => 177,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767780DSC_0642.jpg',
    'thumb' => 'r_16172767780DSC_0642.jpg',
  ),
  163 => 
  array (
    'id' => 178,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767781DSC_0650.jpg',
    'thumb' => 'r_16172767781DSC_0650.jpg',
  ),
  164 => 
  array (
    'id' => 179,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767782DSC_0653.jpg',
    'thumb' => 'r_16172767782DSC_0653.jpg',
  ),
  165 => 
  array (
    'id' => 180,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767783DSC_0661.jpg',
    'thumb' => 'r_16172767783DSC_0661.jpg',
  ),
  166 => 
  array (
    'id' => 181,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767784DSC_0664.jpg',
    'thumb' => 'r_16172767784DSC_0664.jpg',
  ),
  167 => 
  array (
    'id' => 182,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767785DSC_0667.jpg',
    'thumb' => 'r_16172767785DSC_0667.jpg',
  ),
  168 => 
  array (
    'id' => 183,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767786DSC_0668.jpg',
    'thumb' => 'r_16172767786DSC_0668.jpg',
  ),
  169 => 
  array (
    'id' => 184,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767787DSC_0673.jpg',
    'thumb' => 'r_16172767787DSC_0673.jpg',
  ),
  170 => 
  array (
    'id' => 185,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767788DSC_0679.jpg',
    'thumb' => 'r_16172767788DSC_0679.jpg',
  ),
  171 => 
  array (
    'id' => 186,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172767789DSC_0701.jpg',
    'thumb' => 'r_16172767789DSC_0701.jpg',
  ),
  172 => 
  array (
    'id' => 187,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0202.jpg',
    'thumb' => 'r_1617276809DSC_0202.jpg',
  ),
  173 => 
  array (
    'id' => 188,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0218.jpg',
    'thumb' => 'r_1617276809DSC_0218.jpg',
  ),
  174 => 
  array (
    'id' => 189,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0222.jpg',
    'thumb' => 'r_1617276809DSC_0222.jpg',
  ),
  175 => 
  array (
    'id' => 190,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0223.jpg',
    'thumb' => 'r_1617276809DSC_0223.jpg',
  ),
  176 => 
  array (
    'id' => 191,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0225.jpg',
    'thumb' => 'r_1617276809DSC_0225.jpg',
  ),
  177 => 
  array (
    'id' => 192,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0236.jpg',
    'thumb' => 'r_1617276809DSC_0236.jpg',
  ),
  178 => 
  array (
    'id' => 193,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0240.jpg',
    'thumb' => 'r_1617276809DSC_0240.jpg',
  ),
  179 => 
  array (
    'id' => 194,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0265.jpg',
    'thumb' => 'r_1617276809DSC_0265.jpg',
  ),
  180 => 
  array (
    'id' => 195,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0268.jpg',
    'thumb' => 'r_1617276809DSC_0268.jpg',
  ),
  181 => 
  array (
    'id' => 196,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '1617276809DSC_0273.jpg',
    'thumb' => 'r_1617276809DSC_0273.jpg',
  ),
  182 => 
  array (
    'id' => 197,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768090DSC_0642.jpg',
    'thumb' => 'r_16172768090DSC_0642.jpg',
  ),
  183 => 
  array (
    'id' => 198,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768091DSC_0650.jpg',
    'thumb' => 'r_16172768091DSC_0650.jpg',
  ),
  184 => 
  array (
    'id' => 199,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768092DSC_0653.jpg',
    'thumb' => 'r_16172768092DSC_0653.jpg',
  ),
  185 => 
  array (
    'id' => 200,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768093DSC_0661.jpg',
    'thumb' => 'r_16172768093DSC_0661.jpg',
  ),
  186 => 
  array (
    'id' => 201,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768094DSC_0664.jpg',
    'thumb' => 'r_16172768094DSC_0664.jpg',
  ),
  187 => 
  array (
    'id' => 202,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768095DSC_0667.jpg',
    'thumb' => 'r_16172768095DSC_0667.jpg',
  ),
  188 => 
  array (
    'id' => 203,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768096DSC_0668.jpg',
    'thumb' => 'r_16172768096DSC_0668.jpg',
  ),
  189 => 
  array (
    'id' => 204,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768097DSC_0673.jpg',
    'thumb' => 'r_16172768097DSC_0673.jpg',
  ),
  190 => 
  array (
    'id' => 205,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768098DSC_0679.jpg',
    'thumb' => 'r_16172768098DSC_0679.jpg',
  ),
  191 => 
  array (
    'id' => 206,
    'gallery_id' => 52,
    'title' => 'Jabar Lauthi Raili Korba 2018',
    'image' => '16172768099DSC_0701.jpg',
    'thumb' => 'r_16172768099DSC_0701.jpg',
  ),
  192 => 
  array (
    'id' => 207,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278202DSC_0001_renamed_1709.jpg',
    'thumb' => 'r_1617278202DSC_0001_renamed_1709.jpg',
  ),
  193 => 
  array (
    'id' => 208,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278203DSC_0003.jpg',
    'thumb' => 'r_1617278203DSC_0003.jpg',
  ),
  194 => 
  array (
    'id' => 209,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278203DSC_0007.jpg',
    'thumb' => 'r_1617278203DSC_0007.jpg',
  ),
  195 => 
  array (
    'id' => 210,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278203DSC_0012_renamed_22226.jpg',
    'thumb' => 'r_1617278203DSC_0012_renamed_22226.jpg',
  ),
  196 => 
  array (
    'id' => 211,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278203DSC_0015.jpg',
    'thumb' => 'r_1617278203DSC_0015.jpg',
  ),
  197 => 
  array (
    'id' => 212,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278203DSC_0022_renamed_22479.jpg',
    'thumb' => 'r_1617278203DSC_0022_renamed_22479.jpg',
  ),
  198 => 
  array (
    'id' => 213,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278203DSC_0024.jpg',
    'thumb' => 'r_1617278203DSC_0024.jpg',
  ),
  199 => 
  array (
    'id' => 214,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278203DSC_0028.jpg',
    'thumb' => 'r_1617278203DSC_0028.jpg',
  ),
  200 => 
  array (
    'id' => 215,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278203DSC_0032.jpg',
    'thumb' => 'r_1617278203DSC_0032.jpg',
  ),
  201 => 
  array (
    'id' => 216,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278203DSC_0034.jpg',
    'thumb' => 'r_1617278203DSC_0034.jpg',
  ),
  202 => 
  array (
    'id' => 217,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172782030DSC_0036.jpg',
    'thumb' => 'r_16172782030DSC_0036.jpg',
  ),
  203 => 
  array (
    'id' => 218,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172782031DSC_0041.jpg',
    'thumb' => 'r_16172782031DSC_0041.jpg',
  ),
  204 => 
  array (
    'id' => 219,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172782032DSC_0042.jpg',
    'thumb' => 'r_16172782032DSC_0042.jpg',
  ),
  205 => 
  array (
    'id' => 220,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172782033DSC_0046.jpg',
    'thumb' => 'r_16172782033DSC_0046.jpg',
  ),
  206 => 
  array (
    'id' => 221,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0042.jpg',
    'thumb' => 'r_1617278314DSC_0042.jpg',
  ),
  207 => 
  array (
    'id' => 222,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0051.jpg',
    'thumb' => 'r_1617278314DSC_0051.jpg',
  ),
  208 => 
  array (
    'id' => 223,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0070.jpg',
    'thumb' => 'r_1617278314DSC_0070.jpg',
  ),
  209 => 
  array (
    'id' => 224,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0074.jpg',
    'thumb' => 'r_1617278314DSC_0074.jpg',
  ),
  210 => 
  array (
    'id' => 225,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0077.jpg',
    'thumb' => 'r_1617278314DSC_0077.jpg',
  ),
  211 => 
  array (
    'id' => 226,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0084.jpg',
    'thumb' => 'r_1617278314DSC_0084.jpg',
  ),
  212 => 
  array (
    'id' => 227,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0086.jpg',
    'thumb' => 'r_1617278314DSC_0086.jpg',
  ),
  213 => 
  array (
    'id' => 228,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0089.jpg',
    'thumb' => 'r_1617278314DSC_0089.jpg',
  ),
  214 => 
  array (
    'id' => 229,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0096.jpg',
    'thumb' => 'r_1617278314DSC_0096.jpg',
  ),
  215 => 
  array (
    'id' => 230,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278314DSC_0098.jpg',
    'thumb' => 'r_1617278314DSC_0098.jpg',
  ),
  216 => 
  array (
    'id' => 231,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172783140DSC_0104.jpg',
    'thumb' => 'r_16172783140DSC_0104.jpg',
  ),
  217 => 
  array (
    'id' => 232,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172783141DSC_0109.jpg',
    'thumb' => 'r_16172783141DSC_0109.jpg',
  ),
  218 => 
  array (
    'id' => 233,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172783142DSC_0118.jpg',
    'thumb' => 'r_16172783142DSC_0118.jpg',
  ),
  219 => 
  array (
    'id' => 234,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172783143DSC_0119.jpg',
    'thumb' => 'r_16172783143DSC_0119.jpg',
  ),
  220 => 
  array (
    'id' => 235,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172783144DSC_0121.jpg',
    'thumb' => 'r_16172783144DSC_0121.jpg',
  ),
  221 => 
  array (
    'id' => 236,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172783145DSC_0130.jpg',
    'thumb' => 'r_16172783145DSC_0130.jpg',
  ),
  222 => 
  array (
    'id' => 237,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278464DSC_0152.jpg',
    'thumb' => 'r_1617278464DSC_0152.jpg',
  ),
  223 => 
  array (
    'id' => 238,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278464DSC_0156.jpg',
    'thumb' => 'r_1617278464DSC_0156.jpg',
  ),
  224 => 
  array (
    'id' => 239,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278464DSC_0163.jpg',
    'thumb' => 'r_1617278464DSC_0163.jpg',
  ),
  225 => 
  array (
    'id' => 240,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278464DSC_0169.jpg',
    'thumb' => 'r_1617278464DSC_0169.jpg',
  ),
  226 => 
  array (
    'id' => 241,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278465DSC_0170.jpg',
    'thumb' => 'r_1617278465DSC_0170.jpg',
  ),
  227 => 
  array (
    'id' => 242,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278465DSC_0176.jpg',
    'thumb' => 'r_1617278465DSC_0176.jpg',
  ),
  228 => 
  array (
    'id' => 243,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278465DSC_0178.jpg',
    'thumb' => 'r_1617278465DSC_0178.jpg',
  ),
  229 => 
  array (
    'id' => 244,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278465DSC_0185.jpg',
    'thumb' => 'r_1617278465DSC_0185.jpg',
  ),
  230 => 
  array (
    'id' => 245,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278465DSC_0187.jpg',
    'thumb' => 'r_1617278465DSC_0187.jpg',
  ),
  231 => 
  array (
    'id' => 246,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278465DSC_0198.jpg',
    'thumb' => 'r_1617278465DSC_0198.jpg',
  ),
  232 => 
  array (
    'id' => 247,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172784650DSC_0200.jpg',
    'thumb' => 'r_16172784650DSC_0200.jpg',
  ),
  233 => 
  array (
    'id' => 248,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172784651DSC_0201_(2).jpg',
    'thumb' => 'r_16172784651DSC_0201_(2).jpg',
  ),
  234 => 
  array (
    'id' => 249,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172784652DSC_0201.jpg',
    'thumb' => 'r_16172784652DSC_0201.jpg',
  ),
  235 => 
  array (
    'id' => 250,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172784653DSC_0202.jpg',
    'thumb' => 'r_16172784653DSC_0202.jpg',
  ),
  236 => 
  array (
    'id' => 251,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172784654DSC_0209_(2).jpg',
    'thumb' => 'r_16172784654DSC_0209_(2).jpg',
  ),
  237 => 
  array (
    'id' => 252,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172784655DSC_0295_(2).jpg',
    'thumb' => 'r_16172784655DSC_0295_(2).jpg',
  ),
  238 => 
  array (
    'id' => 253,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172784656DSC_0306_(2).jpg',
    'thumb' => 'r_16172784656DSC_0306_(2).jpg',
  ),
  239 => 
  array (
    'id' => 254,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0444_(2).jpg',
    'thumb' => 'r_1617278635DSC_0444_(2).jpg',
  ),
  240 => 
  array (
    'id' => 255,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0449.jpg',
    'thumb' => 'r_1617278635DSC_0449.jpg',
  ),
  241 => 
  array (
    'id' => 256,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0451_(2).jpg',
    'thumb' => 'r_1617278635DSC_0451_(2).jpg',
  ),
  242 => 
  array (
    'id' => 257,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0456.jpg',
    'thumb' => 'r_1617278635DSC_0456.jpg',
  ),
  243 => 
  array (
    'id' => 258,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0457_(2).jpg',
    'thumb' => 'r_1617278635DSC_0457_(2).jpg',
  ),
  244 => 
  array (
    'id' => 259,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0459_(2).jpg',
    'thumb' => 'r_1617278635DSC_0459_(2).jpg',
  ),
  245 => 
  array (
    'id' => 260,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0464.jpg',
    'thumb' => 'r_1617278635DSC_0464.jpg',
  ),
  246 => 
  array (
    'id' => 261,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0518_(2).jpg',
    'thumb' => 'r_1617278635DSC_0518_(2).jpg',
  ),
  247 => 
  array (
    'id' => 262,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0525_(2).jpg',
    'thumb' => 'r_1617278635DSC_0525_(2).jpg',
  ),
  248 => 
  array (
    'id' => 263,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617278635DSC_0538_(2).jpg',
    'thumb' => 'r_1617278635DSC_0538_(2).jpg',
  ),
  249 => 
  array (
    'id' => 264,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172786350DSC_0542_(2).jpg',
    'thumb' => 'r_16172786350DSC_0542_(2).jpg',
  ),
  250 => 
  array (
    'id' => 265,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172786351DSC_0543_(2).jpg',
    'thumb' => 'r_16172786351DSC_0543_(2).jpg',
  ),
  251 => 
  array (
    'id' => 266,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172786352DSC_0544.jpg',
    'thumb' => 'r_16172786352DSC_0544.jpg',
  ),
  252 => 
  array (
    'id' => 267,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172786353DSC_0554.jpg',
    'thumb' => 'r_16172786353DSC_0554.jpg',
  ),
  253 => 
  array (
    'id' => 268,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172786354DSC_0557.jpg',
    'thumb' => 'r_16172786354DSC_0557.jpg',
  ),
  254 => 
  array (
    'id' => 269,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172786355DSC_0560_(2).jpg',
    'thumb' => 'r_16172786355DSC_0560_(2).jpg',
  ),
  255 => 
  array (
    'id' => 270,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172786356DSC_0562_(2).jpg',
    'thumb' => 'r_16172786356DSC_0562_(2).jpg',
  ),
  256 => 
  array (
    'id' => 271,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172786357DSC_0565_(2).jpg',
    'thumb' => 'r_16172786357DSC_0565_(2).jpg',
  ),
  257 => 
  array (
    'id' => 272,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172786358DSC_0584_(2).jpg',
    'thumb' => 'r_16172786358DSC_0584_(2).jpg',
  ),
  258 => 
  array (
    'id' => 273,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281039DSC_0660.jpg',
    'thumb' => 'r_1617281039DSC_0660.jpg',
  ),
  259 => 
  array (
    'id' => 274,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281039DSC_0670.jpg',
    'thumb' => 'r_1617281039DSC_0670.jpg',
  ),
  260 => 
  array (
    'id' => 275,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281039DSC_0673_(2).jpg',
    'thumb' => 'r_1617281039DSC_0673_(2).jpg',
  ),
  261 => 
  array (
    'id' => 276,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281039DSC_0674.jpg',
    'thumb' => 'r_1617281039DSC_0674.jpg',
  ),
  262 => 
  array (
    'id' => 277,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281039DSC_0675_(2).jpg',
    'thumb' => 'r_1617281039DSC_0675_(2).jpg',
  ),
  263 => 
  array (
    'id' => 278,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281040DSC_0678_(2).jpg',
    'thumb' => 'r_1617281040DSC_0678_(2).jpg',
  ),
  264 => 
  array (
    'id' => 279,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281040DSC_0762.jpg',
    'thumb' => 'r_1617281040DSC_0762.jpg',
  ),
  265 => 
  array (
    'id' => 280,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281040DSC_0764.jpg',
    'thumb' => 'r_1617281040DSC_0764.jpg',
  ),
  266 => 
  array (
    'id' => 281,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281040DSC_0770.jpg',
    'thumb' => 'r_1617281040DSC_0770.jpg',
  ),
  267 => 
  array (
    'id' => 282,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281040DSC_0777.jpg',
    'thumb' => 'r_1617281040DSC_0777.jpg',
  ),
  268 => 
  array (
    'id' => 283,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172810400DSC_0838.jpg',
    'thumb' => 'r_16172810400DSC_0838.jpg',
  ),
  269 => 
  array (
    'id' => 284,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172810401DSC_0841_(2).jpg',
    'thumb' => 'r_16172810401DSC_0841_(2).jpg',
  ),
  270 => 
  array (
    'id' => 285,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172810402DSC_0865.jpg',
    'thumb' => 'r_16172810402DSC_0865.jpg',
  ),
  271 => 
  array (
    'id' => 286,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172810403DSC_0872.jpg',
    'thumb' => 'r_16172810403DSC_0872.jpg',
  ),
  272 => 
  array (
    'id' => 287,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172810404DSC_0885.jpg',
    'thumb' => 'r_16172810404DSC_0885.jpg',
  ),
  273 => 
  array (
    'id' => 288,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281179DSC_0448_(2).jpg',
    'thumb' => 'r_1617281179DSC_0448_(2).jpg',
  ),
  274 => 
  array (
    'id' => 289,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281179DSC_0459.jpg',
    'thumb' => 'r_1617281179DSC_0459.jpg',
  ),
  275 => 
  array (
    'id' => 290,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281179DSC_0481_(2).jpg',
    'thumb' => 'r_1617281179DSC_0481_(2).jpg',
  ),
  276 => 
  array (
    'id' => 291,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281179DSC_0488.jpg',
    'thumb' => 'r_1617281179DSC_0488.jpg',
  ),
  277 => 
  array (
    'id' => 292,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281179DSC_0530_(2).jpg',
    'thumb' => 'r_1617281179DSC_0530_(2).jpg',
  ),
  278 => 
  array (
    'id' => 293,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281179DSC_0532_(2).jpg',
    'thumb' => 'r_1617281179DSC_0532_(2).jpg',
  ),
  279 => 
  array (
    'id' => 294,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281180DSC_0540_(2).jpg',
    'thumb' => 'r_1617281180DSC_0540_(2).jpg',
  ),
  280 => 
  array (
    'id' => 295,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281180DSC_0543_(2).jpg',
    'thumb' => 'r_1617281180DSC_0543_(2).jpg',
  ),
  281 => 
  array (
    'id' => 296,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281180DSC_0544.jpg',
    'thumb' => 'r_1617281180DSC_0544.jpg',
  ),
  282 => 
  array (
    'id' => 297,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281180DSC_0587_(2).jpg',
    'thumb' => 'r_1617281180DSC_0587_(2).jpg',
  ),
  283 => 
  array (
    'id' => 298,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172811800DSC_0597_(2).jpg',
    'thumb' => 'r_16172811800DSC_0597_(2).jpg',
  ),
  284 => 
  array (
    'id' => 299,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172811801DSC_0599_(2).jpg',
    'thumb' => 'r_16172811801DSC_0599_(2).jpg',
  ),
  285 => 
  array (
    'id' => 300,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172811802DSC_0864.jpg',
    'thumb' => 'r_16172811802DSC_0864.jpg',
  ),
  286 => 
  array (
    'id' => 301,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172811803DSC_0866.jpg',
    'thumb' => 'r_16172811803DSC_0866.jpg',
  ),
  287 => 
  array (
    'id' => 302,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172811804DSC_0872.jpg',
    'thumb' => 'r_16172811804DSC_0872.jpg',
  ),
  288 => 
  array (
    'id' => 303,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172811805DSC_0893.jpg',
    'thumb' => 'r_16172811805DSC_0893.jpg',
  ),
  289 => 
  array (
    'id' => 304,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '16172811806IMG_20170719_000945.jpg',
    'thumb' => 'r_16172811806IMG_20170719_000945.jpg',
  ),
  290 => 
  array (
    'id' => 305,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281240DSC_0230_(2).jpg',
    'thumb' => 'r_1617281240DSC_0230_(2).jpg',
  ),
  291 => 
  array (
    'id' => 306,
    'gallery_id' => 53,
    'title' => 'Jabar Hareli Raili Bhilai 2017',
    'image' => '1617281240DSC_0851.jpg',
    'thumb' => 'r_1617281240DSC_0851.jpg',
  ),
  292 => 
  array (
    'id' => 307,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2348.jpg',
    'thumb' => 'r_1617282527DSC_2348.jpg',
  ),
  293 => 
  array (
    'id' => 308,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2350.jpg',
    'thumb' => 'r_1617282527DSC_2350.jpg',
  ),
  294 => 
  array (
    'id' => 309,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2351.jpg',
    'thumb' => 'r_1617282527DSC_2351.jpg',
  ),
  295 => 
  array (
    'id' => 310,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2355.jpg',
    'thumb' => 'r_1617282527DSC_2355.jpg',
  ),
  296 => 
  array (
    'id' => 311,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2356.jpg',
    'thumb' => 'r_1617282527DSC_2356.jpg',
  ),
  297 => 
  array (
    'id' => 312,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2359.jpg',
    'thumb' => 'r_1617282527DSC_2359.jpg',
  ),
  298 => 
  array (
    'id' => 313,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2361.jpg',
    'thumb' => 'r_1617282527DSC_2361.jpg',
  ),
  299 => 
  array (
    'id' => 314,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2362.jpg',
    'thumb' => 'r_1617282527DSC_2362.jpg',
  ),
  300 => 
  array (
    'id' => 315,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2363.jpg',
    'thumb' => 'r_1617282527DSC_2363.jpg',
  ),
  301 => 
  array (
    'id' => 316,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282527DSC_2370.jpg',
    'thumb' => 'r_1617282527DSC_2370.jpg',
  ),
  302 => 
  array (
    'id' => 317,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825270DSC_2371.jpg',
    'thumb' => 'r_16172825270DSC_2371.jpg',
  ),
  303 => 
  array (
    'id' => 318,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825271DSC_2374.jpg',
    'thumb' => 'r_16172825271DSC_2374.jpg',
  ),
  304 => 
  array (
    'id' => 319,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825272DSC_2375.jpg',
    'thumb' => 'r_16172825272DSC_2375.jpg',
  ),
  305 => 
  array (
    'id' => 320,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825273DSC_2377.jpg',
    'thumb' => 'r_16172825273DSC_2377.jpg',
  ),
  306 => 
  array (
    'id' => 321,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825274DSC_2378.jpg',
    'thumb' => 'r_16172825274DSC_2378.jpg',
  ),
  307 => 
  array (
    'id' => 322,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825275DSC_2379.jpg',
    'thumb' => 'r_16172825275DSC_2379.jpg',
  ),
  308 => 
  array (
    'id' => 323,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825276DSC_2383.jpg',
    'thumb' => 'r_16172825276DSC_2383.jpg',
  ),
  309 => 
  array (
    'id' => 324,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825277DSC_2384.jpg',
    'thumb' => 'r_16172825277DSC_2384.jpg',
  ),
  310 => 
  array (
    'id' => 325,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825278DSC_2385.jpg',
    'thumb' => 'r_16172825278DSC_2385.jpg',
  ),
  311 => 
  array (
    'id' => 326,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172825279DSC_2387.jpg',
    'thumb' => 'r_16172825279DSC_2387.jpg',
  ),
  312 => 
  array (
    'id' => 327,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678DSC_2422.jpg',
    'thumb' => 'r_1617282678DSC_2422.jpg',
  ),
  313 => 
  array (
    'id' => 328,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678DSC_2425.jpg',
    'thumb' => 'r_1617282678DSC_2425.jpg',
  ),
  314 => 
  array (
    'id' => 329,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678DSC_2426.jpg',
    'thumb' => 'r_1617282678DSC_2426.jpg',
  ),
  315 => 
  array (
    'id' => 330,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678DSC_2434.jpg',
    'thumb' => 'r_1617282678DSC_2434.jpg',
  ),
  316 => 
  array (
    'id' => 331,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678IMG_20170624_134032.jpg',
    'thumb' => 'r_1617282678IMG_20170624_134032.jpg',
  ),
  317 => 
  array (
    'id' => 332,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678IMG_20170624_134830.jpg',
    'thumb' => 'r_1617282678IMG_20170624_134830.jpg',
  ),
  318 => 
  array (
    'id' => 333,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678IMG_20170624_141308.jpg',
    'thumb' => 'r_1617282678IMG_20170624_141308.jpg',
  ),
  319 => 
  array (
    'id' => 334,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678IMG_20170624_141321.jpg',
    'thumb' => 'r_1617282678IMG_20170624_141321.jpg',
  ),
  320 => 
  array (
    'id' => 335,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678IMG_20170624_145302.jpg',
    'thumb' => 'r_1617282678IMG_20170624_145302.jpg',
  ),
  321 => 
  array (
    'id' => 336,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '1617282678IMG_20170624_145337.jpg',
    'thumb' => 'r_1617282678IMG_20170624_145337.jpg',
  ),
  322 => 
  array (
    'id' => 337,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826780IMG_20170624_145344.jpg',
    'thumb' => 'r_16172826780IMG_20170624_145344.jpg',
  ),
  323 => 
  array (
    'id' => 338,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826781IMG_20170624_145400.jpg',
    'thumb' => 'r_16172826781IMG_20170624_145400.jpg',
  ),
  324 => 
  array (
    'id' => 339,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826782IMG_20170624_145407.jpg',
    'thumb' => 'r_16172826782IMG_20170624_145407.jpg',
  ),
  325 => 
  array (
    'id' => 340,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826783IMG_20170624_153220.jpg',
    'thumb' => 'r_16172826783IMG_20170624_153220.jpg',
  ),
  326 => 
  array (
    'id' => 341,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826784IMG_20170624_163700.jpg',
    'thumb' => 'r_16172826784IMG_20170624_163700.jpg',
  ),
  327 => 
  array (
    'id' => 342,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826785IMG_20170624_163729.jpg',
    'thumb' => 'r_16172826785IMG_20170624_163729.jpg',
  ),
  328 => 
  array (
    'id' => 343,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826786IMG_20170624_163745.jpg',
    'thumb' => 'r_16172826786IMG_20170624_163745.jpg',
  ),
  329 => 
  array (
    'id' => 344,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826787IMG_20170624_163852.jpg',
    'thumb' => 'r_16172826787IMG_20170624_163852.jpg',
  ),
  330 => 
  array (
    'id' => 345,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826788IMG_20170624_164625.jpg',
    'thumb' => 'r_16172826788IMG_20170624_164625.jpg',
  ),
  331 => 
  array (
    'id' => 346,
    'gallery_id' => 54,
    'title' => 'Rani Durgawati Balidan Diwas Basna.2017',
    'image' => '16172826789IMG_20170624_165208.jpg',
    'thumb' => 'r_16172826789IMG_20170624_165208.jpg',
  ),
  332 => 
  array (
    'id' => 347,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185532.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185532.jpg',
  ),
  333 => 
  array (
    'id' => 348,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185536.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185536.jpg',
  ),
  334 => 
  array (
    'id' => 349,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185539.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185539.jpg',
  ),
  335 => 
  array (
    'id' => 350,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185548.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185548.jpg',
  ),
  336 => 
  array (
    'id' => 351,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185554.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185554.jpg',
  ),
  337 => 
  array (
    'id' => 352,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185558.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185558.jpg',
  ),
  338 => 
  array (
    'id' => 353,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185605.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185605.jpg',
  ),
  339 => 
  array (
    'id' => 354,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185610.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185610.jpg',
  ),
  340 => 
  array (
    'id' => 355,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185625.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185625.jpg',
  ),
  341 => 
  array (
    'id' => 356,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '1617283777IMG_20170214_185628.jpg',
    'thumb' => 'r_1617283777IMG_20170214_185628.jpg',
  ),
  342 => 
  array (
    'id' => 357,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '16172837770IMG_20170214_185633.jpg',
    'thumb' => 'r_16172837770IMG_20170214_185633.jpg',
  ),
  343 => 
  array (
    'id' => 358,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '16172837771IMG_20170214_185713.jpg',
    'thumb' => 'r_16172837771IMG_20170214_185713.jpg',
  ),
  344 => 
  array (
    'id' => 359,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '16172837772IMG_20170214_185733.jpg',
    'thumb' => 'r_16172837772IMG_20170214_185733.jpg',
  ),
  345 => 
  array (
    'id' => 388,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350330DSC_0001.jpg',
    'thumb' => 'r_1617350330DSC_0001.jpg',
  ),
  346 => 
  array (
    'id' => 387,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350300DSC_0023.jpg',
    'thumb' => 'r_1617350300DSC_0023.jpg',
  ),
  347 => 
  array (
    'id' => 362,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '16172837775IMG_20170214_185806.jpg',
    'thumb' => 'r_16172837775IMG_20170214_185806.jpg',
  ),
  348 => 
  array (
    'id' => 363,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '16172837776IMG_20170214_185812.jpg',
    'thumb' => 'r_16172837776IMG_20170214_185812.jpg',
  ),
  349 => 
  array (
    'id' => 364,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '16172837777IMG_20170214_185818.jpg',
    'thumb' => 'r_16172837777IMG_20170214_185818.jpg',
  ),
  350 => 
  array (
    'id' => 365,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '16172837778IMG_20170214_220323.jpg',
    'thumb' => 'r_16172837778IMG_20170214_220323.jpg',
  ),
  351 => 
  array (
    'id' => 366,
    'gallery_id' => 55,
    'title' => 'Purkha  Ke  Surta',
    'image' => '16172837779IMG20170214185154.jpg',
    'thumb' => 'r_16172837779IMG20170214185154.jpg',
  ),
  352 => 
  array (
    'id' => 367,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0287.jpg',
    'thumb' => 'r_1617285914_DSC0287.jpg',
  ),
  353 => 
  array (
    'id' => 368,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0296.jpg',
    'thumb' => 'r_1617285914_DSC0296.jpg',
  ),
  354 => 
  array (
    'id' => 369,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0299.jpg',
    'thumb' => 'r_1617285914_DSC0299.jpg',
  ),
  355 => 
  array (
    'id' => 370,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0309.jpg',
    'thumb' => 'r_1617285914_DSC0309.jpg',
  ),
  356 => 
  array (
    'id' => 371,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0322.jpg',
    'thumb' => 'r_1617285914_DSC0322.jpg',
  ),
  357 => 
  array (
    'id' => 372,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0327.jpg',
    'thumb' => 'r_1617285914_DSC0327.jpg',
  ),
  358 => 
  array (
    'id' => 373,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0340.jpg',
    'thumb' => 'r_1617285914_DSC0340.jpg',
  ),
  359 => 
  array (
    'id' => 374,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0348.jpg',
    'thumb' => 'r_1617285914_DSC0348.jpg',
  ),
  360 => 
  array (
    'id' => 375,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0352.jpg',
    'thumb' => 'r_1617285914_DSC0352.jpg',
  ),
  361 => 
  array (
    'id' => 376,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '1617285914_DSC0353.jpg',
    'thumb' => 'r_1617285914_DSC0353.jpg',
  ),
  362 => 
  array (
    'id' => 377,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859140_DSC0355.jpg',
    'thumb' => 'r_16172859140_DSC0355.jpg',
  ),
  363 => 
  array (
    'id' => 378,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859141_DSC0356.jpg',
    'thumb' => 'r_16172859141_DSC0356.jpg',
  ),
  364 => 
  array (
    'id' => 379,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859142_DSC0357.jpg',
    'thumb' => 'r_16172859142_DSC0357.jpg',
  ),
  365 => 
  array (
    'id' => 380,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859143_DSC0365.jpg',
    'thumb' => 'r_16172859143_DSC0365.jpg',
  ),
  366 => 
  array (
    'id' => 381,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859144_DSC0381.jpg',
    'thumb' => 'r_16172859144_DSC0381.jpg',
  ),
  367 => 
  array (
    'id' => 382,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859145_DSC0382.jpg',
    'thumb' => 'r_16172859145_DSC0382.jpg',
  ),
  368 => 
  array (
    'id' => 383,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859146_DSC0383.jpg',
    'thumb' => 'r_16172859146_DSC0383.jpg',
  ),
  369 => 
  array (
    'id' => 384,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859147_DSC0394.jpg',
    'thumb' => 'r_16172859147_DSC0394.jpg',
  ),
  370 => 
  array (
    'id' => 385,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859148_DSC0406.jpg',
    'thumb' => 'r_16172859148_DSC0406.jpg',
  ),
  371 => 
  array (
    'id' => 386,
    'gallery_id' => 56,
    'title' => 'Purkha Ke Surta 2018',
    'image' => '16172859149_DSC0408.jpg',
    'thumb' => 'r_16172859149_DSC0408.jpg',
  ),
  372 => 
  array (
    'id' => 389,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350330DSC_0005.jpg',
    'thumb' => 'r_1617350330DSC_0005.jpg',
  ),
  373 => 
  array (
    'id' => 390,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350330DSC_0007.jpg',
    'thumb' => 'r_1617350330DSC_0007.jpg',
  ),
  374 => 
  array (
    'id' => 391,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350330DSC_0010.jpg',
    'thumb' => 'r_1617350330DSC_0010.jpg',
  ),
  375 => 
  array (
    'id' => 392,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350330DSC_0015.jpg',
    'thumb' => 'r_1617350330DSC_0015.jpg',
  ),
  376 => 
  array (
    'id' => 393,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350330DSC_0018.jpg',
    'thumb' => 'r_1617350330DSC_0018.jpg',
  ),
  377 => 
  array (
    'id' => 394,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350330DSC_0022.jpg',
    'thumb' => 'r_1617350330DSC_0022.jpg',
  ),
  378 => 
  array (
    'id' => 395,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0036.jpg',
    'thumb' => 'r_1617350414DSC_0036.jpg',
  ),
  379 => 
  array (
    'id' => 396,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0049.jpg',
    'thumb' => 'r_1617350414DSC_0049.jpg',
  ),
  380 => 
  array (
    'id' => 397,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0056.jpg',
    'thumb' => 'r_1617350414DSC_0056.jpg',
  ),
  381 => 
  array (
    'id' => 398,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0058.jpg',
    'thumb' => 'r_1617350414DSC_0058.jpg',
  ),
  382 => 
  array (
    'id' => 399,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0064.jpg',
    'thumb' => 'r_1617350414DSC_0064.jpg',
  ),
  383 => 
  array (
    'id' => 400,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0069.jpg',
    'thumb' => 'r_1617350414DSC_0069.jpg',
  ),
  384 => 
  array (
    'id' => 401,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0073.jpg',
    'thumb' => 'r_1617350414DSC_0073.jpg',
  ),
  385 => 
  array (
    'id' => 402,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0076.jpg',
    'thumb' => 'r_1617350414DSC_0076.jpg',
  ),
  386 => 
  array (
    'id' => 403,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0080.jpg',
    'thumb' => 'r_1617350414DSC_0080.jpg',
  ),
  387 => 
  array (
    'id' => 404,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350414DSC_0084.jpg',
    'thumb' => 'r_1617350414DSC_0084.jpg',
  ),
  388 => 
  array (
    'id' => 405,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '16173504140DSC_0091.jpg',
    'thumb' => 'r_16173504140DSC_0091.jpg',
  ),
  389 => 
  array (
    'id' => 406,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0132.jpg',
    'thumb' => 'r_1617350470DSC_0132.jpg',
  ),
  390 => 
  array (
    'id' => 407,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0139.jpg',
    'thumb' => 'r_1617350470DSC_0139.jpg',
  ),
  391 => 
  array (
    'id' => 408,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0143.jpg',
    'thumb' => 'r_1617350470DSC_0143.jpg',
  ),
  392 => 
  array (
    'id' => 409,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0144.jpg',
    'thumb' => 'r_1617350470DSC_0144.jpg',
  ),
  393 => 
  array (
    'id' => 410,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0149.jpg',
    'thumb' => 'r_1617350470DSC_0149.jpg',
  ),
  394 => 
  array (
    'id' => 411,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0154.jpg',
    'thumb' => 'r_1617350470DSC_0154.jpg',
  ),
  395 => 
  array (
    'id' => 412,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0157.jpg',
    'thumb' => 'r_1617350470DSC_0157.jpg',
  ),
  396 => 
  array (
    'id' => 413,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0158.jpg',
    'thumb' => 'r_1617350470DSC_0158.jpg',
  ),
  397 => 
  array (
    'id' => 414,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0161.jpg',
    'thumb' => 'r_1617350470DSC_0161.jpg',
  ),
  398 => 
  array (
    'id' => 415,
    'gallery_id' => 57,
    'title' => 'Central Jail Raipur CKS 2017',
    'image' => '1617350470DSC_0163.jpg',
    'thumb' => 'r_1617350470DSC_0163.jpg',
  ),
  399 => 
  array (
    'id' => 416,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0004.jpg',
    'thumb' => 'r_1617353017DSC_0004.jpg',
  ),
  400 => 
  array (
    'id' => 417,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0006.jpg',
    'thumb' => 'r_1617353017DSC_0006.jpg',
  ),
  401 => 
  array (
    'id' => 418,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0016.jpg',
    'thumb' => 'r_1617353017DSC_0016.jpg',
  ),
  402 => 
  array (
    'id' => 419,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0021.jpg',
    'thumb' => 'r_1617353017DSC_0021.jpg',
  ),
  403 => 
  array (
    'id' => 420,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0028.jpg',
    'thumb' => 'r_1617353017DSC_0028.jpg',
  ),
  404 => 
  array (
    'id' => 421,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0033.jpg',
    'thumb' => 'r_1617353017DSC_0033.jpg',
  ),
  405 => 
  array (
    'id' => 422,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0049.jpg',
    'thumb' => 'r_1617353017DSC_0049.jpg',
  ),
  406 => 
  array (
    'id' => 423,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0055.jpg',
    'thumb' => 'r_1617353017DSC_0055.jpg',
  ),
  407 => 
  array (
    'id' => 424,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0060.jpg',
    'thumb' => 'r_1617353017DSC_0060.jpg',
  ),
  408 => 
  array (
    'id' => 425,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '1617353017DSC_0061.jpg',
    'thumb' => 'r_1617353017DSC_0061.jpg',
  ),
  409 => 
  array (
    'id' => 426,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '16173530170DSC_0067.jpg',
    'thumb' => 'r_16173530170DSC_0067.jpg',
  ),
  410 => 
  array (
    'id' => 427,
    'gallery_id' => 58,
    'title' => 'Basna Mahasamund 2017',
    'image' => '16173530171DSC_0070.jpg',
    'thumb' => 'r_16173530171DSC_0070.jpg',
  ),
  411 => 
  array (
    'id' => 428,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0001.jpg',
    'thumb' => 'r_1617623310_DSC0001.jpg',
  ),
  412 => 
  array (
    'id' => 429,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0007.jpg',
    'thumb' => 'r_1617623310_DSC0007.jpg',
  ),
  413 => 
  array (
    'id' => 430,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0013.jpg',
    'thumb' => 'r_1617623310_DSC0013.jpg',
  ),
  414 => 
  array (
    'id' => 431,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0014.jpg',
    'thumb' => 'r_1617623310_DSC0014.jpg',
  ),
  415 => 
  array (
    'id' => 432,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0026.jpg',
    'thumb' => 'r_1617623310_DSC0026.jpg',
  ),
  416 => 
  array (
    'id' => 433,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0027.jpg',
    'thumb' => 'r_1617623310_DSC0027.jpg',
  ),
  417 => 
  array (
    'id' => 434,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0029.jpg',
    'thumb' => 'r_1617623310_DSC0029.jpg',
  ),
  418 => 
  array (
    'id' => 435,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0031.jpg',
    'thumb' => 'r_1617623310_DSC0031.jpg',
  ),
  419 => 
  array (
    'id' => 436,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0034.jpg',
    'thumb' => 'r_1617623310_DSC0034.jpg',
  ),
  420 => 
  array (
    'id' => 437,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623310_DSC0036.jpg',
    'thumb' => 'r_1617623310_DSC0036.jpg',
  ),
  421 => 
  array (
    'id' => 438,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233100_DSC0040.jpg',
    'thumb' => 'r_16176233100_DSC0040.jpg',
  ),
  422 => 
  array (
    'id' => 439,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233101_DSC0048.jpg',
    'thumb' => 'r_16176233101_DSC0048.jpg',
  ),
  423 => 
  array (
    'id' => 440,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233102_DSC0052.jpg',
    'thumb' => 'r_16176233102_DSC0052.jpg',
  ),
  424 => 
  array (
    'id' => 441,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233103_DSC0053.jpg',
    'thumb' => 'r_16176233103_DSC0053.jpg',
  ),
  425 => 
  array (
    'id' => 442,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233104_DSC0058.jpg',
    'thumb' => 'r_16176233104_DSC0058.jpg',
  ),
  426 => 
  array (
    'id' => 443,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233105_DSC0060.jpg',
    'thumb' => 'r_16176233105_DSC0060.jpg',
  ),
  427 => 
  array (
    'id' => 444,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233106_DSC0062.jpg',
    'thumb' => 'r_16176233106_DSC0062.jpg',
  ),
  428 => 
  array (
    'id' => 445,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233107_DSC0065.jpg',
    'thumb' => 'r_16176233107_DSC0065.jpg',
  ),
  429 => 
  array (
    'id' => 446,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233108_DSC0068.jpg',
    'thumb' => 'r_16176233108_DSC0068.jpg',
  ),
  430 => 
  array (
    'id' => 447,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '16176233109_DSC0074.jpg',
    'thumb' => 'r_16176233109_DSC0074.jpg',
  ),
  431 => 
  array (
    'id' => 448,
    'gallery_id' => 59,
    'title' => 'Seldu Mudpar CKS 2017',
    'image' => '1617623352_DSC0096.jpg',
    'thumb' => 'r_1617623352_DSC0096.jpg',
  ),
  432 => 
  array (
    'id' => 449,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0024.jpg',
    'thumb' => 'r_1617623930DSC_0024.jpg',
  ),
  433 => 
  array (
    'id' => 450,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0027.jpg',
    'thumb' => 'r_1617623930DSC_0027.jpg',
  ),
  434 => 
  array (
    'id' => 451,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0030.jpg',
    'thumb' => 'r_1617623930DSC_0030.jpg',
  ),
  435 => 
  array (
    'id' => 452,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0035.jpg',
    'thumb' => 'r_1617623930DSC_0035.jpg',
  ),
  436 => 
  array (
    'id' => 453,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0039.jpg',
    'thumb' => 'r_1617623930DSC_0039.jpg',
  ),
  437 => 
  array (
    'id' => 454,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0042.jpg',
    'thumb' => 'r_1617623930DSC_0042.jpg',
  ),
  438 => 
  array (
    'id' => 455,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0044.jpg',
    'thumb' => 'r_1617623930DSC_0044.jpg',
  ),
  439 => 
  array (
    'id' => 456,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0054.jpg',
    'thumb' => 'r_1617623930DSC_0054.jpg',
  ),
  440 => 
  array (
    'id' => 457,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0055.jpg',
    'thumb' => 'r_1617623930DSC_0055.jpg',
  ),
  441 => 
  array (
    'id' => 458,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617623930DSC_0057.jpg',
    'thumb' => 'r_1617623930DSC_0057.jpg',
  ),
  442 => 
  array (
    'id' => 459,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176239300DSC_0058.jpg',
    'thumb' => 'r_16176239300DSC_0058.jpg',
  ),
  443 => 
  array (
    'id' => 460,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176239301DSC_0064.jpg',
    'thumb' => 'r_16176239301DSC_0064.jpg',
  ),
  444 => 
  array (
    'id' => 461,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176239302DSC_0065.jpg',
    'thumb' => 'r_16176239302DSC_0065.jpg',
  ),
  445 => 
  array (
    'id' => 462,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176239303DSC_0071.jpg',
    'thumb' => 'r_16176239303DSC_0071.jpg',
  ),
  446 => 
  array (
    'id' => 463,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176239304DSC_0075.jpg',
    'thumb' => 'r_16176239304DSC_0075.jpg',
  ),
  447 => 
  array (
    'id' => 464,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176239305DSC_0076.jpg',
    'thumb' => 'r_16176239305DSC_0076.jpg',
  ),
  448 => 
  array (
    'id' => 465,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176239306DSC_0082.jpg',
    'thumb' => 'r_16176239306DSC_0082.jpg',
  ),
  449 => 
  array (
    'id' => 466,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176239307DSC_0091.jpg',
    'thumb' => 'r_16176239307DSC_0091.jpg',
  ),
  450 => 
  array (
    'id' => 467,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176239308DSC_0094.jpg',
    'thumb' => 'r_16176239308DSC_0094.jpg',
  ),
  451 => 
  array (
    'id' => 468,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0140.jpg',
    'thumb' => 'r_1617624094DSC_0140.jpg',
  ),
  452 => 
  array (
    'id' => 469,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0145.jpg',
    'thumb' => 'r_1617624094DSC_0145.jpg',
  ),
  453 => 
  array (
    'id' => 470,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0148.jpg',
    'thumb' => 'r_1617624094DSC_0148.jpg',
  ),
  454 => 
  array (
    'id' => 471,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0181.jpg',
    'thumb' => 'r_1617624094DSC_0181.jpg',
  ),
  455 => 
  array (
    'id' => 472,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0184.jpg',
    'thumb' => 'r_1617624094DSC_0184.jpg',
  ),
  456 => 
  array (
    'id' => 473,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0191.jpg',
    'thumb' => 'r_1617624094DSC_0191.jpg',
  ),
  457 => 
  array (
    'id' => 474,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0226.jpg',
    'thumb' => 'r_1617624094DSC_0226.jpg',
  ),
  458 => 
  array (
    'id' => 475,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0292.jpg',
    'thumb' => 'r_1617624094DSC_0292.jpg',
  ),
  459 => 
  array (
    'id' => 476,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0300.jpg',
    'thumb' => 'r_1617624094DSC_0300.jpg',
  ),
  460 => 
  array (
    'id' => 477,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624094DSC_0351.jpg',
    'thumb' => 'r_1617624094DSC_0351.jpg',
  ),
  461 => 
  array (
    'id' => 478,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176240940DSC_0365.jpg',
    'thumb' => 'r_16176240940DSC_0365.jpg',
  ),
  462 => 
  array (
    'id' => 479,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176240941DSC_0387.jpg',
    'thumb' => 'r_16176240941DSC_0387.jpg',
  ),
  463 => 
  array (
    'id' => 480,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176240942DSC_0390.jpg',
    'thumb' => 'r_16176240942DSC_0390.jpg',
  ),
  464 => 
  array (
    'id' => 481,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176240943DSC_0393.jpg',
    'thumb' => 'r_16176240943DSC_0393.jpg',
  ),
  465 => 
  array (
    'id' => 482,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176240944DSC_0399.jpg',
    'thumb' => 'r_16176240944DSC_0399.jpg',
  ),
  466 => 
  array (
    'id' => 487,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624238DSC_0059.jpg',
    'thumb' => 'r_1617624238DSC_0059.jpg',
  ),
  467 => 
  array (
    'id' => 488,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624238DSC_0098.jpg',
    'thumb' => 'r_1617624238DSC_0098.jpg',
  ),
  468 => 
  array (
    'id' => 485,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176240947DSC_0412.jpg',
    'thumb' => 'r_16176240947DSC_0412.jpg',
  ),
  469 => 
  array (
    'id' => 486,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '16176240948DSC_0414.jpg',
    'thumb' => 'r_16176240948DSC_0414.jpg',
  ),
  470 => 
  array (
    'id' => 489,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624238DSC_0136.jpg',
    'thumb' => 'r_1617624238DSC_0136.jpg',
  ),
  471 => 
  array (
    'id' => 490,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624238DSC_0140.jpg',
    'thumb' => 'r_1617624238DSC_0140.jpg',
  ),
  472 => 
  array (
    'id' => 491,
    'gallery_id' => 60,
    'title' => 'Rajim CKS 2017',
    'image' => '1617624238DSC_0363.jpg',
    'thumb' => 'r_1617624238DSC_0363.jpg',
  ),
  473 => 
  array (
    'id' => 492,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627251DSC_0012.jpg',
    'thumb' => 'r_1617627251DSC_0012.jpg',
  ),
  474 => 
  array (
    'id' => 493,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627251DSC_0018.jpg',
    'thumb' => 'r_1617627251DSC_0018.jpg',
  ),
  475 => 
  array (
    'id' => 494,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627251DSC_0020.jpg',
    'thumb' => 'r_1617627251DSC_0020.jpg',
  ),
  476 => 
  array (
    'id' => 495,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627251DSC_0024.jpg',
    'thumb' => 'r_1617627251DSC_0024.jpg',
  ),
  477 => 
  array (
    'id' => 496,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627251DSC_0032.jpg',
    'thumb' => 'r_1617627251DSC_0032.jpg',
  ),
  478 => 
  array (
    'id' => 497,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627251DSC_0036.jpg',
    'thumb' => 'r_1617627251DSC_0036.jpg',
  ),
  479 => 
  array (
    'id' => 498,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627251DSC_0038.jpg',
    'thumb' => 'r_1617627251DSC_0038.jpg',
  ),
  480 => 
  array (
    'id' => 499,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627251DSC_0042.jpg',
    'thumb' => 'r_1617627251DSC_0042.jpg',
  ),
  481 => 
  array (
    'id' => 512,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0166.jpg',
    'thumb' => 'r_1617627392DSC_0166.jpg',
  ),
  482 => 
  array (
    'id' => 501,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627252DSC_0048.jpg',
    'thumb' => 'r_1617627252DSC_0048.jpg',
  ),
  483 => 
  array (
    'id' => 502,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272520DSC_0052.jpg',
    'thumb' => 'r_16176272520DSC_0052.jpg',
  ),
  484 => 
  array (
    'id' => 503,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272521DSC_0056.jpg',
    'thumb' => 'r_16176272521DSC_0056.jpg',
  ),
  485 => 
  array (
    'id' => 504,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272522DSC_0060.jpg',
    'thumb' => 'r_16176272522DSC_0060.jpg',
  ),
  486 => 
  array (
    'id' => 505,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272523DSC_0062.jpg',
    'thumb' => 'r_16176272523DSC_0062.jpg',
  ),
  487 => 
  array (
    'id' => 506,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272524DSC_0066.jpg',
    'thumb' => 'r_16176272524DSC_0066.jpg',
  ),
  488 => 
  array (
    'id' => 507,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272525DSC_0067.jpg',
    'thumb' => 'r_16176272525DSC_0067.jpg',
  ),
  489 => 
  array (
    'id' => 508,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272526DSC_0071.jpg',
    'thumb' => 'r_16176272526DSC_0071.jpg',
  ),
  490 => 
  array (
    'id' => 509,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272527DSC_0077.jpg',
    'thumb' => 'r_16176272527DSC_0077.jpg',
  ),
  491 => 
  array (
    'id' => 510,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272528DSC_0078.jpg',
    'thumb' => 'r_16176272528DSC_0078.jpg',
  ),
  492 => 
  array (
    'id' => 511,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176272529DSC_0081.jpg',
    'thumb' => 'r_16176272529DSC_0081.jpg',
  ),
  493 => 
  array (
    'id' => 513,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0181.jpg',
    'thumb' => 'r_1617627392DSC_0181.jpg',
  ),
  494 => 
  array (
    'id' => 514,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0185.jpg',
    'thumb' => 'r_1617627392DSC_0185.jpg',
  ),
  495 => 
  array (
    'id' => 515,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0188.jpg',
    'thumb' => 'r_1617627392DSC_0188.jpg',
  ),
  496 => 
  array (
    'id' => 516,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0189.jpg',
    'thumb' => 'r_1617627392DSC_0189.jpg',
  ),
  497 => 
  array (
    'id' => 517,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0193.jpg',
    'thumb' => 'r_1617627392DSC_0193.jpg',
  ),
  498 => 
  array (
    'id' => 518,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0194.jpg',
    'thumb' => 'r_1617627392DSC_0194.jpg',
  ),
  499 => 
  array (
    'id' => 519,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0201.jpg',
    'thumb' => 'r_1617627392DSC_0201.jpg',
  ),
  500 => 
  array (
    'id' => 520,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0202.jpg',
    'thumb' => 'r_1617627392DSC_0202.jpg',
  ),
  501 => 
  array (
    'id' => 521,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '1617627392DSC_0206.jpg',
    'thumb' => 'r_1617627392DSC_0206.jpg',
  ),
  502 => 
  array (
    'id' => 522,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176273920DSC_0209.jpg',
    'thumb' => 'r_16176273920DSC_0209.jpg',
  ),
  503 => 
  array (
    'id' => 523,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176273921DSC_0210.jpg',
    'thumb' => 'r_16176273921DSC_0210.jpg',
  ),
  504 => 
  array (
    'id' => 524,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176273922DSC_0214.jpg',
    'thumb' => 'r_16176273922DSC_0214.jpg',
  ),
  505 => 
  array (
    'id' => 525,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176273923DSC_0218.jpg',
    'thumb' => 'r_16176273923DSC_0218.jpg',
  ),
  506 => 
  array (
    'id' => 526,
    'gallery_id' => 61,
    'title' => 'Meeting CKS 2017',
    'image' => '16176273924DSC_0220.jpg',
    'thumb' => 'r_16176273924DSC_0220.jpg',
  ),
  507 => 
  array (
    'id' => 530,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0305.jpg',
    'thumb' => 'r_1617628196DSC_0305.jpg',
  ),
  508 => 
  array (
    'id' => 531,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0306.jpg',
    'thumb' => 'r_1617628196DSC_0306.jpg',
  ),
  509 => 
  array (
    'id' => 532,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0309.jpg',
    'thumb' => 'r_1617628196DSC_0309.jpg',
  ),
  510 => 
  array (
    'id' => 533,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0313.jpg',
    'thumb' => 'r_1617628196DSC_0313.jpg',
  ),
  511 => 
  array (
    'id' => 534,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0322.jpg',
    'thumb' => 'r_1617628196DSC_0322.jpg',
  ),
  512 => 
  array (
    'id' => 535,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0323.jpg',
    'thumb' => 'r_1617628196DSC_0323.jpg',
  ),
  513 => 
  array (
    'id' => 536,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0325.jpg',
    'thumb' => 'r_1617628196DSC_0325.jpg',
  ),
  514 => 
  array (
    'id' => 537,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0326.jpg',
    'thumb' => 'r_1617628196DSC_0326.jpg',
  ),
  515 => 
  array (
    'id' => 538,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0332.jpg',
    'thumb' => 'r_1617628196DSC_0332.jpg',
  ),
  516 => 
  array (
    'id' => 539,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628196DSC_0333.jpg',
    'thumb' => 'r_1617628196DSC_0333.jpg',
  ),
  517 => 
  array (
    'id' => 540,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '16176281960DSC_0334.jpg',
    'thumb' => 'r_16176281960DSC_0334.jpg',
  ),
  518 => 
  array (
    'id' => 541,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '16176281961DSC_0335.jpg',
    'thumb' => 'r_16176281961DSC_0335.jpg',
  ),
  519 => 
  array (
    'id' => 542,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '16176281962DSC_0336.jpg',
    'thumb' => 'r_16176281962DSC_0336.jpg',
  ),
  520 => 
  array (
    'id' => 543,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '16176281963DSC_0339.jpg',
    'thumb' => 'r_16176281963DSC_0339.jpg',
  ),
  521 => 
  array (
    'id' => 544,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '16176281964DSC_0341.jpg',
    'thumb' => 'r_16176281964DSC_0341.jpg',
  ),
  522 => 
  array (
    'id' => 545,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '16176281965DSC_0342.jpg',
    'thumb' => 'r_16176281965DSC_0342.jpg',
  ),
  523 => 
  array (
    'id' => 546,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '16176281966DSC_0343.jpg',
    'thumb' => 'r_16176281966DSC_0343.jpg',
  ),
  524 => 
  array (
    'id' => 547,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628222DSC_0310.jpg',
    'thumb' => 'r_1617628222DSC_0310.jpg',
  ),
  525 => 
  array (
    'id' => 548,
    'gallery_id' => 62,
    'title' => 'GRS CKS 2017',
    'image' => '1617628389DSC_0310.jpg',
    'thumb' => 'r_1617628389DSC_0310.jpg',
  ),
  526 => 
  array (
    'id' => 549,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0001.jpg',
    'thumb' => 'r_1617628610DSC_0001.jpg',
  ),
  527 => 
  array (
    'id' => 550,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0004.jpg',
    'thumb' => 'r_1617628610DSC_0004.jpg',
  ),
  528 => 
  array (
    'id' => 551,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0010.jpg',
    'thumb' => 'r_1617628610DSC_0010.jpg',
  ),
  529 => 
  array (
    'id' => 552,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0011.jpg',
    'thumb' => 'r_1617628610DSC_0011.jpg',
  ),
  530 => 
  array (
    'id' => 553,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0013.jpg',
    'thumb' => 'r_1617628610DSC_0013.jpg',
  ),
  531 => 
  array (
    'id' => 554,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0019.jpg',
    'thumb' => 'r_1617628610DSC_0019.jpg',
  ),
  532 => 
  array (
    'id' => 555,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0023.jpg',
    'thumb' => 'r_1617628610DSC_0023.jpg',
  ),
  533 => 
  array (
    'id' => 556,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0024.jpg',
    'thumb' => 'r_1617628610DSC_0024.jpg',
  ),
  534 => 
  array (
    'id' => 557,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0027.jpg',
    'thumb' => 'r_1617628610DSC_0027.jpg',
  ),
  535 => 
  array (
    'id' => 558,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628610DSC_0030.jpg',
    'thumb' => 'r_1617628610DSC_0030.jpg',
  ),
  536 => 
  array (
    'id' => 559,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286100DSC_0034.jpg',
    'thumb' => 'r_16176286100DSC_0034.jpg',
  ),
  537 => 
  array (
    'id' => 560,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286101DSC_0037.jpg',
    'thumb' => 'r_16176286101DSC_0037.jpg',
  ),
  538 => 
  array (
    'id' => 561,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286102DSC_0039.jpg',
    'thumb' => 'r_16176286102DSC_0039.jpg',
  ),
  539 => 
  array (
    'id' => 562,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286103DSC_0043.jpg',
    'thumb' => 'r_16176286103DSC_0043.jpg',
  ),
  540 => 
  array (
    'id' => 563,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286104DSC_0044.jpg',
    'thumb' => 'r_16176286104DSC_0044.jpg',
  ),
  541 => 
  array (
    'id' => 564,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286105DSC_0050.jpg',
    'thumb' => 'r_16176286105DSC_0050.jpg',
  ),
  542 => 
  array (
    'id' => 565,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286106DSC_0053.jpg',
    'thumb' => 'r_16176286106DSC_0053.jpg',
  ),
  543 => 
  array (
    'id' => 566,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286107DSC_0055.jpg',
    'thumb' => 'r_16176286107DSC_0055.jpg',
  ),
  544 => 
  array (
    'id' => 567,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286108DSC_0057.jpg',
    'thumb' => 'r_16176286108DSC_0057.jpg',
  ),
  545 => 
  array (
    'id' => 568,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '16176286109DSC_0060.jpg',
    'thumb' => 'r_16176286109DSC_0060.jpg',
  ),
  546 => 
  array (
    'id' => 569,
    'gallery_id' => 63,
    'title' => 'Basna Visit CKS 2017',
    'image' => '1617628658DSC_0010.jpg',
    'thumb' => 'r_1617628658DSC_0010.jpg',
  ),
  547 => 
  array (
    'id' => 570,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629086DSC_0001.jpg',
    'thumb' => 'r_1617629086DSC_0001.jpg',
  ),
  548 => 
  array (
    'id' => 571,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629086DSC_0015.jpg',
    'thumb' => 'r_1617629086DSC_0015.jpg',
  ),
  549 => 
  array (
    'id' => 572,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629086DSC_0019.jpg',
    'thumb' => 'r_1617629086DSC_0019.jpg',
  ),
  550 => 
  array (
    'id' => 573,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629086DSC_0023.jpg',
    'thumb' => 'r_1617629086DSC_0023.jpg',
  ),
  551 => 
  array (
    'id' => 574,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629086DSC_0025.jpg',
    'thumb' => 'r_1617629086DSC_0025.jpg',
  ),
  552 => 
  array (
    'id' => 575,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629087DSC_0029.jpg',
    'thumb' => 'r_1617629087DSC_0029.jpg',
  ),
  553 => 
  array (
    'id' => 576,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629087DSC_0032.jpg',
    'thumb' => 'r_1617629087DSC_0032.jpg',
  ),
  554 => 
  array (
    'id' => 577,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629087DSC_0036.jpg',
    'thumb' => 'r_1617629087DSC_0036.jpg',
  ),
  555 => 
  array (
    'id' => 578,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629087DSC_0050.jpg',
    'thumb' => 'r_1617629087DSC_0050.jpg',
  ),
  556 => 
  array (
    'id' => 579,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629087DSC_0055.jpg',
    'thumb' => 'r_1617629087DSC_0055.jpg',
  ),
  557 => 
  array (
    'id' => 580,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290870DSC_0057.jpg',
    'thumb' => 'r_16176290870DSC_0057.jpg',
  ),
  558 => 
  array (
    'id' => 581,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290871DSC_0059.jpg',
    'thumb' => 'r_16176290871DSC_0059.jpg',
  ),
  559 => 
  array (
    'id' => 582,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290872DSC_0072.jpg',
    'thumb' => 'r_16176290872DSC_0072.jpg',
  ),
  560 => 
  array (
    'id' => 583,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290873DSC_0075.jpg',
    'thumb' => 'r_16176290873DSC_0075.jpg',
  ),
  561 => 
  array (
    'id' => 584,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290874DSC_0077.jpg',
    'thumb' => 'r_16176290874DSC_0077.jpg',
  ),
  562 => 
  array (
    'id' => 585,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290875DSC_0083.jpg',
    'thumb' => 'r_16176290875DSC_0083.jpg',
  ),
  563 => 
  array (
    'id' => 586,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290876DSC_0087.jpg',
    'thumb' => 'r_16176290876DSC_0087.jpg',
  ),
  564 => 
  array (
    'id' => 587,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290877DSC_0091.jpg',
    'thumb' => 'r_16176290877DSC_0091.jpg',
  ),
  565 => 
  array (
    'id' => 588,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290878DSC_0092.jpg',
    'thumb' => 'r_16176290878DSC_0092.jpg',
  ),
  566 => 
  array (
    'id' => 589,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176290879DSC_0093.jpg',
    'thumb' => 'r_16176290879DSC_0093.jpg',
  ),
  567 => 
  array (
    'id' => 590,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0074.jpg',
    'thumb' => 'r_1617629148DSC_0074.jpg',
  ),
  568 => 
  array (
    'id' => 591,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0124.jpg',
    'thumb' => 'r_1617629148DSC_0124.jpg',
  ),
  569 => 
  array (
    'id' => 592,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0130.jpg',
    'thumb' => 'r_1617629148DSC_0130.jpg',
  ),
  570 => 
  array (
    'id' => 593,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0132.jpg',
    'thumb' => 'r_1617629148DSC_0132.jpg',
  ),
  571 => 
  array (
    'id' => 594,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0294.jpg',
    'thumb' => 'r_1617629148DSC_0294.jpg',
  ),
  572 => 
  array (
    'id' => 595,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0300.jpg',
    'thumb' => 'r_1617629148DSC_0300.jpg',
  ),
  573 => 
  array (
    'id' => 596,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0308.jpg',
    'thumb' => 'r_1617629148DSC_0308.jpg',
  ),
  574 => 
  array (
    'id' => 597,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0328.jpg',
    'thumb' => 'r_1617629148DSC_0328.jpg',
  ),
  575 => 
  array (
    'id' => 598,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0331.jpg',
    'thumb' => 'r_1617629148DSC_0331.jpg',
  ),
  576 => 
  array (
    'id' => 599,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629148DSC_0357.jpg',
    'thumb' => 'r_1617629148DSC_0357.jpg',
  ),
  577 => 
  array (
    'id' => 600,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176291480DSC_0360.jpg',
    'thumb' => 'r_16176291480DSC_0360.jpg',
  ),
  578 => 
  array (
    'id' => 601,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0440.jpg',
    'thumb' => 'r_1617629282DSC_0440.jpg',
  ),
  579 => 
  array (
    'id' => 602,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0443.jpg',
    'thumb' => 'r_1617629282DSC_0443.jpg',
  ),
  580 => 
  array (
    'id' => 603,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0449.jpg',
    'thumb' => 'r_1617629282DSC_0449.jpg',
  ),
  581 => 
  array (
    'id' => 604,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0509.jpg',
    'thumb' => 'r_1617629282DSC_0509.jpg',
  ),
  582 => 
  array (
    'id' => 605,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0544.jpg',
    'thumb' => 'r_1617629282DSC_0544.jpg',
  ),
  583 => 
  array (
    'id' => 606,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0565.jpg',
    'thumb' => 'r_1617629282DSC_0565.jpg',
  ),
  584 => 
  array (
    'id' => 607,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0588.jpg',
    'thumb' => 'r_1617629282DSC_0588.jpg',
  ),
  585 => 
  array (
    'id' => 608,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0590.jpg',
    'thumb' => 'r_1617629282DSC_0590.jpg',
  ),
  586 => 
  array (
    'id' => 609,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0639.jpg',
    'thumb' => 'r_1617629282DSC_0639.jpg',
  ),
  587 => 
  array (
    'id' => 610,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '1617629282DSC_0642.jpg',
    'thumb' => 'r_1617629282DSC_0642.jpg',
  ),
  588 => 
  array (
    'id' => 611,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176292820DSC_0652.jpg',
    'thumb' => 'r_16176292820DSC_0652.jpg',
  ),
  589 => 
  array (
    'id' => 612,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176292821DSC_0655.jpg',
    'thumb' => 'r_16176292821DSC_0655.jpg',
  ),
  590 => 
  array (
    'id' => 613,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176292822DSC_0700.jpg',
    'thumb' => 'r_16176292822DSC_0700.jpg',
  ),
  591 => 
  array (
    'id' => 614,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176292823DSC_0705.jpg',
    'thumb' => 'r_16176292823DSC_0705.jpg',
  ),
  592 => 
  array (
    'id' => 615,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176292834DSC_0710.jpg',
    'thumb' => 'r_16176292834DSC_0710.jpg',
  ),
  593 => 
  array (
    'id' => 616,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176292835DSC_0719.jpg',
    'thumb' => 'r_16176292835DSC_0719.jpg',
  ),
  594 => 
  array (
    'id' => 617,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176292836DSC_0726.jpg',
    'thumb' => 'r_16176292836DSC_0726.jpg',
  ),
  595 => 
  array (
    'id' => 618,
    'gallery_id' => 64,
    'title' => 'Jabar Hareli 2017',
    'image' => '16176292837DSC_0729.jpg',
    'thumb' => 'r_16176292837DSC_0729.jpg',
  ),
  596 => 
  array (
    'id' => 619,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9900.jpg',
    'thumb' => 'r_1617793553_DSC9900.jpg',
  ),
  597 => 
  array (
    'id' => 620,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9901.jpg',
    'thumb' => 'r_1617793553_DSC9901.jpg',
  ),
  598 => 
  array (
    'id' => 621,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9906.jpg',
    'thumb' => 'r_1617793553_DSC9906.jpg',
  ),
  599 => 
  array (
    'id' => 622,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9913.jpg',
    'thumb' => 'r_1617793553_DSC9913.jpg',
  ),
  600 => 
  array (
    'id' => 623,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9935.jpg',
    'thumb' => 'r_1617793553_DSC9935.jpg',
  ),
  601 => 
  array (
    'id' => 624,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9938.jpg',
    'thumb' => 'r_1617793553_DSC9938.jpg',
  ),
  602 => 
  array (
    'id' => 625,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9939.jpg',
    'thumb' => 'r_1617793553_DSC9939.jpg',
  ),
  603 => 
  array (
    'id' => 626,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9942.jpg',
    'thumb' => 'r_1617793553_DSC9942.jpg',
  ),
  604 => 
  array (
    'id' => 627,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9944.jpg',
    'thumb' => 'r_1617793553_DSC9944.jpg',
  ),
  605 => 
  array (
    'id' => 628,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '1617793553_DSC9945.jpg',
    'thumb' => 'r_1617793553_DSC9945.jpg',
  ),
  606 => 
  array (
    'id' => 629,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935530_DSC9947.jpg',
    'thumb' => 'r_16177935530_DSC9947.jpg',
  ),
  607 => 
  array (
    'id' => 630,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935531_DSC9955.jpg',
    'thumb' => 'r_16177935531_DSC9955.jpg',
  ),
  608 => 
  array (
    'id' => 631,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935532_DSC9974.jpg',
    'thumb' => 'r_16177935532_DSC9974.jpg',
  ),
  609 => 
  array (
    'id' => 632,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935533_DSC9975.jpg',
    'thumb' => 'r_16177935533_DSC9975.jpg',
  ),
  610 => 
  array (
    'id' => 633,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935534_DSC9978.jpg',
    'thumb' => 'r_16177935534_DSC9978.jpg',
  ),
  611 => 
  array (
    'id' => 634,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935535_DSC9984.jpg',
    'thumb' => 'r_16177935535_DSC9984.jpg',
  ),
  612 => 
  array (
    'id' => 635,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935536_DSC9985.jpg',
    'thumb' => 'r_16177935536_DSC9985.jpg',
  ),
  613 => 
  array (
    'id' => 636,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935537_DSC9992.jpg',
    'thumb' => 'r_16177935537_DSC9992.jpg',
  ),
  614 => 
  array (
    'id' => 637,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935538_DSC9993.jpg',
    'thumb' => 'r_16177935538_DSC9993.jpg',
  ),
  615 => 
  array (
    'id' => 638,
    'gallery_id' => 65,
    'title' => 'CKS Hareli 2017',
    'image' => '16177935539_DSC9997.jpg',
    'thumb' => 'r_16177935539_DSC9997.jpg',
  ),
  616 => 
  array (
    'id' => 639,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0021.jpg',
    'thumb' => 'r_1617794319DSC_0021.jpg',
  ),
  617 => 
  array (
    'id' => 640,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0022.jpg',
    'thumb' => 'r_1617794319DSC_0022.jpg',
  ),
  618 => 
  array (
    'id' => 641,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0026.jpg',
    'thumb' => 'r_1617794319DSC_0026.jpg',
  ),
  619 => 
  array (
    'id' => 642,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0028.jpg',
    'thumb' => 'r_1617794319DSC_0028.jpg',
  ),
  620 => 
  array (
    'id' => 643,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0043.jpg',
    'thumb' => 'r_1617794319DSC_0043.jpg',
  ),
  621 => 
  array (
    'id' => 644,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0046.jpg',
    'thumb' => 'r_1617794319DSC_0046.jpg',
  ),
  622 => 
  array (
    'id' => 645,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0048.jpg',
    'thumb' => 'r_1617794319DSC_0048.jpg',
  ),
  623 => 
  array (
    'id' => 646,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0049.jpg',
    'thumb' => 'r_1617794319DSC_0049.jpg',
  ),
  624 => 
  array (
    'id' => 647,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0066.jpg',
    'thumb' => 'r_1617794319DSC_0066.jpg',
  ),
  625 => 
  array (
    'id' => 648,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794319DSC_0072.jpg',
    'thumb' => 'r_1617794319DSC_0072.jpg',
  ),
  626 => 
  array (
    'id' => 649,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '16177943190DSC_0077.jpg',
    'thumb' => 'r_16177943190DSC_0077.jpg',
  ),
  627 => 
  array (
    'id' => 650,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '16177943191DSC_0084.jpg',
    'thumb' => 'r_16177943191DSC_0084.jpg',
  ),
  628 => 
  array (
    'id' => 651,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '16177943192DSC_0094.jpg',
    'thumb' => 'r_16177943192DSC_0094.jpg',
  ),
  629 => 
  array (
    'id' => 652,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794445DSC_0077.jpg',
    'thumb' => 'r_1617794445DSC_0077.jpg',
  ),
  630 => 
  array (
    'id' => 653,
    'gallery_id' => 66,
    'title' => 'Chhattisgadhi Taffari ',
    'image' => '1617794445DSC_0081.jpg',
    'thumb' => 'r_1617794445DSC_0081.jpg',
  ),
  631 => 
  array (
    'id' => 654,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0022.jpg',
    'thumb' => 'r_1617795175DSC_0022.jpg',
  ),
  632 => 
  array (
    'id' => 655,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0028.jpg',
    'thumb' => 'r_1617795175DSC_0028.jpg',
  ),
  633 => 
  array (
    'id' => 656,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0031.jpg',
    'thumb' => 'r_1617795175DSC_0031.jpg',
  ),
  634 => 
  array (
    'id' => 657,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0034.jpg',
    'thumb' => 'r_1617795175DSC_0034.jpg',
  ),
  635 => 
  array (
    'id' => 658,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0038.jpg',
    'thumb' => 'r_1617795175DSC_0038.jpg',
  ),
  636 => 
  array (
    'id' => 659,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0041.jpg',
    'thumb' => 'r_1617795175DSC_0041.jpg',
  ),
  637 => 
  array (
    'id' => 660,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0042.jpg',
    'thumb' => 'r_1617795175DSC_0042.jpg',
  ),
  638 => 
  array (
    'id' => 661,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0057.jpg',
    'thumb' => 'r_1617795175DSC_0057.jpg',
  ),
  639 => 
  array (
    'id' => 662,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0061.jpg',
    'thumb' => 'r_1617795175DSC_0061.jpg',
  ),
  640 => 
  array (
    'id' => 663,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795175DSC_0063.jpg',
    'thumb' => 'r_1617795175DSC_0063.jpg',
  ),
  641 => 
  array (
    'id' => 664,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '16177951750DSC_0065.jpg',
    'thumb' => 'r_16177951750DSC_0065.jpg',
  ),
  642 => 
  array (
    'id' => 665,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '16177951751DSC_0066.jpg',
    'thumb' => 'r_16177951751DSC_0066.jpg',
  ),
  643 => 
  array (
    'id' => 666,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '16177951752DSC_0070.jpg',
    'thumb' => 'r_16177951752DSC_0070.jpg',
  ),
  644 => 
  array (
    'id' => 667,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '16177951753DSC_0078.jpg',
    'thumb' => 'r_16177951753DSC_0078.jpg',
  ),
  645 => 
  array (
    'id' => 668,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '16177951754DSC_0082.jpg',
    'thumb' => 'r_16177951754DSC_0082.jpg',
  ),
  646 => 
  array (
    'id' => 669,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '16177951755DSC_0090.jpg',
    'thumb' => 'r_16177951755DSC_0090.jpg',
  ),
  647 => 
  array (
    'id' => 670,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '16177951756DSC_0095.jpg',
    'thumb' => 'r_16177951756DSC_0095.jpg',
  ),
  648 => 
  array (
    'id' => 671,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '16177951757DSC_0099.jpg',
    'thumb' => 'r_16177951757DSC_0099.jpg',
  ),
  649 => 
  array (
    'id' => 672,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795248DSC_0115.jpg',
    'thumb' => 'r_1617795248DSC_0115.jpg',
  ),
  650 => 
  array (
    'id' => 673,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795248DSC_0192.jpg',
    'thumb' => 'r_1617795248DSC_0192.jpg',
  ),
  651 => 
  array (
    'id' => 674,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795248DSC_0220.jpg',
    'thumb' => 'r_1617795248DSC_0220.jpg',
  ),
  652 => 
  array (
    'id' => 675,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795248DSC_0239.jpg',
    'thumb' => 'r_1617795248DSC_0239.jpg',
  ),
  653 => 
  array (
    'id' => 676,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795248DSC_0240.jpg',
    'thumb' => 'r_1617795248DSC_0240.jpg',
  ),
  654 => 
  array (
    'id' => 677,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795248DSC_0246.jpg',
    'thumb' => 'r_1617795248DSC_0246.jpg',
  ),
  655 => 
  array (
    'id' => 678,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795248DSC_0261.jpg',
    'thumb' => 'r_1617795248DSC_0261.jpg',
  ),
  656 => 
  array (
    'id' => 679,
    'gallery_id' => 67,
    'title' => 'Balodabazar-2017',
    'image' => '1617795309DSC_0087.jpg',
    'thumb' => 'r_1617795309DSC_0087.jpg',
  ),
  657 => 
  array (
    'id' => 680,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796268DSC_0024.jpg',
    'thumb' => 'r_1617796268DSC_0024.jpg',
  ),
  658 => 
  array (
    'id' => 681,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796268DSC_0030.jpg',
    'thumb' => 'r_1617796268DSC_0030.jpg',
  ),
  659 => 
  array (
    'id' => 682,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796269DSC_0032.jpg',
    'thumb' => 'r_1617796269DSC_0032.jpg',
  ),
  660 => 
  array (
    'id' => 683,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796269DSC_0045.jpg',
    'thumb' => 'r_1617796269DSC_0045.jpg',
  ),
  661 => 
  array (
    'id' => 684,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796269DSC_0047.jpg',
    'thumb' => 'r_1617796269DSC_0047.jpg',
  ),
  662 => 
  array (
    'id' => 685,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796269DSC_0051.jpg',
    'thumb' => 'r_1617796269DSC_0051.jpg',
  ),
  663 => 
  array (
    'id' => 686,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796269DSC_0052.jpg',
    'thumb' => 'r_1617796269DSC_0052.jpg',
  ),
  664 => 
  array (
    'id' => 687,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796269DSC_0059.jpg',
    'thumb' => 'r_1617796269DSC_0059.jpg',
  ),
  665 => 
  array (
    'id' => 688,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796269DSC_0064.jpg',
    'thumb' => 'r_1617796269DSC_0064.jpg',
  ),
  666 => 
  array (
    'id' => 689,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '1617796269DSC_0075.jpg',
    'thumb' => 'r_1617796269DSC_0075.jpg',
  ),
  667 => 
  array (
    'id' => 690,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962690DSC_0078.jpg',
    'thumb' => 'r_16177962690DSC_0078.jpg',
  ),
  668 => 
  array (
    'id' => 691,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962691DSC_0080.jpg',
    'thumb' => 'r_16177962691DSC_0080.jpg',
  ),
  669 => 
  array (
    'id' => 692,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962692DSC_0083.jpg',
    'thumb' => 'r_16177962692DSC_0083.jpg',
  ),
  670 => 
  array (
    'id' => 693,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962693DSC_0087.jpg',
    'thumb' => 'r_16177962693DSC_0087.jpg',
  ),
  671 => 
  array (
    'id' => 694,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962694DSC_0091.jpg',
    'thumb' => 'r_16177962694DSC_0091.jpg',
  ),
  672 => 
  array (
    'id' => 695,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962695DSC_0094.jpg',
    'thumb' => 'r_16177962695DSC_0094.jpg',
  ),
  673 => 
  array (
    'id' => 696,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962696DSC_0102.jpg',
    'thumb' => 'r_16177962696DSC_0102.jpg',
  ),
  674 => 
  array (
    'id' => 697,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962697DSC_0139.jpg',
    'thumb' => 'r_16177962697DSC_0139.jpg',
  ),
  675 => 
  array (
    'id' => 698,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962698DSC_0141.jpg',
    'thumb' => 'r_16177962698DSC_0141.jpg',
  ),
  676 => 
  array (
    'id' => 699,
    'gallery_id' => 68,
    'title' => 'Rajim CKS-2017',
    'image' => '16177962699DSC_0145.jpg',
    'thumb' => 'r_16177962699DSC_0145.jpg',
  ),
  677 => 
  array (
    'id' => 700,
    'gallery_id' => 69,
    'title' => '#Save Bastar',
    'image' => '16222742421.jpg',
    'thumb' => 'r_16222742421.jpg',
  ),
  678 => 
  array (
    'id' => 701,
    'gallery_id' => 69,
    'title' => '#Save Bastar',
    'image' => '16222742422.jpg',
    'thumb' => 'r_16222742422.jpg',
  ),
  679 => 
  array (
    'id' => 702,
    'gallery_id' => 69,
    'title' => '#Save Bastar',
    'image' => '16222742423.jpg',
    'thumb' => 'r_16222742423.jpg',
  ),
  680 => 
  array (
    'id' => 703,
    'gallery_id' => 69,
    'title' => '#Save Bastar',
    'image' => '16222742424.jpg',
    'thumb' => 'r_16222742424.jpg',
  ),
  681 => 
  array (
    'id' => 704,
    'gallery_id' => 69,
    'title' => '#Save Bastar',
    'image' => '16222742425.jpg',
    'thumb' => 'r_16222742425.jpg',
  ),
  682 => 
  array (
    'id' => 705,
    'gallery_id' => 69,
    'title' => '#Save Bastar',
    'image' => '16222742426.jpg',
    'thumb' => 'r_16222742426.jpg',
  ),
  683 => 
  array (
    'id' => 706,
    'gallery_id' => 69,
    'title' => '#Save Bastar',
    'image' => '16222742427.jpg',
    'thumb' => 'r_16222742427.jpg',
  ),
  684 => 
  array (
    'id' => 707,
    'gallery_id' => 69,
    'title' => '#Save Bastar',
    'image' => '16222742428.jpg',
    'thumb' => 'r_16222742428.jpg',
  ),
  685 => 
  array (
    'id' => 708,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267639.jpg',
    'thumb' => 'r_163298267639.jpg',
  ),
  686 => 
  array (
    'id' => 709,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267638.jpg',
    'thumb' => 'r_163298267638.jpg',
  ),
  687 => 
  array (
    'id' => 710,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267636.jpg',
    'thumb' => 'r_163298267636.jpg',
  ),
  688 => 
  array (
    'id' => 711,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267635.jpg',
    'thumb' => 'r_163298267635.jpg',
  ),
  689 => 
  array (
    'id' => 712,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267634.jpg',
    'thumb' => 'r_163298267634.jpg',
  ),
  690 => 
  array (
    'id' => 713,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267630.jpg',
    'thumb' => 'r_163298267630.jpg',
  ),
  691 => 
  array (
    'id' => 714,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267626.jpg',
    'thumb' => 'r_163298267626.jpg',
  ),
  692 => 
  array (
    'id' => 715,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267622.jpg',
    'thumb' => 'r_163298267622.jpg',
  ),
  693 => 
  array (
    'id' => 716,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267707.jpg',
    'thumb' => 'r_163298267707.jpg',
  ),
  694 => 
  array (
    'id' => 717,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '163298267706.jpg',
    'thumb' => 'r_163298267706.jpg',
  ),
  695 => 
  array (
    'id' => 718,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '1632982677005.jpg',
    'thumb' => 'r_1632982677005.jpg',
  ),
  696 => 
  array (
    'id' => 719,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना',
    'image' => '1632982677104.jpg',
    'thumb' => 'r_1632982677104.jpg',
  ),
  697 => 
  array (
    'id' => 720,
    'gallery_id' => 71,
    'title' => 'छत्तीसगढिया क्रान्ति सेना जेल जाबो आंदोलन 2021',
    'image' => '163306750247.jpg',
    'thumb' => 'r_163306750247.jpg',
  ),
  698 => 
  array (
    'id' => 721,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905262.jpg',
    'thumb' => 'r_163306905262.jpg',
  ),
  699 => 
  array (
    'id' => 722,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905261.jpg',
    'thumb' => 'r_163306905261.jpg',
  ),
  700 => 
  array (
    'id' => 723,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905259.jpg',
    'thumb' => 'r_163306905259.jpg',
  ),
  701 => 
  array (
    'id' => 724,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905258.jpg',
    'thumb' => 'r_163306905258.jpg',
  ),
  702 => 
  array (
    'id' => 725,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905257.jpg',
    'thumb' => 'r_163306905257.jpg',
  ),
  703 => 
  array (
    'id' => 726,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905256.jpg',
    'thumb' => 'r_163306905256.jpg',
  ),
  704 => 
  array (
    'id' => 727,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905254.jpg',
    'thumb' => 'r_163306905254.jpg',
  ),
  705 => 
  array (
    'id' => 728,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905353.jpg',
    'thumb' => 'r_163306905353.jpg',
  ),
  706 => 
  array (
    'id' => 729,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905352.jpg',
    'thumb' => 'r_163306905352.jpg',
  ),
  707 => 
  array (
    'id' => 730,
    'gallery_id' => 72,
    'title' => '',
    'image' => '163306905351.jpg',
    'thumb' => 'r_163306905351.jpg',
  ),
  708 => 
  array (
    'id' => 731,
    'gallery_id' => 72,
    'title' => '',
    'image' => '1633069053050.jpg',
    'thumb' => 'r_1633069053050.jpg',
  ),
  709 => 
  array (
    'id' => 732,
    'gallery_id' => 72,
    'title' => '',
    'image' => '1633069053149.jpg',
    'thumb' => 'r_1633069053149.jpg',
  ),
  710 => 
  array (
    'id' => 733,
    'gallery_id' => 72,
    'title' => '',
    'image' => '1633069053248.jpg',
    'thumb' => 'r_1633069053248.jpg',
  ),
  711 => 
  array (
    'id' => 734,
    'gallery_id' => 72,
    'title' => '',
    'image' => '1633069053347.jpg',
    'thumb' => 'r_1633069053347.jpg',
  ),
  712 => 
  array (
    'id' => 735,
    'gallery_id' => 73,
    'title' => '',
    'image' => '163334156763.jpg',
    'thumb' => 'r_163334156763.jpg',
  ),
  713 => 
  array (
    'id' => 736,
    'gallery_id' => 74,
    'title' => 'छत्तीसगढ़िया वाणिज्य एवम उद्योग महासंघ   देवारी नेवता',
    'image' => '16366124751.jpg',
    'thumb' => 'r_16366124751.jpg',
  ),
  714 => 
  array (
    'id' => 737,
    'gallery_id' => 74,
    'title' => 'छत्तीसगढ़िया वाणिज्य एवम उद्योग महासंघ   देवारी नेवता',
    'image' => '16366124752.jpg',
    'thumb' => 'r_16366124752.jpg',
  ),
  715 => 
  array (
    'id' => 738,
    'gallery_id' => 74,
    'title' => 'छत्तीसगढ़िया वाणिज्य एवम उद्योग महासंघ   देवारी नेवता',
    'image' => '16366124754.jpg',
    'thumb' => 'r_16366124754.jpg',
  ),
  716 => 
  array (
    'id' => 739,
    'gallery_id' => 74,
    'title' => 'छत्तीसगढ़िया वाणिज्य एवम उद्योग महासंघ   देवारी नेवता',
    'image' => '16366128275.jpg',
    'thumb' => 'r_16366128275.jpg',
  ),
  717 => 
  array (
    'id' => 740,
    'gallery_id' => 76,
    'title' => 'हमर छत्तीसगढ़िया ब्यापारी भाई विनय साहू जी आर. एस. होन्डा. सेजबहार के संचालक',
    'image' => '163799713017.jpg',
    'thumb' => 'r_163799713017.jpg',
  ),
  718 => 
  array (
    'id' => 741,
    'gallery_id' => 76,
    'title' => 'हमर छत्तीसगढ़िया ब्यापारी भाई विनय साहू जी आर. एस. होन्डा. सेजबहार के संचालक',
    'image' => '163799713018.jpg',
    'thumb' => 'r_163799713018.jpg',
  ),
  719 => 
  array (
    'id' => 742,
    'gallery_id' => 77,
    'title' => 'अभनपुर ब्लाक के ग्राम खोरपा मे आज दिनांक 28.11.2021  के जबर सदस्य्ता अभियान चलाय गिस ।  जोहार छत्तीसगढ़',
    'image' => '163816749726.jpg',
    'thumb' => 'r_163816749726.jpg',
  ),
  720 => 
  array (
    'id' => 743,
    'gallery_id' => 77,
    'title' => 'अभनपुर ब्लाक के ग्राम खोरपा मे आज दिनांक 28.11.2021  के जबर सदस्य्ता अभियान चलाय गिस ।  जोहार छत्तीसगढ़',
    'image' => '163816749727.jpg',
    'thumb' => 'r_163816749727.jpg',
  ),
  721 => 
  array (
    'id' => 744,
    'gallery_id' => 77,
    'title' => 'अभनपुर ब्लाक के ग्राम खोरपा मे आज दिनांक 28.11.2021  के जबर सदस्य्ता अभियान चलाय गिस ।  जोहार छत्तीसगढ़',
    'image' => '163816749728.jpg',
    'thumb' => 'r_163816749728.jpg',
  ),
  722 => 
  array (
    'id' => 745,
    'gallery_id' => 78,
    'title' => 'x',
    'image' => '1664145654ri.php.jpg',
    'thumb' => 'r_1664145654ri.php.jpg',
  ),
  723 => 
  array (
    'id' => 746,
    'gallery_id' => 78,
    'title' => 'x',
    'image' => '1664145672ri.jpg',
    'thumb' => 'r_1664145672ri.jpg',
  ),
  724 => 
  array (
    'id' => 748,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '16810362682.jpeg',
    'thumb' => 'r_16810362682.jpeg',
  ),
  725 => 
  array (
    'id' => 749,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '16810362683.jpeg',
    'thumb' => 'r_16810362683.jpeg',
  ),
  726 => 
  array (
    'id' => 750,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '16810362684.jpeg',
    'thumb' => 'r_16810362684.jpeg',
  ),
  727 => 
  array (
    'id' => 751,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '16810362685.jpeg',
    'thumb' => 'r_16810362685.jpeg',
  ),
  728 => 
  array (
    'id' => 752,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '16810362686.jpeg',
    'thumb' => 'r_16810362686.jpeg',
  ),
  729 => 
  array (
    'id' => 753,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '16810362687.jpeg',
    'thumb' => 'r_16810362687.jpeg',
  ),
  730 => 
  array (
    'id' => 754,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '16810362688.jpeg',
    'thumb' => 'r_16810362688.jpeg',
  ),
  731 => 
  array (
    'id' => 755,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '16810362689.jpeg',
    'thumb' => 'r_16810362689.jpeg',
  ),
  732 => 
  array (
    'id' => 758,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '1681036268112.jpeg',
    'thumb' => 'r_1681036268112.jpeg',
  ),
  733 => 
  array (
    'id' => 759,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '1681036269213.jpeg',
    'thumb' => 'r_1681036269213.jpeg',
  ),
  734 => 
  array (
    'id' => 760,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '1681036269314.jpeg',
    'thumb' => 'r_1681036269314.jpeg',
  ),
  735 => 
  array (
    'id' => 761,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '1681036269415.jpeg',
    'thumb' => 'r_1681036269415.jpeg',
  ),
  736 => 
  array (
    'id' => 762,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '1681036269516.jpeg',
    'thumb' => 'r_1681036269516.jpeg',
  ),
  737 => 
  array (
    'id' => 763,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '1681036269617.jpeg',
    'thumb' => 'r_1681036269617.jpeg',
  ),
  738 => 
  array (
    'id' => 764,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '1681036269718.jpeg',
    'thumb' => 'r_1681036269718.jpeg',
  ),
  739 => 
  array (
    'id' => 765,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '1681036269819.jpeg',
    'thumb' => 'r_1681036269819.jpeg',
  ),
  740 => 
  array (
    'id' => 766,
    'gallery_id' => 79,
    'title' => 'छत्तीसगढ़िया क्रांति सेना का बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करने का संकल्प, लोग दान कर रहे कांसा   छत्तीसगढ़िया क्रांति सेना बूढ़ादेव की 71 फीट की प्रतिमा स्थापित करेगी. इसके लिए लोगों के घर-घर जाकर कांसा लिया जा रहा है. बूढ़ा देव की प्रतिमा के लिए लोग बढ़-चढ़कर कांसा दान कर रहे हैं.',
    'image' => '1681036269920.jpeg',
    'thumb' => 'r_1681036269920.jpeg',
  ),
  741 => 
  array (
    'id' => 767,
    'gallery_id' => 80,
    'title' => 'CG',
    'image' => '169773441022222222.jpeg',
    'thumb' => 'r_169773441022222222.jpeg',
  ),
);

        DB::transaction(function () use ($albums, $photos) {
            foreach ($albums as $album) {
                Gallery::updateOrCreate(
                    ['id' => $album['id']],
                    [
                        'title' => $album['title'],
                        'cover_image' => $album['cover_image'],
                        'post_date' => $album['post_date'],
                    ]
                );
            }

            // Only insert photos whose gallery exists
            $albumIds = array_column($albums, 'id');
            $validPhotos = array_filter($photos, fn($p) => in_array($p['gallery_id'], $albumIds));

            foreach ($validPhotos as $photo) {
                GalleryPhoto::updateOrCreate(
                    ['id' => $photo['id']],
                    [
                        'gallery_id' => $photo['gallery_id'],
                        'title' => $photo['title'],
                        'image' => $photo['image'],
                        'thumb' => $photo['thumb'],
                    ]
                );
            }
        });
    }
}
