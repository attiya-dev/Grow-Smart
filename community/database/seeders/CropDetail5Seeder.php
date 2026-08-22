<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\CropDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropDetail5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $cropDetails = [
            [
                'crop_name' => 'Broccoli',

'introduction' => 'Broccoli is a nutritious vegetable crop grown in Pakistan and many other countries. It belongs to the cabbage family and is widely used in salads, soups, and cooked dishes. Broccoli farming is becoming popular because of its high nutritional value and market demand. It grows best in cool weather conditions and fertile soil with proper moisture.',

'basic_information' => '
Crop Name: Broccoli
Scientific Name: Brassica oleracea var. italica
Crop Type: Rabi (Winter Crop)
Main Use: Vegetable, Salad, Soup
Sowing Season: August to October
Harvesting Season: November to February
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy and Fertile Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Broccoli is usually sown from August to October in Pakistan. Seeds are first grown in nurseries and later transplanted into the field. Cool temperatures during this season help proper germination and healthy vegetative growth.

Why Broccoli is Sown in Winter:

Broccoli requires cool weather for proper head formation and quality production. Winter conditions provide favorable temperatures for healthy crop growth.
            ',

'harvesting_season' => '
Broccoli is harvested from November to February depending on the variety and climate conditions. The crop is ready when the green flower heads become fully developed and compact.

Why Broccoli is Harvested at This Time:

Cool weather during winter improves head quality, color, and taste. Timely harvesting prevents flowering and maintains market value.
            ',

'climate_requirements' => '
Germination Temperature: 18°C – 24°C
Vegetative Growth: 15°C – 22°C
Head Formation: 15°C – 20°C

Broccoli grows best in cool and moist climates. Moderate temperatures support proper head development and better crop quality.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Fertile well-drained soil

Ideal pH: 6.0 – 7.5

Fertile and well-drained soil is best for broccoli cultivation because it supports strong root development and healthy plant growth.
            ',

'land_preparation' => '
Ploughing: Loosens the soil
Leveling: Improves irrigation efficiency
Organic Matter Addition: Enhances soil fertility
Weed Removal: Reduces competition

Good land preparation helps better root growth and improves crop production.
            ',

'seed_selection' => '
Characteristics of Good Seed:
Healthy and clean
Disease-free
High germination rate
Certified variety

Good quality seed produces healthy plants and improves broccoli yield.
            ',

'seed_rate' => '
Nursery Method: 200–250 grams per acre
Direct Seeding: 500–700 grams per acre

Using the correct seed rate ensures proper plant population and healthy crop growth.
            ',

'irrigation_requirements' => '
Seedling Stage: Proper plant establishment
Vegetative Stage: Leaf development
Head Formation Stage: Proper broccoli head growth
Maturity Stage: Maintains crop quality

Broccoli requires regular irrigation but waterlogging should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and stem growth
Phosphorus (P): Root development
Potassium (K): Better head quality

Balanced fertilizers improve broccoli growth, quality, and production.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting. Proper temperature and moisture are necessary.

2. Seedling Stage  
Young seedlings grow in the nursery. Leaves and roots develop properly.

3. Transplanting Stage  
Seedlings are transplanted into prepared fields. Proper spacing supports healthy growth.

4. Vegetative Growth Stage  
Plants produce large green leaves and strong stems. Nutrients and irrigation are important.

5. Head Formation Stage  
Compact green flower heads begin forming at the center of the plant.

6. Head Development Stage  
Broccoli heads grow larger and become firm. Proper care improves quality.

7. Maturity Stage  
Heads become fully developed and ready for harvesting before flowering starts.

Each stage is important for obtaining high broccoli yield and quality.

",

'types_of_crop' => '
Green Broccoli: Common commercial type
Purple Broccoli: Purple colored variety
Sprouting Broccoli: Produces multiple small heads
Calabrese Broccoli: Large green heads
            ',

'crop_varieties' => '
Green Magic: High yield variety
Marathon: Heat tolerant variety
Premium Crop: Good quality heads
De Cicco: Early harvesting variety
            ',

'nutritional_value' => '
Fiber: Better digestion
Vitamin C: Strong immune system
Vitamin K: Bone health
Protein: Body growth
Antioxidants: Disease protection
            ',

'importance_of_crop' => '
Broccoli is an important vegetable crop because of its high nutritional and economic value. It provides income to farmers and is widely consumed in homes, hotels, and food industries. Broccoli is also valued for its health benefits and export potential.
            ',

'modern_technologies' => '
Drip irrigation
Hybrid seed technology
Mulching techniques
Greenhouse farming
AI crop monitoring

Modern technologies help farmers improve broccoli production, reduce disease problems, and increase crop quality.
            ',
            ],
            [
                'crop_name' => 'Orange',

'introduction' => 'Oranges are one of the most important fruit crops grown in Pakistan and many other countries. They are widely consumed because of their sweet taste, refreshing juice, and high vitamin content. Orange farming plays an important role in the agriculture economy by providing income to farmers and supporting fruit export industries. Pakistan is famous for producing high-quality Kinnow oranges. Oranges grow best in warm climates with moderate water supply.',

'basic_information' => '
Crop Name: Oranges
Scientific Name: Citrus sinensis
Crop Type: Fruit Crop
Main Use: Fresh Fruit, Juice, Jam
Sowing Season: February to March and August to September
Harvesting Season: November to February
Ideal Temperature: 15°C – 30°C
Water Requirement: Moderate
Best Soil Type: Sandy Loam and Well-drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Orange plants are usually planted from February to March or during August to September in Pakistan. Mild temperatures and proper soil moisture during these periods help healthy root establishment and plant growth.

Why Oranges are Planted in These Seasons:

Moderate weather conditions support better root development and reduce stress on young plants. Proper rainfall and irrigation availability also help healthy orchard establishment.
            ',

'harvesting_season' => '
Oranges are harvested from November to February depending on the variety and climate conditions. The fruit becomes fully mature, juicy, and develops bright orange color during this period.

Why Oranges are Harvested at This Time:

Cool winter weather improves fruit sweetness, color, and juice quality. Proper maturity ensures better market value and storage life.
            ',

'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 30°C
Fruit Development: 15°C – 25°C

Oranges grow best in warm climates with mild winters and moderate humidity. Proper temperature is important for flowering, fruit setting, and fruit quality.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Well-drained soil is best because waterlogging can damage orange roots and reduce fruit production.
            ',

'land_preparation' => '
Deep Ploughing: Improves soil aeration
Leveling: Better irrigation management
Pit Preparation: Proper root development
Weed Removal: Reduces competition

Good land preparation helps strong tree growth and better fruit production.
            ',

'seed_selection' => '
Characteristics of Good Plant Material:
Healthy nursery plants
Disease-free seedlings
Strong root system
Certified varieties

Healthy planting material produces strong trees and high fruit yield.
            ',

'seed_rate' => '
Plant Spacing: 15–20 feet apart
Plants per Acre: 100–120 plants

Proper spacing ensures healthy tree growth and better fruit development.
            ',

'irrigation_requirements' => '
Young Plant Stage: Frequent light irrigation
Flowering Stage: Moisture for flower development
Fruit Setting Stage: Better fruit growth
Fruit Maturity Stage: Improves fruit size and juice quality

Orange orchards require regular irrigation but excessive water should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and branch growth
Phosphorus (P): Root development
Potassium (K): Fruit quality and sweetness

Balanced fertilizers improve tree health, fruit production, and fruit quality.
            ',

'growing_stages' => "

1. Germination and Nursery Stage  
Young plants develop in nurseries. Healthy roots and shoots begin growing.

2. Transplanting Stage  
Plants are transferred to orchards with proper spacing for healthy growth.

3. Vegetative Growth Stage  
Trees produce branches and leaves. Proper irrigation and nutrients are necessary.

4. Flowering Stage  
White fragrant flowers appear on trees. Good weather supports pollination.

5. Fruit Setting Stage  
Small fruits begin developing after pollination.

6. Fruit Development Stage  
Fruits increase in size and juice content. Nutrients and irrigation are important.

7. Maturity Stage  
Fruits develop full color, sweetness, and become ready for harvesting.

Each stage is important for obtaining high orange yield and quality.

",

'types_of_crop' => '
Sweet Orange: Common edible type
Blood Orange: Red-colored flesh variety
Navel Orange: Seedless variety
Mandarin Orange: Small sweet citrus fruit
            ',

'crop_varieties' => '
Kinnow: Famous Pakistani variety
Mussambi: Sweet citrus variety
Succari: Low acid variety
Valencia: Juice producing variety
            ',

'nutritional_value' => '
Vitamin C: Strong immune system
Fiber: Better digestion
Carbohydrates: Energy source
Antioxidants: Disease protection
Minerals: Healthy body functions
            ',

'importance_of_crop' => '
Oranges are an important fruit crop because they provide income to farmers and contribute to export earnings. They are widely used in juice industries, food processing, and fresh fruit markets. Oranges also provide important vitamins and health benefits to consumers.
            ',

'modern_technologies' => '
Drip irrigation
Hybrid nursery plants
Mulching techniques
AI orchard monitoring
Modern spraying systems

Modern technologies help farmers improve orange production, save water, and increase fruit quality.
            ',
            ],
            [
                'crop_name' => 'Kinnow',

'introduction' => 'Kinnow is one of the most important citrus fruit crops grown in Pakistan. It is famous for its sweet taste, juicy pulp, and high vitamin content. Pakistan is one of the largest producers and exporters of Kinnow in the world. Kinnow farming plays an important role in the agriculture economy by providing income to farmers and supporting export industries. Kinnow grows best in warm climates with moderate irrigation and fertile soil.',

'basic_information' => '
Crop Name: Kinnow
Scientific Name: Citrus reticulata
Crop Type: Fruit Crop
Main Use: Fresh Fruit, Juice, Export
Sowing Season: February to March and August to September
Harvesting Season: December to February
Ideal Temperature: 15°C – 30°C
Water Requirement: Moderate
Best Soil Type: Sandy Loam and Well-drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Kinnow plants are usually planted from February to March or during August to September in Pakistan. Mild temperatures during these periods help young plants establish healthy roots and grow properly.

Why Kinnow is Planted in These Seasons:

Moderate climate and proper soil moisture support healthy orchard establishment and reduce stress on young plants.
            ',

'harvesting_season' => '
Kinnow is harvested from December to February depending on the variety and climate conditions. Fruits become fully mature, juicy, and develop bright orange color during this season.

Why Kinnow is Harvested at This Time:

Cool winter weather improves sweetness, juice quality, and fruit color. Proper maturity increases market value and export quality.
            ',

'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 30°C
Fruit Development: 15°C – 25°C

Kinnow grows best in warm climates with mild winters. Proper temperature is important for flowering, fruit setting, and fruit quality.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Well-drained soil is best because waterlogging can damage roots and reduce fruit production.
            ',

'land_preparation' => '
Deep Ploughing: Improves soil aeration
Leveling: Better irrigation management
Pit Preparation: Supports root development
Weed Removal: Reduces competition

Good land preparation helps healthy tree growth and improves fruit production.
            ',

'seed_selection' => '
Characteristics of Good Plant Material:
Healthy nursery plants
Disease-free seedlings
Strong root system
Certified varieties

Healthy planting material produces strong trees and high fruit yield.
            ',

'seed_rate' => '
Plant Spacing: 15–20 feet apart
Plants per Acre: 100–120 plants

Proper spacing ensures healthy tree growth and better fruit development.
            ',

'irrigation_requirements' => '
Young Plant Stage: Frequent light irrigation
Flowering Stage: Moisture for flower development
Fruit Setting Stage: Better fruit growth
Fruit Maturity Stage: Improves fruit size and juice quality

Kinnow orchards require regular irrigation but excessive water should be avoided.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and branch growth
Phosphorus (P): Root development
Potassium (K): Fruit quality and sweetness

Balanced fertilizers improve tree health, fruit production, and fruit quality.
            ',

'growing_stages' => "

1. Nursery Stage  
Young Kinnow plants are developed in nurseries. Healthy roots and shoots begin growing.

2. Transplanting Stage  
Plants are transferred to orchards with proper spacing for healthy growth.

3. Vegetative Growth Stage  
Trees produce branches and leaves. Proper nutrients and irrigation are important.

4. Flowering Stage  
White fragrant flowers appear on trees. Good weather supports pollination.

5. Fruit Setting Stage  
Small fruits begin developing after pollination.

6. Fruit Development Stage  
Fruits increase in size and juice content. Proper care improves fruit quality.

7. Maturity Stage  
Fruits develop full orange color, sweetness, and become ready for harvesting.

Each stage is important for obtaining high Kinnow yield and quality.

",

'types_of_crop' => '
Seedless Kinnow: Fewer seeds and high market value
Traditional Kinnow: Common commercial type
Juicy Kinnow: High juice content variety
Export Quality Kinnow: Premium quality fruit
            ',

'crop_varieties' => '
Kinnow Mandarin: Popular Pakistani variety
Seedless Kinnow: Improved seedless type
Fairchild: Early maturing variety
Honey Murcott: Sweet citrus variety
            ',

'nutritional_value' => '
Vitamin C: Strong immune system
Fiber: Better digestion
Carbohydrates: Energy source
Antioxidants: Disease protection
Minerals: Healthy body functions
            ',

'importance_of_crop' => '
Kinnow is an important fruit crop because it contributes greatly to Pakistan’s economy through exports. It provides income and employment to farmers and workers involved in orchards, packaging, and transport industries. Kinnow is also widely consumed because of its nutritional and health benefits.
            ',

'modern_technologies' => '
Drip irrigation
Hybrid nursery plants
Mulching techniques
AI orchard monitoring
Modern spraying systems

Modern technologies help farmers improve Kinnow production, save water, and increase fruit quality.
            ',
            ],
            [
                'crop_name' => 'Lemon',

'introduction' => 'Lemon is an important citrus fruit crop grown in Pakistan and many other countries. It is widely used in juices, cooking, medicines, and food industries. Lemons are rich in vitamin C and are popular because of their refreshing taste and health benefits. Lemon farming provides good income to farmers and supports local markets and export industries. The crop grows best in warm climates with proper sunlight and irrigation.',

'basic_information' => '
Crop Name: Lemons
Scientific Name: Citrus limon
Crop Type: Fruit Crop
Main Use: Juice, Pickles, Cooking, Medicines
Sowing Season: February to March and August to September
Harvesting Season: Throughout the Year depending on variety
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate
Best Soil Type: Sandy Loam and Well-Drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Lemon plants are usually planted during February to March and August to September in Pakistan. Moderate temperature during these months helps proper root establishment and healthy plant growth.

Why Lemons are Planted in These Seasons:

These seasons provide favorable weather conditions with balanced temperature and moisture which support strong root development and healthy orchard establishment.
            ',

'harvesting_season' => '
Lemons can be harvested throughout the year depending on the variety and planting time. Fruits are ready when they become fully developed, juicy, and yellow or light green in color.

Why Lemons are Harvested at This Time:

Proper maturity improves juice content, taste, and market quality. Timely harvesting also increases shelf life and market value.
            ',

'climate_requirements' => '
Germination Temperature: 20°C – 25°C
Vegetative Growth: 25°C – 30°C
Fruit Development: 20°C – 28°C

Lemons grow best in warm and sunny climates. Proper sunlight and moderate humidity help healthy flowering and fruit development.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Well-drained soil is important because waterlogging can damage lemon roots and reduce fruit production.
            ',

'land_preparation' => '
Deep Ploughing: Loosens the soil
Leveling: Improves irrigation management
Pit Preparation: Helps root growth
Organic Matter Addition: Improves soil fertility

Good land preparation supports healthy root establishment and better fruit production.
            ',

'seed_selection' => '
Characteristics of Good Seedlings:
Healthy and disease-free
Strong root system
Certified nursery plants
High-yielding variety

Good quality plants produce healthy orchards and improve fruit yield.
            ',

'seed_rate' => '
Plant Spacing: 15–20 feet apart
Plants per Acre: Approximately 100–120 plants

Proper plant spacing ensures good sunlight penetration and healthy tree growth.
            ',

'irrigation_requirements' => '
Young Plant Stage: Frequent watering
Flowering Stage: Adequate moisture
Fruit Development Stage: Regular irrigation
Maturity Stage: Controlled watering

Lemon plants require regular irrigation especially during flowering and fruit formation stages.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and branch growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit quality and disease resistance

Balanced fertilizers improve fruit size, quality, and overall orchard production.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds begin sprouting and roots start developing under suitable moisture and temperature.

2. Seedling Stage  
Young plants develop leaves and establish roots. Proper care is important.

3. Vegetative Growth Stage  
Plants grow branches and leaves rapidly. Nutrients and irrigation are essential.

4. Flowering Stage  
Flowers begin to appear on healthy branches. Weather conditions affect pollination.

5. Fruit Setting Stage  
Small fruits start forming after pollination. Proper moisture is required.

6. Fruit Development Stage  
Fruits increase in size and juice content. Nutrients improve fruit quality.

7. Maturity Stage  
Fruits become fully mature with proper color and taste. Crop becomes ready for harvesting.

Each stage is important for obtaining high lemon yield and quality fruits.

",

'types_of_crop' => '
Sweet Lemon: Mild taste variety
Eureka Lemon: Commercial variety
Lisbon Lemon: High-yield variety
Rough Lemon: Common rootstock variety
            ',

'crop_varieties' => '
Eureka: Popular commercial variety
Lisbon: Good quality fruit
Meyer Lemon: Sweet flavor variety
Rough Lemon: Strong rootstock variety
            ',

'nutritional_value' => '
Vitamin C: Improves immunity
Fiber: Better digestion
Calcium: Bone strength
Antioxidants: Protect body cells
Minerals: Support body functions
            ',

'importance_of_crop' => '
Lemons are important for food, beverage, and medicine industries. They provide good income to farmers and have strong market demand. Lemons are also widely used in juices, pickles, beauty products, and health remedies.
            ',

'modern_technologies' => '
Drip irrigation
High-density planting
Hybrid citrus varieties
AI-based orchard monitoring
Modern pruning techniques

Modern technologies help farmers improve lemon production, save water, and increase fruit quality.
            ',
            ],
            [
                'crop_name' => 'GrapeFruit',

'introduction' => 'Grapefruit is an important citrus fruit crop grown in many warm regions of the world including Pakistan. It is known for its slightly sour and sweet taste and is widely used in juices, salads, medicines, and food products. Grapefruit farming provides income to farmers and supports the fruit export industry. The fruit is rich in vitamins, minerals, and antioxidants which make it highly beneficial for health. Grapefruit grows best in warm climates with proper sunlight and irrigation.',

'basic_information' => '
Crop Name: Grapefruit
Scientific Name: Citrus paradisi
Crop Type: Fruit Crop
Main Use: Juice, Salads, Medicines, Fresh Fruit
Sowing Season: February to March and August to September
Harvesting Season: November to March
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate
Best Soil Type: Sandy Loam and Well-Drained Soil
Major Areas: Punjab, Sindh, KPK
            ',

'sowing_season' => '
Grapefruit plants are usually planted during February to March and August to September in Pakistan. Moderate temperatures during these months help proper root development and healthy plant growth.

Why Grapefruit is Planted in These Seasons:

These seasons provide suitable environmental conditions with balanced temperature and moisture that support strong root establishment and healthy orchard development.
            ',

'harvesting_season' => '
Grapefruit is harvested from November to March depending on the variety and climate conditions. Fruits are ready when they become fully mature, juicy, and develop proper color.

Why Grapefruit is Harvested at This Time:

Cool and dry weather during this period improves fruit quality, sweetness, and shelf life. Proper maturity also increases market value.
            ',

'climate_requirements' => '
Germination Temperature: 20°C – 25°C
Vegetative Growth: 25°C – 30°C
Fruit Development: 20°C – 28°C

Grapefruit grows best in warm and sunny climates. Adequate sunlight and moderate humidity help proper flowering and fruit development.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Well-drained soil is important because waterlogging can damage roots and reduce fruit production.
            ',

'land_preparation' => '
Deep Ploughing: Improves soil aeration
Leveling: Ensures proper irrigation
Pit Preparation: Helps root establishment
Organic Matter Addition: Improves soil fertility

Good land preparation supports healthy tree growth and better fruit production.
            ',

'seed_selection' => '
Characteristics of Good Plants:
Healthy and disease-free
Strong root system
Certified nursery plants
High-yielding variety

Good quality plants improve orchard health and fruit production.
            ',

'seed_rate' => '
Plant Spacing: 18–20 feet apart
Plants per Acre: Approximately 90–110 plants

Proper spacing allows better sunlight penetration and healthy tree development.
            ',

'irrigation_requirements' => '
Young Plant Stage: Frequent irrigation
Flowering Stage: Adequate moisture
Fruit Development Stage: Regular watering
Maturity Stage: Controlled irrigation

Grapefruit plants require regular irrigation especially during flowering and fruit setting stages.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and branch growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit quality and disease resistance

Balanced fertilizers improve fruit size, taste, and overall crop yield.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds begin sprouting and roots start developing under proper moisture and temperature.

2. Seedling Stage  
Young plants develop leaves and establish roots. Proper care is essential.

3. Vegetative Growth Stage  
Plants grow branches and leaves rapidly. Nutrients and irrigation are important.

4. Flowering Stage  
Flowers begin to appear on mature branches. Pollination takes place during this stage.

5. Fruit Setting Stage  
Small fruits begin developing after pollination. Adequate water is necessary.

6. Fruit Development Stage  
Fruits increase in size and juice content. Nutrients improve quality and taste.

7. Maturity Stage  
Fruits become fully mature with proper color and flavor. Crop becomes ready for harvesting.

Each stage is important for obtaining high grapefruit yield and quality fruits.

",

'types_of_crop' => '
White Grapefruit: Light-colored flesh
Pink Grapefruit: Sweet and juicy variety
Red Grapefruit: Deep red flesh variety
Seedless Grapefruit: Popular commercial variety
            ',

'crop_varieties' => '
Marsh Seedless: Commercial variety
Ruby Red: Red flesh variety
Star Ruby: High-quality fruit
Duncan: Traditional seeded variety
            ',

'nutritional_value' => '
Vitamin C: Improves immunity
Fiber: Better digestion
Antioxidants: Protect body cells
Potassium: Supports heart health
Minerals: Improve body functions
            ',

'importance_of_crop' => '
Grapefruit is important for fresh fruit markets, juice industries, and export businesses. It provides good income to farmers and is valued for its nutritional and medicinal benefits.
            ',

'modern_technologies' => '
Drip irrigation
High-density orchard planting
Hybrid citrus varieties
AI-based orchard monitoring
Modern pruning systems

Modern technologies help farmers improve grapefruit production, reduce water wastage, and increase fruit quality.
            ',
            ],
            [
                'crop_name' => 'Sweet Lime',

'introduction' => 'Sweet lime is an important citrus fruit crop grown in Pakistan and many other countries. It is widely known for its sweet taste, refreshing juice, and health benefits. Sweet limes are commonly used in juices, fresh fruit consumption, and medicinal products. The crop provides good income to farmers and supports local fruit markets. Sweet lime grows best in warm climates with proper sunlight and irrigation.',

'basic_information' => '
Crop Name: Sweet Limes
Scientific Name: Citrus limetta
Crop Type: Fruit Crop
Main Use: Juice, Fresh Fruit, Medicines
Sowing Season: February to March and August to September
Harvesting Season: November to March
Ideal Temperature: 20°C – 32°C
Water Requirement: Moderate
Best Soil Type: Sandy Loam and Well-Drained Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
            ',

'sowing_season' => '
Sweet lime plants are usually planted during February to March and August to September in Pakistan. Moderate temperatures during these months help proper root establishment and healthy plant growth.

Why Sweet Limes are Planted in These Seasons:

These seasons provide favorable weather conditions with balanced moisture and temperature that support healthy orchard development.
            ',

'harvesting_season' => '
Sweet limes are harvested from November to March depending on the variety and climate conditions. Fruits are ready when they become juicy, fully developed, and light yellow or green in color.

Why Sweet Limes are Harvested at This Time:

Cool and dry weather improves fruit quality, sweetness, and shelf life. Proper maturity increases market value and consumer demand.
            ',

'climate_requirements' => '
Germination Temperature: 20°C – 25°C
Vegetative Growth: 25°C – 32°C
Fruit Development: 20°C – 28°C

Sweet lime grows best in warm and sunny climates. Adequate sunlight and moderate humidity support healthy flowering and fruit production.
            ',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Well-drained soil is necessary because waterlogging can damage roots and reduce fruit production.
            ',

'land_preparation' => '
Deep Ploughing: Improves soil aeration
Leveling: Helps irrigation management
Pit Preparation: Supports root establishment
Organic Matter Addition: Improves fertility

Good land preparation promotes healthy tree growth and higher fruit yield.
            ',

'seed_selection' => '
Characteristics of Good Plants:
Healthy and disease-free
Strong root system
Certified nursery plants
High-yielding variety

Good quality plants help establish productive orchards and improve fruit quality.
            ',

'seed_rate' => '
Plant Spacing: 15–20 feet apart
Plants per Acre: Approximately 100–120 plants

Proper spacing allows better sunlight penetration and air circulation for healthy tree growth.
            ',

'irrigation_requirements' => '
Young Plant Stage: Frequent irrigation
Flowering Stage: Adequate moisture
Fruit Development Stage: Regular watering
Maturity Stage: Controlled irrigation

Sweet lime plants require regular irrigation especially during flowering and fruit development stages.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and branch growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit quality and disease resistance

Balanced fertilizers improve fruit size, sweetness, and overall orchard production.
            ',

'growing_stages' => "

1. Germination Stage  
Seeds begin sprouting and roots start developing under suitable moisture and temperature.

2. Seedling Stage  
Young plants develop leaves and establish roots. Proper care is important.

3. Vegetative Growth Stage  
Plants grow branches and leaves rapidly. Nutrients and irrigation are necessary.

4. Flowering Stage  
Flowers begin to appear on mature branches. Pollination takes place during this stage.

5. Fruit Setting Stage  
Small fruits begin developing after pollination. Proper irrigation is important.

6. Fruit Development Stage  
Fruits increase in size and juice content. Nutrients improve fruit quality.

7. Maturity Stage  
Fruits become fully mature with proper color, taste, and sweetness. Crop becomes ready for harvesting.

Each stage is important for obtaining high sweet lime yield and quality fruits.

",

'types_of_crop' => '
Seedless Sweet Lime: Commercial variety
Juicy Sweet Lime: High juice content
Large Fruit Sweet Lime: Bigger fruit size
Local Sweet Lime: Common local variety
            ',

'crop_varieties' => '
Mitha: Popular sweet variety
Mosaic: Good quality fruit
Kaghzi Sweet Lime: Juicy variety
Local Selection: Adapted local variety
            ',

'nutritional_value' => '
Vitamin C: Improves immunity
Fiber: Better digestion
Antioxidants: Protect body cells
Calcium: Bone strength
Minerals: Support body functions
            ',

'importance_of_crop' => '
Sweet limes are important for fresh fruit markets, juice industries, and medicinal uses. They provide good income to farmers and are highly valued because of their nutritional and health benefits.
            ',

'modern_technologies' => '
Drip irrigation
High-density orchard planting
Hybrid citrus varieties
AI-based orchard monitoring
Modern pruning techniques

Modern technologies help farmers improve sweet lime production, save water, and increase fruit quality.
            ',
            ],
            [
                'crop_name' => 'Pomegranate',

'introduction' => 'Pomegranate is an important fruit crop grown in Pakistan and many other countries. It is famous for its sweet and juicy seeds and high nutritional value. Pomegranate farming provides good income to farmers because of its strong market demand in local and export markets. The fruit is widely consumed fresh and also used in juices, desserts, medicines, and food products. Pomegranate grows best in warm and dry climates.',

'basic_information' => '
Crop Name: Pomegranates
Scientific Name: Punica granatum
Crop Type: Fruit Crop
Main Use: Fresh Fruit, Juice, Medicine
Sowing Season: February to March and August to September
Harvesting Season: August to November
Ideal Temperature: 20°C – 35°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-drained Soil
Major Areas: Punjab, Sindh, Balochistan, KPK
            ',

'sowing_season' => '
Pomegranate plants are usually planted during February to March or August to September in Pakistan. These periods provide suitable temperature and moisture for proper root establishment and healthy plant growth.

Why Pomegranates are Planted in These Seasons:

Moderate weather conditions during these months help young plants establish quickly and reduce transplant stress.
            ',

'harvesting_season' => '
Pomegranates are harvested from August to November depending on the variety and climate conditions. Fruits are ready when they develop full color and produce a metallic sound when tapped.

Why Pomegranates are Harvested at This Time:

Warm weather and proper maturity during this period improve fruit sweetness, color, and quality.
            ',

'climate_requirements' => '
Germination Temperature: 20°C – 25°C
Vegetative Growth: 25°C – 35°C
Fruit Development: 20°C – 30°C

Pomegranates grow best in warm and dry climates. Excessive rainfall and humidity can damage fruit quality and increase disease risk.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Well-drained soil is important because waterlogging can damage roots and reduce fruit production.
            ',

'land_preparation' => '
Deep Ploughing: Improves soil structure
Leveling: Helps irrigation management
Pit Digging: Proper plant spacing
Organic Matter Addition: Improves fertility

Good land preparation promotes healthy root growth and better fruit production.
            ',

'seed_selection' => '
Characteristics of Good Plant Material:
Healthy and disease-free
Strong root system
Certified nursery plants
High yielding variety

Healthy plants ensure better orchard establishment and high fruit yield.
            ',

'seed_rate' => '
Plant Spacing: 12–15 feet apart
Plants per Acre: Approximately 180–250 plants

Proper spacing allows better sunlight penetration and air circulation.
            ',

'irrigation_requirements' => '
Plant Establishment Stage: Frequent watering
Flowering Stage: Moisture requirement increases
Fruit Development Stage: Regular irrigation
Maturity Stage: Controlled irrigation

Pomegranates require moderate irrigation. Excess water can cause fruit cracking and diseases.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Vegetative growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit quality and disease resistance

Balanced fertilizers improve fruit size, sweetness, and overall production.
            ',

'growing_stages' => "

1. Germination and Planting Stage  
Young plants establish roots and begin early growth. Proper moisture is important.

2. Vegetative Growth Stage  
Plants develop branches and green leaves rapidly.

3. Flowering Stage  
Flowers appear on branches and pollination begins.

4. Fruit Setting Stage  
Small fruits start developing after successful pollination.

5. Fruit Development Stage  
Fruits increase in size and seeds become juicy.

6. Ripening Stage  
Fruit color changes and sweetness increases.

7. Maturity Stage  
Fruits become fully mature and ready for harvesting.

Each stage is important for obtaining high-quality pomegranate production.

",

'types_of_crop' => '
Sweet Pomegranates: Used for fresh eating
Sour Pomegranates: Used in juices and medicines
Soft Seeded Pomegranates: Easy to consume
Hard Seeded Pomegranates: Longer shelf life
            ',

'crop_varieties' => '
Kandhari: Large fruit variety
Bedana: Soft seeded variety
Wonderful: Export quality variety
Bhagawa: High yielding variety
            ',

'nutritional_value' => '
Carbohydrates: Energy source
Vitamin C: Boosts immunity
Fiber: Improves digestion
Antioxidants: Protect body cells
Minerals: Support body health
            ',

'importance_of_crop' => '
Pomegranates are important for nutrition, health, and income generation. The fruit has high market demand and export value. It is widely used in juice industries, medicine production, and fresh fruit markets.
            ',

'modern_technologies' => '
Drip irrigation
Mulching technology
High-density orchards
AI-based crop monitoring
Modern pruning techniques

Modern technologies help farmers improve fruit quality, save water, and increase production.
            ',
            ],
            [
                'crop_name' => 'Apple',

'introduction' => 'Apple is one of the most important fruit crops grown in Pakistan and many other countries. It is highly valued for its delicious taste, nutritional benefits, and economic importance. Apple farming provides income to farmers and supports the fruit export industry. Apples are widely consumed fresh and are also used in juices, jams, desserts, and bakery products. Apple trees grow best in cool climates with sufficient winter chilling.',

'basic_information' => '
Crop Name: Apples
Scientific Name: Malus domestica
Crop Type: Fruit Crop
Main Use: Fresh Fruit, Juice, Jam
Sowing Season: December to February
Harvesting Season: July to October
Ideal Temperature: 15°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy and Well-drained Soil
Major Areas: Balochistan, KPK, Gilgit Baltistan
            ',

'sowing_season' => '
Apple plants are usually planted from December to February in Pakistan. Cool weather during winter helps proper root establishment and healthy early growth.

Why Apples are Planted in Winter:

Dormant winter season reduces plant stress and allows roots to establish before active spring growth begins.
            ',

'harvesting_season' => '
Apples are harvested from July to October depending on the variety and climatic conditions. Fruits are ready when they develop proper color, sweetness, and size.

Why Apples are Harvested at This Time:

Suitable summer and autumn temperatures help fruits mature properly and improve taste and quality.
            ',

'climate_requirements' => '
Germination Temperature: 15°C – 20°C
Vegetative Growth: 18°C – 24°C
Fruit Development: 20°C – 25°C

Apples grow best in cool climates with sufficient winter chilling. Extremely high temperatures can reduce fruit quality.
            ',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.0

Well-drained soil is essential because waterlogging can damage roots and reduce fruit production.
            ',

'land_preparation' => '
Deep Ploughing: Improves soil structure
Leveling: Helps irrigation management
Pit Digging: Proper plant spacing
Organic Matter Addition: Improves soil fertility

Good land preparation supports healthy root growth and better orchard development.
            ',

'seed_selection' => '
Characteristics of Good Plant Material:
Healthy and disease-free
Strong rootstock
Certified nursery plants
High yielding varieties

Good quality plants improve orchard performance and fruit yield.
            ',

'seed_rate' => '
Plant Spacing: 12–18 feet apart
Plants per Acre: Approximately 120–200 plants

Proper spacing allows better sunlight penetration and air circulation.
            ',

'irrigation_requirements' => '
Plant Establishment Stage: Frequent watering
Flowering Stage: Adequate moisture
Fruit Development Stage: Regular irrigation
Maturity Stage: Controlled irrigation

Apples require moderate irrigation. Excess water can affect fruit quality and root health.
            ',

'fertilizer_requirements' => '
Nitrogen (N): Vegetative growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit quality and disease resistance

Balanced fertilizers improve fruit size, color, sweetness, and production.
            ',

'growing_stages' => "

1. Dormant Stage  
Trees remain inactive during winter. Chilling helps proper flowering later.

2. Bud Break Stage  
Buds begin opening and new leaves appear.

3. Flowering Stage  
Flowers bloom and pollination takes place.

4. Fruit Setting Stage  
Small fruits begin developing after pollination.

5. Fruit Development Stage  
Fruits increase in size and accumulate nutrients.

6. Ripening Stage  
Fruits develop proper color, sweetness, and aroma.

7. Maturity Stage  
Apples become fully mature and ready for harvesting.

Each stage is important for obtaining high-quality apple production.

",

'types_of_crop' => '
Red Apples: Sweet and colorful
Green Apples: Slightly sour taste
Golden Apples: Soft and sweet
Crab Apples: Small-sized variety
            ',

'crop_varieties' => '
Golden Delicious: Sweet variety
Red Delicious: Popular commercial variety
Gala: Juicy and flavorful
Fuji: High quality export variety
            ',

'nutritional_value' => '
Carbohydrates: Energy source
Fiber: Better digestion
Vitamin C: Improves immunity
Antioxidants: Protect body cells
Minerals: Support body health
            ',

'importance_of_crop' => '
Apples are important for nutrition, health, and income generation. They have strong local and international market demand and contribute significantly to the fruit industry and exports.
            ',

'modern_technologies' => '
Drip irrigation
High-density orchards
Cold storage technology
AI-based crop monitoring
Modern pruning systems

Modern technologies help farmers improve fruit quality, increase yield, and reduce production losses.
            ',
            ],
            [
                'crop_name' => 'Date',

'introduction' => 'Dates are one of the most important fruit crops in arid and semi-arid regions, especially in Pakistan. They are widely consumed as a natural sweetener and are rich in energy and nutrients. Date farming plays an important role in the economy of southern Pakistan, especially in Sindh and Balochistan. Dates are also used in food processing, desserts, and traditional medicines. Pakistan is among the top producers of high-quality dates in the world.',

'basic_information' => '
Crop Name: Dates
Scientific Name: Phoenix dactylifera
Crop Type: Fruit Crop (Perennial Palm)
Main Use: Fresh eating, Dry fruit, Syrups, Desserts
Planting Season: February to April
Harvesting Season: June to September
Ideal Temperature: 30°C – 45°C
Water Requirement: Low to Moderate
Best Soil Type: Sandy, Loamy, Well-drained soil
Major Areas: Sindh (Khairpur), Balochistan, South Punjab
',

'sowing_season' => '
Dates are usually planted from February to April in Pakistan. This period provides warm weather which helps young palm trees establish strong roots. Farmers prefer spring planting because it supports better survival and growth of saplings.

Why Dates are Planted in Spring:

Warm temperatures and dry conditions help the young date palm adapt quickly to the environment and reduce the risk of disease.
',

'harvesting_season' => '
Dates are harvested from June to September depending on the variety and climate. Harvesting is done when fruits turn soft, sweet, and fully ripened.

Why Dates are Harvested in Summer:

Hot and dry weather helps the fruits ripen properly and reduces moisture, improving sweetness and shelf life.
',

'climate_requirements' => '
Germination/Establishment Temperature: 25°C – 35°C
Growth Stage: 30°C – 45°C
Fruit Ripening: 35°C – 45°C

Date palms grow best in hot, dry, and arid climates. They tolerate extreme heat and drought conditions very well.
',

'soil_requirements' => '
Suitable Soil:
Sandy soil
Loamy soil
Well-drained desert soil

Ideal pH: 7.0 – 8.5

Sandy and well-drained soil is best because date palms do not tolerate waterlogging.
',

'land_preparation' => '
Pit Digging: Deep pits for planting palm saplings
Organic Matter Mixing: Improves soil fertility
Leveling: Ensures proper irrigation flow
Weed Removal: Reduces competition for nutrients

Proper land preparation ensures strong root development and long-term plant growth.
',

'seed_selection' => '
Characteristics of Good Date Saplings:
Healthy offshoots or tissue-cultured plants
Disease-free
Strong root system
True to variety

Good quality planting material ensures high yield and better fruit quality.
',

'seed_rate' => '
Planting Density: 25–40 feet spacing between trees
Plants per acre: 40–70 date palms

Proper spacing is important for sunlight, air circulation, and fruit development.
',

'irrigation_requirements' => '
Establishment Stage: Regular watering for young plants
Flowering Stage: Controlled irrigation
Fruit Development Stage: Moderate irrigation
Ripening Stage: Reduced irrigation for better sweetness

Dates require less water compared to other fruit crops and are drought tolerant.
',

'fertilizer_requirements' => '
Nitrogen (N): Leaf and shoot growth
Phosphorus (P): Root development
Potassium (K): Fruit size and sweetness

Organic manure also improves soil fertility and long-term productivity.
',

'growing_stages' => "

1. Germination/Offshoot Stage  
New saplings or offshoots are planted and begin root establishment. Proper watering is important.

2. Vegetative Growth Stage  
The plant develops long leaves and strengthens its trunk.

3. Flowering Stage  
Male and female flowers develop for pollination.

4. Fruit Setting Stage  
Small fruits begin to form after pollination.

5. Fruit Development Stage  
Fruits grow in size and start accumulating sugars.

6. Ripening Stage  
Dates become soft, sweet, and change color depending on variety.

7. Harvesting Stage  
Fully ripened fruits are collected manually or using climbing methods.

Each stage is important for high-quality date production.

",

'types_of_crop' => '
Soft Dates: Moist and sweet
Semi-dry Dates: Balanced texture
Dry Dates: Low moisture and long shelf life
',

'crop_varieties' => '
Ajwa: Premium quality soft dates
Medjool: Large and sweet variety
Deglet Noor: Semi-dry popular variety
Dhakki: Famous Pakistani variety
',

'nutritional_value' => '
Carbohydrates: High energy source
Fiber: Improves digestion
Potassium: Heart health
Magnesium: Bone strength
Antioxidants: Boost immunity
',

'importance_of_crop' => '
Dates are a highly nutritious fruit and an important part of diet in many countries. They provide income to farmers, especially in desert regions. Dates are also widely used in export markets, food industries, and religious occasions.',

'modern_technologies' => '
Drip irrigation systems
Tissue culture propagation
Automated pollination techniques
Pest monitoring systems
Solar-powered irrigation pumps

Modern technologies help improve yield, fruit quality, and water efficiency in date farming.
',
            ],
            [
                'crop_name' => 'Mint',

'introduction' => 'Mint is an important aromatic herb widely used in food, medicines, and cosmetics. It is known for its refreshing aroma and cooling effect. Mint farming is popular because it grows quickly and can be harvested multiple times in a year. In Pakistan, mint is commonly used in chutneys, salads, drinks, and herbal remedies. It also has medicinal value for digestion and respiratory health.',

'basic_information' => '
Crop Name: Mint
Scientific Name: Mentha
Crop Type: Herb / Aromatic Crop
Main Use: Food flavoring, Chutney, Tea, Medicine, Essential oils
Sowing Season: February to April & September to October
Harvesting Season: April to June & November to January
Ideal Temperature: 15°C – 30°C
Water Requirement: Moderate to High
Best Soil Type: Loamy, Sandy loam, Moist soil
Major Areas: Punjab, Sindh, KPK (small scale farming)
',

'sowing_season' => '
Mint is usually sown twice a year: in spring (February to April) and in autumn (September to October). These seasons provide moderate temperatures that support fast germination and vegetative growth.

Why Mint is Sown in These Seasons:

Mint grows best in mild weather. Extreme heat or frost can damage young plants, so farmers choose moderate climate periods for better yield.
',

'harvesting_season' => '
Mint can be harvested multiple times in a year. The first harvest usually occurs 60–90 days after planting, followed by repeated cuttings every 30–40 days.

Why Mint is Harvested Repeatedly:

Mint is a fast-growing perennial herb. Regular harvesting encourages new leaf growth and improves overall production.
',

'climate_requirements' => '
Germination Temperature: 15°C – 25°C
Growth Temperature: 18°C – 30°C

Mint grows best in cool to moderate climates. High heat can reduce oil content and leaf quality, while mild weather promotes strong aroma and growth.
',

'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Moist and fertile soil

Ideal pH: 6.0 – 7.5

Mint prefers well-drained but moisture-retaining soil. Organic matter improves leaf quality and yield.
',

'land_preparation' => '
Ploughing: Makes soil loose and soft
Organic Manure: Improves fertility
Leveling: Ensures proper irrigation
Weed Removal: Reduces competition

Proper land preparation helps in faster root establishment and healthy leaf growth.
',

'seed_selection' => '
Characteristics of Good Planting Material:
Healthy runners or cuttings
Disease-free stems
High oil content variety
Fast-growing type

Mint is usually grown from cuttings instead of seeds for better quality and uniform growth.
',

'seed_rate' => '
Cutting Rate: 20,000 – 25,000 cuttings per acre
Spacing: 30–45 cm between rows

Proper spacing ensures good air circulation and healthy leaf production.
',

'irrigation_requirements' => '
Initial Stage: Frequent watering for establishment
Growth Stage: Regular irrigation every 7–10 days
After Harvest: Immediate irrigation for regrowth

Mint requires consistent moisture for high leaf yield and oil content.
',

'fertilizer_requirements' => '
Nitrogen (N): Promotes leaf growth
Phosphorus (P): Root development
Potassium (K): Improves oil quality

Organic compost also enhances aroma and productivity of mint leaves.
',

'growing_stages' => "

1. Planting Stage  
Cuttings are planted in moist soil and begin root formation.

2. Germination Stage  
Roots develop and new shoots start emerging.

3. Vegetative Growth Stage  
Rapid leaf growth begins and plant spreads quickly.

4. Branching Stage  
More stems and leaves develop, increasing biomass.

5. Leaf Development Stage  
Leaves become fully grown and aromatic.

6. Harvesting Stage  
First cutting is done when plants reach full height.

7. Regrowth Stage  
New shoots emerge after harvesting for repeated production.

Mint allows multiple harvests throughout the season.

",

'types_of_crop' => '
Spearmint: Mild flavor, widely used in food
Peppermint: Strong aroma, used in medicines and oils
Wild Mint: Naturally growing variety
',

'crop_varieties' => '
Mentha spicata: Spearmint variety
Mentha piperita: Peppermint variety
Arvensis Mint: High oil content variety
',

'nutritional_value' => '
Vitamin A: Eye health
Vitamin C: Immunity boost
Iron: Blood health
Antioxidants: Protect body cells
Fiber: Improves digestion
',

'importance_of_crop' => '
Mint is widely used in food, beverages, and medicine. It has high commercial value due to its essential oils. Mint farming provides quick income to farmers because of its fast growth and multiple harvests.',

'modern_technologies' => '
Drip irrigation systems
Hydroponic mint farming
Essential oil extraction machines
Improved hybrid varieties
Precision nutrient management

Modern technologies help improve yield, oil quality, and disease resistance in mint farming.
',
            ],
            [
                'crop_name' => 'Fennel',

'introduction' => 'Fennel is an important spice and medicinal crop widely grown for its aromatic seeds. It is commonly used in cooking, confectionery, herbal medicines, and as a mouth freshener. In Pakistan, fennel farming is especially important in Sindh and Punjab. It has high commercial value due to its demand in both local and international markets. Fennel is known for its sweet aroma and digestive health benefits.',

'basic_information' => '
Crop Name: Fennel
Scientific Name: Foeniculum vulgare
Crop Type: Rabi (Winter Spice Crop)
Main Use: Spice, Mouth freshener, Medicine, Tea, Flavoring agent
Sowing Season: October to November
Harvesting Season: February to April
Ideal Temperature: 10°C – 25°C
Water Requirement: Moderate
Best Soil Type: Loamy, Sandy loam, Well-drained soil
Major Areas: Sindh (Khairpur), Punjab, Balochistan
',

'sowing_season' => '
Fennel is usually sown from October to November in Pakistan. Cool winter weather supports proper germination and vegetative growth.

Why Fennel is Sown in Winter:

Fennel requires cool temperatures for good seed development and aroma formation. Winter season provides ideal conditions for healthy crop growth.
',

'harvesting_season' => '
Fennel is harvested from February to April when seeds turn greenish-yellow and start drying on the plant.

Why Fennel is Harvested in Spring:

Dry and mild weather helps in proper seed drying and improves aroma, flavor, and storage quality.
',

'climate_requirements' => '
Germination Temperature: 10°C – 20°C
Growth Temperature: 15°C – 25°C
Seed Formation: 20°C – 25°C

Fennel grows best in cool and dry climates. Excess heat reduces oil content and seed quality.
',

'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 6.0 – 8.0

Well-drained soil is important because fennel does not tolerate waterlogging.
',

'land_preparation' => '
Ploughing: Loosens soil for root growth
Leveling: Ensures uniform irrigation
Organic Manure: Improves fertility
Weed Removal: Reduces competition

Proper land preparation supports strong plant development and better yield.
',

'seed_selection' => '
Characteristics of Good Seed:
High-quality certified seed
Disease-free seeds
High germination rate
Aromatic variety

Good seed ensures better yield and strong plant growth.
',

'seed_rate' => '
Seed Requirement: 4–6 kg per acre
Spacing: 45–60 cm between rows

Proper seed rate ensures healthy plant spacing and better air circulation.
',

'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing
Vegetative Stage: Irrigation every 10–15 days
Flowering Stage: Moderate irrigation
Seed Formation Stage: Controlled irrigation

Fennel requires moderate watering and cannot tolerate waterlogging.
',

'fertilizer_requirements' => '
Nitrogen (N): Leaf growth
Phosphorus (P): Root and seed development
Potassium (K): Improves aroma and seed quality

Organic compost improves oil content and overall yield.
',

'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and begin sprouting within 7–10 days.

2. Seedling Stage  
Small plants develop leaves and roots strengthen.

3. Vegetative Stage  
Plant grows taller with more branches and leaves.

4. Flowering Stage  
Small yellow flowers appear on plant umbels.

5. Seed Formation Stage  
Seeds start developing and maturing.

6. Maturity Stage  
Seeds turn greenish-yellow and become ready for harvesting.

7. Harvesting Stage  
Plants are cut and dried before seed extraction.

Each stage is important for producing high-quality fennel seeds.

",

'types_of_crop' => '
Sweet Fennel: Commonly used for spice and mouth freshener
Bitter Fennel: Used for medicinal purposes
Wild Fennel: Naturally grown variety
',

'crop_varieties' => '
Local Fennel: Traditional variety
Gujrati Fennel: High aroma variety
Improved Hybrid Fennel: High yield variety
',

'nutritional_value' => '
Fiber: Improves digestion
Calcium: Bone health
Iron: Blood health
Antioxidants: Boost immunity
Essential oils: Improve metabolism
',

'importance_of_crop' => '
Fennel is an important spice crop used in food, medicine, and confectionery industries. It has high demand in local and export markets. It also provides good income to farmers due to its strong aroma and medicinal value.',

'modern_technologies' => '
Drip irrigation systems
Improved hybrid seed varieties
Mechanized harvesting
Soil testing techniques
Precision fertilizer management

Modern technologies help increase fennel yield and improve seed quality.
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
