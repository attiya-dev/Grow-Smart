<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Crop;
use App\Models\CropDetail;

class CropDetail1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cropDetails = [

            [
                'crop_name' => 'Bitter Gourd',

                'introduction' => 'Bitter gourd is an important vegetable crop grown in Pakistan and many tropical and subtropical regions. It is widely used in cooking due to its medicinal value and health benefits. Bitter gourd is known for its bitter taste and is rich in vitamins and minerals that help control blood sugar and improve digestion. It is a fast-growing vine crop that provides good income to farmers.',

                'basic_information' => '
Crop Name: Bitter Gourd
Scientific Name: Momordica charantia
Crop Type: Kharif Vegetable Crop
Main Use: Vegetable, Medicinal Use, Cooking
Sowing Season: February to March and June to July
Harvesting Season: April to June and August to October
Ideal Temperature: 24°C – 32°C
Water Requirement: Moderate
Best Soil Type: Sandy loam and Loamy soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

                'sowing_season' => '
Bitter gourd is sown in two main seasons: spring (February–March) and summer (June–July).

Why Bitter Gourd is Sown in These Seasons:
It grows best in warm weather and cannot tolerate frost or very cold conditions. Warm temperature helps proper vine growth and flowering.
',

                'harvesting_season' => '
Bitter gourd is harvested 55–70 days after sowing depending on variety.

Why Bitter Gourd is Harvested at This Time:
Fruits are picked when they are green, tender, and still immature for better taste and market value.
',

                'climate_requirements' => '
Germination Temperature: 22°C – 30°C
Vegetative Growth: 24°C – 32°C
Fruit Development: 25°C – 30°C

Bitter gourd grows best in warm climates and requires full sunlight for healthy growth.
',

                'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained soil rich in organic matter supports better vine growth and fruit production.
',

                'land_preparation' => '
Ploughing: Loosens soil for root development
Bed Formation: Raised beds improve drainage
Weed Removal: Reduces competition
Organic Matter: Improves soil fertility

Proper land preparation ensures healthy vine growth and higher yield.
',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free seeds
Certified hybrid variety
Uniform seed size

Good seeds ensure healthy plants and better fruit production.
',

                'seed_rate' => '
Seed Rate: 2–3 kg per acre

Proper spacing helps vines spread and produce healthy fruits.
',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing
Vegetative Stage: Regular watering every 7–10 days
Flowering Stage: Adequate moisture required
Fruit Development Stage: Frequent but controlled irrigation

Bitter gourd requires balanced watering; waterlogging should be avoided.
',

                'fertilizer_requirements' => '
Nitrogen (N): Vine and leaf growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit quality and yield

Balanced fertilizers improve plant health and production.
',

                'growing_stages' => "

1. Germination Stage  
Seeds sprout in warm soil conditions.

2. Seedling Stage  
Small vines start developing leaves.

3. Vine Growth Stage  
Rapid spreading of vines and tendrils.

4. Flowering Stage  
Male and female flowers appear.

5. Fruit Formation Stage  
Small bitter gourds develop.

6. Fruit Development Stage  
Fruits grow in size and become mature.

7. Harvesting Stage  
Tender green fruits are harvested regularly.

Each stage is important for high yield production.

",

                'types_of_crop' => '
Indian Bitter Gourd: Long and spiny variety
Chinese Bitter Gourd: Light green and smoother
Hybrid Varieties: High yielding types
Local Varieties: Traditional Pakistani types
',

                'crop_varieties' => '
Pusa Do Mausmi: Popular improved variety
Arka Harit: High yielding variety
Priya Hybrid: Disease resistant
Local Green Long: Common cultivated type
',

                'nutritional_value' => '
Vitamin C: Boosts immunity
Vitamin A: Eye health
Iron: Improves blood health
Fiber: Aids digestion
Antioxidants: Help control blood sugar
',

                'importance_of_crop' => '
Bitter gourd is an important vegetable and medicinal crop. It is widely consumed for its health benefits, especially for controlling diabetes and improving digestion. It also provides good income to farmers.',
            ],

            [
                'crop_name' => 'Mung',

                'introduction' => 'Mung (Mung bean) is an important pulse crop grown in Pakistan and many other countries. It is widely consumed as dal (lentils) and is rich in protein, making it an essential part of daily diet. Mung crop improves soil fertility by fixing nitrogen and is also beneficial for crop rotation systems in agriculture.',

                'basic_information' => '
Crop Name: Mung
Scientific Name: Vigna radiata
Crop Type: Kharif Pulse Crop
Main Use: Dal (Lentils), Sprouts, Food Products
Sowing Season: March to July
Harvesting Season: June to October
Ideal Temperature: 25°C – 35°C
Water Requirement: Low to Moderate
Best Soil Type: Sandy loam and Loamy Soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

                'sowing_season' => '
Mung is usually sown from March to July in Pakistan.

Why Mung is Sown in These Seasons:
It grows best in warm climates and requires relatively less water. Summer conditions support good germination and growth.
',

                'harvesting_season' => '
Mung is harvested 60–90 days after sowing depending on variety.

Why Mung is Harvested at This Time:
Pods are harvested when they turn dark brown and dry properly, ensuring good seed quality and yield.
',

                'climate_requirements' => '
Germination Temperature: 25°C – 35°C
Vegetative Growth: 25°C – 35°C
Pod Formation: 28°C – 35°C

Mung grows best in hot and dry climates and cannot tolerate frost or waterlogging.
',

                'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained light soil

Ideal pH: 6.0 – 7.5

Well-drained soil is essential for healthy root development and nodulation.
',

                'land_preparation' => '
Ploughing: Loosens soil for better root growth
Weed Removal: Reduces competition
Leveling: Ensures uniform moisture
Organic Matter: Improves soil fertility

Proper land preparation improves germination and yield.
',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free seeds
Clean and uniform size
Certified improved variety

Good seed ensures healthy crop growth and better yield.
',

                'seed_rate' => '
Seed Rate: 8–12 kg per acre

Proper spacing helps in better plant growth and pod formation.
',

                'irrigation_requirements' => '
Germination Stage: Light irrigation if needed
Vegetative Stage: 1–2 irrigations depending on soil moisture
Flowering Stage: Critical watering required
Pod Filling Stage: Moderate irrigation

Mung requires less water compared to other crops and is drought tolerant.
',

                'fertilizer_requirements' => '
Nitrogen (N): Early plant growth
Phosphorus (P): Root and nodulation development
Potassium (K): Pod formation and quality

Excess nitrogen should be avoided as it reduces nitrogen fixation ability.
',

                'growing_stages' => "

1. Germination Stage  
Seeds sprout within a few days in warm soil.

2. Seedling Stage  
Small plants develop leaves and roots.

3. Vegetative Stage  
Plant grows stems and branches.

4. Flowering Stage  
Small yellow flowers appear.

5. Pod Formation Stage  
Pods start developing after pollination.

6. Pod Filling Stage  
Seeds develop inside pods.

7. Maturity Stage  
Pods dry and are ready for harvesting.

Each stage is important for good yield.

",

                'types_of_crop' => '
Green Mung: Most common variety
Black Mung: Dark seeded variety
Hybrid Mung: High yielding varieties
Desi Mung: Traditional local type
',

                'crop_varieties' => '
NM-2011: High yielding variety
Azri Mung-2006: Disease resistant
Ramzan Mung: Early maturing variety
Chakwal Mung: Popular local variety
',

                'nutritional_value' => '
Protein: High plant protein source
Fiber: Improves digestion
Iron: Helps blood health
Folate: Important for body growth
Vitamins: Supports immunity
',

                'importance_of_crop' => '
Mung is an important pulse crop that provides affordable protein to humans. It also improves soil fertility by fixing nitrogen, making it valuable for sustainable agriculture.',
            ],

            [
                'crop_name' => 'Turmeric',

                'introduction' => 'Turmeric is an important spice crop grown in Pakistan and many tropical countries. It is widely used in cooking, medicine, and cosmetics. Turmeric is known for its yellow color and strong medicinal properties. It contains curcumin which has anti-inflammatory and antioxidant benefits. It is a high-value cash crop for farmers.',

                'basic_information' => '
Crop Name: Turmeric
Scientific Name: Curcuma longa
Crop Type: Kharif Spice Crop
Main Use: Spice, Medicine, Cosmetics, Food Coloring
Sowing Season: April to June
Harvesting Season: January to March
Ideal Temperature: 20°C – 35°C
Water Requirement: Moderate to High
Best Soil Type: Loamy and Sandy loam soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

                'sowing_season' => '
Turmeric is sown from April to June in Pakistan.

Why Turmeric is Sown in These Seasons:
Warm and humid conditions during this period support proper rhizome sprouting and vegetative growth.
',

                'harvesting_season' => '
Turmeric is harvested after 7–9 months of planting, usually from January to March.

Why Turmeric is Harvested at This Time:
Plants dry naturally, and rhizomes mature fully, developing strong color and aroma.
',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 35°C
Rhizome Development: 20°C – 30°C

Turmeric grows best in warm and humid climates with sufficient rainfall.
',

                'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Well-drained fertile soil rich in organic matter is essential for good rhizome development.
',

                'land_preparation' => '
Ploughing: Loosens soil deeply for rhizome growth
Bed Formation: Raised beds improve drainage
Organic Matter: Improves soil fertility
Weed Control: Reduces competition

Proper land preparation ensures healthy rhizome development.
',

                'seed_selection' => '
Characteristics of Good Seed (Rhizomes):
Healthy and disease-free rhizomes
Medium sized fingers
High sprouting ability
Certified planting material

Good quality seed ensures strong crop growth.
',

                'seed_rate' => '
Seed Rate: 800–1000 kg rhizomes per acre

Proper spacing ensures better rhizome development and yield.
',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after planting
Vegetative Stage: Regular irrigation every 7–10 days
Rhizome Development Stage: Frequent watering required
Maturity Stage: Reduced irrigation before harvesting

Turmeric requires consistent moisture but does not tolerate waterlogging.
',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and plant growth
Phosphorus (P): Root and rhizome development
Potassium (K): Quality and disease resistance

Organic manure is also very important for better yield.
',

                'growing_stages' => "

1. Planting Stage  
Rhizomes are planted in prepared soil beds.

2. Sprouting Stage  
Shoots emerge from rhizomes.

3. Vegetative Stage  
Leaves grow and plant develops fully.

4. Rhizome Development Stage  
Underground rhizomes start expanding.

5. Flowering Stage  
Plant produces flowers in some varieties.

6. Maturity Stage  
Leaves dry and rhizomes mature.

7. Harvesting Stage  
Rhizomes are carefully dug out.

Each stage is important for high-quality turmeric production.

",

                'types_of_crop' => '
Alleppey Turmeric: High curcumin variety
Madras Turmeric: Widely cultivated type
Lakadong Turmeric: High medicinal value
Local Varieties: Traditional Pakistani types
',

                'crop_varieties' => '
Suvarna: High yielding variety
Roma: Disease resistant
Suguna: Popular hybrid type
Erode Local: Traditional variety
',

                'nutritional_value' => '
Curcumin: Anti-inflammatory compound
Iron: Blood health
Fiber: Improves digestion
Vitamin C: Boosts immunity
Antioxidants: Protects body cells
',

                'importance_of_crop' => '
Turmeric is an important spice and medicinal crop. It is widely used in food, traditional medicine, and cosmetic industries. It provides good income to farmers due to high market demand.',
            ],

            [
                'crop_name' => 'Cucumber',

                'introduction' => 'Cucumber is an important vegetable crop grown in Pakistan and many other countries. It is widely used in salads, pickles, and fresh consumption due to its high water content and cooling effect. Cucumber is a fast-growing vine crop that provides quick income to farmers and is rich in vitamins and minerals.',

                'basic_information' => '
Crop Name: Cucumber
Scientific Name: Cucumis sativus
Crop Type: Kharif and Summer Vegetable Crop
Main Use: Salad, Pickles, Fresh Vegetable
Sowing Season: February to March and June to July
Harvesting Season: April to June and August to October
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate
Best Soil Type: Sandy loam and Loamy soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

                'sowing_season' => '
Cucumber is sown in two main seasons: spring (February–March) and summer (June–July).

Why Cucumber is Sown in These Seasons:
It grows best in warm weather and cannot tolerate frost or extreme cold conditions.
',

                'harvesting_season' => '
Cucumber is harvested 45–60 days after sowing depending on variety.

Why Cucumber is Harvested at This Time:
Fruits are picked when they are young, tender, and green for best taste and quality.
',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 20°C – 30°C
Fruit Development: 22°C – 30°C

Cucumber grows best in warm and humid climates with sufficient sunlight.
',

                'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.0

Well-drained soil rich in organic matter ensures healthy vine growth and fruit production.
',

                'land_preparation' => '
Ploughing: Loosens soil for root development
Bed Formation: Raised beds improve drainage
Weed Removal: Reduces competition
Organic Matter: Improves fertility

Proper land preparation ensures healthy plant growth and higher yield.
',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free seeds
Certified hybrid variety
Uniform seed size

Good seeds ensure strong vine growth and better fruit production.
',

                'seed_rate' => '
Seed Rate: 1.5–2.5 kg per acre

Proper spacing ensures healthy vine spreading and fruit development.
',

                'irrigation_requirements' => '
Initial Stage: Light irrigation after sowing
Vegetative Stage: Regular watering every 7–10 days
Flowering Stage: Adequate moisture required
Fruit Development Stage: Frequent but controlled irrigation

Cucumber requires consistent moisture but does not tolerate waterlogging.
',

                'fertilizer_requirements' => '
Nitrogen (N): Vine and leaf growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit quality and yield

Balanced fertilizers improve plant health and production.
',

                'growing_stages' => "

1. Germination Stage  
Seeds sprout in warm soil.

2. Seedling Stage  
Small vines develop leaves.

3. Vine Growth Stage  
Rapid spreading of vines occurs.

4. Flowering Stage  
Male and female flowers appear.

5. Fruit Formation Stage  
Small cucumbers begin to grow.

6. Fruit Development Stage  
Fruits enlarge and become tender.

7. Harvesting Stage  
Mature cucumbers are picked regularly.

Each stage is important for good yield.

",

                'types_of_crop' => '
Slicing Cucumber: Used in salads
Pickling Cucumber: Used for pickles
Burpless Cucumber: Mild taste variety
Hybrid Cucumber: High yielding varieties
',

                'crop_varieties' => '
Poinsett: Disease resistant variety
Straight Eight: Popular slicing type
Japanese Long Green: Long variety
Local Green: Traditional Pakistani variety
',

                'nutritional_value' => '
Water: High hydration content
Vitamin K: Bone health
Vitamin C: Immunity boost
Potassium: Heart health
Fiber: Improves digestion
',

                'importance_of_crop' => '
Cucumber is an important vegetable crop that provides nutrition and hydration. It is widely consumed in households and supports farmers with quick income generation.',
            ],

            [
                'crop_name' => 'Eggplant(Brinjal)',

                'introduction' => 'Eggplant, commonly known as Brinjal, is an important vegetable crop grown in Pakistan and many other countries. It is widely used in daily cooking for curries, baran, bharta, and fried dishes. Brinjal farming provides good income to farmers due to its long harvesting period and high market demand. It grows well in warm climates and can produce multiple harvests over an extended season.',

                'basic_information' => '
Crop Name: Eggplant (Brinjal)
Scientific Name: Solanum melongena
Crop Type: Kharif / Warm Season Vegetable
Main Use: Curries, Bharta, Frying, Cooking
Sowing Season: February to April (Spring) and August to September (Monsoon)
Harvesting Season: 60–90 days after transplanting (multiple pickings)
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate
Best Soil Type: Loamy and well-drained fertile soil
Major Areas: Punjab, Sindh, KPK, Balochistan
',

                'sowing_season' => '
Eggplant is usually sown in nurseries from February to April in spring and again in August to September in monsoon season. Seedlings are transplanted into fields after 4–6 weeks when they are strong enough.

Why Eggplant is Sown in These Seasons:

Brinjal requires warm temperatures for proper germination and growth. Moderate warmth and humidity help seedlings establish quickly and support healthy plant development.
',

                'harvesting_season' => '
Eggplant is harvested 60–90 days after transplanting. Once fruits reach proper size, color, and shine, they are picked. Harvesting continues for several weeks as new fruits keep forming.

Why Eggplant is Harvested in Stages:

Brinjal produces fruits continuously over time. Regular picking encourages new fruit growth and increases total yield.
',

                'climate_requirements' => '
Germination Temperature: 25°C – 30°C
Vegetative Growth: 22°C – 30°C
Fruit Development: 20°C – 28°C

Eggplant grows best in warm climates. Extreme cold or frost can damage the plant and reduce yield.
',

                'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Loose and fertile soil supports strong root development and better fruit production.
',

                'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Leveling: Ensures proper irrigation
Organic Matter: Add compost or farmyard manure
Weed Removal: Removes unwanted plants

Proper land preparation improves root growth and increases yield quality.
',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free seeds
Certified hybrid or improved varieties
Uniform seed size

Good quality seeds produce healthy seedlings and better fruit yield.
',

                'seed_rate' => '
Nursery Method: 150–200 grams per acre (for transplanting)
Direct Seeding: 250–300 grams per acre

Correct seed rate ensures healthy plant population and balanced growth.
',

                'irrigation_requirements' => '
Nursery Stage: Light and regular watering
Vegetative Stage: Moderate irrigation
Flowering Stage: Regular moisture supply
Fruit Development: Frequent irrigation for better yield

Eggplant needs consistent moisture but waterlogging should be avoided.
',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and plant growth
Phosphorus (P): Root development
Potassium (K): Fruit quality and disease resistance

Balanced fertilizers improve plant strength, fruit size, and production.
',

                'growing_stages' => "

1. Germination Stage  
Seeds sprout in nursery beds under warm conditions. Moisture is important for healthy germination.

2. Seedling Stage  
Young plants develop leaves and roots in the nursery. Proper care ensures strong transplants.

3. Transplanting Stage  
Seedlings are moved to the main field. Proper spacing is maintained for growth.

4. Vegetative Stage  
Plants grow stems and leaves rapidly. Nutrients and water are important.

5. Flowering Stage  
Flowers appear and pollination begins. Healthy conditions improve fruit setting.

6. Fruit Development Stage  
Small fruits develop and grow in size. Regular irrigation is required.

7. Harvesting Stage  
Mature fruits are picked multiple times over the season.

Each stage is important for achieving high brinjal yield.

",

                'types_of_crop' => '
Long Purple Brinjal: Common variety with long fruits
Round Brinjal: Small and round shape variety
Hybrid Brinjal: High yield and disease resistant
Green Brinjal: Less common green-colored variety
',

                'crop_varieties' => '
Black Beauty: Popular dark purple variety
Round Purple: Common round brinjal type
Hybrid F1 Varieties: High yield hybrids
Desi Brinjal: Traditional local variety
',

                'nutritional_value' => '
Fiber: Improves digestion
Vitamins: Vitamin C and K
Minerals: Potassium and magnesium
Antioxidants: Supports health and immunity
Low Calories: Helpful for weight control
',

                'importance_of_crop' => '
Eggplant is an important vegetable crop used in daily diets. It provides income to farmers due to continuous harvesting and high demand in local markets. It is also used in restaurants and food industries for various dishes.
',
            ],

            [
                'crop_name' => 'Chilli',

                'introduction' => 'Chillies are an important spice crop grown in Pakistan and many other countries. They are widely used in daily cooking to add flavor, heat, and color to food. Chillies are an essential ingredient in spice industries and food processing. Pakistan produces both green chillies for fresh use and red chillies for drying and powder production. This crop provides good income to farmers due to high domestic and export demand.',

                'basic_information' => '
Crop Name: Chillies
Scientific Name: Capsicum annuum
Crop Type: Kharif / Warm Season Spice Crop
Main Use: Spice, Cooking, Pickles, Powder (Red Chilli)
Sowing Season: February to April (Spring) and June to July (Monsoon)
Harvesting Season: Green chillies after 60–80 days, red chillies after 120–150 days
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate
Best Soil Type: Well-drained loamy soil
Major Areas: Sindh, Punjab, KPK, Balochistan
',

                'sowing_season' => '
Chillies are sown in nurseries from February to April for spring crop and June to July for monsoon crop. Seedlings are transplanted after 4–6 weeks when they are strong enough.

Why Chillies are Sown in These Seasons:

Chillies require warm temperatures for proper germination and growth. Mild warm weather helps seedlings establish quickly and supports healthy vegetative development.
',

                'harvesting_season' => '
Chillies can be harvested in multiple stages. Green chillies are picked 60–80 days after transplanting, while red chillies are harvested after full maturity at 120–150 days.

Why Chillies are Harvested in Stages:

Frequent harvesting encourages new fruit production and increases total yield. Red chillies are harvested later for drying and powder making.
',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 22°C – 30°C
Fruit Development: 20°C – 28°C

Chillies grow best in warm and dry climates. Excess humidity or frost can reduce flowering and fruit quality.
',

                'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Good drainage is essential because chilli plants do not tolerate waterlogging.
',

                'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Leveling: Ensures proper irrigation
Organic Matter: Add compost or farmyard manure
Weed Removal: Removes competing plants

Proper land preparation improves root growth and fruit production.
',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free seeds
Certified hybrid or improved varieties
Uniform seed size and color

Good seeds ensure healthy plants and higher yield.
',

                'seed_rate' => '
Nursery Method: 150–200 grams per acre
Transplanting: 40,000–60,000 plants per acre

Correct seed rate ensures proper plant spacing and better fruit development.
',

                'irrigation_requirements' => '
Nursery Stage: Light and frequent watering
Vegetative Stage: Moderate irrigation
Flowering Stage: Regular moisture supply
Fruit Development: Controlled irrigation (avoid water stress)

Chillies need balanced moisture; both drought and waterlogging reduce yield.
',

                'fertilizer_requirements' => '
Nitrogen (N): Vegetative growth
Phosphorus (P): Root and flower development
Potassium (K): Fruit size, color, and pungency

Balanced fertilizers improve yield, fruit quality, and plant health.
',

                'growing_stages' => "

1. Germination Stage  
Seeds sprout in nursery beds under warm and moist conditions. Proper moisture is essential.

2. Seedling Stage  
Young plants develop leaves and roots in the nursery. Healthy seedlings are selected for transplanting.

3. Transplanting Stage  
Seedlings are moved to the main field with proper spacing for growth.

4. Vegetative Stage  
Plants grow stems and leaves rapidly. Nutrients and water are important.

5. Flowering Stage  
Small flowers appear and pollination begins. Weather conditions affect fruit setting.

6. Fruit Development Stage  
Green fruits develop and gradually increase in size. Regular care improves yield.

7. Maturity & Harvesting Stage  
Fruits are harvested as green chillies or left to ripen for red chillies.

Each stage is important for achieving high chilli yield.

",

                'types_of_crop' => '
Green Chillies: Fresh use in cooking
Red Chillies: Used for drying and powder
Hybrid Chillies: High yield and disease resistant varieties
Mild Chillies: Less spicy varieties for general cooking
',

                'crop_varieties' => '
Nagina Chilli: Popular local variety
Talhari Chilli: High pungency variety
Hybrid F1 Varieties: High yield types
Long Red Chilli: Used for drying and powder
',

                'nutritional_value' => '
Vitamin C: Boosts immunity
Vitamin A: Good for vision
Capsaicin: Provides spiciness and health benefits
Antioxidants: Protects body cells
Minerals: Supports overall health
',

                'importance_of_crop' => '
Chillies are an essential spice crop used daily in households and food industries. They are important for flavoring food and producing chilli powder. The crop provides good income to farmers due to strong demand in local and export markets.
',
            ],

            [
                'crop_name' => 'Soybean',

                'introduction' => 'Soybean is an important oilseed and protein-rich crop grown in Pakistan and many other countries. It is widely used for producing edible oil, animal feed, and protein-based food products. Soybean plays a key role in improving soil fertility because it fixes nitrogen in the soil. It is becoming increasingly important due to rising demand for vegetable oil and plant-based protein.',

                'basic_information' => '
Crop Name: Soybean
Scientific Name: Glycine max
Crop Type: Kharif (Summer Oilseed Crop)
Main Use: Edible oil, animal feed, protein products, soy milk
Sowing Season: June to July
Harvesting Season: September to November
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate
Best Soil Type: Well-drained loamy soil
Major Areas: Punjab, Sindh, KPK
',

                'sowing_season' => '
Soybean is usually sown in June to July in Pakistan during the Kharif season. Farmers prefer early monsoon conditions for better germination and growth.

Why Soybean is Sown in This Season:

Soybean requires warm temperatures and sufficient moisture for germination. Monsoon rains help in early growth and improve plant establishment.
',

                'harvesting_season' => '
Soybean is harvested from September to November depending on variety and planting time. The crop is ready when pods turn brown and leaves start drying.

Why Soybean is Harvested at This Time:

At maturity, seeds become hard and moisture content decreases. Dry weather helps in proper pod drying and reduces seed damage.
',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 22°C – 30°C
Pod Formation: 20°C – 28°C

Soybean grows best in warm climates with moderate rainfall. Extreme heat or waterlogging can reduce yield.
',

                'soil_requirements' => '
Suitable Soil:
Loamy soil
Sandy loam soil
Well-drained fertile soil

Ideal pH: 6.0 – 7.5

Well-drained soil is important because soybean does not tolerate waterlogging.
',

                'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Leveling: Ensures proper water distribution
Organic Matter: Add compost or farmyard manure
Weed Control: Removes competing weeds

Good land preparation improves root development and nitrogen fixation.
',

                'seed_selection' => '
Characteristics of Good Seed:
High germination rate
Disease-free certified seed
Improved high-yield variety
Uniform and healthy seeds

Good seeds ensure strong crop establishment and higher yield.
',

                'seed_rate' => '
Seed Rate: 25–35 kg per acre

Proper seed rate ensures balanced plant population and better pod formation.
',

                'irrigation_requirements' => '
Germination Stage: Light irrigation if rainfall is low
Vegetative Stage: Moderate irrigation
Flowering Stage: Critical water requirement
Pod Filling Stage: Proper moisture needed

Soybean is sensitive to both drought and waterlogging, so balanced irrigation is required.
',

                'fertilizer_requirements' => '
Nitrogen (N): Initial plant growth (soybean also fixes nitrogen naturally)
Phosphorus (P): Root development and nodulation
Potassium (K): Pod formation and seed quality

Balanced fertilizer use improves yield and soil fertility.
',

                'growing_stages' => "

1. Germination Stage  
Seeds absorb moisture and sprout. Roots and shoots begin to develop under warm conditions.

2. Seedling Stage  
Young plants develop leaves and establish strong roots.

3. Vegetative Stage  
Plant grows stems and leaves rapidly. Nitrogen fixation begins in root nodules.

4. Flowering Stage  
Flowers appear and pollination starts. Weather conditions strongly affect yield.

5. Pod Formation Stage  
Pods start developing and seeds begin forming inside.

6. Seed Filling Stage  
Seeds grow and accumulate nutrients. Proper moisture is important.

7. Maturity Stage  
Pods turn brown and plants dry, indicating readiness for harvest.

Each stage is essential for achieving high soybean yield.

",

                'types_of_crop' => '
Determinate Soybean: Short duration, uniform maturity
Indeterminate Soybean: Continuous growth and flowering
High-Oil Varieties: Used for oil production
High-Protein Varieties: Used for food and feed
',

                'crop_varieties' => '
NARC Soybean: Common local variety
Williams-82: Improved yield variety
Ajmeri Soybean: Suitable for local conditions
High Oil Hybrid Varieties: Industrial use
',

                'nutritional_value' => '
Protein: Very high plant protein source
Healthy Fats: Rich in unsaturated oils
Fiber: Improves digestion
Vitamins: Vitamin B complex
Minerals: Iron, calcium, magnesium
',

                'importance_of_crop' => '
Soybean is an important oilseed crop that supports edible oil production and livestock feed industries. It also improves soil fertility by fixing nitrogen, making it beneficial for crop rotation systems.
',
            ],

            [
                'crop_name' => 'Arum',

                'introduction' => 'Arum, commonly known as Taro, is an important root vegetable crop grown in Pakistan and many tropical countries. It is widely consumed as a cooked vegetable and is valued for its starchy corms and nutritious leaves. Arum farming is important for small farmers because it grows well in moist conditions and provides good yield with relatively low input. It is mainly grown in warm and humid climates with sufficient soil moisture.',

                'basic_information' => '
Crop Name: Arum (Colocasia / Taro)
Scientific Name: Colocasia esculenta
Crop Type: Kharif (Summer Root Crop)
Main Use: Vegetable, Curry, Boiled roots, Leaf vegetable
Sowing Season: February to April and June to July
Harvesting Season: 6–8 months after planting (September to December depending on sowing time)
Ideal Temperature: 20°C – 35°C
Water Requirement: High
Best Soil Type: Moist, loamy and clayey soil
Major Areas: Punjab, Sindh, KPK
',

                'sowing_season' => '
Arum is usually planted in early spring (February to April) and again in the monsoon season (June to July). Small corms or suckers are used for planting in prepared fields.

Why Arum is Sown in These Seasons:

Arum requires warm and humid conditions for proper sprouting. Moist soil and warm temperatures support fast growth and strong corm development.
',

                'harvesting_season' => '
Arum is harvested after 6 to 8 months of planting, depending on variety and growing conditions. Leaves start yellowing and corms become fully developed when the crop is ready.

Why Arum is Harvested at This Time:

At maturity, corms accumulate maximum starch and become firm. Harvesting at the right time ensures better taste and yield quality.
',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 35°C
Corm Development: 22°C – 30°C

Arum grows best in warm, humid, and moist environments. It is highly sensitive to drought and frost.
',

                'soil_requirements' => '
Suitable Soil:
Clay loam soil
Loamy soil
Moist, fertile soil

Ideal pH: 5.5 – 7.0

Soil must retain moisture but should not be waterlogged for long periods.
',

                'land_preparation' => '
Ploughing: Deep ploughing for loose soil
Leveling: Ensures uniform moisture distribution
Organic Matter: Add farmyard manure or compost
Bed Preparation: Raised beds for proper drainage

Good land preparation ensures healthy root and corm development.
',

                'seed_selection' => '
Characteristics of Good Seed Material:
Healthy corms or suckers
Disease-free planting material
Medium-sized, well-developed corms
High sprouting ability

Good planting material ensures better establishment and yield.
',

                'seed_rate' => '
Corm Seed Rate: 8,000–10,000 kg per hectare (varies by variety and spacing)

Proper seed rate ensures healthy plant spacing and uniform growth.
',

                'irrigation_requirements' => '
Initial Stage: Frequent watering for sprouting
Vegetative Stage: Regular moisture supply
Corm Development Stage: High water requirement
Maturity Stage: Reduced irrigation before harvest

Arum requires consistently moist soil for good growth.
',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and vegetative growth
Phosphorus (P): Root and corm development
Potassium (K): Disease resistance and corm quality

Organic manure greatly improves soil fertility and yield.
',

                'growing_stages' => "

1. Sprouting Stage  
Corms begin to sprout under warm and moist conditions. Initial shoots emerge from the soil.

2. Vegetative Stage  
Large green leaves develop and plant growth increases rapidly. Moisture is essential.

3. Tuber (Corm) Formation Stage  
Underground corms start forming and expanding. Nutrient and water supply is important.

4. Bulking Stage  
Corms increase in size and store starch. Proper irrigation supports development.

5. Maturity Stage  
Leaves start yellowing and corms become fully mature and ready for harvest.

Each stage is important for achieving high arum yield.

",

                'types_of_crop' => '
White Arum: Common variety with white corms
Red Arum: Slightly reddish skin and strong flavor
Wild Taro: Naturally growing variety
Improved Hybrid Varieties: High yield cultivated types
',

                'crop_varieties' => '
Local White Arum: Widely grown traditional type
Red Stem Arum: Known for strong growth
Improved Taro Varieties: High yield and disease resistant
Desi Varieties: Local farm-grown types
',

                'nutritional_value' => '
Carbohydrates: Main energy source
Fiber: Improves digestion
Vitamins: Vitamin C and B6
Minerals: Potassium and magnesium
Low Fat: Healthy root vegetable option
',

                'importance_of_crop' => '
Arum is an important root vegetable that provides food security and income to small farmers. It is used in household cooking and has good market demand. Both its corms and leaves are nutritious and widely consumed.
',
            ],

            [
                'crop_name' => 'Ginger',

                'introduction' => 'Ginger is an important spice and cash crop grown in many tropical and subtropical regions. It is widely used in food, medicine, and herbal products due to its strong aroma, flavor, and medicinal properties. Ginger farming provides good income to farmers because of its high demand in local and international markets. In Pakistan, ginger is mainly cultivated in warm areas with proper irrigation facilities.',

                'basic_information' => '
Crop Name: Ginger
Scientific Name: Zingiber officinale
Crop Type: Kharif (Spice Crop)
Main Use: Spice, Herbal Medicine, Tea, Food Flavoring
Sowing Season: February to April
Harvesting Season: November to January
Ideal Temperature: 20°C – 30°C
Water Requirement: Moderate to High
Best Soil Type: Sandy Loam and Loamy Soil
Major Areas: Punjab, Sindh, KPK
',

                'sowing_season' => '
Ginger is usually planted from February to April in Pakistan. Farmers use healthy rhizomes (seed pieces) for planting in prepared fields. Warm weather and sufficient moisture during this period support proper sprouting and root development.

Why Ginger is Sown in Spring:

Ginger requires warm and humid conditions for good germination. Spring season provides suitable temperature and soil moisture which helps in strong rhizome establishment and early plant growth.
',

                'harvesting_season' => '
Ginger is harvested from November to January depending on planting time and variety. The crop is ready when leaves start turning yellow and dry.

Why Ginger is Harvested at This Time:

At maturity, the rhizomes fully develop and accumulate maximum flavor and oil content. Cooler dry conditions during harvest help in proper curing and storage.
',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 22°C – 28°C
Rhizome Development: 20°C – 25°C

Ginger grows best in warm, humid, and partially shaded environments. Excess heat or frost can damage rhizome development and reduce yield.
',

                'soil_requirements' => '
Suitable Soil:
Sandy loam soil
Loamy soil
Well-drained fertile soil

Ideal pH: 5.5 – 6.5

Well-drained soil is essential because waterlogging can cause rhizome rot and reduce crop quality.
',

                'land_preparation' => '
Ploughing: Deep ploughing to loosen soil
Bed Formation: Raised beds for drainage
Organic Matter: Addition of compost or manure
Weed Removal: Ensures healthy crop growth

Proper land preparation improves rhizome development and prevents water stagnation.
',

                'seed_selection' => '
Characteristics of Good Seed (Rhizomes):
Healthy and disease-free
Well-developed buds
Free from rot and pests
Medium-sized pieces with 2–3 buds

Good quality rhizomes ensure strong sprouting and higher yield.
',

                'seed_rate' => '
Rhizome Rate: 700–1000 kg per acre

Proper seed rate ensures uniform plant population and better production of healthy ginger rhizomes.
',

                'irrigation_requirements' => '
Initial Stage: Frequent light irrigation for sprouting
Vegetative Stage: Regular irrigation every 7–10 days
Rhizome Development Stage: Moist soil maintenance
Pre-Harvest Stage: Reduced irrigation

Ginger requires consistent moisture but does not tolerate waterlogging.
',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and shoot growth
Phosphorus (P): Root and rhizome development
Potassium (K): Disease resistance and quality improvement

Organic manure is highly recommended for better yield and soil health.
',

                'growing_stages' => "

1. Sprouting Stage  
Rhizomes begin to sprout and small shoots emerge. Warm temperature and moisture are important.

2. Vegetative Stage  
Plants develop green leaves and stems. Proper irrigation and nutrients support healthy growth.

3. Tillering Stage  
More shoots develop from rhizomes, increasing plant density.

4. Rhizome Formation Stage  
Underground rhizomes start developing and expanding.

5. Bulking Stage  
Rhizomes gain size, weight, and strong aroma.

6. Maturity Stage  
Leaves turn yellow and dry, indicating crop readiness for harvest.

Each stage is important for achieving high-quality ginger yield.

",

                'types_of_crop' => '
Fresh Ginger: Used for cooking and fresh market
Dry Ginger: Used in spices and powder form
Baby Ginger: Mild flavor, early harvested variety
Organic Ginger: Chemical-free cultivated ginger
',

                'crop_varieties' => '
Local Ginger: Traditional variety grown in Pakistan
Chinese Ginger: High yield and strong aroma variety
Indian Ginger: Widely cultivated commercial variety
Improved Hybrid Ginger: Disease-resistant and high productivity type
',

                'nutritional_value' => '
Carbohydrates: Energy source
Vitamin C: Immunity booster
Magnesium: Muscle and nerve function
Potassium: Heart health
Antioxidants: Anti-inflammatory properties
',

                'importance_of_crop' => '
Ginger is an important spice crop used in households, restaurants, and pharmaceutical industries. It has strong medicinal value and is widely used in herbal medicine, teas, and food processing. It also provides good income opportunities for farmers due to high market demand.',
            ],

            [
                'crop_name' => 'Banana',

                'introduction' => 'Banana is one of the most important fruit crops grown in tropical and subtropical regions. It is widely consumed as fresh fruit and is also used in desserts, smoothies, and processed food products. Banana farming provides high income to farmers due to its continuous year-round demand. In Pakistan, bananas are mainly grown in warm regions with adequate irrigation facilities, especially in Sindh.',

                'basic_information' => '
Crop Name: Banana
Scientific Name: Musa paradisiaca
Crop Type: Fruit Crop (Perennial)
Main Use: Fresh Fruit, Desserts, Smoothies, Chips
Sowing Season: February to April
Harvesting Season: Year-round (10–12 months after planting)
Ideal Temperature: 20°C – 35°C
Water Requirement: High
Best Soil Type: Fertile Loamy and Alluvial Soil
Major Areas: Sindh, Punjab
',

                'sowing_season' => '
Banana is usually planted from February to April in Pakistan. Suckers or tissue-cultured plants are used for cultivation. Warm weather and adequate soil moisture during planting help in fast establishment and strong root development.

Why Banana is Planted in Spring:

Banana requires warm and humid conditions for proper growth. Spring season provides suitable temperature and moisture which supports rapid vegetative development and healthy plantation establishment.
',

                'harvesting_season' => '
Banana is harvested throughout the year depending on planting time. It usually takes 10 to 12 months for the plant to produce mature fruit bunches.

Why Banana is Harvested When Mature:

Bananas are harvested when fruits reach full size but are still green. Controlled harvesting ensures better ripening, taste, and shelf life during transportation and marketing.
',

                'climate_requirements' => '
Germination Temperature: 20°C – 30°C
Vegetative Growth: 25°C – 35°C
Fruit Development: 20°C – 32°C

Banana grows best in warm, humid, and frost-free climates. Strong winds and extreme cold can damage leaves and reduce yield.
',

                'soil_requirements' => '
Suitable Soil:
Loamy soil
Alluvial soil
Well-drained fertile soil

Ideal pH: 5.5 – 7.5

Rich organic matter and good drainage are essential for healthy banana growth and high fruit yield.
',

                'land_preparation' => '
Deep Ploughing: Loosens soil for root growth
Pit Digging: Proper planting holes for suckers
Organic Manure: Improves soil fertility
Leveling: Ensures proper irrigation

Good land preparation helps strong root establishment and higher productivity.
',

                'seed_selection' => '
Characteristics of Good Planting Material:
Disease-free suckers or tissue-cultured plants
Healthy rhizome base
Strong and uniform growth
Free from pests

Quality planting material ensures better survival rate and higher yield.
',

                'seed_rate' => '
Plant Density: 1200–1500 plants per acre

Proper spacing ensures good air circulation, healthy growth, and high fruit production.
',

                'irrigation_requirements' => '
Initial Stage: Frequent irrigation for establishment
Vegetative Stage: Regular watering every 7–10 days
Flowering Stage: High water requirement
Fruit Development Stage: Consistent moisture supply

Banana requires high and regular irrigation but does not tolerate waterlogging.
',

                'fertilizer_requirements' => '
Nitrogen (N): Leaf and plant growth
Phosphorus (P): Root development
Potassium (K): Fruit size and quality

Organic manure and balanced fertilizers improve yield, fruit quality, and plant health.
',

                'growing_stages' => "

1. Establishment Stage  
Plant develops roots and initial leaves. Proper moisture is essential for survival.

2. Vegetative Stage  
Rapid leaf growth and stem development occur. Nutrients and irrigation are important.

3. Pseudo-stem Formation Stage  
Plant structure strengthens and grows taller.

4. Flowering Stage  
Flower bud (banana heart) appears and begins development.

5. Fruit Development Stage  
Banana bunch grows in size and fills gradually.

6. Maturity Stage  
Fruits reach full size and are ready for harvest.

Each stage is important for achieving high-quality banana yield.

",

                'types_of_crop' => '
Cavendish Banana: Most common export variety
Dwarf Banana: Short plant, easy harvesting
Lady Finger Banana: Small and sweet fruit
Cooking Banana: Used for frying and cooking
',

                'crop_varieties' => '
Basrai Banana: Popular local variety in Pakistan
William Hybrid: High yield variety
Grand Naine: Export quality Cavendish type
Dwarf Cavendish: Compact and disease-resistant variety
',

                'nutritional_value' => '
Carbohydrates: Energy source
Potassium: Heart health and muscle function
Vitamin B6: Brain development
Vitamin C: Immunity support
Fiber: Digestive health
',

                'importance_of_crop' => '
Banana is an important fruit crop that provides continuous income to farmers. It is widely consumed as a staple fruit and is also used in food processing industries. Banana cultivation supports rural employment and contributes to the agricultural economy.',
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
