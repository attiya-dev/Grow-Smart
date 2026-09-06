<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\CropDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropDetail3Seeder extends Seeder
{
    
    public function run(): void
    {
    $cropDetails = [
            [
  'crop_name' => 'Rapeseed',

'introduction' => 'Rapeseed is an important oilseed crop grown in Pakistan and many other countries. It is widely cultivated for its seeds, which are used to produce edible oil and animal feed. Rapeseed farming plays a significant role in the agriculture economy by reducing dependence on imported edible oils and providing income to farmers. It is mainly grown as a Rabi (winter) crop in cool climatic conditions.',

'basic_information' => '
Crop Name: Rapeseed
Scientific Name: Brassica napus
Crop Type: Rabi (Winter Oilseed Crop)
Main Use: Edible oil, Animal feed, Cooking oil production
Sowing Season: October to November
Harvesting Season: February to March
Ideal Temperature: 10°C – 25°C
Water Requirement: Low to Moderate
Best Soil Type: Loamy and well-drained soil
Major Areas: Punjab, Sindh, KPK
            ',

'sowing_season' => '
Rapeseed is usually sown from October to November in Pakistan. Farmers prefer cool weather conditions after the monsoon season for better germination and early plant growth.

Why Rapeseed is Sown in Winter:

Rapeseed requires cool temperatures for proper germination and vegetative growth. Winter conditions support healthy flowering and reduce pest and disease pressure.
            ',

'harvesting_season' => '
Rapeseed is harvested from February to March when pods turn yellow and seeds become fully mature and hard.

Why Rapeseed is Harvested at This Time:

At maturity, dry spring weather helps pods open naturally and reduces seed moisture, improving oil quality and storage life.
            ',

'climate_requirements' => '
Germination Temperature: 10°C – 20°C
Vegetative Growth: 15°C – 25°C
Flowering & Seed Formation: 15°C – 22°C

Rapeseed grows best in cool and dry climates. High temperatures during flowering can reduce yield and oil content.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained soil is essential because waterlogging can damage roots and reduce seed production.
            ',

'land_preparation' => '
Ploughing: Deep ploughing for soil loosening
Harrowing: Fine seedbed preparation
Leveling: Ensures proper irrigation
Weed Control: Reduces crop competition

Good land preparation improves germination and plant establishment.
            ',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free certified seed
Clean and uniform seeds
High oil-yield varieties

Good seed ensures healthy crop growth and higher oil production.
            ',

'seed_rate' => '
Seed Rate: 1–2 kg per acre (depending on variety and sowing method)

Proper seed rate ensures balanced plant population and better yield.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Vegetative Stage: Moderate irrigation
Flowering Stage: Critical stage for water supply
Pod Formation Stage: Controlled irrigation

Rapeseed requires less water compared to rice but timely irrigation is important for good yield.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and vegetative growth
Phosphorus (P): Root development and flowering
Potassium (K): Improves oil content and seed quality

Balanced fertilizer use increases yield and improves oil percentage.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout roots and shoots.

2. Seedling Stage  
Young plants develop leaves and root systems.

3. Vegetative Stage  
Plant grows stems and leaves rapidly.

4. Flowering Stage  
Yellow flowers appear and pollination begins.

5. Pod Formation Stage  
Pods develop after successful pollination.

6. Seed Filling Stage  
Seeds develop inside pods and accumulate oil.

7. Maturity Stage  
Pods turn yellow and seeds become hard.

8. Harvesting Stage  
Plants are cut and dried for seed collection.

Each stage is important for high-quality rapeseed production.

",

'types_of_crop' => '
Brown Rapeseed: High oil content variety
Yellow Rapeseed: Common edible oil variety
Hybrid Rapeseed: High yielding improved variety
            ',

'crop_varieties' => '
Canola-Model: High oil quality variety
Pakola-Rape: Locally adapted variety
Dunkeld: High yielding hybrid variety
Oscar: Disease resistant variety
            ',

'nutritional_value' => '
Healthy Fats: Source of edible oil
Omega-3 Fatty Acids: Heart health benefits
Protein: Supports animal feed nutrition
Fiber: Improves digestion
Minerals: Calcium, magnesium, phosphorus
            ',

'importance_of_crop' => '
Rapeseed is a major oilseed crop that helps reduce edible oil imports in Pakistan. It provides income to farmers and supports the food industry. It is also widely used in animal feed and industrial oil production.
            ',

'modern_technologies' => '
Improved hybrid varieties
Precision seed drilling machines
Drip irrigation systems
Integrated pest management
Soil health monitoring tools

Modern technologies help improve yield, oil content, and crop resilience.
            ',
            ],
            [
        'crop_name' => 'Canola',

'introduction' => 'Canola is an important oilseed crop grown in Pakistan and many other countries. It is mainly cultivated for its seeds, which are used to produce edible cooking oil. Canola farming plays a key role in reducing dependence on imported edible oils and supports the agricultural economy. It is a cool-season crop that grows best in winter conditions.',

'basic_information' => '
Crop Name: Canola
Scientific Name: Brassica napus
Crop Type: Rabi (Winter Oilseed Crop)
Main Use: Edible oil, Animal feed, Cooking oil
Sowing Season: October to November
Harvesting Season: February to March
Ideal Temperature: 10°C – 25°C
Water Requirement: Low to Moderate
Best Soil Type: Well-drained loamy soil
Major Areas: Punjab, Sindh, KPK
            ',

'sowing_season' => '
Canola is usually sown from October to November in Pakistan. Farmers prefer cool weather after the monsoon season for better germination and early growth.

Why Canola is Sown in Winter:

Canola requires cool temperatures for proper vegetative growth and flowering. Winter conditions reduce pest attacks and support healthy seed development.
            ',

'harvesting_season' => '
Canola is harvested from February to March when pods turn yellow and seeds become hard and fully mature.

Why Canola is Harvested at This Time:

At maturity, dry spring weather helps pods dry properly, reducing moisture and improving oil quality and storage life.
            ',

'climate_requirements' => '
Germination Temperature: 10°C – 20°C
Vegetative Growth: 15°C – 25°C
Flowering Stage: 15°C – 22°C

Canola grows best in cool and dry climates. High temperatures during flowering can reduce seed formation and oil content.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained soil is essential because waterlogging can damage roots and reduce yield.
            ',

'land_preparation' => '
Ploughing: Deep ploughing for soil loosening
Harrowing: Fine seedbed preparation
Leveling: Ensures uniform irrigation
Weed Control: Removes competing weeds

Proper land preparation improves germination and crop establishment.
            ',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free certified seed
Clean and uniform seeds
High oil-yielding varieties

Good seed ensures healthy crop growth and better oil production.
            ',

'seed_rate' => '
Seed Rate: 1–2 kg per acre (depending on variety and sowing method)

Proper seed rate ensures balanced plant population and higher yield.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Vegetative Stage: Moderate irrigation
Flowering Stage: Critical watering stage
Seed Filling Stage: Controlled irrigation

Canola requires less water compared to rice but timely irrigation is important for good yield.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Vegetative growth
Phosphorus (P): Root development and flowering
Potassium (K): Improves oil content and seed quality

Balanced fertilizer use increases yield and oil percentage.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout roots and shoots.

2. Seedling Stage  
Young plants develop leaves and establish roots.

3. Vegetative Stage  
Plant grows leaves and stems rapidly.

4. Flowering Stage  
Yellow flowers appear and pollination begins.

5. Pod Formation Stage  
Pods develop after fertilization.

6. Seed Filling Stage  
Seeds mature inside pods and accumulate oil.

7. Maturity Stage  
Plants dry and pods turn yellow.

8. Harvesting Stage  
Plants are cut and dried for seed extraction.

Each stage is important for high-quality canola production.

",

'types_of_crop' => '
Open Pollinated Canola: Traditional variety
Hybrid Canola: High yielding variety
Improved Canola: Disease resistant variety
            ',

'crop_varieties' => '
Hyola-401: High yielding hybrid
Oscar: Disease resistant variety
Dunkeld: Widely grown variety
Canola-Pak: Locally adapted variety
            ',

'nutritional_value' => '
Healthy Fats: Source of edible oil
Omega-3 Fatty Acids: Heart health benefits
Protein: Supports animal feed nutrition
Fiber: Improves digestion
Minerals: Calcium, magnesium, phosphorus
            ',

'importance_of_crop' => '
Canola is an important oilseed crop that helps reduce edible oil imports in Pakistan. It provides income to farmers and supports the food and feed industries. It is also widely used for producing high-quality cooking oil.
            ',

'modern_technologies' => '
Improved hybrid seed varieties
Precision seed drills
Drip irrigation systems
Integrated pest management
Soil and moisture monitoring systems

Modern technologies help increase yield, improve oil content, and reduce crop losses.
            ',
            ],
            [
       'crop_name' => 'Tobacco',

'introduction' => 'Tobacco is an important cash crop grown in many countries, including Pakistan. It is mainly cultivated for its leaves, which are processed and used in cigarettes, cigars, and other smoking products. Tobacco farming plays a significant role in providing income to farmers and supporting industrial production. However, it is a high-value but health-sensitive crop that requires careful management.',

'basic_information' => '
Crop Name: Tobacco
Scientific Name: Nicotiana tabacum
Crop Type: Kharif (Summer Cash Crop)
Main Use: Cigarettes, Cigars, Chewing tobacco, Industrial products
Sowing Season: March to May
Harvesting Season: September to November
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate
Best Soil Type: Sandy loam and fertile well-drained soil
Major Areas: Punjab, KPK, Sindh
            ',

'sowing_season' => '
Tobacco is usually sown from March to May in Pakistan. Farmers prepare nurseries first and then transplant seedlings into fields after proper growth.

Why Tobacco is Sown in Summer:

Warm temperatures support fast germination and healthy leaf development. Controlled water and sunlight exposure help produce high-quality leaves.
            ',

'harvesting_season' => '
Tobacco is harvested from September to November when leaves turn mature, thick, and slightly yellow-green in color.

Why Tobacco is Harvested at This Time:

At maturity, leaves contain optimal chemical content required for processing. Dry weather helps in proper curing and quality improvement.
            ',

'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 30°C
Leaf Maturity Stage: 20°C – 28°C

Tobacco grows best in warm climates with moderate humidity. Excess rain or frost can damage leaf quality.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 6.5

Well-drained soil is essential for good leaf quality and proper root development.
            ',

'land_preparation' => '
Ploughing: Deep ploughing for soil loosening
Harrowing: Fine tilth preparation
Leveling: Ensures uniform irrigation
Weed Control: Removes competing plants

Proper land preparation ensures healthy transplanting and growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free certified seed
Pure and uniform seeds
High-quality leaf varieties

Good seed ensures strong seedlings and better yield quality.
            ',

'seed_rate' => '
Nursery Seed Rate: 300–400 grams per acre
Transplanting depends on spacing and variety

Proper seed rate ensures healthy nursery growth and strong plants.
            ',

'irrigation_requirements' => '
Nursery Stage: Light and frequent irrigation
Vegetative Stage: Regular irrigation
Leaf Development Stage: Controlled water supply
Maturity Stage: Reduced irrigation before harvesting

Tobacco requires careful irrigation management to maintain leaf quality.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth and yield
Phosphorus (P): Root development
Potassium (K): Improves leaf quality and curing

Balanced fertilizer use improves leaf size, texture, and market value.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds sprout and form young seedlings in the nursery.

2. Seedling Stage  
Seedlings grow strong with healthy leaves and roots.

3. Transplanting Stage  
Seedlings are moved to the main field for further growth.

4. Vegetative Stage  
Plant grows leaves rapidly and requires proper nutrients.

5. Leaf Expansion Stage  
Leaves become large and develop quality characteristics.

6. Maturity Stage  
Leaves turn yellow-green and reach harvest readiness.

7. Harvesting Stage  
Leaves are picked carefully for curing and processing.

Each stage is important for producing high-quality tobacco leaves.

",

'types_of_crop' => '
Flue-Cured Tobacco: Used for cigarettes
Burley Tobacco: Air-cured variety
Oriental Tobacco: Aromatic leaf variety
Chewing Tobacco: Used for traditional chewing products
            ',

'crop_varieties' => '
KHG-1: High yielding variety
YTB-5: Disease resistant variety
Nicotiana Hybrid-21: Improved quality variety
Local Leaf Varieties: Regionally adapted types
            ',

'nutritional_value' => '
Nicotine: Active compound (not a food nutrient)
Alkaloids: Chemical compounds
Organic compounds: Used in industrial processing
(Note: Tobacco is not a food crop and has no nutritional value for consumption)
            ',

'importance_of_crop' => '
Tobacco is an important cash crop that supports industrial production and provides income to farmers. It contributes to the cigarette and tobacco processing industries, though it has significant health concerns and is regulated in many countries.
            ',

'modern_technologies' => '
Precision irrigation systems
Improved curing barns
Disease-resistant hybrid varieties
AI-based crop monitoring
Mechanized leaf harvesting systems

Modern technologies help improve leaf quality and production efficiency.
            ',
            ],
            [
         'crop_name' => 'Lucerne',

'introduction' => 'Lucerne (also known as Alfalfa) is an important forage (fodder) crop grown for feeding livestock such as cattle, buffalo, sheep, and goats. It is highly nutritious and rich in protein, making it one of the best green fodder sources for dairy farming. Lucerne is widely cultivated in Pakistan because it improves milk production and provides multiple cuttings throughout the year. It is a long-duration perennial crop that grows well in different climates with proper irrigation.',

'basic_information' => '
Crop Name: Lucerne
Scientific Name: Medicago sativa
Crop Type: Rabi (Perennial Fodder Crop)
Main Use: Green fodder, hay, silage, livestock feed
Sowing Season: October to November
Harvesting/First Cutting: 60–70 days after sowing (then repeated cuttings every 25–30 days)
Ideal Temperature: 15°C – 30°C
Water Requirement: Moderate to high
Best Soil Type: Loamy and well-drained fertile soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

'sowing_season' => '
Lucerne is usually sown from October to November in Pakistan when temperatures are moderate and soil moisture conditions are suitable. Early sowing helps better root establishment and strong plant growth before winter becomes severe.

Why Lucerne is Sown in Winter:

Cool weather supports germination and reduces weed competition. Mild temperatures help develop a deep root system, which allows the crop to survive for several years and produce repeated cuttings.
',

'harvesting_season' => '
Lucerne is not harvested only once; instead, it is cut multiple times after the first harvest. The first cutting is usually ready after 60–70 days, and subsequent cuttings occur every 25–30 days depending on growth conditions.

Why Lucerne is Harvested Frequently:

Frequent cutting encourages new shoot growth, increases total fodder yield, and maintains high nutritional value for livestock feed.
',

'climate_requirements' => '
Germination Temperature: 15°C – 25°C
Vegetative Growth: 18°C – 30°C
Optimal Growth: Cool to moderate climate

Lucerne grows best in mild climates. Extremely hot weather reduces leaf quality, while very cold conditions slow down growth.
',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.5 – 7.5

Lucerne does not grow well in waterlogged or highly acidic soils because it affects root development and nitrogen fixation.
',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Leveling: Ensures proper irrigation distribution
Weed Removal: Reduces competition in early stages
Organic Matter Addition: Improves soil fertility

Proper land preparation ensures strong root establishment and long-term crop productivity.
',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Clean and pure variety
Certified seed

Good quality seed ensures dense crop growth and high fodder yield.
',

'seed_rate' => '
Broadcasting Method: 8–12 kg per acre
Line Sowing: 6–8 kg per acre

Proper seed rate ensures uniform plant population and better fodder production.
',

'irrigation_requirements' => '
Initial Stage: Frequent light irrigation for germination
Vegetative Stage: Regular irrigation after every cutting
Summer Season: More frequent watering due to heat

Lucerne requires proper moisture but does not tolerate waterlogging.
',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth and green fodder production
Phosphorus (P): Root development and early growth
Potassium (K): Disease resistance and plant strength

Lucerne also improves soil fertility naturally through nitrogen fixation.
',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout within 7–10 days. Proper soil moisture is essential.

2. Seedling Stage  
Small plants develop leaves and roots. Weed control is very important.

3. Vegetative Stage  
Rapid growth begins and plants develop thick green foliage.

4. Branching Stage  
Side shoots develop, increasing fodder yield potential.

5. First Cutting Stage  
First harvest occurs after 60–70 days when plants reach optimal height.

6. Regrowth Stage  
New shoots develop after cutting, enabling repeated harvests.

7. Repeated Cutting Stages  
Multiple cuttings occur every 25–30 days depending on growth.

",

'types_of_crop' => '
Common Lucerne: Widely grown fodder type
Hybrid Lucerne: Higher yield and fast growth variety
Dormant Varieties: Suitable for extreme cold regions
Non-dormant Varieties: Continuous growth in mild climates
',

'crop_varieties' => '
Rongai Lucerne: High yield and drought tolerant
Siriver Lucerne: Fast regrowth variety
Desi Lucerne: Common local variety in Pakistan
Moapa Lucerne: Heat tolerant improved variety
',

'nutritional_value' => '
Protein: Very high protein content for animal growth
Fiber: Improves digestion in livestock
Calcium: Strong bones and milk production
Vitamins: Essential for animal health
Minerals: Improves overall livestock productivity
',

'importance_of_crop' => '
Lucerne is a highly important fodder crop for dairy farming. It improves milk production, reduces feed costs, and provides continuous green fodder supply throughout the year. It also improves soil fertility through nitrogen fixation, making it beneficial for crop rotation systems.
',

'modern_technologies' => '
Drip irrigation systems
Improved certified seed varieties
Mechanical fodder harvesters
Precision fertilizer application
Rotational grazing and fodder management systems

Modern technologies help increase lucerne yield and improve fodder quality while reducing water and labor costs.
',
            ],
            [
            'crop_name' => 'Fenugreek(Methi)',

'introduction' => 'Fenugreek (locally known as Methi) is an important leafy vegetable and spice crop widely grown in Pakistan and many other countries. It is used both as fresh green leaves and dried seeds. Fenugreek is highly nutritious and is commonly used in daily cooking for its strong aroma and health benefits. It plays an important role in kitchen gardening as well as commercial vegetable farming due to its fast growth and multiple cuttings.',

'basic_information' => '
Crop Name: Fenugreek (Methi)
Scientific Name: Trigonella foenum-graecum
Crop Type: Rabi (Winter Leafy Vegetable & Spice Crop)
Main Use: Vegetable (fresh leaves), spice (seeds), herbal medicine
Sowing Season: October to December
Harvesting Season: 25–30 days after sowing (leaf cutting), seeds after full maturity
Ideal Temperature: 10°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy, sandy loam, well-drained fertile soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

'sowing_season' => '
Fenugreek is usually sown from October to December in Pakistan when the weather becomes cool and favorable for leafy growth. Seeds germinate quickly in mild temperatures and plants develop tender green leaves.

Why Fenugreek is Sown in Winter:

Cool weather supports fast leaf development and reduces pest attacks. Winter conditions improve leaf quality, taste, and yield, making it ideal for vegetable production.
',

'harvesting_season' => '
Fenugreek leaves can be harvested within 25–30 days after sowing, and multiple cuttings are possible depending on growth. For seed production, harvesting is done when plants turn yellow and seed pods become mature.

Why Fenugreek is Harvested Early:

Early harvesting ensures tender leaves with better taste and nutrition. Frequent cutting also encourages new leaf growth and increases total yield.
',

'climate_requirements' => '
Germination Temperature: 10°C – 20°C
Vegetative Growth: 15°C – 25°C
Optimal Growth: Cool and dry climate

Fenugreek grows best in mild winter conditions. Extremely hot weather reduces leaf quality and increases flowering too early.
',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Fenugreek grows well in fertile soil with good drainage. Waterlogged soil can damage roots and reduce growth.
',

'land_preparation' => '
Ploughing: Light to medium ploughing to loosen soil
Leveling: Ensures proper water distribution
Weed Removal: Reduces competition in early growth stage
Organic Manure: Improves leaf quality and yield

Proper land preparation helps quick germination and healthy leafy growth.
',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Clean and disease-free
Bold and uniform seeds
Certified variety

Good seed ensures dense plant growth and better leaf production.
',

'seed_rate' => '
Broadcasting Method: 8–12 kg per acre
Line Sowing: 6–8 kg per acre

Proper seed rate ensures healthy plant density and better leaf yield.
',

'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing for germination
Vegetative Stage: Regular irrigation every 7–10 days
Harvest Stage: Avoid excess water before cutting

Fenugreek needs moderate water but cannot tolerate waterlogging.
',

'fertilizer_requirements' => '
Nitrogen (N): Promotes leafy growth
Phosphorus (P): Supports root development
Potassium (K): Improves plant strength and disease resistance

Organic manure is highly beneficial for improving leaf taste and yield.
',

'growing_stages' => "

1. Germination Stage  
Seeds absorb water and sprout within 3–5 days. Proper moisture is essential.

2. Seedling Stage  
Small green plants emerge with initial leaves and root development.

3. Vegetative Stage  
Rapid leaf growth starts and plants become bushy.

4. Leaf Development Stage  
Leaves become broader and suitable for first cutting.

5. First Cutting Stage  
First harvest occurs around 25–30 days after sowing.

6. Regrowth Stage  
New leaves grow after cutting, allowing multiple harvests.

7. Flowering Stage  
Plants produce flowers if left uncut for seed production.

8. Seed Formation Stage  
Pods develop and seeds mature for harvesting.

",

'types_of_crop' => '
Leafy Fenugreek: Grown for fresh green leaves
Seed Fenugreek: Grown for spice seeds
Dual Purpose Varieties: Used for both leaves and seeds
',

'crop_varieties' => '
Local Fenugreek: Common variety in Pakistan
Pusa Early Bunching: Fast-growing leafy type
Kasuri Methi: Highly aromatic variety used for dried leaves
Improved Green Variety: High yield and tender leaves
',

'nutritional_value' => '
Protein: Supports body growth
Fiber: Improves digestion
Iron: Helps blood formation
Calcium: Strengthens bones
Vitamins (A, C, K): Improves immunity and health
',

'importance_of_crop' => '
Fenugreek is an important leafy vegetable used in daily cooking and traditional medicine. It improves digestion, provides essential nutrients, and supports healthy diets. It is also economically important for small farmers due to its quick growth and multiple harvests.
',

'modern_technologies' => '
Drip irrigation systems
Improved certified seed varieties
Organic farming techniques
Hydroponic leafy vegetable production
Protected greenhouse cultivation

Modern technologies help improve yield, quality, and year-round production of fenugreek.
',
            ],
            [
         'crop_name' => 'Potato',

'introduction' => 'Potato is one of the most important vegetable crops in Pakistan and many other countries. It is widely consumed as a staple food and used in many forms such as boiled, fried, chips, and curries. Potato farming plays a significant role in agriculture because it provides high yield in a short time and good income for farmers. It is mainly grown in cool climates and is an important winter vegetable crop.',

'basic_information' => '
Crop Name: Potato
Scientific Name: Solanum tuberosum
Crop Type: Rabi (Winter Vegetable Crop)
Main Use: Vegetable, chips, fries, starch production
Sowing Season: October to December
Harvesting Season: January to March
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Sandy loam and loamy soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

'sowing_season' => '
Potato is usually sown from October to December in Pakistan. Farmers plant seed tubers in well-prepared soil when temperatures are cool and favorable for tuber development. Proper soil moisture is essential for sprouting and early growth.

Why Potato is Sown in Winter:

Cool weather supports healthy tuber formation and reduces pest and disease pressure. It also helps in better yield and quality of potatoes.
',

'harvesting_season' => '
Potatoes are harvested from January to March depending on variety and planting time. The crop is ready when plants start yellowing and leaves dry naturally.

Why Potato is Harvested at This Time:

At maturity, tubers reach full size and skin becomes firm, which improves storage and transport quality.
',

'climate_requirements' => '
Germination Temperature: 15°C – 20°C
Vegetative Growth: 18°C – 25°C
Tuber Formation: 15°C – 22°C

Potato grows best in cool climates. High temperatures reduce tuber formation and affect yield quality.
',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 6.5

Loose soil is important for proper tuber development and easy expansion of potatoes underground.
',

'land_preparation' => '
Deep ploughing: Loosens soil for tuber growth
Leveling: Ensures proper irrigation
Ridging: Helps in tuber formation
Weed removal: Reduces competition

Good land preparation improves yield and tuber quality.
',

'seed_selection' => '
Characteristics of Good Seed:
Disease-free seed tubers
Medium-sized healthy tubers
Certified variety
High sprouting ability

Good seed ensures uniform crop growth and higher production.
',

'seed_rate' => '
Seed Rate: 700–1000 kg seed tubers per acre

Proper seed rate ensures optimal plant population and high yield.
',

'irrigation_requirements' => '
Initial Stage: Light irrigation after planting
Tuber Formation Stage: Regular irrigation is important
Bulking Stage: Adequate water for tuber growth
Pre-harvest Stage: Irrigation is reduced

Potato requires balanced moisture but does not tolerate waterlogging.
',

'fertilizer_requirements' => '
Nitrogen (N): Vegetative growth
Phosphorus (P): Root and tuber development
Potassium (K): Tuber quality and disease resistance

Balanced fertilization increases yield and improves tuber size.
',

'growing_stages' => "

1. Sprouting Stage  
Seed tubers start sprouting and small shoots appear above soil.

2. Vegetative Stage  
Plants develop stems, leaves, and strong root systems.

3. Tuber Initiation Stage  
Underground tubers begin to form.

4. Tuber Bulking Stage  
Tubers increase in size and accumulate starch.

5. Maturity Stage  
Plants turn yellow and dry, indicating harvest time.

",

'types_of_crop' => '
Early Variety: Quick maturing potatoes
Mid Season Variety: Balanced growth and yield
Late Variety: High yield and storage quality
',

'crop_varieties' => '
Desiree: High yield red-skinned variety
Kufri Chandramukhi: Early maturing variety
Lady Rosetta: Chips-making variety
Kufri Bahar: Widely grown high yield variety
',

'nutritional_value' => '
Carbohydrates: Main energy source
Protein: Supports body growth
Fiber: Improves digestion
Vitamin C: Boosts immunity
Potassium: Maintains body functions
',

'importance_of_crop' => '
Potato is an important food crop used globally. It provides food security, employment, and high economic value. It is also used in food industries like chips, starch, and processed foods.
',

'modern_technologies' => '
Drip irrigation systems
Improved certified seed varieties
Mechanical planters and harvesters
Cold storage systems
Precision farming techniques

Modern technologies help increase potato yield and reduce post-harvest losses.
',
            ],
            [
          'crop_name' => 'Spinach',

'introduction' => 'Spinach is a fast-growing leafy green vegetable widely cultivated in Pakistan and many other countries. It is highly nutritious and commonly used in daily cooking such as curries, salads, and soups. Spinach farming is important for small and commercial farmers because it grows quickly, requires low investment, and provides multiple harvests. It is especially popular in winter due to its soft leaves and rich nutritional value.',

'basic_information' => '
Crop Name: Spinach
Scientific Name: Spinacia oleracea
Crop Type: Rabi (Winter Leafy Vegetable)
Main Use: Vegetable, salads, soups, cooking leaves
Sowing Season: October to December
Harvesting Season: 25–40 days after sowing (multiple cuttings possible)
Ideal Temperature: 10°C – 20°C
Water Requirement: Moderate
Best Soil Type: Loamy, sandy loam, fertile well-drained soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

'sowing_season' => '
Spinach is usually sown from October to December in Pakistan when the weather becomes cool and favorable for leafy vegetable growth. Seeds germinate quickly in mild temperatures and plants develop soft, green leaves.

Why Spinach is Sown in Winter:

Cool weather promotes fast leaf development and improves taste, texture, and nutritional quality. It also reduces pest and disease attacks compared to hot weather.
',

'harvesting_season' => '
Spinach is harvested within 25–40 days after sowing. Farmers can take multiple cuttings depending on plant growth. Leaves are harvested when they are tender and fully developed.

Why Spinach is Harvested Early:

Early harvesting ensures soft, nutritious leaves and encourages regrowth for additional harvests, increasing overall yield.
',

'climate_requirements' => '
Germination Temperature: 10°C – 18°C
Vegetative Growth: 15°C – 20°C
Optimal Growth: Cool and mild climate

Spinach grows best in cool weather. High temperatures cause early flowering and reduce leaf quality.
',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Fertile well-drained soil

Ideal pH: 6.0 – 7.5

Good soil fertility and moisture retention are important for healthy leafy growth.
',

'land_preparation' => '
Ploughing: Light to medium ploughing for fine soil texture
Leveling: Ensures uniform irrigation
Weed Removal: Reduces competition
Organic Manure: Improves leaf quality and growth

Proper land preparation supports fast germination and healthy leafy development.
',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free seeds
Clean and uniform quality
Certified variety

Good seed ensures dense plant growth and better leaf production.
',

'seed_rate' => '
Broadcasting Method: 8–10 kg per acre
Line Sowing: 6–8 kg per acre

Proper seed rate ensures good plant density and higher leaf yield.
',

'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing
Growth Stage: Regular irrigation every 7–10 days
Harvest Stage: Maintain moisture for regrowth

Spinach needs consistent moisture but should not be waterlogged.
',

'fertilizer_requirements' => '
Nitrogen (N): Promotes leafy green growth
Phosphorus (P): Supports root development
Potassium (K): Improves plant strength and disease resistance

Organic manure improves leaf taste and nutritional quality.
',

'growing_stages' => "

1. Germination Stage  
Seeds absorb water and sprout within 5–7 days under suitable conditions.

2. Seedling Stage  
Small green leaves appear and roots develop quickly.

3. Vegetative Stage  
Rapid leaf growth begins and plants become dense.

4. Leaf Development Stage  
Leaves become large and suitable for first harvest.

5. Harvesting Stage  
First cutting is done 25–40 days after sowing.

6. Regrowth Stage  
Plants regrow leaves for multiple harvests.

",

'types_of_crop' => '
Flat Leaf Spinach: Broad and smooth leaves
Savoy Spinach: Crinkled and textured leaves
Semi-savoy Spinach: Intermediate leaf type
',

'crop_varieties' => '
Local Spinach: Common variety grown in Pakistan
Pusa Palak: High yield and fast-growing variety
All Green Spinach: Tender and dark green leaves
Desi Palak: Traditional local variety
',

'nutritional_value' => '
Iron: Helps in blood formation
Calcium: Strengthens bones
Vitamin A: Improves vision and immunity
Vitamin C: Boosts immunity
Fiber: Improves digestion
',

'importance_of_crop' => '
Spinach is an important leafy vegetable that provides essential nutrients for a healthy diet. It is widely consumed in households and restaurants and is an affordable source of vitamins and minerals. It also supports farmers due to its fast growth and multiple harvests.
',

'modern_technologies' => '
Drip irrigation systems
Hydroponic spinach farming
Improved hybrid seed varieties
Greenhouse cultivation
Precision nutrient management

Modern technologies help increase yield, improve leaf quality, and enable year-round production.
',
            ],
            [
          'crop_name' => 'Pea',

'introduction' => 'Peas are an important cool-season legume crop grown in many countries including Pakistan. They are widely consumed as a vegetable and are also used in dried form. Peas are valued for their high protein content and soil-improving ability because they fix nitrogen in the soil. In Pakistan, peas are commonly grown in winter and are an important part of daily diets and vegetable markets.',

'basic_information' => '
Crop Name: Peas
Scientific Name: Pisum sativum
Crop Type: Rabi (Winter Crop)
Main Use: Vegetable, Dried peas, Food industry
Sowing Season: October to December
Harvesting Season: February to April
Ideal Temperature: 10°C – 20°C
Water Requirement: Moderate
Best Soil Type: Loamy and well-drained soil
Major Areas: Punjab, KPK, Sindh (limited areas)
',

'sowing_season' => '
Peas are usually sown from October to December in Pakistan. Cool weather during this period helps proper germination and plant development. Farmers prepare the field before sowing and ensure soil is well-drained for better growth.

Why Peas are Sown in Winter:

Peas require cool temperatures for proper flowering and pod formation. Winter season provides ideal conditions for vegetative growth and reduces pest attacks.
',

'harvesting_season' => '
Peas are harvested from February to April depending on the variety. Pods are picked when they are fully developed but still tender for vegetable use, or left to dry for seed collection.

Why Peas are Harvested at This Time:

Spring season provides suitable weather for pod maturity and harvesting. Warm but not extreme temperatures help maintain quality and yield.
',

'climate_requirements' => '
Germination Temperature: 10°C – 18°C
Vegetative Growth: 15°C – 20°C
Pod Formation: 15°C – 22°C

Peas grow best in cool and moderate climates. High temperatures can reduce flowering and yield.
',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained soil is important because waterlogging can damage roots and reduce yield.
',

'land_preparation' => '
Ploughing: Loosens soil for root growth
Leveling: Ensures uniform water distribution
Organic Matter Addition: Improves fertility
Weed Removal: Reduces competition

Good land preparation ensures healthy germination and strong plant growth.
',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Certified variety
Uniform size

Good quality seed ensures better plant population and higher yield.
',

'seed_rate' => '
Seed Rate: 40–60 kg per acre (depending on variety and sowing method)

Proper seed rate ensures balanced plant spacing and better pod production.
',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Flowering Stage: Moderate irrigation
Pod Formation Stage: Regular irrigation

Peas need controlled irrigation; excess water can damage roots and reduce yield.
',

'fertilizer_requirements' => '
Nitrogen (N): Initial growth support
Phosphorus (P): Root and flower development
Potassium (K): Pod quality and disease resistance

Being a legume crop, peas also improve soil fertility by fixing nitrogen naturally.
',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout within a few days in cool conditions.

2. Seedling Stage  
Young plants develop leaves and establish roots.

3. Vegetative Stage  
Plants grow stems and leaves rapidly.

4. Flowering Stage  
Flowers appear and pollination begins.

5. Pod Formation Stage  
Pods start developing and filling with seeds.

6. Maturity Stage  
Pods mature and become ready for harvesting.

Each stage is important for achieving high yield and good-quality peas.

",

'types_of_crop' => '
Garden Peas: Fresh green consumption
Field Peas: Dried seed production
Snap Peas: Edible pods
Sugar Peas: Sweet edible pods
',

'crop_varieties' => '
Climax: Early maturity variety
Meteor: High yield variety
Lincoln: Disease resistant variety
Arkel: Popular garden pea variety
',

'nutritional_value' => '
Protein: High plant protein source
Carbohydrates: Energy supply
Fiber: Digestive health
Vitamins: Vitamin A, C, K
Minerals: Iron, potassium, magnesium
',

'importance_of_crop' => '
Peas are an important vegetable crop that provides nutrition and income to farmers. They improve soil fertility by fixing nitrogen and are widely used in household cooking, frozen food industries, and canned food products.
',

'modern_technologies' => '
Improved hybrid varieties
Drip irrigation systems
Precision farming tools
Disease-resistant seed technology
Modern harvesting techniques

These technologies help improve yield, reduce losses, and enhance crop quality.
',
            ],
            [
          'crop_name' => 'Carrot',

'introduction' => 'Carrots are an important root vegetable crop grown in many parts of the world, including Pakistan. They are widely consumed in salads, cooking, juices, and traditional dishes. Carrots are rich in beta-carotene and vitamins, making them highly nutritious. They are mainly grown in cool climates and are an important cash crop for vegetable farmers.',

'basic_information' => '
Crop Name: Carrots
Scientific Name: Daucus carota
Crop Type: Rabi (Winter Vegetable Crop)
Main Use: Vegetable, Salad, Juice, Cooking
Sowing Season: August to November
Harvesting Season: November to February
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Sandy loam, loose and well-drained soil
Major Areas: Punjab, KPK, Sindh (limited areas)
',

'sowing_season' => '
Carrots are usually sown from August to November in Pakistan. Cool weather helps proper root development and improves sweetness and quality. Farmers prepare fine, loose soil before sowing to ensure straight and healthy root growth.

Why Carrots are Sown in Winter:

Carrots require cool temperatures for proper root formation. High temperatures can cause poor root shape and reduce quality.
',

'harvesting_season' => '
Carrots are harvested from November to February depending on variety and sowing time. They are harvested when roots reach full size and develop good color and sweetness.

Why Carrots are Harvested at This Time:

Winter and early spring conditions help maintain root quality and prevent damage from heat.
',

'climate_requirements' => '
Germination Temperature: 10°C – 20°C
Vegetative Growth: 15°C – 25°C
Root Development: 15°C – 22°C

Carrots grow best in cool climates. High temperatures may lead to bitter taste and poor root development.
',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loose, deep, and well-drained soil
Fertile soil with organic matter

Ideal pH: 6.0 – 7.0

Loose soil is essential for straight root growth and good yield.
',

'land_preparation' => '
Deep ploughing: Loosens soil for root penetration
Fine tilth preparation: Removes clods and stones
Organic matter addition: Improves soil fertility
Leveling: Ensures uniform irrigation

Proper land preparation ensures smooth and straight carrot roots.
',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Certified variety
Uniform size

Good seeds ensure better yield and uniform root development.
',

'seed_rate' => '
Seed Rate: 4–6 kg per acre

Proper seed rate ensures good plant spacing and healthy root growth.
',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Root Development Stage: Regular moisture
Maturity Stage: Controlled irrigation

Carrots require consistent moisture but overwatering should be avoided to prevent root rot.
',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Quality and color improvement

Balanced fertilizers help in better root size and sweetness.
',

'growing_stages' => "

1. Germination Stage  
Seeds sprout in cool and moist soil conditions.

2. Seedling Stage  
Small leaves develop and roots begin forming.

3. Root Development Stage  
Main taproot starts thickening and growing downward.

4. Vegetative Stage  
Leaves grow and support food production for roots.

5. Maturity Stage  
Roots reach full size, color develops, and crop is ready for harvest.

Each stage is important for producing high-quality carrots.

",

'types_of_crop' => '
Nantes: Sweet and smooth roots
Chantenay: Short and thick roots
Imperator: Long and slender roots
Danvers: Medium-sized, hardy variety
',

'crop_varieties' => '
Red Core: Popular local variety
Kuroda: High yield variety
New Kuroda: Disease resistant variety
Improved Nantes: Sweet and tender roots
',

'nutritional_value' => '
Beta-carotene: Improves vision
Vitamin A: Eye and skin health
Fiber: Digestive health
Vitamin K: Blood health
Minerals: Potassium and calcium for body strength
',

'importance_of_crop' => '
Carrots are an important vegetable crop that provides high nutritional value and income to farmers. They are widely used in households, restaurants, and juice industries, and support healthy diets worldwide.
',

'modern_technologies' => '
Drip irrigation systems
Improved hybrid seeds
Precision farming techniques
Mulching technology
Modern harvesting tools

These technologies improve yield, quality, and water efficiency in carrot farming.
',
            ],
            [
          'crop_name' => 'Onion',

'introduction' => 'Onion is one of the most important vegetable crops grown worldwide, including Pakistan. It is widely used in daily cooking due to its strong flavor and nutritional value. Onion farming is an important source of income for farmers because it has high market demand throughout the year. It is also used in salads, cooking, and food processing industries. Pakistan produces onions in large quantities, especially in Sindh and Punjab.',

'basic_information' => '
Crop Name: Onions
Scientific Name: Allium cepa
Crop Type: Rabi (Winter Vegetable Crop)
Main Use: Vegetable, Cooking, Salad, Food processing
Sowing Season: October to December
Harvesting Season: March to May
Ideal Temperature: 13°C – 25°C
Water Requirement: Moderate
Best Soil Type: Sandy loam, well-drained fertile soil
Major Areas: Sindh, Punjab, KPK, Balochistan
',

'sowing_season' => '
Onions are usually sown from October to December in Pakistan. Cool weather helps proper bulb formation and early plant development. Farmers prepare fine soil and ensure proper spacing for healthy growth.

Why Onions are Sown in Winter:

Onions require cool temperatures for proper vegetative growth and bulb formation. High temperatures at early stages can reduce yield and bulb quality.
',

'harvesting_season' => '
Onions are harvested from March to May depending on variety and sowing time. The crop is ready when leaves turn yellow and start drying, and bulbs become firm.

Why Onions are Harvested at This Time:

Dry and warm weather during spring helps bulbs cure properly and improves storage life.
',

'climate_requirements' => '
Germination Temperature: 10°C – 20°C
Vegetative Growth: 15°C – 25°C
Bulb Formation: 18°C – 25°C

Onions grow best in mild and cool climates. Extreme heat or frost can reduce yield and bulb quality.
',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Well-drained fertile soil
Light textured soil with organic matter

Ideal pH: 6.0 – 7.5

Well-drained soil is important because waterlogging can damage bulbs and reduce yield.
',

'land_preparation' => '
Deep ploughing: Loosens soil for bulb growth
Leveling: Ensures uniform irrigation
Organic manure addition: Improves fertility
Weed removal: Reduces competition

Proper land preparation ensures healthy bulb development and higher yield.
',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Certified variety
Uniform size

Good seed ensures healthy seedlings and better bulb formation.
',

'seed_rate' => '
Seed Rate: 3–4 kg per acre (for transplanting method)

Proper seed rate ensures balanced plant spacing and good bulb size.
',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Vegetative Stage: Regular irrigation
Bulb Formation Stage: Controlled irrigation
Maturity Stage: Reduced irrigation

Onions need moderate water; excess water can cause bulb rot.
',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Bulb size and quality

Balanced fertilizer use improves yield and storage life of onions.
',

'growing_stages' => "

1. Germination Stage  
Seeds sprout and small seedlings emerge from the soil.

2. Seedling Stage  
Young plants develop leaves and roots strengthen.

3. Vegetative Stage  
Leaf growth increases and plant prepares for bulb formation.

4. Bulb Formation Stage  
Bulbs start developing under the soil.

5. Maturity Stage  
Leaves dry and bulbs become fully developed and ready for harvest.

Each stage is important for producing high-quality onion bulbs.

",

'types_of_crop' => '
Red Onion: Common cooking variety
White Onion: Mild flavor variety
Yellow Onion: Strong flavor and storage variety
Spring Onion: Used fresh in salads and garnishing
',

'crop_varieties' => '
Swat-1: High yield variety
Phulkara: Popular local variety
Red Creole: Early maturity variety
Desi Onion: Traditional variety
',

'nutritional_value' => '
Vitamin C: Improves immunity
Vitamin B6: Supports metabolism
Fiber: Aids digestion
Antioxidants: Protects body cells
Minerals: Potassium and calcium for health
',

'importance_of_crop' => '
Onion is an essential vegetable crop used in almost every household. It plays a key role in daily cooking and food industries. It also provides income to farmers and is an important export commodity for Pakistan.
',

'modern_technologies' => '
Drip irrigation systems
Improved hybrid varieties
Mulching techniques
Precision farming tools
Modern storage facilities

These technologies help improve yield, quality, and storage life of onions.
',
            ],
            [
          'crop_name' => 'CauliFlower',

'introduction' => 'Cauliflower is an important vegetable crop grown in Pakistan and many other countries. It is widely consumed in daily meals and is valued for its nutritional benefits and versatility in cooking. Cauliflower farming plays an important role in the vegetable market economy because it provides income to farmers and supplies fresh vegetables to local markets. It is mainly grown in cool climates and is considered a winter vegetable crop.',

'basic_information' => '
Crop Name: Cauliflower
Scientific Name: Brassica oleracea var. botrytis
Crop Type: Rabi (Winter Crop)
Main Use: Vegetable, Curries, Soups, Stir-fry
Sowing Season: August to November
Harvesting Season: November to March
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy and Fertile Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

'sowing_season' => '
Cauliflower is usually sown from August to November in Pakistan. Farmers often start nursery preparation in late summer and transplant seedlings after 3–4 weeks. Cool temperature during early growth helps proper vegetative development and healthy curd formation.

Why Cauliflower is Sown in Winter:

Cauliflower requires cool weather for proper curd (flower head) development. High temperatures can cause poor quality heads, discoloration, and premature flowering.
',

'harvesting_season' => '
Cauliflower is harvested from November to March depending on the variety and planting time. The crop is ready when the curd becomes firm, compact, and white in color.

Why Cauliflower is Harvested at This Time:

Cool and dry winter conditions help maintain curd quality, texture, and color. Delayed harvesting can reduce quality and market value.
',

'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 15°C – 25°C
Curd Formation: 15°C – 20°C

Cauliflower grows best in cool and moist climates. Extreme heat affects curd formation and reduces yield quality.
',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Fertile and well-drained soil

Ideal pH: 6.0 – 7.5

Rich organic matter in soil helps improve curd size and overall plant growth.
',

'land_preparation' => '
Ploughing: Loosens the soil
Leveling: Ensures uniform irrigation
FYM Application: Improves soil fertility
Weed Removal: Reduces competition

Proper land preparation supports healthy root development and better yield.
',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Certified hybrid variety
Uniform seed size

Good quality seed ensures strong seedlings and better curd formation.
',

'seed_rate' => '
Nursery Method: 200–300 grams per acre (for transplanting)
Direct Seeding: 500–700 grams per acre

Correct seed rate ensures proper plant spacing and healthy growth.
',

'irrigation_requirements' => '
Nursery Stage: Light and frequent watering
Vegetative Stage: Regular irrigation
Curd Formation Stage: Proper moisture maintenance

Cauliflower needs consistent moisture but waterlogging should be avoided.
',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Curd quality and size

Balanced fertilizers improve yield, curd compactness, and plant health.
',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and start sprouting. Proper temperature and moisture are required.

2. Seedling Stage  
Young plants develop leaves and roots in nursery conditions.

3. Transplanting Stage  
Seedlings are moved to the field for further growth.

4. Vegetative Stage  
Plants develop large leaves and strong root systems.

5. Head Initiation Stage  
Curd (flower head) begins to form inside the plant.

6. Curd Development Stage  
The head grows in size and becomes compact and white.

7. Maturity Stage  
Curd becomes fully developed and ready for harvest.

Each stage is important for high-quality cauliflower production.

",

'types_of_crop' => '
Early Varieties: Quick growing types
Mid Season Varieties: Medium duration types
Late Varieties: Long duration types
Hybrid Varieties: High yield and disease resistant types
',

'crop_varieties' => '
Snowball: Popular white curd variety
Pusa Snowball: High quality hybrid
Local White: Traditional variety
Hybrid Cauliflower: High yield improved variety
',

'nutritional_value' => '
Vitamin C: Boosts immunity
Vitamin K: Bone health
Fiber: Improves digestion
Folate: Supports cell growth
Antioxidants: Protects body cells
',

'importance_of_crop' => '
Cauliflower is an important vegetable crop used in daily cooking and provides essential nutrients. It supports farmers’ income and plays a major role in vegetable supply chains and local markets.
',

'modern_technologies' => '
Drip irrigation systems
Hybrid seed development
Protected nursery techniques
Polyhouse cultivation
Disease-resistant varieties

Modern technologies help increase yield, improve quality, and reduce crop losses.
',
            ],
             ];
         foreach ($cropDetails as $detail) {

            $crop = Crop::where('name', $detail['crop_name'])->first();

            if ($crop) {

                CropDetail::create([

                    'crop_id' => $crop->id,

                    'crop_name' => $detail['crop_name'],

                    'introduction' => $detail['introduction'],

                    'basic_information' => $detail['basic_information'],

                    'sowing_season' => $detail['sowing_season'],

                    'harvesting_season' => $detail['harvesting_season'],

                    'climate_requirements' => $detail['climate_requirements'],

                    'soil_requirements' => $detail['soil_requirements'],

                    'land_preparation' => $detail['land_preparation'],

                    'seed_selection' => $detail['seed_selection'],

                    'seed_rate' => $detail['seed_rate'],

                    'irrigation_requirements' => $detail['irrigation_requirements'],

                    'fertilizer_requirements' => $detail['fertilizer_requirements'],

                    'growing_stages' => $detail['growing_stages'],

                    'types_of_crop' => $detail['types_of_crop'],

                    'crop_varieties' => $detail['crop_varieties'],

                    'nutritional_value' => $detail['nutritional_value'],

                    'importance_of_crop' => $detail['importance_of_crop'],

                ]);
            }
         }
    }
}


