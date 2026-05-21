<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\CropDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropDetail2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cropDetails = [
            [
                 'crop_name' => 'Mango',

'introduction' => 'Mango is one of the most important fruit crops in Pakistan and is known as the “King of Fruits.” It is loved for its sweet taste, rich aroma, and nutritional value. Mango farming plays a major role in Pakistan’s agriculture economy, especially in Punjab and Sindh. Pakistan is one of the largest mango-producing countries in the world and exports high-quality varieties to many countries. Mango grows best in warm tropical and subtropical climates.',

'basic_information' => '
Crop Name: Mango
Scientific Name: Mangifera indica
Crop Type: Fruit Crop (Tropical)
Main Use: Fresh fruit, Juice, Desserts, Pickles
Flowering Season: February to April
Harvesting Season: May to September
Ideal Temperature: 24°C – 30°C
Water Requirement: Moderate
Best Soil Type: Deep, well-drained sandy loam soil
Major Areas: Punjab, Sindh
',

'sowing_season' => '
Mango is generally propagated through grafting rather than sowing seeds in commercial farming. Planting of young grafted plants is usually done in July to September (monsoon season) or February to March in some regions.

Why Mango is Planted in These Seasons:

These seasons provide moderate temperature and enough moisture for root establishment and early plant growth without extreme heat stress.
',

'harvesting_season' => '
Mango is harvested from May to September depending on the variety and region. Fruits are picked when they reach proper size, color, and aroma but are still firm.

Why Mango is Harvested at This Time:

Warm weather during summer allows proper fruit ripening, sweetness development, and good market demand.
',

'climate_requirements' => '
Germination/Plant Growth Temperature: 24°C – 30°C
Flowering Stage: 20°C – 25°C (cool and dry weather preferred)
Fruit Development: 25°C – 35°C

Mango grows best in tropical and subtropical climates with long, hot summers and mild winters. Frost and extremely low temperatures can damage the crop.
',

'soil_requirements' => '
Suitable Soil:
Deep sandy loam soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Mango trees require deep soil for strong root development and proper nutrient absorption. Waterlogging should be avoided.
',

'land_preparation' => '
Ploughing: Deep ploughing for loosening soil
Pit Digging: Large pits prepared for planting grafted plants
Organic Manure: Mixed with soil for fertility
Leveling: Ensures proper irrigation

Proper land preparation helps strong root establishment and healthy tree growth.
',

'seed_selection' => '
Characteristics of Good Planting Material:
Healthy grafted saplings
Disease-free plants
Strong root system
Certified nursery plants

Grafted plants ensure better fruit quality and early production compared to seed-grown plants.
',

'seed_rate' => '
Planting Density: 20–30 feet spacing between trees
Plants per acre: 40–70 mango trees (depending on variety and spacing)

Proper spacing ensures good sunlight, airflow, and fruit development.
',

'irrigation_requirements' => '
Young Plants: Frequent watering (every 7–10 days)
Flowering Stage: Controlled irrigation to avoid flower drop
Fruit Development: Regular watering for better fruit size
Mature Trees: Irrigation during dry periods

Mango requires moderate irrigation, but overwatering should be avoided.
',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and shoot growth
Phosphorus (P): Root development and flowering
Potassium (K): Fruit size, sweetness, and quality

Organic manure also improves soil health and long-term productivity.
',

'growing_stages' => "

1. Vegetative Stage  
Plant develops leaves, branches, and roots. Strong structure is formed.

2. Flowering Stage  
Flower buds appear and bloom. Weather plays an important role in fruit setting.

3. Fruit Setting Stage  
Small fruits begin to form after successful pollination.

4. Fruit Development Stage  
Fruits grow in size and nutrients accumulate.

5. Maturity Stage  
Fruits become full-sized, develop color, aroma, and sweetness.

6. Harvesting Stage  
Fruits are carefully picked for market or consumption.

Each stage is important for high-quality mango production.

",

'types_of_crop' => '
Desi Mango: Local traditional varieties
Hybrid Mango: Improved yield varieties
',

'crop_varieties' => '
Chaunsa: Sweet and highly popular
Sindhri: Large size and early season variety
Anwar Ratol: Small but very sweet
Langra: Famous for strong flavor
Dussehri: Soft and aromatic
',

'nutritional_value' => '
Carbohydrates: Energy source
Vitamin C: Boosts immunity
Vitamin A: Good for eyesight
Fiber: Improves digestion
Antioxidants: Protect body cells
',

'importance_of_crop' => '
Mango is a major fruit crop that supports farmers’ income and contributes significantly to Pakistan’s export earnings. It is widely consumed fresh and also used in juices, jams, pickles, and desserts. Mango farming provides employment in rural areas and is an important part of the agricultural economy.
',

'modern_technologies' => '
Drip irrigation systems
High-density plantation techniques
Grafting technology
Pest management using bio-control
Cold storage and export packaging systems

Modern techniques help improve mango yield, quality, and export value.
',
            ],
            [
                'crop_name' => 'Lychee',

'introduction' => 'Lychee is a popular tropical and subtropical fruit crop known for its sweet, juicy, and aromatic fruit. It is widely grown in South Asia, especially in China, India, and Pakistan. In Pakistan, lychee is an important seasonal fruit that contributes to farmers’ income and local fruit markets. Lychee trees require warm climates with high humidity and are mainly grown for fresh consumption.',

'basic_information' => '
Crop Name: Lychee
Scientific Name: Litchi chinensis
Crop Type: Fruit Crop (Subtropical)
Main Use: Fresh fruit, Juice, Desserts
Flowering Season: February to April
Harvesting Season: May to July
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate to High
Best Soil Type: Deep, well-drained loamy soil
Major Areas: Punjab (especially Gujranwala, Sargodha), Sindh
',

'sowing_season' => '
Lychee is propagated through air layering, grafting, or seedlings rather than direct sowing. New plants are usually planted in the field during spring (February to March) or monsoon season (July to August).

Why Lychee is Planted in These Seasons:

These seasons provide warm temperatures and adequate moisture, which help young plants establish strong roots and grow properly.
',

'harvesting_season' => '
Lychee is harvested from May to July in Pakistan when fruits turn red and develop full sweetness and aroma.

Why Lychee is Harvested at This Time:

Warm summer weather helps fruits ripen properly, develop sugar content, and achieve good market quality.
',

'climate_requirements' => '
Germination/Plant Growth Temperature: 20°C – 30°C
Flowering Stage: 15°C – 25°C (mild and dry conditions preferred)
Fruit Development: 25°C – 35°C

Lychee grows best in warm subtropical climates with high humidity. It is sensitive to frost and extremely dry conditions.
',

'soil_requirements' => '
Suitable Soil:
Deep loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Lychee requires deep soil for strong root development. Waterlogging should be avoided as it can damage roots.
',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Pit Preparation: Large pits dug for planting saplings
Organic Matter: Added to improve fertility
Leveling: Ensures proper irrigation and drainage

Proper land preparation helps healthy root establishment and tree growth.
',

'seed_selection' => '
Characteristics of Good Planting Material:
Healthy air-layered plants
Disease-free saplings
Strong root system
High-quality nursery plants

Air-layered plants are preferred for faster fruit production and better quality.
',

'seed_rate' => '
Planting Density: 20–25 feet spacing between trees
Plants per acre: 70–100 trees (depending on spacing and variety)

Proper spacing ensures good airflow, sunlight, and fruit development.
',

'irrigation_requirements' => '
Young Plants: Frequent irrigation for root establishment
Flowering Stage: Controlled watering to avoid flower drop
Fruit Development: Regular watering for better fruit size
Mature Trees: Irrigation during dry periods

Lychee requires consistent moisture but does not tolerate waterlogging.
',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and shoot growth
Phosphorus (P): Root development and flowering
Potassium (K): Fruit quality, sweetness, and color

Organic manure improves soil fertility and long-term productivity.
',

'growing_stages' => "

1. Vegetative Stage  
Tree develops branches, leaves, and roots. Strong canopy formation begins.

2. Flowering Stage  
Small flowers appear in clusters. Weather conditions affect fruit setting.

3. Fruit Setting Stage  
Tiny fruits develop after successful pollination.

4. Fruit Development Stage  
Fruits grow in size and accumulate sugar and juice.

5. Maturity Stage  
Fruits turn red and become sweet and juicy.

6. Harvesting Stage  
Fully ripe fruits are carefully picked for market.

Each stage is important for high-quality lychee production.

",

'types_of_crop' => '
Early Season Lychee: Early maturity varieties
Late Season Lychee: Late harvesting varieties
Seeded Lychee: Traditional varieties
Seedless/Hybrid Lychee: Improved commercial varieties
',

'crop_varieties' => '
China Lychee: High quality and sweet
Bedana Lychee: Common in South Asia
Early Large Red: Early season variety
Rose Scented Lychee: Highly aromatic
',

'nutritional_value' => '
Carbohydrates: Energy source
Vitamin C: Boosts immunity
Copper: Supports metabolism
Potassium: Maintains heart health
Antioxidants: Protect body cells
',

'importance_of_crop' => '
Lychee is an important seasonal fruit crop that provides income to farmers and supports local fruit markets. It is highly demanded for its sweet taste and nutritional value. Lychee is also used in juices, desserts, and processed fruit products, contributing to the fruit industry economy.
',

'modern_technologies' => '
Drip irrigation systems
Air-layering propagation techniques
Integrated pest management
Cold storage and transport systems
High-density planting methods

Modern technologies help improve yield, fruit quality, and post-harvest handling of lychee.
',
            ],
            [
                'crop_name' => 'Groundnut',

'introduction' => 'Groundnut, also known as peanut, is an important oilseed and food crop grown in many parts of Pakistan and the world. It is widely used for edible oil production, snacks, and animal feed. Groundnut farming is important for farmers because it provides good income and improves soil fertility by fixing nitrogen. It grows best in warm climates and well-drained soils.',

'basic_information' => '
Crop Name: Groundnut
Scientific Name: Arachis hypogaea
Crop Type: Kharif (Summer Oilseed Crop)
Main Use: Edible oil, Snacks, Peanut butter, Animal feed
Sowing Season: April to June
Harvesting Season: September to November
Ideal Temperature: 25°C – 35°C
Water Requirement: Moderate
Best Soil Type: Sandy loam, well-drained soil
Major Areas: Punjab, Sindh
            ',

'sowing_season' => '
Groundnut is usually sown from April to June in Pakistan. Farmers prefer early summer for sowing so the crop can use warm temperatures for proper germination and growth.

Why Groundnut is Sown in Summer:

Groundnut requires warm soil temperatures for seed germination and early growth. Summer conditions support better flowering and pod development.
            ',

'harvesting_season' => '
Groundnut is harvested from September to November when leaves turn yellow and pods mature underground.

Why Groundnut is Harvested at This Time:

At maturity, pods develop fully and kernels become hard. Dry weather helps in proper drying and reduces damage during storage.
            ',

'climate_requirements' => '
Germination Temperature: 25°C – 30°C
Vegetative Growth: 25°C – 35°C
Pod Development: 20°C – 30°C

Groundnut grows best in warm climates with moderate rainfall and dry conditions during maturity. Excess water can damage pods.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Well-drained light soil

Ideal pH: 6.0 – 7.0

Loose and well-drained soil is essential because pods develop underground and need space to grow properly.
            ',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Harrowing: Fine seedbed preparation
Leveling: Ensures proper irrigation
Weed Removal: Reduces competition

Proper land preparation helps in better pod formation and root development.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and bold seeds
Disease-free seeds
High germination rate
Certified varieties

Good quality seed ensures better plant population and higher yield.
            ',

'seed_rate' => '
Seed Rate: 30–40 kg per acre (depending on variety and spacing)

Proper seed rate ensures uniform plant growth and better pod production.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Flowering Stage: Critical watering
Pod Development Stage: Regular irrigation
Maturity Stage: Reduced watering for drying

Groundnut needs moderate irrigation but waterlogging must be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Early plant growth
Phosphorus (P): Root and pod development
Potassium (K): Pod quality and disease resistance

Groundnut also fixes nitrogen naturally, improving soil fertility.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds sprout and roots develop. Warm soil is required.

2. Vegetative Stage  
Plant grows leaves and branches. Strong root system develops.

3. Flowering Stage  
Yellow flowers appear above ground. Pollination takes place.

4. Pegging Stage  
Fertilized flowers enter soil and form pegs.

5. Pod Development Stage  
Pods grow underground and kernels develop.

6. Maturity Stage  
Pods become hard and leaves turn yellow.

7. Harvesting Stage  
Plants are uprooted and pods are collected.

Each stage is important for good groundnut yield.

",

'types_of_crop' => '
Runner Type: Spreading variety
Spanish Type: Small seeded variety
Virginia Type: Large seeded variety
Valencia Type: Sweet kernel variety
            ',

'crop_varieties' => '
BARD-479: High yield variety
Chakori: Popular local variety
Golden: Disease resistant variety
NM-2016: Improved yield type
            ',

'nutritional_value' => '
Protein: High protein content
Healthy fats: Good for heart health
Carbohydrates: Energy source
Vitamins: Vitamin E and B-complex
Minerals: Magnesium, phosphorus, potassium
            ',

'importance_of_crop' => '
Groundnut is an important oilseed crop that provides edible oil, food, and animal feed. It supports farmers’ income and contributes to the agricultural economy. It also improves soil fertility by fixing nitrogen, making it beneficial for crop rotation systems.
            ',

'modern_technologies' => '
Improved seed varieties
Drip irrigation systems
Mechanical planters
Integrated pest management
Soil moisture monitoring systems

Modern technologies help increase yield, reduce losses, and improve groundnut quality.
            ',
            ],
            [
                'crop_name' => 'Watermelon',

'introduction' => 'Watermelon is a popular summer fruit crop known for its sweet, juicy, and refreshing taste. It is widely grown in Pakistan and other warm countries. Watermelon is an important cash crop for farmers because it has high market demand during hot seasons. It is mainly consumed fresh and is rich in water content, making it ideal for hydration in summer.',

'basic_information' => '
Crop Name: Watermelon
Scientific Name: Citrullus lanatus
Crop Type: Summer Fruit Crop (Kharif)
Main Use: Fresh fruit, Juice, Desserts
Sowing Season: February to April
Harvesting Season: May to July
Ideal Temperature: 25°C – 35°C
Water Requirement: Moderate
Best Soil Type: Sandy loam, well-drained soil
Major Areas: Punjab, Sindh
            ',

'sowing_season' => '
Watermelon is usually sown from February to April in Pakistan. Farmers prefer early spring when the temperature starts rising, which supports seed germination and vine growth.

Why Watermelon is Sown in Spring:

Warm soil and increasing temperatures help fast germination and healthy vine development, which is essential for good fruit production.
            ',

'harvesting_season' => '
Watermelon is harvested from May to July when fruits become large, heavy, and produce a hollow sound when tapped.

Why Watermelon is Harvested at This Time:

Hot summer conditions help fruits ripen fully, develop sweetness, and meet high market demand during peak heat.
            ',

'climate_requirements' => '
Germination Temperature: 25°C – 30°C
Vegetative Growth: 25°C – 35°C
Fruit Development: 30°C – 35°C

Watermelon grows best in hot and dry climates. It requires plenty of sunlight and does not tolerate frost or excessive humidity.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Light soil is preferred because it allows proper root expansion and prevents waterlogging, which can damage roots and fruits.
            ',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Bed Formation: Raised beds or ridges prepared
Organic Matter: Added for soil fertility
Leveling: Ensures proper irrigation drainage

Proper land preparation improves vine growth and fruit quality.
            ',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free seeds
Hybrid or certified varieties
Large and uniform seeds

Good quality seed ensures strong vines and high fruit yield.
            ',

'seed_rate' => '
Seed Rate: 1.5–2.5 kg per acre (depending on variety and spacing)

Proper seed rate ensures balanced plant population and better fruit development.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Vine Growth Stage: Regular watering
Flowering Stage: Controlled irrigation
Fruit Development Stage: Adequate water supply

Watermelon needs moderate irrigation but waterlogging must be avoided to prevent root diseases.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Vine growth and leaf development
Phosphorus (P): Root and flower development
Potassium (K): Fruit size, sweetness, and quality

Balanced fertilizers improve yield and fruit taste.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds sprout and roots develop. Warm soil is required.

2. Seedling Stage  
Small plants develop leaves and start spreading.

3. Vine Growth Stage  
Long vines spread across the field with rapid growth.

4. Flowering Stage  
Yellow flowers appear and pollination begins.

5. Fruit Setting Stage  
Small fruits start forming after successful pollination.

6. Fruit Development Stage  
Fruits grow in size and accumulate water and sugars.

7. Maturity Stage  
Fruits become large, sweet, and ready for harvest.

Each stage is important for high-quality watermelon production.

",

'types_of_crop' => '
Seeded Watermelon: Traditional variety with seeds
Seedless Watermelon: Hybrid variety without seeds
Mini Watermelon: Small-sized fruit variety
Icebox Watermelon: Compact and sweet variety
            ',

'crop_varieties' => '
Sugar Baby: Small and very sweet variety
Crimson Sweet: Large and popular variety
Charleston Gray: Disease resistant variety
Dumara: Common local variety
            ',

'nutritional_value' => '
Water Content: High hydration source
Vitamin C: Boosts immunity
Vitamin A: Good for eyesight
Potassium: Maintains body balance
Antioxidants: Protect cells from damage
            ',

'importance_of_crop' => '
Watermelon is an important summer fruit crop that provides good income to farmers due to high seasonal demand. It is widely consumed for hydration and nutrition during hot weather. It also supports the fruit market and local trade economy.
            ',

'modern_technologies' => '
Drip irrigation systems
Hybrid seed varieties
Plastic mulching techniques
Integrated pest management
Soil moisture monitoring systems

Modern technologies help improve yield, fruit quality, and water efficiency in watermelon farming.
            ',
            ],
            [
                'crop_name' => 'Melon',

'introduction' => 'Melon is a popular summer fruit crop known for its sweet, juicy, and refreshing taste. It is widely grown in warm regions of Pakistan and other countries. Melon farming is an important source of income for farmers due to high demand in hot seasons. It is mainly consumed fresh and is valued for its high water content and cooling effect during summer.',

'basic_information' => '
Crop Name: Melon
Scientific Name: Cucumis melo
Crop Type: Summer Fruit Crop (Kharif)
Main Use: Fresh fruit, Juice, Desserts
Sowing Season: February to April
Harvesting Season: May to July
Ideal Temperature: 25°C – 35°C
Water Requirement: Moderate
Best Soil Type: Sandy loam, well-drained fertile soil
Major Areas: Punjab, Sindh
            ',

'sowing_season' => '
Melon is usually sown from February to April in Pakistan. Farmers prefer early spring when temperatures start rising, which helps in fast seed germination and healthy vine growth.

Why Melon is Sown in Spring:

Warm soil conditions support rapid germination, strong vine development, and better fruit setting.
            ',

'harvesting_season' => '
Melon is harvested from May to July when fruits become sweet, aromatic, and fully mature. Ripeness is usually identified by color change, fragrance, and softness at the blossom end.

Why Melon is Harvested at This Time:

Hot summer weather enhances sugar development in fruits, improving sweetness and market demand.
            ',

'climate_requirements' => '
Germination Temperature: 25°C – 30°C
Vegetative Growth: 25°C – 35°C
Fruit Development: 30°C – 35°C

Melon grows best in hot and dry climates with plenty of sunlight. It does not tolerate frost or excessive humidity.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Light soil is preferred because it allows proper root expansion and prevents waterlogging, which can damage vines and fruits.
            ',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Bed Formation: Raised beds or ridges prepared
Organic Matter: Added to improve fertility
Leveling: Ensures proper irrigation drainage

Proper land preparation supports healthy vine growth and good fruit production.
            ',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free seeds
Certified or hybrid varieties
Uniform and healthy seeds

Good quality seed ensures strong vines and high fruit yield.
            ',

'seed_rate' => '
Seed Rate: 1.5–2.5 kg per acre (depending on variety and spacing)

Proper seed rate ensures balanced plant population and better fruit development.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Vine Growth Stage: Regular watering
Flowering Stage: Controlled irrigation
Fruit Development Stage: Adequate but not excessive water

Melon requires moderate irrigation, but waterlogging should be avoided for better fruit quality.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Vine and leaf growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit sweetness, size, and quality

Balanced fertilizers improve yield and fruit taste.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds sprout and roots begin to develop in warm soil.

2. Seedling Stage  
Small plants grow leaves and establish initial growth.

3. Vine Growth Stage  
Long vines spread rapidly across the field.

4. Flowering Stage  
Yellow flowers appear and pollination takes place.

5. Fruit Setting Stage  
Small fruits begin to develop after pollination.

6. Fruit Development Stage  
Fruits grow in size and accumulate sugars and water.

7. Maturity Stage  
Fruits become sweet, aromatic, and ready for harvest.

Each stage is important for high-quality melon production.

",

'types_of_crop' => '
Muskmelon: Sweet and aromatic variety
Cantaloupe: Net-like skin and orange flesh
Honeydew Melon: Light green flesh and very sweet
Watermelon Melon Type: Large juicy variety
            ',

'crop_varieties' => '
Halwa F1: High yielding hybrid variety
Punjab Melon: Common local variety
Golden Melon: Sweet and aromatic type
Honey Dew Hybrid: Improved sweetness variety
            ',

'nutritional_value' => '
Water Content: High hydration
Vitamin C: Boosts immunity
Vitamin A: Good for eyesight
Potassium: Maintains body fluid balance
Antioxidants: Protect body cells
            ',

'importance_of_crop' => '
Melon is an important summer fruit crop that provides good income to farmers due to high seasonal demand. It is widely consumed for its refreshing taste and cooling effect in hot weather. It also supports local fruit markets and rural agricultural economy.
            ',

'modern_technologies' => '
Drip irrigation systems
Hybrid seed varieties
Plastic mulching techniques
Integrated pest management
Soil moisture monitoring systems

Modern technologies help improve yield, fruit quality, and water efficiency in melon farming.
            ',
            ],
            [
                'crop_name' => 'Guava',

'introduction' => 'Guava is an important tropical and subtropical fruit crop grown widely in Pakistan and many other countries. It is known for its sweet taste, strong aroma, and high nutritional value. Guava is an affordable fruit for all income groups and is widely consumed fresh. It plays an important role in farmers’ income and local fruit markets.',

'basic_information' => '
Crop Name: Guava
Scientific Name: Psidium guajava
Crop Type: Fruit Crop (Tropical/Subtropical)
Main Use: Fresh fruit, Juice, Jam, Jelly
Flowering Season: February to April and August to September
Harvesting Season: July to September and November to January
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate
Best Soil Type: Well-drained sandy loam soil
Major Areas: Punjab, Sindh
            ',

'sowing_season' => '
Guava is usually propagated through seeds, cuttings, air layering, or grafting. Commercial orchards are mostly planted during February to March or during the monsoon season (July to August).

Why Guava is Planted in These Seasons:

These seasons provide moderate temperature and moisture which help young plants establish strong roots and grow properly.
            ',

'harvesting_season' => '
Guava is harvested in two main seasons: July to September (summer crop) and November to January (winter crop). Fruits are picked when they are fully grown and start changing color from green to light yellow.

Why Guava is Harvested at This Time:

At maturity, fruits develop full flavor, aroma, and sweetness, making them suitable for market consumption.
            ',

'climate_requirements' => '
Germination/Plant Growth Temperature: 20°C – 30°C
Flowering Stage: 20°C – 25°C
Fruit Development: 25°C – 30°C

Guava grows best in tropical and subtropical climates. It can tolerate heat but is sensitive to frost and extremely cold weather.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Well-drained fertile soil

Ideal pH: 5.0 – 7.5

Guava can grow in a wide range of soils but performs best in well-drained soil rich in organic matter.
            ',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Pit Preparation: Large pits prepared for plantation
Organic Manure: Added to improve fertility
Leveling: Ensures proper irrigation and drainage

Proper land preparation supports strong root development and healthy tree growth.
            ',

'seed_selection' => '
Characteristics of Good Planting Material:
Healthy seedlings or grafted plants
Disease-free plants
Strong root system
High-yield varieties

Grafted plants are preferred for early fruiting and better quality yield.
            ',

'seed_rate' => '
Plant Spacing: 15–20 feet between plants
Plants per acre: 100–150 plants (depending on spacing)

Proper spacing ensures good sunlight, air circulation, and fruit development.
            ',

'irrigation_requirements' => '
Young Plants: Frequent irrigation for establishment
Flowering Stage: Moderate watering
Fruit Development Stage: Regular irrigation
Mature Trees: Irrigation during dry periods

Guava requires moderate water but does not tolerate waterlogging.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and shoot growth
Phosphorus (P): Root development and flowering
Potassium (K): Fruit size, taste, and quality

Organic manure improves soil fertility and long-term productivity.
            ',

'growing_stages' => "

1. Vegetative Stage  
Plant develops branches, leaves, and strong roots.

2. Flowering Stage  
Small white flowers appear on branches.

3. Fruit Setting Stage  
Tiny fruits form after pollination.

4. Fruit Development Stage  
Fruits grow in size and accumulate nutrients.

5. Maturity Stage  
Fruits turn greenish-yellow and become ready for harvest.

6. Harvesting Stage  
Fully mature fruits are carefully picked.

Each stage is important for good guava production.

",

'types_of_crop' => '
Seeded Guava: Traditional variety with seeds
Seedless Guava: Improved hybrid type
Red Guava: Pink/red flesh variety
White Guava: Common green-white flesh type
            ',

'crop_varieties' => '
Sardar (L-49): High yielding variety
Surahi: Sweet and aromatic variety
Allahabad Safeda: Popular white-fleshed variety
Red Flesh Guava: Rich in nutrients and color
            ',

'nutritional_value' => '
Vitamin C: Very high immunity booster
Fiber: Improves digestion
Vitamin A: Good for eyesight
Potassium: Maintains heart health
Antioxidants: Protect body cells
            ',

'importance_of_crop' => '
Guava is an important fruit crop that provides affordable nutrition to people and good income to farmers. It is widely consumed fresh and also used in juices, jams, and sweets. Guava farming supports rural economy and fruit markets in Pakistan.
            ',

'modern_technologies' => '
Drip irrigation systems
High-density planting techniques
Grafting and budding methods
Integrated pest management
Cold storage and post-harvest handling

Modern technologies help improve yield, fruit quality, and shelf life of guava fruits.
            ',
            ],
            [
                'crop_name' => 'Papaya',

'introduction' => 'Papaya is a fast-growing tropical fruit crop widely cultivated in warm regions of Pakistan and other countries. It is known for its sweet taste, soft texture, and high nutritional value. Papaya is an important commercial fruit crop that provides quick income to farmers due to its early fruiting nature. It is consumed fresh and also used in juices and food processing.',

'basic_information' => '
Crop Name: Papaya
Scientific Name: Carica papaya
Crop Type: Tropical Fruit Crop
Main Use: Fresh fruit, Juice, Papain enzyme, Desserts
Flowering Season: Year-round (depending on climate)
Harvesting Season: 6–9 months after planting (continuous harvesting possible)
Ideal Temperature: 22°C – 32°C
Water Requirement: Moderate
Best Soil Type: Well-drained sandy loam soil
Major Areas: Sindh, Southern Punjab
            ',

'sowing_season' => '
Papaya is usually planted in spring (February to April) and monsoon season (July to August) in Pakistan. It is grown from seeds or seedlings and transplanted into fields when plants are strong enough.

Why Papaya is Planted in These Seasons:

These seasons provide warm temperatures and sufficient moisture, which support fast germination and early plant growth.
            ',

'harvesting_season' => '
Papaya starts producing fruit within 6 to 9 months after planting and can be harvested year-round depending on flowering cycles.

Why Papaya is Harvested Continuously:

Papaya is a fast-bearing crop with continuous flowering and fruiting, allowing regular harvesting when fruits turn yellow-orange and soften slightly.
            ',

'climate_requirements' => '
Germination Temperature: 22°C – 30°C
Vegetative Growth: 25°C – 32°C
Fruit Development: 25°C – 35°C

Papaya grows best in warm tropical climates. It is highly sensitive to frost and waterlogging, which can damage the plant.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Papaya requires loose, well-drained soil because water stagnation can cause root rot and plant death.
            ',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Pit Preparation: Large pits filled with manure
Organic Matter: Mixed to improve fertility
Drainage: Proper system to avoid waterlogging

Good land preparation ensures healthy root growth and strong plant development.
            ',

'seed_selection' => '
Characteristics of Good Seed:
High-quality hybrid seeds
Disease-free seedlings
High germination rate
Fast-growing varieties

Hybrid seeds are preferred for better yield and disease resistance.
            ',

'seed_rate' => '
Plant Spacing: 8–10 feet between plants
Plants per acre: 400–600 plants (depending on spacing)

Proper spacing ensures good airflow, sunlight, and fruit development.
            ',

'irrigation_requirements' => '
Young Plants: Frequent irrigation for establishment
Vegetative Stage: Regular watering
Flowering Stage: Moderate irrigation
Fruit Development: Consistent moisture supply

Papaya needs regular watering but does not tolerate waterlogging.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and stem growth
Phosphorus (P): Root development and flowering
Potassium (K): Fruit size, sweetness, and quality

Organic manure improves soil health and long-term productivity.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds sprout and seedlings develop within 2–3 weeks.

2. Vegetative Stage  
Plant grows rapidly with large leaves and strong stem.

3. Flowering Stage  
Male and female flowers appear on plants.

4. Fruit Setting Stage  
Fruits develop after successful pollination.

5. Fruit Development Stage  
Fruits grow in size and accumulate sugars.

6. Maturity Stage  
Fruits turn yellow-orange and soften slightly.

7. Harvesting Stage  
Mature fruits are picked regularly from the plant.

Papaya has continuous growth and fruiting throughout the year.

",

'types_of_crop' => '
Solo Papaya: Small and sweet variety
Hawaiian Papaya: Smooth and high quality
Local Papaya: Traditional variety
Hybrid Papaya: High yield improved variety
            ',

'crop_varieties' => '
Red Lady: High yielding hybrid variety
Washington: Common commercial variety
Pusa Delicious: Sweet and soft flesh variety
Local Sindh Variety: Adapted to local climate
            ',

'nutritional_value' => '
Vitamin C: Strong immunity booster
Vitamin A: Good for eyesight
Fiber: Improves digestion
Folate: Supports body growth
Papain Enzyme: Helps digestion
            ',

'importance_of_crop' => '
Papaya is an important fast-growing fruit crop that provides quick income to farmers. It is widely consumed for its nutritional benefits and digestive properties. Papaya also supports food processing industries and contributes to the agricultural economy.
            ',

'modern_technologies' => '
Drip irrigation systems
Hybrid seed technology
Plastic mulching techniques
Tissue culture propagation
Integrated pest management

Modern technologies help improve yield, fruit quality, and disease resistance in papaya farming.
            ',
            ],
            [
                'crop_name' => 'Peach',

'introduction' => 'Peaches are an important temperate fruit crop known for their sweet, juicy flesh and soft skin. They are widely grown in cooler regions of Pakistan and other countries. Peach farming is economically important for farmers in hilly and moderate climate areas. The fruit is consumed fresh and also used in juices, jams, and desserts.',

'basic_information' => '
Crop Name: Peaches
Scientific Name: Prunus persica
Crop Type: Temperate Fruit Crop
Main Use: Fresh fruit, Juice, Jam, Desserts
Flowering Season: February to March
Harvesting Season: May to July
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Well-drained loamy soil
Major Areas: Balochistan, KPK (hilly regions)
            ',

'sowing_season' => '
Peach trees are usually planted as young grafted saplings during dormant season, mainly in December to February.

Why Peaches are Planted in Winter:

Cool weather helps reduce transplant shock and allows strong root development before spring growth starts.
            ',

'harvesting_season' => '
Peaches are harvested from May to July when fruits become soft, aromatic, and fully colored (yellow, red, or orange depending on variety).

Why Peaches are Harvested at This Time:

Warm summer temperatures help fruits ripen properly and develop sweetness and flavor.
            ',

'climate_requirements' => '
Germination/Plant Growth Temperature: 15°C – 25°C
Flowering Stage: 10°C – 20°C (cool weather required)
Fruit Development: 20°C – 30°C

Peaches grow best in temperate climates with cool winters and mild summers. They require a certain amount of winter chill hours for proper flowering.
            ',

'soil_requirements' => '
Suitable Soil:
Well-drained loamy soil
Sandy loam soil

Ideal pH: 6.0 – 7.0

Peach trees require well-drained soil because waterlogging can damage roots and reduce fruit quality.
            ',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Pit Preparation: Large pits for saplings
Organic Matter: Mixed into soil for fertility
Drainage: Proper drainage system required

Good land preparation ensures healthy root growth and strong tree development.
            ',

'seed_selection' => '
Characteristics of Good Planting Material:
Healthy grafted saplings
Disease-free plants
Strong root system
High-yield varieties

Grafted plants are preferred for early fruiting and better quality fruit.
            ',

'seed_rate' => '
Plant Spacing: 15–20 feet between trees
Plants per acre: 80–120 trees (depending on variety and spacing)

Proper spacing ensures good sunlight, airflow, and fruit development.
            ',

'irrigation_requirements' => '
Young Trees: Regular watering for establishment
Flowering Stage: Controlled irrigation
Fruit Development: Adequate water supply
Mature Trees: Irrigation during dry periods

Peach trees need moderate irrigation but cannot tolerate excess water.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and shoot growth
Phosphorus (P): Root development and flowering
Potassium (K): Fruit size, sweetness, and quality

Organic manure improves soil fertility and fruit quality.
            ',

'growing_stages' => "

1. Dormant Stage  
Tree remains inactive during winter.

2. Budding Stage  
New buds start developing in early spring.

3. Flowering Stage  
Beautiful pink flowers appear and pollination occurs.

4. Fruit Setting Stage  
Small fruits develop after pollination.

5. Fruit Development Stage  
Fruits grow in size and gain sweetness.

6. Maturity Stage  
Fruits become soft, juicy, and fully colored.

7. Harvesting Stage  
Fully ripe peaches are carefully picked.

Each stage is important for high-quality peach production.

",

'types_of_crop' => '
Clingstone Peaches: Flesh sticks to the seed
Freestone Peaches: Flesh separates easily from seed
White Peaches: Sweet and soft variety
Yellow Peaches: Tangy and commonly grown type
            ',

'crop_varieties' => '
Florida King: Early season variety
Elberta: Popular commercial variety
Golden Jubilee: Sweet yellow flesh variety
Early Grand: Early ripening type
            ',

'nutritional_value' => '
Vitamin C: Boosts immunity
Vitamin A: Good for eyesight
Fiber: Improves digestion
Potassium: Maintains heart health
Antioxidants: Protect body cells
            ',

'importance_of_crop' => '
Peaches are an important commercial fruit crop in temperate regions, providing good income to farmers. They are highly valued for their taste and nutritional benefits and are widely used in fresh consumption and processed food industries.
            ',

'modern_technologies' => '
Grafting techniques
Drip irrigation systems
Cold storage facilities
Integrated pest management
High-density orchard systems

Modern technologies improve peach yield, quality, and post-harvest shelf life.
            ',
            ],
            [
                'crop_name' => 'Wheat',

'introduction' => 'Wheat is one of the most important staple food crops in Pakistan and many other countries. It is a major source of food for millions of people and is widely used to make flour for bread, chapati, biscuits, and other bakery products. Wheat farming plays a key role in the agriculture economy because it ensures food security and provides income to farmers. It is mainly grown in cool and dry climates during the winter season.',

'basic_information' => '
Crop Name: Wheat
Scientific Name: Triticum aestivum
Crop Type: Rabi (Winter Crop)
Main Use: Flour, Bread, Chapati, Bakery products
Sowing Season: November to December
Harvesting Season: April to May
Ideal Temperature: 10°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy and clay loam soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Wheat is usually sown from November to December in Pakistan. Farmers prepare land after the monsoon season when soil moisture is suitable for germination. Cool weather helps in proper seed sprouting and early plant development.

Why Wheat is Sown in Winter:

Wheat requires cool temperatures for germination and early growth. Winter conditions provide ideal temperature and moisture balance for healthy crop development.
            ',

'harvesting_season' => '
Wheat is harvested from April to May when the crop turns golden yellow and grains become hard.

Why Wheat is Harvested at This Time:

At this stage, grains are fully matured and dry weather helps in reducing moisture content, improving grain quality and storage life.
            ',

'climate_requirements' => '
Germination Temperature: 12°C – 25°C
Vegetative Growth: 15°C – 25°C
Grain Formation: 20°C – 30°C

Wheat grows best in cool and dry climates. Moderate rainfall and low humidity are ideal for healthy growth and high yield.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Clay loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Loamy soil is best because it provides good drainage, nutrients, and root support for wheat plants.
            ',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Harrowing: Breaking soil clods
Leveling: Ensures uniform irrigation
Weed Control: Removes unwanted plants

Proper land preparation improves seed germination and crop yield.
            ',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free certified seed
Pure and clean grains
High-yield variety

Good seed ensures strong crop establishment and better production.
            ',

'seed_rate' => '
Seed Rate: 40–50 kg per acre (varies by variety and method)

Proper seed rate ensures balanced plant population and maximum yield.
            ',

'irrigation_requirements' => '
Crown Root Stage: First critical irrigation
Tillering Stage: Encourages shoot growth
Flowering Stage: Very important for yield
Grain Filling Stage: Improves grain size

Wheat requires 4–6 irrigations depending on soil and weather conditions.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and stem growth
Phosphorus (P): Root development
Potassium (K): Disease resistance and grain quality

Balanced fertilizer use increases yield and improves grain quality.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout roots and shoots.

2. Seedling Stage  
Young plants develop leaves and strong roots.

3. Tillering Stage  
Plants produce side shoots (tillers) which increase yield.

4. Stem Elongation Stage  
Plants grow taller and develop stronger stems.

5. Booting Stage  
Head (spike) develops inside the stem.

6. Flowering Stage  
Pollination occurs and grains begin forming.

7. Grain Filling Stage  
Grains fill with starch and nutrients.

8. Maturity Stage  
Plants turn golden yellow and are ready for harvest.

Each stage is important for achieving high wheat production.

",

'types_of_crop' => '
Hard Wheat: Used for pasta and semolina
Soft Wheat: Used for bakery products
Durum Wheat: High protein variety
Bread Wheat: Common flour production variety
            ',

'crop_varieties' => '
Seher-06: High yielding variety
Galaxy-2013: Disease resistant variety
Ujala-2016: Improved grain quality
Anaj-2017: Popular local variety
            ',

'nutritional_value' => '
Carbohydrates: Main energy source
Protein: Muscle growth
Fiber: Improves digestion
Iron: Prevents anemia
B Vitamins: Supports metabolism
            ',

'importance_of_crop' => '
Wheat is the most important staple food crop in Pakistan. It ensures food security for the population and provides income for millions of farmers. It is widely used in flour-based food products and plays a vital role in the national economy.
            ',

'modern_technologies' => '
Laser land leveling
Drip irrigation systems
Improved seed varieties
Precision farming techniques
Mechanized harvesting machines

Modern technologies help increase wheat yield, reduce water usage, and improve efficiency.
            ',
            ],
            [
                'crop_name' => 'Mustard',

'introduction' => 'Mustard is an important oilseed crop grown widely in Pakistan and other countries. It is mainly cultivated for its seeds, which are used to extract edible oil. Mustard farming plays a significant role in the agriculture economy by providing income to farmers and contributing to domestic oil production. It grows well in cool climates and is an important Rabi (winter) season crop.',

'basic_information' => '
Crop Name: Mustard
Scientific Name: Brassica juncea
Crop Type: Rabi (Winter Oilseed Crop)
Main Use: Edible oil, Spice, Animal feed
Sowing Season: October to November
Harvesting Season: February to March
Ideal Temperature: 10°C – 25°C
Water Requirement: Low to Moderate
Best Soil Type: Loamy and well-drained soil
Major Areas: Punjab, Sindh, KPK
            ',

'sowing_season' => '
Mustard is usually sown from October to November in Pakistan. Farmers prefer cool weather conditions after the monsoon season for better germination and early plant growth.

Why Mustard is Sown in Winter:

Mustard requires cool temperatures for proper germination and vegetative growth. Winter conditions help reduce pest attacks and support better flowering and seed formation.
            ',

'harvesting_season' => '
Mustard is harvested from February to March when pods turn yellow and seeds become hard and mature.

Why Mustard is Harvested at This Time:

At maturity, pods dry naturally in warm spring weather, which helps reduce moisture content and improves oil quality.
            ',

'climate_requirements' => '
Germination Temperature: 10°C – 20°C
Vegetative Growth: 15°C – 25°C
Flowering & Seed Formation: 15°C – 22°C

Mustard grows best in cool and dry climates. Excessive heat during flowering can reduce yield and seed quality.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained soil is important for mustard because waterlogging can damage roots and reduce yield.
            ',

'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Harrowing: Breaking soil clods for fine seedbed
Leveling: Ensures uniform irrigation
Weed Removal: Reduces competition

Proper land preparation improves germination and plant growth.
            ',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free seeds
Certified varieties
Bold and clean seeds

Good quality seed ensures uniform crop growth and higher yield.
            ',

'seed_rate' => '
Seed Rate: 1–2 kg per acre (depending on variety and spacing)

Proper seed rate ensures good plant population and better seed production.
            ',

'irrigation_requirements' => '
Germination Stage: Light irrigation
Vegetative Stage: Moderate irrigation
Flowering Stage: Critical stage, careful watering
Seed Formation Stage: Limited irrigation

Mustard requires low to moderate irrigation and does not tolerate excess water.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and plant growth
Phosphorus (P): Root development and flowering
Potassium (K): Seed formation and oil quality

Balanced fertilizers improve yield and oil content.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout roots and shoots.

2. Seedling Stage  
Young plants develop leaves and grow slowly.

3. Vegetative Stage  
Plant grows leaves and stem structure develops.

4. Flowering Stage  
Yellow flowers appear and pollination begins.

5. Pod Formation Stage  
Small pods develop after successful pollination.

6. Seed Development Stage  
Seeds fill inside pods and mature gradually.

7. Maturity Stage  
Pods turn yellow and seeds become hard.

8. Harvesting Stage  
Plants are cut and dried for seed collection.

Each stage is important for good mustard oilseed production.

",

'types_of_crop' => '
Yellow Mustard: Common oilseed variety
Brown Mustard: Strong flavor variety
Black Mustard: High oil content variety
            ',

'crop_varieties' => '
Rohini: High yielding variety
Varuna: Disease resistant variety
Pusa Bold: Popular oilseed variety
NARC Mustard: Locally adapted variety
            ',

'nutritional_value' => '
Healthy Fats: Source of edible oil
Protein: Supports body growth
Fiber: Improves digestion
Omega fatty acids: Heart health benefits
Minerals: Calcium, magnesium, potassium
            ',

'importance_of_crop' => '
Mustard is an important oilseed crop that contributes significantly to edible oil production in Pakistan. It reduces dependency on imported oils and provides income to farmers. It is also used as a spice and in animal feed.
            ',

'modern_technologies' => '
Improved hybrid seeds
Drip irrigation systems
Integrated pest management
Mechanical harvesting tools
Soil testing and monitoring systems

Modern technologies help increase yield, improve oil content, and reduce crop losses.
            ',
            ],
            [
                'crop_name' => 'Barley',

'introduction' => 'Barley is an important cereal crop grown in Pakistan and many other countries. It is mainly used as food, animal feed, and in the brewing industry. Barley is one of the oldest cultivated crops and is known for its ability to grow in dry and less fertile soils. It plays an important role in supporting livestock feed and food security, especially in arid and semi-arid regions.',

'basic_information' => '
Crop Name: Barley
Scientific Name: Hordeum vulgare
Crop Type: Rabi (Winter Crop)
Main Use: Food, Animal feed, Malt production, Beer industry
Sowing Season: November to December
Harvesting Season: March to April
Ideal Temperature: 12°C – 25°C
Water Requirement: Low to Moderate
Best Soil Type: Sandy loam and loamy soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Barley is usually sown from November to December in Pakistan. Farmers prefer cool winter conditions for better germination and early growth.

Why Barley is Sown in Winter:

Barley grows best in cool climates and can tolerate frost better than many other crops. Winter conditions support strong vegetative growth and reduce pest pressure.
            ',

'harvesting_season' => '
Barley is harvested from March to April when the crop turns golden yellow and grains become hard and dry.

Why Barley is Harvested at This Time:

At maturity, dry spring weather helps reduce grain moisture, improving storage quality and suitability for feed and malt production.
            ',

'climate_requirements' => '
Germination Temperature: 10°C – 20°C
Vegetative Growth: 15°C – 25°C
Grain Formation: 18°C – 28°C

Barley grows well in cool and dry climates. It is more drought-tolerant than wheat and can survive in low rainfall areas.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained light soil

Ideal pH: 6.0 – 7.5

Barley performs well in less fertile soils but requires good drainage to avoid root damage.
            ',

'land_preparation' => '
Ploughing: Light to moderate ploughing
Harrowing: Fine seedbed preparation
Leveling: Ensures uniform moisture
Weed Control: Reduces competition

Proper land preparation improves germination and crop establishment.
            ',

'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free certified seed
Uniform grain size
Improved varieties

Good seed ensures strong plant growth and better yield.
            ',

'seed_rate' => '
Seed Rate: 35–45 kg per acre

Proper seed rate ensures good plant population and better productivity.
            ',

'irrigation_requirements' => '
Crown Root Stage: Important irrigation
Tillering Stage: Supports shoot development
Heading Stage: Grain formation
Grain Filling Stage: Improves yield

Barley requires fewer irrigations compared to wheat and rice.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root development
Potassium (K): Improves drought resistance

Balanced fertilizer use increases yield and grain quality.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout roots and shoots.

2. Seedling Stage  
Young plants develop leaves and roots.

3. Tillering Stage  
Side shoots (tillers) develop and increase yield potential.

4. Stem Elongation Stage  
Plants grow taller and stronger stems form.

5. Heading Stage  
Spikes (ears) emerge from the stem.

6. Flowering Stage  
Pollination occurs and grain formation begins.

7. Grain Filling Stage  
Grains develop and fill with nutrients.

8. Maturity Stage  
Plants dry and turn golden, ready for harvest.

Each stage is important for good barley production.

",

'types_of_crop' => '
Two-row Barley: Used for malt and brewing
Six-row Barley: Used mainly for animal feed
Hulless Barley: Used for human food consumption
            ',

'crop_varieties' => '
Jau-87: High yielding variety
Haider-93: Disease resistant variety
Frontier-87: Common local variety
Sultan-2010: Improved drought tolerant variety
            ',

'nutritional_value' => '
Carbohydrates: Energy source
Fiber: Improves digestion
Protein: Supports body growth
Vitamins: Supports metabolism
Minerals: Iron, magnesium, selenium
            ',

'importance_of_crop' => '
Barley is an important cereal crop used for food, animal feed, and malt production. It plays a key role in supporting livestock and the brewing industry. It is also valuable in dry regions due to its drought tolerance.
            ',

'modern_technologies' => '
Improved drought-resistant varieties
Precision seeding machines
Drip irrigation systems
Soil moisture monitoring
Integrated pest management

Modern technologies help increase yield and improve barley quality in harsh environments.
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

                    'modern_technologies' => $detail['modern_technologies'],
                ]);
            }
         }
    }
}

