<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\PestManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PestSeeder extends Seeder
{
    
    public function run(): void
    {
          $pestDetails = [
            [
            'crop_name' => 'Rice', 
            'name' => 'Rice Stem Borer',
            'type' => 'Insect Pest',
            'how_it_occurs' => 'Adult moths lay eggs on rice leaves. After hatching, larvae enter stems and feed inside the plant.',
            'symptoms' => 'Dead hearts in young plants, white heads during grain filling, reduced yield.',
            'protection' => 'Use resistant varieties, remove affected plants, install pheromone traps, and maintain field sanitation.',
            'recommended_control' => 'Apply Chlorantraniliprole or Cartap Hydrochloride according to agricultural recommendations.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'Brown Planthopper',
            'type' => 'Insect Pest',
            'how_it_occurs' => 'The insect thrives in warm and humid conditions and feeds by sucking plant sap.',
            'symptoms' => 'Yellowing leaves, hopper burn, wilting plants, reduced growth.',
            'protection' => 'Avoid excessive nitrogen fertilizer and encourage natural predators.',
            'recommended_control' => 'Apply Imidacloprid or Buprofezin.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'Rice Leaf Folder',
            'type' => 'Insect Pest',
            'how_it_occurs' => 'Larvae fold rice leaves and feed on green tissues.',
            'symptoms' => 'Folded leaves, white streaks, reduced photosynthesis.',
            'protection' => 'Monitor fields regularly and remove damaged leaves.',
            'recommended_control' => 'Apply Emamectin Benzoate when infestation is severe.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'Rice Hispa',
            'type' => 'Insect Pest',
            'how_it_occurs' => 'Adults and larvae scrape leaf surfaces and feed on tissues.',
            'symptoms' => 'White streaks, drying leaves, reduced plant vigor.',
            'protection' => 'Destroy crop residues and maintain field cleanliness.',
            'recommended_control' => 'Apply recommended insecticides as advised by local agricultural departments.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'Rice Gall Midge',
            'type' => 'Insect Pest',
            'how_it_occurs' => 'Larvae attack growing points and develop inside plant tissues.',
            'symptoms' => 'Silver shoot formation and poor tillering.',
            'protection' => 'Use resistant varieties and destroy affected plants.',
            'recommended_control' => 'Apply suitable systemic insecticides.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'Rice Blast',
            'type' => 'Fungal Disease',
            'how_it_occurs' => 'Caused by the fungus Magnaporthe oryzae under humid and rainy conditions.',
            'symptoms' => 'Diamond-shaped spots on leaves, neck rot, poor grain filling.',
            'protection' => 'Use resistant varieties, proper drainage, and balanced fertilization.',
            'recommended_control' => 'Apply Tricyclazole or Azoxystrobin.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'Bacterial Leaf Blight',
            'type' => 'Bacterial Disease',
            'how_it_occurs' => 'Spread through infected seeds, irrigation water, and rain splashes.',
            'symptoms' => 'Yellowing leaf edges, leaf drying, reduced yield.',
            'protection' => 'Use certified seeds and remove infected plants.',
            'recommended_control' => 'Apply copper-based bactericides where recommended.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'Sheath Blight',
            'type' => 'Fungal Disease',
            'how_it_occurs' => 'Develops in dense crop canopies with high humidity.',
            'symptoms' => 'Oval lesions on leaf sheaths, lodging, yield reduction.',
            'protection' => 'Maintain proper spacing and avoid excessive nitrogen.',
            'recommended_control' => 'Apply Validamycin or Propiconazole.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'False Smut',
            'type' => 'Fungal Disease',
            'how_it_occurs' => 'Infection occurs during flowering under humid conditions.',
            'symptoms' => 'Greenish-yellow smut balls replace normal grains.',
            'protection' => 'Use healthy seed and balanced fertilizer application.',
            'recommended_control' => 'Apply Propiconazole or Tebuconazole.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'Bakanae Disease',
            'type' => 'Fungal Disease',
            'how_it_occurs' => 'Seed-borne fungus infects seedlings during germination.',
            'symptoms' => 'Abnormally tall seedlings, yellow leaves, poor grain production.',
            'protection' => 'Use disease-free seed and seed treatment before sowing.',
            'recommended_control' => 'Treat seed with Carbendazim before planting.'
        ],

        [
            'crop_name' => 'Rice',
            'name' => 'Tungro Disease',
            'type' => 'Viral Disease',
            'how_it_occurs' => 'Spread by green leafhopper insects.',
            'symptoms' => 'Yellow-orange leaves, stunted growth, reduced tillering.',
            'protection' => 'Control leafhopper populations and use resistant varieties.',
            'recommended_control' => 'Manage vectors using recommended insecticides.'
        ],
        [
    'crop_name' => 'Cotton',
    'name' => 'Pink Bollworm',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae bore into cotton bolls and feed on developing seeds and lint.',
    'symptoms' => 'Damaged bolls, rotting, poor lint quality, and reduced yield.',
    'protection' => 'Use resistant varieties, destroy crop residues, and monitor fields regularly.',
    'recommended_control' => 'Apply Emamectin Benzoate or other recommended insecticides.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'American Bollworm',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae feed on squares, flowers, and bolls of cotton plants.',
    'symptoms' => 'Holes in bolls, damaged flowers, and reduced production.',
    'protection' => 'Install pheromone traps and encourage natural predators.',
    'recommended_control' => 'Apply Spinosad or Indoxacarb according to recommendations.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'Whitefly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Whiteflies suck plant sap and multiply rapidly in warm weather.',
    'symptoms' => 'Yellowing leaves, sticky honeydew, and stunted growth.',
    'protection' => 'Maintain field sanitation and avoid excessive nitrogen fertilizer.',
    'recommended_control' => 'Apply Imidacloprid or Pyriproxyfen.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'Jassid',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Jassids feed by sucking sap from leaves.',
    'symptoms' => 'Leaf curling, yellowing, and hopper burn symptoms.',
    'protection' => 'Use tolerant varieties and monitor pest populations regularly.',
    'recommended_control' => 'Apply Acetamiprid or Thiamethoxam.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'Thrips',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Thrips feed on young leaves and tender plant parts.',
    'symptoms' => 'Silvering of leaves, curling, and poor plant growth.',
    'protection' => 'Keep fields weed-free and monitor infestations.',
    'recommended_control' => 'Apply Spinetoram or recommended insecticides.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'Cotton Leaf Curl Disease',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'Spread by whiteflies carrying the virus.',
    'symptoms' => 'Leaf curling, vein thickening, stunted growth, and reduced boll formation.',
    'protection' => 'Use resistant varieties and control whitefly populations.',
    'recommended_control' => 'Manage whiteflies using recommended insecticides.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'Bacterial Blight',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Spread through infected seeds, rain splash, and crop residues.',
    'symptoms' => 'Angular leaf spots, stem lesions, and boll rot.',
    'protection' => 'Use certified seed and remove infected plant material.',
    'recommended_control' => 'Apply copper-based bactericides where recommended.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'Fusarium Wilt',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Soil-borne fungus infects roots and vascular tissues.',
    'symptoms' => 'Yellowing leaves, wilting, and plant death.',
    'protection' => 'Practice crop rotation and use resistant varieties.',
    'recommended_control' => 'Use disease-free seed and appropriate fungicide treatments.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'Root Rot',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Fungi attack roots under poorly drained soil conditions.',
    'symptoms' => 'Root decay, wilting, and poor plant growth.',
    'protection' => 'Improve drainage and avoid waterlogging.',
    'recommended_control' => 'Apply suitable fungicides and follow proper field management.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'Alternaria Leaf Spot',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Fungal infection develops during warm and humid conditions.',
    'symptoms' => 'Brown circular spots on leaves leading to defoliation.',
    'protection' => 'Maintain proper field sanitation and balanced fertilization.',
    'recommended_control' => 'Apply Mancozeb or Chlorothalonil as recommended.'
],

[
    'crop_name' => 'Cotton',
    'name' => 'Verticillium Wilt',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Soil-borne fungus enters through roots and blocks water transport.',
    'symptoms' => 'Leaf yellowing, wilting, and reduced yield.',
    'protection' => 'Use resistant varieties and crop rotation.',
    'recommended_control' => 'Follow integrated disease management practices and use suitable fungicides.'
],
[
    'crop_name' => 'Sugarcane',
    'name' => 'Early Shoot Borer',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae enter young shoots and feed inside the stem.',
    'symptoms' => 'Young shoots dry up from the center and stop growing.',
    'protection' => 'Use healthy seed cane, remove affected shoots, and keep the field clean.',
    'recommended_control' => 'Apply Chlorantraniliprole or other recommended insecticides.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'Top Borer',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae enter through leaves and damage the upper part of the cane.',
    'symptoms' => 'Top leaves dry, become yellow, and the cane grows poorly.',
    'protection' => 'Remove infected plants and regularly inspect the field.',
    'recommended_control' => 'Apply suitable systemic insecticides.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'Pyrilla',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'The insect sucks sap from sugarcane leaves.',
    'symptoms' => 'Leaves become yellow, weak, and covered with sticky substances.',
    'protection' => 'Encourage natural predators and keep the field clean.',
    'recommended_control' => 'Apply Imidacloprid or recommended insecticides.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'White Grub',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae feed on roots under the soil.',
    'symptoms' => 'Plants wilt, grow slowly, and can easily be pulled from the soil.',
    'protection' => 'Deep ploughing before planting and proper field preparation.',
    'recommended_control' => 'Apply recommended soil insecticides.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'Termites',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Termites attack roots and underground parts of the plant.',
    'symptoms' => 'Plants become dry, weak, and may die suddenly.',
    'protection' => 'Use treated seed cane and maintain proper soil moisture.',
    'recommended_control' => 'Apply Chlorpyrifos or other recommended termiticides.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'Red Rot',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'A fungus infects the cane, especially during warm and humid weather.',
    'symptoms' => 'Leaves turn yellow, canes dry out, and the inside of the cane becomes red.',
    'protection' => 'Use disease-free seed cane and resistant varieties.',
    'recommended_control' => 'Remove infected plants and apply recommended fungicides.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'Smut Disease',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The disease spreads through infected planting material.',
    'symptoms' => 'A long black whip-like structure grows from the top of the plant.',
    'protection' => 'Use healthy planting material and resistant varieties.',
    'recommended_control' => 'Treat seed cane with hot water and remove infected plants.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'Wilt Disease',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Fungus attacks roots and blocks water movement inside the plant.',
    'symptoms' => 'Leaves become yellow, plants wilt, and eventually dry up.',
    'protection' => 'Practice crop rotation and ensure proper drainage.',
    'recommended_control' => 'Use healthy seed cane and resistant varieties.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'Pokkah Boeng',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Fungus infects young leaves during humid weather.',
    'symptoms' => 'Leaves become twisted, wrinkled, and discolored.',
    'protection' => 'Keep the field clean and provide balanced fertilizer.',
    'recommended_control' => 'Apply Carbendazim or suitable fungicides.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'Grassy Shoot Disease',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'The disease spreads through infected planting material and insects.',
    'symptoms' => 'Many thin grass-like shoots grow, and canes do not develop properly.',
    'protection' => 'Use healthy seed cane and remove infected plants.',
    'recommended_control' => 'Destroy infected clumps and use disease-free planting material.'
],

[
    'crop_name' => 'Sugarcane',
    'name' => 'Mosaic Disease',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus spreads through infected seed cane and insect carriers.',
    'symptoms' => 'Light and dark green patches appear on leaves, and plant growth becomes weak.',
    'protection' => 'Use resistant varieties and healthy planting material.',
    'recommended_control' => 'Remove infected plants and control insect vectors.'
],
[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Maize Stem Borer',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae enter the stem and feed inside the plant.',
    'symptoms' => 'Small holes in leaves, dried central shoots, and weak plant growth.',
    'protection' => 'Remove affected plants and keep the field free from crop residues.',
    'recommended_control' => 'Apply Chlorantraniliprole or recommended insecticides.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Fall Armyworm',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae feed on leaves and young growing parts of maize plants.',
    'symptoms' => 'Large holes in leaves, damaged whorls, and sawdust-like material inside leaf funnels.',
    'protection' => 'Inspect fields regularly and destroy egg masses when found.',
    'recommended_control' => 'Apply Emamectin Benzoate or Spinetoram.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Corn Earworm',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae attack maize ears and feed on developing kernels.',
    'symptoms' => 'Damaged grains, holes in cobs, and poor grain quality.',
    'protection' => 'Monitor fields regularly and remove heavily infested ears.',
    'recommended_control' => 'Apply suitable insecticides as recommended.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Aphids',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Aphids suck sap from leaves and stems.',
    'symptoms' => 'Leaves become yellow, curled, and sticky.',
    'protection' => 'Encourage natural predators and avoid excessive nitrogen fertilizer.',
    'recommended_control' => 'Apply Imidacloprid or Acetamiprid.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Termites',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Termites attack roots and underground plant parts.',
    'symptoms' => 'Plants dry up suddenly, become weak, and may die.',
    'protection' => 'Use treated seed and maintain proper soil moisture.',
    'recommended_control' => 'Apply Chlorpyrifos or recommended termiticides.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Northern Leaf Blight',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads during humid and rainy weather.',
    'symptoms' => 'Long gray or brown spots appear on leaves and gradually spread.',
    'protection' => 'Use resistant varieties and maintain proper plant spacing.',
    'recommended_control' => 'Apply Mancozeb or Azoxystrobin.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Common Rust',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Fungal spores spread through wind and infect leaves.',
    'symptoms' => 'Small reddish-brown powdery spots appear on leaves.',
    'protection' => 'Use resistant varieties and remove infected plant debris.',
    'recommended_control' => 'Apply Propiconazole or other suitable fungicides.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Downy Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The disease develops in cool and humid conditions.',
    'symptoms' => 'Leaves show yellow stripes and white fungal growth underneath.',
    'protection' => 'Use disease-free seed and resistant varieties.',
    'recommended_control' => 'Treat seeds with appropriate fungicides before sowing.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Charcoal Rot',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus infects roots and stems, especially during drought stress.',
    'symptoms' => 'Plants wilt, dry early, and stems become weak.',
    'protection' => 'Provide proper irrigation and avoid plant stress.',
    'recommended_control' => 'Practice crop rotation and use healthy seed.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Maize Mosaic Disease',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus spreads through insect carriers such as leafhoppers.',
    'symptoms' => 'Light and dark green patches appear on leaves and plant growth slows down.',
    'protection' => 'Control insect vectors and use healthy seed.',
    'recommended_control' => 'Remove infected plants and manage insect populations.'
],

[
    'crop_name' => 'Maize (Corn)',
    'name' => 'Bacterial Stalk Rot',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Bacteria enter through wounds and spread in humid conditions.',
    'symptoms' => 'Stems become soft, rotten, and give off a bad smell.',
    'protection' => 'Avoid plant injury and ensure proper drainage.',
    'recommended_control' => 'Remove infected plants and maintain field hygiene.'
],
[
    'crop_name' => 'Sorghum',
    'name' => 'Sorghum Stem Borer',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae bore into stems and feed inside the plant.',
    'symptoms' => 'Small holes in stems, drying central shoots, and weak plant growth.',
    'protection' => 'Remove affected plants and keep the field free from crop residues.',
    'recommended_control' => 'Apply Chlorantraniliprole or recommended insecticides.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Shoot Fly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'The fly lays eggs on young plants, and larvae damage the growing point.',
    'symptoms' => 'The center shoot dries up and can be easily pulled out.',
    'protection' => 'Sow on time and remove damaged plants.',
    'recommended_control' => 'Treat seeds and apply recommended insecticides.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Aphids',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Aphids suck sap from leaves and stems.',
    'symptoms' => 'Leaves turn yellow, become sticky, and plant growth slows down.',
    'protection' => 'Encourage natural predators and keep weeds under control.',
    'recommended_control' => 'Apply Imidacloprid or Acetamiprid.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Armyworm',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae feed on leaves, especially during early growth stages.',
    'symptoms' => 'Leaves show large holes and may be completely eaten.',
    'protection' => 'Monitor fields regularly and destroy larvae when found.',
    'recommended_control' => 'Apply Emamectin Benzoate or Spinetoram.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Midge',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'The insect attacks flowering heads and developing grains.',
    'symptoms' => 'Poor grain formation and empty seeds.',
    'protection' => 'Plant resistant varieties and sow at the recommended time.',
    'recommended_control' => 'Apply suitable insecticides during flowering.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Anthracnose',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads during warm and humid weather.',
    'symptoms' => 'Red, brown, or black spots appear on leaves and stems.',
    'protection' => 'Use resistant varieties and remove infected plant debris.',
    'recommended_control' => 'Apply Mancozeb or Azoxystrobin.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Leaf Blight',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus infects leaves under humid conditions.',
    'symptoms' => 'Large brown spots appear on leaves and spread over time.',
    'protection' => 'Maintain proper plant spacing and avoid excessive irrigation.',
    'recommended_control' => 'Apply recommended fungicides.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Downy Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The disease develops in cool and moist conditions.',
    'symptoms' => 'Leaves show yellow stripes and white growth underneath.',
    'protection' => 'Use disease-free seed and resistant varieties.',
    'recommended_control' => 'Treat seeds with suitable fungicides.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Grain Mold',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Fungi infect grains during wet weather near harvest.',
    'symptoms' => 'Grains become discolored, moldy, and poor in quality.',
    'protection' => 'Harvest on time and use resistant varieties.',
    'recommended_control' => 'Apply recommended fungicides when necessary.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Sorghum Mosaic Disease',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus spreads through infected plants and insect carriers.',
    'symptoms' => 'Leaves show light and dark green patches, and plants grow poorly.',
    'protection' => 'Use healthy seed and control insect vectors.',
    'recommended_control' => 'Remove infected plants and manage insect populations.'
],

[
    'crop_name' => 'Sorghum',
    'name' => 'Bacterial Leaf Streak',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Bacteria spread through rain splashes and infected plant material.',
    'symptoms' => 'Long yellow or brown streaks appear on leaves.',
    'protection' => 'Use clean seed and avoid working in wet fields.',
    'recommended_control' => 'Remove infected plants and maintain field hygiene.'
],
[
    'crop_name' => 'Pearl Millet',
    'name' => 'Shoot Fly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'The fly lays eggs on young plants and the larvae damage the growing point.',
    'symptoms' => 'The center shoot dries up and can be pulled out easily.',
    'protection' => 'Sow on time and remove damaged plants from the field.',
    'recommended_control' => 'Treat seeds and apply recommended insecticides.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Stem Borer',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae enter the stem and feed inside the plant.',
    'symptoms' => 'Small holes in stems, dried central shoots, and poor plant growth.',
    'protection' => 'Remove affected plants and destroy crop residues after harvest.',
    'recommended_control' => 'Apply Chlorantraniliprole or recommended insecticides.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Aphids',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Aphids suck sap from leaves and stems.',
    'symptoms' => 'Leaves become yellow, sticky, and plants look weak.',
    'protection' => 'Control weeds and encourage natural predators.',
    'recommended_control' => 'Apply Imidacloprid or Acetamiprid.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Armyworm',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae feed on leaves and young plant parts.',
    'symptoms' => 'Large holes in leaves and damaged foliage.',
    'protection' => 'Inspect fields regularly and destroy larvae when found.',
    'recommended_control' => 'Apply Emamectin Benzoate or Spinetoram.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Head Miner',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae attack flowering heads and developing grains.',
    'symptoms' => 'Damaged grain heads and poor grain formation.',
    'protection' => 'Monitor fields during flowering and remove infested heads.',
    'recommended_control' => 'Apply suitable insecticides as recommended.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Downy Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus develops in humid weather and infects young plants.',
    'symptoms' => 'Leaves turn yellow and white fungal growth appears underneath.',
    'protection' => 'Use resistant varieties and disease-free seed.',
    'recommended_control' => 'Treat seed with Metalaxyl before sowing.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Rust Disease',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Fungal spores spread through wind and infect leaves.',
    'symptoms' => 'Small brown or reddish powdery spots appear on leaves.',
    'protection' => 'Use resistant varieties and remove infected crop debris.',
    'recommended_control' => 'Apply Propiconazole or other suitable fungicides.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Leaf Blight',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads rapidly in warm and humid conditions.',
    'symptoms' => 'Large brown spots appear on leaves and gradually spread.',
    'protection' => 'Maintain proper plant spacing and field sanitation.',
    'recommended_control' => 'Apply Mancozeb or Azoxystrobin.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Ergot Disease',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus infects flowers during humid weather.',
    'symptoms' => 'Sticky liquid appears on grain heads and grains do not develop properly.',
    'protection' => 'Use clean seed and remove infected heads.',
    'recommended_control' => 'Follow recommended fungicide applications.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Pearl Millet Mosaic Disease',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus spreads through insect carriers and infected plants.',
    'symptoms' => 'Leaves show light and dark green patches and plants grow slowly.',
    'protection' => 'Control insect vectors and use healthy seed.',
    'recommended_control' => 'Remove infected plants and manage insect populations.'
],

[
    'crop_name' => 'Pearl Millet',
    'name' => 'Bacterial Leaf Streak',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Bacteria spread through rain splashes and infected plant material.',
    'symptoms' => 'Long yellow or brown lines appear on leaves.',
    'protection' => 'Use disease-free seed and avoid working in wet fields.',
    'recommended_control' => 'Remove infected plants and maintain field hygiene.'
],
[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Fruit Fly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Adult flies lay eggs inside young fruits, and larvae feed on the fruit pulp.',
    'symptoms' => 'Small holes on fruits, rotting, and premature fruit drop.',
    'protection' => 'Collect and destroy damaged fruits and use fruit fly traps.',
    'recommended_control' => 'Apply Spinosad or other recommended insecticides.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Red Pumpkin Beetle',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Adult beetles feed on leaves, flowers, and young fruits.',
    'symptoms' => 'Holes in leaves, damaged flowers, and poor plant growth.',
    'protection' => 'Remove beetles manually and keep the field free from weeds.',
    'recommended_control' => 'Apply Imidacloprid or recommended insecticides.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Aphids',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Aphids suck sap from leaves and tender shoots.',
    'symptoms' => 'Leaves curl, turn yellow, and become sticky.',
    'protection' => 'Encourage natural predators and remove heavily infested leaves.',
    'recommended_control' => 'Apply Acetamiprid or Imidacloprid.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Whitefly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Whiteflies feed by sucking plant sap and spread diseases.',
    'symptoms' => 'Leaves turn yellow, plants become weak, and growth slows down.',
    'protection' => 'Use yellow sticky traps and keep the field clean.',
    'recommended_control' => 'Apply Thiamethoxam or Imidacloprid.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Leaf Miner',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae feed inside leaf tissues and create tunnels.',
    'symptoms' => 'White winding lines appear on leaves and leaves dry early.',
    'protection' => 'Remove affected leaves and monitor fields regularly.',
    'recommended_control' => 'Apply Abamectin or suitable insecticides.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Powdery Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus develops during warm and dry weather.',
    'symptoms' => 'White powder-like patches appear on leaves and stems.',
    'protection' => 'Maintain good air circulation and avoid overcrowding.',
    'recommended_control' => 'Apply Sulfur or Hexaconazole.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Downy Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The disease spreads in cool and humid conditions.',
    'symptoms' => 'Yellow spots appear on leaves and gray fungal growth develops underneath.',
    'protection' => 'Avoid excess moisture and use disease-free seed.',
    'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Anthracnose',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads through infected plant debris and rain splashes.',
    'symptoms' => 'Dark sunken spots appear on leaves, stems, and fruits.',
    'protection' => 'Remove infected plant parts and keep the field clean.',
    'recommended_control' => 'Apply Carbendazim or Mancozeb.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Fusarium Wilt',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Soil-borne fungi infect the roots and block water movement.',
    'symptoms' => 'Leaves turn yellow, plants wilt, and eventually die.',
    'protection' => 'Practice crop rotation and use healthy seed.',
    'recommended_control' => 'Use suitable fungicides and resistant varieties.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Mosaic Disease',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus spreads through aphids and infected plants.',
    'symptoms' => 'Leaves show light and dark green patches, become distorted, and plant growth slows down.',
    'protection' => 'Control aphids and remove infected plants.',
    'recommended_control' => 'Remove infected plants and manage insect vectors.'
],

[
    'crop_name' => 'Bottle Gourd',
    'name' => 'Bacterial Wilt',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Bacteria enter the plant through roots or wounds.',
    'symptoms' => 'Plants suddenly wilt and do not recover even after watering.',
    'protection' => 'Use disease-free seed and avoid injuring plants.',
    'recommended_control' => 'Remove infected plants and maintain field sanitation.'
],
[
    'crop_name' => 'Okra',
    'name' => 'Fruit Borer',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae bore into tender shoots and developing fruits and feed inside them.',
    'symptoms' => 'Holes in fruits, damaged shoots, and poor-quality produce.',
    'protection' => 'Remove and destroy affected fruits and shoots regularly.',
    'recommended_control' => 'Apply Emamectin Benzoate or Spinosad.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Whitefly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Whiteflies suck sap from leaves and spread viral diseases.',
    'symptoms' => 'Leaves turn yellow, plants become weak, and growth slows down.',
    'protection' => 'Use yellow sticky traps and keep the field free from weeds.',
    'recommended_control' => 'Apply Imidacloprid or Thiamethoxam.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Aphids',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Aphids suck sap from young leaves and shoots.',
    'symptoms' => 'Leaves curl, become sticky, and turn yellow.',
    'protection' => 'Encourage beneficial insects and remove heavily infested leaves.',
    'recommended_control' => 'Apply Acetamiprid or Imidacloprid.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Jassid',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Jassids feed on plant sap from the underside of leaves.',
    'symptoms' => 'Leaf edges turn yellow, curl downward, and dry out.',
    'protection' => 'Monitor fields regularly and use resistant varieties.',
    'recommended_control' => 'Apply Thiamethoxam or Acetamiprid.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Red Spider Mite',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Mites feed on leaf sap, especially during hot and dry weather.',
    'symptoms' => 'Leaves develop tiny yellow spots, become dry, and may fall off.',
    'protection' => 'Maintain adequate moisture and remove heavily infested leaves.',
    'recommended_control' => 'Apply Abamectin or recommended miticides.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Powdery Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus develops under warm and humid conditions.',
    'symptoms' => 'White powder-like coating appears on leaves and stems.',
    'protection' => 'Maintain proper plant spacing and improve air circulation.',
    'recommended_control' => 'Apply Sulfur or Hexaconazole.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Cercospora Leaf Spot',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads through infected plant debris and moisture.',
    'symptoms' => 'Small brown spots appear on leaves and gradually increase in number.',
    'protection' => 'Remove infected leaves and keep the field clean.',
    'recommended_control' => 'Apply Mancozeb or Carbendazim.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Fusarium Wilt',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Soil-borne fungus infects roots and blocks water movement.',
    'symptoms' => 'Leaves turn yellow, plants wilt, and eventually die.',
    'protection' => 'Practice crop rotation and use healthy seed.',
    'recommended_control' => 'Use suitable fungicides and resistant varieties.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Damping Off',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Fungi attack young seedlings in wet soil conditions.',
    'symptoms' => 'Seedlings fall over, rot at the base, and die.',
    'protection' => 'Avoid overwatering and use treated seed.',
    'recommended_control' => 'Treat seed with Thiram or Carbendazim before sowing.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Yellow Vein Mosaic Disease',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus spreads through whiteflies.',
    'symptoms' => 'Leaf veins become yellow, leaves turn pale, and fruit production decreases.',
    'protection' => 'Control whiteflies and use resistant varieties.',
    'recommended_control' => 'Remove infected plants and manage whitefly populations.'
],

[
    'crop_name' => 'Okra',
    'name' => 'Bacterial Leaf Blight',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Bacteria spread through infected seed, water, and plant debris.',
    'symptoms' => 'Water-soaked spots appear on leaves and later turn brown.',
    'protection' => 'Use certified seed and avoid overhead irrigation.',
    'recommended_control' => 'Apply copper-based bactericides where recommended.'
],
[
    'crop_name' => 'Tomato',
    'name' => 'Tomato Fruit Borer',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae bore into fruits and feed inside them.',
    'symptoms' => 'Holes in fruits, damaged tomatoes, and rotting fruits.',
    'protection' => 'Remove damaged fruits and regularly monitor the crop.',
    'recommended_control' => 'Apply Emamectin Benzoate or Spinosad.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Whitefly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Whiteflies suck sap from leaves and spread viral diseases.',
    'symptoms' => 'Leaves turn yellow, curl, and plants become weak.',
    'protection' => 'Use yellow sticky traps and keep weeds under control.',
    'recommended_control' => 'Apply Imidacloprid or Thiamethoxam.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Aphids',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Aphids feed by sucking sap from young leaves and shoots.',
    'symptoms' => 'Leaves curl, become sticky, and plant growth slows down.',
    'protection' => 'Encourage beneficial insects and remove heavily infested leaves.',
    'recommended_control' => 'Apply Acetamiprid or Imidacloprid.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Thrips',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Thrips feed on leaves, flowers, and tender plant parts.',
    'symptoms' => 'Leaves become silvery, curled, and flowers may drop early.',
    'protection' => 'Keep the field clean and use blue sticky traps.',
    'recommended_control' => 'Apply Spinetoram or Abamectin.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Leaf Miner',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae feed inside leaf tissues and create tunnels.',
    'symptoms' => 'White winding lines appear on leaves and leaves dry early.',
    'protection' => 'Remove affected leaves and monitor fields regularly.',
    'recommended_control' => 'Apply Abamectin or suitable insecticides.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Early Blight',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads in warm and humid weather.',
    'symptoms' => 'Brown spots appear on leaves and older leaves dry up.',
    'protection' => 'Remove infected leaves and avoid overhead watering.',
    'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Late Blight',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The disease spreads rapidly during cool and wet weather.',
    'symptoms' => 'Dark brown patches appear on leaves and fruits, causing rot.',
    'protection' => 'Ensure proper air circulation and avoid excess moisture.',
    'recommended_control' => 'Apply Metalaxyl + Mancozeb.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Powdery Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus develops under warm and dry conditions.',
    'symptoms' => 'White powder-like coating appears on leaves.',
    'protection' => 'Maintain proper plant spacing and remove infected leaves.',
    'recommended_control' => 'Apply Sulfur or Hexaconazole.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Fusarium Wilt',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Soil-borne fungus infects roots and blocks water movement.',
    'symptoms' => 'Leaves turn yellow, plants wilt, and eventually die.',
    'protection' => 'Use resistant varieties and practice crop rotation.',
    'recommended_control' => 'Use suitable fungicides and disease-free seedlings.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Tomato Leaf Curl Virus',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus spreads through whiteflies.',
    'symptoms' => 'Leaves curl upward, become small, and plant growth becomes weak.',
    'protection' => 'Control whiteflies and remove infected plants.',
    'recommended_control' => 'Manage whitefly populations and destroy infected plants.'
],

[
    'crop_name' => 'Tomato',
    'name' => 'Bacterial Spot',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Bacteria spread through infected seed, water, and plant debris.',
    'symptoms' => 'Small dark spots appear on leaves and fruits.',
    'protection' => 'Use certified seed and avoid working in wet fields.',
    'recommended_control' => 'Apply copper-based bactericides where recommended.'
],
[
    'crop_name' => 'Pumpkin',
    'name' => 'Red Pumpkin Beetle',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Adult beetles and larvae feed on leaves, flowers, and young plants.',
    'symptoms' => 'Holes in leaves, damaged seedlings, and weak plant growth.',
    'protection' => 'Remove weeds, collect beetles by hand, and keep the field clean.',
    'recommended_control' => 'Apply Imidacloprid or Chlorpyrifos as recommended.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Aphids',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Aphids suck sap from young leaves and shoots.',
    'symptoms' => 'Leaves curl, turn yellow, and become sticky.',
    'protection' => 'Encourage beneficial insects and remove heavily infested leaves.',
    'recommended_control' => 'Apply Imidacloprid or Acetamiprid.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Whitefly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Whiteflies feed on plant sap and spread viral diseases.',
    'symptoms' => 'Leaves become yellow, weak, and plant growth slows down.',
    'protection' => 'Use yellow sticky traps and keep weeds under control.',
    'recommended_control' => 'Apply Thiamethoxam or Imidacloprid.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Fruit Fly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Female flies lay eggs inside young fruits and larvae feed on them.',
    'symptoms' => 'Small holes on fruits, fruit rotting, and premature fruit drop.',
    'protection' => 'Collect and destroy damaged fruits and use bait traps.',
    'recommended_control' => 'Apply Spinosad or recommended fruit fly bait sprays.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Leaf Miner',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae tunnel inside leaves and feed on leaf tissues.',
    'symptoms' => 'White winding lines appear on leaves and leaves dry early.',
    'protection' => 'Remove affected leaves and monitor crops regularly.',
    'recommended_control' => 'Apply Abamectin or suitable insecticides.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Powdery Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus develops during warm days and humid nights.',
    'symptoms' => 'White powder-like patches appear on leaves and stems.',
    'protection' => 'Maintain proper plant spacing and remove infected leaves.',
    'recommended_control' => 'Apply Sulfur or Hexaconazole.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Downy Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The disease spreads during cool and humid weather.',
    'symptoms' => 'Yellow spots appear on leaves and leaves dry quickly.',
    'protection' => 'Avoid excess moisture and improve air circulation.',
    'recommended_control' => 'Apply Metalaxyl + Mancozeb.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Anthracnose',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads through infected plant debris and rain splashes.',
    'symptoms' => 'Dark sunken spots appear on leaves, stems, and fruits.',
    'protection' => 'Remove infected plant parts and practice crop rotation.',
    'recommended_control' => 'Apply Mancozeb or Carbendazim.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Fusarium Wilt',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'Soil-borne fungus infects roots and blocks water flow.',
    'symptoms' => 'Leaves turn yellow, plants wilt, and eventually die.',
    'protection' => 'Use healthy seed and practice crop rotation.',
    'recommended_control' => 'Use suitable fungicides and resistant varieties.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Mosaic Virus',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus spreads mainly through aphids and infected plants.',
    'symptoms' => 'Leaves show light and dark green patches, become distorted, and plant growth is reduced.',
    'protection' => 'Control aphids and remove infected plants immediately.',
    'recommended_control' => 'Manage aphid populations and destroy infected plants.'
],

[
    'crop_name' => 'Pumpkin',
    'name' => 'Bacterial Wilt',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Bacteria enter plants through wounds and are spread by cucumber beetles.',
    'symptoms' => 'Plants suddenly wilt even when soil has enough moisture.',
    'protection' => 'Control beetles and remove infected plants.',
    'recommended_control' => 'Manage beetle populations and maintain field sanitation.'
],
[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Fruit Fly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Female flies lay eggs inside young fruits, and larvae feed on the fruit pulp.',
    'symptoms' => 'Small holes on fruits, fruits rot from inside, and many fruits fall early.',
    'protection' => 'Collect and destroy damaged fruits and use fruit fly traps.',
    'recommended_control' => 'Apply Spinosad bait sprays or recommended fruit fly control measures.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Aphids',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Aphids suck sap from tender leaves and shoots.',
    'symptoms' => 'Leaves curl, turn yellow, and become sticky.',
    'protection' => 'Remove heavily infested leaves and encourage beneficial insects.',
    'recommended_control' => 'Apply Imidacloprid or Acetamiprid.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Whitefly',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Whiteflies feed on plant sap and spread viral diseases.',
    'symptoms' => 'Leaves turn yellow, plants become weak, and growth slows down.',
    'protection' => 'Use yellow sticky traps and keep weeds under control.',
    'recommended_control' => 'Apply Thiamethoxam or Imidacloprid.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Red Pumpkin Beetle',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Adult beetles feed on leaves, flowers, and young plants.',
    'symptoms' => 'Holes in leaves, damaged seedlings, and poor plant growth.',
    'protection' => 'Keep the field clean and remove beetles manually when possible.',
    'recommended_control' => 'Apply Chlorpyrifos or other recommended insecticides.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Leaf Miner',
    'type' => 'Insect Pest',
    'how_it_occurs' => 'Larvae feed inside leaves and create tunnels.',
    'symptoms' => 'White winding lines appear on leaves and leaves dry early.',
    'protection' => 'Remove affected leaves and regularly inspect the crop.',
    'recommended_control' => 'Apply Abamectin or suitable insecticides.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Powdery Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus develops during warm and humid weather.',
    'symptoms' => 'White powder-like patches appear on leaves and stems.',
    'protection' => 'Maintain proper spacing and remove infected plant parts.',
    'recommended_control' => 'Apply Sulfur or Hexaconazole.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Downy Mildew',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The disease spreads during cool and humid conditions.',
    'symptoms' => 'Yellow spots appear on leaves and leaves later turn brown and dry.',
    'protection' => 'Avoid excess moisture and improve air circulation.',
    'recommended_control' => 'Apply Metalaxyl + Mancozeb.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Anthracnose',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'The fungus spreads through infected plant debris and rain splashes.',
    'symptoms' => 'Dark sunken spots appear on leaves, stems, and fruits.',
    'protection' => 'Remove infected plant parts and practice crop rotation.',
    'recommended_control' => 'Apply Mancozeb or Carbendazim.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Fusarium Wilt',
    'type' => 'Fungal Disease',
    'how_it_occurs' => 'A soil-borne fungus infects roots and blocks water movement.',
    'symptoms' => 'Leaves turn yellow, plants wilt, and may eventually die.',
    'protection' => 'Use healthy seed and practice crop rotation.',
    'recommended_control' => 'Use resistant varieties and recommended fungicides.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Mosaic Virus',
    'type' => 'Viral Disease',
    'how_it_occurs' => 'The virus spreads mainly through aphids and infected plants.',
    'symptoms' => 'Leaves show light and dark green patches, become twisted, and plant growth slows down.',
    'protection' => 'Control aphids and remove infected plants immediately.',
    'recommended_control' => 'Manage aphid populations and destroy infected plants.'
],

[
    'crop_name' => 'Bitter Gourd',
    'name' => 'Bacterial Wilt',
    'type' => 'Bacterial Disease',
    'how_it_occurs' => 'Bacteria enter plants through wounds and spread within the plant.',
    'symptoms' => 'Plants suddenly wilt and do not recover even after watering.',
    'protection' => 'Remove infected plants and maintain field sanitation.',
    'recommended_control' => 'Use disease-free seed and follow recommended bacterial disease management practices.'
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
