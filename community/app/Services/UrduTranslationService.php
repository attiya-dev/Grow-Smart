<?php

namespace App\Services;

class UrduTranslationService
{
    private array $semanticOverrides = [
        'millions' => 'لاکھوں',
        'million' => 'لاکھ',
        'people' => 'لوگوں',
        'food crops' => 'غذائی فصلیں',
        'citrus fruit crops' => 'ترشاوہ پھلوں کی فصلیں',
        'citrus fruit crop' => 'ترشاوہ پھلوں کی فصل',
        'fruit crops' => 'پھلوں کی فصلیں',
        'vegetable crops' => 'سبزیوں کی فصلیں',
        'root vegetable' => 'جڑ والی سبزی',
        'root vegetable crop' => 'جڑ والی سبزی کی فصل',
        'oilseed crop' => 'تیل دار فصل',
        'oilseed crops' => 'تیل دار فصلیں',
        'cereal crop' => 'اناج کی فصل',
        'forage crop' => 'چارہ فصل',
        'spice crop' => 'مصالحے کی فصل',
        'medicinal crop' => 'ادویاتی فصل',
        'leafy vegetable' => 'پتوں والی سبزی',
        'temperate fruit crop' => 'معتدل آب و ہوا کے پھلوں کی فصل',
        'warm regions' => 'گرم علاقوں',
        'cooler regions' => 'سرد علاقوں',
        'cool climates' => 'ٹھنڈی آب و ہوا',
        'high market demand' => 'منڈی میں زیادہ طلب',
        'high economic value' => 'زیادہ معاشی قدر',
        'domestic and export markets' => 'مقامی اور برآمدی منڈیوں',
        'local and international markets' => 'مقامی اور بین الاقوامی منڈیوں',
        'animal feed' => 'جانوروں کی خوراک',
        'food processing industries' => 'غذائی مصنوعات کی صنعت',
        'processed food products' => 'تیار شدہ غذائی مصنوعات',
        'meals' => 'کھانے',
        'meal' => 'کھانا',
        'daily' => 'روزمرہ',
        'source' => 'ذریعہ',
        'major' => 'اہم',
        'countries' => 'ممالک',
        'country' => 'ملک',
        'widely' => 'بڑے پیمانے پر',
        'used' => 'استعمال کیا جاتا ہے',
        'provides' => 'فراہم کرتا ہے',
        'providing' => 'فراہم کرنا',
        'employment' => 'روزگار',
        'income' => 'آمدنی',
        'economy' => 'معیشت',
        'exports' => 'برآمدات',
        'export' => 'برآمد',
        'industries' => 'صنعتیں',
        'industry' => 'صنعت',
        'dry' => 'خشک',
        'areas' => 'علاقے',
        'area' => 'علاقہ',
        'hard' => 'سخت',
        'soft' => 'نرم',
        'young' => 'نوجوان',
        'tender' => 'نرم',
        'fluffy' => 'روئیں دار',
        'quality' => 'معیار',
        'demand' => 'طلب',
        'market' => 'منڈی',
        'market demand' => 'منڈی کی طلب',
        'traditional' => 'روایتی',
        'local' => 'مقامی',
        'regional' => 'علاقائی',
        'backbone' => 'ریڑھ کی ہڈی',
        'vital' => 'اہم',
        'widely used' => 'بڑے پیمانے پر استعمال کیا جاتا ہے',
        'easy digestibility' => 'آسان ہاضمے',
        'nutritional value' => 'غذائی قدر',
        'health benefits' => 'صحت کے فوائد',
        'food security' => 'غذائی تحفظ',
        'harsh climatic conditions' => 'سخت موسمی حالات',
        'cash crop' => 'نقد آور فصل',
        'cash crops' => 'نقد آور فصلیں',
        'drought-resistant' => 'خشک سالی برداشت کرنے والا',
        'drought resistant' => 'خشک سالی برداشت کرنے والا',
        'drought-tolerant' => 'خشک سالی برداشت کرنے والا',
        'drought tolerant' => 'خشک سالی برداشت کرنے والا',
        'complete' => 'مکمل',
        'widely' => 'وسیع پیمانے پر', 'used' => 'استعمال کیا جاتا ہے', 'daily' => 'روزمرہ', 'cooking' => 'کھانا پکانے',
        'digestibility' => 'ہاضمے کی آسانی', 'digestive' => 'ہاضمے سے متعلق', 'bitter' => 'کڑوا', 'taste' => 'ذائقہ',
        'rich' => 'غنی', 'vitamins' => 'وٹامنز', 'minerals' => 'معدنیات', 'help' => 'مدد کرتے ہیں', 'control' => 'قابو کرنا',
        'blood' => 'خون', 'sugar' => 'شکر', 'digestion' => 'ہاضمہ', 'fast-growing' => 'تیزی سے بڑھنے والا', 'vine' => 'بیل دار',
        'income' => 'آمدنی', 'farmers' => 'کسانوں', 'provides' => 'فراہم کرتا ہے', 'source' => 'ذریعہ', 'millions' => 'لاکھوں',
        'people' => 'لوگوں', 'meals' => 'کھانوں', 'spiny' => 'کانٹے دار', 'smooth' => 'ہموار', 'green' => 'سبز', 'light' => 'ہلکا',
        'dark' => 'گہرا', 'small' => 'چھوٹا', 'large' => 'بڑا', 'local' => 'مقامی', 'improved' => 'بہتر شدہ', 'hybrid' => 'دوغلی قسم',
        'relative' => 'نسبتاً', 'relatively' => 'نسبتاً', 'enough' => 'کافی', 'enough moisture' => 'کافی نمی',
        'cannot' => 'نہیں کر سکتا', 'tolerate' => 'برداشت کرنا', 'cold' => 'سرد', 'conditions' => 'حالات', 'support' => 'سہارا دینا',
        'quality' => 'معیار', 'market value' => 'منڈی کی قیمت', 'market demand' => 'منڈی کی طلب', 'household' => 'گھریلو',
        'nutrition' => 'غذائیت', 'nutritious' => 'غذائیت سے بھرپور', 'harsh' => 'سخت', 'climatic' => 'موسمی', 'regions' => 'علاقے',
        'guide' => 'رہنمائی',
        'guidance' => 'رہنمائی',
        'drought-resistant' => 'خشک سالی برداشت کرنے والا',
        'drought-resistant crops' => 'خشک سالی برداشت کرنے والی فصلیں',
        'resistant varieties' => 'مزاحم اقسام',
        'crop data' => 'فصلوں کی معلومات',
        'pest management data' => 'کیڑوں کے انتظام کی معلومات',
        'soil analysis' => 'مٹی کا تجزیہ',
        'weather insights' => 'موسم کی معلومات',
        'farming decisions' => 'زرعی فیصلے',
        'smart agriculture platform' => 'ذہین زرعی پلیٹ فارم',
        'smart' => 'ذہین',
        'platform' => 'پلیٹ فارم',
        'farming' => 'کاشت کاری',
        'knowledge' => 'علم',
        'insights' => 'بصیرت',
        'essential' => 'ضروری',
        'simple' => 'آسان',
        'together' => 'اکٹھا',
        'explore' => 'دریافت کریں',
        'commonly' => 'عام طور پر',
        'grown' => 'اگائی جانے والی',
        'them' => 'انہیں',
        'services' => 'خدمات',
        'useful' => 'مفید',
        'tools' => 'اوزار',
        'decisions' => 'فیصلے',
        'contact' => 'رابطہ',
        'links' => 'روابط',
        'quick' => 'فوری',
        'quickly' => 'تیزی سے',
        'stage' => 'مرحلہ',
        'stages' => 'مراحل',
        'variety' => 'قسم',
        'varieties' => 'اقسام',
        'development' => 'نشوونما',
        'germination' => 'انکرت',
        'vegetative' => 'نباتاتی',
        'young' => 'نوجوان',
        'harvesting' => 'کٹائی',
        'well-drained' => 'اچھی نکاسی والی',
        'clean' => 'صاف',
        'ensures' => 'یقینی بناتا ہے',
        'ensure' => 'یقینی بنانا',
        'flowering' => 'پھول آنا',
        'harvested' => 'کٹائی کی گئی',
        'ideal' => 'مثالی',
        'sowing' => 'کاشت',
        'formation' => 'تشکیل',
        'rate' => 'مقدار',
        'oil' => 'تیل',
        'suitable' => 'موزوں',
        'loamy' => 'دومٹ مٹی والی',
        'as' => 'جیسے',
        'maturity' => 'پختگی',
        'shoots' => 'شاخیں',
        'health' => 'صحت',
        'fertile' => 'زرخیز',
        'food' => 'خوراک',
        'sown' => 'بویا گیا',
        'sandy' => 'ریتلی',
        'loam' => 'دومٹ مٹی',
        'rot' => 'سڑن',
        'per' => 'فی',
        'planting' => 'کاشت',
        'wet' => 'گیلا',
        'climates' => 'آب و ہوا',
        'disease-free' => 'بیماری سے پاک',
        'potassium' => 'پوٹاشیم',
        'hybrid' => 'دوغلی قسم',
        'resistant' => 'مزاحم',
        'preparation' => 'تیاری',
        'sweet' => 'میٹھا',
        'fall' => 'گرنا',
        'its' => 'اس کا',
        'watering' => 'پانی دینا',
        'organic' => 'نامیاتی',
        'waterlogging' => 'پانی کا جمع ہونا',
        'areas' => 'علاقے',
        'fiber' => 'ریشہ',
        'textile' => 'ٹیکسٹائل',
        'clothes' => 'کپڑے',
        'fabrics' => 'منسوجات',
        'product' => 'مصنوعہ',
        'products' => 'مصنوعات',
        'white' => 'سفید',
        'requirement' => 'ضرورت',
        'balanced' => 'متوازن',
        'seedlings' => 'پنیری',
        'fungicides' => 'فنگس کش ادویات',
        'land' => 'زمین',
        'light' => 'روشنی',
        'insecticides' => 'کیڑے مار ادویات',
        'certified' => 'مصدقہ',
        'phosphorus' => 'فاسفورس',
        'mildew' => 'پھپھوندی',
        'vitamin' => 'وٹامن',
        'pods' => 'پھلیاں',
        'depending' => 'انحصار کرتے ہوئے',
        'characteristics' => 'خصوصیات',
        'scientific' => 'سائنسی',
        'especially' => 'خصوصاً',
        'drainage' => 'نکاسی آب',
        'temperatures' => 'درجہ حرارت',
        'but' => 'لیکن',
        'wilt' => 'مرجھاؤ',
        'each' => 'ہر',
        'ready' => 'تیار',
        'air' => 'ہوا',
        'soft' => 'نرم',
        'uniform' => 'یکساں',
        'begin' => 'شروع کرنا',
        'dark' => 'گہرا',
        'fresh' => 'تازہ',
        'improved' => 'بہتر شدہ',
        'digestion' => 'ہاضمہ',
        'branches' => 'شاخیں',
        'pollination' => 'گردہ افشانی',
        'like' => 'جیسے',
        'spray' => 'چھڑکاؤ',
        'sprays' => 'چھڑکاؤ کرتا ہے',
        'establishment' => 'قیام',
        'mature' => 'بالغ',
        'deep' => 'گہرا',
        'encourage' => 'حوصلہ افزائی کرنا',
        'excess' => 'اضافی',
        'matter' => 'مادہ',
        'modern' => 'جدید',
        'material' => 'مواد',
        'spring' => 'بہار',
        'gourd' => 'لوکی',
        'fully' => 'مکمل طور پر',
        'seedling' => 'پنیری',
        'natural' => 'قدرتی',
        'cut' => 'کاٹنا',
        'cooking' => 'پکانے',
        'pod' => 'پھلی',
        'start' => 'شروع کرنا',
        'seasons' => 'موسم',
        'removal' => 'خاتمہ',
        'minerals' => 'معدنیات',
        'juice' => 'رس',
        'orchard' => 'باغ',
        'tender' => 'نرم',
        'competition' => 'مقابلہ',
        'industries' => 'صنعتیں',
        'high-quality' => 'اعلیٰ معیار کا',
        'powdery' => 'سفوفی',
        'sweetness' => 'مٹھاس',
        'trees' => 'درخت',
        'under' => 'تحت',
        'nutrients' => 'غذائی اجزا',
        'suddenly' => 'اچانک',
        'protein' => 'لحمیات',
        'due' => 'کی وجہ سے',
        'vine' => 'بیل',
        'sprouting' => 'انکرت پھوٹنا',
        'powder-like' => 'پاؤڈر جیسا',
        'copper-based' => 'تانبے پر مبنی',
        'antioxidants' => 'تکسیری مخالف اجزا',
        'overcrowding' => 'بہت زیادہ گنجان کاشت',
        'debris' => 'ملبہ',
        'infects' => 'متاثر کرتا ہے',
        'animal' => 'جانور',
        'immunity' => 'قوتِ مدافعت',
        'long' => 'طویل',
        'citrus' => 'ترشاوہ پھل',
        'developing' => 'نشوونما پانے والا',
        'systems' => 'نظام',
        'traditional' => 'روایتی',
        'enter' => 'داخل ہونا',
        'regularly' => 'باقاعدگی سے',
        'planted' => 'کاشت کیا گیا',
        'source' => 'ذریعہ',
        'circulation' => 'گردش',
        'bitter' => 'کڑوا',
        'bulb' => 'گٹھا',
        'poor' => 'ناقص',
        'produce' => 'پیدا کرنا',
        'sunlight' => 'دھوپ',
        'die' => 'مر جانا',
        'live' => 'زندہ رہنا',
        'rhizomes' => 'زیرِ زمین تنے',
        'fodder' => 'چارہ',
        'technologies' => 'فنی علوم',
        'harvest' => 'کٹائی',
        'slowly' => 'آہستہ آہستہ',
        'fertilizers' => 'کھادیں',
        'drip' => 'قطرہ قطرہ آبپاشی',
        'vitamins' => 'وٹامنز',
        'hot' => 'گرم',
        'virus' => 'وائرس',
        'nutritional' => 'غذائی',
        'consumed' => 'استعمال کیا جاتا ہے',
        'frequent' => 'بار بار',
        'spice' => 'مصالحہ',
        'manage' => 'انتظام کرنا',
        'parts' => 'حصے',
        'sprout' => 'انکرت',
        'prune' => 'شاخ تراشی کرنا',
        'export' => 'برآمد',
        'mild' => 'معتدل',
        'tree' => 'درخت',
        'edible' => 'کھانے کے قابل',
        'rich' => 'غنی',
        'tolerate' => 'برداشت کرنا',
        'ladybirds' => 'لیڈی برڈ بھنورے',
        'overhead' => 'اوپر سے',
        'bacteria' => 'جراثیم',
        'using' => 'استعمال کرنا',
        'role' => 'کردار',
        'markets' => 'منڈیاں',
        'products' => 'مصنوعات',
        'slow' => 'سست',
        'destroy' => 'تباہ کرنا',
        'look' => 'نظر آنا',
        'base' => 'بنیاد',
        'mainly' => 'بنیادی طور پر',
        'absorb' => 'جذب کرنا',
        'benefits' => 'فوائد',
        'plays' => 'کردار ادا کرتا ہے',
        'economy' => 'معیشت',
        'storage' => 'ذخیرہ',
        'rapidly' => 'تیزی سے',
        'yielding' => 'پیداوار دینے والا',
        'initial' => 'ابتدائی',
        'cure' => 'علاج',
        'coating' => 'تہہ',
        'downy' => 'روئیں دار پھپھوندی',
        'rotation' => 'فصلوں کی گردش',
        'fly' => 'مکھی',
        'population' => 'آبادی',
        'setting' => 'ترتیب',
        'resistance' => 'مزاحمت',
        'higher' => 'زیادہ',
        'manure' => 'گوبر کی کھاد',
        'millet' => 'باجرا',
        'heat' => 'گرمی',
        'monitoring' => 'نگرانی',
        'controlled' => 'قابو میں رکھا گیا',
        'highly' => 'بہت زیادہ',
        'lime' => 'چونا',
        'hard' => 'سخت',
        'tiny' => 'نہایت چھوٹا',
        'lay' => 'انڈے دینا',
        'neem' => 'نیم',
        'sugar' => 'چینی',
        'oilseed' => 'تیل دار بیج',
        'pearl' => 'موتی',
        'bottle' => 'بوتل',
        'energy' => 'توانائی',
        'known' => 'معلوم',
        'medicinal' => 'ادویاتی',
        'fast' => 'تیز',
        'sulfur' => 'گندھک',
        'adequate' => 'کافی',
        'cells' => 'خلیے',
        'aroma' => 'خوشبو',
        'down' => 'نیچے',
        'loosens' => 'ڈھیلا کرتا ہے',
        'avoided' => 'اجتناب کیا گیا',
        'commercial' => 'تجارتی',
        'multiple' => 'متعدد',
        'juicy' => 'رسیلا',
        'regions' => 'خطے',
        'ripening' => 'پکنے کا عمل',
        'has' => 'رکھتا ہے',
        'flow' => 'بہاؤ',
        'available' => 'دستیاب',
        'salads' => 'سلاد',
        'addition' => 'اضافہ',
        'transplanting' => 'پنیری منتقل کرنا',
        'one' => 'ایک',
        'supply' => 'فراہمی',
        'carbohydrates' => 'نشاستہ دار اجزا',
        'establish' => 'قائم کرنا',
        'mosaic' => 'موزیک',
        'reduced' => 'کم شدہ',
        'frost' => 'پالا',
        'every' => 'ہر',
        'rust' => 'زنگ',
        'picked' => 'توڑا گیا',
        'stress' => 'دباؤ',
        'heavily' => 'شدید طور پر',
        'soil-borne' => 'مٹی سے پھیلنے والا',
        'leafy' => 'پتوں والا',
        'obtaining' => 'حاصل کرنا',
        'most' => 'زیادہ تر',
        'blood' => 'خون',
        'calcium' => 'کیلشیم',
        'begins' => 'شروع ہوتا ہے',
        'drought' => 'خشک سالی',
        'well' => 'اچھی طرح',
        'slows' => 'سست کرتا ہے',
        'bactericides' => 'جراثیم کش ادویات',
        'vectors' => 'منتقل کرنے والے حشرات',
        'edges' => 'کنارے',
        'raised' => 'اونچا کیا گیا',
        'peas' => 'مٹر',
        'beans' => 'لوبیا',
        'into' => 'کے اندر',
        'rainfall' => 'بارش',
        'flavor' => 'ذائقہ',
        'medicine' => 'دوا',
        'does' => 'کرتا ہے',
        'miner' => 'کان کن',
        'flies' => 'مکھیاں',
        'beetles' => 'بھونرے',
        'types' => 'اقسام',
        'cultivated' => 'کاشت کیا گیا',
        'monsoon' => 'برسات کا موسم',
        'system' => 'نظام',
        'life' => 'زندگی',
        'contributes' => 'حصہ ڈالتا ہے',
        'industry' => 'صنعت',
        'whiteflies' => 'سفید مکھیاں',
        'borer' => 'سنڈی',
        'lines' => 'لکیریں',
        'poorly' => 'ناقص طور پر',
        'dense' => 'گھنا',
        'pheromone' => 'جنسی کشش کا کیمیائی مادہ',
        'tropical' => 'گرم مرطوب خطوں کا',
        'daily' => 'روزانہ',
        'developed' => 'ترقی یافتہ',
        'direct' => 'براہِ راست',
        'correct' => 'درست',
        'bone' => 'ہڈی',
        'technology' => 'فنی علم',
        'techniques' => 'تکنیکیں',
        'full' => 'مکمل',
        'functions' => 'افعال',
        'dates' => 'کھجوریں',
        'rapid' => 'تیز رفتار',
        'near' => 'قریب',
        'tuber' => 'گٹھا',
        'curd' => 'پھول گوبھی کا پھول',
        'tomatoes' => 'ٹماٹر',
        'flesh' => 'گودا',
        'apples' => 'سیب',
        'extreme' => 'انتہائی',
        'magnesium' => 'میگنیشیم',
        'loose' => 'ڈھیلی',
        'cutting' => 'قلم',
        'iron' => 'لوہا',
        'honeydew' => 'شہد نما رس',
        'cutworm' => 'کٹ ورم سنڈی',
        'period' => 'مدت',
        'processing' => 'کارروائی',
        'juices' => 'رس',
        'medicines' => 'ادویات',
        'pickles' => 'اچار',
        'beneficial' => 'فائدہ مند',
        'heart' => 'دل',
        'desserts' => 'مٹھائیاں',
        'cuttings' => 'قلمیں',
        'reach' => 'پہنچنا',
        'splash' => 'چھینٹا',
        'drained' => 'نکاسی شدہ',
        'beds' => 'کھیلیاں',
        'loosen' => 'ڈھیلا کرنا',
        'livestock' => 'مویشی',
        'carrots' => 'گاجریں',
        'drop' => 'گرنا',
        'cultivation' => 'کاشت',
        'purple' => 'جامنی',
        'pit' => 'گڑھا',
        'overall' => 'مجموعی',
        'sufficient' => 'کافی',
        'accumulate' => 'جمع ہونا',
        'female' => 'مادہ',
        'consistent' => 'مسلسل',
        'both' => 'دونوں',
        'sulphur' => 'گندھک',
        'sunken' => 'دھنسا ہوا',
        'mold' => 'پھپھوندی',
        'silvery' => 'چاندی جیسا',
        'rotten' => 'سڑا ہوا',
        'underground' => 'زیرِ زمین',
        'over' => 'اوپر',
        'out' => 'باہر',
        'hygiene' => 'صفائی',
        'soils' => 'مٹیاں',
        'cane' => 'گنے کا تنا',
        'compact' => 'دبا ہوا',
        'grams' => 'گرام',
        'forming' => 'تشکیل دینا',
        'feet' => 'فٹ',
        'buds' => 'کلیاں',
        'golden' => 'سنہری',
        'improving' => 'بہتر بنانا',
        'within' => 'کے اندر',
        'dried' => 'خشک کیا گیا',
        'better' => 'بہتر',
        'support' => 'مدد',
        'help' => 'مدد',
        'popular' => 'مقبول',
        'resources' => 'وسائل',
        'advice' => 'مشورہ',
        'weather' => 'موسم',
        'forecast' => 'پیش گوئی',
        'soil' => 'مٹی',
        'analysis' => 'تجزیہ',
        'intelligent' => 'ذہین',
        'learn' => 'سیکھیں',
        'more' => 'مزید',
        'about' => 'کے بارے میں',
        'see' => 'دیکھیں',
        'all' => 'تمام',
        'current' => 'موجودہ',
        'crop' => 'فصل',
        'information' => 'معلومات',
        'check' => 'جانچیں',
        'expert' => 'ماہر',
        'decision' => 'فیصلہ',
        'make' => 'بنانا',
        'show' => 'دکھائیں',
    ];

    private array $semanticWords = [
        'discover' => 'دریافت کرنا',
        'features' => 'خصوصیات',
        'feature' => 'خصوصیت',
        'journey' => 'سفر',
        'guidance' => 'رہنمائی',
        'private' => 'نجی',
        'protecting' => 'تحفظ کرنا',
        'collect' => 'جمع کرنا',
        'website' => 'ویب سائٹ',
        'voice' => 'آواز',
        'voices' => 'آوازیں',
        'address' => 'پتہ',
        'accessible' => 'قابل رسائی',
        'approve' => 'منظور کرنا',
        'reject' => 'مسترد کرنا',
        'pending' => 'زیرِ التوا',
        'review' => 'جائزہ',
        'write' => 'لکھنا',
        'record' => 'ریکارڈ کرنا',
        'exists' => 'موجود ہے',
        'sent' => 'بھیجا گیا',
        'security' => 'سلامتی',
        'notification' => 'اطلاع',
        'exports' => 'برآمدات',
        'farm' => 'کھیت',
        'farms' => 'کھیت',
        'experts' => 'ماہرین',
        'submitted' => 'جمع کر دیا گیا',
        'posted' => 'شائع کیا گیا',
        'users' => 'صارفین',
        'approved' => 'منظور شدہ',
        'unanswered' => 'بے جواب',
        'smart' => 'ذہین',
        'platform' => 'پلیٹ فارم',
        'farming' => 'کاشت کاری',
        'knowledge' => 'علم',
        'insights' => 'بصیرت',
        'essential' => 'ضروری',
        'simple' => 'آسان',
        'together' => 'اکٹھا',
        'explore' => 'دریافت کریں',
        'commonly' => 'عام طور پر',
        'grown' => 'اگائی جانے والی',
        'them' => 'انہیں',
        'services' => 'خدمات',
        'useful' => 'مفید',
        'tools' => 'اوزار',
        'decisions' => 'فیصلے',
        'contact' => 'رابطہ',
        'links' => 'روابط',
        'quick' => 'فوری',
        'quickly' => 'تیزی سے',
        'stage' => 'مرحلہ',
        'stages' => 'مراحل',
        'variety' => 'قسم',
        'varieties' => 'اقسام',
        'development' => 'نشوونما',
        'germination' => 'انکرت',
        'vegetative' => 'نباتاتی',
        'young' => 'نوجوان',
        'harvesting' => 'کٹائی',
        'well-drained' => 'اچھی نکاسی والی',
        'clean' => 'صاف',
        'ensures' => 'یقینی بناتا ہے',
        'ensure' => 'یقینی بنانا',
        'flowering' => 'پھول آنا',
        'harvested' => 'کٹائی کی گئی',
        'ideal' => 'مثالی',
        'sowing' => 'کاشت',
        'formation' => 'تشکیل',
        'rate' => 'مقدار',
        'oil' => 'تیل',
        'suitable' => 'موزوں',
        'loamy' => 'دومٹ مٹی والی',
        'as' => 'جیسے',
        'maturity' => 'پختگی',
        'shoots' => 'شاخیں',
        'health' => 'صحت',
        'fertile' => 'زرخیز',
        'food' => 'خوراک',
        'sown' => 'بویا گیا',
        'sandy' => 'ریتلی',
        'loam' => 'دومٹ مٹی',
        'rot' => 'سڑن',
        'per' => 'فی',
        'planting' => 'کاشت',
        'wet' => 'گیلا',
        'climates' => 'آب و ہوا',
        'disease-free' => 'بیماری سے پاک',
        'potassium' => 'پوٹاشیم',
        'hybrid' => 'دوغلی قسم',
        'resistant' => 'مزاحم',
        'preparation' => 'تیاری',
        'sweet' => 'میٹھا',
        'fall' => 'گرنا',
        'its' => 'اس کا',
        'watering' => 'پانی دینا',
        'organic' => 'نامیاتی',
        'waterlogging' => 'پانی کا جمع ہونا',
        'areas' => 'علاقے',
        'fiber' => 'ریشہ',
        'textile' => 'ٹیکسٹائل',
        'clothes' => 'کپڑے',
        'fabrics' => 'منسوجات',
        'product' => 'مصنوعہ',
        'products' => 'مصنوعات',
        'white' => 'سفید',
        'requirement' => 'ضرورت',
        'balanced' => 'متوازن',
        'seedlings' => 'پنیری',
        'fungicides' => 'فنگس کش ادویات',
        'land' => 'زمین',
        'light' => 'روشنی',
        'insecticides' => 'کیڑے مار ادویات',
        'certified' => 'مصدقہ',
        'phosphorus' => 'فاسفورس',
        'mildew' => 'پھپھوندی',
        'vitamin' => 'وٹامن',
        'pods' => 'پھلیاں',
        'depending' => 'انحصار کرتے ہوئے',
        'characteristics' => 'خصوصیات',
        'scientific' => 'سائنسی',
        'especially' => 'خصوصاً',
        'drainage' => 'نکاسی آب',
        'temperatures' => 'درجہ حرارت',
        'but' => 'لیکن',
        'wilt' => 'مرجھاؤ',
        'each' => 'ہر',
        'ready' => 'تیار',
        'air' => 'ہوا',
        'soft' => 'نرم',
        'uniform' => 'یکساں',
        'begin' => 'شروع کرنا',
        'dark' => 'گہرا',
        'fresh' => 'تازہ',
        'improved' => 'بہتر شدہ',
        'digestion' => 'ہاضمہ',
        'branches' => 'شاخیں',
        'pollination' => 'گردہ افشانی',
        'like' => 'جیسے',
        'spray' => 'چھڑکاؤ',
        'sprays' => 'چھڑکاؤ کرتا ہے',
        'establishment' => 'قیام',
        'mature' => 'بالغ',
        'deep' => 'گہرا',
        'encourage' => 'حوصلہ افزائی کرنا',
        'excess' => 'اضافی',
        'matter' => 'مادہ',
        'modern' => 'جدید',
        'material' => 'مواد',
        'spring' => 'بہار',
        'gourd' => 'لوکی',
        'fully' => 'مکمل طور پر',
        'seedling' => 'پنیری',
        'natural' => 'قدرتی',
        'cut' => 'کاٹنا',
        'cooking' => 'پکانے',
        'pod' => 'پھلی',
        'start' => 'شروع کرنا',
        'seasons' => 'موسم',
        'removal' => 'خاتمہ',
        'minerals' => 'معدنیات',
        'juice' => 'رس',
        'orchard' => 'باغ',
        'tender' => 'نرم',
        'competition' => 'مقابلہ',
        'industries' => 'صنعتیں',
        'high-quality' => 'اعلیٰ معیار کا',
        'powdery' => 'سفوفی',
        'sweetness' => 'مٹھاس',
        'trees' => 'درخت',
        'under' => 'تحت',
        'nutrients' => 'غذائی اجزا',
        'suddenly' => 'اچانک',
        'protein' => 'لحمیات',
        'due' => 'کی وجہ سے',
        'vine' => 'بیل',
        'sprouting' => 'انکرت پھوٹنا',
        'powder-like' => 'پاؤڈر جیسا',
        'copper-based' => 'تانبے پر مبنی',
        'antioxidants' => 'تکسیری مخالف اجزا',
        'overcrowding' => 'بہت زیادہ گنجان کاشت',
        'debris' => 'ملبہ',
        'infects' => 'متاثر کرتا ہے',
        'animal' => 'جانور',
        'immunity' => 'قوتِ مدافعت',
        'long' => 'طویل',
        'citrus' => 'ترشاوہ پھل',
        'developing' => 'نشوونما پانے والا',
        'systems' => 'نظام',
        'traditional' => 'روایتی',
        'enter' => 'داخل ہونا',
        'regularly' => 'باقاعدگی سے',
        'planted' => 'کاشت کیا گیا',
        'source' => 'ذریعہ',
        'circulation' => 'گردش',
        'bitter' => 'کڑوا',
        'bulb' => 'گٹھا',
        'poor' => 'ناقص',
        'produce' => 'پیدا کرنا',
        'sunlight' => 'دھوپ',
        'die' => 'مر جانا',
        'live' => 'زندہ رہنا',
        'rhizomes' => 'زیرِ زمین تنے',
        'fodder' => 'چارہ',
        'technologies' => 'فنی علوم',
        'harvest' => 'کٹائی',
        'slowly' => 'آہستہ آہستہ',
        'fertilizers' => 'کھادیں',
        'drip' => 'قطرہ قطرہ آبپاشی',
        'vitamins' => 'وٹامنز',
        'hot' => 'گرم',
        'virus' => 'وائرس',
        'nutritional' => 'غذائی',
        'consumed' => 'استعمال کیا جاتا ہے',
        'frequent' => 'بار بار',
        'spice' => 'مصالحہ',
        'manage' => 'انتظام کرنا',
        'parts' => 'حصے',
        'sprout' => 'انکرت',
        'prune' => 'شاخ تراشی کرنا',
        'export' => 'برآمد',
        'mild' => 'معتدل',
        'tree' => 'درخت',
        'edible' => 'کھانے کے قابل',
        'rich' => 'غنی',
        'tolerate' => 'برداشت کرنا',
        'ladybirds' => 'لیڈی برڈ بھنورے',
        'overhead' => 'اوپر سے',
        'bacteria' => 'جراثیم',
        'using' => 'استعمال کرنا',
        'role' => 'کردار',
        'markets' => 'منڈیاں',
        'products' => 'مصنوعات',
        'slow' => 'سست',
        'destroy' => 'تباہ کرنا',
        'look' => 'نظر آنا',
        'base' => 'بنیاد',
        'mainly' => 'بنیادی طور پر',
        'absorb' => 'جذب کرنا',
        'benefits' => 'فوائد',
        'plays' => 'کردار ادا کرتا ہے',
        'economy' => 'معیشت',
        'storage' => 'ذخیرہ',
        'rapidly' => 'تیزی سے',
        'yielding' => 'پیداوار دینے والا',
        'initial' => 'ابتدائی',
        'cure' => 'علاج',
        'coating' => 'تہہ',
        'downy' => 'روئیں دار پھپھوندی',
        'rotation' => 'فصلوں کی گردش',
        'fly' => 'مکھی',
        'population' => 'آبادی',
        'setting' => 'ترتیب',
        'resistance' => 'مزاحمت',
        'higher' => 'زیادہ',
        'manure' => 'گوبر کی کھاد',
        'millet' => 'باجرا',
        'heat' => 'گرمی',
        'monitoring' => 'نگرانی',
        'controlled' => 'قابو میں رکھا گیا',
        'highly' => 'بہت زیادہ',
        'lime' => 'چونا',
        'hard' => 'سخت',
        'tiny' => 'نہایت چھوٹا',
        'lay' => 'انڈے دینا',
        'neem' => 'نیم',
        'sugar' => 'چینی',
        'oilseed' => 'تیل دار بیج',
        'pearl' => 'موتی',
        'bottle' => 'بوتل',
        'energy' => 'توانائی',
        'known' => 'معلوم',
        'medicinal' => 'ادویاتی',
        'fast' => 'تیز',
        'sulfur' => 'گندھک',
        'adequate' => 'کافی',
        'cells' => 'خلیے',
        'aroma' => 'خوشبو',
        'down' => 'نیچے',
        'loosens' => 'ڈھیلا کرتا ہے',
        'avoided' => 'اجتناب کیا گیا',
        'commercial' => 'تجارتی',
        'multiple' => 'متعدد',
        'juicy' => 'رسیلا',
        'regions' => 'خطے',
        'ripening' => 'پکنے کا عمل',
        'has' => 'رکھتا ہے',
        'flow' => 'بہاؤ',
        'available' => 'دستیاب',
        'salads' => 'سلاد',
        'addition' => 'اضافہ',
        'transplanting' => 'پنیری منتقل کرنا',
        'one' => 'ایک',
        'supply' => 'فراہمی',
        'carbohydrates' => 'نشاستہ دار اجزا',
        'establish' => 'قائم کرنا',
        'mosaic' => 'موزیک',
        'reduced' => 'کم شدہ',
        'frost' => 'پالا',
        'every' => 'ہر',
        'rust' => 'زنگ',
        'picked' => 'توڑا گیا',
        'stress' => 'دباؤ',
        'heavily' => 'شدید طور پر',
        'soil-borne' => 'مٹی سے پھیلنے والا',
        'leafy' => 'پتوں والا',
        'obtaining' => 'حاصل کرنا',
        'most' => 'زیادہ تر',
        'blood' => 'خون',
        'calcium' => 'کیلشیم',
        'begins' => 'شروع ہوتا ہے',
        'drought' => 'خشک سالی',
        'well' => 'اچھی طرح',
        'slows' => 'سست کرتا ہے',
        'bactericides' => 'جراثیم کش ادویات',
        'vectors' => 'منتقل کرنے والے حشرات',
        'edges' => 'کنارے',
        'raised' => 'اونچا کیا گیا',
        'peas' => 'مٹر',
        'beans' => 'لوبیا',
        'into' => 'کے اندر',
        'rainfall' => 'بارش',
        'flavor' => 'ذائقہ',
        'medicine' => 'دوا',
        'does' => 'کرتا ہے',
        'miner' => 'کان کن',
        'flies' => 'مکھیاں',
        'beetles' => 'بھونرے',
        'types' => 'اقسام',
        'cultivated' => 'کاشت کیا گیا',
        'monsoon' => 'برسات کا موسم',
        'system' => 'نظام',
        'life' => 'زندگی',
        'contributes' => 'حصہ ڈالتا ہے',
        'industry' => 'صنعت',
        'whiteflies' => 'سفید مکھیاں',
        'borer' => 'سنڈی',
        'lines' => 'لکیریں',
        'poorly' => 'ناقص طور پر',
        'dense' => 'گھنا',
        'pheromone' => 'جنسی کشش کا کیمیائی مادہ',
        'tropical' => 'گرم مرطوب خطوں کا',
        'daily' => 'روزانہ',
        'developed' => 'ترقی یافتہ',
        'direct' => 'براہِ راست',
        'correct' => 'درست',
        'bone' => 'ہڈی',
        'technology' => 'فنی علم',
        'techniques' => 'تکنیکیں',
        'full' => 'مکمل',
        'functions' => 'افعال',
        'dates' => 'کھجوریں',
        'rapid' => 'تیز رفتار',
        'near' => 'قریب',
        'tuber' => 'گٹھا',
        'curd' => 'پھول گوبھی کا پھول',
        'tomatoes' => 'ٹماٹر',
        'flesh' => 'گودا',
        'apples' => 'سیب',
        'extreme' => 'انتہائی',
        'magnesium' => 'میگنیشیم',
        'loose' => 'ڈھیلی',
        'cutting' => 'قلم',
        'iron' => 'لوہا',
        'honeydew' => 'شہد نما رس',
        'cutworm' => 'کٹ ورم سنڈی',
        'period' => 'مدت',
        'processing' => 'کارروائی',
        'juices' => 'رس',
        'medicines' => 'ادویات',
        'pickles' => 'اچار',
        'beneficial' => 'فائدہ مند',
        'heart' => 'دل',
        'desserts' => 'مٹھائیاں',
        'cuttings' => 'قلمیں',
        'reach' => 'پہنچنا',
        'splash' => 'چھینٹا',
        'drained' => 'نکاسی شدہ',
        'beds' => 'کھیلیاں',
        'loosen' => 'ڈھیلا کرنا',
        'livestock' => 'مویشی',
        'carrots' => 'گاجریں',
        'drop' => 'گرنا',
        'cultivation' => 'کاشت',
        'purple' => 'جامنی',
        'pit' => 'گڑھا',
        'overall' => 'مجموعی',
        'sufficient' => 'کافی',
        'accumulate' => 'جمع ہونا',
        'female' => 'مادہ',
        'consistent' => 'مسلسل',
        'both' => 'دونوں',
        'sulphur' => 'گندھک',
        'sunken' => 'دھنسا ہوا',
        'mold' => 'پھپھوندی',
        'silvery' => 'چاندی جیسا',
        'rotten' => 'سڑا ہوا',
        'underground' => 'زیرِ زمین',
        'over' => 'اوپر',
        'out' => 'باہر',
        'hygiene' => 'صفائی',
        'soils' => 'مٹیاں',
        'cane' => 'گنے کا تنا',
        'compact' => 'دبا ہوا',
        'grams' => 'گرام',
        'forming' => 'تشکیل دینا',
        'feet' => 'فٹ',
        'buds' => 'کلیاں',
        'golden' => 'سنہری',
        'improving' => 'بہتر بنانا',
        'within' => 'کے اندر',
        'dried' => 'خشک کیا گیا',
        'better' => 'بہتر',
        'support' => 'مدد',
        'help' => 'مدد',
        'popular' => 'مقبول',
        'resources' => 'وسائل',
        'advice' => 'مشورہ',
        'weather' => 'موسم',
        'forecast' => 'پیش گوئی',
        'soil' => 'مٹی',
        'analysis' => 'تجزیہ',
        'intelligent' => 'ذہین',
        'learn' => 'سیکھیں',
        'more' => 'مزید',
        'about' => 'کے بارے میں',
        'see' => 'دیکھیں',
        'all' => 'تمام',
        'current' => 'موجودہ',
        'crop' => 'فصل',
        'information' => 'معلومات',
        'check' => 'جانچیں',
        'expert' => 'ماہر',
        'decision' => 'فیصلہ',
        'make' => 'بنانا',
        'show' => 'دکھائیں',
        'ask' => 'پوچھنا',
        'question' => 'سوال',
        'post' => 'شائع کرنا',
        'answer' => 'جواب',
        'read' => 'پڑھیں',
        'view' => 'دیکھیں',
        'details' => 'تفصیلات',
        'privacy' => 'رازداری',
        'policy' => 'پالیسی',
        'language' => 'زبان',
        'select' => 'منتخب کریں',
        'change' => 'تبدیل کریں',
        'continue' => 'جاری رکھیں',
        'create' => 'بنانا',
        'account' => 'اکاؤنٹ',
        'already' => 'پہلے سے',
        'have' => 'رکھنا',
        'forgot' => 'بھول گئے',
        'reset' => 'دوبارہ ترتیب دینا',
        'remember' => 'یاد رکھنا',
        'confirm' => 'تصدیق کرنا',
        'send' => 'بھیجنا',
        'resend' => 'دوبارہ بھیجنا',
        'verification' => 'تصدیق',
        'verify' => 'تصدیق کرنا',
        'new' => 'نیا',
        'delete' => 'حذف کرنا',
        'close' => 'بند کرنا',
        'open' => 'کھولنا',
        'previous' => 'پچھلا',
        'back' => 'واپس',
        'cancel' => 'منسوخ کرنا',
        'save' => 'محفوظ کرنا',
        'update' => 'تجدید کرنا',
        'edit' => 'ترمیم کرنا',
        'submit' => 'جمع کرنا',
        'upload' => 'اپ لوڈ کرنا',
        'picture' => 'تصویر',
        'email' => 'ای میل',
        'password' => 'پاس ورڈ',
        'profile' => 'پروفائل',
        'settings' => 'ترتیبات',
        'logout' => 'خروج کرنا',
        'login' => 'داخل ہونا',
        'register' => 'اندراج کرنا',
        'home' => 'صفحۂ اول',
        'dashboard' => 'مرکزی صفحہ',
        'menu' => 'مینو',
        'community' => 'برادری',
        'forum' => 'مباحثہ گاہ',
        'pest' => 'کیڑا',
        'pests' => 'کیڑے',
        'disease' => 'بیماری',
        'diseases' => 'بیماریاں',
        'fertilizer' => 'کھاد',
        'irrigation' => 'آبپاشی',
        'climate' => 'آب و ہوا',
        'growth' => 'نشوونما',
        'yield' => 'پیداوار',
        'quality' => 'معیار',
        'demand' => 'طلب',
        'field' => 'کھیت',
        'root' => 'جڑ',
        'roots' => 'جڑیں',
        'stem' => 'تنا',
        'stems' => 'تنے',
        'leaf' => 'پتا',
        'leaves' => 'پتے',
        'flower' => 'پھول',
        'flowers' => 'پھول',
        'seed' => 'بیج',
        'seeds' => 'بیج',
        'water' => 'پانی',
        'plant' => 'پودا',
        'plants' => 'پودے',
        'season' => 'موسم',
        'summer' => 'گرما',
        'winter' => 'سرما',
        'fruit' => 'پھل',
        'fruits' => 'پھل',
        'vegetable' => 'سبزی',
        'vegetables' => 'سبزیاں',
        'grain' => 'اناج',
        'grains' => 'اناج',
        'agricultural' => 'زرعی',
        'agriculture' => 'زراعت',
        'farmer' => 'کسان',
        'farmers' => 'کسان',
        'management' => 'انتظام',
        'control' => 'قابو',
        'recommended' => 'تجویز کردہ',
        'protection' => 'بچاؤ',
        'symptoms' => 'علامات',
        'occurs' => 'پیدا ہوتا ہے',
        'occur' => 'پیدا ہونا',
        'cause' => 'سبب',
        'causes' => 'سبب بنتا ہے',
        'damage' => 'نقصان',
        'damages' => 'نقصان پہنچاتا ہے',
        'attack' => 'حملہ کرنا',
        'attacks' => 'حملہ کرتا ہے',
        'spread' => 'پھیلنا',
        'spreads' => 'پھیلتا ہے',
        'prevent' => 'روکنا',
        'prevents' => 'روکتا ہے',
        'protect' => 'محفوظ کرنا',
        'protects' => 'محفوظ کرتا ہے',
        'avoid' => 'اجتناب کریں',
        'apply' => 'لگائیں',
        'improve' => 'بہتر کرنا',
        'improves' => 'بہتر کرتا ہے',
        'reduce' => 'کم کرنا',
        'reduces' => 'کم کرتا ہے',
        'increase' => 'بڑھانا',
        'increases' => 'بڑھاتا ہے',
        'decrease' => 'کم کرنا',
        'decreases' => 'کم کرتا ہے',
        'become' => 'بننا',
        'becomes' => 'بن جاتا ہے',
        'appear' => 'ظاہر ہونا',
        'appears' => 'ظاہر ہوتا ہے',
        'develop' => 'نشوونما پانا',
        'develops' => 'نشوونما پاتا ہے',
        'remove' => 'ہٹانا',
        'monitor' => 'نگرانی کرنا',
        'monitors' => 'نگرانی کرتا ہے',
        'feed' => 'خوراک حاصل کرنا',
        'feeds' => 'خوراک حاصل کرتا ہے',
        'used' => 'استعمال کیا جاتا ہے',
        'use' => 'استعمال کرنا',
        'requires' => 'ضرورت ہوتی ہے',
        'require' => 'ضرورت ہونا',
        'helps' => 'مدد کرتا ہے',
        'supports' => 'مدد کرتا ہے',
        'maintain' => 'برقرار رکھنا',
        'properly' => 'مناسب طریقے سے',
        'proper' => 'مناسب',
        'best' => 'بہترین',
        'good' => 'اچھا',
        'high' => 'زیادہ',
        'low' => 'کم',
        'moderate' => 'درمیانہ',
        'healthy' => 'صحت مند',
        'important' => 'اہم',
        'widely' => 'وسیع پیمانے پر',
        'local' => 'مقامی',
        'market' => 'منڈی',
        'income' => 'آمدنی',
        'economic' => 'معاشی',
        'common' => 'عام',
        'main' => 'اہم',
        'major' => 'اہم',
        'small' => 'چھوٹا',
        'large' => 'بڑا',
        'strong' => 'مضبوط',
        'weak' => 'کمزور',
        'old' => 'پرانا',
        'early' => 'جلد',
        'late' => 'دیر سے',
        'inside' => 'اندر',
        'outside' => 'باہر',
        'before' => 'پہلے',
        'after' => 'بعد',
        'during' => 'کے دوران',
        'between' => 'کے درمیان',
        'through' => 'کے ذریعے',
        'because' => 'کیونکہ',
        'also' => 'بھی',
        'only' => 'صرف',
        'very' => 'بہت',
        'less' => 'کم',
        'your' => 'آپ کا',
        'you' => 'آپ',
        'our' => 'ہمارا',
        'we' => 'ہم',
        'they' => 'وہ',
        'their' => 'ان کا',
        'my' => 'میرا',
        'me' => 'مجھے',
        'is' => 'ہے',
        'are' => 'ہیں',
        'was' => 'تھا',
        'were' => 'تھے',
        'can' => 'سکتا ہے',
        'will' => 'گا',
        'should' => 'چاہیے',
        'may' => 'شاید',
        'must' => 'ضرور',
        'not' => 'نہیں',
        'if' => 'اگر',
        'when' => 'جب',
        'where' => 'جہاں',
        'why' => 'کیوں',
        'how' => 'کیسے',
        'what' => 'کیا',
        'which' => 'کون سا',
        'who' => 'کون',
        'and' => 'اور',
        'or' => 'یا',
        'with' => 'کے ساتھ',
        'without' => 'کے بغیر',
        'from' => 'سے',
        'for' => 'کے لیے',
        'to' => 'کو',
        'in' => 'میں',
        'on' => 'پر',
        'at' => 'پر',
        'by' => 'کے ذریعے',
        'of' => 'کا',
        'the' => '',
        'this' => 'یہ',
        'that' => 'وہ',
        'these' => 'یہ',
        'those' => 'وہ',
        'many' => 'بہت سے',
        'other' => 'دیگر',
        'be' => 'ہونا',
        'it' => 'یہ',
        'time' => 'وقت',
        'today' => 'آج',
        'tomorrow' => 'کل',
        'morning' => 'صبح',
        'afternoon' => 'دوپہر',
        'evening' => 'شام',
        'night' => 'رات',
        'temperature' => 'درجہ حرارت',
        'humidity' => 'نمی',
        'wind' => 'ہوا',
        'visibility' => 'حدِ نگاہ',
        'clear' => 'صاف',
        'cloudy' => 'ابر آلود',
        'rain' => 'بارش',
        'rainy' => 'بارش والا',
        'sunny' => 'دھوپ والا',
        'windy' => 'ہوا دار',
        'mist' => 'دھند',
        'fog' => 'کہرا',
        'drizzle' => 'بوندا باندی',
        'thunderstorm' => 'گرج چمک کے ساتھ بارش',
        'pressure' => 'دباؤ',
        'favorable' => 'سازگار',
        'location' => 'مقام',
        'days' => 'دن',
        'day' => 'دن',
        'weeks' => 'ہفتے',
        'week' => 'ہفتہ',
        'months' => 'ماہ',
        'month' => 'ماہ',
        'years' => 'سال',
        'year' => 'سال',
        'hours' => 'گھنٹے',
        'hour' => 'گھنٹہ',
        'liters' => 'لیٹر',
        'liter' => 'لیٹر',
        'meter' => 'میٹر',
        'meters' => 'میٹر',
        'percent' => 'فیصد',
        'acres' => 'ایکڑ',
        'acre' => 'ایکڑ',
        'kg' => 'کلوگرام',
        'cm' => 'سینٹی میٹر',
        'mm' => 'ملی میٹر',
        'ask' => 'پوچھنا',
        'asked' => 'پوچھا',
        'asking' => 'پوچھ رہے ہیں',
        'asks' => 'پوچھتا ہے',
        'grow' => 'اگانا',
        'grows' => 'اگتا ہے',
        'grew' => 'اگا',
        'grown' => 'اگایا گیا',
        'growing' => 'نشوونما پاتا ہوا',
        'smart' => 'ذہین',
        'agriculture' => 'زراعت',
        'farmer' => 'کسان',
        'farmers' => 'کسان',
        'help' => 'مدد',
        'helps' => 'مدد کرتا ہے',
        'support' => 'مدد',
        'supports' => 'مدد کرتا ہے',
        'supported' => 'مدد فراہم کی گئی',
        'management' => 'انتظام',
        'analysis' => 'تجزیہ',
        'data' => 'معلومات',
        'check' => 'جانچنا',
        'checks' => 'جانچتا ہے',
        'checked' => 'جانچا گیا',
        'view' => 'دیکھیں',
        'views' => 'دیکھتا ہے',
        'viewing' => 'دیکھنا',
        'show' => 'دکھائیں',
        'shows' => 'دکھاتا ہے',
        'shown' => 'دکھایا گیا',
        'display' => 'دکھانا',
        'displayed' => 'دکھایا گیا',
        'find' => 'تلاش کرنا',
        'found' => 'ملا',
        'search' => 'تلاش کریں',
        'select' => 'منتخب کریں',
        'selected' => 'منتخب کیا گیا',
        'choose' => 'منتخب کریں',
        'continue' => 'جاری رکھیں',
        'create' => 'بنائیں',
        'account' => 'اکاؤنٹ',
        'register' => 'اندراج کریں',
        'login' => 'داخل ہوں',
        'logout' => 'خروج کریں',
        'change' => 'تبدیل کریں',
        'add' => 'شامل کریں',
        'remove' => 'ہٹائیں',
        'delete' => 'حذف کریں',
        'save' => 'محفوظ کریں',
        'update' => 'تجدید کریں',
        'edit' => 'ترمیم کریں',
        'submit' => 'جمع کریں',
        'send' => 'بھیجیں',
        'resend' => 'دوبارہ بھیجیں',
        'verify' => 'تصدیق کریں',
        'confirm' => 'تصدیق کریں',
        'cancel' => 'منسوخ کریں',
        'close' => 'بند کریں',
        'open' => 'کھولیں',
        'next' => 'اگلا',
        'previous' => 'پچھلا',
        'back' => 'واپس',
        'read' => 'پڑھیں',
        'more' => 'مزید',
        'readmore' => 'مزید پڑھیں',
        'learn' => 'سیکھیں',
        'learned' => 'سیکھا',
        'use' => 'استعمال کریں',
        'uses' => 'استعمال کرتا ہے',
        'used' => 'استعمال کیا جاتا ہے',
        'need' => 'ضرورت ہونا',
        'needs' => 'ضرورت ہوتی ہے',
        'needed' => 'ضرورت تھی',
        'require' => 'ضرورت ہونا',
        'requires' => 'ضرورت ہوتی ہے',
        'required' => 'ضروری',
        'provide' => 'فراہم کرنا',
        'provides' => 'فراہم کرتا ہے',
        'provided' => 'فراہم کیا گیا',
        'make' => 'بنانا',
        'makes' => 'بناتا ہے',
        'keep' => 'برقرار رکھیں',
        'keeps' => 'برقرار رکھتا ہے',
        'avoid' => 'بچیں',
        'prevent' => 'روکنا',
        'prevents' => 'روکتا ہے',
        'protect' => 'بچانا',
        'protects' => 'بچاتا ہے',
        'apply' => 'استعمال کریں',
        'improve' => 'بہتر کرنا',
        'improves' => 'بہتر کرتا ہے',
        'reduce' => 'کم کرنا',
        'reduces' => 'کم کرتا ہے',
        'increase' => 'بڑھانا',
        'increases' => 'بڑھاتا ہے',
        'decrease' => 'کم ہونا',
        'decreases' => 'کم ہوتا ہے',
        'occur' => 'پیدا ہونا',
        'occurs' => 'پیدا ہوتا ہے',
        'happen' => 'ہونا',
        'happens' => 'ہوتا ہے',
        'appear' => 'ظاہر ہونا',
        'appears' => 'ظاہر ہوتا ہے',
        'become' => 'ہونا',
        'becomes' => 'ہو جاتا ہے',
        'develop' => 'نشوونما پانا',
        'develops' => 'نشوونما پاتا ہے',
        'cause' => 'سبب بننا',
        'causes' => 'سبب بنتا ہے',
        'damage' => 'نقصان پہنچانا',
        'damages' => 'نقصان پہنچاتا ہے',
        'attack' => 'حملہ کرنا',
        'attacks' => 'حملہ کرتا ہے',
        'spread' => 'پھیلنا',
        'spreads' => 'پھیلتا ہے',
        'move' => 'منتقل ہونا',
        'moves' => 'منتقل ہوتا ہے',
        'remove' => 'ہٹانا',
        'monitor' => 'نگرانی کرنا',
        'monitors' => 'نگرانی کرتا ہے',
        'plant' => 'پودا',
        'plants' => 'پودے',
        'crop' => 'فصل',
        'crops' => 'فصلیں',
        'pest' => 'کیڑا',
        'pests' => 'کیڑے',
        'disease' => 'بیماری',
        'diseases' => 'بیماریاں',
        'treatment' => 'علاج',
        'treat' => 'علاج کرنا',
        'treats' => 'علاج کرتا ہے',
        'soil' => 'مٹی',
        'seed' => 'بیج',
        'seeds' => 'بیج',
        'water' => 'پانی',
        'weather' => 'موسم',
        'forecast' => 'پیش گوئی',
        'information' => 'معلومات',
        'details' => 'تفصیلات',
        'description' => 'تفصیل',
        'question' => 'سوال',
        'questions' => 'سوالات',
        'answer' => 'جواب',
        'answers' => 'جوابات',
        'community' => 'برادری',
        'forum' => 'مباحثہ گاہ',
        'expert' => 'ماہر',
        'profile' => 'پروفائل',
        'picture' => 'تصویر',
        'image' => 'تصویر',
        'name' => 'نام',
        'email' => 'ای میل',
        'password' => 'پاس ورڈ',
        'language' => 'زبان',
        'home' => 'صفحۂ اول',
        'dashboard' => 'مرکزی صفحہ',
        'menu' => 'مینو',
        'settings' => 'ترتیبات',
        'privacy' => 'رازداری',
        'policy' => 'پالیسی',
        'success' => 'کامیابی',
        'error' => 'خرابی',
        'loading' => 'لوڈ ہو رہا ہے',
        'please' => 'براہِ کرم',
        'welcome' => 'خوش آمدید',
        'yes' => 'ہاں',
        'no' => 'نہیں',
        'and' => 'اور',
        'or' => 'یا',
        'with' => 'کے ساتھ',
        'without' => 'کے بغیر',
        'from' => 'سے',
        'for' => 'کے لیے',
        'to' => 'کو',
        'in' => 'میں',
        'on' => 'پر',
        'at' => 'پر',
        'by' => 'کے ذریعے',
        'of' => 'کا',
        'the' => '',
        'this' => 'یہ',
        'that' => 'وہ',
        'these' => 'یہ',
        'those' => 'وہ',
        'your' => 'آپ کا',
        'you' => 'آپ',
        'our' => 'ہمارا',
        'we' => 'ہم',
        'they' => 'وہ',
        'their' => 'ان کا',
        'my' => 'میرا',
        'me' => 'مجھے',
        'is' => 'ہے',
        'are' => 'ہیں',
        'was' => 'تھا',
        'were' => 'تھے',
        'can' => 'سکتا ہے',
        'will' => 'گا',
        'should' => 'چاہیے',
        'may' => 'شاید',
        'must' => 'ضرور',
        'not' => 'نہیں',
        'if' => 'اگر',
        'when' => 'جب',
        'where' => 'جہاں',
        'why' => 'کیوں',
        'how' => 'کیسے',
        'what' => 'کیا',
        'which' => 'کون سا',
        'who' => 'کون',
        'because' => 'کیونکہ',
        'before' => 'پہلے',
        'after' => 'بعد',
        'during' => 'کے دوران',
        'through' => 'کے ذریعے',
        'between' => 'کے درمیان',
        'also' => 'بھی',
        'only' => 'صرف',
        'very' => 'بہت',
        'more' => 'مزید',
        'less' => 'کم',
        'better' => 'بہتر',
        'best' => 'بہترین',
        'good' => 'اچھا',
        'important' => 'اہم',
        'main' => 'اہم',
        'major' => 'اہم',
        'common' => 'عام',
        'proper' => 'مناسب',
        'healthy' => 'صحت مند',
        'strong' => 'تیز',
        'small' => 'چھوٹا',
        'large' => 'بڑا',
        'high' => 'زیادہ',
        'low' => 'کم',
        'moderate' => 'درمیانہ',
        'new' => 'نیا',
        'old' => 'پرانا',
        'early' => 'جلد',
        'late' => 'دیر سے',
        'first' => 'پہلا',
        'last' => 'آخری',
        'time' => 'وقت',
        'today' => 'آج',
        'tomorrow' => 'کل',
        'morning' => 'صبح',
        'afternoon' => 'دوپہر',
        'evening' => 'شام',
        'night' => 'رات',
    ];

    private array $phrases = [
        'Cotton is mainly grown for its fiber, which is used in the textile industry to produce clothes, fabrics, and other products.' => 'کپاس بنیادی طور پر اپنے ریشے کے لیے اگائی جاتی ہے، جسے ٹیکسٹائل کی صنعت میں کپڑے، مختلف منسوجات اور دیگر مصنوعات تیار کرنے کے لیے استعمال کیا جاتا ہے۔',
        'Cotton plays a major role in Pakistan’s economy by supporting farmers, industries, and exports.' => 'کپاس کسانوں، صنعتوں اور برآمدات کو سہارا دے کر پاکستان کی معیشت میں اہم کردار ادا کرتی ہے۔',
        'Rice is harvested from September to November depending on the variety and climate conditions.' => 'چاول کی کٹائی قسم اور موسمی حالات کے مطابق ستمبر سے نومبر تک کی جاتی ہے۔',
        'Rice is usually sown from May to July in Pakistan.' => 'پاکستان میں چاول عام طور پر مئی سے جولائی تک بویا جاتا ہے۔',
        'Warm temperature and sufficient water during this period help proper seed germination and healthy plant growth.' => 'اس عرصے میں گرم درجہ حرارت اور وافر پانی بیج کے مناسب انکرن اور پودے کی صحت مند نشوونما میں مدد دیتے ہیں۔',
        'Good quality seed produces strong seedlings and improves crop yield.' => 'اچھے معیار کا بیج مضبوط پنیری پیدا کرتا ہے اور فصل کی پیداوار بہتر بناتا ہے۔',
        'Using the correct seed rate ensures healthy plant population and better production.' => 'بیج کی درست مقدار استعمال کرنے سے پودوں کی صحت مند تعداد برقرار رہتی ہے اور بہتر پیداوار حاصل ہوتی ہے۔',
        'Balanced fertilizers improve plant growth, grain quality, and crop production.' => 'متوازن کھادیں پودوں کی نشوونما، دانوں کے معیار اور فصل کی پیداوار بہتر کرتی ہیں۔',
        'Good land preparation helps better root growth and water management.' => 'زمین کی اچھی تیاری جڑوں کی بہتر نشوونما اور پانی کے مؤثر انتظام میں مدد دیتی ہے۔',
        'At the end of the rainy season the grains become mature and dry properly.' => 'برسات کے موسم کے اختتام پر دانے پختہ ہو کر اچھی طرح خشک ہو جاتے ہیں۔',
        'Dry weather during harvesting reduces grain moisture and improves quality.' => 'کٹائی کے دوران خشک موسم دانوں میں نمی کم کرتا ہے اور معیار بہتر بناتا ہے۔',
        'It is often called "white gold" because of its high economic value.' => 'اسے اس کی زیادہ معاشی قدر کی وجہ سے اکثر "سفید سونا" کہا جاتا ہے۔',
        'Smart Agriculture Platform' => 'ذہین زرعی پلیٹ فارم',
        'Grow Smarter.' => 'زیادہ سمجھداری سے اگائیں۔',
        'Farm Better.' => 'بہتر کاشت کاری کریں۔',
        'Grow Smarter. Farm Better.' => 'زیادہ سمجھداری سے اگائیں۔ بہتر کاشت کاری کریں۔',
        'GrowSmart brings essential farming knowledge, crop information, weather insights, pest management and intelligent soil analysis together in one simple platform.' => 'گرو اسمارٹ ضروری زرعی علم، فصلوں کی معلومات، موسم کی معلومات، کیڑوں کے انتظام اور مٹی کے ذہین تجزیے کو ایک آسان پلیٹ فارم پر اکٹھا کرتا ہے۔',
        'Explore commonly grown crops and learn more about them.' => 'عام طور پر اگائی جانے والی فصلوں کو دیکھیں اور ان کے بارے میں مزید معلومات حاصل کریں۔',
        'Useful tools to help you make better farming decisions.' => 'بہتر زرعی فیصلے کرنے میں آپ کی مدد کے لیے مفید اوزار۔',
        'GrowSmart is an intelligent agriculture platform helping farmers with crop information, pest management, soil analysis, weather forecasting and expert community support.' => 'گرو اسمارٹ ایک ذہین زرعی پلیٹ فارم ہے جو کسانوں کو فصلوں کی معلومات، کیڑوں کے انتظام، مٹی کے تجزیے، موسم کی پیش گوئی اور ماہرین کی برادری کی مدد فراہم کرتا ہے۔',
        'Stay updated with weather conditions and forecasts to make better farming decisions.' => 'بہتر زرعی فیصلے کرنے کے لیے موسم کی صورتحال اور پیش گوئی سے باخبر رہیں۔',
        'Ask questions, share farming problems and get help from agriculture experts.' => 'سوالات پوچھیں، کاشت کاری کے مسائل بیان کریں اور زرعی ماہرین سے مدد حاصل کریں۔',
        'Upload a soil image and get useful information and suggestions about your soil.' => 'مٹی کی تصویر اپ لوڈ کریں اور اپنی مٹی کے بارے میں مفید معلومات اور تجاویز حاصل کریں۔',
        'Find information about common pests and their management.' => 'عام کیڑوں اور ان کے تدارک کے بارے میں معلومات حاصل کریں۔',
        'No crops available at the moment.' => 'اس وقت کوئی فصل دستیاب نہیں ہے۔',
        'No pest management information available.' => 'کیڑوں کے انتظام سے متعلق کوئی معلومات دستیاب نہیں ہیں۔',
        'No pest information available' => 'کیڑوں سے متعلق کوئی معلومات دستیاب نہیں ہیں۔',
        'No crop details available' => 'فصل کی کوئی تفصیل دستیاب نہیں ہے۔',
        'No questions found' => 'کوئی سوال نہیں ملا۔',
        'No data available' => 'کوئی معلومات دستیاب نہیں ہیں۔',
        'Question Posted' => 'سوال شائع کر دیا گیا ہے۔',
        'Explore Crop Data' => 'فصلوں کی معلومات دیکھیں',
        'Check Weather' => 'موسم دیکھیں',
        'View crop information' => 'فصل کی معلومات دیکھیں',
        'Crop Resources' => 'فصلوں کے وسائل',
        'Expert Advice' => 'ماہرین کا مشورہ',
        'Soil Insights' => 'مٹی سے متعلق معلومات',
        'Popular Crops' => 'مقبول فصلیں',
        'GrowSmart Services' => 'گرو اسمارٹ کی خدمات',
        'Pest Management' => 'کیڑوں کا انتظام',
        'Weather Forecast' => 'موسم کی پیش گوئی',
        'Expert Support' => 'ماہرین کی مدد',
        'Crop Knowledge' => 'فصلوں کا علم',
        'Contact Us' => 'ہم سے رابطہ کریں',
        'Quick Links' => 'فوری روابط',
        'Home' => 'صفحۂ اول',
        'All Rights Reserved.' => 'جملہ حقوق محفوظ ہیں۔',
        'Empowering Farmers Through Smart Agriculture.' => 'ذہین زراعت کے ذریعے کسانوں کو بااختیار بنانا۔',
        'Smart Agriculture' => 'ذہین زراعت',
        'Community Forum' => 'برادری کا مباحثہ گاہ',
        'AI Soil Analysis' => 'اے آئی مٹی کا تجزیہ',
        'Weather Information' => 'موسم کی معلومات',
        'Useful Tools' => 'مفید اوزار',
        'Back to Home' => 'صفحۂ اول پر واپس جائیں',
        'Ask a Question' => 'سوال پوچھیں',
        'Ask Your Question' => 'اپنا سوال پوچھیں',
        'Ask another Question' => 'ایک اور سوال پوچھیں',
        'Submit Answer' => 'جواب جمع کریں',
        'Post Question' => 'سوال شائع کریں',
        'Read More' => 'مزید پڑھیں',
        'See All' => 'سب دیکھیں',
        'Loading...' => 'لوڈ ہو رہا ہے...',

        'Smart Agriculture Platform' => 'ذہین زرعی پلیٹ فارم',
        'Grow Smarter.' => 'زیادہ سمجھداری سے اگائیں۔',
        'Farm Better.' => 'بہتر کاشت کاری کریں۔',
        'Grow Smarter. Farm Better.' => 'زیادہ سمجھداری سے اگائیں۔ بہتر کاشت کاری کریں۔',
        'GrowSmart brings essential farming knowledge, crop information, weather insights, pest management and intelligent soil analysis together in one simple platform.' => 'گرو اسمارٹ ضروری زرعی علم، فصلوں کی معلومات، موسم کی پیش گوئی، کیڑوں کے انتظام اور مٹی کے ذہین تجزیے کو ایک آسان پلیٹ فارم پر اکٹھا کرتا ہے۔',
        'Explore Crop Data' => 'فصلوں کی معلومات دیکھیں',
        'Check Weather' => 'موسم دیکھیں',
        'Crop Resources' => 'فصلوں کے وسائل',
        'Expert Advice' => 'ماہرین کا مشورہ',
        'Soil Insights' => 'مٹی سے متعلق معلومات',
        'Popular Crops' => 'مقبول فصلیں',
        'Explore commonly grown crops and learn more about them.' => 'عام طور پر اگائی جانے والی فصلیں دیکھیں اور ان کے بارے میں مزید جانیں۔',
        'See All' => 'سب دیکھیں',
        'Popular' => 'مقبول',
        'View crop information' => 'فصل کی معلومات دیکھیں',
        'GrowSmart Services' => 'گرو اسمارٹ کی خدمات',
        'Useful tools to help you make better farming decisions.' => 'بہتر زرعی فیصلے کرنے میں مدد دینے والے مفید اوزار۔',
        'Contact Us' => 'ہم سے رابطہ کریں',
        'Quick Links' => 'فوری روابط',
        'Services' => 'خدمات',
        'Crop Knowledge' => 'فصلوں کا علم',
        'Weather Forecast' => 'موسم کی پیش گوئی',
        'Expert Support' => 'ماہرین کی مدد',
        'Empowering Farmers Through Smart Agriculture.' => 'ذہین زراعت کے ذریعے کسانوں کو بااختیار بنانا۔',
        'GrowSmart is an intelligent agriculture platform helping farmers with crop information, pest management, soil analysis, weather forecasting and expert community support.' => 'گرو اسمارٹ ایک ذہین زرعی پلیٹ فارم ہے جو کسانوں کو فصلوں کی معلومات، کیڑوں کے انتظام، مٹی کے تجزیے، موسم کی پیش گوئی اور ماہرین کی برادری کی مدد فراہم کرتا ہے۔',
        'Question Posted' => 'سوال شائع کر دیا گیا',
        'Please allow microphone permission to record your voice.' => 'اپنی آواز ریکارڈ کرنے کے لیے براہِ کرم مائیکروفون کی اجازت دیں۔',
        'Sending...' => 'بھیجا جا رہا ہے...',
        'Verifying...' => 'تصدیق کی جا رہی ہے...',
        'No crops available at the moment.' => 'اس وقت کوئی فصل دستیاب نہیں۔',
        'Summer Crops' => 'موسم گرما کی فصلیں',
        'Winter Crops' => 'موسم سرما کی فصلیں',
        'Crop Data' => 'فصلوں کی معلومات',
        'Pest Management' => 'کیڑوں کا انتظام',
        'AI Soil Analysis' => 'اے آئی مٹی کا تجزیہ',
        'Weather Information' => 'موسم کی معلومات',
        'Community Forum' => 'برادری کا مباحثہ گاہ',
        'My Questions' => 'میرے سوالات',
        'Account Settings' => 'اکاؤنٹ کی ترتیبات',
        'Privacy Policy' => 'رازداری کی پالیسی',
        'About Us' => 'ہمارے بارے میں',
        'Add Profile Picture' => 'پروفائل تصویر شامل کریں',
        'Select Language' => 'زبان منتخب کریں',
        'View Details' => 'تفصیلات دیکھیں',
        'Read More' => 'مزید پڑھیں',
        'Back to Home' => 'ہوم پر واپس جائیں',
        'Forgot Password' => 'پاس ورڈ بھول گئے؟',
        'Reset Password' => 'پاس ورڈ دوبارہ ترتیب دیں',
        'Confirm Password' => 'پاس ورڈ کی تصدیق کریں',
        'Remember Me' => 'مجھے یاد رکھیں',
        'Continue with Google' => 'گوگل کے ساتھ جاری رکھیں',
        'Create Account' => 'اکاؤنٹ بنائیں',
        'Already have an account?' => 'پہلے سے اکاؤنٹ موجود ہے؟',
        'Don\'t have an account?' => 'اکاؤنٹ موجود نہیں ہے؟',
        'Email Verification' => 'ای میل کی تصدیق',
        'Verify OTP' => 'او ٹی پی کی تصدیق کریں',
        'Send OTP' => 'او ٹی پی بھیجیں',
        'Resend OTP' => 'او ٹی پی دوبارہ بھیجیں',
        'Change Password' => 'پاس ورڈ تبدیل کریں',
        'Current Password' => 'موجودہ پاس ورڈ',
        'New Password' => 'نیا پاس ورڈ',
        'Update Profile' => 'پروفائل اپ ڈیٹ کریں',
        'Delete Account' => 'اکاؤنٹ حذف کریں',
        'Ask a Question' => 'سوال پوچھیں',
        'Post Question' => 'سوال پوسٹ کریں',
        'Submit Answer' => 'جواب جمع کریں',
        'No questions found' => 'کوئی سوال نہیں ملا',
        'No data available' => 'کوئی ڈیٹا دستیاب نہیں',
        'Loading...' => 'لوڈ ہو رہا ہے',
        'Search' => 'تلاش کریں',
        'Search Crops' => 'فصلیں تلاش کریں',
        'Search Pests' => 'کیڑے تلاش کریں',
        'Recommended Control' => 'تجویز کردہ تدارک',
        'How It Occurs' => 'یہ کیسے پیدا ہوتا ہے',
        'Crop Varieties' => 'فصل کی اقسام',
        'Types of Crop' => 'فصل کی اقسام',
        'Nutritional Value' => 'غذائی قدر',
        'Importance of Crop' => 'فصل کی اہمیت',
        'Basic Information' => 'بنیادی معلومات',
        'Sowing Season' => 'کاشت کا موسم',
        'Harvesting Season' => 'کٹائی کا موسم',
        'Climate Requirements' => 'موسمی ضروریات',
        'Soil Requirements' => 'مٹی کی ضروریات',
        'Land Preparation' => 'زمین کی تیاری',
        'Seed Selection' => 'بیج کا انتخاب',
        'Seed Rate' => 'بیج کی مقدار',
        'Irrigation Requirements' => 'آبپاشی کی ضروریات',
        'Fertilizer Requirements' => 'کھاد کی ضروریات',
        'Growing Stages' => 'نشوونما کے مراحل',
        'Introduction' => 'تعارف',
        'Symptoms' => 'علامات',
        'Protection' => 'بچاؤ',
        'Crop Name' => 'فصل کا نام',
        'Crop Image' => 'فصل کی تصویر',
        'Pest Type' => 'کیڑے کی قسم',
        'Insect Pest' => 'حشری کیڑا',
        'Fungal Disease' => 'فنگسی بیماری',
        'Bacterial Disease' => 'بیکٹیریائی بیماری',
        'Viral Disease' => 'وائرل بیماری',
        'Home' => 'صفحۂ اول',
        'Community' => 'برادری',
        'Weather' => 'موسم',
        'Profile' => 'پروفائل',
        'Logout' => 'خروج کریں',
        'Login' => 'داخل ہوں',
        'Register' => 'اندراج کریں',
        'Crops' => 'فصلیں',
        'Crop' => 'فصل',
        'Pest' => 'کیڑا',
        'Pests' => 'کیڑے',
        'Disease' => 'بیماری',
        'Diseases' => 'بیماریاں',
        'Name' => 'نام',
        'Email' => 'ای میل',
        'Password' => 'پاس ورڈ',
        'Submit' => 'جمع کریں',
        'Save' => 'محفوظ کریں',
        'Update' => 'تجدید کریں',
        'Delete' => 'حذف کریں',
        'Edit' => 'ترمیم کریں',
        'Cancel' => 'منسوخ کریں',
        'Back' => 'واپس',
        'Next' => 'اگلا',
        'Previous' => 'پچھلا',
        'Yes' => 'ہاں',
        'No' => 'نہیں',
        'Success' => 'کامیابی',
        'Error' => 'خرابی',
        'Active' => 'فعال',
        'Inactive' => 'غیر فعال',
        'User' => 'صارف',
        'Expert' => 'ماہر',
        'Admin' => 'منتظم',
        'Summer' => 'گرمی',
        'Winter' => 'سردی',
        'Fruit' => 'پھل',
        'Vegetable' => 'سبزی',
        'Vegetables' => 'سبزیاں',
        'Fruits' => 'پھل',
        'Grain' => 'اناج',
        'Grains' => 'اناج',
        'Indoor' => 'اندرونی',
        'Outdoor' => 'بیرونی',
        'Dashboard' => 'مرکزی صفحہ',
        'Crop Information' => 'فصل کی معلومات',
        'Pest Information' => 'کیڑے کی معلومات',
        'No pest information available' => 'کیڑے کی کوئی معلومات دستیاب نہیں',
        'No crop details available' => 'فصل کی کوئی تفصیل دستیاب نہیں',
        'Temperature' => 'درجہ حرارت',
        'Humidity' => 'نمی',
        'Wind Speed' => 'ہوا کی رفتار',
        'Feels Like' => 'محسوس ہونے والا درجہ حرارت',
        'Forecast' => 'پیش گوئی',
        'Today' => 'آج',
        'Tomorrow' => 'کل',
        'Morning' => 'صبح',
        'Afternoon' => 'دوپہر',
        'Evening' => 'شام',
        'Night' => 'رات',
        'Clear' => 'صاف',
        'Cloudy' => 'ابر آلود',
        'Rain' => 'بارش',
        'Rainy' => 'بارش والا',
        'Sunny' => 'دھوپ والا',
        'Windy' => 'ہوا دار',
        'Thunderstorm' => 'گرج چمک کے ساتھ بارش',
        'Mist' => 'دھند',
        'Haze' => 'دھندلا پن',
        'Fog' => 'کہرا',
        'Drizzle' => 'بوندا باندی',
        'Partly Cloudy' => 'جزوی طور پر ابر آلود',
        'Strong Wind' => 'تیز ہوا',
        'Crop Type' => 'فصل کی قسم',
        'Category' => 'زمرہ',
        'Season' => 'موسم',
        'Scientific Name' => 'سائنسی نام',
        'Main Use' => 'اہم استعمال',
        'Ideal Temperature' => 'موزوں درجہ حرارت',
        'Water Requirement' => 'پانی کی ضرورت',
        'Best Soil Type' => 'بہترین مٹی کی قسم',
        'Major Areas' => 'اہم علاقے',
        'Suitable Soil' => 'موزوں مٹی',
        'Ideal pH' => 'موزوں پی ایچ',
        'Ploughing' => 'ہل چلانا',
        'Leveling' => 'ہموار کرنا',
        'Weed Removal' => 'جڑی بوٹیوں کا خاتمہ',
        'Organic Matter' => 'نامیاتی مادہ',
        'Characteristics of Good Seed' => 'اچھے بیج کی خصوصیات',
        'Germination Temperature' => 'انکرن کا درجہ حرارت',
        'Vegetative Growth' => 'نباتاتی نشوونما',
        'Fruit Development' => 'پھل کی نشوونما',
        'Head Formation' => 'گوبھی کے سر کی تشکیل',
        'Proper drainage' => 'مناسب نکاسی آب',
        'Balanced fertilization' => 'متوازن کھاد کا استعمال',
        'Field hygiene' => 'کھیت کی صفائی',
        'Natural predators' => 'قدرتی دشمن',
        'Market value' => 'بازار کی قیمت',
        'Market demand' => 'بازار کی طلب',
        'Healthy plant growth' => 'صحت مند پودوں کی نشوونما',
        'Crop production' => 'فصل کی پیداوار',
        'Plant growth' => 'پودے کی نشوونما',
        'Root development' => 'جڑوں کی نشوونما',
        'Better crop quality' => 'فصل کا بہتر معیار',
        'Timely harvesting' => 'بروقت کٹائی',
        'Cool weather' => 'ٹھنڈا موسم',
        'Warm climate' => 'گرم آب و ہوا',
        'Full sunlight' => 'مکمل دھوپ',
        'Organic matter' => 'نامیاتی مادہ',
        'Well-drained soil' => 'اچھی نکاسی والی مٹی',
        'Fertile soil' => 'زرخیز مٹی',
        'Loamy soil' => 'دومی مٹی',
        'Sandy loam soil' => 'ریتیلی دومی مٹی',
        'Fertile well-drained soil' => 'زرخیز اور اچھی نکاسی والی مٹی',
        'Moderate' => 'درمیانہ',
        'High' => 'زیادہ',
        'Low' => 'کم',
        'Good' => 'اچھا',
        'Best' => 'بہترین',
        'Field' => 'کھیت',
        'Plant' => 'پودا',
        'Plants' => 'پودے',
        'Leaves' => 'پتے',
        'Leaf' => 'پتا',
        'Stem' => 'تنا',
        'Stems' => 'تنے',
        'Roots' => 'جڑیں',
        'Root' => 'جڑ',
        'Flower' => 'پھول',
        'Flowers' => 'پھول',
        'Seed' => 'بیج',
        'Seeds' => 'بیج',
        'Soil' => 'مٹی',
        'Water' => 'پانی',
        'Fertilizer' => 'کھاد',
        'Irrigation' => 'آبپاشی',
        'Climate' => 'آب و ہوا',
        'Growth' => 'نشوونما',
        'Yield' => 'پیداوار',
        'Production' => 'پیداوار',
        'Quality' => 'معیار',
        'Demand' => 'طلب',
        'Use' => 'استعمال',
        'Used' => 'استعمال کیا جاتا ہے',
        'Grown' => 'اگایا جاتا ہے',
        'Grow' => 'اگانا',
        'Growing' => 'نشوونما',
        'Requires' => 'ضرورت ہوتی ہے',
        'Require' => 'ضرورت ہونا',
        'Requires proper' => 'مناسب ضرورت ہوتی ہے',
        'Best for' => 'کے لیے بہترین',
        'Suitable for' => 'کے لیے موزوں',
        'Helps' => 'مدد کرتا ہے',
        'Supports' => 'سہارا دیتا ہے',
        'Improves' => 'بہتر کرتا ہے',
        'Reduces' => 'کم کرتا ہے',
        'Prevents' => 'روکتا ہے',
        'Maintain' => 'برقرار رکھیں',
        'Use resistant varieties' => 'مزاحمت والی اقسام استعمال کریں',
        'Remove affected plants' => 'متاثرہ پودے نکال دیں',
        'Monitor crops regularly' => 'فصل کی باقاعدگی سے نگرانی کریں',
        'Keep the field clean' => 'کھیت صاف رکھیں',
        'Apply' => 'استعمال کریں',
        'according to agricultural recommendations' => 'زرعی سفارشات کے مطابق',
        'Recommended' => 'تجویز کردہ',
        'Control' => 'قابو',
        'Affected' => 'متاثرہ',
        'Infected' => 'متاثرہ',
        'Damage' => 'نقصان',
        'Damaged' => 'متاثرہ',
        'Weak' => 'کمزور',
        'Yellow' => 'پیلا',
        'Yellowing' => 'زرد ہونا',
        'Curl' => 'مڑنا',
        'Curled' => 'مڑے ہوئے',
        'Dry' => 'خشک',
        'Drying' => 'خشک ہونا',
        'White' => 'سفید',
        'Green' => 'سبز',
        'Brown' => 'بھورا',
        'Black' => 'کالا',
        'Red' => 'سرخ',
        'Silver' => 'چاندی جیسا',
        'Sticky' => 'چپچپا',
        'Holes' => 'سوراخ',
        'Patch' => 'داغ',
        'Patches' => 'داغ',
        'Spot' => 'دھبہ',
        'Spots' => 'دھبے',
        'Powder' => 'پاؤڈر',
        'Fungus' => 'فنگس',
        'Fungal' => 'فنگسی',
        'Bacterial' => 'بیکٹیریائی',
        'Viral' => 'وائرل',
        'Insect' => 'حشرہ',
        'Insects' => 'حشرات',
        'Larvae' => 'سنڈیاں',
        'Larva' => 'سنڈی',
        'Adult' => 'بالغ',
        'Eggs' => 'انڈے',
        'Egg' => 'انڈا',
        'Feed' => 'خوراک حاصل کرنا',
        'Feeds' => 'خوراک حاصل کرتا ہے',
        'Suck' => 'چوسنا',
        'Sucks' => 'چوستا ہے',
        'Sap' => 'رس',
        'Spread' => 'پھیلانا',
        'Spreads' => 'پھیلاتا ہے',
        'Attack' => 'حملہ کرنا',
        'Attacks' => 'حملہ کرتا ہے',
        'Develop' => 'نشوونما پانا',
        'Develops' => 'نشوونما پاتا ہے',
        'Appear' => 'ظاہر ہونا',
        'Appear on' => 'پر ظاہر ہونا',
        'Inside' => 'اندر',
        'During' => 'کے دوران',
        'Before' => 'سے پہلے',
        'After' => 'کے بعد',
        'Because' => 'کیونکہ',
        'When' => 'جب',
        'Where' => 'جہاں',
        'Which' => 'جو',
        'This' => 'یہ',
        'That' => 'وہ',
        'These' => 'یہ',
        'Those' => 'وہ',
        'And' => 'اور',
        'Or' => 'یا',
        'With' => 'کے ساتھ',
        'Without' => 'کے بغیر',
        'From' => 'سے',
        'For' => 'کے لیے',
        'In' => 'میں',
        'On' => 'پر',
        'At' => 'پر',
        'To' => 'کو',
        'Of' => 'کا',
        'The' => 'یہ',
        'A' => 'ایک',
        'An' => 'ایک',
        'Is' => 'ہے',
        'Are' => 'ہیں',
        'Was' => 'تھا',
        'Were' => 'تھے',
        'Becomes' => 'ہو جاتا ہے',
        'Become' => 'ہونا',
        'Can' => 'سکتا ہے',
        'May' => 'مئی',
        'More' => 'زیادہ',
        'Less' => 'کم',
        'Better' => 'بہتر',
        'Healthy' => 'صحت مند',
        'Proper' => 'مناسب',
        'Regular' => 'باقاعدہ',
        'Important' => 'اہم',
        'Main' => 'اہم',
        'Major' => 'اہم',
        'First' => 'پہلا',
        'Later' => 'بعد میں',
        'Finally' => 'آخر میں',
        'Usually' => 'عام طور پر',
        'Widely' => 'وسیع پیمانے پر',
        'Common' => 'عام',
        'Popular' => 'مقبول',
        'Many' => 'بہت سے',
        'Other' => 'دیگر',
        'Country' => 'ملک',
        'Countries' => 'ممالک',
        'Pakistan' => 'پاکستان',
        'Punjab' => 'پنجاب',
        'Sindh' => 'سندھ',
        'KPK' => 'خیبر پختونخوا',
        'Balochistan' => 'بلوچستان',
        'Rabi' => 'ربیع',
        'Kharif' => 'خریف',
        'Winter Crop' => 'موسم سرما کی فصل',
        'Summer Crop' => 'موسم گرما کی فصل',
        'Vegetable crop' => 'سبزی کی فصل',
        'Oilseed crop' => 'تیل دار بیج کی فصل',
        'Grain crop' => 'اناج کی فصل',
        'Nutritious' => 'غذائیت سے بھرپور',
        'Nutrition' => 'غذائیت',
        'Salad' => 'سلاد',
        'Soup' => 'شوربہ',
        'Edible oil' => 'کھانے کا تیل',
        'Animal feed' => 'جانوروں کی خوراک',
        'Nursery' => 'نرسری',
        'Transplanted' => 'منتقل کیا جاتا ہے',
        'Fields' => 'کھیت',
        'Head' => 'گوبھی کا سر',
        'Heads' => 'گوبھی کے سر',
        'Filling' => 'بھرائی',
        'Tillering' => 'شاخیں بننا',
        'Photosynthesis' => 'ضیائی تالیف',
        'Residues' => 'باقیات',
        'Sanitation' => 'صفائی',
        'Spacing' => 'فاصلہ',
        'Traps' => 'پھندے',
        'Trap' => 'پھندا',
        'Sticky traps' => 'چپکنے والے پھندے',
        'Pheromone traps' => 'فیرومون پھندے',
        'Weeds' => 'جڑی بوٹیاں',
        'Weed' => 'جڑی بوٹی',
        'Predators' => 'شکاری حشرات',
        'Nitrogen' => 'نائٹروجن',
        'Nitrogen fertilizer' => 'نائٹروجن کھاد',
        'Excessive' => 'ضرورت سے زیادہ',
        'Infestation' => 'حملہ',
        'Severe' => 'شدید',
        'Local' => 'مقامی',
        'Agricultural' => 'زرعی',
        'Department' => 'محکمہ',
        'Departments' => 'محکمے',
        'Advice' => 'مشورہ',
        'According' => 'مطابق',
        'Conditions' => 'حالات',
        'Condition' => 'حالت',
        'Warm' => 'گرم',
        'Humid' => 'مرطوب',
        'Moist' => 'نم',
        'Moisture' => 'نمی',
        'Cool' => 'ٹھنڈا',
        'Moderate temperatures' => 'درمیانہ درجہ حرارت',
        'Strong' => 'مضبوط',
        'Taste' => 'ذائقہ',
        'Color' => 'رنگ',
        'Market' => 'بازار',
        'Value' => 'قدر',
        'Cost' => 'لاگت',
        'Price' => 'قیمت',
        'Information' => 'معلومات',
        'Details' => 'تفصیلات',
        'Description' => 'تفصیل',
        'Question' => 'سوال',
        'Questions' => 'سوالات',
        'Answer' => 'جواب',
        'Answers' => 'جوابات',
        'Post' => 'پوسٹ',
        'Posts' => 'پوسٹس',
        'Reply' => 'جواب دیں',
        'Replies' => 'جوابات',
        'Forum' => 'فورم',
        'User Name' => 'صارف کا نام',
        'Username' => 'صارف نام',
        'Profile Picture' => 'پروفائل تصویر',
        'Settings' => 'ترتیبات',
        'Change' => 'تبدیل کریں',
        'Close' => 'بند کریں',
        'Open' => 'کھولیں',
        'Menu' => 'مینو',
        'Notifications' => 'اطلاعات',
        'No results found' => 'کوئی نتیجہ نہیں ملا',
        'Please wait' => 'براہ کرم انتظار کریں',
        'Required' => 'ضروری',
        'Optional' => 'اختیاری',
        'Invalid' => 'غلط',
        'Required field' => 'ضروری خانہ',
        'Upload' => 'اپ لوڈ کریں',
        'Choose File' => 'فائل منتخب کریں',
        'No file chosen' => 'کوئی فائل منتخب نہیں کی گئی',
        'Dashboard Home' => 'ڈیش بورڈ ہوم',
        'Smart Agriculture' => 'ذہین زراعت',
        'SMART AGRICULTURE' => 'ذہین زراعت',
        'GrowSmart' => 'گرو اسمارٹ',
        'AI' => 'اے آئی',
        'OTP' => 'او ٹی پی',
        'Google' => 'گوگل',
        'Facebook' => 'فیس بک',
        'Monday' => 'پیر',
        'Tuesday' => 'منگل',
        'Wednesday' => 'بدھ',
        'Thursday' => 'جمعرات',
        'Friday' => 'جمعہ',
        'Saturday' => 'ہفتہ',
        'Sunday' => 'اتوار',
        'January' => 'جنوری',
        'February' => 'فروری',
        'March' => 'مارچ',
        'April' => 'اپریل',
        'June' => 'جون',
        'July' => 'جولائی',
        'August' => 'اگست',
        'September' => 'ستمبر',
        'October' => 'اکتوبر',
        'November' => 'نومبر',
        'December' => 'دسمبر',
        'kg' => 'کلوگرام',
        'kg.' => 'کلوگرام',
        'kg/acre' => 'کلوگرام فی ایکڑ',
        'acre' => 'ایکڑ',
        'acres' => 'ایکڑ',
        'meter' => 'میٹر',
        'meters' => 'میٹر',
        'cm' => 'سینٹی میٹر',
        'mm' => 'ملی میٹر',
        '°C' => '°سینٹی گریڈ',
        'km/h' => 'کلومیٹر فی گھنٹہ',
        'percent' => 'فیصد',
        '%' => 'فیصد',
        'hours' => 'گھنٹے',
        'hour' => 'گھنٹہ',
        'days' => 'دن',
        'day' => 'دن',
        'weeks' => 'ہفتے',
        'week' => 'ہفتہ',
        'months' => 'ماہ',
        'month' => 'ماہ',
        'years' => 'سال',
        'year' => 'سال',
        'liters' => 'لیٹر',
        'liter' => 'لیٹر',
        'litre' => 'لیٹر',
        'litres' => 'لیٹر',
        'pH' => 'پی ایچ',
        'm' => 'میٹر',
        'Moderate Water' => 'درمیانہ پانی',
        'High Water' => 'زیادہ پانی',
        'Low Water' => 'کم پانی',
        'English' => 'انگریزی',
        'Broccoli' => 'بروکلی',
        'Rice' => 'چاول',
        'Maize' => 'مکئی',
        'Corn' => 'مکئی',
        'Sorghum' => 'جوار',
        'Pearl Millet' => 'باجرا', 'Bajra' => 'باجرا',
        'Wheat' => 'گندم',
        'Barley' => 'جو',
        'Linseed' => 'السی',
        'Bottle Gourd' => 'لوکی',
        'Okra' => 'بھنڈی',
        'Tomato' => 'ٹماٹر',
        'Pumpkin' => 'کدو',
        'Bitter Gourd' => 'کریلا',
        'Turmeric' => 'ہلدی',
        'Cucumber' => 'کھیرا',
        'EggPlant(Brinjal)' => 'بینگن',
        'Chilli' => 'مرچ',
        'Arum' => 'اروی',
        'Ginger' => 'ادرک',
        'Potato' => 'آلو',
        'Spinach' => 'پالک',
        'Pea' => 'مٹر',
        'Carrot' => 'گاجر',
        'Onion' => 'پیاز',
        'CauliFlower' => 'پھول گوبھی',
        'Cabbage' => 'بند گوبھی',
        'Radish' => 'مولی',
        'Bean' => 'لوبیا',
        'Lettuce' => 'سلاد پتہ',
        'Garlic' => 'لہسن',
        'Beetroot' => 'چقندر',
        'Turnip' => 'شلجم',
        'Coriander' => 'دھنیا',
        'Mint' => 'پودینہ',
        'Fennel' => 'سونف',
        'Banana' => 'کیلا',
        'Mango' => 'آم',
        'Lychee' => 'لیچی',
        'Watermelon' => 'تربوز',
        'Melon' => 'خربوزہ',
        'Guava' => 'امرود',
        'Papaya' => 'پپیتا',
        'Peach' => 'آڑو',
        'Orange' => 'مالٹا',
        'Kinnow' => 'کینو',
        'Lemon' => 'لیموں',
        'GrapeFruit' => 'چکوترا',
        'Sweet Lime' => 'میٹھا لیموں',
        'Pomegranate' => 'انار',
        'Apple' => 'سیب',
        'Date' => 'کھجور',
        'Cotton' => 'کپاس',
        'Sugarcane' => 'گنا',
        'Mung' => 'مونگ',
        'Soybean' => 'سویا بین',
        'Groundnut' => 'مونگ پھلی',
        'Mustard' => 'سرسوں',
        'Rapeseed' => 'رائی',
        'Canola' => 'کینولا',
        'Lucerne' => 'لوسرن',
        'Fenugreek(Methi)' => 'میتھی',
        'SunFlower' => 'سورج مکھی',
        'Isabgol' => 'اسپغول',
        'Whitefly' => 'سفید مکھی',
        'Aphids' => 'افڈز',
        'Jassid' => 'جیسڈ',
        'Pod Borer' => 'پھلی کا سنڈی کیڑا',
        'Thrips' => 'تھرپس',
        'Powdery Mildew' => 'سفوفی پھپھوندی کی بیماری',
        'Cercospora Leaf Spot' => 'سرکوسپورا پتوں کا دھبہ',
        'Rice Stem Borer' => 'چاول کا تنے کا کیڑا',
        'Brown Planthopper' => 'بھورا پلانٹ ہاپر',
        'Rice Leaf Folder' => 'چاول کے پتے لپیٹنے والا کیڑا',
        'Rice Hispa' => 'چاول کا ہسپا',
        'Rice Gall Midge' => 'چاول کا گال مِج',
        'Rice Blast' => 'چاول کا جھلساؤ',
        'Bacterial Leaf Blight' => 'بیکٹیریائی پتوں کا جھلساؤ',
    ];
    private array $words = [
        'is' => 'ہے',
        'are' => 'ہیں',
        'a' => 'ایک',
        'an' => 'ایک',
        'the' => 'یہ',
        'and' => 'اور',
        'or' => 'یا',
        'in' => 'میں',
        'on' => 'پر',
        'at' => 'پر',
        'to' => 'کو',
        'of' => 'کا',
        'for' => 'کے لیے',
        'with' => 'کے ساتھ',
        'from' => 'سے',
        'this' => 'یہ',
        'that' => 'وہ',
        'these' => 'یہ',
        'those' => 'وہ',
        'turn' => 'ہو جاتے ہیں',
        'turns' => 'ہو جاتا ہے',
        'yellow' => 'پیلا',
        'nutritious' => 'غذائیت سے بھرپور',
        'vegetable' => 'سبزی',
        'crop' => 'فصل',
        'grown' => 'اگایا جاتا ہے',
        'growth' => 'نشوونما',
        'becomes' => 'ہو جاتا ہے',
        'weak' => 'کمزور',
        'leaves' => 'پتے',
        'leaf' => 'پتا',
        'plant' => 'پودا',
        'plants' => 'پودے',
        'suck' => 'چوسنا',
        'sucks' => 'چوستا ہے',
        'feed' => 'خوراک حاصل کرنا',
        'feeds' => 'خوراک حاصل کرتا ہے',
        'develop' => 'نشوونما پانا',
        'develops' => 'نشوونما پاتا ہے',
        'appears' => 'ظاہر ہوتا ہے',
        'during' => 'کے دوران',
        'because' => 'کیونکہ',
        'properly' => 'مناسب طریقے سے',
        'proper' => 'مناسب',
        'best' => 'بہترین',
        'better' => 'بہتر',
        'high' => 'زیادہ',
        'low' => 'کم',
        'moderate' => 'درمیانہ',
        'healthy' => 'صحت مند',
        'important' => 'اہم',
        'widely' => 'وسیع پیمانے پر',
        'popular' => 'مقبول',
        'used' => 'استعمال کیا جاتا ہے',
        'use' => 'استعمال',
        'requires' => 'ضرورت ہوتی ہے',
        'requires' => 'ضرورت ہوتی ہے',
        'supports' => 'مدد کرتا ہے',
        'improves' => 'بہتر کرتا ہے',
        'reduces' => 'کم کرتا ہے',
        'prevents' => 'روکتا ہے',
        'loading...' => 'لوڈ ہو رہا ہے',
        'search' => 'تلاش کریں',
        'introduction' => 'تعارف',
        'symptoms' => 'علامات',
        'protection' => 'بچاؤ',
        'home' => 'ہوم',
        'community' => 'کمیونٹی',
        'weather' => 'موسم',
        'profile' => 'پروفائل',
        'logout' => 'لاگ آؤٹ',
        'login' => 'لاگ اِن',
        'register' => 'رجسٹر کریں',
        'crops' => 'فصلیں',
        'crop' => 'فصل',
        'pest' => 'کیڑا',
        'pests' => 'کیڑے',
        'disease' => 'بیماری',
        'diseases' => 'بیماریاں',
        'name' => 'نام',
        'email' => 'ای میل',
        'password' => 'پاس ورڈ',
        'submit' => 'جمع کریں',
        'save' => 'محفوظ کریں',
        'update' => 'اپ ڈیٹ کریں',
        'delete' => 'حذف کریں',
        'edit' => 'ترمیم کریں',
        'cancel' => 'منسوخ کریں',
        'back' => 'واپس',
        'next' => 'اگلا',
        'previous' => 'پچھلا',
        'yes' => 'ہاں',
        'no' => 'نہیں',
        'success' => 'کامیابی',
        'error' => 'خرابی',
        'active' => 'فعال',
        'inactive' => 'غیر فعال',
        'user' => 'صارف',
        'expert' => 'ماہر',
        'admin' => 'منتظم',
        'summer' => 'گرمی',
        'winter' => 'سردی',
        'fruit' => 'پھل',
        'vegetable' => 'سبزی',
        'vegetables' => 'سبزیاں',
        'fruits' => 'پھل',
        'grain' => 'اناج',
        'grains' => 'اناج',
        'indoor' => 'اندرونی',
        'outdoor' => 'بیرونی',
        'dashboard' => 'ڈیش بورڈ',
        'temperature' => 'درجہ حرارت',
        'humidity' => 'نمی',
        'forecast' => 'پیش گوئی',
        'today' => 'آج',
        'tomorrow' => 'کل',
        'morning' => 'صبح',
        'afternoon' => 'دوپہر',
        'evening' => 'شام',
        'night' => 'رات',
        'clear' => 'صاف',
        'cloudy' => 'ابر آلود',
        'rain' => 'بارش',
        'rainy' => 'بارش والا',
        'sunny' => 'دھوپ والا',
        'windy' => 'ہوا دار',
        'thunderstorm' => 'گرج چمک کے ساتھ بارش',
        'mist' => 'دھند',
        'haze' => 'دھندلا پن',
        'fog' => 'کہرا',
        'drizzle' => 'بوندا باندی',
        'category' => 'زمرہ',
        'season' => 'موسم',
        'ploughing' => 'ہل چلانا',
        'leveling' => 'ہموار کرنا',
        'moderate' => 'درمیانہ',
        'high' => 'زیادہ',
        'low' => 'کم',
        'good' => 'اچھا',
        'best' => 'بہترین',
        'field' => 'کھیت',
        'plant' => 'پودا',
        'plants' => 'پودے',
        'leaves' => 'پتے',
        'leaf' => 'پتا',
        'stem' => 'تنا',
        'stems' => 'تنے',
        'roots' => 'جڑیں',
        'root' => 'جڑ',
        'flower' => 'پھول',
        'flowers' => 'پھول',
        'seed' => 'بیج',
        'seeds' => 'بیج',
        'soil' => 'مٹی',
        'water' => 'پانی',
        'fertilizer' => 'کھاد',
        'irrigation' => 'آبپاشی',
        'climate' => 'آب و ہوا',
        'growth' => 'نشوونما',
        'yield' => 'پیداوار',
        'production' => 'پیداوار',
        'quality' => 'معیار',
        'demand' => 'طلب',
        'use' => 'استعمال',
        'used' => 'استعمال کیا جاتا ہے',
        'grown' => 'اگایا جاتا ہے',
        'grow' => 'اگانا',
        'growing' => 'نشوونما',
        'requires' => 'ضرورت ہوتی ہے',
        'require' => 'ضرورت ہونا',
        'helps' => 'مدد کرتا ہے',
        'supports' => 'سہارا دیتا ہے',
        'improves' => 'بہتر کرتا ہے',
        'reduces' => 'کم کرتا ہے',
        'prevents' => 'روکتا ہے',
        'maintain' => 'برقرار رکھیں',
        'apply' => 'استعمال کریں',
        'recommended' => 'تجویز کردہ',
        'control' => 'کنٹرول',
        'affected' => 'متاثرہ',
        'infected' => 'متاثرہ',
        'damage' => 'نقصان',
        'damaged' => 'متاثرہ',
        'weak' => 'کمزور',
        'yellow' => 'پیلا',
        'yellowing' => 'زرد ہونا',
        'curl' => 'مڑنا',
        'curled' => 'مڑے ہوئے',
        'dry' => 'خشک',
        'drying' => 'خشک ہونا',
        'white' => 'سفید',
        'green' => 'سبز',
        'brown' => 'بھورا',
        'black' => 'کالا',
        'red' => 'سرخ',
        'silver' => 'چاندی جیسا',
        'sticky' => 'چپچپا',
        'holes' => 'سوراخ',
        'patch' => 'داغ',
        'patches' => 'داغ',
        'spot' => 'دھبہ',
        'spots' => 'دھبے',
        'powder' => 'پاؤڈر',
        'fungus' => 'فنگس',
        'fungal' => 'فنگسی',
        'bacterial' => 'بیکٹیریائی',
        'viral' => 'وائرل',
        'insect' => 'حشرہ',
        'insects' => 'حشرات',
        'larvae' => 'سنڈیاں',
        'larva' => 'سنڈی',
        'adult' => 'بالغ',
        'eggs' => 'انڈے',
        'egg' => 'انڈا',
        'feed' => 'خوراک حاصل کرنا',
        'feeds' => 'خوراک حاصل کرتا ہے',
        'suck' => 'چوسنا',
        'sucks' => 'چوستا ہے',
        'sap' => 'رس',
        'spread' => 'پھیلانا',
        'spreads' => 'پھیلاتا ہے',
        'attack' => 'حملہ کرنا',
        'attacks' => 'حملہ کرتا ہے',
        'develop' => 'نشوونما پانا',
        'develops' => 'نشوونما پاتا ہے',
        'appear' => 'ظاہر ہونا',
        'inside' => 'اندر',
        'during' => 'کے دوران',
        'before' => 'سے پہلے',
        'after' => 'کے بعد',
        'because' => 'کیونکہ',
        'when' => 'جب',
        'where' => 'جہاں',
        'which' => 'جو',
        'this' => 'یہ',
        'that' => 'وہ',
        'these' => 'یہ',
        'those' => 'وہ',
        'and' => 'اور',
        'or' => 'یا',
        'with' => 'کے ساتھ',
        'without' => 'کے بغیر',
        'from' => 'سے',
        'for' => 'کے لیے',
        'in' => 'میں',
        'on' => 'پر',
        'at' => 'پر',
        'to' => 'کو',
        'of' => 'کا',
        'the' => 'یہ',
        'a' => 'ایک',
        'an' => 'ایک',
        'is' => 'ہے',
        'are' => 'ہیں',
        'was' => 'تھا',
        'were' => 'تھے',
        'becomes' => 'ہو جاتا ہے',
        'become' => 'ہونا',
        'can' => 'سکتا ہے',
        'may' => 'مئی',
        'more' => 'زیادہ',
        'less' => 'کم',
        'better' => 'بہتر',
        'healthy' => 'صحت مند',
        'proper' => 'مناسب',
        'regular' => 'باقاعدہ',
        'important' => 'اہم',
        'main' => 'اہم',
        'major' => 'اہم',
        'first' => 'پہلا',
        'later' => 'بعد میں',
        'finally' => 'آخر میں',
        'usually' => 'عام طور پر',
        'widely' => 'وسیع پیمانے پر',
        'common' => 'عام',
        'popular' => 'مقبول',
        'many' => 'بہت سے',
        'other' => 'دیگر',
        'country' => 'ملک',
        'countries' => 'ممالک',
        'pakistan' => 'پاکستان',
        'punjab' => 'پنجاب',
        'sindh' => 'سندھ',
        'kpk' => 'خیبر پختونخوا',
        'balochistan' => 'بلوچستان',
        'rabi' => 'ربیع',
        'kharif' => 'خریف',
        'nutritious' => 'غذائیت سے بھرپور',
        'nutrition' => 'غذائیت',
        'salad' => 'سلاد',
        'soup' => 'شوربہ',
        'nursery' => 'نرسری',
        'transplanted' => 'منتقل کیا جاتا ہے',
        'fields' => 'کھیت',
        'head' => 'گوبھی کا سر',
        'heads' => 'گوبھی کے سر',
        'filling' => 'بھرائی',
        'tillering' => 'شاخیں بننا',
        'photosynthesis' => 'ضیائی تالیف',
        'residues' => 'باقیات',
        'sanitation' => 'صفائی',
        'spacing' => 'فاصلہ',
        'traps' => 'پھندے',
        'trap' => 'پھندا',
        'weeds' => 'جڑی بوٹیاں',
        'weed' => 'جڑی بوٹی',
        'predators' => 'شکاری حشرات',
        'nitrogen' => 'نائٹروجن',
        'excessive' => 'ضرورت سے زیادہ',
        'infestation' => 'حملہ',
        'severe' => 'شدید',
        'local' => 'مقامی',
        'agricultural' => 'زرعی',
        'department' => 'محکمہ',
        'departments' => 'محکمے',
        'advice' => 'مشورہ',
        'according' => 'مطابق',
        'conditions' => 'حالات',
        'condition' => 'حالت',
        'warm' => 'گرم',
        'humid' => 'مرطوب',
        'moist' => 'نم',
        'moisture' => 'نمی',
        'cool' => 'ٹھنڈا',
        'strong' => 'مضبوط',
        'taste' => 'ذائقہ',
        'color' => 'رنگ',
        'market' => 'بازار',
        'value' => 'قدر',
        'cost' => 'لاگت',
        'price' => 'قیمت',
        'information' => 'معلومات',
        'details' => 'تفصیلات',
        'description' => 'تفصیل',
        'question' => 'سوال',
        'questions' => 'سوالات',
        'answer' => 'جواب',
        'answers' => 'جوابات',
        'post' => 'پوسٹ',
        'posts' => 'پوسٹس',
        'reply' => 'جواب دیں',
        'replies' => 'جوابات',
        'forum' => 'فورم',
        'username' => 'صارف نام',
        'settings' => 'ترتیبات',
        'change' => 'تبدیل کریں',
        'close' => 'بند کریں',
        'open' => 'کھولیں',
        'menu' => 'مینو',
        'notifications' => 'اطلاعات',
        'required' => 'ضروری',
        'optional' => 'اختیاری',
        'invalid' => 'غلط',
        'upload' => 'اپ لوڈ کریں',
        'growsmart' => 'گرو اسمارٹ',
        'pakistan’s' => 'پاکستان کی',
        'pakistan\'s' => 'پاکستان کی',
        'ai' => 'اے آئی',
        'otp' => 'او ٹی پی',
        'google' => 'گوگل',
        'facebook' => 'فیس بک',
        'monday' => 'پیر',
        'tuesday' => 'منگل',
        'wednesday' => 'بدھ',
        'thursday' => 'جمعرات',
        'friday' => 'جمعہ',
        'saturday' => 'ہفتہ',
        'sunday' => 'اتوار',
        'january' => 'جنوری',
        'february' => 'فروری',
        'march' => 'مارچ',
        'april' => 'اپریل',
        'june' => 'جون',
        'july' => 'جولائی',
        'august' => 'اگست',
        'september' => 'ستمبر',
        'october' => 'اکتوبر',
        'november' => 'نومبر',
        'december' => 'دسمبر',
        'kg' => 'کلوگرام',
        'kg.' => 'کلوگرام',
        'kg/acre' => 'کلوگرام فی ایکڑ',
        'acre' => 'ایکڑ',
        'acres' => 'ایکڑ',
        'meter' => 'میٹر',
        'meters' => 'میٹر',
        'cm' => 'سینٹی میٹر',
        'mm' => 'ملی میٹر',
        '°c' => '°سینٹی گریڈ',
        'km/h' => 'کلومیٹر فی گھنٹہ',
        'percent' => 'فیصد',
        '%' => 'فیصد',
        'hours' => 'گھنٹے',
        'hour' => 'گھنٹہ',
        'days' => 'دن',
        'day' => 'دن',
        'weeks' => 'ہفتے',
        'week' => 'ہفتہ',
        'months' => 'ماہ',
        'month' => 'ماہ',
        'years' => 'سال',
        'year' => 'سال',
        'liters' => 'لیٹر',
        'liter' => 'لیٹر',
        'litre' => 'لیٹر',
        'litres' => 'لیٹر',
        'ph' => 'پی ایچ',
        'm' => 'میٹر',
        'Location coordinates are missing.' => 'مقام کے نقاط دستیاب نہیں ہیں۔',
        'OpenWeather API key is missing.' => 'اوپن ویدر کی اے پی آئی کلید موجود نہیں ہے۔',
        'Unable to fetch weather data.' => 'موسم کا ڈیٹا حاصل نہیں کیا جا سکا۔',
        'Something went wrong.' => 'کچھ غلط ہو گیا ہے۔',
        'Avoid spraying pesticides or fertilizers during rainy weather.' => 'بارش کے موسم میں کیڑے مار ادویات یا کھاد کا سپرے کرنے سے گریز کریں۔',
        'Check field drainage and make sure excess water can flow away properly.' => 'کھیت کی نکاسی آب چیک کریں اور یقینی بنائیں کہ اضافی پانی مناسب طریقے سے نکل سکے۔',
        'Reduce irrigation because rainfall is already providing water to the crops.' => 'آبپاشی کم کریں کیونکہ بارش پہلے ہی فصلوں کو پانی فراہم کر رہی ہے۔',
        'Protect crops from heat stress.' => 'فصلوں کو گرمی کے دباؤ سے محفوظ رکھیں۔',
        'Water crops early in the morning or in the evening to reduce water loss.' => 'پانی کے ضیاع کو کم کرنے کے لیے فصلوں کو صبح سویرے یا شام کے وقت پانی دیں۔',
        'Use shade nets where necessary to protect sensitive crops.' => 'حساس فصلوں کی حفاظت کے لیے ضرورت کے مطابق سایہ دار جال استعمال کریں۔',
        'Protect sensitive crops from cold weather.' => 'حساس فصلوں کو سرد موسم سے محفوظ رکھیں۔',
        'Cover sensitive crops if the temperature is expected to fall further.' => 'اگر درجہ حرارت مزید کم ہونے کی توقع ہو تو حساس فصلوں کو ڈھانپ دیں۔',
        'Keep an eye on the weather for possible frost conditions.' => 'ممکنہ کہرے یا پالا پڑنے کی صورت حال کے لیے موسم پر نظر رکھیں۔',
        'Keep good airflow between plants by avoiding overcrowding.' => 'زیادہ گنجان کاشت سے بچ کر پودوں کے درمیان ہوا کی اچھی آمدورفت برقرار رکھیں۔',
        'Check crops regularly for signs of fungal infection and use suitable fungicides when necessary.' => 'فنگسی بیماری کی علامات کے لیے فصلوں کو باقاعدگی سے چیک کریں اور ضرورت کے وقت موزوں فنگس کش ادویات استعمال کریں۔',
        'The air is very dry. Crops may lose water quickly.' => 'ہوا بہت خشک ہے۔ فصلیں تیزی سے پانی کھو سکتی ہیں۔',
        'Increase irrigation when necessary and monitor the soil moisture regularly.' => 'ضرورت کے وقت آبپاشی بڑھائیں اور مٹی کی نمی کی باقاعدگی سے نگرانی کریں۔',
        'Strong winds are expected. Protect young and weak plants.' => 'تیز ہواؤں کی توقع ہے۔ نئی اور کمزور فصلوں کو محفوظ رکھیں۔',
        'Avoid spraying pesticides during strong winds because the spray may drift away.' => 'تیز ہواؤں کے دوران کیڑے مار ادویات کا سپرے کرنے سے بچیں کیونکہ سپرے اڑ سکتا ہے۔',
        'Use plant supports or stakes to protect crops from wind damage.' => 'فصلوں کو ہوا کے نقصان سے بچانے کے لیے پودوں کے سہارے یا کھونٹے استعمال کریں۔',
        'Cloudy weather may reduce sunlight. Monitor crop growth and soil moisture.' => 'ابر آلود موسم سورج کی روشنی کم کر سکتا ہے۔ فصل کی نشوونما اور مٹی کی نمی کی نگرانی کریں۔',
        'Weather conditions look favorable for normal farming activities.' => 'موسمی حالات معمول کی زرعی سرگرمیوں کے لیے سازگار نظر آتے ہیں۔',
        'This can be a good time to carry out routine field work and fertilizer application.' => 'یہ معمول کے کھیت کے کام اور کھاد کے استعمال کے لیے اچھا وقت ہو سکتا ہے۔',
        'Location' => 'مقام',
        'Current Weather' => 'موجودہ موسم',
        'Weather Forecast' => 'موسم کی پیش گوئی',
        'Farming Tips' => 'زرعی مشورے',
        'Wind' => 'ہوا',
        'Pressure' => 'دباؤ',
        'Visibility' => 'حدِ نظر',
        'Feels Like' => 'محسوس ہونے والا درجہ حرارت',
        'Forecast' => 'پیش گوئی',
        'Favorable' => 'سازگار',
    ];

    private function applySemanticSentenceRules(string $text): string
    {
        $exact = [
            'This is a commonly grown crop in rainfed areas where irrigation is limited.' => 'یہ فصل عموماً بارانی علاقوں میں اگائی جاتی ہے جہاں آبپاشی کی سہولت محدود ہوتی ہے۔',
            'Germination Stage: Seeds absorb moisture and sprout. Roots and shoots develop rapidly.' => 'انکرن کا مرحلہ: بیج نمی جذب کرکے پھوٹتے ہیں۔ جڑیں اور نئی شاخیں تیزی سے نشوونما پاتی ہیں۔',
            'Booting Stage: The panicle develops inside the stem.' => 'بالیاں بننے کا مرحلہ: پھولوں کا گچھا تنے کے اندر نشوونما پاتا ہے۔',
            'Fruit Development: Regular watering for better fruit size' => 'پھلوں کی نشوونما: بہتر جسامت کے لیے باقاعدگی سے پانی دیں۔',
            'Deep ploughing for loosening soil' => 'مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔',
            'Large pits prepared for planting grafted plants' => 'پیوند شدہ پودے لگانے کے لیے بڑے گڑھے تیار کیے جاتے ہیں۔',
            'Mixed with soil for fertility' => 'زرخیزی بہتر بنانے کے لیے مٹی میں ملایا جاتا ہے۔',
            'Large pits prepared for plantation' => 'شجرکاری کے لیے بڑے گڑھے تیار کیے جاتے ہیں۔',
            'Added to improve fertility' => 'زرخیزی بہتر بنانے کے لیے شامل کیا جاتا ہے۔',
            'Large pits filled with manure' => 'بڑے گڑھوں میں گوبر کی کھاد بھری جاتی ہے۔',
            'Mixed to improve fertility' => 'زرخیزی بہتر بنانے کے لیے مٹی میں ملایا جاتا ہے۔',
            'Proper system to avoid waterlogging' => 'پانی جمع ہونے سے بچنے کے لیے نکاسی کا مناسب نظام۔',
            'Deep ploughing to loosen soil' => 'مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔',
            'Healthy air-layered plants' => 'صحت مند گٹی سے تیار کیے گئے پودے۔',
            'Disease-free saplings' => 'بیماری سے پاک پودے۔',
            'High-quality nursery plants' => 'اعلیٰ معیار کے نرسری پودے۔',
            'Air-layered plants are preferred for faster fruit production and better quality.' => 'جلد پھل حاصل کرنے اور بہتر معیار کے لیے گٹی سے تیار کیے گئے پودوں کو ترجیح دی جاتی ہے۔',
            'High-yield varieties' => 'زیادہ پیداوار دینے والی اقسام۔',
            'Grafted plants are preferred for early fruiting and better quality yield.' => 'جلد پھل حاصل کرنے اور بہتر معیار کی پیداوار کے لیے پیوند شدہ پودوں کو ترجیح دی جاتی ہے۔',
            'Characteristics of Good Planting Material:' => 'اچھے کاشت کاری مواد کی خصوصیات:',
            'Characteristics of Good Seed:' => 'اچھے بیج کی خصوصیات:',
            'Water Content: High hydration source' => 'پانی کی مقدار: جسم کو پانی فراہم کرنے کا اچھا ذریعہ۔',
            'Water Content: High hydration' => 'پانی کی مقدار: پانی کی زیادہ مقدار۔',
            'Vitamin A: Good for eyesight' => 'وٹامن اے: بینائی کے لیے مفید ہے۔',
            'Potassium: Maintains body balance' => 'پوٹاشیم: جسم میں توازن برقرار رکھنے میں مدد دیتا ہے۔',
            'Potassium: Maintains body fluid balance' => 'پوٹاشیم: جسم میں سیال مادوں کا توازن برقرار رکھنے میں مدد دیتا ہے۔',
            'Antioxidants: Protect cells from damage' => 'اینٹی آکسیڈنٹس: خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔',
            'Critical watering' => 'اس مرحلے پر پانی دینا بہت ضروری ہے۔',
            'Pod Development Stage: Regular irrigation' => 'پھلیوں کی نشوونما کا مرحلہ: باقاعدگی سے آبپاشی کریں۔',
            'Maturity Stage: Reduced watering for drying' => 'پختگی کا مرحلہ: خشک ہونے کے لیے آبپاشی کم کر دیں۔',
            'Germination Stage: Light irrigation' => 'انکرن کا مرحلہ: ہلکی آبپاشی کریں۔',
            'Groundnut needs moderate irrigation but waterlogging must be avoided.' => 'مونگ پھلی کو معتدل آبپاشی درکار ہوتی ہے، لیکن پانی جمع ہونے سے ہر صورت بچنا چاہیے۔',
            'Frost and extremely low temperatures can damage the crop.' => 'پالا اور انتہائی کم درجہ حرارت فصل کو نقصان پہنچا سکتے ہیں۔',
            'Clean and uniform size' => 'صاف اور یکساں جسامت۔',
            'Uniform grain size' => 'دانے یکساں جسامت کے ہوں۔',
            'Uniform seed size' => 'بیج یکساں جسامت کے ہوں۔',
            'Uniform seed size and color' => 'بیج یکساں جسامت اور رنگ کے ہوں۔',
            'Uniform size' => 'یکساں جسامت۔',
            'Uniform size and color' => 'یکساں جسامت اور رنگ۔',
            'Large bulb size' => 'بڑی گانٹھ کی جسامت۔',
            'Uniform grain size' => 'دانے یکساں حجم کے ہوں۔',
            'Uniform seed size' => 'بیج یکساں حجم کے ہوں۔',
            'Clean and uniform size' => 'بیج صاف اور یکساں حجم کے ہوں۔',
            'Uniform seed size and color' => 'بیج یکساں حجم اور رنگ کے ہوں۔',
            'Uniform size' => 'حجم یکساں ہو۔',
            'Uniform size and color' => 'حجم اور رنگ یکساں ہوں۔',
            'Large bulb size' => 'بڑی گانٹھ کے لیے موزوں قسم۔',
            'Fruit Development: Regular watering for better fruit size' => 'پھلوں کی نشوونما: بہتر حجم کے لیے باقاعدگی سے پانی دیں۔',
            'Grain Filling Stage: Improves grain size' => 'دانے بھرنے کا مرحلہ: دانوں کا حجم بہتر ہوتا ہے۔',
            'Seed Formation Stage: Limited irrigation' => 'بیج بننے کا مرحلہ: اس دوران محدود آبپاشی درکار ہوتی ہے۔',
            'Potassium (K): Fruit size, sweetness, and quality' => 'پوٹاشیم: پھلوں کے بہتر حجم، مٹھاس اور معیار کے لیے ضروری ہے۔',
            'Potassium (K): Fruit sweetness, size, and quality' => 'پوٹاشیم: پھلوں کی مٹھاس، بہتر حجم اور معیار کے لیے ضروری ہے۔',
            'Potassium (K): Fruit size, taste, and quality' => 'پوٹاشیم: پھلوں کے بہتر حجم، ذائقے اور معیار کے لیے ضروری ہے۔',
            'Potassium (K): Fruit size, color, and pungency' => 'پوٹاشیم: پھلوں کے حجم، رنگ اور تیزی بہتر بنانے میں مدد دیتا ہے۔',
            'Potassium (K): Fruit size and quality' => 'پوٹاشیم: پھلوں کے حجم اور معیار کو بہتر بناتا ہے۔',
            'Potassium (K): Fruit quality and size' => 'پوٹاشیم: پھلوں کے معیار اور حجم کو بہتر بناتا ہے۔',
            'Potassium (K): Fruit size, quality, and shelf life' => 'پوٹاشیم: پھلوں کے حجم، معیار اور محفوظ رہنے کی مدت کو بہتر بناتا ہے۔',
            'Potassium (K): Fruit size and sweetness' => 'پوٹاشیم: پھلوں کے حجم اور مٹھاس کو بہتر بناتا ہے۔',
            'Potassium (K): Bulb size and quality' => 'پوٹاشیم: گانٹھ کے حجم اور معیار کو بہتر بناتا ہے۔',
            'Potassium (K): Curd quality and size' => 'پوٹاشیم: پھول گوبھی کے پھول کے معیار اور حجم کو بہتر بناتا ہے۔',
            'Panicle Initiation: Grain development' => 'بالیاں بننے کا مرحلہ: دانوں کی نشوونما شروع ہوتی ہے۔',
            'Balanced fertilization improves yield, cob size, and grain quality.' => 'متوازن کھاد کا استعمال پیداوار، بھٹے کے حجم اور دانوں کے معیار کو بہتر بناتا ہے۔',
            'Balanced fertilizers improve yield, fruit size, and plant health.' => 'متوازن کھادیں پیداوار، پھلوں کے حجم اور پودوں کی صحت بہتر کرتی ہیں۔',
            'Balanced fertilizers improve yield, fruit size, quality, and overall orchard production.' => 'متوازن کھادیں پھلوں کے حجم اور معیار کو بہتر بناتی ہیں اور باغ کی مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, quality, and overall orchard production.' => 'متوازن کھادیں پھلوں کے حجم اور معیار کو بہتر بناتی ہیں اور باغ کی مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, taste, and overall crop yield.' => 'متوازن کھادیں پھلوں کا حجم اور ذائقہ بہتر کرتی ہیں اور مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, sweetness, and overall orchard production.' => 'متوازن کھادیں پھلوں کا حجم اور مٹھاس بہتر کرتی ہیں اور باغ کی مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, sweetness, and overall production.' => 'متوازن کھادیں پھلوں کا حجم اور مٹھاس بہتر کرتی ہیں اور مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, color, sweetness, and production.' => 'متوازن کھادیں پھلوں کا حجم، رنگ اور مٹھاس بہتر کرتی ہیں اور پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve root size, quality, and overall yield.' => 'متوازن کھادیں جڑوں کا حجم اور معیار بہتر کرتی ہیں اور مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve bulb size, quality, and crop yield.' => 'متوازن کھادیں گانٹھ کا حجم اور معیار بہتر کرتی ہیں اور فصل کی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizer use improves leaf size, texture, and market value.' => 'متوازن کھاد کا استعمال پتوں کا حجم اور بناوٹ بہتر کرتا ہے اور منڈی میں قدر بڑھاتا ہے۔',
            'Balanced fertilization increases yield and improves tuber size.' => 'متوازن کھاد کا استعمال پیداوار بڑھاتا ہے اور گانٹھوں کا حجم بہتر کرتا ہے۔',
            'Balanced fertilizers help in better root size and sweetness.' => 'متوازن کھادیں جڑوں کی بہتر نشوونما اور مٹھاس میں مدد دیتی ہیں۔',
            'Balanced fertilizer application improves root size, color, and yield.' => 'متوازن کھاد کا استعمال جڑوں کا حجم اور رنگ بہتر کرتا ہے اور پیداوار بڑھاتا ہے۔',
            'Balanced fertilizer application improves root size, taste, and crop production.' => 'متوازن کھاد کا استعمال جڑوں کا حجم اور ذائقہ بہتر کرتا ہے اور فصل کی پیداوار بڑھاتا ہے۔',
            'Beef Tomatoes: Large size variety' => 'بیف ٹماٹر: بڑے پھلوں والی قسم۔',
            'Large Fruit Sweet Lime: Bigger fruit size' => 'بڑے پھل والا میٹھا لیموں: بڑے حجم کے پھل پیدا کرنے والی قسم۔',
            'Seed Development Stage: Limited irrigation required' => 'بیج بننے کا مرحلہ: محدود آبپاشی درکار ہوتی ہے۔',
            'Major Areas: Punjab, KPK, Sindh (limited areas)' => 'اہم علاقے: پنجاب، خیبر پختونخوا اور سندھ کے محدود علاقے۔',
            'Rich organic matter in soil helps improve curd size and overall plant growth.' => 'مٹی میں وافر نامیاتی مادہ پھول گوبھی کے پھول کا حجم بڑھانے اور پودے کی مجموعی نشوونما بہتر کرنے میں مدد دیتا ہے۔',
            'Proper seed rate ensures balanced plant spacing and good bulb size.' => 'بیج کی مناسب مقدار پودوں کے درمیان متوازن فاصلہ برقرار رکھنے اور اچھی جسامت کی گانٹھیں حاصل کرنے میں مدد دیتی ہے۔',
            'At maturity, tubers reach full size and skin becomes firm, which improves storage and transport quality.' => 'پختگی کے وقت گانٹھیں مکمل جسامت اختیار کر لیتی ہیں اور ان کا چھلکا سخت ہو جاتا ہے، جس سے ذخیرہ کرنے اور نقل و حمل کے دوران معیار بہتر رہتا ہے۔',
            'Pearl Millet is usually sown in June to July in Pakistan, especially in rainfed and dry areas where other crops cannot grow easily.' => 'پاکستان میں باجرے کی بوائی عام طور پر جون سے جولائی تک کی جاتی ہے، خصوصاً ان بارانی اور خشک علاقوں میں جہاں دوسری فصلیں آسانی سے نہیں اگ سکتیں۔',
            'Apples are harvested from July to October depending on the variety and climatic conditions. Fruits are ready when they develop proper color, sweetness, and size.' => 'سیب کی کٹائی قسم اور موسمی حالات کے مطابق جولائی سے اکتوبر تک کی جاتی ہے۔ پھل اس وقت تیار ہوتے ہیں جب ان میں مناسب رنگ، مٹھاس اور جسامت پیدا ہو جائے۔',
            'Cabbage is harvested from November to March depending on the variety and climate conditions. The crop is ready when heads become firm, compact, and reach marketable size.' => 'بند گوبھی کی کٹائی قسم اور موسمی حالات کے مطابق نومبر سے مارچ تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب گوبھی کے سر مضبوط، گھنے اور منڈی میں فروخت کے قابل جسامت کے ہو جائیں۔',
            'Radish is harvested from November to January depending on the variety and climate conditions. The crop becomes ready when roots reach proper size and remain tender.' => 'مولی کی کٹائی قسم اور موسمی حالات کے مطابق نومبر سے جنوری تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت اختیار کر لیں اور نرم رہیں۔',
            'Beetroot is harvested from December to February depending on the variety and sowing time. The crop becomes ready when roots reach proper size and deep red color.' => 'چقندر کی کٹائی قسم اور کاشت کے وقت کے مطابق دسمبر سے فروری تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت اور گہرا سرخ رنگ اختیار کر لیں۔',
            'Turnips are harvested from November to February depending on the variety and sowing time. The crop becomes ready when roots reach suitable size and become tender.' => 'شلجم کی کٹائی قسم اور کاشت کے وقت کے مطابق نومبر سے فروری تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت اختیار کرکے نرم ہو جائیں۔',
            'Carrots are harvested from November to February depending on variety and sowing time. They are harvested when roots reach full size and develop good color and sweetness.' => 'گاجروں کی کٹائی قسم اور کاشت کے وقت کے مطابق نومبر سے فروری تک کی جاتی ہے۔ انہیں اس وقت نکالا جاتا ہے جب جڑیں مکمل جسامت اختیار کر لیں اور ان میں اچھا رنگ اور مٹھاس پیدا ہو جائے۔',
            'Eggplant is harvested 60–90 days after transplanting. Once fruits reach proper size, color, and shine, they are picked. Harvesting continues for several weeks as new fruits keep forming.' => 'بینگن کی کٹائی پنیری منتقل کرنے کے 60 سے 90 دن بعد کی جاتی ہے۔ جب پھل مناسب جسامت، رنگ اور چمک حاصل کر لیں تو انہیں توڑ لیا جاتا ہے۔ نئے پھل بنتے رہنے کی وجہ سے کٹائی کئی ہفتوں تک جاری رہتی ہے۔',
            'Fruit Maturity Stage: Improves fruit size and juice quality' => 'پھل پکنے کا مرحلہ: پھلوں کی جسامت اور رس کے معیار کو بہتر بناتا ہے۔',
            'It is widely used in cooking, soups, sweets, and traditional dishes.' => 'یہ کھانا پکانے، سوپ، مٹھائیوں اور روایتی پکوانوں میں بڑے پیمانے پر استعمال ہوتا ہے۔',
            'It is a trailing vine crop that grows well in warm climates and provides good income to farmers.' => 'یہ پھیلنے والی بیل دار فصل ہے جو گرم آب و ہوا میں اچھی نشوونما پاتی ہے اور کسانوں کو اچھی آمدنی فراہم کرتی ہے۔',
            'Pumpkin is highly nutritious and provides vitamins, minerals, and fiber.' => 'کدو غذائیت سے بھرپور ہے اور وٹامنز، معدنیات اور فائبر فراہم کرتا ہے۔',
            'Pumpkin is an important vegetable crop grown in Pakistan and many other countries.' => 'کدو پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            'It is a major source of food for millions of people and is widely used in daily meals.' => 'یہ لاکھوں لوگوں کی خوراک کا ایک اہم ذریعہ ہے اور روزمرہ کے کھانوں میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            'Bitter Gourd is widely used in daily cooking due to its high nutritional value and easy digestibility.' => 'کریلا اپنی زیادہ غذائی قدر اور آسان ہاضمے کی وجہ سے روزمرہ کھانا پکانے میں بڑے پیمانے پر استعمال ہوتا ہے۔',
            'Bitter Gourd is known for its bitter taste and is rich in vitamins and minerals which help control blood sugar and improve digestion.' => 'کریلا اپنے کڑوے ذائقے کے لیے مشہور ہے اور وٹامنز و معدنیات سے بھرپور ہوتا ہے، جو خون میں شکر کو قابو کرنے اور ہاضمہ بہتر بنانے میں مدد دیتے ہیں۔',
            'It is a fast-growing vine crop that provides good income to farmers and is widely used in cooking.' => 'یہ تیزی سے بڑھنے والی بیل دار فصل ہے جو کسانوں کو اچھی آمدنی فراہم کرتی ہے اور کھانا پکانے میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            'Bitter Gourd is a fast-growing vine crop that provides good income to farmers and is widely used in cooking.' => 'کریلا تیزی سے بڑھنے والی بیل دار فصل ہے جو کسانوں کو اچھی آمدنی فراہم کرتی ہے اور کھانا پکانے میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            'Bitter Gourd is usually sown in two main seasons: Spring (February–March) and Summer (June–July).' => 'کریلا عام طور پر دو اہم موسموں میں بویا جاتا ہے: بہار (فروری تا مارچ) اور گرمی (جون تا جولائی)۔',
            'Why Bitter Gourd is Sown in These Seasons:' => 'کریلا ان موسموں میں کیوں بویا جاتا ہے:',
            'It grows best in warm weather and cannot tolerate frost or very cold conditions.' => 'یہ گرم موسم میں بہترین نشوونما پاتا ہے اور پالا یا بہت زیادہ سرد حالات برداشت نہیں کر سکتا۔',
            'Warm temperature helps proper vine growth and flowering.' => 'گرم درجہ حرارت بیل کی مناسب نشوونما اور پھول آنے میں مدد دیتا ہے۔',
            'Bitter Gourd is harvested 55–70 days after sowing depending on variety.' => 'کریلے کی کٹائی قسم کے مطابق بیجائی کے 55 سے 70 دن بعد کی جاتی ہے۔',
            'Why Bitter Gourd is Harvested at This Time:' => 'کریلے کی کٹائی اس وقت کیوں کی جاتی ہے:',
            'Fruits are picked when they are green, soft, and still immature for better taste and market value.' => 'بہتر ذائقے اور منڈی کی قیمت کے لیے پھل اس وقت توڑے جاتے ہیں جب وہ سبز، نرم اور ابھی پوری طرح پکے نہ ہوں۔',
            'Fertile, well-drained soil rich in organic matter supports better vine growth and fruit production.' => 'نامیاتی مادے سے بھرپور، زرخیز اور اچھی نکاسی والی مٹی بیل کی بہتر نشوونما اور پھلوں کی پیداوار میں مدد دیتی ہے۔',
            'Balanced fertilizers improve plant health and yield.' => 'متوازن کھادیں پودوں کی صحت اور پیداوار بہتر کرتی ہیں۔',
            'Seeds absorb water and begin sprouting. Roots and shoots start developing.' => 'بیج پانی جذب کرتے ہیں اور انکرت پھوٹنا شروع ہو جاتا ہے۔ جڑیں اور نئی شاخیں بننا شروع ہو جاتی ہیں۔',
            'Young seedlings grow in the nursery. Green leaves appear and roots become stronger.' => 'نئی پنیری نرسری میں بڑھتی ہے۔ سبز پتے نمودار ہوتے ہیں اور جڑیں مضبوط ہوتی ہیں۔',
            'Seedlings are moved from nursery to the field. Proper spacing helps healthy growth.' => 'پنیری کو نرسری سے کھیت میں منتقل کیا جاتا ہے۔ مناسب فاصلہ صحت مند نشوونما میں مدد دیتا ہے۔',
            'Plants produce side shoots called tillers. More tillers increase grain production.' => 'پودے اطراف میں نئی شاخیں پیدا کرتے ہیں جنہیں شاخیں کہا جاتا ہے۔ زیادہ شاخیں دانوں کی پیداوار بڑھاتی ہیں۔',
            'Flowers open and pollination takes place. Weather conditions greatly affect yield.' => 'پھول کھلتے ہیں اور گردہ افشانی ہوتی ہے۔ موسمی حالات پیداوار پر بہت اثر ڈالتے ہیں۔',
            'Grains fill with starch and nutrients. Water availability is very important.' => 'دانے نشاستے اور غذائی اجزا سے بھر جاتے ہیں۔ پانی کی دستیابی بہت اہم ہے۔',
            'Plants turn golden yellow and grains become hard. Crop becomes ready for harvesting.' => 'پودے سنہری زرد ہو جاتے ہیں اور دانے سخت ہو جاتے ہیں۔ فصل کٹائی کے لیے تیار ہو جاتی ہے۔',
            'Cotton is often called "white gold" because of its high economic value.' => 'کپاس کو اس کی زیادہ معاشی قدر کی وجہ سے اکثر "سفید سونا" کہا جاتا ہے۔',
            'Cotton is mainly grown for its fiber, which is used in the textile industry to produce clothes, fabrics, and other products.' => 'کپاس بنیادی طور پر ریشے کے لیے اگائی جاتی ہے، جسے ٹیکسٹائل صنعت میں کپڑے، منسوجات اور دیگر مصنوعات بنانے کے لیے استعمال کیا جاتا ہے۔',
            'Cool and dry weather during this period helps in better picking and prevents fiber damage and moisture loss.' => 'اس عرصے میں ٹھنڈا اور خشک موسم بہتر چنائی میں مدد دیتا ہے اور ریشے کو نقصان اور نمی کے ضیاع سے بچاتا ہے۔',
            'Cotton grows best in warm climates with long sunny days.' => 'کپاس لمبے دھوپ والے دنوں کے ساتھ گرم آب و ہوا میں بہترین نشوونما پاتی ہے۔',
            'It requires dry weather during maturity for high-quality fiber production.' => 'اعلیٰ معیار کے ریشے کی پیداوار کے لیے پکنے کے دوران خشک موسم درکار ہوتا ہے۔',
            'Loamy soil with good drainage is best for cotton because it supports root growth and prevents waterlogging.' => 'اچھی نکاسی والی دومی مٹی کپاس کے لیے بہترین ہے کیونکہ یہ جڑوں کی نشوونما میں مدد دیتی ہے اور پانی جمع ہونے سے روکتی ہے۔',
            'Correct seed rate ensures proper plant spacing and healthy crop growth.' => 'بیج کی درست مقدار پودوں کے درمیان مناسب فاصلہ اور فصل کی صحت مند نشوونما کو یقینی بناتی ہے۔',
            'Cotton requires moderate irrigation and is sensitive to both drought and waterlogging.' => 'کپاس کو معتدل آبپاشی درکار ہوتی ہے اور یہ خشک سالی اور پانی کے جمع ہونے دونوں کے لیے حساس ہے۔',
            'Balanced fertilization increases yield and improves cotton fiber strength.' => 'متوازن کھاد کا استعمال پیداوار بڑھاتا ہے اور کپاس کے ریشے کی مضبوطی بہتر کرتا ہے۔',
            'It provides employment and income to farmers and contributes greatly to the economy through exports.' => 'یہ کسانوں کو روزگار اور آمدنی فراہم کرتی ہے اور برآمدات کے ذریعے معیشت میں نمایاں کردار ادا کرتی ہے۔',
            'Rice is one of the most important food crops in Pakistan and many other countries.' => 'چاول پاکستان اور دنیا کے بہت سے ممالک کی اہم ترین غذائی فصلوں میں سے ایک ہے۔',
            'Cotton is one of the most important cash crops in Pakistan and the world.' => 'کپاس پاکستان اور دنیا کی اہم ترین نقد آور فصلوں میں سے ایک ہے۔',
            'Drought-resistant crop grows well in dry areas.' => 'خشک سالی برداشت کرنے والی فصلیں خشک علاقوں میں اچھی نشوونما پاتی ہیں۔',
            'Drought-resistant crops grow well in dry areas.' => 'خشک سالی برداشت کرنے والی فصلیں خشک علاقوں میں اچھی نشوونما پاتی ہیں۔',
            'It is a drought-tolerant crop that grows well in high temperatures and low rainfall conditions.' => 'یہ خشک سالی برداشت کرنے والی فصل ہے جو زیادہ درجہ حرارت اور کم بارش والے حالات میں اچھی نشوونما پاتی ہے۔',
            'It can grow in low-fertility soils but performs better in well-drained soils.' => 'یہ کم زرخیز مٹی میں بھی اگ سکتی ہے، لیکن اچھی نکاسی والی مٹی میں بہتر نشوونما پاتی ہے۔',
            'Bottle gourd is a fast-growing vine crop and plays an important role in vegetable farming and household nutrition.' => 'لوکی تیزی سے بڑھنے والی بیل دار فصل ہے اور سبزیوں کی کاشت اور گھریلو غذائیت میں اہم کردار ادا کرتی ہے۔',
            'Early harvesting ensures soft texture, better taste, and higher market value.' => 'جلد کٹائی سے نرم ساخت، بہتر ذائقہ اور زیادہ منڈی قیمت حاصل ہوتی ہے۔',
            'Early harvesting ensures soft texture, better taste, and higher market value.' => 'جلد کٹائی سے نرم ساخت، بہتر ذائقہ اور زیادہ منڈی قیمت حاصل ہوتی ہے۔',
            'Proper seed rate ensures healthy plant spacing and good vine development.' => 'بیج کی مناسب مقدار پودوں کے درمیان صحت مند فاصلہ اور بیل کی اچھی نشوونما کو یقینی بناتی ہے۔',
            'Proper seed rate ensures healthy plant spacing and good crop growth.' => 'بیج کی مناسب مقدار پودوں کے درمیان صحت مند فاصلہ اور فصل کی اچھی نشوونما کو یقینی بناتی ہے۔',
            'Balanced fertilizers improve yield, fruit size, and plant health.' => 'متوازن کھادیں پیداوار، پھلوں کے سائز اور پودوں کی صحت بہتر کرتی ہیں۔',
            'Balanced fertilization increases yield and improves cotton fiber strength.' => 'متوازن کھاد کا استعمال پیداوار بڑھاتا ہے اور کپاس کے ریشے کی مضبوطی بہتر کرتا ہے۔',
            'Cotton is a major cash crop that supports Pakistan’s textile industry, which is the backbone of the economy.' => 'کپاس ایک اہم نقد آور فصل ہے جو پاکستان کی ٹیکسٹائل صنعت کو سہارا دیتی ہے، اور یہ صنعت معیشت کی ریڑھ کی ہڈی ہے۔',
            'Cotton and its by-products are widely used in clothing, oil production, and animal feed.' => 'کپاس اور اس کی ضمنی مصنوعات کپڑے، تیل کی پیداوار اور جانوروں کی خوراک میں بڑے پیمانے پر استعمال ہوتی ہیں۔',
            'Pearl Millet is an important crop for dry regions as it provides food and fodder under harsh climatic conditions.' => 'باجرا خشک علاقوں کے لیے ایک اہم فصل ہے کیونکہ یہ سخت موسمی حالات میں خوراک اور چارہ فراہم کرتا ہے۔',
            'Complete guide to drought resistant crops' => 'خشک سالی برداشت کرنے والی فصلوں کے لیے مکمل رہنمائی',
            'Smart Agriculture Platform' => 'ذہین زرعی پلیٹ فارم',
            'Grow Smarter. Farm Better.' => 'زیادہ سمجھداری سے اگائیں، بہتر کاشت کاری کریں۔',
            'GrowSmart brings essential farming knowledge, crop information, weather insights, pest management and intelligent soil analysis together in one simple platform.' => 'گرو اسمارٹ ضروری زرعی علم، فصلوں کی معلومات، موسم کی معلومات، کیڑوں کے انتظام اور مٹی کے ذہین تجزیے کو ایک آسان پلیٹ فارم پر یکجا کرتا ہے۔',
            'GrowSmart brings essential farming knowledge, crop information, weather insights, pest management and intelligent soil analysis together in one simple platform' => 'گرو اسمارٹ ضروری زرعی علم، فصلوں کی معلومات، موسم کی معلومات، کیڑوں کے انتظام اور مٹی کے ذہین تجزیے کو ایک آسان پلیٹ فارم پر یکجا کرتا ہے۔',
            'Useful tools to help you make better farming decisions.' => 'بہتر زرعی فیصلے کرنے میں مدد دینے والے مفید اوزار۔',
            'Explore commonly grown crops and learn more about them.' => 'عام طور پر اگائی جانے والی فصلیں دیکھیں اور ان کے بارے میں مزید معلومات حاصل کریں۔',
            'Ask questions, share farming problems and get help from agriculture experts.' => 'سوالات پوچھیں، کاشت کاری کے مسائل بیان کریں اور زرعی ماہرین سے مدد حاصل کریں۔',
            'Find information about common pests and their management.' => 'عام کیڑوں اور ان کے تدارک کے بارے میں معلومات حاصل کریں۔',
            'Upload a soil image and get useful information and suggestions about your soil.' => 'مٹی کی تصویر اپ لوڈ کریں اور اپنی مٹی کے بارے میں مفید معلومات اور تجاویز حاصل کریں۔',
        ];
        foreach ($exact as $en => $ur) {
            if (strcasecmp(trim($text), $en) === 0) return $ur;
        }

        $generic = [
            '/^(.+?) is one of the most important (.+?) in (.+?) and many other countries\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[3]) . ' اور بہت سے دوسرے ممالک کی اہم ترین ' . $this->translateSimplePhrase($m[2]) . ' میں سے ایک ہے۔';
            },
            '/^(.+?) is one of the most important (.+?) in (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[3]) . ' کی اہم ترین ' . $this->translateSimplePhrase($m[2]) . ' میں سے ایک ہے۔';
            },
            '/^(.+?) is an important (.+?) grown in (.+?) and many other countries\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[3]) . ' اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم ' . $this->translateSimplePhrase($m[2]) . ' ہے۔';
            },
            '/^(.+?) is an important (.+?) crop grown in (.+?) and many other countries\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[3]) . ' اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم ' . $this->translateSimplePhrase($m[2]) . ' فصل ہے۔';
            },
            '/^(.+?) is an important (.+?) grown in (.+?),? including (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[3]) . ' سمیت مختلف علاقوں میں اگائی جانے والی ایک اہم ' . $this->translateSimplePhrase($m[2]) . ' ہے۔';
            },
            '/^(.+?) is an important (.+?) crop that provides (.+?) to farmers\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ایک اہم ' . $this->translateSimplePhrase($m[2]) . ' فصل ہے جو کسانوں کو ' . $this->translateSimplePhrase($m[3]) . ' فراہم کرتی ہے۔';
            },
            '/^(.+?) is a major source of (.+?) for (.+?) and is widely used in (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[3]) . ' کے لیے ' . $this->translateSimplePhrase($m[2]) . ' کا ایک اہم ذریعہ ہے اور اسے ' . $this->translateSimplePhrase($m[4]) . ' میں بڑے پیمانے پر استعمال کیا جاتا ہے۔';
            },
            '/^(.+?) is widely used in (.+?) due to (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' کو ' . $this->translateSimplePhrase($m[2]) . ' میں ' . $this->translateSimplePhrase($m[3]) . ' کی وجہ سے بڑے پیمانے پر استعمال کیا جاتا ہے۔';
            },
            '/^(.+?) is widely used in (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' کو ' . $this->translateSimplePhrase($m[2]) . ' میں بڑے پیمانے پر استعمال کیا جاتا ہے۔';
            },
            '/^(.+?) plays (?:a|an) (important|key|significant|vital) role in (.+?) because it (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[3]) . ' میں ' . $this->translateSimplePhrase($m[2]) . ' کردار ادا کرتا ہے کیونکہ یہ ' . $this->translateSimplePhrase($m[4]) . '۔';
            },
            '/^(.+?) plays (?:a|an) (important|key|significant|vital) role in (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[3]) . ' میں ' . $this->translateSimplePhrase($m[2]) . ' کردار ادا کرتا ہے۔';
            },
            '/^(.+?) requires (.+?) and (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' کو ' . $this->translateSimplePhrase($m[2]) . ' اور ' . $this->translateSimplePhrase($m[3]) . ' کی ضرورت ہوتی ہے۔';
            },
            '/^(.+?) requires (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' کو ' . $this->translateSimplePhrase($m[2]) . ' کی ضرورت ہوتی ہے۔';
            },
            '/^(.+?) grows best in (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[2]) . ' میں بہترین نشوونما پاتا ہے۔';
            },
            '/^(.+?) grows well in (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' ' . $this->translateSimplePhrase($m[2]) . ' میں اچھی نشوونما پاتا ہے۔';
            },
            '/^(.+?) provides (.+?) to farmers\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' کسانوں کو ' . $this->translateSimplePhrase($m[2]) . ' فراہم کرتا ہے۔';
            },
            '/^It is a trailing vine crop that grows well in warm climates and provides good income to farmers\.?$/iu' => function ($m) {
                return 'یہ پھیلنے والی بیل دار فصل ہے جو گرم آب و ہوا میں اچھی نشوونما پاتی ہے اور کسانوں کو اچھی آمدنی فراہم کرتی ہے۔';
            },
            '/^It is widely used in cooking, soups, sweets, and traditional dishes\.?$/iu' => function ($m) {
                return 'یہ کھانا پکانے، سوپ، مٹھائیوں اور روایتی پکوانوں میں بڑے پیمانے پر استعمال ہوتا ہے۔';
            },
            '/^(.+?) is highly nutritious and provides (.+?)\.?$/iu' => function ($m) {
                return $this->translateSimplePhrase($m[1]) . ' غذائیت سے بھرپور ہے اور ' . $this->translateSimplePhrase($m[2]) . ' فراہم کرتا ہے۔';
            },
            '/^It is widely used in (.+?)\.?$/iu' => function ($m) {
                return 'یہ ' . $this->translateSimplePhrase($m[1]) . ' میں بڑے پیمانے پر استعمال ہوتا ہے۔';
            },
            '/^It is (?:a|an) (.+?) that (.+?)\.?$/iu' => function ($m) {
                return 'یہ ایک ' . $this->translateSimplePhrase($m[1]) . ' ہے جو ' . $this->translateSimplePhrase($m[2]) . '۔';
            },
            '/^It is (?:a|an) (.+?) crop that (.+?)\.?$/iu' => function ($m) {
                return 'یہ ایک ' . $this->translateSimplePhrase($m[1]) . ' فصل ہے جو ' . $this->translateSimplePhrase($m[2]) . '۔';
            },
            '/^In Pakistan, (.+?) are commonly grown in (.+?) and are (.+?)\.?$/iu' => function ($m) {
                return 'پاکستان میں ' . $this->translateSimplePhrase($m[1]) . ' عام طور پر ' . $this->translateSimplePhrase($m[2]) . ' میں اگائی جاتی ہیں اور ' . $this->translateSimplePhrase($m[3]) . '۔';
            },
        ];
        foreach ($generic as $pattern => $handler) {
            if (preg_match($pattern, $text, $m)) return $handler($m);
        }

        $rules = [
            '/^(.+?) is an important leafy vegetable crop grown in Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم پتوں والی سبزی کی فصل ہے۔',
            '/^(.+?) is an important root vegetable crop grown in Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم جڑ والی سبزی کی فصل ہے۔',
            '/^(.+?) is an important vegetable crop grown in (.+?) and many other countries\.?$/iu' => '$1 $2 اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            '/^(.+?) is highly nutritious and provides vitamins, minerals, and fiber\.?$/iu' => '$1 غذائیت سے بھرپور ہے اور وٹامنز، معدنیات اور فائبر فراہم کرتا ہے۔',
            '/^It is widely used in cooking, soups, sweets, and traditional dishes\.?$/iu' => 'یہ کھانا پکانے، سوپ، مٹھائیوں اور روایتی پکوانوں میں بڑے پیمانے پر استعمال ہوتا ہے۔',
            '/^It is a trailing vine crop that grows well in warm climates and provides good income to farmers\.?$/iu' => 'یہ پھیلنے والی بیل دار فصل ہے جو گرم آب و ہوا میں اچھی نشوونما پاتی ہے اور کسانوں کو اچھی آمدنی فراہم کرتی ہے۔',
            '/^It is widely used in daily cooking due to its high nutritional value and easy digestibility\.?$/iu' => 'یہ اپنی زیادہ غذائی قدر اور آسان ہاضمے کی وجہ سے روزمرہ کھانا پکانے میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            '/^(.+?), commonly known as (.+?), is an important vegetable crop grown in (.+?)\.?$/iu' => '$1، جسے عام طور پر $2 کہا جاتا ہے، $3 میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            '/^(.+?) is a fast-growing vegetable crop that provides good income to farmers and is highly demanded in local markets\.?$/iu' => '$1 تیزی سے بڑھنے والی سبزی کی فصل ہے جو کسانوں کو اچھی آمدنی فراہم کرتی ہے اور مقامی منڈیوں میں اس کی بہت زیادہ طلب ہے۔',
            '/^(.+?) is a fast-growing vine crop that provides quick income to farmers and is rich in vitamins and minerals\.?$/iu' => '$1 تیزی سے بڑھنے والی بیل دار فصل ہے جو کسانوں کو جلد آمدنی فراہم کرتی ہے اور وٹامنز اور معدنیات سے بھرپور ہے۔',
            '/^(.+?) provides vitamins, minerals, and fiber\.?$/iu' => '$1 وٹامنز، معدنیات اور فائبر فراہم کرتا ہے۔',
            '/^(.+?) grows well in warm climates and provides good income to farmers\.?$/iu' => '$1 گرم آب و ہوا میں اچھی نشوونما پاتا ہے اور کسانوں کو اچھی آمدنی فراہم کرتا ہے۔',
            '/^(.+?) is an important oilseed crop grown in Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم تیل دار بیج کی فصل ہے۔',
            '/^(.+?) is one of the most important food crops in Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک کی اہم ترین غذائی فصلوں میں سے ایک ہے۔',
            '/^(.+?) is one of the most important fruit crops in Pakistan and is known as the [“\"]([^”\"]+)[”\"]\.?$/iu' => '$1 پاکستان کی اہم ترین پھلوں کی فصلوں میں سے ایک ہے اور اسے "$2" کہا جاتا ہے۔',
            '/^(.+?) is widely used in (.+?)\.$/iu' => '$1 کو $2 میں بڑے پیمانے پر استعمال کیا جاتا ہے۔',
            '/^(.+?) farming is important because it provides income to farmers and supplies fresh vegetables to local markets\.?$/iu' => '$1 کی کاشت اہم ہے کیونکہ اس سے کسانوں کو آمدنی حاصل ہوتی ہے اور مقامی منڈیوں کو تازہ سبزیاں فراہم ہوتی ہیں۔',
            '/^(.+?) farming provides good income to farmers due to its high market demand\.?$/iu' => '$1 کی کاشت زیادہ منڈی طلب کی وجہ سے کسانوں کو اچھی آمدنی فراہم کرتی ہے۔',
            '/^(.+?) is an important cash crop in Pakistan and many tropical countries\.?$/iu' => '$1 پاکستان اور بہت سے گرم علاقوں کے ممالک میں ایک اہم نقد آور فصل ہے۔',
            '/^(.+?) is one of the most important cereal crops in Pakistan and around the world\.?$/iu' => '$1 پاکستان اور دنیا بھر کی اہم ترین اناج کی فصلوں میں سے ایک ہے۔',
            '/^(.+?) is an important cereal and fodder crop grown in (.+?) of Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک کے $2 میں اگائی جانے والی ایک اہم اناج اور چارہ فصل ہے۔',
            '/^(.+?) is an important cereal and fodder crop grown in (.+?) regions of Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک کے $2 علاقوں میں اگائی جانے والی ایک اہم اناج اور چارہ فصل ہے۔',
            '/^(.+?) is mainly grown for sugar production, but it is also used to produce (.+?), (.+?), and (.+?)\.?$/iu' => '$1 بنیادی طور پر چینی کی پیداوار کے لیے اگایا جاتا ہے، لیکن اس سے $2، $3 اور $4 بھی تیار کیے جاتے ہیں۔',
            '/^(.+?) is mainly cultivated for its seeds, which are used to extract edible oil\.?$/iu' => '$1 بنیادی طور پر اپنے بیجوں کے لیے کاشت کیا جاتا ہے، جن سے خوردنی تیل نکالا جاتا ہے۔',
            '/^(.+?) is widely used in (.+?), (.+?), and (.+?)\.?$/iu' => '$1 کو $2، $3 اور $4 میں بڑے پیمانے پر استعمال کیا جاتا ہے۔',
            '/^(.+?) is widely consumed as (.+?) and is rich in (.+?), making it an essential part of daily diet\.?$/iu' => '$1 کو $2 کے طور پر بڑے پیمانے پر استعمال کیا جاتا ہے اور یہ $3 سے بھرپور ہے، اس لیے روزمرہ خوراک کا اہم حصہ ہے۔',
            '/^(.+?) improves soil fertility by fixing nitrogen and is also beneficial for crop rotation systems in agriculture\.?$/iu' => '$1 نائٹروجن کے اخراج کے ذریعے مٹی کی زرخیزی بہتر کرتا ہے اور زرعی فصلوں کی گردش کے نظام کے لیے بھی مفید ہے۔',
            '/^(.+?) is highly drought-resistant and plays a vital role in ensuring food and fodder security in dry areas\.?$/iu' => '$1 خشک سالی کے خلاف بہت زیادہ مزاحمت رکھتا ہے اور خشک علاقوں میں خوراک اور چارے کے تحفظ میں اہم کردار ادا کرتا ہے۔',
            '/^It is commonly known as "(.+?)" in South Asia\.?$/iu' => 'جنوبی ایشیا میں اسے عام طور پر "$1" کہا جاتا ہے۔',
            '/^It is known for its (.+?) and (.+?)\.?$/iu' => 'یہ اپنی $1 اور $2 کے لیے مشہور ہے۔',
            '/^It is a popular (.+?) crop known for its (.+?)\.?$/iu' => 'یہ ایک مقبول $1 فصل ہے جو اپنی $2 کے لیے مشہور ہے۔',
            '/^(.+?) farming plays an important role in the agriculture economy because it provides income to farmers and supports export industries\.?$/iu' => '$1 کی کاشت زرعی معیشت میں اہم کردار ادا کرتی ہے کیونکہ اس سے کسانوں کو آمدنی حاصل ہوتی ہے اور برآمدی صنعتوں کو سہارا ملتا ہے۔',
            '/^(.+?) is mainly grown in cool weather conditions and is considered a popular winter vegetable crop\.?$/iu' => '$1 بنیادی طور پر ٹھنڈے موسم میں اگائی جاتی ہے اور اسے موسم سرما کی ایک مقبول سبزی کی فصل سمجھا جاتا ہے۔',
            '/^(.+?) is mainly grown during the winter season and is valued for its nutritional and medicinal benefits\.?$/iu' => '$1 بنیادی طور پر موسم سرما میں اگائی جاتی ہے اور اپنی غذائی اور طبی افادیت کی وجہ سے اہم سمجھی جاتی ہے۔',
            '/^(.+?) grows best in cool climates with fertile soil and proper irrigation\.?$/iu' => '$1 زرخیز مٹی اور مناسب آبپاشی کے ساتھ ٹھنڈی آب و ہوا میں بہترین نشوونما پاتی ہے۔',
            '/^(.+?) grow well in cool to moderate climates with proper irrigation and fertile soil\.?$/iu' => '$1 مناسب آبپاشی اور زرخیز مٹی کے ساتھ ٹھنڈی سے معتدل آب و ہوا میں اچھی نشوونما پاتے ہیں۔',
            '/^(.+?) is usually sown from (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 عام طور پر $2 کے دوران بویا جاتا ہے۔',
            '/^(.+?) is usually sown in (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 عام طور پر $2 میں بویا جاتا ہے۔',
            '/^(.+?) is harvested from (.+?) depending on the variety and climate conditions\.?$/iu' => '$1 کی کٹائی قسم اور موسمی حالات کے مطابق $2 کے دوران کی جاتی ہے۔',
            '/^Farmers mostly start nursery preparation in (.+?) and transplant seedlings in (.+?)\.?$/iu' => 'کسان عموماً $1 میں پنیری کی تیاری شروع کرتے ہیں اور $2 میں پودے کھیت میں منتقل کرتے ہیں۔',
            '/^(.+?) requires warm weather and standing water during most growth stages\.?$/iu' => '$1 کو نشوونما کے زیادہ تر مراحل میں گرم موسم اور کھڑے پانی کی ضرورت ہوتی ہے۔',
            '/^(.+?) requires standing water in most stages and usually needs continuous irrigation\.?$/iu' => '$1 کو زیادہ تر مراحل میں کھڑا پانی درکار ہوتا ہے اور عموماً مسلسل آبپاشی کی ضرورت ہوتی ہے۔',
            '/^Good land preparation helps better root growth and water management\.?$/iu' => 'زمین کی اچھی تیاری جڑوں کی بہتر نشوونما اور پانی کے مؤثر انتظام میں مدد دیتی ہے۔',
            '/^Good quality seed produces strong seedlings and improves crop yield\.?$/iu' => 'اچھے معیار کا بیج مضبوط پنیری پیدا کرتا ہے اور فصل کی پیداوار بہتر بناتا ہے۔',
            '/^Balanced fertilizers improve plant growth, grain quality, and crop production\.?$/iu' => 'متوازن کھادیں پودوں کی نشوونما، دانوں کے معیار اور فصل کی پیداوار بہتر کرتی ہیں۔',
            '/^White powder-like coating on leaves, leaves dry and fall early\.?$/iu' => 'پتوں پر سفید پاؤڈر جیسی تہہ بن جاتی ہے، پتے خشک ہو کر جلد گر جاتے ہیں۔',
            '/^Leaves turn yellow, sticky coating appears, and plant weakens\.?$/iu' => 'پتے پیلے ہو جاتے ہیں، چپچپی تہہ ظاہر ہوتی ہے اور پودا کمزور ہو جاتا ہے۔',
            '/^Plants turn yellow, wilt, and slowly die\.?$/iu' => 'پودے پیلے پڑ جاتے ہیں، مرجھاتے ہیں اور آہستہ آہستہ مر جاتے ہیں۔',
            '/^Leaves curl, turn yellow, and plant growth becomes weak\.?$/iu' => 'پتے مڑ جاتے ہیں، پیلے ہو جاتے ہیں اور پودے کی نشوونما کمزور ہو جاتی ہے۔',
            '/^Leaves curl, turn yellow, and plant growth becomes slow\.?$/iu' => 'پتے مڑ جاتے ہیں، پیلے ہو جاتے ہیں اور پودے کی نشوونما سست ہو جاتی ہے۔',
            '/^Leaves turn yellow, plants wilt, and eventually die\.?$/iu' => 'پتے پیلے ہو جاتے ہیں، پودے مرجھا جاتے ہیں اور آخرکار مر جاتے ہیں۔',
            '/^Leaves turn yellow, sticky honeydew appears, plant becomes weak\.?$/iu' => 'پتے پیلے ہو جاتے ہیں، چپچپا شہد نما رس ظاہر ہوتا ہے اور پودا کمزور ہو جاتا ہے۔',
            '/^Small insects suck sap from leaves and tender shoots, especially in cool weather\.?$/iu' => 'چھوٹے حشرات پتوں اور نرم شاخوں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Small insects attach to stems and leaves and suck plant sap\.?$/iu' => 'چھوٹے حشرات تنوں اور پتوں سے چمٹ کر پودے کا رس چوستے ہیں۔',
            '/^Larvae live in soil and cut young plants at the base during night\.?$/iu' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت ننھے پودوں کو جڑ کے قریب سے کاٹ دیتی ہیں۔',
            '/^Larvae live in soil and cut young plants at ground level\.?$/iu' => 'سنڈیاں مٹی میں رہتی ہیں اور ننھے پودوں کو زمین کی سطح کے قریب سے کاٹ دیتی ہیں۔',
            '/^Improve soil drainage and avoid overwatering\.?$/iu' => 'مٹی کی نکاسی بہتر کریں اور ضرورت سے زیادہ پانی دینے سے گریز کریں۔',
            '/^Use well-drained soil and resistant varieties\.?$/iu' => 'اچھی نکاسی والی مٹی اور مزاحم اقسام استعمال کریں۔',
            '/^Remove infected leaves and avoid overhead watering\.?$/iu' => 'متاثرہ پتے نکال دیں اور اوپر سے پانی دینے سے گریز کریں۔',
            '/^Use clean seeds and remove infected plants\.?$/iu' => 'صاف اور صحت مند بیج استعمال کریں اور متاثرہ پودے نکال دیں۔',
            '/^Large holes in leaves and uneven plant growth\.?$/iu' => 'پتوں میں بڑے سوراخ ہو جاتے ہیں اور پودوں کی نشوونما غیر ہموار ہو جاتی ہے۔',
            '/^Yellow patches on leaves, leaves dry and fall early\.?$/iu' => 'پتوں پر زرد دھبے بن جاتے ہیں اور پتے خشک ہو کر جلد گر جاتے ہیں۔',
            '/^Yellow V-shaped patches on leaves, leaves dry and drop\.?$/iu' => 'پتوں پر زرد وی نما دھبے بن جاتے ہیں اور پتے خشک ہو کر گر جاتے ہیں۔',
            '/^Yellow V-shaped patches on leaves, leaves dry and drop early\.?$/iu' => 'پتوں پر زرد وی نما دھبے بن جاتے ہیں اور پتے خشک ہو کر جلد گر جاتے ہیں۔',
            '/^Roots become swollen, plants wilt even after watering\.?$/iu' => 'جڑیں پھول جاتی ہیں اور پانی دینے کے باوجود پودے مرجھا جاتے ہیں۔',
            '/^Small holes in leaves, leaves look skeleton-like, poor head formation\.?$/iu' => 'پتوں میں چھوٹے سوراخ ہو جاتے ہیں، پتے ڈھانچے جیسے دکھائی دیتے ہیں اور گوبھی کے سر کی تشکیل کمزور رہتی ہے۔',
            '/^Small holes in leaves, leaves look full of tiny dots, slow plant growth\.?$/iu' => 'پتوں میں چھوٹے سوراخ ہو جاتے ہیں، پتے ننھے نقطوں سے بھرے دکھائی دیتے ہیں اور پودے کی نشوونما سست ہو جاتی ہے۔',
            '/^Seedlings suddenly fall or are cut near soil level\.?$/iu' => 'ننھے پودے اچانک گر جاتے ہیں یا مٹی کی سطح کے قریب سے کٹ جاتے ہیں۔',
            '/^Roots become damaged, tunnels appear, and plants wilt\.?$/iu' => 'جڑوں کو نقصان پہنچتا ہے، سرنگیں ظاہر ہوتی ہیں اور پودے مرجھا جاتے ہیں۔',
            '/^White powder on leaves, leaves become weak and dry\.?$/iu' => 'پتوں پر سفید پاؤڈر بن جاتا ہے اور پتے کمزور اور خشک ہو جاتے ہیں۔',
            '/^Roots become soft, dark, and start rotting\.?$/iu' => 'جڑیں نرم اور سیاہ ہو جاتی ہیں اور سڑنا شروع ہو جاتی ہیں۔',
            '/^Avoid overwatering and ensure proper drainage in nursery\.?$/iu' => 'نرسری میں ضرورت سے زیادہ پانی دینے سے گریز کریں اور مناسب نکاسی آب یقینی بنائیں۔',
            '/^Remove infected leaves and keep field clean\.?$/iu' => 'متاثرہ پتے نکال دیں اور کھیت صاف رکھیں۔',
            '/^Regular field checking and early removal of affected plants\.?$/iu' => 'کھیت کی باقاعدگی سے جانچ کریں اور متاثرہ پودوں کو ابتدائی مرحلے میں نکال دیں۔',
            '/^Keep field clean and avoid overcrowding\.?$/iu' => 'کھیت صاف رکھیں اور بہت زیادہ گنجان کاشت سے گریز کریں۔',
            '/^Use resistant varieties and avoid dense planting\.?$/iu' => 'مزاحم اقسام استعمال کریں اور بہت زیادہ گنجان کاشت سے گریز کریں۔',
            '/^Remove infected leaves and maintain field hygiene\.?$/iu' => 'متاثرہ پتے نکال دیں اور کھیت کی صفائی برقرار رکھیں۔',
            '/^Avoid overhead watering and remove infected leaves\.?$/iu' => 'اوپر سے پانی دینے سے گریز کریں اور متاثرہ پتے نکال دیں۔',
            '/^Keep field clean and avoid water stress\.?$/iu' => 'کھیت صاف رکھیں اور پودوں کو پانی کی کمی کے دباؤ سے بچائیں۔',
            '/^Clean field before sowing and remove crop residues\.?$/iu' => 'کاشت سے پہلے کھیت صاف کریں اور فصل کی باقیات نکال دیں۔',
            '/^Avoid excess watering and ensure proper spacing\.?$/iu' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور مناسب فاصلہ یقینی بنائیں۔',
            '/^Avoid overwatering and use clean seed\.?$/iu' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور صاف بیج استعمال کریں۔',
            '/^Proper storage and cover seed potatoes with soil\.?$/iu' => 'آلوؤں کو مناسب طریقے سے ذخیرہ کریں اور بیج والے آلوؤں کو مٹی سے ڈھانپ دیں۔',
            '/^Use resistant varieties and avoid overwatering\.?$/iu' => 'مزاحم اقسام استعمال کریں اور ضرورت سے زیادہ پانی دینے سے گریز کریں۔',
            '/^Remove infected leaves and rotate crops\.?$/iu' => 'متاثرہ پتے نکال دیں اور فصلوں میں ردوبدل کریں۔',
            '/^Use clean seed potatoes and well-drained soil\.?$/iu' => 'صاف بیج والے آلو اور اچھی نکاسی والی مٹی استعمال کریں۔',
            '/^Maintain soil moisture and avoid high pH soil\.?$/iu' => 'مٹی کی نمی برقرار رکھیں اور زیادہ پی ایچ والی مٹی سے گریز کریں۔',
            '/^Control aphids and use virus-free seed potatoes\.?$/iu' => 'افڈز کا تدارک کریں اور وائرس سے پاک بیج والے آلو استعمال کریں۔',
            '/^Clean field before sowing and remove crop debris\.?$/iu' => 'کاشت سے پہلے کھیت صاف کریں اور فصل کی باقیات نکال دیں۔',
            '/^Use sticky traps and maintain field cleanliness\.?$/iu' => 'چپکنے والے پھندے استعمال کریں اور کھیت کی صفائی برقرار رکھیں۔',
            '/^Avoid overhead watering and ensure proper spacing\.?$/iu' => 'اوپر سے پانی دینے سے گریز کریں اور مناسب فاصلہ یقینی بنائیں۔',
            '/^Avoid overcrowding and improve air flow\.?$/iu' => 'بہت زیادہ گنجان کاشت سے گریز کریں اور ہوا کی آمدورفت بہتر بنائیں۔',
            '/^Improve drainage and avoid excess water\.?$/iu' => 'نکاسی آب بہتر کریں اور اضافی پانی سے گریز کریں۔',
            '/^Yellow V-shaped patches on leaves, leaves dry and fall\.?$/iu' => 'پتوں پر زرد وی نما دھبے بن جاتے ہیں اور پتے خشک ہو کر گر جاتے ہیں۔',
            '/^Remove weeds, avoid excess nitrogen, and encourage natural enemies like ladybirds\.?$/iu' => 'جڑی بوٹیاں نکال دیں، ضرورت سے زیادہ نائٹروجن سے گریز کریں اور لیڈی برڈ جیسے قدرتی دشمن حشرات کی حوصلہ افزائی کریں۔',
            '/^Improve drainage and avoid overwatering\.?$/iu' => 'نکاسی آب بہتر کریں اور ضرورت سے زیادہ پانی دینے سے گریز کریں۔',
            '/^Regular field monitoring and remove damaged pods\.?$/iu' => 'کھیت کی باقاعدگی سے نگرانی کریں اور متاثرہ پھلیاں نکال دیں۔',
            '/^Avoid overwatering and ensure proper spacing\.?$/iu' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور مناسب فاصلہ یقینی بنائیں۔',
            '/^Use clean seeds and remove infected plant debris\.?$/iu' => 'صاف بیج استعمال کریں اور متاثرہ پودوں کی باقیات نکال دیں۔',
            '/^Use crop rotation and cover soil around plants\.?$/iu' => 'فصلوں میں ردوبدل کریں اور پودوں کے اردگرد مٹی ڈھانپ دیں۔',
            '/^Avoid injury to roots and store in dry conditions\.?$/iu' => 'جڑوں کو نقصان پہنچانے سے گریز کریں اور خشک حالات میں ذخیرہ کریں۔',
            '/^Keep field moist, remove weeds, and avoid water stress\.?$/iu' => 'کھیت میں مناسب نمی برقرار رکھیں، جڑی بوٹیاں نکال دیں اور پانی کی کمی کے دباؤ سے گریز کریں۔',
            '/^Rotate crops and avoid planting onions in the same field every year\.?$/iu' => 'فصلوں میں ردوبدل کریں اور ہر سال اسی کھیت میں پیاز لگانے سے گریز کریں۔',
            '/^Clean field before planting and remove crop debris\.?$/iu' => 'کاشت سے پہلے کھیت صاف کریں اور فصل کی باقیات نکال دیں۔',
            '/^Avoid overwatering and improve air circulation\.?$/iu' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور ہوا کی آمدورفت بہتر بنائیں۔',
            '/^Use crop rotation and avoid infected soil\.?$/iu' => 'فصلوں میں ردوبدل کریں اور متاثرہ مٹی میں کاشت سے گریز کریں۔',
            '/^Avoid waterlogging and use healthy seed bulbs\.?$/iu' => 'پانی جمع ہونے سے گریز کریں اور صحت مند بیج والی گانٹھیں استعمال کریں۔',
            '/^Remove weeds, keep field clean, and encourage natural predators like ladybirds\.?$/iu' => 'جڑی بوٹیاں نکال دیں، کھیت صاف رکھیں اور لیڈی برڈ جیسے قدرتی شکاری حشرات کی حوصلہ افزائی کریں۔',
            '/^Use netting, remove damaged leaves, and rotate crops\.?$/iu' => 'جالی استعمال کریں، متاثرہ پتے نکال دیں اور فصلوں میں ردوبدل کریں۔',
            '/^Hand-pick larvae and keep field clean\.?$/iu' => 'سنڈیوں کو ہاتھ سے نکالیں اور کھیت صاف رکھیں۔',
            '/^Remove crop residues and clean field before planting\.?$/iu' => 'فصل کی باقیات نکال دیں اور کاشت سے پہلے کھیت صاف کریں۔',
            '/^Avoid overhead irrigation and improve air flow\.?$/iu' => 'اوپر سے آبپاشی کرنے سے گریز کریں اور ہوا کی آمدورفت بہتر بنائیں۔',
            '/^Use crop rotation and maintain proper soil pH\.?$/iu' => 'فصلوں میں ردوبدل کریں اور مٹی کا مناسب پی ایچ برقرار رکھیں۔',
            '/^Use clean seeds and remove infected plant parts\.?$/iu' => 'صاف بیج استعمال کریں اور متاثرہ پودوں کے حصے نکال دیں۔',
            '/^Use net covers, remove damaged leaves, and rotate crops\.?$/iu' => 'جالی دار پردے استعمال کریں، متاثرہ پتے نکال دیں اور فصلوں میں ردوبدل کریں۔',
            '/^Hand-pick worms and keep field clean\.?$/iu' => 'کیڑوں کو ہاتھ سے نکالیں اور کھیت صاف رکھیں۔',
            '/^Remove crop residue and prepare field well before planting\.?$/iu' => 'فصل کی باقیات نکال دیں اور کاشت سے پہلے کھیت کو اچھی طرح تیار کریں۔',
            '/^Use net covers and keep field weed-free\.?$/iu' => 'جالی دار پردے استعمال کریں اور کھیت کو جڑی بوٹیوں سے پاک رکھیں۔',
            '/^Use crop rotation and avoid continuous radish growing\.?$/iu' => 'فصلوں میں ردوبدل کریں اور مسلسل مولی اگانے سے گریز کریں۔',
            '/^Avoid overcrowding and improve sunlight exposure\.?$/iu' => 'بہت زیادہ گنجان کاشت سے گریز کریں اور پودوں کو مناسب دھوپ ملنے دیں۔',
            '/^Apply Metalaxyl or Ridomil-based fungicides\.?$/iu' => 'میٹالیکسل یا رڈومل پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            '/^Treat soil or seeds with Carbendazim\.?$/iu' => 'مٹی یا بیجوں کا کاربینڈازم سے علاج کریں۔',
            '/^Apply Carbendazim or soil fungicides\.?$/iu' => 'کاربینڈازم یا مٹی کے لیے موزوں پھپھوندی کش ادویات استعمال کریں۔',
            '/^Apply Mancozeb or Triazole fungicides\.?$/iu' => 'مینکوزیب یا ٹرائی ایزول پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            '/^Apply Metalaxyl-based fungicides\.?$/iu' => 'میٹالیکسل پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            '/^Use pheromone traps and apply recommended insecticides\.?$/iu' => 'جنسی کشش والے پھندے استعمال کریں اور تجویز کردہ کیڑے مار ادویات استعمال کریں۔',
            '/^Treat seed potatoes with fungicides before planting\.?$/iu' => 'کاشت سے پہلے بیج والے آلوؤں کا پھپھوندی کش ادویات سے علاج کریں۔',
            '/^Avoid overcrowding and improve air circulation\.?$/iu' => 'بہت زیادہ گنجان کاشت سے گریز کریں اور ہوا کی آمدورفت بہتر بنائیں۔',
            '/^Use yellow sticky traps and keep field clean\.?$/iu' => 'زرد چپکنے والے پھندے استعمال کریں اور کھیت صاف رکھیں۔',
            '/^Control aphids and remove infected plants immediately\.?$/iu' => 'افڈز کا تدارک کریں اور متاثرہ پودے فوراً نکال دیں۔',
            '/^Fungus spreads in warm and wet conditions\.?$/iu' => 'پھپھوندی گرم اور نم حالات میں پھیلتی ہے۔',
            '/^Fungus spreads in humid conditions and infects leaves\.?$/iu' => 'پھپھوندی مرطوب حالات میں پھیلتی ہے اور پتوں کو متاثر کرتی ہے۔',
            '/^The fungus spreads through infected plant debris and rain splashes\.?$/iu' => 'پھپھوندی متاثرہ پودوں کی باقیات اور بارش کے چھینٹوں کے ذریعے پھیلتی ہے۔',
            '/^Bacteria spread through wind, rain, insects, and infected plant material\.?$/iu' => 'جراثیم ہوا، بارش، حشرات اور متاثرہ پودوں کے مواد کے ذریعے پھیلتے ہیں۔',
            '/^Whiteflies suck sap from leaves and spread viral diseases\.?$/iu' => 'سفید مکھیاں پتوں کا رس چوستی ہیں اور وائرسی بیماریاں پھیلاتی ہیں۔',
            '/^Collect and destroy fallen fruits and use pheromone traps\.?$/iu' => 'گرے ہوئے پھل جمع کرکے تلف کریں اور جنسی کشش والے پھندے استعمال کریں۔',
            '/^Fruits rot from inside, become soft, and fall early\.?$/iu' => 'پھل اندر سے سڑ جاتے ہیں، نرم ہو جاتے ہیں اور جلد گر جاتے ہیں۔',
        ];
        foreach ($rules as $pattern => $replacement) {
            $text = preg_replace($pattern, $replacement, $text) ?? $text;
        }
        return $text;
    }

    
    
    public function translateAgricultureField(string $text, string $field): string
    {
        if (trim($text) === '') return '';

        $sourceKey = preg_replace('/\s+/u', ' ', trim($text)) ?? trim($text);
        $fieldExact = [
            'seed_selection|Characteristics of Good Planting Material: Disease-free suckers or tissue-cultured plants Healthy rhizome base Strong and uniform growth Free from pests Quality planting material ensures better survival rate and higher yield.' => 'اچھے کاشت کاری کے مواد کی خصوصیات:
بیماری سے پاک شگوفے یا بافتی ثقافت سے تیار شدہ پودے
صحت مند گانٹھ کا بنیادی حصہ
مضبوط اور یکساں نشوونما
کیڑوں سے پاک

معیاری کاشت کاری کا مواد پودوں کے بہتر بقا کی شرح اور زیادہ پیداوار کو یقینی بناتا ہے۔',
            'seed_rate|Plant Density: 1200–1500 plants per acre

Proper spacing ensures good air circulation, healthy growth, and high fruit production.' => 'پودوں کی تعداد: فی ایکڑ 1200 سے 1500 پودے۔

مناسب فاصلہ رکھنے سے ہوا کی اچھی آمدورفت، پودوں کی صحت مند نشوونما اور پھلوں کی زیادہ پیداوار یقینی ہوتی ہے۔',
            'types_of_crop|Alleppey Turmeric: High curcumin variety
Madras Turmeric: Widely cultivated type
Lakadong Turmeric: High medicinal value
Local Varieties: Traditional Pakistani types' => 'الپّی ہلدی: زیادہ کرکیومِن والی قسم
مدراس ہلدی: بڑے پیمانے پر کاشت کی جانے والی قسم
لاکادونگ ہلدی: زیادہ ادویاتی قدر رکھنے والی قسم
مقامی اقسام: پاکستان میں روایتی طور پر کاشت کی جانے والی اقسام',
            'importance_of_crop|Onion is an essential vegetable crop used in almost every household. It plays a key role in daily cooking and food industries. It also provides income to farmers and is an important export commodity for Pakistan.' => 'پیاز ایک اہم سبزی کی فصل ہے جو تقریباً ہر گھر میں استعمال ہوتی ہے۔ روزمرہ کھانا پکانے اور غذائی صنعت میں اس کا اہم کردار ہے۔ یہ کسانوں کے لیے آمدنی کا ذریعہ بھی ہے اور پاکستان کی ایک اہم برآمدی جنس بھی ہے۔',
            'importance_of_crop|Pearl Millet is an important crop for dry regions as it provides food and fodder under harsh climatic conditions. It plays an important role in meeting livestock feed needs and food security in low rainfall areas.' => 'باجرا خشک علاقوں کے لیے ایک اہم فصل ہے کیونکہ یہ سخت موسمی حالات میں خوراک اور چارہ فراہم کرتا ہے۔ کم بارش والے علاقوں میں مویشیوں کے چارے کی ضروریات پوری کرنے اور غذائی تحفظ یقینی بنانے میں اس کا اہم کردار ہے۔',
            'fertilizer_requirements|Nitrogen: Leaf growth. Phosphorus: Root growth. Potassium: Improves cauliflower curd quality and size. Balanced fertilizers improve yield, cauliflower curd compactness, and plant health.' => 'نائٹروجن: پتوں کی نشوونما کے لیے۔ فاسفورس: جڑوں کی نشوونما کے لیے۔ پوٹاشیم: پھول گوبھی کے پھول کی جسامت اور معیار کو بہتر بناتا ہے۔ متوازن کھادیں پیداوار، پھول گوبھی کے پھول کی مضبوط ساخت اور پودے کی صحت بہتر کرتی ہیں۔',
            'nutritional_value|Nicotine: Active compound (not a dietary nutrient)' => 'نکوٹین: فعال مرکب (یہ غذائی جزو نہیں ہے)',
            'basic_information|Crop Name: Tobacco Scientific Name: Nicotiana tabacum Crop Type: Kharif (Summer Cash Crop) Main Use: Cigarettes, Cigars, Chewing tobacco, Industrial products Sowing Season: March to May Harvesting Season: September to November Ideal Temperature: 20°C – 30°C Water Requirement: Moderate Best Soil Type: Sandy loam and fertile well-drained soil Major Areas: Punjab, KPK, Sindh' => 'فصل کا نام: تمباکو
سائنسی نام: نکوٹیانا ٹیبیکم
فصل کی قسم: خریف (موسم گرما کی نقد آور فصل)
اہم استعمال: سگریٹ، سگار، چبانے والا تمباکو اور صنعتی مصنوعات
کاشت کا موسم: مارچ تا مئی
کٹائی کا موسم: ستمبر تا نومبر
موزوں درجہ حرارت: 20 سے 30 ڈگری سینٹی گریڈ
پانی کی ضرورت: درمیانی
بہترین مٹی کی قسم: ریتیلی دومی اور زرخیز، اچھی نکاسی والی مٹی
اہم علاقے: پنجاب، خیبر پختونخوا، سندھ',
            'types_of_crop|Flue-Cured Tobacco: Used for cigarettes Burley Tobacco: Air-cured variety Oriental Tobacco: Aromatic leaf variety Chewing Tobacco: Used for traditional chewing products' => 'فلو کیورڈ تمباکو: سگریٹ بنانے کے لیے استعمال ہوتا ہے
برلے تمباکو: ہوا کے ذریعے خشک کی جانے والی قسم
اورینٹل تمباکو: خوشبودار پتوں والی قسم
چبانے والا تمباکو: روایتی طور پر چبانے والی مصنوعات میں استعمال ہوتا ہے',
            'nutritional_value|Nicotine: Active compound (not a food nutrient) Alkaloids: Chemical compounds Organic compounds: Used in industrial processing (Note: Tobacco is not a food crop and has no nutritional value for consumption)' => 'نکوٹین: فعال مرکب (یہ غذائی جزو نہیں ہے)
الکالوئیڈز: کیمیائی مرکبات
نامیاتی مرکبات: صنعتی تیاری میں استعمال ہوتے ہیں
(نوٹ: تمباکو غذائی فصل نہیں ہے اور انسانی استعمال کے لیے اس کی کوئی غذائی قدر نہیں ہے)',
            'types_of_crop|American Cotton: High yield variety Egyptian Cotton: Long staple fiber Desi Cotton: Local traditional variety Bt Cotton: Genetically modified pest-resistant variety' => 'امریکی کپاس: زیادہ پیداوار دینے والی قسم
مصری کپاس: لمبے ریشے والی قسم
دیسی کپاس: مقامی روایتی قسم
بی ٹی کپاس: جینیاتی طور پر تبدیل شدہ اور کیڑوں کے خلاف مزاحمت رکھنے والی قسم',
            'types_of_crop|Pusa Red: Disease resistant variety Direct Seeded Variety: Popular selection type' => 'پوسا ریڈ: بیماریوں کے خلاف مزاحمت رکھنے والی قسم
براہِ راست بوئی جانے والی قسم: مقبول انتخابی قسم',
            'nutritional_value|Carbohydrates: Energy source. Vitamin C: Very effective for immunity. Magnesium: Muscle and nerve function' => 'کاربوہائیڈریٹس: توانائی کا اہم ذریعہ ہیں۔ وٹامن سی: قوتِ مدافعت کے لیے مفید ہے۔ میگنیشیم: پٹھوں اور اعصابی نظام کے افعال کے لیے ضروری ہے۔',
            'nutritional_value|Carbohydrates: Energy source. Potassium: Heart health and muscle function Vitamin B6: Brain development' => 'کاربوہائیڈریٹس: توانائی کا ذریعہ ہیں۔ پوٹاشیم: دل کی صحت اور پٹھوں کے افعال کے لیے ضروری ہے۔ وٹامن بی 6: دماغ کی نشوونما میں اہم کردار ادا کرتا ہے۔',
            'harvesting_season|Melons are harvested from June to July when fruits become sweet, aromatic, and fully mature. Ripeness is usually identified by color change, fragrance, and softness at blossom end. Why Melons are Harvested at This Time: Warm summer weather enhances sugar development in fruits, improving sweetness and market demand.' => 'خربوزے کی کٹائی عموماً جون سے جولائی تک کی جاتی ہے، جب پھل میٹھے، خوشبودار اور مکمل طور پر پک جاتے ہیں۔ پکنے کی عام علامات میں رنگ کی تبدیلی، خوشبو اور پھول والے سرے پر نرمی شامل ہیں۔ خربوزے کی کٹائی اس وقت اس لیے کی جاتی ہے کہ گرم موسم پھل میں شکر بننے کے عمل کو بہتر بناتا ہے، جس سے مٹھاس اور منڈی میں طلب بڑھتی ہے۔',
            'seed_selection|Characteristics of Good Planting Material: Disease-free suckers or tissue-cultured plants Healthy rhizome base Strong and uniform growth Free from pests Quality planting material ensures better survival rate and higher yield.' => 'اچھے کاشت کاری کے مواد کی خصوصیات:
بیماری سے پاک شگوفے یا بافتی ثقافت سے تیار شدہ پودے
صحت مند گانٹھ کا بنیادی حصہ
مضبوط اور یکساں نشوونما
کیڑوں سے پاک
معیاری کاشت کاری کا مواد پودوں کے بہتر بقا کی شرح اور زیادہ پیداوار کو یقینی بناتا ہے۔',
            'seed_rate|Plant Density: 1200–1500 plants per acre Proper spacing ensures good air circulation, healthy growth, and high fruit production.' => 'پودوں کی تعداد: فی ایکڑ 1200 سے 1500 پودے۔
مناسب فاصلہ رکھنے سے ہوا کی اچھی آمدورفت، پودوں کی صحت مند نشوونما اور پھلوں کی زیادہ پیداوار یقینی ہوتی ہے۔',
            'seed_rate|Broadcasting Method: 8–10 kg per acre' => 'چھٹہ طریقہ: فی ایکڑ 8 سے 10 کلوگرام بیج۔',
            'fertilizer_requirements|Nitrogen: Promotes leaf growth Phosphorus: Helps root development' => 'نائٹروجن: پتوں کی نشوونما بڑھاتا ہے۔ فاسفورس: جڑوں کی نشوونما میں مدد دیتا ہے۔',
            'fertilizer_requirements|Nitrogen: Promotes green leafy growth Phosphorus: Helps root development' => 'نائٹروجن: پتوں کی سبز اور صحت مند نشوونما بڑھاتا ہے۔ فاسفورس: جڑوں کی نشوونما میں مدد دیتا ہے۔',
            'types_of_crop|Flue-Cured Tobacco: Used for cigarettes' => 'فلو کیورڈ تمباکو: سگریٹ بنانے کے لیے استعمال ہوتا ہے',
            'types_of_crop|Burley Tobacco: Air-cured variety' => 'برلے تمباکو: ہوا کے ذریعے خشک کی جانے والی قسم',
            'types_of_crop|Oriental Tobacco: Aromatic leaf variety' => 'اورینٹل تمباکو: خوشبودار پتوں والی قسم',
            'types_of_crop|Chewing Tobacco: Used for traditional chewing products' => 'چبانے والا تمباکو: روایتی طور پر چبانے والی مصنوعات میں استعمال ہوتا ہے',
            'nutritional_value|Nicotine: Active compound (not a food nutrient)' => 'نکوٹین: فعال مرکب (یہ غذائی جزو نہیں ہے)',
            'harvesting_season|Pomegranates are harvested from August to November depending on the variety and climate conditions. Fruits are ready when they develop full color and produce a metallic sound when tapped.' => 'انار کی کٹائی قسم اور آب و ہوا کے حالات کے مطابق اگست سے نومبر تک کی جاتی ہے۔ پھل اس وقت تیار ہوتے ہیں جب ان کا رنگ مکمل طور پر بن جائے اور تھپتھپانے پر دھاتی سی آواز پیدا ہو۔',
            'types_of_crop|Sweet Pomegranates: Used for fresh eating' => 'میٹھے انار: تازہ کھانے کے لیے استعمال ہوتے ہیں',
            'importance_of_crop|Sugarcane is an important cash crop in Pakistan and many tropical countries. It is mainly grown for sugar production, but it is also used to produce molasses, ethanol, and jaggery. Sugarcane plays a vital role in the agricultural economy by supporting sugar mills and providing income to farmers. Pakistan is among the major sugarcane-producing countries in the world.' => 'گنا پاکستان اور بہت سے گرم خطوں کے ممالک میں ایک اہم نقد آور فصل ہے۔ اسے بنیادی طور پر چینی کی پیداوار کے لیے کاشت کیا جاتا ہے، تاہم اس سے شیرہ، ایتھانول اور گڑ بھی تیار کیا جاتا ہے۔ شوگر ملوں کو خام مال فراہم کرنے اور کسانوں کے لیے آمدنی کا ذریعہ بننے کی وجہ سے گنا زرعی معیشت میں اہم کردار ادا کرتا ہے۔ پاکستان دنیا کے بڑے گنا پیدا کرنے والے ممالک میں شامل ہے۔',
            'importance_of_crop|Pearl Millet is an important crop for dry regions as it provides food and fodder under harsh climatic conditions. It supports livestock feeding and contributes to food security in areas with low rainfall.' => 'باجرا خشک علاقوں کے لیے ایک اہم فصل ہے کیونکہ یہ سخت موسمی حالات میں خوراک اور چارہ فراہم کرتا ہے۔ کم بارش والے علاقوں میں یہ مویشیوں کے لیے چارے کی ضروریات پوری کرنے اور غذائی تحفظ میں اہم کردار ادا کرتا ہے۔',
            'harvesting_season|Lucerne is not harvested only once; instead, it is cut multiple times after the first harvest. The first cutting is usually ready after 60–70 days, and subsequent cuttings occur every 25–30 days depending on growth conditions.' => 'لوسرن کی کٹائی صرف ایک مرتبہ نہیں ہوتی بلکہ پہلی کٹائی کے بعد اسے کئی مرتبہ کاٹا جاتا ہے۔ پہلی کٹائی عموماً 60 سے 70 دن بعد تیار ہوتی ہے، جبکہ بعد کی کٹائیاں نشوونما کے حالات کے مطابق ہر 25 سے 30 دن بعد کی جاتی ہیں۔',
            'importance_of_crop|Soybean is an important oilseed crop that supports edible oil production and livestock feed industries. It also improves soil fertility by fixing nitrogen, making it beneficial for crop rotation systems.' => 'سویا بین ایک اہم تیل دار فصل ہے جو خوردنی تیل کی پیداوار اور مویشیوں کی خوراک کی صنعت کے لیے اہم خام مال فراہم کرتی ہے۔ یہ نائٹروجن کو مٹی میں شامل کرکے اس کی زرخیزی بہتر بناتی ہے، اس لیے فصلوں کی گردش کے نظام میں اس کی کاشت مفید ثابت ہوتی ہے۔',
            'soil_requirements|Suitable Soil: Clay loam soil Loamy soil Moist, fertile soil Ideal pH: 5.5 – 7.0 Soil must retain moisture but should not be waterlogged for long periods.' => 'موزوں مٹی: چکنی دومی مٹی، دومی مٹی اور نم و زرخیز مٹی۔ موزوں پی ایچ: 5.5 سے 7.0۔ مٹی میں نمی برقرار رہنی چاہیے، لیکن طویل عرصے تک پانی کھڑا نہیں رہنا چاہیے۔',
            'climate_requirements|Germination/Plant Growth Temperature: 24°C – 30°C Flowering Stage: 20°C – 25°C (cool and dry weather preferred) Fruit Development: 25°C – 35°C Mango grows best in tropical and subtropical climates with long, hot summers and mild winters. Frost and extremely low temperatures can damage the crop.' => 'انکرن اور پودے کی نشوونما کے لیے درجہ حرارت 24 سے 30 ڈگری سینٹی گریڈ ہونا چاہیے۔ پھول آنے کے مرحلے میں 20 سے 25 ڈگری سینٹی گریڈ درجہ حرارت اور ٹھنڈا و خشک موسم بہتر رہتا ہے۔ پھل بننے کے مرحلے میں 25 سے 35 ڈگری سینٹی گریڈ درجہ حرارت موزوں ہے۔ آم گرم اور نیم گرم آب و ہوا میں بہترین نشوونما پاتا ہے جہاں گرمیاں طویل اور سردیاں نسبتاً معتدل ہوں۔ پالا اور انتہائی کم درجہ حرارت فصل کو نقصان پہنچا سکتا ہے۔',
            'climate_requirements|Germination/Plant Growth Temperature: 20°C – 30°C Flowering Stage: 15°C – 25°C (mild and dry conditions preferred) Fruit Development: 25°C – 35°C Lychee grows best in warm subtropical climates with high humidity. It is sensitive to frost and extremely dry conditions.' => 'انکرن اور پودے کی ابتدائی نشوونما کے لیے 20 سے 30 ڈگری سینٹی گریڈ درجہ حرارت موزوں ہے۔ پھول آنے کے مرحلے میں 15 سے 25 ڈگری سینٹی گریڈ درجہ حرارت اور ہلکے خشک حالات بہتر رہتے ہیں۔ پھل بننے کے لیے 25 سے 35 ڈگری سینٹی گریڈ درجہ حرارت مناسب ہے۔ لیچی گرم نیم گرم آب و ہوا اور زیادہ نمی میں بہترین نشوونما پاتی ہے۔ یہ پالا اور انتہائی خشک حالات برداشت نہیں کرتی۔',
            'climate_requirements|Germination/Plant Growth Temperature: 15°C – 25°C Flowering Stage: 10°C – 20°C (cool weather required) Fruit Development: 20°C – 30°C Peaches grow best in temperate climates with cool winters and mild summers. They require a certain amount of winter chill hours for proper flowering.' => 'انکرن اور پودے کی نشوونما کے لیے 15 سے 25 ڈگری سینٹی گریڈ درجہ حرارت موزوں ہے۔ پھول آنے کے مرحلے میں 10 سے 20 ڈگری سینٹی گریڈ کا ٹھنڈا موسم ضروری ہے، جبکہ پھل بننے کے لیے 20 سے 30 ڈگری سینٹی گریڈ درجہ حرارت بہتر رہتا ہے۔ آڑو معتدل آب و ہوا میں بہترین نشوونما پاتا ہے جہاں سردیاں ٹھنڈی اور گرمیاں ہلکی گرم ہوں۔ مناسب پھول آنے کے لیے سردیوں میں ایک مخصوص مدت تک ٹھنڈا درجہ حرارت درکار ہوتا ہے۔',
            'land_preparation|Deep ploughing: Loosens soil for root penetration Fine tilth preparation: Removes clods and stones Organic matter addition: Improves soil fertility Leveling: Ensures uniform irrigation Proper land preparation ensures smooth and straight carrot roots.' => 'گہرا ہل چلانے سے مٹی نرم ہوتی ہے اور جڑوں کو پھیلنے کی جگہ ملتی ہے۔ باریک بھربھری زمین تیار کرنے سے ڈھیلے مٹی کے ڈھیلوں اور پتھروں کو ہٹایا جاتا ہے۔ نامیاتی مادہ شامل کرنے سے مٹی کی زرخیزی بہتر ہوتی ہے، جبکہ زمین ہموار کرنے سے آبپاشی یکساں رہتی ہے۔ زمین کی مناسب تیاری سے گاجر کی جڑیں سیدھی، ہموار اور بہتر معیار کی بنتی ہیں۔',
            'harvesting_season|Onions are harvested from March to May depending on variety and sowing time. The crop is ready when leaves turn yellow and start drying, and bulbs become firm. Why Onions are Harvested at This Time: Dry and warm weather during spring helps bulbs cure properly and improves storage life.' => 'پیاز کی کٹائی قسم اور بوائی کے وقت کے مطابق مارچ سے مئی تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب پتے زرد ہو کر خشک ہونے لگیں اور گانٹھیں سخت ہو جائیں۔ پیاز کی کٹائی اس وقت کرنے کی وجہ یہ ہے کہ بہار کے خشک اور گرم موسم میں گانٹھیں اچھی طرح خشک ہو جاتی ہیں، جس سے ذخیرہ کرنے کی مدت بہتر ہوتی ہے۔',
            'soil_requirements|Suitable Soil: Sandy loam soil Well-drained fertile soil Light textured soil with organic matter Ideal pH: 6.0 – 7.5 Well-drained soil is important because waterlogging can damage bulbs and reduce yield.' => 'موزوں مٹی: ریتیلی دومی مٹی، اچھی نکاسی والی زرخیز مٹی اور نامیاتی مادے والی ہلکی ساخت کی مٹی۔ موزوں پی ایچ: 6.0 سے 7.5۔ اچھی نکاسی والی مٹی ضروری ہے کیونکہ پانی کھڑا رہنے سے گانٹھوں کو نقصان پہنچ سکتا ہے اور پیداوار کم ہو سکتی ہے۔',
            'importance_of_crop|Beetroot is an important vegetable crop with high nutritional and market value. It provides income to farmers and is widely used in food processing industries. Beetroot is also beneficial for human health because it contains vitamins, minerals, and antioxidants.' => 'چقندر ایک اہم سبزی کی فصل ہے جس کی غذائی اور تجارتی قدر زیادہ ہے۔ یہ کسانوں کے لیے آمدنی کا ذریعہ ہے اور غذائی مصنوعات تیار کرنے کی صنعت میں بڑے پیمانے پر استعمال ہوتا ہے۔ چقندر انسانی صحت کے لیے بھی مفید ہے کیونکہ اس میں وٹامنز، معدنیات اور اینٹی آکسیڈنٹس پائے جاتے ہیں۔',
            'climate_requirements|Germination Temperature: 15°C – 20°C Vegetative Growth: 18°C – 25°C Root Development: 10°C – 20°C Turnips grow best in cool and moist climates. Excessive heat reduces root quality and affects growth.' => 'انکرن کے لیے 15 سے 20 ڈگری سینٹی گریڈ، نباتاتی نشوونما کے لیے 18 سے 25 ڈگری سینٹی گریڈ اور جڑوں کی نشوونما کے لیے 10 سے 20 ڈگری سینٹی گریڈ درجہ حرارت موزوں ہے۔ شلجم ٹھنڈی اور نم آب و ہوا میں بہترین نشوونما پاتے ہیں۔ ضرورت سے زیادہ گرمی جڑوں کے معیار کو متاثر کرتی ہے اور نشوونما کم کر دیتی ہے۔',
            'climate_requirements|Germination Temperature: 20°C – 30°C Vegetative Growth: 25°C – 30°C Fruit Development: 15°C – 25°C Oranges grow best in warm climates with mild winters and moderate humidity. Proper temperature is important for flowering, fruit setting, and fruit quality.' => 'انکرن کے لیے 20 سے 30 ڈگری سینٹی گریڈ، نباتاتی نشوونما کے لیے 25 سے 30 ڈگری سینٹی گریڈ اور پھل بننے کے لیے 15 سے 25 ڈگری سینٹی گریڈ درجہ حرارت موزوں ہے۔ مالٹے گرم آب و ہوا میں بہترین نشوونما پاتے ہیں جہاں سردیاں معتدل اور نمی مناسب ہو۔ پھول آنے، پھل لگنے اور پھل کے معیار کے لیے مناسب درجہ حرارت ضروری ہے۔',
            'soil_requirements|Suitable Soil: Loamy soil Sandy loam soil Moist and fertile soil Ideal pH: 6.0 – 7.5 Mint prefers well-drained but moisture-retaining soil. Organic matter improves leaf quality and yield.' => 'موزوں مٹی: دومی مٹی، ریتیلی دومی مٹی اور نم و زرخیز مٹی۔ موزوں پی ایچ: 6.0 سے 7.5۔ پودینہ ایسی مٹی کو پسند کرتا ہے جس میں نکاسی آب اچھی ہو لیکن نمی برقرار رکھنے کی صلاحیت بھی موجود ہو۔ نامیاتی مادہ پتوں کے معیار اور پیداوار کو بہتر بناتا ہے۔',
            'climate_requirements|Germination Temperature: 20°C – 30°C Growth Temperature: 25°C – 35°C Ripening Stage: 20°C – 30°C Sugarcane grows best in warm and humid climates with long frost-free periods. High sunlight and water availability are essential for good yield.' => 'انکرن کے لیے 20 سے 30 ڈگری سینٹی گریڈ، نشوونما کے لیے 25 سے 35 ڈگری سینٹی گریڈ اور پکنے کے مرحلے میں 20 سے 30 ڈگری سینٹی گریڈ درجہ حرارت موزوں ہے۔ گنا گرم اور مرطوب آب و ہوا میں بہترین نشوونما پاتا ہے جہاں طویل عرصے تک پالا نہ پڑے۔ اچھی پیداوار کے لیے وافر دھوپ اور مناسب پانی کی دستیابی ضروری ہے۔',
            'types_of_crop|White Radish: Long white root variety
Red Radish: Small red root variety
Round Radish: Round-shaped roots
Asian Radish: Large and mild flavored variety' => 'سفید مولی: لمبی سفید جڑ والی قسم
سرخ مولی: چھوٹی سرخ جڑ والی قسم
گول مولی: گول شکل کی جڑیں
ایشیائی مولی: بڑی اور ہلکے ذائقے والی قسم',
            'crop_varieties|Desi Garlic: Local variety
Chinese Garlic: Large bulb variety
Italian Garlic: Strong flavor variety
Punjab Garlic: High-yield variety' => 'دیسی لہسن: مقامی قسم
چینی لہسن: بڑی گانٹھ والی قسم
اطالوی لہسن: تیز ذائقے والی قسم
پنجاب لہسن: زیادہ پیداوار دینے والی قسم',
            'crop_varieties|Detroit Dark Red: Popular red variety
Crimson Globe: Round root variety
Early Wonder: Early maturing variety
Ruby Queen: High quality roots' => 'ڈیٹرائٹ ڈارک ریڈ: مقبول سرخ قسم
کرمسن گلوب: گول جڑ والی قسم
ارلی ونڈر: جلد پکنے والی قسم
روبی کوئین: اعلیٰ معیار کی جڑیں',
            'crop_varieties|Purple Top White Globe: Popular variety
Tokyo Cross: Early maturing variety
Golden Ball: Yellow flesh variety
Shogoin: Large root variety' => 'پرپل ٹاپ وائٹ گلوب: مقبول قسم
ٹوکیو کراس: جلد پکنے والی قسم
گولڈن بال: زرد گودے والی قسم
شوگوئن: بڑی جڑ والی قسم',
            'crop_varieties|CP-77-400: High yield variety
HSF-240: Disease resistant
CPF-237: Widely grown in Pakistan
US-658: High sugar recovery variety' => 'سی پی-77-400: زیادہ پیداوار دینے والی قسم
ایچ ایس ایف-240: بیماریوں کے خلاف مزاحمت رکھنے والی قسم
سی پی ایف-237: پاکستان میں بڑے پیمانے پر کاشت کی جانے والی قسم
یو ایس-658: زیادہ چینی حاصل کرنے والی قسم',
            'fertilizer_requirements|Nitrogen (N): Growth of leaves and stems
Phosphorus (P): Root development
Potassium (K): Drought resistance and grain quality

Low fertilizer input is required compared to other cereal crops.' => 'نائٹروجن (N): پتوں اور تنوں کی نشوونما کے لیے۔
فاسفورس (P): جڑوں کی نشوونما کے لیے۔
پوٹاشیم (K): خشک سالی برداشت کرنے کی صلاحیت اور دانے کے معیار کو بہتر بناتا ہے۔

دیگر اناج کی فصلوں کے مقابلے میں اس فصل کو کم مقدار میں کھاد کی ضرورت ہوتی ہے۔',
            'land_preparation|Deep ploughing: Improves soil aeration
Harrowing: Breaks soil clods
Leveling: Ensures uniform irrigation
Weed removal: Reduces competition

Proper land preparation helps in better germination and crop establishment.' => 'گہرا ہل چلانا: مٹی میں ہوا کی آمدورفت بہتر بناتا ہے۔
سہاگہ چلانا: مٹی کے ڈھیلوں کو توڑتا ہے۔
زمین ہموار کرنا: آبپاشی کی یکساں تقسیم یقینی بناتا ہے۔
جڑی بوٹیوں کا خاتمہ: فصل کے ساتھ مقابلہ کم کرتا ہے۔

زمین کی مناسب تیاری سے بہتر انکرن اور فصل کے مضبوط قیام میں مدد ملتی ہے۔',
            'land_preparation|Ploughing: Loosens soil for root growth
Harrowing: Breaks soil clods
Leveling: Ensures uniform moisture distribution
Weed Control: Reduces competition

Proper land preparation improves germination and plant establishment.' => 'ہل چلانا: جڑوں کی نشوونما کے لیے مٹی کو نرم کرتا ہے۔
سہاگہ چلانا: مٹی کے ڈھیلوں کو توڑتا ہے۔
زمین ہموار کرنا: نمی کی یکساں تقسیم یقینی بناتا ہے۔
جڑی بوٹیوں کا تدارک: فصل کے ساتھ مقابلہ کم کرتا ہے۔

زمین کی مناسب تیاری سے انکرن اور پودوں کے مضبوط قیام میں بہتری آتی ہے۔',
            'land_preparation|Ploughing: Deep ploughing to loosen soil
Harrowing: Breaking soil clods
Leveling: Ensures uniform irrigation
Weed Control: Removes unwanted plants

Proper land preparation improves seed germination and crop yield.' => 'ہل چلانا: مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔
سہاگہ چلانا: مٹی کے ڈھیلوں کو توڑتا ہے۔
زمین ہموار کرنا: آبپاشی کی یکساں تقسیم یقینی بناتا ہے۔
جڑی بوٹیوں کا تدارک: غیر ضروری پودوں کو ختم کرتا ہے۔

زمین کی مناسب تیاری سے بیج کا بہتر انکرن اور فصل کی زیادہ پیداوار حاصل ہوتی ہے۔',
            'land_preparation|Ploughing: Deep ploughing to loosen soil
Harrowing: Breaking soil clods for fine seedbed
Leveling: Ensures uniform irrigation
Weed Removal: Reduces competition

Proper land preparation improves germination and plant growth.' => 'ہل چلانا: مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔
سہاگہ چلانا: باریک اور ہموار بیج بستر تیار کرنے کے لیے مٹی کے ڈھیلے توڑتا ہے۔
زمین ہموار کرنا: آبپاشی کی یکساں تقسیم یقینی بناتا ہے۔
جڑی بوٹیوں کا خاتمہ: فصل کے ساتھ مقابلہ کم کرتا ہے۔

زمین کی مناسب تیاری سے بہتر انکرن اور پودے کی اچھی نشوونما میں مدد ملتی ہے۔',
            'land_preparation|Ploughing: Light to moderate ploughing
Harrowing: Fine seedbed preparation
Leveling: Ensures uniform moisture
Weed Control: Reduces competition

Proper land preparation improves germination and crop establishment.' => 'ہل چلانا: ہلکی سے درمیانی گہرائی تک ہل چلانا۔
سہاگہ چلانا: باریک اور ہموار بیج بستر کی تیاری۔
زمین ہموار کرنا: نمی کی یکساں تقسیم یقینی بنانا۔
جڑی بوٹیوں کا تدارک: فصل کے ساتھ مقابلہ کم کرنا۔

زمین کی مناسب تیاری سے بہتر انکرن اور فصل کے مضبوط قیام میں مدد ملتی ہے۔',
            'land_preparation|Ploughing: Deep ploughing for soil loosening
Harrowing: Fine seedbed preparation
Leveling: Ensures proper irrigation
Weed Control: Reduces crop competition

Good land preparation improves germination and plant establishment.' => 'ہل چلانا: مٹی کو نرم کرنے کے لیے گہرا ہل چلانا۔
سہاگہ چلانا: باریک اور ہموار بیج بستر کی تیاری۔
زمین ہموار کرنا: مناسب آبپاشی یقینی بنانا۔
جڑی بوٹیوں کا تدارک: فصل کے ساتھ مقابلہ کم کرنا۔

زمین کی اچھی تیاری سے بہتر انکرن اور پودوں کے مضبوط قیام میں مدد ملتی ہے۔',
            'land_preparation|Ploughing: Deep ploughing for soil loosening
Harrowing: Fine seedbed preparation
Leveling: Ensures uniform irrigation
Weed Control: Removes competing weeds

Proper land preparation improves germination and crop establishment.' => 'ہل چلانا: مٹی کو نرم کرنے کے لیے گہرا ہل چلانا۔
سہاگہ چلانا: باریک اور ہموار بیج بستر کی تیاری۔
زمین ہموار کرنا: آبپاشی کی یکساں تقسیم یقینی بنانا۔
جڑی بوٹیوں کا تدارک: مقابلہ کرنے والی جڑی بوٹیاں ختم کرنا۔

زمین کی مناسب تیاری سے بہتر انکرن اور فصل کے مضبوط قیام میں مدد ملتی ہے۔',
            'land_preparation|Ploughing: Deep ploughing for soil loosening
Harrowing: Fine tilth preparation
Leveling: Ensures uniform irrigation
Weed Control: Removes competing plants

Proper land preparation ensures healthy transplanting and growth.' => 'ہل چلانا: مٹی کو نرم کرنے کے لیے گہرا ہل چلانا۔
سہاگہ چلانا: باریک اور بھربھری مٹی تیار کرنا۔
زمین ہموار کرنا: آبپاشی کی یکساں تقسیم یقینی بنانا۔
جڑی بوٹیوں کا تدارک: مقابلہ کرنے والے پودوں کو ختم کرنا۔

زمین کی مناسب تیاری سے پنیری کی صحت مند منتقلی اور اچھی نشوونما یقینی ہوتی ہے۔',
            'fertilizer_requirements|Nitrogen (N): Leaf and vegetative growth
Phosphorus (P): Root development and flowering
Potassium (K): Improves oil content and seed quality

Balanced fertilizer use increases yield and improves oil percentage.' => 'نائٹروجن (N): پتوں اور نباتاتی نشوونما کے لیے۔
فاسفورس (P): جڑوں کی نشوونما اور پھول آنے کے لیے۔
پوٹاشیم (K): تیل کی مقدار اور بیج کے معیار کو بہتر بناتا ہے۔

متوازن کھاد کے استعمال سے پیداوار اور تیل کی شرح میں اضافہ ہوتا ہے۔',
            'fertilizer_requirements|Nitrogen (N): Vegetative growth
Phosphorus (P): Root development and flowering
Potassium (K): Improves oil content and seed quality

Balanced fertilizer use increases yield and oil percentage.' => 'نائٹروجن (N): نباتاتی نشوونما کے لیے۔
فاسفورس (P): جڑوں کی نشوونما اور پھول آنے کے لیے۔
پوٹاشیم (K): تیل کی مقدار اور بیج کے معیار کو بہتر بناتا ہے۔

متوازن کھاد کے استعمال سے پیداوار اور تیل کی شرح میں اضافہ ہوتا ہے۔',
            'fertilizer_requirements|Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Quality and color improvement

Balanced fertilizers help in better root size and sweetness.' => 'نائٹروجن (N): پتوں کی نشوونما کے لیے۔
فاسفورس (P): جڑوں کی نشوونما کے لیے۔
پوٹاشیم (K): معیار اور رنگ بہتر بناتا ہے۔

متوازن کھادیں جڑوں کی بہتر جسامت اور مٹھاس حاصل کرنے میں مدد دیتی ہیں۔',
            'fertilizer_requirements|Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Curd quality and size

Balanced fertilizers improve yield, curd compactness, and plant health.' => 'نائٹروجن (N): پتوں کی نشوونما کے لیے۔
فاسفورس (P): جڑوں کی نشوونما کے لیے۔
پوٹاشیم (K): پھول گوبھی کے پھول کا معیار اور جسامت بہتر بناتا ہے۔

متوازن کھادیں پیداوار، پھول گوبھی کے پھول کی مضبوطی اور پودے کی صحت بہتر کرتی ہیں۔',
            'irrigation_requirements|Initial Stage: Light irrigation or rainfall sufficient
Vegetative Stage: Minimal irrigation
Flowering Stage: Moisture required for better yield
Grain Filling Stage: Moderate water requirement

Pearl Millet is highly drought-resistant and requires very little irrigation compared to other crops.' => 'ابتدائی مرحلہ: ہلکی آبپاشی یا بارش کا پانی کافی ہوتا ہے۔
نباتاتی مرحلہ: بہت کم آبپاشی کافی ہوتی ہے۔
پھول آنے کا مرحلہ: بہتر پیداوار کے لیے مناسب نمی ضروری ہے۔
دانے بھرنے کا مرحلہ: درمیانی مقدار میں پانی درکار ہوتا ہے۔

باجرا خشک سالی برداشت کرنے کی بھرپور صلاحیت رکھتا ہے اور دیگر فصلوں کے مقابلے میں اسے بہت کم آبپاشی کی ضرورت ہوتی ہے۔',
            'soil_requirements|Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.5 – 7.5

Lucerne does not grow well in waterlogged or highly acidic soils because it affects root development and nitrogen fixation.' => 'موزوں مٹی:
دومی مٹی
ریتیلی دومی مٹی
اچھی نکاسی والی زرخیز مٹی

موزوں پی ایچ: 6.5 – 7.5

لوسرن ایسی مٹی میں اچھی نشوونما نہیں پاتا جہاں پانی جمع رہتا ہو یا مٹی بہت زیادہ تیزابی ہو، کیونکہ اس سے جڑوں کی نشوونما اور نائٹروجن کے قدرتی استحکام کا عمل متاثر ہوتا ہے۔',
            'seed_rate|Seed Rate: 700–1000 kg seed tubers per acre

Proper seed rate ensures optimal plant population and high yield.' => 'بیج کی مقدار: فی ایکڑ 700 سے 1000 کلوگرام بیج والے گٹھے۔

مناسب مقدار میں بیج استعمال کرنے سے پودوں کی مطلوبہ تعداد اور زیادہ پیداوار یقینی ہوتی ہے۔',
            'nutritional_value|Protein: Very high protein content for animal growth
Fiber: Improves digestion in livestock
Calcium: Strong bones and milk production
Vitamins: Essential for animal health
Minerals: Improves overall livestock productivity' => 'پروٹین: جانوروں کی نشوونما کے لیے پروٹین کی بہت زیادہ مقدار۔
ریشہ: مویشیوں کے ہاضمے کو بہتر بناتا ہے۔
کیلشیم: مضبوط ہڈیوں اور دودھ کی پیداوار کے لیے ضروری ہے۔
وٹامنز: جانوروں کی صحت کے لیے ضروری ہیں۔
معدنیات: مویشیوں کی مجموعی پیداواری صلاحیت بہتر بناتے ہیں۔',
            'nutritional_value|Vitamin C: Improves immunity
Vitamin B6: Supports metabolism
Fiber: Aids digestion
Antioxidants: Protects body cells
Minerals: Potassium and calcium for health' => 'وٹامن سی: قوتِ مدافعت بہتر بناتا ہے۔
وٹامن بی 6: جسم کے غذائی تحول میں مدد دیتا ہے۔
ریشہ: ہاضمے میں مدد دیتا ہے۔
اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچاتے ہیں۔
معدنیات: پوٹاشیم اور کیلشیم صحت کے لیے اہم ہیں۔',
            'nutritional_value|Vitamin C: Boosts immunity
Vitamin K: Bone health
Fiber: Improves digestion
Folate: Supports cell growth
Antioxidants: Protects body cells' => 'وٹامن سی: قوتِ مدافعت بڑھانے میں مدد دیتا ہے۔
وٹامن کے: ہڈیوں کی صحت کے لیے مفید ہے۔
ریشہ: ہاضمہ بہتر بناتا ہے۔
فولیٹ: خلیوں کی نشوونما میں مدد دیتا ہے۔
اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچاتے ہیں۔',
            'harvesting_season|Bottle gourd is harvested within 60–90 days after sowing depending on variety and season. Fruits are picked when they are young and tender.

Why Bottle Gourd is Harvested Early:

Early harvesting ensures soft texture, better taste, and higher market value. Over-mature fruits become hard and less edible.' => 'لوکی کی کٹائی قسم اور موسم کے مطابق بوائی کے 60 سے 90 دن کے اندر کی جاتی ہے۔ پھل اس وقت توڑے جاتے ہیں جب وہ کم عمر اور نرم ہوں۔

لوکی کی جلد کٹائی کیوں کی جاتی ہے:

جلد کٹائی سے پھل نرم رہتے ہیں، ذائقہ بہتر ہوتا ہے اور منڈی میں قیمت زیادہ ملتی ہے۔ بہت زیادہ پکے ہوئے پھل سخت ہو جاتے ہیں اور کھانے کے لیے کم موزوں رہتے ہیں۔',
            'harvesting_season|Okra is harvested 45–60 days after sowing and continues for several weeks. Pods are picked when they are young and tender.

Why Okra is Harvested Early:

Early harvesting ensures soft texture, better taste, and higher market value. Overgrown pods become hard and fibrous.' => 'بھنڈی کی کٹائی بوائی کے 45 سے 60 دن بعد شروع ہوتی ہے اور کئی ہفتوں تک جاری رہتی ہے۔ پھلیاں اس وقت توڑی جاتی ہیں جب وہ کم عمر اور نرم ہوں۔

بھنڈی کی جلد کٹائی کیوں کی جاتی ہے:

جلد کٹائی سے پھلیاں نرم رہتی ہیں، ذائقہ بہتر ہوتا ہے اور منڈی میں قیمت زیادہ ملتی ہے۔ زیادہ پکی ہوئی پھلیاں سخت اور ریشے دار ہو جاتی ہیں۔',
            'harvesting_season|Papaya starts producing fruit within 6 to 9 months after planting and can be harvested year-round depending on flowering cycles.

Why Papaya is Harvested Continuously:

Papaya is a fast-bearing crop with continuous flowering and fruiting, allowing regular harvesting when fruits turn yellow-orange and soften slightly.' => 'پپیتا کاشت کے 6 سے 9 ماہ کے اندر پھل دینا شروع کر دیتا ہے اور پھول آنے کے چکروں کے مطابق پورے سال اس کی کٹائی کی جا سکتی ہے۔

پپیتے کی مسلسل کٹائی کیوں کی جاتی ہے:

پپیتا جلد پھل دینے والی فصل ہے جس میں مسلسل پھول اور پھل آتے رہتے ہیں، اس لیے جب پھل زرد نارنجی رنگ اختیار کر کے قدرے نرم ہو جائیں تو باقاعدگی سے کٹائی کی جا سکتی ہے۔',
            'importance_of_crop|Cotton is a major cash crop that supports Pakistan’s textile industry, which is the backbone of the economy. It provides employment to farmers, factory workers, and exporters. Cotton and its by-products are widely used in clothing, oil production, and animal feed.' => 'کپاس پاکستان کی ایک اہم نقد آور فصل ہے جو ملک کی ٹیکسٹائل صنعت کو سہارا دیتی ہے اور یہ صنعت ملکی معیشت میں ریڑھ کی ہڈی کی حیثیت رکھتی ہے۔ کپاس کسانوں، فیکٹری کارکنوں اور برآمد کنندگان کے لیے روزگار فراہم کرتی ہے۔ کپاس اور اس کی ضمنی مصنوعات کپڑے بنانے، تیل کی پیداوار اور جانوروں کے چارے میں بڑے پیمانے پر استعمال ہوتی ہیں۔',
            'importance_of_crop|Sugarcane is a major cash crop that supports Pakistan’s sugar industry. It provides raw material for sugar mills, ethanol production, and other industries. It also creates employment opportunities for farmers and factory workers.' => 'گنا پاکستان کی ایک اہم نقد آور فصل ہے جو ملک کی چینی کی صنعت کو سہارا دیتا ہے۔ یہ شوگر ملوں، ایتھانول کی پیداوار اور دیگر صنعتوں کے لیے خام مال فراہم کرتا ہے۔ اس سے کسانوں اور فیکٹری کارکنوں کے لیے روزگار کے مواقع بھی پیدا ہوتے ہیں۔',
            'importance_of_crop|Kinnow is an important fruit crop because it contributes greatly to Pakistan’s economy through exports. It provides income and employment to farmers and workers involved in orchards, packaging, and transport industries. Kinnow is also widely consumed because of its nutritional and health benefits.' => 'کینو ایک اہم پھل کی فصل ہے کیونکہ یہ برآمدات کے ذریعے پاکستان کی معیشت میں نمایاں حصہ ڈالتا ہے۔ باغات، پیکنگ اور نقل و حمل کے شعبوں سے وابستہ کسانوں اور کارکنوں کے لیے یہ آمدنی اور روزگار فراہم کرتا ہے۔ غذائی قدر اور صحت کے فوائد کی وجہ سے کینو بڑے پیمانے پر استعمال بھی کیا جاتا ہے۔',
            'sowing_season|Grapefruit plants are usually planted during February to March and August to September in Pakistan. Moderate temperatures during these months help proper root development and healthy plant growth.

Why Grapefruit is Planted in These Seasons:

These seasons provide suitable environmental conditions with balanced temperature and moisture that support strong root establishment and healthy orchard development.' => 'پاکستان میں چکوترا کے پودے عموماً فروری سے مارچ اور اگست سے ستمبر کے دوران لگائے جاتے ہیں۔ ان مہینوں میں معتدل درجہ حرارت جڑوں کی مناسب نشوونما اور پودوں کی صحت مند بڑھوتری میں مدد دیتا ہے۔

چکوترا ان موسموں میں کیوں لگایا جاتا ہے:

ان موسموں میں درجہ حرارت اور نمی متوازن رہتی ہے، جو جڑوں کے مضبوط قیام اور باغ کی صحت مند نشوونما کے لیے موزوں حالات فراہم کرتی ہے۔',
            'harvesting_season|Pomegranates are harvested from August to November depending on the variety and climate conditions. Fruits are ready when they develop full color and produce a metallic sound when tapped.

Why Pomegranates are Harvested at This Time:

Warm weather and proper maturity during this period improve fruit sweetness, color, and quality.' => 'انار کی کٹائی قسم اور آب و ہوا کے حالات کے مطابق اگست سے نومبر تک کی جاتی ہے۔ پھل اس وقت تیار ہوتے ہیں جب ان کا رنگ مکمل طور پر بن جائے اور تھپتھپانے پر دھاتی سی آواز پیدا ہو۔

انار کی کٹائی اس وقت کیوں کی جاتی ہے:

اس عرصے میں گرم موسم اور مناسب پختگی پھل کی مٹھاس، رنگ اور معیار بہتر بناتے ہیں۔',
            'irrigation_requirements|Establishment Stage: Regular watering for young plants
Flowering Stage: Controlled irrigation
Fruit Development Stage: Moderate irrigation
Ripening Stage: Reduced irrigation for better sweetness

Dates require less water compared to other fruit crops and are drought tolerant.' => 'قیام کا مرحلہ: کم عمر پودوں کو باقاعدگی سے پانی دیں۔
پھول آنے کا مرحلہ: آبپاشی کو قابو میں رکھیں۔
پھلوں کی نشوونما کا مرحلہ: درمیانی مقدار میں آبپاشی کریں۔
پکنے کا مرحلہ: بہتر مٹھاس کے لیے آبپاشی کم کر دیں۔

کھجور کو دیگر پھلوں کی فصلوں کے مقابلے میں کم پانی درکار ہوتا ہے اور یہ خشک سالی برداشت کر سکتی ہے۔',
            'fertilizer_requirements|Nitrogen (N): Promotes leaf growth
Phosphorus (P): Root development
Potassium (K): Improves oil quality

Organic compost also enhances aroma and productivity of mint leaves.' => 'نائٹروجن (N): پتوں کی نشوونما بڑھاتا ہے۔
فاسفورس (P): جڑوں کی نشوونما میں مدد دیتا ہے۔
پوٹاشیم (K): تیل کے معیار کو بہتر بناتا ہے۔

نامیاتی کھاد پودینے کے پتوں کی خوشبو اور پیداواری صلاحیت بھی بہتر کرتی ہے۔',
            'fertilizer_requirements|Nitrogen (N): Leaf growth
Phosphorus (P): Root and seed development
Potassium (K): Improves aroma and seed quality

Organic compost improves oil content and overall yield.' => 'نائٹروجن (N): پتوں کی نشوونما کے لیے۔
فاسفورس (P): جڑوں اور بیج کی نشوونما کے لیے۔
پوٹاشیم (K): خوشبو اور بیج کے معیار کو بہتر بناتا ہے۔

نامیاتی کھاد تیل کی مقدار اور مجموعی پیداوار بہتر کرتی ہے۔',
            'crop_varieties|Rongai Lucerne: High yield and drought tolerant
Siriver Lucerne: Fast regrowth variety
Desi Lucerne: Common local variety in Pakistan
Moapa Lucerne: Heat tolerant improved variety' => 'رونگائی لوسرن: زیادہ پیداوار دینے والی اور خشک سالی برداشت کرنے والی قسم
سریور لوسرن: تیزی سے دوبارہ بڑھنے والی قسم
دیسی لوسرن: پاکستان میں عام مقامی قسم
موپا لوسرن: گرمی برداشت کرنے والی بہتر قسم',
            'crop_varieties|Desiree: High yield red-skinned variety
Kufri Chandramukhi: Early maturing variety
Lady Rosetta: Chips-making variety
Kufri Bahar: Widely grown high yield variety' => 'ڈیزائری: سرخ چھلکے والی زیادہ پیداوار دینے والی قسم
کوفری چندرامکھی: جلد پکنے والی قسم
لیڈی روزیٹا: چپس بنانے کے لیے موزوں قسم
کوفری بہار: بڑے پیمانے پر کاشت کی جانے والی زیادہ پیداوار دینے والی قسم',
            'crop_varieties|Local Spinach: Common variety grown in Pakistan
Pusa Palak: High yield and fast-growing variety
All Green Spinach: Tender and dark green leaves
Desi Palak: Traditional local variety' => 'مقامی پالک: پاکستان میں عام طور پر اگائی جانے والی قسم
پوسا پالک: زیادہ پیداوار دینے والی اور تیزی سے بڑھنے والی قسم
آل گرین پالک: نرم اور گہرے سبز پتوں والی قسم
دیسی پالک: روایتی مقامی قسم',
            'crop_varieties|Swat-1: High yield variety
Phulkara: Popular local variety
Red Creole: Early maturity variety
Desi Onion: Traditional variety' => 'سوات-1: زیادہ پیداوار دینے والی قسم
پھولکارا: مقبول مقامی قسم
ریڈ کریول: جلد پکنے والی قسم
دیسی پیاز: روایتی قسم',
            'basic_information|Crop Name: Fennel (Methi)
Scientific Name: Trigonella foenum-graecum
Crop Type: Rabi (Winter Leafy Vegetable & Spice Crop)
Main Use: Vegetable (fresh leaves), spice (seeds), herbal medicine
Sowing Season: October to December
Harvesting Season: 25–30 days after sowing (leaf cutting), seeds after full maturity
Ideal Temperature: 10°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy, sandy loam, well-drained fertile soil
Major Areas: Punjab, Sindh, KPK, Balochistan' => 'فصل کا نام: میتھی
سائنسی نام: ٹریگونیللا فونوئم-گریکم
فصل کی قسم: ربیع (سرما کی پتوں والی سبزی اور مصالحے کی فصل)
اہم استعمال: سبزی (تازہ پتے)، مصالحہ (بیج)، جڑی بوٹیوں کی دوا
کاشت کا موسم: اکتوبر تا دسمبر
کٹائی کا موسم: بوائی کے 25 سے 30 دن بعد (پتوں کی کٹائی)، جبکہ بیج مکمل پختگی کے بعد
موزوں درجہ حرارت: 10 سے 25 ڈگری سینٹی گریڈ
پانی کی ضرورت: درمیانی
بہترین مٹی کی قسم: دومی، ریتیلی دومی اور اچھی نکاسی والی زرخیز مٹی
اہم علاقے: پنجاب، سندھ، خیبر پختونخوا، بلوچستان',
            'basic_information|Crop Name: Cabbage
Scientific Name: Brassica oleracea var. capitata
Crop Type: Rabi (Winter Crop)
Main Use: Salads, Curries, Soups, Fast Food
Sowing Season: August to November
Harvesting Season: November to March
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy and Fertile Soil
Major Areas: Punjab, Sindh, KPK, Balochistan' => 'فصل کا نام: بند گوبھی
سائنسی نام: براسیکا اولیریسیا وار. کیپیٹاٹا
فصل کی قسم: ربیع (موسم سرما کی فصل)
اہم استعمال: سلاد، سالن، سوپ اور فوری غذائیں
کاشت کا موسم: اگست تا نومبر
کٹائی کا موسم: نومبر تا مارچ
موزوں درجہ حرارت: 15 سے 25 ڈگری سینٹی گریڈ
پانی کی ضرورت: درمیانی
بہترین مٹی کی قسم: دومی اور زرخیز مٹی
اہم علاقے: پنجاب، سندھ، خیبر پختونخوا، بلوچستان',
            'basic_information|Crop Name: Beans
Scientific Name: Phaseolus vulgaris
Crop Type: Rabi and Spring Crop
Main Use: Vegetable, Pulse, Food
Sowing Season: August to October and February to March
Harvesting Season: November to January and April to May
Ideal Temperature: 18°C – 28°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-Drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan' => 'فصل کا نام: لوبیا
سائنسی نام: فیزولس وولگاریس
فصل کی قسم: ربیع اور بہار کی فصل
اہم استعمال: سبزی، دال اور خوراک
کاشت کا موسم: اگست تا اکتوبر اور فروری تا مارچ
کٹائی کا موسم: نومبر تا جنوری اور اپریل تا مئی
موزوں درجہ حرارت: 18 سے 28 ڈگری سینٹی گریڈ
پانی کی ضرورت: درمیانی
بہترین مٹی کی قسم: دومی اور اچھی نکاسی والی مٹی
اہم علاقے: پنجاب، سندھ، خیبر پختونخوا، بلوچستان',
            'basic_information|Crop Name: Lettuce
Scientific Name: Lactuca sativa
Crop Type: Winter Vegetable Crop
Main Use: Salad, Sandwiches, Fast Food
Sowing Season: September to November
Harvesting Season: November to February
Ideal Temperature: 15°C – 22°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-Drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan' => 'فصل کا نام: سلاد پتہ
سائنسی نام: لاکٹوکا سیٹیوا
فصل کی قسم: موسم سرما کی سبزی کی فصل
اہم استعمال: سلاد، سینڈوچ اور فوری غذائیں
کاشت کا موسم: ستمبر تا نومبر
کٹائی کا موسم: نومبر تا فروری
موزوں درجہ حرارت: 15 سے 22 ڈگری سینٹی گریڈ
پانی کی ضرورت: درمیانی
بہترین مٹی کی قسم: دومی اور اچھی نکاسی والی مٹی
اہم علاقے: پنجاب، سندھ، خیبر پختونخوا، بلوچستان',
            'basic_information|Crop Name: Coriander
Scientific Name: Coriandrum sativum
Crop Type: Rabi (Winter Crop)
Main Use: Spice, Herb, Medicine
Sowing Season: October to November
Harvesting Season: February to March
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan' => 'فصل کا نام: دھنیا
سائنسی نام: کوریئنڈرم سیٹیوم
فصل کی قسم: ربیع (موسم سرما کی فصل)
اہم استعمال: مصالحہ، جڑی بوٹی اور دوا
کاشت کا موسم: اکتوبر تا نومبر
کٹائی کا موسم: فروری تا مارچ
موزوں درجہ حرارت: 15 سے 25 ڈگری سینٹی گریڈ
پانی کی ضرورت: درمیانی
بہترین مٹی کی قسم: دومی اور اچھی نکاسی والی مٹی
اہم علاقے: پنجاب، سندھ، خیبر پختونخوا، بلوچستان',
            'sowing_season|Sunflower is usually sown from January to March for spring cultivation and June to July for autumn cultivation in Pakistan. Warm temperature and proper soil moisture help healthy seed germination and plant growth.

Why Sunflower is Sown in These Seasons:

Sunflower requires warm weather and plenty of sunlight during growth stages. These seasons provide favorable environmental conditions for high yield and oil production.' => 'پاکستان میں سورج مکھی کی بوائی عموماً بہار کی کاشت کے لیے جنوری سے مارچ اور خزاں کی کاشت کے لیے جون سے جولائی تک کی جاتی ہے۔ گرم درجہ حرارت اور مٹی میں مناسب نمی بیج کے صحت مند انکرن اور پودے کی اچھی نشوونما میں مدد دیتی ہے۔

سورج مکھی ان موسموں میں کیوں بوئی جاتی ہے:

سورج مکھی کو نشوونما کے مراحل میں گرم موسم اور وافر دھوپ درکار ہوتی ہے۔ یہ موسم زیادہ پیداوار اور تیل حاصل کرنے کے لیے سازگار ماحولیاتی حالات فراہم کرتے ہیں۔',
            'climate_requirements|Germination Temperature: 10°C – 18°C
Vegetative Growth: 15°C – 20°C
Optimal Growth: Cool and mild climate

Spinach grows best in cool weather. High temperatures cause early flowering and reduce leaf quality.' => 'انکرن کا درجہ حرارت: 10 سے 18 ڈگری سینٹی گریڈ
نباتاتی نشوونما: 15 سے 20 ڈگری سینٹی گریڈ
بہترین نشوونما: ٹھنڈی اور معتدل آب و ہوا

پالک ٹھنڈے موسم میں بہترین نشوونما پاتی ہے۔ زیادہ درجہ حرارت سے جلد پھول آتے ہیں اور پتوں کا معیار کم ہو جاتا ہے۔',
            'climate_requirements|Germination Temperature: 10°C – 18°C
Vegetative Growth: 15°C – 20°C
Pod Formation: 15°C – 22°C

Peas grow best in cool and moderate climates. High temperatures can reduce flowering and yield.' => 'انکرن کا درجہ حرارت: 10 سے 18 ڈگری سینٹی گریڈ
نباتاتی نشوونما: 15 سے 20 ڈگری سینٹی گریڈ
پھلی بننے کا مرحلہ: 15 سے 22 ڈگری سینٹی گریڈ

مٹر ٹھنڈی اور معتدل آب و ہوا میں بہترین نشوونما پاتے ہیں۔ زیادہ درجہ حرارت پھول آنے اور پیداوار کو کم کر سکتا ہے۔',
            'climate_requirements|Germination Temperature: 10°C – 20°C
Vegetative Growth: 15°C – 25°C
Root Development: 15°C – 22°C

Carrots grow best in cool climates. High temperatures may lead to bitter taste and poor root development.' => 'انکرن کا درجہ حرارت: 10 سے 20 ڈگری سینٹی گریڈ
نباتاتی نشوونما: 15 سے 25 ڈگری سینٹی گریڈ
جڑوں کی نشوونما: 15 سے 22 ڈگری سینٹی گریڈ

گاجر ٹھنڈی آب و ہوا میں بہترین نشوونما پاتی ہے۔ زیادہ درجہ حرارت سے ذائقہ کڑوا ہو سکتا ہے اور جڑوں کی نشوونما متاثر ہو سکتی ہے۔',
            'climate_requirements|Germination Temperature: 10°C – 20°C
Vegetative Growth: 15°C – 25°C
Bulb Formation: 18°C – 25°C

Onions grow best in mild and cool climates. Extreme heat or frost can reduce yield and bulb quality.' => 'انکرن کا درجہ حرارت: 10 سے 20 ڈگری سینٹی گریڈ
نباتاتی نشوونما: 15 سے 25 ڈگری سینٹی گریڈ
گانٹھ بننے کا مرحلہ: 18 سے 25 ڈگری سینٹی گریڈ

پیاز معتدل اور ٹھنڈی آب و ہوا میں بہترین نشوونما پاتا ہے۔ شدید گرمی یا پالا پیداوار اور گانٹھ کے معیار کو کم کر سکتا ہے۔',
            'climate_requirements|Germination Temperature: 20°C – 30°C
Vegetative Growth: 15°C – 25°C
Curd Formation: 15°C – 20°C

Cauliflower grows best in cool and moist climates. Extreme heat affects curd formation and reduces yield quality.' => 'انکرن کا درجہ حرارت: 20 سے 30 ڈگری سینٹی گریڈ
نباتاتی نشوونما: 15 سے 25 ڈگری سینٹی گریڈ
پھول گوبھی کا پھول بننے کا مرحلہ: 15 سے 20 ڈگری سینٹی گریڈ

پھول گوبھی ٹھنڈی اور نم آب و ہوا میں بہترین نشوونما پاتی ہے۔ شدید گرمی پھول بننے کے عمل کو متاثر کرتی ہے اور پیداوار کا معیار کم کر دیتی ہے۔',
        ];
        $pestExact = [
            'how_it_occurs|The fungus spreads through infected crop debris and moisture.' => 'متاثرہ فصل کی باقیات اور نمی کے ذریعے پھپھوندی پھیلتی ہے۔',
            'how_it_occurs|The fungus spreads through infected seeds and plant debris.' => 'متاثرہ بیجوں اور پودوں کی باقیات کے ذریعے پھپھوندی پھیلتی ہے۔',
            'recommended_control|Apply Emamectin Benzoate or other recommended insecticides.' => 'ایمامیکٹن بینزوئیٹ یا دیگر تجویز کردہ کیڑے مار ادویات استعمال کریں۔',
            'recommended_control|Apply Imidacloprid or other recommended aphid control products.' => 'امیڈاکلوپرڈ یا تیلے کے تدارک کی دیگر تجویز کردہ ادویات استعمال کریں۔',
            'how_it_occurs|Caused by soil-borne fungi in waterlogged and poorly drained fields.' => 'یہ بیماری ایسی مٹی میں موجود پھپھوندیوں کی وجہ سے ہوتی ہے جہاں پانی جمع رہتا ہو اور نکاسی آب ناقص ہو۔',
            'how_it_occurs|The fungus spreads during humid and rainy weather.' => 'مرطوب اور بارش والے موسم میں پھپھوندی پھیلتی ہے۔',
            'how_it_occurs|Fungal infection develops under moist and humid conditions.' => 'نم اور مرطوب حالات میں پھپھوندی کا حملہ پیدا ہوتا ہے۔',
            'recommended_control|Apply Imidacloprid or neem-based spray.' => 'امیڈاکلوپرڈ یا نیم پر مبنی اسپرے استعمال کریں۔',
            'recommended_control|Apply Thiamethoxam or neem oil spray.' => 'تھیامیٹھوکزام یا نیم کے تیل کا اسپرے استعمال کریں۔',
            'how_it_occurs|Fungus grows in dry but humid conditions and spreads on leaves.' => 'خشک لیکن مرطوب حالات میں پھپھوندی نشوونما پاتی ہے اور پتوں پر پھیل جاتی ہے۔',
            'recommended_control|Apply Imidacloprid or neem oil spray.' => 'امیڈاکلوپرڈ یا نیم کے تیل کا اسپرے استعمال کریں۔',
            'recommended_control|Apply Thiamethoxam or neem-based spray.' => 'تھیامیٹھوکزام یا نیم پر مبنی اسپرے استعمال کریں۔',
            'how_it_occurs|Fungus spreads through infected seeds and wet weather conditions.' => 'متاثرہ بیجوں اور نم موسمی حالات کے ذریعے پھپھوندی پھیلتی ہے۔',
            'how_it_occurs|Fungus grows on leaves in dry but humid weather.' => 'خشک لیکن مرطوب موسم میں پھپھوندی پتوں پر نشوونما پاتی ہے۔',
            'recommended_control|Apply Neem oil or Imidacloprid.' => 'نیم کا تیل یا امیڈاکلوپرڈ استعمال کریں۔',
            'how_it_occurs|Fungus grows on leaves in dry weather with humidity.' => 'نمی والے خشک موسم میں پھپھوندی پتوں پر نشوونما پاتی ہے۔',
            'how_it_occurs|Fungus spreads in humid weather through wind and infected leaves.' => 'مرطوب موسم میں پھپھوندی ہوا اور متاثرہ پتوں کے ذریعے پھیلتی ہے۔',
            'recommended_control|Apply Abamectin or neem-based spray.' => 'ایبامیکٹن یا نیم پر مبنی اسپرے استعمال کریں۔',
            'how_it_occurs|Fungus spreads in wet and humid conditions through rain and soil.' => 'نم اور مرطوب حالات میں پھپھوندی بارش اور مٹی کے ذریعے پھیلتی ہے۔',
            'how_it_occurs|Fungus spreads in wet soil and attacks ginger rhizomes.' => 'نم مٹی میں پھپھوندی پھیلتی ہے اور ادرک کے زیرِ زمین تنوں کو متاثر کرتی ہے۔',
            'how_it_occurs|Fungus enters through roots and spreads inside the plant.' => 'پھپھوندی جڑوں کے ذریعے پودے میں داخل ہو کر اس کے اندر پھیل جاتی ہے۔',
            'how_it_occurs|Fungus spreads through wind and rain in humid weather.' => 'مرطوب موسم میں پھپھوندی ہوا اور بارش کے ذریعے پھیلتی ہے۔',
            'how_it_occurs|Fungus spreads in humid weather through rain and infected plant parts.' => 'مرطوب موسم میں پھپھوندی بارش اور پودے کے متاثرہ حصوں کے ذریعے پھیلتی ہے۔',
            'how_it_occurs|Fungus grows on flowers and young leaves in dry but humid weather.' => 'خشک لیکن مرطوب موسم میں پھپھوندی پھولوں اور نئی پتیوں پر نشوونما پاتی ہے۔',
            'how_it_occurs|Fungus affects growing buds causing abnormal flower and shoot growth.' => 'پھپھوندی نشوونما پاتی ہوئی کلیوں کو متاثر کرتی ہے، جس سے پھولوں اور نئی شاخوں کی غیر معمولی نشوونما ہوتی ہے۔',
            'how_it_occurs|Fungus grows on flowers and young leaves in dry humid conditions.' => 'خشک اور مرطوب حالات میں پھپھوندی پھولوں اور نئی پتیوں پر نشوونما پاتی ہے۔',
            'recommended_control|Apply Imidacloprid or Neem oil spray.' => 'امیڈاکلوپرڈ یا نیم کے تیل کا اسپرے استعمال کریں۔',
            'how_it_occurs|Fungus spreads in humid weather through rain splash.' => 'مرطوب موسم میں بارش کے چھینٹوں کے ذریعے پھپھوندی پھیلتی ہے۔',
            'how_it_occurs|Fungus spreads through wind in humid conditions.' => 'مرطوب حالات میں پھپھوندی ہوا کے ذریعے پھیلتی ہے۔',
            'how_it_occurs|Soil fungus attacks stem base in wet soil conditions.' => 'نم مٹی میں موجود پھپھوندی تنے کے نچلے حصے کو متاثر کرتی ہے۔',
            'how_it_occurs|Fungus grows on leaves in dry but humid conditions.' => 'خشک لیکن مرطوب حالات میں پھپھوندی پتوں پر نشوونما پاتی ہے۔',
            'how_it_occurs|Fungus spreads in cool and wet weather.' => 'ٹھنڈے اور نم موسم میں پھپھوندی پھیلتی ہے۔',
            'recommended_control|Apply Imidacloprid or neem-based sprays.' => 'امیڈاکلوپرڈ یا نیم پر مبنی اسپرے استعمال کریں۔',
            'recommended_control|Apply Abamectin or suitable miticides.' => 'ایبامیکٹن یا موزوں مائٹ کش ادویات استعمال کریں۔',
            'how_it_occurs|Fungus grows in warm and dry weather with high humidity at night.' => 'گرم اور خشک موسم میں، خصوصاً رات کے وقت زیادہ نمی ہونے پر، پھپھوندی نشوونما پاتی ہے۔',
            'how_it_occurs|Soil-borne fungus enters roots and blocks water movement.' => 'مٹی میں موجود پھپھوندی جڑوں میں داخل ہو کر پانی کی ترسیل کو روک دیتی ہے۔',
            'how_it_occurs|Fungus spreads through rain splash and infected seeds.' => 'بارش کے چھینٹوں اور متاثرہ بیجوں کے ذریعے پھپھوندی پھیلتی ہے۔',
            'recommended_control|Apply fungicides like Carbendazim or proper post-harvest treatment.' => 'کاربینڈازم جیسی پھپھوندی کش دوا استعمال کریں یا کٹائی کے بعد مناسب علاج کریں۔',
            'recommended_control|Apply neem oil or systemic insecticides.' => 'نیم کا تیل یا نظامی کیڑے مار ادویات استعمال کریں۔',
            'recommended_control|Apply Abamectin or recommended miticides.' => 'ایبامیکٹن یا تجویز کردہ مائٹ کش ادویات استعمال کریں۔',
            'recommended_control|Apply Sulfur-based fungicides or Hexaconazole.' => 'گندھک پر مبنی پھپھوندی کش ادویات یا ہیکسا کونازول استعمال کریں۔',
            'recommended_control|Apply soil fungicides like Carbendazim or Thiram.' => 'کاربینڈازم یا تھیرام جیسی مٹی میں استعمال ہونے والی پھپھوندی کش ادویات استعمال کریں۔',
            'recommended_control|Apply Chlorpyrifos or Fipronil as soil treatment.' => 'کلورپائریفوس یا فپرونل کو مٹی کے علاج کے لیے استعمال کریں۔',
            'recommended_control|Apply Metalaxyl or Ridomil-based fungicides.' => 'میٹالیکسل یا رڈومل پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            'recommended_control|Apply Imidacloprid or Dimethoate as per agricultural recommendations.' => 'امیڈاکلوپرڈ یا ڈائیمتھیویٹ زرعی سفارشات کے مطابق استعمال کریں۔',
            'recommended_control|Apply Chlorpyrifos or recommended systemic insecticides.' => 'کلورپائریفوس یا تجویز کردہ نظامی کیڑے مار ادویات استعمال کریں۔',
            'recommended_control|Apply Imidacloprid or Dimethoate as per agricultural guidelines.' => 'امیڈاکلوپرڈ یا ڈائیمتھیویٹ زرعی رہنما اصولوں کے مطابق استعمال کریں۔',
            'recommended_control|Apply Carbendazim or Iprodione.' => 'کاربینڈازم یا آئی پروڈیون استعمال کریں۔',
            'recommended_control|Apply Imidacloprid or Spinosad as per agricultural advice.' => 'امیڈاکلوپرڈ یا اسپائنو سیڈ زرعی مشورے کے مطابق استعمال کریں۔',
            'recommended_control|Apply Mancozeb or Sulphur-based fungicides.' => 'مینکوزیب یا گندھک پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            'recommended_control|Apply soil insecticides or use protective netting.' => 'مٹی میں استعمال ہونے والی کیڑے مار ادویات استعمال کریں یا حفاظتی جال لگائیں۔',
            'recommended_control|Apply Neem oil or suitable insecticides.' => 'نیم کا تیل یا موزوں کیڑے مار ادویات استعمال کریں۔',
            'recommended_control|Apply Sulfur or suitable fungicides.' => 'گندھک یا موزوں پھپھوندی کش ادویات استعمال کریں۔',
            'recommended_control|Apply Chlorpyrifos or Carbaryl as per guidelines.' => 'کلورپائریفوس یا کارباریل رہنما اصولوں کے مطابق استعمال کریں۔',
            'recommended_control|Apply Sulfur or suitable fungicides like Hexaconazole.' => 'گندھک یا ہیکسا کونازول جیسی موزوں پھپھوندی کش ادویات استعمال کریں۔',
            'recommended_control|Apply Spinosad or suitable insecticides.' => 'اسپائنو سیڈ یا موزوں کیڑے مار ادویات استعمال کریں۔',
            'recommended_control|Apply Sulfur or Hexaconazole fungicide.' => 'گندھک یا ہیکسا کونازول پر مشتمل پھپھوندی کش دوا استعمال کریں۔',
            'recommended_control|Apply Chlorpyrifos or Carbaryl as per guidance.' => 'کلورپائریفوس یا کارباریل رہنما اصولوں کے مطابق استعمال کریں۔',
            'recommended_control|Apply Emamectin Benzoate or suitable insecticides.' => 'ایمامیکٹن بینزوئیٹ یا موزوں کیڑے مار ادویات استعمال کریں۔',
            'recommended_control|Apply Chlorpyrifos or use bait traps.' => 'کلورپائریفوس استعمال کریں یا چارے والی پھندیاں لگائیں۔',
            'recommended_control|Apply Copper oxychloride or Bordeaux paste.' => 'کاپر آکسی کلورائیڈ یا بورڈو محلول استعمال کریں۔',
            'recommended_control|Apply Imidacloprid or Thiamethoxam as per agricultural guidelines.' => 'امیڈاکلوپرڈ یا تھیامیٹھوکزام زرعی رہنما اصولوں کے مطابق استعمال کریں۔',
            'recommended_control|Apply horticultural oil or recommended systemic insecticides.' => 'باغبانی میں استعمال ہونے والا تیل یا تجویز کردہ نظامی کیڑے مار ادویات استعمال کریں۔',
            'recommended_control|Apply sulfur or hexaconazole-based fungicides.' => 'گندھک یا ہیکسا کونازول پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            'recommended_control|Apply sulfur or hexaconazole fungicide.' => 'گندھک یا ہیکسا کونازول پر مشتمل پھپھوندی کش دوا استعمال کریں۔',
            'recommended_control|Apply Imidacloprid or Thiamethoxam as per agricultural recommendations.' => 'امیڈاکلوپرڈ یا تھیامیٹھوکزام زرعی سفارشات کے مطابق استعمال کریں۔',
            'recommended_control|Apply neem oil or Imidacloprid spray.' => 'نیم کا تیل یا امیڈاکلوپرڈ کا اسپرے استعمال کریں۔',
            'recommended_control|Apply horticultural oil or systemic insecticides.' => 'باغبانی کا تیل یا نظامی کیڑے مار ادویات استعمال کریں۔',
            'recommended_control|Apply Sulphur or Penconazole.' => 'گندھک یا پینکونازول استعمال کریں۔',
            'recommended_control|Apply Streptomycin or Copper-based sprays.' => 'اسٹریپٹومائسن یا کاپر پر مبنی اسپرے استعمال کریں۔',
            'recommended_control|Apply Captan or Copper fungicides.' => 'کیپٹن یا کاپر پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            'recommended_control|Apply Trichoderma or Metalaxyl-based treatment.' => 'ٹرائیکوڈرما یا میٹالیکسل پر مبنی علاج استعمال کریں۔',
            'recommended_control|Apply Abamectin or Sulphur spray.' => 'ایبامیکٹن یا گندھک کا اسپرے استعمال کریں۔',
            'recommended_control|Apply Mancozeb or Copper fungicide spray.' => 'مینکوزیب یا کاپر پر مبنی پھپھوندی کش اسپرے استعمال کریں۔',
            'recommended_control|Apply mineral oil spray or systemic insecticides.' => 'منرل آئل کا اسپرے یا نظامی کیڑے مار ادویات استعمال کریں۔',
            'how_it_occurs|Fungus spreads through rain and infects leaves, flowers, and fruits.' => 'پھپھوندی بارش کے ذریعے پھیلتی ہے اور پتوں، پھولوں اور پھلوں کو متاثر کرتی ہے۔',
        ];
        $cropStageExact = [
            'growing_stages|1. Planting Stage Rhizomes are planted in prepared soil beds. 2. Sprouting Stage Shoots emerge from rhizomes. 3. Vegetative Stage Leaves grow and plant develops fully. 4. Rhizome Development Stage Underground rhizomes start expanding. 5. Flowering Stage Plant produces flowers in some varieties. 6. Maturity Stage Leaves dry and rhizomes mature. 7. Harvesting Stage Rhizomes are carefully dug out. Each stage is important for high-quality turmeric production.' => '1. کاشت کا مرحلہ
ہلدی کی گانٹھیں تیار کی گئی زمین میں لگائی جاتی ہیں۔

2. کونپل نکلنے کا مرحلہ
گانٹھوں سے نئی کونپلیں نکلنا شروع ہو جاتی ہیں۔

3. نباتاتی نشوونما کا مرحلہ
پتے بڑھتے ہیں اور پودا مکمل طور پر نشوونما پاتا ہے۔

4. گانٹھوں کی نشوونما کا مرحلہ
زمین کے اندر موجود گانٹھیں پھیلنا اور موٹی ہونا شروع ہو جاتی ہیں۔

5. پھول آنے کا مرحلہ
بعض اقسام میں پودے پر پھول نمودار ہوتے ہیں۔

6. پکنے کا مرحلہ
پتے سوکھنے لگتے ہیں اور ہلدی کی گانٹھیں مکمل طور پر پک جاتی ہیں۔

7. کٹائی کا مرحلہ
گانٹھوں کو احتیاط سے زمین سے نکالا جاتا ہے۔

اعلیٰ معیار کی ہلدی کی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds sprout in warm soil. 2. Seedling Stage Small vines develop leaves. 3. Vine Growth Stage Rapid spreading of vines occurs. 4. Flowering Stage Male and female flowers appear. 5. Fruit Formation Stage Small cucumbers begin to grow. 6. Fruit Development Stage Fruits enlarge and become tender. 7. Harvesting Stage Mature cucumbers are picked regularly. Each stage is important for good yield.' => '1. انکرن کا مرحلہ
بیج گرم اور نم مٹی میں پھوٹنا شروع کرتے ہیں۔

2. پنیری کا مرحلہ
چھوٹی بیلوں پر پتے نکلتے ہیں اور ابتدائی نشوونما شروع ہوتی ہے۔

3. بیلوں کی نشوونما کا مرحلہ
بیلیں تیزی سے پھیلتی اور بڑھتی ہیں۔

4. پھول آنے کا مرحلہ
نر اور مادہ پھول نمودار ہوتے ہیں۔

5. پھل بننے کا مرحلہ
زرپاشی کے بعد چھوٹے کھیرے بننا شروع ہوتے ہیں۔

6. پھل کی نشوونما کا مرحلہ
کھیرے جسامت میں بڑھتے ہیں اور نرم ہوتے جاتے ہیں۔

7. کٹائی کا مرحلہ
پکے ہوئے کھیرے باقاعدگی سے توڑے جاتے ہیں۔

اچھی پیداوار حاصل کرنے کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and sprout. Roots and shoots begin to develop under warm conditions. 2. Seedling Stage Young plants develop leaves and establish strong roots. 3. Vegetative Stage Plant grows stems and leaves rapidly. Nitrogen fixation begins in root nodules. 4. Flowering Stage Flowers appear and pollination starts. Weather conditions strongly affect yield. 5. Pod Formation Stage Pods start developing and seeds begin forming inside. 6. Seed Filling Stage Seeds grow and accumulate nutrients. Proper moisture is important. 7. Maturity Stage Pods turn brown and plants dry, indicating readiness for harvest. Each stage is essential for achieving high soybean yield.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹتے ہیں اور گرم حالات میں جڑیں اور کونپلیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور مضبوط جڑیں قائم ہوتی ہیں۔

3. نباتاتی نشوونما کا مرحلہ
تنے اور پتے تیزی سے بڑھتے ہیں اور جڑوں کی گانٹھوں میں نائٹروجن تثبیت کا عمل شروع ہوتا ہے۔

4. پھول آنے کا مرحلہ
پھول نمودار ہوتے ہیں اور زرپاشی شروع ہوتی ہے۔ موسمی حالات پیداوار پر نمایاں اثر ڈالتے ہیں۔

5. پھلی بننے کا مرحلہ
پھلیاں بننا شروع ہوتی ہیں اور ان کے اندر بیج تشکیل پاتے ہیں۔

6. بیج بھرنے کا مرحلہ
بیج بڑھتے ہیں اور غذائی اجزا جمع کرتے ہیں۔ مناسب نمی اس مرحلے میں ضروری ہے۔

7. پکنے کا مرحلہ
پھلیاں بھوری ہونے لگتی ہیں اور پودے خشک ہو جاتے ہیں، جو کٹائی کے لیے تیار ہونے کی علامت ہے۔

سویا بین کی اچھی پیداوار کے لیے ہر مرحلہ ضروری ہے۔',
            'growing_stages|1. Germination Stage Seeds sprout and roots begin to develop in warm soil. 2. Seedling Stage Small plants grow leaves and establish initial growth. 3. Vine Growth Stage Long vines spread rapidly across the field. 4. Flowering Stage Yellow flowers appear and pollination takes place. 5. Fruit Setting Stage Small fruits begin to develop after pollination. 6. Fruit Development Stage Fruits grow in size and accumulate sugars and water. 7. Maturity Stage Fruits become sweet, aromatic, and ready for harvest. Each stage is important for high-quality melon production.' => '1. انکرن کا مرحلہ
بیج پھوٹتے ہیں اور گرم مٹی میں جڑیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
چھوٹے پودوں پر پتے نکلتے ہیں اور ابتدائی نشوونما قائم ہوتی ہے۔

3. بیلوں کی نشوونما کا مرحلہ
لمبی بیلیں کھیت میں تیزی سے پھیلتی ہیں۔

4. پھول آنے کا مرحلہ
زرد پھول نمودار ہوتے ہیں اور زرپاشی ہوتی ہے۔

5. پھل بننے کا مرحلہ
زرپاشی کے بعد چھوٹے پھل بننا شروع ہوتے ہیں۔

6. پھل کی نشوونما کا مرحلہ
پھل جسامت میں بڑھتے ہیں اور ان میں شکر اور پانی کی مقدار بڑھتی ہے۔

7. پکنے کا مرحلہ
پھل میٹھے اور خوشبودار ہو جاتے ہیں اور کٹائی کے لیے تیار ہوتے ہیں۔

اعلیٰ معیار کے خربوزے کی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Vegetative Stage Plant develops branches, leaves, and strong roots. 2. Flowering Stage Small white flowers appear on branches. 3. Fruit Setting Stage Tiny fruits form after pollination. 4. Fruit Development Stage Fruits grow in size and accumulate nutrients. 5. Maturity Stage Fruits turn greenish-yellow and become ready for harvest. 6. Harvesting Stage Fully mature fruits are carefully picked. Each stage is important for good guava production.' => '1. نباتاتی نشوونما کا مرحلہ
پودے پر شاخیں اور پتے بڑھتے ہیں اور جڑیں مضبوط ہوتی ہیں۔

2. پھول آنے کا مرحلہ
شاخوں پر چھوٹے سفید پھول نمودار ہوتے ہیں۔

3. پھل بننے کا مرحلہ
زرپاشی کے بعد ننھے پھل بننا شروع ہوتے ہیں۔

4. پھل کی نشوونما کا مرحلہ
پھل جسامت میں بڑھتے ہیں اور غذائی اجزا جمع کرتے ہیں۔

5. پکنے کا مرحلہ
پھل سبزی مائل زرد رنگ اختیار کرتے ہیں اور کٹائی کے لیے تیار ہو جاتے ہیں۔

6. کٹائی کا مرحلہ
مکمل طور پر پکے ہوئے پھل احتیاط سے توڑے جاتے ہیں۔

امرود کی اچھی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Dormant Stage Tree remains inactive during winter. 2. Budding Stage New buds start developing in early spring. 3. Flowering Stage Beautiful pink flowers appear and pollination occurs. 4. Fruit Setting Stage Small fruits develop after pollination. 5. Fruit Development Stage Fruits grow in size and gain sweetness. 6. Maturity Stage Fruits become soft, juicy, and fully colored. 7. Harvesting Stage Fully ripe peaches are carefully picked. Each stage is important for high-quality peach production.' => '1. خوابیدگی کا مرحلہ
سردیوں میں درخت کی نشوونما عارضی طور پر رک جاتی ہے۔

2. شگوفے بننے کا مرحلہ
بہار کے آغاز میں نئی کونپلیں بننا شروع ہوتی ہیں۔

3. پھول آنے کا مرحلہ
گلابی پھول کھلتے ہیں اور زرپاشی ہوتی ہے۔

4. پھل بننے کا مرحلہ
زرپاشی کے بعد چھوٹے پھل بننا شروع ہوتے ہیں۔

5. پھل کی نشوونما کا مرحلہ
پھل جسامت میں بڑھتے ہیں اور ان میں مٹھاس پیدا ہوتی ہے۔

6. پکنے کا مرحلہ
آڑو نرم، رس دار اور مکمل رنگ اختیار کر لیتے ہیں۔

7. کٹائی کا مرحلہ
مکمل طور پر پکے ہوئے آڑو احتیاط سے توڑے جاتے ہیں۔

اعلیٰ معیار کے آڑو کی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and sprout roots and shoots. 2. Seedling Stage Young plants develop leaves and strong roots. 3. Tillering Stage Plants produce side shoots (tillers) which increase yield. 4. Stem Elongation Stage Plants grow taller and develop stronger stems. 5. Booting Stage Head (spike) develops inside the stem. 6. Flowering Stage Pollination occurs and grains begin forming. 7. Grain Filling Stage Grains fill with starch and nutrients. 8. Maturity Stage Plants turn golden yellow and are ready for harvest. Each stage is important for achieving high wheat production.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹتے ہیں اور جڑیں اور کونپلیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور مضبوط جڑیں بنتی ہیں۔

3. شاخیں بننے کا مرحلہ
پودے اضافی شاخیں پیدا کرتے ہیں جنہیں ٹلرز کہا جاتا ہے، اور یہ پیداوار بڑھانے میں مدد دیتی ہیں۔

4. تنے کے لمبا ہونے کا مرحلہ
پودے قد میں بڑھتے ہیں اور تنے مضبوط ہوتے ہیں۔

5. بالی بننے کا مرحلہ
تنے کے اندر بالی تشکیل پاتی ہے۔

6. پھول آنے کا مرحلہ
زرپاشی ہوتی ہے اور دانے بننا شروع ہوتے ہیں۔

7. دانہ بھرنے کا مرحلہ
دانے نشاستے اور غذائی اجزا سے بھرنے لگتے ہیں۔

8. پکنے کا مرحلہ
پودے سنہری زرد رنگ اختیار کرتے ہیں اور کٹائی کے لیے تیار ہو جاتے ہیں۔

گندم کی اچھی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and sprout roots and shoots. 2. Seedling Stage Young plants develop leaves and grow slowly. 3. Vegetative Stage Plant grows leaves and stem structure develops. 4. Flowering Stage Yellow flowers appear and pollination begins. 5. Pod Formation Stage Small pods develop after successful pollination. 6. Seed Development Stage Seeds fill inside pods and mature gradually. 7. Maturity Stage Pods turn yellow and seeds become hard. 8. Harvesting Stage Plants are cut and dried for seed collection. Each stage is important for good mustard oilseed production.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹتے ہیں اور جڑیں اور کونپلیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور ابتدائی نشوونما ہوتی ہے۔

3. نباتاتی نشوونما کا مرحلہ
پتے بڑھتے ہیں اور تنے کی ساخت مضبوط ہوتی ہے۔

4. پھول آنے کا مرحلہ
زرد پھول نمودار ہوتے ہیں اور زرپاشی شروع ہوتی ہے۔

5. پھلی بننے کا مرحلہ
کامیاب زرپاشی کے بعد چھوٹی پھلیاں بننا شروع ہوتی ہیں۔

6. بیج کی نشوونما کا مرحلہ
پھلیوں کے اندر بیج بھرنے اور بتدریج پکنے لگتے ہیں۔

7. پکنے کا مرحلہ
پھلیاں زرد ہو جاتی ہیں اور بیج سخت ہونے لگتے ہیں۔

8. کٹائی کا مرحلہ
پودے کاٹ کر خشک کیے جاتے ہیں تاکہ بیج حاصل کیے جا سکیں۔

اچھی سرسوں اور تیل دار بیج کی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and sprout roots and shoots. 2. Seedling Stage Young plants develop leaves and roots. 3. Tillering Stage Side shoots (tillers) develop and increase yield potential. 4. Stem Elongation Stage Plants grow taller and stronger stems form. 5. Heading Stage Spikes (ears) emerge from the stem. 6. Flowering Stage Pollination occurs and grain formation begins. 7. Grain Filling Stage Grains develop and fill with nutrients. 8. Maturity Stage Plants dry and turn golden, ready for harvest. Each stage is important for good barley production.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹتے ہیں اور جڑیں اور کونپلیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور جڑیں مضبوط ہوتی ہیں۔

3. شاخیں بننے کا مرحلہ
اضافی شاخیں بنتی ہیں جو پیداوار کی صلاحیت بڑھاتی ہیں۔

4. تنے کے لمبا ہونے کا مرحلہ
پودے قد میں بڑھتے ہیں اور مضبوط تنے تشکیل پاتے ہیں۔

5. بالی نکلنے کا مرحلہ
بالیاں تنے سے باہر نکلنا شروع ہوتی ہیں۔

6. پھول آنے کا مرحلہ
زرپاشی ہوتی ہے اور دانے بننا شروع ہوتے ہیں۔

7. دانہ بھرنے کا مرحلہ
دانے نشوونما پاتے ہیں اور غذائی اجزا سے بھرنے لگتے ہیں۔

8. پکنے کا مرحلہ
پودے خشک ہو کر سنہری رنگ اختیار کرتے ہیں اور کٹائی کے لیے تیار ہو جاتے ہیں۔

جو کی اچھی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds sprout and form young seedlings in the nursery. 2. Seedling Stage Seedlings grow strong with healthy leaves and roots. 3. Transplanting Stage Seedlings are moved to the main field for further growth. 4. Vegetative Stage Plant grows leaves rapidly and requires proper nutrients. 5. Leaf Expansion Stage Leaves become large and develop quality characteristics. 6. Maturity Stage Leaves turn yellow-green and reach harvest readiness. 7. Harvesting Stage Leaves are picked carefully for curing and processing. Each stage is important for producing high-quality tobacco leaves.' => '1. انکرن کا مرحلہ
بیج پھوٹتے ہیں اور نرسری میں ننھی پنیریاں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
پنیریاں مضبوط ہوتی ہیں اور صحت مند پتے اور جڑیں بناتی ہیں۔

3. منتقلی کا مرحلہ
پنیریاں مزید نشوونما کے لیے نرسری سے کھیت میں منتقل کی جاتی ہیں۔

4. نباتاتی نشوونما کا مرحلہ
پودے تیزی سے پتے بناتے ہیں اور مناسب غذائی اجزا درکار ہوتے ہیں۔

5. پتوں کے پھیلاؤ کا مرحلہ
پتے بڑے ہوتے ہیں اور ان میں مطلوبہ معیار کی خصوصیات پیدا ہوتی ہیں۔

6. پکنے کا مرحلہ
پتے زرد مائل سبز ہو جاتے ہیں اور کٹائی کے لیے تیار ہوتے ہیں۔

7. کٹائی کا مرحلہ
پتے احتیاط سے توڑے جاتے ہیں تاکہ انہیں خشک کرنے اور مزید تیاری کے لیے استعمال کیا جا سکے۔

اعلیٰ معیار کے تمباکو کے پتوں کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb water and sprout within 5–7 days under suitable conditions. 2. Seedling Stage Small green leaves appear and roots develop quickly. 3. Vegetative Stage Rapid leaf growth begins and plants become dense. 4. Leaf Development Stage Leaves become large and suitable for first harvest. 5. Harvesting Stage First cutting is done 25–40 days after sowing. 6. Regrowth Stage Plants regrow leaves for multiple harvests.' => '1. انکرن کا مرحلہ
بیج پانی جذب کرکے مناسب حالات میں پانچ سے سات دن کے اندر پھوٹتے ہیں۔

2. پنیری کا مرحلہ
چھوٹے سبز پتے نمودار ہوتے ہیں اور جڑیں تیزی سے بنتی ہیں۔

3. نباتاتی نشوونما کا مرحلہ
پتوں کی تیز نشوونما شروع ہوتی ہے اور پودے گھنے ہو جاتے ہیں۔

4. پتوں کی نشوونما کا مرحلہ
پتے بڑے ہوتے ہیں اور پہلی کٹائی کے لیے موزوں ہو جاتے ہیں۔

5. کٹائی کا مرحلہ
بوائی کے تقریباً پچیس سے چالیس دن بعد پہلی کٹائی کی جاتی ہے۔

6. دوبارہ نشوونما کا مرحلہ
پودے دوبارہ پتے بناتے ہیں، جس سے متعدد کٹائیاں ممکن ہوتی ہیں۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and begin sprouting. Proper temperature and moisture are necessary. 2. Seedling Stage Young plants develop leaves and roots in nursery conditions. 3. Transplanting Stage Seedlings are transferred to the main field with proper spacing. 4. Vegetative Growth Stage Plants produce large green leaves and strong root systems. 5. Head Formation Stage Leaves fold tightly and form compact cabbage heads. 6. Head Development Stage Heads increase in size and become firm and compact. 7. Maturity Stage Heads become fully developed and ready for harvesting. Each stage is important for obtaining high-quality cabbage yield.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹنا شروع کرتے ہیں اور مناسب درجہ حرارت اور نمی ضروری ہوتی ہے۔

2. پنیری کا مرحلہ
نوجوان پودوں میں نرسری کے دوران پتے اور جڑیں نشوونما پاتی ہیں۔

3. منتقلی کا مرحلہ
پنیریاں مناسب فاصلے کے ساتھ کھیت میں منتقل کی جاتی ہیں۔

4. نباتاتی نشوونما کا مرحلہ
پودے بڑے سبز پتے اور مضبوط جڑوں کا نظام بناتے ہیں۔

5. گوبھی کا گٹا بننے کا مرحلہ
پتے اندر کی طرف مڑ کر گوبھی کے گھنے گٹے کی شکل اختیار کرتے ہیں۔

6. گٹے کی نشوونما کا مرحلہ
گوبھی کے گٹے جسامت میں بڑھتے ہیں اور مضبوط اور گھنے ہو جاتے ہیں۔

7. پکنے کا مرحلہ
گوبھی کے گٹے مکمل طور پر تیار ہو کر کٹائی کے قابل ہو جاتے ہیں۔

اعلیٰ معیار کی بند گوبھی کی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Garlic cloves absorb moisture and begin sprouting. Cool temperature supports healthy germination. 2. Seedling Stage Young plants develop green leaves and roots become stronger. 3. Vegetative Growth Stage Plants grow rapidly and produce more leaves for bulb development. 4. Bulb Formation Stage Bulbs begin forming underground. Proper nutrients and irrigation are important. 5. Bulb Enlargement Stage Bulbs increase in size and gain weight. Healthy leaves support bulb growth. 6. Maturity Stage Leaves turn yellow and bulbs become fully mature. Crop becomes ready for harvesting. Each stage is important for obtaining high-quality garlic production.' => '1. انکرن کا مرحلہ
لہسن کی جویں نمی جذب کرکے پھوٹنا شروع کرتی ہیں۔ ٹھنڈا درجہ حرارت بہتر انکرن میں مدد دیتا ہے۔

2. پنیری کا مرحلہ
نوجوان پودوں پر سبز پتے نکلتے ہیں اور جڑیں مضبوط ہوتی ہیں۔

3. نباتاتی نشوونما کا مرحلہ
پودے تیزی سے بڑھتے ہیں اور زیادہ پتے بناتے ہیں جو گٹھے کی تشکیل میں مدد دیتے ہیں۔

4. گٹھا بننے کا مرحلہ
زمین کے اندر لہسن کے گٹھے بننا شروع ہوتے ہیں۔ مناسب غذائی اجزا اور آبپاشی ضروری ہیں۔

5. گٹھا بڑا ہونے کا مرحلہ
گٹھے جسامت اور وزن میں بڑھتے ہیں اور صحت مند پتے ان کی نشوونما میں مدد دیتے ہیں۔

6. پکنے کا مرحلہ
پتے زرد ہونے لگتے ہیں اور گٹھے مکمل طور پر پک جاتے ہیں، جس کے بعد فصل کٹائی کے لیے تیار ہو جاتی ہے۔

اعلیٰ معیار کے لہسن کی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and begin sprouting. Roots and shoots start developing. 2. Seedling Stage Young plants develop leaves and establish roots. 3. Vegetative Growth Stage Plants grow taller and produce more branches and leaves. 4. Flowering Stage Blue flowers bloom and pollination takes place. 5. Capsule Formation Stage Seed capsules begin developing after flowering. 6. Seed Maturity Stage Seeds become fully mature and plants dry out for harvesting. Each stage is important for obtaining high-quality linseed production.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹتے ہیں اور جڑیں اور کونپلیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور جڑیں قائم ہوتی ہیں۔

3. نباتاتی نشوونما کا مرحلہ
پودے قد میں بڑھتے ہیں اور مزید شاخیں اور پتے بناتے ہیں۔

4. پھول آنے کا مرحلہ
نیلے پھول کھلتے ہیں اور زرپاشی ہوتی ہے۔

5. کپسول بننے کا مرحلہ
پھول آنے کے بعد بیج والے کپسول بننا شروع ہوتے ہیں۔

6. بیج کے پکنے کا مرحلہ
بیج مکمل طور پر پک جاتے ہیں اور پودے کٹائی کے لیے خشک ہونے لگتے ہیں۔

اعلیٰ معیار کے السی کے بیج کی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb water and begin sprouting. Roots and shoots develop. 2. Seedling Stage Young plants establish roots and produce green leaves. 3. Vegetative Growth Stage Plants grow rapidly and stems become stronger. 4. Bud Formation Stage Flower buds begin developing at the top of the plant. 5. Flowering Stage Large yellow flowers bloom and pollination takes place. 6. Seed Filling Stage Seeds develop inside the flower head and accumulate oil. 7. Maturity Stage Flower heads turn yellow-brown and seeds become hard and dry. Each stage is important for obtaining high sunflower yield and oil quality.' => '1. انکرن کا مرحلہ
بیج پانی جذب کرکے پھوٹنا شروع کرتے ہیں اور جڑیں اور کونپلیں بنتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودے جڑیں قائم کرتے ہیں اور سبز پتے بناتے ہیں۔

3. نباتاتی نشوونما کا مرحلہ
پودے تیزی سے بڑھتے ہیں اور تنے مضبوط ہوتے جاتے ہیں۔

4. کلی بننے کا مرحلہ
پودے کی چوٹی پر پھول کی کلی بننا شروع ہوتی ہے۔

5. پھول آنے کا مرحلہ
بڑے زرد پھول کھلتے ہیں اور زرپاشی ہوتی ہے۔

6. بیج بھرنے کا مرحلہ
پھول کے گٹے میں بیج بنتے ہیں اور ان میں تیل جمع ہوتا ہے۔

7. پکنے کا مرحلہ
پھولوں کے گٹے زرد مائل بھورے ہو جاتے ہیں اور بیج سخت اور خشک ہو جاتے ہیں۔

اچھی سورج مکھی کی پیداوار اور تیل کے معیار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and begin sprouting. Small roots and shoots develop. 2. Seedling Stage Young plants establish roots and produce green leaves. 3. Vegetative Growth Stage Plants grow rapidly and develop more leaves and branches. 4. Spike Formation Stage Flower spikes begin developing on the plants. 5. Flowering Stage Small flowers bloom and pollination takes place. 6. Seed Development Stage Seeds begin forming inside the spikes and gradually mature. 7. Maturity Stage Plants turn yellow-brown and seeds become dry and ready for harvesting. Each stage is important for obtaining high Isabgol yield and quality.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹتے ہیں اور چھوٹی جڑیں اور کونپلیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودے جڑیں قائم کرتے ہیں اور سبز پتے بناتے ہیں۔

3. نباتاتی نشوونما کا مرحلہ
پودے تیزی سے بڑھتے ہیں اور مزید پتے اور شاخیں بناتے ہیں۔

4. بالی بننے کا مرحلہ
پودوں پر پھولوں کی بالیاں بننا شروع ہوتی ہیں۔

5. پھول آنے کا مرحلہ
چھوٹے پھول کھلتے ہیں اور زرپاشی ہوتی ہے۔

6. بیج کی نشوونما کا مرحلہ
بالیاں کے اندر بیج بننا شروع ہوتے ہیں اور بتدریج پکنے لگتے ہیں۔

7. پکنے کا مرحلہ
پودے زرد مائل بھورے ہو جاتے ہیں اور بیج خشک ہو کر کٹائی کے لیے تیار ہوتے ہیں۔

اسپغول کی اچھی پیداوار اور معیار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination and Nursery Stage Young plants develop in nurseries. Healthy roots and shoots begin growing. 2. Transplanting Stage Plants are transferred to orchards with proper spacing for healthy growth. 3. Vegetative Growth Stage Trees produce branches and leaves. Proper irrigation and nutrients are necessary. 4. Flowering Stage White fragrant flowers appear on trees. Good weather supports pollination. 5. Fruit Setting Stage Small fruits begin developing after pollination. 6. Fruit Development Stage Fruits increase in size and juice content. Nutrients and irrigation are important. 7. Maturity Stage Fruits develop full color, sweetness, and become ready for harvesting. Each stage is important for obtaining high orange yield and quality.' => '1. انکرن اور نرسری کا مرحلہ
نوجوان پودے نرسری میں نشوونما پاتے ہیں اور صحت مند جڑیں اور کونپلیں بناتے ہیں۔

2. منتقلی کا مرحلہ
پودوں کو مناسب فاصلے کے ساتھ باغات میں منتقل کیا جاتا ہے تاکہ صحت مند نشوونما ہو۔

3. نباتاتی نشوونما کا مرحلہ
درخت شاخیں اور پتے بناتے ہیں۔ مناسب آبپاشی اور غذائی اجزا ضروری ہیں۔

4. پھول آنے کا مرحلہ
درختوں پر خوشبودار سفید پھول نمودار ہوتے ہیں اور سازگار موسم زرپاشی میں مدد دیتا ہے۔

5. پھل بننے کا مرحلہ
زرپاشی کے بعد چھوٹے پھل بننا شروع ہوتے ہیں۔

6. پھل کی نشوونما کا مرحلہ
پھل جسامت اور رس کی مقدار میں بڑھتے ہیں۔ غذائی اجزا اور آبپاشی اہم ہیں۔

7. پکنے کا مرحلہ
پھل مکمل رنگ، مٹھاس اور مطلوبہ معیار حاصل کرکے کٹائی کے لیے تیار ہو جاتے ہیں۔

اچھی مالٹے کی پیداوار اور معیار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds begin sprouting and roots start developing under suitable moisture and temperature. 2. Seedling Stage Young plants develop leaves and establish roots. Proper care is important. 3. Vegetative Growth Stage Plants grow branches and leaves rapidly. Nutrients and irrigation are essential. 4. Flowering Stage Flowers begin to appear on healthy branches. Weather conditions affect pollination. 5. Fruit Setting Stage Small fruits start forming after pollination. Proper moisture is required. 6. Fruit Development Stage Fruits increase in size and juice content. Nutrients improve fruit quality. 7. Maturity Stage Fruits become fully mature with proper color and taste. Crop becomes ready for harvesting. Each stage is important for obtaining high lemon yield and quality fruits.' => '1. انکرن کا مرحلہ
موزوں نمی اور درجہ حرارت میں بیج پھوٹتے ہیں اور جڑیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور جڑیں قائم ہوتی ہیں۔ مناسب دیکھ بھال ضروری ہے۔

3. نباتاتی نشوونما کا مرحلہ
پودے شاخیں اور پتے تیزی سے بناتے ہیں۔ غذائی اجزا اور آبپاشی ضروری ہیں۔

4. پھول آنے کا مرحلہ
صحت مند شاخوں پر پھول نمودار ہوتے ہیں اور موسمی حالات زرپاشی پر اثر انداز ہوتے ہیں۔

5. پھل بننے کا مرحلہ
زرپاشی کے بعد چھوٹے پھل بننا شروع ہوتے ہیں۔ مناسب نمی ضروری ہے۔

6. پھل کی نشوونما کا مرحلہ
پھل جسامت اور رس کی مقدار میں بڑھتے ہیں۔ غذائی اجزا معیار بہتر بناتے ہیں۔

7. پکنے کا مرحلہ
پھل مناسب رنگ اور ذائقہ اختیار کرکے مکمل طور پر پک جاتے ہیں اور کٹائی کے لیے تیار ہوتے ہیں۔

اچھی لیموں کی پیداوار اور معیاری پھل کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds begin sprouting and roots start developing under proper moisture and temperature. 2. Seedling Stage Young plants develop leaves and establish roots. Proper care is essential. 3. Vegetative Growth Stage Plants grow branches and leaves rapidly. Nutrients and irrigation are important. 4. Flowering Stage Flowers begin to appear on mature branches. Pollination takes place during this stage. 5. Fruit Setting Stage Small fruits begin developing after pollination. Adequate water is necessary. 6. Fruit Development Stage Fruits increase in size and juice content. Nutrients improve quality and taste. 7. Maturity Stage Fruits become fully mature with proper color and flavor. Crop becomes ready for harvesting. Each stage is important for obtaining high grapefruit yield and quality fruits.' => '1. انکرن کا مرحلہ
موزوں نمی اور درجہ حرارت میں بیج پھوٹتے ہیں اور جڑیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور جڑیں قائم ہوتی ہیں۔ مناسب دیکھ بھال ضروری ہے۔

3. نباتاتی نشوونما کا مرحلہ
پودے شاخیں اور پتے تیزی سے بناتے ہیں۔ غذائی اجزا اور آبپاشی اہم ہیں۔

4. پھول آنے کا مرحلہ
پختہ شاخوں پر پھول نمودار ہوتے ہیں اور اس مرحلے میں زرپاشی ہوتی ہے۔

5. پھل بننے کا مرحلہ
زرپاشی کے بعد چھوٹے پھل بننا شروع ہوتے ہیں اور مناسب پانی ضروری ہے۔

6. پھل کی نشوونما کا مرحلہ
پھل جسامت اور رس کی مقدار میں بڑھتے ہیں۔ غذائی اجزا معیار اور ذائقہ بہتر بناتے ہیں۔

7. پکنے کا مرحلہ
پھل مناسب رنگ اور ذائقہ اختیار کرکے مکمل طور پر پک جاتے ہیں اور کٹائی کے لیے تیار ہوتے ہیں۔

اچھی چکوترے کی پیداوار اور معیاری پھل کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds begin sprouting and roots start developing under suitable moisture and temperature. 2. Seedling Stage Young plants develop leaves and establish roots. Proper care is important. 3. Vegetative Growth Stage Plants grow branches and leaves rapidly. Nutrients and irrigation are necessary. 4. Flowering Stage Flowers begin to appear on mature branches. Pollination takes place during this stage. 5. Fruit Setting Stage Small fruits begin developing after pollination. Proper irrigation is important. 6. Fruit Development Stage Fruits increase in size and juice content. Nutrients improve fruit quality. 7. Maturity Stage Fruits become fully mature with proper color, taste, and sweetness. Crop becomes ready for harvesting. Each stage is important for obtaining high sweet lime yield and quality fruits.' => '1. انکرن کا مرحلہ
موزوں نمی اور درجہ حرارت میں بیج پھوٹتے ہیں اور جڑیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور جڑیں قائم ہوتی ہیں۔ مناسب دیکھ بھال ضروری ہے۔

3. نباتاتی نشوونما کا مرحلہ
پودے شاخیں اور پتے تیزی سے بناتے ہیں۔ غذائی اجزا اور آبپاشی ضروری ہیں۔

4. پھول آنے کا مرحلہ
پختہ شاخوں پر پھول نمودار ہوتے ہیں اور زرپاشی ہوتی ہے۔

5. پھل بننے کا مرحلہ
زرپاشی کے بعد چھوٹے پھل بننا شروع ہوتے ہیں اور مناسب آبپاشی ضروری ہے۔

6. پھل کی نشوونما کا مرحلہ
پھل جسامت اور رس کی مقدار میں بڑھتے ہیں۔ غذائی اجزا پھل کا معیار بہتر بناتے ہیں۔

7. پکنے کا مرحلہ
پھل مناسب رنگ، ذائقہ اور مٹھاس حاصل کرکے کٹائی کے لیے تیار ہوتے ہیں۔

اچھی موسمی کی پیداوار اور معیاری پھل کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and begin sprouting within 7–10 days. 2. Seedling Stage Small plants develop leaves and roots strengthen. 3. Vegetative Stage Plant grows taller with more branches and leaves. 4. Flowering Stage Small yellow flowers appear on plant umbels. 5. Seed Formation Stage Seeds start developing and maturing. 6. Maturity Stage Seeds turn greenish-yellow and become ready for harvesting. 7. Harvesting Stage Plants are cut and dried before seed extraction. Each stage is important for producing high-quality fennel seeds.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے سات سے دس دن میں پھوٹنا شروع کرتے ہیں۔

2. پنیری کا مرحلہ
چھوٹے پودوں پر پتے نکلتے ہیں اور جڑیں مضبوط ہوتی ہیں۔

3. نباتاتی نشوونما کا مرحلہ
پودا قد میں بڑھتا ہے اور مزید شاخیں اور پتے بناتا ہے۔

4. پھول آنے کا مرحلہ
پودے کی پھول دار چھتریوں پر چھوٹے زرد پھول نمودار ہوتے ہیں۔

5. بیج بننے کا مرحلہ
بیج بننا اور بتدریج پکنا شروع ہوتے ہیں۔

6. پکنے کا مرحلہ
بیج سبزی مائل زرد رنگ اختیار کرتے ہیں اور کٹائی کے لیے تیار ہوتے ہیں۔

7. کٹائی کا مرحلہ
پودے کاٹ کر خشک کیے جاتے ہیں، پھر بیج حاصل کیے جاتے ہیں۔

اعلیٰ معیار کے سونف کے بیج کی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb water and begin sprouting. Roots and shoots start developing. Warm temperature and moisture are important. 2. Seedling Stage Young seedlings grow in the nursery. Green leaves appear and roots become stronger. 3. Transplanting Stage Seedlings are moved from nursery to the field. Proper spacing helps healthy growth. 4. Tillering Stage Plants produce side shoots called tillers. More tillers increase grain production. 5. Stem Elongation Stage Plants grow taller and leaves expand. Nutrients and irrigation are important. 6. Panicle Initiation Stage Panicle formation starts inside the stem. Proper care is required. 7. Flowering Stage Flowers open and pollination takes place. Weather conditions greatly affect yield. 8. Grain Filling Stage Grains fill with starch and nutrients. Water availability is very important. 9. Maturity Stage Plants turn golden yellow and grains become hard. Crop becomes ready for harvesting. Each stage is important for obtaining high rice yield.' => '1. انکرن کا مرحلہ
بیج پانی جذب کرکے پھوٹتے ہیں اور جڑیں اور کونپلیں بننا شروع ہوتی ہیں۔ گرم درجہ حرارت اور مناسب نمی ضروری ہے۔

2. پنیری کا مرحلہ
نوجوان پنیریاں نرسری میں بڑھتی ہیں، سبز پتے نکلتے ہیں اور جڑیں مضبوط ہوتی ہیں۔

3. منتقلی کا مرحلہ
پنیریاں نرسری سے کھیت میں منتقل کی جاتی ہیں۔ مناسب فاصلہ صحت مند نشوونما میں مدد دیتا ہے۔

4. شاخیں بننے کا مرحلہ
پودے اضافی شاخیں بناتے ہیں جنہیں ٹلرز کہا جاتا ہے۔ زیادہ شاخیں زیادہ دانے بننے میں مدد دیتی ہیں۔

5. تنے کے لمبا ہونے کا مرحلہ
پودے قد میں بڑھتے ہیں اور پتے پھیلتے ہیں۔ غذائی اجزا اور آبپاشی اہم ہیں۔

6. خوشہ بننے کا مرحلہ
تنے کے اندر خوشہ بننا شروع ہوتا ہے اور مناسب نگہداشت ضروری ہے۔

7. پھول آنے کا مرحلہ
پھول کھلتے ہیں اور زرپاشی ہوتی ہے۔ موسمی حالات پیداوار پر نمایاں اثر ڈالتے ہیں۔

8. دانہ بھرنے کا مرحلہ
دانے نشاستے اور غذائی اجزا سے بھرنے لگتے ہیں۔ پانی کی دستیابی بہت اہم ہے۔

9. پکنے کا مرحلہ
پودے سنہری زرد رنگ اختیار کرتے ہیں اور دانے سخت ہو جاتے ہیں، جس سے فصل کٹائی کے لیے تیار ہو جاتی ہے۔

چاول کی اچھی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seed absorbs moisture and sprouts. Roots and shoots begin to develop. 2. Seedling Stage Young plant grows leaves and develops initial structure. 3. Vegetative Stage Plant grows rapidly, producing stems and leaves. 4. Square Formation Stage Flower buds (squares) start forming on the plant. 5. Flowering Stage Flowers bloom and pollination occurs. 6. Boll Development Stage Cotton bolls start forming and expanding. 7. Boll Opening Stage Bolls mature and open, revealing cotton fiber. 8. Harvesting Stage Cotton is picked manually or mechanically. Each stage is essential for high-quality cotton fiber production.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹتے ہیں اور جڑیں اور کونپلیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودے پتے بناتے ہیں اور ابتدائی ساخت مضبوط ہوتی ہے۔

3. نباتاتی نشوونما کا مرحلہ
پودے تیزی سے بڑھتے ہیں اور تنے اور پتے بناتے ہیں۔

4. پھول کی کلی بننے کا مرحلہ
پودے پر پھول کی کلیاں بننا شروع ہوتی ہیں۔

5. پھول آنے کا مرحلہ
پھول کھلتے ہیں اور زرپاشی ہوتی ہے۔

6. ٹینڈے کی نشوونما کا مرحلہ
کپاس کے ٹینڈے بننا اور جسامت میں بڑھنا شروع ہوتے ہیں۔

7. ٹینڈے کھلنے کا مرحلہ
ٹینڈے پک کر کھلتے ہیں اور کپاس کے ریشے ظاہر ہوتے ہیں۔

8. کٹائی کا مرحلہ
کپاس ہاتھ سے یا مشینی طریقے سے چنی جاتی ہے۔

اعلیٰ معیار کے کپاس کے ریشے کی پیداوار کے لیے ہر مرحلہ ضروری ہے۔',
            'growing_stages|1. Germination Stage Setts sprout and roots begin to develop. Warm soil and moisture are essential. 2. Tillering Stage Multiple shoots emerge from the base of the plant. 3. Grand Growth Stage Rapid stem elongation and leaf development occur. Water and nutrients are critical. 4. Maturation Stage Sugar accumulation increases in canes and growth slows down. 5. Ripening Stage Canes become mature, juicy, and ready for harvest. Each stage is important for maximizing sugarcane yield and sugar content.' => '1. انکرن کا مرحلہ
گنے کے ٹکڑے پھوٹتے ہیں اور جڑیں بننا شروع ہوتی ہیں۔ گرم مٹی اور مناسب نمی ضروری ہے۔

2. شاخیں بننے کا مرحلہ
پودے کی بنیاد سے متعدد نئی شاخیں نکلتی ہیں۔

3. تیز نشوونما کا مرحلہ
تنے تیزی سے لمبے ہوتے ہیں اور پتے بڑھتے ہیں۔ پانی اور غذائی اجزا اس مرحلے میں بہت اہم ہیں۔

4. پکنے کا مرحلہ
گنے میں شکر جمع ہونے کی رفتار بڑھتی ہے اور نشوونما سست ہو جاتی ہے۔

5. مکمل پکنے کا مرحلہ
گنے پختہ، رس دار اور کٹائی کے لیے تیار ہو جاتے ہیں۔

زیادہ پیداوار اور شکر کی بہتر مقدار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seed absorbs moisture and sprouts. Roots and shoots develop quickly in warm soil. 2. Seedling Stage Young plant develops leaves and strong roots. 3. Vegetative Stage Rapid plant growth with strong stem and leaf development. 4. Tasseling Stage Male flowers (tassels) appear at the top of the plant. 5. Silking Stage Female flowers (silks) emerge from the cob. 6. Pollination Stage Pollen transfer occurs, leading to kernel formation. 7. Grain Filling Stage Kernels fill with starch and nutrients. 8. Maturity Stage Cobs become dry and ready for harvesting. Each stage is important for achieving high maize yield.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹتے ہیں اور گرم مٹی میں جڑیں اور کونپلیں تیزی سے بناتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور مضبوط جڑیں بنتی ہیں۔

3. نباتاتی نشوونما کا مرحلہ
پودے تیزی سے بڑھتے ہیں اور مضبوط تنا اور پتے بناتے ہیں۔

4. نر پھول بننے کا مرحلہ
پودے کی چوٹی پر نر پھولوں کے خوشے نمودار ہوتے ہیں۔

5. مادہ پھول کے ریشے نکلنے کا مرحلہ
بھٹے سے مادہ پھول کے ریشے باہر نکلتے ہیں۔

6. زرپاشی کا مرحلہ
زرِ گل منتقل ہوتا ہے، جس کے نتیجے میں دانے بننا شروع ہوتے ہیں۔

7. دانہ بھرنے کا مرحلہ
دانے نشاستے اور غذائی اجزا سے بھرنے لگتے ہیں۔

8. پکنے کا مرحلہ
بھٹے خشک ہو جاتے ہیں اور کٹائی کے لیے تیار ہوتے ہیں۔

مکئی کی اچھی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and sprout. Roots and shoots develop quickly. 2. Seedling Stage Young plants develop leaves and establish root systems. 3. Vegetative Stage Rapid growth of stems and leaves occurs. 4. Booting Stage Flower head develops inside the stem. 5. Flowering Stage Pollination occurs and grain formation begins. 6. Grain Filling Stage Grains develop and fill with nutrients. 7. Maturity Stage Plant dries and grains become hard and ready for harvest. Each stage is important for achieving good sorghum yield.' => '1. انکرن کا مرحلہ
بیج نمی جذب کرکے پھوٹتے ہیں اور جڑیں اور کونپلیں تیزی سے بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور جڑوں کا مضبوط نظام قائم ہوتا ہے۔

3. نباتاتی نشوونما کا مرحلہ
تنے اور پتے تیزی سے بڑھتے ہیں۔

4. بالی بننے کا مرحلہ
تنے کے اندر پھولوں کی بالی بننا شروع ہوتی ہے۔

5. پھول آنے کا مرحلہ
زرپاشی ہوتی ہے اور دانے بننا شروع ہوتے ہیں۔

6. دانہ بھرنے کا مرحلہ
دانے نشوونما پاتے ہیں اور غذائی اجزا سے بھرنے لگتے ہیں۔

7. پکنے کا مرحلہ
پودے خشک ہو جاتے ہیں اور دانے سخت ہو کر کٹائی کے لیے تیار ہوتے ہیں۔

جوار کی اچھی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb moisture and sprout quickly in warm soil. 2. Seedling Stage Young plants develop roots and leaves. 3. Tillering Stage Plant produces multiple shoots. 4. Stem Elongation Stage Plant grows taller and stronger. 5. Flowering Stage Flower heads develop and pollination occurs. 6. Grain Filling Stage Grains develop and mature. 7. Maturity Stage Plant dries and becomes ready for harvest. Each stage contributes to final yield and fodder quality.' => '1. انکرن کا مرحلہ
بیج گرم مٹی میں نمی جذب کرکے تیزی سے پھوٹتے ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں میں جڑیں اور پتے نشوونما پاتے ہیں۔

3. شاخیں بننے کا مرحلہ
پودا متعدد نئی شاخیں پیدا کرتا ہے۔

4. تنے کے لمبا ہونے کا مرحلہ
پودا قد میں بڑھتا ہے اور تنا مضبوط ہوتا جاتا ہے۔

5. پھول آنے کا مرحلہ
پھولوں کی بالیاں بنتی ہیں اور زرپاشی ہوتی ہے۔

6. دانہ بھرنے کا مرحلہ
دانے بنتے اور پکتے ہیں۔

7. پکنے کا مرحلہ
پودا خشک ہو جاتا ہے اور کٹائی کے لیے تیار ہوتا ہے۔

ہر مرحلہ آخری پیداوار اور چارے کے معیار میں اہم کردار ادا کرتا ہے۔',
            'growing_stages|1. Germination Stage Seeds sprout and roots develop in warm soil. 2. Seedling Stage Young plants develop vines and leaves. 3. Vine Growth Stage Rapid vine spreading occurs with strong leaf development. 4. Flowering Stage Male and female flowers appear on the plant. 5. Fruit Formation Stage Fruits begin to develop after pollination. 6. Fruit Development Stage Fruits grow in size and mature. 7. Harvesting Stage Fruits are picked when tender and green. Each stage is important for achieving good vegetable yield.' => '1. انکرن کا مرحلہ
بیج گرم مٹی میں پھوٹتے ہیں اور جڑیں بننا شروع ہوتی ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر بیلیں اور پتے بننا شروع ہوتے ہیں۔

3. بیلوں کی نشوونما کا مرحلہ
بیلیں تیزی سے پھیلتی ہیں اور پتے مضبوطی سے نشوونما پاتے ہیں۔

4. پھول آنے کا مرحلہ
پودے پر نر اور مادہ پھول نمودار ہوتے ہیں۔

5. پھل بننے کا مرحلہ
زرپاشی کے بعد پھل بننا شروع ہوتے ہیں۔

6. پھل کی نشوونما کا مرحلہ
پھل جسامت میں بڑھتے اور پکنے لگتے ہیں۔

7. کٹائی کا مرحلہ
نرم اور سبز پھل باقاعدگی سے توڑے جاتے ہیں۔

سبزی کی اچھی پیداوار کے لیے ہر مرحلہ اہم ہے۔',
            'growing_stages|1. Germination Stage Seeds absorb water and sprout within a few days in warm soil. 2. Seedling Stage Young plants develop leaves and roots. 3. Vegetative Growth Stage Rapid growth of stems and leaves occurs. 4. Flowering Stage Flowers appear on the plant and pollination begins. 5. Pod Formation Stage Young okra pods start developing. 6. Harvesting Stage Tender pods are picked regularly for best quality. Each stage is important for achieving high okra yield.' => '1. انکرن کا مرحلہ
بیج پانی جذب کرکے گرم مٹی میں چند دن کے اندر پھوٹتے ہیں۔

2. پنیری کا مرحلہ
نوجوان پودوں پر پتے نکلتے ہیں اور جڑیں نشوونما پاتی ہیں۔

3. نباتاتی نشوونما کا مرحلہ
تنے اور پتے تیزی سے بڑھتے ہیں۔

4. پھول آنے کا مرحلہ
پودے پر پھول نمودار ہوتے ہیں اور زرپاشی شروع ہوتی ہے۔

5. پھلی بننے کا مرحلہ
نرم بھنڈی کی پھلیاں بننا شروع ہوتی ہیں۔

6. کٹائی کا مرحلہ
بہترین معیار برقرار رکھنے کے لیے نرم پھلیاں باقاعدگی سے توڑی جاتی ہیں۔

زیادہ پیداوار حاصل کرنے کے لیے ہر مرحلہ اہم ہے۔'
        ];
        $cropTypeExact = [
            'types_of_crop|Grain Pearl Millet: Used for human food Fodder Pearl Millet: Used for animal feed Hybrid Millet: High yield improved varieties Traditional Millet: Local drought-resistant types' => 'اناج والا باجرا: انسانی خوراک کے لیے استعمال ہوتا ہے
چارہ والا باجرا: مویشیوں کے چارے کے لیے استعمال ہوتا ہے
ہائبرڈ باجرا: زیادہ پیداوار دینے والی بہتر اقسام
روایتی باجرا: مقامی اور خشک سالی برداشت کرنے والی اقسام',
        ];
        $exactKey = $field.'|'.$sourceKey;
        $pestRemainingExact = [
            'recommended_control|Apply Chlorothalonil or Copper-based fungicide.' => 'کلوروتھالونل یا کاپر پر مبنی پھپھوندی کش دوا استعمال کریں۔',
            'recommended_control|Apply Abamectin or other miticides.' => 'ایبامیکٹن یا دیگر مائٹ کش ادویات استعمال کریں۔',
            'recommended_control|Apply Sulphur or Penconazole.' => 'گندھک یا پینکونازول استعمال کریں۔',
            'recommended_control|Apply mineral oil spray or Imidacloprid.' => 'منرل آئل کا اسپرے یا امیڈاکلوپرڈ استعمال کریں۔',
            'how_it_occurs|Caused by the fungus Magnaporthe oryzae under humid and rainy conditions.' => 'مرطوب اور بارش والے حالات میں مگناپورٹے اوریزے نامی پھپھوندی اس بیماری کا سبب بنتی ہے۔',
            'name|Tobacco Mosaic Virus (TMV)' => 'تمباکو موزیک وائرس (ٹی ایم وی)',
            'name|Graphiola Leaf Spot' => 'گرافیولا پتوں کے دھبوں کی بیماری',
            'name|Rice Stem Borer' => 'چاول کا تنا چھیدنے والا کیڑا',
            'name|Verticillium Wilt' => 'ورٹیسیلیم مرجھاؤ',
            'name|Early Shoot Borer' => 'ابتدائی شگوفہ چھیدنے والی سنڈی',
            'name|Top Borer' => 'چوٹی میں سوراخ کرنے والی سنڈی',
            'name|Maize Stem Borer' => 'مکئی کا تنا چھیدنے والی سنڈی',
            'name|Sorghum Stem Borer' => 'جوار کا تنا چھیدنے والی سنڈی',
            'name|Shoot Fly' => 'شگوفے کی مکھی',
            'name|Stem Borer' => 'تنے میں سوراخ کرنے والی سنڈی',
            'recommended_control|Apply Sulphur or Penconazole.' => 'گندھک یا پینکونازول استعمال کریں۔',
            'recommended_control|Apply Sulphur or Mancozeb spray.' => 'گندھک یا مینکوزیب کا اسپرے استعمال کریں۔',
            'recommended_control|Apply Chlorantraniliprole or Cartap Hydrochloride according to agricultural recommendations.' => 'کلورانٹرانیلی پرول یا کارٹاپ ہائیڈروکلورائیڈ زرعی سفارشات کے مطابق استعمال کریں۔',
            'how_it_occurs|Caused by the fungus Magnaporthe oryzae under humid and rainy conditions.' => 'مرطوب اور بارش والے حالات میں مگناپورٹے اوریزے نامی پھپھوندی اس بیماری کا سبب بنتی ہے۔',
            'recommended_control|Apply Spinosad or Indoxacarb according to recommendations.' => 'اسپائنو سیڈ یا انڈوکسا کارب تجویز کردہ طریقے کے مطابق استعمال کریں۔',
            'recommended_control|Apply Chlorpyrifos or other recommended termiticides.' => 'کلورپائریفوس یا دیگر تجویز کردہ دیمک کش ادویات استعمال کریں۔',
            'recommended_control|Apply Carbendazim or suitable fungicides.' => 'کاربینڈازم یا موزوں پھپھوندی کش ادویات استعمال کریں۔',
            'recommended_control|Apply Chlorpyrifos or recommended termiticides.' => 'کلورپائریفوس یا تجویز کردہ دیمک کش ادویات استعمال کریں۔',
            'recommended_control|Apply Propiconazole or other suitable fungicides.' => 'پروپیکونازول یا دیگر موزوں پھپھوندی کش ادویات استعمال کریں۔',
            'recommended_control|Apply Abamectin or suitable insecticides.' => 'ایبامیکٹن یا موزوں کیڑے مار ادویات استعمال کریں۔',
            'recommended_control|Apply Spinosad or recommended fruit fly bait sprays.' => 'اسپائنو سیڈ یا پھل کی مکھی کے لیے تجویز کردہ چارہ نما اسپرے استعمال کریں۔',
            'recommended_control|Apply Spinosad bait sprays or recommended fruit fly control measures.' => 'اسپائنو سیڈ پر مبنی چارہ نما اسپرے یا پھل کی مکھی کے تدارک کے تجویز کردہ اقدامات اختیار کریں۔',
        ];
        if (isset($pestRemainingExact[$exactKey])) return $this->cleanPestUrdu($pestRemainingExact[$exactKey]);
        if (isset($pestExact[$exactKey])) return $this->cleanPestUrdu($pestExact[$exactKey]);
        if (isset($fieldExact[$exactKey])) return $fieldExact[$exactKey];
        if ($field === 'growing_stages' && isset($cropStageExact[$exactKey])) return $cropStageExact[$exactKey];
        if ($field === 'types_of_crop' && isset($cropTypeExact[$exactKey])) return $cropTypeExact[$exactKey];

        if ($field === 'introduction') {
            $cropIntro = null;
            foreach (['Bitter Gourd','Mung','Turmeric','Cucumber','Eggplant(Brinjal)','Chilli','Soybean','Arum','Ginger','Banana','Mango','Lychee','Groundnut','Watermelon','Melon','Guava','Papaya','Peach','Wheat','Mustard','Barley','Rapeseed','Canola','Tobacco','Lucerne','Fenugreek(Methi)','Potato','Spinach','Pea','Carrot','Onion','CauliFlower','Cabbage','Radish','Bean','Lettuce','Garlic','Beetroot','Turnip','Linseed','Coriander','SunFlower','Isabgol','Broccoli','Orange','Kinnow','Lemon','GrapeFruit','Sweet Lime','Pomegranate','Apple','Date','Mint','Fennel','Rice','Cotton','Sugarcane','Maize (Corn)','Sorghum','Pearl Millet','Bottle Gourd','Okra','Tomato','Pumpkin'] as $cropName) {
                $cropIntro = UrduCropIntroductionService::translate($cropName, $text);
                if ($cropIntro !== null) return $cropIntro;
            }
        }

        if ($field === 'name' || $field === 'crop_name') {
            if ($field === 'name') {
                $semanticName = $this->semanticPestName(trim($text));
                if ($semanticName !== trim($text)) return $semanticName;
            }
            $known = $this->fixAgricultureKnownNames(trim($text));
            if (!$this->hasEnglish($known)) return $known;
            $transliterated = $this->transliterate(trim($text));
            return $this->hasEnglish($transliterated) ? 'زرعی فصل' : $transliterated;
        }

        if (in_array($field, ['how_it_occurs','symptoms','protection','recommended_control'], true)) {
            $semanticPest = $this->semanticPestSentence($sourceKey, $field);
            if ($semanticPest !== null) return $this->cleanPestUrdu($semanticPest);
        }

        $out = $this->translateAgriculture($text);
        if (strpos($text, "\n") !== false && ($this->hasEnglish($out) || $this->hasPhoneticGarbage($out))) {
            $lines = preg_split('/\R/u', $text);
            $translated = [];
            foreach ($lines as $line) {
                $line = trim($line);
                if ($line === '') {
                    $translated[] = '';
                    continue;
                }
                $lineOut = $this->translateAgriculture($line);
                if ($this->hasEnglish($lineOut) || $this->hasPhoneticGarbage($lineOut)) {
                    $lineOut = $this->translateAgricultureStructuredSentence($line);
                }
                if ($this->hasEnglish($lineOut) || $this->hasPhoneticGarbage($lineOut)) {
                    $lineOut = $this->translateAgricultureGenericSentence($line);
                }
                $translated[] = $lineOut;
            }
            $out = implode("\n", $translated);
        }
        $out = $this->semanticAgricultureCleanup($out, $field, $text);
        if (!$this->hasEnglish($out) && !$this->hasPhoneticGarbage($out)) {
            return $out;
        }

        $name = $this->fixAgricultureKnownNames(trim($text));
        if ($field === 'name' || $field === 'crop_name') {
            $known = $this->fixAgricultureKnownNames(trim($text));
            if (!$this->hasEnglish($known)) return $known;
            $transliterated = $this->transliterate(trim($text));
            return $this->hasEnglish($transliterated) ? 'زرعی فصل' : $transliterated;
        }

        if ($field === 'type') {
            $type = strtolower(trim($text));
            return match (true) {
                str_contains($type, 'insect') => 'حشری کیڑا',
                str_contains($type, 'fung') => 'فنگسی بیماری',
                str_contains($type, 'bacter') => 'بیکٹیریائی بیماری',
                str_contains($type, 'viral') || str_contains($type, 'virus') => 'وائرسی بیماری',
                default => 'زرعی مسئلہ',
            };
        }

        return $out;
    }

    private function semanticPestName(string $name): string
    {
        $exact = [
            'Pod Borer' => 'پھلی میں سوراخ کرنے والی سنڈی',
            'Shoot Borer' => 'شگوفے میں سوراخ کرنے والی سنڈی',
            'Fruit Borer' => 'پھل میں سوراخ کرنے والی سنڈی',
            'Fruit Fly' => 'پھل کی مکھی',
            'Peach Fruit Fly' => 'آڑو کی پھل کی مکھی',
            'Fusarium Wilt' => 'فوزیریم مرجھاؤ',
            'Alternaria Leaf Spot' => 'الٹرناریا پتوں کے دھبوں کی بیماری',
            'Tobacco Mosaic Virus (TMV)' => 'تمباکو موزیک وائرس (ٹی ایم وی)',
            'Beet Mosaic Virus' => 'چقندر کا موزیک وائرس',
            'Cabbage Root Fly' => 'بند گوبھی کی جڑ کی مکھی',
            'Cercospora Leaf Spot' => 'سرکوسپورا پتوں کے دھبوں کی بیماری',
            'Mungbean Yellow Mosaic Virus' => 'مونگ بین کا زرد موزیک وائرس',
            'Bacterial Leaf Spot' => 'بیکٹیریائی پتوں کے دھبوں کی بیماری',
            'Rhizome Scale' => 'زیرِ زمین تنوں پر حملہ کرنے والا اسکیل کیڑا',
            'Leaf Roller' => 'پتے لپیٹنے والا کیڑا',
            'White Grub' => 'سفید سنڈی',
            'Rhizome Rot' => 'زیرِ زمین تنوں کی سڑن',
            'Bacterial Wilt' => 'بیکٹیریائی مرجھاؤ',
            'Mosaic Disease' => 'موزیک بیماری',
            'Cucumber Beetle' => 'کھیرا بھونرا',
            'Mosaic Virus' => 'موزیک وائرس',
            'Shoot and Fruit Borer' => 'شگوفے اور پھل میں سوراخ کرنے والی سنڈی',
            'Phomopsis Blight' => 'فوموپسس جھلساؤ کی بیماری',
            'Stem Fly' => 'تنے کی مکھی',
            'Girdle Beetle' => 'تنے کو گھیرنے والا بھونرا',
            'Soybean Rust' => 'سویا بین کی زنگ کی بیماری',
            'Bacterial Blight' => 'بیکٹیریائی جھلساؤ',
            'Taro Leaf Beetle' => 'اروی کے پتوں کا بھونرا',
            'Spider Mites' => 'مکڑی نما کیڑے',
            'Taro Leaf Blight' => 'اروی کے پتوں کی جھلساؤ کی بیماری',
            'Soft Rot' => 'نرم سڑن',
            'Dasheen Mosaic Virus' => 'ڈیشین موزیک وائرس',
            'Yellows Disease' => 'زردی کی بیماری',
            'Banana Weevil' => 'کیلے کا سونڈ والا کیڑا',
            'Panama Wilt' => 'پاناما مرجھاؤ',
            'Sigatoka Leaf Spot' => 'سیگاٹوکا پتوں کے دھبوں کی بیماری',
            'Bunchy Top Virus' => 'گچھا نما چوٹی کا وائرس',
            'Mango Hopper' => 'آم کا تیلہ',
            'Mealybug' => 'سفوفی کیڑا',
            'Bacterial Canker' => 'بیکٹیریائی سرطان نما بیماری',
            'Mango Malformation' => 'آم کی بدشکلی کی بیماری',
            'Lychee Fruit Borer' => 'لیچی کے پھل میں سوراخ کرنے والی سنڈی',
            'Fruit Drop' => 'پھل جھڑنے کی بیماری',
            'Tikka Leaf Spot' => 'ٹِکا پتوں کے دھبوں کی بیماری',
            'Collar Rot' => 'تنے کے نچلے حصے کی سڑن',
            'Peanut Bud Necrosis Virus' => 'مونگ پھلی کی کلیوں کا نیکروسس وائرس',
            'Red Pumpkin Beetle' => 'سرخ کدو بھونرا',
            'Melon Fruit Fly' => 'خربوزے کی پھل کی مکھی',
            'Red Spider Mite' => 'سرخ مکڑی نما کیڑا',
            'Scale Insect' => 'اسکیل کیڑا',
            'Wilt Disease' => 'مرجھاؤ کی بیماری',
            'Fruit Rot' => 'پھل کی سڑن',
            'Guava Moth' => 'امرود کا پروانہ',
            'Papaya Fruit Fly' => 'پپیتے کی پھل کی مکھی',
            'Foot Rot' => 'تنے کے نچلے حصے کی سڑن',
            'Papaya Ring Spot Virus' => 'پپیتے کا حلقہ نما دھبوں والا وائرس',
            'Leaf Curl Virus' => 'پتوں کے مڑنے کا وائرس',
            'Peach Leaf Curl' => 'آڑو کے پتوں کے مڑنے کی بیماری',
            'Brown Rot' => 'بھوری سڑن',
            'Shot Hole Disease' => 'سوراخ نما دھبوں کی بیماری',
            'Wheat Aphid' => 'گندم کا تیلا',
            'Armyworm' => 'فوجی سنڈی',
            'Leaf Rust' => 'پتوں کی زنگ کی بیماری',
            'Stripe Rust' => 'دھاری دار زنگ کی بیماری',
            'Stem Rust' => 'تنے کی زنگ کی بیماری',
            'Loose Smut' => 'کھلی کنگی کی بیماری',
            'Karnal Bunt' => 'کرنال بنٹ بیماری',
            'Termite' => 'دیمک',
            'Sawfly' => 'آرا مکھی',
            'White Rust' => 'سفید زنگ کی بیماری',
            'Alternaria Blight' => 'الٹرناریا جھلساؤ کی بیماری',
            'Sclerotinia Stem Rot' => 'سکلیروٹینیا تنے کی سڑن',
            'Hessian Fly' => 'ہیسیئن مکھی',
            'Covered Smut' => 'ڈھکی ہوئی کنگی کی بیماری',
            'Painted Bug' => 'پینٹڈ بگ کیڑا',
            'Clubroot' => 'گٹھا نما جڑوں کی بیماری',
            'Black Leg Disease' => 'کالے تنے کی بیماری',
            'Blackleg Disease' => 'کالے تنے کی بیماری',
            'Mustard Aphid' => 'سرسوں کا تیلا',
            'Tobacco Caterpillar (Spodoptera)' => 'تمباکو کی سنڈی (اسپوڈوپٹیرا)',
            'Black Shank' => 'تنے کے سیاہ ہونے کی بیماری',
            'Damping Off' => 'ننھے پودوں کے گلنے اور مرجھانے کی بیماری',
            'Tobacco Mosaic Virus (TMV)' => 'تمباکو موزیک وائرس (TMV)',
            'Leafhopper' => 'پتہ خور تیلہ',
        ];
        if (isset($exact[$name])) return $exact[$name];
        if (preg_match('/^(.+?) Pod Borer$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کی پھلی میں سوراخ کرنے والی سنڈی';
        if (preg_match('/^(.+?) Shoot Borer$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کے شگوفے میں سوراخ کرنے والی سنڈی';
        if (preg_match('/^(.+?) Fruit Borer$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کے پھل میں سوراخ کرنے والی سنڈی';
        if (preg_match('/^(.+?) Fruit Fly$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کی پھل کی مکھی';
        if (preg_match('/^(.+?) Leaf Spot$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کے پتوں کے دھبوں کی بیماری';
        if (preg_match('/^(.+?) Leaf Rust$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کے پتوں کی زنگ کی بیماری';
        if (preg_match('/^(.+?) Rust Disease$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کی زنگ کی بیماری';
        if (preg_match('/^(.+?) Wilt$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کا مرجھاؤ';
        if (preg_match('/^(.+?) Mosaic Virus$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کا موزیک وائرس';
        if (preg_match('/^(.+?) Fruit Borer$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کے پھل میں سوراخ کرنے والی سنڈی';
        if (preg_match('/^(.+?) Borer$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' میں سوراخ کرنے والی سنڈی';
        if (preg_match('/^(.+?) Aphid(?:s)?$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کا تیلا';
        if (preg_match('/^(.+?) Fly$/iu', $name, $m)) return $this->fixAgricultureKnownNames($m[1]).' کی مکھی';
        return $name;
    }

    private function semanticAgricultureCleanup(string $text, string $field, string $source = ''): string
    {
        $text = str_replace(["\r\n", "\r"], "\n", $text);
        $text = str_replace(['فنگسی بیماری','فنگس','فنگسی'], ['پھپھوندی سے ہونے والی بیماری','پھپھوندی','پھپھوندی سے متعلق'], $text);
        $cleanupWords = [
            'گرمیناشن' => 'انکرن', 'Stage' => 'مرحلہ', 'preferred' => 'بہتر سمجھا جاتا ہے', 'long' => 'طویل', 'summers' => 'گرمیاں', 'winters' => 'سردیاں', 'Frost' => 'پالا', 'extremely' => 'انتہائی', 'temperatures' => 'درجہ حرارت', 'sensitive' => 'حساس', 'sensitivity' => 'حساسیت', 'climates' => 'آب و ہوا', 'climate' => 'آب و ہوا', 'quality' => 'معیار', 'setting' => 'قائم ہونے', 'mild' => 'معتدل', 'light' => 'ہلکی', 'retaining' => 'برقرار رکھنے والی', 'availability' => 'دستیابی', 'sunlight' => 'دھوپ', 'essential' => 'ضروری', 'frost-free periods' => 'پالا سے پاک طویل مدت', 'Piaches' => 'آڑو', 'Peaches' => 'آڑو', 'Onions' => 'پیاز', 'Turnips' => 'شلجم', 'Oranges' => 'مالٹے', 'Mint' => 'پودینہ', 'Peach' => 'آڑو', 'Grapefruit' => 'چکوترا', 'Paya' => 'پپیتا', 'paya' => 'پپیتا', 'Pod' => 'پھلی', 'Shoot' => 'شگوفہ', 'Stem' => 'تنا', 'Root' => 'جڑ', 'Fruit' => 'پھل', 'Beet' => 'چقندر', 'Cabbage' => 'بند گوبھی', 'Fusarium' => 'فوزیریم', 'Alternaria' => 'الٹرناریا', 'Graphiola' => 'گرافیولا', 'suitable' => 'موزوں', 'protective netting' => 'حفاظتی جال', 'guidelines' => 'رہنما اصولوں', 'advice' => 'مشورے', 'like' => 'جیسی', 'based' => 'پر مبنی', 'oil spray' => 'تیل کا اسپرے', 'systemic' => 'نظامی', 'miticides' => 'مائٹ کش ادویات', 'termiticides' => 'دیمک کش ادویات', 'bactericides' => 'بیکٹیریا کش ادویات', 'fungicide' => 'پھپھوندی کش دوا', 'fungicides' => 'پھپھوندی کش ادویات', 'spray' => 'اسپرے', 'پیاچیس' => 'آڑو', 'کلے دومٹ' => 'چکنی دومی', 'ڈیٹاری' => 'غذائی', 'ہوسک' => 'چھلکا', 'ریلیویس کونسٹیپاشن' => 'قبض سے نجات میں مدد دیتا ہے', 'سٹرےغٹ یغٹ' => 'براہ راست بوئی جانے والی قسم', 'پوینسیٹٹ' => 'پونسیٹ', 'فاٹس' => 'چکنائیاں', 'ونساٹراٹیڈ ویلس' => 'غیر سیر شدہ چکنائیاں', 'کونٹینواوس' => 'مسلسل', 'کونٹینواوسلی' => 'مسلسل طور پر', 'فاسٹ-بیارینگ' => 'جلد پیداوار دینے والی', 'فرویٹینگ' => 'پھل دینے', 'ییللاو-مالٹا' => 'زرد مائل', 'ریپین' => 'پکنے', 'کیمیکال کونٹینٹ' => 'کیمیائی اجزا کی مقدار', 'کرینگ' => 'خشک ہونے', 'یمیج' => 'تصویر', 'ینکلوڈینگ' => 'شامل کرتے ہوئے', 'کوممونلی' => 'عام طور پر', 'فارمینگ' => 'کاشت کاری', 'مارکیٹینگ' => 'منڈی میں فروخت', 'لیمیٹیڈ' => 'محدود', 'ریسیسٹانٹ' => 'مزاحمت رکھنے والی', 'ڈیسیاسی' => 'بیماری', 'کومپلیکس' => 'کمپلیکس', 'سٹرینگتھینس' => 'مضبوط بناتا ہے', 'بونیس' => 'ہڈیوں', 'میلک' => 'دودھ کی', 'پروڈوکٹیویٹی' => 'پیداواری صلاحیت', 'میٹابولیسم' => 'جسمانی تحول', 'انیمیا' => 'خون کی کمی', 'اومیگا فاٹٹی اکیڈس' => 'اومیگا فیٹی ایسڈز', 'اچھی صحت' => 'اچھی صحت', 'ورلڈ' => 'دنیا', 'سوبٹروپیکال' => 'نیم گرم', 'یکسٹریمیلی' => 'انتہائی', 'سینسیٹیوی' => 'حساس', 'سٹارٹس' => 'شروع کرتا ہے', 'ییار-راونڈ' => 'سال بھر', 'کونٹےن' => 'مطلوبہ مقدار', 'اوپٹیمال' => 'موزوں', 'پھول آنا کیکلیس' => 'پھول آنے کے چکر',
        ];
        foreach ($cleanupWords as $en => $ur) $text = str_replace($en, $ur, $text);
        $text = str_replace(['نیم oil spray','نیم-based spray','نیم oil','Copper oxychloride','Copper Oxychloride','Copper-based fungicide','Copper-based fungicides','other تجویز کردہ','aphid control مصنوعات'], ['نیم کے تیل کا اسپرے','نیم پر مبنی اسپرے','نیم کا تیل','کاپر آکسی کلورائیڈ','کاپر آکسی کلورائیڈ','کاپر پر مبنی پھپھوندی کش دوا','کاپر پر مبنی پھپھوندی کش ادویات','دیگر تجویز کردہ','تیلے کے تدارک کی مصنوعات'], $text);
        if ($field === 'type') {
            $t = strtolower(trim($source));
            if (str_contains($t, 'insect')) return 'حشری کیڑا';
            if (str_contains($t, 'fungal')) return 'پھپھوندی سے ہونے والی بیماری';
            if (str_contains($t, 'bacterial')) return 'بیکٹیریا سے ہونے والی بیماری';
            if (str_contains($t, 'viral')) return 'وائرس سے ہونے والی بیماری';
        }
        $exact = [
            'Apply Imidacloprid or neem-based sprays.' => 'امیڈاکلوپرڈ یا نیم پر مبنی اسپرے استعمال کریں۔',
            'Apply Abamectin or suitable miticides.' => 'ایبامیکٹن یا موزوں مائٹ کش ادویات استعمال کریں۔',
            'Apply mineral oil spray or systemic insecticides.' => 'منرل آئل کا اسپرے یا نظامی کیڑے مار ادویات استعمال کریں۔',
            'Apply fungicides like Carbendazim or proper post-harvest treatment.' => 'کاربینڈازم جیسی پھپھوندی کش دوا استعمال کریں یا کٹائی کے بعد مناسب علاج کریں۔',
            'Apply neem oil or systemic insecticides.' => 'نیم کا تیل یا نظامی کیڑے مار ادویات استعمال کریں۔',
            'Apply Abamectin or other miticides.' => 'ایبامیکٹن یا دیگر مائٹ کش ادویات استعمال کریں۔',
            'Apply Abamectin or recommended miticides.' => 'ایبامیکٹن یا تجویز کردہ مائٹ کش ادویات استعمال کریں۔',
            'Apply Sulfur-based fungicides or Hexaconazole.' => 'گندھک پر مبنی پھپھوندی کش ادویات یا ہیکسا کونازول استعمال کریں۔',
            'Apply soil fungicides like Carbendazim or Thiram.' => 'کاربینڈازم یا تھیرام جیسی مٹی میں استعمال ہونے والی پھپھوندی کش ادویات استعمال کریں۔',
            'Apply Chlorpyrifos or Fipronil as soil treatment.' => 'کلورپائریفوس یا فپرونل کو مٹی کے علاج کے لیے استعمال کریں۔',
            'Apply Imidacloprid or Thiamethoxam as per recommendation.' => 'امیڈاکلوپرڈ یا تھیامیٹھوکزام تجویز کردہ طریقے کے مطابق استعمال کریں۔',
            'Apply Chlorpyrifos or Lambda-cyhalothrin if infestation is severe.' => 'اگر حملہ شدید ہو تو کلورپائریفوس یا لیمبڈا سائہیلوتھرن استعمال کریں۔',
            'Apply Metalaxyl or Ridomil-based fungicides.' => 'میٹالیکسل یا رڈومل پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            'Apply Imidacloprid or Dimethoate as per agricultural recommendations.' => 'امیڈاکلوپرڈ یا ڈائیمتھیویٹ زرعی سفارشات کے مطابق استعمال کریں۔',
            'Apply Chlorpyrifos or recommended systemic insecticides.' => 'کلورپائریفوس یا تجویز کردہ نظامی کیڑے مار ادویات استعمال کریں۔',
            'Apply Sulfur-based fungicides' => 'گندھک پر مبنی پھپھوندی کش ادویات استعمال کریں',
            'post-harvest treatment' => 'کٹائی کے بعد علاج',
            'systemic insecticides' => 'نظامی کیڑے مار ادویات',
            'suitable miticides' => 'موزوں مائٹ کش ادویات',
            'recommended miticides' => 'تجویز کردہ مائٹ کش ادویات',
            'other miticides' => 'دیگر مائٹ کش ادویات',
            'mineral oil spray' => 'منرل آئل کا اسپرے',
            'as per recommendation' => 'تجویز کردہ طریقے کے مطابق',
            'as per agricultural recommendations' => 'زرعی سفارشات کے مطابق',
            'if infestation is severe' => 'اگر حملہ شدید ہو',
            'like Carbendazim' => 'کاربینڈازم جیسی',
            'soil fungicides' => 'مٹی میں استعمال ہونے والی پھپھوندی کش ادویات',
            'neem-based sprays' => 'نیم پر مبنی اسپرے',
            'neem-based spray' => 'نیم پر مبنی اسپرے',
            'Sulfur-based fungicides' => 'گندھک پر مبنی پھپھوندی کش ادویات',
            'Metalaxyl or Ridomil-based fungicides' => 'میٹالیکسل یا رڈومل پر مبنی پھپھوندی کش ادویات',
            'Fungal Disease' => 'پھپھوندی سے ہونے والی بیماری',
            'Bacterial Disease' => 'بیکٹیریا سے ہونے والی بیماری',
            'Viral Disease' => 'وائرس سے ہونے والی بیماری',
            'Insect Pest' => 'حشری کیڑا',
            'Pest' => 'کیڑا یا بیماری',
            'Rice Stem Borer' => 'چاول کا تنا چھیدنے والا کیڑا',
            'Pod Borer' => 'پھلی میں سوراخ کرنے والی سنڈی',
            'Shoot Borer' => 'شگوفے میں سوراخ کرنے والی سنڈی',
            'Fruit Borer' => 'پھل میں سوراخ کرنے والی سنڈی',
            'Fruit Fly' => 'پھل کی مکھی',
            'Peach Fruit Fly' => 'آڑو کی پھل کی مکھی',
            'Fusarium Wilt' => 'فوزیریم مرجھاؤ',
            'Alternaria Leaf Spot' => 'الٹرناریا پتوں کے دھبوں کی بیماری',
            'Tobacco Mosaic Virus (TMV)' => 'تمباکو موزیک وائرس (TMV)',
            'Pod Borer' => 'پھلی میں سوراخ کرنے والی سنڈی',
            'Shoot Borer' => 'شگوفے میں سوراخ کرنے والی سنڈی',
            'Fruit Borer' => 'پھل میں سوراخ کرنے والی سنڈی',
            'Fruit Fly' => 'پھل کی مکھی',
            'Peach Fruit Fly' => 'آڑو کی پھل کی مکھی',
            'Fusarium Wilt' => 'فوزیریم مرجھاؤ',
            'Alternaria Leaf Spot' => 'الٹرناریا پتوں کے دھبوں کی بیماری',
            'Tobacco Mosaic Virus (TMV)' => 'تمباکو موزیک وائرس (TMV)',
            'Brown Planthopper' => 'بھورا تیلہ',
            'Whitefly' => 'سفید مکھی',
            'Aphids' => 'تیلا',
            'Bean Aphid' => 'لوبیا کا تیلا',
            'Jassids (Leafhopper)' => 'جیسڈ یا پتہ خور تیلہ',
            'Leaf Miner' => 'پتے میں سرنگ بنانے والا کیڑا',
            'Citrus Leaf Miner' => 'ترشاوہ پھلوں کا پتے میں سرنگ بنانے والا کیڑا',
            'Fruit Fly' => 'پھل کی مکھی',
            'Cutworm' => 'کٹ ورم کیڑا',
            'Thrips' => 'تھرپس',
            'Powdery Mildew' => 'سفوفی پھپھوندی',
            'Downy Mildew' => 'روئیں دار پھپھوندی',
            'Anthracnose' => 'انتھراکنوز',
            'Root Rot' => 'جڑوں کی سڑن',
            'Leaf Spot' => 'پتوں کے دھبوں کی بیماری',
            'Bacterial Wilt' => 'بیکٹیریائی مرجھاؤ',
            'Fusarium Wilt' => 'فوزیریم مرجھاؤ',
            'Neem oil' => 'نیم کا تیل',
            'neem oil spray' => 'نیم کے تیل کا اسپرے',
            'neem-based spray' => 'نیم پر مبنی اسپرے',
            'other recommended insecticides' => 'دیگر تجویز کردہ کیڑے مار ادویات',
            'other recommended aphid control products' => 'تیلے کے تدارک کی دیگر تجویز کردہ ادویات',
            'Copper Oxychloride' => 'کاپر آکسی کلورائیڈ',
            'Copper oxychloride' => 'کاپر آکسی کلورائیڈ',
            'Copper-based fungicides' => 'کاپر پر مبنی پھپھوندی کش ادویات',
            'Copper-based fungicide' => 'کاپر پر مبنی پھپھوندی کش دوا',
            'recommended insecticides' => 'تجویز کردہ کیڑے مار ادویات',
            'agricultural recommendations' => 'زرعی سفارشات',
            'according to agricultural recommendations' => 'زرعی سفارشات کے مطابق',
            'as recommended' => 'تجویز کردہ طریقے کے مطابق',
            'where recommended' => 'جہاں زرعی ماہرین سفارش کریں',
            'plant sap' => 'پودے کا رس',
            'leaf sap' => 'پتے کا رس',
            'plant juice' => 'پودے کا رس',
            'tender leaves' => 'نرم پتے',
            'young leaves' => 'نوجوان پتے',
            'young shoots' => 'نرم نئی شاخیں',
            'shoots' => 'نئی شاخیں',
            'leaves' => 'پتے',
            'leaf' => 'پتا',
            'stems' => 'تنے',
            'stem' => 'تنا',
            'roots' => 'جڑیں',
            'root' => 'جڑ',
            'plants' => 'پودے',
            'plant' => 'پودا',
            'seeds' => 'بیج',
            'seed' => 'بیج',
            'fruits' => 'پھل',
            'fruit' => 'پھل',
            'flowers' => 'پھول',
            'flowering' => 'پھول آنے',
            'germination' => 'انکرن',
            'vegetative growth' => 'نباتاتی نشوونما',
            'growth' => 'نشوونما',
            'development' => 'نشوونما',
            'yield' => 'پیداوار',
            'production' => 'پیداوار',
            'weather' => 'موسم',
            'conditions' => 'حالات',
            'warm weather' => 'گرم موسم',
            'cool weather' => 'ٹھنڈا موسم',
            'hot weather' => 'گرم موسم',
            'humid conditions' => 'مرطوب حالات',
            'dry weather' => 'خشک موسم',
            'wet weather' => 'بارش والا موسم',
            'soil' => 'مٹی',
            'waterlogging' => 'پانی کا جمع ہونا',
            'moisture' => 'نمی',
            'fertilizer' => 'کھاد',
            'fertilizers' => 'کھادیں',
            'nitrogen' => 'نائٹروجن',
            'phosphorus' => 'فاسفورس',
            'potassium' => 'پوٹاشیم',
            'irrigation' => 'آبپاشی',
            'field' => 'کھیت',
            'farmers' => 'کسان',
            'farmer' => 'کسان',
            'healthy' => 'صحت مند',
            'infected' => 'متاثرہ',
            'affected' => 'متاثرہ',
            'resistant' => 'مزاحمت رکھنے والی',
            'recommended' => 'تجویز کردہ',
            'proper' => 'مناسب',
            'better' => 'بہتر',
            'high' => 'زیادہ',
            'low' => 'کم',
            'moderate' => 'درمیانی',
            'small' => 'چھوٹے',
            'young' => 'نوجوان',
            'yellow' => 'زرد',
            'white' => 'سفید',
            'green' => 'سبز',
            'brown' => 'بھورا',
            'sticky' => 'چپچپا',
            'weak' => 'کمزور',
            'strong' => 'مضبوط',
            'dry' => 'خشک',
            'wet' => 'نم',
            'humid' => 'مرطوب',
            'clean' => 'صاف',
            'remove' => 'ہٹا دیں',
            'avoid' => 'گریز کریں',
            'use' => 'استعمال کریں',
            'apply' => 'استعمال کریں',
            'spread' => 'پھیلتا ہے',
            'spreads' => 'پھیلتا ہے',
            'suck' => 'رس چوستے ہیں',
            'sucks' => 'رس چوستا ہے',
            'feed' => 'خوراک حاصل کرتے ہیں',
            'feeds' => 'خوراک حاصل کرتا ہے',
            'larvae' => 'سنڈیاں',
            'larva' => 'سنڈی',
            'insects' => 'کیڑے',
            'insect' => 'کیڑا',
            'fungus' => 'پھپھوندی',
            'fungi' => 'پھپھوندیاں',
            'disease' => 'بیماری',
            'diseases' => 'بیماریاں',
            'pest' => 'کیڑا',
            'pests' => 'کیڑے',
            'inside the plant' => 'پودے کے اندر',
            'inside' => 'اندر',
            'through' => 'کے ذریعے',
            'during' => 'کے دوران',
            'especially' => 'خصوصاً',
            'mainly' => 'بنیادی طور پر',
            'mostly' => 'زیادہ تر',
            'widely' => 'بڑے پیمانے پر',
            'important' => 'اہم',
            'improves' => 'بہتر بناتا ہے',
            'improve' => 'بہتر بنانا',
            'helps' => 'مدد کرتا ہے',
            'supports' => 'مدد دیتا ہے',
            'provides' => 'فراہم کرتا ہے',
            'reduces' => 'کم کرتا ہے',
            'reduce' => 'کم کرنا',
            'become' => 'ہو جاتے ہیں',
            'becomes' => 'ہو جاتا ہے',
            'turn yellow' => 'زرد ہو جاتے ہیں',
            'turn yellow and curl' => 'زرد ہو کر مڑ جاتے ہیں',
            'poor growth' => 'کمزور نشوونما',
            'reduced yield' => 'پیداوار میں کمی',
            'high humidity' => 'زیادہ نمی',
            'high temperature' => 'زیادہ درجہ حرارت',
            'low rainfall' => 'کم بارش',
            'rainfall' => 'بارش',
            'rain' => 'بارش',
            'wind' => 'ہوا',
            'seeds and plant debris' => 'بیجوں اور پودوں کی باقیات',
            'infected seeds' => 'متاثرہ بیج',
            'infected crop debris' => 'متاثرہ فصل کی باقیات',
            'crop debris' => 'فصل کی باقیات',
            'field sanitation' => 'کھیت کی صفائی کا مناسب انتظام',
            'natural predators' => 'قدرتی دشمن',
            'natural enemies' => 'قدرتی دشمن',
            'yellow sticky traps' => 'پیلی چپکنے والی پھندیاں',
            'pheromone traps' => 'فیرومون پھندیاں',
            'certified seeds' => 'تصدیق شدہ بیج',
            'disease-free seed' => 'بیماری سے پاک بیج',
            'disease-free seeds' => 'بیماری سے پاک بیج',
            'resistant varieties' => 'مزاحمت رکھنے والی اقسام',
            'balanced fertilizer' => 'متوازن کھاد',
            'balanced fertilization' => 'متوازن کھاد کا استعمال',
            'excess nitrogen' => 'اضافی نائٹروجن',
            'excessive nitrogen' => 'ضرورت سے زیادہ نائٹروجن',
            'excessive' => 'ضرورت سے زیادہ',
            'proper spacing' => 'مناسب فاصلہ',
            'plant spacing' => 'پودوں کا باہمی فاصلہ',
            'good drainage' => 'اچھی نکاسی آب',
            'well-drained' => 'اچھی نکاسی والی',
            'loamy soil' => 'دومی مٹی',
            'sandy loam soil' => 'ریتیلی دومی مٹی',
            'fertile soil' => 'زرخیز مٹی',
            'organic matter' => 'نامیاتی مادہ',
            'root development' => 'جڑوں کی نشوونما',
            'fruit development' => 'پھلوں کی نشوونما',
            'seed formation' => 'بیج بننے',
            'grain filling' => 'دانے بھرنے',
            'fruit quality' => 'پھل کا معیار',
            'oil content' => 'تیل کی مقدار',
            'nutritional value' => 'غذائی قدر',
            'market value' => 'منڈی میں قدر',
            'income' => 'آمدنی',
            'food security' => 'غذائی تحفظ',
            'livestock feed' => 'مویشیوں کی خوراک',
            'animal feed' => 'جانوروں کی خوراک',
            'edible oil' => 'خوردنی تیل',
            'cooking oil' => 'کھانا پکانے کا تیل',
            'food processing industries' => 'غذائی مصنوعات تیار کرنے کی صنعتیں',
            'agricultural economy' => 'زرعی معیشت',
            'crop rotation' => 'فصلوں کی گردش',
            'nitrogen fixing' => 'نائٹروجن کو مٹی میں شامل کرنا',
            'digestive health' => 'نظامِ ہاضمہ کی صحت',
            'immunity' => 'قوتِ مدافعت',
            'digestion' => 'ہاضمہ',
            'antioxidants' => 'اینٹی آکسیڈنٹس',
            'minerals' => 'معدنیات',
            'protein' => 'پروٹین',
            'fiber' => 'غذائی ریشہ',
            'carbohydrates' => 'کاربوہائیڈریٹس',
            'vitamin' => 'وٹامن',
            'Natural Husk' => 'قدرتی چھلکا',
            'Relieves constipation' => 'قبض سے نجات میں مدد دیتا ہے',
            'Supports body functions' => 'جسم کے افعال کو بہتر رکھنے میں مدد دیتا ہے',
            'Support body functions' => 'جسم کے افعال کو بہتر رکھنے میں مدد دیتا ہے',
            'Support body function' => 'جسم کے افعال کو بہتر رکھنے میں مدد دیتا ہے',
            'Strong immune system' => 'قوتِ مدافعت مضبوط بنانے میں مدد دیتا ہے',
            'Better digestion' => 'ہاضمہ بہتر بناتا ہے',
            'Disease protection' => 'بیماریوں سے تحفظ',
            'Energy source' => 'توانائی کا ذریعہ',
            'Good for eyesight' => 'بینائی کے لیے مفید',
            'Supports animal feed nutrition' => 'جانوروں کی غذائی ضروریات پوری کرنے میں مدد دیتا ہے',
            'Improves digestion' => 'ہاضمہ بہتر بناتا ہے',
            'Supports body growth' => 'جسم کی نشوونما میں مدد دیتا ہے',
            'Protect body cells' => 'جسم کے خلیوں کو نقصان سے بچاتا ہے',
        ];
        uksort($exact, fn($a, $b) => strlen($a) < strlen($b) ? 1 : -1);
        foreach ($exact as $en => $ur) {
            $text = preg_replace('/'.preg_quote($en, '/').'/iu', $ur, $text) ?? $text;
        }

        $patterns = [
            '/^(.+?) is usually sown from (.+?) to (.+?) in Pakistan\.?$/iu' => fn($m) => $this->fixAgricultureKnownNames($m[1]).' کی بوائی عموماً '.$m[2].' سے '.$m[3].' تک پاکستان میں کی جاتی ہے۔',
            '/^(.+?) is usually sown in (.+?) in Pakistan\.?$/iu' => fn($m) => $this->fixAgricultureKnownNames($m[1]).' کی بوائی عموماً پاکستان میں '.$m[2].' میں کی جاتی ہے۔',
            '/^(.+?) is harvested from (.+?) to (.+?) when (.+?)\.?$/iu' => fn($m) => $this->fixAgricultureKnownNames($m[1]).' کی کٹائی '.$m[2].' سے '.$m[3].' تک کی جاتی ہے، جب '.$m[4].'۔',
            '/^(.+?) is harvested from (.+?) when (.+?)\.?$/iu' => fn($m) => $this->fixAgricultureKnownNames($m[1]).' کی کٹائی '.$m[2].' کے دوران کی جاتی ہے، جب '.$m[3].'۔',
            '/^(.+?) grows best in (.+?) climates? with (.+?)\.?$/iu' => fn($m) => $this->fixAgricultureKnownNames($m[1]).' '.$this->semanticAgricultureCleanup($m[2],'x').' آب و ہوا میں بہترین نشوونما پاتا ہے جہاں '.$this->semanticAgricultureCleanup($m[3],'x').'۔',
            '/^(.+?) grows best in (.+?) climates?\.?$/iu' => fn($m) => $this->fixAgricultureKnownNames($m[1]).' گرم و معتدل آب و ہوا میں بہترین نشوونما پاتا ہے۔',
            '/^The fungus develops in (.+?)\.?$/iu' => fn($m) => 'پھپھوندی '.$this->semanticAgricultureCleanup($m[1],'x').' میں نشوونما پاتی ہے۔',
            '/^The fungus spreads through (.+?)\.?$/iu' => fn($m) => 'پھپھوندی '.$this->semanticAgricultureCleanup($m[1],'x').' کے ذریعے پھیلتی ہے۔',
            '/^Fungus spreads through (.+?)\.?$/iu' => fn($m) => 'پھپھوندی '.$this->semanticAgricultureCleanup($m[1],'x').' کے ذریعے پھیلتی ہے۔',
            '/^Fungus spreads in (.+?) through (.+?)\.?$/iu' => fn($m) => $this->semanticAgricultureCleanup($m[1],'x').' میں پھپھوندی '.$this->semanticAgricultureCleanup($m[2],'x').' کے ذریعے پھیلتی ہے۔',
            '/^Fungal infection develops under (.+?)\.?$/iu' => fn($m) => $this->semanticAgricultureCleanup($m[1],'x').' میں پھپھوندی کا حملہ پیدا ہوتا ہے۔',
            '/^Apply (.+?) or (.+?)\.?$/iu' => fn($m) => $this->semanticAgricultureCleanup($m[1],'x').' یا '.$this->semanticAgricultureCleanup($m[2],'x').' استعمال کریں۔',
            '/^Use (.+?) and (.+?)\.?$/iu' => fn($m) => $this->semanticAgricultureCleanup($m[1],'x').' اور '.$this->semanticAgricultureCleanup($m[2],'x').' استعمال کریں۔',
            '/^Avoid (.+?)\.?$/iu' => fn($m) => $this->semanticAgricultureCleanup($m[1],'x').' سے گریز کریں۔',
            '/^Remove (.+?)\.?$/iu' => fn($m) => $this->semanticAgricultureCleanup($m[1],'x').' ہٹا دیں۔',
            '/^(.+?) suck sap from (.+?)\.?$/iu' => fn($m) => $this->semanticAgricultureCleanup($m[1],'x').' '.$this->semanticAgricultureCleanup($m[2],'x').' کا رس چوستے ہیں۔',
            '/^(.+?) feed on (.+?)\.?$/iu' => fn($m) => $this->semanticAgricultureCleanup($m[1],'x').' '.$this->semanticAgricultureCleanup($m[2],'x').' سے خوراک حاصل کرتے ہیں۔',
            '/^Small insects gather on (.+?) and suck plant sap, multiplying quickly in (.+?)\.?$/iu' => fn($m) => 'چھوٹے کیڑے '.$this->semanticAgricultureCleanup($m[1],'x').' پر جمع ہو کر پودے کا رس چوستے ہیں اور '.$this->semanticAgricultureCleanup($m[2],'x').' میں تیزی سے بڑھتے ہیں۔',
            '/^Small insects suck sap from (.+?), especially in (.+?)\.?$/iu' => fn($m) => 'چھوٹے کیڑے '.$this->semanticAgricultureCleanup($m[1],'x').' کا رس چوستے ہیں، خصوصاً '.$this->semanticAgricultureCleanup($m[2],'x').' میں۔',
            '/^Leaves turn yellow, curl, and plant growth becomes weak\.?$/iu' => 'پتے زرد ہو کر مڑ جاتے ہیں اور پودے کی نشوونما کمزور پڑ جاتی ہے۔',
            '/^Leaves curl, become sticky, and growth slows down\.?$/iu' => 'پتے مڑ کر چپچپے ہو جاتے ہیں اور پودے کی نشوونما سست پڑ جاتی ہے۔',
            '/^Leaves become curly, sticky, and plants grow slowly\.?$/iu' => 'پتے مڑ کر چپچپے ہو جاتے ہیں اور پودوں کی نشوونما سست ہو جاتی ہے۔',
            '/^Leaves turn yellow, sticky honeydew appears, and plant growth slows down\.?$/iu' => 'پتے زرد ہو جاتے ہیں، چپچپا میٹھا مادہ ظاہر ہوتا ہے اور پودے کی نشوونما سست پڑ جاتی ہے۔',
            '/^The insect thrives in warm and humid conditions and feeds by sucking plant sap\.?$/iu' => 'یہ کیڑا گرم اور مرطوب حالات میں تیزی سے بڑھتا ہے اور پودے کا رس چوستے ہوئے خوراک حاصل کرتا ہے۔',
            '/^Adult moths lay eggs on rice leaves\. After hatching, larvae enter stems and feed inside the plant\.?$/iu' => 'بالغ پروانے چاول کے پتوں پر انڈے دیتے ہیں۔ انڈوں سے نکلنے کے بعد سنڈیاں تنوں میں داخل ہو کر پودے کے اندر خوراک حاصل کرتی ہیں۔',
        ];
        foreach ($patterns as $pattern => $replacement) {
            if (is_string($replacement)) {
                $text = preg_replace($pattern, $replacement, $text) ?? $text;
            } else {
                $text = preg_replace_callback($pattern, $replacement, $text) ?? $text;
            }
        }

        $labels = [
            'Germination/Plant Growth Temperature' => 'انکرن اور پودے کی نشوونما کا درجہ حرارت',
            'Germination Temperature' => 'انکرن کا درجہ حرارت',
            'Vegetative Growth' => 'نباتاتی نشوونما',
            'Flowering Stage' => 'پھول آنے کا مرحلہ',
            'Fruit Development' => 'پھلوں کی نشوونما',
            'Root Development' => 'جڑوں کی نشوونما',
            'Seed Formation' => 'بیج بننے کا مرحلہ',
            'Crop Name' => 'فصل کا نام',
            'Scientific Name' => 'سائنسی نام',
            'Crop Type' => 'فصل کی قسم',
            'Main Use' => 'اہم استعمال',
            'Sowing Season' => 'کاشت کا موسم',
            'Harvesting Season' => 'کٹائی کا موسم',
            'Ideal Temperature' => 'موزوں درجہ حرارت',
            'Water Requirement' => 'پانی کی ضرورت',
            'Best Soil Type' => 'بہترین مٹی کی قسم',
            'Major Areas' => 'اہم کاشت والے علاقے',
            'Suitable Soil' => 'موزوں مٹی',
            'Ideal pH' => 'موزوں پی ایچ',
            'Seed Rate' => 'بیج کی مقدار',
            'Plant Spacing' => 'پودوں کا باہمی فاصلہ',
            'Plants per Acre' => 'فی ایکڑ پودوں کی تعداد',
            'Characteristics of Good Seed' => 'اچھے بیج کی خصوصیات',
            'Characteristics of Good Plant Material' => 'اچھی نباتاتی مواد کی خصوصیات',
            'Characteristics of Good Planting Material' => 'اچھی کاشت کے مواد کی خصوصیات',
            'Ploughing' => 'ہل چلانا',
            'Deep Ploughing' => 'گہرا ہل چلانا',
            'Harrowing' => 'سہاگہ چلانا',
            'Leveling' => 'زمین ہموار کرنا',
            'Weed Control' => 'جڑی بوٹیوں کا تدارک',
            'Organic Matter' => 'نامیاتی مادہ',
            'Nitrogen (N)' => 'نائٹروجن (N)',
            'Phosphorus (P)' => 'فاسفورس (P)',
            'Potassium (K)' => 'پوٹاشیم (K)',
            'Fiber' => 'غذائی ریشہ',
            'Protein' => 'پروٹین',
            'Minerals' => 'معدنیات',
            'Antioxidants' => 'اینٹی آکسیڈنٹس',
            'Carbohydrates' => 'کاربوہائیڈریٹس',
            'Healthy Fats' => 'صحت بخش چکنائیاں',
            'Omega-3 Fatty Acids' => 'اومیگا 3 فیٹی ایسڈز',
        ];
        foreach ($labels as $en => $ur) $text = preg_replace('/'.preg_quote($en,'/').'/iu', $ur, $text) ?? $text;

        $text = preg_replace('/\b(°C|Celsius)\b/iu', 'سینٹی گریڈ', $text) ?? $text;
        $text = preg_replace('/\bkg per acre\b/iu', 'کلوگرام فی ایکڑ', $text) ?? $text;
        $text = preg_replace('/\bper acre\b/iu', 'فی ایکڑ', $text) ?? $text;
        $text = preg_replace('/\bfrom\b/iu', 'سے', $text) ?? $text;
        $text = preg_replace('/\bto\b/iu', 'تک', $text) ?? $text;
        $text = preg_replace('/\band\b/iu', 'اور', $text) ?? $text;
        $text = preg_replace('/\bwith\b/iu', 'کے ساتھ', $text) ?? $text;
        $text = preg_replace('/\bwithout\b/iu', 'کے بغیر', $text) ?? $text;
        $text = preg_replace('/\bdepending on\b/iu', 'کے مطابق', $text) ?? $text;
        $text = preg_replace('/\bcan\b/iu', 'سکتا ہے', $text) ?? $text;
        $text = preg_replace('/\bshould\b/iu', 'چاہیے', $text) ?? $text;
        $text = preg_replace('/\bis\b/iu', 'ہے', $text) ?? $text;
        $text = preg_replace('/\bare\b/iu', 'ہیں', $text) ?? $text;
        $text = preg_replace('/\bthe\b/iu', '', $text) ?? $text;
        $text = preg_replace('/\bthis\b/iu', 'یہ', $text) ?? $text;
        $text = preg_replace('/\bthat\b/iu', 'جو', $text) ?? $text;
        $text = preg_replace('/\s{2,}/u', ' ', $text) ?? $text;
        $text = preg_replace('/\s+([،۔:])/u', '$1', $text) ?? $text;
        $text = preg_replace('/([۔:])\s*/u', '$1 ', $text) ?? $text;
        $text = preg_replace('/\s*،\s*/u', '، ', $text) ?? $text;
        $text = trim($text);
        return $text;
    }

    public function translateAgriculture(string $text): string
    {
        if ($text === '') return $text;
        $leading = preg_match('/^\s*/u', $text, $lm) ? $lm[0] : '';
        $trailing = preg_match('/\s*$/u', $text, $tm) ? $tm[0] : '';
        $core = trim($text);
        $core = str_replace(["\r\n", "\r"], "\n", $core);
        $core = preg_replace('/[ \t]+\n/u', "\n", $core) ?? $core;
        $core = preg_replace('/\n{3,}/u', "\n\n", $core) ?? $core;
        if ($core === '') return $text;
        $blockLabels = [
            'Crop Name','Scientific Name','Crop Type','Main Use','Sowing Season','Harvesting Season','Ideal Temperature','Water Requirement','Best Soil Type','Major Areas','Suitable Soil','Ideal pH','Germination Temperature','Growth Temperature','Germination/Plant Growth Temperature','Vegetative Growth','Fruit Development','Grain Formation','Boll Formation','Head Formation','Seed Rate','Rhizome Rate','Corm Seed Rate','Plant Density','Planting Density','Plants per Acre','Plants per Acre','Nursery Method','Direct Seeding','Transplanting','Characteristics of Good Seed','Characteristics of Good Seed (Rhizomes)','Characteristics of Good Planting Material','Characteristics of Good Plant Material','Ploughing','Deep Ploughing','Puddling','Harrowing','Leveling','Weed Removal','Weed Control','Fertilizer Mixing','Organic Matter','Organic Manure','FYM Application','Bed Formation','Bed Preparation','Pit Preparation','Pit Digging','Drainage','Initial Stage','Nursery Stage','Seedling Stage','Vegetative Stage','Flowering Stage','Harvesting Stage','Booting Stage','Tasseling Stage','Grain Filling Stage','Pod Formation','Pod Filling Stage','Pod Development Stage','Rhizome Development Stage','Fruit Maturity Stage','Maturity Stage','Vitamin C','Vitamin A','Vitamin K','Vitamin B6','Vitamin B','Iron','Calcium','Potassium','Nitrogen (N)','Phosphorus (P)','Potassium (K)','Fiber','Protein','Folate','Antioxidants','Carbohydrates','Water Content','Minerals','Healthy Fats','Omega-3 Fatty Acids','Main Use','Plant Spacing','Spacing','Seed Requirement','Row Sowing','Drill Method','Furrow making','Suckers','Varieties','Hybrid Varieties','Local Varieties'
        ];
        foreach ($blockLabels as $blockLabel) {
            $core = preg_replace('/(?<!^)(?<!\n)\s*(' . preg_quote($blockLabel, '/') . ')\s*:/iu', "\n$1:", $core) ?? $core;
        }
        $listMarkers = [
            'High germination rate','Disease-free seeds','Disease-free certified seed','Certified improved variety','Certified hybrid variety','Uniform seed size','Uniform seed size and color','Clean and uniform size','High sprouting ability','Certified planting material','Strong root system','Free from pests','Healthy rhizome base','Healthy corms or suckers','Medium-sized, well-developed corms','Fast-growing varieties','Healthy nursery plants','Disease-free seedlings','Strong and uniform growth','True to variety'
        ];
        foreach ($listMarkers as $listMarker) {
            $core = preg_replace('/(?<!^)(?<!\n)\s*(' . preg_quote($listMarker, '/') . ')(?=\s|$)/iu', "\n$1", $core) ?? $core;
        }
        $introByCrop = [
            'Turmeric' => 'ہلدی پاکستان اور بہت سے گرم علاقوں کے ممالک میں اگائی جانے والی ایک اہم مصالحے کی فصل ہے۔ اسے کھانا پکانے، ادویات اور کاسمیٹکس میں بڑے پیمانے پر استعمال کیا جاتا ہے۔ ہلدی اپنے زرد رنگ اور مضبوط ادویاتی خصوصیات کی وجہ سے مشہور ہے۔ اس میں کرکیومِن نامی مرکب پایا جاتا ہے جو سوزش کم کرنے اور جسم کو آکسیڈیٹو نقصان سے بچانے میں مدد دیتا ہے۔ یہ کسانوں کے لیے زیادہ منافع دینے والی نقد آور فصل ہے۔',
            'Bitter gourd' => 'کریلا پاکستان اور بہت سے گرم و نیم گرم علاقوں میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔ اسے اس کی ادویاتی خصوصیات اور صحت کے فوائد کی وجہ سے کھانا پکانے میں بڑے پیمانے پر استعمال کیا جاتا ہے۔ کریلا اپنے کڑوے ذائقے کے لیے مشہور ہے اور وٹامنز اور معدنیات سے بھرپور ہوتا ہے، جو خون میں شکر کی مقدار کو قابو کرنے اور ہاضمہ بہتر بنانے میں مدد دیتے ہیں۔ یہ تیزی سے بڑھنے والی بیل دار فصل ہے جو کسانوں کو اچھی آمدنی فراہم کرتی ہے۔',
            'Cucumber' => 'کھیرا پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔ اس میں پانی کی مقدار زیادہ اور ٹھنڈک بخش خصوصیات ہوتی ہیں، اس لیے اسے سلاد، اچار اور تازہ استعمال میں بڑے پیمانے پر شامل کیا جاتا ہے۔ کھیرا تیزی سے بڑھنے والی بیل دار فصل ہے جو کسانوں کو جلد آمدنی فراہم کرتی ہے اور وٹامنز اور معدنیات سے بھرپور ہوتی ہے۔',
            'Soybean' => 'سویا بین پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم تیل دار اور پروٹین سے بھرپور فصل ہے۔ اسے خوردنی تیل، جانوروں کی خوراک اور پروٹین پر مبنی غذائی مصنوعات تیار کرنے کے لیے بڑے پیمانے پر استعمال کیا جاتا ہے۔ سویا بین نائٹروجن کو مٹی میں شامل کرکے اس کی زرخیزی بہتر بنانے میں اہم کردار ادا کرتی ہے۔ سبزیوں کے تیل اور نباتاتی پروٹین کی بڑھتی ہوئی طلب کی وجہ سے اس فصل کی اہمیت بھی بڑھ رہی ہے۔',
            'Ginger' => 'ادرک بہت سے گرم اور نیم گرم علاقوں میں اگائی جانے والی ایک اہم مصالحے اور نقد آور فصل ہے۔ اسے تیز خوشبو، ذائقے اور ادویاتی خصوصیات کی وجہ سے خوراک، ادویات اور جڑی بوٹیوں سے تیار مصنوعات میں بڑے پیمانے پر استعمال کیا جاتا ہے۔ ادرک کی کاشت کسانوں کو اچھی آمدنی فراہم کرتی ہے کیونکہ مقامی اور بین الاقوامی منڈیوں میں اس کی طلب زیادہ ہے۔ پاکستان میں ادرک بنیادی طور پر گرم علاقوں میں مناسب آبپاشی کی سہولت کے ساتھ کاشت کی جاتی ہے۔',
            'Banana' => 'کیلا گرم اور نیم گرم علاقوں میں اگائی جانے والی اہم ترین پھلوں کی فصلوں میں سے ایک ہے۔ اسے تازہ پھل کے طور پر بڑے پیمانے پر استعمال کیا جاتا ہے اور مٹھائیوں، اسموتھیز اور تیار شدہ غذائی مصنوعات میں بھی شامل کیا جاتا ہے۔ کیلے کی کاشت کسانوں کو اچھی آمدنی فراہم کرتی ہے کیونکہ اس کی سال بھر مسلسل طلب رہتی ہے۔ پاکستان میں کیلے کی کاشت بنیادی طور پر گرم علاقوں میں مناسب آبپاشی کی سہولت کے ساتھ، خصوصاً سندھ میں، کی جاتی ہے۔',
            'Watermelon' => 'تربوز موسم گرما کی ایک مقبول پھلوں کی فصل ہے جو اپنے میٹھے، رسیلے اور تازگی بخش ذائقے کے لیے مشہور ہے۔ اسے پاکستان اور دوسرے گرم ممالک میں بڑے پیمانے پر اگایا جاتا ہے۔ تربوز کسانوں کے لیے ایک اہم نقد آور فصل ہے کیونکہ گرم موسم میں اس کی منڈی میں طلب زیادہ ہوتی ہے۔ اسے بنیادی طور پر تازہ استعمال کیا جاتا ہے اور اس میں پانی کی مقدار زیادہ ہونے کی وجہ سے یہ گرمیوں میں جسم کو پانی فراہم کرنے کے لیے مفید ہے۔',
            'Melon' => 'خربوزہ موسم گرما کی ایک مقبول پھلوں کی فصل ہے جو اپنے میٹھے، رسیلے اور تازگی بخش ذائقے کے لیے مشہور ہے۔ اسے پاکستان کے گرم علاقوں اور دوسرے ممالک میں بڑے پیمانے پر اگایا جاتا ہے۔ گرم موسم میں زیادہ طلب کی وجہ سے خربوزے کی کاشت کسانوں کے لیے آمدنی کا اہم ذریعہ ہے۔ اسے بنیادی طور پر تازہ استعمال کیا جاتا ہے اور اس میں پانی کی مقدار زیادہ ہونے کی وجہ سے گرمیوں میں اسے خاص اہمیت حاصل ہے۔',
            'Mango' => 'آم پاکستان کی اہم ترین پھلوں کی فصلوں میں سے ایک ہے اور اسے پھلوں کا بادشاہ کہا جاتا ہے۔ یہ اپنے میٹھے ذائقے، خوشبودار مہک اور غذائی قدر کی وجہ سے بہت پسند کیا جاتا ہے۔ آم کی کاشت پاکستان کی زرعی معیشت میں اہم کردار ادا کرتی ہے، خصوصاً پنجاب اور سندھ میں۔ پاکستان دنیا میں آم پیدا کرنے اور برآمد کرنے والے بڑے ممالک میں شامل ہے اور یہاں اعلیٰ معیار کی مختلف اقسام پیدا کی جاتی ہیں۔ آم گرم اور مرطوب علاقوں کی آب و ہوا میں بہترین نشوونما پاتا ہے۔',
            'Lychee' => 'لیچی ایک مقبول گرم اور نیم گرم علاقوں کی پھلوں کی فصل ہے جو اپنے میٹھے، رسیلے اور خوشبودار پھل کے لیے مشہور ہے۔ اسے جنوبی ایشیا میں بڑے پیمانے پر اگایا جاتا ہے، خصوصاً چین، بھارت اور پاکستان میں۔ پاکستان میں لیچی ایک اہم موسمی پھل ہے جو کسانوں کی آمدنی اور مقامی پھلوں کی منڈیوں میں اہم حصہ ڈالتا ہے۔ لیچی کے درخت کو زیادہ نمی والی گرم آب و ہوا درکار ہوتی ہے اور اسے بنیادی طور پر تازہ استعمال کے لیے اگایا جاتا ہے۔',
            'Groundnut' => 'مونگ پھلی، جسے پی نٹ بھی کہا جاتا ہے، پاکستان اور دنیا کے بہت سے حصوں میں اگائی جانے والی ایک اہم تیل دار اور غذائی فصل ہے۔ اسے خوردنی تیل کی پیداوار، اسنیکس اور جانوروں کی خوراک کے لیے بڑے پیمانے پر استعمال کیا جاتا ہے۔ مونگ پھلی کی کاشت کسانوں کے لیے اہم ہے کیونکہ یہ اچھی آمدنی فراہم کرتی ہے اور نائٹروجن کو مٹی میں شامل کرکے اس کی زرخیزی بہتر بناتی ہے۔ یہ گرم آب و ہوا اور اچھی نکاسی والی مٹی میں بہترین نشوونما پاتی ہے۔',
            'Guava' => 'امرود پاکستان اور بہت سے دوسرے ممالک میں بڑے پیمانے پر اگائی جانے والی ایک اہم گرم اور نیم گرم علاقوں کی پھلوں کی فصل ہے۔ یہ اپنے میٹھے ذائقے، تیز خوشبو اور زیادہ غذائی قدر کے لیے مشہور ہے۔ امرود تمام آمدنی والے طبقات کے لیے نسبتاً سستا پھل ہے اور اسے بڑے پیمانے پر استعمال کیا جاتا ہے۔ اس کی کاشت کسانوں کو اچھی آمدنی فراہم کرتی ہے اور مقامی منڈیوں میں اس کی طلب زیادہ ہے۔',
            'Papaya' => 'پپیتا پاکستان اور دوسرے گرم علاقوں میں بڑے پیمانے پر کاشت کی جانے والی تیزی سے بڑھنے والی پھلوں کی فصل ہے۔ یہ اپنے میٹھے ذائقے، نرم ساخت اور زیادہ غذائی قدر کے لیے مشہور ہے۔ پپیتا ایک اہم تجارتی پھل ہے جو کسانوں کو نسبتاً جلد آمدنی فراہم کرتا ہے۔ اسے تازہ استعمال کے علاوہ جوس اور دیگر غذائی مصنوعات میں بھی استعمال کیا جاتا ہے۔',
            'Wheat' => 'گندم پاکستان اور بہت سے دوسرے ممالک کی اہم ترین بنیادی غذائی فصلوں میں سے ایک ہے۔ یہ لاکھوں لوگوں کے لیے خوراک کا بڑا ذریعہ ہے اور آٹا بنانے کے لیے بڑے پیمانے پر استعمال ہوتی ہے، جس سے روٹی، چپاتی، بسکٹ اور دیگر بیکری مصنوعات تیار کی جاتی ہیں۔ گندم کی کاشت پاکستان کی زرعی معیشت میں اہم کردار ادا کرتی ہے اور کسانوں کے لیے آمدنی کا اہم ذریعہ ہے۔',
            'Barley' => 'جو پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم اناج کی فصل ہے۔ اسے بنیادی طور پر خوراک، جانوروں کی خوراک اور مشروبات کی صنعت میں استعمال کیا جاتا ہے۔ جو دنیا کی قدیم ترین کاشت کی جانے والی فصلوں میں سے ایک ہے اور خشک اور کم زرخیز زمین میں بھی نشوونما پانے کی صلاحیت رکھتی ہے۔',
            'Broccoli' => 'بروکلی پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی غذائیت سے بھرپور سبزی کی فصل ہے۔ یہ بند گوبھی کے خاندان سے تعلق رکھتی ہے اور اسے سلاد، سوپ اور پکے ہوئے کھانوں میں بڑے پیمانے پر استعمال کیا جاتا ہے۔ بروکلی کی کاشت اس کی زیادہ غذائی قدر اور منڈی میں بڑھتی ہوئی طلب کی وجہ سے مقبول ہو رہی ہے۔',
            'Isabgol' => 'اسپغول پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم ادویاتی فصل ہے۔ اسے بنیادی طور پر بیج اور چھلکے کے لیے کاشت کیا جاتا ہے، جنہیں جڑی بوٹیوں سے تیار ادویات اور نظامِ ہاضمہ سے متعلق مصنوعات میں بڑے پیمانے پر استعمال کیا جاتا ہے۔ اسپغول اپنے صحت کے فوائد، خصوصاً ہاضمہ بہتر بنانے اور قبض سے نجات میں مدد دینے کے لیے مشہور ہے۔ یہ ٹھنڈی اور خشک آب و ہوا میں بہترین نشوونما پاتا ہے۔',
            'Fennel' => 'سونف ایک اہم مصالحے اور ادویاتی فصل ہے جو خوشبودار بیجوں کے لیے بڑے پیمانے پر اگائی جاتی ہے۔ اسے عام طور پر کھانا پکانے، مٹھائی سازی، جڑی بوٹیوں سے تیار ادویات اور منہ کی تازگی کے لیے استعمال کیا جاتا ہے۔ پاکستان میں سونف کی کاشت خصوصاً سندھ اور پنجاب میں اہم ہے۔ اس کی مقامی اور بین الاقوامی منڈیوں میں طلب زیادہ ہونے کی وجہ سے اس کی تجارتی قدر بھی زیادہ ہے۔ سونف اپنی میٹھی خوشبو اور ہاضمے سے متعلق صحت کے فوائد کے لیے مشہور ہے۔',
            'Onion' => 'پیاز پاکستان سمیت دنیا بھر میں اگائی جانے والی اہم ترین سبزیوں کی فصلوں میں سے ایک ہے۔ اسے تیز ذائقے اور غذائی قدر کی وجہ سے روزمرہ کھانا پکانے میں بڑے پیمانے پر استعمال کیا جاتا ہے۔ پیاز کی کاشت کسانوں کے لیے آمدنی کا ایک اہم ذریعہ ہے کیونکہ اس کی منڈی میں مسلسل طلب رہتی ہے۔',
            'Cauliflower' => 'پھول گوبھی پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔ اسے روزمرہ کھانوں میں بڑے پیمانے پر استعمال کیا جاتا ہے اور اس کی غذائی خصوصیات اور مختلف طریقوں سے پکانے کی صلاحیت کی وجہ سے اسے پسند کیا جاتا ہے۔ پھول گوبھی کی کاشت سبزیوں کی منڈی میں کسانوں کو آمدنی فراہم کرتی ہے اور اس کی طلب عام طور پر اچھی رہتی ہے۔',
        ];
        foreach ($introByCrop as $cropKey => $introUrdu) {
            if (stripos($text, $cropKey) === 0 && strpos($core, "\n") === false && strlen($core) > 250 && substr_count($core, '.') >= 3) return $introUrdu;
        }
        foreach ($introByCrop as $cropKey => $introUrdu) {
            if (stripos($core, $cropKey) === 0 && strpos($core, "\n") === false && strlen($core) > 250 && substr_count($core, '.') >= 3) return $introUrdu;
        }

        if (preg_match('/^[\p{Arabic}\s\d\p{P}\p{S}]+$/u', $core)) {
            return $leading . $this->normalizeUrdu($core) . $trailing;
        }

        $wholeNatural = [
            "Vitamin C: Strong immune system
Fiber: Better digestion
Carbohydrates: Energy source
Antioxidants: Disease protection
Minerals: Healthy body functions" => "وٹامن سی: قوتِ مدافعت مضبوط بنانے میں مدد دیتا ہے۔
ریشہ: ہاضمہ بہتر بناتا ہے۔
کاربوہائیڈریٹس: توانائی کا ذریعہ ہیں۔
اینٹی آکسیڈنٹس: بیماریوں سے تحفظ میں مدد دیتے ہیں۔
معدنیات: جسم کے صحت مند افعال کے لیے ضروری ہیں۔",
            "Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 30°C
Fruit Development: 15°C – 25°C

Kinnow grows best in warm climates with mild winters. Proper temperature is important for flowering, fruit setting, and fruit quality." => "انکرن کا درجہ حرارت: 20°C سے 30°C
نباتاتی نشوونما: 25°C سے 30°C
پھلوں کی نشوونما: 15°C سے 25°C

کینو گرم آب و ہوا اور معتدل سردیوں میں بہترین نشوونما پاتا ہے۔ مناسب درجہ حرارت پھول آنے، پھل بننے اور پھل کے معیار کے لیے اہم ہے۔",
            "Apples are harvested from July to October depending on the variety and climatic conditions. Fruits are ready when they develop proper color, sweetness, and size.

Why Apples are Harvested at This Time:

Suitable summer and autumn temperatures help fruits mature properly and improve taste and quality." => "سیب کی کٹائی قسم اور موسمی حالات کے مطابق جولائی سے اکتوبر تک کی جاتی ہے۔ جب پھل مناسب رنگ، مٹھاس اور جسامت حاصل کر لیں تو وہ کٹائی کے لیے تیار ہو جاتے ہیں۔

سیب کی کٹائی اس وقت کیوں کی جاتی ہے:

موسم گرما اور خزاں کا موزوں درجہ حرارت پھلوں کو مناسب طور پر پکنے اور ان کے ذائقے اور معیار کو بہتر بنانے میں مدد دیتا ہے۔",
            "Pit Digging: Deep pits for planting palm saplings
Organic Matter Mixing: Improves soil fertility
Leveling: Ensures proper irrigation flow
Weed Removal: Reduces competition for nutrients

Proper land preparation ensures strong root development and long-term plant growth." => "گڑھے کھودنا: کھجور کے پودے لگانے کے لیے گہرے گڑھے تیار کیے جاتے ہیں۔
نامیاتی مادے کا ملانا: مٹی کی زرخیزی بہتر بناتا ہے۔
ہموار کرنا: آبپاشی کے پانی کے مناسب بہاؤ کو یقینی بناتا ہے۔
جڑی بوٹیوں کا خاتمہ: غذائی اجزا کے لیے مقابلہ کم کرتا ہے۔

زمین کی مناسب تیاری جڑوں کی مضبوط نشوونما اور پودے کی طویل مدتی بڑھوتری کو یقینی بناتی ہے۔",
            "Characteristics of Good Date Saplings:
Healthy offshoots or tissue-cultured plants
Disease-free
Strong root system
True to variety

Good quality planting material ensures high yield and better fruit quality." => "کھجور کے اچھے پودوں کی خصوصیات:
صحت مند شاخ سے تیار کیے گئے یا ٹشو کلچر سے حاصل کردہ پودے
بیماری سے پاک
مضبوط جڑوں کا نظام
مطلوبہ قسم کے مطابق خالص پودے

اچھے معیار کا کاشت کاری مواد زیادہ پیداوار اور بہتر معیار کے پھل حاصل کرنے میں مدد دیتا ہے۔",
            "Soft Dates: Moist and sweet
Semi-dry Dates: Balanced texture
Dry Dates: Low moisture and long shelf life" => "نرم کھجور: نرم، نم اور میٹھی۔
نیم خشک کھجور: متوازن ساخت والی۔
خشک کھجور: نمی کم اور زیادہ مدت تک محفوظ رہنے والی۔",
            "Carbohydrates: Main energy source
Protein: Body growth
Fiber: Better digestion
Vitamins: Healthy body functions
Minerals: Bone and blood health" => "کاربوہائیڈریٹس: توانائی کا بنیادی ذریعہ ہیں۔
پروٹین: جسم کی نشوونما کے لیے ضروری ہے۔
ریشہ: ہاضمہ بہتر بنانے میں مدد دیتا ہے۔
وٹامنز: جسم کے صحت مند افعال کے لیے ضروری ہیں۔
معدنیات: ہڈیوں اور خون کی صحت کے لیے اہم ہیں۔",
            "Characteristics of Good Seed:
High germination rate
Disease-free
Certified variety
Bt cotton hybrid preferred

Good quality seed ensures strong plants and better fiber production." => "اچھے بیج کی خصوصیات:
انکرن کی زیادہ شرح
بیماری سے پاک
مصدقہ قسم
بی ٹی کپاس کی دوغلی قسم کو ترجیح دی جاتی ہے

اچھے معیار کا بیج مضبوط پودوں اور بہتر ریشے کی پیداوار کو یقینی بناتا ہے۔",
            "Initial Stage: Light irrigation after sowing
Vegetative Stage: Regular watering
Flowering Stage: Critical irrigation needed
Boll Formation Stage: Adequate moisture required

Cotton requires moderate irrigation and is sensitive to both drought and waterlogging." => "ابتدائی مرحلہ: بوائی کے بعد ہلکی آبپاشی کریں۔
نباتاتی مرحلہ: باقاعدگی سے پانی دیں۔
پھول آنے کا مرحلہ: اس مرحلے پر آبپاشی بہت ضروری ہے۔
ٹینڈے بننے کا مرحلہ: مناسب مقدار میں نمی ضروری ہے۔

کپاس کو معتدل آبپاشی درکار ہوتی ہے اور یہ خشک سالی اور پانی کے جمع ہونے، دونوں کے لیے حساس ہے۔",
            "Germination Temperature: 20°C – 30°C
Growth Temperature: 25°C – 35°C
Ripening Stage: 20°C – 30°C

Sugarcane grows best in warm and humid climates with long frost-free periods. High sunlight and water availability are essential for good yield." => "انکرن کا درجہ حرارت: 20°C سے 30°C
نشوونما کا درجہ حرارت: 25°C سے 35°C
پکنے کا مرحلہ: 20°C سے 30°C

گنا طویل عرصے تک پالا نہ پڑنے والی گرم اور مرطوب آب و ہوا میں بہترین نشوونما پاتا ہے۔ اچھی پیداوار کے لیے زیادہ دھوپ اور پانی کی وافر دستیابی ضروری ہے۔",
            "Maize is harvested 3–4 months after sowing. Spring crop is harvested in June–July, while summer crop is harvested in October–November.

Why Maize is Harvested at This Time:

The crop is harvested when cobs become fully mature and kernels harden. Dry weather ensures better grain quality and storage life." => "مکئی کی کٹائی بوائی کے 3 سے 4 ماہ بعد کی جاتی ہے۔ بہاری فصل کی کٹائی جون سے جولائی تک جبکہ موسم گرما کی فصل کی کٹائی اکتوبر سے نومبر تک کی جاتی ہے۔

مکئی کی کٹائی اس وقت کیوں کی جاتی ہے:

فصل اس وقت کاٹی جاتی ہے جب بھٹے مکمل طور پر پک جائیں اور دانے سخت ہو جائیں۔ خشک موسم دانوں کے بہتر معیار اور زیادہ مدت تک محفوظ رہنے میں مدد دیتا ہے۔",
            "Initial Stage: Light irrigation after sowing
Vegetative Stage: Regular irrigation every 7–10 days
Tasseling Stage: Critical irrigation required
Grain Filling Stage: Adequate moisture needed

Maize requires moderate irrigation, but water stress during tasseling reduces yield significantly." => "ابتدائی مرحلہ: بوائی کے بعد ہلکی آبپاشی کریں۔
نباتاتی مرحلہ: ہر 7 سے 10 دن بعد باقاعدگی سے آبپاشی کریں۔
بالیاں نکلنے کا مرحلہ: اس مرحلے پر آبپاشی بہت ضروری ہے۔
دانے بھرنے کا مرحلہ: مناسب مقدار میں نمی ضروری ہے۔

مکئی کو معتدل آبپاشی درکار ہوتی ہے، لیکن بالیاں نکلنے کے مرحلے میں پانی کی کمی پیداوار میں نمایاں کمی کر سکتی ہے۔",
            "Cabbage is harvested from November to March depending on the variety and climate conditions. The crop is ready when heads become firm, compact, and reach marketable size.

Why Cabbage is Harvested at This Time:

Cool winter weather helps maintain head quality and freshness. Timely harvesting improves market value and prevents head cracking." => "بند گوبھی کی کٹائی قسم اور آب و ہوا کے حالات کے مطابق نومبر سے مارچ تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب گوبھی کے سر مضبوط اور گھنے ہو جائیں اور منڈی میں فروخت کے قابل جسامت حاصل کر لیں۔

بند گوبھی کی کٹائی اس وقت کیوں کی جاتی ہے:

سردیوں کا ٹھنڈا موسم گوبھی کے سر کا معیار اور تازگی برقرار رکھنے میں مدد دیتا ہے۔ بروقت کٹائی سے منڈی کی قدر بہتر ہوتی ہے اور گوبھی کے سر پھٹنے سے بچتے ہیں۔",
            "Vitamin C: Boosts immunity
Fiber: Improves digestion
Calcium: Bone health
Potassium: Supports body functions
Antioxidants: Protect body cells" => "وٹامن سی: قوتِ مدافعت بڑھانے میں مدد دیتا ہے۔
ریشہ: ہاضمہ بہتر بناتا ہے۔
کیلشیم: ہڈیوں کی صحت کے لیے اہم ہے۔
پوٹاشیم: جسم کے افعال کو درست رکھنے میں مدد دیتا ہے۔
اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔",
            "Beetroot is harvested from December to February depending on the variety and sowing time. The crop becomes ready when roots reach proper size and deep red color.

Why Beetroot is Harvested at This Time:

Cool weather helps proper root growth and sweetness. Timely harvesting improves root quality, taste, and market value." => "چقندر کی کٹائی قسم اور بوائی کے وقت کے مطابق دسمبر سے فروری تک کی جاتی ہے۔ جب جڑیں مناسب جسامت حاصل کر لیں اور ان کا رنگ گہرا سرخ ہو جائے تو فصل تیار ہو جاتی ہے۔

چقندر کی کٹائی اس وقت کیوں کی جاتی ہے:

ٹھنڈا موسم جڑوں کی مناسب نشوونما اور مٹھاس میں مدد دیتا ہے۔ بروقت کٹائی سے جڑوں کا معیار، ذائقہ اور منڈی کی قدر بہتر ہوتی ہے۔",
            "Carbohydrates: Energy source
Fiber: Improves digestion
Iron: Supports blood health
Vitamins: Healthy body functions
Antioxidants: Protect body cells" => "کاربوہائیڈریٹس: توانائی کا ذریعہ ہیں۔
ریشہ: ہاضمہ بہتر بناتا ہے۔
آئرن: خون کی صحت برقرار رکھنے میں مدد دیتا ہے۔
وٹامنز: جسم کے صحت مند افعال کے لیے ضروری ہیں۔
اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔",
            "Turnip is an important root vegetable crop grown in Pakistan and many other countries. It is commonly used in curries, salads, pickles, and cooked dishes. Turnip farming is beneficial because it grows quickly and provides good income to farmers. Both roots and leaves are edible and rich in nutrients. Turnips grow best in cool weather and fertile well-drained soil." => "شلجم پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم جڑ والی سبزی کی فصل ہے۔ اسے سالن، سلاد، اچار اور مختلف پکے ہوئے کھانوں میں عام طور پر استعمال کیا جاتا ہے۔ شلجم کی کاشت فائدہ مند ہے کیونکہ یہ تیزی سے بڑھتا ہے اور کسانوں کو اچھی آمدنی فراہم کرتا ہے۔ اس کی جڑیں اور پتے دونوں کھانے کے قابل اور غذائی اجزا سے بھرپور ہوتے ہیں۔ شلجم ٹھنڈے موسم اور زرخیز، اچھی نکاسی والی مٹی میں بہترین نشوونما پاتا ہے۔",
            "Turnips are harvested from November to February depending on the variety and sowing time. The crop becomes ready when roots reach suitable size and become tender.

Why Turnips are Harvested at This Time:

Cool weather improves root quality, sweetness, and texture. Timely harvesting prevents roots from becoming hard and fibrous." => "شلجم کی کٹائی قسم اور بوائی کے وقت کے مطابق نومبر سے فروری تک کی جاتی ہے۔ جب جڑیں مناسب جسامت حاصل کر لیں اور نرم ہو جائیں تو فصل تیار ہو جاتی ہے۔

شلجم کی کٹائی اس وقت کیوں کی جاتی ہے:

ٹھنڈا موسم جڑوں کے معیار، مٹھاس اور ساخت کو بہتر بناتا ہے۔ بروقت کٹائی سے جڑوں کو سخت اور ریشے دار ہونے سے بچایا جا سکتا ہے۔",
            "Germination Temperature: 15°C – 20°C
Vegetative Growth: 18°C – 25°C
Root Development: 10°C – 20°C

Turnips grow best in cool and moist climates. Excessive heat reduces root quality and affects growth." => "انکرن کا درجہ حرارت: 15°C سے 20°C
نباتاتی نشوونما: 18°C سے 25°C
جڑوں کی نشوونما: 10°C سے 20°C

شلجم ٹھنڈی اور نم آب و ہوا میں بہترین نشوونما پاتا ہے۔ ضرورت سے زیادہ گرمی جڑوں کا معیار کم کرتی ہے اور نشوونما کو متاثر کرتی ہے۔",
            "Germination Stage: Light irrigation required
Root Development Stage: Regular moisture needed
Vegetative Stage: Moderate irrigation
Maturity Stage: Avoid excessive watering

Turnips require regular but controlled irrigation for proper root growth." => "انکرن کا مرحلہ: ہلکی آبپاشی ضروری ہے۔
جڑوں کی نشوونما کا مرحلہ: باقاعدہ نمی برقرار رکھیں۔
نباتاتی مرحلہ: معتدل آبپاشی کریں۔
پختگی کا مرحلہ: ضرورت سے زیادہ پانی دینے سے گریز کریں۔

مناسب جڑوں کی نشوونما کے لیے شلجم کو باقاعدہ لیکن قابو میں رکھی گئی آبپاشی درکار ہوتی ہے۔",
            "Carbohydrates: Energy source
Fiber: Improves digestion
Vitamin C: Strengthens immunity
Calcium: Bone health
Minerals: Healthy body functions" => "کاربوہائیڈریٹس: توانائی کا ذریعہ ہیں۔
ریشہ: ہاضمہ بہتر بناتا ہے۔
وٹامن سی: قوتِ مدافعت مضبوط بنانے میں مدد دیتا ہے۔
کیلشیم: ہڈیوں کی صحت کے لیے اہم ہے۔
معدنیات: جسم کے صحت مند افعال کو برقرار رکھنے میں مدد دیتی ہیں۔",
            "Turnip is an important vegetable crop with high nutritional and market value. It provides income to farmers and is widely used in homes and food industries. Turnips are beneficial for human health because they contain vitamins, minerals, and dietary fiber." => "شلجم ایک اہم سبزی کی فصل ہے جس کی غذائی اور تجارتی قدر زیادہ ہے۔ یہ کسانوں کو آمدنی فراہم کرتی ہے اور گھروں اور خوراک کی صنعت میں بڑے پیمانے پر استعمال ہوتی ہے۔ شلجم انسانی صحت کے لیے بھی مفید ہے کیونکہ اس میں وٹامنز، معدنیات اور غذائی ریشہ پایا جاتا ہے۔",
            "Nitrogen (N): Plant growth
Phosphorus (P): Root and seed development
Potassium (K): Improves seed quality

Balanced fertilizer application improves yield, oil content, and plant health." => "نائٹروجن: پودے کی نشوونما۔
فاسفورس: جڑوں اور بیج کی نشوونما۔
پوٹاشیم: بیج کا معیار بہتر بناتا ہے۔

متوازن مقدار میں کھاد کے استعمال سے پیداوار، تیل کی مقدار اور پودے کی صحت بہتر ہوتی ہے۔",
            "Omega-3 Fatty Acids: Heart health
Protein: Body growth
Fiber: Better digestion
Vitamins: Healthy body functions
Minerals: Bone and blood health" => "اومیگا 3 فیٹی ایسڈز: دل کی صحت کے لیے مفید ہیں۔
پروٹین: جسم کی نشوونما کے لیے ضروری ہے۔
ریشہ: ہاضمہ بہتر بنانے میں مدد دیتا ہے۔
وٹامنز: جسم کے صحت مند افعال کے لیے ضروری ہیں۔
معدنیات: ہڈیوں اور خون کی صحت کے لیے اہم ہیں۔",
            "Vitamins: Supports body health
Fiber: Helps digestion
Calcium: Strengthens bones
Iron: Improves blood health
Antioxidants: Protect body cells" => "وٹامنز: جسم کی صحت برقرار رکھنے میں مدد دیتے ہیں۔
ریشہ: ہاضمہ بہتر بنانے میں مدد دیتا ہے۔
کیلشیم: ہڈیوں کو مضبوط بناتا ہے۔
آئرن: خون کی صحت بہتر بنانے میں مدد دیتا ہے۔
اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔",
            "Dietary Fiber: Improves digestion
Protein: Supports body growth
Minerals: Supports body functions
Natural Husk: Relieves constipation
Antioxidants: Protect body cells" => "غذائی ریشہ: ہاضمہ بہتر بناتا ہے۔
پروٹین: جسم کی نشوونما میں مدد دیتا ہے۔
معدنیات: جسم کے افعال کو درست رکھنے میں مدد دیتی ہیں۔
قدرتی چھلکا: قبض سے نجات میں مدد دیتا ہے۔
اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔",
            "Orange plants are usually planted from February to March or during August to September in Pakistan. Mild temperatures and proper soil moisture during these periods help healthy root establishment and plant growth.

Why Oranges are Planted in These Seasons:

Moderate weather conditions support better root development and reduce stress on young plants. Proper rainfall and irrigation availability also help healthy orchard establishment." => "پاکستان میں مالٹے کے پودے عموماً فروری سے مارچ یا اگست سے ستمبر کے دوران لگائے جاتے ہیں۔ ان اوقات میں معتدل درجہ حرارت اور مٹی میں مناسب نمی جڑوں کے مضبوط قیام اور پودے کی صحت مند نشوونما میں مدد دیتی ہے۔

مالٹے کو ان موسموں میں کیوں لگایا جاتا ہے:

معتدل موسمی حالات جڑوں کی بہتر نشوونما میں مدد دیتے ہیں اور ننھے پودوں پر دباؤ کم کرتے ہیں۔ مناسب بارش اور آبپاشی کی دستیابی بھی باغ کے صحت مند قیام میں مدد دیتی ہے۔",
            "Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 30°C
Fruit Development: 15°C – 25°C

Oranges grow best in warm climates with mild winters and moderate humidity. Proper temperature is important for flowering, fruit setting, and fruit quality." => "انکرن کا درجہ حرارت: 20°C سے 30°C
نباتاتی نشوونما: 25°C سے 30°C
پھلوں کی نشوونما: 15°C سے 25°C

مالٹے گرم آب و ہوا، معتدل سردیوں اور درمیانی نمی میں بہترین نشوونما پاتے ہیں۔ مناسب درجہ حرارت پھول آنے، پھل بننے اور پھل کے معیار کے لیے اہم ہے۔",
            "Crown Root Stage: Important irrigation
Tillering Stage: Supports shoot development
Heading Stage: Grain formation
Grain Filling Stage: Improves yield

Barley requires fewer irrigations compared to wheat and rice." => "تاجی جڑوں کا مرحلہ: اہم آبپاشی ضروری ہے۔
شاخیں بننے کا مرحلہ: نئی شاخوں کی نشوونما میں مدد دیتا ہے۔
بالیاں بننے کا مرحلہ: دانے بننے کا عمل شروع ہوتا ہے۔
دانے بھرنے کا مرحلہ: پیداوار بہتر ہوتی ہے۔

جو کو گندم اور چاول کے مقابلے میں کم آبپاشی کی ضرورت ہوتی ہے۔",
            "Germination Stage: Light irrigation
Vegetative Stage: Moderate irrigation
Flowering Stage: Critical stage for water supply
Pod Formation Stage: Controlled irrigation

Rapeseed requires less water compared to rice but timely irrigation is important for good yield." => "انکرن کا مرحلہ: ہلکی آبپاشی کریں۔
نباتاتی مرحلہ: معتدل آبپاشی کریں۔
پھول آنے کا مرحلہ: پانی کی فراہمی کے لیے یہ بہت اہم مرحلہ ہے۔
پھلی بننے کا مرحلہ: آبپاشی کو قابو میں رکھیں۔

رائی کو چاول کے مقابلے میں کم پانی درکار ہوتا ہے، لیکن اچھی پیداوار کے لیے بروقت آبپاشی ضروری ہے۔",
            "Germination Stage: Light irrigation
Vegetative Stage: Moderate irrigation
Flowering Stage: Critical watering stage
Seed Filling Stage: Controlled irrigation

Canola requires less water compared to rice but timely irrigation is important for good yield." => "انکرن کا مرحلہ: ہلکی آبپاشی کریں۔
نباتاتی مرحلہ: معتدل آبپاشی کریں۔
پھول آنے کا مرحلہ: اس مرحلے پر پانی دینا بہت ضروری ہے۔
بیج بھرنے کا مرحلہ: آبپاشی کو قابو میں رکھیں۔

کینولا کو چاول کے مقابلے میں کم پانی درکار ہوتا ہے، لیکن اچھی پیداوار کے لیے بروقت آبپاشی ضروری ہے۔",
            "Drip irrigation systems
Improved certified seed varieties
Mechanical fodder harvesters
Precision fertilizer application
Rotational grazing and fodder management systems

Modern technologies help increase lucerne yield and improve fodder quality while reducing water and labor costs." => "قطرہ قطرہ آبپاشی کے نظام
بہتر اور مصدقہ بیج کی اقسام
مشینی چارہ کاٹنے والی مشینیں
کھاد کا درست اور ضرورت کے مطابق استعمال
چرائی میں باقاعدہ ردوبدل اور چارے کے انتظام کے نظام

جدید ٹیکنالوجی لوسرن کی پیداوار اور چارے کا معیار بہتر بنانے میں مدد دیتی ہے جبکہ پانی اور محنت کے اخراجات کم کرتی ہے۔",
            "Characteristics of Good Seed:
Disease-free seed tubers
Medium-sized healthy tubers
Certified variety
High sprouting ability

Good seed ensures uniform crop growth and higher production." => "اچھے بیج کی خصوصیات:
بیماری سے پاک بیج کے گٹھے
درمیانی جسامت کے صحت مند گٹھے
مصدقہ قسم
اچھی پھوٹ کی صلاحیت

اچھا بیج فصل کی یکساں نشوونما اور زیادہ پیداوار کو یقینی بناتا ہے۔",
            "Carbohydrates: Main energy source
Protein: Supports body growth
Fiber: Improves digestion
Vitamin C: Boosts immunity
Potassium: Maintains body functions" => "کاربوہائیڈریٹس: توانائی کا بنیادی ذریعہ ہیں۔
پروٹین: جسم کی نشوونما میں مدد دیتا ہے۔
ریشہ: ہاضمہ بہتر بناتا ہے۔
وٹامن سی: قوتِ مدافعت بڑھانے میں مدد دیتا ہے۔
پوٹاشیم: جسم کے افعال کو درست رکھنے میں مدد دیتا ہے۔",
            "Ploughing: Light to medium ploughing for fine soil texture
Leveling: Ensures uniform irrigation
Weed Removal: Reduces competition
Organic Manure: Improves leaf quality and growth

Proper land preparation supports fast germination and healthy leafy development." => "ہل چلانا: مٹی کی باریک اور نرم ساخت کے لیے ہلکی سے درمیانی گہرائی تک ہل چلایا جاتا ہے۔
ہموار کرنا: آبپاشی کی یکساں تقسیم کو یقینی بناتا ہے۔
جڑی بوٹیوں کا خاتمہ: فصل کے ساتھ مقابلہ کم کرتا ہے۔
نامیاتی کھاد: پتوں کے معیار اور نشوونما کو بہتر بناتی ہے۔

زمین کی مناسب تیاری تیز انکرن اور صحت مند پتوں کی نشوونما میں مدد دیتی ہے۔",
            "Peas are harvested from February to April depending on the variety. Pods are picked when they are fully developed but still tender for vegetable use, or left to dry for seed collection.

Why Peas are Harvested at This Time:

Spring season provides suitable weather for pod maturity and harvesting. Warm but not extreme temperatures help maintain quality and yield." => "مٹر کی کٹائی قسم کے مطابق فروری سے اپریل تک کی جاتی ہے۔ سبزی کے لیے پھلیاں مکمل نشوونما کے بعد لیکن نرم حالت میں توڑی جاتی ہیں، جبکہ بیج حاصل کرنے کے لیے انہیں خشک ہونے دیا جاتا ہے۔

مٹر کی کٹائی اس وقت کیوں کی جاتی ہے:

بہار کا موسم پھلیوں کے پکنے اور کٹائی کے لیے موزوں ہوتا ہے۔ معتدل گرم درجہ حرارت فصل کے معیار اور پیداوار کو برقرار رکھنے میں مدد دیتا ہے۔",
            "Carrots are harvested from November to February depending on variety and sowing time. They are harvested when roots reach full size and develop good color and sweetness.

Why Carrots are Harvested at This Time:

Winter and early spring conditions help maintain root quality and prevent damage from heat." => "گاجروں کی کٹائی قسم اور بوائی کے وقت کے مطابق نومبر سے فروری تک کی جاتی ہے۔ جب جڑیں مکمل جسامت حاصل کر لیں اور ان میں اچھا رنگ اور مٹھاس پیدا ہو جائے تو انہیں نکال لیا جاتا ہے۔

گاجروں کی کٹائی اس وقت کیوں کی جاتی ہے:

موسم سرما اور ابتدائی بہار کے حالات جڑوں کا معیار برقرار رکھنے اور گرمی سے ہونے والے نقصان سے بچانے میں مدد دیتے ہیں۔",
            "Deep ploughing: Loosens soil for root penetration
Fine tilth preparation: Removes clods and stones
Organic matter addition: Improves soil fertility
Leveling: Ensures uniform irrigation

Proper land preparation ensures smooth and straight carrot roots." => "گہرا ہل چلانا: جڑوں کے پھیلاؤ کے لیے مٹی کو نرم کرتا ہے۔
باریک بھربھری مٹی کی تیاری: مٹی کے ڈھیلے اور پتھر نکال دیتی ہے۔
نامیاتی مادے کا اضافہ: مٹی کی زرخیزی بہتر بناتا ہے۔
ہموار کرنا: آبپاشی کی یکساں تقسیم یقینی بناتا ہے۔

زمین کی مناسب تیاری سے گاجروں کی جڑیں ہموار اور سیدھی نشوونما پاتی ہیں۔",
            "Beta-carotene: Improves vision
Vitamin A: Eye and skin health
Fiber: Digestive health
Vitamin K: Blood health
Minerals: Potassium and calcium for body strength" => "بیٹا کیروٹین: بینائی بہتر بنانے میں مدد دیتا ہے۔
وٹامن اے: آنکھوں اور جلد کی صحت کے لیے مفید ہے۔
ریشہ: نظامِ ہاضمہ کی صحت کے لیے مفید ہے۔
وٹامن کے: خون کی صحت کے لیے اہم ہے۔
معدنیات: پوٹاشیم اور کیلشیم جسم کو مضبوط بنانے میں مدد دیتے ہیں۔",
            "Cauliflower is harvested from November to March depending on the variety and planting time. The crop is ready when the curd becomes firm, compact, and white in color.

Why Cauliflower is Harvested at This Time:

Cool and dry winter conditions help maintain curd quality, texture, and color. Delayed harvesting can reduce quality and market value." => "پھول گوبھی کی کٹائی قسم اور کاشت کے وقت کے مطابق نومبر سے مارچ تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب گوبھی کا پھول مضبوط، گھنا اور سفید ہو جائے۔

پھول گوبھی کی کٹائی اس وقت کیوں کی جاتی ہے:

سردیوں کے ٹھنڈے اور خشک حالات گوبھی کے پھول کے معیار، ساخت اور رنگ کو برقرار رکھنے میں مدد دیتے ہیں۔ دیر سے کٹائی کرنے سے معیار اور منڈی کی قدر کم ہو سکتی ہے۔",
            "Ploughing: Loosens the soil
Leveling: Ensures uniform irrigation
FYM Application: Improves soil fertility
Weed Removal: Reduces competition

Proper land preparation supports healthy root development and better yield." => "ہل چلانا: مٹی کو نرم کرتا ہے۔
ہموار کرنا: آبپاشی کی یکساں تقسیم یقینی بناتا ہے۔
گوبر کی کھاد کا استعمال: مٹی کی زرخیزی بہتر بناتا ہے۔
جڑی بوٹیوں کا خاتمہ: فصل کے ساتھ مقابلہ کم کرتا ہے۔

زمین کی مناسب تیاری صحت مند جڑوں کی نشوونما اور بہتر پیداوار میں مدد دیتی ہے۔",
            "Vitamin C: Boosts immunity
Fiber: Improves digestion
Vitamin K: Bone health
Antioxidants: Protect body cells
Minerals: Support healthy body functions" => "وٹامن سی: قوتِ مدافعت بڑھانے میں مدد دیتا ہے۔
ریشہ: ہاضمہ بہتر بناتا ہے۔
وٹامن کے: ہڈیوں کی صحت کے لیے اہم ہے۔
اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔
معدنیات: جسم کے صحت مند افعال کو برقرار رکھنے میں مدد دیتی ہیں۔",
            "Radish is harvested from November to January depending on the variety and climate conditions. The crop becomes ready when roots reach proper size and remain tender.

Why Radish is Harvested at This Time:

Cool winter weather helps produce crisp, juicy, and flavorful roots. Delayed harvesting may result in hard and fibrous roots." => "مولی کی کٹائی قسم اور آب و ہوا کے حالات کے مطابق نومبر سے جنوری تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت حاصل کر لیں اور نرم رہیں۔

مولی کی کٹائی اس وقت کیوں کی جاتی ہے:

سردیوں کا ٹھنڈا موسم کراری، رسیلی اور ذائقے دار جڑیں پیدا کرنے میں مدد دیتا ہے۔ دیر سے کٹائی کرنے سے جڑیں سخت اور ریشے دار ہو سکتی ہیں۔",
            "Protein: Body growth and repair
Fiber: Better digestion
Vitamins: Healthy body functions
Minerals: Bone and blood health
Antioxidants: Disease protection" => "پروٹین: جسم کی نشوونما اور بافتوں کی مرمت کے لیے ضروری ہے۔
ریشہ: ہاضمہ بہتر بنانے میں مدد دیتا ہے۔
وٹامنز: جسم کے صحت مند افعال کے لیے ضروری ہیں۔
معدنیات: ہڈیوں اور خون کی صحت کے لیے اہم ہیں۔
اینٹی آکسیڈنٹس: بیماریوں سے تحفظ میں مدد دیتے ہیں۔",
            "Fiber: Better digestion
Vitamins: Healthy body functions
Minerals: Bone and blood health
Water Content: Hydration support
Antioxidants: Disease protection" => "ریشہ: ہاضمہ بہتر بنانے میں مدد دیتا ہے۔
وٹامنز: جسم کے صحت مند افعال کے لیے ضروری ہیں۔
معدنیات: ہڈیوں اور خون کی صحت کے لیے اہم ہیں۔
پانی کی مقدار: جسم میں پانی کی مناسب مقدار برقرار رکھنے میں مدد دیتی ہے۔
اینٹی آکسیڈنٹس: بیماریوں سے تحفظ میں مدد دیتے ہیں۔",
            "Carbohydrates: Energy source
Vitamins: Healthy body functions
Minerals: Bone and blood health
Antioxidants: Disease protection
Medicinal Compounds: Improve immunity" => "کاربوہائیڈریٹس: توانائی کا ذریعہ ہیں۔
وٹامنز: جسم کے صحت مند افعال کے لیے ضروری ہیں۔
معدنیات: ہڈیوں اور خون کی صحت کے لیے اہم ہیں۔
اینٹی آکسیڈنٹس: بیماریوں سے تحفظ میں مدد دیتے ہیں۔
ادویاتی مرکبات: قوتِ مدافعت بہتر بنانے میں مدد دیتے ہیں۔",
            "Ploughing: Deep ploughing to loosen soil
Pit Preparation: Large pits filled with manure
Organic Matter: Mixed to improve fertility
Drainage: Proper system to avoid waterlogging

Good land preparation ensures healthy root growth and strong plant development." => "ہل چلانا: مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔
گڑھے کی تیاری: بڑے گڑھے کھود کر ان میں گوبر کی کھاد بھری جاتی ہے۔
نامیاتی مادہ: زرخیزی بہتر بنانے کے لیے مٹی میں ملایا جاتا ہے۔
نکاسی آب: پانی جمع ہونے سے بچنے کے لیے نکاسی کا مناسب نظام قائم کریں۔

زمین کی اچھی تیاری صحت مند جڑوں کی نشوونما اور پودے کی مضبوط بڑھوتری کو یقینی بناتی ہے۔",
            "Characteristics of Good Seed:
High-quality hybrid seeds
Disease-free seedlings
High germination rate
Fast-growing varieties

Hybrid seeds are preferred for better yield and disease resistance." => "اچھے بیج کی خصوصیات:
اعلیٰ معیار کے دوغلے بیج
بیماری سے پاک ننھے پودے
انکرن کی زیادہ شرح
تیزی سے بڑھنے والی اقسام

بہتر پیداوار اور بیماریوں کے خلاف مزاحمت کے لیے دوغلے بیجوں کو ترجیح دی جاتی ہے۔",
            "Vitamin C: Strong immunity booster
Vitamin A: Good for eyesight
Fiber: Improves digestion
Folate: Supports body growth
Papain Enzyme: Helps digestion" => "وٹامن سی: قوتِ مدافعت مضبوط بنانے میں مدد دیتا ہے۔
وٹامن اے: بینائی کے لیے مفید ہے۔
ریشہ: ہاضمہ بہتر بناتا ہے۔
فولیٹ: جسم کی نشوونما میں مدد دیتا ہے۔
پاپین انزائم: ہاضمہ بہتر بنانے میں مدد دیتا ہے۔",
            "Germination/Plant Growth Temperature: 15°C – 25°C
Flowering Stage: 10°C – 20°C (cool weather required)
Fruit Development: 20°C – 30°C

Peaches grow best in temperate climates with cool winters and mild summers. They require a certain amount of winter chill hours for proper flowering." => "انکرن اور پودے کی نشوونما کا درجہ حرارت: 15°C سے 25°C
پھول آنے کا مرحلہ: 10°C سے 20°C (ٹھنڈا موسم ضروری ہے)
پھلوں کی نشوونما: 20°C سے 30°C

آڑو معتدل آب و ہوا میں بہترین نشوونما پاتے ہیں جہاں سردیاں ٹھنڈی اور گرمیاں معتدل ہوں۔ مناسب پھول آنے کے لیے سردیوں کے دوران مخصوص مدت تک ٹھنڈا درجہ حرارت ضروری ہوتا ہے۔",
            "Ploughing: Deep ploughing to loosen soil
Pit Preparation: Large pits for saplings
Organic Matter: Mixed into soil for fertility
Drainage: Proper drainage system required

Good land preparation ensures healthy root growth and strong tree development." => "ہل چلانا: مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔
گڑھے کی تیاری: پودے لگانے کے لیے بڑے گڑھے تیار کیے جاتے ہیں۔
نامیاتی مادہ: زرخیزی بہتر بنانے کے لیے مٹی میں ملایا جاتا ہے۔
نکاسی آب: نکاسی آب کا مناسب نظام ضروری ہے۔

زمین کی اچھی تیاری صحت مند جڑوں کی نشوونما اور درخت کی مضبوط بڑھوتری کو یقینی بناتی ہے۔",
            "Characteristics of Good Planting Material:
Healthy grafted saplings
Disease-free plants
Strong root system
High-yield varieties

Grafted plants are preferred for early fruiting and better quality fruit." => "اچھے کاشت کاری مواد کی خصوصیات:
صحت مند پیوند شدہ پودے
بیماری سے پاک پودے
مضبوط جڑوں کا نظام
زیادہ پیداوار دینے والی اقسام

جلد پھل حاصل کرنے اور بہتر معیار کے پھل کے لیے پیوند شدہ پودوں کو ترجیح دی جاتی ہے۔",
            "Wheat is usually sown from November to December in Pakistan. Farmers prepare land after the monsoon season when soil moisture is suitable for germination. Cool weather helps in proper seed sprouting and early plant development.

Why Wheat is Sown in Winter:

Wheat requires cool temperatures for germination and early growth. Winter conditions provide ideal temperature and moisture balance for healthy crop development." => "پاکستان میں گندم کی بوائی عموماً نومبر سے دسمبر تک کی جاتی ہے۔ کسان برسات کے موسم کے بعد اس وقت زمین تیار کرتے ہیں جب مٹی میں انکرن کے لیے مناسب نمی موجود ہو۔ ٹھنڈا موسم بیج کے بہتر انکرن اور پودے کی ابتدائی نشوونما میں مدد دیتا ہے۔

گندم کو موسم سرما میں کیوں بویا جاتا ہے:

گندم کے انکرن اور ابتدائی نشوونما کے لیے ٹھنڈا درجہ حرارت ضروری ہے۔ موسم سرما کے حالات صحت مند فصل کی نشوونما کے لیے موزوں درجہ حرارت اور نمی کا توازن فراہم کرتے ہیں۔",
            "Crown Root Stage: First critical irrigation
Tillering Stage: Encourages shoot growth
Flowering Stage: Very important for yield
Grain Filling Stage: Improves grain size

Wheat requires 4–6 irrigations depending on soil and weather conditions." => "تاجی جڑوں کا مرحلہ: پہلی اہم آبپاشی ضروری ہوتی ہے۔
شاخیں بننے کا مرحلہ: نئی شاخوں کی نشوونما میں مدد دیتا ہے۔
پھول آنے کا مرحلہ: اچھی پیداوار کے لیے بہت اہم ہے۔
دانے بھرنے کا مرحلہ: دانوں کی جسامت بہتر ہوتی ہے۔

گندم کو مٹی اور موسمی حالات کے مطابق 4 سے 6 بار آبپاشی کی ضرورت ہوتی ہے۔",
            "Germination Stage: Light irrigation
Vegetative Stage: Moderate irrigation
Flowering Stage: Critical stage, careful watering
Seed Formation Stage: Limited irrigation

Mustard requires low to moderate irrigation and does not tolerate excess water." => "انکرن کا مرحلہ: ہلکی آبپاشی کریں۔
نباتاتی مرحلہ: معتدل آبپاشی کریں۔
پھول آنے کا مرحلہ: یہ اہم مرحلہ ہے، اس لیے احتیاط سے پانی دیں۔
بیج بننے کا مرحلہ: محدود آبپاشی کریں۔

سرسوں کو کم سے معتدل آبپاشی درکار ہوتی ہے اور یہ ضرورت سے زیادہ پانی برداشت نہیں کرتی۔",
            "Eggplant is harvested 60–90 days after transplanting. Once fruits reach proper size, color, and shine, they are picked. Harvesting continues for several weeks as new fruits keep forming.\n\nWhy Eggplant is Harvested in Stages:\n\nBrinjal produces fruits continuously over time. Regular picking encourages new fruit growth and increases total yield." => "بینگن کی کٹائی پنیری منتقل کرنے کے 60 سے 90 دن بعد کی جاتی ہے۔ جب پھل مناسب جسامت، رنگ اور چمک حاصل کر لیں تو انہیں توڑ لیا جاتا ہے۔ نئے پھل بنتے رہنے کی وجہ سے کئی ہفتوں تک کٹائی جاری رہتی ہے۔\n\nبینگن کی کٹائی مختلف مراحل میں کیوں کی جاتی ہے:\n\nبینگن مسلسل پھل دیتا رہتا ہے۔ باقاعدگی سے پھل توڑنے سے نئے پھل بننے کی حوصلہ افزائی ہوتی ہے اور مجموعی پیداوار میں اضافہ ہوتا ہے۔",
            "Soybean is usually sown in June to July in Pakistan during the Kharif season. Farmers prefer early monsoon conditions for better germination and growth.\n\nWhy Soybean is Sown in This Season:\n\nSoybean requires warm temperatures and sufficient moisture for germination. Monsoon rains help in early growth and improve plant establishment." => "پاکستان میں سویا بین کی بوائی عموماً خریف کے موسم میں جون سے جولائی تک کی جاتی ہے۔ بہتر انکرن اور ابتدائی نشوونما کے لیے کسان برسات کے آغاز کے حالات کو ترجیح دیتے ہیں۔\n\nسویا بین کو اس موسم میں کیوں بویا جاتا ہے:\n\nسویا بین کے انکرن کے لیے گرم درجہ حرارت اور کافی نمی ضروری ہے۔ برسات کی بارشیں ابتدائی نشوونما میں مدد دیتی ہیں اور پودوں کے مضبوط قیام کو بہتر بناتی ہیں۔",
            "Mango is harvested from May to September depending on the variety and region. Fruits are picked when they reach proper size, color, and aroma but are still firm.\n\nWhy Mango is Harvested at This Time:\n\nWarm weather during summer allows proper fruit ripening, sweetness development, and good market demand." => "آم کی کٹائی قسم اور علاقے کے مطابق مئی سے ستمبر تک کی جاتی ہے۔ پھل اس وقت توڑے جاتے ہیں جب وہ مناسب جسامت، رنگ اور خوشبو حاصل کر لیں لیکن ابھی مضبوط ہوں۔\n\nآم کی کٹائی اس وقت کیوں کی جاتی ہے:\n\nموسم گرما کا گرم موسم پھلوں کے مناسب پکنے، مٹھاس پیدا ہونے اور منڈی میں اچھی طلب کے لیے سازگار ہوتا ہے۔",
            "Germination/Plant Growth Temperature: 24°C – 30°C\nFlowering Stage: 20°C – 25°C (cool and dry weather preferred)\nFruit Development: 25°C – 35°C\n\nMango grows best in tropical and subtropical climates with long, hot summers and mild winters. Frost and extremely low temperatures can damage the crop." => "انکرن اور پودے کی نشوونما کا درجہ حرارت: 24°C سے 30°C\nپھول آنے کا مرحلہ: 20°C سے 25°C (ٹھنڈا اور خشک موسم موزوں ہے)\nپھلوں کی نشوونما: 25°C سے 35°C\n\nآم طویل اور گرم گرمیوں اور معتدل سردیوں والی گرم و نیم گرم آب و ہوا میں بہترین نشوونما پاتا ہے۔ پالا اور انتہائی کم درجہ حرارت فصل کو نقصان پہنچا سکتے ہیں۔",
            "Ploughing: Deep ploughing for loosening soil\nPit Digging: Large pits prepared for planting grafted plants\nOrganic Manure: Mixed with soil for fertility\nLeveling: Ensures proper irrigation\n\nProper land preparation helps strong root establishment and healthy tree growth." => "ہل چلانا: مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔\nگڑھے کھودنا: پیوند شدہ پودے لگانے کے لیے بڑے گڑھے تیار کیے جاتے ہیں۔\nنامیاتی کھاد: زرخیزی بہتر بنانے کے لیے مٹی میں ملائی جاتی ہے۔\nہموار کرنا: مناسب آبپاشی کو یقینی بناتا ہے۔\n\nزمین کی مناسب تیاری جڑوں کے مضبوط قیام اور درخت کی صحت مند نشوونما میں مدد دیتی ہے۔",
            "Germination/Plant Growth Temperature: 20°C – 30°C\nFlowering Stage: 15°C – 25°C (mild and dry conditions preferred)\nFruit Development: 25°C – 35°C\n\nLychee grows best in warm subtropical climates with high humidity. It is sensitive to frost and extremely dry conditions." => "انکرن اور پودے کی نشوونما کا درجہ حرارت: 20°C سے 30°C\nپھول آنے کا مرحلہ: 15°C سے 25°C (معتدل اور خشک حالات موزوں ہیں)\nپھلوں کی نشوونما: 25°C سے 35°C\n\nلیچی زیادہ نمی والی گرم و نیم گرم آب و ہوا میں بہترین نشوونما پاتی ہے۔ یہ پالا اور انتہائی خشک حالات کے لیے حساس ہے۔",
            "Characteristics of Good Planting Material:\nHealthy air-layered plants\nDisease-free saplings\nStrong root system\nHigh-quality nursery plants\n\nAir-layered plants are preferred for faster fruit production and better quality." => "اچھے کاشت کاری مواد کی خصوصیات:\nصحت مند گٹی سے تیار کیے گئے پودے\nبیماری سے پاک پودے\nمضبوط جڑوں کا نظام\nاعلیٰ معیار کے نرسری پودے\n\nجلد پھل حاصل کرنے اور بہتر معیار کے لیے گٹی سے تیار کیے گئے پودوں کو ترجیح دی جاتی ہے۔",
            "Germination Stage: Light irrigation\nFlowering Stage: Critical watering\nPod Development Stage: Regular irrigation\nMaturity Stage: Reduced watering for drying\n\nGroundnut needs moderate irrigation but waterlogging must be avoided." => "انکرن کا مرحلہ: ہلکی آبپاشی کریں۔\nپھول آنے کا مرحلہ: اس مرحلے پر پانی دینا بہت ضروری ہے۔\nپھلیوں کی نشوونما کا مرحلہ: باقاعدگی سے آبپاشی کریں۔\nپختگی کا مرحلہ: خشک ہونے کے لیے آبپاشی کم کر دیں۔\n\nمونگ پھلی کو معتدل آبپاشی درکار ہوتی ہے، لیکن پانی جمع ہونے سے ہر صورت بچنا چاہیے۔",
            "Water Content: High hydration source\nVitamin C: Boosts immunity\nVitamin A: Good for eyesight\nPotassium: Maintains body balance\nAntioxidants: Protect cells from damage" => "پانی کی مقدار: جسم کو پانی فراہم کرنے کا اچھا ذریعہ۔\nوٹامن سی: قوتِ مدافعت بڑھانے میں مدد دیتا ہے۔\nوٹامن اے: بینائی کے لیے مفید ہے۔\nپوٹاشیم: جسم میں توازن برقرار رکھنے میں مدد دیتا ہے۔\nاینٹی آکسیڈنٹس: خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔",
            "Water Content: High hydration\nVitamin C: Boosts immunity\nVitamin A: Good for eyesight\nPotassium: Maintains body fluid balance\nAntioxidants: Protect body cells" => "پانی کی مقدار: جسم میں پانی کی مناسب مقدار برقرار رکھنے میں مدد دیتی ہے۔\nوٹامن سی: قوتِ مدافعت بڑھانے میں مدد دیتا ہے۔\nوٹامن اے: بینائی کے لیے مفید ہے۔\nپوٹاشیم: جسم میں سیال مادوں کا توازن برقرار رکھنے میں مدد دیتا ہے۔\nاینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔",
            "Ploughing: Deep ploughing to loosen soil\nPit Preparation: Large pits prepared for plantation\nOrganic Manure: Added to improve fertility\nLeveling: Ensures proper irrigation and drainage\n\nProper land preparation supports strong root development and healthy tree growth." => "ہل چلانا: مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔\nگڑھے کی تیاری: پودے لگانے کے لیے بڑے گڑھے تیار کیے جاتے ہیں۔\nنامیاتی کھاد: زرخیزی بہتر بنانے کے لیے شامل کی جاتی ہے۔\nہموار کرنا: مناسب آبپاشی اور نکاسی آب کو یقینی بناتا ہے۔\n\nزمین کی مناسب تیاری جڑوں کی مضبوط نشوونما اور درخت کی صحت مند بڑھوتری میں مدد دیتی ہے۔",
            "Characteristics of Good Planting Material:\nHealthy seedlings or grafted plants\nDisease-free plants\nStrong root system\nHigh-yield varieties\n\nGrafted plants are preferred for early fruiting and better quality yield." => "اچھے کاشت کاری مواد کی خصوصیات:\nصحت مند ننھے پودے یا پیوند شدہ پودے\nبیماری سے پاک پودے\nمضبوط جڑوں کا نظام\nزیادہ پیداوار دینے والی اقسام\n\nجلد پھل حاصل کرنے اور بہتر معیار کی پیداوار کے لیے پیوند شدہ پودوں کو ترجیح دی جاتی ہے۔",
        ];
        if (isset($wholeNatural[$core])) return $leading . $wholeNatural[$core] . $trailing;

        $naturalWhole = $this->translateAgricultureNaturalSentence($core);
        if ($naturalWhole !== $core) {
            return $leading . $naturalWhole . $trailing;
        }

        $structuredWhole = $this->translateAgricultureStructuredSentence($core);
        if ($structuredWhole !== $core && !$this->hasEnglish($structuredWhole)) {
            return $leading . $structuredWhole . $trailing;
        }

        $lines = preg_split('/\R/u', $core);
        if ($lines === false) $lines = [$core];

        $translatedLines = [];
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                $translatedLines[] = '';
                continue;
            }

            $parts = preg_split('/(?<!\d[.!?؟۔])(?<=[.!?؟۔])\s+(?=[A-Z0-9])/u', $line, -1, PREG_SPLIT_NO_EMPTY);
            if ($parts === false || !$parts) $parts = [$line];
            $translatedParts = [];

            foreach ($parts as $unit) {
                $unit = trim($unit);
                if ($unit === '') continue;
                $natural = $this->translateAgricultureNaturalSentence($unit);
                $labelOut = $this->translateAgricultureLabelLine($unit);
                $structured = $this->translateAgricultureStructuredSentence($unit);
                $sentence = $this->applyAgricultureSentenceRules($unit);
                $out = $natural !== $unit ? $natural : ($structured !== $unit ? $structured : ($labelOut !== $unit ? $labelOut : ($sentence !== $unit ? $sentence : $unit)));

                if ($this->hasEnglish($out)) {
                    $candidate = $this->translateAgricultureGenericSentence($unit);
                    if (!$this->hasEnglish($candidate)) $out = $candidate;
                }

                $out = $this->applyAgriculturePhraseRules($out);
                $out = $this->fixGrammar($out);

                if ($this->hasEnglish($out)) {
                    $candidate = $this->translateAgricultureGenericSentence($out);
                    if (!$this->hasEnglish($candidate)) $out = $candidate;
                }

                $out = $this->applyAgriculturePhraseRules($out);
                $out = $this->fixGrammar($out);
                $translatedParts[] = $out;
            }

            $translatedLines[] = implode(' ', $translatedParts);
        }

        $result = implode("\n", $translatedLines);
        $result = $this->fixAgricultureKnownNames($result);
        $result = preg_replace('/(دانے بھرنے کا مرحلہ) مرحلہ/u', '$1', $result) ?? $result;
        $result = preg_replace('/(پختگی کا مرحلہ) مرحلہ/u', '$1', $result) ?? $result;
        $result = preg_replace('/بوٹینگ مرحلہ/u', 'بالیاں بننے کا مرحلہ', $result) ?? $result;
        $result = preg_replace('/(انکرن کا مرحلہ|پنیری کا مرحلہ|نباتاتی مرحلہ|بالیاں بننے کا مرحلہ|پھول آنے کا مرحلہ|دانے بھرنے کا مرحلہ|پختگی کا مرحلہ) مرحلہ/u', '$1', $result) ?? $result;
        $result = preg_replace('/([\p{Arabic}])\.(?=\s|$)/u', '$1۔', $result) ?? $result;
        if (str_contains($result, "\n")) {
            $result = implode("\n", array_map(fn($line) => $this->fixGrammar($line), explode("\n", $result)));
        } else {
            $result = $this->fixGrammar($result);
        }

        if (!$this->hasEnglish($result) && !$this->hasPhoneticGarbage($result)) {
            return $leading . $result . $trailing;
        }

        $strict = $this->translateKnownAgriculturePhrases($result);
        $strict = $this->fixAgricultureKnownNames($strict);
        $strict = $this->removeEnglish($strict);
        if (str_contains($strict, "\n")) {
            $strict = implode("\n", array_map(fn($line) => $this->fixGrammar($line), explode("\n", $strict)));
        } else {
            $strict = $this->fixGrammar($strict);
        }
        return $leading . $strict . $trailing;
    }

    private function translateAgricultureStructuredSentence(string $text): string
    {
        $text = trim($text);
        if ($text === '') return '';

        $exact = [
            'This is a commonly grown crop in rainfed areas where irrigation is limited.' => 'یہ فصل عموماً بارانی علاقوں میں اگائی جاتی ہے جہاں آبپاشی کی سہولت محدود ہوتی ہے۔',
            'Germination Stage: Seeds absorb moisture and sprout. Roots and shoots develop rapidly.' => 'انکرن کا مرحلہ: بیج نمی جذب کرکے پھوٹتے ہیں۔ جڑیں اور نئی شاخیں تیزی سے نشوونما پاتی ہیں۔',
            'Booting Stage: The panicle develops inside the stem.' => 'بالیاں بننے کا مرحلہ: پھولوں کا گچھا تنے کے اندر نشوونما پاتا ہے۔',
            'Fruit Development: Regular watering for better fruit size' => 'پھلوں کی نشوونما: بہتر جسامت کے لیے باقاعدگی سے پانی دیں۔',
            'Clean and uniform size' => 'صاف اور یکساں جسامت۔',
            'Uniform grain size' => 'دانے یکساں جسامت کے ہوں۔',
            'Uniform seed size' => 'بیج یکساں جسامت کے ہوں۔',
            'Uniform seed size and color' => 'بیج یکساں جسامت اور رنگ کے ہوں۔',
            'Uniform size' => 'یکساں جسامت۔',
            'Uniform size and color' => 'یکساں جسامت اور رنگ۔',
            'Large bulb size' => 'بڑی گانٹھ کی جسامت۔',
            'Uniform grain size' => 'دانے یکساں حجم کے ہوں۔',
            'Uniform seed size' => 'بیج یکساں حجم کے ہوں۔',
            'Clean and uniform size' => 'بیج صاف اور یکساں حجم کے ہوں۔',
            'Uniform seed size and color' => 'بیج یکساں حجم اور رنگ کے ہوں۔',
            'Uniform size' => 'حجم یکساں ہو۔',
            'Uniform size and color' => 'حجم اور رنگ یکساں ہوں۔',
            'Large bulb size' => 'بڑی گانٹھ کے لیے موزوں قسم۔',
            'Fruit Development: Regular watering for better fruit size' => 'پھلوں کی نشوونما: بہتر حجم کے لیے باقاعدگی سے پانی دیں۔',
            'Grain Filling Stage: Improves grain size' => 'دانے بھرنے کا مرحلہ: دانوں کا حجم بہتر ہوتا ہے۔',
            'Seed Formation Stage: Limited irrigation' => 'بیج بننے کا مرحلہ: اس دوران محدود آبپاشی درکار ہوتی ہے۔',
            'Potassium (K): Fruit size, sweetness, and quality' => 'پوٹاشیم: پھلوں کے بہتر حجم، مٹھاس اور معیار کے لیے ضروری ہے۔',
            'Potassium (K): Fruit sweetness, size, and quality' => 'پوٹاشیم: پھلوں کی مٹھاس، بہتر حجم اور معیار کے لیے ضروری ہے۔',
            'Potassium (K): Fruit size, taste, and quality' => 'پوٹاشیم: پھلوں کے بہتر حجم، ذائقے اور معیار کے لیے ضروری ہے۔',
            'Potassium (K): Fruit size, color, and pungency' => 'پوٹاشیم: پھلوں کے حجم، رنگ اور تیزی بہتر بنانے میں مدد دیتا ہے۔',
            'Potassium (K): Fruit size and quality' => 'پوٹاشیم: پھلوں کے حجم اور معیار کو بہتر بناتا ہے۔',
            'Potassium (K): Fruit quality and size' => 'پوٹاشیم: پھلوں کے معیار اور حجم کو بہتر بناتا ہے۔',
            'Potassium (K): Fruit size, quality, and shelf life' => 'پوٹاشیم: پھلوں کے حجم، معیار اور محفوظ رہنے کی مدت کو بہتر بناتا ہے۔',
            'Potassium (K): Fruit size and sweetness' => 'پوٹاشیم: پھلوں کے حجم اور مٹھاس کو بہتر بناتا ہے۔',
            'Potassium (K): Bulb size and quality' => 'پوٹاشیم: گانٹھ کے حجم اور معیار کو بہتر بناتا ہے۔',
            'Potassium (K): Curd quality and size' => 'پوٹاشیم: پھول گوبھی کے پھول کے معیار اور حجم کو بہتر بناتا ہے۔',
            'Panicle Initiation: Grain development' => 'بالیاں بننے کا مرحلہ: دانوں کی نشوونما شروع ہوتی ہے۔',
            'Balanced fertilization improves yield, cob size, and grain quality.' => 'متوازن کھاد کا استعمال پیداوار، بھٹے کے حجم اور دانوں کے معیار کو بہتر بناتا ہے۔',
            'Balanced fertilizers improve yield, fruit size, and plant health.' => 'متوازن کھادیں پیداوار، پھلوں کے حجم اور پودوں کی صحت بہتر کرتی ہیں۔',
            'Balanced fertilizers improve yield, fruit size, quality, and overall orchard production.' => 'متوازن کھادیں پھلوں کے حجم اور معیار کو بہتر بناتی ہیں اور باغ کی مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, quality, and overall orchard production.' => 'متوازن کھادیں پھلوں کے حجم اور معیار کو بہتر بناتی ہیں اور باغ کی مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, taste, and overall crop yield.' => 'متوازن کھادیں پھلوں کا حجم اور ذائقہ بہتر کرتی ہیں اور مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, sweetness, and overall orchard production.' => 'متوازن کھادیں پھلوں کا حجم اور مٹھاس بہتر کرتی ہیں اور باغ کی مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, sweetness, and overall production.' => 'متوازن کھادیں پھلوں کا حجم اور مٹھاس بہتر کرتی ہیں اور مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve fruit size, color, sweetness, and production.' => 'متوازن کھادیں پھلوں کا حجم، رنگ اور مٹھاس بہتر کرتی ہیں اور پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve root size, quality, and overall yield.' => 'متوازن کھادیں جڑوں کا حجم اور معیار بہتر کرتی ہیں اور مجموعی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizers improve bulb size, quality, and crop yield.' => 'متوازن کھادیں گانٹھ کا حجم اور معیار بہتر کرتی ہیں اور فصل کی پیداوار بڑھاتی ہیں۔',
            'Balanced fertilizer use improves leaf size, texture, and market value.' => 'متوازن کھاد کا استعمال پتوں کا حجم اور بناوٹ بہتر کرتا ہے اور منڈی میں قدر بڑھاتا ہے۔',
            'Balanced fertilization increases yield and improves tuber size.' => 'متوازن کھاد کا استعمال پیداوار بڑھاتا ہے اور گانٹھوں کا حجم بہتر کرتا ہے۔',
            'Balanced fertilizers help in better root size and sweetness.' => 'متوازن کھادیں جڑوں کی بہتر نشوونما اور مٹھاس میں مدد دیتی ہیں۔',
            'Balanced fertilizer application improves root size, color, and yield.' => 'متوازن کھاد کا استعمال جڑوں کا حجم اور رنگ بہتر کرتا ہے اور پیداوار بڑھاتا ہے۔',
            'Balanced fertilizer application improves root size, taste, and crop production.' => 'متوازن کھاد کا استعمال جڑوں کا حجم اور ذائقہ بہتر کرتا ہے اور فصل کی پیداوار بڑھاتا ہے۔',
            'Beef Tomatoes: Large size variety' => 'بیف ٹماٹر: بڑے پھلوں والی قسم۔',
            'Large Fruit Sweet Lime: Bigger fruit size' => 'بڑے پھل والا میٹھا لیموں: بڑے حجم کے پھل پیدا کرنے والی قسم۔',
            'Seed Development Stage: Limited irrigation required' => 'بیج بننے کا مرحلہ: محدود آبپاشی درکار ہوتی ہے۔',
            'Major Areas: Punjab, KPK, Sindh (limited areas)' => 'اہم علاقے: پنجاب، خیبر پختونخوا اور سندھ کے محدود علاقے۔',
            'Rich organic matter in soil helps improve curd size and overall plant growth.' => 'مٹی میں وافر نامیاتی مادہ پھول گوبھی کے پھول کا حجم بڑھانے اور پودے کی مجموعی نشوونما بہتر کرنے میں مدد دیتا ہے۔',
            'Proper seed rate ensures balanced plant spacing and good bulb size.' => 'بیج کی مناسب مقدار پودوں کے درمیان متوازن فاصلہ برقرار رکھنے اور اچھی جسامت کی گانٹھیں حاصل کرنے میں مدد دیتی ہے۔',
            'At maturity, tubers reach full size and skin becomes firm, which improves storage and transport quality.' => 'پختگی کے وقت گانٹھیں مکمل جسامت اختیار کر لیتی ہیں اور ان کا چھلکا سخت ہو جاتا ہے، جس سے ذخیرہ کرنے اور نقل و حمل کے دوران معیار بہتر رہتا ہے۔',
            'Pearl Millet is usually sown in June to July in Pakistan, especially in rainfed and dry areas where other crops cannot grow easily.' => 'پاکستان میں باجرے کی بوائی عام طور پر جون سے جولائی تک کی جاتی ہے، خصوصاً ان بارانی اور خشک علاقوں میں جہاں دوسری فصلیں آسانی سے نہیں اگ سکتیں۔',
            'Apples are harvested from July to October depending on the variety and climatic conditions. Fruits are ready when they develop proper color, sweetness, and size.' => 'سیب کی کٹائی قسم اور موسمی حالات کے مطابق جولائی سے اکتوبر تک کی جاتی ہے۔ پھل اس وقت تیار ہوتے ہیں جب ان میں مناسب رنگ، مٹھاس اور جسامت پیدا ہو جائے۔',
            'Cabbage is harvested from November to March depending on the variety and climate conditions. The crop is ready when heads become firm, compact, and reach marketable size.' => 'بند گوبھی کی کٹائی قسم اور موسمی حالات کے مطابق نومبر سے مارچ تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب گوبھی کے سر مضبوط، گھنے اور منڈی میں فروخت کے قابل جسامت کے ہو جائیں۔',
            'Radish is harvested from November to January depending on the variety and climate conditions. The crop becomes ready when roots reach proper size and remain tender.' => 'مولی کی کٹائی قسم اور موسمی حالات کے مطابق نومبر سے جنوری تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت اختیار کر لیں اور نرم رہیں۔',
            'Beetroot is harvested from December to February depending on the variety and sowing time. The crop becomes ready when roots reach proper size and deep red color.' => 'چقندر کی کٹائی قسم اور کاشت کے وقت کے مطابق دسمبر سے فروری تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت اور گہرا سرخ رنگ اختیار کر لیں۔',
            'Sorghum is usually sown from March to July in Pakistan depending on rainfall conditions.' => 'جوار کو پاکستان میں عام طور پر مارچ سے جولائی تک بارش کی صورتحال کے مطابق بویا جاتا ہے۔',
            "Suitable Soil:\nClay loam soil\nLoamy soil\nMoist, fertile soil\n\nIdeal pH: 5.5 – 7.0\n\nSoil must retain moisture but should not be waterlogged for long periods." => "موزوں مٹی:\nچکنی دومی مٹی\nدومی مٹی\nنم اور زرخیز مٹی\n\nموزوں پی ایچ: 5.5 – 7.0\n\nمٹی میں نمی برقرار رہنی چاہیے، لیکن اسے طویل عرصے تک پانی کھڑا رہنے والی حالت میں نہیں ہونا چاہیے۔",
            "Suitable Soil:\nSandy loam soil\nWell-drained fertile soil\nLight textured soil with organic matter\n\nIdeal pH: 6.0 – 7.5\n\nWell-drained soil is important because waterlogging can damage bulbs and reduce yield." => "موزوں مٹی:\nریتیلی دومی مٹی\nزرخیز اور اچھی نکاسی والی مٹی\nنامیاتی مادے والی ہلکی ساخت کی مٹی\n\nموزوں پی ایچ: 6.0 – 7.5\n\nاچھی نکاسی والی مٹی ضروری ہے کیونکہ پانی کھڑا رہنے سے گانٹھوں کو نقصان پہنچ سکتا ہے اور پیداوار کم ہو سکتی ہے۔",
            "Suitable Soil:\nLoamy soil\nSandy loam soil\nMoist and fertile soil\n\nIdeal pH: 6.0 – 7.5\n\nMint prefers well-drained but moisture-retaining soil. Organic matter improves leaf quality and yield." => "موزوں مٹی:\nدومی مٹی\nریتیلی دومی مٹی\nنم اور زرخیز مٹی\n\nموزوں پی ایچ: 6.0 – 7.5\n\nپودینہ ایسی مٹی پسند کرتا ہے جس کی نکاسی اچھی ہو اور جو مناسب نمی بھی برقرار رکھے۔ نامیاتی مادہ پتوں کے معیار اور پیداوار کو بہتر بناتا ہے۔",
            "Spinach is usually sown from October to December in Pakistan when the weather becomes cool and favorable for leafy vegetable growth. Seeds germinate quickly in mild temperatures and plants develop soft, green leaves.\n\nWhy Spinach is Sown in Winter:\n\nCool weather promotes fast leaf development and improves taste, texture, and nutritional quality. It also reduces pest and disease attacks compared to hot weather." => "پاکستان میں پالک کی بوائی عموماً اکتوبر سے دسمبر تک کی جاتی ہے، جب موسم ٹھنڈا اور پتوں والی سبزیوں کی نشوونما کے لیے موزوں ہو جاتا ہے۔ معتدل درجہ حرارت میں بیج تیزی سے اگتے ہیں اور پودوں پر نرم، سبز پتے نشوونما پاتے ہیں۔\n\nپالک کو موسم سرما میں کیوں بویا جاتا ہے:\n\nٹھنڈا موسم پتوں کی تیز نشوونما کو فروغ دیتا ہے اور ذائقے، ساخت اور غذائی معیار کو بہتر بناتا ہے۔ گرم موسم کے مقابلے میں یہ کیڑوں اور بیماریوں کے حملے بھی کم کرتا ہے۔",
            "Super Basmati: Export quality\nIRRI-6: High yield\nKSK-133: Fine grain variety\nBasmati-515: Disease resistant" => "سپر باسمتی: برآمدی معیار کی قسم\nآئی آر آر آئی-6: زیادہ پیداوار دینے والی قسم\nکے ایس کے-133: باریک دانے والی قسم\nباسمتی-515: بیماریوں کے خلاف مزاحمت رکھنے والی قسم",
            "Arka Suryamukhi: High yielding variety\nPusa Vishwas: Disease resistant\nPunjab Pumpkin-1: Local improved variety\nKashi Harit: Hybrid variety" => "ارکا سوریا مکھی: زیادہ پیداوار دینے والی قسم\nپوسا وشواس: بیماریوں کے خلاف مزاحمت رکھنے والی قسم\nپنجاب پمپکن-1: مقامی بہتر قسم\nکاشی ہریت: دوغلی قسم",
            "Canola is usually sown from October to November in Pakistan. Farmers prefer cool weather after the monsoon season for better germination and early growth.\n\nWhy Canola is Sown in Winter:\n\nCanola requires cool temperatures for proper vegetative growth and flowering. Winter conditions reduce pest attacks and support healthy seed development." => "پاکستان میں کینولا کی بوائی عموماً اکتوبر سے نومبر تک کی جاتی ہے۔ کسان بہتر انکرن اور ابتدائی نشوونما کے لیے برسات کے بعد ٹھنڈے موسم کو ترجیح دیتے ہیں۔\n\nکینولا کو موسم سرما میں کیوں بویا جاتا ہے:\n\nکینولا کی مناسب نباتاتی نشوونما اور پھول آنے کے لیے ٹھنڈا درجہ حرارت ضروری ہے۔ سردیوں کے حالات کیڑوں کے حملے کم کرتے ہیں اور بیجوں کی صحت مند نشوونما میں مدد دیتے ہیں۔",
            "Peach trees are usually planted as young grafted saplings during dormant season, mainly in December to February.\n\nWhy Peaches are Planted in Winter:\n\nCool weather helps reduce transplant shock and allows strong root development before spring growth starts." => "آڑو کے پیوند شدہ کم عمر پودے عموماً دسمبر سے فروری کے دوران آرام کے موسم میں لگائے جاتے ہیں۔\n\nآڑو کو موسم سرما میں کیوں لگایا جاتا ہے:\n\nٹھنڈا موسم پودے منتقل کرنے کے صدمے کو کم کرتا ہے اور بہار کی نشوونما شروع ہونے سے پہلے جڑوں کی مضبوط نشوونما میں مدد دیتا ہے۔",
            "Turnips are usually sown from September to November in Pakistan. Seeds are directly planted in the field during cool weather. Proper temperature and moisture help quick germination and healthy root growth.\n\nWhy Turnips are Sown in Winter:\n\nTurnips grow best in cool climatic conditions. Winter season provides favorable temperature for proper root formation, better taste, and high-quality production." => "پاکستان میں شلجم کی بوائی عموماً ستمبر سے نومبر تک کی جاتی ہے۔ ٹھنڈے موسم میں بیج براہِ راست کھیت میں بوئے جاتے ہیں۔ مناسب درجہ حرارت اور نمی تیز انکرن اور جڑوں کی صحت مند نشوونما میں مدد دیتے ہیں۔\n\nشلجم کو موسم سرما میں کیوں بویا جاتا ہے:\n\nشلجم ٹھنڈی آب و ہوا میں بہترین نشوونما پاتے ہیں۔ موسم سرما مناسب درجہ حرارت فراہم کرتا ہے، جو جڑوں کی اچھی تشکیل، بہتر ذائقے اور اعلیٰ معیار کی پیداوار کے لیے سازگار ہے۔",
            "Kinnow plants are usually planted from February to March or during August to September in Pakistan. Mild temperatures during these periods help young plants establish healthy roots and grow properly.\n\nWhy Kinnow is Planted in These Seasons:\n\nModerate climate and proper soil moisture support healthy orchard establishment and reduce stress on young plants." => "پاکستان میں کینو کے پودے عموماً فروری سے مارچ یا اگست سے ستمبر کے دوران لگائے جاتے ہیں۔ ان اوقات میں معتدل درجہ حرارت کم عمر پودوں کو مضبوط جڑیں بنانے اور صحت مند نشوونما میں مدد دیتا ہے۔\n\nکینو کو ان موسموں میں کیوں لگایا جاتا ہے:\n\nمعتدل آب و ہوا اور مٹی میں مناسب نمی باغ کے صحت مند قیام میں مدد دیتی ہے اور کم عمر پودوں پر پڑنے والا دباؤ کم کرتی ہے۔",
            "Pomegranate plants are usually planted during February to March or August to September in Pakistan. These periods provide suitable temperature and moisture for proper root establishment and healthy plant growth.\n\nWhy Pomegranates are Planted in These Seasons:\n\nModerate weather conditions during these months help young plants establish quickly and reduce transplant stress." => "پاکستان میں انار کے پودے عموماً فروری سے مارچ یا اگست سے ستمبر کے دوران لگائے جاتے ہیں۔ یہ اوقات مناسب درجہ حرارت اور نمی فراہم کرتے ہیں، جو جڑوں کے مضبوط قیام اور پودوں کی صحت مند نشوونما کے لیے ضروری ہیں۔\n\nانار کو ان موسموں میں کیوں لگایا جاتا ہے:\n\nان مہینوں کے معتدل موسمی حالات کم عمر پودوں کو جلد مضبوط ہونے میں مدد دیتے ہیں اور پودے منتقل کرنے سے پیدا ہونے والا دباؤ کم کرتے ہیں۔",
            "Dates are usually planted from February to April in Pakistan. This period provides warm weather which helps young palm trees establish strong roots. Farmers prefer spring planting because it supports better survival and growth of saplings.\n\nWhy Dates are Planted in Spring:\n\nWarm temperatures and dry conditions help the young date palm adapt quickly to the environment and reduce the risk of disease." => "پاکستان میں کھجور کے پودے عموماً فروری سے اپریل تک لگائے جاتے ہیں۔ اس عرصے کا گرم موسم کم عمر کھجور کے درختوں کو مضبوط جڑیں بنانے میں مدد دیتا ہے۔ کسان موسم بہار میں کاشت کو ترجیح دیتے ہیں کیونکہ اس سے پودوں کے زندہ رہنے اور اچھی نشوونما کے امکانات بڑھتے ہیں۔\n\nکھجور کو موسم بہار میں کیوں لگایا جاتا ہے:\n\nگرم درجہ حرارت اور خشک حالات کم عمر کھجور کے پودے کو ماحول کے مطابق جلد ڈھلنے میں مدد دیتے ہیں اور بیماری کے خطرے کو کم کرتے ہیں۔",
            "Mint is usually sown twice a year: in spring (February to April) and in autumn (September to October). These seasons provide moderate temperatures that support fast germination and vegetative growth.\n\nWhy Mint is Sown in These Seasons:\n\nMint grows best in mild weather. Extreme heat or frost can damage young plants, so farmers choose moderate climate periods for better yield." => "پودینے کی بوائی عموماً سال میں دو مرتبہ کی جاتی ہے: موسم بہار میں فروری سے اپریل تک اور خزاں میں ستمبر سے اکتوبر تک۔ یہ موسم معتدل درجہ حرارت فراہم کرتے ہیں، جو تیز انکرن اور نباتاتی نشوونما کے لیے سازگار ہیں۔\n\nپودینہ ان موسموں میں کیوں بویا جاتا ہے:\n\nپودینہ معتدل موسم میں بہترین نشوونما پاتا ہے۔ شدید گرمی یا پالا کم عمر پودوں کو نقصان پہنچا سکتا ہے، اس لیے کسان بہتر پیداوار کے لیے معتدل موسم کا انتخاب کرتے ہیں۔",
            "Sugarcane is usually planted from February to April in Pakistan. Early planting helps the crop grow for a longer period and increases sugar content. Farmers prefer warm weather for good germination and early root development.\n\nWhy Sugarcane is Sown in Spring:\n\nSugarcane requires warm temperatures for sprouting and long growing periods. Spring season provides ideal conditions for strong cane growth and high sugar accumulation." => "پاکستان میں گنے کی کاشت عموماً فروری سے اپریل تک کی جاتی ہے۔ جلد کاشت سے فصل کو زیادہ عرصے تک بڑھنے کا موقع ملتا ہے اور اس میں چینی کی مقدار بڑھتی ہے۔ کسان اچھے انکرن اور جڑوں کی ابتدائی نشوونما کے لیے گرم موسم کو ترجیح دیتے ہیں۔\n\nگنا موسم بہار میں کیوں بویا جاتا ہے:\n\nگنے کے پھوٹنے اور طویل مدت تک نشوونما کے لیے گرم درجہ حرارت ضروری ہے۔ موسم بہار گنے کی مضبوط نشوونما اور زیادہ چینی جمع ہونے کے لیے موزوں حالات فراہم کرتا ہے۔",
            'Wheat requires cool temperatures for germination and early growth. Winter conditions provide ideal temperature and moisture balance for healthy crop development.' => 'گندم کے بیج کے انکرن اور ابتدائی نشوونما کے لیے ٹھنڈا درجہ حرارت ضروری ہے۔ سردیوں کا موسم مناسب درجہ حرارت اور نمی فراہم کرتا ہے، جو فصل کی صحت مند نشوونما کے لیے سازگار ہے۔',
            'Pit Preparation: Large pits dug for planting saplings' => 'گڑھے کی تیاری: پودے لگانے کے لیے بڑے گڑھے کھودے جاتے ہیں۔',
            'Weed Control: Removes unwanted plants' => 'جڑی بوٹیوں کا تدارک: غیر ضروری پودوں کو ختم کیا جاتا ہے۔',
            'High germination rate' => 'انکرن کی شرح زیادہ ہو۔',
            'Mature Trees: Irrigation during dry periods' => 'بالغ درخت: خشک موسم میں آبپاشی کریں۔',
            'Germination Stage: Light irrigation' => 'انکرن کا مرحلہ: ہلکی آبپاشی کریں۔',
            'Organic manure improves soil health and long-term productivity.' => 'نامیاتی کھاد مٹی کی صحت بہتر بناتی ہے اور طویل مدت میں پیداوار بڑھانے میں مدد دیتی ہے۔',
            'Red Guava: Pink/red flesh variety' => 'سرخ امرود: گلابی یا سرخ گودے والی قسم۔',
            'Halwa F1: High yielding hybrid variety' => 'حلوہ ایف ون: زیادہ پیداوار دینے والی دوغلی قسم۔',
            'Antioxidants: Protect body cells' => 'اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔',
            'Protein: Supports body growth' => 'پروٹین: جسم کی نشوونما میں مدد دیتا ہے۔',
            'Soybean is usually sown in June to July in Pakistan during the Kharif season. Farmers prefer early monsoon conditions for better germination and growth.' => 'پاکستان میں خریف کے موسم کے دوران سویا بین کی بوائی عموماً جون سے جولائی تک کی جاتی ہے۔ کسان بہتر انکرن اور ابتدائی نشوونما کے لیے برسات کے ابتدائی حالات کو ترجیح دیتے ہیں۔',
            'Why Ginger is Harvested at This Time:' => 'ادرک کی کٹائی اس وقت کیوں کی جاتی ہے:',
            'Loose and fertile soil supports strong root development and better fruit production.' => 'ڈھیلی اور زرخیز مٹی جڑوں کی مضبوط نشوونما اور بہتر پیداوار میں مدد دیتی ہے۔',
            'Proper spacing ensures healthy vine spreading and fruit development.' => 'مناسب فاصلہ بیلوں کے صحت مند پھیلاؤ اور پھلوں کی بہتر نشوونما کو یقینی بناتا ہے۔',
            'Flowering Stage: Regular moisture supply' => 'پھول آنے کا مرحلہ: نمی کی باقاعدہ فراہمی ضروری ہے۔',
            'Phosphorus (P): Root and rhizome development' => 'فاسفورس: جڑوں اور زیرِ زمین تنوں کی نشوونما کے لیے ضروری ہے۔',
            'Why Bottle Gourd is Sown in These Seasons:' => 'لوکی ان موسموں میں کیوں بوئی جاتی ہے:',
            'Proper land preparation ensures healthy tomato plants and better production.' => 'زمین کی مناسب تیاری صحت مند ٹماٹر کے پودوں اور بہتر پیداوار کو یقینی بناتی ہے۔',
            'Tasseling Stage: Critical irrigation required' => 'بالیاں نکلنے کا مرحلہ: اس دوران آبپاشی بہت اہم ہے۔',
            'IRRI Rice: High yield variety' => 'آئی آر آر آئی چاول: زیادہ پیداوار دینے والی قسم۔',
            'Orange plants are usually planted from February to March or during August to September in Pakistan. Mild temperatures and proper soil moisture during these periods help healthy root establishment and plant growth.' => 'پاکستان میں مالٹے کے پودے عموماً فروری سے مارچ یا اگست سے ستمبر کے دوران لگائے جاتے ہیں۔ ان اوقات میں معتدل درجہ حرارت اور مٹی میں مناسب نمی جڑوں کے مضبوط قیام اور پودے کی صحت مند نشوونما میں مدد دیتی ہے۔',
            'Why Kinnow is Harvested at This Time:' => 'کینو کی کٹائی اس وقت کیوں کی جاتی ہے:',
            'Kinnow grows best in warm climates with mild winters. Proper temperature is important for flowering, fruit setting, and fruit quality.' => 'کینو گرم آب و ہوا اور معتدل سردیوں والے علاقوں میں بہترین نشوونما پاتا ہے۔ پھول آنے، پھل بننے اور پھل کے معیار کے لیے مناسب درجہ حرارت ضروری ہے۔',
            'Potassium (K): Fruit size, color, and quality' => 'پوٹاشیم: پھلوں کی جسامت، رنگ اور معیار کو بہتر بناتا ہے۔',
            'Fruit Maturity Stage: Improves fruit size and juice quality' => 'پھل پکنے کا مرحلہ: پھلوں کی جسامت اور رس کے معیار کو بہتر بناتا ہے۔',
            'Mango is harvested from May to September depending on the variety and region. Fruits are picked when they reach proper size, color, and aroma but are still firm.' => 'آم کی کٹائی قسم اور علاقے کے مطابق مئی سے ستمبر تک کی جاتی ہے۔ پھل اس وقت توڑے جاتے ہیں جب ان میں مناسب جسامت، رنگ اور خوشبو پیدا ہو جائے، لیکن وہ ابھی سخت ہوں۔',
            'Bananas are harvested when fruits reach full size but are still green. Controlled harvesting ensures better ripening, taste, and shelf life during transportation and marketing.' => 'کیلے اس وقت توڑے جاتے ہیں جب پھل مکمل جسامت حاصل کر لیں لیکن ابھی سبز ہوں۔ مناسب وقت پر کٹائی کرنے سے نقل و حمل اور منڈی تک پہنچانے کے دوران پھل بہتر طور پر پکتے ہیں، ذائقہ برقرار رہتا ہے اور محفوظ رہنے کی مدت بڑھ جاتی ہے۔',
            'Eggplant is harvested 60–90 days after transplanting. Once fruits reach proper size, color, and shine, they are picked. Harvesting continues for several weeks as new fruits keep forming.' => 'بینگن کی کٹائی پنیری منتقل کرنے کے 60 سے 90 دن بعد کی جاتی ہے۔ جب پھل مناسب جسامت، رنگ اور چمک حاصل کر لیں تو انہیں توڑ لیا جاتا ہے۔ نئے پھل بنتے رہنے کی وجہ سے کٹائی کئی ہفتوں تک جاری رہتی ہے۔',
            'Fruit Development: Regular watering for better fruit size' => 'پھلوں کی نشوونما: بہتر جسامت کے لیے باقاعدگی سے پانی دیں۔',
            'Grain Filling Stage: Improves grain size' => 'دانے بھرنے کا مرحلہ: دانوں کی جسامت بہتر ہوتی ہے۔',
            'Seed Formation Stage: Limited irrigation' => 'بیج بننے کا مرحلہ: اس دوران محدود آبپاشی درکار ہوتی ہے۔',
            'Potassium (K): Fruit size, sweetness, and quality' => 'پوٹاشیم: پھلوں کی بہتر جسامت، مٹھاس اور معیار کے لیے ضروری ہے۔',
            'Potassium (K): Fruit sweetness, size, and quality' => 'پوٹاشیم: پھلوں کی مٹھاس، بہتر جسامت اور معیار کے لیے ضروری ہے۔',
            'Potassium (K): Fruit size, taste, and quality' => 'پوٹاشیم: پھلوں کی بہتر جسامت، ذائقے اور معیار کے لیے ضروری ہے۔',
            'Potassium (K): Fruit size, color, and pungency' => 'پوٹاشیم: پھلوں کی جسامت، رنگ اور تیزی بہتر بنانے میں مدد دیتا ہے۔',
            'Potassium (K): Fruit size and quality' => 'پوٹاشیم: پھلوں کی جسامت اور معیار کو بہتر بناتا ہے۔',
            'Potassium (K): Fruit quality and size' => 'پوٹاشیم: پھلوں کے معیار اور جسامت کو بہتر بناتا ہے۔',
            'Potassium (K): Fruit size, quality, and shelf life' => 'پوٹاشیم: پھلوں کی جسامت، معیار اور محفوظ رہنے کی مدت کو بہتر بناتا ہے۔',
            'Potassium (K): Fruit size and sweetness' => 'پوٹاشیم: پھلوں کی جسامت اور مٹھاس کو بہتر بناتا ہے۔',
            'Potassium (K): Bulb size and quality' => 'پوٹاشیم: گانٹھ کی جسامت اور معیار کو بہتر بناتا ہے۔',
            'Potassium (K): Curd quality and size' => 'پوٹاشیم: پھول گوبھی کے پھول کے معیار اور جسامت کو بہتر بناتا ہے۔',
            'Panicle Initiation: Grain development' => 'بالیاں بننے کا مرحلہ: دانوں کی نشوونما شروع ہوتی ہے۔',
            'Balanced fertilizers improve plant strength, fruit size, and production.' => 'متوازن کھادیں پودوں کی مضبوطی، پھلوں کی جسامت اور پیداوار بہتر کرتی ہیں۔',
            'Beef Tomatoes: Large size variety' => 'بیف ٹماٹر: بڑے پھلوں والی قسم۔',
            'Large Fruit Sweet Lime: Bigger fruit size' => 'بڑے پھل والا میٹھا لیموں: بڑے پھل پیدا کرنے والی قسم۔',
            'Seed Development Stage: Limited irrigation required' => 'بیج بننے کا مرحلہ: محدود آبپاشی درکار ہوتی ہے۔',
            'Major Areas: Punjab, KPK, Sindh (limited areas)' => 'اہم علاقے: پنجاب، خیبر پختونخوا اور سندھ کے محدود علاقے۔',
            'Rich organic matter in soil helps improve curd size and overall plant growth.' => 'مٹی میں وافر نامیاتی مادہ پھول گوبھی کے پھول کی جسامت بڑھانے اور پودے کی مجموعی نشوونما بہتر کرنے میں مدد دیتا ہے۔',
            'Proper seed rate ensures balanced plant spacing and good bulb size.' => 'بیج کی مناسب مقدار پودوں کے درمیان متوازن فاصلہ برقرار رکھنے اور اچھی جسامت کی گانٹھیں حاصل کرنے میں مدد دیتی ہے۔',
            'At maturity, tubers reach full size and skin becomes firm, which improves storage and transport quality.' => 'پختگی کے وقت گانٹھیں مکمل جسامت اختیار کر لیتی ہیں اور ان کا چھلکا سخت ہو جاتا ہے، جس سے ذخیرہ کرنے اور نقل و حمل کے دوران معیار بہتر رہتا ہے۔',
            'Pearl Millet is usually sown in June to July in Pakistan, especially in rainfed and dry areas where other crops cannot grow easily.' => 'پاکستان میں باجرے کی بوائی عام طور پر جون سے جولائی تک کی جاتی ہے، خصوصاً ان بارانی اور خشک علاقوں میں جہاں دوسری فصلیں آسانی سے نہیں اگ سکتیں۔',
            'Apples are harvested from July to October depending on the variety and climatic conditions. Fruits are ready when they develop proper color, sweetness, and size.' => 'سیب کی کٹائی قسم اور موسمی حالات کے مطابق جولائی سے اکتوبر تک کی جاتی ہے۔ پھل اس وقت تیار ہوتے ہیں جب ان میں مناسب رنگ، مٹھاس اور جسامت پیدا ہو جائے۔',
            'Cabbage is harvested from November to March depending on the variety and climate conditions. The crop is ready when heads become firm, compact, and reach marketable size.' => 'بند گوبھی کی کٹائی قسم اور موسمی حالات کے مطابق نومبر سے مارچ تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب گوبھی کے سر مضبوط، گھنے اور منڈی میں فروخت کے قابل جسامت کے ہو جائیں۔',
            'Radish is harvested from November to January depending on the variety and climate conditions. The crop becomes ready when roots reach proper size and remain tender.' => 'مولی کی کٹائی قسم اور موسمی حالات کے مطابق نومبر سے جنوری تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت اختیار کر لیں اور نرم رہیں۔',
            'Beetroot is harvested from December to February depending on the variety and sowing time. The crop becomes ready when roots reach proper size and deep red color.' => 'چقندر کی کٹائی قسم اور کاشت کے وقت کے مطابق دسمبر سے فروری تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت اور گہرا سرخ رنگ اختیار کر لیں۔',
            'Turnips are harvested from November to February depending on the variety and sowing time. The crop becomes ready when roots reach suitable size and become tender.' => 'شلجم کی کٹائی قسم اور کاشت کے وقت کے مطابق نومبر سے فروری تک کی جاتی ہے۔ فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت اختیار کرکے نرم ہو جائیں۔',
            'Carrots are harvested from November to February depending on variety and sowing time. They are harvested when roots reach full size and develop good color and sweetness.' => 'گاجروں کی کٹائی قسم اور کاشت کے وقت کے مطابق نومبر سے فروری تک کی جاتی ہے۔ انہیں اس وقت نکالا جاتا ہے جب جڑیں مکمل جسامت اختیار کر لیں اور ان میں اچھا رنگ اور مٹھاس پیدا ہو جائے۔',
            'Sorghum is an important cereal and fodder crop grown in arid and semi-arid regions of Pakistan and many other countries.' => 'جوار پاکستان اور بہت سے دوسرے ممالک کے خشک اور نیم خشک علاقوں میں اگائی جانے والی ایک اہم اناج اور چارہ فصل ہے۔',
            'Isabgol grows best in cool and dry climates.' => 'اسپغول ٹھنڈی اور خشک آب و ہوا میں بہترین نشوونما پاتا ہے۔',
            'Bitter gourd is an important vegetable and medicinal crop.' => 'کریلا ایک اہم سبزی اور ادویاتی فصل ہے۔',
            'It is widely consumed for its health benefits, especially for controlling diabetes and improving digestion.' => 'اسے صحت کے فوائد کی وجہ سے بڑے پیمانے پر استعمال کیا جاتا ہے، خصوصاً ذیابیطس کو قابو کرنے اور ہاضمہ بہتر بنانے کے لیے۔',
            'It also provides good income to farmers.' => 'یہ کسانوں کو اچھی آمدنی بھی فراہم کرتا ہے۔',
            'Arum is an important root vegetable that provides food security and income to small farmers.' => 'اروی ایک اہم جڑ والی سبزی ہے جو چھوٹے کسانوں کو غذائی تحفظ اور آمدنی فراہم کرتی ہے۔',
            'It is used in household cooking and has good market demand.' => 'اسے گھریلو کھانا پکانے میں استعمال کیا جاتا ہے اور اس کی منڈی میں اچھی طلب ہے۔',
            'Both its corms and leaves are nutritious and widely consumed.' => 'اس کی گانٹھیں اور پتے دونوں غذائیت سے بھرپور ہیں اور بڑے پیمانے پر استعمال کیے جاتے ہیں۔',
            'Sunflower requires warm weather and plenty of sunlight during growth stages.' => 'سورج مکھی کو نشوونما کے مراحل کے دوران گرم موسم اور وافر دھوپ درکار ہوتی ہے۔',
            'These seasons provide favorable environmental conditions for high yield and oil production.' => 'یہ موسم زیادہ پیداوار اور تیل کی پیداوار کے لیے سازگار ماحولیاتی حالات فراہم کرتے ہیں۔',
            'Antioxidants: Help control blood sugar' => 'اینٹی آکسیڈنٹس: خون میں شکر کی مقدار کو قابو کرنے میں مدد دیتے ہیں۔',
            'Tomatoes grow best in mild temperatures.' => 'ٹماٹر معتدل درجہ حرارت میں بہترین نشوونما پاتے ہیں۔',
            'Extreme heat or frost can damage plant growth and reduce yield.' => 'شدید گرمی یا پالا پودے کی نشوونما کو نقصان پہنچا سکتا ہے اور پیداوار کم کر سکتا ہے۔',
            'Maturity Stage: Controlled irrigation' => 'پختگی کا مرحلہ: آبپاشی کو قابو میں رکھیں۔',
            'Vegetative Stage: Moderate moisture needed' => 'نباتاتی مرحلہ: درمیانی مقدار میں نمی درکار ہوتی ہے۔',
            'Vitamin C: Very high immunity booster' => 'وٹامن سی: قوتِ مدافعت بڑھانے میں بہت مؤثر۔',
            'Potassium (K): Pod formation and seed quality' => 'پوٹاشیم: پھلیوں کی تشکیل اور بیج کا معیار۔',
            'Potassium (K): Improves seed quality' => 'پوٹاشیم: بیج کا معیار بہتر کرتا ہے۔',
            'Local Green Long: Common cultivated type' => 'مقامی سبز لمبی قسم: عام طور پر کاشت کی جانے والی قسم۔',
            'Excess rainfall and high humidity can damage the crop and reduce seed quality.' => 'ضرورت سے زیادہ بارش اور زیادہ نمی فصل کو نقصان پہنچا سکتی ہے اور بیج کے معیار کو کم کر سکتی ہے۔',
            'Cauliflower is harvested from November to March depending on the variety and planting time.' => 'پھول گوبھی کی کٹائی قسم اور کاشت کے وقت کے مطابق نومبر سے مارچ تک کی جاتی ہے۔',
            'The crop is ready when the curd becomes firm, compact, and white in color.' => 'فصل اس وقت تیار ہوتی ہے جب پھول گوبھی کا پھول مضبوط، گھنا اور سفید ہو جائے۔',
            'Long gray or brown spots appear on leaves and gradually spread.' => 'پتوں پر لمبے سرمئی یا بھورے دھبے ظاہر ہوتے ہیں اور آہستہ آہستہ پھیلتے جاتے ہیں۔',
            'Vegetative Stage: Moderate moisture needed' => 'نباتاتی مرحلہ: درمیانی مقدار میں نمی درکار ہوتی ہے۔',
            'Fertile, well-drained soil rich in organic matter is best for healthy vine growth and fruit production.' => 'نامیاتی مادے سے بھرپور، زرخیز اور اچھی نکاسی والی مٹی بیل کی صحت مند نشوونما اور پھلوں کی بہتر پیداوار کے لیے بہترین ہے۔',
            'Cover young plants and keep field clean.' => 'نوجوان پودوں کو ڈھانپیں اور کھیت صاف رکھیں۔',
            'Excess nitrogen should be avoided as it reduces nitrogen fixation ability.' => 'ضرورت سے زیادہ نائٹروجن کے استعمال سے گریز کریں کیونکہ اس سے نائٹروجن کو جذب کرنے کی صلاحیت کم ہو جاتی ہے۔',
            'Carrots become soft, watery, and smell bad.' => 'گاجریں نرم اور پانی سے بھرپور ہو جاتی ہیں اور ان سے ناگوار بو آنے لگتی ہے۔',
            'Apply Chlorpyrifos or Fipronil as soil treatment.' => 'مٹی کے علاج کے لیے کلورپائریفوس یا فپرونل استعمال کریں۔',
            'Remove affected plants and destroy crop residues after harvest.' => 'متاثرہ پودے نکال دیں اور کٹائی کے بعد فصل کی باقیات تلف کر دیں۔',
            'Potassium (K): Pod formation and seed quality' => 'پوٹاشیم: پھلیوں کی تشکیل اور بیج کا معیار۔',
            'Fertile soil rich in organic matter helps healthy head formation and better production.' => 'نامیاتی مادے سے بھرپور زرخیز مٹی صحت مند گوبھی کے سر کی تشکیل اور بہتر پیداوار میں مدد دیتی ہے۔',
            'Peaches are harvested from May to July when fruits become soft, aromatic, and fully colored (yellow, red, or orange depending on variety).' => 'آڑو کی کٹائی مئی سے جولائی تک اس وقت کی جاتی ہے جب پھل نرم، خوشبودار اور مکمل طور پر رنگ پکڑ لیں؛ رنگ قسم کے مطابق پیلا، سرخ یا نارنجی ہو سکتا ہے۔',
            'Red Arum: Slightly reddish skin and strong flavor' => 'سرخ اروی: قدرے سرخی مائل چھلکا اور تیز ذائقہ۔',
            'Arum is harvested after 6 to 8 months of planting, depending on variety and growing conditions.' => 'اروی کی کٹائی قسم اور نشوونما کے حالات کے مطابق کاشت کے 6 سے 8 ماہ بعد کی جاتی ہے۔',
            'Leaves start yellowing and corms become fully developed when the crop is ready.' => 'فصل تیار ہونے پر پتے پیلے ہونا شروع ہو جاتے ہیں اور گانٹھیں مکمل طور پر نشوونما پا جاتی ہیں۔',
            'Lemon plants are usually planted during February to March and August to September in Pakistan.' => 'پاکستان میں لیموں کے پودے عام طور پر فروری سے مارچ اور اگست سے ستمبر کے دوران لگائے جاتے ہیں۔',
            'Moderate temperature during these months helps proper root establishment and healthy plant growth.' => 'ان مہینوں کے دوران معتدل درجہ حرارت جڑوں کے مناسب قیام اور پودے کی صحت مند نشوونما میں مدد دیتا ہے۔',
            'Dry weather during maturity helps proper seed drying and reduces seed shattering losses during harvesting.' => 'پختگی کے دوران خشک موسم بیجوں کو مناسب طور پر خشک ہونے میں مدد دیتا ہے اور کٹائی کے وقت بیج جھڑنے سے ہونے والے نقصان کو کم کرتا ہے۔',
            'Apply appropriate fungicide sprays during flowering stage.' => 'پھول آنے کے مرحلے کے دوران موزوں پھپھوندی کش ادویات کا سپرے کریں۔',
            'Fertile and well-drained soil is best for broccoli cultivation because it supports strong root development and healthy plant growth.' => 'زرخیز اور اچھی نکاسی والی مٹی بروکلی کی کاشت کے لیے بہترین ہے کیونکہ یہ جڑوں کی مضبوط نشوونما اور پودے کی صحت مند بڑھوتری میں مدد دیتی ہے۔',
            'Female flies lay eggs inside young fruits and larvae feed on them.' => 'مادہ مکھیاں نوجوان پھلوں کے اندر انڈے دیتی ہیں اور سنڈیاں ان پھلوں کو کھاتی ہیں۔',
            'These seasons provide warm temperatures and sufficient moisture, which support fast germination and early plant growth.' => 'یہ موسم گرم درجہ حرارت اور کافی نمی فراہم کرتے ہیں، جو تیز انکرن اور پودوں کی ابتدائی نشوونما میں مدد دیتے ہیں۔',
            'Young Plants: Frequent watering (every 7–10 days)' => 'نوجوان پودے: ہر 7 سے 10 دن بعد باقاعدگی سے پانی دیں۔',
            'Apply Emamectin Benzoate when infestation is severe.' => 'جب حملہ شدید ہو تو ایمامیکٹن بینزویٹ استعمال کریں۔',
            'Sindhri: Large size and early season variety' => 'سندھڑی: بڑے سائز اور ابتدائی موسم کی قسم۔',
            'Apply Chlorantraniliprole or Spinosad as recommended.' => 'زرعی سفارشات کے مطابق کلورانٹرانیلی پرول یا اسپائنو سیڈ استعمال کریں۔',
            'High Oil Hybrid Varieties: Industrial use' => 'زیادہ تیل والی دوغلی اقسام: صنعتی استعمال۔',
            'Proper seed rate ensures healthy plant density and better leaf yield.' => 'بیج کی مناسب مقدار پودوں کی صحت مند تعداد اور پتوں کی بہتر پیداوار یقینی بناتی ہے۔',
            'Proper land preparation helps in better vine spread and fruit development.' => 'زمین کی مناسب تیاری بیلوں کے بہتر پھیلاؤ اور پھلوں کی نشوونما میں مدد دیتی ہے۔',
            'Bacteria spread through infected seeds, water, and crop debris.' => 'بیکٹیریا متاثرہ بیجوں، پانی اور فصل کی باقیات کے ذریعے پھیلتے ہیں۔',
            'Fungi attack roots under poorly drained soil conditions.' => 'ناقص نکاسی والی مٹی کے حالات میں پھپھوندیاں جڑوں پر حملہ کرتی ہیں۔',
            'Vitamin C: Very high immunity booster' => 'وٹامن سی: قوتِ مدافعت بڑھانے میں بہت مؤثر۔',
            'White fungus grows on leaves in dry but warm conditions.' => 'سفید پھپھوندی خشک لیکن گرم حالات میں پتوں پر نشوونما پاتی ہے۔',
            'Fertile and well-drained soil helps produce healthy and tender leaves.' => 'زرخیز اور اچھی نکاسی والی مٹی صحت مند اور نرم پتے پیدا کرنے میں مدد دیتی ہے۔',
            'Potassium (K): Improves seed quality' => 'پوٹاشیم: بیج کا معیار بہتر کرتا ہے۔',
            'Small holes on fruits, fruit rotting, and premature fruit drop.' => 'پھلوں پر چھوٹے سوراخ، پھلوں کا سڑنا اور پھلوں کا وقت سے پہلے گرنا۔',
            'Hot summer conditions help fruits ripen fully, develop sweetness, and meet high market demand during peak heat.' => 'گرم موسم گرما کے حالات پھلوں کو مکمل پکنے، مٹھاس پیدا کرنے اور شدید گرمی کے دوران زیادہ منڈی کی طلب پوری کرنے میں مدد دیتے ہیں۔',
            'Barley is harvested from March to April when the crop turns golden yellow and grains become hard and dry.' => 'جو کی کٹائی مارچ سے اپریل تک اس وقت کی جاتی ہے جب فصل سنہری زرد ہو جائے اور دانے سخت اور خشک ہو جائیں۔',
            'Keep field clean and avoid dense planting.' => 'کھیت صاف رکھیں اور بہت زیادہ گنجان کاشت سے گریز کریں۔',
            'Why Grapefruit is Planted in These Seasons:' => 'چکوترا ان موسموں میں کیوں لگایا جاتا ہے:',
            'Fungus grows on leaf surface in warm and dry weather.' => 'گرم اور خشک موسم میں پھپھوندی پتوں کی سطح پر نشوونما پاتی ہے۔',
            'Boll Formation Stage: Adequate moisture required' => 'ٹینڈے بننے کا مرحلہ: مناسب مقدار میں نمی درکار ہوتی ہے۔',
            'Fruits are picked when they reach full size and start changing color to ensure best taste, quality, and market value.' => 'بہترین ذائقے، معیار اور منڈی کی قیمت کے لیے پھل اس وقت توڑے جاتے ہیں جب وہ مکمل سائز تک پہنچ جائیں اور رنگ بدلنا شروع کر دیں۔',
            'Remove damaged leaves and monitor crop regularly.' => 'متاثرہ پتے نکال دیں اور فصل کی باقاعدگی سے نگرانی کریں۔',
            'Prune trees for air circulation and avoid overhead watering.' => 'ہوا کی آمدورفت بہتر بنانے کے لیے درختوں کی شاخ تراشی کریں اور اوپر سے پانی دینے سے گریز کریں۔',
            'Large holes in leaves, damaged whorls, and sawdust-like material inside leaf funnels.' => 'پتوں میں بڑے سوراخ، متاثرہ لپٹی ہوئی پتیوں کے حصے اور پتوں کی نالیوں کے اندر بُرادے جیسا مادہ۔',
            'Ensure proper spacing and good air flow in field.' => 'کھیت میں مناسب فاصلہ اور ہوا کی اچھی آمدورفت یقینی بنائیں۔',
            'Apply Chlorothalonil or Copper-based fungicide.' => 'کلورو تھالونل یا تانبے پر مبنی پھپھوندی کش دوا استعمال کریں۔',
            'Remove infected plants and control insect vectors.' => 'متاثرہ پودے نکال دیں اور بیماری پھیلانے والے حشرات کا تدارک کریں۔',
            'Soil fungus attacks the base of the plant and bulbs.' => 'مٹی میں موجود پھپھوندی پودے کی بنیاد اور گانٹھوں پر حملہ کرتی ہے۔',
            'Larvae enter young shoots and feed inside the stem.' => 'سنڈیاں نوجوان شاخوں میں داخل ہو کر تنے کے اندر خوراک حاصل کرتی ہیں۔',
            'Maturity Stage: Controlled irrigation' => 'پختگی کا مرحلہ: آبپاشی کو قابو میں رکھیں۔',
            'Larvae stay in soil and cut young beetroot plants at night.' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت چقندر کے ننھے پودوں کو کاٹ دیتی ہیں۔',
            'Fungus spreads through infected plant debris and rain splash.' => 'پھپھوندی متاثرہ پودوں کی باقیات اور بارش کے چھینٹوں کے ذریعے پھیلتی ہے۔',
            'White fungal growth develops on leaves in cool and humid weather.' => 'ٹھنڈے اور مرطوب موسم میں پتوں پر سفید فنگسی نشوونما ظاہر ہوتی ہے۔',
            'Mid Season Varieties: Balanced growth and yield' => 'درمیانی موسم کی اقسام: متوازن نشوونما اور پیداوار۔',
            'Protein: High plant protein source' => 'پروٹین: نباتاتی پروٹین کا اچھا ذریعہ۔',
            'Fiber: Improves digestion' => 'ریشہ: ہاضمہ بہتر بناتا ہے۔',
            'Fiber: Better digestion' => 'ریشہ: ہاضمہ بہتر بنانے میں مدد دیتا ہے۔',
            'Iron: Helps blood health' => 'آئرن: خون کی صحت برقرار رکھنے میں مدد دیتا ہے۔',
            'Folate: Important for body growth' => 'فولیٹ: جسم کی نشوونما کے لیے اہم ہے۔',
            'Vitamins: Supports immunity' => 'وٹامنز: قوتِ مدافعت کو مضبوط بنانے میں مدد دیتے ہیں۔',
            'Vitamin C: Boosts immunity' => 'وٹامن سی: قوتِ مدافعت بڑھانے میں مدد دیتا ہے۔',
            'Vitamin C: Improves immunity' => 'وٹامن سی: قوتِ مدافعت بہتر بنانے میں مدد دیتا ہے۔',
            'Vitamin A: Good for vision' => 'وٹامن اے: بینائی کے لیے مفید ہے۔',
            'Capsaicin: Provides spiciness and health benefits' => 'کیپسیسن: مرچ کو تیزی فراہم کرتا ہے اور صحت کے لیے فوائد رکھتا ہے۔',
            'Antioxidants: Protects body cells' => 'اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔',
            'Minerals: Supports overall health' => 'معدنیات: مجموعی صحت برقرار رکھنے میں مدد دیتے ہیں۔',
            'Minerals: Support body functions' => 'معدنیات: جسم کے افعال کو درست رکھنے میں مدد دیتے ہیں۔',
            'Minerals: Improve body functions' => 'معدنیات: جسم کے افعال بہتر بنانے میں مدد دیتے ہیں۔',
            'Minerals: Support body health' => 'معدنیات: جسم کی صحت برقرار رکھنے میں مدد دیتے ہیں۔',
            'Carbohydrates: Energy source' => 'کاربوہائیڈریٹس: توانائی کا ذریعہ ہیں۔',
            'Carbohydrates: Main energy source' => 'کاربوہائیڈریٹس: توانائی کا بنیادی ذریعہ ہیں۔',
            'Protein: Body growth' => 'پروٹین: جسم کی نشوونما کے لیے ضروری ہے۔',
            'Protein: Body and animal growth' => 'پروٹین: انسانوں اور جانوروں کی نشوونما کے لیے ضروری ہے۔',
            'Protein: Muscle growth' => 'پروٹین: پٹھوں کی نشوونما کے لیے ضروری ہے۔',
            'Magnesium: Supports body functions' => 'میگنیشیم: جسم کے افعال کو درست رکھنے میں مدد دیتا ہے۔',
            'Calcium: Bone strength' => 'کیلشیم: ہڈیوں کی مضبوطی کے لیے ضروری ہے۔',
            'Iron: Blood health' => 'آئرن: خون کی صحت کے لیے ضروری ہے۔',
            'Curcumin: Anti-inflammatory compound' => 'کرکیومِن: سوزش کم کرنے والا مرکب ہے۔',
            'Iron: Blood health' => 'آئرن: خون کی صحت کے لیے ضروری ہے۔',
            'Antioxidants: Protects body cells' => 'اینٹی آکسیڈنٹس: جسم کے خلیوں کو نقصان سے بچانے میں مدد دیتے ہیں۔',
            'White lines or trails appear inside leaves, leaves look weak.' => 'پتوں کے اندر سفید لکیریں یا راستے ظاہر ہوتے ہیں اور پتے کمزور دکھائی دیتے ہیں۔',
            'Fungus spreads through rain splash and infected leaves.' => 'پھپھوندی بارش کے چھینٹوں اور متاثرہ پتوں کے ذریعے پھیلتی ہے۔',
            'Local Green Long: Common cultivated type' => 'مقامی سبز لمبی قسم: عام طور پر کاشت کی جانے والی قسم۔',
            'Well-drained soil is essential because waterlogging can damage roots and reduce fruit production.' => 'اچھی نکاسی والی مٹی ضروری ہے کیونکہ پانی جمع ہونے سے جڑوں کو نقصان پہنچ سکتا ہے اور پھلوں کی پیداوار کم ہو سکتی ہے۔',
            'Apply Spinosad bait sprays or recommended fruit fly control measures.' => 'اسپائنو سیڈ کے چارے والے سپرے یا پھل کی مکھی کے لیے تجویز کردہ تدارکی اقدامات اختیار کریں۔',
            'Balanced fertilizers improve plant growth, head size, and crop yield.' => 'متوازن کھادیں پودے کی نشوونما، گوبھی کے سر کے سائز اور فصل کی پیداوار کو بہتر کرتی ہیں۔',
            'Tomatoes grow best in mild temperatures. Extreme heat or frost can damage plant growth and reduce yield.' => 'ٹماٹر معتدل درجہ حرارت میں بہترین نشوونما پاتے ہیں۔ شدید گرمی یا پالا پودے کی نشوونما کو نقصان پہنچا سکتا ہے اور پیداوار کم کر سکتا ہے۔',
            'Organic Manure: Improves leaf quality and yield' => 'نامیاتی کھاد: پتوں کے معیار اور پیداوار کو بہتر بناتی ہے۔',
            'Maintain proper field sanitation and balanced fertilization.' => 'کھیت کی مناسب صفائی اور متوازن کھاد کا استعمال برقرار رکھیں۔',
            'Large brown spots appear on leaves and gradually spread.' => 'پتوں پر بڑے بھورے دھبے ظاہر ہوتے ہیں اور آہستہ آہستہ پھیلتے جاتے ہیں۔',
            'Spreads in warm and wet weather through infected seeds and water.' => 'یہ گرم اور نم موسم میں متاثرہ بیجوں اور پانی کے ذریعے پھیلتا ہے۔',
            'Larvae feed on leaves in groups and damage the crop quickly.' => 'سنڈیاں گروہوں کی صورت میں پتوں کو کھاتی ہیں اور فصل کو تیزی سے نقصان پہنچاتی ہیں۔',
            'Small brown spots on leaves that grow bigger and cause leaf drying.' => 'پتوں پر چھوٹے بھورے دھبے ظاہر ہوتے ہیں جو بڑے ہو جاتے ہیں اور پتے خشک ہونے کا سبب بنتے ہیں۔',
            'Fungus infects young leaves during humid weather.' => 'مرطوب موسم میں پھپھوندی نوجوان پتوں کو متاثر کرتی ہے۔',
            'Sorghum is usually sown from March to July in Pakistan depending on rainfall conditions. It is often grown in rainfed areas where irrigation is limited.' => 'جوار کو پاکستان میں عام طور پر مارچ سے جولائی تک بارش کی صورتحال کے مطابق بویا جاتا ہے۔ اسے اکثر ایسے علاقوں میں اگایا جاتا ہے جہاں بارش پر انحصار ہوتا ہے اور آبپاشی محدود ہوتی ہے۔',
            'Chillies can be harvested in multiple stages.' => 'مرچ کی فصل کی کٹائی کئی مراحل میں کی جا سکتی ہے۔',
            'Green chillies are picked 60–80 days after transplanting, while red chillies are harvested after full maturity at 120–150 days.' => 'سبز مرچیں پنیری منتقل کرنے کے 60 سے 80 دن بعد توڑی جاتی ہیں، جبکہ سرخ مرچوں کی کٹائی مکمل پختگی کے بعد 120 سے 150 دن میں کی جاتی ہے۔',
            'Soybean is sensitive to both drought and waterlogging, so balanced irrigation is required.' => 'سویا بین خشک سالی اور پانی کے جمع ہونے، دونوں کے لیے حساس ہے، اس لیے متوازن آبپاشی ضروری ہے۔',
            'Light soil is preferred because it allows proper root expansion and prevents waterlogging, which can damage roots and fruits.' => 'ہلکی مٹی کو ترجیح دی جاتی ہے کیونکہ اس میں جڑیں مناسب طور پر پھیل سکتی ہیں اور پانی جمع نہیں ہوتا، جو جڑوں اور پھلوں کو نقصان پہنچا سکتا ہے۔',
            'Light soil is preferred because it allows proper root expansion and prevents waterlogging, which can damage vines and fruits.' => 'ہلکی مٹی کو ترجیح دی جاتی ہے کیونکہ اس میں جڑیں مناسب طور پر پھیل سکتی ہیں اور پانی جمع نہیں ہوتا، جو بیلوں اور پھلوں کو نقصان پہنچا سکتا ہے۔',
            'Papaya grows best in warm tropical climates.' => 'پپیتا گرم خطوں کی آب و ہوا میں بہترین نشوونما پاتا ہے۔',
            'It is highly sensitive to frost and waterlogging, which can damage the plant.' => 'یہ پالا پڑنے اور پانی جمع ہونے کے لیے بہت حساس ہے، جس سے پودے کو نقصان پہنچ سکتا ہے۔',
            'Main Use: Green fodder, hay, silage, livestock feed' => 'اہم استعمال: سبز چارہ، خشک گھاس، سائیلج اور مویشیوں کی خوراک۔',
            'Onions are harvested from March to May depending on variety and sowing time.' => 'پیاز کی کٹائی قسم اور کاشت کے وقت کے مطابق مارچ سے مئی تک کی جاتی ہے۔',
            'The crop is ready when leaves turn yellow and start drying, and bulbs become firm.' => 'فصل اس وقت تیار ہوتی ہے جب پتے پیلے ہو کر خشک ہونا شروع ہو جائیں اور گانٹھیں سخت ہو جائیں۔',
            'Flowers dry up, sticky liquid appears, and fruit setting becomes low.' => 'پھول خشک ہو جاتے ہیں، چپچپا مادہ ظاہر ہوتا ہے اور پھل بننے کی شرح کم ہو جاتی ہے۔',
            'Leaves curl, sticky honeydew appears, and plant growth slows.' => 'پتے مڑ جاتے ہیں، پتوں پر چپچپا شہد نما مادہ ظاہر ہوتا ہے اور پودے کی نشوونما سست پڑ جاتی ہے۔',
            'Fruits rot from inside, small holes appear, and fruits fall early.' => 'پھل اندر سے سڑ جاتے ہیں، ان میں چھوٹے سوراخ ظاہر ہوتے ہیں اور پھل وقت سے پہلے گر جاتے ہیں۔',
            'Leaves turn yellow, sticky surface appears, and plant becomes weak.' => 'پتے پیلے ہو جاتے ہیں، ان کی سطح پر چپچپا مادہ ظاہر ہوتا ہے اور پودا کمزور پڑ جاتا ہے۔',
            'Leaves become yellow, sticky surface appears, and plant becomes weak.' => 'پتے پیلے ہو جاتے ہیں، ان کی سطح پر چپچپا مادہ ظاہر ہوتا ہے اور پودا کمزور پڑ جاتا ہے۔',
            'Roots become damaged, tunnels appear, and plants wilt.' => 'جڑوں کو نقصان پہنچتا ہے، ان میں سرنگیں بن جاتی ہیں اور پودے مرجھا جاتے ہیں۔',
            'Brown leaf spots, leaf drying, and weak plants.' => 'پتوں پر بھورے دھبے ظاہر ہوتے ہیں، پتے خشک ہو جاتے ہیں اور پودے کمزور پڑ جاتے ہیں۔',
            'Leaves turn yellow, sticky substance appears, plant weakens.' => 'پتے پیلے ہو جاتے ہیں، چپچپا مادہ ظاہر ہوتا ہے اور پودا کمزور پڑ جاتا ہے۔',
            'Leaves curl, sticky honeydew appears, and plant growth becomes weak.' => 'پتے مڑ جاتے ہیں، چپچپا شہد نما مادہ ظاہر ہوتا ہے اور پودے کی نشوونما کمزور پڑ جاتی ہے۔',
            'Leaves turn yellow, sticky honeydew appears, plant becomes weak.' => 'پتے پیلے ہو جاتے ہیں، چپچپا شہد نما مادہ ظاہر ہوتا ہے اور پودا کمزور پڑ جاتا ہے۔',
            'Use clean soil, avoid overwatering, and plant resistant varieties.' => 'صاف مٹی استعمال کریں، ضرورت سے زیادہ پانی دینے سے گریز کریں اور مزاحم اقسام کاشت کریں۔',
            'Yellowing leaf edges, leaf drying, reduced yield.' => 'پتوں کے کنارے پیلے ہو جاتے ہیں، پتے خشک ہوتے ہیں اور پیداوار کم ہو جاتی ہے۔',
            'Leaf curling, yellowing, and hopper burn symptoms.' => 'پتے مڑنے اور پیلے ہونے لگتے ہیں اور ہاپر کے حملے سے جھلسنے کی علامات ظاہر ہوتی ہیں۔',
            'Leaf yellowing, wilting, and reduced yield.' => 'پتے پیلے ہو جاتے ہیں، پودے مرجھاتے ہیں اور پیداوار کم ہو جاتی ہے۔',
            'It is often grown in rainfed areas where irrigation is limited.' => 'اسے اکثر ان علاقوں میں اگایا جاتا ہے جہاں بارش پر انحصار ہوتا ہے اور آبپاشی محدود ہوتی ہے۔',
            'Sorghum is a drought-tolerant crop that grows well in hot conditions.' => 'جوار خشک سالی برداشت کرنے والی فصل ہے جو گرم حالات میں اچھی نشوونما پاتی ہے۔',
            'Summer and monsoon seasons provide enough warmth and moisture for germination and early growth.' => 'موسم گرما اور برسات کا موسم انکرن اور ابتدائی نشوونما کے لیے کافی گرمی اور نمی فراہم کرتے ہیں۔',
            'Seeds absorb moisture and germinate. Roots and shoots develop rapidly.' => 'بیج نمی جذب کرکے انکرت ہوتے ہیں۔ جڑیں اور نئی شاخیں تیزی سے نشوونما پاتی ہیں۔',
            'Seeds absorb moisture and sprout. Roots and shoots develop quickly.' => 'بیج نمی جذب کرکے پھوٹتے ہیں۔ جڑیں اور نئی شاخیں تیزی سے نشوونما پاتی ہیں۔',
            'Seeds absorb moisture and sprout.' => 'بیج نمی جذب کرکے پھوٹتے ہیں۔',
            'Roots and shoots develop quickly.' => 'جڑیں اور نئی شاخیں تیزی سے نشوونما پاتی ہیں۔',
            'Young plants develop leaves and establish root systems.' => 'نوجوان پودے پتے بناتے ہیں اور جڑوں کا مضبوط نظام قائم کرتے ہیں۔',
            'Rapid growth of stems and leaves occurs.' => 'تنوں اور پتوں کی تیز رفتار نشوونما ہوتی ہے۔',
            'Flower head develops inside the stem.' => 'پھولوں کا گچھا تنے کے اندر نشوونما پاتا ہے۔',
            'Pollination occurs and grain formation begins.' => 'گردہ افشانی ہوتی ہے اور دانے بننے کا عمل شروع ہو جاتا ہے۔',
            'Grains develop and fill with nutrients.' => 'دانے نشوونما پاتے ہیں اور غذائی اجزا سے بھر جاتے ہیں۔',
            'Plant dries and grains become hard and ready for harvest.' => 'پودا خشک ہو جاتا ہے اور دانے سخت ہو کر کٹائی کے لیے تیار ہو جاتے ہیں۔',
            'Each stage is important for achieving good sorghum yield.' => 'اچھی جوار کی پیداوار حاصل کرنے کے لیے ہر مرحلہ اہم ہے۔',
            'Seeds absorb water and begin sprouting. Roots and shoots start developing.' => 'بیج پانی جذب کرکے پھوٹنا شروع کرتے ہیں۔ جڑیں اور نئی شاخیں نشوونما پانا شروع کر دیتی ہیں۔',
            'Young plants develop leaves and establish a root system.' => 'نوجوان پودے پتے بناتے ہیں اور جڑوں کا مضبوط نظام قائم کرتے ہیں۔',
            'Rapid growth of stems and leaves occurs.' => 'تنوں اور پتوں کی تیز رفتار نشوونما ہوتی ہے۔',
            'The flower head develops inside the stem.' => 'پھولوں کا گچھا تنے کے اندر نشوونما پاتا ہے۔',
            'Pollination occurs and grain formation begins.' => 'گردہ افشانی ہوتی ہے اور دانے بننے کا عمل شروع ہو جاتا ہے۔',
            'Grains develop and fill with nutrients.' => 'دانے نشوونما پاتے ہیں اور غذائی اجزا سے بھر جاتے ہیں۔',
            'The plant dries and grains become hard and ready for harvest.' => 'پودا خشک ہو جاتا ہے اور دانے سخت ہو کر کٹائی کے لیے تیار ہو جاتے ہیں۔',
            'Each stage is important for achieving good sorghum yield.' => 'اچھی جوار کی پیداوار حاصل کرنے کے لیے ہر مرحلہ اہم ہے۔',
            'Leaves curl, become sticky, and growth slows down.' => 'پتے مڑ کر چپچپے ہو جاتے ہیں اور پودے کی نشوونما سست پڑ جاتی ہے۔',
            'Leaves turn yellow, curl, and plant growth becomes weak.' => 'پتے پیلے ہو کر مڑ جاتے ہیں اور پودے کی نشوونما کمزور پڑ جاتی ہے۔',
            'Leaf edges turn yellow, curl, and dry.' => 'پتوں کے کنارے پیلے ہو کر مڑ جاتے ہیں اور خشک ہو جاتے ہیں۔',
            'Plants become weak, wilt, and roots turn dark and rotten.' => 'پودے کمزور ہو کر مرجھا جاتے ہیں اور جڑیں سیاہ ہو کر سڑ جاتی ہیں۔',
            'Yellow patches appear on leaves, plants become stunted, and yield decreases.' => 'پتوں پر زرد دھبے ظاہر ہوتے ہیں، پودوں کی نشوونما رک جاتی ہے اور پیداوار کم ہو جاتی ہے۔',
            'Small water-soaked spots appear on leaves and later turn brown.' => 'پتوں پر پانی سے بھیگے ہوئے چھوٹے دھبے ظاہر ہوتے ہیں جو بعد میں بھورے ہو جاتے ہیں۔',
            'Brown spots appear on leaves which later enlarge and dry.' => 'پتوں پر بھورے دھبے ظاہر ہوتے ہیں جو بعد میں پھیل کر خشک ہو جاتے ہیں۔',
            'Brown spots appear on leaves, which later enlarge and dry out.' => 'پتوں پر بھورے دھبے ظاہر ہوتے ہیں جو بعد میں پھیل کر خشک ہو جاتے ہیں۔',
            'Dark sunken spots appear on stems, leaves, and pods.' => 'تنوں، پتوں اور پھلیوں پر گہرے دھنسے ہوئے دھبے ظاہر ہوتے ہیں۔',
            'Leaves become silvery, curled, and flowers may drop early.' => 'پتے چاندی جیسے اور مڑے ہوئے ہو جاتے ہیں اور پھول وقت سے پہلے جھڑ سکتے ہیں۔',
            'White powder-like patches appear on leaves and stems.' => 'پتوں اور تنوں پر سفید پاؤڈر جیسے دھبے ظاہر ہوتے ہیں۔',
            'Plants suddenly wilt, leaves droop, and the plant may die.' => 'پودے اچانک مرجھا جاتے ہیں، پتے لٹک جاتے ہیں اور پودا مر بھی سکتا ہے۔',
            'Plants wilt suddenly, show poor growth, and may die.' => 'پودے اچانک مرجھا جاتے ہیں، نشوونما کمزور ہو جاتی ہے اور پودا مر بھی سکتا ہے۔',
            'Leaves show light and dark green patches, become smaller, and plant growth slows.' => 'پتوں پر ہلکے اور گہرے سبز دھبے ظاہر ہوتے ہیں، پتے چھوٹے ہو جاتے ہیں اور پودے کی نشوونما سست پڑ جاتی ہے۔',
            'Leaves curl, turn yellow, and plants become weak.' => 'پتے مڑ کر پیلے ہو جاتے ہیں اور پودے کمزور پڑ جاتے ہیں۔',
            'Leaves turn yellow, plant weakens, and sticky honeydew appears on leaves.' => 'پتے پیلے ہو جاتے ہیں، پودا کمزور پڑ جاتا ہے اور پتوں پر چپچپا شہد نما مادہ ظاہر ہوتا ہے۔',
            'Holes in pods and damaged grains inside.' => 'پھلیوں میں سوراخ ہو جاتے ہیں اور اندر موجود دانے متاثر ہوتے ہیں۔',
            'Holes in leaves, damaged flowers, and slow plant growth.' => 'پتوں میں سوراخ ہو جاتے ہیں، پھول متاثر ہوتے ہیں اور پودے کی نشوونما سست ہو جاتی ہے۔',
            'Leaves appear folded or rolled, with damaged green tissue.' => 'پتے مڑے یا لپٹے ہوئے نظر آتے ہیں اور سبز بافت کو نقصان پہنچتا ہے۔',
            'Plants become weak, wilt, and roots turn dark and rotten.' => 'پودے کمزور ہو کر مرجھا جاتے ہیں اور جڑیں سیاہ ہو کر سڑ جاتی ہیں۔',
            'Keep the field clean, remove weeds, and encourage natural predators like ladybirds.' => 'کھیت صاف رکھیں، جڑی بوٹیاں نکال دیں اور لیڈی برڈ جیسے قدرتی شکاری حشرات کی افزائش کی حوصلہ افزائی کریں۔',
            'Remove weeds, keep field clean, and encourage natural predators like ladybirds.' => 'جڑی بوٹیاں نکال دیں، کھیت صاف رکھیں اور لیڈی برڈ جیسے قدرتی شکاری حشرات کی حوصلہ افزائی کریں۔',
            'Remove weeds, avoid excess nitrogen, and encourage natural enemies like ladybirds.' => 'جڑی بوٹیاں نکال دیں، ضرورت سے زیادہ نائٹروجن کے استعمال سے گریز کریں اور لیڈی برڈ جیسے قدرتی دشمن حشرات کی حوصلہ افزائی کریں۔',
            'Monitor crops regularly and maintain field hygiene.' => 'فصلوں کی باقاعدگی سے نگرانی کریں اور کھیت کی صفائی برقرار رکھیں۔',
            'Use yellow sticky traps and keep the field free from weeds.' => 'زرد چپکنے والے پھندے استعمال کریں اور کھیت کو جڑی بوٹیوں سے پاک رکھیں۔',
            'Encourage natural predators and remove heavily infested plants.' => 'قدرتی شکاری حشرات کی حوصلہ افزائی کریں اور شدید متاثرہ پودے نکال دیں۔',
            'Remove affected pods and monitor the crop regularly.' => 'متاثرہ پھلیاں نکال دیں اور فصل کی باقاعدگی سے نگرانی کریں۔',
            'Keep the field clean and use sticky traps.' => 'کھیت صاف رکھیں اور چپکنے والے پھندے استعمال کریں۔',
            'Maintain proper spacing and remove infected plant parts.' => 'پودوں کے درمیان مناسب فاصلہ برقرار رکھیں اور متاثرہ حصے نکال دیں۔',
            'Remove infected leaves and practice crop rotation.' => 'متاثرہ پتے نکال دیں اور فصلوں میں ردوبدل کریں۔',
            'Use resistant varieties and avoid dense planting.' => 'مزاحم اقسام استعمال کریں اور بہت زیادہ گنجان کاشت سے گریز کریں۔',
            'Remove rolled leaves and maintain field cleanliness.' => 'لپٹے ہوئے پتے نکال دیں اور کھیت کی صفائی برقرار رکھیں۔',
            'Remove infected leaves and keep field clean.' => 'متاثرہ پتے نکال دیں اور کھیت صاف رکھیں۔',
            'Remove infected leaves and maintain field hygiene.' => 'متاثرہ پتے نکال دیں اور کھیت کی صفائی برقرار رکھیں۔',
            'Avoid overhead watering and remove infected leaves.' => 'اوپر سے پانی دینے سے گریز کریں اور متاثرہ پتے نکال دیں۔',
            'Avoid excess watering and ensure proper spacing.' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور مناسب فاصلہ یقینی بنائیں۔',
            'Avoid overwatering and use clean seed.' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور صاف بیج استعمال کریں۔',
            'Use clean seeds and remove infected plant debris.' => 'صاف بیج استعمال کریں اور متاثرہ پودوں کی باقیات نکال دیں۔',
            'Use crop rotation and cover soil around plants.' => 'فصلوں میں ردوبدل کریں اور پودوں کے اردگرد مٹی ڈھانپ دیں۔',
            'Avoid injury to roots and store in dry conditions.' => 'جڑوں کو نقصان پہنچانے سے گریز کریں اور خشک حالات میں ذخیرہ کریں۔',
            'Keep field moist, remove weeds, and avoid water stress.' => 'کھیت میں مناسب نمی برقرار رکھیں، جڑی بوٹیاں نکال دیں اور پانی کی کمی کے دباؤ سے گریز کریں۔',
            'Rotate crops and avoid planting onions in the same field every year.' => 'فصلوں میں ردوبدل کریں اور ہر سال اسی کھیت میں پیاز لگانے سے گریز کریں۔',
            'Avoid overwatering and improve air circulation.' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور ہوا کی آمدورفت بہتر بنائیں۔',
            'Use crop rotation and avoid infected soil.' => 'فصلوں میں ردوبدل کریں اور متاثرہ مٹی میں کاشت سے گریز کریں۔',
            'Avoid waterlogging and use healthy seed bulbs.' => 'پانی جمع ہونے سے گریز کریں اور صحت مند بیج والی گانٹھیں استعمال کریں۔',
            'Use netting, remove damaged leaves, and rotate crops.' => 'جالی استعمال کریں، متاثرہ پتے نکال دیں اور فصلوں میں ردوبدل کریں۔',
            'Hand-pick larvae and keep field clean.' => 'سنڈیاں ہاتھ سے نکالیں اور کھیت صاف رکھیں۔',
            'Remove crop residues and clean field before planting.' => 'کاشت سے پہلے فصل کی باقیات نکال دیں اور کھیت صاف کریں۔',
            'Use net covers and keep field weed-free.' => 'جالی دار پردے استعمال کریں اور کھیت کو جڑی بوٹیوں سے پاک رکھیں۔',
            'Avoid overcrowding and improve sunlight exposure.' => 'بہت زیادہ گنجان کاشت سے گریز کریں اور پودوں کو مناسب دھوپ ملنے دیں۔',
            'Apply Mancozeb or Carbendazim.' => 'مینکوزیب یا کاربینڈازم استعمال کریں۔',
            'Apply Sulfur or Hexaconazole.' => 'سلفر یا ہیکسا کونازول استعمال کریں۔',
            'Apply Sulphur or Hexaconazole.' => 'سلفر یا ہیکسا کونازول استعمال کریں۔',
            'Apply Acetamiprid or Imidacloprid.' => 'ایسیٹامی پرڈ یا امیڈاکلوپرڈ استعمال کریں۔',
            'Apply Emamectin Benzoate or Spinosad.' => 'ایمامیکٹن بینزویٹ یا اسپائنو سیڈ استعمال کریں۔',
            'Apply Chlorpyrifos or Lambda-cyhalothrin.' => 'کلورپائریفوس یا لیمبڈا سائہیلوتھرن استعمال کریں۔',
            'Apply Imidacloprid or Thiamethoxam.' => 'امیڈاکلوپرڈ یا تھایامیٹھوکزام استعمال کریں۔',
            'Apply copper-based bactericides where recommended.' => 'جہاں سفارش کی گئی ہو وہاں تانبے پر مبنی جراثیم کش ادویات استعمال کریں۔',
            'Apply Mancozeb or Copper oxychloride.' => 'مینکوزیب یا کاپر آکسی کلورائیڈ استعمال کریں۔',
            'Apply Mancozeb or Copper-based fungicides.' => 'مینکوزیب یا تانبے پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            'Apply Carbendazim or soil fungicides.' => 'کاربینڈازم یا مٹی کے لیے موزوں پھپھوندی کش ادویات استعمال کریں۔',
            'Apply Sulfur or Propiconazole.' => 'سلفر یا پروپیکونازول استعمال کریں۔',
            'Apply Abamectin or Spinosad.' => 'ایبامیکٹن یا اسپائنو سیڈ استعمال کریں۔',
            'Apply Metalaxyl or Mancozeb.' => 'میٹالیکسل یا مینکوزیب استعمال کریں۔',
            'Apply Metalaxyl-based fungicides.' => 'میٹالیکسل پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            'Use pheromone traps and apply recommended insecticides.' => 'جنسی کشش والے پھندے استعمال کریں اور تجویز کردہ کیڑے مار ادویات استعمال کریں۔',
            'Treat soil or seeds with Carbendazim.' => 'مٹی یا بیجوں کا کاربینڈازم سے علاج کریں۔',
            'Control aphids and use virus-free seed potatoes.' => 'افڈز کا تدارک کریں اور وائرس سے پاک بیج والے آلو استعمال کریں۔',
            'Control aphids and remove infected plants immediately.' => 'افڈز کا تدارک کریں اور متاثرہ پودے فوراً نکال دیں۔',
            'Fungus spreads in warm and wet conditions.' => 'پھپھوندی گرم اور نم حالات میں پھیلتی ہے۔',
            'Fungus spreads in humid conditions and infects leaves.' => 'پھپھوندی مرطوب حالات میں پھیلتی ہے اور پتوں کو متاثر کرتی ہے۔',
            'Fungus spreads through wind in humid weather.' => 'پھپھوندی مرطوب موسم میں ہوا کے ذریعے پھیلتی ہے۔',
            'Fungus spreads in wet and humid conditions.' => 'پھپھوندی نم اور مرطوب حالات میں پھیلتی ہے۔',
            'Fungus spreads in cool and wet conditions.' => 'پھپھوندی ٹھنڈے اور نم حالات میں پھیلتی ہے۔',
            'Fungus spreads in warm and humid conditions.' => 'پھپھوندی گرم اور مرطوب حالات میں پھیلتی ہے۔',
            'Fungus spreads in humid and wet conditions.' => 'پھپھوندی مرطوب اور نم حالات میں پھیلتی ہے۔',
            'Bacteria spread through wind, rain, insects, and infected plant material.' => 'بیکٹیریا ہوا، بارش، حشرات اور متاثرہ پودوں کے مواد کے ذریعے پھیلتے ہیں۔',
            'Whiteflies suck sap from leaves and spread viral diseases.' => 'سفید مکھیاں پتوں کا رس چوستی ہیں اور وائرسی بیماریاں پھیلاتی ہیں۔',
            'Collect and destroy fallen fruits and use pheromone traps.' => 'گرے ہوئے پھل جمع کرکے تلف کریں اور جنسی کشش والے پھندے استعمال کریں۔',
            'Fruits rot from inside, become soft, and fall early.' => 'پھل اندر سے سڑ جاتے ہیں، نرم ہو جاتے ہیں اور جلد گر جاتے ہیں۔',
        ];
        if (isset($exact[$text])) return $exact[$text];

        $rules = [
            '/^(\d+)\.\s*Germination Stage\s*$/iu' => '$1. انکرن کا مرحلہ',
            '/^(\d+)\.\s*Seedling Stage\s*$/iu' => '$1. پنیری کا مرحلہ',
            '/^(\d+)\.\s*Vegetative Stage\s*$/iu' => '$1. نباتاتی مرحلہ',
            '/^(\d+)\.\s*Booting Stage\s*$/iu' => '$1. بالیاں بننے کا مرحلہ',
            '/^(\d+)\.\s*Flowering Stage\s*$/iu' => '$1. پھول آنے کا مرحلہ',
            '/^(\d+)\.\s*Grain Filling Stage\s*$/iu' => '$1. دانے بھرنے کا مرحلہ',
            '/^(\d+)\.\s*Maturity Stage\s*$/iu' => '$1. پختگی کا مرحلہ',
            '/^(.+?) is usually sown from (.+?) to (.+?) in (.+?) depending on (.+?)\.?$/iu' => '$4 میں $1 کو عام طور پر $2 سے $3 تک $5 کے مطابق بویا جاتا ہے۔',
            '/^(.+?) is usually sown in (.+?) in (.+?)\.?$/iu' => '$3 میں $1 کو عام طور پر $2 میں بویا جاتا ہے۔',
            '/^(.+?) is usually sown from (.+?) in (.+?)\.?$/iu' => '$3 میں $1 کو عام طور پر $2 کے دوران بویا جاتا ہے۔',
            '/^(.+?) is often grown in rainfed areas where irrigation is limited\.?$/iu' => '$1 کو اکثر ایسے علاقوں میں اگایا جاتا ہے جہاں بارش پر انحصار ہوتا ہے اور آبپاشی محدود ہوتی ہے۔',
            '/^(.+?) is a drought-tolerant crop that grows well in hot conditions\.?$/iu' => '$1 خشک سالی برداشت کرنے والی فصل ہے جو گرم حالات میں اچھی نشوونما پاتی ہے۔',
            '/^(.+?) is a drought-resistant crop that grows well in (.+?)\.?$/iu' => '$1 خشک سالی برداشت کرنے والی فصل ہے جو $2 میں اچھی نشوونما پاتی ہے۔',
            '/^(.+?) grows best in (.+?) with (.+?)\.?$/iu' => '$1، $3 کے ساتھ $2 میں بہترین نشوونما پاتی ہے۔',
            '/^(.+?) grows best in (.+?) and requires (.+?)\.?$/iu' => '$1، $2 میں بہترین نشوونما پاتی ہے اور اسے $3 کی ضرورت ہوتی ہے۔',
            '/^(.+?) grows well in (.+?) and requires (.+?)\.?$/iu' => '$1، $2 میں اچھی نشوونما پاتی ہے اور اسے $3 کی ضرورت ہوتی ہے۔',
            '/^(.+?) grows well in (.+?)\.?$/iu' => '$1، $2 میں اچھی نشوونما پاتی ہے۔',
            '/^(.+?) requires (.+?) for healthy growth\.?$/iu' => 'صحت مند نشوونما کے لیے $1 کو $2 درکار ہے۔',
            '/^(.+?) requires (.+?)\.?$/iu' => '$1 کو $2 درکار ہے۔',
            '/^(.+?) cannot tolerate (.+?)\.?$/iu' => '$1، $2 برداشت نہیں کر سکتا۔',
            '/^(.+?) is harvested from (.+?) depending on (.+?)\.?$/iu' => '$1 کی کٹائی $2 کے دوران $3 کے مطابق کی جاتی ہے۔',
            '/^(.+?) is harvested (.+?) after sowing depending on variety\.?$/iu' => '$1 کی کٹائی قسم کے مطابق بیجائی کے $2 بعد کی جاتی ہے۔',
            '/^(.+?) is harvested (.+?) after sowing\.?$/iu' => '$1 کی کٹائی بیجائی کے $2 بعد کی جاتی ہے۔',
            '/^(.+?) are harvested when (.+?)\.?$/iu' => '$1 کی کٹائی اس وقت کی جاتی ہے جب $2۔',
            '/^(.+?) is harvested when (.+?)\.?$/iu' => '$1 کی کٹائی اس وقت کی جاتی ہے جب $2۔',
            '/^(.+?) is mainly grown for (.+?), which is used to (.+?)\.?$/iu' => '$1 بنیادی طور پر $2 کے لیے اگائی جاتی ہے، جسے $3 کے لیے استعمال کیا جاتا ہے۔',
            '/^(.+?) is mainly cultivated for its seeds which are used to (.+?)\.?$/iu' => '$1 بنیادی طور پر اپنے بیجوں کے لیے کاشت کی جاتی ہے، جنہیں $2 کے لیے استعمال کیا جاتا ہے۔',
            '/^(.+?) is mainly cultivated for its seeds, which are used to (.+?)\.?$/iu' => '$1 بنیادی طور پر اپنے بیجوں کے لیے کاشت کی جاتی ہے، جنہیں $2 کے لیے استعمال کیا جاتا ہے۔',
            '/^(.+?) is widely used in (.+?), (.+?), and (.+?)\.?$/iu' => '$1 کو $2، $3 اور $4 میں بڑے پیمانے پر استعمال کیا جاتا ہے۔',
            '/^(.+?) is used for human food, animal feed, and fodder purposes\.?$/iu' => '$1 انسانی خوراک، جانوروں کی خوراک اور چارے کے لیے استعمال ہوتی ہے۔',
            '/^(.+?) provides (.+?) to farmers and supports (.+?)\.?$/iu' => '$1 کسانوں کو $2 فراہم کرتی ہے اور $3 کو سہارا دیتی ہے۔',
            '/^(.+?) provides good income to farmers\.?$/iu' => '$1 کسانوں کو اچھی آمدنی فراہم کرتی ہے۔',
            '/^(.+?) helps control (.+?) and improve (.+?)\.?$/iu' => '$1، $2 کو قابو کرنے اور $3 بہتر بنانے میں مدد دیتی ہے۔',
            '/^(.+?) is rich in (.+?) and (.+?)\.?$/iu' => '$1 $2 اور $3 سے بھرپور ہے۔',
            '/^(.+?) is rich in (.+?), (.+?), and (.+?)\.?$/iu' => '$1 $2، $3 اور $4 سے بھرپور ہے۔',
            '/^(.+?) is an important (.+?) crop grown in (.+?) and many other countries\.?$/iu' => '$1 $3 اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم $2 فصل ہے۔',
            '/^(.+?) is an important vegetable crop grown in (.+?) and many tropical and subtropical regions\.?$/iu' => '$1 $2 اور بہت سے گرم و نیم گرم علاقوں میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            '/^(.+?) is an important fruit crop grown in (.+?) and many other countries\.?$/iu' => '$1 $2 اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم پھل کی فصل ہے۔',
            '/^(.+?) is known for its (.+?) and (.+?)\.?$/iu' => '$1 اپنی $2 اور $3 کے لیے مشہور ہے۔',
            '/^(.+?) is known for its (.+?)\.?$/iu' => '$1 اپنی $2 کے لیے مشہور ہے۔',
            '/^(.+?) is widely consumed because of its (.+?), (.+?), and (.+?)\.?$/iu' => '$1 اپنے $2، $3 اور $4 کی وجہ سے بڑے پیمانے پر استعمال کی جاتی ہے۔',
            '/^(.+?) is used both as human food and animal feed\.?$/iu' => '$1 انسانی خوراک اور جانوروں کی خوراک دونوں کے طور پر استعمال ہوتی ہے۔',
            '/^(.+?) is also used to produce (.+?)\.?$/iu' => 'اس سے $2 بھی تیار کیا جاتا ہے۔',
            '/^(.+?) is spread by (.+?)\.?$/iu' => '$1، $2 کے ذریعے پھیلتا ہے۔',
            '/^(.+?) spreads through (.+?)\.?$/iu' => '$1، $2 کے ذریعے پھیلتا ہے۔',
            '/^(.+?) spread through (.+?)\.?$/iu' => '$1، $2 کے ذریعے پھیلتے ہیں۔',
            '/^(.+?) suck sap from (.+?)\.?$/iu' => '$1، $2 کا رس چوستے ہیں۔',
            '/^(.+?) sucks sap from (.+?)\.?$/iu' => '$1، $2 کا رس چوستا ہے۔',
            '/^(.+?) feed on (.+?)\.?$/iu' => '$1، $2 کو کھاتے ہیں۔',
            '/^(.+?) feed by sucking sap from (.+?)\.?$/iu' => '$1، $2 کا رس چوس کر خوراک حاصل کرتے ہیں۔',
            '/^(.+?) attack (.+?) and (.+?)\.?$/iu' => '$1، $2 پر حملہ کرتے ہیں اور $3 کو نقصان پہنچاتے ہیں۔',
            '/^(.+?) attack (.+?)\.?$/iu' => '$1، $2 پر حملہ کرتے ہیں۔',
            '/^(.+?) enter (.+?) and feed inside (.+?)\.?$/iu' => '$1، $2 میں داخل ہو کر $3 کے اندر خوراک حاصل کرتے ہیں۔',
            '/^After hatching, larvae enter (.+?) and feed inside the plant\.?$/iu' => 'انڈوں سے نکلنے کے بعد سنڈیاں $1 میں داخل ہو کر پودے کے اندر خوراک حاصل کرتی ہیں۔',
            '/^Adult moths lay eggs on (.+?)\.?$/iu' => 'بالغ پروانے $1 پر انڈے دیتے ہیں۔',
            '/^(.+?) lay eggs on (.+?)\.?$/iu' => '$1 $2 پر انڈے دیتے ہیں۔',
            '/^(.+?) appear on (.+?)\.?$/iu' => '$1، $2 پر ظاہر ہوتے ہیں۔',
            '/^(.+?) appears on (.+?)\.?$/iu' => '$1، $2 پر ظاہر ہوتا ہے۔',
            '/^(.+?) become (.+?)\.?$/iu' => '$1، $2 ہو جاتے ہیں۔',
            '/^(.+?) becomes (.+?)\.?$/iu' => '$1، $2 ہو جاتا ہے۔',
            '/^(.+?) turn (.+?),? and (.+?)\.?$/iu' => '$1، $2 ہو جاتے ہیں اور $3۔',
            '/^(.+?) turns (.+?)\.?$/iu' => '$1، $2 ہو جاتا ہے۔',
            '/^(.+?) causes (.+?)\.?$/iu' => '$1، $2 کا سبب بنتا ہے۔',
            '/^(.+?) is caused by (.+?)\.?$/iu' => '$1، $2 کی وجہ سے ہوتا ہے۔',
            '/^Use resistant varieties,? (.+?)\.?$/iu' => 'مزاحم اقسام استعمال کریں اور $1۔',
            '/^Use (.+?) and (.+?)\.?$/iu' => '$1 استعمال کریں اور $2۔',
            '/^Use (.+?)\.?$/iu' => '$1 استعمال کریں۔',
            '/^Remove (.+?) and (.+?)\.?$/iu' => '$1 نکال دیں اور $2۔',
            '/^Remove (.+?)\.?$/iu' => '$1 نکال دیں۔',
            '/^Avoid (.+?) and (.+?)\.?$/iu' => '$1 سے گریز کریں اور $2۔',
            '/^Avoid (.+?)\.?$/iu' => '$1 سے گریز کریں۔',
            '/^Maintain (.+?)\.?$/iu' => '$1 برقرار رکھیں۔',
            '/^Monitor (.+?) regularly\.?$/iu' => '$1 کی باقاعدگی سے نگرانی کریں۔',
            '/^Encourage (.+?)\.?$/iu' => '$1 کی حوصلہ افزائی کریں۔',
            '/^Install (.+?)\.?$/iu' => '$1 نصب کریں۔',
            '/^Apply (.+?) according to agricultural recommendations\.?$/iu' => 'زرعی سفارشات کے مطابق $1 استعمال کریں۔',
            '/^Apply (.+?)\.?$/iu' => '$1 استعمال کریں۔',
            '/^Keep (.+?) clean\.?$/iu' => '$1 صاف رکھیں۔',
            '/^Keep (.+?) under control\.?$/iu' => '$1 کو قابو میں رکھیں۔',
            '/^Improve (.+?) and avoid (.+?)\.?$/iu' => '$1 بہتر کریں اور $2 سے گریز کریں۔',
            '/^(.+?) improves (.+?)\.?$/iu' => '$1، $2 بہتر کرتا ہے۔',
            '/^(.+?) reduces (.+?)\.?$/iu' => '$1، $2 کم کرتا ہے۔',
            '/^(.+?) increases (.+?)\.?$/iu' => '$1، $2 بڑھاتا ہے۔',
            '/^(.+?) provides (.+?)\.?$/iu' => '$1، $2 فراہم کرتا ہے۔',
        ];

        foreach ($rules as $pattern => $replacement) {
            $out = preg_replace($pattern, $replacement, $text);
            if ($out !== null && $out !== $text) {
                $out = $this->applyAgriculturePhraseRules($out);
                $out = $this->fixAgricultureKnownNames($out);
                return $this->fixGrammar($out);
            }
        }
        return $text;
    }

    private function translateAgricultureNaturalSentence(string $text): string
    {
        $text = trim($text);
        if ($text === '') return '';

        $introExact = [
            'Pearl Millet, commonly known as Bajra, is an important cereal and fodder crop grown in arid and semi-arid regions of Pakistan and other dry countries. It is a highly drought-resistant crop and is mainly used as food for humans and fodder for livestock. Bajra plays a key role in ensuring food security in dryland farming systems.' => 'باجرا پاکستان اور دیگر خشک ممالک کے خشک اور نیم خشک علاقوں میں اگائی جانے والی ایک اہم اناج اور چارے کی فصل ہے۔ یہ فصل خشک سالی کو برداشت کرنے کی بھرپور صلاحیت رکھتی ہے اور اسے بنیادی طور پر انسانی خوراک اور مویشیوں کے چارے کے لیے استعمال کیا جاتا ہے۔ باجرا خشک علاقوں میں کاشت کے نظام کے تحت غذائی تحفظ یقینی بنانے میں اہم کردار ادا کرتا ہے۔',
        ];
        if (isset($introExact[$text])) return $introExact[$text];

        $introPatterns = [
            '/^(.+?), commonly known as (.+?), is an important (.+?) crop grown in (.+?)\. It is a highly drought-resistant crop and is mainly used as food for humans and fodder for livestock\. (.+?) plays a key role in ensuring food security in dryland farming systems\.?$/iu' => function ($m) {
                $crop = $this->fixAgricultureKnownNames(trim($m[1]));
                $known = $this->fixAgricultureKnownNames(trim($m[2]));
                $type = $this->translateSimplePhrase(trim($m[3]));
                $regions = $this->translateSimplePhrase(trim($m[4]));
                $subject = $this->fixAgricultureKnownNames(trim($m[5]));
                return $crop . '، جسے ' . $known . ' بھی کہا جاتا ہے، ' . $regions . ' میں اگائی جانے والی ایک اہم ' . $type . ' فصل ہے۔ یہ فصل خشک سالی کو برداشت کرنے کی بھرپور صلاحیت رکھتی ہے اور اسے بنیادی طور پر انسانی خوراک اور مویشیوں کے چارے کے لیے استعمال کیا جاتا ہے۔ ' . $subject . ' خشک علاقوں میں کاشت کے نظام کے تحت غذائی تحفظ یقینی بنانے میں اہم کردار ادا کرتا ہے۔';
            },
        ];
        foreach ($introPatterns as $pattern => $replacement) {
            if (preg_match($pattern, $text, $m)) return is_callable($replacement) ? $replacement($m) : $replacement;
        }

        $introMorePatterns = [
            '/^(.+?) is one of the most important (.+?) crops grown in (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' ' . $this->translateSimplePhrase(trim($m[3])) . ' میں اگائی جانے والی اہم ترین ' . $this->translateSimplePhrase(trim($m[2])) . ' فصلوں میں سے ایک ہے۔';
            },
            '/^(.+?) is one of the most important (.+?) crops in (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' ' . $this->translateSimplePhrase(trim($m[3])) . ' کی اہم ترین ' . $this->translateSimplePhrase(trim($m[2])) . ' فصلوں میں سے ایک ہے۔';
            },
            '/^(.+?) is famous for its (.+?), (.+?), and (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' اپنی ' . $this->translateSimplePhrase(trim($m[2])) . '، ' . $this->translateSimplePhrase(trim($m[3])) . ' اور ' . $this->translateSimplePhrase(trim($m[4])) . ' کے لیے مشہور ہے۔';
            },
            '/^(.+?) is famous for its (.+?) and (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' اپنی ' . $this->translateSimplePhrase(trim($m[2])) . ' اور ' . $this->translateSimplePhrase(trim($m[3])) . ' کے لیے مشہور ہے۔';
            },
            '/^(.+?) farming plays an important role in the agriculture economy by providing income to farmers and supporting (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' کی کاشت زرعی معیشت میں اہم کردار ادا کرتی ہے، کیونکہ اس سے کسانوں کو آمدنی حاصل ہوتی ہے اور ' . $this->translateSimplePhrase(trim($m[2])) . ' کو سہارا ملتا ہے۔';
            },
            '/^(.+?) farming plays a significant role in the agriculture economy by providing income to farmers and supporting (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' کی کاشت زرعی معیشت میں اہم کردار ادا کرتی ہے، کیونکہ اس سے کسانوں کو آمدنی حاصل ہوتی ہے اور ' . $this->translateSimplePhrase(trim($m[2])) . ' کو سہارا ملتا ہے۔';
            },
            '/^It is mainly grown in (.+?) during the (.+?) season\.?$/iu' => function ($m) {
                return 'اسے بنیادی طور پر ' . $this->translateSimplePhrase(trim($m[1])) . ' میں ' . $this->translateSimplePhrase(trim($m[2])) . ' موسم کے دوران کاشت کیا جاتا ہے۔';
            },
            '/^It is mainly grown in (.+?)\.?$/iu' => function ($m) {
                return 'اسے بنیادی طور پر ' . $this->translateSimplePhrase(trim($m[1])) . ' میں کاشت کیا جاتا ہے۔';
            },
            '/^It is widely consumed because of its (.+?) and (.+?)\.?$/iu' => function ($m) {
                return 'اسے اس کی ' . $this->translateSimplePhrase(trim($m[1])) . ' اور ' . $this->translateSimplePhrase(trim($m[2])) . ' کی وجہ سے بڑے پیمانے پر استعمال کیا جاتا ہے۔';
            },
        ];
        foreach ($introMorePatterns as $pattern => $replacement) {
            if (preg_match($pattern, $text, $m)) return is_callable($replacement) ? $replacement($m) : $replacement;
        }

        $commonPatterns = [
            '/^(.+?) is one of the most important (.+?) crops in Pakistan and many other countries\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' پاکستان اور بہت سے دوسرے ممالک کی اہم ترین ' . $this->translateSimplePhrase(trim($m[2])) . ' فصلوں میں سے ایک ہے۔';
            },
            '/^(.+?) is one of the most important (.+?) crops grown in Pakistan and many other countries\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی اہم ترین ' . $this->translateSimplePhrase(trim($m[2])) . ' فصلوں میں سے ایک ہے۔';
            },
            '/^(.+?) is an important (.+?) crop grown in Pakistan and many other countries\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم ' . $this->translateSimplePhrase(trim($m[2])) . ' فصل ہے۔';
            },
            '/^(.+?) is an important (.+?) crop grown in Pakistan and many tropical countries\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' پاکستان اور بہت سے گرم ممالک میں اگائی جانے والی ایک اہم ' . $this->translateSimplePhrase(trim($m[2])) . ' فصل ہے۔';
            },
            '/^(.+?) is an important (.+?) crop grown in many warm regions of the world including Pakistan\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' پاکستان سمیت دنیا کے کئی گرم علاقوں میں اگائی جانے والی ایک اہم ' . $this->translateSimplePhrase(trim($m[2])) . ' فصل ہے۔';
            },
            '/^(.+?) is widely used in (.+?) because (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' کو ' . $this->translateSimplePhrase(trim($m[2])) . ' میں بڑے پیمانے پر استعمال کیا جاتا ہے کیونکہ ' . $this->translateSimplePhrase(trim($m[3])) . '۔';
            },
            '/^(.+?) is widely used for (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' کو ' . $this->translateSimplePhrase(trim($m[2])) . ' کے لیے بڑے پیمانے پر استعمال کیا جاتا ہے۔';
            },
            '/^(.+?) farming provides good income to farmers because (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' کی کاشت کسانوں کو اچھی آمدنی فراہم کرتی ہے کیونکہ ' . $this->translateSimplePhrase(trim($m[2])) . '۔';
            },
            '/^(.+?) farming provides good income to farmers\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' کی کاشت کسانوں کو اچھی آمدنی فراہم کرتی ہے۔';
            },
            '/^(.+?) grows best in (.+?) with (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' ' . $this->translateSimplePhrase(trim($m[2])) . ' میں بہترین نشوونما پاتا ہے اور اسے ' . $this->translateSimplePhrase(trim($m[3])) . ' دستیاب ہونا چاہیے۔';
            },
            '/^(.+?) grows best in (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames(trim($m[1])) . ' ' . $this->translateSimplePhrase(trim($m[2])) . ' میں بہترین نشوونما پاتا ہے۔';
            },
            '/^It is mainly cultivated for its leaves, which are processed and used in (.+?)\.?$/iu' => function ($m) {
                return 'اس کی کاشت بنیادی طور پر پتوں کے لیے کی جاتی ہے، جنہیں تیار کرکے ' . $this->translateSimplePhrase(trim($m[1])) . ' میں استعمال کیا جاتا ہے۔';
            },
            '/^It is mainly cultivated for its seeds, which are used to produce (.+?)\.?$/iu' => function ($m) {
                return 'اس کی کاشت بنیادی طور پر بیج حاصل کرنے کے لیے کی جاتی ہے، جن سے ' . $this->translateSimplePhrase(trim($m[1])) . ' تیار کیا جاتا ہے۔';
            },
            '/^It is widely consumed as (.+?) and is also used in (.+?)\.?$/iu' => function ($m) {
                return 'اسے بڑے پیمانے پر ' . $this->translateSimplePhrase(trim($m[1])) . ' کے طور پر استعمال کیا جاتا ہے اور یہ ' . $this->translateSimplePhrase(trim($m[2])) . ' میں بھی استعمال ہوتی ہے۔';
            },
            '/^It is rich in (.+?), making it (.+?)\.?$/iu' => function ($m) {
                return 'اس میں ' . $this->translateSimplePhrase(trim($m[1])) . ' وافر مقدار میں پائے جاتے ہیں، جس کی وجہ سے یہ ' . $this->translateSimplePhrase(trim($m[2])) . '۔';
            },
            '/^The crop grows best in (.+?) with (.+?)\.?$/iu' => function ($m) {
                return 'یہ فصل ' . $this->translateSimplePhrase(trim($m[1])) . ' میں بہترین نشوونما پاتی ہے جہاں ' . $this->translateSimplePhrase(trim($m[2])) . '۔';
            },
        ];
        foreach ($commonPatterns as $pattern => $replacement) {
            if (preg_match($pattern, $text, $m)) return is_callable($replacement) ? $replacement($m) : $replacement;
        }

        $pestExact = [
            'Adult moths lay eggs on rice leaves. After hatching, larvae enter stems and feed inside the plant.' => 'بالغ پروانے چاول کے پتوں پر انڈے دیتے ہیں۔ انڈوں سے نکلنے کے بعد سنڈیاں تنوں میں داخل ہو کر پودے کے اندر خوراک حاصل کرتی ہیں۔',
            'The insect thrives in warm and humid conditions and feeds by sucking plant sap.' => 'یہ کیڑا گرم اور مرطوب حالات میں تیزی سے بڑھتا ہے اور پودے کا رس چوس کر خوراک حاصل کرتا ہے۔',
            'Jassids feed by sucking sap from leaves.' => 'سبز تیلے پتوں کا رس چوس کر خوراک حاصل کرتے ہیں۔',
            'Aphids suck sap from leaves and stems.' => 'تیلے پتوں اور تنوں کا رس چوستے ہیں۔',
            'Whiteflies suck plant sap and multiply rapidly in warm weather.' => 'سفید مکھیاں پودے کا رس چوستی ہیں اور گرم موسم میں تیزی سے بڑھتی ہیں۔',
            'Thrips feed on young leaves and tender plant parts.' => 'تھرپس نئی پتیوں اور پودے کے نرم حصوں کو نقصان پہنچاتے ہیں۔',
        ];
        if (isset($pestExact[$text])) return $pestExact[$text];

        $pestQuality = [
            'Leaves curl, become sticky, and plant looks weak and stunted.' => 'پتے مڑ جاتے ہیں اور چپچپے ہو جاتے ہیں، جبکہ پودا کمزور اور پست قد دکھائی دیتا ہے۔',
            'Leaves curl upward, become narrow, and plants look weak and stunted.' => 'پتے اوپر کی طرف مڑ کر تنگ ہو جاتے ہیں اور پودے کمزور اور پست قد دکھائی دیتے ہیں۔',
            'Bacteria enter through wounds in wet soil conditions.' => 'جراثیم نم مٹی کے حالات میں زخموں کے ذریعے پودے میں داخل ہوتے ہیں۔',
            'Leaves show yellow patches and grow uneven or twisted.' => 'پتوں پر زرد دھبے ظاہر ہوتے ہیں اور ان کی نشوونما غیر ہموار یا مڑی ہوئی ہو جاتی ہے۔',
            'Larvae make tunnels inside leaves and feed on green tissue.' => 'سنڈیاں پتوں کے اندر سرنگیں بناتی ہیں اور سبز بافت کو کھاتی ہیں۔',
            'Leaves show white lines or tunnels and slowly dry.' => 'پتوں پر سفید لکیریں یا سرنگیں ظاہر ہوتی ہیں اور پتے آہستہ آہستہ خشک ہو جاتے ہیں۔',
            'Leaves become patchy yellow and plant growth becomes stunted.' => 'پتے زرد دھبوں والے ہو جاتے ہیں اور پودے کی نشوونما رک جاتی ہے۔',
            'Bacteria enter through wounds in branches and spread in wet conditions.' => 'جراثیم شاخوں کے زخموں کے ذریعے پودے میں داخل ہوتے ہیں اور نم حالات میں پھیل جاتے ہیں۔',
            'White powder-like layer on leaves, plants look weak and stunted.' => 'پتوں پر سفید پاؤڈر جیسی تہہ بن جاتی ہے اور پودے کمزور اور پست قد دکھائی دیتے ہیں۔',
            'Leaves become spotted, twisted, and uneven in color.' => 'پتوں پر دھبے پڑ جاتے ہیں، ان کی شکل مڑ جاتی ہے اور رنگ غیر ہموار ہو جاتا ہے۔',
            'Carrots show brown tunnels, roots become damaged and rotten.' => 'گاجروں کی جڑوں میں بھوری سرنگیں بن جاتی ہیں اور جڑیں خراب ہو کر سڑنے لگتی ہیں۔',
            'Larvae feed on leaves by making small holes and damage growing plants.' => 'سنڈیاں پتوں میں چھوٹے سوراخ کرکے انہیں کھاتی ہیں اور بڑھتے ہوئے پودوں کو نقصان پہنچاتی ہیں۔',
            'Yellow and green patches on leaves and stunted plant growth.' => 'پتوں پر زرد اور سبز دھبے پڑ جاتے ہیں اور پودوں کی نشوونما رک جاتی ہے۔',
            'Bacteria enter through wounds and spread in warm, wet conditions.' => 'جراثیم زخموں کے ذریعے پودے میں داخل ہوتے ہیں اور گرم و نم حالات میں پھیل جاتے ہیں۔',
            'Plants become weak, bulbs rot, and growth is stunted.' => 'پودے کمزور ہو جاتے ہیں، گانٹھیں سڑنے لگتی ہیں اور نشوونما رک جاتی ہے۔',
            'Avoid infected soil and practice long crop rotation.' => 'متاثرہ مٹی سے گریز کریں اور طویل مدت تک فصلوں کی گردش پر عمل کریں۔',
            'Leaves become curled, sticky, and weak. Plant growth becomes slow and stunted.' => 'پتے مڑ کر چپچپے اور کمزور ہو جاتے ہیں۔ پودے کی نشوونما سست پڑ جاتی ہے اور پودا پست قد رہ جاتا ہے۔',
            'Larvae feed on leaves by making small holes and damage the plant.' => 'سنڈیاں پتوں میں چھوٹے سوراخ کرکے انہیں کھاتی ہیں اور پودے کو نقصان پہنچاتی ہیں۔',
            'Leaves become curled, twisted, and look damaged with white lines.' => 'پتے مڑے اور ٹیڑھے ہو جاتے ہیں اور ان پر سفید لکیروں کی صورت میں نقصان دکھائی دیتا ہے۔',
            'Small insects appear in groups on leaves and suck plant sap, especially in warm weather.' => 'چھوٹے حشرات پتوں پر جھنڈ کی صورت میں ظاہر ہوتے ہیں اور خصوصاً گرم موسم میں پودے کا رس چوستے ہیں۔',
            'Keep the field clean, use yellow sticky traps, and encourage natural predators like ladybugs.' => 'کھیت صاف رکھیں، زرد چپکنے والے پھندے استعمال کریں اور لیڈی برڈ جیسے قدرتی شکاری حشرات کی حوصلہ افزائی کریں۔',
            'Whiteflies feed on plant sap and spread viral diseases.' => 'سفید مکھیاں پودے کا رس چوستی ہیں اور وائرسی بیماریاں پھیلاتی ہیں۔',
            'Leaves become yellow, weak, and plant growth slows down.' => 'پتے پیلے اور کمزور ہو جاتے ہیں اور پودے کی نشوونما سست پڑ جاتی ہے۔',
            'Adult beetles and larvae feed on leaves, flowers, and young plants.' => 'بالغ بھونرے اور سنڈیاں پتوں، پھولوں اور ننھے پودوں کو کھاتے ہیں۔',
            'Holes in leaves, damaged seedlings, and poor plant growth.' => 'پتوں میں سوراخ، پنیری کو نقصان اور پودوں کی کمزور نشوونما۔',
            'Remove weeds, collect beetles by hand, and keep the field clean.' => 'جڑی بوٹیاں نکال دیں، بھونروں کو ہاتھ سے جمع کرکے ختم کریں اور کھیت صاف رکھیں۔',
            'Remove affected leaves and regularly inspect the crop.' => 'متاثرہ پتے نکال دیں اور فصل کا باقاعدگی سے معائنہ کریں۔',
            'The disease spreads during cool and humid conditions.' => 'یہ بیماری ٹھنڈے اور مرطوب حالات میں پھیلتی ہے۔',
            'Yellow spots appear on leaves and leaves later turn brown and dry.' => 'پتوں پر زرد دھبے ظاہر ہوتے ہیں اور بعد میں پتے بھورے ہو کر خشک ہو جاتے ہیں۔',
            'A soil-borne fungus infects roots and blocks water movement.' => 'مٹی میں موجود فنگس جڑوں کو متاثر کرتا ہے اور پانی کی نقل و حرکت میں رکاوٹ پیدا کرتا ہے۔',
            'Soil-borne fungus infects roots and blocks water flow.' => 'مٹی میں موجود فنگس جڑوں کو متاثر کرتا ہے اور پانی کے بہاؤ میں رکاوٹ پیدا کرتا ہے۔',
            'Fungal infection develops under moist and humid conditions.' => 'مرطوب اور نم حالات میں فنگسی بیماری پیدا ہوتی ہے۔',
            'The fungus develops during warm days and humid nights.' => 'یہ فنگس گرم دنوں اور مرطوب راتوں کے دوران نشوونما پاتا ہے۔',
            'The fungus spreads through infected plant debris and rain splashes.' => 'فنگس متاثرہ پودوں کی باقیات اور بارش کے چھینٹوں کے ذریعے پھیلتا ہے۔',
            'The disease spreads through infected plant debris and moisture.' => 'یہ بیماری متاثرہ پودوں کی باقیات اور نمی کے ذریعے پھیلتی ہے۔',
            'Bacteria spread through infected seed, water, and plant debris.' => 'جراثیم متاثرہ بیج، پانی اور پودوں کی باقیات کے ذریعے پھیلتے ہیں۔',
            'The virus spreads mainly through aphids and infected plants.' => 'یہ وائرس زیادہ تر تیلوں اور متاثرہ پودوں کے ذریعے پھیلتا ہے۔',
        ];
        if (isset($pestQuality[$text])) return $pestQuality[$text];

        $seedQualityRules = [
            '/^Good seeds ensure healthy plants and better fruit production\.?$/iu' => 'اچھے بیج صحت مند پودے پیدا کرتے ہیں اور بہتر پھلوں کی پیداوار میں مدد دیتے ہیں۔',
            '/^Good seeds ensure strong vine growth and better fruit production\.?$/iu' => 'اچھے بیج بیل کی مضبوط نشوونما اور بہتر پھلوں کی پیداوار میں مدد دیتے ہیں۔',
            '/^Good seed ensures healthy crop growth and better yield\.?$/iu' => 'اچھا بیج فصل کی صحت مند نشوونما اور بہتر پیداوار یقینی بناتا ہے۔',
            '/^Good seed ensures uniform crop growth and higher production\.?$/iu' => 'اچھا بیج فصل کی یکساں نشوونما اور زیادہ پیداوار یقینی بناتا ہے۔',
            '/^Good quality seed produces healthy plants and improves (.+?)\.?$/iu' => function($m){ return 'اچھے معیار کا بیج صحت مند پودے پیدا کرتا ہے اور ' . $this->translateSimplePhrase($m[1]) . ' بہتر بناتا ہے۔'; },
            '/^Correct seed rate ensures healthy plant population and balanced growth\.?$/iu' => 'بیج کی درست مقدار پودوں کی مناسب تعداد اور متوازن نشوونما یقینی بناتی ہے۔',
            '/^Correct seed rate ensures proper plant spacing and better fruit development\.?$/iu' => 'بیج کی درست مقدار پودوں کے درمیان مناسب فاصلہ اور پھلوں کی بہتر نشوونما یقینی بناتی ہے۔',
            '/^Correct seed rate ensures proper plant spacing and better yield\.?$/iu' => 'بیج کی درست مقدار پودوں کے درمیان مناسب فاصلہ اور بہتر پیداوار یقینی بناتی ہے۔',
        ];
        foreach ($seedQualityRules as $pattern => $replacement) {
            if (preg_match($pattern, $text, $m)) return is_callable($replacement) ? $replacement($m) : $replacement;
        }

        $sentenceQuality = [
            '/^Why (.+?) is Sown in These Seasons:\s*(.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کو ان موسموں میں کیوں بویا جاتا ہے:\n' . $this->translateAgricultureNaturalSentence($m[2]);
            },
            '/^Why (.+?) is Harvested at This Time:\s*(.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی اس وقت کیوں کی جاتی ہے:\n' . $this->translateAgricultureNaturalSentence($m[2]);
            },
            '/^Why (.+?) is Harvested in Stages:\s*(.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی مختلف مراحل میں کیوں کی جاتی ہے:\n' . $this->translateAgricultureNaturalSentence($m[2]);
            },
            '/^(.+?) is usually sown from (.+?) to (.+?) in Pakistan\.?$/iu' => function ($m) {
                return 'پاکستان میں ' . $this->fixAgricultureKnownNames($m[1]) . ' کی بوائی عموماً ' . $this->translateSimplePhrase($m[2]) . ' سے ' . $this->translateSimplePhrase($m[3]) . ' تک کی جاتی ہے۔';
            },
            '/^(.+?) are usually sown from (.+?) to (.+?) in Pakistan\.?$/iu' => function ($m) {
                return 'پاکستان میں ' . $this->fixAgricultureKnownNames($m[1]) . ' کی بوائی عموماً ' . $this->translateSimplePhrase($m[2]) . ' سے ' . $this->translateSimplePhrase($m[3]) . ' تک کی جاتی ہے۔';
            },
            '/^(.+?) is usually sown in (.+?) in Pakistan\.?$/iu' => function ($m) {
                return 'پاکستان میں ' . $this->fixAgricultureKnownNames($m[1]) . ' کی بوائی عموماً ' . $this->translateSimplePhrase($m[2]) . ' میں کی جاتی ہے۔';
            },
            '/^(.+?) is harvested from (.+?) to (.+?) depending on variety and planting time\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم اور کاشت کے وقت کے مطابق ' . $this->translateSimplePhrase($m[2]) . ' سے ' . $this->translateSimplePhrase($m[3]) . ' تک کی جاتی ہے۔';
            },
            '/^(.+?) is harvested from (.+?) to (.+?) depending on the variety and climate conditions\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم اور موسمی حالات کے مطابق ' . $this->translateSimplePhrase($m[2]) . ' سے ' . $this->translateSimplePhrase($m[3]) . ' تک کی جاتی ہے۔';
            },
            '/^(.+?) is harvested within (.+?) after sowing depending on variety and season\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم اور موسم کے مطابق بوائی کے ' . $this->translateSimplePhrase($m[2]) . ' کے اندر کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) after transplanting\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی پنیری منتقل کرنے کے ' . $this->translateSimplePhrase($m[2]) . ' بعد کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) after sowing depending on variety\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم کے مطابق بوائی کے ' . $this->translateSimplePhrase($m[2]) . ' بعد کی جاتی ہے۔';
            },
            '/^(.+?) are harvested when (.+?),? ensuring (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی اس وقت کی جاتی ہے جب ' . $this->translateSimplePhrase($m[2]) . '، جس سے ' . $this->translateSimplePhrase($m[3]) . ' یقینی ہوتی ہے۔';
            },
            '/^Farmers prepare (.+?) before sowing and ensure (.+?) for better growth\.?$/iu' => function ($m) {
                return 'کسان بوائی سے پہلے ' . $this->translateSimplePhrase($m[1]) . ' تیار کرتے ہیں اور بہتر نشوونما کے لیے ' . $this->translateSimplePhrase($m[2]) . ' یقینی بناتے ہیں۔';
            },
            '/^Farmers prepare fine, loose soil before sowing to ensure straight and healthy root growth\.?$/iu' => 'کسان بوائی سے پہلے باریک اور ڈھیلی مٹی تیار کرتے ہیں تاکہ جڑیں سیدھی اور صحت مند نشوونما پائیں۔',
            '/^Cool weather helps proper root development and improves sweetness and quality\.?$/iu' => 'ٹھنڈا موسم جڑوں کی مناسب نشوونما میں مدد دیتا ہے اور مٹھاس اور معیار بہتر کرتا ہے۔',
            '/^Cool winter weather supports proper germination and plant development\.?$/iu' => 'سردیوں کا ٹھنڈا موسم مناسب انکرن اور پودوں کی نشوونما کے لیے سازگار ہوتا ہے۔',
            '/^It is a fast-growing crop that provides good income to farmers\.?$/iu' => 'یہ تیزی سے بڑھنے والی فصل ہے جو کسانوں کو اچھی آمدنی فراہم کرتی ہے۔',
            '/^It is widely used in household cooking, frozen food industries, and canned food products\.?$/iu' => 'اسے گھریلو کھانا پکانے، منجمد غذائی مصنوعات اور ڈبہ بند خوراک کی تیاری میں بڑے پیمانے پر استعمال کیا جاتا ہے۔',
            '/^(.+?) is an important vegetable crop that provides nutrition and income to farmers\.?$/iu' => function ($m) { return $this->fixAgricultureKnownNames($m[1]) . ' ایک اہم سبزی کی فصل ہے جو غذائیت فراہم کرتی ہے اور کسانوں کے لیے آمدنی کا ذریعہ بنتی ہے۔'; },
            '/^(.+?) are an important vegetable crop that provides nutrition and income to farmers\.?$/iu' => function ($m) { return $this->fixAgricultureKnownNames($m[1]) . ' ایک اہم سبزی کی فصل ہے جو غذائیت فراہم کرتی ہے اور کسانوں کے لیے آمدنی کا ذریعہ بنتی ہے۔'; },
            '/^(.+?) is an important root vegetable crop grown in many parts of the world, including Pakistan\.?$/iu' => function ($m) { return $this->fixAgricultureKnownNames($m[1]) . ' پاکستان سمیت دنیا کے بہت سے علاقوں میں اگائی جانے والی ایک اہم جڑ والی سبزی کی فصل ہے۔'; },
        ];
        foreach ($sentenceQuality as $pattern => $replacement) {
            if (preg_match($pattern, $text, $m)) return is_callable($replacement) ? $replacement($m) : $replacement;
        }

        $qualityRules = [
            '/^Proper spacing ensures good air circulation, healthy growth, and high fruit production\.?$/iu' => 'مناسب فاصلہ رکھنے سے ہوا کی اچھی آمدورفت، پودوں کی صحت مند نشوونما اور زیادہ پھل کی پیداوار یقینی ہوتی ہے۔',
            '/^Proper spacing ensures better (.+?) and yield\.?$/iu' => function ($m) { return 'مناسب فاصلہ رکھنے سے ' . $this->translateSimplePhrase($m[1]) . ' اور بہتر پیداوار حاصل ہوتی ہے۔'; },
            '/^Proper spacing ensures healthy (.+?), healthy growth, and high fruit production\.?$/iu' => function ($m) { return 'مناسب فاصلہ رکھنے سے ' . $this->translateSimplePhrase($m[1]) . '، پودوں کی صحت مند نشوونما اور زیادہ پھل کی پیداوار یقینی ہوتی ہے۔'; },
            '/^Proper seed rate ensures healthy plant population and balanced growth\.?$/iu' => 'بیج کی مناسب مقدار پودوں کی مطلوبہ تعداد اور متوازن نشوونما یقینی بناتی ہے۔',
            '/^Proper seed rate ensures balanced plant population and better fruit development\.?$/iu' => 'بیج کی مناسب مقدار پودوں کی متوازن تعداد اور پھلوں کی بہتر نشوونما یقینی بناتی ہے۔',
            '/^Proper seed rate ensures uniform plant population and better production of healthy (.+?)\.?$/iu' => function ($m) { return 'بیج کی مناسب مقدار صحت مند ' . $this->translateSimplePhrase($m[1]) . ' کی یکساں تعداد اور بہتر پیداوار یقینی بناتی ہے۔'; },
            '/^Proper land preparation ensures healthy (.+?) and higher yield\.?$/iu' => function ($m) { return 'زمین کی مناسب تیاری صحت مند ' . $this->translateSimplePhrase($m[1]) . ' اور زیادہ پیداوار کے حصول میں مدد دیتی ہے۔'; },
            '/^Proper land preparation helps in better (.+?) and (.+?)\.?$/iu' => function ($m) { return 'زمین کی مناسب تیاری ' . $this->translateSimplePhrase($m[1]) . ' اور ' . $this->translateSimplePhrase($m[2]) . ' بہتر بنانے میں مدد دیتی ہے۔'; },
            '/^Proper land preparation supports strong (.+?) and healthy (.+?)\.?$/iu' => function ($m) { return 'زمین کی مناسب تیاری مضبوط ' . $this->translateSimplePhrase($m[1]) . ' اور صحت مند ' . $this->translateSimplePhrase($m[2]) . ' میں مدد دیتی ہے۔'; },
            '/^(.+?) is harvested from (.+?) when fruits turn red and develop full sweetness and aroma\.?$/iu' => function ($m) { return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی ' . $this->translateSimplePhrase($m[2]) . ' کے دوران کی جاتی ہے، جب پھل سرخ ہو جائیں اور ان میں مکمل مٹھاس اور خوشبو پیدا ہو جائے۔'; },
            '/^(.+?) is harvested from (.+?) in Pakistan when fruits turn red and develop full sweetness and aroma\.?$/iu' => function ($m) { return 'پاکستان میں ' . $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی ' . $this->translateSimplePhrase($m[2]) . ' کے دوران کی جاتی ہے، جب پھل سرخ ہو جائیں اور ان میں مکمل مٹھاس اور خوشبو پیدا ہو جائے۔'; },
            '/^(.+?) is usually planted from (.+?) in Pakistan\.?$/iu' => function ($m) { return 'پاکستان میں ' . $this->fixAgricultureKnownNames($m[1]) . ' کی کاشت عموماً ' . $this->translateSimplePhrase($m[2]) . ' تک کی جاتی ہے۔'; },
            '/^(.+?) requires moderate irrigation and is sensitive to both drought and waterlogging\.?$/iu' => function ($m) { return $this->fixAgricultureKnownNames($m[1]) . ' کو معتدل آبپاشی درکار ہوتی ہے اور یہ خشک سالی اور پانی جمع ہونے، دونوں کے لیے حساس ہے۔'; },
            '/^(.+?) requires consistent moisture but does not tolerate waterlogging\.?$/iu' => function ($m) { return $this->fixAgricultureKnownNames($m[1]) . ' کو مسلسل نمی درکار ہوتی ہے، لیکن یہ پانی جمع ہونا برداشت نہیں کرتا۔'; },
            '/^(.+?) requires balanced watering; waterlogging should be avoided\.?$/iu' => function ($m) { return $this->fixAgricultureKnownNames($m[1]) . ' کو متوازن آبپاشی درکار ہوتی ہے، جبکہ پانی جمع ہونے سے بچنا چاہیے۔'; },
            '/^(.+?) is ready when leaves start turning yellow and dry\.?$/iu' => function ($m) { return $this->fixAgricultureKnownNames($m[1]) . ' اس وقت تیار ہوتی ہے جب پتے پیلے پڑنے اور خشک ہونے لگیں۔'; },
            '/^(.+?) is harvested throughout the year depending on planting time\.?$/iu' => function ($m) { return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی کاشت کے وقت کے مطابق پورے سال کی جاتی ہے۔'; },
        ];
        foreach ($qualityRules as $pattern => $replacement) {
            if (preg_match($pattern, $text, $m)) return is_callable($replacement) ? $replacement($m) : $replacement;
        }

        $commonFallback = [
            'Ensure good air flow and avoid overcrowding.' => 'ہوا کی اچھی آمدورفت یقینی بنائیں اور پودوں کو بہت زیادہ گنجان لگانے سے گریز کریں۔',
            'Ensure good drainage and avoid waterlogging.' => 'اچھی نکاسی آب یقینی بنائیں اور کھیت میں پانی جمع ہونے سے بچائیں۔',
            'Ensure proper drainage and use disease-free planting material.' => 'مناسب نکاسی آب یقینی بنائیں اور بیماری سے پاک کاشت کاری مواد استعمال کریں۔',
            'Ensure proper spacing and avoid overcrowding.' => 'پودوں کے درمیان مناسب فاصلہ رکھیں اور بہت زیادہ گنجان کاشت سے گریز کریں۔',
            'Ensure proper spacing and good air circulation.' => 'پودوں کے درمیان مناسب فاصلہ رکھیں اور ہوا کی اچھی آمدورفت یقینی بنائیں۔',
            'Avoid dense planting and ensure proper air flow in field.' => 'گنجان کاشت سے گریز کریں اور کھیت میں ہوا کی مناسب آمدورفت یقینی بنائیں۔',
            'Avoid overcrowding and ensure proper air flow in field.' => 'پودوں کو بہت زیادہ گنجان لگانے سے گریز کریں اور کھیت میں ہوا کی مناسب آمدورفت یقینی بنائیں۔',
            'Avoid overwatering and ensure proper drainage in nursery.' => 'نرسری میں ضرورت سے زیادہ پانی دینے سے گریز کریں اور مناسب نکاسی آب یقینی بنائیں۔',
            'Avoid overhead watering and ensure proper spacing.' => 'اوپر سے پانی دینے سے گریز کریں اور پودوں کے درمیان مناسب فاصلہ رکھیں۔',
            'Avoid overwatering and ensure proper spacing.' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور پودوں کے درمیان مناسب فاصلہ رکھیں۔',
            'Avoid excess moisture and ensure proper spacing.' => 'ضرورت سے زیادہ نمی سے گریز کریں اور پودوں کے درمیان مناسب فاصلہ رکھیں۔',
            'Avoid leaf wetness and ensure good drainage.' => 'پتوں کو زیادہ دیر تک گیلا رہنے سے بچائیں اور اچھی نکاسی آب یقینی بنائیں۔',
            'Plant resistant varieties and ensure proper field drainage.' => 'مزاحم اقسام کاشت کریں اور کھیت میں مناسب نکاسی آب یقینی بنائیں۔',
            'Practice crop rotation and use resistant varieties.' => 'فصلوں کی گردش پر عمل کریں اور مزاحم اقسام استعمال کریں۔',
            'Practice crop rotation and ensure proper drainage.' => 'فصلوں کی گردش پر عمل کریں اور مناسب نکاسی آب یقینی بنائیں۔',
            'Use healthy seed and practice crop rotation.' => 'صحت مند بیج استعمال کریں اور فصلوں کی گردش پر عمل کریں۔',
            'Remove affected plants and keep the field free from crop residues.' => 'متاثرہ پودے نکال دیں اور کھیت کو فصل کی باقیات سے پاک رکھیں۔',
            'Remove beetles manually and keep the field free from weeds.' => 'بھونروں کو ہاتھ سے ہٹا دیں اور کھیت کو جڑی بوٹیوں سے پاک رکھیں۔',
            'Use yellow sticky traps and keep field free from weeds.' => 'زرد چپکنے والے پھندے استعمال کریں اور کھیت کو جڑی بوٹیوں سے پاک رکھیں۔',
            'Bacteria enter through roots and spread quickly in warm wet soil.' => 'جراثیم جڑوں کے ذریعے پودے میں داخل ہوتے ہیں اور گرم و نم مٹی میں تیزی سے پھیلتے ہیں۔',
            'Bacteria enter plant through roots and spread in warm, wet soil.' => 'جراثیم جڑوں کے ذریعے پودے میں داخل ہوتے ہیں اور گرم و نم مٹی میں پھیلتے ہیں۔',
            'Bacteria enter through wounds caused by wind, rain, or insects.' => 'جراثیم ہوا، بارش یا حشرات سے بننے والے زخموں کے ذریعے پودے میں داخل ہوتے ہیں۔',
            'Bacteria enter through roots and spread in wet soil conditions.' => 'جراثیم جڑوں کے ذریعے پودے میں داخل ہوتے ہیں اور نم مٹی میں پھیلتے ہیں۔',
            'Bacteria enter through wounds in roots or stem.' => 'جراثیم جڑوں یا تنے کے زخموں کے ذریعے پودے میں داخل ہوتے ہیں۔',
            'Bacteria enter the plant through roots or wounds.' => 'جراثیم جڑوں یا زخموں کے ذریعے پودے میں داخل ہوتے ہیں۔',
            'Moth lays eggs on shoots and fruits. After hatching, larvae bore inside and feed on plant tissue.' => 'پروانہ شاخوں اور پھلوں پر انڈے دیتا ہے۔ انڈوں سے نکلنے کے بعد سنڈیاں اندر داخل ہو کر پودے کے بافتوں کو کھاتی ہیں۔',
            'Moth lays eggs on fruits; larvae enter and feed inside chilli fruits.' => 'پروانہ پھلوں پر انڈے دیتا ہے۔ انڈوں سے نکلنے والی سنڈیاں مرچ کے پھلوں میں داخل ہو کر اندر سے خوراک حاصل کرتی ہیں۔',
            'Larvae enter the stem of young plants and feed inside.' => 'سنڈیاں ننھے پودوں کے تنے میں داخل ہو کر اندر سے خوراک حاصل کرتی ہیں۔',
            'Small larvae enter young leaves and make tunnels inside them.' => 'چھوٹی سنڈیاں نئی پتیوں میں داخل ہو کر ان کے اندر سرنگیں بنا دیتی ہیں۔',
            'Larvae enter young leaves and make tunnels inside the leaf tissue.' => 'سنڈیاں نئی پتیوں میں داخل ہو کر پتوں کے بافتوں میں سرنگیں بنا دیتی ہیں۔',
            'Larvae enter young leaves and feed inside, making tunnels.' => 'سنڈیاں نئی پتیوں میں داخل ہو کر اندر سے خوراک حاصل کرتی ہیں اور سرنگیں بنا دیتی ہیں۔',
            'Microscopic worms live in soil and enter bulbs and stems.' => 'نہایت باریک کیڑے مٹی میں رہتے ہیں اور گانٹھوں اور تنوں میں داخل ہو جاتے ہیں۔',
            'Leaves become yellow-green mixed color and grow in a twisted shape.' => 'پتے زرد و سبز رنگ کے ہو جاتے ہیں اور ان کی شکل مڑی ہوئی دکھائی دیتی ہے۔',
            'Leaves become yellow-green mixed color and plants grow small and weak.' => 'پتے زرد و سبز رنگ کے ہو جاتے ہیں اور پودے چھوٹے اور کمزور رہ جاتے ہیں۔',
            'Leaves become yellow-green mixed color and plants stay small.' => 'پتے زرد و سبز رنگ کے ہو جاتے ہیں اور پودے چھوٹے رہ جاتے ہیں۔',
            'Leaves become yellow-green mixed color and plants grow weak.' => 'پتے زرد و سبز رنگ کے ہو جاتے ہیں اور پودے کمزور ہو جاتے ہیں۔',
        ];
        if (isset($commonFallback[$text])) return $commonFallback[$text];

        $pestFallback = [
            'Spread mainly by aphids feeding on infected plants.' => 'یہ بیماری زیادہ تر متاثرہ پودوں سے خوراک حاصل کرنے والے تیلوں کے ذریعے پھیلتی ہے۔',
            'Spread by aphids feeding on infected plants.' => 'یہ بیماری متاثرہ پودوں سے خوراک حاصل کرنے والے تیلوں کے ذریعے پھیلتی ہے۔',
            'Spread by aphids feeding on plants.' => 'یہ بیماری پودوں سے خوراک حاصل کرنے والے تیلوں کے ذریعے پھیلتی ہے۔',
            'Spread by whiteflies feeding on infected plants.' => 'یہ بیماری متاثرہ پودوں سے خوراک حاصل کرنے والی سفید مکھیوں کے ذریعے پھیلتی ہے۔',
            'Spread by psylla insects feeding on infected plants.' => 'یہ بیماری متاثرہ پودوں سے خوراک حاصل کرنے والے سائلا حشرات کے ذریعے پھیلتی ہے۔',
            'Spread by citrus psylla insects feeding on infected trees.' => 'یہ بیماری متاثرہ ترشاوہ درختوں سے خوراک حاصل کرنے والے سائلا حشرات کے ذریعے پھیلتی ہے۔',
            'Spread by citrus psylla insects feeding on infected plants.' => 'یہ بیماری متاثرہ ترشاوہ پودوں سے خوراک حاصل کرنے والے سائلا حشرات کے ذریعے پھیلتی ہے۔',
            'Control aphids and remove infected plants immediately.' => 'تیلوں کو قابو میں رکھیں اور متاثرہ پودے فوراً نکال دیں۔',
            'Control aphids and use virus-free seed potatoes.' => 'تیلوں کو قابو میں رکھیں اور وائرس سے پاک بیج والے آلو استعمال کریں۔',
            'Adult flies lay eggs inside ripening peach fruits. Larvae develop by feeding inside the fruit.' => 'بالغ مکھیاں پکنے والے آڑو کے پھلوں کے اندر انڈے دیتی ہیں۔ انڈوں سے نکلنے والی سنڈیاں پھل کے اندر خوراک حاصل کرکے نشوونما پاتی ہیں۔',
            'Tiny insects attack turmeric rhizomes in the soil and storage, feeding on plant sap.' => 'نہایت چھوٹے حشرات مٹی میں موجود اور ذخیرہ شدہ ہلدی کی گانٹھوں پر حملہ کرتے ہیں اور پودے کا رس چوستے ہیں۔',
            'Rhizomes become dry and shriveled, plants grow weak, and leaves may turn yellow.' => 'زیرِ زمین تنے خشک اور سکڑے ہوئے ہو جاتے ہیں، پودے کمزور پڑ جاتے ہیں اور پتے پیلے ہو سکتے ہیں۔',
            'Use healthy seed rhizomes, maintain field hygiene, and avoid storing infected rhizomes.' => 'صحت مند بیج کے لیے گانٹھیں استعمال کریں، کھیت کی صفائی برقرار رکھیں اور متاثرہ گانٹھوں کو ذخیرہ کرنے سے گریز کریں۔',
            'Remove affected shoots and monitor the crop regularly.' => 'متاثرہ شاخیں نکال دیں اور فصل کی باقاعدگی سے نگرانی کریں۔',
            'Encourage natural predators and avoid excessive nitrogen fertilizer.' => 'قدرتی شکاری حشرات کی حوصلہ افزائی کریں اور ضرورت سے زیادہ نائٹروجن کھاد کے استعمال سے گریز کریں۔',
            'Ensure proper drainage and use disease-free planting material.' => 'مناسب نکاسی آب یقینی بنائیں اور بیماری سے پاک کاشت کاری مواد استعمال کریں۔',
            'Keep field clean, use yellow sticky traps, and encourage natural predators like ladybugs.' => 'کھیت صاف رکھیں، زرد چپکنے والے پھندے استعمال کریں اور لیڈی برڈ جیسے قدرتی شکاری حشرات کی حوصلہ افزائی کریں۔',
            'Use yellow sticky traps and avoid overcrowding of plants.' => 'زرد چپکنے والے پھندے استعمال کریں اور پودوں کو بہت زیادہ گنجان لگانے سے گریز کریں۔',
            'Beetles feed on leaves, flowers, and stems and can spread diseases.' => 'بھونرے پتوں، پھولوں اور تنوں کو کھاتے ہیں اور بیماریاں پھیلا سکتے ہیں۔',
            'White powder-like spots on leaves, leaves dry and fall early.' => 'پتوں پر سفید پاؤڈر جیسے دھبے بن جاتے ہیں، جبکہ پتے خشک ہو کر جلد گر جاتے ہیں۔',
            'Appears in cool and wet weather and spreads fast through leaves.' => 'یہ بیماری ٹھنڈے اور نم موسم میں ظاہر ہوتی ہے اور پتوں کے ذریعے تیزی سے پھیلتی ہے۔',
            'Spread by cucumber beetles that carry bacteria into plants.' => 'یہ بیماری کھیرا بھونروں کے ذریعے پھیلتی ہے جو جراثیم کو پودوں تک پہنچاتے ہیں۔',
            'Control beetles and remove infected plants quickly.' => 'بھونروں کو قابو میں رکھیں اور متاثرہ پودے فوراً نکال دیں۔',
            'Spreads in warm and wet weather through infected seeds and water.' => 'یہ بیماری گرم اور نم موسم میں متاثرہ بیجوں اور پانی کے ذریعے پھیلتی ہے۔',
            'Moth lays eggs on shoots and fruits. After hatching, larvae bore inside and feed on plant tissue.' => 'پروانہ شاخوں اور پھلوں پر انڈے دیتا ہے۔ انڈوں سے نکلنے کے بعد سنڈیاں اندر داخل ہو کر پودے کے بافتوں کو کھاتی ہیں۔',
            'Larvae feed inside leaf tissues and create tunnels.' => 'سنڈیاں پتوں کے اندر موجود بافتوں کو کھاتی ہیں اور سرنگیں بنا دیتی ہیں۔',
            'Remove affected leaves and monitor fields regularly.' => 'متاثرہ پتے نکال دیں اور کھیتوں کی باقاعدگی سے نگرانی کریں۔',
            'Ensure proper air circulation and avoid excess moisture.' => 'ہوا کی مناسب آمدورفت یقینی بنائیں اور ضرورت سے زیادہ نمی سے گریز کریں۔',
            'Remove infected plant parts and practice crop rotation.' => 'متاثرہ پودوں کے حصے نکال دیں اور فصلوں کی گردش پر عمل کریں۔',
            'The virus spreads mainly through aphids and infected plants.' => 'یہ وائرس زیادہ تر تیلوں اور متاثرہ پودوں کے ذریعے پھیلتا ہے۔',
            'Bacteria enter plants through wounds and are spread by cucumber beetles.' => 'جراثیم زخموں کے ذریعے پودوں میں داخل ہوتے ہیں اور کھیرا بھونروں کے ذریعے پھیلتے ہیں۔',
            'Bacteria enter plants through wounds and spread within the plant.' => 'جراثیم زخموں کے ذریعے پودے میں داخل ہو کر اس کے اندر پھیل جاتے ہیں۔',
            'Plants suddenly wilt even when soil has enough moisture.' => 'مٹی میں کافی نمی ہونے کے باوجود پودے اچانک مرجھا جاتے ہیں۔',
            'Plants suddenly wilt and do not recover even after watering.' => 'پودے اچانک مرجھا جاتے ہیں اور پانی دینے کے بعد بھی دوبارہ صحت مند نہیں ہوتے۔',
            'Keep the field clean and remove beetles manually when possible.' => 'کھیت صاف رکھیں اور ممکن ہو تو بھونروں کو ہاتھ سے ہٹا دیں۔',
            'Remove infected plants and maintain field sanitation.' => 'متاثرہ پودے نکال دیں اور کھیت کی صفائی برقرار رکھیں۔',
        ];
        if (isset($pestFallback[$text])) return $pestFallback[$text];

        $exactFallback = [
            'It grows best in warm weather and cannot tolerate frost or very cold conditions.' => 'یہ گرم موسم میں بہترین نشوونما پاتا ہے اور پالا یا بہت زیادہ سرد حالات برداشت نہیں کر سکتا۔',
            'Warm temperature helps proper vine growth and flowering.' => 'گرم درجہ حرارت بیل کی مناسب نشوونما اور پھول آنے میں مدد دیتا ہے۔',
            'Plants dry naturally, and rhizomes mature fully, developing strong color and aroma.' => 'پودے قدرتی طور پر خشک ہو جاتے ہیں اور زیرِ زمین تنے مکمل طور پر پک کر نمایاں رنگ اور خوشبو پیدا کرتے ہیں۔',
            'It also improves soil fertility by fixing nitrogen, making it beneficial for crop rotation systems.' => 'یہ نائٹروجن کو مٹی میں شامل کرکے اس کی زرخیزی بھی بہتر بناتا ہے، جس کی وجہ سے یہ فصلوں کی گردش کے نظام کے لیے مفید ثابت ہوتا ہے۔',
            'Small corms or suckers are used for planting in prepared fields.' => 'تیار کھیتوں میں کاشت کے لیے چھوٹی گانٹھیں یا شگوفے استعمال کیے جاتے ہیں۔',
            'The crop is ready when leaves start turning yellow and dry.' => 'فصل اس وقت تیار ہوتی ہے جب پتے پیلے پڑنے اور خشک ہونے لگتے ہیں۔',
            'Bajra plays a key role in ensuring food security in dryland farming systems.' => 'باجرا خشک علاقوں میں کاشت کے نظام کے تحت غذائی تحفظ یقینی بنانے میں اہم کردار ادا کرتا ہے۔',
            'Cool winter weather supports proper germination and vegetative growth.' => 'سردیوں کا ٹھنڈا موسم مناسب انکرن اور نباتاتی نشوونما کے لیے سازگار ہوتا ہے۔',
            'Winter season provides ideal conditions for healthy crop growth.' => 'موسم سرما صحت مند فصل کی نشوونما کے لیے موزوں حالات فراہم کرتا ہے۔',
            'The crop is ready when grains become hard and the plant turns yellow golden.' => 'فصل اس وقت تیار ہوتی ہے جب دانے سخت ہو جائیں اور پودے کا رنگ سنہری زرد ہو جائے۔',
            'The crop is ready when grains become hard and plants turn dry.' => 'فصل اس وقت تیار ہوتی ہے جب دانے سخت ہو جائیں اور پودے خشک ہونے لگیں۔',
            'It provides employment and income to farmers and contributes greatly to the economy through exports.' => 'یہ کسانوں کو روزگار اور آمدنی فراہم کرتی ہے اور برآمدات کے ذریعے ملکی معیشت میں اہم کردار ادا کرتی ہے۔',
            'Bitter gourd is an important vegetable crop grown in Pakistan and many tropical and subtropical regions.' => 'کریلا پاکستان اور بہت سے گرم و نیم گرم علاقوں میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            'It is widely used in cooking due to its medicinal value and health benefits.' => 'اسے ادویاتی خصوصیات اور صحت کے فوائد کی وجہ سے کھانا پکانے میں بڑے پیمانے پر استعمال کیا جاتا ہے۔',
            'Bitter gourd is known for its bitter taste and is rich in vitamins and minerals that help control blood sugar and improve digestion.' => 'کریلا اپنے کڑوے ذائقے کے لیے مشہور ہے اور وٹامنز اور معدنیات سے بھرپور ہوتا ہے، جو خون میں شکر کی مقدار کو قابو کرنے اور ہاضمہ بہتر بنانے میں مدد دیتے ہیں۔',
            'It is a fast-growing vine crop that provides good income to farmers.' => 'یہ تیزی سے بڑھنے والی بیل دار فصل ہے جو کسانوں کو اچھی آمدنی فراہم کرتی ہے۔',
            'Mung is usually sown from March to July in Pakistan.' => 'پاکستان میں مونگ کی بوائی عموماً مارچ سے جولائی تک کی جاتی ہے۔',
            'Summer conditions support good germination and growth.' => 'گرمیوں کے موسمی حالات بہتر انکرن اور پودوں کی اچھی نشوونما کے لیے سازگار ہوتے ہیں۔',
            'Mung is harvested 60–90 days after sowing depending on variety.' => 'مونگ کی کٹائی قسم کے مطابق بوائی کے 60 سے 90 دن بعد کی جاتی ہے۔',
            'Turmeric is harvested after 7–9 months of planting, usually from January to March.' => 'ہلدی کی کٹائی کاشت کے 7 سے 9 ماہ بعد، عموماً جنوری سے مارچ تک کی جاتی ہے۔',
            'Cucumber is sown in two main seasons: spring (February–March) and summer (June–July).' => 'کھیرا عام طور پر دو اہم موسموں میں بویا جاتا ہے: بہار (فروری سے مارچ) اور گرمیوں میں (جون سے جولائی)۔',
            'Cucumber is harvested 45–60 days after sowing depending on variety.' => 'کھیرا قسم کے مطابق بوائی کے 45 سے 60 دن بعد توڑا جاتا ہے۔',
            'It is also used in restaurants and food industries for various dishes.' => 'اسے مختلف پکوانوں کی تیاری کے لیے ریستورانوں اور غذائی صنعت میں بھی استعمال کیا جاتا ہے۔',
            'It also improves soil fertility by fixing nitrogen, making it valuable for sustainable agriculture.' => 'یہ نائٹروجن کو مٹی میں شامل کرکے اس کی زرخیزی بھی بہتر بناتی ہے، جس کی وجہ سے پائیدار زراعت میں اس کی اہمیت بڑھ جاتی ہے۔',
            'The crop is ready when roots reach proper size and remain tender.' => 'فصل اس وقت تیار ہوتی ہے جب جڑیں مناسب جسامت اختیار کر لیں اور نرم رہیں۔',
            'Fennel is harvested from February to April when seeds turn greenish-yellow and start drying on the plant.' => 'سونف کی کٹائی فروری سے اپریل تک کی جاتی ہے، جب بیج سبزی مائل زرد ہو جائیں اور پودے پر خشک ہونا شروع ہو جائیں۔',
            'Cool winter weather helps produce crisp, juicy, and flavorful roots.' => 'سردیوں کا ٹھنڈا موسم کراری، رسیلی اور ذائقے دار جڑیں پیدا کرنے میں مدد دیتا ہے۔',
            'Delayed harvesting may result in hard and fibrous roots.' => 'دیر سے کٹائی کرنے سے جڑیں سخت اور ریشے دار ہو سکتی ہیں۔',
            'Banana is harvested throughout the year depending on planting time.' => 'کیلے کی کٹائی کاشت کے وقت کے مطابق پورے سال کی جاتی ہے۔',
            'Lychee is harvested from May to July in Pakistan when fruits turn red and develop full sweetness and aroma.' => 'پاکستان میں لیچی کی کٹائی مئی سے جولائی تک کی جاتی ہے، جب پھل سرخ ہو جائیں اور ان میں مکمل مٹھاس اور خوشبو پیدا ہو جائے۔',
        ];
        if (isset($exactFallback[$text])) return $exactFallback[$text];

        $fallback = [
            '/^(.+?) is sown in two main seasons: (.+?) and (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کو دو اہم موسموں میں بویا جاتا ہے: ' . $this->translateSimplePhrase($m[2]) . ' اور ' . $this->translateSimplePhrase($m[3]) . '۔';
            },
            '/^(.+?) is usually sown from (.+?) in Pakistan(?: depending on (.+?))?\.?$/iu' => function ($m) {
                $tail = !empty($m[3]) ? '، ' . $this->translateSimplePhrase($m[3]) . ' کے مطابق' : '';
                return 'پاکستان میں ' . $this->fixAgricultureKnownNames($m[1]) . ' کی بوائی عموماً ' . $this->translateSimplePhrase($m[2]) . ' تک کی جاتی ہے' . $tail . '۔';
            },
            '/^(.+?) is harvested throughout the year depending on planting time\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی کاشت کے وقت کے مطابق پورے سال کی جاتی ہے۔';
            },
            '/^(.+?) is harvested after (.+?) of planting, usually from (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی کاشت کے ' . $this->translateSimplePhrase($m[2]) . ' بعد، عموماً ' . $this->translateSimplePhrase($m[3]) . ' کے دوران کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) after sowing depending on variety\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی بوائی کے ' . $this->translateSimplePhrase($m[2]) . ' بعد قسم کے مطابق کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) depending on variety\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم کے مطابق ' . $this->translateSimplePhrase($m[2]) . ' کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) depending on the variety and region\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم اور علاقے کے مطابق ' . $this->translateSimplePhrase($m[2]) . ' کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) depending on the variety and climate conditions\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم اور موسمی حالات کے مطابق ' . $this->translateSimplePhrase($m[2]) . ' کی جاتی ہے۔';
            },
            '/^(.+?) is ready when (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' اس وقت تیار ہوتی ہے جب ' . $this->translateSimplePhrase($m[2]) . '۔';
            },
            '/^The crop is ready when (.+?)\.?$/iu' => function ($m) {
                return 'فصل اس وقت تیار ہوتی ہے جب ' . $this->translateSimplePhrase($m[1]) . '۔';
            },
            '/^(.+?) grows best in warm weather and cannot tolerate frost or (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' گرم موسم میں بہترین نشوونما پاتا ہے اور پالا یا ' . $this->translateSimplePhrase($m[2]) . ' برداشت نہیں کر سکتا۔';
            },
            '/^(.+?) grows best in warm climates and requires full sunlight for healthy growth\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' گرم آب و ہوا میں بہترین نشوونما پاتا ہے اور صحت مند بڑھوتری کے لیے اسے مکمل دھوپ درکار ہوتی ہے۔';
            },
            '/^Warm temperature helps proper (.+?) and (.+?)\.?$/iu' => function ($m) {
                return 'گرم درجہ حرارت ' . $this->translateSimplePhrase($m[1]) . ' اور ' . $this->translateSimplePhrase($m[2]) . ' میں مدد دیتا ہے۔';
            },
            '/^Proper land preparation ensures healthy (.+?) and higher yield\.?$/iu' => function ($m) {
                return 'زمین کی مناسب تیاری ' . $this->translateSimplePhrase($m[1]) . ' اور زیادہ پیداوار کے حصول میں مدد دیتی ہے۔';
            },
            '/^Proper land preparation improves (.+?) and (.+?)\.?$/iu' => function ($m) {
                return 'زمین کی مناسب تیاری ' . $this->translateSimplePhrase($m[1]) . ' اور ' . $this->translateSimplePhrase($m[2]) . ' بہتر بناتی ہے۔';
            },
            '/^Proper land preparation supports (.+?) and (.+?)\.?$/iu' => function ($m) {
                return 'زمین کی مناسب تیاری ' . $this->translateSimplePhrase($m[1]) . ' اور ' . $this->translateSimplePhrase($m[2]) . ' میں مدد دیتی ہے۔';
            },
            '/^Proper spacing helps (.+?) spread and produce (.+?)\.?$/iu' => function ($m) {
                return 'مناسب فاصلہ ' . $this->translateSimplePhrase($m[1]) . ' کو پھیلنے اور ' . $this->translateSimplePhrase($m[2]) . ' پیدا کرنے میں مدد دیتا ہے۔';
            },
            '/^Proper spacing ensures (.+?)\.?$/iu' => function ($m) {
                return 'مناسب فاصلہ ' . $this->translateSimplePhrase($m[1]) . ' کو یقینی بناتا ہے۔';
            },
            '/^(.+?) also improves soil fertility by fixing nitrogen, making it beneficial for crop rotation systems\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' نائٹروجن کو مٹی میں شامل کرکے اس کی زرخیزی بھی بہتر بناتا ہے، جس کی وجہ سے یہ فصلوں کی گردش کے نظام کے لیے مفید ثابت ہوتا ہے۔';
            },
            '/^(.+?) plays a key role in ensuring food security in dryland farming systems\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' خشک علاقوں میں فصلوں کی کاشت کے نظام کے تحت غذائی تحفظ یقینی بنانے میں اہم کردار ادا کرتا ہے۔';
            },
            '/^It is essential for livestock feeding in dry areas and contributes to food security in arid regions of Pakistan\.?$/iu' => function ($m) {
                return 'یہ خشک علاقوں میں مویشیوں کے لیے خوراک کا اہم ذریعہ ہے اور پاکستان کے خشک خطوں میں غذائی تحفظ میں بھی حصہ ڈالتا ہے۔';
            },
            '/^It supports livestock feeding and contributes to food security in areas with low rainfall\.?$/iu' => function ($m) {
                return 'یہ کم بارش والے علاقوں میں مویشیوں کی خوراک کی ضروریات پوری کرنے اور غذائی تحفظ میں اہم کردار ادا کرتا ہے۔';
            },
            '/^Summer conditions support good germination and growth\.?$/iu' => function ($m) {
                return 'گرمیوں کے موسمی حالات بہتر انکرن اور پودوں کی اچھی نشوونما کے لیے سازگار ہوتے ہیں۔';
            },
            '/^Summer season provides high temperature, humidity, and rainfall which are necessary for healthy crop development\.?$/iu' => function ($m) {
                return 'گرمیوں کا موسم زیادہ درجہ حرارت، مناسب نمی اور بارش فراہم کرتا ہے، جو فصل کی صحت مند نشوونما کے لیے ضروری ہیں۔';
            },
            '/^Farmers prefer cool weather conditions after the monsoon season for better germination and early plant growth\.?$/iu' => function ($m) {
                return 'بہتر انکرن اور ابتدائی نشوونما کے لیے کسان برسات کے موسم کے بعد ٹھنڈے موسمی حالات کو ترجیح دیتے ہیں۔';
            },
            '/^The crop is ready when grains become hard and the plant turns yellow golden\.?$/iu' => function ($m) {
                return 'فصل اس وقت تیار ہوتی ہے جب دانے سخت ہو جائیں اور پودے کا رنگ سنہری زرد ہو جائے۔';
            },
            '/^The crop is ready when grains become hard and plants turn dry\.?$/iu' => function ($m) {
                return 'فصل اس وقت تیار ہوتی ہے جب دانے سخت ہو جائیں اور پودے خشک ہونے لگیں۔';
            },
            '/^It provides employment and income to farmers and contributes greatly to the economy through exports\.?$/iu' => function ($m) {
                return 'یہ کسانوں کو روزگار اور آمدنی فراہم کرتی ہے اور برآمدات کے ذریعے ملکی معیشت میں اہم کردار ادا کرتی ہے۔';
            },
        ];
        foreach ($fallback as $pattern => $handler) {
            if (preg_match($pattern, $text, $m)) return $this->fixGrammar($handler($m));
        }


        $priority = [
            '/^Aphids feed on plant sap from tender leaves and shoots\.?$/iu' => 'تیلے نرم پتوں اور نئی شاخوں سے پودے کا رس چوستے ہیں۔',
            '/^Jassids suck sap from leaves, reducing plant vigor\.?$/iu' => 'سبز تیلے پتوں کا رس چوستے ہیں، جس سے پودے کی طاقت اور نشوونما کمزور پڑ جاتی ہے۔',
            '/^Larvae feed on flowers and developing pods\.?$/iu' => 'سنڈیاں پھولوں اور بننے والی پھلیوں کو کھاتی ہیں۔',
            '/^Thrips feed on flowers and tender leaves\.?$/iu' => 'تھرپس پھولوں اور نرم پتوں کو نقصان پہنچاتے ہیں۔',
            '/^Use healthy seed and destroy infected crop residues\.?$/iu' => 'صحت مند بیج استعمال کریں اور متاثرہ فصل کی باقیات تلف کر دیں۔',
            '/^Ensure proper drainage and avoid waterlogging\.?$/iu' => 'مناسب نکاسی آب یقینی بنائیں اور کھیت میں پانی جمع ہونے سے بچیں۔',
            '/^Treat seed with suitable fungicides before sowing\.?$/iu' => 'بوائی سے پہلے بیج کو موزوں پھپھوندی کش دوا سے ٹریٹ کریں۔',
            '/^Control whiteflies and remove infected plants immediately\.?$/iu' => 'سفید مکھیوں کو قابو میں رکھیں اور متاثرہ پودے فوراً نکال دیں۔',
            '/^Manage whitefly populations and use resistant varieties\.?$/iu' => 'سفید مکھی کی تعداد کو قابو میں رکھیں اور مزاحم اقسام استعمال کریں۔',
            '/^Use certified seed and avoid working in wet fields\.?$/iu' => 'مصدقہ بیج استعمال کریں اور گیلی زمین میں کام کرنے سے گریز کریں۔',
            '/^Maintain proper spacing and remove infected leaves\.?$/iu' => 'پودوں کے درمیان مناسب فاصلہ برقرار رکھیں اور متاثرہ پتے نکال دیں۔',
            '/^Avoid overhead irrigation and remove infected plant parts\.?$/iu' => 'پتوں پر اوپر سے آبپاشی کرنے سے گریز کریں اور متاثرہ پودوں کے حصے نکال دیں۔',
            '/^Keep fields clean and avoid excessive moisture\.?$/iu' => 'کھیت صاف رکھیں اور ضرورت سے زیادہ نمی سے بچیں۔',
            '/^Deep ploughing and proper field sanitation help reduce infestation\.?$/iu' => 'گہرا ہل چلانے اور کھیت کی مناسب صفائی سے کیڑے کے حملے کو کم کرنے میں مدد ملتی ہے۔',
            '/^Apply recommended soil insecticides before or during planting\.?$/iu' => 'بوائی سے پہلے یا بوائی کے وقت تجویز کردہ مٹی میں استعمال ہونے والی کیڑے مار دوا لگائیں۔',
            '/^Apply suitable insecticides when infestation becomes severe\.?$/iu' => 'جب حملہ شدید ہو جائے تو موزوں کیڑے مار ادویات استعمال کریں۔',
            '/^Adult moths lay eggs on leaves, and larvae bore into young shoots\.?$/iu' => 'بالغ پروانے پتوں پر انڈے دیتے ہیں اور انڈوں سے نکلنے والی سنڈیاں نئی شاخوں میں داخل ہو جاتی ہیں۔',
            '/^Young shoots dry from the center, leaves turn yellow, and plant growth slows down\.?$/iu' => 'نئی شاخیں درمیان سے خشک ہونے لگتی ہیں، پتے پیلے پڑ جاتے ہیں اور پودے کی نشوونما سست ہو جاتی ہے۔',
            '/^Larvae roll turmeric leaves and feed from inside\.?$/iu' => 'سنڈیاں ہلدی کے پتوں کو لپیٹ دیتی ہیں اور اندر سے سبز بافت کو کھاتی ہیں۔',
            '/^Grubs live in soil and feed on roots and rhizomes\.?$/iu' => 'سنڈیاں مٹی میں رہتی ہیں اور جڑوں اور زیرِ زمین تنوں کو کھاتی ہیں۔',
            '/^Tiny insects attack turmeric rhizomes in the soil and storage, feeding on plant sap\.?$/iu' => 'نہایت چھوٹے حشرات مٹی اور ذخیرہ شدہ ہلدی کی گانٹھوں پر حملہ کرتے ہیں اور پودے کے رس سے خوراک حاصل کرتے ہیں۔',
            '/^Caused by soil-borne fungi in waterlogged and poorly drained fields\.?$/iu' => 'یہ بیماری ایسی مٹی میں موجود فنگس کی وجہ سے ہوتی ہے جہاں پانی جمع رہتا ہو اور نکاسی آب ناقص ہو۔',
            '/^The virus is spread by whiteflies\.?$/iu' => 'یہ وائرس سفید مکھیوں کے ذریعے پھیلتا ہے۔',
            '/^Bacteria spread through infected seeds, water, and crop debris\.?$/iu' => 'بیکٹیریا متاثرہ بیجوں، پانی اور فصل کی باقیات کے ذریعے پھیلتے ہیں۔',
            '/^Fungal infection develops under moist and humid conditions\.?$/iu' => 'نم اور مرطوب حالات میں فنگسی بیماری پیدا ہوتی ہے۔',
            '/^The disease spreads through infected plant debris and moisture\.?$/iu' => 'یہ بیماری متاثرہ پودوں کی باقیات اور نمی کے ذریعے پھیلتی ہے۔',
            '/^Dark sunken spots form on leaves, causing drying and leaf damage\.?$/iu' => 'پتوں پر گہرے دھنسے ہوئے دھبے بنتے ہیں، جس سے پتے خشک ہونے لگتے ہیں اور انہیں نقصان پہنچتا ہے۔',
            '/^Small brown or black spots appear on leaves and gradually spread\.?$/iu' => 'پتوں پر چھوٹے بھورے یا سیاہ دھبے ظاہر ہوتے ہیں جو آہستہ آہستہ پھیل جاتے ہیں۔',
            '/^Plants become weak, wilt, and roots turn dark and rotten\.?$/iu' => 'پودے کمزور ہو کر مرجھا جاتے ہیں اور جڑیں سیاہ ہو کر سڑنے لگتی ہیں۔',
            '/^Leaves turn yellow, plants wilt, and rhizomes become soft and rotten\.?$/iu' => 'پتے پیلے ہو جاتے ہیں، پودے مرجھا جاتے ہیں اور زیرِ زمین تنے نرم ہو کر سڑنے لگتے ہیں۔',
            '/^Leaves curl, turn yellow, and plants become weak\.?$/iu' => 'پتے مڑ کر پیلے ہو جاتے ہیں اور پودے کمزور پڑ جاتے ہیں۔',
            '/^Apply (.+?) or (.+?)\.?$/iu' => '$1 یا $2 استعمال کریں۔',
            '/^(.+?) is usually sown from (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 کی بوائی عموماً $2 کے دوران کی جاتی ہے۔',
            '/^(.+?) is sown from (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 کی بوائی $2 کے دوران کی جاتی ہے۔',
            '/^(.+?) is usually planted from (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 کو عموماً $2 کے دوران لگایا جاتا ہے۔',
            '/^(.+?) is usually planted in (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 کو عموماً $2 میں لگایا جاتا ہے۔',
            '/^(.+?) is sown from (.+?) to (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 کی بوائی عموماً $2 سے $3 تک کی جاتی ہے۔',
            '/^(.+?) is harvested from (.+?) depending on (.+?)\.?$/iu' => '$1 کی کٹائی $2 کے دوران $3 کے مطابق کی جاتی ہے۔',
            '/^(.+?) is harvested from (.+?) depending on the (.+?)\.?$/iu' => '$1 کی کٹائی $2 کے دوران $3 کے مطابق کی جاتی ہے۔',
            '/^(.+?) requires (.+?) for proper germination and growth\.?$/iu' => '$1 کے مناسب انکرن اور نشوونما کے لیے $2 ضروری ہے۔',
            '/^(.+?) requires (.+?) for germination and early growth\.?$/iu' => '$1 کے انکرن اور ابتدائی نشوونما کے لیے $2 ضروری ہے۔',
            '/^(.+?) requires (.+?) for germination\.?$/iu' => '$1 کے انکرن کے لیے $2 ضروری ہے۔',
            '/^(.+?) requires (.+?) but does not tolerate (.+?)\.?$/iu' => '$1 کو $2 درکار ہے، لیکن یہ $3 برداشت نہیں کرتا۔',
        ];
        $exactPriority = [
            'Mung (Mung bean) is an important pulse crop grown in Pakistan and many other countries. It is widely consumed as dal (lentils) and is rich in protein, making it an essential part of daily diet. Mung crop improves soil fertility by fixing nitrogen and is also beneficial for crop rotation systems in agriculture.' => 'مونگ پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم دال دار فصل ہے۔ اسے دال کے طور پر بڑے پیمانے پر استعمال کیا جاتا ہے اور یہ پروٹین سے بھرپور ہوتی ہے، اس لیے روزمرہ خوراک کا اہم حصہ ہے۔ مونگ نائٹروجن کو مٹی میں شامل کرکے اس کی زرخیزی بہتر بناتی ہے اور فصلوں کی گردش کے نظام میں بھی مفید ثابت ہوتی ہے۔',
            'Mung is an important pulse crop that provides affordable protein to humans. It also improves soil fertility by fixing nitrogen, making it valuable for sustainable agriculture.' => 'مونگ ایک اہم دال دار فصل ہے جو لوگوں کو کم لاگت میں پروٹین فراہم کرتی ہے۔ یہ نائٹروجن کو مٹی میں شامل کرکے اس کی زرخیزی بہتر بناتی ہے، اس لیے پائیدار زراعت میں اس کی خاص اہمیت ہے۔',
            'Turmeric is sown from April to June in Pakistan.' => 'پاکستان میں ہلدی کی بوائی عموماً اپریل سے جون تک کی جاتی ہے۔',
            'Warm and humid conditions during this period support proper rhizome sprouting and vegetative growth.' => 'اس عرصے کے گرم اور مرطوب حالات زیرِ زمین تنوں کے مناسب پھوٹنے اور پودے کی نباتاتی نشوونما کے لیے سازگار ہوتے ہیں۔',
            'Eggplant is usually sown in nurseries from February to April in spring and again in August to September in monsoon season.' => 'بینگن کی پنیری عموماً موسم بہار میں فروری سے اپریل تک تیار کی جاتی ہے اور برسات کے موسم میں اگست سے ستمبر کے دوران دوبارہ بوائی کی جا سکتی ہے۔',
            'Seedlings are transplanted into fields after 4–6 weeks when they are strong enough.' => 'جب پنیری 4 سے 6 ہفتوں میں اتنی مضبوط ہو جائے کہ اسے منتقل کیا جا سکے تو پودے کھیت میں منتقل کر دیے جاتے ہیں۔',
            'Brinjal requires warm temperatures for proper germination and growth.' => 'بینگن کے مناسب انکرن اور صحت مند نشوونما کے لیے گرم درجہ حرارت ضروری ہے۔',
            'Moderate warmth and humidity help seedlings establish quickly and support healthy plant development.' => 'معتدل گرمی اور مناسب نمی پنیری کے جلد مضبوط ہونے اور پودوں کی صحت مند نشوونما میں مدد دیتی ہے۔',
            'Chillies are sown in nurseries from February to April for spring crop and June to July for monsoon crop.' => 'مرچ کی پنیری موسم بہار کی فصل کے لیے فروری سے اپریل تک اور برسات کی فصل کے لیے جون سے جولائی تک تیار کی جاتی ہے۔',
            'Seedlings are transplanted after 4–6 weeks when they are strong enough.' => 'جب پنیری 4 سے 6 ہفتوں میں مناسب طور پر مضبوط ہو جائے تو اسے کھیت میں منتقل کر دیا جاتا ہے۔',
            'Chillies require warm temperatures for proper germination and growth.' => 'مرچ کے مناسب انکرن اور صحت مند نشوونما کے لیے گرم درجہ حرارت ضروری ہے۔',
            'Mild warm weather helps seedlings establish quickly and supports healthy vegetative development.' => 'معتدل گرم موسم پنیری کو جلد مضبوط ہونے اور صحت مند نباتاتی نشوونما میں مدد دیتا ہے۔',
            'Ginger is usually planted from February to April in Pakistan.' => 'پاکستان میں ادرک کی کاشت عموماً فروری سے اپریل تک کی جاتی ہے۔',
            'Farmers use healthy rhizomes (seed pieces) for planting in prepared fields.' => 'کسان تیار شدہ کھیت میں کاشت کے لیے صحت مند زیرِ زمین تنوں کے ٹکڑے بطور بیج استعمال کرتے ہیں۔',
            'Warm weather and sufficient moisture during this period support proper sprouting and root development.' => 'اس عرصے کا گرم موسم اور مناسب نمی پودے کے اچھی طرح پھوٹنے اور جڑوں کی نشوونما کے لیے سازگار ہوتے ہیں۔',
            'Ginger requires warm and humid conditions for good germination.' => 'ادرک کے اچھے انکرن کے لیے گرم اور مرطوب حالات ضروری ہیں۔',
            'Spring season provides suitable temperature and soil moisture which helps in strong rhizome establishment and early plant growth.' => 'موسم بہار مناسب درجہ حرارت اور مٹی میں مطلوبہ نمی فراہم کرتا ہے، جس سے زیرِ زمین تنوں کا مضبوط قیام اور پودے کی ابتدائی نشوونما بہتر ہوتی ہے۔',
            'Banana is usually planted from February to April in Pakistan.' => 'پاکستان میں کیلے کی کاشت عموماً فروری سے اپریل تک کی جاتی ہے۔',
            'Suckers or tissue-cultured plants are used for cultivation.' => 'کاشت کے لیے شگوفے یا ٹشو کلچر سے تیار کیے گئے پودے استعمال کیے جاتے ہیں۔',
            'Warm weather and adequate soil moisture during planting help in fast establishment and strong root development.' => 'کاشت کے وقت گرم موسم اور مٹی میں مناسب نمی پودوں کے جلد مضبوط ہونے اور جڑوں کی بہتر نشوونما میں مدد دیتے ہیں۔',
            'Deep Ploughing: Loosens soil for root growth' => 'گہرا ہل چلانا: جڑوں کی بہتر نشوونما کے لیے مٹی کو نرم کیا جاتا ہے۔',
            'Pit Digging: Proper planting holes for suckers' => 'گڑھے کھودنا: پودے لگانے کے لیے مناسب گڑھے تیار کیے جاتے ہیں۔',
            'Organic Manure: Improves soil fertility' => 'نامیاتی کھاد: مٹی کی زرخیزی بہتر بناتی ہے۔',
            'Leveling: Ensures proper irrigation' => 'ہموار کرنا: مناسب آبپاشی کو یقینی بناتا ہے۔',
            'Ploughing: Loosens soil for root development' => 'ہل چلانا: جڑوں کی نشوونما کے لیے مٹی کو نرم کیا جاتا ہے۔',
            'Bed Formation: Raised beds improve drainage' => 'کھیلیاں بنانا: اونچی کھیلیاں نکاسی آب کو بہتر بناتی ہیں۔',
            'Weed Removal: Reduces competition' => 'جڑی بوٹیوں کا خاتمہ: فصل کے ساتھ مقابلہ کرنے والے غیر ضروری پودوں کو کم کرتا ہے۔',
            'Organic Matter: Improves soil fertility' => 'نامیاتی مادہ: مٹی کی زرخیزی بہتر بناتا ہے۔',
            'Ploughing: Loosens soil deeply for rhizome growth' => 'ہل چلانا: زیرِ زمین تنوں کی نشوونما کے لیے مٹی کو گہرائی تک نرم کیا جاتا ہے۔',
            'Weed Control: Reduces competition' => 'جڑی بوٹیوں کا تدارک: غیر ضروری پودوں کا مقابلہ کم کرتا ہے۔',
            'Nitrogen (N): Initial plant growth (soybean also fixes nitrogen naturally)' => 'نائٹروجن: پودے کی ابتدائی نشوونما کے لیے ضروری ہے۔ سویا بین قدرتی طور پر بھی نائٹروجن مٹی میں شامل کرتی ہے۔',
            'Phosphorus (P): Root development and nodulation' => 'فاسفورس: جڑوں کی نشوونما اور نائٹروجن جذب کرنے والی گانٹھوں کی تشکیل میں مدد دیتا ہے۔',
            'Potassium (K): Pod formation and seed quality' => 'پوٹاشیم: پھلیاں بننے اور بیج کے معیار کو بہتر بنانے میں مدد دیتا ہے۔',
        ];
        if (isset($exactPriority[$text])) return $exactPriority[$text];

        foreach ($priority as $pattern => $replacement) {
            $out = preg_replace($pattern, $replacement, $text);
            if ($out !== null && $out !== $text) {
                $out = $this->applyAgriculturePhraseRules($out);
                $out = $this->fixAgricultureKnownNames($out);
                return $this->fixGrammar($out);
            }
        }
        $rules = [
            '/^Sorghum is commonly sown from March to July depending on rainfall and weather conditions\.?$/iu' => 'جوار کی بوائی عموماً مارچ سے جولائی تک کی جاتی ہے، تاہم اس کا وقت بارش اور موسمی حالات کے مطابق مختلف ہو سکتا ہے۔',
            '/^Fungus grows in dry but humid conditions and spreads on leaves\.?$/iu' => 'فنگس خشک لیکن مرطوب حالات میں نشوونما پاتا ہے اور پتوں پر پھیلتا ہے۔',
            '/^Fungus grows on leaves in dry but humid conditions\.?$/iu' => 'فنگس خشک لیکن مرطوب حالات میں پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus infects fruits during high humidity and poor storage\.?$/iu' => 'زیادہ نمی اور نامناسب ذخیرہ کرنے کے دوران فنگس پھلوں کو متاثر کرتا ہے۔',
            '/^Fungus grows in warm weather and spreads on leaves and fruits\.?$/iu' => 'فنگس گرم موسم میں نشوونما پاتا ہے اور پتوں اور پھلوں پر پھیلتا ہے۔',
            '/^Fungus develops in cool and humid weather and spreads through wind and water\.?$/iu' => 'فنگس ٹھنڈے اور مرطوب موسم میں نشوونما پاتا ہے اور ہوا اور پانی کے ذریعے پھیلتا ہے۔',
            '/^Fungus grows on leaves in dry weather with humidity at night\.?$/iu' => 'فنگس خشک موسم میں رات کے وقت موجود نمی کے باعث پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus develops in cool and humid conditions on leaves and stems\.?$/iu' => 'فنگس ٹھنڈے اور مرطوب حالات میں پتوں اور تنوں پر نشوونما پاتا ہے۔',
            '/^Fungus attacks seedlings in nursery stage due to high moisture\.?$/iu' => 'زیادہ نمی کی وجہ سے فنگس نرسری کے مرحلے میں ننھے پودوں پر حملہ کرتا ہے۔',
            '/^Fungus grows in dry but cool weather on leaves\.?$/iu' => 'فنگس خشک لیکن ٹھنڈے موسم میں پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus attacks seedlings in nursery due to excess moisture\.?$/iu' => 'ضرورت سے زیادہ نمی کی وجہ سے فنگس نرسری میں ننھے پودوں پر حملہ کرتا ہے۔',
            '/^Fungus grows in cool, humid conditions and spreads on leaves\.?$/iu' => 'فنگس ٹھنڈے اور مرطوب حالات میں نشوونما پاتا ہے اور پتوں پر پھیلتا ہے۔',
            '/^Fungus grows in cool and humid conditions and spreads on leaves\.?$/iu' => 'فنگس ٹھنڈے اور مرطوب حالات میں نشوونما پاتا ہے اور پتوں پر پھیلتا ہے۔',
            '/^Fungus develops in warm and humid conditions on leaves\.?$/iu' => 'فنگس گرم اور مرطوب حالات میں پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus spreads through air in cool and wet weather\.?$/iu' => 'فنگس ٹھنڈے اور نم موسم میں ہوا کے ذریعے پھیلتا ہے۔',
            '/^Fungus spreads in warm and humid conditions through water splash\.?$/iu' => 'فنگس گرم اور مرطوب حالات میں پانی کے چھینٹوں کے ذریعے پھیلتا ہے۔',
            '/^Fungus attacks flower heads in wet and humid conditions\.?$/iu' => 'فنگس نم اور مرطوب حالات میں پھولوں کے سروں پر حملہ کرتا ہے۔',
            '/^Fungus grows in dry but warm conditions and spreads on leaves and shoots\.?$/iu' => 'فنگس خشک لیکن گرم حالات میں نشوونما پاتا ہے اور پتوں اور نئی شاخوں پر پھیلتا ہے۔',
            '/^Fungus grows on leaf surface in warm and dry weather\.?$/iu' => 'فنگس گرم اور خشک موسم میں پتوں کی سطح پر نشوونما پاتا ہے۔',
            '/^Fungus spreads through water and infected plant debris\.?$/iu' => 'فنگس پانی اور متاثرہ پودوں کی باقیات کے ذریعے پھیلتا ہے۔',
            '/^Fungus grows on leaves in humid weather with poor air circulation\.?$/iu' => 'ناقص ہوا کی آمدورفت والے مرطوب موسم میں فنگس پتوں پر نشوونما پاتا ہے۔',
            '/^Eggplant is harvested 60–90 days after transplanting\. Once fruits reach proper size, color, and shine, they are picked\. Harvesting continues for several weeks as new fruits keep forming\.?$/iu' => 'بینگن کی کٹائی پنیری منتقل کرنے کے 60 سے 90 دن بعد کی جاتی ہے۔ جب پھل مناسب جسامت، رنگ اور چمک حاصل کر لیں تو انہیں توڑ لیا جاتا ہے۔ نئی فصل کے پھل بنتے رہنے کی وجہ سے کئی ہفتوں تک کٹائی جاری رہتی ہے۔',
            '/^Brinjal produces fruits continuously over time\. Regular picking encourages new fruit growth and increases total yield\.?$/iu' => 'بینگن مسلسل پھل دیتا رہتا ہے۔ باقاعدگی سے پھل توڑنے سے نئے پھل بننے کی حوصلہ افزائی ہوتی ہے اور مجموعی پیداوار میں اضافہ ہوتا ہے۔',
            '/^Mung requires less water compared to other crops and is drought tolerant\.?$/iu' => 'مونگ کو دوسری فصلوں کے مقابلے میں کم پانی درکار ہوتا ہے اور یہ خشک سالی برداشت کرنے والی فصل ہے۔',
            '/^Good quality seed ensures strong crop growth\.?$/iu' => 'اچھے معیار کا بیج فصل کی مضبوط نشوونما کو یقینی بناتا ہے۔',
            '/^Good quality rhizomes ensure strong sprouting and higher yield\.?$/iu' => 'اچھے معیار کی گانٹھیں مضبوط پھوٹ اور زیادہ پیداوار کو یقینی بناتی ہیں۔',
            '/^Good planting material ensures better establishment and yield\.?$/iu' => 'اچھا کاشت کاری مواد پودوں کے بہتر قیام اور زیادہ پیداوار کو یقینی بناتا ہے۔',
            '/^Good quality planting material ensures high yield and better fruit quality\.?$/iu' => 'اچھے معیار کا کاشت کاری مواد زیادہ پیداوار اور بہتر معیار کے پھل حاصل کرنے میں مدد دیتا ہے۔',
            '/^Good quality planting material ensures high yield and better fruit quality\.?$/iu' => 'اچھے معیار کا کاشت کاری مواد زیادہ پیداوار اور بہتر معیار کے پھل حاصل کرنے میں مدد دیتا ہے۔',
            '/^Proper land preparation improves root growth and increases yield quality\.?$/iu' => 'زمین کی مناسب تیاری جڑوں کی نشوونما بہتر کرتی ہے اور پیداوار کے معیار میں اضافہ کرتی ہے۔',
            '/^Proper land preparation improves root growth and fruit production\.?$/iu' => 'زمین کی مناسب تیاری جڑوں کی نشوونما اور پھلوں کی پیداوار بہتر کرتی ہے۔',
            '/^Good land preparation improves root development and nitrogen fixation\.?$/iu' => 'زمین کی اچھی تیاری جڑوں کی نشوونما اور نائٹروجن کے اخراج کو بہتر بناتی ہے۔',
            '/^Balanced fertilization increases yield and improves cotton fiber strength\.?$/iu' => 'متوازن کھاد کے استعمال سے پیداوار میں اضافہ ہوتا ہے اور کپاس کے ریشے کی مضبوطی بہتر ہوتی ہے۔',
            '/^Balanced fertilization increases yield and improves fodder quality\.?$/iu' => 'متوازن کھاد کے استعمال سے پیداوار میں اضافہ ہوتا ہے اور چارے کا معیار بہتر ہوتا ہے۔',
            '/^Sorghum is drought-tolerant but timely irrigation improves production\.?$/iu' => 'جوار خشک سالی برداشت کر لیتا ہے، لیکن بروقت آبپاشی سے پیداوار بہتر ہوتی ہے۔',
            '/^Cotton requires moderate irrigation and is sensitive to both drought and waterlogging\.?$/iu' => 'کپاس کو معتدل آبپاشی درکار ہوتی ہے اور یہ خشک سالی اور پانی کے جمع ہونے، دونوں کے لیے حساس ہے۔',
            '/^Soybean is sensitive to both drought and waterlogging, so balanced irrigation is required\.?$/iu' => 'سویا بین خشک سالی اور پانی کے جمع ہونے، دونوں کے لیے حساس ہے، اس لیے متوازن آبپاشی ضروری ہے۔',
            '/^Bananas are harvested when fruits reach full size but are still green\.?$/iu' => 'کیلے اس وقت کاٹے جاتے ہیں جب پھل پوری جسامت حاصل کر لیں لیکن ابھی سبز ہوں۔',
            '/^Warm weather during summer allows proper fruit ripening, sweetness development, and good market demand\.?$/iu' => 'گرمیوں کا گرم موسم پھلوں کو مناسب طور پر پکنے، مٹھاس پیدا ہونے اور اچھی منڈی طلب کے لیے سازگار ہوتا ہے۔',
            '/^At maturity, corms accumulate maximum starch and become firm\.?$/iu' => 'پختگی کے وقت گانٹھوں میں زیادہ سے زیادہ نشاستہ جمع ہوتا ہے اور وہ مضبوط ہو جاتی ہیں۔',
            '/^Harvesting at the right time ensures better taste and yield quality\.?$/iu' => 'درست وقت پر کٹائی سے بہتر ذائقہ اور اچھی پیداوار حاصل ہوتی ہے۔',
            '/^Controlled harvesting ensures better ripening, taste, and shelf life during transportation and marketing\.?$/iu' => 'مناسب وقت پر کٹائی سے نقل و حمل اور مارکیٹنگ کے دوران پھل بہتر طور پر پکتے ہیں، ذائقہ برقرار رہتا ہے اور ذخیرہ کرنے کی مدت بہتر ہوتی ہے۔',
            '/^The fungus develops in warm and humid conditions\.?$/iu' => 'فنگس گرم اور مرطوب حالات میں نشوونما پاتا ہے۔',
            '/^The fungus develops under warm and humid conditions\.?$/iu' => 'فنگس گرم اور مرطوب حالات میں نشوونما پاتا ہے۔',
            '/^The fungus develops during warm and humid weather\.?$/iu' => 'گرم اور مرطوب موسم میں فنگس کی نشوونما ہوتی ہے۔',
            '/^The fungus develops during warm and dry weather\.?$/iu' => 'گرم اور خشک موسم میں فنگس کی نشوونما ہوتی ہے۔',
            '/^The fungus develops under warm and dry conditions\.?$/iu' => 'فنگس گرم اور خشک حالات میں نشوونما پاتا ہے۔',
            '/^The fungus develops during warm days and humid nights\.?$/iu' => 'گرم دنوں اور مرطوب راتوں میں فنگس کی نشوونما ہوتی ہے۔',
            '/^The fungus develops in humid weather and infects young plants\.?$/iu' => 'مرطوب موسم میں فنگس کی نشوونما ہوتی ہے اور یہ ننھے پودوں کو متاثر کرتا ہے۔',
            '/^The fungus develops in cool and humid conditions\.?$/iu' => 'فنگس ٹھنڈے اور مرطوب حالات میں نشوونما پاتا ہے۔',
            '/^The fungus spreads rapidly in warm and humid conditions\.?$/iu' => 'فنگس گرم اور مرطوب حالات میں تیزی سے پھیلتا ہے۔',
            '/^The fungus spreads in warm and humid weather\.?$/iu' => 'فنگس گرم اور مرطوب موسم میں پھیلتا ہے۔',
            '/^The fungus spreads during warm and humid weather\.?$/iu' => 'گرم اور مرطوب موسم میں فنگس پھیلتا ہے۔',
            '/^The fungus spreads during humid and rainy weather\.?$/iu' => 'مرطوب اور بارش والے موسم میں فنگس پھیلتا ہے۔',
            '/^The fungus spreads through infected crop debris and moisture\.?$/iu' => 'فنگس متاثرہ فصل کی باقیات اور نمی کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through infected plant debris and moisture\.?$/iu' => 'فنگس متاثرہ پودوں کی باقیات اور نمی کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through infected seeds and plant debris\.?$/iu' => 'فنگس متاثرہ بیجوں اور پودوں کی باقیات کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through infected seeds and crop residues\.?$/iu' => 'فنگس متاثرہ بیجوں اور فصل کی باقیات کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through infected seeds and wet weather conditions\.?$/iu' => 'فنگس متاثرہ بیجوں اور نم موسمی حالات کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through infected seeds and wet weather\.?$/iu' => 'فنگس متاثرہ بیجوں اور نم موسم کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through infected seeds and wet conditions\.?$/iu' => 'فنگس متاثرہ بیجوں اور نم حالات کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through infected plant debris and rain splashes\.?$/iu' => 'فنگس متاثرہ پودوں کی باقیات اور بارش کے چھینٹوں کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through infected plant debris and humid weather\.?$/iu' => 'فنگس متاثرہ پودوں کی باقیات اور مرطوب موسم کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through rain and humid conditions\.?$/iu' => 'فنگس بارش اور مرطوب حالات کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through rain and infected plant debris\.?$/iu' => 'فنگس بارش اور متاثرہ پودوں کی باقیات کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through wind in humid conditions\.?$/iu' => 'فنگس مرطوب حالات میں ہوا کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through wind in cool and moist weather\.?$/iu' => 'فنگس ٹھنڈے اور نم موسم میں ہوا کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through wind and rain in humid weather\.?$/iu' => 'فنگس مرطوب موسم میں ہوا اور بارش کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads through air in cool and wet weather\.?$/iu' => 'فنگس ٹھنڈے اور نم موسم میں ہوا کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads in wet and humid conditions through rain and soil\.?$/iu' => 'فنگس نم اور مرطوب حالات میں بارش اور مٹی کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads in humid weather through wind and infected leaves\.?$/iu' => 'فنگس مرطوب موسم میں ہوا اور متاثرہ پتوں کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads in humid weather through rain and infected plant parts\.?$/iu' => 'فنگس مرطوب موسم میں بارش اور متاثرہ پودوں کے حصوں کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads in humid weather through rain splash\.?$/iu' => 'فنگس مرطوب موسم میں بارش کے چھینٹوں کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads in warm and humid conditions through water splash\.?$/iu' => 'فنگس گرم اور مرطوب حالات میں پانی کے چھینٹوں کے ذریعے پھیلتا ہے۔',
            '/^The fungus spreads in humid conditions and infects leaves and stems\.?$/iu' => 'فنگس مرطوب حالات میں پھیلتا ہے اور پتوں اور تنوں کو متاثر کرتا ہے۔',
            '/^The fungus spreads in humid conditions and attacks leaves\.?$/iu' => 'فنگس مرطوب حالات میں پھیلتا ہے اور پتوں پر حملہ کرتا ہے۔',
            '/^The fungus spreads in warm and humid conditions and attacks leaves and pods\.?$/iu' => 'فنگس گرم اور مرطوب حالات میں پھیلتا ہے اور پتوں اور پھلیوں کو متاثر کرتا ہے۔',
            '/^The fungus spreads in wet and humid weather and infects leaves and fruits\.?$/iu' => 'فنگس نم اور مرطوب موسم میں پھیلتا ہے اور پتوں اور پھلوں کو متاثر کرتا ہے۔',
            '/^The fungus infects flowers during humid weather\.?$/iu' => 'مرطوب موسم میں فنگس پھولوں کو متاثر کرتا ہے۔',
            '/^The fungus infects leaves under humid conditions\.?$/iu' => 'فنگس مرطوب حالات میں پتوں کو متاثر کرتا ہے۔',
            '/^The fungus infects leaves and grows in warm, humid conditions\.?$/iu' => 'فنگس پتوں کو متاثر کرتا ہے اور گرم و مرطوب حالات میں نشوونما پاتا ہے۔',
            '/^The fungus infects stems and spreads in warm, humid conditions\.?$/iu' => 'فنگس تنوں کو متاثر کرتا ہے اور گرم و مرطوب حالات میں پھیلتا ہے۔',
            '/^The fungus infects roots and stems, especially during drought stress\.?$/iu' => 'فنگس جڑوں اور تنوں کو متاثر کرتا ہے، خاص طور پر خشک سالی کے دباؤ کے دوران۔',
            '/^The fungus infects fruits during high humidity and poor storage\.?$/iu' => 'زیادہ نمی اور نامناسب ذخیرہ کرنے کے دوران فنگس پھلوں کو متاثر کرتا ہے۔',
            '/^Fungal infection develops under moist and humid conditions\.?$/iu' => 'نم اور مرطوب حالات میں فنگسی بیماری کی نشوونما ہوتی ہے۔',
            '/^Fungal infection develops during warm and humid conditions\.?$/iu' => 'گرم اور مرطوب حالات میں فنگسی بیماری پیدا ہوتی ہے۔',
            '/^Fungus grows on leaves in dry but humid weather\.?$/iu' => 'فنگس خشک لیکن مرطوب موسم میں پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus grows on leaves in dry weather with humidity\.?$/iu' => 'فنگس نمی والے خشک موسم میں پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus grows on leaves in warm weather with humidity\.?$/iu' => 'فنگس گرم اور مرطوب موسم میں پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus grows on leaves in dry weather with cool nights\.?$/iu' => 'فنگس خشک موسم اور ٹھنڈی راتوں میں پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus develops on leaves in dry weather with cool nights\.?$/iu' => 'فنگس خشک موسم اور ٹھنڈی راتوں میں پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus grows in cool and humid conditions on leaves and stems\.?$/iu' => 'فنگس ٹھنڈے اور مرطوب حالات میں پتوں اور تنوں پر نشوونما پاتا ہے۔',
            '/^Fungus grows in cool and humid conditions on leaves\.?$/iu' => 'فنگس ٹھنڈے اور مرطوب حالات میں پتوں پر نشوونما پاتا ہے۔',
            '/^Fungus grows in cool and humid conditions, especially on wet leaves\.?$/iu' => 'فنگس ٹھنڈے اور مرطوب حالات میں نشوونما پاتا ہے، خاص طور پر نم پتوں پر۔',
            '/^Fungus grows in warm and dry weather with high humidity at night\.?$/iu' => 'فنگس گرم اور خشک موسم میں، رات کے وقت زیادہ نمی ہونے کی صورت میں، نشوونما پاتا ہے۔',
            '/^Fungus grows in dry weather with high humidity at night\.?$/iu' => 'فنگس خشک موسم میں رات کے وقت زیادہ نمی کے باعث نشوونما پاتا ہے۔',
            '/^Fungus grows in humid weather and infects ripening fruits\.?$/iu' => 'فنگس مرطوب موسم میں نشوونما پاتا ہے اور پکنے والے پھلوں کو متاثر کرتا ہے۔',
            '/^Fungus grows on ripening fruits in high humidity\.?$/iu' => 'زیادہ نمی میں فنگس پکنے والے پھلوں پر نشوونما پاتا ہے۔',
            '/^Fungus grows in wet soil and attacks roots\.?$/iu' => 'فنگس نم مٹی میں نشوونما پاتا ہے اور جڑوں پر حملہ کرتا ہے۔',
            '/^Fungus develops in wet soil and attacks roots\.?$/iu' => 'فنگس نم مٹی میں نشوونما پاتا ہے اور جڑوں پر حملہ کرتا ہے۔',
            '/^Soil fungus enters roots and blocks water supply to the plant\.?$/iu' => 'مٹی میں موجود فنگس جڑوں کے ذریعے پودے میں داخل ہو کر پانی کی فراہمی روک دیتا ہے۔',
            '/^Soil fungus enters through roots and blocks water movement in the plant\.?$/iu' => 'مٹی میں موجود فنگس جڑوں کے ذریعے پودے میں داخل ہو کر پانی کی روانی روک دیتا ہے۔',
            '/^Soil-borne fungus enters roots and blocks water movement\.?$/iu' => 'مٹی میں موجود فنگس جڑوں میں داخل ہو کر پانی کی روانی روک دیتا ہے۔',
            '/^Soil-borne fungus enters roots and blocks water movement in the plant\.?$/iu' => 'مٹی میں موجود فنگس جڑوں میں داخل ہو کر پودے میں پانی کی روانی روک دیتا ہے۔',
            '/^Soil-borne fungus enters roots and blocks water transport\.?$/iu' => 'مٹی میں موجود فنگس جڑوں میں داخل ہو کر پانی کی ترسیل روک دیتا ہے۔',
            '/^Soil-borne fungus infects roots and blocks water movement\.?$/iu' => 'مٹی میں موجود فنگس جڑوں کو متاثر کرکے پانی کی روانی روک دیتا ہے۔',
            '/^Soil-borne fungus infects roots and blocks water flow\.?$/iu' => 'مٹی میں موجود فنگس جڑوں کو متاثر کرکے پانی کا بہاؤ روک دیتا ہے۔',
            '/^Soil-borne fungus attacks roots and blocks water movement in plant\.?$/iu' => 'مٹی میں موجود فنگس جڑوں پر حملہ کرکے پودے میں پانی کی روانی روک دیتا ہے۔',
            '/^Soil-borne fungus attacks roots and blocks nutrient uptake\.?$/iu' => 'مٹی میں موجود فنگس جڑوں پر حملہ کرکے غذائی اجزا کے جذب ہونے میں رکاوٹ ڈالتا ہے۔',
            '/^Soil-borne fungus attacks roots in wet or poorly drained soil\.?$/iu' => 'مٹی میں موجود فنگس نم یا ناقص نکاسی والی مٹی میں جڑوں پر حملہ کرتا ہے۔',
            '/^Soil-borne fungus infects roots in wet and acidic soils\.?$/iu' => 'مٹی میں موجود فنگس نم اور تیزابی مٹی میں جڑوں کو متاثر کرتا ہے۔',
            '/^Soil-borne fungus infects roots in acidic, wet soils\.?$/iu' => 'مٹی میں موجود فنگس تیزابی اور نم مٹی میں جڑوں کو متاثر کرتا ہے۔',
            '/^Soil-borne fungus infects roots and vascular tissues\.?$/iu' => 'مٹی میں موجود فنگس جڑوں اور نباتاتی نالیوں کے بافتوں کو متاثر کرتا ہے۔',
            '/^Soil-borne fungus attacks stem base in wet soil conditions\.?$/iu' => 'مٹی میں موجود فنگس نم مٹی میں تنے کے نچلے حصے پر حملہ کرتا ہے۔',
            '/^Soil-borne fungus infects roots and stem base in wet soil\.?$/iu' => 'مٹی میں موجود فنگس نم مٹی میں جڑوں اور تنے کے نچلے حصے کو متاثر کرتا ہے۔',
            '/^Fungus attacks roots and blocks water movement inside the plant\.?$/iu' => 'فنگس جڑوں پر حملہ کرکے پودے کے اندر پانی کی روانی روک دیتا ہے۔',
            '/^Fungus attacks stems in cool and wet conditions\.?$/iu' => 'فنگس ٹھنڈے اور نم حالات میں تنوں پر حملہ کرتا ہے۔',
            '/^Fungus attacks stems in cool, wet, and dense crop conditions\.?$/iu' => 'فنگس ٹھنڈے، نم اور گنجان فصل میں تنوں پر حملہ کرتا ہے۔',
            '/^Fungus attacks stems in wet, cool, and dense crop conditions\.?$/iu' => 'فنگس نم، ٹھنڈے اور گنجان فصل میں تنوں پر حملہ کرتا ہے۔',
            '/^Fungus enters through roots and spreads inside the plant\.?$/iu' => 'فنگس جڑوں کے ذریعے پودے میں داخل ہو کر اندر پھیل جاتا ہے۔',
            '/^Fungus enters through roots and blocks water supply in plants\.?$/iu' => 'فنگس جڑوں کے ذریعے پودوں میں داخل ہو کر پانی کی فراہمی روک دیتا ہے۔',
            '/^Fungus infects leaves during wet weather conditions\.?$/iu' => 'نم موسمی حالات میں فنگس پتوں کو متاثر کرتا ہے۔',
            '/^Fungus infects flowers and fruits, especially in humid conditions\.?$/iu' => 'فنگس پھولوں اور پھلوں کو متاثر کرتا ہے، خاص طور پر مرطوب حالات میں۔',
            '/^Fungus infects buds during cool and wet weather in early spring\.?$/iu' => 'ابتدائی بہار کے ٹھنڈے اور نم موسم میں فنگس کلیوں کو متاثر کرتا ہے۔',
            '/^Fungus infects grains during flowering in humid conditions\.?$/iu' => 'مرطوب حالات میں پھول آنے کے دوران فنگس دانوں کو متاثر کرتا ہے۔',
            '/^Fungus affects growing buds causing abnormal flower and shoot growth\.?$/iu' => 'فنگس نشوونما پاتی ہوئی کلیوں کو متاثر کرتا ہے، جس سے پھولوں اور نئی شاخوں کی غیر معمولی نشوونما ہوتی ہے۔',
            '/^White fungal growth develops on leaves in cool and humid weather\.?$/iu' => 'ٹھنڈے اور مرطوب موسم میں پتوں پر سفید فنگسی تہہ بن جاتی ہے۔',
            '/^White fungal growth develops on leaves in dry and warm conditions\.?$/iu' => 'خشک اور گرم حالات میں پتوں پر سفید فنگسی تہہ بن جاتی ہے۔',
            '/^White fungal growth appears on leaves in dry but warm conditions\.?$/iu' => 'خشک لیکن گرم حالات میں پتوں پر سفید فنگسی تہہ ظاہر ہوتی ہے۔',
            '/^Fungal spores spread through wind and infect leaves\.?$/iu' => 'فنگس کے جراثیمی ذرات ہوا کے ذریعے پھیل کر پتوں کو متاثر کرتے ہیں۔',
            '/^Spread by wind-borne fungal spores\.?$/iu' => 'یہ بیماری ہوا کے ذریعے پھیلنے والے فنگس کے جراثیمی ذرات سے پھیلتی ہے۔',
            '/^Tiny white insects live under leaves and suck sap, spreading quickly in hot weather\.?$/iu' => 'نہایت چھوٹے سفید کیڑے پتوں کی نچلی سطح پر رہتے ہیں اور ان کا رس چوستے ہیں، جس کی وجہ سے گرم موسم میں یہ تیزی سے پھیلتے ہیں۔',
            '/^Tiny white insects live under leaves and suck sap, spreading quickly in dry and warm conditions\.?$/iu' => 'نہایت چھوٹے سفید کیڑے پتوں کی نچلی سطح پر رہتے ہیں اور ان کا رس چوستے ہیں، جبکہ خشک اور گرم حالات میں یہ تیزی سے پھیلتے ہیں۔',
            '/^Caused by irregular watering and sudden changes in moisture\.?$/iu' => 'یہ بیماری بے قاعدہ آبپاشی اور نمی میں اچانک تبدیلیوں کی وجہ سے پیدا ہوتی ہے۔',
            '/^Caused by the fungus Magnaporthe oryzae under humid and rainy conditions\.?$/iu' => 'یہ بیماری مرطوب اور بارش والے حالات میں Magnaporthe oryzae نامی فنگس کی وجہ سے پیدا ہوتی ہے۔',
            '/^A fungus infects the cane, especially during warm and humid weather\.?$/iu' => 'ایک فنگس گنے کے تنے کو متاثر کرتا ہے، خاص طور پر گرم اور مرطوب موسم میں۔',
            '/^Leaves show yellow stripes and white fungal growth underneath\.?$/iu' => 'پتوں پر پیلی دھاریاں نمودار ہوتی ہیں اور ان کی نچلی سطح پر سفید فنگسی تہہ بن جاتی ہے۔',
            '/^Leaves turn yellow and white fungal growth appears underneath\.?$/iu' => 'پتے پیلے ہو جاتے ہیں اور ان کی نچلی سطح پر سفید فنگسی تہہ ظاہر ہوتی ہے۔',
            '/^Yellow spots appear on leaves and gray fungal growth develops underneath\.?$/iu' => 'پتوں پر پیلے دھبے ظاہر ہوتے ہیں اور ان کی نچلی سطح پر سرمئی فنگسی تہہ بن جاتی ہے۔',
            '/^Damaged grains, holes in cobs, and poor grain quality\.?$/iu' => 'دانوں کو نقصان پہنچتا ہے، بھٹوں میں سوراخ ہو جاتے ہیں اور دانوں کا معیار خراب ہو جاتا ہے۔',
            '/^Use crop rotation and maintain soil pH balance\.?$/iu' => 'فصلوں کی گردش اختیار کریں اور مٹی کی پی ایچ سطح متوازن رکھیں۔',
            '/^Use resistant varieties, proper drainage, and balanced fertilization\.?$/iu' => 'مزاحم اقسام استعمال کریں، مناسب نکاسی آب برقرار رکھیں اور متوازن کھاد استعمال کریں۔',
            '/^Use healthy seed and balanced fertilizer application\.?$/iu' => 'صحت مند بیج استعمال کریں اور متوازن مقدار میں کھاد دیں۔',
            '/^Follow recommended fungicide applications\.?$/iu' => 'تجویز کردہ پھپھوندی کش ادویات کا استعمال کریں۔',
            '/^Apply Sulphur or Penconazole\.?$/iu' => 'گندھک یا پینکونازول استعمال کریں۔',
            '/^Apply Sulfur or Hexaconazole\.?$/iu' => 'گندھک یا ہیکسا کونازول استعمال کریں۔',
        ];
        foreach ($rules as $pattern => $replacement) {
            if (preg_match($pattern, $text)) return $replacement;
        }
        $translatePart = function (string $part): string {
            $part = trim($part);
            $part = $this->applyAgriculturePhraseRules($part);
            $part = $this->fixAgricultureKnownNames($part);
            return $part;
        };
        if (preg_match('/^(?:The )?Fungus spreads in (.+?) through (.+?) and (?:attacks|infects) (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[1]) . ' میں ' . $translatePart($m[2]) . ' کے ذریعے پھیل کر ' . $translatePart($m[3]) . ' کو متاثر کرتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus spreads in (.+?) through (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[1]) . ' میں ' . $translatePart($m[2]) . ' کے ذریعے پھیلتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus spreads through (.+?) and (?:attacks|infects) (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[1]) . ' کے ذریعے پھیل کر ' . $translatePart($m[2]) . ' کو متاثر کرتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus spreads through (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[1]) . ' کے ذریعے پھیلتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus grows on (.+?) in (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[2]) . ' میں ' . $translatePart($m[1]) . ' پر نشوونما پاتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus grows in (.+?) on (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[1]) . ' میں ' . $translatePart($m[2]) . ' پر نشوونما پاتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus develops on (.+?) in (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[2]) . ' میں ' . $translatePart($m[1]) . ' پر نشوونما پاتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus develops in (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[1]) . ' میں نشوونما پاتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus grows in (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[1]) . ' میں نشوونما پاتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus infects (.+?) during (.+?)\.?$/iu', $text, $m)) {
            return $translatePart($m[2]) . ' کے دوران فنگس ' . $translatePart($m[1]) . ' کو متاثر کرتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus infects (.+?) under (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[2]) . ' میں ' . $translatePart($m[1]) . ' کو متاثر کرتا ہے۔';
        }
        if (preg_match('/^(?:The )?Fungus attacks (.+?) in (.+?)\.?$/iu', $text, $m)) {
            return 'فنگس ' . $translatePart($m[2]) . ' میں ' . $translatePart($m[1]) . ' پر حملہ کرتا ہے۔';
        }
        if (preg_match('/^Soil-borne fungus attacks (.+?) in (.+?)\.?$/iu', $text, $m)) {
            return 'مٹی میں موجود فنگس ' . $translatePart($m[2]) . ' میں ' . $translatePart($m[1]) . ' پر حملہ کرتا ہے۔';
        }
        if (preg_match('/^Soil-borne fungus infects (.+?) in (.+?)\.?$/iu', $text, $m)) {
            return 'مٹی میں موجود فنگس ' . $translatePart($m[2]) . ' میں ' . $translatePart($m[1]) . ' کو متاثر کرتا ہے۔';
        }
        return $text;
    }

    private function translateAgricultureGenericSentence(string $text): string
    {
        $text = trim($text);
        if ($text === '') return '';

        $rules = [
            '/^Germination Stage\.?$/iu' => 'انکرن کا مرحلہ',
            '/^(\d+)\.\s*Germination Stage\s*$/iu' => '$1. انکرن کا مرحلہ',
            '/^(\d+)\.\s*Seedling Stage\s*$/iu' => '$1. پنیری کا مرحلہ',
            '/^(\d+)\.\s*Vegetative Stage\s*$/iu' => '$1. نباتاتی مرحلہ',
            '/^(\d+)\.\s*Booting Stage\s*$/iu' => '$1. بالیاں بننے کا مرحلہ',
            '/^(\d+)\.\s*Flowering Stage\s*$/iu' => '$1. پھول آنے کا مرحلہ',
            '/^(\d+)\.\s*Grain Filling Stage\s*$/iu' => '$1. دانے بھرنے کا مرحلہ',
            '/^(\d+)\.\s*Maturity Stage\s*$/iu' => '$1. پختگی کا مرحلہ',
            '/^Seedling Stage\.?$/iu' => 'پنیری کا مرحلہ',
            '/^Vine Growth Stage\.?$/iu' => 'بیل کی نشوونما کا مرحلہ',
            '/^Flowering Stage\.?$/iu' => 'پھول آنے کا مرحلہ',
            '/^Fruit Formation Stage\.?$/iu' => 'پھل بننے کا مرحلہ',
            '/^Fruit Development Stage\.?$/iu' => 'پھلوں کی نشوونما کا مرحلہ',
            '/^Harvesting Stage\.?$/iu' => 'کٹائی کا مرحلہ',
            '/^Seeds sprout in warm soil conditions\.?$/iu' => 'گرم مٹی کے حالات میں بیج انکرت ہوتے ہیں۔',
            '/^Small vines start developing leaves\.?$/iu' => 'چھوٹی بیلیں پتے بنانا شروع کرتی ہیں۔',
            '/^Rapid spreading of vines and tendrils\.?$/iu' => 'بیلیں اور بل دار شاخیں تیزی سے پھیلتی ہیں۔',
            '/^Male and female flowers appear\.?$/iu' => 'نر اور مادہ پھول ظاہر ہوتے ہیں۔',
            '/^Small bitter gourds develop\.?$/iu' => 'چھوٹے کریلے نشوونما پاتے ہیں۔',
            '/^Fruits grow in size and become mature\.?$/iu' => 'پھل سائز میں بڑھتے ہیں اور پختہ ہو جاتے ہیں۔',
            '/^Tender green fruits are harvested regularly\.?$/iu' => 'نرم سبز پھل باقاعدگی سے توڑے جاتے ہیں۔',
            '/^Dead hearts in young plants, white heads during grain filling, reduced yield\.?$/iu' => 'ننھے پودوں میں مرکزی شاخیں سوکھ جاتی ہیں، دانہ بھرنے کے دوران سفید بالیاں ظاہر ہوتی ہیں اور پیداوار کم ہو جاتی ہے۔',
            '/^White heads during grain filling, reduced yield\.?$/iu' => 'دانہ بھرنے کے دوران سفید بالیاں ظاہر ہوتی ہیں اور پیداوار کم ہو جاتی ہے۔',
            '/^Adult moths lay eggs on (.+?)\. After hatching, larvae enter (.+?) and feed inside the plant\.?$/iu' => 'بالغ پروانے $1 پر انڈے دیتے ہیں۔ انڈوں سے نکلنے کے بعد سنڈیاں $2 میں داخل ہو کر پودے کے اندر خوراک حاصل کرتی ہیں۔',
            '/^Adult moths lay eggs on (.+?)\.?$/iu' => 'بالغ پروانے $1 پر انڈے دیتے ہیں۔',
            '/^After hatching, larvae enter (.+?) and feed inside the plant\.?$/iu' => 'انڈوں سے نکلنے کے بعد سنڈیاں $1 میں داخل ہو کر پودے کے اندر خوراک حاصل کرتی ہیں۔',
            '/^Use resistant varieties, remove affected plants, install pheromone traps, and maintain field sanitation\.?$/iu' => 'مزاحم اقسام استعمال کریں، متاثرہ پودے نکال دیں، جنسی کشش والے پھندے نصب کریں اور کھیت کی صفائی برقرار رکھیں۔',
            '/^Apply Chlorantraniliprole or Cartap Hydrochloride according to agricultural recommendations\.?$/iu' => 'زرعی سفارشات کے مطابق کلورانٹرانیلی پرول یا کارٹاپ ہائیڈروکلورائیڈ استعمال کریں۔',
            '/^(.+?) start developing (.+?)\.?$/iu' => '$1 میں $2 کی نشوونما شروع ہو جاتی ہے۔',
            '/^Rapid spreading of (.+?) and (.+?)\.?$/iu' => '$1 اور $2 تیزی سے پھیلتے ہیں۔',
            '/^Male and female flowers appear\.?$/iu' => 'نر اور مادہ پھول ظاہر ہوتے ہیں۔',
            '/^Small bitter gourds develop\.?$/iu' => 'چھوٹے کریلے نشوونما پاتے ہیں۔',
            '/^Fruits grow in size and become mature\.?$/iu' => 'پھل سائز میں بڑھتے ہیں اور پختہ ہو جاتے ہیں۔',
            '/^Tender green fruits are harvested regularly\.?$/iu' => 'نرم سبز پھل باقاعدگی سے توڑے جاتے ہیں۔',
            '/^Each stage is important for high yield production\.?$/iu' => 'زیادہ پیداوار حاصل کرنے کے لیے ہر مرحلہ اہم ہے۔',
            '/^The insect thrives in warm and humid conditions and feeds by sucking plant sap\.?$/iu' => 'یہ کیڑا گرم اور مرطوب حالات میں تیزی سے بڑھتا ہے اور پودے کا رس چوس کر خوراک حاصل کرتا ہے۔',
            '/^Leaves turn yellow, plants wilt, and eventually die\.?$/iu' => 'پتے پیلے ہو جاتے ہیں، پودے مرجھا جاتے ہیں اور آخرکار مر جاتے ہیں۔',
            '/^Leaves curl, turn yellow, and become sticky\.?$/iu' => 'پتے مڑ جاتے ہیں، پیلے ہو جاتے ہیں اور چپچپے ہو جاتے ہیں۔',
            '/^White powder-like patches appear on leaves and stems\.?$/iu' => 'پتوں اور تنوں پر سفید پاؤڈر جیسے دھبے ظاہر ہوتے ہیں۔',
            '/^Dark sunken spots appear on leaves, stems, and fruits\.?$/iu' => 'پتوں، تنوں اور پھلوں پر گہرے دھنسے ہوئے دھبے ظاہر ہوتے ہیں۔',
            '/^White winding lines appear on leaves and leaves dry early\.?$/iu' => 'پتوں پر سفید ٹیڑھی میڑھی لکیریں ظاہر ہوتی ہیں اور پتے جلد خشک ہو جاتے ہیں۔',
            '/^Aphids suck sap from leaves and stems\.?$/iu' => 'افڈز پتوں اور تنوں کا رس چوستے ہیں۔',
            '/^(.+?) leaves and stems\.?$/iu' => '$1 پتے اور تنوں کو متاثر کرتے ہیں۔',
            '/^Practice crop rotation and use healthy seed\.?$/iu' => 'فصلوں کی گردش پر عمل کریں اور صحت مند بیج استعمال کریں۔',
            '/^Remove infected plants and manage insect populations\.?$/iu' => 'متاثرہ پودے نکال دیں اور حشرات کی تعداد کو قابو میں رکھیں۔',
            '/^Remove infected plants and maintain field hygiene\.?$/iu' => 'متاثرہ پودے نکال دیں اور کھیت کی صفائی برقرار رکھیں۔',
            '/^Use suitable fungicides and resistant varieties\.?$/iu' => 'موزوں پھپھوندی کش ادویات اور مزاحم اقسام استعمال کریں۔',
            '/^Encourage beneficial insects and remove heavily infested leaves\.?$/iu' => 'فائدہ مند حشرات کی حوصلہ افزائی کریں اور زیادہ متاثرہ پتے نکال دیں۔',
            '/^Use yellow sticky traps and keep weeds under control\.?$/iu' => 'پیلے چپچپے پھندے استعمال کریں اور جڑی بوٹیوں کو قابو میں رکھیں۔',
            '/^(.+?) is ready when (.+?)\.?$/iu' => '$1 اس وقت تیار ہوتی ہے جب $2۔',
            '/^(.+?) is important for (.+?)\.?$/iu' => '$1، $2 کے لیے اہم ہے۔',
            '/^(.+?) are important for (.+?)\.?$/iu' => '$1، $2 کے لیے اہم ہیں۔',
            '/^(.+?) should be (.+?)\.?$/iu' => '$1 کو $2 ہونا چاہیے۔',
            '/^(.+?) can be (.+?)\.?$/iu' => '$1 کو $2 کیا جا سکتا ہے۔',
            '/^(.+?) are used for (.+?)\.?$/iu' => '$1 کو $2 کے لیے استعمال کیا جاتا ہے۔',
            '/^(.+?) is used for (.+?)\.?$/iu' => '$1 کو $2 کے لیے استعمال کیا جاتا ہے۔',
            '/^(.+?) is known for (.+?)\.?$/iu' => '$1 اپنی $2 کے لیے مشہور ہے۔',
            '/^(.+?) is rich in (.+?)\.?$/iu' => '$1 میں $2 وافر مقدار میں پائے جاتے ہیں۔',
            '/^(.+?) helps control (.+?) and improve (.+?)\.?$/iu' => '$1، $2 کو قابو کرنے اور $3 بہتر بنانے میں مدد کرتا ہے۔',
            '/^(.+?) is widely used in (.+?)\.?$/iu' => '$1 کو $2 میں بڑے پیمانے پر استعمال کیا جاتا ہے۔',
            '/^(.+?) provides good income to farmers\.?$/iu' => '$1 کسانوں کو اچھی آمدنی فراہم کرتا ہے۔',
            '/^(.+?) is an important crop grown in (.+?)\.?$/iu' => '$1، $2 میں اگائی جانے والی ایک اہم فصل ہے۔',
            '/^(.+?) grows best in (.+?) and requires (.+?)\.?$/iu' => '$1، $2 میں بہترین نشوونما پاتا ہے اور اسے $3 کی ضرورت ہوتی ہے۔',
            '/^(.+?) requires (.+?) for healthy growth\.?$/iu' => 'صحت مند نشوونما کے لیے $1 کو $2 درکار ہے۔',
            '/^(.+?) cannot tolerate (.+?)\.?$/iu' => '$1، $2 برداشت نہیں کر سکتا۔',
            '/^(.+?) is harvested (.+?) depending on (.+?)\.?$/iu' => '$1 کی کٹائی $2، $3 کے مطابق کی جاتی ہے۔',
            '/^(.+?) is harvested (.+?) after sowing depending on variety\.?$/iu' => '$1 کی کٹائی کاشت کے $2 بعد قسم کے مطابق کی جاتی ہے۔',
            '/^(.+?) are harvested when (.+?)\.?$/iu' => '$1 کی کٹائی اس وقت کی جاتی ہے جب $2۔',
            '/^After hatching, (.+?) enter (.+?) and feed inside the plant\.?$/iu' => 'انڈوں سے نکلنے کے بعد $1، $2 میں داخل ہو کر پودے کے اندر خوراک حاصل کرتی ہیں۔',
            '/^(.+?) thrives in warm and humid conditions and feeds by sucking plant sap\.?$/iu' => '$1 گرم اور مرطوب حالات میں تیزی سے بڑھتا ہے اور پودے کا رس چوس کر خوراک حاصل کرتا ہے۔',
            '/^(.+?) feed by sucking sap from (.+?)\.?$/iu' => '$1، $2 کا رس چوس کر خوراک حاصل کرتے ہیں۔',
            '/^(.+?) suck sap from (.+?)\.?$/iu' => '$1، $2 کا رس چوستے ہیں۔',
            '/^(.+?) feed on (.+?)\.?$/iu' => '$1، $2 کو کھاتے ہیں۔',
            '/^(.+?) attack (.+?) and (.+?)\.?$/iu' => '$1، $2 پر حملہ کرتے ہیں اور $3۔',
            '/^(.+?) attack (.+?)\.?$/iu' => '$1، $2 پر حملہ کرتے ہیں۔',
            '/^(.+?) enter (.+?) and feed inside (.+?)\.?$/iu' => '$1، $2 میں داخل ہو کر $3 کے اندر خوراک حاصل کرتے ہیں۔',
            '/^(.+?) enter inside (.+?) and (.+?)\.?$/iu' => '$1، $2 کے اندر داخل ہو کر $3۔',
            '/^(.+?) spread through (.+?)\.?$/iu' => '$1، $2 کے ذریعے پھیلتے ہیں۔',
            '/^(.+?) spreads through (.+?)\.?$/iu' => '$1، $2 کے ذریعے پھیلتا ہے۔',
            '/^(.+?) develops under (.+?)\.?$/iu' => '$1، $2 میں نشوونما پاتا ہے۔',
            '/^(.+?) develop under (.+?)\.?$/iu' => '$1، $2 میں نشوونما پاتے ہیں۔',
            '/^(.+?) appear on (.+?)\.?$/iu' => '$1، $2 پر ظاہر ہوتے ہیں۔',
            '/^(.+?) appears on (.+?)\.?$/iu' => '$1، $2 پر ظاہر ہوتا ہے۔',
            '/^(.+?) become (.+?)\.?$/iu' => '$1، $2 ہو جاتے ہیں۔',
            '/^(.+?) becomes (.+?)\.?$/iu' => '$1، $2 ہو جاتا ہے۔',
            '/^(.+?) turn (.+?) and (.+?)\.?$/iu' => '$1، $2 ہو جاتے ہیں اور $3۔',
            '/^(.+?) turns (.+?)\.?$/iu' => '$1، $2 ہو جاتا ہے۔',
            '/^(.+?) causes (.+?)\.?$/iu' => '$1، $2 کا سبب بنتا ہے۔',
            '/^(.+?) is caused by (.+?)\.?$/iu' => '$1، $2 کی وجہ سے ہوتا ہے۔',
            '/^(.+?) is spread by (.+?)\.?$/iu' => '$1، $2 کے ذریعے پھیلتا ہے۔',
            '/^Use (.+?)\.?$/iu' => '$1 استعمال کریں۔',
            '/^Use (.+?) and (.+?)\.?$/iu' => '$1 اور $2 استعمال کریں۔',
            '/^Remove (.+?)\.?$/iu' => '$1 نکال دیں۔',
            '/^Remove (.+?) and (.+?)\.?$/iu' => '$1 نکال دیں اور $2۔',
            '/^Destroy (.+?)\.?$/iu' => '$1 تلف کریں۔',
            '/^Avoid (.+?)\.?$/iu' => '$1 سے گریز کریں۔',
            '/^Maintain (.+?)\.?$/iu' => '$1 برقرار رکھیں۔',
            '/^Monitor (.+?) regularly\.?$/iu' => '$1 کی باقاعدگی سے نگرانی کریں۔',
            '/^Encourage (.+?)\.?$/iu' => '$1 کی حوصلہ افزائی کریں۔',
            '/^Install (.+?)\.?$/iu' => '$1 نصب کریں۔',
            '/^Apply (.+?) according to agricultural recommendations\.?$/iu' => 'زرعی سفارشات کے مطابق $1 استعمال کریں۔',
            '/^Apply (.+?) where recommended\.?$/iu' => 'جہاں سفارش کی گئی ہو وہاں $1 استعمال کریں۔',
            '/^Apply (.+?)\.?$/iu' => '$1 استعمال کریں۔',
            '/^Practice (.+?) and use (.+?)\.?$/iu' => '$1 پر عمل کریں اور $2 استعمال کریں۔',
            '/^Keep (.+?) clean\.?$/iu' => '$1 صاف رکھیں۔',
            '/^Keep (.+?) under control\.?$/iu' => '$1 کو قابو میں رکھیں۔',
            '/^Maintain proper (.+?)\.?$/iu' => 'مناسب $1 برقرار رکھیں۔',
            '/^Improve (.+?) and avoid (.+?)\.?$/iu' => '$1 بہتر کریں اور $2 سے گریز کریں۔',
            '/^(.+?) helps (.+?)\.?$/iu' => '$1، $2 میں مدد کرتا ہے۔',
            '/^(.+?) improve (.+?)\.?$/iu' => '$1، $2 بہتر کرتے ہیں۔',
            '/^(.+?) improves (.+?)\.?$/iu' => '$1، $2 بہتر کرتا ہے۔',
            '/^(.+?) reduces (.+?)\.?$/iu' => '$1، $2 کم کرتا ہے۔',
            '/^(.+?) increase (.+?)\.?$/iu' => '$1، $2 بڑھاتے ہیں۔',
            '/^(.+?) increases (.+?)\.?$/iu' => '$1، $2 بڑھاتا ہے۔',
            '/^(.+?) provide (.+?)\.?$/iu' => '$1، $2 فراہم کرتے ہیں۔',
            '/^(.+?) provides (.+?)\.?$/iu' => '$1، $2 فراہم کرتا ہے۔',
            '/^(.+?) require (.+?)\.?$/iu' => '$1 کو $2 درکار ہے۔',
            '/^(.+?) requires (.+?)\.?$/iu' => '$1 کو $2 درکار ہے۔',
            '/^(.+?) grows best in (.+?)\.?$/iu' => '$1، $2 میں بہترین نشوونما پاتا ہے۔',
            '/^(.+?) grows well in (.+?)\.?$/iu' => '$1، $2 میں اچھی نشوونما پاتا ہے۔',
            '/^(.+?) is grown in (.+?)\.?$/iu' => '$1 کو $2 میں اگایا جاتا ہے۔',
            '/^(.+?) is usually grown in (.+?)\.?$/iu' => '$1 کو عموماً $2 میں اگایا جاتا ہے۔',
            '/^(.+?) is sown in (.+?)\.?$/iu' => '$1 کو $2 میں بویا جاتا ہے۔',
            '/^(.+?) is harvested (.+?)\.?$/iu' => '$1 کی کٹائی $2 کی جاتی ہے۔',
            '/^(.+?) are harvested (.+?)\.?$/iu' => '$1 کی کٹائی $2 کی جاتی ہے۔',
            '/^(.+?) are (.+?)\.?$/iu' => '$1 $2 ہیں۔',
            '/^(.+?) is (.+?)\.?$/iu' => '$1 $2 ہے۔',
        ];

        foreach ($rules as $pattern => $replacement) {
            $out = preg_replace($pattern, $replacement, $text);
            if ($out !== null && $out !== $text) {
                $out = $this->applyAgriculturePhraseRules($out);
                $out = $this->fixAgricultureKnownNames($out);
                return $this->fixGrammar($out);
            }
        }

        $parts = preg_split('/\s*,\s*/u', rtrim($text, ' .'), -1, PREG_SPLIT_NO_EMPTY);
        if ($parts && count($parts) > 1) {
            $mapped = [];
            foreach ($parts as $part) {
                $candidate = $this->applyAgriculturePhraseRules(trim($part));
                $candidate = $this->fixAgricultureKnownNames($candidate);
                $mapped[] = $candidate;
            }
            $joined = implode('، ', $mapped);
            if (!$this->hasEnglish($joined)) return $this->fixGrammar($joined . '۔');
        }

        $fallback = [
            '/^(.+?) is sown in two main seasons: (.+?) and (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کو دو اہم موسموں میں بویا جاتا ہے: ' . $this->translateSimplePhrase($m[2]) . ' اور ' . $this->translateSimplePhrase($m[3]) . '۔';
            },
            '/^(.+?) is usually sown from (.+?) in Pakistan(?: depending on (.+?))?\.?$/iu' => function ($m) {
                $tail = !empty($m[3]) ? '، ' . $this->translateSimplePhrase($m[3]) . ' کے مطابق' : '';
                return 'پاکستان میں ' . $this->fixAgricultureKnownNames($m[1]) . ' کی بوائی عموماً ' . $this->translateSimplePhrase($m[2]) . ' تک کی جاتی ہے' . $tail . '۔';
            },
            '/^(.+?) is harvested throughout the year depending on planting time\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی کاشت کے وقت کے مطابق پورے سال کی جاتی ہے۔';
            },
            '/^(.+?) is harvested after (.+?) of planting, usually from (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی کاشت کے ' . $this->translateSimplePhrase($m[2]) . ' بعد، عموماً ' . $this->translateSimplePhrase($m[3]) . ' کے دوران کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) after sowing depending on variety\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی بوائی کے ' . $this->translateSimplePhrase($m[2]) . ' بعد قسم کے مطابق کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) depending on variety\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم کے مطابق ' . $this->translateSimplePhrase($m[2]) . ' کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) depending on the variety and region\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم اور علاقے کے مطابق ' . $this->translateSimplePhrase($m[2]) . ' کی جاتی ہے۔';
            },
            '/^(.+?) is harvested (.+?) depending on the variety and climate conditions\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' کی کٹائی قسم اور موسمی حالات کے مطابق ' . $this->translateSimplePhrase($m[2]) . ' کی جاتی ہے۔';
            },
            '/^(.+?) is ready when (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' اس وقت تیار ہوتی ہے جب ' . $this->translateSimplePhrase($m[2]) . '۔';
            },
            '/^The crop is ready when (.+?)\.?$/iu' => function ($m) {
                return 'فصل اس وقت تیار ہوتی ہے جب ' . $this->translateSimplePhrase($m[1]) . '۔';
            },
            '/^(.+?) grows best in warm weather and cannot tolerate frost or (.+?)\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' گرم موسم میں بہترین نشوونما پاتا ہے اور پالا یا ' . $this->translateSimplePhrase($m[2]) . ' برداشت نہیں کر سکتا۔';
            },
            '/^(.+?) grows best in warm climates and requires full sunlight for healthy growth\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' گرم آب و ہوا میں بہترین نشوونما پاتا ہے اور صحت مند بڑھوتری کے لیے اسے مکمل دھوپ درکار ہوتی ہے۔';
            },
            '/^Warm temperature helps proper (.+?) and (.+?)\.?$/iu' => function ($m) {
                return 'گرم درجہ حرارت ' . $this->translateSimplePhrase($m[1]) . ' اور ' . $this->translateSimplePhrase($m[2]) . ' میں مدد دیتا ہے۔';
            },
            '/^Proper land preparation ensures healthy (.+?) and higher yield\.?$/iu' => function ($m) {
                return 'زمین کی مناسب تیاری ' . $this->translateSimplePhrase($m[1]) . ' اور زیادہ پیداوار کے حصول میں مدد دیتی ہے۔';
            },
            '/^Proper land preparation improves (.+?) and (.+?)\.?$/iu' => function ($m) {
                return 'زمین کی مناسب تیاری ' . $this->translateSimplePhrase($m[1]) . ' اور ' . $this->translateSimplePhrase($m[2]) . ' بہتر بناتی ہے۔';
            },
            '/^Proper land preparation supports (.+?) and (.+?)\.?$/iu' => function ($m) {
                return 'زمین کی مناسب تیاری ' . $this->translateSimplePhrase($m[1]) . ' اور ' . $this->translateSimplePhrase($m[2]) . ' میں مدد دیتی ہے۔';
            },
            '/^Proper spacing helps (.+?) spread and produce (.+?)\.?$/iu' => function ($m) {
                return 'مناسب فاصلہ ' . $this->translateSimplePhrase($m[1]) . ' کو پھیلنے اور ' . $this->translateSimplePhrase($m[2]) . ' پیدا کرنے میں مدد دیتا ہے۔';
            },
            '/^Proper spacing ensures (.+?)\.?$/iu' => function ($m) {
                return 'مناسب فاصلہ ' . $this->translateSimplePhrase($m[1]) . ' کو یقینی بناتا ہے۔';
            },
            '/^(.+?) also improves soil fertility by fixing nitrogen, making it beneficial for crop rotation systems\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' نائٹروجن کو مٹی میں شامل کرکے اس کی زرخیزی بھی بہتر بناتا ہے، جس کی وجہ سے یہ فصلوں کی گردش کے نظام کے لیے مفید ثابت ہوتا ہے۔';
            },
            '/^(.+?) plays a key role in ensuring food security in dryland farming systems\.?$/iu' => function ($m) {
                return $this->fixAgricultureKnownNames($m[1]) . ' خشک علاقوں میں فصلوں کی کاشت کے نظام کے تحت غذائی تحفظ یقینی بنانے میں اہم کردار ادا کرتا ہے۔';
            },
            '/^It is essential for livestock feeding in dry areas and contributes to food security in arid regions of Pakistan\.?$/iu' => function ($m) {
                return 'یہ خشک علاقوں میں مویشیوں کے لیے خوراک کا اہم ذریعہ ہے اور پاکستان کے خشک خطوں میں غذائی تحفظ میں بھی حصہ ڈالتا ہے۔';
            },
            '/^It supports livestock feeding and contributes to food security in areas with low rainfall\.?$/iu' => function ($m) {
                return 'یہ کم بارش والے علاقوں میں مویشیوں کی خوراک کی ضروریات پوری کرنے اور غذائی تحفظ میں اہم کردار ادا کرتا ہے۔';
            },
            '/^Summer conditions support good germination and growth\.?$/iu' => function ($m) {
                return 'گرمیوں کے موسمی حالات بہتر انکرن اور پودوں کی اچھی نشوونما کے لیے سازگار ہوتے ہیں۔';
            },
            '/^Summer season provides high temperature, humidity, and rainfall which are necessary for healthy crop development\.?$/iu' => function ($m) {
                return 'گرمیوں کا موسم زیادہ درجہ حرارت، مناسب نمی اور بارش فراہم کرتا ہے، جو فصل کی صحت مند نشوونما کے لیے ضروری ہیں۔';
            },
            '/^Farmers prefer cool weather conditions after the monsoon season for better germination and early plant growth\.?$/iu' => function ($m) {
                return 'بہتر انکرن اور ابتدائی نشوونما کے لیے کسان برسات کے موسم کے بعد ٹھنڈے موسمی حالات کو ترجیح دیتے ہیں۔';
            },
            '/^The crop is ready when grains become hard and the plant turns yellow golden\.?$/iu' => function ($m) {
                return 'فصل اس وقت تیار ہوتی ہے جب دانے سخت ہو جائیں اور پودے کا رنگ سنہری زرد ہو جائے۔';
            },
            '/^The crop is ready when grains become hard and plants turn dry\.?$/iu' => function ($m) {
                return 'فصل اس وقت تیار ہوتی ہے جب دانے سخت ہو جائیں اور پودے خشک ہونے لگیں۔';
            },
            '/^It provides employment and income to farmers and contributes greatly to the economy through exports\.?$/iu' => function ($m) {
                return 'یہ کسانوں کو روزگار اور آمدنی فراہم کرتی ہے اور برآمدات کے ذریعے ملکی معیشت میں اہم کردار ادا کرتی ہے۔';
            },
        ];
        foreach ($fallback as $pattern => $handler) {
            if (preg_match($pattern, $text, $m)) return $this->fixGrammar($handler($m));
        }

        return $text;
    }

    private function translateAgricultureLabelLine(string $text): string
    {
        if (!preg_match('/^\s*([^:]+):\s*(.+?)\s*$/u', $text, $m)) return $text;
        $label = trim($m[1]);
        $value = trim($m[2]);
        $labels = [
            'Crop Name' => 'فصل کا نام', 'Scientific Name' => 'سائنسی نام', 'Crop Type' => 'فصل کی قسم',
            'Main Use' => 'اہم استعمال', 'Sowing Season' => 'کاشت کا موسم', 'Harvesting Season' => 'کٹائی کا موسم',
            'Ideal Temperature' => 'موزوں درجہ حرارت', 'Water Requirement' => 'پانی کی ضرورت', 'Best Soil Type' => 'بہترین مٹی کی قسم',
            'Major Areas' => 'اہم علاقے', 'Suitable Soil' => 'موزوں مٹی', 'Ideal pH' => 'موزوں پی ایچ',
            'Germination Temperature' => 'انکرن کا درجہ حرارت', 'Vegetative Growth' => 'نباتاتی نشوونما',
            'Fruit Development' => 'پھلوں کی نشوونما', 'Grain Formation' => 'دانے بننے کا مرحلہ', 'Boll Formation' => 'ٹینڈے بننے کا مرحلہ',
            'Seed Rate' => 'بیج کی مقدار', 'Nursery Method' => 'پنیری کا طریقہ', 'Direct Seeding' => 'براہِ راست بیجائی',
            'Characteristics of Good Seed' => 'اچھے بیج کی خصوصیات', 'Ploughing' => 'ہل چلانا', 'Puddling' => 'پڈلنگ',
            'Leveling' => 'ہموار کرنا', 'Weed Removal' => 'جڑی بوٹیوں کا خاتمہ', 'Fertilizer Mixing' => 'کھاد ملانا',
            'Initial Stage' => 'ابتدائی مرحلہ', 'Vitamin C' => 'وٹامن سی', 'Antioxidants' => 'اینٹی آکسیڈنٹس', 'Potassium (K)' => 'پوٹاشیم', 'Nitrogen (N)' => 'نائٹروجن', 'Phosphorus (P)' => 'فاسفورس', 'Seedling Stage' => 'پنیری کا مرحلہ', 'Vegetative Stage' => 'نباتاتی مرحلہ',
            'Flowering Stage' => 'پھول آنے کا مرحلہ', 'Harvesting Stage' => 'کٹائی کا مرحلہ', 'Booting Stage' => 'بالیاں بننے کا مرحلہ', 'Grain Filling Stage' => 'دانے بھرنے کا مرحلہ', 'Maturity Stage' => 'پختگی کا مرحلہ',
            'Bed Formation' => 'کھیلیاں بنانا', 'Bed Preparation' => 'کھیلیوں کی تیاری', 'Organic Matter' => 'نامیاتی مادہ', 'Organic Matter Addition' => 'نامیاتی مادے کا اضافہ', 'Organic Manure' => 'نامیاتی کھاد', 'Organic Manure Addition' => 'نامیاتی کھاد کا اضافہ', 'Weed Control' => 'جڑی بوٹیوں کا تدارک', 'Weed removal' => 'جڑی بوٹیوں کا خاتمہ', 'Vine Growth Stage' => 'بیل کی نشوونما کا مرحلہ', 'Fruit Development Stage' => 'پھلوں کی نشوونما کا مرحلہ', 'Pod Filling Stage' => 'پھلی بھرنے کا مرحلہ', 'Pod Development Stage' => 'پھلیوں کی نشوونما کا مرحلہ',
        ];
        $naturalValues = [
            'Kharif Pulse Crop' => 'خریف کی دال دار فصل',
            'Kharif Spice Crop' => 'خریف کی مصالحے کی فصل',
            'Kharif Vegetable Crop' => 'خریف کی سبزی کی فصل',
            'Kharif and Summer Vegetable Crop' => 'خریف اور موسم گرما کی سبزی کی فصل',
            'Kharif / Warm Season Vegetable' => 'خریف اور گرم موسم کی سبزی کی فصل',
            'Dal (Lentils), Sprouts, Food Products' => 'دال، انکرت اور غذائی مصنوعات',
            'Spice, Medicine, Cosmetics, Food Coloring' => 'مصالحہ، دوا، کاسمیٹکس اور غذائی رنگ',
            'Spice, Cooking, Pickles, Powder (Red Chilli)' => 'مصالحہ، کھانا پکانا، اچار اور پاؤڈر (سرخ مرچ)',
            'Curries, Bharta, Frying, Cooking' => 'سالن، بھرتہ، تلنے اور کھانا پکانے کے لیے',
            'Salad, Pickles, Fresh Vegetable' => 'سلاد، اچار اور تازہ سبزی',
            'Vegetable, Medicinal Use, Cooking' => 'سبزی، ادویاتی استعمال اور کھانا پکانا',
            'Vegetable, Salad, Soup' => 'سبزی، سلاد اور سوپ',
            'Food, Biryani, Boiled Rice' => 'خوراک، بریانی اور ابلے ہوئے چاول',
            'Low to Moderate' => 'کم سے درمیانہ',
            'Moderate to High' => 'درمیانہ سے زیادہ',
            'High to Moderate' => 'زیادہ سے درمیانہ',
            'Well-drained loamy soil' => 'اچھی نکاسی والی دومی مٹی',
            'Loamy and well-drained fertile soil' => 'دومی اور اچھی نکاسی والی زرخیز مٹی',
            'Sandy loam and Loamy soil' => 'ریتیلی دومی اور دومی مٹی',
            'Sandy loam and Loamy Soil' => 'ریتیلی دومی اور دومی مٹی',
            'Loamy and Sandy loam soil' => 'دومی اور ریتیلی دومی مٹی',
            'February to April (Spring) and August to September (Monsoon)' => 'فروری سے اپریل (بہار) اور اگست سے ستمبر (برسات)',
            'Green chillies after 60–80 days, red chillies after 120–150 days' => 'سبز مرچیں 60 سے 80 دن بعد اور سرخ مرچیں مکمل پختگی کے بعد 120 سے 150 دن میں',
        ];
        if (isset($naturalValues[$value])) return $labels[$label] . ': ' . $naturalValues[$value];
        if ($label === 'Main Use') {
            $items = preg_split('/\s*,\s*/u', $value, -1, PREG_SPLIT_NO_EMPTY);
            $map = [
                'Food' => 'خوراک', 'Biryani' => 'بریانی', 'Boiled Rice' => 'ابلے ہوئے چاول', 'Vegetable' => 'سبزی',
                'Medicinal Use' => 'ادویاتی استعمال', 'Cooking' => 'کھانا پکانا', 'Medicine' => 'دوا', 'Cosmetics' => 'کاسمیٹکس',
                'Food Coloring' => 'غذائی رنگ', 'Spice' => 'مصالحہ', 'Pickles' => 'اچار', 'Powder (Red Chilli)' => 'پاؤڈر (سرخ مرچ)',
                'Salad' => 'سلاد', 'Soup' => 'سوپ', 'Fresh Vegetable' => 'تازہ سبزی', 'Curries' => 'سالن', 'Bharta' => 'بھرتہ',
                'Frying' => 'تلنا', 'Dal (Lentils)' => 'دال', 'Sprouts' => 'انکرت', 'Food Products' => 'غذائی مصنوعات',
                'Animal Feed' => 'جانوروں کی خوراک', 'Fodder' => 'چارہ', 'Hay' => 'خشک گھاس', 'Silage' => 'سائیلج',
            ];
            $items = array_map(fn($item) => $map[trim($item)] ?? trim($item), $items ?: [$value]);
            return $labels[$label] . ': ' . implode('، ', $items);
        }
        if ($label === 'Crop Type') {
            $v = str_replace(['Pulse Crop','Spice Crop','Vegetable Crop','Fruit Crop','Oilseed Crop','Warm Season Vegetable','Summer Crop','Winter Crop','Kharif','Rabi'], ['دال دار فصل','مصالحے کی فصل','سبزی کی فصل','پھلوں کی فصل','تیل دار بیج کی فصل','گرم موسم کی سبزی','موسم گرما کی فصل','موسم سرما کی فصل','خریف','ربیع'], $value);
            return $labels[$label] . ': ' . $v;
        }
        if ($label === 'Best Soil Type') {
            $v = str_replace(['Sandy loam','Loamy','well-drained','fertile','Soil','soil'], ['ریتیلی دومی','دومی','اچھی نکاسی والی','زرخیز','مٹی','مٹی'], $value);
            return $labels[$label] . ': ' . $v;
        }
        if ($label === 'Scientific Name') return $label . ': ' . $value;
        $labelNaturalValues = [
            'Loosens soil for root growth' => 'جڑوں کی نشوونما کے لیے مٹی کو نرم کرتا ہے۔',
            'Loosens soil for better root growth' => 'جڑوں کی بہتر نشوونما کے لیے مٹی کو نرم کرتا ہے۔',
            'Loosens soil for root development' => 'جڑوں کی نشوونما کے لیے مٹی کو نرم کرتا ہے۔',
            'Loosens soil deeply for rhizome growth' => 'زیرِ زمین تنوں کی نشوونما کے لیے مٹی کو گہرائی تک نرم کرتا ہے۔',
            'Ensures uniform irrigation' => 'آبپاشی کی یکساں تقسیم یقینی بناتا ہے۔',
            'Ensures uniform water distribution' => 'پانی کی یکساں تقسیم یقینی بناتا ہے۔',
            'Ensures uniform moisture distribution' => 'نمی کی یکساں تقسیم یقینی بناتا ہے۔',
            'Ensures proper irrigation' => 'مناسب آبپاشی یقینی بناتا ہے۔',
            'Ensures proper irrigation and drainage' => 'مناسب آبپاشی اور نکاسی آب یقینی بناتا ہے۔',
            'Improves soil fertility' => 'مٹی کی زرخیزی بہتر بناتا ہے۔',
            'Improves fertility' => 'مٹی کی زرخیزی بہتر بناتا ہے۔',
            'Improves soil fertility and yield' => 'مٹی کی زرخیزی اور پیداوار بہتر بناتا ہے۔',
            'Improves leaf quality and growth' => 'پتوں کے معیار اور نشوونما کو بہتر بناتا ہے۔',
            'Reduces competition' => 'فصل کے ساتھ مقابلہ کم کرتا ہے۔',
            'Removes unwanted plants' => 'غیر ضروری پودوں کو ختم کرتا ہے۔',
            'Removes competing plants' => 'مقابلہ کرنے والے پودوں کو ختم کرتا ہے۔',
            'Removes competing weeds' => 'مقابلہ کرنے والی جڑی بوٹیوں کو ختم کرتا ہے۔',
            'Raised beds improve drainage' => 'اونچی کھیلیاں نکاسی آب کو بہتر بناتی ہیں۔',
            'Raised beds for better drainage' => 'بہتر نکاسی آب کے لیے اونچی کھیلیاں بنائی جاتی ہیں۔',
            'Raised beds for proper drainage' => 'مناسب نکاسی آب کے لیے اونچی کھیلیاں بنائی جاتی ہیں۔',
            'Add farmyard manure or compost' => 'گوبر کی کھاد یا کمپوسٹ شامل کریں۔',
            'Addition of compost or manure' => 'کمپوسٹ یا گوبر کی کھاد شامل کریں۔',
            'Mixed with soil for fertility' => 'مٹی کی زرخیزی بہتر بنانے کے لیے مٹی میں ملایا جاتا ہے۔',
            'Added to improve fertility' => 'مٹی کی زرخیزی بہتر بنانے کے لیے شامل کیا جاتا ہے۔',
            'Improves irrigation efficiency' => 'آبپاشی کی کارکردگی بہتر بناتا ہے۔',
            'Reduces competition for nutrients' => 'غذائی اجزا کے لیے مقابلہ کم کرتا ہے۔',
            'High germination rate' => 'انکرن کی زیادہ شرح۔',
            'Disease-free seeds' => 'بیماری سے پاک بیج۔',
            'Disease-free' => 'بیماری سے پاک۔',
            'Certified variety' => 'مصدقہ قسم۔',
            'Certified hybrid variety' => 'مصدقہ دوغلی قسم۔',
            'Certified improved variety' => 'مصدقہ بہتر شدہ قسم۔',
            'Uniform seed size' => 'بیج یکساں جسامت کے ہوں۔',
            'Uniform seed size and color' => 'بیج یکساں جسامت اور رنگ کے ہوں۔',
            'Clean and uniform size' => 'صاف اور یکساں جسامت۔',
            'High sprouting ability' => 'پھوٹنے کی اچھی صلاحیت۔',
            'Healthy and disease-free rhizomes' => 'صحت مند اور بیماری سے پاک زیرِ زمین تنے۔',
            'Medium sized fingers' => 'درمیانی جسامت کے صحت مند ٹکڑے۔',
            'Certified planting material' => 'مصدقہ کاشت کاری مواد۔',
            'Healthy corms or suckers' => 'صحت مند گانٹھیں یا شگوفے۔',
            'Disease-free planting material' => 'بیماری سے پاک کاشت کاری مواد۔',
            'Medium-sized, well-developed corms' => 'درمیانی جسامت کی مکمل نشوونما یافتہ گانٹھیں۔',
            'Proper spacing' => 'مناسب فاصلہ۔',
            'Light irrigation after sowing' => 'بوائی کے بعد ہلکی آبپاشی۔',
            'Regular watering' => 'باقاعدگی سے پانی دینا۔',
            'Adequate moisture required' => 'مناسب مقدار میں نمی ضروری ہے۔',
            'Frequent but controlled irrigation' => 'ضرورت کے مطابق بار بار لیکن قابو میں آبپاشی۔',
            'Critical watering required' => 'اس مرحلے پر پانی دینا بہت ضروری ہے۔',
            'Reduced watering for drying' => 'خشک ہونے کے لیے آبپاشی کم کر دیں۔',
            'Moderate irrigation' => 'معتدل آبپاشی۔',
        ];
        if (isset($labels[$label], $labelNaturalValues[$value])) return $labels[$label] . ': ' . $labelNaturalValues[$value];
        if (!isset($labels[$label])) {
            if (preg_match('/^(Why|How|What|When|Where)\b/i', $label)) return $text;
            $value = $this->applyAgriculturePhraseRules($value);
            $value = $this->fixAgricultureKnownNames($value);
            return $label . ': ' . $value;
        }
        $labelValues = [
            'Main Use: Green fodder, hay, silage, livestock feed' => 'اہم استعمال: سبز چارہ، خشک گھاس، سائیلج اور مویشیوں کی خوراک۔',
            'Main Use: Food, Fodder, Animal Feed, Industrial Uses' => 'اہم استعمال: انسانی خوراک، چارہ، جانوروں کی خوراک اور صنعتی استعمال۔',
            'Main Use: Human food, animal feed, fodder' => 'اہم استعمال: انسانی خوراک، جانوروں کی خوراک اور چارہ۔',
            'Ploughing: Deep ploughing to loosen soil' => 'ہل چلانا: مٹی کو نرم کرنے اور جڑوں کی نشوونما کے لیے گہرا ہل چلایا جاتا ہے۔',
            'Harrowing: Breaks soil clods' => 'سہاگہ چلانا: مٹی کے ڈھیلے توڑتا ہے۔',
            'Leveling: Ensures uniform moisture distribution' => 'ہموار کرنا: نمی کی یکساں تقسیم یقینی بناتا ہے۔',
            'Weed Control: Reduces competition' => 'جڑی بوٹیوں کا تدارک: پودوں کے درمیان مقابلہ کم کرتا ہے۔',
            'Characteristics of Good Seed: High germination rate' => 'اچھے بیج کی خصوصیات: انکرن کی شرح زیادہ ہو۔',
            'Characteristics of Good Seed: Disease-free' => 'اچھے بیج کی خصوصیات: بیماری سے پاک ہو۔',
            'Characteristics of Good Seed: Certified or hybrid seed' => 'اچھے بیج کی خصوصیات: مصدقہ یا دوغلی قسم کا بیج ہو۔',
            'Characteristics of Good Seed: Uniform grain size' => 'اچھے بیج کی خصوصیات: دانوں کا سائز یکساں ہو۔',
            'Vegetative Stage: Moderate moisture needed' => 'نباتاتی مرحلہ: درمیانی مقدار میں نمی درکار ہوتی ہے۔',
            'Maturity Stage: Controlled irrigation' => 'پختگی کا مرحلہ: آبپاشی کو قابو میں رکھیں۔',
            'Vitamin C: Very high immunity booster' => 'وٹامن سی: قوتِ مدافعت بڑھانے میں بہت مؤثر۔',
            'Potassium (K): Pod formation and seed quality' => 'پوٹاشیم: پھلیوں کی تشکیل اور بیج کا معیار۔',
            'Potassium (K): Improves seed quality' => 'پوٹاشیم: بیج کا معیار بہتر کرتا ہے۔',
            'Antioxidants: Help control blood sugar' => 'اینٹی آکسیڈنٹس: خون میں شکر کی مقدار کو قابو کرنے میں مدد دیتے ہیں۔',
            'Boll Formation Stage: Adequate moisture required' => 'ٹینڈے بننے کا مرحلہ: مناسب مقدار میں نمی درکار ہوتی ہے۔',
            'Mid Season Varieties: Balanced growth and yield' => 'درمیانی موسم کی اقسام: متوازن نشوونما اور پیداوار۔',
        ];
        if (isset($labelValues[$text])) return $labelValues[$text];
        $labelValueExact = [
            'Vitamin C' => 'وٹامن سی: قوتِ مدافعت بڑھانے میں بہت مؤثر۔',
            'Potassium (K)' => match (strtolower($value)) {
                'pod formation and seed quality' => 'پوٹاشیم: پھلیوں کی تشکیل اور بیج کا معیار۔',
                'improves seed quality' => 'پوٹاشیم: بیج کا معیار بہتر کرتا ہے۔',
                default => null,
            },
            'Antioxidants' => match (strtolower($value)) {
                'help control blood sugar' => 'اینٹی آکسیڈنٹس: خون میں شکر کی مقدار کو قابو کرنے میں مدد دیتے ہیں۔',
                default => null,
            },
            'Nitrogen (N)' => match (strtolower($value)) {
                'leaf and stem growth' => 'نائٹروجن: پتوں اور تنوں کی نشوونما۔',
                'leaf growth' => 'نائٹروجن: پتوں کی نشوونما۔',
                'leaf and plant growth' => 'نائٹروجن: پتوں اور پودے کی نشوونما۔',
                default => null,
            },
            'Phosphorus (P)' => match (strtolower($value)) {
                'root development' => 'فاسفورس: جڑوں کی نشوونما۔',
                'root and flower development' => 'فاسفورس: جڑوں اور پھولوں کی نشوونما۔',
                'root development and flowering' => 'فاسفورس: جڑوں کی نشوونما اور پھول آنے میں مدد۔',
                default => null,
            },
            'Vegetative Stage' => match (strtolower($value)) {
                'moderate moisture needed' => 'نباتاتی مرحلہ: درمیانی مقدار میں نمی درکار ہوتی ہے۔',
                default => null,
            },
            'Maturity Stage' => match (strtolower($value)) {
                'controlled irrigation' => 'پختگی کا مرحلہ: آبپاشی کو قابو میں رکھیں۔',
                default => null,
            },
        ];
        if (array_key_exists($label, $labelValueExact) && $labelValueExact[$label] !== null) return $labelValueExact[$label];
        if (strcasecmp($label, 'Scientific Name') === 0) {
            return $labels[$label] . ': ' . $value;
        }
        $listTerms = [
            'Green fodder' => 'سبز چارہ', 'hay' => 'خشک گھاس', 'silage' => 'سائیلج', 'livestock feed' => 'مویشیوں کی خوراک',
            'Food' => 'انسانی خوراک', 'Fodder' => 'چارہ', 'Animal Feed' => 'جانوروں کی خوراک', 'Industrial Uses' => 'صنعتی استعمال',
            'Human food' => 'انسانی خوراک', 'Animal feed' => 'جانوروں کی خوراک', 'Syrup' => 'شربت', 'Biofuel production' => 'حیاتی ایندھن کی پیداوار',
            'Sandy loam' => 'ریتیلی دومی مٹی', 'Loamy soil' => 'دومی مٹی', 'Sandy loam soil' => 'ریتیلی دومی مٹی',
            'Well-drained soil' => 'اچھی نکاسی والی مٹی', 'Well-drained fertile soil' => 'زرخیز اور اچھی نکاسی والی مٹی',
            'Punjab' => 'پنجاب', 'Sindh' => 'سندھ', 'KPK' => 'خیبر پختونخوا', 'Balochistan' => 'بلوچستان',
        ];
        if (str_contains($value, ',')) {
            $items = preg_split('/\s*,\s*/u', $value, -1, PREG_SPLIT_NO_EMPTY);
            if ($items) {
                $mapped = [];
                foreach ($items as $item) {
                    $key = trim($item);
                    $mapped[] = $listTerms[$key] ?? $this->applyAgriculturePhraseRules($key);
                }
                $value = implode('، ', $mapped);
            }
        } else {
            $value = $this->applyAgriculturePhraseRules($value);
        }
        $value = $this->fixAgricultureKnownNames($value);
        $value = preg_replace('/\b(Kharif)\b/iu', 'خریف', $value) ?? $value;
        $value = preg_replace('/\b(Rabi)\b/iu', 'ربیع', $value) ?? $value;
        $value = preg_replace('/\b(Summer)\b/iu', 'موسم گرما', $value) ?? $value;
        $value = preg_replace('/\b(Winter)\b/iu', 'موسم سرما', $value) ?? $value;
        $value = preg_replace('/\b(Spring)\b/iu', 'بہار', $value) ?? $value;
        $value = preg_replace('/\b(Monsoon)\b/iu', 'برسات', $value) ?? $value;
        $value = preg_replace('/\b(May)\b/iu', 'مئی', $value) ?? $value;
        $value = preg_replace('/\b(June)\b/iu', 'جون', $value) ?? $value;
        $value = preg_replace('/\b(July)\b/iu', 'جولائی', $value) ?? $value;
        $value = preg_replace('/\b(April)\b/iu', 'اپریل', $value) ?? $value;
        $value = preg_replace('/\b(February)\b/iu', 'فروری', $value) ?? $value;
        $value = preg_replace('/\b(March)\b/iu', 'مارچ', $value) ?? $value;
        $value = preg_replace('/\b(August)\b/iu', 'اگست', $value) ?? $value;
        $value = preg_replace('/\b(September)\b/iu', 'ستمبر', $value) ?? $value;
        $value = preg_replace('/\b(October)\b/iu', 'اکتوبر', $value) ?? $value;
        $value = preg_replace('/\b(November)\b/iu', 'نومبر', $value) ?? $value;
        $value = preg_replace('/\b(December)\b/iu', 'دسمبر', $value) ?? $value;
        $value = preg_replace('/\b(High)\b/iu', 'زیادہ', $value) ?? $value;
        $value = preg_replace('/\b(Moderate)\b/iu', 'درمیانہ', $value) ?? $value;
        $value = preg_replace('/\b(Low)\b/iu', 'کم', $value) ?? $value;
        $value = preg_replace('/\b(°C)\b/iu', '°سینٹی گریڈ', $value) ?? $value;
        return $labels[$label] . ': ' . $value;
    }

    private function fixAgricultureKnownNames(string $text): string
    {
        $names = [
            'Maize (Corn)' => 'مکئی', 'Maize' => 'مکئی', 'Corn' => 'مکئی',
            'Rice' => 'چاول', 'Cotton' => 'کپاس', 'Sugarcane' => 'گنا', 'Sorghum' => 'جوار',
            'Pearl Millet' => 'باجرا', 'Wheat' => 'گندم', 'Barley' => 'جو', 'Linseed' => 'السی',
            'Pink Bollworm' => 'گلابی سنڈی', 'American Bollworm' => 'امریکی سنڈی', 'Spotted Bollworm' => 'چتکبری سنڈی', 'Cutworm' => 'زمین کاٹنے والی سنڈی', 'Armyworm' => 'فوجی سنڈی', 'Stem Borer' => 'تنے کی سنڈی', 'Shoot Borer' => 'شگوفہ چھیدنے والی سنڈی', 'Pod Borer' => 'پھلی کی سنڈی', 'Fruit Borer' => 'پھل کی سنڈی', 'Fruit Fly' => 'پھل کی مکھی', 'Whitefly' => 'سفید مکھی', 'Aphids' => 'تیلے', 'Jassid' => 'سبز تیلا',
            'Bottle Gourd' => 'لوکی', 'Okra' => 'بھنڈی', 'Lady Finger' => 'بھنڈی', 'Bhindi' => 'بھنڈی',
            'Tomato' => 'ٹماٹر', 'Tomatoes' => 'ٹماٹر', 'Pumpkin' => 'کدو', 'Bitter Gourd' => 'کریلا',
            'Turmeric' => 'ہلدی', 'Cucumber' => 'کھیرا', 'Eggplant' => 'بینگن', 'Brinjal' => 'بینگن',
            'Chilli' => 'مرچ', 'Chillies' => 'مرچ', 'Arum' => 'اروی', 'Ginger' => 'ادرک', 'Potato' => 'آلو',
            'Spinach' => 'پالک', 'Pea' => 'مٹر', 'Carrot' => 'گاجر', 'Onion' => 'پیاز',
            'Cauliflower' => 'پھول گوبھی', 'Cabbage' => 'بند گوبھی', 'Radish' => 'مولی', 'Bean' => 'لوبیا',
            'Lettuce' => 'سلاد پتہ', 'Garlic' => 'لہسن', 'Beetroot' => 'چقندر', 'Turnip' => 'شلجم',
            'Coriander' => 'دھنیا', 'Mint' => 'پودینہ', 'Fennel' => 'سونف', 'Banana' => 'کیلا', 'Mango' => 'آم',
            'Lychee' => 'لیچی', 'Watermelon' => 'تربوز', 'Melon' => 'خربوزہ', 'Guava' => 'امرود',
            'Papaya' => 'پپیتا', 'Peach' => 'آڑو', 'Orange' => 'مالٹا', 'Oranges' => 'مالٹے', 'Kinnow' => 'کینو',
            'Lemon' => 'لیموں', 'Grapefruit' => 'چکوترا', 'Sweet Lime' => 'میٹھا لیموں', 'Pomegranate' => 'انار',
            'Apple' => 'سیب', 'Apples' => 'سیب', 'Date' => 'کھجور', 'Dates' => 'کھجور', 'Mung' => 'مونگ',
            'Mung bean' => 'مونگ', 'Soybean' => 'سویا بین', 'Groundnut' => 'مونگ پھلی', 'Mustard' => 'سرسوں',
            'Rapeseed' => 'رائی', 'Canola' => 'کینولا', 'Lucerne' => 'لوسرن', 'Fenugreek' => 'میتھی',
            'Sunflower' => 'سورج مکھی', 'Isabgol' => 'اسپغول', 'Whitefly' => 'سفید مکھی', 'Whiteflies' => 'سفید مکھیاں',
            'Aphids' => 'تیلے', 'Jassid' => 'سبز تیلا', 'Thrips' => 'رس چوسنے والے تھرپس', 'Powdery Mildew' => 'سفوفی پھپھوندی کی بیماری',
            'Insect Pest' => 'حشری کیڑا', 'Fungal Disease' => 'فنگسی بیماری', 'Bacterial Disease' => 'بیکٹیریائی بیماری', 'Viral Disease' => 'وائرسی بیماری',
            'Tobacco Caterpillar' => 'تمباکو کی سنڈی', 'Spodoptera' => 'اسپوڈوپٹیرا', 'Black Shank' => 'سیاہ شاخ کی بیماری',
            'Damping Off' => 'ننھے پودوں کے گلنے کی بیماری', 'Tobacco Mosaic Virus' => 'تمباکو موزیک وائرس', 'TMV' => 'تمباکو موزیک وائرس',
            'Root Rot' => 'جڑوں کے سڑنے کی بیماری', 'Leaf Spot' => 'پتوں کے دھبے کی بیماری', 'Armyworm' => 'فوجی سنڈی', 'Leafhopper' => 'پتہ چھلانگنے والا کیڑا',
            'Cutworm' => 'زمین کے قریب پودے کاٹنے والی سنڈی', 'Rust Disease' => 'زنگ کی بیماری', 'Rust' => 'زنگ کی بیماری', 'Anthracnose' => 'اینتھراکنوز کی بیماری',
            'Leaf Miner' => 'پتوں میں سرنگیں بنانے والا کیڑا', 'Downy Mildew' => 'زغالی پھپھوندی', 'Potato Tuber Moth' => 'آلو کا گٹھا کیڑا',
            'Late Blight' => 'پچھیتی جھلساؤ کی بیماری', 'Early Blight' => 'ابتدائی جھلساؤ کی بیماری', 'Black Scurf' => 'سیاہ کھرنڈ کی بیماری',
            'Common Scab' => 'عام کھرنڈ کی بیماری', 'Potato Virus Y' => 'آلو وائرس وائی', 'Ascochyta Blight' => 'اسکوکائٹا جھلساؤ',
        ];
        uksort($names, fn($a,$b)=>strlen($b)<=>strlen($a));
        foreach ($names as $en=>$ur) {
            $text = preg_replace('/(?<![A-Za-z])' . preg_quote($en,'/') . '(?![A-Za-z])/iu', $ur, $text) ?? $text;
        }
        $cleanup = [
            'حشرہ Pest' => 'حشری کیڑا',
            'Tobacco سنڈی' => 'تمباکو کی سنڈی',
            'مٹی insecticides' => 'مٹی کے لیے کیڑے مار ادویات',
            'maintain hygiene' => 'صفائی برقرار رکھیں',
            'control vectors' => 'بیماری پھیلانے والے کیڑوں کا تدارک',
            'treatment' => 'علاج',
            'insecticides' => 'کیڑے مار ادویات',
            'fungicides' => 'پھپھوندی کش ادویات',
            'bactericides' => 'جراثیم کش ادویات',
            'soil insecticides' => 'مٹی کے لیے کیڑے مار ادویات',
        ];
        uksort($cleanup, fn($a,$b)=>strlen($b)<=>strlen($a));
        foreach ($cleanup as $en=>$ur) $text = str_replace($en, $ur, $text);
        return $text;
    }

    public function hasPhoneticGarbage(string $text): bool
    {
        $bad = [
            'فارمینگ','فارمنگ','اففیکٹینگ','افیکٹنگ','پریوینشن','پریونشن',
            'کناولیڈج','کناولیج','ینسیغٹس','ینٹیللیگینٹ','ٹگیتھر','سیمپلی',
            'یکسپلوری','کوممونلی','اباوٹ','وسیفول','ڈیکیژنس','یسسینٹیال',
            'برینگس','ونی سیمپلی','پلیٹفورم','مینیجمنٹ','رےنفیڈ','لیمیٹیڈ','فارمینگ','اففیکٹینگ','پریوینشن','ریگیون','سیزی','سٹیلل','فیرم','ریپلی','پریوڈس','پریفر','بالانکی','پیٹس','ساپلینگس','ریموویس','ونوانٹیڈ','بوڈی','پینک','ٹرانسپورٹاشن','مارکیٹینگ','کوب','فرٹیلیزاشن','پونگینکی','اپپلیکاشن','ٹیکسچر','ٹرنیپس','کرلنگ','سپریاڈینگ','کریٹیکال','ٹاسسیلینگ','یرری','سریاموخی','وینٹرس','سیٹینگ','فنگس','پریوینشن'
        ];
        foreach ($bad as $word) {
            if (strpos($text, $word) !== false) return true;
        }
        return false;
    }

    private function applyAgricultureSentenceRules(string $text): string
    {
        $rules = [
            '/^Why (.+?) is Sown in Summer:$/iu' => '$1 کو موسم گرما میں کیوں بویا جاتا ہے:',
            '/^Why (.+?) is Sown in Spring:$/iu' => '$1 کو موسم بہار میں کیوں بویا جاتا ہے:',
            '/^Why (.+?) is Sown in Winter:$/iu' => '$1 کو موسم سرما میں کیوں بویا جاتا ہے:',
            '/^Why (.+?) is Planted in Spring:$/iu' => '$1 کو موسم بہار میں کیوں لگایا جاتا ہے:',
            '/^Why (.+?) is Planted in Winter:$/iu' => '$1 کو موسم سرما میں کیوں لگایا جاتا ہے:',
            '/^Why (.+?) is Sown in This Season:$/iu' => '$1 کو اس موسم میں کیوں بویا جاتا ہے:',
            '/^Why (.+?) is Harvested at This Time:$/iu' => '$1 کی کٹائی اس وقت کیوں کی جاتی ہے:',
            '/^Why (.+?) is Harvested in Summer:$/iu' => '$1 کی کٹائی موسم گرما میں کیوں کی جاتی ہے:',
            '/^Why (.+?) is Harvested Early:$/iu' => '$1 کی جلد کٹائی کیوں کی جاتی ہے:',
            '/^Why (.+?) is Harvested Frequently:$/iu' => '$1 کی بار بار کٹائی کیوں کی جاتی ہے:',
            '/^(.+?) requires warm soil temperatures for seed germination and early growth\.$/iu' => '$1 کے بیج کے انکرن اور ابتدائی نشوونما کے لیے گرم مٹی ضروری ہے۔',
            '/^(.+?) requires warm temperatures for germination and growth\.$/iu' => '$1 کے انکرن اور نشوونما کے لیے گرم درجہ حرارت ضروری ہے۔',
            '/^(.+?) requires cool temperatures for proper germination and vegetative growth\.$/iu' => '$1 کے مناسب انکرن اور نباتاتی نشوونما کے لیے ٹھنڈا درجہ حرارت ضروری ہے۔',
            '/^(.+?) requires warm temperatures for sprouting and long growing periods\.$/iu' => '$1 کے پھوٹنے اور طویل مدت تک نشوونما کے لیے گرم درجہ حرارت ضروری ہے۔',
            '/^(.+?) requires warm and humid conditions for proper sprouting\.$/iu' => '$1 کے مناسب پھوٹنے کے لیے گرم اور مرطوب حالات ضروری ہیں۔',
            '/^(.+?) requires warm and humid conditions for good germination\.$/iu' => '$1 کے اچھے انکرن کے لیے گرم اور مرطوب حالات ضروری ہیں۔',
            '/^(.+?) requires moderate irrigation and is sensitive to both drought and waterlogging\.$/iu' => '$1 کو معتدل آبپاشی درکار ہوتی ہے اور یہ خشک سالی اور پانی کے جمع ہونے دونوں کے لیے حساس ہے۔',
            '/^(.+?) is drought-tolerant but timely irrigation improves production\.$/iu' => '$1 خشک سالی برداشت کر لیتا ہے، لیکن بروقت آبپاشی سے پیداوار بہتر ہوتی ہے۔',
            '/^Proper maturity improves juice content, taste, and market quality\.$/iu' => 'مناسب پختگی سے رس کی مقدار، ذائقہ اور منڈی کا معیار بہتر ہوتا ہے۔',
            '/^Timely harvesting also increases shelf life and market value\.$/iu' => 'بروقت کٹائی سے محفوظ رہنے کی مدت اور منڈی میں قدر بھی بڑھتی ہے۔',
            '/^Fruits are picked when they are green, tender, and still immature for better taste and market value\.$/iu' => 'بہتر ذائقے اور منڈی قیمت کے لیے پھل اس وقت توڑے جاتے ہیں جب وہ سبز، نرم اور ابھی پوری طرح پکے نہ ہوں۔',
            '/^Cool and dry weather helps produce high-quality pods and reduces disease problems during harvesting\.$/iu' => 'ٹھنڈا اور خشک موسم اعلیٰ معیار کی پھلیاں پیدا کرنے اور کٹائی کے دوران بیماریوں کے مسائل کم کرنے میں مدد دیتا ہے۔',
            '/^Farmers prefer early summer for sowing so the crop can use warm temperatures for proper germination and growth\.$/iu' => 'کسان بوائی کے لیے گرمیوں کے ابتدائی موسم کو ترجیح دیتے ہیں تاکہ گرم درجہ حرارت فصل کے بہتر انکرن اور نشوونما میں مدد دے سکے.',
            '/^Farmers prefer early spring when the temperature starts rising, which supports seed germination and vine growth\.$/iu' => 'کسان موسم بہار کے ابتدائی دنوں کو ترجیح دیتے ہیں کیونکہ بڑھتا ہوا درجہ حرارت بیج کے انکرن اور بیل کی نشوونما کے لیے سازگار ہوتا ہے۔',
            '/^Farmers prefer early spring when temperatures start rising, which helps in fast seed germination and healthy vine growth\.$/iu' => 'کسان موسم بہار کے ابتدائی دنوں کو ترجیح دیتے ہیں کیونکہ بڑھتا ہوا درجہ حرارت تیز انکرن اور بیل کی صحت مند نشوونما میں مدد دیتا ہے۔',
            '/^Farmers prefer cool weather conditions after the monsoon season for better germination and early plant growth\.$/iu' => 'کسان برسات کے موسم کے بعد ٹھنڈے موسمی حالات کو ترجیح دیتے ہیں تاکہ انکرن بہتر ہو اور پودوں کی ابتدائی نشوونما اچھی رہے۔',
            '/^Farmers prefer cool winter conditions for better germination and early growth\.$/iu' => 'کسان بہتر انکرن اور ابتدائی نشوونما کے لیے سردیوں کے ٹھنڈے موسم کو ترجیح دیتے ہیں۔',
            '/^Farmers prefer warm weather for seed germination and early plant development\.$/iu' => 'کسان بیج کے انکرن اور پودوں کی ابتدائی نشوونما کے لیے گرم موسم کو ترجیح دیتے ہیں۔',
            '/^Farmers prepare land after the monsoon season when soil moisture is suitable for germination\.$/iu' => 'کسان برسات کے موسم کے بعد اس وقت زمین تیار کرتے ہیں جب مٹی میں انکرن کے لیے مناسب نمی موجود ہو۔',
            '/^Early sowing helps the crop complete its growth cycle before winter\.$/iu' => 'جلد بوائی سے فصل سردیوں سے پہلے اپنی نشوونما کا دور مکمل کر لیتی ہے۔',
            '/^Early planting helps the crop grow for a longer period and increases sugar content\.$/iu' => 'جلد کاشت سے فصل کو زیادہ عرصے تک نشوونما کا موقع ملتا ہے اور اس میں چینی کی مقدار بڑھتی ہے۔',
            '/^Warm soil conditions support rapid germination, strong vine development, and better fruit setting\.$/iu' => 'گرم مٹی تیز انکرن، بیل کی مضبوط نشوونما اور بہتر پھل بننے کے عمل کے لیے سازگار ہوتی ہے۔',
            '/^Summer conditions support better flowering and pod development\.$/iu' => 'موسم گرما کے حالات بہتر پھول آنے اور پھلیاں بننے کے لیے سازگار ہوتے ہیں۔',
            '/^Winter conditions help reduce pest attacks and support better flowering and seed formation\.$/iu' => 'سردیوں کے حالات کیڑوں کے حملے کم کرنے اور بہتر پھول آنے اور بیج بننے کے عمل میں مدد دیتے ہیں۔',
            '/^Winter conditions support healthy flowering and reduce pest and disease pressure\.$/iu' => 'سردیوں کے حالات صحت مند پھول آنے میں مدد دیتے ہیں اور کیڑوں اور بیماریوں کے دباؤ کو کم کرتے ہیں۔',
            '/^Winter conditions support strong vegetative growth and reduce pest pressure\.$/iu' => 'سردیوں کے حالات نباتاتی نشوونما مضبوط بنانے اور کیڑوں کے دباؤ کو کم کرنے میں مدد دیتے ہیں۔',
            '/^Summer provides ideal heat and sunlight for healthy plant development and better fiber quality\.$/iu' => 'موسم گرما صحت مند پودوں کی نشوونما اور بہتر ریشے کے معیار کے لیے مناسب گرمی اور دھوپ فراہم کرتا ہے۔',
            '/^Spring season provides ideal conditions for strong cane growth and high sugar accumulation\.$/iu' => 'موسم بہار گنے کی مضبوط نشوونما اور زیادہ چینی جمع ہونے کے لیے موزوں حالات فراہم کرتا ہے۔',
            '/^Both spring and monsoon seasons provide suitable conditions for healthy crop development\.$/iu' => 'بہار اور برسات دونوں موسم فصل کی صحت مند نشوونما کے لیے موزوں حالات فراہم کرتے ہیں۔',
            '/^It grows best in warm weather and cannot tolerate frost or very cold conditions\.$/iu' => 'یہ گرم موسم میں بہترین نشوونما پاتی ہے اور پالا یا بہت زیادہ سرد حالات برداشت نہیں کر سکتی۔',
            '/^Cool weather helps reduce transplant shock and allows strong root development before spring growth starts\.$/iu' => 'ٹھنڈا موسم پودے منتقل کرنے کے صدمے کو کم کرتا ہے اور بہار کی نشوونما شروع ہونے سے پہلے جڑوں کی مضبوط نشوونما میں مدد دیتا ہے۔',
            '/^At maturity, dry spring weather helps pods open naturally and reduces seed moisture, improving oil quality and storage life\.$/iu' => 'پختگی کے وقت خشک بہاری موسم پھلیوں کو قدرتی طور پر کھلنے میں مدد دیتا ہے اور بیجوں کی نمی کم کرتا ہے، جس سے تیل کا معیار اور ذخیرہ کرنے کی مدت بہتر ہوتی ہے۔',
            '/^Early harvesting ensures soft texture, better taste, and higher market value\.$/iu' => 'جلد کٹائی سے نرم ساخت، بہتر ذائقہ اور زیادہ منڈی قیمت حاصل ہوتی ہے۔',
            '/^Regular picking encourages new fruit growth and increases total yield\.$/iu' => 'باقاعدگی سے پھل توڑنے سے نئے پھل بننے کی حوصلہ افزائی ہوتی ہے اور مجموعی پیداوار بڑھتی ہے۔',
            '/^Frequent cutting encourages new shoot growth, increases total fodder yield, and maintains high nutritional value for livestock feed\.$/iu' => 'بار بار کٹائی سے نئی شاخوں کی نشوونما ہوتی ہے، کل چارے کی پیداوار بڑھتی ہے اور مویشیوں کے لیے غذائی قدر برقرار رہتی ہے۔',
            '/^(.+?) is usually planted in (.+?) in Pakistan\. (.+?)$/iu' => '$1 کو پاکستان میں عام طور پر $2 میں لگایا جاتا ہے۔ $3',
            '/^(.+?) is usually sown from (.+?) in Pakistan\. (.+?)$/iu' => '$1 کی پاکستان میں عام طور پر $2 کے دوران بوائی کی جاتی ہے۔ $3',
            '/^(.+?) is usually sown in (.+?) in Pakistan\. (.+?)$/iu' => '$1 کو پاکستان میں عام طور پر $2 میں بویا جاتا ہے۔ $3',
            '/^(.+?) is usually planted in (.+?) and again in (.+?)\. (.+?)$/iu' => '$1 کو عام طور پر $2 میں لگایا جاتا ہے اور دوبارہ $3 میں بھی لگایا جاتا ہے۔ $4',
            '/^(.+?) requires (.+?) for germination and early growth\. (.+?) provide (.+?) for healthy crop development\.$/iu' => '$1 کے انکرن اور ابتدائی نشوونما کے لیے $2 ضروری ہے۔ $3 فصل کی صحت مند نشوونما کے لیے $4 فراہم کرتا ہے۔',
            '/^(.+?) requires (.+?) for proper germination and growth\. (.+?) help (.+?)\.$/iu' => '$1 کے مناسب انکرن اور نشوونما کے لیے $2 ضروری ہے۔ $3 $4 میں مدد دیتے ہیں۔',
            '/^(.+?) requires (.+?) for germination\. (.+?) help in early growth and improve plant establishment\.$/iu' => '$1 کے انکرن کے لیے $2 ضروری ہے۔ $3 ابتدائی نشوونما اور پودے کے مضبوط قیام میں مدد دیتے ہیں۔',
            '/^(.+?) is harvested (.+?) after sowing\. (.+?)$/iu' => '$1 کی کٹائی بیجائی کے $2 بعد کی جاتی ہے۔ $3',
            '/^(.+?) is harvested from (.+?) depending on (.+?)\. (.+?)$/iu' => '$1 کی کٹائی $2 کے دوران $3 کے مطابق کی جاتی ہے۔ $4',
            '/^(.+?) are harvested from (.+?) depending on (.+?)\. (.+?)$/iu' => '$1 کی کٹائی $2 کے دوران $3 کے مطابق کی جاتی ہے۔ $4',
            '/^(.+?) is harvested after (.+?), depending on (.+?)\. (.+?)$/iu' => '$1 کی کٹائی $2 کے بعد $3 کے مطابق کی جاتی ہے۔ $4',
            '/^Why (.+?) is Sown in These Seasons:$/iu' => '$1 کو ان موسموں میں کیوں بویا جاتا ہے:',
            '/^Why (.+?) is Planted in These Seasons:$/iu' => '$1 کو ان موسموں میں کیوں لگایا جاتا ہے:',
            '/^Why (.+?) is Harvested at This Time:$/iu' => '$1 کی کٹائی اس وقت کیوں کی جاتی ہے:',
            '/^Why (.+?) is Harvested in Summer:$/iu' => '$1 کی کٹائی موسم گرما میں کیوں کی جاتی ہے:',
            '/^Why (.+?) is Harvested Early:$/iu' => '$1 کی جلد کٹائی کیوں کی جاتی ہے:',
            '/^Why (.+?) is Harvested Frequently:$/iu' => '$1 کی بار بار کٹائی کیوں کی جاتی ہے:',
            '/^(.+?) grows best in warm climates with mild winters\. Proper temperature is important for (.+?)\.$/iu' => '$1 گرم آب و ہوا اور معتدل سردیوں والے علاقوں میں بہترین نشوونما پاتا ہے۔ $2 کے لیے مناسب درجہ حرارت ضروری ہے۔',
            '/^(.+?) grows best in cool climates and can tolerate frost better than many other crops\. Winter conditions support (.+?) and reduce (.+?)\.$/iu' => '$1 ٹھنڈی آب و ہوا میں بہترین نشوونما پاتا ہے اور بہت سی دوسری فصلوں کے مقابلے میں پالا بہتر برداشت کرتا ہے۔ سردیوں کے حالات $2 میں مدد دیتے ہیں اور $3 کم کرتے ہیں۔',
            '/^(.+?) is highly nutritious and provides (.+?)\.$/iu' => '$1 غذائیت سے بھرپور ہے اور $2 فراہم کرتا ہے۔',
            '/^(.+?) is an important cash crop in Pakistan and many tropical countries\.?$/iu' => '$1 پاکستان اور بہت سے گرم علاقوں کے ممالک میں ایک اہم نقد آور فصل ہے۔',
            '/^(.+?) is one of the most important cereal crops in Pakistan and around the world\.?$/iu' => '$1 پاکستان اور دنیا بھر کی اہم ترین اناج کی فصلوں میں سے ایک ہے۔',
            '/^(.+?) is an important cereal and fodder crop grown in (.+?) of Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک کے $2 میں اگائی جانے والی ایک اہم اناج اور چارہ فصل ہے۔',
            '/^(.+?) is an important cereal and fodder crop grown in (.+?) regions of Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک کے $2 علاقوں میں اگائی جانے والی ایک اہم اناج اور چارہ فصل ہے۔',
            '/^(.+?) is mainly grown for sugar production, but it is also used to produce (.+?), (.+?), and (.+?)\.?$/iu' => '$1 بنیادی طور پر چینی کی پیداوار کے لیے اگایا جاتا ہے، لیکن اس سے $2، $3 اور $4 بھی تیار کیے جاتے ہیں۔',
            '/^(.+?) is mainly cultivated for its seeds, which are used to extract edible oil\.?$/iu' => '$1 بنیادی طور پر اپنے بیجوں کے لیے کاشت کیا جاتا ہے، جن سے خوردنی تیل نکالا جاتا ہے۔',
            '/^(.+?) is widely used in (.+?), (.+?), and (.+?)\.?$/iu' => '$1 کو $2، $3 اور $4 میں بڑے پیمانے پر استعمال کیا جاتا ہے۔',
            '/^(.+?) is widely consumed as (.+?) and is rich in (.+?), making it an essential part of daily diet\.?$/iu' => '$1 کو $2 کے طور پر بڑے پیمانے پر استعمال کیا جاتا ہے اور یہ $3 سے بھرپور ہے، اس لیے روزمرہ خوراک کا اہم حصہ ہے۔',
            '/^(.+?) improves soil fertility by fixing nitrogen and is also beneficial for crop rotation systems in agriculture\.?$/iu' => '$1 نائٹروجن کے اخراج کے ذریعے مٹی کی زرخیزی بہتر کرتا ہے اور زرعی فصلوں کی گردش کے نظام کے لیے بھی مفید ہے۔',
            '/^(.+?) is highly drought-resistant and plays a vital role in ensuring food and fodder security in dry areas\.?$/iu' => '$1 خشک سالی کے خلاف بہت زیادہ مزاحمت رکھتا ہے اور خشک علاقوں میں خوراک اور چارے کے تحفظ میں اہم کردار ادا کرتا ہے۔',
            '/^It is commonly known as "(.+?)" in South Asia\.?$/iu' => 'جنوبی ایشیا میں اسے عام طور پر "$1" کہا جاتا ہے۔',
            '/^It is known for its (.+?) and (.+?)\.?$/iu' => 'یہ اپنی $1 اور $2 کے لیے مشہور ہے۔',
            '/^It is a popular (.+?) crop known for its (.+?)\.?$/iu' => 'یہ ایک مقبول $1 فصل ہے جو اپنی $2 کے لیے مشہور ہے۔',
            '/^(.+?) farming plays an important role in the agriculture economy because it provides income to farmers and supports export industries\.?$/iu' => '$1 کی کاشت زرعی معیشت میں اہم کردار ادا کرتی ہے کیونکہ اس سے کسانوں کو آمدنی حاصل ہوتی ہے اور برآمدی صنعتوں کو سہارا ملتا ہے۔',
            '/^(.+?) plays a major role in Pakistan’s economy by supporting farmers, industries, and exports\.?$/iu' => '$1 کسانوں، صنعتوں اور برآمدات کو سہارا دے کر پاکستان کی معیشت میں اہم کردار ادا کرتی ہے۔',
            '/^(.+?) plays a vital role in the agricultural economy by supporting sugar mills and providing income to farmers\.?$/iu' => '$1 چینی کی ملوں کو سہارا دے کر اور کسانوں کو آمدنی فراہم کرکے زرعی معیشت میں اہم کردار ادا کرتا ہے۔',
            '/^(.+?) is famous for producing high-quality (.+?)\.?$/iu' => '$1 اعلیٰ معیار کے $2 کی پیداوار کے لیے مشہور ہے۔',
            '/^(.+?) is mainly grown in warm and humid climates with sufficient water availability\.?$/iu' => '$1 بنیادی طور پر گرم اور مرطوب آب و ہوا میں وافر پانی کی دستیابی کے ساتھ اگایا جاتا ہے۔',
            '/^It is mainly grown for its fiber, which is used in the textile industry to produce clothes, fabrics, and other products\.?$/iu' => 'یہ بنیادی طور پر ریشے کے لیے اگائی جاتی ہے، جسے کپڑے، منسوجات اور دیگر مصنوعات بنانے کے لیے ٹیکسٹائل صنعت میں استعمال کیا جاتا ہے۔',
            '/^It is used both as human food and animal feed\.?$/iu' => 'یہ انسانی خوراک اور جانوروں کی خوراک دونوں کے طور پر استعمال ہوتی ہے۔',
            '/^It is also used to produce (.+?)\.?$/iu' => 'اس سے $1 بھی تیار کیا جاتا ہے۔',
            '/^It is used for human food, animal feed, and fodder purposes\.?$/iu' => 'یہ انسانی خوراک، جانوروں کی خوراک اور چارے کے لیے استعمال ہوتی ہے۔',
            '/^It is a highly drought-resistant crop and is mainly used as food for humans and fodder for livestock\.?$/iu' => 'یہ خشک سالی برداشت کرنے والی فصل ہے اور بنیادی طور پر انسانی خوراک اور مویشیوں کے چارے کے طور پر استعمال ہوتی ہے۔',
            '/^It is widely used in daily cooking due to its taste and nutritional value\.?$/iu' => 'یہ اپنے ذائقے اور غذائی قدر کی وجہ سے روزمرہ کھانا پکانے میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            '/^It is widely used in daily cooking due to its high nutritional value and easy digestibility\.?$/iu' => 'یہ اپنی زیادہ غذائی قدر اور آسان ہاضمے کی وجہ سے روزمرہ کھانا پکانے میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            '/^(.+?) is a fast-growing vegetable crop that provides good income to farmers and is highly demanded in local markets\.?$/iu' => '$1 تیزی سے بڑھنے والی سبزی کی فصل ہے جو کسانوں کو اچھی آمدنی فراہم کرتی ہے اور مقامی منڈیوں میں اس کی بہت زیادہ طلب ہے۔',
            '/^(.+?) is a fast-growing vine crop that provides quick income to farmers and is rich in vitamins and minerals\.?$/iu' => '$1 تیزی سے بڑھنے والی بیل دار فصل ہے جو کسانوں کو جلد آمدنی فراہم کرتی ہے اور وٹامنز اور معدنیات سے بھرپور ہے۔',
            '/^(.+?) provides good income to farmers due to high demand in local and international markets\.?$/iu' => '$1 کی مقامی اور بین الاقوامی منڈیوں میں زیادہ طلب کی وجہ سے کسانوں کو اچھی آمدنی حاصل ہوتی ہے۔',
            '/^(.+?) grows best in warm climates with proper sunlight and irrigation\.?$/iu' => '$1 مناسب دھوپ اور آبپاشی کے ساتھ گرم آب و ہوا میں بہترین نشوونما پاتا ہے۔',
            '/^(.+?) grows best in warm climates with moderate irrigation and fertile soil\.?$/iu' => '$1 معتدل آبپاشی اور زرخیز مٹی کے ساتھ گرم آب و ہوا میں بہترین نشوونما پاتا ہے۔',
            '/^(.+?) is rich in vitamins, minerals, and antioxidants which make it highly beneficial for health\.?$/iu' => '$1 وٹامنز، معدنیات اور اینٹی آکسیڈنٹس سے بھرپور ہے جو اسے صحت کے لیے بہت مفید بناتے ہیں۔',
            '/^(.+?) is widely consumed because of its sweet taste, refreshing juice, and high vitamin content\.?$/iu' => '$1 اپنے میٹھے ذائقے، تازہ دم کرنے والے رس اور وٹامنز کی زیادہ مقدار کی وجہ سے بڑے پیمانے پر استعمال کیا جاتا ہے۔',
            '/^(.+?) provides income to farmers and supports the fruit export industry\.?$/iu' => '$1 کسانوں کو آمدنی فراہم کرتا ہے اور پھلوں کی برآمدی صنعت کو سہارا دیتا ہے۔',
            '/^(.+?) is one of the largest producers and exporters of (.+?) in the world\.?$/iu' => '$1 دنیا میں $2 کے بڑے پیدا کنندگان اور برآمد کنندگان میں شامل ہے۔',
            '/^Linseed is an important oilseed crop grown in Pakistan and many other countries\.?$/iu' => 'السی پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم تیل دار بیج کی فصل ہے۔',
            '/^Linseed is mainly cultivated for its seeds which are used to produce linseed oil and animal feed\.?$/iu' => 'السی بنیادی طور پر اپنے بیجوں کے لیے کاشت کی جاتی ہے، جن سے السی کا تیل اور جانوروں کی خوراک تیار کی جاتی ہے۔',
            '/^Linseed seeds are rich in fiber, protein, and omega-3 fatty acids which are beneficial for human health\.?$/iu' => 'السی کے بیج فائبر، پروٹین اور اومیگا تھری چکنائی والے تیزابی اجزا سے بھرپور ہوتے ہیں جو انسانی صحت کے لیے مفید ہیں۔',
            '/^Linseed farming provides income to farmers and supports the oil industry\.?$/iu' => 'السی کی کاشت کسانوں کو آمدنی فراہم کرتی ہے اور تیل کی صنعت کو سہارا دیتی ہے۔',
            '/^The crop grows best in cool and dry climates with fertile well-drained soil\.?$/iu' => 'یہ فصل زرخیز اور اچھی نکاسی والی مٹی کے ساتھ ٹھنڈی اور خشک آب و ہوا میں بہترین نشوونما پاتی ہے۔',
            '/^Learn about common pests affecting (.+?), their symptoms, prevention methods and recommended control measures\.?$/iu' => '$1 کو متاثر کرنے والے عام کیڑوں، ان کی علامات، بچاؤ کے طریقوں اور تجویز کردہ تدارک کے اقدامات کے بارے میں معلومات حاصل کریں۔',
            '/^Identification, prevention and recommended control methods for (.+?)\.?$/iu' => '$1 کے کیڑوں کی شناخت، بچاؤ اور تجویز کردہ تدارک کے طریقوں کے بارے میں معلومات۔',
            '/^(.+?) Pest Management$/iu' => '$1 کے کیڑوں کا انتظام',
            '/^(.+?) Pest Information$/iu' => '$1 کے کیڑوں کی معلومات',
            '/^No Pest Information Available$/iu' => 'کیڑوں کے انتظام کی کوئی معلومات دستیاب نہیں۔',
            '/^There is currently no pest management information available for (.+?)\.?$/iu' => 'اس وقت $1 کے لیے کیڑوں کے انتظام کی کوئی معلومات دستیاب نہیں۔',
            '/^(.+?) is an important (.+?) crop grown in (.+?) and many other countries\.?$/iu' => '$1 $3 اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم $2 فصل ہے۔',
            '/^(.+?), commonly known as (.+?) or (.+?), is an important vegetable crop grown in (.+?) and many tropical and subtropical regions\.?$/iu' => '$1، جسے عام طور پر $2 یا $3 کہا جاتا ہے، $4 اور بہت سے گرم و نیم گرم علاقوں میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            '/^(.+?), commonly known as (.+?), is an important vegetable crop grown in (.+?) and many tropical and subtropical regions\.?$/iu' => '$1، جسے عام طور پر $2 کہا جاتا ہے، $3 اور بہت سے گرم و نیم گرم علاقوں میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            '/^(.+?) is an important vegetable crop grown in (.+?) and many tropical and subtropical regions\.?$/iu' => '$1 $2 اور بہت سے گرم و نیم گرم علاقوں میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            '/^(.+?) is an important vegetable crop grown in Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            '/^(.+?) is an important fruit crop grown in Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم پھل کی فصل ہے۔',
            '/^(.+?) is an important oilseed crop grown in Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک میں اگائی جانے والی ایک اہم تیل دار بیج کی فصل ہے۔',
            '/^(.+?) is mainly grown for (.+?) production, but it is also used to produce (.+?)\.?$/iu' => '$1 بنیادی طور پر $2 کی پیداوار کے لیے اگایا جاتا ہے، لیکن اس سے $3 بھی تیار کیے جاتے ہیں۔',
            '/^(.+?) is mainly cultivated for (.+?) which are widely used in (.+?)\.?$/iu' => '$1 بنیادی طور پر $2 کے لیے کاشت کیا جاتا ہے، جو $3 میں بڑے پیمانے پر استعمال ہوتے ہیں۔',
            '/^(.+?) grows best in (.+?) with (.+?)\.?$/iu' => '$1 $2 میں $3 کے ساتھ بہترین نشوونما پاتا ہے۔',
            '/^(.+?) grows best in (.+?) and requires (.+?)\.?$/iu' => '$1 $2 میں بہترین نشوونما پاتا ہے اور اسے $3 کی ضرورت ہوتی ہے۔',
            '/^(.+?) requires moderate irrigation but is sensitive to both drought and waterlogging\.?$/iu' => '$1 کو معتدل آبپاشی درکار ہوتی ہے لیکن یہ خشک سالی اور پانی کے جمع ہونے دونوں کے لیے حساس ہے۔',
            '/^(.+?) requires consistent moisture but does not tolerate waterlogging\.?$/iu' => '$1 کو مسلسل نمی درکار ہوتی ہے لیکن یہ پانی کے جمع ہونے کو برداشت نہیں کرتا۔',
            '/^(.+?) is harvested (.+?) after sowing depending on variety\.?$/iu' => '$1 کی کٹائی قسم کے مطابق بیجائی کے $2 بعد کی جاتی ہے۔',
            '/^(.+?) is harvested (.+?) after sowing and continues for several weeks\.?$/iu' => '$1 کی کٹائی بیجائی کے $2 بعد شروع ہوتی ہے اور کئی ہفتوں تک جاری رہتی ہے۔',
            '/^(.+?) is usually sown in (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 عام طور پر $2 میں بویا جاتا ہے۔',
            '/^(.+?) is usually sown from (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 عام طور پر $2 کے دوران بویا جاتا ہے۔',
            '/^Tiny white insects feed on leaf sap and spread quickly in hot weather\.?$/iu' => 'بہت چھوٹے سفید حشرات پتوں کا رس چوستے ہیں اور گرم موسم میں تیزی سے پھیلتے ہیں۔',
            '/^Small white insects suck sap from (.+?) and spread quickly in (.+?)\.?$/iu' => 'چھوٹے سفید حشرات $1 سے رس چوستے ہیں اور $2 میں تیزی سے پھیلتے ہیں۔',
            '/^Tiny insects suck sap from (.+?) in (.+?) conditions\.?$/iu' => 'بہت چھوٹے حشرات $1 سے رس چوستے ہیں، خصوصاً $2 حالات میں۔',
            '/^Very small insects suck juice from (.+?) in (.+?) weather\.?$/iu' => 'بہت چھوٹے حشرات $1 سے رس چوستے ہیں، خصوصاً $2 موسم میں۔',
            '/^Small insects suck sap from (.+?) and spread quickly in (.+?) weather\.?$/iu' => 'چھوٹے حشرات $1 سے رس چوستے ہیں اور $2 موسم میں تیزی سے پھیلتے ہیں۔',
            '/^Small insects suck sap from (.+?), especially in (.+?) weather\.?$/iu' => 'چھوٹے حشرات $1 سے رس چوستے ہیں، خصوصاً $2 موسم میں۔',
            '/^Small insects suck sap from (.+?) and stems, especially in (.+?) weather\.?$/iu' => 'چھوٹے حشرات $1 اور تنوں سے رس چوستے ہیں، خصوصاً $2 موسم میں۔',
            '/^Fungus attacks seedlings in nursery stage due to (.+?)\.?$/iu' => 'زیادہ $1 کی وجہ سے نرسری کے مرحلے میں پھپھوندی ننھے پودوں پر حملہ کرتی ہے۔',
            '/^Fungus attacks seedlings in wet soil conditions\.?$/iu' => 'پھپھوندی گیلی مٹی کے حالات میں ننھے پودوں پر حملہ کرتی ہے۔',
            '/^Fungus spreads in (.+?) and infected plant debris\.?$/iu' => 'پھپھوندی $1 اور متاثرہ پودوں کی باقیات کے ذریعے پھیلتی ہے۔',
            '/^Fungus spreads in (.+?) and infected plant debris\.?$/iu' => 'پھپھوندی $1 اور متاثرہ پودوں کی باقیات کے ذریعے پھیلتی ہے۔',
            '/^Fungus spreads through infected seeds and wet weather\.?$/iu' => 'پھپھوندی متاثرہ بیجوں اور نم موسم کے ذریعے پھیلتی ہے۔',
            '/^Fungus spreads through infected seeds and (.+?)\.?$/iu' => 'پھپھوندی متاثرہ بیجوں اور $1 کے ذریعے پھیلتی ہے۔',
            '/^Fungus spreads in (.+?) and (.+?) conditions\.?$/iu' => 'پھپھوندی $1 اور $2 حالات میں پھیلتی ہے۔',
            '/^Small insects suck sap from leaves and stems, especially in warm weather\.?$/iu' => 'چھوٹے حشرات پتوں اور تنوں سے رس چوستے ہیں، خصوصاً گرم موسم میں۔',
            '/^Small insects suck sap from young leaves and stems, especially in cool weather\.?$/iu' => 'چھوٹے حشرات نئے پتوں اور تنوں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Small insects suck sap from tender leaves and stems, especially in cool weather\.?$/iu' => 'چھوٹے حشرات نرم پتوں اور تنوں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Small insects suck sap from leaves and curds, especially in cool weather\.?$/iu' => 'چھوٹے حشرات پتوں اور گوبھی کے سروں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Small insects suck sap from leaves, especially in cool and dry weather\.?$/iu' => 'چھوٹے حشرات پتوں سے رس چوستے ہیں، خصوصاً ٹھنڈے اور خشک موسم میں۔',
            '/^Small insects suck sap from tender shoots and leaves, especially in cool weather\.?$/iu' => 'چھوٹے حشرات نرم شاخوں اور پتوں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Very small insects suck juice from leaves in dry and warm weather\.?$/iu' => 'بہت چھوٹے حشرات خشک اور گرم موسم میں پتوں سے رس چوستے ہیں۔',
            '/^Very small insects suck juice from leaves in dry weather\.?$/iu' => 'بہت چھوٹے حشرات خشک موسم میں پتوں سے رس چوستے ہیں۔',
            '/^Tiny insects suck sap from onion leaves, especially in hot and dry weather\.?$/iu' => 'بہت چھوٹے حشرات پیاز کے پتوں سے رس چوستے ہیں، خصوصاً گرم اور خشک موسم میں۔',
            '/^Larvae live in soil and cut young onion plants at base\.?$/iu' => 'سنڈیاں مٹی میں رہتی ہیں اور پیاز کے ننھے پودوں کو بنیاد کے قریب سے کاٹ دیتی ہیں۔',
            '/^Larvae live in soil and cut young plants at ground level at night\.?$/iu' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت ننھے پودوں کو زمین کی سطح کے قریب سے کاٹ دیتی ہیں۔',
            '/^Caterpillars feed inside pea pods and damage seeds\.?$/iu' => 'سنڈیاں مٹر کی پھلیوں کے اندر خوراک حاصل کرتی ہیں اور بیجوں کو نقصان پہنچاتی ہیں۔',
            '/^Fungus spreads through wind in humid weather\.?$/iu' => 'پھپھوندی مرطوب موسم میں ہوا کے ذریعے پھیلتی ہے۔',
            '/^Fungus spreads in wet and humid conditions\.?$/iu' => 'پھپھوندی نم اور مرطوب حالات میں پھیلتی ہے۔',
            '/^Fungus spreads in cool and wet conditions\.?$/iu' => 'پھپھوندی ٹھنڈے اور نم حالات میں پھیلتی ہے۔',
            '/^Fungus spreads in warm and humid conditions\.?$/iu' => 'پھپھوندی گرم اور مرطوب حالات میں پھیلتی ہے۔',
            '/^Fungus spreads in humid and wet conditions\.?$/iu' => 'پھپھوندی مرطوب اور نم حالات میں پھیلتی ہے۔',
            '/^Fungus spreads in cool and moist conditions\.?$/iu' => 'پھپھوندی ٹھنڈے اور نم حالات میں پھیلتی ہے۔',
            '/^Fungus grows in dry but cool weather on leaves\.?$/iu' => 'پھپھوندی خشک لیکن ٹھنڈے موسم میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows in dry but humid weather on leaves\.?$/iu' => 'پھپھوندی خشک لیکن مرطوب موسم میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows on leaves in cool and dry weather\.?$/iu' => 'پھپھوندی ٹھنڈے اور خشک موسم میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows on leaves in cool and humid weather\.?$/iu' => 'پھپھوندی ٹھنڈے اور مرطوب موسم میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows in cool and humid conditions\.?$/iu' => 'پھپھوندی ٹھنڈے اور مرطوب حالات میں نشوونما پاتی ہے۔',
            '/^Fungus grows in cool and humid weather\.?$/iu' => 'پھپھوندی ٹھنڈے اور مرطوب موسم میں نشوونما پاتی ہے۔',
            '/^Fungus grows in cool, humid conditions and spreads on leaves\.?$/iu' => 'پھپھوندی ٹھنڈے اور مرطوب حالات میں نشوونما پاتی ہے اور پتوں پر پھیلتی ہے۔',
            '/^Fungus infects base of onion bulb in warm soil\.?$/iu' => 'پھپھوندی گرم مٹی میں پیاز کی گانٹھ کی بنیاد کو متاثر کرتی ہے۔',
            '/^Yellow patches on leaves and white growth under leaves\.?$/iu' => 'پتوں پر زرد دھبے اور پتوں کے نیچے سفید پھپھوندی نما تہہ ظاہر ہوتی ہے۔',
            '/^Soil fungus attacks roots in wet or poorly drained soil\.?$/iu' => 'مٹی میں موجود پھپھوندی گیلی یا ناقص نکاسی والی مٹی میں جڑوں پر حملہ کرتی ہے۔',
            '/^Fungus spreads in (.+?) conditions\.?$/iu' => 'پھپھوندی $1 حالات میں پھیلتی ہے۔',
            '/^Fungus spreads fast in (.+?) weather\.?$/iu' => 'پھپھوندی $1 موسم میں تیزی سے پھیلتی ہے۔',
            '/^Fungus grows in (.+?) weather on leaves\.?$/iu' => 'پھپھوندی $1 موسم میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows on leaves in (.+?) conditions\.?$/iu' => 'پھپھوندی $1 حالات میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows in (.+?) conditions and spreads on leaves\.?$/iu' => 'پھپھوندی $1 حالات میں نشوونما پاتی ہے اور پتوں پر پھیلتی ہے۔',
            '/^Fungus grows in (.+?) and (.+?) weather\.?$/iu' => 'پھپھوندی $1 اور $2 موسم میں نشوونما پاتی ہے۔',
            '/^Fungus forms white powder-like growth on leaves in (.+?) weather\.?$/iu' => 'پھپھوندی $1 موسم میں پتوں پر سفید پاؤڈر جیسی تہہ بناتی ہے۔',
            '/^Soil fungus attacks roots in (.+?) soil\.?$/iu' => 'مٹی میں موجود پھپھوندی $1 مٹی میں جڑوں پر حملہ کرتی ہے۔',
            '/^Soil fungus infects potato tubers\.?$/iu' => 'مٹی میں موجود پھپھوندی آلو کے گٹھوں کو متاثر کرتی ہے۔',
            '/^Soil fungus infects roots and grows in acidic soil\.?$/iu' => 'مٹی میں موجود پھپھوندی جڑوں کو متاثر کرتی ہے اور تیزابی مٹی میں نشوونما پاتی ہے۔',
            '/^Soil fungus infects roots, especially in acidic soil\.?$/iu' => 'مٹی میں موجود پھپھوندی جڑوں کو متاثر کرتی ہے، خصوصاً تیزابی مٹی میں۔',
            '/^Soil fungus attacks roots and bulbs, survives in soil for many years\.?$/iu' => 'مٹی میں موجود پھپھوندی جڑوں اور گانٹھوں پر حملہ کرتی ہے اور کئی سال تک مٹی میں زندہ رہتی ہے۔',
            '/^Bacteria attack tubers in dry and alkaline soil\.?$/iu' => 'جراثیم خشک اور قلوی مٹی میں گٹھوں پر حملہ کرتے ہیں۔',
            '/^Bacteria enter through damaged roots in wet conditions\.?$/iu' => 'جراثیم گیلی حالت میں متاثرہ جڑوں کے ذریعے داخل ہوتے ہیں۔',
            '/^Bacteria enter through leaf edges and spread in warm, wet weather\.?$/iu' => 'جراثیم پتوں کے کناروں سے داخل ہوتے ہیں اور گرم، نم موسم میں پھیلتے ہیں۔',
            '/^Bacteria enter through leaf edges and spread in warm wet conditions\.?$/iu' => 'جراثیم پتوں کے کناروں سے داخل ہوتے ہیں اور گرم، نم حالات میں پھیلتے ہیں۔',
            '/^Bacteria spread through wind, rain, insects, and infected plant material\.?$/iu' => 'جراثیم ہوا، بارش، حشرات اور متاثرہ پودوں کے مواد کے ذریعے پھیلتے ہیں۔',
            '/^Spread through infected tools, hands, and plant contact\.?$/iu' => 'یہ متاثرہ اوزاروں، ہاتھوں اور پودوں کے باہمی رابطے کے ذریعے پھیلتا ہے۔',
            '/^Spread through infected seeds and wet weather\.?$/iu' => 'یہ متاثرہ بیجوں اور نم موسم کے ذریعے پھیلتا ہے۔',
            '/^Spread by aphids feeding on infected plants\.?$/iu' => 'یہ متاثرہ پودوں سے خوراک حاصل کرنے والے افڈز کے ذریعے پھیلتا ہے۔',
            '/^Moth lays eggs on leaves or stored potatoes; larvae bore into tubers\.?$/iu' => 'پتنگا پتوں یا ذخیرہ کیے گئے آلوؤں پر انڈے دیتا ہے؛ سنڈیاں گٹھوں کے اندر سوراخ کرتی ہیں۔',
            '/^Fly lays eggs in soil near roots; larvae feed on carrot roots\.?$/iu' => 'مکھی جڑوں کے قریب مٹی میں انڈے دیتی ہے؛ سنڈیاں گاجر کی جڑوں سے خوراک حاصل کرتی ہیں۔',
            '/^Flies lay eggs near onion roots; larvae damage roots and bulbs\.?$/iu' => 'مکھیاں پیاز کی جڑوں کے قریب انڈے دیتی ہیں؛ سنڈیاں جڑوں اور گانٹھوں کو نقصان پہنچاتی ہیں۔',
            '/^Flies lay eggs near roots; larvae damage radish roots\.?$/iu' => 'مکھیاں جڑوں کے قریب انڈے دیتی ہیں؛ سنڈیاں مولی کی جڑوں کو نقصان پہنچاتی ہیں۔',
            '/^Larvae enter inside leaves and make tunnels while feeding\.?$/iu' => 'سنڈیاں خوراک حاصل کرتے ہوئے پتوں کے اندر داخل ہوتی ہیں اور سرنگیں بناتی ہیں۔',
            '/^Larvae enter leaves and make tunnels inside\.?$/iu' => 'سنڈیاں پتوں میں داخل ہو کر اندر سرنگیں بناتی ہیں۔',
            '/^Larvae feed inside leaves and create tunnels\.?$/iu' => 'سنڈیاں پتوں کے اندر خوراک حاصل کرتی ہیں اور سرنگیں بناتی ہیں۔',
            '/^Larvae feed on leaves by making small holes and damage growing plants\.?$/iu' => 'سنڈیاں چھوٹے سوراخ بنا کر پتوں کو کھاتی ہیں اور بڑھتے ہوئے پودوں کو نقصان پہنچاتی ہیں۔',
            '/^Caterpillars eat leaves and sometimes damage the curd\.?$/iu' => 'سنڈیاں پتے کھاتی ہیں اور کبھی کبھار گوبھی کے سر کو نقصان پہنچاتی ہیں۔',
            '/^Green caterpillars eat leaves and sometimes damage the cabbage head\.?$/iu' => 'سبز سنڈیاں پتے کھاتی ہیں اور کبھی کبھار بند گوبھی کے سر کو نقصان پہنچاتی ہیں۔',
            '/^Larvae feed on cabbage leaves and make small holes\.?$/iu' => 'سنڈیاں بند گوبھی کے پتے کھاتی ہیں اور چھوٹے سوراخ بناتی ہیں۔',
            '/^Larvae feed inside pea pods and damage seeds\.?$/iu' => 'سنڈیاں مٹر کی پھلیوں کے اندر خوراک حاصل کرتی ہیں اور بیجوں کو نقصان پہنچاتی ہیں۔',
            '/^Small jumping beetles feed on young leaves and make tiny holes\.?$/iu' => 'چھوٹے اچھلنے والے بھونرے نئے پتوں سے خوراک حاصل کرتے ہیں اور ننھے سوراخ بناتے ہیں۔',
            '/^Large holes in leaves, plants look heavily damaged\.?$/iu' => 'پتوں میں بڑے سوراخ ہو جاتے ہیں اور پودے شدید متاثرہ دکھائی دیتے ہیں۔',
            '/^Leaves become silvery, curled, and dry at edges\.?$/iu' => 'پتے چاندی جیسے اور مڑے ہوئے ہو جاتے ہیں اور کناروں سے خشک ہونے لگتے ہیں۔',
            '/^Plants suddenly wilt, stem base turns black and rots\.?$/iu' => 'پودے اچانک مرجھا جاتے ہیں، تنے کی بنیاد سیاہ ہو جاتی ہے اور سڑنے لگتی ہے۔',
            '/^Small insects suck sap from young leaves and tender stems, especially in cool weather\.?$/iu' => 'چھوٹے حشرات نئے پتوں اور نرم تنوں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Small insects suck sap from tender leaves and stems, especially in cool weather\.?$/iu' => 'چھوٹے حشرات نرم پتوں اور تنوں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Fungus attacks seedlings in nursery stage due to excess moisture\.?$/iu' => 'ضرورت سے زیادہ نمی کی وجہ سے نرسری کے مرحلے میں پھپھوندی ننھے پودوں پر حملہ کرتی ہے۔',
            '/^Soil fungus attacks roots in waterlogged soil\.?$/iu' => 'مٹی میں موجود پھپھوندی پانی بھری مٹی میں جڑوں پر حملہ کرتی ہے۔',
            '/^Young plants fall over and die suddenly\.?$/iu' => 'نوجوان پودے اچانک گر جاتے ہیں اور جلد مر جاتے ہیں۔',
            '/^Leaves curl, turn yellow, and plants grow slowly\.?$/iu' => 'پتے مڑ جاتے ہیں، پیلے ہو جاتے ہیں اور پودوں کی نشوونما سست ہو جاتی ہے۔',
            '/^Young plants get cut at ground level and fall down suddenly\.?$/iu' => 'نوجوان پودے زمین کی سطح کے قریب سے کٹ کر اچانک گر جاتے ہیں۔',
            '/^Holes in potatoes, rotting inside, poor storage quality\.?$/iu' => 'آلوؤں میں سوراخ ہو جاتے ہیں، اندر سے سڑنے لگتے ہیں اور ذخیرہ کرنے کا معیار خراب ہو جاتا ہے۔',
            '/^Leaves turn yellow, sticky coating appears, plant weakens\.?$/iu' => 'پتے پیلے ہو جاتے ہیں، چپچپی تہہ ظاہر ہوتی ہے اور پودا کمزور ہو جاتا ہے۔',
            '/^Dark brown spots on leaves, leaves rot quickly, plant dies fast\.?$/iu' => 'پتوں پر گہرے بھورے دھبے بن جاتے ہیں، پتے جلد سڑتے ہیں اور پودا تیزی سے مر جاتا ہے۔',
            '/^Brown spots with rings on leaves, leaves dry early\.?$/iu' => 'پتوں پر حلقوں والے بھورے دھبے بن جاتے ہیں اور پتے جلد خشک ہو جاتے ہیں۔',
            '/^Black patches on potato skin, poor quality tubers\.?$/iu' => 'آلو کے چھلکے پر سیاہ دھبے بن جاتے ہیں اور گٹھوں کا معیار خراب ہو جاتا ہے۔',
            '/^Rough, brown patches on potato skin\.?$/iu' => 'آلو کے چھلکے پر کھردرے بھورے دھبے بن جاتے ہیں۔',
            '/^Leaves become curled, yellow, and plants stay weak\.?$/iu' => 'پتے مڑے ہوئے اور پیلے ہو جاتے ہیں اور پودے کمزور رہتے ہیں۔',
            '/^Leaves curl, become sticky, and plant growth becomes slow\.?$/iu' => 'پتے مڑ جاتے ہیں، چپچپے ہو جاتے ہیں اور پودے کی نشوونما سست ہو جاتی ہے۔',
            '/^White lines or paths inside leaves, leaves look damaged and weak\.?$/iu' => 'پتوں کے اندر سفید لکیریں یا راستے بن جاتے ہیں اور پتے متاثرہ اور کمزور دکھائی دیتے ہیں۔',
            '/^Young plants suddenly fall or get cut near soil surface\.?$/iu' => 'نوجوان پودے اچانک گر جاتے ہیں یا مٹی کی سطح کے قریب سے کٹ جاتے ہیں۔',
            '/^Yellow patches on upper leaf side and grey or white growth under leaves\.?$/iu' => 'پتوں کی اوپری سطح پر زرد دھبے اور نیچے سرمئی یا سفید تہہ ظاہر ہوتی ہے۔',
            '/^Small brown or black spots appear on leaves, leaves dry early\.?$/iu' => 'پتوں پر چھوٹے بھورے یا سیاہ دھبے ظاہر ہوتے ہیں اور پتے جلد خشک ہو جاتے ہیں۔',
            '/^Young seedlings fall over and die suddenly\.?$/iu' => 'نوجوان پنیری اچانک گر جاتی ہے اور مر جاتی ہے۔',
            '/^Holes in pods, damaged seeds, and poor yield\.?$/iu' => 'پھلیوں میں سوراخ، بیجوں کو نقصان اور کم پیداوار نظر آتی ہے۔',
            '/^Seedlings suddenly fall or get cut near soil surface\.?$/iu' => 'نرسری کے پودے اچانک گر جاتے ہیں یا مٹی کی سطح کے قریب سے کٹ جاتے ہیں۔',
            '/^Leaves become curled, silvery, and dry at edges\.?$/iu' => 'پتے مڑے ہوئے اور چاندی جیسے ہو جاتے ہیں اور کناروں سے خشک ہونے لگتے ہیں۔',
            '/^Yellow patches on leaves and grey mold under leaves\.?$/iu' => 'پتوں پر زرد دھبے اور نیچے سرمئی پھپھوندی ظاہر ہوتی ہے۔',
            '/^Dark spots on leaves, stems, and pods; plants dry early\.?$/iu' => 'پتوں، تنوں اور پھلیوں پر گہرے دھبے بن جاتے ہیں اور پودے جلد خشک ہو جاتے ہیں۔',
            '/^Carrots show brown tunnels, roots become damaged and rotten\.?$/iu' => 'گاجروں میں بھوری سرنگیں بن جاتی ہیں اور جڑیں متاثر ہو کر سڑنے لگتی ہیں۔',
            '/^White lines or trails appear inside leaves, leaves look weak\.?$/iu' => 'پتوں کے اندر سفید لکیریں یا راستے ظاہر ہوتے ہیں اور پتے کمزور دکھائی دیتے ہیں۔',
            '/^Roots become soft, dark, and rotten; plant wilts\.?$/iu' => 'جڑیں نرم، سیاہ اور سڑی ہوئی ہو جاتی ہیں؛ پودا مرجھا جاتا ہے۔',
            '/^Carrots become soft, watery, and smell bad\.?$/iu' => 'گاجریں نرم اور پانی دار ہو جاتی ہیں اور ان سے بدبو آنے لگتی ہے۔',
            '/^Dark brown spots on leaves, leaves dry and fall early\.?$/iu' => 'پتوں پر گہرے بھورے دھبے بن جاتے ہیں اور پتے خشک ہو کر جلد گر جاتے ہیں۔',
            '/^Leaves look silvery, dry from tips, and plant growth becomes weak\.?$/iu' => 'پتے چاندی جیسے دکھائی دیتے ہیں، سروں سے خشک ہوتے ہیں اور پودے کی نشوونما کمزور ہو جاتی ہے۔',
            '/^Plants suddenly wilt, bulbs rot, and roots get damaged\.?$/iu' => 'پودے اچانک مرجھا جاتے ہیں، گانٹھیں سڑ جاتی ہیں اور جڑوں کو نقصان پہنچتا ہے۔',
            '/^Seedlings fall or get cut near soil surface\.?$/iu' => 'نرسری کے پودے گر جاتے ہیں یا مٹی کی سطح کے قریب سے کٹ جاتے ہیں۔',
            '/^White lines or trails on leaves, leaves become weak and dry\.?$/iu' => 'پتوں پر سفید لکیریں یا راستے بن جاتے ہیں اور پتے کمزور اور خشک ہو جاتے ہیں۔',
            '/^Leaves become pale, yellow, and later dry out\.?$/iu' => 'پتے پھیکے اور پیلے ہو جاتے ہیں اور بعد میں خشک ہو جاتے ہیں۔',
            '/^Purple or brown spots on leaves, leaves dry early\.?$/iu' => 'پتوں پر جامنی یا بھورے دھبے بن جاتے ہیں اور پتے جلد خشک ہو جاتے ہیں۔',
            '/^Roots rot, plant wilts, white fungus appears at base\.?$/iu' => 'جڑیں سڑ جاتی ہیں، پودا مرجھا جاتا ہے اور بنیاد پر سفید پھپھوندی ظاہر ہوتی ہے۔',
            '/^Bulb base becomes soft, rots, and plant dries\.?$/iu' => 'گانٹھ کی بنیاد نرم ہو جاتی ہے، سڑنے لگتی ہے اور پودا خشک ہو جاتا ہے۔',
            '/^Leaves curl, turn yellow, and plant becomes weak with slow growth\.?$/iu' => 'پتے مڑ جاتے ہیں، پیلے ہو جاتے ہیں اور پودا کمزور ہو کر سست نشوونما کرتا ہے۔',
            '/^Small holes on leaves, skeleton-like leaves, and poor curd formation\.?$/iu' => 'پتوں پر چھوٹے سوراخ بن جاتے ہیں، پتے ڈھانچے جیسے رہ جاتے ہیں اور گوبھی کے سر کی تشکیل متاثر ہوتی ہے۔',
            '/^Young plants fall over and die quickly\.?$/iu' => 'نوجوان پودے گر جاتے ہیں اور جلد مر جاتے ہیں۔',
            '/^Young plants fall over or get cut near the ground\.?$/iu' => 'نوجوان پودے گر جاتے ہیں یا زمین کے قریب سے کٹ جاتے ہیں۔',
            '/^Young plants get cut and fall down suddenly\.?$/iu' => 'نوجوان پودے کٹ کر اچانک گر جاتے ہیں۔',
            '/^Leaves become spotted, twisted, and uneven in color\.?$/iu' => 'پتوں پر دھبے پڑ جاتے ہیں، وہ مڑ جاتے ہیں اور ان کا رنگ غیر ہموار ہو جاتا ہے۔',
            '/^Plants turn yellow, wilt, and die slowly\.?$/iu' => 'پودے پیلے پڑ جاتے ہیں، مرجھاتے ہیں اور آہستہ آہستہ مر جاتے ہیں۔',
            '/^Brown or black spots appear on leaves, leaves dry early\.?$/iu' => 'پتوں پر بھورے یا سیاہ دھبے ظاہر ہوتے ہیں اور پتے جلد خشک ہو جاتے ہیں۔',
            '/^Brown or black spots on leaves, leaves dry early\.?$/iu' => 'پتوں پر بھورے یا سیاہ دھبے بن جاتے ہیں اور پتے جلد خشک ہو جاتے ہیں۔',
            '/^Small brown or black spots appear on leaves, leaves fall early\.?$/iu' => 'پتوں پر چھوٹے بھورے یا سیاہ دھبے ظاہر ہوتے ہیں اور پتے جلد گر جاتے ہیں۔',
            '/^Dark sunken spots on stems, plants dry and die in patches\.?$/iu' => 'تنوں پر گہرے دھنسے ہوئے دھبے بن جاتے ہیں اور پودے جگہ جگہ خشک ہو کر مر جاتے ہیں۔',
            '/^Leaves show white lines and become weak\.?$/iu' => 'پتوں پر سفید لکیریں ظاہر ہوتی ہیں اور پتے کمزور ہو جاتے ہیں۔',
            '/^White powder-like layer on leaves, leaves dry and fall early\.?$/iu' => 'پتوں پر سفید پاؤڈر جیسی تہہ بن جاتی ہے اور پتے خشک ہو کر جلد گر جاتے ہیں۔',
            '/^Orange or brown spots on leaves, leaves dry early\.?$/iu' => 'پتوں پر نارنجی یا بھورے دھبے بن جاتے ہیں اور پتے جلد خشک ہو جاتے ہیں۔',
            '/^Leaves curl, plants become weak, and growth becomes slow\.?$/iu' => 'پتے مڑ جاتے ہیں، پودے کمزور ہو جاتے ہیں اور نشوونما سست ہو جاتی ہے۔',
            '/^Leaves are eaten, and plants look cut or damaged\.?$/iu' => 'پتے کھا لیے جاتے ہیں اور پودے کٹے یا متاثرہ دکھائی دیتے ہیں۔',
            '/^Leaves turn yellow, dry at edges, and plants look weak\.?$/iu' => 'پتے پیلے ہو جاتے ہیں، کناروں سے خشک ہوتے ہیں اور پودے کمزور دکھائی دیتے ہیں۔',
            '/^Tiny insects suck sap from leaves in warm conditions\.?$/iu' => 'بہت چھوٹے حشرات گرم حالات میں پتوں سے رس چوستے ہیں۔',
            '/^Small insects suck sap from (.+?), especially in (.+?)\.?$/iu' => 'چھوٹے حشرات $1 سے رس چوستے ہیں، خصوصاً $2 میں۔',
            '/^Small insects suck sap from (.+?)\.?$/iu' => 'چھوٹے حشرات $1 سے رس چوستے ہیں۔',
            '/^Tiny white insects feed on (.+?) and spread quickly in (.+?)\.?$/iu' => 'بہت چھوٹے سفید حشرات $1 سے خوراک حاصل کرتے ہیں اور $2 میں تیزی سے پھیلتے ہیں۔',
            '/^Very small insects suck juice from (.+?)\.?$/iu' => 'بہت چھوٹے حشرات $1 سے رس چوستے ہیں۔',
            '/^Caterpillars eat (.+?), usually active at night\.?$/iu' => 'سنڈیاں $1 کھاتی ہیں اور عموماً رات کے وقت فعال ہوتی ہیں۔',
            '/^Caterpillars feed on (.+?) and spread quickly in groups\.?$/iu' => 'سنڈیاں $1 کو کھاتی ہیں اور جھنڈ کی صورت میں تیزی سے پھیلتی ہیں۔',
            '/^Larvae live in soil and cut young plants at the base(?: during night)?\.?$/iu' => 'سنڈیاں مٹی میں رہتی ہیں اور ننھے پودوں کو زمین کے قریب سے کاٹ دیتی ہیں۔',
            '/^Larvae live in soil and cut young plants at ground level\.?$/iu' => 'سنڈیاں مٹی میں رہتی ہیں اور ننھے پودوں کو زمین کی سطح کے قریب سے کاٹ دیتی ہیں۔',
            '/^Larvae feed inside leaves and make tunnels\.?$/iu' => 'سنڈیاں پتوں کے اندر خوراک حاصل کرتی ہیں اور سرنگیں بناتی ہیں۔',
            '/^Soil fungus attacks roots(?: and stem base)? in (.+?)\.?$/iu' => 'مٹی میں موجود پھپھوندی $1 میں جڑوں اور تنے کی بنیاد پر حملہ کرتی ہے۔',
            '/^Small insects suck sap from leaves and stems, especially in warm weather\.?$/iu' => 'چھوٹے حشرات پتوں اور تنوں سے رس چوستے ہیں، خصوصاً گرم موسم میں۔',
            '/^Small insects suck sap from young leaves and stems, especially in cool weather\.?$/iu' => 'چھوٹے حشرات نئے پتوں اور تنوں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Small insects suck sap from tender leaves and stems, especially in cool weather\.?$/iu' => 'چھوٹے حشرات نرم پتوں اور تنوں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Small insects suck sap from leaves and curds, especially in cool weather\.?$/iu' => 'چھوٹے حشرات پتوں اور گوبھی کے سروں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Small insects suck sap from leaves, especially in cool and dry weather\.?$/iu' => 'چھوٹے حشرات پتوں سے رس چوستے ہیں، خصوصاً ٹھنڈے اور خشک موسم میں۔',
            '/^Small insects suck sap from tender shoots and leaves, especially in cool weather\.?$/iu' => 'چھوٹے حشرات نرم شاخوں اور پتوں سے رس چوستے ہیں، خصوصاً ٹھنڈے موسم میں۔',
            '/^Very small insects suck juice from leaves in dry and warm weather\.?$/iu' => 'بہت چھوٹے حشرات خشک اور گرم موسم میں پتوں سے رس چوستے ہیں۔',
            '/^Very small insects suck juice from leaves in dry weather\.?$/iu' => 'بہت چھوٹے حشرات خشک موسم میں پتوں سے رس چوستے ہیں۔',
            '/^Tiny insects suck sap from onion leaves, especially in hot and dry weather\.?$/iu' => 'بہت چھوٹے حشرات پیاز کے پتوں سے رس چوستے ہیں، خصوصاً گرم اور خشک موسم میں۔',
            '/^Larvae live in soil and cut young onion plants at base\.?$/iu' => 'سنڈیاں مٹی میں رہتی ہیں اور پیاز کے ننھے پودوں کو بنیاد کے قریب سے کاٹ دیتی ہیں۔',
            '/^Larvae live in soil and cut young plants at ground level at night\.?$/iu' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت ننھے پودوں کو زمین کی سطح کے قریب سے کاٹ دیتی ہیں۔',
            '/^Caterpillars feed inside pea pods and damage seeds\.?$/iu' => 'سنڈیاں مٹر کی پھلیوں کے اندر خوراک حاصل کرتی ہیں اور بیجوں کو نقصان پہنچاتی ہیں۔',
            '/^Fungus spreads through wind in humid weather\.?$/iu' => 'پھپھوندی مرطوب موسم میں ہوا کے ذریعے پھیلتی ہے۔',
            '/^Fungus spreads in wet and humid conditions\.?$/iu' => 'پھپھوندی نم اور مرطوب حالات میں پھیلتی ہے۔',
            '/^Fungus spreads in cool and wet conditions\.?$/iu' => 'پھپھوندی ٹھنڈے اور نم حالات میں پھیلتی ہے۔',
            '/^Fungus spreads in warm and humid conditions\.?$/iu' => 'پھپھوندی گرم اور مرطوب حالات میں پھیلتی ہے۔',
            '/^Fungus spreads in humid and wet conditions\.?$/iu' => 'پھپھوندی مرطوب اور نم حالات میں پھیلتی ہے۔',
            '/^Fungus spreads in cool and moist conditions\.?$/iu' => 'پھپھوندی ٹھنڈے اور نم حالات میں پھیلتی ہے۔',
            '/^Fungus grows in dry but cool weather on leaves\.?$/iu' => 'پھپھوندی خشک لیکن ٹھنڈے موسم میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows in dry but humid weather on leaves\.?$/iu' => 'پھپھوندی خشک لیکن مرطوب موسم میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows on leaves in cool and dry weather\.?$/iu' => 'پھپھوندی ٹھنڈے اور خشک موسم میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows on leaves in cool and humid weather\.?$/iu' => 'پھپھوندی ٹھنڈے اور مرطوب موسم میں پتوں پر نشوونما پاتی ہے۔',
            '/^Fungus grows in cool and humid conditions\.?$/iu' => 'پھپھوندی ٹھنڈے اور مرطوب حالات میں نشوونما پاتی ہے۔',
            '/^Fungus grows in cool and humid weather\.?$/iu' => 'پھپھوندی ٹھنڈے اور مرطوب موسم میں نشوونما پاتی ہے۔',
            '/^Fungus grows in cool, humid conditions and spreads on leaves\.?$/iu' => 'پھپھوندی ٹھنڈے اور مرطوب حالات میں نشوونما پاتی ہے اور پتوں پر پھیلتی ہے۔',
            '/^Fungus infects base of onion bulb in warm soil\.?$/iu' => 'پھپھوندی گرم مٹی میں پیاز کی گانٹھ کی بنیاد کو متاثر کرتی ہے۔',
            '/^Yellow patches on leaves and white growth under leaves\.?$/iu' => 'پتوں پر زرد دھبے اور پتوں کے نیچے سفید پھپھوندی نما تہہ ظاہر ہوتی ہے۔',
            '/^Soil fungus attacks roots in wet or poorly drained soil\.?$/iu' => 'مٹی میں موجود پھپھوندی گیلی یا ناقص نکاسی والی مٹی میں جڑوں پر حملہ کرتی ہے۔',
            '/^Fungus spreads in (.+?) conditions\.?$/iu' => 'پھپھوندی $1 حالات میں پھیلتی ہے۔',
            '/^Fungus spreads through wind in (.+?) weather\.?$/iu' => 'پھپھوندی $1 موسم میں ہوا کے ذریعے پھیلتی ہے۔',
            '/^Fungus spreads through infected seeds and (.+?)\.?$/iu' => 'پھپھوندی متاثرہ بیجوں اور $1 کے ذریعے پھیلتی ہے۔',
            '/^Bacteria enter through (.+?) in (.+?) conditions\.?$/iu' => 'جراثیم $1 کے ذریعے $2 حالات میں داخل ہوتے ہیں۔',
            '/^Bacteria spread through wind, rain, insects, and infected plant material\.?$/iu' => 'جراثیم ہوا، بارش، حشرات اور متاثرہ پودوں کے مواد کے ذریعے پھیلتے ہیں۔',
            '/^Leaves become curly, sticky, and plants grow slowly\.?$/iu' => 'پتے مڑ کر چپچپے ہو جاتے ہیں اور پودوں کی نشوونما سست ہو جاتی ہے۔',
            '/^Leaves become (.+?), (.+?), and (.+?)\.?$/iu' => 'پتے $1 اور $2 ہو جاتے ہیں، جبکہ $3۔',
            '/^Remove weeds, avoid overcrowding, and encourage natural enemies like ladybirds\.?$/iu' => 'جڑی بوٹیاں نکال دیں، بہت زیادہ گنجان کاشت سے گریز کریں اور لیڈی برڈ جیسے قدرتی دشمن حشرات کی حوصلہ افزائی کریں۔',
            '/^No cure; control spread by removing infected plants\.?$/iu' => 'مکمل علاج موجود نہیں؛ متاثرہ پودوں کو نکال کر بیماری کے پھیلاؤ کو روکیں۔',
            '/^No strong cure; remove infected plants and treat soil\.?$/iu' => 'مؤثر علاج موجود نہیں؛ متاثرہ پودے نکال دیں اور مٹی کا علاج کریں۔',
            '/^Regular field checking and hand removal in early stage\.?$/iu' => 'ابتدائی مرحلے میں کھیت کی باقاعدگی سے جانچ کریں اور کیڑوں کو ہاتھ سے نکال دیں۔',
            '/^Use yellow sticky traps and keep field clean\.?$/iu' => 'زرد چپکنے والے پھندے استعمال کریں اور کھیت صاف رکھیں۔',
            '/^Keep field clean and avoid stress on plants\.?$/iu' => 'کھیت صاف رکھیں اور پودوں کو دباؤ سے بچائیں۔',
            '/^Use clean tools and remove infected plants immediately\.?$/iu' => 'صاف اوزار استعمال کریں اور متاثرہ پودے فوراً نکال دیں۔',
            '/^Improve drainage and avoid waterlogging\.?$/iu' => 'نکاسی آب بہتر کریں اور پانی جمع ہونے سے گریز کریں۔',
            '/^Large holes in leaves and uneven plant growth\.?$/iu' => 'پتوں میں بڑے سوراخ ہو جاتے ہیں اور پودوں کی نشوونما غیر ہموار ہو جاتی ہے۔',
            '/^Yellow patches on leaves, leaves dry and fall early\.?$/iu' => 'پتوں پر زرد دھبے بن جاتے ہیں اور پتے خشک ہو کر جلد گر جاتے ہیں۔',
            '/^Yellow V-shaped patches on leaves, leaves dry and drop\.?$/iu' => 'پتوں پر زرد وی نما دھبے بن جاتے ہیں اور پتے خشک ہو کر گر جاتے ہیں۔',
            '/^Yellow V-shaped patches on leaves, leaves dry and drop early\.?$/iu' => 'پتوں پر زرد وی نما دھبے بن جاتے ہیں اور پتے خشک ہو کر جلد گر جاتے ہیں۔',
            '/^Roots become swollen, plants wilt even after watering\.?$/iu' => 'جڑیں پھول جاتی ہیں اور پانی دینے کے باوجود پودے مرجھا جاتے ہیں۔',
            '/^Small holes in leaves, leaves look skeleton-like, poor head formation\.?$/iu' => 'پتوں میں چھوٹے سوراخ ہو جاتے ہیں، پتے ڈھانچے جیسے دکھائی دیتے ہیں اور گوبھی کے سر کی تشکیل کمزور رہتی ہے۔',
            '/^Small holes in leaves, leaves look full of tiny dots, slow plant growth\.?$/iu' => 'پتوں میں چھوٹے سوراخ ہو جاتے ہیں، پتے ننھے نقطوں سے بھرے دکھائی دیتے ہیں اور پودے کی نشوونما سست ہو جاتی ہے۔',
            '/^Seedlings suddenly fall or are cut near soil level\.?$/iu' => 'ننھے پودے اچانک گر جاتے ہیں یا مٹی کی سطح کے قریب سے کٹ جاتے ہیں۔',
            '/^Roots become damaged, tunnels appear, and plants wilt\.?$/iu' => 'جڑوں کو نقصان پہنچتا ہے، سرنگیں ظاہر ہوتی ہیں اور پودے مرجھا جاتے ہیں۔',
            '/^White powder on leaves, leaves become weak and dry\.?$/iu' => 'پتوں پر سفید پاؤڈر بن جاتا ہے اور پتے کمزور اور خشک ہو جاتے ہیں۔',
            '/^Roots become soft, dark, and start rotting\.?$/iu' => 'جڑیں نرم اور سیاہ ہو جاتی ہیں اور سڑنا شروع ہو جاتی ہیں۔',
            '/^Avoid overwatering and ensure proper drainage in nursery\.?$/iu' => 'نرسری میں ضرورت سے زیادہ پانی دینے سے گریز کریں اور مناسب نکاسی آب یقینی بنائیں۔',
            '/^Remove infected leaves and keep field clean\.?$/iu' => 'متاثرہ پتے نکال دیں اور کھیت صاف رکھیں۔',
            '/^Regular field checking and early removal of affected plants\.?$/iu' => 'کھیت کی باقاعدگی سے جانچ کریں اور متاثرہ پودوں کو ابتدائی مرحلے میں نکال دیں۔',
            '/^Keep field clean and avoid overcrowding\.?$/iu' => 'کھیت صاف رکھیں اور بہت زیادہ گنجان کاشت سے گریز کریں۔',
            '/^Use resistant varieties and avoid dense planting\.?$/iu' => 'مزاحم اقسام استعمال کریں اور بہت زیادہ گنجان کاشت سے گریز کریں۔',
            '/^Remove infected leaves and maintain field hygiene\.?$/iu' => 'متاثرہ پتے نکال دیں اور کھیت کی صفائی برقرار رکھیں۔',
            '/^Avoid overhead watering and remove infected leaves\.?$/iu' => 'اوپر سے پانی دینے سے گریز کریں اور متاثرہ پتے نکال دیں۔',
            '/^Keep field clean and avoid water stress\.?$/iu' => 'کھیت صاف رکھیں اور پودوں کو پانی کی کمی کے دباؤ سے بچائیں۔',
            '/^Clean field before sowing and remove crop residues\.?$/iu' => 'کاشت سے پہلے کھیت صاف کریں اور فصل کی باقیات نکال دیں۔',
            '/^Avoid excess watering and ensure proper spacing\.?$/iu' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور مناسب فاصلہ یقینی بنائیں۔',
            '/^Avoid overwatering and use clean seed\.?$/iu' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور صاف بیج استعمال کریں۔',
            '/^Proper storage and cover seed potatoes with soil\.?$/iu' => 'آلوؤں کو مناسب طریقے سے ذخیرہ کریں اور بیج والے آلوؤں کو مٹی سے ڈھانپ دیں۔',
            '/^Use resistant varieties and avoid overwatering\.?$/iu' => 'مزاحم اقسام استعمال کریں اور ضرورت سے زیادہ پانی دینے سے گریز کریں۔',
            '/^Remove infected leaves and rotate crops\.?$/iu' => 'متاثرہ پتے نکال دیں اور فصلوں میں ردوبدل کریں۔',
            '/^Use clean seed potatoes and well-drained soil\.?$/iu' => 'صاف بیج والے آلو اور اچھی نکاسی والی مٹی استعمال کریں۔',
            '/^Maintain soil moisture and avoid high pH soil\.?$/iu' => 'مٹی کی نمی برقرار رکھیں اور زیادہ پی ایچ والی مٹی سے گریز کریں۔',
            '/^Control aphids and use virus-free seed potatoes\.?$/iu' => 'افڈز کا تدارک کریں اور وائرس سے پاک بیج والے آلو استعمال کریں۔',
            '/^Clean field before sowing and remove crop debris\.?$/iu' => 'کاشت سے پہلے کھیت صاف کریں اور فصل کی باقیات نکال دیں۔',
            '/^Use sticky traps and maintain field cleanliness\.?$/iu' => 'چپکنے والے پھندے استعمال کریں اور کھیت کی صفائی برقرار رکھیں۔',
            '/^Avoid overhead watering and ensure proper spacing\.?$/iu' => 'اوپر سے پانی دینے سے گریز کریں اور مناسب فاصلہ یقینی بنائیں۔',
            '/^Avoid overcrowding and improve air flow\.?$/iu' => 'بہت زیادہ گنجان کاشت سے گریز کریں اور ہوا کی آمدورفت بہتر بنائیں۔',
            '/^Improve drainage and avoid excess water\.?$/iu' => 'نکاسی آب بہتر کریں اور اضافی پانی سے گریز کریں۔',
            '/^Yellow V-shaped patches on leaves, leaves dry and fall\.?$/iu' => 'پتوں پر زرد وی نما دھبے بن جاتے ہیں اور پتے خشک ہو کر گر جاتے ہیں۔',
            '/^Remove weeds, avoid excess nitrogen, and encourage natural enemies like ladybirds\.?$/iu' => 'جڑی بوٹیاں نکال دیں، ضرورت سے زیادہ نائٹروجن سے گریز کریں اور لیڈی برڈ جیسے قدرتی دشمن حشرات کی حوصلہ افزائی کریں۔',
            '/^Improve drainage and avoid overwatering\.?$/iu' => 'نکاسی آب بہتر کریں اور ضرورت سے زیادہ پانی دینے سے گریز کریں۔',
            '/^Regular field monitoring and remove damaged pods\.?$/iu' => 'کھیت کی باقاعدگی سے نگرانی کریں اور متاثرہ پھلیاں نکال دیں۔',
            '/^Avoid overwatering and ensure proper spacing\.?$/iu' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور مناسب فاصلہ یقینی بنائیں۔',
            '/^Use clean seeds and remove infected plant debris\.?$/iu' => 'صاف بیج استعمال کریں اور متاثرہ پودوں کی باقیات نکال دیں۔',
            '/^Use crop rotation and cover soil around plants\.?$/iu' => 'فصلوں میں ردوبدل کریں اور پودوں کے اردگرد مٹی ڈھانپ دیں۔',
            '/^Avoid injury to roots and store in dry conditions\.?$/iu' => 'جڑوں کو نقصان پہنچانے سے گریز کریں اور خشک حالات میں ذخیرہ کریں۔',
            '/^Keep field moist, remove weeds, and avoid water stress\.?$/iu' => 'کھیت میں مناسب نمی برقرار رکھیں، جڑی بوٹیاں نکال دیں اور پانی کی کمی کے دباؤ سے گریز کریں۔',
            '/^Rotate crops and avoid planting onions in the same field every year\.?$/iu' => 'فصلوں میں ردوبدل کریں اور ہر سال اسی کھیت میں پیاز لگانے سے گریز کریں۔',
            '/^Clean field before planting and remove crop debris\.?$/iu' => 'کاشت سے پہلے کھیت صاف کریں اور فصل کی باقیات نکال دیں۔',
            '/^Avoid overwatering and improve air circulation\.?$/iu' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور ہوا کی آمدورفت بہتر بنائیں۔',
            '/^Use crop rotation and avoid infected soil\.?$/iu' => 'فصلوں میں ردوبدل کریں اور متاثرہ مٹی میں کاشت سے گریز کریں۔',
            '/^Avoid waterlogging and use healthy seed bulbs\.?$/iu' => 'پانی جمع ہونے سے گریز کریں اور صحت مند بیج والی گانٹھیں استعمال کریں۔',
            '/^Remove weeds, keep field clean, and encourage natural predators like ladybirds\.?$/iu' => 'جڑی بوٹیاں نکال دیں، کھیت صاف رکھیں اور لیڈی برڈ جیسے قدرتی شکاری حشرات کی حوصلہ افزائی کریں۔',
            '/^Use netting, remove damaged leaves, and rotate crops\.?$/iu' => 'جالی استعمال کریں، متاثرہ پتے نکال دیں اور فصلوں میں ردوبدل کریں۔',
            '/^Hand-pick larvae and keep field clean\.?$/iu' => 'سنڈیوں کو ہاتھ سے نکالیں اور کھیت صاف رکھیں۔',
            '/^Remove crop residues and clean field before planting\.?$/iu' => 'فصل کی باقیات نکال دیں اور کاشت سے پہلے کھیت صاف کریں۔',
            '/^Avoid overhead irrigation and improve air flow\.?$/iu' => 'اوپر سے آبپاشی کرنے سے گریز کریں اور ہوا کی آمدورفت بہتر بنائیں۔',
            '/^Use crop rotation and maintain proper soil pH\.?$/iu' => 'فصلوں میں ردوبدل کریں اور مٹی کا مناسب پی ایچ برقرار رکھیں۔',
            '/^Use clean seeds and remove infected plant parts\.?$/iu' => 'صاف بیج استعمال کریں اور متاثرہ پودوں کے حصے نکال دیں۔',
            '/^Use net covers, remove damaged leaves, and rotate crops\.?$/iu' => 'جالی دار پردے استعمال کریں، متاثرہ پتے نکال دیں اور فصلوں میں ردوبدل کریں۔',
            '/^Hand-pick worms and keep field clean\.?$/iu' => 'کیڑوں کو ہاتھ سے نکالیں اور کھیت صاف رکھیں۔',
            '/^Remove crop residue and prepare field well before planting\.?$/iu' => 'فصل کی باقیات نکال دیں اور کاشت سے پہلے کھیت کو اچھی طرح تیار کریں۔',
            '/^Use net covers and keep field weed-free\.?$/iu' => 'جالی دار پردے استعمال کریں اور کھیت کو جڑی بوٹیوں سے پاک رکھیں۔',
            '/^Use crop rotation and avoid continuous radish growing\.?$/iu' => 'فصلوں میں ردوبدل کریں اور مسلسل مولی اگانے سے گریز کریں۔',
            '/^Avoid overcrowding and improve sunlight exposure\.?$/iu' => 'بہت زیادہ گنجان کاشت سے گریز کریں اور پودوں کو مناسب دھوپ ملنے دیں۔',
            '/^Apply Metalaxyl or Ridomil-based fungicides\.?$/iu' => 'میٹالیکسل یا رڈومل پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            '/^Treat soil or seeds with Carbendazim\.?$/iu' => 'مٹی یا بیجوں کا کاربینڈازم سے علاج کریں۔',
            '/^Apply Carbendazim or soil fungicides\.?$/iu' => 'کاربینڈازم یا مٹی کے لیے موزوں پھپھوندی کش ادویات استعمال کریں۔',
            '/^Apply Mancozeb or Triazole fungicides\.?$/iu' => 'مینکوزیب یا ٹرائی ایزول پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            '/^Apply Metalaxyl-based fungicides\.?$/iu' => 'میٹالیکسل پر مبنی پھپھوندی کش ادویات استعمال کریں۔',
            '/^Use pheromone traps and apply recommended insecticides\.?$/iu' => 'جنسی کشش والے پھندے استعمال کریں اور تجویز کردہ کیڑے مار ادویات استعمال کریں۔',
            '/^Treat seed potatoes with fungicides before planting\.?$/iu' => 'کاشت سے پہلے بیج والے آلوؤں کا پھپھوندی کش ادویات سے علاج کریں۔',
            '/^Avoid overcrowding and improve air circulation\.?$/iu' => 'بہت زیادہ گنجان کاشت سے گریز کریں اور ہوا کی آمدورفت بہتر بنائیں۔',
            '/^Clean field before sowing and remove plant debris\.?$/iu' => 'کاشت سے پہلے کھیت صاف کریں اور پودوں کی باقیات نکال دیں۔',
            '/^Remove weeds, avoid excess nitrogen, and support natural predators like ladybirds\.?$/iu' => 'جڑی بوٹیاں نکال دیں، ضرورت سے زیادہ نائٹروجن سے گریز کریں اور لیڈی برڈ جیسے قدرتی شکاری حشرات کی مدد کریں۔',
            '/^Remove weeds, avoid excess nitrogen, and encourage natural predators like ladybirds\.?$/iu' => 'جڑی بوٹیاں نکال دیں، ضرورت سے زیادہ نائٹروجن سے گریز کریں اور لیڈی برڈ جیسے قدرتی شکاری حشرات کی حوصلہ افزائی کریں۔',
            '/^Leaves become (.+?), and plants? (.+?)\.?$/iu' => 'پتے $1 ہو جاتے ہیں اور پودے $2۔',
            '/^Leaves turn yellow, (.+?), and plant (.+?)\.?$/iu' => 'پتے پیلے ہو جاتے ہیں، $1 اور پودے کی $2۔',
            '/^Plants turn yellow, wilt, and slowly die\.?$/iu' => 'پودے پیلے پڑ جاتے ہیں، مرجھاتے ہیں اور آہستہ آہستہ مر جاتے ہیں۔',
            '/^Young plants (.+?)\.?$/iu' => 'نوجوان پودے $1۔',
            '/^Apply (.+?) or (.+?) as recommended\.?$/iu' => 'زرعی سفارشات کے مطابق $1 یا $2 استعمال کریں۔',
            '/^Apply (.+?) or (.+?)\.?$/iu' => '$1 یا $2 استعمال کریں۔',
            '/^Apply (.+?)\.?$/iu' => '$1 استعمال کریں۔',
            '/^Use (.+?) and (.+?)\.?$/iu' => '$1 استعمال کریں اور $2۔',
            '/^Use (.+?)\.?$/iu' => '$1 استعمال کریں۔',
            '/^Remove (.+?) and (.+?)\.?$/iu' => '$1 نکال دیں اور $2۔',
            '/^Remove (.+?)\.?$/iu' => '$1 نکال دیں۔',
            '/^Avoid (.+?) and (.+?)\.?$/iu' => '$1 سے گریز کریں اور $2۔',
            '/^Avoid (.+?)\.?$/iu' => '$1 سے گریز کریں۔',
            '/^Improve (.+?) and avoid (.+?)\.?$/iu' => '$1 بہتر کریں اور $2 سے گریز کریں۔',
            '/^Keep (.+?) clean\.?$/iu' => '$1 صاف رکھیں۔',
            '/^No cure; (.+?)\.?$/iu' => 'مکمل علاج موجود نہیں؛ $1۔',
            '/^Proper (.+?) helps (.+?)\.?$/iu' => 'مناسب $1 سے $2 میں مدد ملتی ہے۔',
            '/^Balanced fertilizers improve (.+?)\.?$/iu' => 'متوازن کھادیں $1 بہتر کرتی ہیں۔',
        ];
        foreach ($rules as $pattern => $replacement) {
            $text = preg_replace($pattern, $replacement, $text) ?? $text;
        }
        return $text;
    }

    private function applyAgriculturePhraseRules(string $text): string
    {
        $phrases = [
            'Runner Type' => 'پھیلنے والی قسم',
            'Spanish Type' => 'ہسپانوی قسم',
            'Virginia Type' => 'ورجینیا قسم',
            'Valencia Type' => 'ویلینشیا قسم',
            'Seeded Watermelon' => 'بیج والا تربوز',
            'Seedless Watermelon' => 'بغیر بیج کا تربوز',
            'Mini Watermelon' => 'چھوٹے پھلوں والا تربوز',
            'Icebox Watermelon' => 'چھوٹی جسامت اور میٹھے پھلوں والا تربوز',
            'Flat Leaf Spinach' => 'چوڑے پتوں والی پالک',
            'Savoy Spinach' => 'سلوٹ دار پتوں والی پالک',
            'Semi-savoy Spinach' => 'درمیانی پتوں والی پالک',
            'Nantes' => 'نانٹس',
            'Chantenay' => 'شانٹنے',
            'Imperator' => 'امپیریٹر',
            'Danvers' => 'ڈینورز',
            'White Grapefruit' => 'ہلکے گودے والا چکوترا',
            'Pink Grapefruit' => 'گلابی گودے والا چکوترا',
            'Red Grapefruit' => 'سرخ گودے والا چکوترا',
            'Seedless Grapefruit' => 'بغیر بیج کا چکوترا',
            'Red Apples' => 'سرخ سیب',
            'Green Apples' => 'سبز سیب',
            'Golden Apples' => 'سنہری سیب',
            'Crab Apples' => 'جنگلی سیب',
            'Export quality' => 'برآمدی معیار',
            'Fine grain variety' => 'باریک دانے والی قسم',
            'Spreading variety' => 'پھیلنے والی قسم',
            'Small seeded variety' => 'چھوٹے بیج والی قسم',
            'Large seeded variety' => 'بڑے بیج والی قسم',
            'Sweet kernel variety' => 'میٹھی گری والی قسم',
            'Traditional variety with seeds' => 'بیج والی روایتی قسم',
            'Hybrid variety without seeds' => 'بغیر بیج کی دوغلی قسم',
            'Small-sized fruit variety' => 'چھوٹے پھلوں والی قسم',
            'Compact and sweet variety' => 'چھوٹی جسامت اور میٹھے پھلوں والی قسم',
            'Broad and smooth leaves' => 'چوڑے اور ہموار پتے',
            'Crinkled and textured leaves' => 'سلوٹ دار اور بناوٹ والے پتے',
            'Intermediate leaf type' => 'درمیانی جسامت کے پتوں والی قسم',
            'Sweet and smooth roots' => 'میٹھی اور ہموار جڑیں',
            'Short and thick roots' => 'چھوٹی اور موٹی جڑیں',
            'Long and slender roots' => 'لمبی اور پتلی جڑیں',
            'Medium-sized, hardy variety' => 'درمیانی جسامت کی مضبوط قسم',
            'Light-colored flesh' => 'ہلکے رنگ کے گودے والی قسم',
            'Sweet and juicy variety' => 'میٹھی اور رسیلی قسم',
            'Deep red flesh variety' => 'گہرے سرخ گودے والی قسم',
            'Popular commercial variety' => 'مقبول تجارتی قسم',
            'Sweet and colorful' => 'میٹھے اور خوبصورت رنگ والے پھل',
            'Slightly sour taste' => 'قدرے کھٹا ذائقہ',
            'Soft and sweet' => 'نرم اور میٹھے پھل',
            'Small-sized variety' => 'چھوٹی جسامت والی قسم',
            'Preferred for market sale' => 'منڈی میں فروخت کے لیے پسند کی جاتی ہے',
            'Commonly grown variety' => 'عام طور پر کاشت کی جانے والی قسم',
            'Traditional regional types' => 'روایتی علاقائی اقسام',
            'High yield and disease resistant' => 'زیادہ پیداوار اور بیماریوں کے خلاف مزاحمت رکھنے والی قسم',
            'Hybrid variety' => 'دوغلی قسم',
            'Fine grain variety' => 'باریک دانے والی قسم',
            'Disease resistant' => 'بیماریوں کے خلاف مزاحمت رکھنے والی قسم',
            'Local improved variety' => 'مقامی بہتر قسم',
            'High yielding variety' => 'زیادہ پیداوار دینے والی قسم',
            'High yield variety' => 'زیادہ پیداوار دینے والی قسم',
            'High yielding hybrid variety' => 'زیادہ پیداوار دینے والی دوغلی قسم',
            'High yield hybrid' => 'زیادہ پیداوار دینے والی دوغلی قسم',
            'High yield hybrids' => 'زیادہ پیداوار دینے والی دوغلی اقسام',
            'Disease resistant variety' => 'بیماریوں کے خلاف مزاحمت رکھنے والی قسم',
            'Disease resistant' => 'بیماریوں کے خلاف مزاحمت رکھنے والی',
            'Disease resistance' => 'بیماریوں کے خلاف مزاحمت',
            'Popular local variety' => 'مقبول مقامی قسم',
            'Common local variety' => 'عام مقامی قسم',
            'Common local variety in Pakistan' => 'پاکستان میں عام مقامی قسم',
            'Common cultivated type' => 'عام طور پر کاشت کی جانے والی قسم',
            'Traditional variety' => 'روایتی قسم',
            'Traditional varieties' => 'روایتی اقسام',
            'Traditional local variety' => 'روایتی مقامی قسم',
            'Traditional Pakistani variety' => 'روایتی پاکستانی قسم',
            'Local improved variety' => 'مقامی بہتر قسم',
            'Locally adapted variety' => 'مقامی حالات کے مطابق ڈھلی ہوئی قسم',
            'Popular improved variety' => 'مقبول بہتر قسم',
            'Improved yield type' => 'بہتر پیداوار دینے والی قسم',
            'Improved yield variety' => 'بہتر پیداوار دینے والی قسم',
            'Improved grain quality' => 'بہتر دانے کے معیار والی قسم',
            'Improved quality variety' => 'بہتر معیار والی قسم',
            'Improved sweetness variety' => 'زیادہ مٹھاس والی بہتر قسم',
            'Early season variety' => 'ابتدائی موسم کی قسم',
            'Early maturing variety' => 'جلد پکنے والی قسم',
            'Early maturity variety' => 'جلد پکنے والی قسم',
            'Early ripening type' => 'جلد پکنے والی قسم',
            'Late season variety' => 'دیر سے پکنے والی قسم',
            'Sweet and aromatic variety' => 'میٹھی اور خوشبودار قسم',
            'Sweet and aromatic type' => 'میٹھی اور خوشبودار قسم',
            'Sweet variety' => 'میٹھی قسم',
            'Sweet and soft flesh variety' => 'نرم اور میٹھے گودے والی قسم',
            'Small and very sweet variety' => 'چھوٹے اور بہت میٹھے پھلوں والی قسم',
            'Large and popular variety' => 'بڑے اور مقبول پھلوں والی قسم',
            'Large size and early season variety' => 'بڑے پھل اور ابتدائی موسم والی قسم',
            'Large size variety' => 'بڑے پھلوں والی قسم',
            'High pungency variety' => 'زیادہ تیزی والی قسم',
            'High medicinal value' => 'زیادہ ادویاتی قدر',
            'High oil content' => 'زیادہ تیل کی مقدار',
            'High oil content variety' => 'زیادہ تیل والی قسم',
            'High oil quality' => 'اعلیٰ معیار کا تیل',
            'Good oil quality' => 'اچھے معیار کا تیل',
            'Good quality fruit' => 'اچھے معیار کے پھل والی قسم',
            'High quality fruit' => 'اعلیٰ معیار کے پھل والی قسم',
            'High-quality fruit' => 'اعلیٰ معیار کے پھل والی قسم',
            'Good quality heads' => 'اچھے معیار کے گوبھی کے سر والی قسم',
            'High quality export variety' => 'برآمد کے لیے اعلیٰ معیار کی قسم',
            'Export quality' => 'برآمدی معیار',
            'Export quality variety' => 'برآمدی معیار کی قسم',
            'Used for drying and powder' => 'خشک کرنے اور پاؤڈر بنانے کے لیے استعمال ہوتی ہے',
            'Used for drying and powder production' => 'خشک کرنے اور پاؤڈر بنانے کے لیے استعمال ہوتی ہے',
            'Industrial use' => 'صنعتی استعمال',
            'Industrial Uses' => 'صنعتی استعمال',
            'Drought resistant variety' => 'خشک سالی برداشت کرنے والی قسم',
            'Drought tolerant variety' => 'خشک سالی برداشت کرنے والی قسم',
            'Heat tolerant variety' => 'گرمی برداشت کرنے والی قسم',
            'Heat tolerant improved variety' => 'گرمی برداشت کرنے والی بہتر قسم',
            'Fast regrowth variety' => 'تیزی سے دوبارہ بڑھنے والی قسم',
            'Widely cultivated commercial variety' => 'وسیع پیمانے پر کاشت کی جانے والی تجارتی قسم',
            'Widely grown variety' => 'وسیع پیمانے پر کاشت کی جانے والی قسم',
            'Widely grown in Pakistan' => 'پاکستان میں وسیع پیمانے پر کاشت کی جاتی ہے',
            'Suitable for local conditions' => 'مقامی حالات کے لیے موزوں',
            'Suitable for warm regions' => 'گرم علاقوں کے لیے موزوں',
            'Adapted to local climate' => 'مقامی آب و ہوا کے مطابق ڈھلی ہوئی',
            'Regionally adapted types' => 'علاقائی حالات کے مطابق ڈھلی ہوئی اقسام',
            'Local farm-grown types' => 'مقامی کھیتوں میں اگائی جانے والی اقسام',
            'Common variety in Pakistan' => 'پاکستان میں عام قسم',
            'Common variety grown in Pakistan' => 'پاکستان میں عام طور پر اگائی جانے والی قسم',
            'Popular commercial variety' => 'مقبول تجارتی قسم',
            'Popular in South Asia' => 'جنوبی ایشیا میں مقبول قسم',
            'Popular Pakistani variety' => 'مقبول پاکستانی قسم',
            'Famous Pakistani variety' => 'مشہور پاکستانی قسم',
            'Famous for strong flavor' => 'تیز ذائقے کے لیے مشہور',
            'Highly aromatic' => 'بہت خوشبودار',
            'Highly aromatic variety' => 'بہت خوشبودار قسم',
            'Rich in nutrients and color' => 'غذائی اجزا اور رنگت سے بھرپور',
            'Long variety' => 'لمبے پھلوں والی قسم',
            'Long leaf variety' => 'لمبے پتوں والی قسم',
            'Long smooth roots' => 'لمبی اور ہموار جڑیں',
            'Compact and disease-resistant variety' => 'چھوٹی جسامت اور بیماریوں کے خلاف مزاحمت رکھنے والی قسم',
            'Disease-resistant variety' => 'بیماریوں کے خلاف مزاحمت رکھنے والی قسم',
            'Insect resistant and high productivity' => 'کیڑوں کے خلاف مزاحمت اور زیادہ پیداوار کی حامل',
            'High yield and disease resistant' => 'زیادہ پیداوار اور بیماریوں کے خلاف مزاحمت رکھنے والی',
            'High yield and drought tolerant' => 'زیادہ پیداوار اور خشک سالی برداشت کرنے والی',
            'High yield and strong aroma variety' => 'زیادہ پیداوار اور مضبوط خوشبو والی قسم',
            'High yield and tender leaves' => 'زیادہ پیداوار اور نرم پتوں والی قسم',
            'High yield improved variety' => 'زیادہ پیداوار دینے والی بہتر قسم',
            'High yield type' => 'زیادہ پیداوار دینے والی قسم',
            'High productivity type' => 'زیادہ پیداواری قسم',
            'Tender and dark green leaves' => 'نرم اور گہرے سبز پتے',
            'Colorful leafy variety' => 'رنگ برنگے پتوں والی قسم',
            'Soft leaf variety' => 'نرم پتوں والی قسم',
            'Pole bean variety' => 'بیل پر اگنے والی لوبیا کی قسم',
            'Juicy and flavorful' => 'رسیلے اور ذائقے دار پھل والی قسم',
            'Juicy variety' => 'رسیلے پھلوں والی قسم',
            'Bigger fruit size' => 'بڑے پھلوں کی جسامت',
            'Early harvesting variety' => 'جلد کٹائی والی قسم',
            'Good quality roots' => 'اچھے معیار کی جڑوں والی قسم',
            'Large root variety' => 'بڑی جڑوں والی قسم',
            'Popular garden pea variety' => 'مقبول باغی مٹر کی قسم',
            'Traditional variety grown in Pakistan' => 'پاکستان میں اگائی جانے والی روایتی قسم',
            'Common variety' => 'عام قسم',
            'Maize (Corn)' => 'مکئی', 'Maize' => 'مکئی', 'Corn' => 'مکئی',
            'Rice' => 'چاول', 'Cotton' => 'کپاس', 'Sugarcane' => 'گنا',
            'Sorghum' => 'جوار', 'Pearl Millet' => 'باجرا', 'Wheat' => 'گندم', 'Barley' => 'جو',
            'Linseed' => 'السی', 'Bottle Gourd' => 'لوکی', 'Okra' => 'بھنڈی',
            'Lady Finger' => 'بھنڈی', 'Bhindi' => 'بھنڈی', 'Tomato' => 'ٹماٹر', 'Tomatoes' => 'ٹماٹر',
            'Pumpkin' => 'کدو', 'Bitter Gourd' => 'کریلا', 'Turmeric' => 'ہلدی', 'Cucumber' => 'کھیرا',
            'Eggplant' => 'بینگن', 'Brinjal' => 'بینگن', 'Chilli' => 'مرچ', 'Chillies' => 'مرچ',
            'Arum' => 'اروی', 'Ginger' => 'ادرک', 'Potato' => 'آلو', 'Spinach' => 'پالک',
            'Pea' => 'مٹر', 'Carrot' => 'گاجر', 'Onion' => 'پیاز', 'Cauliflower' => 'پھول گوبھی',
            'CauliFlower' => 'پھول گوبھی', 'Cabbage' => 'بند گوبھی', 'Radish' => 'مولی', 'Bean' => 'لوبیا',
            'Lettuce' => 'سلاد پتہ', 'Garlic' => 'لہسن', 'Beetroot' => 'چقندر', 'Turnip' => 'شلجم',
            'Coriander' => 'دھنیا', 'Mint' => 'پودینہ', 'Fennel' => 'سونف', 'Banana' => 'کیلا',
            'Mango' => 'آم', 'Lychee' => 'لیچی', 'Watermelon' => 'تربوز', 'Melon' => 'خربوزہ',
            'Guava' => 'امرود', 'Papaya' => 'پپیتا', 'Peach' => 'آڑو', 'Orange' => 'مالٹا',
            'Oranges' => 'مالٹے', 'Kinnow' => 'کینو', 'Lemon' => 'لیموں', 'Lemons' => 'لیموں',
            'Grapefruit' => 'چکوترا', 'Grapefruit' => 'چکوترا', 'Sweet Lime' => 'میٹھا لیموں',
            'Pomegranate' => 'انار', 'Apple' => 'سیب', 'Apples' => 'سیب', 'Dates' => 'کھجور', 'Date' => 'کھجور',
            'Mung' => 'مونگ', 'Mung bean' => 'مونگ', 'Soybean' => 'سویا بین', 'Groundnut' => 'مونگ پھلی',
            'Mustard' => 'سرسوں', 'Rapeseed' => 'رائی', 'Canola' => 'کینولا', 'Lucerne' => 'لوسرن',
            'Fenugreek' => 'میتھی', 'Fenugreek(Methi)' => 'میتھی', 'Sunflower' => 'سورج مکھی',
            'SunFlower' => 'سورج مکھی', 'Isabgol' => 'اسپغول',
            'Whitefly' => 'سفید مکھی', 'Whiteflies' => 'سفید مکھیاں', 'Aphids' => 'تیلے', 'Jassid' => 'سبز تیلا',
            'Pod Borer' => 'پھلی کا سنڈی کیڑا', 'Thrips' => 'تھرپس', 'Powdery Mildew' => 'سفوفی پھپھوندی کی بیماری',
            'Cercospora Leaf Spot' => 'سرکوسپورا پتوں کا دھبہ', 'Rice Stem Borer' => 'چاول کا تنے کا کیڑا',
            'Brown Planthopper' => 'بھورا پلانٹ ہاپر', 'Rice Leaf Folder' => 'چاول کے پتے لپیٹنے والا کیڑا',
            'Rice Hispa' => 'چاول کا ہسپا', 'Rice Gall Midge' => 'چاول کا گال مِج', 'Rice Blast' => 'چاول کا جھلساؤ',
            'Bacterial Leaf Blight' => 'بیکٹیریائی پتوں کا جھلساؤ',
            'leaves' => 'پتے', 'leaf' => 'پتا', 'stems' => 'تنے', 'stem' => 'تنا', 'roots' => 'جڑیں', 'root' => 'جڑ',
            'plants' => 'پودے', 'plant' => 'پودا', 'soil' => 'مٹی', 'field' => 'کھیت', 'fields' => 'کھیت',
            'sap' => 'رس', 'juice' => 'رس', 'insects' => 'حشرات', 'insect' => 'حشرہ', 'larvae' => 'سنڈیاں',
            'larva' => 'سنڈی', 'caterpillars' => 'سنڈیاں', 'caterpillar' => 'سنڈی', 'eggs' => 'انڈے', 'egg' => 'انڈا',
            'and' => 'اور', 'or' => 'یا', 'especially' => 'خصوصاً', 'in' => 'میں', 'from' => 'سے', 'during' => 'کے دوران',
            'as recommended' => 'زرعی سفارشات کے مطابق', 'recommended' => 'تجویز کردہ',
            'common' => 'عام', 'affecting' => 'متاثر کرنے والے', 'symptoms' => 'علامات',
            'prevention' => 'بچاؤ', 'methods' => 'طریقے', 'measures' => 'اقدامات',
            'pest information' => 'کیڑوں کی معلومات',
            'recommended control' => 'تجویز کردہ تدارک',
            'how it occurs' => 'یہ کیسے پیدا ہوتا ہے',
            'prevention methods' => 'بچاؤ کے طریقے',
            'control measures' => 'تدارک کے اقدامات',
            'common pests' => 'عام کیڑے',
            'agricultural details' => 'زرعی تفصیلات',
            'agricultural information' => 'زرعی معلومات',
            'growing details' => 'کاشت کی تفصیلات',
            'expert guidance' => 'ماہرین کی رہنمائی',
            'vegetable collection' => 'سبزیوں کا مجموعہ',
            'available vegetables' => 'دستیاب سبزیاں',
            'available fruits' => 'دستیاب پھل',
            'available grains' => 'دستیاب اناج',
            'crop information' => 'فصل کی معلومات',
            'crop details' => 'فصل کی تفصیلات',
            'view details' => 'تفصیلات دیکھیں',
            'select a crop' => 'فصل منتخب کریں',
            'select a vegetable' => 'سبزی منتخب کریں',
            'complete agricultural details' => 'مکمل زرعی تفصیلات',
            'complete agricultural information' => 'مکمل زرعی معلومات',
            'warm weather' => 'گرم موسم',
            'cool weather' => 'ٹھنڈا موسم',
            'humid weather' => 'مرطوب موسم',
            'wet conditions' => 'نم حالات',
            'dry conditions' => 'خشک حالات',
            'wet and humid conditions' => 'نم اور مرطوب حالات',
            'cool and wet conditions' => 'ٹھنڈے اور نم حالات',
            'cool and humid conditions' => 'ٹھنڈے اور مرطوب حالات',
            'warm and wet conditions' => 'گرم اور نم حالات',
            'warm and humid conditions' => 'گرم اور مرطوب حالات',
            'well-drained soil' => 'اچھی نکاسی والی مٹی',
            'fertile soil' => 'زرخیز مٹی',
            'soil drainage' => 'مٹی کی نکاسی',
            'air circulation' => 'ہوا کی آمدورفت',
            'overwatering' => 'ضرورت سے زیادہ پانی دینا',
            'waterlogging' => 'پانی کا جمع ہونا',
            'field hygiene' => 'کھیت کی صفائی',
            'natural enemies' => 'قدرتی دشمن',
            'natural predators' => 'قدرتی شکاری حشرات',
            'yellow sticky traps' => 'زرد چپکنے والے پھندے',
            'pheromone traps' => 'جنسی کشش والے پھندے',
            'infected plants' => 'متاثرہ پودے',
            'infected leaves' => 'متاثرہ پتے',
            'infected seeds' => 'متاثرہ بیج',
            'plant sap' => 'پودے کا رس',
            'leaf sap' => 'پتوں کا رس',
            'young leaves' => 'نئے پتے',
            'tender shoots' => 'نرم شاخیں',
            'plant growth' => 'پودے کی نشوونما',
            'young plants' => 'کم عمر پودے', 'young seedlings' => 'کم عمر پودے', 'seedlings' => 'ننھے پودے', 'plants' => 'پودے', 'plant' => 'پودا',
            'young onion plants' => 'کم عمر پیاز کے پودے', 'young garlic plants' => 'کم عمر لہسن کے پودے', 'young sunflower plants' => 'کم عمر سورج مکھی کے پودے',
            'onion leaves' => 'پیاز کے پتے', 'cabbage leaves' => 'بند گوبھی کے پتے', 'potato leaves' => 'آلو کے پتے', 'pea pods' => 'مٹر کی پھلیاں',
            'leaf edges' => 'پتوں کے کنارے', 'upper leaf side' => 'پتے کی اوپری سطح', 'under leaves' => 'پتوں کی نچلی سطح پر', 'near roots' => 'جڑوں کے قریب',
            'central shoots' => 'مرکزی شاخیں', 'ground level' => 'زمین کی سطح', 'soil surface' => 'مٹی کی سطح', 'stem base' => 'تنے کا نچلا حصہ',
            'damaged roots' => 'متاثرہ جڑیں', 'damaged seedlings' => 'متاثرہ ننھے پودے', 'damaged seeds' => 'متاثرہ بیج', 'developing seeds' => 'بننے والے بیج',
            'weak growth' => 'کمزور نشوونما', 'weak plant growth' => 'پودے کی کمزور نشوونما', 'poor plant growth' => 'پودے کی ناقص نشوونما',
            'slow plant growth' => 'پودے کی سست نشوونما', 'growth slows down' => 'نشوونما سست پڑ جاتی ہے', 'grow slowly' => 'آہستہ بڑھتے ہیں',
            'become weak' => 'کمزور ہو جاتے ہیں', 'becomes weak' => 'کمزور ہو جاتا ہے', 'look weak' => 'کمزور دکھائی دیتے ہیں', 'die slowly' => 'آہستہ آہستہ مر جاتے ہیں',
            'die suddenly' => 'اچانک مر جاتے ہیں', 'fall down suddenly' => 'اچانک گر جاتے ہیں', 'fall over' => 'گر جاتے ہیں', 'fall early' => 'جلد گر جاتے ہیں',
            'dry early' => 'جلد خشک ہو جاتے ہیں', 'dry out' => 'خشک ہو جاتے ہیں', 'dry completely' => 'مکمل طور پر خشک ہو جاتے ہیں', 'dry at edges' => 'کناروں سے خشک ہو جاتے ہیں',
            'turn yellow' => 'زرد ہو جاتے ہیں', 'turn yellow and dry' => 'زرد ہو کر خشک ہو جاتے ہیں', 'yellow' => 'زرد', 'brown' => 'بھورا', 'black' => 'سیاہ', 'white' => 'سفید', 'grey' => 'سرمئی', 'gray' => 'سرمئی', 'orange' => 'نارنجی', 'purple' => 'جامنی',
            'curled' => 'مڑے ہوئے', 'curly' => 'مڑے ہوئے', 'twisted' => 'ٹیڑھے', 'sticky' => 'چپچپے', 'silvery' => 'چاندی جیسے', 'pale' => 'زرد مائل', 'dark' => 'گہرے',
            'appear' => 'ظاہر ہوتے ہیں', 'appears' => 'ظاہر ہوتی ہے', 'become' => 'ہو جاتے ہیں', 'becomes' => 'ہو جاتا ہے', 'and' => 'اور', 'or' => 'یا', 'with' => 'کے ساتھ',
            'especially' => 'خصوصاً', 'usually' => 'عموماً', 'sometimes' => 'بعض اوقات', 'quickly' => 'تیزی سے', 'slowly' => 'آہستہ آہستہ', 'continuously' => 'مسلسل',
            'in groups' => 'جھنڈ کی صورت میں', 'at night' => 'رات کے وقت', 'during night' => 'رات کے وقت', 'near the ground' => 'زمین کے قریب',
            'feed on' => 'کو کھاتے ہیں', 'feed inside' => 'اندر خوراک حاصل کرتے ہیں', 'suck' => 'چوستے ہیں', 'attack' => 'حملہ کرتے ہیں', 'enter' => 'داخل ہوتے ہیں', 'spread quickly' => 'تیزی سے پھیلتے ہیں',
            'spread' => 'پھیلتے ہیں', 'causes' => 'کا سبب بنتا ہے', 'causing' => 'جس سے', 'damage' => 'نقصان پہنچاتے ہیں', 'damaged' => 'متاثرہ', 'poor' => 'کم', 'reduced' => 'کم',
            'water stress' => 'پانی کی کمی کا دباؤ', 'drought stress' => 'خشک سالی کا دباؤ', 'high moisture' => 'زیادہ نمی', 'excess moisture' => 'ضرورت سے زیادہ نمی',
            'proper drainage' => 'مناسب نکاسی آب', 'good drainage' => 'اچھی نکاسی آب', 'dense planting' => 'گنجان کاشت', 'continuous' => 'مسلسل', 'injury' => 'زخم یا نقصان',
            'remove' => 'نکال دیں', 'remove infected' => 'متاثرہ کو نکال دیں', 'keep' => 'رکھیں', 'maintain' => 'برقرار رکھیں', 'ensure' => 'یقینی بنائیں', 'improve' => 'بہتر بنائیں',
            'hand removal' => 'ہاتھ سے نکالنا', 'early removal' => 'ابتدائی مرحلے میں نکالنا', 'netting' => 'جالی دار پردہ', 'net covers' => 'جالی دار پردے', 'overhead watering' => 'اوپر سے آبپاشی',
            'overhead irrigation' => 'اوپر سے آبپاشی', 'proper spacing' => 'مناسب فاصلہ', 'sunlight exposure' => 'دھوپ کی مناسب روشنی', 'stress on plants' => 'پودوں پر دباؤ',
            'same field every year' => 'ہر سال اسی کھیت میں کاشت', 'continuous radish growing' => 'مسلسل مولی کی کاشت', 'planting' => 'کاشت', 'sowing' => 'بوائی', 'before planting' => 'کاشت سے پہلے', 'during planting' => 'کاشت کے دوران',
            'cover soil around plants' => 'پودوں کے اردگرد مٹی چڑھائیں', 'store in dry conditions' => 'خشک حالات میں ذخیرہ کریں', 'field clean' => 'کھیت صاف', 'clean tools' => 'صاف اوزار',
            'potatoes' => 'آلو', 'roots' => 'جڑیں', 'leaves' => 'پتے', 'stems' => 'تنے', 'fruits' => 'پھل', 'flowers' => 'پھول', 'pods' => 'پھلیاں',
            'root growth' => 'جڑوں کی نشوونما',
            'fruit production' => 'پھلوں کی پیداوار',
            'crop yield' => 'فصل کی پیداوار',
            'market demand' => 'منڈی کی طلب',
            'good income' => 'اچھی آمدنی',
            'high nutritional value' => 'زیادہ غذائی قدر',
            'food security' => 'غذائی تحفظ',
            'Food' => 'خوراک', 'Biryani' => 'بریانی', 'Boiled Rice' => 'ابلے ہوئے چاول', 'Fiber' => 'ریشہ',
            'Textile Industry' => 'ٹیکسٹائل صنعت', 'Cottonseed oil' => 'کپاس کے بیج کا تیل', 'Sugar' => 'چینی',
            'Jaggery' => 'گڑ', 'Ethanol' => 'ایتھانول', 'Molasses' => 'شیرہ', 'Fodder' => 'چارہ',
            'Animal Feed' => 'جانوروں کی خوراک', 'Industrial Uses' => 'صنعتی استعمالات', 'Industrial Products' => 'صنعتی مصنوعات',
            'Starch' => 'نشاستہ', 'Corn Oil' => 'مکئی کا تیل', 'Spring' => 'بہار', 'Monsoon' => 'برسات',
            'Rabi' => 'ربیع', 'Kharif' => 'خریف', 'Summer Crop' => 'موسم گرما کی فصل', 'Winter Crop' => 'موسم سرما کی فصل',
            'to' => 'تا', 'and' => 'اور', 'or' => 'یا', 'High' => 'زیادہ', 'Moderate' => 'درمیانہ', 'Low' => 'کم',
            'Clayey' => 'چکنی', 'Loamy' => 'دومی', 'Sandy loam' => 'ریتیلی دومی', 'Fertile' => 'زرخیز',
            'Well-drained' => 'اچھی نکاسی والی', 'Soil' => 'مٹی', 'Punjab' => 'پنجاب', 'Sindh' => 'سندھ',
            'KPK' => 'خیبر پختونخوا', 'Balochistan' => 'بلوچستان', 'Basmati' => 'باسمتی', 'Jowar' => 'جوار', 'Bajra' => 'باجرا', 'Lauki' => 'لوکی',
            'animal feed' => 'جانوروں کی خوراک',
            'daily cooking' => 'روزمرہ کھانا پکانے',
            'vitamins and minerals' => 'وٹامنز اور معدنیات',
            'vitamins, minerals, and fiber' => 'وٹامنز، معدنیات اور فائبر',
            'healthy growth' => 'صحت مند نشوونما',
            'high-quality' => 'اعلیٰ معیار',
            'agricultural recommendations' => 'زرعی سفارشات',
            'around the world' => 'دنیا بھر میں', 'around world' => 'دنیا بھر میں', 'many tropical countries' => 'بہت سے گرم علاقوں کے ممالک',
            'tropical countries' => 'گرم علاقوں کے ممالک', 'tropical and subtropical regions' => 'گرم و نیم گرم علاقے',
            'arid and semi-arid regions' => 'خشک اور نیم خشک علاقے', 'arid and semi-arid' => 'خشک اور نیم خشک',
            'arid' => 'خشک', 'semi-arid' => 'نیم خشک', 'cereal crops' => 'اناج کی فصلیں', 'cereal crop' => 'اناج کی فصل',
            'fodder crop' => 'چارہ فصل', 'fodder' => 'چارہ', 'food crops' => 'غذائی فصلیں', 'cash crops' => 'نقد آور فصلیں',
            'cash crop' => 'نقد آور فصل', 'sugar production' => 'چینی کی پیداوار', 'sugar' => 'چینی', 'jaggery' => 'گڑ',
            'molasses' => 'شیرہ', 'ethanol' => 'ایتھانول', 'starch' => 'نشاستہ', 'glucose' => 'گلوکوز',
            'human food' => 'انسانی خوراک', 'daily diet' => 'روزمرہ خوراک', 'animal feed' => 'جانوروں کی خوراک',
            'textile industry' => 'ٹیکسٹائل صنعت', 'textile' => 'ٹیکسٹائل', 'clothes' => 'کپڑے', 'fabrics' => 'منسوجات',
            'other products' => 'دیگر مصنوعات', 'export industries' => 'برآمدی صنعتیں', 'export industry' => 'برآمدی صنعت',
            'exports' => 'برآمدات', 'high-quality' => 'اعلیٰ معیار', 'white gold' => 'سفید سونا', 'fiber' => 'ریشہ',
            'vitamin content' => 'وٹامنز کی مقدار', 'high vitamin content' => 'وٹامنز کی زیادہ مقدار', 'vitamins' => 'وٹامنز',
            'minerals' => 'معدنیات', 'antioxidants' => 'اینٹی آکسیڈنٹس', 'protein' => 'پروٹین', 'fiber' => 'فائبر',
            'linseed oil' => 'السی کا تیل', 'edible oil' => 'خوردنی تیل', 'fresh consumption' => 'تازہ استعمال',
            'food processing' => 'خوراک کی تیاری', 'medicinal products' => 'طبی مصنوعات', 'herbal medicines' => 'جڑی بوٹیوں سے تیار ادویات',
            'health benefits' => 'صحت کے فوائد', 'market demand' => 'منڈی کی طلب', 'local markets' => 'مقامی منڈیاں',
            'international markets' => 'بین الاقوامی منڈیاں', 'agriculture economy' => 'زرعی معیشت', 'agricultural economy' => 'زرعی معیشت',
            'food security' => 'غذائی تحفظ', 'fodder security' => 'چارے کا تحفظ', 'dry areas' => 'خشک علاقوں',
            'sufficient water availability' => 'پانی کی وافر دستیابی', 'proper sunlight' => 'مناسب دھوپ', 'moderate water supply' => 'معتدل پانی کی فراہمی',
            'moderate irrigation' => 'معتدل آبپاشی', 'fertile soil' => 'زرخیز مٹی', 'well-drained soil' => 'اچھی نکاسی والی مٹی',
            'cool and dry climates' => 'ٹھنڈی اور خشک آب و ہوا', 'warm and humid climates' => 'گرم اور مرطوب آب و ہوا',
            'warm climates' => 'گرم آب و ہوا', 'cool climates' => 'ٹھنڈی آب و ہوا',
            'sugar mills' => 'چینی کی ملیں', 'income to farmers' => 'کسانوں کو آمدنی', 'farmers' => 'کسان',
            'producing' => 'پیداوار کرنے', 'production' => 'پیداوار', 'products' => 'مصنوعات', 'industries' => 'صنعتیں',
            'warm' => 'گرم', 'hot' => 'گرم', 'cool' => 'ٹھنڈا', 'dry' => 'خشک', 'wet' => 'نم',
            'humid' => 'مرطوب', 'moist' => 'نم', 'conditions' => 'حالات', 'condition' => 'حالت',
            'weather' => 'موسم', 'poorly drained' => 'ناقص نکاسی والی', 'high moisture' => 'زیادہ نمی',
            'excess moisture' => 'ضرورت سے زیادہ نمی', 'nursery stage' => 'نرسری کا مرحلہ', 'nursery' => 'نرسری',
            'seedlings' => 'ننھے پودے', 'seedling' => 'ننھا پودا', 'curds' => 'گوبھی کے سر', 'bulbs' => 'گانٹھیں',
            'bulb' => 'گانٹھ', 'tubers' => 'گٹھے', 'tuber' => 'گٹھا', 'pods' => 'پھلیاں', 'pod' => 'پھلی',
            'weeds' => 'جڑی بوٹیاں', 'weed' => 'جڑی بوٹی', 'overcrowding' => 'بہت زیادہ گنجان کاشت',
            'excess nitrogen' => 'ضرورت سے زیادہ نائٹروجن', 'natural enemies' => 'قدرتی دشمن حشرات',
            'ladybirds' => 'لیڈی برڈ', 'ladybird' => 'لیڈی برڈ', 'infected plant debris' => 'متاثرہ پودوں کی باقیات',
            'plant debris' => 'پودوں کی باقیات', 'damaged roots' => 'متاثرہ جڑیں', 'leaf edges' => 'پتوں کے کنارے',
            'white lines' => 'سفید لکیریں', 'small holes' => 'چھوٹے سوراخ', 'tiny holes' => 'ننھے سوراخ',
            'Imidacloprid' => 'امیڈاکلوپرڈ',
            'Thiamethoxam' => 'تھیامیٹھوکزام',
            'Acetamiprid' => 'ایسیٹامی پرڈ',
            'Emamectin Benzoate' => 'ایمامیکٹن بینزوئیٹ',
            'Chlorpyrifos' => 'کلورپائریفوس',
            'Spinosad' => 'اسپائنو سیڈ',
            'Metalaxyl' => 'میٹالیکسل',
            'Ridomil' => 'رڈومل',
            'Carbendazim' => 'کاربینڈازم',
            'Mancozeb' => 'مینکوزیب',
            'Copper-based fungicides' => 'تانبے پر مبنی پھپھوندی کش ادویات',
            'Copper-based bactericides' => 'تانبے پر مبنی جراثیم کش ادویات',
            'Chlorothalonil' => 'کلوروتھالونل',
            'Propiconazole' => 'پروپیکونازول',
            'Sulfur' => 'گندھک',
            'Sulphur' => 'گندھک',
            'Lambda-cyhalothrin' => 'لیمبڈا سائہیلوتھرن',
            'Abamectin' => 'ایبامیکٹن',
            'Azoxystrobin' => 'ایزوکسٹروبن',
            'Buprofezin' => 'بیوپروفیزن',
            'Captan' => 'کیپٹن',
            'Carbaryl' => 'کارباریل',
            'Carbofuran' => 'کاربوفیوران',
            'Chlorantraniliprole' => 'کلورانٹرانیلی پرول',
            'Cypermethrin' => 'سائپرمیترین',
            'Dimethoate' => 'ڈائیمتھیویٹ',
            'Fipronil' => 'فپرونل',
            'Hexaconazole' => 'ہیکسا کونازول',
            'Indoxacarb' => 'انڈوکسا کارب',
            'Malathion' => 'مالاتھیون',
            'Myclobutanil' => 'مائیکلوبیوٹانل',
            'Penconazole' => 'پینکونازول',
            'Pyriproxyfen' => 'پائری پروکسی فین',
            'Spinetoram' => 'اسپینیٹورام',
            'Streptomycin' => 'اسٹریپٹومائسن',
            'Tebuconazole' => 'ٹیبوکونازول',
            'Thiophanate-methyl' => 'تھیوفینیٹ میتھائل',
            'Thiram' => 'تھیرام',
            'Triazole' => 'ٹرائی ایزول',
            'Trichoderma' => 'ٹرائیکوڈرما',
            'Tricyclazole' => 'ٹرائی سائیکلازول',
            'Validamycin' => 'ویلیڈامائسن',
            'Neem' => 'نیم',
            'Bordeaux' => 'بورڈو محلول',
            'Boron' => 'بوران',
            'Potassium' => 'پوٹاشیم',
            'pH' => 'پی ایچ',
            'moths' => 'پروانے', 'moth' => 'پروانہ', 'dead hearts' => 'مرجھائے ہوئے مرکزی شاخیں',
            'Germination Stage' => 'انکرن کا مرحلہ', 'Seedling Stage' => 'پنیری کا مرحلہ',
            'Vine Growth Stage' => 'بیل کی نشوونما کا مرحلہ', 'Flowering Stage' => 'پھول آنے کا مرحلہ',
            'Fruit Formation Stage' => 'پھل بننے کا مرحلہ', 'Fruit Development Stage' => 'پھلوں کی نشوونما کا مرحلہ',
            'Harvesting Stage' => 'کٹائی کا مرحلہ', 'Seeds sprout' => 'بیج انکرت ہوتے ہیں',
            'white heads' => 'سفید بالیاں', 'grain filling' => 'دانے بھرنے کا مرحلہ', 'reduced yield' => 'کم پیداوار',
            'field sanitation' => 'کھیت کی صفائی', 'warm soil conditions' => 'گرم مٹی کے حالات',
            'small vines' => 'چھوٹی بیلیں', 'start developing leaves' => 'پتے بنانا شروع کرتی ہیں',
            'rapid spreading' => 'تیزی سے پھیلاؤ', 'tendrils' => 'بل دار شاخیں', 'male and female flowers' => 'نر اور مادہ پھول',
            'fruit formation' => 'پھل بننے کا مرحلہ', 'fruits grow in size' => 'پھل سائز میں بڑھتے ہیں',
            'become mature' => 'پختہ ہو جاتے ہیں', 'tender green fruits' => 'نرم سبز پھل', 'high yield production' => 'زیادہ پیداوار',
            'plant sap' => 'پودے کا رس', 'sticky' => 'چپچپا', 'winding lines' => 'ٹیڑھی میڑھی لکیریں',
            'sunken spots' => 'دھنسے ہوئے دھبے', 'powder-like patches' => 'پاؤڈر جیسے دھبے', 'beneficial insects' => 'فائدہ مند حشرات',
            'heavily infested leaves' => 'زیادہ متاثرہ پتے', 'yellow sticky traps' => 'زرد چپکنے والے پھندے',
            'rain splash' => 'بارش کے چھینٹے', 'rain splashes' => 'بارش کے چھینٹے', 'rain' => 'بارش', 'wind' => 'ہوا',
            'infected seeds' => 'متاثرہ بیج', 'infected seed' => 'متاثرہ بیج', 'infected plant parts' => 'متاثرہ پودوں کے حصے',
            'infected leaves' => 'متاثرہ پتے', 'plant parts' => 'پودوں کے حصے', 'crop debris' => 'فصل کی باقیات',
            'crop residues' => 'فصل کی باقیات', 'plant debris' => 'پودوں کی باقیات', 'flowers' => 'پھول', 'flower' => 'پھول',
            'fruits' => 'پھل', 'fruit' => 'پھل', 'leaves' => 'پتے', 'leaf' => 'پتا', 'roots' => 'جڑیں', 'root' => 'جڑ',
            'stems' => 'تنے', 'stem' => 'تنا', 'young leaves' => 'نئی پتیوں', 'young plants' => 'ننھے پودے',
            'wet weather conditions' => 'نم موسمی حالات', 'wet weather' => 'نم موسم', 'humid weather' => 'مرطوب موسم',
            'dry weather' => 'خشک موسم', 'cool and wet weather' => 'ٹھنڈا اور نم موسم', 'cool and moist weather' => 'ٹھنڈا اور نم موسم',
            'warm and humid conditions' => 'گرم اور مرطوب حالات', 'warm and humid weather' => 'گرم اور مرطوب موسم',
            'warm and dry conditions' => 'گرم اور خشک حالات', 'dry but humid weather' => 'خشک لیکن مرطوب موسم',
            'dry humid conditions' => 'خشک اور مرطوب حالات', 'wet and humid conditions' => 'نم اور مرطوب حالات',
            'cool and humid conditions' => 'ٹھنڈے اور مرطوب حالات', 'cool, wet, and humid conditions' => 'ٹھنڈے، نم اور مرطوب حالات',
            'warm weather' => 'گرم موسم', 'hot weather' => 'گرم موسم', 'humid conditions' => 'مرطوب حالات',
            'wet soil' => 'نم مٹی', 'wet soil conditions' => 'نم مٹی کے حالات', 'poorly drained soil' => 'ناقص نکاسی والی مٹی',
            'high humidity' => 'زیادہ نمی', 'humidity at night' => 'رات کے وقت زیادہ نمی', 'cool nights' => 'ٹھنڈی راتیں',
            'water movement' => 'پانی کی روانی', 'water flow' => 'پانی کا بہاؤ', 'water transport' => 'پانی کی ترسیل',
            'water supply' => 'پانی کی فراہمی', 'nutrient uptake' => 'غذائی اجزا کا جذب', 'vascular tissues' => 'نباتاتی نالیوں کے بافتے',
            'abnormal flower and shoot growth' => 'پھولوں اور نئی شاخوں کی غیر معمولی نشوونما', 'growing buds' => 'نشوونما پاتی ہوئی کلیاں',
            'Light irrigation if needed' => 'ضرورت کے مطابق ہلکی آبپاشی کریں۔',
            '1–2 irrigations depending on soil moisture' => 'مٹی کی نمی کے مطابق ایک سے دو بار آبپاشی کریں۔',
            'Critical watering required' => 'اس مرحلے پر مناسب مقدار میں پانی دینا بہت ضروری ہے۔',
            'Critical water requirement' => 'اس مرحلے پر پانی کی ضرورت بہت زیادہ ہوتی ہے۔',
            'Moderate irrigation' => 'معتدل آبپاشی کریں۔',
            'Proper moisture needed' => 'مناسب مقدار میں نمی ضروری ہے۔',
            'Light irrigation if rainfall is low' => 'اگر بارش کم ہو تو ہلکی آبپاشی کریں۔',
            'Moderate irrigation if available' => 'دستیاب ہونے کی صورت میں معتدل آبپاشی کریں۔',
            'Moisture required for better yield' => 'بہتر پیداوار کے لیے مناسب نمی ضروری ہے۔',
            'Regular watering' => 'باقاعدگی سے پانی دیں۔',
            'Regular irrigation every 7–10 days' => 'ہر 7 سے 10 دن بعد باقاعدگی سے آبپاشی کریں۔',
            'Light irrigation after sowing' => 'بوائی کے بعد ہلکی آبپاشی کریں۔',
            'Light irrigation or rainfall' => 'ہلکی آبپاشی کریں یا بارش کا پانی کافی ہوتا ہے۔',
            'Healthy and disease-free rhizomes' => 'صحت مند اور بیماری سے پاک گانٹھیں۔',
            'Medium sized fingers' => 'درمیانی جسامت کے صحت مند ٹکڑے۔',
            'Medium-sized fingers' => 'درمیانی جسامت کے صحت مند ٹکڑے۔',
            'High sprouting ability' => 'اچھی پھوٹ کی صلاحیت۔',
            'Certified planting material' => 'مصدقہ کاشت کاری مواد۔',
            'Healthy corms or suckers' => 'صحت مند گانٹھیں یا شاخ سے نکلنے والے پودے۔',
            'Disease-free planting material' => 'بیماری سے پاک کاشت کاری مواد۔',
            'Medium-sized, well-developed corms' => 'درمیانی جسامت کی مکمل نشوونما یافتہ گانٹھیں۔',
            'Healthy and disease-free' => 'صحت مند اور بیماری سے پاک۔',
            'Well-developed buds' => 'مکمل نشوونما یافتہ کلیاں۔',
            'Free from rot and pests' => 'سڑن اور کیڑوں سے پاک۔',
            'Medium-sized pieces with 2–3 buds' => 'درمیانی جسامت کے ایسے ٹکڑے جن پر 2 سے 3 کلیاں ہوں۔',
            'Healthy grafted saplings' => 'صحت مند پیوند شدہ پودے۔',
            'Disease-free plants' => 'بیماری سے پاک پودے۔',
            'Strong root system' => 'مضبوط جڑوں کا نظام۔',
            'Certified nursery plants' => 'مصدقہ نرسری کے پودے۔',
            'Deep ploughing to loosen soil' => 'مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔',
            'Deep ploughing for loosening soil' => 'مٹی کو نرم کرنے کے لیے گہرا ہل چلایا جاتا ہے۔',
            'Ensures proper irrigation' => 'مناسب آبپاشی کو یقینی بناتا ہے۔',
            'Ensures proper water distribution' => 'پانی کی یکساں تقسیم کو یقینی بناتا ہے۔',
            'Ensures proper irrigation flow' => 'آبپاشی کے پانی کے مناسب بہاؤ کو یقینی بناتا ہے۔',
            'Add compost or farmyard manure' => 'کمپوسٹ یا گوبر کی کھاد شامل کریں۔',
            'Add compost or farmyard manure' => 'کمپوسٹ یا گوبر کی کھاد شامل کریں۔',
            'Removes unwanted plants' => 'غیر ضروری پودوں کو ختم کرتا ہے۔',
            'Removes competing plants' => 'مقابلہ کرنے والے پودوں کو ختم کرتا ہے۔',
            'Removes competing weeds' => 'مقابلہ کرنے والی جڑی بوٹیوں کو ختم کرتا ہے۔',
            'Proper land preparation improves root growth and increases yield quality' => 'زمین کی مناسب تیاری جڑوں کی نشوونما بہتر کرتی ہے اور پیداوار کے معیار میں اضافہ کرتی ہے۔',
            'Proper land preparation improves root growth and fruit production' => 'زمین کی مناسب تیاری جڑوں کی نشوونما اور پھلوں کی پیداوار بہتر کرتی ہے۔',
            'Good land preparation improves root development and nitrogen fixation' => 'زمین کی اچھی تیاری جڑوں کی نشوونما اور نائٹروجن کے اخراج کو بہتر بناتی ہے۔',
            'Soybean is usually sown in June to July in Pakistan during the Kharif season. Farmers prefer early monsoon conditions for better germination and growth.' => 'پاکستان میں سویا بین کی بوائی عموماً خریف کے موسم میں جون سے جولائی تک کی جاتی ہے۔ بہتر انکرن اور ابتدائی نشوونما کے لیے کسان برسات کے آغاز کے حالات کو ترجیح دیتے ہیں۔',
            'Soybean requires warm temperatures and sufficient moisture for germination. Monsoon rains help in early growth and improve plant establishment.' => 'سویا بین کے انکرن کے لیے گرم درجہ حرارت اور کافی نمی ضروری ہے۔ برسات کی بارشیں ابتدائی نشوونما میں مدد دیتی ہیں اور پودوں کے مضبوط قیام کو بہتر بناتی ہیں۔',
            'Fruit Development: Regular watering for better fruit size' => 'پھلوں کی نشوونما: بہتر جسامت کے لیے باقاعدگی سے پانی دیں۔',
        ];
        uksort($phrases, fn($a,$b)=>strlen($b)<=>strlen($a));
        foreach ($phrases as $en=>$ur) {
            $text = preg_replace('/(?<![A-Za-z])' . preg_quote($en,'/') . '(?![A-Za-z])/iu', $ur, $text) ?? $text;
        }
        return $text;
    }

    private function translateKnownAgriculturePhrases(string $text): string
    {
        $before = $text;
        $text = $this->applyAgriculturePhraseRules($text);
        $text = $this->applyAgricultureSentenceRules($text);
        return $text;
    }

    public function translate(string $text): string
    {
        if ($text === '') return $text;
        $leading = preg_match('/^\s*/u', $text, $lm) ? $lm[0] : '';
        $trailing = preg_match('/\s*$/u', $text, $tm) ? $tm[0] : '';
        $core = trim($text);
        if ($core === '') return $text;
        if ($this->isProtectedValue($core)) return $text;
        if (preg_match('/^[\p{Arabic}\s\d\p{P}\p{S}]+$/u', $core)) {
            return $leading . $this->normalizeUrdu($core) . $trailing;
        }
        $translatedRaw = $this->translateText($core);
        $translated = $this->removeEnglish($translatedRaw);
        if ($translatedRaw !== $core && !$this->hasEnglish($translatedRaw)) {
            $translated = $this->fixGrammar($translated);
        } else {
            $translated = $this->normalizeUrdu($translated);
        }
        return $leading . $translated . $trailing;
    }

    private function isProtectedValue(string $text): bool
    {
        $trim = trim($text);
        if ($trim === '') return true;
        if (preg_match('/^(?:https?:\/\/|www\.)/iu', $trim)) return true;
        if (preg_match('/^[A-Za-z0-9._%+\-]+@[A-Za-z0-9.\-]+\.[A-Za-z]{2,}$/u', $trim)) return true;
        if (preg_match('/^[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/u', $trim)) return true;
        if (preg_match('/^\+?\d[\d\sXx().-]{6,}[Xx\d]$/u', $trim)) return true;
        if (preg_match('/^&(?:nbsp|amp|lt|gt|quot|apos|#\d+|#x[0-9a-f]+);$/iu', $trim)) return true;
        return false;
    }

    public function translateHtml(string $html): string
    {
        $protected = [];
        $html = preg_replace_callback('/<([a-z0-9]+)\b[^>]*data-no-translate[^>]*>.*?<\/\1>/is', function ($m) use (&$protected) {
            $key = '⟦¤' . count($protected) . '¤⟧';
            $protected[$key] = $m[0];
            return $key;
        }, $html) ?? $html;
        $html = preg_replace_callback('/(?:https?:\/\/[^\s<>]+|www\.[^\s<>]+|[A-Za-z0-9._%+\-]+@[A-Za-z0-9.\-]+\.[A-Za-z]{2,}|[A-Za-z0-9.-]+\.[A-Za-z]{2,}|\+?\d[\d\sXx().-]{6,}[Xx\d]|&(?:nbsp|amp|lt|gt|quot|apos|#\d+|#x[0-9a-f]+);)/iu', function ($m) use (&$protected) {
            $key = '⟦¤' . count($protected) . '¤⟧';
            $protected[$key] = $m[0];
            return $key;
        }, $html) ?? $html;

        $parts = preg_split('/(<[^>]*>)/s', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        if ($parts === false) return $html;

        $result = '';
        $rawDepth = 0;

        foreach ($parts as $part) {
            if ($part === '') continue;
            if ($part[0] === '<') {
                if (preg_match('/^<\s*(script|style|noscript|svg)\b[^>]*>/is', $part)) {
                    $rawDepth++;
                } elseif (preg_match('/^<\s*\/\s*(script|style|noscript|svg)\s*>/is', $part)) {
                    $rawDepth = max(0, $rawDepth - 1);
                }
                $result .= $part;
                continue;
            }
            if ($rawDepth > 0 || trim($part) === '') {
                $result .= $part;
                continue;
            }
            $result .= $this->translate($part);
        }

        foreach (['placeholder','title','alt','aria-label','data-tooltip'] as $attribute) {
            $result = preg_replace_callback('/(' . preg_quote($attribute, '/') . '\s*=\s*["\'])(.*?)(["\'])/iu', function ($m) {
                $value = html_entity_decode($m[2], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                if (trim($value) === '' || $this->isSafe($value)) return $m[0];
                return $m[1] . e($this->translate($value)) . $m[3];
            }, $result) ?? $result;
        }

        foreach ($protected as $key => $value) {
            $result = str_replace($key, $value, $result);
        }

        if (session('language') === 'ur' || app()->getLocale() === 'ur') {
            $result = $this->reorderUrduNavbar($result);
            $result = $this->appendClientUrduCorrections($result);
        }

        return $result;
    }

    public function normalizeUrdu(string $text): string
    {
        $replacements = [
            'کومپلیٹی' => 'مکمل طور پر',
            'کومپلیٹلی' => 'مکمل طور پر', 'کومپلیٹ' => 'مکمل', 'گویڈی' => 'رہنمائی', 'گویڈی' => 'رہنمائی',
            'ریلیٹیویلی' => 'نسبتاً', 'ریلیٹو' => 'نسبتاً', 'کنٹروللینگ' => 'قابو کرنے', 'ڈیابیٹیس' => 'ذیابیطس',
            'سوبٹروپیکال' => 'نیم گرم', 'کولڈ' => 'سرد', 'کاننوٹ' => 'نہیں کر سکتا', 'فاسٹ-گراوینگ' => 'تیزی سے بڑھنے والا',
            'اسٹیلل یمماچر' => 'ابھی پوری طرح پکے نہ ہوں', 'یاسی ڈیگیسٹیبیلیٹی' => 'آسان ہاضمہ', 'فرٹیلیٹی' => 'زرخیزی',
            'سپریاڈینگ' => 'پھیلاؤ', 'وینیس' => 'بیلیں', 'ٹینڈریلس' => 'بل دار شاخیں', 'مالی' => 'نر', 'مادہ' => 'مادہ',
            'کڑوا گاورڈس' => 'کریلے', 'ینڈیان' => 'بھارتی', 'چینیسی' => 'چینی', 'سموتھر' => 'ہموار', 'پرییا' => 'پریا',
            'ماوسمی' => 'موسمی', 'بوسٹس' => 'بڑھاتا ہے', 'ییی' => 'اچھی', 'ےڈس' => 'مدد کرتا ہے', 'پولسی' => 'دال دار',
            'لینٹیلس' => 'دال', 'ماکینگ' => 'بنانا', 'فیکسینگ' => 'ثابت کرنا', 'ریلاٹیویلی' => 'نسبتاً', 'ینسرینگ' => 'یقینی بناتے ہوئے',
            'فروری کو مارچ' => 'فروری تا مارچ', 'جون کو جولائی' => 'جون تا جولائی', 'اپریل کو جون' => 'اپریل تا جون',
            'اگست کو اکتوبر' => 'اگست تا اکتوبر', 'کاشت انحصار کرتے ہوئے' => 'کاشت کے بعد، قسم کے مطابق',
            'بہت کولڈ حالات' => 'بہت زیادہ سرد حالات', 'گرمی حالات' => 'گرم حالات', 'اچھا انکرت' => 'اچھا انکرن',
            'بویا گیا میں' => 'بویا جاتا ہے', 'کٹائی کی گئی' => 'کی کٹائی کی جاتی ہے', 'ہے بویا گیا' => 'بویا جاتا ہے',
            'ہے کٹائی کی گئی' => 'کی کٹائی کی جاتی ہے', 'کینوٹ' => 'نہیں کر سکتا', 'گڈ' => 'اچھا', 'فرٹیلیٹی' => 'زرخیزی',
            'کومپلیٹلی' => 'مکمل طور پر',
            'کومپلیٹ' => 'مکمل',
            'گویڈی' => 'رہنمائی',
            'گائیڈی' => 'رہنمائی',
            'گائیڈ' => 'رہنمائی',
            'ڈراوغٹ-ریسیسٹانٹ' => 'خشک سالی برداشت کرنے والا',
            'ڈراوغٹ ریسیسٹانٹ' => 'خشک سالی برداشت کرنے والا',
            'ڈراوٹ-ریسیسٹانٹ' => 'خشک سالی برداشت کرنے والا',
            'ڈراوٹ ریسیسٹانٹ' => 'خشک سالی برداشت کرنے والا',
            'ریسیسٹانٹ' => 'مزاحم',
            'ریزیسٹانٹ' => 'مزاحم',
            'ریسسٹینٹ' => 'مزاحم',
            'ڈراوغٹ' => 'خشک سالی',
            'ڈراوٹ' => 'خشک سالی',
            'کومپلیٹ' => 'مکمل',
            'کومپلیٹڈ' => 'مکمل کیا گیا',
            'کونٹیکٹ' => 'رابطہ',
            'کونٹیکٹ' => 'رابطہ',
            'لنکس' => 'روابط',
            'لِنکس' => 'روابط',
            'سرویکیس' => 'خدمات',
            'سروِسز' => 'خدمات',
            'سرویسز' => 'خدمات',
            'وسیفول ٹولس' => 'مفید اوزار',
            'فارم ڈیکیژنس' => 'زرعی فیصلے',
            'فارمینگ ڈیکیژنس' => 'زرعی فیصلے',
            'فارمینگ' => 'کاشت کاری',
            'فارمنگ' => 'کاشت کاری',
            'فارم' => 'کھیت',
            'فصلنگ' => 'کاشت',
            'کناولیڈگی' => 'علم',
            'کناولیج' => 'علم',
            'کناولیج' => 'علم',
            'ینسیغٹس' => 'معلومات',
            'انسائٹس' => 'معلومات',
            'ینٹیللیگینٹ' => 'ذہین',
            'انٹیلجینٹ' => 'ذہین',
            'ٹگیتھر' => 'اکٹھا',
            'ٹُگیدر' => 'اکٹھا',
            'سیمپلی' => 'آسان',
            'یکسپلوری' => 'دریافت کریں',
            'ایکسپلوری' => 'دریافت کریں',
            'کوممونلی' => 'عام طور پر',
            'اباوٹ' => 'کے بارے میں',
            'وسیفول' => 'مفید',
            'یوزفول' => 'مفید',
            'ڈیکیژنس' => 'فیصلے',
            'یسسینٹیال' => 'ضروری',
            'برینگس' => 'پیش کرتا ہے',
            'ونی' => 'ایک',
            'پلیٹفورم' => 'پلیٹ فارم',
            'پلاٹفورم' => 'پلیٹ فارم',
            'پلیٹفارم' => 'پلیٹ فارم',
            'کروپ' => 'فصل',
            'کروپس' => 'فصلیں',
            'پیست مینیجمنٹ' => 'کیڑوں کا انتظام',
            'مینیجمنٹ' => 'انتظام',
            'پیست' => 'کیڑا',
            'پیٹس' => 'کیڑے',
            'نالج' => 'علم',
            'ٹولز' => 'اوزار',
            'سپورٹ' => 'مدد',
            'ہیلتھ' => 'صحت',
            'انفارمیشن' => 'معلومات',
            'ریکوائرمنٹ' => 'ضرورت',
            'ریکوائرمنٹس' => 'ضروریات',
            'کریکٹرز' => 'خصوصیات',
            'کریکٹرائزیشن' => 'خصوصیات کی وضاحت',
            'ہائی کوالٹی' => 'اعلیٰ معیار',
            'ہائیلی' => 'بہت زیادہ',
            'اڈیقویٹ' => 'کافی',
            'ایبونڈنٹ' => 'وافر',
            'ایکسٹریم' => 'انتہائی',
            'ریپڈلی' => 'تیزی سے',
            'ریگولرلی' => 'باقاعدگی سے',
            'امیدی ایٹلی' => 'فوراً',
            'امپورٹنس' => 'اہمیت',
            'نیوٹریشنل' => 'غذائی',
            'ریزیسٹنس' => 'مزاحمت',
            'پاپولیشن' => 'تعداد',
            'پروٹیکشن' => 'حفاظت',
            'کنٹرول' => 'تدارک',
            'ریcommینڈڈ' => 'تجویز کردہ',
            'پریونشن' => 'بچاؤ',
            'سائنسفک' => 'سائنسی',
            'ٹیکنالوجی' => 'فنی علم',
            'ٹیکنیکس' => 'طریقے',
            'ٹیکنیک' => 'طریقہ',
            'موسم ینسیغٹس' => 'موسم کی معلومات',
            'سمارٹ زراعت پلاٹفورم' => 'ذہین زرعی پلیٹ فارم',
            'گرو اسمارٹ ڈیکیژنس' => 'گرو اسمارٹ کے فیصلے',
            'گرو اسمارٹ ڈیکیژن' => 'گرو اسمارٹ کا فیصلہ',
            'گرو اسمارٹ.com' => 'GrowSmart.com',
            'گرو اسمارٹ۔com' => 'GrowSmart.com',
            '&نبسپ' => '&nbsp;',
            'سمارٹ زراعت' => 'ذہین زراعت',
            'سمارٹ زرعی' => 'ذہین زرعی',
            'فارمینگ' => 'کاشت کاری',
            'کناولیڈگی' => 'علم',
            'ینسیغٹس' => 'بصیرت',
            'ینٹیللیگینٹ' => 'ذہین',
            'ٹگیتھر' => 'اکٹھا',
            'سیمپلی' => 'آسان',
            'یکسپلوری' => 'دریافت کریں',
            'کوممونلی' => 'عام طور پر',
            'اباوٹ' => 'کے بارے میں',
            'وسیفول' => 'مفید',
            'ڈیکیژنس' => 'فیصلے',
            'یسسینٹیال' => 'ضروری',
            'برینگس' => 'پیش کرتا ہے',
            'ونی' => 'ایک',
            'پلیٹفورم' => 'پلیٹ فارم',
            'پلاٹفورم' => 'پلیٹ فارم',
            'گرو اسمارٹ برینگس یسسینٹیال فارمینگ کناولیڈگی، فصل کی معلومات، موسم ینسیغٹس، کیڑا انتظام اور ینٹیللیگینٹ مٹی تجزیہ ٹگیتھر میں ونی سیمپلی پلاٹفورم۔' => 'گرو اسمارٹ ضروری زرعی علم، فصلوں کی معلومات، موسم کی معلومات، کیڑوں کے انتظام اور مٹی کے ذہین تجزیے کو ایک آسان پلیٹ فارم پر اکٹھا کرتا ہے۔',
            'گرو اسمارٹ برینگس یسسینٹیال فارمینگ کناولیڈگی, فصل کی معلومات, موسم ینسیغٹس, کیڑا انتظام اور ینٹیللیگینٹ مٹی تجزیہ ٹگیتھر میں ونی سیمپلی پلاٹفورم.' => 'گرو اسمارٹ ضروری زرعی علم، فصلوں کی معلومات، موسم کی معلومات، کیڑوں کے انتظام اور مٹی کے ذہین تجزیے کو ایک آسان پلیٹ فارم پر اکٹھا کرتا ہے۔',
            'سمارٹ زراعت' => 'ذہین زراعت',
            'SMART زراعت' => 'ذہین زراعت',
            'پلاٹفورم' => 'پلیٹ فارم',
            'پلیٹفارم' => 'پلیٹ فارم',
            'فارمینگ' => 'کاشت کاری',
            'کناولیڈگی' => 'علم',
            'کناولیج' => 'علم',
            'ینسیغٹس' => 'بصیرت',
            'انسائٹس' => 'بصیرت',
            'ینٹیللیگینٹ' => 'ذہین',
            'ٹگیتھر' => 'اکٹھا',
            'سیمپلی' => 'آسان',
            'یکسپلوری' => 'دریافت کریں',
            'کوممونلی' => 'عام طور پر',
            'اباوٹ' => 'کے بارے میں',
            'تھیم' => 'انہیں',
            'وسیفول' => 'مفید',
            'ڈیکیژنس' => 'فیصلے',
            'یسسینٹیال' => 'ضروری',
            'برینگس' => 'پیش کرتا ہے',
            'ونی' => 'ایک',
            'کیڑا انتظام' => 'کیڑوں کا انتظام',
            'مٹی تجزیہ' => 'مٹی کا تجزیہ',
            'موسم بصیرت' => 'موسم کی معلومات',
            'ضروری کاشت کاری علم' => 'ضروری زرعی علم',
            'آسان پلیٹ فارم' => 'آسان پلیٹ فارم',
            'فارمرز' => 'کسان',
            'فارمر' => 'کسان',
            'فارمنگ' => 'کاشت کاری',
            'نالج' => 'علم',
            'کروپ' => 'فصل',
            'کروپس' => 'فصلیں',
            'پیست' => 'کیڑا',
            'مینیجمنٹ' => 'انتظام',
            'ایکسپلور' => 'دریافت کریں',
            'پاپولر' => 'مقبول',
            'سروسز' => 'خدمات',
            'یوزفول' => 'مفید',
            'ٹولز' => 'اوزار',
            'ڈیش بورڈ' => 'مرکزی صفحہ',
            'لاگ آؤٹ' => 'خروج کریں',
            'لاگ اِن' => 'داخل ہوں',
            'رجسٹر کریں' => 'اندراج کریں',
            'اپ ڈیٹ کریں' => 'تجدید کریں',
            'کمیونٹی' => 'برادری',
            'فورم' => 'مباحثہ گاہ',
            'ڈیٹا' => 'معلومات',
        ];

        $additional = [
            'کومپلیٹی' => 'مکمل طور پر',
            'کومپلیٹلی' => 'مکمل طور پر',
            'کومپلیٹ' => 'مکمل',
            'گویڈی' => 'رہنمائی',
            'گائیڈی' => 'رہنمائی',
            'گائیڈ' => 'رہنمائی',
            'ڈراوغٹ-ریسیسٹانٹ' => 'خشک سالی برداشت کرنے والا',
            'ڈراوغٹ ریسیسٹانٹ' => 'خشک سالی برداشت کرنے والا',
            'ڈراوغٹ ریزسٹنٹ' => 'خشک سالی برداشت کرنے والا',
            'ڈراوغٹ ریسسٹنٹ' => 'خشک سالی برداشت کرنے والا',
            'ڈراوٹ-ریسیسٹانٹ' => 'خشک سالی برداشت کرنے والا',
            'ڈراوٹ ریسیسٹانٹ' => 'خشک سالی برداشت کرنے والا',
            'ریسیسٹانٹ' => 'مزاحم',
            'ریزیسٹانٹ' => 'مزاحم',
            'ریسسٹینٹ' => 'مزاحم',
            'ریزیسٹنٹ' => 'مزاحم',
            'ریسسٹنٹ' => 'مزاحم',
            'ڈراوغٹ' => 'خشک سالی',
            'ڈراوٹ' => 'خشک سالی',
            'فارمینگ' => 'کاشت کاری',
            'فارمنگ' => 'کاشت کاری',
            'کناولیڈگی' => 'علم',
            'کناولیج' => 'علم',
            'ینسیغٹس' => 'معلومات',
            'ینٹیللیگینٹ' => 'ذہین',
            'ٹگیتھر' => 'یکجا',
            'سیمپلی' => 'آسان',
            'یکسپلوری' => 'دریافت کریں',
            'کوممونلی' => 'عام طور پر',
            'اباوٹ' => 'کے بارے میں',
            'وسیفول' => 'مفید',
            'یوزفول' => 'مفید',
            'ڈیکیژنس' => 'فیصلے',
            'یسسینٹیال' => 'ضروری',
            'برینگس' => 'پیش کرتا ہے',
            'ونی' => 'ایک',
            'پلیٹفورم' => 'پلیٹ فارم',
            'پلاٹفورم' => 'پلیٹ فارم',
            'پیست مینیجمنٹ' => 'کیڑوں کا انتظام',
            'پیست' => 'کیڑا',
            'مینیجمنٹ' => 'انتظام',
            'نالج' => 'علم',
            'ٹولز' => 'اوزار',
            'سپورٹ' => 'مدد',
            'انفارمیشن' => 'معلومات',
            'ریکوائرمنٹ' => 'ضرورت',
            'ریکوائرمنٹس' => 'ضروریات',
            'پروٹیکشن' => 'حفاظت',
            'پریونشن' => 'بچاؤ',
            'کریکٹرز' => 'خصوصیات',
            'ہائی کوالٹی' => 'اعلیٰ معیار',
            'اڈیقویٹ' => 'کافی',
            'ایبونڈنٹ' => 'وافر',
            'ایکسٹریم' => 'انتہائی',
            'ریپڈلی' => 'تیزی سے',
            'ریگولرلی' => 'باقاعدگی سے',
            'امپورٹنس' => 'اہمیت',
            'نیوٹریشنل' => 'غذائی',
            'پاپولیشن' => 'تعداد',
            'کنٹرول' => 'تدارک',
            'سائنسفک' => 'سائنسی',
            'ٹیکنیکس' => 'طریقے',
            'ٹیکنیک' => 'طریقہ',
            'تھیم' => 'انہیں',
            'کیڑا انتظام' => 'کیڑوں کا انتظام',
            'مٹی تجزیہ' => 'مٹی کا تجزیہ',
            'موسم بصیرت' => 'موسم کی معلومات',
            'سمارٹ زراعت پلاٹفورم' => 'ذہین زرعی پلیٹ فارم',
            'سمارٹ زراعت' => 'ذہین زراعت',
            'سمارٹ زرعی' => 'ذہین زرعی',
            'گرو اسمارٹ.com' => 'GrowSmart.com',
            'گرو اسمارٹ۔com' => 'GrowSmart.com',
            '&نبسپ' => '&nbsp;',
            'کروپ ڈیٹا' => 'فصلوں کی معلومات',
            'کروپس' => 'فصلیں',
            'کروپ' => 'فصل',
            'فارمرز' => 'کسان',
            'فارمر' => 'کسان',
            'فروٹس' => 'پھل',
            'ویجیٹیبلز' => 'سبزیاں',
            'گرینز' => 'اناج',
            'سوئنگ سیزن' => 'کاشت کا موسم',
            'ہارویسٹ سیزن' => 'کٹائی کا موسم',
            'ریزیسٹنٹ ورائٹیز' => 'مزاحم اقسام',
            'کوییک لنکس' => 'فوری روابط',
            'کوئیک لنکس' => 'فوری روابط',
            'کانٹیکٹ اس' => 'ہم سے رابطہ کریں',
            'ایکسپرٹ سپورٹ' => 'ماہرین کی مدد',
            'کروپ نالج' => 'فصلوں کا علم',
            'ویدر فورکاسٹ' => 'موسم کی پیش گوئی',
            'اے آئی سوائل اینالیسس' => 'اے آئی مٹی کا تجزیہ',
        ];
        $text = strtr($text, $additional);
        $text = strtr($text, $replacements);
        $finalCorrections = [
            'گرو اسمارٹ پیش کرتا ہے ضروری زرعی علم, فصل کی معلومات, موسم معلومات, کیڑوں کا انتظام اور ذہین مٹی کا تجزیہ یکجا میں ایک آسان پلیٹ فارم.' => 'گرو اسمارٹ ضروری زرعی علم، فصلوں کی معلومات، موسم کی معلومات، کیڑوں کے انتظام اور مٹی کے ذہین تجزیے کو ایک آسان پلیٹ فارم پر یکجا کرتا ہے۔',
            'گرو اسمارٹ پیش کرتا ہے ضروری زرعی علم، فصل کی معلومات، موسم معلومات، کیڑوں کا انتظام اور ذہین مٹی کا تجزیہ یکجا میں ایک آسان پلیٹ فارم۔' => 'گرو اسمارٹ ضروری زرعی علم، فصلوں کی معلومات، موسم کی معلومات، کیڑوں کے انتظام اور مٹی کے ذہین تجزیے کو ایک آسان پلیٹ فارم پر یکجا کرتا ہے۔',
            'کڑوا لوکی کو روزانہ پکانے کی وجہ سے کو اس کا زیادہ غذائی قدر اور یاسی ڈیگیسٹیبیلیٹی میں بڑے پیمانے پر استعمال کیا جاتا ہے۔' => 'کریلا اپنی زیادہ غذائی قدر اور آسان ہاضمے کی وجہ سے روزمرہ کھانا پکانے میں بڑے پیمانے پر استعمال ہوتا ہے۔',
            'کڑوا لوکی ہے ایک اہم سبزی فصل اگائی جانے والی میں پاکستان اور بہت سے گرم مرطوب خطوں کا اور سوبٹروپیکال خطے۔' => 'کریلا پاکستان اور بہت سے گرم و نیم گرم علاقوں میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            'کریلا ہے بویا گیا میں یہ موسم' => 'کریلا اس موسم میں بویا جاتا ہے',
            'کریلا ہے کٹائی کی گئی' => 'کریلے کی کٹائی کی جاتی ہے',
            'مونگ ہے بویا گیا' => 'مونگ بویا جاتا ہے',
            'مونگ ہے کٹائی کی گئی' => 'مونگ کی کٹائی کی جاتی ہے',
            'کاشت انحصار کرتے ہوئے پر قسم' => 'کاشت کے بعد، قسم کے مطابق',
            'ہے بویا گیا میں' => 'بویا جاتا ہے',
            'ہے کٹائی کی گئی' => 'کی کٹائی کی جاتی ہے',
        ];
        $text = strtr($text, $finalCorrections);
        return $this->fixGrammar($text);
    }

    private function reorderUrduNavbar(string $html): string
    {
        return preg_replace_callback('/(<div\s+class=[\"\']category-nav[\"\'][^>]*>)(.*?)(<\/div>)/is', function ($m) {
            $inner = $m[2];
            if (!preg_match('/<a\b[^>]*href=[\"\']\/dashboard[\"\'][^>]*>.*?<\/a>/is', $inner, $dashboard)) return $m[0];
            if (!preg_match('/<a\b[^>]*href=[\"\']\/fruit[\"\'][^>]*>.*?<\/a>/is', $inner, $fruit)) return $m[0];
            $tokenDashboard = '⟦¤9001¤⟧';
            $tokenFruit = '⟦¤9002¤⟧';
            $inner = str_replace($dashboard[0], $tokenDashboard, $inner);
            $inner = str_replace($fruit[0], $tokenFruit, $inner);
            $inner = str_replace($tokenDashboard, $fruit[0], $inner);
            $inner = str_replace($tokenFruit, $dashboard[0], $inner);
            return $m[1] . $inner . $m[3];
        }, $html, 1) ?? $html;
    }

    private function appendClientUrduCorrections(string $html): string
    {
        if (stripos($html, '</body>') === false) return $html;
        $script = <<<'HTML'
<script>
(function(){
const fixes={
'کومپلیٹی':'مکمل طور پر','کومپلیٹلی':'مکمل طور پر','کومپلیٹ':'مکمل','گویڈی':'رہنمائی','گائیڈی':'رہنمائی','گائیڈ':'رہنمائی','ڈراوغٹ-ریسیسٹانٹ':'خشک سالی برداشت کرنے والا','ڈراوغٹ ریسیسٹانٹ':'خشک سالی برداشت کرنے والا','ڈراوٹ-ریسیسٹانٹ':'خشک سالی برداشت کرنے والا','ڈراوٹ ریسیسٹانٹ':'خشک سالی برداشت کرنے والا','ریسیسٹانٹ':'مزاحم','ریزیسٹانٹ':'مزاحم','ڈراوغٹ':'خشک سالی','ڈراوٹ':'خشک سالی','فارمینگ':'کاشت کاری','فارمنگ':'کاشت کاری','کناولیڈگی':'علم','کناولیج':'علم','ینسیغٹس':'معلومات','ینٹیللیگینٹ':'ذہین','ٹگیتھر':'اکٹھا','سیمپلی':'آسان','یکسپلوری':'دریافت کریں','کوممونلی':'عام طور پر','اباوٹ':'کے بارے میں','وسیفول':'مفید','یوزفول':'مفید','ڈیکیژنس':'فیصلے','یسسینٹیال':'ضروری','برینگس':'پیش کرتا ہے','پلیٹفورم':'پلیٹ فارم','پلاٹفورم':'پلیٹ فارم','کروپ':'فصل','کروپس':'فصلیں','مینیجمنٹ':'انتظام','پیست':'کیڑا','نالج':'علم','ٹولز':'اوزار','انفارمیشن':'معلومات','ریکوائرمنٹس':'ضروریات','ریزیسٹنس':'مزاحمت','پروٹیکشن':'حفاظت','پاپولیشن':'تعداد','سپورٹ':'مدد','ٹیکنیکس':'طریقے','ٹیکنیک':'طریقہ','گرو اسمارٹ.com':'GrowSmart.com','گرو اسمارٹ۔com':'GrowSmart.com','&نبسپ':'&nbsp;'};
function fix(){document.querySelectorAll('body *').forEach(el=>{if(['SCRIPT','STYLE','NOSCRIPT','SVG'].includes(el.tagName))return;el.childNodes.forEach(n=>{if(n.nodeType!==3)return;let t=n.nodeValue;for(const [a,b] of Object.entries(fixes))t=t.split(a).join(b);if(t!==n.nodeValue)n.nodeValue=t;});});}
if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',fix);else fix();
new MutationObserver(fix).observe(document.body,{childList:true,subtree:true});
})();
</script>
HTML;
        return str_ireplace('</body>', $script . '</body>', $html);
    }

    public function hasEnglish(string $text): bool
    {
        $text = preg_replace('/https?:\/\/\S+|www\.\S+|[A-Za-z0-9._%+\-]+@[A-Za-z0-9.\-]+/iu', '', $text) ?? $text;
        return (bool) preg_match('/[A-Za-z]/u', $text);
    }

    private function translateText(string $text): string
    {
        $text = preg_replace('/[\t\r\n ]+/u', ' ', trim($text)) ?? trim($text);
        $semantic = $this->applySemanticSentenceRules($text);
        if ($semantic !== $text) return $this->fixGrammar($semantic);

        $parts = preg_split('/(?<=[.!?؟۔])\s+(?=[A-Z0-9])/u', $text, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
        if ($parts && count($parts) > 1) {
            $translatedParts = [];
            foreach ($parts as $part) {
                $translatedParts[] = $this->translateTextSegment($part);
            }
            return $this->fixGrammar(implode(' ', $translatedParts));
        }

        return $this->translateTextSegment($text);
    }

    private function translateTextSegment(string $text): string
    {
        $semantic = $this->applySemanticSentenceRules($text);
        if ($semantic !== $text) return $this->fixGrammar($semantic);

        $phrases = $this->phrases;
        uksort($phrases, fn($a, $b) => strlen($b) <=> strlen($a));
        foreach ($phrases as $english => $urdu) {
            if (strlen($english) >= 18) {
                $text = preg_replace('/(?<![A-Za-z])' . preg_quote($english, '/') . '(?![A-Za-z])/iu', $urdu, $text);
            }
        }
        $text = preg_replace_callback('/\b(Pakistan|farmer|farmers|crop|crops|plant|plants|soil|field|weather)[’\']s\b/iu', function ($m) {
            return match (strtolower($m[1])) {
                'pakistan' => 'پاکستان کی',
                'farmer', 'farmers' => 'کسان کا',
                'crop', 'crops' => 'فصل کی',
                'plant', 'plants' => 'پودے کا',
                'soil' => 'مٹی کی',
                'field' => 'کھیت کا',
                'weather' => 'موسم کی',
                default => $m[0],
            };
        }, $text) ?? $text;
        $sentenceRules = [
            '/^(.+?) is one of the most important food crops in (.+?) and many other countries\.?$/iu' => '$1 دنیا کے بہت سے ممالک اور $2 میں اہم ترین غذائی فصلوں میں سے ایک ہے۔',
            '/^(.+?) is a major source of food for millions of people and is widely used in daily meals\.?$/iu' => '$1 لاکھوں لوگوں کی خوراک کا ایک اہم ذریعہ ہے اور روزمرہ کے کھانوں میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            '/^(.+?) is a fast-growing vine crop\.?$/iu' => '$1 تیزی سے بڑھنے والی بیل دار فصل ہے۔',
            '/^(.+?) is a drought-resistant crop that grows well in dry areas\.?$/iu' => '$1 خشک سالی برداشت کرنے والی فصل ہے جو خشک علاقوں میں اچھی نشوونما پاتی ہے۔',
            '/^(.+?) is highly drought-resistant and requires very little irrigation compared to other crops\.?$/iu' => '$1 خشک سالی کے خلاف بہت زیادہ مزاحمت رکھتی ہے اور دوسری فصلوں کے مقابلے میں بہت کم آبپاشی کی ضرورت ہوتی ہے۔',
            '/^(.+?) grows well in high temperatures and low rainfall conditions\.?$/iu' => '$1 زیادہ درجہ حرارت اور کم بارش والے حالات میں اچھی نشوونما پاتی ہے۔',
            '/^(.+?) grows best in hot, dry climates and is highly resistant to drought and high temperatures\.?$/iu' => '$1 گرم اور خشک آب و ہوا میں بہترین نشوونما پاتی ہے اور خشک سالی اور زیادہ درجہ حرارت کے خلاف بہت زیادہ مزاحمت رکھتی ہے۔',
            '/^(.+?) cannot tolerate frost and requires mild weather conditions for best yield\.?$/iu' => '$1 پالا برداشت نہیں کرتی اور اچھی پیداوار کے لیے معتدل موسمی حالات درکار ہوتے ہیں۔',
            '/^(.+?) is sensitive to frost and performs poorly in cold weather\.?$/iu' => '$1 پالا پڑنے کے لیے حساس ہے اور سرد موسم میں اچھی نشوونما نہیں کرتا۔',
            '/^(.+?) provides employment and income to farmers and contributes greatly to the economy through exports\.?$/iu' => '$1 کسانوں کو روزگار اور آمدنی فراہم کرتا ہے اور برآمدات کے ذریعے معیشت میں نمایاں کردار ادا کرتا ہے۔',
            '/^(.+?) is also used to produce (.+?)\.?$/iu' => '$1 سے $2 بھی تیار کیا جاتا ہے۔',
            '/^(.+?) is widely used in daily cooking due to its high nutritional value and easy digestibility\.?$/iu' => '$1 اپنی زیادہ غذائی قدر اور آسان ہاضمے کی وجہ سے روزمرہ کھانا پکانے میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            '/^(.+?) plays a vital role in the agricultural economy by supporting sugar mills and providing income to farmers\.?$/iu' => '$1 چینی کی ملوں کو سہارا دے کر اور کسانوں کو آمدنی فراہم کرکے زرعی معیشت میں اہم کردار ادا کرتا ہے۔',
            '/^(.+?) is among the major sugarcane-producing countries in the world\.?$/iu' => '$1 دنیا کے بڑے گنا پیدا کرنے والے ممالک میں شامل ہے۔',
            '/^(.+?) is harvested within (.+?) after sowing depending on variety and season\.?$/iu' => '$1 کی کٹائی قسم اور موسم کے مطابق بیجائی کے $2 بعد کی جاتی ہے۔',
            '/^(.+?) is harvested (.+?) after sowing and continues for several weeks\.?$/iu' => '$1 کی کٹائی بیجائی کے $2 بعد شروع ہوتی ہے اور کئی ہفتوں تک جاری رہتی ہے۔',
            '/^(.+?) requires consistent moisture but does not tolerate waterlogging\.?$/iu' => '$1 کو مسلسل نمی درکار ہوتی ہے لیکن یہ پانی کے جمع ہونے کو برداشت نہیں کرتی۔',
            '/^(.+?) requires moderate irrigation and is sensitive to both drought and waterlogging\.?$/iu' => '$1 کو معتدل آبپاشی درکار ہوتی ہے اور یہ خشک سالی اور پانی کے جمع ہونے دونوں کے لیے حساس ہے۔',
            '/^(.+?) is an important vegetable crop grown in Pakistan and many tropical and subtropical regions\.?$/iu' => '$1 پاکستان اور بہت سے گرم و نیم گرم علاقوں میں اگائی جانے والی ایک اہم سبزی کی فصل ہے۔',
            '/^(.+?) is an important vegetable crop that provides nutritious food and supports farmers income\.?$/iu' => '$1 ایک اہم سبزی کی فصل ہے جو غذائیت سے بھرپور خوراک فراہم کرتی ہے اور کسانوں کی آمدنی میں اضافہ کرتی ہے۔',
            '/^(.+?) is an important crop for dry regions as it provides food and fodder under harsh climatic conditions\.?$/iu' => '$1 خشک علاقوں کے لیے ایک اہم فصل ہے کیونکہ یہ سخت موسمی حالات میں خوراک اور چارہ فراہم کرتی ہے۔',
            '/^It supports livestock feeding and contributes to food security in areas with low rainfall\.?$/iu' => 'یہ مویشیوں کے لیے چارہ فراہم کرتی ہے اور کم بارش والے علاقوں میں غذائی تحفظ میں حصہ ڈالتی ہے۔',
            '/^(.+?) is one of the most important food crops in (.+?)\.?$/iu' => '$1 دنیا کے اہم ترین غذائی فصلوں میں سے ایک ہے۔',
            '/^(.+?) is a major source of food for millions of people and is widely used in daily meals\.?$/iu' => '$1 لاکھوں لوگوں کی خوراک کا ایک اہم ذریعہ ہے اور روزمرہ کے کھانوں میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            '/^(.+?) is an important cash crop in Pakistan and many tropical countries\.?$/iu' => '$1 پاکستان اور بہت سے گرم علاقوں کے ممالک میں ایک اہم نقد آور فصل ہے۔',
            '/^(.+?) is one of the most important cereal crops in Pakistan and around the world\.?$/iu' => '$1 پاکستان اور دنیا بھر کی اہم ترین اناج کی فصلوں میں سے ایک ہے۔',
            '/^(.+?) is an important cereal and fodder crop grown in (.+?) of Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک کے $2 میں اگائی جانے والی ایک اہم اناج اور چارہ فصل ہے۔',
            '/^(.+?) is an important cereal and fodder crop grown in (.+?) regions of Pakistan and many other countries\.?$/iu' => '$1 پاکستان اور بہت سے دوسرے ممالک کے $2 علاقوں میں اگائی جانے والی ایک اہم اناج اور چارہ فصل ہے۔',
            '/^(.+?) is mainly grown for sugar production, but it is also used to produce (.+?), (.+?), and (.+?)\.?$/iu' => '$1 بنیادی طور پر چینی کی پیداوار کے لیے اگایا جاتا ہے، لیکن اس سے $2، $3 اور $4 بھی تیار کیے جاتے ہیں۔',
            '/^(.+?) is mainly cultivated for its seeds, which are used to extract edible oil\.?$/iu' => '$1 بنیادی طور پر اپنے بیجوں کے لیے کاشت کیا جاتا ہے، جن سے خوردنی تیل نکالا جاتا ہے۔',
            '/^(.+?) is widely used in (.+?), (.+?), and (.+?)\.?$/iu' => '$1 کو $2، $3 اور $4 میں بڑے پیمانے پر استعمال کیا جاتا ہے۔',
            '/^(.+?) is widely consumed as (.+?) and is rich in (.+?), making it an essential part of daily diet\.?$/iu' => '$1 کو $2 کے طور پر بڑے پیمانے پر استعمال کیا جاتا ہے اور یہ $3 سے بھرپور ہے، اس لیے روزمرہ خوراک کا اہم حصہ ہے۔',
            '/^(.+?) improves soil fertility by fixing nitrogen and is also beneficial for crop rotation systems in agriculture\.?$/iu' => '$1 نائٹروجن کے اخراج کے ذریعے مٹی کی زرخیزی بہتر کرتا ہے اور زرعی فصلوں کی گردش کے نظام کے لیے بھی مفید ہے۔',
            '/^(.+?) is highly drought-resistant and plays a vital role in ensuring food and fodder security in dry areas\.?$/iu' => '$1 خشک سالی کے خلاف بہت زیادہ مزاحمت رکھتا ہے اور خشک علاقوں میں خوراک اور چارے کے تحفظ میں اہم کردار ادا کرتا ہے۔',
            '/^It is commonly known as "(.+?)" in South Asia\.?$/iu' => 'جنوبی ایشیا میں اسے عام طور پر "$1" کہا جاتا ہے۔',
            '/^It is known for its (.+?) and (.+?)\.?$/iu' => 'یہ اپنی $1 اور $2 کے لیے مشہور ہے۔',
            '/^It is a popular (.+?) crop known for its (.+?)\.?$/iu' => 'یہ ایک مقبول $1 فصل ہے جو اپنی $2 کے لیے مشہور ہے۔',
            '/^(.+?) farming plays an important role in the agriculture economy because it provides income to farmers and supports export industries\.?$/iu' => '$1 کی کاشت زرعی معیشت میں اہم کردار ادا کرتی ہے کیونکہ اس سے کسانوں کو آمدنی حاصل ہوتی ہے اور برآمدی صنعتوں کو سہارا ملتا ہے۔',
            '/^(.+?) is mainly grown for its (.+?), which is used in the (.+?) industry to produce (.+?)\.?$/iu' => '$1 بنیادی طور پر اپنے $2 کے لیے اگایا جاتا ہے، جسے $3 کی صنعت میں $4 تیار کرنے کے لیے استعمال کیا جاتا ہے۔',
            '/^(.+?) is an important cash crop in (.+?) and many tropical countries\.?$/iu' => '$1 $2 اور بہت سے گرم علاقوں کے ممالک میں ایک اہم نقد آور فصل ہے۔',
            '/^(.+?) is mainly grown for (.+?) production, but it is also used to produce (.+?)\.?$/iu' => '$1 بنیادی طور پر $2 کی پیداوار کے لیے اگایا جاتا ہے، لیکن اس سے $3 بھی تیار کیے جاتے ہیں۔',
            '/^(.+?) plays a vital role in the agricultural economy by supporting (.+?) and providing income to farmers\.?$/iu' => '$1 زرعی معیشت میں اہم کردار ادا کرتا ہے کیونکہ یہ $2 کو سہارا دیتا ہے اور کسانوں کو آمدنی فراہم کرتا ہے۔',
            '/^(.+?) is usually sown in (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 عام طور پر $2 میں بویا جاتا ہے۔',
            '/^(.+?) is harvested from (.+?) when (.+?)\.?$/iu' => '$1 کی کٹائی $2 کے دوران اس وقت کی جاتی ہے جب $3۔',
            '/^(.+?) grows best in (.+?) and requires (.+?)\.?$/iu' => '$1 $2 میں بہترین نشوونما پاتا ہے اور اسے $3 کی ضرورت ہوتی ہے۔',
            '/^(.+?) requires (.+?) for healthy growth and high yield\.?$/iu' => 'صحت مند نشوونما اور اچھی پیداوار کے لیے $1 کو $2 درکار ہوتا ہے۔',
            '/^(.+?) is sensitive to (.+?) and performs poorly in (.+?)\.?$/iu' => '$1 $2 کے لیے حساس ہے اور $3 میں اچھی نشوونما نہیں کرتا۔',
            '/^(.+?) is widely used in daily cooking due to its high nutritional value and easy digestibility\.?$/iu' => '$1 اپنی زیادہ غذائی قدر اور آسان ہاضمے کی وجہ سے روزمرہ کھانا پکانے میں بڑے پیمانے پر استعمال ہوتی ہے۔',
            '/^(.+?) provides good income to farmers due to its high market demand\.?$/iu' => '$1 کی زیادہ منڈی طلب کی وجہ سے کسانوں کو اچھی آمدنی حاصل ہوتی ہے۔',
            '/^(.+?) is an important vegetable crop that provides nutritious food and supports farmers income\.?$/iu' => '$1 ایک اہم سبزی کی فصل ہے جو غذائیت سے بھرپور خوراک فراہم کرتی ہے اور کسانوں کی آمدنی میں اضافہ کرتی ہے۔',
            '/^(.+?) is an important crop for dry regions as it provides food and fodder under harsh climatic conditions\.?$/iu' => '$1 خشک علاقوں کے لیے ایک اہم فصل ہے کیونکہ یہ سخت موسمی حالات میں خوراک اور چارہ فراہم کرتی ہے۔',
            '/^It supports livestock feeding and contributes to food security in areas with low rainfall\.?$/iu' => 'یہ مویشیوں کے لیے چارہ فراہم کرتی ہے اور کم بارش والے علاقوں میں غذائی تحفظ میں حصہ ڈالتی ہے۔',
            '/^Early harvesting ensures (.+?)\.?$/iu' => 'جلد کٹائی سے $1 یقینی بنتا ہے۔',
            '/^Over-mature fruits become hard and less edible\.?$/iu' => 'زیادہ پک جانے والے پھل سخت اور کم قابلِ استعمال ہو جاتے ہیں۔',
            '/^Overgrown pods become hard and fibrous\.?$/iu' => 'زیادہ بڑے ہو جانے والی پھلیاں سخت اور ریشے دار ہو جاتی ہیں۔',
            '/^Proper land preparation helps in better vine spread and fruit development\.?$/iu' => 'زمین کی مناسب تیاری بیل کے بہتر پھیلاؤ اور پھلوں کی نشوونما میں مدد دیتی ہے۔',
            '/^Proper land preparation ensures healthy plant establishment and better yield\.?$/iu' => 'زمین کی مناسب تیاری پودوں کے مضبوط قیام اور بہتر پیداوار کو یقینی بناتی ہے۔',
            '/^Good seed ensures better crop establishment and higher yield\.?$/iu' => 'اچھا بیج فصل کے بہتر قیام اور زیادہ پیداوار کو یقینی بناتا ہے۔',
            '/^Good seed ensures strong vine growth and higher fruit yield\.?$/iu' => 'اچھا بیج بیل کی مضبوط نشوونما اور زیادہ پھلوں کی پیداوار کو یقینی بناتا ہے۔',
            '/^Proper seed rate ensures healthy plant population and good yield\.?$/iu' => 'بیج کی مناسب مقدار پودوں کی صحت مند تعداد اور اچھی پیداوار کو یقینی بناتی ہے۔',
            '/^Balanced fertilizers improve yield, fruit size, and plant health\.?$/iu' => 'متوازن کھادیں پیداوار، پھلوں کے سائز اور پودوں کی صحت بہتر کرتی ہیں۔',
            '/^Balanced fertilization increases yield and improves (.+?)\.?$/iu' => 'متوازن کھاد کا استعمال پیداوار بڑھاتا ہے اور $1 بہتر کرتا ہے۔',
            '/^Each stage is important for achieving good vegetable yield\.?$/iu' => 'اچھی سبزی کی پیداوار حاصل کرنے کے لیے ہر مرحلہ اہم ہے۔',
            '/^Each stage is important for achieving good fruit yield\.?$/iu' => 'اچھی پھلوں کی پیداوار حاصل کرنے کے لیے ہر مرحلہ اہم ہے۔',
            '/^Each stage contributes to final yield and fodder quality\.?$/iu' => 'ہر مرحلہ آخری پیداوار اور چارے کے معیار میں حصہ ڈالتا ہے۔',
            '/^Each stage is essential for high-quality (.+?) production\.?$/iu' => 'اعلیٰ معیار کی $1 پیداوار کے لیے ہر مرحلہ ضروری ہے۔',
            '/^(.+?) is one of the most important cash crops in (.+?) and the world\.?$/iu' => '$1 $2 اور دنیا کی اہم ترین نقد آور فصلوں میں سے ایک ہے۔',
            '/^(.+?) is mainly grown for its (.+?), which is used in the (.+?) industry to produce (.+?)\.?$/iu' => '$1 بنیادی طور پر اپنے $2 کے لیے اگایا جاتا ہے، جسے $3 کی صنعت میں $4 تیار کرنے کے لیے استعمال کیا جاتا ہے۔',
            '/^(.+?) plays an important role in the agriculture economy because it provides income to farmers and supports export industries\.?$/iu' => '$1 زرعی معیشت میں اہم کردار ادا کرتا ہے کیونکہ اس سے کسانوں کو آمدنی حاصل ہوتی ہے اور برآمدی صنعتوں کو سہارا ملتا ہے۔',
            '/^(.+?) plays a major role in (.+?) by supporting farmers, industries, and exports\.?$/iu' => '$1 کسانوں، صنعتوں اور برآمدات کو سہارا دے کر $2 میں اہم کردار ادا کرتا ہے۔',
            '/^(.+?) is famous for producing high-quality (.+?)\.?$/iu' => '$1 اعلیٰ معیار کی $2 پیدا کرنے کے لیے مشہور ہے۔',
            '/^(.+?) is mainly grown in warm and humid climates with sufficient water availability\.?$/iu' => '$1 بنیادی طور پر گرم اور مرطوب آب و ہوا میں، جہاں پانی وافر مقدار میں دستیاب ہو، اگایا جاتا ہے۔',
            '/^(.+?) grows best in warm and humid climates with abundant water supply\.?$/iu' => '$1 گرم اور مرطوب آب و ہوا میں وافر پانی کی فراہمی کے ساتھ بہترین نشوونما پاتا ہے۔',
            '/^(.+?) is usually sown from (.+?) in Pakistan\.?$/iu' => 'پاکستان میں $1 عام طور پر $2 کے دوران بویا جاتا ہے۔',
            '/^Farmers mostly start nursery preparation in (.+?) and transplant seedlings in (.+?)\.?$/iu' => 'کسان عموماً $1 میں پنیری کی تیاری شروع کرتے ہیں اور $2 میں پودے کھیت میں منتقل کرتے ہیں۔',
            '/^Warm temperature and sufficient water during this period help proper seed germination and healthy plant growth\.?$/iu' => 'اس عرصے میں گرم درجہ حرارت اور وافر پانی بیج کے مناسب انکرن اور پودے کی صحت مند نشوونما میں مدد دیتے ہیں۔',
            '/^(.+?) is harvested from (.+?) depending on the variety and climate conditions\.?$/iu' => '$1 کی کٹائی قسم اور موسمی حالات کے مطابق $2 کے دوران کی جاتی ہے۔',
            '/^The crop is ready when grains become hard and the plant turns yellow golden\.?$/iu' => 'فصل اس وقت تیار ہوتی ہے جب دانے سخت ہو جائیں اور پودا سنہری زرد رنگ اختیار کر لے۔',
            '/^At the end of the rainy season the grains become mature and dry properly\.?$/iu' => 'برسات کے موسم کے اختتام پر دانے پختہ ہو کر اچھی طرح خشک ہو جاتے ہیں۔',
            '/^Dry weather during harvesting reduces grain moisture and improves quality\.?$/iu' => 'کٹائی کے دوران خشک موسم دانوں میں نمی کم کرتا ہے اور معیار بہتر بناتا ہے۔',
            '/^(.+?) requires warm weather and standing water during most growth stages\.?$/iu' => '$1 کو نشوونما کے زیادہ تر مراحل میں گرم موسم اور کھڑے پانی کی ضرورت ہوتی ہے۔',
            '/^Summer season provides high temperature, humidity, and rainfall which are necessary for healthy crop development\.?$/iu' => 'موسم گرما میں زیادہ درجہ حرارت، نمی اور بارش دستیاب ہوتی ہے، جو فصل کی صحت مند نشوونما کے لیے ضروری ہیں۔',
            '/^(.+?) requires standing water in most stages and usually needs continuous irrigation\.?$/iu' => '$1 کو زیادہ تر مراحل میں کھڑا پانی درکار ہوتا ہے اور عموماً مسلسل آبپاشی کی ضرورت ہوتی ہے۔',
            '/^Good land preparation helps better root growth and water management\.?$/iu' => 'زمین کی اچھی تیاری جڑوں کی بہتر نشوونما اور پانی کے مؤثر انتظام میں مدد دیتی ہے۔',
            '/^Good quality seed produces strong seedlings and improves crop yield\.?$/iu' => 'اچھے معیار کا بیج مضبوط پنیری پیدا کرتا ہے اور فصل کی پیداوار بہتر بناتا ہے۔',
            '/^Using the correct seed rate ensures healthy plant population and better production\.?$/iu' => 'بیج کی درست مقدار استعمال کرنے سے پودوں کی صحت مند تعداد برقرار رہتی ہے اور بہتر پیداوار حاصل ہوتی ہے۔',
            '/^Balanced fertilizers improve plant growth, grain quality, and crop production\.?$/iu' => 'متوازن کھادیں پودوں کی نشوونما، دانوں کے معیار اور فصل کی پیداوار بہتر کرتی ہیں۔',
            '/^Each stage is important for obtaining high (.+?) yield\.?$/iu' => 'زیادہ $1 پیداوار حاصل کرنے کے لیے ہر مرحلہ اہم ہے۔',
            '/^(.+?) is an important staple food for millions of people\.?$/iu' => '$1 لاکھوں لوگوں کی اہم بنیادی خوراک ہے۔',
            '/^It provides employment and income to farmers and contributes greatly to the economy through exports\.?$/iu' => 'یہ کسانوں کو روزگار اور آمدنی فراہم کرتا ہے اور برآمدات کے ذریعے معیشت میں اہم کردار ادا کرتا ہے۔',
            '/^(.+?) is also used in food industries and animal feed production\.?$/iu' => '$1 خوراک کی صنعت اور جانوروں کی خوراک کی تیاری میں بھی استعمال ہوتا ہے۔',
            '/^It is often called ["“]([^"”]+)["”] because of its high economic value\.?$/iu' => 'اسے اس کی زیادہ معاشی قدر کی وجہ سے اکثر "$1" کہا جاتا ہے۔',
            '/^Stay updated with weather conditions and forecasts to make better farming decisions\.?$/iu' => 'بہتر زرعی فیصلے کرنے کے لیے موسم کی صورتحال اور پیش گوئی سے باخبر رہیں۔',
            '/^Ask questions, share farming problems and get help from agriculture experts\.?$/iu' => 'سوالات پوچھیں، کاشت کاری کے مسائل بیان کریں اور زرعی ماہرین سے مدد حاصل کریں۔',
            '/^Upload a soil image and get useful information and suggestions about your soil\.?$/iu' => 'مٹی کی تصویر اپ لوڈ کریں اور اپنی مٹی کے بارے میں مفید معلومات اور تجاویز حاصل کریں۔',
            '/^Find information about common pests and their management\.?$/iu' => 'عام کیڑوں اور ان کے تدارک کے بارے میں معلومات حاصل کریں۔',
        ];
        foreach ($sentenceRules as $pattern => $replacement) {
            $text = preg_replace($pattern, $replacement, $text) ?? $text;
        }

        foreach ($phrases as $english => $urdu) {
            if (strlen($english) < 18) {
                $text = preg_replace('/(?<![A-Za-z])' . preg_quote($english, '/') . '(?![A-Za-z])/iu', $urdu, $text);
            }
        }

        $text = $this->translateCommonPatterns($text);

        $labels = [
            'Crop Name' => 'فصل کا نام', 'Scientific Name' => 'سائنسی نام', 'Crop Type' => 'فصل کی قسم',
            'Main Use' => 'اہم استعمال', 'Sowing Season' => 'کاشت کا موسم', 'Harvesting Season' => 'کٹائی کا موسم',
            'Ideal Temperature' => 'موزوں درجہ حرارت', 'Water Requirement' => 'پانی کی ضرورت', 'Best Soil Type' => 'بہترین مٹی کی قسم',
            'Major Areas' => 'اہم علاقے', 'Suitable Soil' => 'موزوں مٹی', 'Ideal pH' => 'موزوں پی ایچ',
            'Germination Temperature' => 'انکرن کا درجہ حرارت', 'Vegetative Growth' => 'نباتاتی نشوونما',
            'Fruit Development' => 'پھلوں کی نشوونما', 'Grain Formation' => 'دانے بننے کا مرحلہ', 'Boll Formation' => 'ٹینڈے بننے کا مرحلہ',
            'Seed Rate' => 'بیج کی مقدار', 'Nursery Method' => 'پنیری کا طریقہ', 'Direct Seeding' => 'براہِ راست بیجائی',
            'Characteristics of Good Seed' => 'اچھے بیج کی خصوصیات', 'Suitable Soil' => 'موزوں مٹی',
            'Ploughing' => 'ہل چلانا', 'Puddling' => 'پڈلنگ', 'Leveling' => 'ہموار کرنا', 'Weed Removal' => 'جڑی بوٹیوں کا خاتمہ',
            'Fertilizer Mixing' => 'کھاد ملانا', 'Initial Stage' => 'ابتدائی مرحلہ', 'Seedling Stage' => 'پنیری کا مرحلہ',
            'Vegetative Stage' => 'نباتاتی مرحلہ', 'Flowering Stage' => 'پھول آنے کا مرحلہ', 'Harvesting Stage' => 'کٹائی کا مرحلہ',
        ];
        uksort($labels, fn($a, $b) => strlen($b) <=> strlen($a));
        foreach ($labels as $en => $ur) {
            $text = preg_replace('/(?<![A-Za-z])' . preg_quote($en, '/') . '(?=\s*:)/iu', $ur, $text) ?? $text;
        }

        $text = preg_replace_callback("/[A-Za-z][A-Za-z0-9_'’\/-]*/u", function ($m) {
            $key = strtolower($m[0]);
            if ($key === 'may') return $m[0] === 'May' ? 'مئی' : 'ممکن ہے';
            return $this->semanticOverrides[$key] ?? $this->semanticWords[$key] ?? $this->words[$key] ?? $this->findWordTranslation($key) ?? $this->transliterate($m[0]);
        }, $text) ?? $text;

        return $this->fixGrammar($text);
    }

    private function translateCommonPatterns(string $text): string
    {
        $rules = [
            '/\bsmall\s+(.+?)\s+enter\s+young\s+leaves\b/iu' => 'چھوٹی $1 نئی پتیوں میں داخل ہوتی ہیں',
            '/\b(.+?)\s+spread\s+through\s+wind,\s*rain,\s+and\s+infected\s+plant\s+material\b/iu' => '$1 ہوا، بارش اور متاثرہ پودوں کے مواد کے ذریعے پھیلتا ہے',
            '/\b(.+?)\s+spread\s+in\s+wet\s+and\s+humid\s+conditions\b/iu' => '$1 گیلی اور مرطوب حالت میں پھیلتا ہے',
            '/\b(.+?)\s+attacks\s+roots\s+in\s+waterlogged\s+soil\b/iu' => '$1 پانی بھری مٹی میں جڑوں پر حملہ کرتا ہے',
            '/\bleaves\s+turn\s+yellow\b/iu' => 'پتے پیلے ہو جاتے ہیں',
            '/\bleaves\s+become\s+curled\b/iu' => 'پتے مڑ جاتے ہیں',
            '/\bplant\s+becomes\s+weak\b/iu' => 'پودا کمزور ہو جاتا ہے',
            '/\bplant\s+growth\s+becomes\s+weak\b/iu' => 'پودے کی نشوونما کمزور ہو جاتی ہے',
            '/\bplant\s+growth\s+slows\s+down\b/iu' => 'پودے کی نشوونما سست ہو جاتی ہے',
            '/\bshoots\s+look\s+dry\s+and\s+weak\b/iu' => 'شاخیں خشک اور کمزور نظر آتی ہیں',
            '/\bfruits\s+rot\s+from\s+inside\b/iu' => 'پھل اندر سے سڑ جاتے ہیں',
            '/\bfruits\s+fall\s+early\b/iu' => 'پھل جلد گر جاتے ہیں',
            '/\bavoid\s+overwatering\b/iu' => 'ضرورت سے زیادہ پانی دینے سے بچیں',
            '/\bimprove\s+soil\s+drainage\b/iu' => 'مٹی کی نکاسی بہتر کریں',
            '/\bkeep\s+orchard\s+clean\b/iu' => 'باغ صاف رکھیں',
            '/\bkeep\s+field\s+clean\b/iu' => 'کھیت صاف رکھیں',
            '/\bremove\s+infected\s+branches\b/iu' => 'متاثرہ شاخیں نکال دیں',
            '/\bremove\s+infected\s+leaves\b/iu' => 'متاثرہ پتے نکال دیں',
            '/\bmonitor\s+new\s+growth\s+regularly\b/iu' => 'نئی نشوونما کی باقاعدگی سے نگرانی کریں',
            '/\buse\s+healthy\s+planting\s+material\b/iu' => 'صحت مند کاشت کا مواد استعمال کریں',
            '/\buse\s+disease-free\s+plants\b/iu' => 'بیماری سے پاک پودے استعمال کریں',
            '/\bno\s+complete\s+cure\b/iu' => 'مکمل علاج موجود نہیں',
            '/\bapply\s+(.+?)\s+as\s+per\s+agricultural\s+recommendations\b/iu' => 'زرعی سفارشات کے مطابق $1 استعمال کریں',
            '/\baccording\s+to\s+agricultural\s+recommendations\b/iu' => 'زرعی سفارشات کے مطابق',
            '/\bpoor\s+drainage\b/iu' => 'ناقص نکاسی',
            '/\bgood\s+air\s+flow\b/iu' => 'ہوا کی اچھی آمدورفت',
            '/\bair\s+circulation\b/iu' => 'ہوا کی گردش',
            '/\bwater\s+splashes\b/iu' => 'پانی کے چھینٹے',
            '/\bnew\s+leaves\b/iu' => 'نئی پتیوں',
            '/\byoung\s+leaves\b/iu' => 'نئی پتیوں',
            '/\byoung\s+shoots\b/iu' => 'نئی شاخیں',
            '/\binfected\s+plants\b/iu' => 'متاثرہ پودے',
            '/\binfected\s+branches\b/iu' => 'متاثرہ شاخیں',
            '/\binfected\s+leaves\b/iu' => 'متاثرہ پتے',
            '/\bhealthy\s+plants\b/iu' => 'صحت مند پودے',
            '/\bwet\s+soil\b/iu' => 'گیلی مٹی',
            '/\bhumid\s+weather\b/iu' => 'مرطوب موسم',
            '/\bcool\s+and\s+humid\s+weather\b/iu' => 'ٹھنڈا اور مرطوب موسم',
            '/\bwarm\s+weather\b/iu' => 'گرم موسم',
            '/\bsmall\s+holes\b/iu' => 'چھوٹے سوراخ',
            '/\bwhite\s+lines\b/iu' => 'سفید لکیریں',
            '/\bsilvery\s+lines\b/iu' => 'چاندی جیسی لکیریں',
            '/\bsticky\s+honeydew\b/iu' => 'چپچپا رس',
            '/\bnew\s+soft\s+growth\b/iu' => 'نرم نئی نشوونما',
            '/\bexcessive\s+new\s+growth\b/iu' => 'ضرورت سے زیادہ نئی نشوونما',
            '/\bregularly\b/iu' => 'باقاعدگی سے',
            '/\bimmediately\b/iu' => 'فوراً',
            '/\bslowly\b/iu' => 'آہستہ آہستہ',
            '/\bquickly\b/iu' => 'تیزی سے',
        ];
        foreach ($rules as $pattern => $replacement) $text = preg_replace($pattern, $replacement, $text);
        return $text;
    }

    private function translateSimplePhrase(string $text): string
    {
        $text = trim($text);
        if ($text === '') return '';
        $phrases = $this->phrases;
        uksort($phrases, fn($a, $b) => strlen($b) <=> strlen($a));
        foreach ($phrases as $english => $urdu) {
            if (strlen($english) < 4) continue;
            $text = preg_replace('/(?<![A-Za-z])' . preg_quote($english, '/') . '(?![A-Za-z])/iu', $urdu, $text) ?? $text;
        }
        $text = $this->removeEnglish($text);
        $text = preg_replace('/\s*,\s*/u', '، ', $text) ?? $text;
        $text = preg_replace('/\s+and\s+/iu', ' اور ', $text) ?? $text;
        $text = preg_replace('/\s*،\s*اور\s*،\s*/u', '، اور ', $text) ?? $text;
        return preg_replace('/^[\s،,.]+|[\s،,.]+$/u', '', $text) ?? trim($text);
    }

    private function findWordTranslation(string $key): ?string
    {
        foreach ($this->phrases as $english => $urdu) {
            if (strtolower($english) === $key) return $urdu;
        }
        return null;
    }

    private function fixGrammar(string $text): string
    {
        $rules = [
            '/\s+،/u' => '،',
            '/\s+۔/u' => '۔',
            '/\s+؟/u' => '؟',
            '/\s{2,}/u' => ' ',
            '/،\s*اور\s*،/u' => '، اور',
        ];
        foreach ($rules as $pattern => $replacement) $text = preg_replace($pattern, $replacement, $text);
        return trim($text);
    }

    private function removeEnglish(string $text): string
    {
        return preg_replace_callback('/[A-Za-z][A-Za-z0-9_\'’\/-]*/u', fn($m) => $this->semanticOverrides[strtolower($m[0])] ?? $this->semanticWords[strtolower($m[0])] ?? $this->findWordTranslation(strtolower($m[0])) ?? $this->transliterate($m[0]), $text) ?? $text;
    }

    private function isSafe(string $text): bool
    {
        $trim = trim($text);
        if ($trim === '') return true;
        if (preg_match('/^[\p{Arabic}\s\d\p{P}\p{S}]+$/u', $trim)) return true;
        if (preg_match('/^[A-Za-z0-9._%+\-]+@[A-Za-z0-9.\-]+\.[A-Za-z]{2,}$/', $trim)) return true;
        if (preg_match('/^(https?:\/\/|www\.)/i', $trim)) return true;
        if (preg_match('/^[+]?\d[\d\sXx().-]{6,}[Xx\d]$/u', $trim)) return true;
        if (preg_match('/^[A-Za-z0-9._%+\-]+@[A-Za-z0-9.\-]+\.[A-Za-z]{2,}$/u', $trim)) return true;
        return false;
    }

    private function transliterate(string $word): string
    {
        $w = strtolower($word);
        $map = ['tion'=>'شن','sion'=>'ژن','ture'=>'چر','ph'=>'ف','sh'=>'ش','ch'=>'چ','th'=>'تھ','kh'=>'خ','gh'=>'غ','qu'=>'کو','ck'=>'ک','ee'=>'ی','oo'=>'و','ou'=>'او','ow'=>'او','ai'=>'ے','ay'=>'ے','ei'=>'ی','ie'=>'ی','oa'=>'و','au'=>'او','aw'=>'او','er'=>'ر','ar'=>'ار','or'=>'ور','ur'=>'ر','a'=>'ا','b'=>'ب','c'=>'ک','d'=>'ڈ','e'=>'ی','f'=>'ف','g'=>'گ','h'=>'ہ','i'=>'ی','j'=>'ج','k'=>'ک','l'=>'ل','m'=>'م','n'=>'ن','o'=>'و','p'=>'پ','q'=>'ق','r'=>'ر','s'=>'س','t'=>'ٹ','u'=>'و','v'=>'و','w'=>'و','x'=>'کس','y'=>'ی','z'=>'ز'];
        foreach ($map as $a => $b) $w = str_replace($a, $b, $w);
        return $w;
    }

    private function cleanPestUrdu(string $text): string
    {
        $map = [
            'avoid'=>'سے گریز کریں','resistant'=>'مزاحم','varieties'=>'اقسام','variety'=>'قسم','wet'=>'نم','weather'=>'موسم','humid'=>'مرطوب','humidity'=>'نمی','material'=>'مواد','recommended'=>'تجویز کردہ','infected'=>'متاثرہ','use'=>'استعمال کریں','insecticides'=>'کیڑے مار ادویات','fungicides'=>'پھپھوندی کش ادویات','cool'=>'ٹھنڈا','growth'=>'نشوونما','control'=>'قابو کریں','drainage'=>'نکاسی آب','soil'=>'مٹی','the'=>'','from'=>'سے','to'=>'تک','in'=>'میں','on'=>'پر','under'=>'کے نیچے','during'=>'کے دوران','after'=>'کے بعد','before'=>'سے پہلے','through'=>'کے ذریعے','by'=>'کے ذریعے','for'=>'کے لیے','into'=>'میں','inside'=>'اندر','and'=>'اور','or'=>'یا','with'=>'کے ساتھ','as'=>'کے مطابق','when'=>'جب','if'=>'اگر','at'=>'پر','especially'=>'خصوصاً','also'=>'بھی','only'=>'صرف','more'=>'زیادہ','less'=>'کم','very'=>'بہت','may'=>'ہو سکتا ہے','can'=>'سکتا ہے','is'=>'ہے','are'=>'ہیں','become'=>'ہو جاتے ہیں','becomes'=>'ہو جاتا ہے','appears'=>'ظاہر ہوتی ہے','appear'=>'ظاہر ہوتے ہیں','show'=>'دکھاتے ہیں','shows'=>'ظاہر کرتے ہیں','make'=>'بناتے ہیں','makes'=>'بناتا ہے','feed'=>'خوراک حاصل کرتے ہیں','feeds'=>'خوراک حاصل کرتا ہے','suck'=>'چوستے ہیں','sucks'=>'چوستا ہے','attack'=>'حملہ کرتے ہیں','attacks'=>'حملہ کرتا ہے','enter'=>'داخل ہوتے ہیں','enters'=>'داخل ہوتا ہے','spread'=>'پھیلتے ہیں','spreads'=>'پھیلتی ہے','grow'=>'بڑھتے ہیں','grows'=>'نشوونما پاتی ہے','plant'=>'پودا','plants'=>'پودے','crop'=>'فصل','crops'=>'فصلیں','field'=>'کھیت','fields'=>'کھیت','leaves'=>'پتے','leaf'=>'پتہ','stems'=>'تنے','stem'=>'تنا','roots'=>'جڑیں','root'=>'جڑ','fruits'=>'پھل','fruit'=>'پھل','pods'=>'پھلیاں','seeds'=>'بیج','flowers'=>'پھول','flower'=>'پھول','weeds'=>'جڑی بوٹیاں','water'=>'پانی','conditions'=>'حالات','warm'=>'گرم','dry'=>'خشک','yellow'=>'زرد','brown'=>'بھورے','black'=>'سیاہ','white'=>'سفید','grey'=>'سرمئی','gray'=>'سرمئی','small'=>'چھوٹے','large'=>'بڑے','tiny'=>'نہایت چھوٹے','young'=>'کم عمر','damaged'=>'متاثرہ','affected'=>'متاثرہ','weak'=>'کمزور','poor'=>'ناقص','reduced'=>'کم','early'=>'جلد','quickly'=>'تیزی سے','slowly'=>'آہستہ آہستہ','regularly'=>'باقاعدگی سے','proper'=>'مناسب','properly'=>'مناسب طریقے سے','excessive'=>'ضرورت سے زیادہ','excess'=>'ضرورت سے زیادہ','healthy'=>'صحت مند','clean'=>'صاف','destroy'=>'تلف کریں','remove'=>'نکال دیں','removed'=>'نکالے گئے','improve'=>'بہتر بنائیں','encourage'=>'حوصلہ افزائی کریں','rotate'=>'فصلوں میں ردوبدل کریں','prune'=>'شاخ تراشی کریں','wounds'=>'زخم','debris'=>'باقیات','other'=>'دیگر','like'=>'جیسے','treatment'=>'علاج','material'=>'مواد','parts'=>'حصے','moist'=>'نم','high'=>'زیادہ','new'=>'نئے','surface'=>'سطح','trunk'=>'تنا','around'=>'اردگرد','early'=>'ابتدائی طور پر','moisture'=>'نمی','free'=>'پاک','ripening'=>'پکنے','spring'=>'بہار','row'=>'قطار','covers'=>'پردے','wetness'=>'نمی','pH'=>'پی ایچ','mold'=>'پھپھوندی','spots'=>'دھبے','patches'=>'دھبے','sunken'=>'دھنسے ہوئے','weakens'=>'کمزور پڑ جاتا ہے','immediately'=>'فوراً','tender'=>'نرم','neem'=>'نیم','oil'=>'تیل','slow'=>'سست','edges'=>'کنارے','w'=>'','s'=>'','e'=>'','king'=>'','bef'=>'','monit'=>'','logging'=>'گرنے کا عمل','curl'=>'مڑنا','cane'=>'گنے کا تنا','rhizomes'=>'زیرِ زمین تنوں','treated'=>'علاج کیا گیا','infects'=>'متاثر کرتا ہے','injuries'=>'زخم','ladybugs'=>'لیڈی برڈز','practice'=>'عمل کریں','highly'=>'انتہائی','flush'=>'نرم نئی شاخیں','heavily'=>'شدید طور پر','populations'=>'تعداد','surface'=>'سطح','row covers'=>'قطاروں کے جالی دار پردے','wetness'=>'نمی','but'=>'لیکن','hot'=>'گرم','many years'=>'کئی سال','die'=>'مر جاتے ہیں','stage'=>'مرحلہ','well-drained'=>'اچھی نکاسی والی','nursery'=>'پنیری کی جگہ','watering'=>'پانی دینا','watered'=>'پانی دیا گیا','Copper-based'=>'تانبے پر مبنی','pheromone traps'=>'فیرومون پھندیاں','production'=>'پیداوار','bolls'=>'ٹینڈے','Light'=>'ہلکے','green'=>'سبز','quality'=>'معیار','tomatoes'=>'ٹماٹر','rotting'=>'سڑنے','rot'=>'سڑن','install'=>'لگائیں','maintain'=>'برقرار رکھیں','checking'=>'نگرانی','hand removal'=>'ہاتھ سے نکالنا','early stage'=>'ابتدائی مرحلہ','of'=>'کا','fیا'=>'یا','survives'=>'زندہ رہتی ہے','many'=>'کئی','years'=>'سال','infected plant debris'=>'متاثرہ پودوں کی باقیات','dry but humid weather'=>'خشک لیکن مرطوب موسم','hot and dry weather'=>'گرم اور خشک موسم','cool and moist conditions'=>'ٹھنڈے اور نم حالات','humid weather'=>'مرطوب موسم','warm, wet weather'=>'گرم اور نم موسم','white growth'=>'سفید پھپھوندی جیسی نشوونما','grey mold'=>'سرمئی پھپھوندی','white mold'=>'سفید پھپھوندی','sticky coating'=>'چپچپی تہہ','weakens'=>'کمزور پڑ جاتا ہے','slowly die'=>'آہستہ آہستہ مر جاتے ہیں','dry early'=>'جلد خشک ہو جاتے ہیں','fall early'=>'جلد گر جاتے ہیں','poor-quality'=>'کم معیار','poor quality'=>'کم معیار','damaged flowers'=>'متاثرہ پھول','reduced production'=>'کم پیداوار','bolls'=>'ٹینڈے','leaf edges'=>'پتوں کے کنارے','warm wet conditions'=>'گرم اور نم حالات'
        ];
        uksort($map, fn($a,$b)=>strlen($b)<=>strlen($a));
        foreach($map as $en=>$ur) $text=preg_replace('/(?<![A-Za-z])'.preg_quote($en,'/').'(?![A-Za-z])/iu',$ur,$text)??$text;
        $text=preg_replace('/\s+([،۔,:;])/u','$1',$text)??$text;
        $text=preg_replace('/\s{2,}/u',' ',$text)??$text;
        return trim($text);
    }

    private function semanticPestSentence(string $text, string $field): ?string
    {
        $t = trim(preg_replace('/\s+/u', ' ', $text) ?? $text);
        $sourceExact = [
            'Caused by the fungus Magnaporthe oryzae under humid and rainy conditions.' => 'مرطوب اور بارش والے حالات میں مگناپورٹے اوریزے نامی پھپھوندی اس بیماری کا سبب بنتی ہے۔',
            'Holes in fruits, damaged shoots, and poor-quality produce.' => 'پھلوں میں سوراخ، شاخوں کو نقصان اور کم معیار کی پیداوار اس حملے کی نمایاں علامات ہیں۔',
            'Use resistant varieties, proper drainage, and balanced fertilization.' => 'مزاحم اقسام استعمال کریں، نکاسی آب کا مناسب انتظام رکھیں اور متوازن کھاد استعمال کریں۔',
            'Use certified seeds and remove infected plants.' => 'مصدقہ بیج استعمال کریں اور متاثرہ پودے نکال دیں۔',
            'Use healthy seed and balanced fertilizer application.' => 'صحت مند بیج استعمال کریں اور متوازن کھاد استعمال کریں۔',
            'Use disease-free seed and seed treatment before sowing.' => 'بیماری سے پاک بیج استعمال کریں اور بوائی سے پہلے بیج کا علاج کریں۔',
            'Use tolerant varieties and monitor pest populations regularly.' => 'برداشت رکھنے والی اقسام استعمال کریں اور کیڑوں کی تعداد کی باقاعدگی سے نگرانی کریں۔',
            'Use resistant varieties and control whitefly populations.' => 'مزاحم اقسام استعمال کریں اور سفید مکھی کی تعداد کو قابو میں رکھیں۔',
            'Use certified seed and remove infected plant material.' => 'مصدقہ بیج استعمال کریں اور متاثرہ پودوں کا مواد نکال دیں۔',
            'Use treated seed cane and maintain proper soil moisture.' => 'علاج شدہ گنے کا بیج استعمال کریں اور مٹی میں مناسب نمی برقرار رکھیں۔',
            'Use treated seed and maintain proper soil moisture.' => 'علاج شدہ بیج استعمال کریں اور مٹی میں مناسب نمی برقرار رکھیں۔',
            'Use resistant varieties and maintain proper plant spacing.' => 'مزاحم اقسام استعمال کریں اور پودوں کے درمیان مناسب فاصلہ برقرار رکھیں۔',
            'Use healthy seed and control insect vectors.' => 'صحت مند بیج استعمال کریں اور بیماری منتقل کرنے والے حشرات کو قابو کریں۔',
            'Use disease-free seed and avoid injuring plants.' => 'بیماری سے پاک بیج استعمال کریں اور پودوں کو نقصان پہنچانے سے گریز کریں۔',
            'Avoid overwatering and use treated seed.' => 'ضرورت سے زیادہ پانی دینے سے گریز کریں اور علاج شدہ بیج استعمال کریں۔',
            'Use certified seed and avoid overhead irrigation.' => 'مصدقہ بیج استعمال کریں اور اوپر سے آبپاشی کرنے سے گریز کریں۔',
            'Use certified seed and avoid working in wet fields.' => 'مصدقہ بیج استعمال کریں اور گیلی زمین میں کام کرنے سے گریز کریں۔',
            'Small white insects suck sap from the underside of leaves.' => 'چھوٹے سفید حشرات پتوں کی نچلی سطح سے رس چوستے ہیں۔',
            'Soil fungus attacks roots in overwatered or poorly drained fields.' => 'مٹی میں موجود پھپھوندی ضرورت سے زیادہ پانی والی یا ناقص نکاسی والے کھیتوں میں جڑوں پر حملہ کرتی ہے۔',
            'Leaves become curled, shiny trails appear on leaves, growth is weak.' => 'پتے مڑ جاتے ہیں، ان پر چمک دار لکیریں ظاہر ہوتی ہیں اور پودے کی نشوونما کمزور پڑ جاتی ہے۔',
            'Use disease-free plants and prune infected branches.' => 'بیماری سے پاک پودے استعمال کریں اور متاثرہ شاخوں کی شاخ تراشی کریں۔',
            'Avoid excessive fresh flush growth and remove infected leaves.' => 'نرم نئی شاخوں کی ضرورت سے زیادہ نشوونما سے گریز کریں اور متاثرہ پتے نکال دیں۔',
            'Use healthy planting material and prune infected branches.' => 'صحت مند کاشت کاری کا مواد استعمال کریں اور متاثرہ شاخوں کی شاخ تراشی کریں۔',
            'Use disease-free plants and remove infected branches.' => 'بیماری سے پاک پودے استعمال کریں اور متاثرہ شاخیں نکال دیں۔',
            'Use healthy plants and remove infected branches immediately.' => 'صحت مند پودے استعمال کریں اور متاثرہ شاخیں فوراً نکال دیں۔',
            'Regular field monitoring and avoid excessive dry stress.' => 'کھیت کی باقاعدگی سے نگرانی کریں اور خشکی کے ضرورت سے زیادہ دباؤ سے گریز کریں۔',
            'Use clean planting material and prune infected branches.' => 'صاف کاشت کاری کا مواد استعمال کریں اور متاثرہ شاخوں کی شاخ تراشی کریں۔',
            'Avoid trunk injuries, keep orchard clean, and regularly inspect palms.' => 'تنے کو نقصان پہنچانے سے گریز کریں، باغ کو صاف رکھیں اور کھجور کے درختوں کا باقاعدگی سے معائنہ کریں۔',
            'Use disease-free planting material and avoid infected soil.' => 'بیماری سے پاک کاشت کاری کا مواد استعمال کریں اور متاثرہ مٹی سے گریز کریں۔',
            'Avoid overcrowding and keep plants well spaced.' => 'بہت زیادہ گنجان کاشت سے گریز کریں اور پودوں کے درمیان مناسب فاصلہ رکھیں۔',
            'Spray Imidacloprid or Neem-based insecticides as per recommendation.' => 'امیڈاکلوپرڈ یا نیم پر مبنی کیڑے مار ادویات کا تجویز کردہ طریقے کے مطابق اسپرے کریں۔',
            'Apply Buprofezin or Neem oil spray.' => 'بیوپروفیزن یا نیم کے تیل کا اسپرے کریں۔',
            'Small insects suck sap from leaves and stems, multiplying quickly in warm weather.' => 'چھوٹے حشرات پتوں اور تنوں کا رس چوستے ہیں اور گرم موسم میں تیزی سے تعداد بڑھاتے ہیں۔',
            'Small insects suck sap from leaves and stems and multiply quickly.' => 'چھوٹے حشرات پتوں اور تنوں کا رس چوستے ہیں اور تیزی سے تعداد بڑھاتے ہیں۔',
            'Small insects suck sap from leaves and pseudostem and spread quickly.' => 'چھوٹے حشرات پتوں اور جھوٹے تنے کا رس چوستے ہیں اور تیزی سے پھیلتے ہیں۔',
            'Small insects suck sap from flowers and young shoots, especially in flowering season.' => 'چھوٹے حشرات پھولوں اور نئی شاخوں کا رس چوستے ہیں، خصوصاً پھول آنے کے موسم میں۔',
            'Yellow patches appear on leaves, plants become stunted, and yield decreases.' => 'پتوں پر زرد دھبے ظاہر ہوتے ہیں، پودوں کی نشوونما رک جاتی ہے اور پیداوار کم ہو جاتی ہے۔',
            'Young shoots dry from the center, leaves turn yellow, and plant growth slows down.' => 'نئی شاخیں درمیان سے خشک ہونے لگتی ہیں، پتے زرد پڑ جاتے ہیں اور پودے کی نشوونما سست ہو جاتی ہے۔',
            'Brown spots appear on leaves, which later enlarge and dry out.' => 'پتوں پر بھورے دھبے ظاہر ہوتے ہیں جو بعد میں پھیل کر پتوں کو خشک کر دیتے ہیں۔',
            'Yellow patches on top of leaves and grey mold under leaves.' => 'پتوں کی اوپری سطح پر زرد دھبے اور نچلی سطح پر سرمئی پھپھوندی دکھائی دیتی ہے۔',
            'Leaves turn yellow, dry from edges, and plant slowly dies.' => 'پتے زرد پڑ جاتے ہیں، کناروں سے خشک ہوتے ہیں اور پودا آہستہ آہستہ مر جاتا ہے۔',
            'Use healthy seed rhizomes, maintain field hygiene, and avoid storing infected rhizomes.' => 'صحت مند بیج والی گانٹھیں استعمال کریں، کھیت کی صفائی برقرار رکھیں اور متاثرہ گانٹھوں کو ذخیرہ کرنے سے گریز کریں۔',
            'Use disease-free planting material and maintain good drainage.' => 'بیماری سے پاک کاشت کاری کا مواد استعمال کریں اور نکاسی آب کا اچھا انتظام برقرار رکھیں۔',
            'Use disease-free seedlings and rotate crops.' => 'بیماری سے پاک پنیری استعمال کریں اور فصلوں میں ردوبدل کریں۔',
            'Use certified seeds and avoid wet leaves.' => 'مصدقہ بیج استعمال کریں اور پتوں کو زیادہ دیر تک گیلا رکھنے سے گریز کریں۔',
            'Use healthy planting material and control aphids.' => 'صحت مند کاشت کاری کا مواد استعمال کریں اور تیلوں کو قابو کریں۔',
            'Use disease-free seed rhizomes and control insects.' => 'بیماری سے پاک بیج والی گانٹھیں استعمال کریں اور حشرات کو قابو کریں۔',
            'Use clean planting material and remove old plant residues.' => 'صاف کاشت کاری کا مواد استعمال کریں اور پودوں کی پرانی باقیات نکال دیں۔',
            'Use disease-free suckers and well-drained soil.' => 'بیماری سے پاک شگوفے استعمال کریں اور اچھی نکاسی والی مٹی اختیار کریں۔',
            'Use healthy suckers and control aphids.' => 'صحت مند شگوفے استعمال کریں اور تیلوں کو قابو کریں۔',
            'Use sticky bands on tree trunks and control ants.' => 'درختوں کے تنوں پر چپکنے والی پٹیاں لگائیں اور چیونٹیوں کو قابو کریں۔',
            'Avoid injury to trees and prune infected branches.' => 'درختوں کو نقصان پہنچانے سے گریز کریں اور متاثرہ شاخوں کی شاخ تراشی کریں۔',
            'Apply recommended soil insecticides before or during planting.' => 'تجویز کردہ مٹی کی کیڑے مار ادویات کاشت سے پہلے یا کاشت کے دوران استعمال کریں۔',
            'Bacteria enter through wounds in branches and spread in wet conditions.' => 'بیکٹیریا شاخوں کے زخموں کے ذریعے پودے میں داخل ہوتے ہیں اور نم حالات میں پھیلتے ہیں۔',
            'Small insects suck sap from barley leaves, especially in warm weather.' => 'چھوٹے حشرات جو کے پتوں کا رس چوستے ہیں، خصوصاً گرم موسم میں۔',
            'Plants turn yellow, wilt, and can be easily pulled from soil.' => 'پودے زرد پڑ کر مرجھا جاتے ہیں اور انہیں مٹی سے آسانی سے نکالا جا سکتا ہے۔',
            'Use fruit bags, remove infected fruits, and maintain field hygiene.' => 'پھلوں کو تھیلیوں سے ڈھانپیں، متاثرہ پھل نکال دیں اور کھیت کی صفائی برقرار رکھیں۔',
            'Use yellow sticky traps and remove weeds near plants.' => 'پیلی چپکنے والی پھندیاں استعمال کریں اور پودوں کے قریب جڑی بوٹیاں نکال دیں۔',
            'Use resistant rootstocks and improve soil drainage.' => 'مزاحم جڑ والے پودوں کا مواد استعمال کریں اور مٹی کی نکاسی آب بہتر بنائیں۔',
            'Avoid injuries to trees and prune during dry weather.' => 'درختوں کو زخم پہنچانے سے گریز کریں اور خشک موسم میں شاخ تراشی کریں۔',
            'Avoid overuse of nitrogen fertilizer, encourage ladybird insects, and keep field clean.' => 'نائٹروجن کھاد کے ضرورت سے زیادہ استعمال سے گریز کریں، لیڈی برڈ حشرات کی حوصلہ افزائی کریں اور کھیت کو صاف رکھیں۔',
            'Use certified disease-free seeds and treat seeds before sowing.' => 'مصدقہ اور بیماری سے پاک بیج استعمال کریں اور بوائی سے پہلے بیج کا علاج کریں۔',
            'Use clean seeds and avoid late sowing.' => 'صاف بیج استعمال کریں اور دیر سے بوائی کرنے سے گریز کریں۔',
            'Regular field checking and remove infested plants early.' => 'کھیت کی باقاعدگی سے نگرانی کریں اور متاثرہ پودے ابتدائی مرحلے میں نکال دیں۔',
            'Use healthy seeds and remove old crop debris.' => 'صحت مند بیج استعمال کریں اور فصل کی پرانی باقیات نکال دیں۔',
            'Avoid too much nitrogen fertilizer and encourage natural predators like ladybirds.' => 'نائٹروجن کھاد کے ضرورت سے زیادہ استعمال سے گریز کریں اور لیڈی برڈز جیسے قدرتی شکاری حشرات کی حوصلہ افزائی کریں۔',
            'Use treated and certified seeds.' => 'علاج شدہ اور مصدقہ بیج استعمال کریں۔',
            'Use disease-free seed and seed treatment.' => 'بیماری سے پاک بیج استعمال کریں اور بیج کا علاج کریں۔',
            'Use certified seeds and rotate crops.' => 'مصدقہ بیج استعمال کریں اور فصلوں میں باقاعدگی سے ردوبدل کریں۔',
            'Apply Imidacloprid or Thiamethoxam as per recommendation.' => 'امیڈاکلوپرڈ یا تھیامیٹھوکزام تجویز کردہ طریقے کے مطابق استعمال کریں۔',
            'Apply Chlorpyrifos or Lambda-cyhalothrin if infestation is severe.' => 'اگر حملہ شدید ہو تو کلورپائریفوس یا لیمبڈا سائہالوتھرین استعمال کریں۔',
            'Fungus grows on leaves in dry weather with cool nights.' => 'خشک موسم اور ٹھنڈی راتوں میں پھپھوندی پتوں پر نشوونما پاتی ہے۔',
            'Fungus spreads in warm and humid conditions through water splash.' => 'پھپھوندی گرم اور مرطوب حالات میں پانی کے چھینٹوں کے ذریعے پھیلتی ہے۔',
            'Holes in pods, damaged seeds, and reduced harvest.' => 'پھلیوں میں سوراخ، بیجوں کو نقصان اور پیداوار میں کمی اس حملے کی نمایاں علامات ہیں۔',
            'Leaves become silvery, dry from tips, and plant growth becomes weak.' => 'پتے چاندی جیسے ہو جاتے ہیں، سروں سے خشک ہوتے ہیں اور پودے کی نشوونما کمزور پڑ جاتی ہے۔',
            'Purple or brown spots appear on leaves and spread, causing drying.' => 'پتوں پر جامنی یا بھورے دھبے ظاہر ہوتے ہیں جو پھیل کر پتوں کو خشک کر دیتے ہیں۔',
            'Dark brown spots appear on leaves and stems, leaves dry and fall.' => 'پتوں اور تنوں پر گہرے بھورے دھبے ظاہر ہوتے ہیں، جبکہ پتے خشک ہو کر گر جاتے ہیں۔',
            'Yellow patches on leaves and white fungal growth under leaves.' => 'پتوں پر زرد دھبے اور ان کی نچلی سطح پر سفید پھپھوندی جیسی نشوونما نظر آتی ہے۔',
            'Avoid overhead watering and improve air flow between plants.' => 'اوپر سے آبپاشی کرنے سے گریز کریں اور پودوں کے درمیان ہوا کی مناسب آمدورفت بہتر بنائیں۔',
            'Avoid infected soil and practice long crop rotation.' => 'متاثرہ مٹی سے گریز کریں اور طویل مدت تک فصلوں میں ردوبدل پر عمل کریں۔',
            'Use crop rotation and healthy seedlings.' => 'فصلوں میں ردوبدل کریں اور صحت مند پنیری استعمال کریں۔',
            'Use crop rotation and cover soil around plant base.' => 'فصلوں میں ردوبدل کریں اور پودوں کے تنے کے نچلے حصے کے اردگرد مٹی چڑھائیں۔',
            'Use crop rotation and maintain soil pH balance.' => 'فصلوں میں ردوبدل کریں اور مٹی کی پی ایچ کی مناسب سطح برقرار رکھیں۔',
            'Avoid overhead watering and keep good air flow between plants.' => 'اوپر سے آبپاشی کرنے سے گریز کریں اور پودوں کے درمیان ہوا کی اچھی آمدورفت برقرار رکھیں۔',
            'Use clean seeds and avoid water splashes on leaves.' => 'صاف بیج استعمال کریں اور پتوں پر پانی کے چھینٹوں سے گریز کریں۔',
            'Spray Imidacloprid or Dimethoate as per agricultural advice.' => 'امیڈاکلوپرڈ یا ڈائیمتھویٹ زرعی ماہرین کی ہدایت کے مطابق اسپرے کریں۔',
        ];
        if (isset($sourceExact[$t])) return $sourceExact[$t];
        $pestTerms = [
            'leaves' => 'پتے', 'leaf' => 'پتہ', 'stems' => 'تنے', 'stem' => 'تنا', 'shoots' => 'شاخیں', 'shoot' => 'شگوفہ',
            'tender leaves' => 'نرم پتے', 'young leaves' => 'نئی پتیوں', 'young shoots' => 'نئی شاخیں', 'tender shoots' => 'نرم شاخیں',
            'flowers' => 'پھول', 'flower buds' => 'پھول کی کلیاں', 'buds' => 'کلیاں', 'pods' => 'پھلیاں', 'seeds' => 'بیج',
            'fruits' => 'پھل', 'fruit' => 'پھل', 'roots' => 'جڑیں', 'root' => 'جڑ', 'bulbs' => 'گانٹھیں', 'bulb' => 'گانٹھ',
            'tubers' => 'گٹھے', 'tuber' => 'گٹھا', 'curd' => 'پھول گوبھی کا پھول', 'heads' => 'گوبھی کے پھول',
            'plant sap' => 'پودے کا رس', 'sap' => 'رس', 'plant juice' => 'پودے کا رس', 'green tissue' => 'سبز بافت',
            'plant tissues' => 'پودے کے بافتے', 'plant tissue' => 'پودے کا بافت', 'leaf sap' => 'پتوں کا رس',
            'warm weather' => 'گرم موسم', 'cool weather' => 'ٹھنڈا موسم', 'hot weather' => 'گرم موسم', 'dry weather' => 'خشک موسم',
            'warm conditions' => 'گرم حالات', 'cool conditions' => 'ٹھنڈے حالات', 'wet conditions' => 'نم حالات', 'humid conditions' => 'مرطوب حالات',
            'warm and humid conditions' => 'گرم اور مرطوب حالات', 'cool and humid conditions' => 'ٹھنڈے اور مرطوب حالات',
            'cool and wet conditions' => 'ٹھنڈے اور نم حالات', 'warm and wet conditions' => 'گرم اور نم حالات',
            'dry and warm weather' => 'خشک اور گرم موسم', 'cool and dry weather' => 'ٹھنڈا اور خشک موسم',
            'dry but warm conditions' => 'خشک لیکن گرم حالات', 'dry but cool weather' => 'خشک لیکن ٹھنڈا موسم',
            'poorly drained soil' => 'ناقص نکاسی والی مٹی', 'waterlogged soil' => 'پانی جمع ہونے والی مٹی', 'wet soil' => 'نم مٹی',
            'soil' => 'مٹی', 'field' => 'کھیت', 'crop residues' => 'فصل کی باقیات', 'plant debris' => 'پودوں کی باقیات',
            'infected plants' => 'متاثرہ پودے', 'affected plants' => 'متاثرہ پودے', 'damaged plants' => 'متاثرہ پودے',
            'damaged leaves' => 'متاثرہ پتے', 'infected leaves' => 'متاثرہ پتے', 'damaged pods' => 'متاثرہ پھلیاں',
            'natural predators' => 'قدرتی شکاری حشرات', 'natural enemies' => 'قدرتی دشمن حشرات', 'ladybirds' => 'لیڈی برڈز',
            'ladybird beetles' => 'لیڈی برڈ بھونرے', 'sticky traps' => 'چپکنے والی پھندیاں', 'yellow sticky traps' => 'پیلی چپکنے والی پھندیاں',
            'pheromone traps' => 'فیرومون پھندیاں', 'overcrowding' => 'بہت زیادہ گنجان کاشت', 'proper spacing' => 'مناسب فاصلہ',
            'air circulation' => 'ہوا کی مناسب آمدورفت', 'air flow' => 'ہوا کی مناسب آمدورفت', 'overwatering' => 'ضرورت سے زیادہ پانی دینا',
            'waterlogging' => 'پانی کا جمع ہونا', 'excess nitrogen' => 'ضرورت سے زیادہ نائٹروجن', 'nitrogen fertilizer' => 'نائٹروجن کھاد',
            'crop rotation' => 'فصلوں میں ردوبدل', 'field cleanliness' => 'کھیت کی صفائی', 'field hygiene' => 'کھیت کی صفائی',
            'field sanitation' => 'کھیت کی صفائی کا مناسب انتظام', 'weeds' => 'جڑی بوٹیاں', 'weed-free' => 'جڑی بوٹیوں سے پاک',
            'disease-free seed' => 'بیماری سے پاک بیج', 'healthy seed' => 'صحت مند بیج', 'clean seed' => 'صاف بیج',
            'recommended insecticides' => 'تجویز کردہ کیڑے مار ادویات', 'other recommended insecticides' => 'دیگر تجویز کردہ کیڑے مار ادویات',
            'suitable insecticides' => 'موزوں کیڑے مار ادویات', 'recommended fungicides' => 'تجویز کردہ پھپھوندی کش ادویات',
            'other recommended fungicides' => 'دیگر تجویز کردہ پھپھوندی کش ادویات', 'soil insecticides' => 'مٹی میں استعمال ہونے والی کیڑے مار ادویات',
            'recommended soil insecticides' => 'تجویز کردہ مٹی کی کیڑے مار ادویات', 'fungicides' => 'پھپھوندی کش ادویات',
            'insecticides' => 'کیڑے مار ادویات', 'bactericides' => 'بیکٹیریا کش ادویات', 'copper-based fungicides' => 'تانبے پر مبنی پھپھوندی کش ادویات',
            'copper-based bactericides' => 'تانبے پر مبنی بیکٹیریا کش ادویات', 'Neem oil' => 'نیم کا تیل', 'Neem-based insecticides' => 'نیم پر مبنی کیڑے مار ادویات',
            'soil management practices' => 'مٹی کے انتظام کے مناسب طریقے', 'field management' => 'کھیت کا مناسب انتظام',
            'plant growth' => 'پودے کی نشوونما', 'weak plant growth' => 'پودے کی کمزور نشوونما', 'poor plant growth' => 'پودے کی ناقص نشوونما',
            'slow plant growth' => 'پودے کی سست نشوونما', 'yield' => 'پیداوار', 'reduced yield' => 'کم پیداوار', 'poor yield' => 'کم پیداوار',
            'small holes' => 'چھوٹے سوراخ', 'large holes' => 'بڑے سوراخ', 'tiny holes' => 'باریک سوراخ', 'white lines' => 'سفید لکیریں',
            'white streaks' => 'سفید دھاریاں', 'yellow patches' => 'زرد دھبے', 'brown spots' => 'بھورے دھبے', 'black spots' => 'سیاہ دھبے',
            'dark spots' => 'گہرے دھبے', 'powder-like layer' => 'پاؤڈر جیسی تہہ', 'white fungal growth' => 'سفید پھپھوندی جیسی نشوونما',
            'sticky coating' => 'چپچپی تہہ', 'sticky honeydew' => 'چپچپا میٹھا مادہ', 'plant growth' => 'پودے کی نشوونما',
            'young plants' => 'کم عمر پودے', 'young seedlings' => 'کم عمر پودے', 'seedlings' => 'ننھے پودے', 'plants' => 'پودے', 'plant' => 'پودا',
            'young onion plants' => 'کم عمر پیاز کے پودے', 'young garlic plants' => 'کم عمر لہسن کے پودے', 'young sunflower plants' => 'کم عمر سورج مکھی کے پودے',
            'onion leaves' => 'پیاز کے پتے', 'cabbage leaves' => 'بند گوبھی کے پتے', 'potato leaves' => 'آلو کے پتے', 'pea pods' => 'مٹر کی پھلیاں',
            'leaf edges' => 'پتوں کے کنارے', 'upper leaf side' => 'پتے کی اوپری سطح', 'under leaves' => 'پتوں کی نچلی سطح پر', 'near roots' => 'جڑوں کے قریب',
            'central shoots' => 'مرکزی شاخیں', 'ground level' => 'زمین کی سطح', 'soil surface' => 'مٹی کی سطح', 'stem base' => 'تنے کا نچلا حصہ',
            'damaged roots' => 'متاثرہ جڑیں', 'damaged seedlings' => 'متاثرہ ننھے پودے', 'damaged seeds' => 'متاثرہ بیج', 'developing seeds' => 'بننے والے بیج',
            'weak growth' => 'کمزور نشوونما', 'growth slows down' => 'نشوونما سست پڑ جاتی ہے', 'grow slowly' => 'آہستہ بڑھتے ہیں',
            'become weak' => 'کمزور ہو جاتے ہیں', 'becomes weak' => 'کمزور ہو جاتا ہے', 'look weak' => 'کمزور دکھائی دیتے ہیں', 'die slowly' => 'آہستہ آہستہ مر جاتے ہیں',
            'die suddenly' => 'اچانک مر جاتے ہیں', 'fall down suddenly' => 'اچانک گر جاتے ہیں', 'fall over' => 'گر جاتے ہیں', 'fall early' => 'جلد گر جاتے ہیں',
            'dry early' => 'جلد خشک ہو جاتے ہیں', 'dry out' => 'خشک ہو جاتے ہیں', 'dry completely' => 'مکمل طور پر خشک ہو جاتے ہیں', 'dry at edges' => 'کناروں سے خشک ہو جاتے ہیں',
            'turn yellow' => 'زرد ہو جاتے ہیں', 'turn yellow and dry' => 'زرد ہو کر خشک ہو جاتے ہیں', 'yellow' => 'زرد', 'brown' => 'بھورا', 'black' => 'سیاہ', 'white' => 'سفید', 'grey' => 'سرمئی', 'gray' => 'سرمئی', 'orange' => 'نارنجی', 'purple' => 'جامنی',
            'curled' => 'مڑے ہوئے', 'curly' => 'مڑے ہوئے', 'twisted' => 'ٹیڑھے', 'sticky' => 'چپچپے', 'silvery' => 'چاندی جیسے', 'pale' => 'زرد مائل', 'dark' => 'گہرے',
            'appear' => 'ظاہر ہوتے ہیں', 'appears' => 'ظاہر ہوتی ہے', 'become' => 'ہو جاتے ہیں', 'becomes' => 'ہو جاتا ہے', 'and' => 'اور', 'or' => 'یا', 'with' => 'کے ساتھ',
            'especially' => 'خصوصاً', 'usually' => 'عموماً', 'sometimes' => 'بعض اوقات', 'quickly' => 'تیزی سے', 'slowly' => 'آہستہ آہستہ', 'continuously' => 'مسلسل',
            'in groups' => 'جھنڈ کی صورت میں', 'at night' => 'رات کے وقت', 'during night' => 'رات کے وقت', 'near the ground' => 'زمین کے قریب',
            'feed on' => 'کو کھاتے ہیں', 'feed inside' => 'اندر خوراک حاصل کرتے ہیں', 'suck' => 'چوستے ہیں', 'attack' => 'حملہ کرتے ہیں', 'enter' => 'داخل ہوتے ہیں', 'spread quickly' => 'تیزی سے پھیلتے ہیں',
            'spread' => 'پھیلتے ہیں', 'causes' => 'کا سبب بنتا ہے', 'causing' => 'جس سے', 'damage' => 'نقصان پہنچاتے ہیں', 'damaged' => 'متاثرہ', 'poor' => 'کم', 'reduced' => 'کم',
            'water stress' => 'پانی کی کمی کا دباؤ', 'drought stress' => 'خشک سالی کا دباؤ', 'high moisture' => 'زیادہ نمی', 'excess moisture' => 'ضرورت سے زیادہ نمی',
            'proper drainage' => 'مناسب نکاسی آب', 'good drainage' => 'اچھی نکاسی آب', 'dense planting' => 'گنجان کاشت', 'continuous' => 'مسلسل', 'injury' => 'زخم یا نقصان',
            'remove' => 'نکال دیں', 'remove infected' => 'متاثرہ کو نکال دیں', 'keep' => 'رکھیں', 'maintain' => 'برقرار رکھیں', 'ensure' => 'یقینی بنائیں', 'improve' => 'بہتر بنائیں',
            'hand removal' => 'ہاتھ سے نکالنا', 'early removal' => 'ابتدائی مرحلے میں نکالنا', 'netting' => 'جالی دار پردہ', 'net covers' => 'جالی دار پردے', 'overhead watering' => 'اوپر سے آبپاشی',
            'overhead irrigation' => 'اوپر سے آبپاشی', 'sunlight exposure' => 'دھوپ کی مناسب روشنی', 'stress on plants' => 'پودوں پر دباؤ',
            'same field every year' => 'ہر سال اسی کھیت میں کاشت', 'continuous radish growing' => 'مسلسل مولی کی کاشت', 'planting' => 'کاشت', 'sowing' => 'بوائی', 'before planting' => 'کاشت سے پہلے', 'during planting' => 'کاشت کے دوران',
            'cover soil around plants' => 'پودوں کے اردگرد مٹی چڑھائیں', 'store in dry conditions' => 'خشک حالات میں ذخیرہ کریں', 'field clean' => 'کھیت صاف', 'clean tools' => 'صاف اوزار',
            'potatoes' => 'آلو',
        ];
        $pt = function(string $x) use ($pestTerms): string {
            $x = trim($x);
            uksort($pestTerms, fn($a,$b) => strlen($b) <=> strlen($a));
            foreach ($pestTerms as $en => $ur) $x = preg_replace('/'.preg_quote($en,'/').'/iu', $ur, $x) ?? $x;
            return $x;
        };
        $pestChem = [
            'Acetamiprid'=>'ایسیٹامی پرڈ','Imidacloprid'=>'امیڈاکلوپرڈ','Thiamethoxam'=>'تھیامیٹھوکزام','Emamectin Benzoate'=>'ایمامیکٹن بینزوئیٹ',
            'Spinosad'=>'اسپائنو سیڈ','Spinetoram'=>'اسپائنٹورام','Abamectin'=>'ایبامیکٹن','Sulfur'=>'گندھک','Sulphur'=>'گندھک','Hexaconazole'=>'ہیکسا کونازول',
            'Mancozeb'=>'مینکوزیب','Carbendazim'=>'کاربینڈازم','Metalaxyl'=>'میٹالیکسل','Copper Oxychloride'=>'کاپر آکسی کلورائیڈ','Copper oxychloride'=>'کاپر آکسی کلورائیڈ',
            'Propiconazole'=>'پروپیکونازول','Tebuconazole'=>'ٹیبوکونازول','Chlorpyrifos'=>'کلورپائریفوس','Lambda-cyhalothrin'=>'لیمبڈا سائہالوتھرین',
            'Dimethoate'=>'ڈائیمتھویٹ','Fipronil'=>'فپرونل','Indoxacarb'=>'انڈوکسا کارب','Chlorantraniliprole'=>'کلورانٹرانی لیپرول','Buprofezin'=>'بیوپروفیزن',
            'Penconazole'=>'پینکونازول','Ridomil'=>'رڈومل','Streptomycin'=>'اسٹریپٹومائسن','Captan'=>'کیپٹن','Thiram'=>'تھائرم','Trichoderma'=>'ٹرائیکوڈرما',
            'Tricyclazole'=>'ٹرائی سائیکلازول','Azoxystrobin'=>'ایزوکسی اسٹروبن','Validamycin'=>'ویلیڈامائسن','Malathion'=>'میلاتھیون','Carbaryl'=>'کارباریل',
            'Carbofuran'=>'کاربوفیوران','Cartap Hydrochloride'=>'کارٹاپ ہائیڈروکلورائیڈ','Pyriproxyfen'=>'پائری پروکسی فین','Thiophanate-methyl'=>'تھیوفینیٹ میتھائل',
            'Cypermethrin'=>'سائپرمیتھرین','Myclobutanil'=>'مائیکلوبیوٹانل','Chlorothalonil'=>'کلوروتھالونل','Triazole'=>'ٹرائی ایزول','Triazole fungicides'=>'ٹرائی ایزول پھپھوندی کش ادویات',
        ];
        $pc = function(string $x) use ($pestChem): string {
            $x=trim($x); uksort($pestChem, fn($a,$b)=>strlen($b)<=>strlen($a));
            foreach($pestChem as $en=>$ur) $x=preg_replace('/'.preg_quote($en,'/').'/iu',$ur,$x)??$x; return $x;
        };
        if ($field === 'recommended_control') {
            if (preg_match('/^Apply (.+?) or (.+?) as recommended\.?$/i',$t,$m)) return $pc($m[1]).' یا '.$pc($m[2]).' استعمال کریں۔';
            if (preg_match('/^Apply (.+?) or (.+?) according to agricultural recommendations?\.?$/i',$t,$m)) return $pc($m[1]).' یا '.$pc($m[2]).' زرعی سفارشات کے مطابق استعمال کریں۔';
            if (preg_match('/^Apply (.+?) or (.+?)\.?$/i',$t,$m)) return $pc($m[1]).' یا '.$pc($m[2]).' استعمال کریں۔';
            if (preg_match('/^Spray (.+?) or (.+?)(?: as per recommendation| as recommended)?\.?$/i',$t,$m)) return $pc($m[1]).' یا '.$pc($m[2]).' کا اسپرے کریں۔';
            if (preg_match('/^Apply recommended soil insecticides(?: before or during planting)?\.?$/i',$t)) return 'تجویز کردہ مٹی کی کیڑے مار ادویات بوائی سے پہلے یا بوائی کے دوران استعمال کریں۔';
            if (preg_match('/^Apply (.+?) in soil(?: as recommended)?\.?$/i',$t,$m)) return $pc($m[1]).' مٹی میں تجویز کردہ طریقے کے مطابق استعمال کریں۔';
            if (preg_match('/^Treat soil or seeds with (.+?)\.?$/i',$t,$m)) return 'مٹی یا بیجوں کا '.$pc($m[1]).' سے علاج کریں۔';
            if (preg_match('/^Treat seed(?:s)? with (.+?) before planting\.?$/i',$t,$m)) return 'بوائی سے پہلے بیجوں کو '.$pc($m[1]).' سے ٹریٹ کریں۔';
            if (preg_match('/^Use (.+?) and apply recommended insecticides\.?$/i',$t,$m)) return $pc($m[1]).' استعمال کریں اور تجویز کردہ کیڑے مار ادویات کا استعمال کریں۔';
            if (preg_match('/^Use healthy seed and soil management practices\.?$/i',$t)) return 'صحت مند بیج استعمال کریں اور مٹی کے انتظام کے مناسب طریقوں پر عمل کریں۔';
            if (preg_match('/^Use disease-free seed and appropriate fungicide treatments\.?$/i',$t)) return 'بیماری سے پاک بیج استعمال کریں اور موزوں پھپھوندی کش ادویات سے بیج یا فصل کا علاج کریں۔';
            if (preg_match('/^Apply suitable fungicides and follow proper field management\.?$/i',$t)) return 'موزوں پھپھوندی کش ادویات استعمال کریں اور کھیت کا مناسب انتظام برقرار رکھیں۔';
            if (preg_match('/^No cure; control spread by removing infected plants\.?$/i',$t)) return 'اس بیماری کا مکمل علاج موجود نہیں؛ متاثرہ پودے نکال کر بیماری کے پھیلاؤ کو روکیں۔';
            if (preg_match('/^No cure; remove infected plants and control vectors\.?$/i',$t)) return 'اس بیماری کا مکمل علاج موجود نہیں؛ متاثرہ پودے نکال دیں اور بیماری منتقل کرنے والے حشرات کو قابو کریں۔';
        }
        if ($field === 'how_it_occurs') {
            if (preg_match('/^(Small|Tiny|Very small|Small white) insects suck (?:sap|juice) from (.+?)(?:, especially in (.+?))?\.?$/i',$t,$m)) {
                $sub=$pt($m[2]); $subj=strtolower($m[1])==='small white'?'چھوٹے سفید حشرات':(strtolower($m[1])==='tiny'?'نہایت چھوٹے حشرات':(strtolower($m[1])==='very small'?'بہت چھوٹے حشرات':'چھوٹے حشرات'));
                return $subj.' '.$sub.' کا رس چوستے ہیں'.(isset($m[3])&&$m[3]!==''?'، خصوصاً '.$pt($m[3]).' میں':'').'۔';
            }
            if (preg_match('/^Small insects attach to (.+?) and suck plant sap(?: continuously)?\.?$/i',$t,$m)) return 'چھوٹے حشرات '.$pt($m[1]).' سے چمٹ کر پودے کا رس چوستے ہیں۔';
            if (preg_match('/^Caterpillars (?:feed on|eat) (.+?)(?:, usually active at night)?\.?$/i',$t,$m)) return 'سنڈیاں '.$pt($m[1]).' کو کھاتی ہیں اور عموماً رات کے وقت زیادہ سرگرم ہوتی ہیں۔';
            if (preg_match('/^Larvae live in soil and cut (.+?) at (?:the )?(?:base|ground level)(?: during night| at night)?\.?$/i',$t,$m)) return 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت '.$pt($m[1]).' کو تنے کے نچلے حصے یا زمین کی سطح سے کاٹ دیتی ہیں۔';
            if (preg_match('/^Larvae feed inside leaves and (?:make|create) tunnels\.?$/i',$t)) return 'سنڈیاں پتوں کے اندر خوراک حاصل کرتی ہیں اور ان میں سرنگیں بناتی ہیں۔';
            if (preg_match('/^Larvae enter (?:inside )?leaves and make tunnels while feeding\.?$/i',$t)) return 'سنڈیاں پتوں میں داخل ہو کر خوراک حاصل کرتے ہوئے سرنگیں بناتی ہیں۔';
            if (preg_match('/^Fungus (?:grows|spreads) in (.+?)\.?$/i',$t,$m)) return 'پھپھوندی '.$pt($m[1]).' میں نشوونما پاتی یا پھیلتی ہے۔';
            if (preg_match('/^Fungus (?:grows|forms white powder-like growth) on (.+?) in (.+?)\.?$/i',$t,$m)) return 'پھپھوندی '.$pt($m[2]).' میں '.$pt($m[1]).' پر نشوونما پاتی ہے۔';
            if (preg_match('/^Soil fungus attacks (.+?) in (.+?)\.?$/i',$t,$m)) return 'مٹی میں موجود پھپھوندی '.$pt($m[2]).' میں '.$pt($m[1]).' پر حملہ کرتی ہے۔';
            if (preg_match('/^Bacteria enter through (.+?) in (.+?)\.?$/i',$t,$m)) return 'بیکٹیریا '.$pt($m[2]).' میں '.$pt($m[1]).' کے ذریعے پودے میں داخل ہوتے ہیں۔';
        }
        if ($field === 'symptoms') {
            $exactSymptoms = [
                'Small holes in stems, drying central shoots, and weak plant growth.' => 'تنے میں چھوٹے سوراخ، مرکزی شاخوں کا سوکھنا اور پودے کی کمزور نشوونما اس حملے کی نمایاں علامات ہیں۔',
                'Small holes in leaves, dried central shoots, and weak plant growth.' => 'پتوں میں چھوٹے سوراخ، مرکزی شاخوں کا سوکھ جانا اور پودے کی کمزور نشوونما اس حملے کی نمایاں علامات ہیں۔',
                'Small holes in stems, dried central shoots, and poor plant growth.' => 'تنے میں چھوٹے سوراخ، مرکزی شاخوں کا سوکھ جانا اور پودے کی ناقص نشوونما اس حملے کی نمایاں علامات ہیں۔',
                'Holes in leaves, damaged seedlings, and weak plant growth.' => 'پتوں میں سوراخ، ننھے پودوں کو نقصان اور پودے کی کمزور نشوونما اس حملے کی نمایاں علامات ہیں۔',
                'Small holes in leaves, skeleton-like leaves, and slow plant growth.' => 'پتوں میں چھوٹے سوراخ پڑ جاتے ہیں، پتے جالی نما دکھائی دیتے ہیں اور پودے کی نشوونما سست ہو جاتی ہے۔',
                'Leaves are eaten completely, only veins remain, plants look skeleton-like.' => 'پتے مکمل طور پر کھا لیے جاتے ہیں، صرف رگیں باقی رہ جاتی ہیں اور پودے کا ڈھانچہ جالی نما دکھائی دیتا ہے۔',
                'Leaves become curled, weak growth, sticky honey-like substance on plants.' => 'پتے مڑ جاتے ہیں، پودے کی نشوونما کمزور پڑ جاتی ہے اور پودے پر شہد جیسا چپچپا مادہ نظر آتا ہے۔',
                'Plants suddenly wilt, stem base turns black and rots.' => 'پودے اچانک مرجھا جاتے ہیں، تنے کا نچلا حصہ سیاہ ہو کر سڑنے لگتا ہے۔',
                'Oval lesions on leaf sheaths, lodging, yield reduction.' => 'پتوں کے غلاف پر بیضوی دھبے بن جاتے ہیں، پودے گرنے لگتے ہیں اور پیداوار کم ہو جاتی ہے۔',
                'Abnormally tall seedlings, yellow leaves, poor grain production.' => 'ننھے پودے غیر معمولی طور پر لمبے ہو جاتے ہیں، پتے زرد پڑ جاتے ہیں اور دانے کی پیداوار کم ہو جاتی ہے۔',
            ];
            if (isset($exactSymptoms[$t])) return $exactSymptoms[$t];
            if (preg_match('/^Holes in (.+?), damaged (.+?), and (.+?)\.?$/i',$t,$m)) return $pt($m[1]).' میں سوراخ، '.$pt($m[2]).' اور '.$pt($m[3]).' اس حملے کی نمایاں علامات ہیں۔';
            if (preg_match('/^Yellow patches on (.+?) and (?:white|grey|gray) (.+?) under leaves\.?$/i',$t,$m)) return $pt($m[1]).' پر زرد دھبے اور پتوں کی نچلی سطح پر '.$pt($m[2]).' دکھائی دیتی ہے۔';
            if (preg_match('/^Leaves become (.+?), and plant growth becomes (.+?)\.?$/i',$t,$m)) return 'پتے '.$pt($m[1]).' ہو جاتے ہیں اور پودے کی نشوونما '.$pt($m[2]).' ہو جاتی ہے۔';
            if (preg_match('/^Leaves turn yellow, (.+?), and plants? (.+?)\.?$/i',$t,$m)) return 'پتے زرد ہو جاتے ہیں، '.$pt($m[1]).' اور پودے '.$pt($m[2]).'۔';
            if (preg_match('/^Plants turn yellow, wilt, and (.+?)\.?$/i',$t,$m)) return 'پودے زرد ہو کر مرجھا جاتے ہیں اور '.$pt($m[1]).'۔';
            if (preg_match('/^(.+?) appear on (.+?), (.+?)\.?$/i',$t,$m)) return $pt($m[1]).' '.$pt($m[2]).' پر ظاہر ہوتے ہیں اور '.$pt($m[3]).'۔';
        }
        if ($field === 'protection') {
            if (preg_match('/^Remove (.+?), avoid (.+?), and (?:encourage|support) (.+?) like (.+?)\.?$/i',$t,$m)) return $pt($m[1]).' نکال دیں، '.$pt($m[2]).' سے گریز کریں اور '.$pt($m[3]).' جیسے '.$pt($m[4]).' کی حوصلہ افزائی کریں۔';
            if (preg_match('/^Remove (.+?), (?:keep|maintain) field clean(?:liness)?\.?$/i',$t,$m)) return $pt($m[1]).' نکال دیں اور کھیت کو صاف رکھیں۔';
            if (preg_match('/^Use (.+?) and (.+?)\.?$/i',$t,$m)) return $pt($m[1]).' استعمال کریں اور '.$pt($m[2]).'۔';
            if (preg_match('/^Avoid (.+?) and (?:ensure|improve) (.+?)\.?$/i',$t,$m)) return $pt($m[1]).' سے گریز کریں اور '.$pt($m[2]).' کو یقینی بنائیں۔';
            if (preg_match('/^Avoid (.+?)\.?$/i',$t,$m)) return $pt($m[1]).' سے گریز کریں۔';
            if (preg_match('/^Keep field clean, avoid (.+?), and encourage (.+?) like (.+?)\.?$/i',$t,$m)) return 'کھیت کو صاف رکھیں، '.$pt($m[1]).' سے گریز کریں اور '.$pt($m[2]).' جیسے '.$pt($m[3]).' کی حوصلہ افزائی کریں۔';
            if (preg_match('/^Keep field clean, remove weeds, and encourage (.+?) like (.+?)\.?$/i',$t,$m)) return 'کھیت کو صاف رکھیں، جڑی بوٹیاں نکال دیں اور '.$pt($m[1]).' جیسے '.$pt($m[2]).' کی حوصلہ افزائی کریں۔';
            if (preg_match('/^Regular field (?:checking|monitoring) and (.+?)\.?$/i',$t,$m)) return 'کھیت کی باقاعدگی سے نگرانی کریں اور '.$pt($m[1]).'۔';
            if (preg_match('/^Keep proper spacing between plants for good airflow\.?$/i',$t)) return 'اچھی ہوا کی آمدورفت کے لیے پودوں کے درمیان مناسب فاصلہ رکھیں۔';
            if (preg_match('/^Use certified seeds and rotate crops\.?$/i',$t)) return 'مصدقہ بیج استعمال کریں اور فصلوں میں باقاعدگی سے ردوبدل کریں۔';
            if (preg_match('/^Use crop rotation and avoid continuous (.+?) growing\.?$/i',$t,$m)) return 'فصلوں میں ردوبدل کریں اور مسلسل '.$pt($m[1]).' کی کاشت سے گریز کریں۔';
        }
        $chem = function (string $x): string {
            $x = trim($x);
            $map = [
                'Acetamiprid' => 'ایسیٹامی پرڈ', 'Imidacloprid' => 'امیڈاکلوپرڈ', 'Thiamethoxam' => 'تھیامیٹھوکزام',
                'Emamectin Benzoate' => 'ایمامیکٹن بینزوئیٹ', 'Spinosad' => 'اسپائنو سیڈ', 'Spinetoram' => 'اسپائنٹورام',
                'Abamectin' => 'ایبامیکٹن', 'Sulfur' => 'گندھک', 'Sulphur' => 'گندھک', 'Hexaconazole' => 'ہیکسا کونازول',
                'Mancozeb' => 'مینکوزیب', 'Carbendazim' => 'کاربینڈازم', 'Metalaxyl' => 'میٹالیکسل', 'Copper Oxychloride' => 'کاپر آکسی کلورائیڈ',
                'Propiconazole' => 'پروپیکونازول', 'Tebuconazole' => 'ٹیبوکونازول', 'Chlorpyrifos' => 'کلورپائریفوس',
                'Lambda-cyhalothrin' => 'لیمبڈا سائہالوتھرین', 'Dimethoate' => 'ڈائیمتھویٹ', 'Fipronil' => 'فپرونل',
                'Indoxacarb' => 'انڈوکسا کارب', 'Chlorantraniliprole' => 'کلورانٹرانی لیپرول', 'Buprofezin' => 'بیوپروفیزن',
                'Penconazole' => 'پینکونازول', 'Ridomil' => 'رڈومل', 'Streptomycin' => 'اسٹریپٹومائسن', 'Captan' => 'کیپٹن',
                'Thiram' => 'تھائرم', 'Trichoderma' => 'ٹرائیکوڈرما', 'Tricyclazole' => 'ٹرائی سائیکلازول', 'Azoxystrobin' => 'ایزوکسی اسٹروبن',
                'Validamycin' => 'ویلیڈامائسن', 'Malathion' => 'میلاتھیون', 'Carbaryl' => 'کارباریل', 'Carbofuran' => 'کاربوفیوران',
            ];
            return $map[$x] ?? $x;
        };
        if ($field === 'recommended_control') {
            if (preg_match('/^Apply (.+?) or (.+?)(?: as recommended| according to recommendations)?\.?$/i', $t, $m)) {
                return $chem($m[1]).' یا '.$chem($m[2]).' استعمال کریں۔';
            }
            if (preg_match('/^Spray (.+?) or (.+?)(?: as per agricultural advice| as per recommendation| as recommended)?\.?$/i', $t, $m)) {
                return $chem($m[1]).' یا '.$chem($m[2]).' کا اسپرے کریں۔';
            }
            if (preg_match('/^Apply (.+?) fungicide\.?$/i', $t, $m)) return $chem($m[1]).' کی پھپھوندی کش دوا استعمال کریں۔';
            if (preg_match('/^Apply (.+?) or suitable fungicides\.?$/i', $t, $m)) return $chem($m[1]).' یا موزوں پھپھوندی کش ادویات استعمال کریں۔';
            if (preg_match('/^Apply suitable insecticides(?: when infestation becomes severe)?\.?$/i', $t)) return 'ضرورت کے مطابق موزوں کیڑے مار دوا استعمال کریں۔';
            if (preg_match('/^Apply suitable systemic insecticides\.?$/i', $t)) return 'موزوں نظامی کیڑے مار دوا استعمال کریں۔';
            if (preg_match('/^Apply recommended insecticides(?: as advised by local agricultural departments)?\.?$/i', $t)) return 'مقامی محکمۂ زراعت کی ہدایات کے مطابق تجویز کردہ کیڑے مار دوا استعمال کریں۔';
            if (preg_match('/^Manage aphid vectors using recommended insecticides\.?$/i', $t)) return 'وائرس پھیلانے والے تیلوں کو تجویز کردہ کیڑے مار ادویات سے قابو کریں۔';
            if (preg_match('/^Manage aphid populations and destroy infected plants\.?$/i', $t)) return 'تیلوں کی تعداد کو قابو کریں اور متاثرہ پودے تلف کر دیں۔';
            if (preg_match('/^Manage whitefly populations and (destroy infected plants|use resistant varieties)\.?$/i', $t, $m)) return $m[1] === 'destroy infected plants' ? 'سفید مکھی کی تعداد کو قابو کریں اور متاثرہ پودے تلف کر دیں۔' : 'سفید مکھی کی تعداد کو قابو کریں اور مزاحمت رکھنے والی اقسام کاشت کریں۔';
            if (preg_match('/^Control aphid vectors using (.+?) or similar insecticides\.?$/i', $t, $m)) return 'وائرس پھیلانے والے تیلوں کو '.$chem($m[1]).' یا اسی نوع کی کیڑے مار ادویات سے قابو کریں۔';
            if (preg_match('/^No (?:complete|direct|strong) cure[;,]?\s*(.+)$/i', $t, $m)) return 'اس بیماری کا براہِ راست مکمل علاج موجود نہیں۔ '.$this->semanticPestSentence($m[1], 'recommended_control');
            if (preg_match('/^Remove infected plants and (.+)\.?$/i', $t, $m)) return 'متاثرہ پودے نکال دیں اور '.$this->semanticPestSentence($m[1], 'recommended_control');
        }
        if ($field === 'how_it_occurs') {
            $extraMaps = [
                '/^Spread through rain splash and infected seeds in warm, wet weather\.?$/i' => 'یہ بیماری گرم اور نم موسم میں بارش کے چھینٹوں اور متاثرہ بیجوں کے ذریعے پھیلتی ہے۔',
                '/^Tiny insects suck sap from leaves and spread quickly in warm weather\.?$/i' => 'نہایت چھوٹے حشرات پتوں کا رس چوستے ہیں اور گرم موسم میں تیزی سے پھیل جاتے ہیں۔',
                '/^Small insects attack stored and growing rhizomes and suck plant juice\.?$/i' => 'چھوٹے حشرات ذخیرہ شدہ اور بڑھتی ہوئی گانٹھوں پر حملہ کرتے ہیں اور پودے کا رس چوستے ہیں۔',
                '/^Spread through rain splash and infected plant debris\.?$/i' => 'یہ بیماری بارش کے چھینٹوں اور متاثرہ پودوں کی باقیات کے ذریعے پھیلتی ہے۔',
                '/^Small insects suck sap from leaves and pseudostem and spread quickly\.?$/i' => 'چھوٹے حشرات پتوں اور جھوٹے تنے کا رس چوستے ہیں اور تیزی سے پھیل جاتے ہیں۔',
                '/^Moth lays eggs on fruits\. After hatching, larvae bore inside and feed on pulp\.?$/i' => 'پروانہ پھلوں پر انڈے دیتا ہے۔ انڈوں سے نکلنے والی سنڈیاں پھل میں سوراخ کرکے اندر موجود گودے کو کھاتی ہیں۔',
                '/^Small insects gather on leaves and suck plant sap, multiplying quickly in warm weather\.?$/i' => 'چھوٹے حشرات پتوں پر جمع ہو کر پودے کا رس چوستے ہیں اور گرم موسم میں تیزی سے تعداد بڑھاتے ہیں۔',
                '/^Tiny white insects live under leaves and suck sap from plant\.?$/i' => 'نہایت چھوٹے سفید حشرات پتوں کی نچلی سطح پر رہتے ہیں اور پودے کا رس چوستے ہیں۔',
                '/^Spread through infected seeds and rain splash in wet weather\.?$/i' => 'یہ بیماری نم موسم میں متاثرہ بیجوں اور بارش کے چھینٹوں کے ذریعے پھیلتی ہے۔',
                '/^Adult flies lay eggs inside young melon fruits\. After hatching, larvae feed inside the fruit\.?$/i' => 'بالغ مکھیاں کم عمر خربوزوں کے پھلوں کے اندر انڈے دیتی ہیں۔ انڈوں سے نکلنے والی سنڈیاں پھل کے اندر خوراک حاصل کرتی ہیں۔',
                '/^Spread in cool, wet, and humid conditions\.?$/i' => 'یہ بیماری ٹھنڈے، نم اور مرطوب حالات میں پھیلتی ہے۔',
                '/^Tiny white insects feed on leaf sap and spread quickly in hot weather\.?$/i' => 'نہایت چھوٹے سفید حشرات پتوں کا رس چوستے ہیں اور گرم موسم میں تیزی سے پھیل جاتے ہیں۔',
                '/^Caterpillars feed on leaves and spread quickly in groups\.?$/i' => 'سنڈیاں پتوں کو کھاتی ہیں اور جھنڈ کی صورت میں تیزی سے پھیلتی ہیں۔',
                '/^Small insects suck sap from leaves and spread quickly in cool weather\.?$/i' => 'چھوٹے حشرات پتوں کا رس چوستے ہیں اور ٹھنڈے موسم میں تیزی سے پھیل جاتے ہیں۔',
                '/^Whiteflies suck plant juice and spread quickly in warm weather\.?$/i' => 'سفید مکھیاں پودے کا رس چوستی ہیں اور گرم موسم میں تیزی سے پھیل جاتی ہیں۔',
                '/^Spread by aphids from infected plants to healthy plants\.?$/i' => 'یہ بیماری تیلوں کے ذریعے متاثرہ پودوں سے صحت مند پودوں تک منتقل ہوتی ہے۔',
                '/^Larvae stay in soil and cut young garlic plants at night\.?$/i' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت لہسن کے کم عمر پودوں کو کاٹ دیتی ہیں۔',
                '/^Larvae cut young plants at the soil surface during night\.?$/i' => 'سنڈیاں رات کے وقت مٹی کی سطح سے کم عمر پودوں کو کاٹ دیتی ہیں۔',
                '/^Spread through infected seeds and water splash\.?$/i' => 'یہ بیماری متاثرہ بیجوں اور پانی کے چھینٹوں کے ذریعے پھیلتی ہے۔',
                '/^Small white insects suck plant sap and spread in warm conditions\.?$/i' => 'چھوٹے سفید حشرات پودے کا رس چوستے ہیں اور گرم حالات میں پھیل جاتے ہیں۔',
                '/^Small white insects suck sap and spread quickly in warm conditions\.?$/i' => 'چھوٹے سفید حشرات پودے کا رس چوستے ہیں اور گرم حالات میں تیزی سے پھیل جاتے ہیں۔',
                '/^Spread by spores in windy and humid conditions\.?$/i' => 'مرطوب اور ہوا دار حالات میں پھپھوندی کے جراثیمی ذرات کے ذریعے بیماری پھیلتی ہے۔',
                '/^Spread through infected seeds, water, and tools\.?$/i' => 'یہ بیماری متاثرہ بیجوں، پانی اور آلودہ اوزاروں کے ذریعے پھیلتی ہے۔',
                '/^Spread through rain splash, wind, and infected seeds\.?$/i' => 'یہ بیماری بارش کے چھینٹوں، ہوا اور متاثرہ بیجوں کے ذریعے پھیلتی ہے۔',
                '/^Spread through rain splash, water, and infected seeds\.?$/i' => 'یہ بیماری بارش کے چھینٹوں، پانی اور متاثرہ بیجوں کے ذریعے پھیلتی ہے۔',
                '/^Spread through infected planting material and insect vectors\.?$/i' => 'یہ بیماری متاثرہ کاشت کاری کے مواد اور بیماری منتقل کرنے والے حشرات کے ذریعے پھیلتی ہے۔',
                '/^Adult flies lay eggs inside ripening fruits\. Larvae feed inside the fruit\.?$/i' => 'بالغ مکھیاں پکنے والے پھلوں کے اندر انڈے دیتی ہیں۔ انڈوں سے نکلنے والی سنڈیاں پھل کے اندر خوراک حاصل کرتی ہیں۔',
                '/^Adult flies lay eggs inside ripe fruits\.?$/i' => 'بالغ مکھیاں پکے ہوئے پھلوں کے اندر انڈے دیتی ہیں۔',
                '/^Adult flies lay eggs inside ripe or semi-ripe fruits\.?$/i' => 'بالغ مکھیاں پکے یا نیم پکے پھلوں کے اندر انڈے دیتی ہیں۔',
                '/^Female flies lay eggs inside fruits, and larvae feed inside\.?$/i' => 'مادہ مکھیاں پھلوں کے اندر انڈے دیتی ہیں اور سنڈیاں پھل کے اندر خوراک حاصل کرتی ہیں۔',
                '/^Female flies lay eggs inside young fruits and larvae feed on them\.?$/i' => 'مادہ مکھیاں کم عمر پھلوں کے اندر انڈے دیتی ہیں اور سنڈیاں انہی پھلوں کو نقصان پہنچاتی ہیں۔',
                '/^Adult moth lays eggs on young fruits\. After hatching, larvae enter the fruit and feed inside\.?$/i' => 'بالغ پروانہ کم عمر پھلوں پر انڈے دیتا ہے۔ انڈوں سے نکلنے والی سنڈیاں پھل میں داخل ہو کر اندر سے خوراک حاصل کرتی ہیں۔',
                '/^Adult moth lays eggs on flowers or young fruits\. After hatching, larvae enter the fruit and feed inside\.?$/i' => 'بالغ پروانہ پھولوں یا کم عمر پھلوں پر انڈے دیتا ہے۔ انڈوں سے نکلنے والی سنڈیاں پھل میں داخل ہو کر اندر سے خوراک حاصل کرتی ہیں۔',
                '/^Adult weevil lays eggs in trunk wounds\. Larvae enter inside the palm and feed on soft tissue\.?$/i' => 'بالغ سونڈ والا کیڑا تنے کے زخموں میں انڈے دیتا ہے۔ انڈوں سے نکلنے والی سنڈیاں کھجور کے درخت کے اندر داخل ہو کر نرم بافتوں کو کھاتی ہیں۔',
            ];
            foreach ($extraMaps as $pattern => $value) if (preg_match($pattern, $t)) return $value;
            $remaining = [
                '/^Spread through infected seeds, irrigation water, and rain splashes\.?$/i' => 'یہ بیماری متاثرہ بیجوں، آبپاشی کے پانی اور بارش کے چھینٹوں کے ذریعے پھیلتی ہے۔',
                '/^Infection occurs during flowering under humid conditions\.?$/i' => 'مرطوب حالات میں پھول آنے کے مرحلے کے دوران بیماری کا حملہ ہوتا ہے۔',
                '/^Larvae bore into cotton bolls and feed on developing seeds and lint\.?$/i' => 'سنڈیاں کپاس کی ٹینڈوں میں سوراخ کرکے بننے والے بیجوں اور روئی کے ریشوں کو کھاتی ہیں۔',
                '/^Spread through infected seeds, rain splash, and crop residues\.?$/i' => 'یہ بیماری متاثرہ بیجوں، بارش کے چھینٹوں اور فصل کی باقیات کے ذریعے پھیلتی ہے۔',
                '/^Larvae feed on roots under the soil\.?$/i' => 'سنڈیاں مٹی کے اندر موجود جڑوں کو کھاتی ہیں۔',
                '/^Termites attack roots and underground parts of the plant\.?$/i' => 'دیمک جڑوں اور پودے کے زیرِ زمین حصوں پر حملہ کرتی ہے۔',
                '/^Termites attack roots and underground plant parts\.?$/i' => 'دیمک جڑوں اور پودے کے زیرِ زمین حصوں پر حملہ کرتی ہے۔',
                '/^Larvae bore into stems and feed inside the plant\.?$/i' => 'سنڈیاں تنوں میں سوراخ کرکے پودے کے اندر خوراک حاصل کرتی ہیں۔',
                '/^Whiteflies feed by sucking plant sap and spread diseases\.?$/i' => 'سفید مکھیاں پودے کا رس چوستی ہیں اور بیماریاں پھیلاتی ہیں۔',
                '/^Large brown spots appear on leaves and spread over time\.?$/i' => 'پتوں پر بڑے بھورے دھبے بنتے ہیں جو وقت کے ساتھ پھیل جاتے ہیں۔',
            ];
            foreach ($remaining as $pattern => $value) if (preg_match($pattern, $t)) return $value;
            $virusMaps = [
                '/^The virus spreads through infected seed cane and insect carriers\.?$/i' => 'یہ وائرس متاثرہ گنے کے بیج اور وائرس منتقل کرنے والے حشرات کے ذریعے پھیلتا ہے۔',
                '/^The virus spreads through infected plants and insect carriers\.?$/i' => 'یہ وائرس متاثرہ پودوں اور وائرس منتقل کرنے والے حشرات کے ذریعے پھیلتا ہے۔',
                '/^The virus spreads through insect carriers and infected plants\.?$/i' => 'یہ وائرس وائرس منتقل کرنے والے حشرات اور متاثرہ پودوں کے ذریعے پھیلتا ہے۔',
            ];
            foreach ($virusMaps as $pattern => $value) if (preg_match($pattern, $t)) return $value;
            $generic = [
                '/^Small white insects suck sap from leaves and spread quickly in warm conditions\.?$/i' => 'چھوٹے سفید حشرات پتوں کا رس چوستے ہیں اور گرم حالات میں تیزی سے پھیل جاتے ہیں۔',
                '/^Small insects suck sap from leaves, stems, and fruits and spread quickly in dry weather\.?$/i' => 'چھوٹے حشرات پتوں، تنوں اور پھلوں کا رس چوستے ہیں اور خشک موسم میں تیزی سے پھیل جاتے ہیں۔',
                '/^Small insects attach to stems and leaves and suck plant sap\.?$/i' => 'چھوٹے حشرات تنوں اور پتوں سے چمٹ کر پودے کا رس چوستے ہیں۔',
                '/^Small insects attach to leaves and suck sap continuously\.?$/i' => 'چھوٹے حشرات پتوں سے چمٹ کر مسلسل رس چوستے ہیں۔',
                '/^Small insects appear in clusters on young shoots and leaves and suck plant sap, especially in warm weather\.?$/i' => 'چھوٹے حشرات نئی شاخوں اور پتوں پر جھنڈ کی صورت میں ظاہر ہوتے ہیں اور پودے کا رس چوستے ہیں، خاص طور پر گرم موسم میں۔',
                '/^Insects feed on young shoots and spread quickly in warm weather\.?$/i' => 'حشرات نئی شاخوں کو کھاتے ہیں اور گرم موسم میں تیزی سے پھیل جاتے ہیں۔',
                '/^Larvae live in soil and cut young seedlings at night\.?$/i' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت ننھے پودوں کو کاٹ دیتی ہیں۔',
                '/^Larvae live in soil and cut young sunflower plants at ground level during night\.?$/i' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت سورج مکھی کے کم عمر پودوں کو زمین کی سطح سے کاٹ دیتی ہیں۔',
                '/^Larvae fold rice leaves and feed on green tissues\.?$/i' => 'سنڈیاں چاول کے پتوں کو لپیٹ دیتی ہیں اور اندر موجود سبز بافتوں کو کھاتی ہیں۔',
                '/^Adults and larvae scrape leaf surfaces and feed on tissues\.?$/i' => 'بالغ کیڑے اور سنڈیاں پتوں کی سطح کو کھرچ کر اندرونی بافتوں کو کھاتے ہیں۔',
                '/^Larvae attack growing points and develop inside plant tissues\.?$/i' => 'سنڈیاں پودے کے بڑھتے ہوئے حصوں پر حملہ کرتی ہیں اور پودے کے بافتوں کے اندر نشوونما پاتی ہیں۔',
                '/^Spread through infected seeds and irrigation water, and rain splashes\.?$/i' => 'یہ بیماری متاثرہ بیجوں، آبپاشی کے پانی اور بارش کے چھینٹوں کے ذریعے پھیلتی ہے۔',
            ];
            foreach ($generic as $pattern => $value) if (preg_match($pattern, $t)) return $value;
            $maps = [
                '/^Spread by aphids and infected plant material\.?$/i' => 'یہ بیماری تیلوں اور متاثرہ پودوں کے مواد کے ذریعے پھیلتی ہے۔',
                '/^Spread by aphids from infected plants\.?$/i' => 'یہ بیماری متاثرہ پودوں سے آنے والے تیلوں کے ذریعے پھیلتی ہے۔',
                '/^Spread by aphids and infected planting material\.?$/i' => 'یہ بیماری تیلوں اور متاثرہ کاشت کاری کے مواد کے ذریعے پھیلتی ہے۔',
                '/^Spread by banana aphids and infected planting material\.?$/i' => 'یہ بیماری کیلے کے تیلوں اور متاثرہ کاشت کاری کے مواد کے ذریعے پھیلتی ہے۔',
                '/^Spread by infected planting material and insect vectors\.?$/i' => 'یہ بیماری متاثرہ کاشت کاری کے مواد اور اسے منتقل کرنے والے حشرات کے ذریعے پھیلتی ہے۔',
                '/^Spread by thrips insects and infected plants\.?$/i' => 'یہ بیماری تھرپس حشرات اور متاثرہ پودوں کے ذریعے پھیلتی ہے۔',
                '/^Spread by insects like aphids from infected plants\.?$/i' => 'یہ بیماری متاثرہ پودوں سے آنے والے تیلوں جیسے حشرات کے ذریعے پھیلتی ہے۔',
                '/^Spread by wind in cool, wet weather\.?$/i' => 'ٹھنڈے اور نم موسم میں یہ بیماری ہوا کے ذریعے پھیلتی ہے۔',
                '/^Spread by rain splash and infected plant debris\.?$/i' => 'یہ بیماری بارش کے چھینٹوں اور متاثرہ پودوں کی باقیات کے ذریعے پھیلتی ہے۔',
                '/^Spread through infected seeds and wet weather conditions\.?$/i' => 'یہ بیماری متاثرہ بیجوں اور نم موسمی حالات کے ذریعے پھیلتی ہے۔',
                '/^Spread through infected seeds and crop residue\.?$/i' => 'یہ بیماری متاثرہ بیجوں اور فصل کی باقیات کے ذریعے پھیلتی ہے۔',
                '/^Spread through infected plant debris and wet conditions\.?$/i' => 'یہ بیماری متاثرہ پودوں کی باقیات اور نم حالات کے ذریعے پھیلتی ہے۔',
                '/^Spread through infected seeds, water, and crop debris\.?$/i' => 'یہ بیماری متاثرہ بیجوں، پانی اور فصل کی باقیات کے ذریعے پھیلتی ہے۔',
                '/^Spread through infected seeds, water, and tools\.?$/i' => 'یہ بیماری متاثرہ بیجوں، پانی اور آلودہ اوزاروں کے ذریعے پھیلتی ہے۔',
                '/^Spread through rain splash, wind, and infected seeds\.?$/i' => 'یہ بیماری بارش کے چھینٹوں، ہوا اور متاثرہ بیجوں کے ذریعے پھیلتی ہے۔',
                '/^Spread through rain, wind, and infected seeds\.?$/i' => 'یہ بیماری بارش، ہوا اور متاثرہ بیجوں کے ذریعے پھیلتی ہے۔',
                '/^Spread through infected fruits and humid conditions\.?$/i' => 'یہ بیماری متاثرہ پھلوں اور مرطوب حالات کے ذریعے پھیلتی ہے۔',
                '/^Spread through rain splash, water, and infected seeds\.?$/i' => 'یہ بیماری بارش کے چھینٹوں، پانی اور متاثرہ بیجوں کے ذریعے پھیلتی ہے۔',
                '/^Spread through wind, rain, and infected plant material\.?$/i' => 'یہ بیماری ہوا، بارش اور متاثرہ پودوں کے مواد کے ذریعے پھیلتی ہے۔',
                '/^Spread through rain splashes, infected plant parts, and wounds\.?$/i' => 'یہ بیماری بارش کے چھینٹوں، متاثرہ پودوں کے حصوں اور زخموں کے ذریعے پھیلتی ہے۔',
                '/^Spread by whiteflies carrying the virus\.?$/i' => 'وائرس کو منتقل کرنے والی سفید مکھیاں اس بیماری کو پھیلاتی ہیں۔',
                '/^Spread by whiteflies\.?$/i' => 'یہ بیماری سفید مکھیوں کے ذریعے پھیلتی ہے۔',
                '/^Spread by green leafhopper insects\.?$/i' => 'یہ بیماری سبز تیلوں کے ذریعے پھیلتی ہے۔',
                '/^Spread by citrus psylla insects\.?$/i' => 'یہ بیماری ترشاوہ پھلوں کے سائیلا حشرات کے ذریعے پھیلتی ہے۔',
                '/^The virus spreads through insect carriers such as leafhoppers\.?$/i' => 'یہ وائرس پتہ خور تیلوں جیسے حشرات کے ذریعے پھیلتا ہے۔',
                '/^Bacteria enter through wounds and spread in humid conditions\.?$/i' => 'بیکٹیریا زخموں کے ذریعے پودے میں داخل ہوتے ہیں اور مرطوب حالات میں پھیلتے ہیں۔',
                '/^Bacteria enter through wounds and spread in warm, wet conditions\.?$/i' => 'بیکٹیریا زخموں کے ذریعے پودے میں داخل ہوتے ہیں اور گرم و نم حالات میں پھیلتے ہیں۔',
                '/^Bacteria enter through roots and spread in wet soil conditions\.?$/i' => 'بیکٹیریا جڑوں کے ذریعے پودے میں داخل ہوتے ہیں اور نم مٹی میں پھیلتے ہیں۔',
                '/^Bacteria enter plant through roots and spread in warm, wet soil\.?$/i' => 'بیکٹیریا جڑوں کے ذریعے پودے میں داخل ہوتے ہیں اور گرم و نم مٹی میں پھیلتے ہیں۔',
                '/^Bacteria enter through leaf edges and spread in warm,? wet conditions\.?$/i' => 'بیکٹیریا پتوں کے کناروں سے داخل ہوتے ہیں اور گرم و نم حالات میں پھیلتے ہیں۔',
                '/^Fungus grows in dry but humid conditions and spreads on leaves\.?$/i' => 'خشک لیکن مرطوب حالات میں پھپھوندی نشوونما پاتی ہے اور پتوں پر پھیل جاتی ہے۔',
                '/^Fungus grows in dry but humid weather on leaves\.?$/i' => 'خشک لیکن مرطوب موسم میں پھپھوندی پتوں پر نشوونما پاتی ہے۔',
                '/^Fungus grows on leaves in dry but humid conditions\.?$/i' => 'خشک لیکن مرطوب حالات میں پھپھوندی پتوں پر نشوونما پاتی ہے۔',
                '/^Fungus grows on leaves in dry weather with humidity\.?$/i' => 'نمی والے خشک موسم میں پھپھوندی پتوں پر نشوونما پاتی ہے۔',
                '/^Fungus spreads in humid weather through wind and infected leaves\.?$/i' => 'مرطوب موسم میں پھپھوندی ہوا اور متاثرہ پتوں کے ذریعے پھیلتی ہے۔',
                '/^Fungus spreads through infected seeds and wet weather conditions\.?$/i' => 'متاثرہ بیجوں اور نم موسمی حالات کے ذریعے پھپھوندی پھیلتی ہے۔',
                '/^Fungus spreads through infected seeds and plant debris\.?$/i' => 'متاثرہ بیجوں اور پودوں کی باقیات کے ذریعے پھپھوندی پھیلتی ہے۔',
                '/^Fungus grows on leaf surface in warm and dry weather\.?$/i' => 'گرم اور خشک موسم میں پھپھوندی پتوں کی سطح پر نشوونما پاتی ہے۔',
                '/^Fungal infection develops under moist and humid conditions\.?$/i' => 'نم اور مرطوب حالات میں پھپھوندی کا حملہ پیدا ہوتا ہے۔',
                '/^The fungus develops in warm and humid conditions\.?$/i' => 'گرم اور مرطوب حالات میں پھپھوندی نشوونما پاتی ہے۔',
                '/^The fungus spreads during humid and rainy weather\.?$/i' => 'مرطوب اور بارش والے موسم میں پھپھوندی پھیلتی ہے۔',
                '/^Caused by soil-borne fungi in waterlogged and poorly drained fields\.?$/i' => 'یہ بیماری ایسی مٹی میں موجود پھپھوندیوں کی وجہ سے ہوتی ہے جہاں پانی جمع رہتا ہو اور نکاسی آب ناقص ہو۔',
                '/^Caused by the fungus Magnaporthe oryzae under humid and rainy conditions\.?$/i' => 'مرطوب اور بارش والے حالات میں مگناپورٹے اوریزے نامی پھپھوندی اس بیماری کا سبب بنتی ہے۔',
                '/^Small insects suck sap from leaves and stems, multiplying quickly in warm weather\.?$/i' => 'چھوٹے حشرات پتوں اور تنوں کا رس چوستے ہیں اور گرم موسم میں تیزی سے بڑھ جاتے ہیں۔',
                '/^Small insects suck sap from leaves and stems and multiply quickly\.?$/i' => 'چھوٹے حشرات پتوں اور تنوں کا رس چوستے ہیں اور تیزی سے تعداد بڑھاتے ہیں۔',
                '/^Small insects suck sap from leaves and spread quickly in warm weather\.?$/i' => 'چھوٹے حشرات پتوں کا رس چوستے ہیں اور گرم موسم میں تیزی سے پھیل جاتے ہیں۔',
                '/^Tiny white insects sit under leaves and suck plant sap\.?$/i' => 'نہایت چھوٹے سفید حشرات پتوں کی نچلی سطح پر رہتے ہیں اور پودے کا رس چوستے ہیں۔',
                '/^Tiny white insects live under leaves and suck plant sap\.?$/i' => 'نہایت چھوٹے سفید حشرات پتوں کی نچلی سطح پر رہتے ہیں اور پودے کا رس چوستے ہیں۔',
                '/^Tiny white insects live under leaves and spread viral diseases\.?$/i' => 'نہایت چھوٹے سفید حشرات پتوں کی نچلی سطح پر رہتے ہیں اور وائرسی بیماریاں پھیلاتے ہیں۔',
                '/^Small white insects live under leaves and suck sap from plants\.?$/i' => 'چھوٹے سفید حشرات پتوں کی نچلی سطح پر رہتے ہیں اور پودوں کا رس چوستے ہیں۔',
                '/^Small white insects suck sap from leaves and spread quickly in warm weather\.?$/i' => 'چھوٹے سفید حشرات پتوں کا رس چوستے ہیں اور گرم موسم میں تیزی سے پھیل جاتے ہیں۔',
                '/^Very tiny insects live under leaves and suck plant juice in hot dry weather\.?$/i' => 'بہت چھوٹے حشرات گرم اور خشک موسم میں پتوں کی نچلی سطح پر رہتے ہیں اور پودے کا رس چوستے ہیں۔',
                '/^Small insects gather on leaves and suck plant sap\.?$/i' => 'چھوٹے حشرات پتوں پر جمع ہو کر پودے کا رس چوستے ہیں۔',
                '/^Small soft insects gather on leaves and shoots and suck sap\.?$/i' => 'چھوٹے نرم جسم والے حشرات پتوں اور شاخوں پر جمع ہو کر پودے کا رس چوستے ہیں۔',
                '/^Small insects gather on young leaves and suck plant sap quickly\.?$/i' => 'چھوٹے حشرات نئی پتیوں پر جمع ہو کر پودے کا رس تیزی سے چوستے ہیں۔',
                '/^Small insects gather on young shoots and suck plant sap, especially in cool weather\.?$/i' => 'چھوٹے حشرات نئی شاخوں پر جمع ہو کر پودے کا رس چوستے ہیں، خاص طور پر ٹھنڈے موسم میں۔',
                '/^Small insects appear in clusters on leaves and stems and suck plant sap, especially in cool weather\.?$/i' => 'چھوٹے حشرات پتوں اور تنوں پر جھنڈ کی صورت میں ظاہر ہوتے ہیں اور پودے کا رس چوستے ہیں، خاص طور پر ٹھنڈے موسم میں۔',
                '/^Small insects gather on young shoots and flower clusters and suck plant sap, especially in cool weather\.?$/i' => 'چھوٹے حشرات نئی شاخوں اور پھولوں کے گچھوں پر جمع ہو کر پودے کا رس چوستے ہیں، خاص طور پر ٹھنڈے موسم میں۔',
                '/^Small insects suck sap from leaves, stems, and fruits and spread quickly in warm weather\.?$/i' => 'چھوٹے حشرات پتوں، تنوں اور پھلوں کا رس چوستے ہیں اور گرم موسم میں تیزی سے پھیل جاتے ہیں۔',
                '/^Small insects multiply quickly on young shoots and feed by sucking plant sap\.?$/i' => 'چھوٹے حشرات نئی شاخوں پر تیزی سے بڑھتے ہیں اور پودے کا رس چوس کر خوراک حاصل کرتے ہیں۔',
                '/^Small insects multiply quickly on soft leaves and suck plant sap\.?$/i' => 'چھوٹے حشرات نرم پتوں پر تیزی سے بڑھتے ہیں اور پودے کا رس چوستے ہیں۔',
                '/^Small insects multiply on leaves and suck plant sap quickly\.?$/i' => 'چھوٹے حشرات پتوں پر تیزی سے تعداد بڑھاتے ہیں اور پودے کا رس چوستے ہیں۔',
                '/^Small insects appear on leaves and suck plant sap, especially in warm weather\.?$/i' => 'چھوٹے حشرات پتوں پر ظاہر ہو کر پودے کا رس چوستے ہیں، خاص طور پر گرم موسم میں۔',
                '/^Insects attach to stems and leaves and suck plant sap continuously\.?$/i' => 'حشرات تنوں اور پتوں سے چمٹ کر مسلسل پودے کا رس چوستے ہیں۔',
                '/^Insects attach to branches and suck sap continuously\.?$/i' => 'حشرات شاخوں سے چمٹ کر مسلسل رس چوستے ہیں۔',
                '/^Insects form cotton-like colonies on leaves, stems, and fruits and suck sap\.?$/i' => 'حشرات پتوں، تنوں اور پھلوں پر روئی جیسے جھنڈ بناتے ہیں اور رس چوستے ہیں۔',
                '/^Mites develop in hot and dry conditions and feed on leaf cells\.?$/i' => 'گرم اور خشک حالات میں مکڑی نما کیڑے بڑھتے ہیں اور پتوں کے خلیوں کو نقصان پہنچاتے ہیں۔',
                '/^Mites feed on leaf cells in hot and dry conditions\.?$/i' => 'مکڑی نما کیڑے گرم اور خشک حالات میں پتوں کے خلیوں کو نقصان پہنچاتے ہیں۔',
                '/^Mites feed on leaf sap, especially during hot and dry weather\.?$/i' => 'مکڑی نما کیڑے پتوں کا رس چوستے ہیں، خاص طور پر گرم اور خشک موسم میں۔',
                '/^Tiny mites multiply in hot and dry weather and feed on leaf sap\.?$/i' => 'نہایت چھوٹے مکڑی نما کیڑے گرم اور خشک موسم میں تیزی سے بڑھتے ہیں اور پتوں کا رس چوستے ہیں۔',
                '/^Beetles cut stems and branches, especially in young plants\.?$/i' => 'بھونرے تنوں اور شاخوں کو کاٹتے ہیں، خاص طور پر کم عمر پودوں میں۔',
                '/^Adult beetles feed on leaves and make holes, especially in young plants\.?$/i' => 'بالغ بھونرے پتوں کو کھاتے ہیں اور ان میں سوراخ کرتے ہیں، خاص طور پر کم عمر پودوں میں۔',
                '/^Adult weevils bore into banana stem and rhizome and lay eggs inside\.?$/i' => 'بالغ سونڈ والے کیڑے کیلے کے تنے اور زیرِ زمین تنے میں سوراخ کرکے اندر انڈے دیتے ہیں۔',
                '/^Adult flies lay eggs on young plants\. After hatching, larvae bore into stems and damage inside tissues\.?$/i' => 'بالغ مکھیاں کم عمر پودوں پر انڈے دیتی ہیں۔ انڈوں سے نکلنے والی سنڈیاں تنوں میں سوراخ کرکے اندرونی بافتوں کو نقصان پہنچاتی ہیں۔',
                '/^Larvae bore into ginger shoots and feed inside stems, especially in young plants\.?$/i' => 'سنڈیاں ادرک کی نئی شاخوں میں سوراخ کرکے تنوں کے اندر خوراک حاصل کرتی ہیں، خاص طور پر کم عمر پودوں میں۔',
                '/^Larvae bore into fruits and feed inside, especially in young fruits\.?$/i' => 'سنڈیاں پھلوں میں سوراخ کرکے اندر سے خوراک حاصل کرتی ہیں، خاص طور پر کم عمر پھلوں میں۔',
                '/^Larvae bore into fruits and feed inside them\.?$/i' => 'سنڈیاں پھلوں میں سوراخ کرکے اندر سے خوراک حاصل کرتی ہیں۔',
                '/^Larvae bore into tender shoots and developing fruits and feed inside them\.?$/i' => 'سنڈیاں نرم شاخوں اور بننے والے پھلوں میں سوراخ کرکے ان کے اندر سے خوراک حاصل کرتی ہیں۔',
                '/^Larvae tunnel inside leaves and feed on leaf tissues\.?$/i' => 'سنڈیاں پتوں کے اندر سرنگیں بنا کر پتوں کے بافتوں کو کھاتی ہیں۔',
                '/^Larvae tunnel inside young leaves and feed on leaf tissue\.?$/i' => 'سنڈیاں نئی پتیوں کے اندر سرنگیں بنا کر پتوں کے بافتوں کو کھاتی ہیں۔',
                '/^Larvae live in soil and cut young plants at night\.?$/i' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت کم عمر پودوں کو زمین کی سطح کے قریب سے کاٹ دیتی ہیں۔',
                '/^Larvae live in soil and cut young plants at ground level during night\.?$/i' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت کم عمر پودوں کو زمین کی سطح سے کاٹ دیتی ہیں۔',
                '/^Larvae stay in soil and cut young seedlings at night\.?$/i' => 'سنڈیاں مٹی میں رہتی ہیں اور رات کے وقت ننھے پودوں کو کاٹ دیتی ہیں۔',
                '/^Larvae feed on leaves and spread quickly in groups\.?$/i' => 'سنڈیاں پتوں کو کھاتی ہیں اور جھنڈ کی صورت میں تیزی سے پھیلتی ہیں۔',
                '/^Larvae feed on leaves, usually appear in groups\.?$/i' => 'سنڈیاں پتوں کو کھاتی ہیں اور عموماً جھنڈ کی صورت میں نظر آتی ہیں۔',
            ];
            foreach ($maps as $pattern => $value) if (preg_match($pattern, $t)) return $value;
        }
        if ($field === 'symptoms') {
            $maps = [
                '/^Yellow patches on top of leaves and grey mold under leaves\.?$/i' => 'پتوں کی اوپری سطح پر زرد دھبے اور نچلی سطح پر سرمئی پھپھوندی نظر آتی ہے۔',
                '/^Small brown spots on leaves that slowly spread and dry the leaf\.?$/i' => 'پتوں پر چھوٹے بھورے دھبے بنتے ہیں جو آہستہ آہستہ پھیل کر پتوں کو خشک کر دیتے ہیں۔',
                '/^White powder-like spots appear under leaves and plants become weak\.?$/i' => 'پتوں کی نچلی سطح پر سفید پاؤڈر جیسے دھبے نمودار ہوتے ہیں اور پودے کمزور ہو جاتے ہیں۔',
                '/^Yellow patches on upper leaf side and white growth under leaves\.?$/i' => 'پتوں کی اوپری سطح پر زرد دھبے اور نچلی سطح پر سفید پھپھوندی جیسی تہہ نظر آتی ہے۔',
                '/^Leaves are eaten, plants look cut or damaged, field looks patchy\.?$/i' => 'پتے کھائے ہوئے نظر آتے ہیں، پودے کٹے یا متاثرہ دکھائی دیتے ہیں اور کھیت میں خالی جگہوں کے دھبے نظر آتے ہیں۔',
                '/^Leaves are eaten from edges, plants look cut or damaged, and field patches appear empty\.?$/i' => 'پتے کناروں سے کھائے ہوئے ہوتے ہیں، پودے کٹے یا متاثرہ دکھائی دیتے ہیں اور کھیت میں خالی جگہیں نظر آتی ہیں۔',
                '/^Yellow patches on leaves, white mold under leaves, weak plants\.?$/i' => 'پتوں پر زرد دھبے، نچلی سطح پر سفید پھپھوندی اور پودوں کی کمزور نشوونما نظر آتی ہے۔',
                '/^Yellow patches on leaves, white mold under leaves, weak plant growth\.?$/i' => 'پتوں پر زرد دھبے، نچلی سطح پر سفید پھپھوندی اور پودوں کی کمزور نشوونما نظر آتی ہے۔',
                '/^Purple or brown spots appear on leaves and spread, causing drying\.?$/i' => 'پتوں پر جامنی یا بھورے دھبے بنتے ہیں جو پھیلتے ہوئے پتوں کو خشک کر دیتے ہیں۔',
                '/^Small orange or brown spots on leaves that spread quickly\.?$/i' => 'پتوں پر چھوٹے نارنجی یا بھورے دھبے بنتے ہیں جو تیزی سے پھیلتے ہیں۔',
                '/^Seedlings get cut at ground level and plants suddenly fall\.?$/i' => 'ننھے پودے زمین کی سطح سے کٹ جاتے ہیں اور اچانک گر پڑتے ہیں۔',
                '/^Young plants suddenly fall or get cut near the base\.?$/i' => 'کم عمر پودے اچانک گر جاتے ہیں یا تنے کے نچلے حصے کے قریب سے کٹ جاتے ہیں۔',
                '/^Young plants are cut near soil level and suddenly fall\.?$/i' => 'کم عمر پودے مٹی کی سطح کے قریب سے کٹ کر اچانک گر جاتے ہیں۔',
                '/^Seedlings are cut down and plants die suddenly\.?$/i' => 'ننھے پودے کٹ جاتے ہیں اور پودے اچانک مر جاتے ہیں۔',
                '/^Young plants are cut at the base and suddenly fall\.?$/i' => 'کم عمر پودے تنے کے نچلے حصے سے کٹ کر اچانک گر جاتے ہیں۔',
            ];
            foreach ($maps as $pattern => $value) if (preg_match($pattern, $t)) return $value;
            $moreSymptoms = [
                '/^Seedlings rot at soil level and die quickly\.?$/i' => 'ننھے پودے مٹی کی سطح پر سڑنے لگتے ہیں اور تیزی سے مر جاتے ہیں۔',
                '/^Plants become weak, yellow, and roots become swollen and deformed\.?$/i' => 'پودے کمزور اور زرد ہو جاتے ہیں جبکہ جڑیں سوج کر بے ڈھنگی شکل اختیار کر لیتی ہیں۔',
                '/^Seedlings rot at soil level and collapse suddenly\.?$/i' => 'ننھے پودے مٹی کی سطح پر سڑنے لگتے ہیں اور اچانک گر پڑتے ہیں۔',
                '/^Folded leaves, white streaks, reduced photosynthesis\.?$/i' => 'پتے مڑے ہوئے نظر آتے ہیں، ان پر سفید دھاریاں بن جاتی ہیں اور ضیائی تالیف کا عمل کم ہو جاتا ہے۔',
                '/^Large brown spots appear on leaves and spread over time\.?$/i' => 'پتوں پر بڑے بھورے دھبے بنتے ہیں جو وقت کے ساتھ پھیل جاتے ہیں۔',
                '/^Young plants get cut at the base and suddenly fall\.?$/i' => 'کم عمر پودے تنے کے نچلے حصے سے کٹ کر اچانک گر جاتے ہیں۔',
                '/^Seedlings get cut at base and plants fall down suddenly\.?$/i' => 'ننھے پودے نچلی سطح سے کٹ جاتے ہیں اور اچانک گر پڑتے ہیں۔',
                '/^Seedlings are cut at base and plants suddenly fall\.?$/i' => 'ننھے پودے نچلی سطح سے کٹ جاتے ہیں اور اچانک گر پڑتے ہیں۔',
                '/^Seedlings suddenly cut near soil and fall down\.?$/i' => 'ننھے پودے مٹی کی سطح کے قریب سے اچانک کٹ کر گر جاتے ہیں۔',
                '/^Yellow patches on leaves and white fungal growth under leaves\.?$/i' => 'پتوں پر زرد دھبے اور ان کی نچلی سطح پر سفید پھپھوندی جیسی نشوونما نظر آتی ہے۔',
                '/^Yellow patches on leaves and white or gray growth under leaves\.?$/i' => 'پتوں پر زرد دھبے اور ان کی نچلی سطح پر سفید یا سرمئی پھپھوندی جیسی نشوونما نظر آتی ہے۔',
                '/^Young plants suddenly cut and fall, gaps in field\.?$/i' => 'کم عمر پودے اچانک کٹ کر گر جاتے ہیں اور کھیت میں خالی جگہیں بن جاتی ہیں۔',
            ];
            foreach ($moreSymptoms as $pattern => $value) if (preg_match($pattern, $t)) return $value;
        }
        if ($field === 'protection') {
            if ($t === 'Encourage natural predators and keep weeds under control.') return 'قدرتی دشمن حشرات کی افزائش کی حوصلہ افزائی کریں اور جڑی بوٹیوں کو قابو میں رکھیں۔';
            if ($t === 'Encourage natural predators and remove heavily infested plants.') return 'قدرتی دشمن حشرات کی افزائش کی حوصلہ افزائی کریں اور شدید متاثرہ پودے نکال دیں۔';
            if ($t === 'Remove affected pods and monitor the crop regularly.') return 'متاثرہ پھلیاں نکال دیں اور فصل کی باقاعدگی سے نگرانی کریں۔';
            if ($t === 'Keep the field clean and use sticky traps.') return 'کھیت کو صاف رکھیں اور چپکنے والی پھندیاں استعمال کریں۔';
            if ($t === 'Monitor crops regularly and maintain field hygiene.') return 'فصل کی باقاعدگی سے نگرانی کریں اور کھیت کی صفائی کا مناسب انتظام رکھیں۔';
            if ($t === 'Maintain proper spacing and remove infected plant parts.') return 'پودوں کے درمیان مناسب فاصلہ رکھیں اور متاثرہ حصے نکال دیں۔';
            if ($t === 'Remove infected leaves and practice crop rotation.') return 'متاثرہ پتے نکال دیں اور فصلوں کی گردش اختیار کریں۔';
            if ($t === 'Ensure proper drainage and avoid waterlogging.') return 'نکاسی آب کا مناسب انتظام کریں اور کھیت میں پانی کھڑا نہ ہونے دیں۔';
            if ($t === 'Use certified seed and avoid working in wet fields.') return 'مصدقہ بیج استعمال کریں اور گیلی زمین میں کام کرنے سے گریز کریں۔';
            if ($t === 'Deep ploughing and proper field sanitation help reduce infestation.') return 'گہرا ہل چلانے اور کھیت کی مناسب صفائی سے حملہ کم کرنے میں مدد ملتی ہے۔';
            if ($t === 'Remove infected parts and control ants that spread mealybugs.') return 'متاثرہ حصے نکال دیں اور سفوفی کیڑا پھیلانے والی چیونٹیوں کو قابو کریں۔';
        }
        $fallback = $pt($t);
        $fallback = preg_replace('/\b(the|a|an|of|from|to|in|on|under|during|after|before|through|by|for|into|inside|and|or|with|as|when|if|at|especially|also|only|more|less|very|may|can|be|is|are|become|becomes|becoming|appears|appear|show|shows|make|makes|made|feed|feeds|suck|sucks|attack|attacks|enter|enters|spread|spreads|grow|grows|growth|plant|plants|crop|crops|field|soil|leaves|leaf|stems|stem|roots|root|fruits|fruit|pods|seeds|flowers|flower|weeds|water|weather|conditions|warm|cool|dry|wet|humid|yellow|brown|black|white|grey|gray|small|large|tiny|young|damaged|infected|affected|weak|poor|reduced|early|quickly|slowly)\b/iu', '', $fallback) ?? $fallback;
        $fallback = preg_replace('/\s{2,}/u', ' ', trim($fallback)) ?? trim($fallback);
        if ($fallback !== '' && !preg_match('/[A-Za-z]{3,}/', $fallback)) {
            if ($field === 'symptoms') return 'اس حملے کی علامات میں '.$fallback.' شامل ہیں۔';
            if ($field === 'protection') return 'بچاؤ کے لیے '.$fallback.'۔';
            if ($field === 'how_it_occurs') return 'یہ مسئلہ '.$fallback.' کی وجہ سے پیدا ہوتا ہے۔';
            if ($field === 'recommended_control') return 'اس کے تدارک کے لیے '.$fallback.'۔';
        }
        return null;
    }

}
