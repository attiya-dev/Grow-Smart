<?php

namespace Database\Seeders;

use App\Models\Crop;
use App\Models\CropDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropDetailSeeder extends Seeder
{
    
    public function run(): void
    {
        $cropDetails = [

            [
                'crop_name' => 'Rice',

                'introduction' => 'Rice is one of the most important food crops in Pakistan and many other countries. It is a major source of food for millions of people and is widely used in daily meals. Rice farming plays an important role in the agriculture economy because it provides income to farmers and supports export industries. Pakistan is famous for producing high-quality Basmati rice. Rice is mainly grown in warm and humid climates with sufficient water availability.',

                'basic_information' => '
Crop Name: Rice
Scientific Name: Oryza sativa
Crop Type: Kharif (Summer Crop)
Main Use: Food, Biryani, Boiled Rice
Sowing Season: May to July
Harvesting Season: September to November
Ideal Temperature: 20°C – 35°C
Water Requirement: High
Best Soil Type: Clayey and Loamy Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
                ',

                'sowing_season' => '
Rice is usually sown from May to July in Pakistan. Farmers mostly start nursery preparation in May and transplant seedlings in June or July. Warm temperature and sufficient water during this period help proper seed germination and healthy plant growth.

Why Rice is Sown in Summer:

Rice requires warm weather and standing water during most growth stages. Summer season provides high temperature, humidity, and rainfall which are necessary for healthy crop development.
                ',

                'harvesting_season' => '
Rice is harvested from September to November depending on the variety and climate conditions. The crop is ready when grains become hard and the plant turns yellow golden.

Why Rice is Harvested at This Time:

At the end of the rainy season the grains become mature and dry properly. Dry weather during harvesting reduces grain moisture and improves quality.
                ',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 35°C
Grain Formation: 20°C – 25°C

Rice grows best in warm and humid climates with abundant water supply. High temperature and moisture support healthy plant growth and grain development.
                ',

                'soil_requirements' => '
Suitable Soil:
Clay soil
Clay loam soil
Fertile and water-retaining soil

Ideal pH: 5.5 – 7.0

Clayey soil is best because it can hold water for a long time which is necessary for rice cultivation.
                ',

                'land_preparation' => '
Ploughing: Softens the soil
Puddling: Reduces water leakage
Leveling: Uniform water distribution
Weed Removal: Reduces competition

Good land preparation helps better root growth and water management.
                ',

                'seed_selection' => '
Characteristics of Good Seed:
Healthy and clean
Disease-free
High germination rate
Certified variety

Good quality seed produces strong seedlings and improves crop yield.
                ',

                'seed_rate' => '
Nursery Method: 8–10 kg per acre
Direct Seeding: 15–20 kg per acre

Using the correct seed rate ensures healthy plant population and better production.
                ',

                'irrigation_requirements' => '
Nursery Stage: Proper seedling growth
Tillering Stage: More shoot formation
Panicle Initiation: Grain development
Flowering Stage: Better pollination

Rice requires standing water in most stages and usually needs continuous irrigation.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and stem growth
Phosphorus (P): Root development
Potassium (K): Disease resistance

Balanced fertilizers improve plant growth, grain quality, and crop production.
                ',

                'growing_stages' => "

1. Germination Stage  
Seeds absorb water and begin sprouting. Roots and shoots start developing. Warm temperature and moisture are important.

2. Seedling Stage  
Young seedlings grow in the nursery. Green leaves appear and roots become stronger.

3. Transplanting Stage  
Seedlings are moved from nursery to the field. Proper spacing helps healthy growth.

4. Tillering Stage  
Plants produce side shoots called tillers. More tillers increase grain production.

5. Stem Elongation Stage  
Plants grow taller and leaves expand. Nutrients and irrigation are important.

6. Panicle Initiation Stage  
Panicle formation starts inside the stem. Proper care is required.

7. Flowering Stage  
Flowers open and pollination takes place. Weather conditions greatly affect yield.

8. Grain Filling Stage  
Grains fill with starch and nutrients. Water availability is very important.

9. Maturity Stage  
Plants turn golden yellow and grains become hard. Crop becomes ready for harvesting.

Each stage is important for obtaining high rice yield.

",

                'types_of_crop' => '
Basmati Rice: Long grain and aromatic
IRRI Rice: High yield variety
Japonica Rice: Short grain rice
Glutinous Rice: Sticky rice variety
                ',

                'crop_varieties' => '
Super Basmati: Export quality
IRRI-6: High yield
KSK-133: Fine grain variety
Basmati-515: Disease resistant
                ',

                'nutritional_value' => '
Carbohydrates: Main energy source
Protein: Body growth
Fiber: Better digestion
Vitamins: Healthy body functions
Minerals: Bone and blood health
                ',

                'importance_of_crop' => '
Rice is an important staple food for millions of people. It provides employment and income to farmers and contributes greatly to the economy through exports. Rice is also used in food industries and animal feed production.
                ',
            ],

            [
                'crop_name' => 'Cotton',

                'introduction' => 'Cotton is one of the most important cash crops in Pakistan and the world. It is mainly grown for its fiber, which is used in the textile industry to produce clothes, fabrics, and other products. Cotton plays a major role in Pakistan’s economy by supporting farmers, industries, and exports. It is often called "white gold" because of its high economic value.',

                'basic_information' => '
Crop Name: Cotton
Scientific Name: Gossypium hirsutum
Crop Type: Kharif (Summer Crop)
Main Use: Fiber, Textile Industry, Cottonseed oil
Sowing Season: April to June
Harvesting Season: September to December
Ideal Temperature: 21°C – 30°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-drained Soil
Major Areas: Punjab, Sindh, Balochistan
                ',

                'sowing_season' => '
Cotton is usually sown from April to June in Pakistan. Early sowing helps the crop complete its growth cycle before winter. Farmers prefer warm weather for seed germination and early plant development.

Why Cotton is Sown in Summer:

Cotton requires warm temperatures for germination and growth. Summer provides ideal heat and sunlight for healthy plant development and better fiber quality.
                ',

                'harvesting_season' => '
Cotton is harvested from September to December depending on the variety and weather conditions. Picking is done when cotton bolls fully open and become fluffy white.

Why Cotton is Harvested at This Time:

Cool and dry weather during this period helps in better picking and prevents fiber damage and moisture loss.
                ',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 35°C
Boll Formation: 25°C – 32°C

Cotton grows best in warm climates with long sunny days. It requires dry weather during maturity for high-quality fiber production.
                ',

                'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 8.0

Loamy soil with good drainage is best for cotton because it supports root growth and prevents waterlogging.
                ',

                'land_preparation' => '
Ploughing: Breaks and loosens soil
Leveling: Ensures uniform irrigation
Weed Removal: Reduces crop competition
Fertilizer Mixing: Improves soil fertility

Proper land preparation ensures healthy plant establishment and better yield.
                ',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Certified variety
Bt cotton hybrid preferred

Good quality seed ensures strong plants and better fiber production.
                ',

                'seed_rate' => '
Row Sowing: 8–12 kg per acre
Drill Method: 10–15 kg per acre

Correct seed rate ensures proper plant spacing and healthy crop growth.
                ',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing
Vegetative Stage: Regular watering
Flowering Stage: Critical irrigation needed
Boll Formation Stage: Adequate moisture required

Cotton requires moderate irrigation and is sensitive to both drought and waterlogging.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and plant growth
Phosphorus (P): Root development
Potassium (K): Fiber quality improvement

Balanced fertilization increases yield and improves cotton fiber strength.
                ',

                'growing_stages' => "

1. Germination Stage  
Seed absorbs moisture and sprouts. Roots and shoots begin to develop.

2. Seedling Stage  
Young plant grows leaves and develops initial structure.

3. Vegetative Stage  
Plant grows rapidly, producing stems and leaves.

4. Square Formation Stage  
Flower buds (squares) start forming on the plant.

5. Flowering Stage  
Flowers bloom and pollination occurs.

6. Boll Development Stage  
Cotton bolls start forming and expanding.

7. Boll Opening Stage  
Bolls mature and open, revealing cotton fiber.

8. Harvesting Stage  
Cotton is picked manually or mechanically.

Each stage is essential for high-quality cotton fiber production.

",

                'types_of_crop' => '
American Cotton: High yield variety
Egyptian Cotton: Long staple fiber
Desi Cotton: Local traditional variety
Bt Cotton: Genetically modified pest-resistant variety
                ',

                'crop_varieties' => '
FH-142: High yielding variety
MNH-886: Pest resistant
CIM-496: Widely cultivated in Pakistan
Bt Cotton Hybrid: Insect resistant and high productivity
                ',

                'nutritional_value' => '
Cotton Fiber: Used in textile industry
Cottonseed Oil: Used for cooking
Cottonseed Meal: Animal feed
Protein: Present in cottonseed
                ',

                'importance_of_crop' => '
Cotton is a major cash crop that supports Pakistan’s textile industry, which is the backbone of the economy. It provides employment to farmers, factory workers, and exporters. Cotton and its by-products are widely used in clothing, oil production, and animal feed.
                ',
            ],

            [
                'crop_name' => 'Sugarcane',

                'introduction' => 'Sugarcane is an important cash crop in Pakistan and many tropical countries. It is mainly grown for sugar production, but it is also used to produce molasses, ethanol, and jaggery. Sugarcane plays a vital role in the agricultural economy by supporting sugar mills and providing income to farmers. Pakistan is among the major sugarcane-producing countries in the world.',

                'basic_information' => '
Crop Name: Sugarcane
Scientific Name: Saccharum officinarum
Crop Type: Kharif (Summer Crop)
Main Use: Sugar, Jaggery, Ethanol, Molasses
Sowing Season: February to April
Harvesting Season: October to March
Ideal Temperature: 20°C – 35°C
Water Requirement: High
Best Soil Type: Fertile, Loamy, and Well-drained Soil
Major Areas: Punjab, Sindh
                ',

                'sowing_season' => '
Sugarcane is usually planted from February to April in Pakistan. Early planting helps the crop grow for a longer period and increases sugar content. Farmers prefer warm weather for good germination and early root development.

Why Sugarcane is Sown in Spring:

Sugarcane requires warm temperatures for sprouting and long growing periods. Spring season provides ideal conditions for strong cane growth and high sugar accumulation.
                ',

                'harvesting_season' => '
Sugarcane is harvested from October to March depending on the planting time and variety. The crop is ready when canes become thick, juicy, and sugar content is high.

Why Sugarcane is Harvested at This Time:

Cool and dry weather helps in better sugar recovery and reduces moisture loss after harvesting.
                ',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Growth Temperature: 25°C – 35°C
Ripening Stage: 20°C – 30°C

Sugarcane grows best in warm and humid climates with long frost-free periods. High sunlight and water availability are essential for good yield.
                ',

                'soil_requirements' => '
Suitable Soil:
Loamy soil
Clay loam soil
Fertile alluvial soil

Ideal pH: 6.0 – 7.5

Deep, fertile, and well-drained soils are best for sugarcane because it is a long-duration crop with extensive root growth.
                ',

                'land_preparation' => '
Deep ploughing: Loosens soil for root penetration
Leveling: Ensures proper irrigation
Furrow making: Helps in planting setts
Weed removal: Reduces competition

Proper land preparation ensures strong crop establishment and higher yield.
                ',

                'seed_selection' => '
Characteristics of Good Seed (Setts):
Healthy and disease-free
2–3 bud setts
High germination potential
From certified varieties

Good quality seed cane ensures strong plant growth and higher sugar production.
                ',

                'seed_rate' => '
Seed Rate: 25,000 – 35,000 setts per acre

Proper seed rate ensures optimal plant population and uniform crop growth.
                ',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after planting
Tillering Stage: Regular irrigation
Grand Growth Stage: High water requirement
Ripening Stage: Reduced irrigation

Sugarcane requires frequent irrigation due to its long growth period and high water demand.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and stem growth
Phosphorus (P): Root development
Potassium (K): Sugar formation

Balanced fertilizers improve cane yield, sugar content, and overall crop quality.
                ',

                'growing_stages' => "

1. Germination Stage  
Setts sprout and roots begin to develop. Warm soil and moisture are essential.

2. Tillering Stage  
Multiple shoots emerge from the base of the plant.

3. Grand Growth Stage  
Rapid stem elongation and leaf development occur. Water and nutrients are critical.

4. Maturation Stage  
Sugar accumulation increases in canes and growth slows down.

5. Ripening Stage  
Canes become mature, juicy, and ready for harvest.

Each stage is important for maximizing sugarcane yield and sugar content.

",

                'types_of_crop' => '
Early Maturing Varieties: Quick harvest types
Mid Season Varieties: Balanced growth and yield
Late Maturing Varieties: High sugar content
                ',

                'crop_varieties' => '
CP-77-400: High yield variety
HSF-240: Disease resistant
CPF-237: Widely grown in Pakistan
US-658: High sugar recovery variety
                ',

                'nutritional_value' => '
Sugar (Sucrose): Main energy source
Fiber: Supports digestion (from bagasse)
Minerals: Calcium, potassium, magnesium
                ',

                'importance_of_crop' => '
Sugarcane is a major cash crop that supports Pakistan’s sugar industry. It provides raw material for sugar mills, ethanol production, and other industries. It also creates employment opportunities for farmers and factory workers.
                ',
            ],

            [
                'crop_name' => 'Maize (Corn)',

                'introduction' => 'Maize (Corn) is one of the most important cereal crops in Pakistan and around the world. It is used both as human food and animal feed. Maize is also an important industrial crop used in starch, corn oil, glucose, and ethanol production. It plays a significant role in food security and livestock farming in Pakistan.',

                'basic_information' => '
Crop Name: Maize (Corn)
Scientific Name: Zea mays
Crop Type: Kharif (Summer Crop) and Rabi (Winter in some regions)
Main Use: Food, Animal Feed, Starch, Corn Oil, Industrial Products
Sowing Season: February to March (Spring) and July to August (Monsoon)
Harvesting Season: June to July (Spring crop) and October to November (Summer crop)
Ideal Temperature: 18°C – 32°C
Water Requirement: Moderate
Best Soil Type: Fertile, Well-drained Loamy Soil
Major Areas: Punjab, KPK, Sindh
                ',

                'sowing_season' => '
Maize is usually sown in two main seasons in Pakistan: spring (February–March) and summer (July–August). Farmers choose the season based on irrigation availability and market demand.

Why Maize is Sown in These Seasons:

Maize requires warm temperatures for germination and early growth. Both spring and monsoon seasons provide suitable conditions for healthy crop development.
                ',

                'harvesting_season' => '
Maize is harvested 3–4 months after sowing. Spring crop is harvested in June–July, while summer crop is harvested in October–November.

Why Maize is Harvested at This Time:

The crop is harvested when cobs become fully mature and kernels harden. Dry weather ensures better grain quality and storage life.
                ',

                'climate_requirements' => '
Germination Temperature: 18°C – 25°C
Vegetative Growth: 20°C – 30°C
Reproductive Stage: 22°C – 32°C

Maize grows best in warm climates with moderate rainfall and good sunlight. Extreme cold or waterlogging reduces yield.
                ',

                'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 5.8 – 7.5

Fertile, well-drained soil is ideal for maize because it supports strong root growth and nutrient absorption.
                ',

                'land_preparation' => '
Deep ploughing: Improves soil aeration
Harrowing: Breaks soil clods
Leveling: Ensures uniform irrigation
Weed removal: Reduces competition

Proper land preparation helps in better germination and crop establishment.
                ',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Hybrid or certified seed
Good genetic purity

Good quality seed ensures strong plant growth and higher yield.
                ',

                'seed_rate' => '
Seed Rate:
Hybrid varieties: 8–10 kg per acre
Local varieties: 10–12 kg per acre

Correct seed rate ensures proper plant spacing and better yield.
                ',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing
Vegetative Stage: Regular irrigation every 7–10 days
Tasseling Stage: Critical irrigation required
Grain Filling Stage: Adequate moisture needed

Maize requires moderate irrigation, but water stress during tasseling reduces yield significantly.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and plant growth
Phosphorus (P): Root development
Potassium (K): Grain filling and strength

Balanced fertilization improves yield, cob size, and grain quality.
                ',

                'growing_stages' => "

1. Germination Stage  
Seed absorbs moisture and sprouts. Roots and shoots develop quickly in warm soil.

2. Seedling Stage  
Young plant develops leaves and strong roots.

3. Vegetative Stage  
Rapid plant growth with strong stem and leaf development.

4. Tasseling Stage  
Male flowers (tassels) appear at the top of the plant.

5. Silking Stage  
Female flowers (silks) emerge from the cob.

6. Pollination Stage  
Pollen transfer occurs, leading to kernel formation.

7. Grain Filling Stage  
Kernels fill with starch and nutrients.

8. Maturity Stage  
Cobs become dry and ready for harvesting.

Each stage is important for achieving high maize yield.

",

                'types_of_crop' => '
Sweet Corn: Used for human consumption
Field Corn: Used for animal feed and industry
Popcorn: Used for snacks
Flint Corn: Hard kernel variety
                ',

                'crop_varieties' => '
Pioneer 30Y87: High yield hybrid
DK-919: Disease resistant
Agaiti-2002: Widely grown in Pakistan
Sahiwal Gold: Local improved variety
                ',

                'nutritional_value' => '
Carbohydrates: Energy source
Protein: Muscle growth
Fiber: Digestive health
Vitamins: Vitamin A, B-complex
Minerals: Iron, magnesium, phosphorus
                ',

                'importance_of_crop' => '
Maize is an important food and feed crop that supports both human consumption and livestock industry. It is also used in many industrial products such as starch, oil, and biofuel. It contributes significantly to Pakistan’s agriculture economy.
                ',
            ],

            [
                'crop_name' => 'Sorghum',

                'introduction' => 'Sorghum is an important cereal and fodder crop grown in arid and semi-arid regions of Pakistan and many other countries. It is used for human food, animal feed, and fodder purposes. Sorghum is highly drought-resistant and plays a vital role in ensuring food and fodder security in dry areas. It is commonly known as "Jowar" in South Asia.',

                'basic_information' => '
Crop Name: Sorghum (Jowar)
Scientific Name: Sorghum bicolor
Crop Type: Kharif (Summer Crop)
Main Use: Food, Fodder, Animal Feed, Industrial Uses
Sowing Season: March to July
Harvesting Season: June to October
Ideal Temperature: 25°C – 35°C
Water Requirement: Low to Moderate
Best Soil Type: Sandy loam and Loamy soil
Major Areas: Punjab, Sindh, KPK
                ',

                'sowing_season' => '
Sorghum is usually sown from March to July in Pakistan depending on rainfall conditions. It is often grown in rainfed areas where irrigation is limited.

Why Sorghum is Sown in Summer:

Sorghum is a drought-tolerant crop that grows well in hot conditions. Summer and monsoon seasons provide enough warmth and moisture for germination and early growth.
                ',

                'harvesting_season' => '
Sorghum is harvested from June to October depending on the sowing time and variety. The crop is ready when grains become hard and plants turn dry.

Why Sorghum is Harvested at This Time:

Dry and warm weather helps in proper grain drying and reduces post-harvest losses.
                ',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 35°C
Grain Development: 25°C – 32°C

Sorghum grows best in hot, dry climates and can tolerate drought conditions better than most cereal crops.
                ',

                'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained light soils

Ideal pH: 6.0 – 7.5

Sorghum can grow in poor soils but performs best in well-drained fertile soils with good moisture retention.
                ',

                'land_preparation' => '
Ploughing: Loosens soil for root growth
Harrowing: Breaks soil clods
Leveling: Ensures uniform moisture distribution
Weed Control: Reduces competition

Proper land preparation improves germination and plant establishment.
                ',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Certified or hybrid seed
Uniform grain size

Good seed ensures better crop establishment and higher yield.
                ',

                'seed_rate' => '
Seed Rate:
Grain purpose: 8–10 kg per acre
Fodder purpose: 12–15 kg per acre

Proper seed rate ensures healthy plant density and good fodder/grain production.
                ',

                'irrigation_requirements' => '
Initial Stage: Light irrigation or rainfall
Vegetative Stage: Moderate irrigation if available
Flowering Stage: Critical water requirement
Grain Filling Stage: Moisture required for better yield

Sorghum is drought-tolerant but timely irrigation improves production.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and stem growth
Phosphorus (P): Root development
Potassium (K): Strength and drought resistance

Balanced fertilization increases yield and improves fodder quality.
                ',

                'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout. Roots and shoots develop quickly.

2. Seedling Stage  
Young plants develop leaves and establish root systems.

3. Vegetative Stage  
Rapid growth of stems and leaves occurs.

4. Booting Stage  
Flower head develops inside the stem.

5. Flowering Stage  
Pollination occurs and grain formation begins.

6. Grain Filling Stage  
Grains develop and fill with nutrients.

7. Maturity Stage  
Plant dries and grains become hard and ready for harvest.

Each stage is important for achieving good sorghum yield.

",

                'types_of_crop' => '
Grain Sorghum: Used for human consumption
Fodder Sorghum: Used for animal feed
Sweet Sorghum: Used for syrup and biofuel production
Forage Sorghum: High biomass for livestock
                ',

                'crop_varieties' => '
JS-263: High yielding variety
F-11 Sorghum: Fodder type
Hegari: Drought resistant variety
YSS-98: Improved grain variety
                ',

                'nutritional_value' => '
Carbohydrates: Energy source
Protein: Body and animal growth
Fiber: Digestive health
Minerals: Iron, calcium, potassium
Antioxidants: Health benefits
                ',

                'importance_of_crop' => '
Sorghum is an important drought-resistant crop that provides food, fodder, and industrial raw materials. It is essential for livestock feeding in dry areas and contributes to food security in arid regions of Pakistan.
                ',
            ],

            [
                'crop_name' => 'Pearl Millet',

                'introduction' => 'Pearl Millet, commonly known as Bajra, is an important cereal and fodder crop grown in arid and semi-arid regions of Pakistan and other dry countries. It is a highly drought-resistant crop and is mainly used as food for humans and fodder for livestock. Bajra plays a key role in ensuring food security in dryland farming systems.',

                'basic_information' => '
Crop Name: Pearl Millet (Bajra)
Scientific Name: Pennisetum glaucum
Crop Type: Kharif (Summer Crop)
Main Use: Food, Fodder, Animal Feed
Sowing Season: June to July
Harvesting Season: September to November
Ideal Temperature: 25°C – 35°C
Water Requirement: Low
Best Soil Type: Sandy and Loamy Soil
Major Areas: Punjab, Sindh, Balochistan
                ',

                'sowing_season' => '
Pearl Millet is usually sown in June to July in Pakistan, especially in rainfed and dry areas where other crops cannot grow easily.

Why Pearl Millet is Sown in Summer:

It is a drought-tolerant crop that grows well in high temperatures and low rainfall conditions. Monsoon season provides enough moisture for germination and early growth.
                ',

                'harvesting_season' => '
Pearl Millet is harvested from September to November when the grains become hard and mature.

Why Pearl Millet is Harvested at This Time:

Dry weather helps in proper drying of grains and reduces post-harvest losses, improving storage quality.
                ',

                'climate_requirements' => '
Germination Temperature: 25°C – 30°C
Vegetative Growth: 25°C – 35°C
Grain Formation: 28°C – 35°C

Pearl Millet grows best in hot, dry climates and is highly resistant to drought and high temperatures.
                ',

                'soil_requirements' => '
Suitable Soil:
Sandy soil
Sandy loam soil
Poor to moderately fertile soil

Ideal pH: 5.5 – 7.5

It can grow in low-fertility soils but performs better in well-drained soils.
                ',

                'land_preparation' => '
Ploughing: Loosens soil for seed placement
Harrowing: Breaks soil clumps
Leveling: Ensures uniform moisture distribution
Weed Removal: Reduces competition

Simple land preparation is enough due to its hardy nature.
                ',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Certified variety
Uniform seed size

Good seed ensures better crop establishment and higher yield.
                ',

                'seed_rate' => '
Seed Rate:
3–5 kg per acre (grain purpose)
5–7 kg per acre (fodder purpose)

Proper seed rate ensures healthy plant population and good yield.
                ',

                'irrigation_requirements' => '
Initial Stage: Light irrigation or rainfall sufficient
Vegetative Stage: Minimal irrigation
Flowering Stage: Moisture required for better yield
Grain Filling Stage: Moderate water requirement

Pearl Millet is highly drought-resistant and requires very little irrigation compared to other crops.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Growth of leaves and stems
Phosphorus (P): Root development
Potassium (K): Drought resistance and grain quality

Low fertilizer input is required compared to other cereal crops.
                ',

                'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout quickly in warm soil.

2. Seedling Stage  
Young plants develop roots and leaves.

3. Tillering Stage  
Plant produces multiple shoots.

4. Stem Elongation Stage  
Plant grows taller and stronger.

5. Flowering Stage  
Flower heads develop and pollination occurs.

6. Grain Filling Stage  
Grains develop and mature.

7. Maturity Stage  
Plant dries and becomes ready for harvest.

Each stage contributes to final yield and fodder quality.

",

                'types_of_crop' => '
Grain Pearl Millet: Used for human food
Fodder Pearl Millet: Used for animal feed
Hybrid Millet: High yield improved varieties
Traditional Millet: Local drought-resistant types
                ',

                'crop_varieties' => '
ICMV-221: High yielding variety
Sona Bajra: Widely grown in Pakistan
MBH-163: Hybrid variety
Afri-1: Drought tolerant variety
                ',

                'nutritional_value' => '
Carbohydrates: Energy source
Protein: Muscle growth
Fiber: Digestive health
Iron: Helps prevent anemia
Magnesium: Supports body functions
                ',

                'importance_of_crop' => '
Pearl Millet is an important crop for dry regions as it provides food and fodder under harsh climatic conditions. It supports livestock feeding and contributes to food security in areas with low rainfall.
                ',
            ],

            [
                'crop_name' => 'Bottle Gourd',

                'introduction' => 'Bottle Gourd, commonly known as Lauki, is an important vegetable crop grown in Pakistan and many tropical countries. It is widely used in daily cooking due to its high nutritional value and easy digestibility. Bottle gourd is a fast-growing vine crop and plays an important role in vegetable farming and household nutrition.',

                'basic_information' => '
Crop Name: Bottle Gourd (Lauki)
Scientific Name: Lagenaria siceraria
Crop Type: Kharif and Spring Vegetable Crop
Main Use: Vegetable, Juice, Medicinal Uses
Sowing Season: February to March (Spring) and June to July (Summer)
Harvesting Season: April to June and August to October
Ideal Temperature: 22°C – 32°C
Water Requirement: Moderate
Best Soil Type: Sandy loam and Loamy soil
Major Areas: Punjab, Sindh, KPK
                ',

                'sowing_season' => '
Bottle gourd is usually sown in February–March for spring crop and June–July for summer crop in Pakistan.

Why Bottle Gourd is Sown in These Seasons:

It grows best in warm weather. Moderate temperature and humidity in these seasons support fast germination and vine growth.
                ',

                'harvesting_season' => '
Bottle gourd is harvested within 60–90 days after sowing depending on variety and season. Fruits are picked when they are young and tender.

Why Bottle Gourd is Harvested Early:

Early harvesting ensures soft texture, better taste, and higher market value. Over-mature fruits become hard and less edible.
                ',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 22°C – 32°C
Fruit Development: 24°C – 30°C

Bottle gourd grows best in warm and humid climates. It cannot tolerate frost and requires mild weather conditions for best yield.
                ',

                'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Fertile, well-drained soil rich in organic matter is best for healthy vine growth and fruit production.
                ',

                'land_preparation' => '
Ploughing: Loosens soil for root growth
Bed Formation: Raised beds for better drainage
Fertilizer Mixing: Improves soil fertility
Weed Removal: Reduces competition

Proper land preparation helps in better vine spread and fruit development.
                ',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Uniform and healthy seeds
Certified variety

Good seed ensures strong vine growth and higher fruit yield.
                ',

                'seed_rate' => '
Seed Rate: 2–3 kg per acre

Proper seed rate ensures healthy plant spacing and good vine development.
                ',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing
Vegetative Stage: Regular watering every 7–10 days
Flowering Stage: Adequate moisture required
Fruit Development Stage: Frequent irrigation needed

Bottle gourd requires consistent moisture but does not tolerate waterlogging.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Vine and leaf growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit quality and size

Balanced fertilizers improve yield, fruit size, and plant health.
                ',

                'growing_stages' => "

1. Germination Stage  
Seeds sprout and roots develop in warm soil.

2. Seedling Stage  
Young plants develop vines and leaves.

3. Vine Growth Stage  
Rapid vine spreading occurs with strong leaf development.

4. Flowering Stage  
Male and female flowers appear on the plant.

5. Fruit Formation Stage  
Fruits begin to develop after pollination.

6. Fruit Development Stage  
Fruits grow in size and mature.

7. Harvesting Stage  
Fruits are picked when tender and green.

Each stage is important for achieving good vegetable yield.

",

                'types_of_crop' => '
Long Bottle Gourd: Cylindrical shape
Round Bottle Gourd: Ball-shaped variety
Hybrid Varieties: High yield improved types
Local Varieties: Traditional regional types
                ',

                'crop_varieties' => '
Pusa Naveen: High yielding variety
Arka Bahar: Disease resistant
Punjab Lauki-1: Local improved variety
Kashi Ganga: Popular hybrid variety
                ',

                'nutritional_value' => '
Water: High hydration content
Fiber: Improves digestion
Vitamins: Vitamin C, Vitamin B
Minerals: Calcium, magnesium, potassium
Low Calories: Good for weight control
                ',

                'importance_of_crop' => '
Bottle gourd is an important vegetable crop that provides nutritious food and supports farmers income. It is widely consumed in households due to its health benefits and easy digestibility.
                ',
            ],

            [
                'crop_name' => 'Okra',

                'introduction' => 'Okra, commonly known as Lady Finger or Bhindi, is an important vegetable crop grown in Pakistan and many tropical and subtropical regions. It is widely used in daily cooking due to its taste and nutritional value. Okra is a fast-growing vegetable crop that provides good income to farmers and is highly demanded in local markets.',

                'basic_information' => '
Crop Name: Okra (Lady Finger / Bhindi)
Scientific Name: Abelmoschus esculentus
Crop Type: Kharif and Summer Vegetable Crop
Main Use: Vegetable, Culinary Use, Medicinal Benefits
Sowing Season: February to March and June to July
Harvesting Season: April to June and August to October
Ideal Temperature: 22°C – 35°C
Water Requirement: Moderate
Best Soil Type: Sandy loam and Loamy soil
Major Areas: Punjab, Sindh, KPK
                ',

                'sowing_season' => '
Okra is usually sown in February–March for spring crop and June–July for summer crop in Pakistan.

Why Okra is Sown in These Seasons:

Okra grows best in warm temperatures. Spring and summer provide ideal heat and sunlight for seed germination and fast plant growth.
                ',

                'harvesting_season' => '
Okra is harvested 45–60 days after sowing and continues for several weeks. Pods are picked when they are young and tender.

Why Okra is Harvested Early:

Early harvesting ensures soft texture, better taste, and higher market value. Overgrown pods become hard and fibrous.
                ',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 35°C
Fruit Development: 25°C – 35°C

Okra grows best in warm and sunny climates. It is sensitive to frost and performs poorly in cold weather.
                ',

                'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Fertile, well-drained soil rich in organic matter supports healthy plant growth and pod development.
                ',

                'land_preparation' => '
Ploughing: Loosens soil for root development
Bed Formation: Raised beds for better drainage
Weed Removal: Reduces competition
Fertilizer Mixing: Improves soil fertility

Proper land preparation ensures strong plant growth and high yield.
                ',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Certified hybrid or improved variety
Uniform seed size

Good seed ensures healthy plant establishment and better yield.
                ',

                'seed_rate' => '
Seed Rate: 4–6 kg per acre

Proper seed rate ensures balanced plant spacing and good crop growth.
                ',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing
Vegetative Stage: Regular watering every 7–10 days
Flowering Stage: Adequate moisture required
Fruit Development Stage: Frequent irrigation needed

Okra requires moderate irrigation but is sensitive to both drought and waterlogging.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and plant growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit quality and yield improvement

Balanced fertilizers improve pod quality, yield, and plant health.
                ',

                'growing_stages' => "

1. Germination Stage  
Seeds absorb water and sprout within a few days in warm soil.

2. Seedling Stage  
Young plants develop leaves and roots.

3. Vegetative Growth Stage  
Rapid growth of stems and leaves occurs.

4. Flowering Stage  
Flowers appear on the plant and pollination begins.

5. Pod Formation Stage  
Young okra pods start developing.

6. Harvesting Stage  
Tender pods are picked regularly for best quality.

Each stage is important for achieving high okra yield.

",

                'types_of_crop' => '
Green Okra: Commonly grown variety
Hybrid Okra: High yield and disease resistant
Local Varieties: Traditional regional types
Long Pod Okra: Preferred for market sale
                ',

                'crop_varieties' => '
Sabz Pari: High yielding variety
Arka Anamika: Disease resistant hybrid
Pusa Sawani: Popular in South Asia
Punjab Selection: Local improved variety
                ',

                'nutritional_value' => '
Fiber: Improves digestion
Vitamin C: Boosts immunity
Vitamin K: Bone health
Folate: Supports growth and development
Minerals: Calcium, potassium, magnesium
                ',

                'importance_of_crop' => '
Okra is an important vegetable crop that provides nutrition and income to farmers. It is widely consumed in households and contributes to a healthy diet due to its fiber and vitamin content.
                ',
            ],

            [
                'crop_name' => 'Tomato',

                'introduction' => 'Tomatoes are one of the most widely grown vegetable crops in Pakistan and around the world. They are an essential ingredient in daily cooking and are used in salads, curries, sauces, ketchup, and processed food products. Tomato farming provides good income to farmers due to high demand in local and international markets.',

                'basic_information' => '
Crop Name: Tomatoes
Scientific Name: Solanum lycopersicum
Crop Type: Rabi and Kharif Vegetable Crop
Main Use: Vegetable, Sauces, Ketchup, Salad
Sowing Season: November to February and June to July
Harvesting Season: March to June and September to November
Ideal Temperature: 18°C – 27°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
                ',

                'sowing_season' => '
Tomatoes are sown in two main seasons in Pakistan: winter (November–February) and summer (June–July).

Why Tomatoes are Sown in These Seasons:

Tomatoes grow best in mild temperatures. Extreme heat or frost can damage plant growth and reduce yield.
                ',

                'harvesting_season' => '
Tomatoes are harvested 60–90 days after transplanting depending on variety and weather conditions.

Why Tomatoes are Harvested at This Time:

Fruits are picked when they reach full size and start changing color to ensure best taste, quality, and market value.
                ',

                'climate_requirements' => '
Germination Temperature: 20°C – 25°C
Vegetative Growth: 18°C – 25°C
Fruit Development: 20°C – 27°C

Tomatoes grow best in mild climates and are sensitive to extreme heat, frost, and heavy rainfall.
                ',

                'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.0

Well-drained soil rich in organic matter ensures healthy plant growth and high yield.
                ',

                'land_preparation' => '
Ploughing: Loosens the soil for root development
Bed Formation: Raised beds improve drainage
Weed Removal: Reduces competition
Fertilizer Mixing: Improves soil fertility

Proper land preparation ensures healthy tomato plants and better production.
                ',

                'seed_selection' => '
Characteristics of Good Seed:
Disease-free
High germination rate
Certified hybrid or improved variety
Uniform seed quality

Good quality seeds ensure strong seedlings and higher yield.
                ',

                'seed_rate' => '
Seed Rate: 100–150 grams per acre (nursery seed)

Seedlings are transplanted after 25–35 days for better growth.
                ',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after transplanting
Vegetative Stage: Regular watering every 7–10 days
Flowering Stage: Controlled irrigation
Fruit Development Stage: Moderate but consistent watering

Tomatoes need balanced irrigation; excess water can cause root diseases and fruit cracking.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and plant growth
Phosphorus (P): Root development
Potassium (K): Fruit size, color, and quality

Balanced fertilizers improve yield, taste, and fruit quality.
                ',

                'growing_stages' => "

1. Germination Stage  
Seeds sprout in nursery beds.

2. Seedling Stage  
Young plants develop leaves and roots.

3. Transplanting Stage  
Seedlings are moved to the field.

4. Vegetative Stage  
Plant grows stems and leaves rapidly.

5. Flowering Stage  
Flowers appear and pollination begins.

6. Fruit Formation Stage  
Small green fruits develop.

7. Fruit Ripening Stage  
Fruits turn red and mature.

8. Harvesting Stage  
Ripe tomatoes are picked carefully.

Each stage is important for high-quality tomato production.

",

                'types_of_crop' => '
Cherry Tomatoes: Small and sweet
Roma Tomatoes: Used for sauces
Beef Tomatoes: Large size variety
Hybrid Tomatoes: High yield varieties
                ',

                'crop_varieties' => '
Roma VF: Disease resistant variety
Riogrande: Widely cultivated
Nagina: Local Pakistani variety
T-135: High yielding hybrid
                ',

                'nutritional_value' => '
Vitamin C: Boosts immunity
Vitamin A: Eye health
Potassium: Controls blood pressure
Fiber: Improves digestion
Antioxidants: Protect against diseases
                ',

                'importance_of_crop' => '
Tomatoes are an important vegetable crop that supports daily nutrition and provides good income to farmers. They are widely used in households and food industries.
                ',
            ],

            [
                'crop_name' => 'Pumpkin',

                'introduction' => 'Pumpkin is an important vegetable crop grown in Pakistan and many other countries. It is widely used in cooking, soups, sweets, and traditional dishes. Pumpkin is highly nutritious and provides vitamins, minerals, and fiber. It is a trailing vine crop that grows well in warm climates and provides good income to farmers.',

                'basic_information' => '
Crop Name: Pumpkin
Scientific Name: Cucurbita pepo
Crop Type: Kharif and Summer Vegetable Crop
Main Use: Vegetable, Sweets, Soups, Cooking
Sowing Season: February to March and June to July
Harvesting Season: May to July and September to November
Ideal Temperature: 22°C – 32°C
Water Requirement: Moderate
Best Soil Type: Sandy loam and Loamy soil
Major Areas: Punjab, Sindh, KPK, Balochistan
                ',

                'sowing_season' => '
Pumpkin is usually sown in February–March and June–July in Pakistan.

Why Pumpkin is Sown in These Seasons:

It grows best in warm weather. These seasons provide ideal temperature and sunlight for vine growth and fruit development.
                ',

                'harvesting_season' => '
Pumpkin is harvested 90–120 days after sowing depending on variety.

Why Pumpkin is Harvested at This Time:

Fruits are harvested when they are fully mature, hard, and develop a deep color for better taste and storage life.
                ',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 22°C – 32°C
Fruit Development: 25°C – 30°C

Pumpkin grows best in warm climates and cannot tolerate frost or extreme cold conditions.
                ',

                'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Fertile soil rich in organic matter supports strong vine growth and fruit development.
                ',

                'land_preparation' => '
Ploughing: Loosens soil for root growth
Bed Formation: Raised beds improve drainage
Weed Removal: Reduces competition
Fertilizer Mixing: Improves soil fertility

Proper land preparation ensures healthy vine growth and high yield.
                ',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free
Uniform and healthy seeds
Certified hybrid variety

Good seed ensures strong plant growth and better fruit production.
                ',

                'seed_rate' => '
Seed Rate: 2–3 kg per acre

Proper spacing ensures healthy vine spreading and fruit development.
                ',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing
Vegetative Stage: Regular watering every 7–10 days
Flowering Stage: Adequate moisture required
Fruit Development Stage: Frequent irrigation needed

Pumpkin requires consistent moisture but does not tolerate waterlogging.
                ',

                'fertilizer_requirements' => '
Nitrogen (N): Vine and leaf growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit size, quality, and shelf life

Balanced fertilizers improve yield and fruit quality.
                ',

                'growing_stages' => "

1. Germination Stage  
Seeds sprout in warm soil conditions.

2. Seedling Stage  
Young vines begin to grow leaves.

3. Vine Growth Stage  
Rapid spreading of vines and leaves.

4. Flowering Stage  
Male and female flowers appear.

5. Fruit Formation Stage  
Small pumpkins begin to develop.

6. Fruit Development Stage  
Fruits grow in size and harden.

7. Harvesting Stage  
Mature pumpkins are harvested.

Each stage is important for achieving high yield.

",

                'types_of_crop' => '
Round Pumpkin: Small and round variety
Long Pumpkin: Cylindrical shape
Hybrid Pumpkin: High yielding variety
Local Pumpkin: Traditional varieties
                ',

                'crop_varieties' => '
Arka Suryamukhi: High yielding variety
Pusa Vishwas: Disease resistant
Punjab Pumpkin-1: Local improved variety
Kashi Harit: Hybrid variety
                ',

                'nutritional_value' => '
Vitamin A: Eye health
Vitamin C: Immunity boost
Fiber: Digestive health
Potassium: Blood pressure control
Antioxidants: Disease prevention
                ',

                'importance_of_crop' => '
Pumpkin is an important vegetable crop that provides nutrition and income to farmers. It is widely used in cooking and traditional foods and supports a healthy diet.
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
