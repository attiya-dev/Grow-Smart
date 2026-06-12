<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\PestManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pest1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $pestDetails = [
            [
    'crop_name' => 'Mung',
    'name' => 'Whitefly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Whiteflies suck sap from leaves and spread viral diseases.',
    'symptoms' => 'Leaves turn yellow, curl, and plant growth becomes weak.',
    'protection' => 'Use yellow sticky traps and keep the field free from weeds.',
    'recommended_control' => 'Apply Imidacloprid or Thiamethoxam.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Aphids',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Aphids feed on plant sap from tender leaves and shoots.',
    'symptoms' => 'Leaves curl, become sticky, and growth slows down.',
    'protection' => 'Encourage natural predators and remove heavily infested plants.',
    'recommended_control' => 'Apply Acetamiprid or Imidacloprid.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Jassid',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Jassids suck sap from leaves, reducing plant vigor.',
    'symptoms' => 'Leaf edges turn yellow, curl, and dry.',
    'protection' => 'Monitor crops regularly and maintain field hygiene.',
    'recommended_control' => 'Apply Thiamethoxam or Acetamiprid.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Pod Borer',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae feed on flowers and developing pods.',
    'symptoms' => 'Holes in pods and damaged grains inside.',
    'protection' => 'Remove affected pods and monitor the crop regularly.',
    'recommended_control' => 'Apply Emamectin Benzoate or Spinosad.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Thrips',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Thrips feed on flowers and tender leaves.',
    'symptoms' => 'Leaves become silvery, curled, and flowers may drop early.',
    'protection' => 'Keep the field clean and use sticky traps.',
    'recommended_control' => 'Apply Spinetoram or Abamectin.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Powdery Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus develops in warm and humid conditions.',
    'symptoms' => 'White powder-like patches appear on leaves and stems.',
    'protection' => 'Maintain proper spacing and remove infected plant parts.',
    'recommended_control' => 'Apply Sulfur or Hexaconazole.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Cercospora Leaf Spot',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads through infected crop debris and moisture.',
    'symptoms' => 'Brown spots appear on leaves which later enlarge and dry.',
    'protection' => 'Remove infected leaves and practice crop rotation.',
    'recommended_control' => 'Apply Mancozeb or Carbendazim.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Anthracnose',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads through infected seeds and plant debris.',
    'symptoms' => 'Dark sunken spots appear on stems, leaves, and pods.',
    'protection' => 'Use healthy seed and destroy infected crop residues.',
    'recommended_control' => 'Apply Carbendazim or Mancozeb.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Root Rot',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Soil-borne fungi attack roots, especially in poorly drained soils.',
    'symptoms' => 'Plants become weak, wilt, and roots turn dark and rotten.',
    'protection' => 'Ensure proper drainage and avoid waterlogging.',
    'recommended_control' => 'Treat seed with suitable fungicides before sowing.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Mungbean Yellow Mosaic Virus',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus is spread by whiteflies.',
    'symptoms' => 'Yellow patches appear on leaves, plants become stunted, and yield decreases.',
    'protection' => 'Control whiteflies and remove infected plants immediately.',
    'recommended_control' => 'Manage whitefly populations and use resistant varieties.'
],

[
    'crop_name' => 'Mung',
    'name' => 'Bacterial Leaf Spot',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Bacteria spread through infected seeds, water, and crop debris.',
    'symptoms' => 'Small water-soaked spots appear on leaves and later turn brown.',
    'protection' => 'Use certified seed and avoid working in wet fields.',
    'recommended_control' => 'Apply copper-based bactericides where recommended.'
],
    [
        'crop_name' => 'Turmeric',
        'name' => 'Rhizome Scale',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects attack turmeric rhizomes in the soil and storage, feeding on plant sap.',
        'symptoms' => 'Rhizomes become dry and shriveled, plants grow weak, and leaves may turn yellow.',
        'protection' => 'Use healthy seed rhizomes, maintain field hygiene, and avoid storing infected rhizomes.',
        'recommended_control' => 'Treat seed rhizomes before planting and apply recommended insecticides if needed.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'Shoot Borer',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult moths lay eggs on leaves, and larvae bore into young shoots.',
        'symptoms' => 'Young shoots dry from the center, leaves turn yellow, and plant growth slows down.',
        'protection' => 'Remove affected shoots and monitor the crop regularly.',
        'recommended_control' => 'Apply Emamectin Benzoate or other recommended insecticides.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'Leaf Roller',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae roll turmeric leaves and feed from inside.',
        'symptoms' => 'Leaves appear folded or rolled, with damaged green tissue.',
        'protection' => 'Remove rolled leaves and maintain field cleanliness.',
        'recommended_control' => 'Apply suitable insecticides when infestation becomes severe.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Aphids suck sap from leaves and tender plant parts.',
        'symptoms' => 'Leaves curl, turn yellow, and plants become weak.',
        'protection' => 'Encourage natural predators and avoid excessive nitrogen fertilizer.',
        'recommended_control' => 'Apply Imidacloprid or other recommended aphid control products.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'White Grub',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Grubs live in soil and feed on roots and rhizomes.',
        'symptoms' => 'Plants wilt suddenly, show poor growth, and may die.',
        'protection' => 'Deep ploughing and proper field sanitation help reduce infestation.',
        'recommended_control' => 'Apply recommended soil insecticides before or during planting.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'Rhizome Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Caused by soil-borne fungi in waterlogged and poorly drained fields.',
        'symptoms' => 'Leaves turn yellow, plants wilt, and rhizomes become soft and rotten.',
        'protection' => 'Ensure proper drainage and use disease-free planting material.',
        'recommended_control' => 'Apply Metalaxyl or Copper Oxychloride as recommended.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'Leaf Blotch',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'The fungus spreads during humid and rainy weather.',
        'symptoms' => 'Brown spots appear on leaves, which later enlarge and dry out.',
        'protection' => 'Maintain proper spacing and remove infected leaves.',
        'recommended_control' => 'Apply Mancozeb or Carbendazim.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungal infection develops under moist and humid conditions.',
        'symptoms' => 'Small brown or black spots appear on leaves and gradually spread.',
        'protection' => 'Avoid overhead irrigation and remove infected plant parts.',
        'recommended_control' => 'Apply Copper Oxychloride or Mancozeb.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'The disease spreads through infected plant debris and moisture.',
        'symptoms' => 'Dark sunken spots form on leaves, causing drying and leaf damage.',
        'protection' => 'Keep fields clean and avoid excessive moisture.',
        'recommended_control' => 'Apply Carbendazim or Propiconazole.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'Bacterial Wilt',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through roots and spread in wet soil conditions.',
        'symptoms' => 'Plants suddenly wilt, leaves droop, and the plant may die.',
        'protection' => 'Use disease-free planting material and maintain good drainage.',
        'recommended_control' => 'Remove infected plants and apply recommended bactericides where applicable.'
    ],

    [
        'crop_name' => 'Turmeric',
        'name' => 'Mosaic Disease',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread mainly by aphids feeding on infected plants.',
        'symptoms' => 'Leaves show light and dark green patches, become smaller, and plant growth slows.',
        'protection' => 'Control aphids and remove infected plants immediately.',
        'recommended_control' => 'Manage aphid vectors using recommended insecticides.'
    ],
    [
        'crop_name' => 'Cucumber',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects appear in groups on leaves and suck plant sap, especially in warm weather.',
        'symptoms' => 'Leaves curl, become sticky, and plant looks weak and stunted.',
        'protection' => 'Keep field clean, use yellow sticky traps, and encourage natural predators like ladybugs.',
        'recommended_control' => 'Apply Imidacloprid or neem-based spray.'
    ],

    [
        'crop_name' => 'Cucumber',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny white insects live under leaves and suck sap, spreading quickly in hot weather.',
        'symptoms' => 'Leaves turn yellow, plant weakens, and sticky honeydew appears on leaves.',
        'protection' => 'Use yellow sticky traps and avoid overcrowding of plants.',
        'recommended_control' => 'Apply Thiamethoxam or neem oil spray.'
    ],

    [
        'crop_name' => 'Cucumber',
        'name' => 'Cucumber Beetle',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Beetles feed on leaves, flowers, and stems and can spread diseases.',
        'symptoms' => 'Holes in leaves, damaged flowers, and slow plant growth.',
        'protection' => 'Use row covers and remove weeds around the field.',
        'recommended_control' => 'Apply Carbaryl or Cypermethrin.'
    ],

    [
        'crop_name' => 'Cucumber',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in dry but humid conditions and spreads on leaves.',
        'symptoms' => 'White powder-like spots on leaves, leaves dry and fall early.',
        'protection' => 'Keep good air flow and avoid watering leaves.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Cucumber',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Appears in cool and wet weather and spreads fast through leaves.',
        'symptoms' => 'Yellow patches on top of leaves and grey mold under leaves.',
        'protection' => 'Avoid leaf wetness and improve drainage.',
        'recommended_control' => 'Apply Mancozeb or Metalaxyl.'
    ],

    [
        'crop_name' => 'Cucumber',
        'name' => 'Bacterial Wilt',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread by cucumber beetles that carry bacteria into plants.',
        'symptoms' => 'Sudden wilting of plant even when soil is wet.',
        'protection' => 'Control beetles and remove infected plants quickly.',
        'recommended_control' => 'No direct cure; control insects and destroy infected plants.'
    ],

    [
        'crop_name' => 'Cucumber',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spreads in warm and wet weather through infected seeds and water.',
        'symptoms' => 'Dark sunken spots on leaves, stems, and fruits.',
        'protection' => 'Use clean seeds and avoid overhead watering.',
        'recommended_control' => 'Apply Chlorothalonil or Copper oxychloride.'
    ],

    [
        'crop_name' => 'Cucumber',
        'name' => 'Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids and infected plant material.',
        'symptoms' => 'Leaves become yellow-green mixed color and grow in a twisted shape.',
        'protection' => 'Control aphids and use virus-free seeds.',
        'recommended_control' => 'No cure; remove infected plants and control insects.'
    ],
    [
        'crop_name' => 'EggPlant(Brinjal)',
        'name' => 'Shoot and Fruit Borer',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Moth lays eggs on shoots and fruits. After hatching, larvae bore inside and feed on plant tissue.',
        'symptoms' => 'Shoots wilt and dry, holes in fruits, fruits rot and fall early.',
        'protection' => 'Remove infested shoots and fruits, use pheromone traps, and keep field clean.',
        'recommended_control' => 'Apply Emamectin Benzoate or Spinosad as recommended.'
    ],

    [
        'crop_name' => 'EggPlant(Brinjal)',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and stems, multiplying quickly in warm weather.',
        'symptoms' => 'Leaves curl, turn sticky, and plant growth becomes slow.',
        'protection' => 'Use yellow sticky traps and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or neem oil spray.'
    ],

    [
        'crop_name' => 'EggPlant(Brinjal)',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny white insects sit under leaves and suck plant sap.',
        'symptoms' => 'Leaves turn yellow, plant becomes weak, and sticky substance appears.',
        'protection' => 'Avoid overcrowding and use sticky traps.',
        'recommended_control' => 'Apply Thiamethoxam or neem-based spray.'
    ],

    [
        'crop_name' => 'EggPlant(Brinjal)',
        'name' => 'Jassids (Leafhopper)',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small green insects suck sap from leaves, especially in dry weather.',
        'symptoms' => 'Leaf edges turn yellow, leaves curl upward, plant looks dull.',
        'protection' => 'Keep field weed-free and maintain balanced fertilizer use.',
        'recommended_control' => 'Apply Acetamiprid or Imidacloprid.'
    ],

    [
        'crop_name' => 'EggPlant(Brinjal)',
        'name' => 'Bacterial Wilt',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter plant through roots and spread in warm, wet soil.',
        'symptoms' => 'Sudden plant wilting even when soil is wet.',
        'protection' => 'Use disease-free seedlings and rotate crops.',
        'recommended_control' => 'No direct cure; remove and destroy infected plants.'
    ],

    [
        'crop_name' => 'EggPlant(Brinjal)',
        'name' => 'Phomopsis Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through infected seeds and wet weather conditions.',
        'symptoms' => 'Dark spots on leaves and fruits, fruits rot and become soft.',
        'protection' => 'Use clean seeds and avoid overhead irrigation.',
        'recommended_control' => 'Apply Mancozeb or Copper oxychloride.'
    ],

    [
        'crop_name' => 'EggPlant(Brinjal)',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in dry but humid weather.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and fall early.',
        'protection' => 'Improve air circulation and avoid overcrowding.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'EggPlant(Brinjal)',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread by rain splash and infected plant debris.',
        'symptoms' => 'Small brown or black spots on leaves, leaves turn yellow.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Chlorothalonil or Copper-based fungicide.'
    ],
    [
        'crop_name' => 'Chilli',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects feed on young leaves and flowers by sucking plant sap, especially in hot and dry weather.',
        'symptoms' => 'Leaves curl upward, become narrow, and plants look weak and stunted.',
        'protection' => 'Keep field weed-free, use sticky traps, and avoid water stress.',
        'recommended_control' => 'Apply Spinosad or Imidacloprid.'
    ],

    [
        'crop_name' => 'Chilli',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small soft insects gather on leaves and shoots and suck sap.',
        'symptoms' => 'Leaves become sticky, curl, and plant growth becomes slow.',
        'protection' => 'Use yellow sticky traps and encourage natural predators.',
        'recommended_control' => 'Apply Neem oil or Imidacloprid.'
    ],

    [
        'crop_name' => 'Chilli',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny white insects live under leaves and spread viral diseases.',
        'symptoms' => 'Leaves turn yellow, sticky coating appears, and plant weakens.',
        'protection' => 'Avoid overcrowding and control weeds around the field.',
        'recommended_control' => 'Apply Thiamethoxam or neem-based spray.'
    ],

    [
        'crop_name' => 'Chilli',
        'name' => 'Fruit Borer',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Moth lays eggs on fruits; larvae enter and feed inside chilli fruits.',
        'symptoms' => 'Holes in fruits, fruits rot from inside, and fall early.',
        'protection' => 'Remove damaged fruits and use pheromone traps.',
        'recommended_control' => 'Apply Emamectin Benzoate or Spinosad.'
    ],

    [
        'crop_name' => 'Chilli',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in dry weather with humidity.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and fall.',
        'protection' => 'Ensure good air flow and avoid overcrowding.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Chilli',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through rain splash and infected seeds in warm, wet weather.',
        'symptoms' => 'Dark sunken spots on fruits, fruits rot and become soft.',
        'protection' => 'Use clean seeds and avoid overhead watering.',
        'recommended_control' => 'Apply Mancozeb or Copper oxychloride.'
    ],

    [
        'crop_name' => 'Chilli',
        'name' => 'Bacterial Leaf Spot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread through rain, wind, and infected seeds.',
        'symptoms' => 'Small dark spots on leaves, leaves turn yellow and fall.',
        'protection' => 'Use certified seeds and avoid wet leaves.',
        'recommended_control' => 'Apply Copper-based bactericides.'
    ],

    [
        'crop_name' => 'Chilli',
        'name' => 'Chilli Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids and infected plant material.',
        'symptoms' => 'Leaves become yellow-green mixed color and plants grow small and weak.',
        'protection' => 'Control aphids and remove infected plants.',
        'recommended_control' => 'No cure; remove infected plants and control insects.'
    ],
    [
        'crop_name' => 'Soybean',
        'name' => 'Stem Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult flies lay eggs on young plants. After hatching, larvae bore into stems and damage inside tissues.',
        'symptoms' => 'Plants become weak, stems dry, and growth stops.',
        'protection' => 'Remove infected plants, keep field clean, and use healthy seeds.',
        'recommended_control' => 'Apply Dimethoate or Imidacloprid as recommended.'
    ],

    [
        'crop_name' => 'Soybean',
        'name' => 'Girdle Beetle',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Beetles cut stems and branches, especially in young plants.',
        'symptoms' => 'Branches dry suddenly and plants may break or die.',
        'protection' => 'Remove plant residues and monitor fields regularly.',
        'recommended_control' => 'Apply Cypermethrin or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Soybean',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects suck sap from leaves and spread quickly in warm weather.',
        'symptoms' => 'Leaves turn yellow, curl, and become sticky.',
        'protection' => 'Use yellow sticky traps and avoid overcrowding.',
        'recommended_control' => 'Apply Thiamethoxam or neem oil spray.'
    ],

    [
        'crop_name' => 'Soybean',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects gather on leaves and suck plant sap.',
        'symptoms' => 'Leaves curl, become sticky, and plants grow slowly.',
        'protection' => 'Encourage natural predators and keep field clean.',
        'recommended_control' => 'Apply Imidacloprid or neem-based spray.'
    ],

    [
        'crop_name' => 'Soybean',
        'name' => 'Soybean Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid weather through wind and infected leaves.',
        'symptoms' => 'Small brown spots on leaves, leaves turn yellow and fall early.',
        'protection' => 'Use resistant varieties and avoid wet leaves.',
        'recommended_control' => 'Apply Tebuconazole or Propiconazole.'
    ],

    [
        'crop_name' => 'Soybean',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected seeds and wet weather conditions.',
        'symptoms' => 'Dark spots on stems, pods, and leaves; pods may rot.',
        'protection' => 'Use clean seeds and avoid water logging.',
        'recommended_control' => 'Apply Mancozeb or Carbendazim.'
    ],

    [
        'crop_name' => 'Soybean',
        'name' => 'Bacterial Blight',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread through rain splash, wind, and infected seeds.',
        'symptoms' => 'Small dark spots on leaves that later turn into holes.',
        'protection' => 'Use disease-free seeds and avoid overhead irrigation.',
        'recommended_control' => 'Apply copper-based bactericides.'
    ],

    [
        'crop_name' => 'Soybean',
        'name' => 'Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids and infected plant material.',
        'symptoms' => 'Leaves become yellow-green mixed color and plants stay small.',
        'protection' => 'Control aphids and remove infected plants quickly.',
        'recommended_control' => 'No cure; remove infected plants and control insects.'
    ],
    [
        'crop_name' => 'Arum',
        'name' => 'Taro Leaf Beetle',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult beetles feed on leaves and make holes, especially in young plants.',
        'symptoms' => 'Leaves get holes, look damaged, and plant growth becomes slow.',
        'protection' => 'Keep field clean, remove weeds, and check plants regularly.',
        'recommended_control' => 'Apply Cypermethrin or Chlorpyrifos as recommended.'
    ],

    [
        'crop_name' => 'Arum',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and stems and multiply quickly.',
        'symptoms' => 'Leaves curl, become sticky, and plant looks weak.',
        'protection' => 'Use yellow sticky traps and encourage natural predators.',
        'recommended_control' => 'Apply Imidacloprid or neem oil spray.'
    ],

    [
        'crop_name' => 'Arum',
        'name' => 'Spider Mites',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Very tiny insects live under leaves and suck plant juice in hot dry weather.',
        'symptoms' => 'Leaves turn yellow, get dusty look, and dry out.',
        'protection' => 'Keep plants well watered and avoid dust in field.',
        'recommended_control' => 'Apply Abamectin or neem-based spray.'
    ],

    [
        'crop_name' => 'Arum',
        'name' => 'Taro Leaf Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in wet and humid conditions through rain and soil.',
        'symptoms' => 'Brown spots on leaves, leaves rot and collapse quickly.',
        'protection' => 'Avoid water logging and remove infected leaves.',
        'recommended_control' => 'Apply Mancozeb or Metalaxyl.'
    ],

    [
        'crop_name' => 'Arum',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected plant debris and wet conditions.',
        'symptoms' => 'Small brown or black spots on leaves, leaves turn yellow.',
        'protection' => 'Keep field clean and avoid overhead watering.',
        'recommended_control' => 'Apply Copper oxychloride or Chlorothalonil.'
    ],

    [
        'crop_name' => 'Arum',
        'name' => 'Soft Rot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through wounds in wet soil conditions.',
        'symptoms' => 'Plant parts become soft, watery, and start rotting with bad smell.',
        'protection' => 'Avoid injury to plants and improve drainage.',
        'recommended_control' => 'Remove infected plants; no direct chemical cure.'
    ],

    [
        'crop_name' => 'Arum',
        'name' => 'Dasheen Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids and infected planting material.',
        'symptoms' => 'Leaves show yellow patches and grow uneven or twisted.',
        'protection' => 'Use healthy planting material and control aphids.',
        'recommended_control' => 'No cure; remove infected plants and control insect vectors.'
    ],
    [
        'crop_name' => 'Ginger',
        'name' => 'Shoot Borer',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae bore into ginger shoots and feed inside stems, especially in young plants.',
        'symptoms' => 'Shoots turn yellow, dry up, and plant growth stops.',
        'protection' => 'Remove damaged shoots and keep field clean.',
        'recommended_control' => 'Apply Chlorantraniliprole or Spinosad as recommended.'
    ],

    [
        'crop_name' => 'Ginger',
        'name' => 'Rhizome Scale',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects attack stored and growing rhizomes and suck plant juice.',
        'symptoms' => 'Rhizomes become weak, shriveled, and rot in soil or storage.',
        'protection' => 'Use clean seed rhizomes and avoid damaged planting material.',
        'recommended_control' => 'Treat seed rhizomes with recommended insecticide before planting.'
    ],

    [
        'crop_name' => 'Ginger',
        'name' => 'White Grub',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and feed on ginger roots and rhizomes.',
        'symptoms' => 'Plants turn yellow, become weak, and easily pull out of soil.',
        'protection' => 'Deep ploughing and remove soil pests before planting.',
        'recommended_control' => 'Apply Chlorpyrifos or Carbofuran in soil as recommended.'
    ],

    [
        'crop_name' => 'Ginger',
        'name' => 'Rhizome Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in wet soil and attacks ginger rhizomes.',
        'symptoms' => 'Rhizomes turn soft, black, and start rotting with bad smell.',
        'protection' => 'Avoid water logging and use well-drained soil.',
        'recommended_control' => 'Treat soil with Trichoderma or apply Metalaxyl.'
    ],

    [
        'crop_name' => 'Ginger',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through rain splash and infected plant debris.',
        'symptoms' => 'Small brown spots on leaves that slowly spread and dry the leaf.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Mancozeb or Copper oxychloride.'
    ],

    [
        'crop_name' => 'Ginger',
        'name' => 'Bacterial Wilt',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through roots and spread quickly in warm wet soil.',
        'symptoms' => 'Plants suddenly wilt and die even when soil is wet.',
        'protection' => 'Use healthy seed rhizomes and avoid water logging.',
        'recommended_control' => 'Remove infected plants; no direct chemical cure.'
    ],

    [
        'crop_name' => 'Ginger',
        'name' => 'Yellows Disease',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by infected planting material and insect vectors.',
        'symptoms' => 'Leaves turn yellow, plants grow slowly and stay small.',
        'protection' => 'Use disease-free seed rhizomes and control insects.',
        'recommended_control' => 'No cure; remove infected plants and control vectors.'
    ],
    [
        'crop_name' => 'Banana',
        'name' => 'Banana Weevil',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult weevils bore into banana stem and rhizome and lay eggs inside.',
        'symptoms' => 'Plant becomes weak, leaves turn yellow, and plant may fall easily.',
        'protection' => 'Use clean planting material and remove old plant residues.',
        'recommended_control' => 'Apply Chlorpyrifos or Carbofuran in soil as recommended.'
    ],

    [
        'crop_name' => 'Banana',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and pseudostem and spread quickly.',
        'symptoms' => 'Leaves curl, become sticky, and plant growth becomes slow.',
        'protection' => 'Use yellow sticky traps and control weeds.',
        'recommended_control' => 'Apply Imidacloprid or neem oil spray.'
    ],

    [
        'crop_name' => 'Banana',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects feed on leaves, flowers, and young fruits.',
        'symptoms' => 'Leaves get silvery patches and fruits become rough.',
        'protection' => 'Keep field clean and avoid dry stress.',
        'recommended_control' => 'Apply Spinosad or Abamectin.'
    ],

    [
        'crop_name' => 'Banana',
        'name' => 'Panama Wilt',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus enters through roots and spreads inside the plant.',
        'symptoms' => 'Leaves turn yellow, dry from edges, and plant slowly dies.',
        'protection' => 'Use disease-free suckers and well-drained soil.',
        'recommended_control' => 'Remove infected plants; no direct chemical cure.'
    ],

    [
        'crop_name' => 'Banana',
        'name' => 'Sigatoka Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through wind and rain in humid weather.',
        'symptoms' => 'Small brown spots on leaves that grow bigger and dry the leaf.',
        'protection' => 'Remove infected leaves and improve air flow.',
        'recommended_control' => 'Apply Mancozeb or Propiconazole.'
    ],

    [
        'crop_name' => 'Banana',
        'name' => 'Bunchy Top Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by banana aphids and infected planting material.',
        'symptoms' => 'Leaves become small, narrow, and grow in bunch at top.',
        'protection' => 'Use healthy suckers and control aphids.',
        'recommended_control' => 'No cure; remove infected plants immediately.'
    ],

    [
        'crop_name' => 'Banana',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected fruits and humid conditions.',
        'symptoms' => 'Black spots on ripe fruits and fruits rot quickly.',
        'protection' => 'Handle fruits carefully and avoid injuries.',
        'recommended_control' => 'Apply Copper oxychloride or Carbendazim.'
    ],
    [
        'crop_name' => 'Mango',
        'name' => 'Mango Hopper',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from flowers and young shoots, especially in flowering season.',
        'symptoms' => 'Flowers dry up, sticky liquid appears, and fruit setting becomes low.',
        'protection' => 'Keep orchard clean and avoid excessive nitrogen fertilizer.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam.'
    ],

    [
        'crop_name' => 'Mango',
        'name' => 'Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Female flies lay eggs inside ripe or semi-ripe fruits.',
        'symptoms' => 'Fruits show small holes, rot inside, and fall early.',
        'protection' => 'Collect and destroy fallen fruits and use fruit fly traps.',
        'recommended_control' => 'Use protein bait traps or Spinosad spray.'
    ],

    [
        'crop_name' => 'Mango',
        'name' => 'Mealybug',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small white insects suck sap from shoots, leaves, and fruits.',
        'symptoms' => 'Leaves curl, sticky honeydew appears, and plant growth slows.',
        'protection' => 'Use sticky bands on tree trunks and control ants.',
        'recommended_control' => 'Apply Buprofezin or Imidacloprid.'
    ],

    [
        'crop_name' => 'Mango',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid weather through rain and infected plant parts.',
        'symptoms' => 'Black spots on leaves and fruits, fruits rot quickly.',
        'protection' => 'Prune trees for good air flow and remove infected parts.',
        'recommended_control' => 'Apply Mancozeb or Copper oxychloride.'
    ],

    [
        'crop_name' => 'Mango',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on flowers and young leaves in dry but humid weather.',
        'symptoms' => 'White powder on flowers, flowers dry and fall early.',
        'protection' => 'Keep orchard clean and avoid dense canopy.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Mango',
        'name' => 'Bacterial Canker',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through wounds caused by wind, rain, or insects.',
        'symptoms' => 'Dark spots on leaves, cracks on branches, and fruit damage.',
        'protection' => 'Avoid injury to trees and prune infected branches.',
        'recommended_control' => 'Apply Copper-based bactericides.'
    ],

    [
        'crop_name' => 'Mango',
        'name' => 'Mango Malformation',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus affects growing buds causing abnormal flower and shoot growth.',
        'symptoms' => 'Flowers become thick, crowded, and do not produce fruit.',
        'protection' => 'Prune affected shoots and maintain orchard hygiene.',
        'recommended_control' => 'Prune infected parts and apply recommended fungicides.'
    ],
    [
        'crop_name' => 'Lychee',
        'name' => 'Lychee Fruit Borer',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Moth lays eggs on fruits. After hatching, larvae bore inside and feed on pulp.',
        'symptoms' => 'Small holes in fruits, fruit rots from inside, and falls early.',
        'protection' => 'Remove damaged fruits and keep orchard clean.',
        'recommended_control' => 'Apply Spinosad or Emamectin Benzoate.'
    ],

    [
        'crop_name' => 'Lychee',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae make tunnels inside leaves and feed on green tissue.',
        'symptoms' => 'Leaves show zigzag lines and become curled or dry.',
        'protection' => 'Remove affected leaves and avoid excessive new flush growth.',
        'recommended_control' => 'Apply Abamectin or Imidacloprid.'
    ],

    [
        'crop_name' => 'Lychee',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from young shoots and leaves.',
        'symptoms' => 'Leaves curl, become sticky, and shoots stop growing.',
        'protection' => 'Use yellow sticky traps and encourage natural predators.',
        'recommended_control' => 'Apply Neem oil or Imidacloprid.'
    ],

    [
        'crop_name' => 'Lychee',
        'name' => 'Fruit Drop',
        'type' => 'Physiological Disorder',
        'how_it_occurs' => 'Caused by water stress, poor nutrition, or weather changes.',
        'symptoms' => 'Small fruits fall before maturity.',
        'protection' => 'Maintain regular watering and balanced fertilizer use.',
        'recommended_control' => 'Apply micronutrients like Boron and Potassium.'
    ],

    [
        'crop_name' => 'Lychee',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid weather through rain and infected plant parts.',
        'symptoms' => 'Black spots on fruits and leaves, fruits rot quickly.',
        'protection' => 'Prune trees for air flow and remove infected parts.',
        'recommended_control' => 'Apply Mancozeb or Copper oxychloride.'
    ],

    [
        'crop_name' => 'Lychee',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on flowers and young leaves in dry humid conditions.',
        'symptoms' => 'White powder on flowers and leaves, flowers dry and fall.',
        'protection' => 'Keep orchard clean and avoid dense canopy.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Lychee',
        'name' => 'Bacterial Canker',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through wounds caused by wind, rain, or insects.',
        'symptoms' => 'Dark spots on leaves, cracks on branches, and fruit damage.',
        'protection' => 'Avoid injury to trees and prune infected branches.',
        'recommended_control' => 'Apply Copper-based bactericides.'
    ],
    ];

    foreach ($pestDetails as $index => $detail) {

    if (!isset($detail['crop_name'])) {
        dd('Missing crop_name at index: '.$index, $detail);
    }

    $crop = Crop::where('name', $detail['crop_name'])->first();

            if ($crop) {

                PestManagement::create([

                    'crop_id' => $crop->id,
                    'crop_name' => $detail['crop_name'],
                    'name' => $detail['name'],

                    'type' => $detail['type'],

                    'how_it_occurs' => $detail['how_it_occurs'],

                    'symptoms' => $detail['symptoms'],

                    'protection' => $detail['protection'],

                    'recommended_control' => $detail['recommended_control'],
 ]);
            }
         }
    }
}