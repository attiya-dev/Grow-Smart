<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\PestManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pest3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $pestDetails = [
    [
        'crop_name' => 'Tobacco',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and stems, especially in warm weather.',
        'symptoms' => 'Leaves become curly, sticky, and plants grow slowly.',
        'protection' => 'Remove weeds, avoid overcrowding, and encourage natural enemies like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Tobacco',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny white insects feed on leaf sap and spread quickly in hot weather.',
        'symptoms' => 'Leaves turn yellow, sticky coating appears, and plant weakens.',
        'protection' => 'Use yellow sticky traps and keep field clean.',
        'recommended_control' => 'Apply Acetamiprid or Imidacloprid.'
    ],

    [
        'crop_name' => 'Tobacco',
        'name' => 'Tobacco Caterpillar (Spodoptera)',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Caterpillars eat leaves, usually active at night.',
        'symptoms' => 'Large holes in leaves, plants look heavily damaged.',
        'protection' => 'Regular field checking and hand removal in early stage.',
        'recommended_control' => 'Apply Emamectin Benzoate or Chlorpyrifos.'
    ],

    [
        'crop_name' => 'Tobacco',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Very small insects suck juice from young leaves.',
        'symptoms' => 'Leaves become silvery, curled, and dry at edges.',
        'protection' => 'Keep field clean and avoid stress on plants.',
        'recommended_control' => 'Apply Spinosad or Imidacloprid.'
    ],

    [
        'crop_name' => 'Tobacco',
        'name' => 'Black Shank',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots and stem base in wet conditions.',
        'symptoms' => 'Plants suddenly wilt, stem base turns black and rots.',
        'protection' => 'Use well-drained soil and resistant varieties.',
        'recommended_control' => 'Apply Metalaxyl or Ridomil-based fungicides.'
    ],

    [
        'crop_name' => 'Tobacco',
        'name' => 'Damping Off',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus attacks seedlings in nursery stage due to high moisture.',
        'symptoms' => 'Young plants fall over and die quickly.',
        'protection' => 'Avoid overwatering and ensure proper drainage in nursery.',
        'recommended_control' => 'Treat soil or seeds with Carbendazim.'
    ],

    [
        'crop_name' => 'Tobacco',
        'name' => 'Tobacco Mosaic Virus (TMV)',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread through infected tools, hands, and plant contact.',
        'symptoms' => 'Leaves become spotted, twisted, and uneven in color.',
        'protection' => 'Use clean tools and remove infected plants immediately.',
        'recommended_control' => 'No cure; control spread by removing infected plants.'
    ],

    [
        'crop_name' => 'Tobacco',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in wet or poorly drained soil.',
        'symptoms' => 'Plants turn yellow, wilt, and die slowly.',
        'protection' => 'Improve drainage and avoid waterlogging.',
        'recommended_control' => 'Apply Carbendazim or soil fungicides.'
    ],

    [
        'crop_name' => 'Tobacco',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid weather and infected plant debris.',
        'symptoms' => 'Brown or black spots appear on leaves, leaves dry early.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Mancozeb or Copper-based fungicides.'
    ],
    [
        'crop_name' => 'Lucerne',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from young leaves and stems, especially in cool weather.',
        'symptoms' => 'Leaves curl, plants become weak, and growth becomes slow.',
        'protection' => 'Remove weeds, avoid excess nitrogen, and support natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Lucerne',
        'name' => 'Armyworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Caterpillars feed on leaves and spread quickly in groups.',
        'symptoms' => 'Leaves are eaten, and plants look cut or damaged.',
        'protection' => 'Regular field checking and early removal of affected plants.',
        'recommended_control' => 'Apply Chlorpyrifos or Emamectin Benzoate.'
    ],

    [
        'crop_name' => 'Lucerne',
        'name' => 'Leafhopper',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and stems.',
        'symptoms' => 'Leaves turn yellow, dry at edges, and plants look weak.',
        'protection' => 'Keep field clean and avoid overcrowding.',
        'recommended_control' => 'Apply Imidacloprid or Acetamiprid.'
    ],

    [
        'crop_name' => 'Lucerne',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at the base.',
        'symptoms' => 'Young plants fall over or get cut near the ground.',
        'protection' => 'Clean field before sowing and remove plant debris.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Lucerne',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in dry but cool weather on leaves.',
        'symptoms' => 'White powder-like layer on leaves, leaves dry and fall early.',
        'protection' => 'Use resistant varieties and avoid dense planting.',
        'recommended_control' => 'Apply Sulfur or Propiconazole.'
    ],

    [
        'crop_name' => 'Lucerne',
        'name' => 'Rust Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through wind in humid weather.',
        'symptoms' => 'Orange or brown spots on leaves, leaves dry early.',
        'protection' => 'Remove infected leaves and maintain field hygiene.',
        'recommended_control' => 'Apply Mancozeb or Triazole fungicides.'
    ],

    [
        'crop_name' => 'Lucerne',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in wet and humid conditions.',
        'symptoms' => 'Small brown or black spots appear on leaves, leaves fall early.',
        'protection' => 'Avoid overhead watering and remove infected leaves.',
        'recommended_control' => 'Apply Copper-based fungicides or Mancozeb.'
    ],

    [
        'crop_name' => 'Lucerne',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in wet or poorly drained soil.',
        'symptoms' => 'Plants turn yellow, wilt, and slowly die.',
        'protection' => 'Improve soil drainage and avoid overwatering.',
        'recommended_control' => 'Apply Carbendazim or soil fungicides.'
    ],

    [
        'crop_name' => 'Lucerne',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in warm and wet conditions.',
        'symptoms' => 'Dark sunken spots on stems, plants dry and die in patches.',
        'protection' => 'Use clean seeds and remove infected plants.',
        'recommended_control' => 'Apply Propiconazole or Mancozeb.'
    ],
    [
        'crop_name' => 'Fenugreek(Methi)',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from young leaves and tender stems, especially in cool weather.',
        'symptoms' => 'Leaves curl, turn yellow, and plant growth becomes slow.',
        'protection' => 'Remove weeds, avoid excess nitrogen, and encourage natural enemies like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Fenugreek(Methi)',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Very small insects suck juice from leaves in dry and warm weather.',
        'symptoms' => 'Leaves become silvery, curled, and dry at edges.',
        'protection' => 'Keep field clean and avoid water stress.',
        'recommended_control' => 'Apply Spinosad or Acetamiprid.'
    ],

    [
        'crop_name' => 'Fenugreek(Methi)',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at ground level.',
        'symptoms' => 'Young plants get cut and fall down suddenly.',
        'protection' => 'Clean field before sowing and remove crop residues.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Fenugreek(Methi)',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae feed inside leaves and make tunnels.',
        'symptoms' => 'Leaves show white lines and become weak.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Abamectin or Spinosad.'
    ],

    [
        'crop_name' => 'Fenugreek(Methi)',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in cool and dry weather.',
        'symptoms' => 'White powder-like layer on leaves, leaves dry and fall early.',
        'protection' => 'Avoid overcrowding and improve air circulation.',
        'recommended_control' => 'Apply Sulfur or Propiconazole.'
    ],

    [
        'crop_name' => 'Fenugreek(Methi)',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in cool and moist conditions.',
        'symptoms' => 'Yellow patches on leaves and white growth under leaves.',
        'protection' => 'Avoid excess watering and ensure proper spacing.',
        'recommended_control' => 'Apply Metalaxyl-based fungicides.'
    ],

    [
        'crop_name' => 'Fenugreek(Methi)',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in wet or poorly drained soil.',
        'symptoms' => 'Plants turn yellow, wilt, and slowly die.',
        'protection' => 'Improve drainage and avoid overwatering.',
        'recommended_control' => 'Apply Carbendazim or soil fungicides.'
    ],

    [
        'crop_name' => 'Fenugreek(Methi)',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid weather and infected plant debris.',
        'symptoms' => 'Brown or black spots on leaves, leaves dry early.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Mancozeb or Copper-based fungicides.'
    ],

    [
        'crop_name' => 'Fenugreek(Methi)',
        'name' => 'Damping Off',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus attacks seedlings in nursery due to excess moisture.',
        'symptoms' => 'Young plants fall over and die suddenly.',
        'protection' => 'Avoid overwatering and use clean seed.',
        'recommended_control' => 'Treat soil or seeds with Carbendazim.'
    ],
    [
        'crop_name' => 'Potato',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and spread quickly in cool weather.',
        'symptoms' => 'Leaves curl, turn yellow, and plants grow slowly.',
        'protection' => 'Remove weeds, avoid excess nitrogen, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Potato',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at the base during night.',
        'symptoms' => 'Young plants get cut at ground level and fall down suddenly.',
        'protection' => 'Clean field before sowing and remove crop residues.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Potato',
        'name' => 'Potato Tuber Moth',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Moth lays eggs on leaves or stored potatoes; larvae bore into tubers.',
        'symptoms' => 'Holes in potatoes, rotting inside, poor storage quality.',
        'protection' => 'Proper storage and cover seed potatoes with soil.',
        'recommended_control' => 'Use pheromone traps and apply recommended insecticides.'
    ],

    [
        'crop_name' => 'Potato',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects suck sap from leaves in warm conditions.',
        'symptoms' => 'Leaves turn yellow, sticky coating appears, plant weakens.',
        'protection' => 'Use yellow sticky traps and keep field clean.',
        'recommended_control' => 'Apply Acetamiprid or Imidacloprid.'
    ],

    [
        'crop_name' => 'Potato',
        'name' => 'Late Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads fast in cool and wet weather.',
        'symptoms' => 'Dark brown spots on leaves, leaves rot quickly, plant dies fast.',
        'protection' => 'Use resistant varieties and avoid overwatering.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Potato',
        'name' => 'Early Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in warm and humid conditions.',
        'symptoms' => 'Brown spots with rings on leaves, leaves dry early.',
        'protection' => 'Remove infected leaves and rotate crops.',
        'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
    ],

    [
        'crop_name' => 'Potato',
        'name' => 'Black Scurf',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus infects potato tubers.',
        'symptoms' => 'Black patches on potato skin, poor quality tubers.',
        'protection' => 'Use clean seed potatoes and well-drained soil.',
        'recommended_control' => 'Treat seed potatoes with fungicides before planting.'
    ],

    [
        'crop_name' => 'Potato',
        'name' => 'Common Scab',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria attack tubers in dry and alkaline soil.',
        'symptoms' => 'Rough, brown patches on potato skin.',
        'protection' => 'Maintain soil moisture and avoid high pH soil.',
        'recommended_control' => 'Use healthy seed and soil management practices.'
    ],

    [
        'crop_name' => 'Potato',
        'name' => 'Potato Virus Y (PVY)',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids feeding on infected plants.',
        'symptoms' => 'Leaves become curled, yellow, and plants stay weak.',
        'protection' => 'Control aphids and use virus-free seed potatoes.',
        'recommended_control' => 'No cure; remove infected plants and control vectors.'
    ],
    [
        'crop_name' => 'Spinach',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from tender leaves and stems, especially in cool weather.',
        'symptoms' => 'Leaves curl, become sticky, and plant growth becomes slow.',
        'protection' => 'Remove weeds, avoid excess nitrogen, and encourage natural enemies like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Spinach',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae enter inside leaves and make tunnels while feeding.',
        'symptoms' => 'White lines or paths inside leaves, leaves look damaged and weak.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Abamectin or Spinosad.'
    ],

    [
        'crop_name' => 'Spinach',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at ground level at night.',
        'symptoms' => 'Young plants suddenly fall or get cut near soil surface.',
        'protection' => 'Clean field before sowing and remove crop debris.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Spinach',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small white insects suck sap from leaves and spread quickly in warm weather.',
        'symptoms' => 'Leaves turn yellow, sticky coating appears, and plant weakens.',
        'protection' => 'Use sticky traps and maintain field cleanliness.',
        'recommended_control' => 'Apply Acetamiprid or Imidacloprid.'
    ],

    [
        'crop_name' => 'Spinach',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in cool and wet conditions.',
        'symptoms' => 'Yellow patches on upper leaf side and grey or white growth under leaves.',
        'protection' => 'Avoid overhead watering and ensure proper spacing.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Spinach',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in dry but humid weather on leaves.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and fall early.',
        'protection' => 'Avoid overcrowding and improve air flow.',
        'recommended_control' => 'Apply Sulfur or Propiconazole.'
    ],

    [
        'crop_name' => 'Spinach',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid conditions and infected plant debris.',
        'symptoms' => 'Small brown or black spots appear on leaves, leaves dry early.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Mancozeb or Copper-based fungicides.'
    ],

    [
        'crop_name' => 'Spinach',
        'name' => 'Damping Off',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus attacks seedlings in wet soil conditions.',
        'symptoms' => 'Young seedlings fall over and die suddenly.',
        'protection' => 'Avoid overwatering and use clean seed.',
        'recommended_control' => 'Treat soil or seeds with Carbendazim.'
    ],

    [
        'crop_name' => 'Spinach',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in waterlogged soil.',
        'symptoms' => 'Plants turn yellow, wilt, and slowly die.',
        'protection' => 'Improve drainage and avoid excess water.',
        'recommended_control' => 'Apply Carbendazim or soil fungicides.'
    ],
    [
        'crop_name' => 'Pea',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from tender shoots and leaves, especially in cool weather.',
        'symptoms' => 'Leaves curl, turn yellow, and plants grow slowly.',
        'protection' => 'Remove weeds, avoid excess nitrogen, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Pea',
        'name' => 'Pod Borer',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Caterpillars feed inside pea pods and damage seeds.',
        'symptoms' => 'Holes in pods, damaged seeds, and poor yield.',
        'protection' => 'Regular field monitoring and remove damaged pods.',
        'recommended_control' => 'Apply Emamectin Benzoate or Spinosad.'
    ],

    [
        'crop_name' => 'Pea',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at ground level.',
        'symptoms' => 'Seedlings suddenly fall or get cut near soil surface.',
        'protection' => 'Clean field before sowing and remove crop residues.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Pea',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Very small insects suck juice from leaves in dry weather.',
        'symptoms' => 'Leaves become curled, silvery, and dry at edges.',
        'protection' => 'Keep field clean and avoid water stress.',
        'recommended_control' => 'Apply Spinosad or Acetamiprid.'
    ],

    [
        'crop_name' => 'Pea',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in cool and dry weather.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and fall early.',
        'protection' => 'Avoid overcrowding and improve air circulation.',
        'recommended_control' => 'Apply Sulfur or Propiconazole.'
    ],

    [
        'crop_name' => 'Pea',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in cool and wet conditions.',
        'symptoms' => 'Yellow patches on leaves and grey mold under leaves.',
        'protection' => 'Avoid overwatering and ensure proper spacing.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Pea',
        'name' => 'Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through wind in humid weather.',
        'symptoms' => 'Orange or brown spots on leaves, leaves dry early.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Mancozeb or Triazole fungicides.'
    ],

    [
        'crop_name' => 'Pea',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in wet or poorly drained soil.',
        'symptoms' => 'Plants turn yellow, wilt, and slowly die.',
        'protection' => 'Improve drainage and avoid overwatering.',
        'recommended_control' => 'Apply Carbendazim or soil fungicides.'
    ],

    [
        'crop_name' => 'Pea',
        'name' => 'Ascochyta Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected seeds and wet weather.',
        'symptoms' => 'Dark spots on leaves, stems, and pods; plants dry early.',
        'protection' => 'Use clean seeds and remove infected plant debris.',
        'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
    ],
    [
        'crop_name' => 'Carrot',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and tender shoots, especially in cool weather.',
        'symptoms' => 'Leaves curl, turn yellow, and plant growth becomes slow.',
        'protection' => 'Remove weeds, avoid excess nitrogen, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Carrot',
        'name' => 'Carrot Rust Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Fly lays eggs in soil near roots; larvae feed on carrot roots.',
        'symptoms' => 'Carrots show brown tunnels, roots become damaged and rotten.',
        'protection' => 'Use crop rotation and cover soil around plants.',
        'recommended_control' => 'Apply Chlorpyrifos or soil insecticides as recommended.'
    ],

    [
        'crop_name' => 'Carrot',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at ground level.',
        'symptoms' => 'Seedlings suddenly fall or get cut near soil surface.',
        'protection' => 'Clean field before sowing and remove crop residues.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Carrot',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae feed inside leaves and create tunnels.',
        'symptoms' => 'White lines or trails appear inside leaves, leaves look weak.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Spinosad or Abamectin.'
    ],

    [
        'crop_name' => 'Carrot',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in dry and cool conditions.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and fall early.',
        'protection' => 'Avoid overcrowding and improve air circulation.',
        'recommended_control' => 'Apply Sulfur or Propiconazole.'
    ],

    [
        'crop_name' => 'Carrot',
        'name' => 'Leaf Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid and wet conditions.',
        'symptoms' => 'Brown or black spots on leaves, leaves dry early.',
        'protection' => 'Remove infected leaves and avoid overhead watering.',
        'recommended_control' => 'Apply Mancozeb or Copper-based fungicides.'
    ],

    [
        'crop_name' => 'Carrot',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in waterlogged soil.',
        'symptoms' => 'Roots become soft, dark, and rotten; plant wilts.',
        'protection' => 'Improve drainage and avoid overwatering.',
        'recommended_control' => 'Apply Carbendazim or soil fungicides.'
    ],

    [
        'crop_name' => 'Carrot',
        'name' => 'Soft Rot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through damaged roots in wet conditions.',
        'symptoms' => 'Carrots become soft, watery, and smell bad.',
        'protection' => 'Avoid injury to roots and store in dry conditions.',
        'recommended_control' => 'Remove infected plants and maintain hygiene.'
    ],

    [
        'crop_name' => 'Carrot',
        'name' => 'Alternaria Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through infected seeds and wet weather.',
        'symptoms' => 'Dark brown spots on leaves, leaves dry and fall early.',
        'protection' => 'Use clean seeds and remove infected plant debris.',
        'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
    ],
    [
        'crop_name' => 'Onion',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects suck sap from onion leaves, especially in hot and dry weather.',
        'symptoms' => 'Leaves look silvery, dry from tips, and plant growth becomes weak.',
        'protection' => 'Keep field moist, remove weeds, and avoid water stress.',
        'recommended_control' => 'Apply Imidacloprid or Spinosad as recommended.'
    ],

    [
        'crop_name' => 'Onion',
        'name' => 'Onion Maggot',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Flies lay eggs near onion roots; larvae damage roots and bulbs.',
        'symptoms' => 'Plants suddenly wilt, bulbs rot, and roots get damaged.',
        'protection' => 'Rotate crops and avoid planting onions in the same field every year.',
        'recommended_control' => 'Use soil insecticides like Chlorpyrifos if needed.'
    ],

    [
        'crop_name' => 'Onion',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young onion plants at base.',
        'symptoms' => 'Seedlings fall or get cut near soil surface.',
        'protection' => 'Clean field before planting and remove crop debris.',
        'recommended_control' => 'Apply Lambda-cyhalothrin or Chlorpyrifos.'
    ],

    [
        'crop_name' => 'Onion',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae enter leaves and make tunnels inside.',
        'symptoms' => 'White lines or trails on leaves, leaves become weak and dry.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Abamectin or Spinosad.'
    ],

    [
        'crop_name' => 'Onion',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool and humid weather.',
        'symptoms' => 'Leaves become pale, yellow, and later dry out.',
        'protection' => 'Avoid overwatering and improve air circulation.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Onion',
        'name' => 'Purple Blotch',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in warm and wet conditions.',
        'symptoms' => 'Purple or brown spots on leaves, leaves dry early.',
        'protection' => 'Remove infected leaves and avoid overhead watering.',
        'recommended_control' => 'Apply Chlorothalonil or Mancozeb.'
    ],

    [
        'crop_name' => 'Onion',
        'name' => 'White Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots and bulbs, survives in soil for many years.',
        'symptoms' => 'Roots rot, plant wilts, white fungus appears at base.',
        'protection' => 'Use crop rotation and avoid infected soil.',
        'recommended_control' => 'No strong cure; remove infected plants and treat soil.'
    ],

    [
        'crop_name' => 'Onion',
        'name' => 'Basal Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus infects base of onion bulb in warm soil.',
        'symptoms' => 'Bulb base becomes soft, rots, and plant dries.',
        'protection' => 'Avoid waterlogging and use healthy seed bulbs.',
        'recommended_control' => 'Apply Carbendazim or Trichoderma treatment.'
    ],
    [
        'crop_name' => 'CauliFlower',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and curds, especially in cool weather.',
        'symptoms' => 'Leaves curl, turn yellow, and plant becomes weak with slow growth.',
        'protection' => 'Remove weeds, keep field clean, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'CauliFlower',
        'name' => 'Diamondback Moth',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae feed on leaves by making small holes and damage growing plants.',
        'symptoms' => 'Small holes on leaves, skeleton-like leaves, and poor curd formation.',
        'protection' => 'Use netting, remove damaged leaves, and rotate crops.',
        'recommended_control' => 'Apply Emamectin Benzoate or Spinosad.'
    ],

    [
        'crop_name' => 'CauliFlower',
        'name' => 'Cabbage Caterpillar',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Caterpillars eat leaves and sometimes damage the curd.',
        'symptoms' => 'Large holes in leaves and uneven plant growth.',
        'protection' => 'Hand-pick larvae and keep field clean.',
        'recommended_control' => 'Apply Lambda-cyhalothrin or Chlorpyrifos.'
    ],

    [
        'crop_name' => 'CauliFlower',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at ground level.',
        'symptoms' => 'Seedlings suddenly fall or get cut near soil surface.',
        'protection' => 'Remove crop residues and clean field before planting.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'CauliFlower',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool, humid conditions and spreads on leaves.',
        'symptoms' => 'Yellow patches on leaves, leaves dry and fall early.',
        'protection' => 'Avoid overhead irrigation and improve air flow.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'CauliFlower',
        'name' => 'Black Rot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through leaf edges and spread in warm, wet weather.',
        'symptoms' => 'Yellow V-shaped patches on leaves, leaves dry and drop.',
        'protection' => 'Use clean seeds and remove infected plants.',
        'recommended_control' => 'Apply copper-based bactericides where recommended.'
    ],

    [
        'crop_name' => 'CauliFlower',
        'name' => 'Clubroot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus infects roots and grows in acidic soil.',
        'symptoms' => 'Roots become swollen, plants wilt even after watering.',
        'protection' => 'Use crop rotation and maintain proper soil pH.',
        'recommended_control' => 'Improve soil pH with lime and remove infected plants.'
    ],

    [
        'crop_name' => 'CauliFlower',
        'name' => 'Alternaria Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through infected seeds and wet conditions.',
        'symptoms' => 'Dark brown spots on leaves, leaves dry and fall early.',
        'protection' => 'Use clean seeds and remove infected plant parts.',
        'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
    ],
    [
        'crop_name' => 'Cabbage',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from cabbage leaves, especially in cool weather.',
        'symptoms' => 'Leaves curl, turn yellow, and plant growth becomes weak.',
        'protection' => 'Remove weeds, keep field clean, and encourage natural enemies like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Cabbage',
        'name' => 'Diamondback Moth',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae feed on cabbage leaves and make small holes.',
        'symptoms' => 'Small holes in leaves, leaves look skeleton-like, poor head formation.',
        'protection' => 'Use net covers, remove damaged leaves, and rotate crops.',
        'recommended_control' => 'Apply Emamectin Benzoate or Spinosad.'
    ],

    [
        'crop_name' => 'Cabbage',
        'name' => 'Cabbage Worm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Green caterpillars eat leaves and sometimes damage the cabbage head.',
        'symptoms' => 'Large holes in leaves and uneven plant growth.',
        'protection' => 'Hand-pick worms and keep field clean.',
        'recommended_control' => 'Apply Lambda-cyhalothrin or Chlorpyrifos.'
    ],

    [
        'crop_name' => 'Cabbage',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at the base.',
        'symptoms' => 'Seedlings suddenly fall or are cut near soil level.',
        'protection' => 'Remove crop residue and prepare field well before planting.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Cabbage',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool and humid conditions and spreads on leaves.',
        'symptoms' => 'Yellow patches on leaves, leaves dry and fall early.',
        'protection' => 'Avoid overhead irrigation and improve air flow.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Cabbage',
        'name' => 'Black Rot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through leaf edges and spread in warm, wet weather.',
        'symptoms' => 'Yellow V-shaped patches on leaves, leaves dry and drop early.',
        'protection' => 'Use clean seeds and remove infected plants.',
        'recommended_control' => 'Apply copper-based bactericides where recommended.'
    ],

    [
        'crop_name' => 'Cabbage',
        'name' => 'Clubroot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus infects roots, especially in acidic soil.',
        'symptoms' => 'Roots become swollen, plants wilt even after watering.',
        'protection' => 'Use crop rotation and maintain proper soil pH.',
        'recommended_control' => 'Improve soil pH with lime and remove infected plants.'
    ],

    [
        'crop_name' => 'Cabbage',
        'name' => 'Alternaria Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through infected seeds and wet weather.',
        'symptoms' => 'Dark brown spots on leaves, leaves dry and fall early.',
        'protection' => 'Use clean seeds and remove infected plant parts.',
        'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
    ],
    [
        'crop_name' => 'Radish',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves, especially in cool and dry weather.',
        'symptoms' => 'Leaves curl, turn yellow, and plant growth becomes weak.',
        'protection' => 'Remove weeds, keep field clean, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Radish',
        'name' => 'Flea Beetle',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small jumping beetles feed on young leaves and make tiny holes.',
        'symptoms' => 'Small holes in leaves, leaves look full of tiny dots, slow plant growth.',
        'protection' => 'Use net covers and keep field weed-free.',
        'recommended_control' => 'Apply Lambda-cyhalothrin or Spinosad.'
    ],

    [
        'crop_name' => 'Radish',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at the base during night.',
        'symptoms' => 'Seedlings suddenly fall or get cut near soil surface.',
        'protection' => 'Clean field before sowing and remove crop residues.',
        'recommended_control' => 'Apply Chlorpyrifos or Cypermethrin.'
    ],

    [
        'crop_name' => 'Radish',
        'name' => 'Root Maggot',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Flies lay eggs near roots; larvae damage radish roots.',
        'symptoms' => 'Roots become damaged, tunnels appear, and plants wilt.',
        'protection' => 'Use crop rotation and avoid continuous radish growing.',
        'recommended_control' => 'Apply soil insecticides like Chlorpyrifos if needed.'
    ],

    [
        'crop_name' => 'Radish',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool and humid conditions.',
        'symptoms' => 'Yellow patches on leaves, leaves dry and fall early.',
        'protection' => 'Avoid overhead watering and improve air circulation.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Radish',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus forms white powder-like growth on leaves in dry weather.',
        'symptoms' => 'White powder on leaves, leaves become weak and dry.',
        'protection' => 'Avoid overcrowding and improve sunlight exposure.',
        'recommended_control' => 'Apply Sulfur or Propiconazole.'
    ],

    [
        'crop_name' => 'Radish',
        'name' => 'Black Rot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through leaf edges and spread in warm wet conditions.',
        'symptoms' => 'Yellow V-shaped patches on leaves, leaves dry and fall.',
        'protection' => 'Use clean seeds and remove infected plants.',
        'recommended_control' => 'Apply copper-based bactericides where recommended.'
    ],

    [
        'crop_name' => 'Radish',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in wet and poorly drained soil.',
        'symptoms' => 'Roots become soft, dark, and start rotting.',
        'protection' => 'Improve drainage and avoid overwatering.',
        'recommended_control' => 'Apply Carbendazim or soil fungicides.'
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