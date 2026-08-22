<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\CropDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropDetail4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $cropDetails = [
            [
                'crop_name' => 'Cabbage',

'introduction' => 'Cabbage is an important leafy vegetable crop grown in Pakistan and many other countries. It is widely used in salads, curries, soups, and fast foods. Cabbage farming is important because it provides income to farmers and supplies fresh vegetables to local markets. It is mainly grown in cool weather conditions and is considered a popular winter vegetable crop.',

'basic_information' => '
Crop Name: Cabbage
Scientific Name: Brassica oleracea var. capitata
Crop Type: Rabi (Winter Crop)
Main Use: Salads, Curries, Soups, Fast Food
Sowing Season: August to November
Harvesting Season: November to March
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy and Fertile Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Cabbage is usually sown from August to November in Pakistan. Farmers prepare nurseries during late summer and transplant seedlings after a few weeks. Cool temperatures help proper leaf and head development.

Why Cabbage is Sown in Winter:

Cabbage grows best in cool weather conditions. Low temperatures improve head formation, leaf quality, and crop yield.
            ',

'harvesting_season' => '
Cabbage is harvested from November to March depending on the variety and climate conditions. The crop is ready when heads become firm, compact, and reach marketable size.

Why Cabbage is Harvested at This Time:

Cool winter weather helps maintain head quality and freshness. Timely harvesting improves market value and prevents head cracking.
            ',

'climate_requirements' => '
Germination Temperature: 20°C – 25°C
Vegetative Growth: 15°C – 22°C
Head Formation: 15°C – 20°C

Cabbage grows best in cool and moist climates. High temperatures may reduce head quality and affect crop growth.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Fertile and well-drained soil

Ideal pH: 6.0 – 7.5

Fertile soil rich in organic matter helps healthy head formation and better production.
            ',

'land_preparation' => '
Ploughing: Softens the soil
Leveling: Ensures proper irrigation
Organic Matter Addition: Improves fertility
Weed Removal: Reduces competition

Good land preparation improves root development and healthy plant growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and clean
Disease-free
High germination rate
Certified hybrid variety

Good quality seed produces healthy plants and compact cabbage heads.
            ',

'seed_rate' => '
Nursery Method: 200–300 grams per acre
Direct Seeding: 500–700 grams per acre

Using the correct seed rate ensures proper plant population and healthy growth.
            ',

'irrigation_requirements' => '
Seedling Stage: Light irrigation
Vegetative Stage: Regular watering
Head Formation Stage: Adequate moisture supply

Cabbage requires regular irrigation for proper head development but waterlogging should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Head quality and disease resistance

Balanced fertilizers improve plant growth, head size, and crop yield.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting. Proper temperature and moisture are necessary.

2. Seedling Stage  
Young plants develop leaves and roots in nursery conditions.

3. Transplanting Stage  
Seedlings are transferred to the main field with proper spacing.

4. Vegetative Growth Stage  
Plants produce large green leaves and strong root systems.

5. Head Formation Stage  
Leaves fold tightly and form compact cabbage heads.

6. Head Development Stage  
Heads increase in size and become firm and compact.

7. Maturity Stage  
Heads become fully developed and ready for harvesting.

Each stage is important for obtaining high-quality cabbage yield.

",

'types_of_crop' => '
Green Cabbage: Most common variety
Red Cabbage: Purple colored leaves
Savoy Cabbage: Curly leaf variety
Chinese Cabbage: Soft leafy variety
            ',

'crop_varieties' => '
Golden Acre: Early maturing variety
Copenhagen Market: Large compact heads
Red Drumhead: Red cabbage variety
Hybrid Cabbage: High yield and disease resistant
            ',

'nutritional_value' => '
Vitamin C: Boosts immunity
Fiber: Improves digestion
Vitamin K: Bone health
Antioxidants: Protect body cells
Minerals: Support healthy body functions
            ',

'importance_of_crop' => '
Cabbage is an important vegetable crop used in homes, restaurants, and food industries. It provides nutrition, supports farmers’ income, and contributes to the vegetable market economy.
            ',

'modern_technologies' => '
Drip irrigation systems
Hybrid seed technology
Protected nursery production
Plastic mulching
Disease-resistant varieties

Modern technologies help improve cabbage production, quality, and disease management while reducing labor costs.
            ',
            ],
            [
           'crop_name' => 'Radish',

'introduction' => 'Radish is an important root vegetable crop grown in Pakistan and many other countries. It is widely used in salads, pickles, curries, and traditional dishes. Radish farming is important because it provides quick income to farmers due to its short growing duration. It is mainly grown during the winter season and is valued for its nutritional and medicinal benefits.',

'basic_information' => '
Crop Name: Radish
Scientific Name: Raphanus sativus
Crop Type: Rabi (Winter Crop)
Main Use: Salads, Pickles, Curries
Sowing Season: September to November
Harvesting Season: November to January
Ideal Temperature: 10°C – 25°C
Water Requirement: Moderate
Best Soil Type: Sandy Loam and Fertile Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Radish is usually sown from September to November in Pakistan. Cool weather during this period supports healthy root formation and rapid growth.

Why Radish is Sown in Winter:

Radish grows best in cool temperatures. High temperatures may cause poor root development, bitterness, and early flowering.
            ',

'harvesting_season' => '
Radish is harvested from November to January depending on the variety and climate conditions. The crop becomes ready when roots reach proper size and remain tender.

Why Radish is Harvested at This Time:

Cool winter weather helps produce crisp, juicy, and flavorful roots. Delayed harvesting may result in hard and fibrous roots.
            ',

'climate_requirements' => '
Germination Temperature: 15°C – 25°C
Vegetative Growth: 10°C – 20°C
Root Development: 12°C – 18°C

Radish grows best in cool and moist climates. Mild temperatures support proper root enlargement and quality.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.0

Loose and fertile soil helps smooth root development and better yield.
            ',

'land_preparation' => '
Ploughing: Softens the soil
Leveling: Improves irrigation distribution
Organic Matter Addition: Enhances fertility
Weed Removal: Reduces competition

Fine soil preparation helps proper root growth and improves root quality.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and clean
Disease-free
High germination rate
Certified variety

Good quality seed produces healthy roots and better crop production.
            ',

'seed_rate' => '
Direct Seeding: 4–6 kg per acre

Using the correct seed rate ensures proper plant spacing and healthy root development.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Vegetative Stage: Regular watering
Root Development Stage: Adequate moisture supply

Radish requires regular irrigation for smooth and tender roots, but excess water should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Root quality and disease resistance

Balanced fertilizers improve root size, quality, and overall yield.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting. Proper moisture is essential.

2. Seedling Stage  
Young plants develop leaves and roots rapidly.

3. Vegetative Growth Stage  
Leaves grow larger and roots start expanding.

4. Root Development Stage  
Roots enlarge and store nutrients for proper growth.

5. Maturity Stage  
Roots become fully developed, tender, and ready for harvesting.

Each stage is important for obtaining high-quality radish production.

",

'types_of_crop' => '
White Radish: Long white root variety
Red Radish: Small red root variety
Round Radish: Round-shaped roots
Asian Radish: Large and mild flavored variety
            ',

'crop_varieties' => '
Japanese White: Long smooth roots
Minowase: Popular long variety
Local White Radish: Traditional variety
Hybrid Radish: High yield improved variety
            ',

'nutritional_value' => '
Vitamin C: Boosts immunity
Fiber: Improves digestion
Calcium: Bone health
Potassium: Supports body functions
Antioxidants: Protect body cells
            ',

'importance_of_crop' => '
Radish is an important vegetable crop used in homes, restaurants, and food industries. It provides nutrition, supports quick farmer income, and contributes to vegetable market supply.
            ',

'modern_technologies' => '
Drip irrigation systems
Hybrid seed technology
Plastic mulching
Improved fertilizer management
Disease-resistant varieties

Modern technologies help improve radish quality, increase yield, and reduce production costs.
            ',
            ],
            [
           'crop_name' => 'Bean',

'introduction' => 'Beans are an important vegetable and pulse crop grown in Pakistan and many other countries. They are widely used as food because they are rich in protein, vitamins, and minerals. Beans are consumed as fresh vegetables as well as dried pulses. Bean farming provides income to farmers and plays an important role in improving soil fertility through nitrogen fixation. Beans grow well in cool to moderate climates with proper irrigation and fertile soil.',

'basic_information' => '
Crop Name: Beans
Scientific Name: Phaseolus vulgaris
Crop Type: Rabi and Spring Crop
Main Use: Vegetable, Pulse, Food
Sowing Season: August to October and February to March
Harvesting Season: November to January and April to May
Ideal Temperature: 18°C – 28°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-Drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Beans are usually sown from August to October in winter areas and from February to March in spring areas. Moderate temperature and moist soil help proper seed germination and healthy plant growth.

Why Beans are Sown in These Seasons:

Beans require cool to moderate weather for proper vegetative growth and pod development. Extreme heat can reduce flowering and pod formation.
            ',

'harvesting_season' => '
Beans are harvested from November to January and from April to May depending on the sowing season and variety. Pods are harvested when they become tender and fully developed.

Why Beans are Harvested at This Time:

Cool and dry weather helps produce high-quality pods and reduces disease problems during harvesting.
            ',

'climate_requirements' => '
Germination Temperature: 18°C – 25°C
Vegetative Growth: 20°C – 28°C
Pod Formation: 18°C – 24°C

Beans grow best in cool to moderate climates with sufficient sunlight and moderate moisture.
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
Ploughing: Softens the soil
Leveling: Improves irrigation management
Organic Matter Addition: Improves fertility
Weed Removal: Reduces competition

Proper land preparation supports better root development and healthy crop growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and disease-free
High germination rate
Certified variety
Uniform size and color

Good quality seeds ensure healthy plants and better production.
            ',

'seed_rate' => '
Bush Beans: 8–10 kg per acre
Pole Beans: 4–6 kg per acre

Using the correct seed rate helps maintain proper plant population and improves yield.
            ',

'irrigation_requirements' => '
Germination Stage: Moisture for sprouting
Vegetative Stage: Proper leaf growth
Flowering Stage: Better flower development
Pod Formation Stage: Healthy pod filling

Beans require moderate irrigation and excess water should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root and flower development
Potassium (K): Pod quality and disease resistance

Balanced fertilizers improve plant growth and pod production.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb water and begin sprouting. Proper moisture and temperature are important.

2. Seedling Stage  
Young plants develop leaves and roots. Healthy seedlings ensure strong crop growth.

3. Vegetative Growth Stage  
Plants grow rapidly and produce more leaves and branches.

4. Flowering Stage  
Flowers appear on plants. Proper nutrients and irrigation are essential.

5. Pod Formation Stage  
Pods begin developing after pollination. Moisture is important during this stage.

6. Pod Filling Stage  
Seeds inside pods develop and gain size.

7. Maturity Stage  
Pods become fully mature and ready for harvesting.

Each stage is important for obtaining high-quality bean production.

",

'types_of_crop' => '
Bush Beans: Short plants with early production
Pole Beans: Climbing type with higher yield
Green Beans: Used as fresh vegetable
Dry Beans: Used as pulses
            ',

'crop_varieties' => '
Contender: Early maturing variety
Kentucky Wonder: Pole bean variety
Provider: Disease resistant variety
Blue Lake: High-quality green bean
            ',

'nutritional_value' => '
Protein: Body growth and repair
Fiber: Better digestion
Vitamins: Healthy body functions
Minerals: Bone and blood health
Antioxidants: Disease protection
            ',

'importance_of_crop' => '
Beans are an important food crop because they provide protein, vitamins, and minerals. They improve soil fertility by fixing nitrogen and provide income to farmers. Beans are widely used in homes, restaurants, and food industries.
            ',

'modern_technologies' => '
Drip irrigation
Hybrid seed technology
Plastic mulching
AI crop monitoring
Modern harvesting techniques

Modern technologies help farmers improve bean production and reduce labor and water costs.
            ',
            ],
            [
                'crop_name' => 'Lettuce',

'introduction' => 'Lettuce is an important leafy vegetable crop grown in Pakistan and many other countries. It is widely used in salads, sandwiches, burgers, and fast foods because of its fresh taste and nutritional value. Lettuce farming provides good income to farmers due to its high market demand. It grows best in cool climates with fertile soil and proper irrigation.',

'basic_information' => '
Crop Name: Lettuce
Scientific Name: Lactuca sativa
Crop Type: Winter Vegetable Crop
Main Use: Salad, Sandwiches, Fast Food
Sowing Season: September to November
Harvesting Season: November to February
Ideal Temperature: 15°C – 22°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-Drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Lettuce is usually sown from September to November in Pakistan. Cool temperature during this season supports proper seed germination and healthy leaf development.

Why Lettuce is Sown in Winter:

Lettuce grows best in cool weather conditions. High temperature can cause early flowering and bitter leaves.
            ',

'harvesting_season' => '
Lettuce is harvested from November to February depending on the variety and climate conditions. The crop is ready when leaves become fully developed and fresh green.

Why Lettuce is Harvested at This Time:

Cool weather helps maintain leaf quality, freshness, and better taste during harvesting.
            ',

'climate_requirements' => '
Germination Temperature: 15°C – 20°C
Vegetative Growth: 16°C – 22°C
Leaf Development: 15°C – 20°C

Lettuce grows best in cool and moist climates with moderate sunlight.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.0

Fertile and well-drained soil helps produce healthy and tender leaves.
            ',

'land_preparation' => '
Ploughing: Softens the soil
Leveling: Improves irrigation
Organic Matter Addition: Improves fertility
Weed Removal: Reduces competition

Proper land preparation supports healthy root growth and quality leaf production.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and disease-free
High germination rate
Certified variety
Fresh and clean seeds

Good quality seed ensures healthy plants and better yield.
            ',

'seed_rate' => '
Direct Sowing: 400–500 grams per acre
Nursery Method: 250–300 grams per acre

Using the correct seed rate helps maintain proper plant spacing and healthy crop growth.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation for sprouting
Leaf Development Stage: Regular moisture supply
Head Formation Stage: Proper watering for quality leaves

Lettuce requires regular but moderate irrigation. Excess water should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Plant strength and quality

Balanced fertilizers improve leaf production and crop quality.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting. Cool temperature helps proper germination.

2. Seedling Stage  
Young plants develop small leaves and roots become stronger.

3. Vegetative Growth Stage  
Plants produce more green leaves rapidly. Proper irrigation and nutrients are important.

4. Head Formation Stage  
Leaves form compact heads in heading varieties. Proper care improves quality.

5. Maturity Stage  
Leaves become fully developed and fresh. Crop becomes ready for harvesting.

Each stage is important for obtaining high-quality lettuce production.

",

'types_of_crop' => '
Leaf Lettuce: Loose leafy type
Romaine Lettuce: Long upright leaves
Iceberg Lettuce: Compact round head
Butterhead Lettuce: Soft and tender leaves
            ',

'crop_varieties' => '
Great Lakes: Popular iceberg variety
Romaine: Long leaf variety
Buttercrunch: Soft leaf variety
Red Leaf Lettuce: Colorful leafy variety
            ',

'nutritional_value' => '
Fiber: Better digestion
Vitamins: Healthy body functions
Minerals: Bone and blood health
Water Content: Hydration support
Antioxidants: Disease protection
            ',

'importance_of_crop' => '
Lettuce is an important vegetable crop because it is widely used in salads and fast foods. It provides vitamins, minerals, and fiber for healthy nutrition. Lettuce farming gives good income to farmers due to its high market demand.
            ',

'modern_technologies' => '
Drip irrigation
Hydroponic farming
Greenhouse cultivation
AI crop monitoring
Plastic mulching

Modern technologies help farmers improve lettuce production and maintain better crop quality.
            ',
            ],
            [
                'crop_name' => 'Garlic',

'introduction' => 'Garlic is an important vegetable and spice crop grown in Pakistan and many other countries. It is widely used in cooking, medicines, and food industries because of its strong flavor and health benefits. Garlic farming provides good income to farmers due to its high market demand. It grows best in cool climates with fertile and well-drained soil.',

'basic_information' => '
Crop Name: Garlic
Scientific Name: Allium sativum
Crop Type: Rabi (Winter Crop)
Main Use: Spice, Cooking, Medicine
Sowing Season: September to November
Harvesting Season: March to April
Ideal Temperature: 12°C – 24°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-Drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Garlic is usually sown from September to November in Pakistan. Cool weather during this period helps proper bulb and root development.

Why Garlic is Sown in Winter:

Garlic requires cool temperature during early growth stages. Excessive heat can reduce bulb formation and crop quality.
            ',

'harvesting_season' => '
Garlic is harvested from March to April depending on the variety and climate conditions. The crop is ready when leaves turn yellow and dry.

Why Garlic is Harvested at This Time:

Dry weather during harvesting improves bulb quality and helps safe storage for a longer period.
            ',

'climate_requirements' => '
Germination Temperature: 12°C – 18°C
Vegetative Growth: 15°C – 22°C
Bulb Formation: 20°C – 24°C

Garlic grows best in cool and dry climates with moderate sunlight.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained soil is important because waterlogging can damage garlic bulbs.
            ',

'land_preparation' => '
Ploughing: Softens the soil
Leveling: Improves irrigation management
Organic Matter Addition: Improves fertility
Weed Removal: Reduces competition

Proper land preparation supports healthy bulb development and better crop growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and disease-free cloves
Large bulb size
High germination rate
Certified variety

Good quality cloves produce healthy plants and larger garlic bulbs.
            ',

'seed_rate' => '
Clove Requirement: 200–250 kg per acre

Using the correct seed rate helps maintain proper plant population and better bulb production.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation for sprouting
Vegetative Stage: Regular moisture supply
Bulb Formation Stage: Proper watering for bulb growth

Garlic requires moderate irrigation and excess water should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root and bulb development
Potassium (K): Bulb quality and disease resistance

Balanced fertilizers improve bulb size, quality, and crop yield.
            ',

'growing_stages' => "

1. Germination Stage  
Garlic cloves absorb moisture and begin sprouting. Cool temperature supports healthy germination.

2. Seedling Stage  
Young plants develop green leaves and roots become stronger.

3. Vegetative Growth Stage  
Plants grow rapidly and produce more leaves for bulb development.

4. Bulb Formation Stage  
Bulbs begin forming underground. Proper nutrients and irrigation are important.

5. Bulb Enlargement Stage  
Bulbs increase in size and gain weight. Healthy leaves support bulb growth.

6. Maturity Stage  
Leaves turn yellow and bulbs become fully mature. Crop becomes ready for harvesting.

Each stage is important for obtaining high-quality garlic production.

",

'types_of_crop' => '
Softneck Garlic: Common commercial type
Hardneck Garlic: Strong flavor variety
White Garlic: Popular cooking type
Purple Garlic: Colored bulb variety
            ',

'crop_varieties' => '
Desi Garlic: Local variety
Chinese Garlic: Large bulb variety
Italian Garlic: Strong flavor variety
Punjab Garlic: High-yield variety
            ',

'nutritional_value' => '
Carbohydrates: Energy source
Vitamins: Healthy body functions
Minerals: Bone and blood health
Antioxidants: Disease protection
Medicinal Compounds: Improve immunity
            ',

'importance_of_crop' => '
Garlic is an important spice and medicinal crop. It is widely used in cooking and traditional medicine. Garlic farming provides good income to farmers and supports food industries and export markets.
            ',

'modern_technologies' => '
Drip irrigation
Hybrid seed technology
Plastic mulching
AI crop monitoring
Modern storage systems

Modern technologies help farmers improve garlic production and reduce water and labor costs.
            ',
            ],
            [
            'crop_name' => 'Beetroot',

'introduction' => 'Beetroot is an important root vegetable grown in Pakistan and many other countries. It is widely used in salads, juices, pickles, and cooked dishes. Beetroot farming is beneficial because it provides income to farmers and has good market demand. Beetroot is rich in vitamins, minerals, and antioxidants which are helpful for human health. It grows best in cool weather and fertile well-drained soil.',

'basic_information' => '
Crop Name: Beetroot
Scientific Name: Beta vulgaris
Crop Type: Rabi (Winter Crop)
Main Use: Salad, Juice, Pickles, Vegetable
Sowing Season: September to November
Harvesting Season: December to February
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Sandy Loam and Loamy Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Beetroot is usually sown from September to November in Pakistan. Farmers sow seeds directly in prepared fields during cool weather. Proper temperature and moisture help quick germination and healthy root development.

Why Beetroot is Sown in Winter:

Beetroot grows best in cool climatic conditions. Winter season provides suitable temperature for healthy root formation, better color, and improved quality.
            ',

'harvesting_season' => '
Beetroot is harvested from December to February depending on the variety and sowing time. The crop becomes ready when roots reach proper size and deep red color.

Why Beetroot is Harvested at This Time:

Cool weather helps proper root growth and sweetness. Timely harvesting improves root quality, taste, and market value.
            ',

'climate_requirements' => '
Germination Temperature: 15°C – 20°C
Vegetative Growth: 18°C – 25°C
Root Development: 15°C – 22°C

Beetroot grows best in cool climates with moderate moisture. Excessive heat reduces root quality and sweetness.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Loose and fertile soil helps proper root expansion and improves beetroot quality.
            ',

'land_preparation' => '
Ploughing: Softens the soil
Leveling: Maintains uniform irrigation
Organic Matter Addition: Improves fertility
Weed Removal: Reduces competition

Proper land preparation helps healthy root formation and better crop growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and disease-free
High germination rate
Certified variety
Uniform seed size

Good quality seed improves germination and increases production.
            ',

'seed_rate' => '
Seed Rate: 4–6 kg per acre

Using the correct seed rate helps maintain proper plant population and healthy root growth.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation required
Root Development Stage: Regular moisture needed
Vegetative Stage: Moderate irrigation
Maturity Stage: Avoid excessive watering

Beetroot requires regular but controlled irrigation for proper root development.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Root quality and sweetness

Balanced fertilizer application improves root size, color, and yield.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting. Small roots and shoots develop.

2. Seedling Stage  
Young plants develop leaves and roots become stronger.

3. Vegetative Growth Stage  
Leaves grow rapidly and plants become healthy green.

4. Root Development Stage  
Roots enlarge underground and begin storing nutrients.

5. Root Bulking Stage  
Roots increase in size, color, and sweetness.

6. Maturity Stage  
Roots become fully developed and ready for harvesting.

Each stage is important for obtaining high-quality beetroot production.

",

'types_of_crop' => '
Table Beetroot: Used for salads and cooking
Sugar Beet: Used for sugar production
Fodder Beet: Used as animal feed
Red Beetroot: Common vegetable variety
            ',

'crop_varieties' => '
Detroit Dark Red: Popular red variety
Crimson Globe: Round root variety
Early Wonder: Early maturing variety
Ruby Queen: High quality roots
            ',

'nutritional_value' => '
Carbohydrates: Energy source
Fiber: Improves digestion
Iron: Supports blood health
Vitamins: Healthy body functions
Antioxidants: Protect body cells
            ',

'importance_of_crop' => '
Beetroot is an important vegetable crop with high nutritional and market value. It provides income to farmers and is widely used in food processing industries. Beetroot is also beneficial for human health because it contains vitamins, minerals, and antioxidants.
            ',

'modern_technologies' => '
Drip irrigation
Laser land leveling
Hybrid seed technology
AI crop monitoring
Modern harvesting tools

Modern technologies help improve beetroot production, save water, and reduce labor costs.
            ',
            ],
            [
                'crop_name' => 'Turnip',

'introduction' => 'Turnip is an important root vegetable crop grown in Pakistan and many other countries. It is commonly used in curries, salads, pickles, and cooked dishes. Turnip farming is beneficial because it grows quickly and provides good income to farmers. Both roots and leaves are edible and rich in nutrients. Turnips grow best in cool weather and fertile well-drained soil.',

'basic_information' => '
Crop Name: Turnip
Scientific Name: Brassica rapa
Crop Type: Rabi (Winter Crop)
Main Use: Vegetable, Salad, Pickles
Sowing Season: September to November
Harvesting Season: November to February
Ideal Temperature: 10°C – 25°C
Water Requirement: Moderate
Best Soil Type: Sandy Loam and Loamy Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Turnips are usually sown from September to November in Pakistan. Seeds are directly planted in the field during cool weather. Proper temperature and moisture help quick germination and healthy root growth.

Why Turnips are Sown in Winter:

Turnips grow best in cool climatic conditions. Winter season provides favorable temperature for proper root formation, better taste, and high-quality production.
            ',

'harvesting_season' => '
Turnips are harvested from November to February depending on the variety and sowing time. The crop becomes ready when roots reach suitable size and become tender.

Why Turnips are Harvested at This Time:

Cool weather improves root quality, sweetness, and texture. Timely harvesting prevents roots from becoming hard and fibrous.
            ',

'climate_requirements' => '
Germination Temperature: 15°C – 20°C
Vegetative Growth: 18°C – 25°C
Root Development: 10°C – 20°C

Turnips grow best in cool and moist climates. Excessive heat reduces root quality and affects growth.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Loose and fertile soil helps proper root expansion and improves crop quality.
            ',

'land_preparation' => '
Ploughing: Softens the soil
Leveling: Maintains uniform irrigation
Organic Matter Addition: Improves soil fertility
Weed Removal: Reduces competition

Good land preparation helps healthy root development and better crop growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and disease-free
High germination rate
Certified variety
Uniform seed size

Good quality seed improves plant growth and increases yield.
            ',

'seed_rate' => '
Seed Rate: 2–3 kg per acre

Using the correct seed rate ensures proper plant population and healthy root formation.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation required
Root Development Stage: Regular moisture needed
Vegetative Stage: Moderate irrigation
Maturity Stage: Avoid excessive watering

Turnips require regular but controlled irrigation for proper root growth.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Improves root quality

Balanced fertilizer application improves root size, taste, and crop production.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting. Small roots and shoots develop.

2. Seedling Stage  
Young plants develop leaves and roots become stronger.

3. Vegetative Growth Stage  
Leaves grow rapidly and plants become healthy green.

4. Root Development Stage  
Roots enlarge underground and store nutrients.

5. Root Bulking Stage  
Roots increase in size and become tender.

6. Maturity Stage  
Roots become fully developed and ready for harvesting.

Each stage is important for obtaining high-quality turnip production.

",

'types_of_crop' => '
Purple Top Turnip: Common table variety
White Turnip: Smooth white roots
Yellow Turnip: Yellow flesh variety
Fodder Turnip: Used as animal feed
            ',

'crop_varieties' => '
Purple Top White Globe: Popular variety
Tokyo Cross: Early maturing variety
Golden Ball: Yellow flesh variety
Shogoin: Large root variety
            ',

'nutritional_value' => '
Carbohydrates: Energy source
Fiber: Improves digestion
Vitamin C: Strengthens immunity
Calcium: Bone health
Minerals: Healthy body functions
            ',

'importance_of_crop' => '
Turnip is an important vegetable crop with high nutritional and market value. It provides income to farmers and is widely used in homes and food industries. Turnips are beneficial for human health because they contain vitamins, minerals, and dietary fiber.
            ',

'modern_technologies' => '
Drip irrigation
Laser land leveling
Hybrid seed technology
AI crop monitoring
Modern harvesting tools

Modern technologies help improve turnip production, save water, and reduce labor costs.
            ',
            ],
            [
                'crop_name' => 'Linseed',

'introduction' => 'Linseed is an important oilseed crop grown in Pakistan and many other countries. It is mainly cultivated for its seeds which are used to produce linseed oil and animal feed. Linseed seeds are rich in fiber, protein, and omega-3 fatty acids which are beneficial for human health. Linseed farming provides income to farmers and supports the oil industry. The crop grows best in cool and dry climates with fertile well-drained soil.',

'basic_information' => '
Crop Name: Linseed
Scientific Name: Linum usitatissimum
Crop Type: Rabi (Winter Crop)
Main Use: Oil Production, Animal Feed, Fiber
Sowing Season: October to November
Harvesting Season: March to April
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy and Sandy Loam Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Linseed is usually sown from October to November in Pakistan. Seeds are directly planted in prepared fields during cool weather. Proper moisture and temperature support healthy germination and crop establishment.

Why Linseed is Sown in Winter:

Linseed grows best in cool and dry climatic conditions. Winter season provides favorable temperature for healthy plant growth and good seed formation.
            ',

'harvesting_season' => '
Linseed is harvested from March to April depending on the variety and climate conditions. The crop becomes ready when capsules turn brown and plants become dry.

Why Linseed is Harvested at This Time:

Dry weather during maturity helps proper seed drying and improves oil quality. Timely harvesting reduces seed losses.
            ',

'climate_requirements' => '
Germination Temperature: 15°C – 20°C
Vegetative Growth: 18°C – 25°C
Seed Formation: 20°C – 25°C

Linseed grows best in cool and moderately dry climates. Excessive rainfall and humidity can reduce seed quality.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained and fertile soil supports healthy root growth and better seed production.
            ',

'land_preparation' => '
Ploughing: Softens the soil
Leveling: Ensures proper irrigation
Organic Matter Addition: Improves fertility
Weed Removal: Reduces crop competition

Good land preparation improves plant establishment and crop growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and clean
Disease-free
High germination rate
Certified variety

Good quality seed improves plant population and increases production.
            ',

'seed_rate' => '
Seed Rate: 8–10 kg per acre

Using the correct seed rate ensures proper plant spacing and healthy crop growth.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation required
Vegetative Stage: Moderate moisture needed
Flowering Stage: Important for seed formation
Maturity Stage: Reduce irrigation

Linseed requires moderate irrigation and excessive watering should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Plant growth
Phosphorus (P): Root and seed development
Potassium (K): Improves seed quality

Balanced fertilizer application improves yield, oil content, and plant health.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting. Roots and shoots start developing.

2. Seedling Stage  
Young plants develop leaves and establish roots.

3. Vegetative Growth Stage  
Plants grow taller and produce more branches and leaves.

4. Flowering Stage  
Blue flowers bloom and pollination takes place.

5. Capsule Formation Stage  
Seed capsules begin developing after flowering.

6. Seed Maturity Stage  
Seeds become fully mature and plants dry out for harvesting.

Each stage is important for obtaining high-quality linseed production.

",

'types_of_crop' => '
Oilseed Linseed: Grown for oil production
Fiber Flax: Grown for fiber extraction
Dual Purpose Linseed: Used for oil and fiber
Brown Seed Linseed: Common oilseed variety
            ',

'crop_varieties' => '
LS-49: High yield variety
Chandni: Popular linseed variety
Neelum: Good oil quality
Roshni: Disease tolerant variety
            ',

'nutritional_value' => '
Omega-3 Fatty Acids: Heart health
Protein: Body growth
Fiber: Better digestion
Vitamins: Healthy body functions
Minerals: Bone and blood health
            ',

'importance_of_crop' => '
Linseed is an important oilseed crop with high nutritional and industrial value. It provides edible and industrial oil and supports livestock feed production. Linseed also contributes to farmer income and agricultural economy.
            ',

'modern_technologies' => '
Laser land leveling
Drip irrigation
Hybrid seed technology
AI crop monitoring
Modern harvesting machines

Modern technologies help improve linseed production, save resources, and reduce labor costs.
            ',
            ],
            [
                'crop_name' => 'Coriander',

'introduction' => 'Coriander is an important spice and herb crop grown in Pakistan and many other countries. It is widely used in cooking, salads, pickles, and traditional medicines. Both the fresh green leaves and dried seeds are valuable for food preparation. Coriander farming provides good income to farmers because of its high market demand in local and export markets. It grows best in cool and dry climates with moderate irrigation.',

'basic_information' => '
Crop Name: Coriander
Scientific Name: Coriandrum sativum
Crop Type: Rabi (Winter Crop)
Main Use: Spice, Herb, Medicine
Sowing Season: October to November
Harvesting Season: February to March
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Coriander is usually sown from October to November in Pakistan. Farmers sow seeds directly in the field during cool weather conditions. Proper moisture and temperature help good seed germination and healthy plant growth.

Why Coriander is Sown in Winter:

Coriander grows best in cool temperatures. Winter season provides favorable conditions for leaf development and seed formation.
            ',

'harvesting_season' => '
Coriander is harvested from February to March depending on the variety and climate conditions. Green leaves can be harvested earlier while seeds are collected after full maturity.

Why Coriander is Harvested at This Time:

Cool and dry weather during maturity helps proper seed development and improves seed quality and aroma.
            ',

'climate_requirements' => '
Germination Temperature: 15°C – 20°C
Vegetative Growth: 18°C – 25°C
Seed Formation: 20°C – 25°C

Coriander grows well in cool and dry climates. Excessive heat and heavy rainfall can reduce seed quality and yield.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained loamy soil is best for coriander cultivation because it supports proper root growth and prevents waterlogging.
            ',

'land_preparation' => '
Ploughing: Loosens the soil
Leveling: Improves irrigation
Weed Removal: Reduces competition
Organic Matter Addition: Improves fertility

Proper land preparation helps better germination and healthy crop growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and clean
Disease-free
High germination rate
Certified variety

Good quality seed improves plant growth and increases production.
            ',

'seed_rate' => '
Seed Rate: 8–12 kg per acre

Using the recommended seed rate ensures proper plant population and healthy crop growth.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation required
Vegetative Stage: Moderate watering
Flowering Stage: Proper moisture needed
Seed Formation Stage: Irrigation improves yield

Coriander requires moderate irrigation and excess water should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Better seed quality

Balanced fertilizers improve plant health, leaf production, and seed yield.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting. Small roots and shoots develop.

2. Seedling Stage  
Young plants develop green leaves and establish roots.

3. Vegetative Growth Stage  
Plants grow rapidly and produce more leaves and branches.

4. Flowering Stage  
Small white flowers appear and pollination takes place.

5. Seed Formation Stage  
Seeds begin forming and gradually mature.

6. Maturity Stage  
Plants turn yellow-brown and seeds become dry and aromatic.

Each stage is important for obtaining high coriander yield and quality.

",

'types_of_crop' => '
Leaf Coriander: Grown for fresh leaves
Seed Coriander: Grown for spice seeds
Organic Coriander: Chemical-free production
Hybrid Coriander: Improved yield variety
            ',

'crop_varieties' => '
Pak Coriander: Local variety
Sindh Coriander: Suitable for warm regions
Pusa Early Bunching: Early maturity variety
Green Aroma: High leaf production
            ',

'nutritional_value' => '
Vitamins: Supports body health
Fiber: Helps digestion
Calcium: Strengthens bones
Iron: Improves blood health
Antioxidants: Protect body cells
            ',

'importance_of_crop' => '
Coriander is an important spice and herb crop used in homes, restaurants, and food industries. It provides income to farmers and has strong demand in local and international markets. Coriander is also valued for its medicinal and nutritional benefits.
            ',

'modern_technologies' => '
Drip irrigation
Improved seed varieties
Organic farming methods
AI crop monitoring
Modern drying techniques

Modern technologies help farmers improve coriander production, reduce losses, and increase product quality.
            ',
            ],
            [
                'crop_name' => 'SunFlower',

'introduction' => 'Sunflower is an important oilseed crop grown in Pakistan and many other countries. It is mainly cultivated for edible oil production and animal feed. Sunflower oil is widely used in cooking because it is considered healthy and rich in nutrients. Sunflower farming provides good income to farmers due to its high market demand and short growing duration. The crop grows best in warm climates with sufficient sunlight and moderate irrigation.',

'basic_information' => '
Crop Name: Sunflower
Scientific Name: Helianthus annuus
Crop Type: Oilseed Crop
Main Use: Edible Oil, Animal Feed
Sowing Season: January to March and June to July
Harvesting Season: April to May and September to October
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Sunflower is usually sown from January to March for spring cultivation and June to July for autumn cultivation in Pakistan. Warm temperature and proper soil moisture help healthy seed germination and plant growth.

Why Sunflower is Sown in These Seasons:

Sunflower requires warm weather and plenty of sunlight during growth stages. These seasons provide favorable environmental conditions for high yield and oil production.
            ',

'harvesting_season' => '
Sunflower is harvested from April to May and September to October depending on sowing time and climate conditions. The crop is ready when flower heads turn yellow-brown and seeds become hard.

Why Sunflower is Harvested at This Time:

Dry weather during maturity helps proper seed drying and improves oil quality and storage life.
            ',

'climate_requirements' => '
Germination Temperature: 18°C – 25°C
Vegetative Growth: 20°C – 30°C
Seed Development: 22°C – 28°C

Sunflower grows best in warm climates with abundant sunlight. Excessive humidity and waterlogging can reduce crop production.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained loamy soil is ideal for sunflower cultivation because it supports healthy root development and prevents excess moisture.
            ',

'land_preparation' => '
Ploughing: Softens the soil
Leveling: Ensures proper irrigation
Weed Removal: Reduces competition
Organic Matter Addition: Improves fertility

Proper land preparation improves seed germination and healthy crop growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and clean
Disease-free
High oil content
Certified hybrid variety

Good quality seed improves crop production and oil yield.
            ',

'seed_rate' => '
Seed Rate: 2–3 kg per acre

Using the recommended seed rate ensures proper plant spacing and better sunflower production.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation required
Vegetative Stage: Moderate watering
Flowering Stage: Sufficient moisture needed
Seed Filling Stage: Irrigation improves seed development

Sunflower requires moderate irrigation and excess water should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and stem growth
Phosphorus (P): Root development
Potassium (K): Seed quality and disease resistance

Balanced fertilizers improve plant health, seed formation, and oil production.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb water and begin sprouting. Roots and shoots develop.

2. Seedling Stage  
Young plants establish roots and produce green leaves.

3. Vegetative Growth Stage  
Plants grow rapidly and stems become stronger.

4. Bud Formation Stage  
Flower buds begin developing at the top of the plant.

5. Flowering Stage  
Large yellow flowers bloom and pollination takes place.

6. Seed Filling Stage  
Seeds develop inside the flower head and accumulate oil.

7. Maturity Stage  
Flower heads turn yellow-brown and seeds become hard and dry.

Each stage is important for obtaining high sunflower yield and oil quality.

",

'types_of_crop' => '
Oilseed Sunflower: Grown for oil extraction
Confectionery Sunflower: Used for snacks and bakery products
Hybrid Sunflower: High yield variety
Dwarf Sunflower: Short-height variety
            ',

'crop_varieties' => '
Hysun-33: High oil content
NK-212: Hybrid variety
Parsun-1: Early maturity
SMH-9706: Disease resistant variety
            ',

'nutritional_value' => '
Healthy Fats: Energy source
Protein: Body growth
Vitamin E: Healthy skin and immunity
Fiber: Better digestion
Minerals: Bone and heart health
            ',

'importance_of_crop' => '
Sunflower is an important oilseed crop that helps meet edible oil demand in Pakistan. It provides income to farmers and supports the food and oil industries. Sunflower meal is also used as nutritious animal feed.
            ',

'modern_technologies' => '
Hybrid seed technology
Drip irrigation
Laser land leveling
AI crop monitoring
Modern oil extraction techniques

Modern technologies help farmers improve sunflower production, oil quality, and reduce farming costs.
            ',
            ],
            [
                'crop_name' => 'Isabgol',

'introduction' => 'Isabgol is an important medicinal crop grown in Pakistan and many other countries. It is mainly cultivated for its seeds and husk which are widely used in herbal medicines and digestive products. Isabgol is known for its health benefits, especially for improving digestion and treating constipation. The crop provides good income to farmers due to its high demand in pharmaceutical and export markets. It grows best in cool and dry climates with low humidity.',

'basic_information' => '
Crop Name: Isabgol
Scientific Name: Plantago ovata
Crop Type: Rabi (Winter Crop)
Main Use: Medicine, Digestive Products
Sowing Season: October to November
Harvesting Season: March to April
Ideal Temperature: 15°C – 25°C
Water Requirement: Low to Moderate
Best Soil Type: Sandy Loam and Well-drained Soil
Major Areas: Punjab, Sindh, Balochistan
            ',

'sowing_season' => '
Isabgol is usually sown from October to November in Pakistan. Cool weather and proper soil moisture help healthy seed germination and early plant growth.

Why Isabgol is Sown in Winter:

Isabgol requires cool and dry climatic conditions during growth. Winter season provides suitable temperatures for proper plant development and seed formation.
            ',

'harvesting_season' => '
Isabgol is harvested from March to April depending on the variety and climate conditions. The crop is ready when spikes turn brown and seeds become mature.

Why Isabgol is Harvested at This Time:

Dry weather during maturity helps proper seed drying and reduces seed shattering losses during harvesting.
            ',

'climate_requirements' => '
Germination Temperature: 15°C – 20°C
Vegetative Growth: 18°C – 25°C
Seed Maturity: 20°C – 25°C

Isabgol grows best in cool and dry climates. Excess rainfall and high humidity can damage the crop and reduce seed quality.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Light loamy soil
Well-drained fertile soil

Ideal pH: 6.5 – 7.5

Well-drained sandy loam soil is best because it prevents waterlogging and supports healthy root growth.
            ',

'land_preparation' => '
Ploughing: Loosens the soil
Leveling: Improves irrigation management
Weed Removal: Reduces competition
Organic Matter Addition: Improves fertility

Proper land preparation ensures better germination and healthy crop growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and clean
Disease-free
High germination rate
Certified variety

Good quality seed improves crop production and seed quality.
            ',

'seed_rate' => '
Seed Rate: 4–5 kg per acre

Using the correct seed rate helps maintain proper plant population and better yield.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation required
Vegetative Stage: Moderate watering
Flowering Stage: Proper moisture needed
Seed Development Stage: Limited irrigation required

Isabgol requires low to moderate irrigation and excess water should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and stem growth
Phosphorus (P): Root development
Potassium (K): Seed quality improvement

Balanced fertilizers improve plant health, seed formation, and crop production.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting. Small roots and shoots develop.

2. Seedling Stage  
Young plants establish roots and produce green leaves.

3. Vegetative Growth Stage  
Plants grow rapidly and develop more leaves and branches.

4. Spike Formation Stage  
Flower spikes begin developing on the plants.

5. Flowering Stage  
Small flowers bloom and pollination takes place.

6. Seed Development Stage  
Seeds begin forming inside the spikes and gradually mature.

7. Maturity Stage  
Plants turn yellow-brown and seeds become dry and ready for harvesting.

Each stage is important for obtaining high Isabgol yield and quality.

",

'types_of_crop' => '
Medicinal Isabgol: Used in pharmaceutical products
Commercial Isabgol: Grown for export markets
Organic Isabgol: Chemical-free production
Hybrid Isabgol: Improved yield variety
            ',

'crop_varieties' => '
RI-89: High yield variety
GI-2: Popular commercial variety
Niharika: Disease tolerant variety
Haryana Isabgol: Early maturity variety
            ',

'nutritional_value' => '
Dietary Fiber: Improves digestion
Protein: Supports body growth
Minerals: Supports body functions
Natural Husk: Relieves constipation
Antioxidants: Protect body cells
            ',

'importance_of_crop' => '
Isabgol is an important medicinal crop widely used in herbal medicines and digestive products. It provides income to farmers and contributes to the pharmaceutical industry and export economy. Its husk is highly valued for health and medicinal benefits.
            ',

'modern_technologies' => '
Improved seed technology
Drip irrigation
Organic farming methods
AI crop monitoring
Modern seed cleaning and processing

Modern technologies help farmers improve Isabgol production, maintain seed quality, and reduce crop losses.
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
