<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\PestManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pest4Seeder extends Seeder
{
   public function run(): void
    {
          $pestDetails = [
            [
        'crop_name' => 'Bean',
        'name' => 'Bean Aphid',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects multiply quickly on young shoots and feed by sucking plant sap.',
        'symptoms' => 'Leaves curl and become sticky, plant looks weak, and growth becomes slow.',
        'protection' => 'Keep field clean, avoid excess nitrogen fertilizer, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Dimethoate as per agricultural recommendations.'
    ],

    [
        'crop_name' => 'Bean',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Whiteflies suck plant juice and spread quickly in warm weather.',
        'symptoms' => 'Leaves turn yellow, sticky honeydew appears, and plant growth slows down.',
        'protection' => 'Use yellow sticky traps and remove heavily infected plants.',
        'recommended_control' => 'Apply Buprofezin or Acetamiprid.'
    ],

    [
        'crop_name' => 'Bean',
        'name' => 'Bean Stem Maggot',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae enter the stem of young plants and feed inside.',
        'symptoms' => 'Seedlings wilt suddenly, stems become weak, and plants may die.',
        'protection' => 'Use healthy seeds and destroy affected plants early.',
        'recommended_control' => 'Apply Chlorpyrifos or recommended systemic insecticides.'
    ],

    [
        'crop_name' => 'Bean',
        'name' => 'Pod Borer',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Caterpillars feed on leaves, flowers, and pods.',
        'symptoms' => 'Holes in pods, damaged seeds, and reduced harvest.',
        'protection' => 'Regular field monitoring and remove damaged pods.',
        'recommended_control' => 'Apply Emamectin Benzoate or Spinosad.'
    ],

    [
        'crop_name' => 'Bean',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live inside leaves and feed between leaf layers.',
        'symptoms' => 'White winding lines on leaves and leaves look dry.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Abamectin or Spinosad.'
    ],

    [
        'crop_name' => 'Bean',
        'name' => 'Bean Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in warm and humid conditions.',
        'symptoms' => 'Small brown spots on leaves that grow bigger and cause leaf drying.',
        'protection' => 'Use resistant varieties and avoid overcrowding of plants.',
        'recommended_control' => 'Apply Mancozeb or Tebuconazole.'
    ],

    [
        'crop_name' => 'Bean',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'White fungus grows on leaves in dry but warm conditions.',
        'symptoms' => 'White powder-like layer on leaves and weak plant growth.',
        'protection' => 'Improve air circulation and avoid excessive irrigation.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Bean',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected seeds and wet weather.',
        'symptoms' => 'Dark sunken spots on leaves, stems, and pods.',
        'protection' => 'Use clean seeds and remove infected plants.',
        'recommended_control' => 'Apply Carbendazim or Copper-based fungicides.'
    ],

    [
        'crop_name' => 'Bean',
        'name' => 'Bacterial Blight',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread through rain splash, water, and infected seeds.',
        'symptoms' => 'Brown leaf spots, leaf drying, and weak plants.',
        'protection' => 'Use disease-free seeds and avoid overhead irrigation.',
        'recommended_control' => 'Apply copper-based bactericides.'
    ],

    [
        'crop_name' => 'Bean',
        'name' => 'Bean Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by insects like aphids from infected plants.',
        'symptoms' => 'Yellow and green patches on leaves and stunted plant growth.',
        'protection' => 'Control insect pests and remove infected plants quickly.',
        'recommended_control' => 'No direct cure, manage vectors using insect control measures.'
    ],
    [
        'crop_name' => 'Lettuce',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects multiply quickly on soft leaves and suck plant sap.',
        'symptoms' => 'Leaves curl, become sticky, and plant growth becomes weak and slow.',
        'protection' => 'Keep field clean, avoid excess nitrogen, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Dimethoate as per agricultural guidelines.'
    ],

    [
        'crop_name' => 'Lettuce',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at the base during night.',
        'symptoms' => 'Seedlings get cut at ground level and plants suddenly fall.',
        'protection' => 'Remove weeds, clean field before planting, and use light traps.',
        'recommended_control' => 'Apply Chlorpyrifos or Cypermethrin.'
    ],

    [
        'crop_name' => 'Lettuce',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small white insects suck sap from leaves and spread quickly in warm weather.',
        'symptoms' => 'Leaves turn yellow, sticky coating appears, and plant weakens.',
        'protection' => 'Use yellow sticky traps and remove heavily infected plants.',
        'recommended_control' => 'Apply Buprofezin or Acetamiprid.'
    ],

    [
        'crop_name' => 'Lettuce',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live inside leaves and feed between leaf layers.',
        'symptoms' => 'White winding lines on leaves and leaves look dry and damaged.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Abamectin or Spinosad.'
    ],

    [
        'crop_name' => 'Lettuce',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool and humid conditions, especially on wet leaves.',
        'symptoms' => 'Yellow patches on leaves and white mold appears on lower side.',
        'protection' => 'Avoid overhead watering and improve air flow between plants.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Lettuce',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'White fungal growth appears on leaves in dry but warm conditions.',
        'symptoms' => 'White powder-like coating on leaves and slow plant growth.',
        'protection' => 'Ensure proper spacing and avoid overcrowding.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Lettuce',
        'name' => 'Botrytis (Gray Mold)',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in wet and humid conditions, especially on damaged leaves.',
        'symptoms' => 'Gray fuzzy mold on leaves and rotting of plant parts.',
        'protection' => 'Remove dead leaves and avoid excess moisture in field.',
        'recommended_control' => 'Apply Carbendazim or Iprodione.'
    ],

    [
        'crop_name' => 'Lettuce',
        'name' => 'Bacterial Soft Rot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through wounds and spread in warm, wet conditions.',
        'symptoms' => 'Leaves become soft, watery, and start rotting with bad smell.',
        'protection' => 'Avoid injury to plants and maintain proper drainage.',
        'recommended_control' => 'Remove infected plants and apply copper-based sprays.'
    ],

    [
        'crop_name' => 'Lettuce',
        'name' => 'Lettuce Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids from infected plants to healthy plants.',
        'symptoms' => 'Yellow patches on leaves, uneven growth, and small distorted heads.',
        'protection' => 'Control aphids and remove infected plants immediately.',
        'recommended_control' => 'No direct cure, manage insect vectors only.'
    ],
    [
        'crop_name' => 'Garlic',
        'name' => 'Onion Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects appear in warm and dry weather and feed by sucking sap from leaves.',
        'symptoms' => 'Leaves become silvery, dry from tips, and plant growth becomes weak.',
        'protection' => 'Keep field clean, use proper irrigation, and avoid overcrowding.',
        'recommended_control' => 'Apply Imidacloprid or Spinosad as per agricultural advice.'
    ],

    [
        'crop_name' => 'Garlic',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects multiply on leaves and suck plant sap quickly.',
        'symptoms' => 'Leaves curl, become sticky, and plant looks weak.',
        'protection' => 'Use natural predators and remove heavily infected plants.',
        'recommended_control' => 'Apply Dimethoate or Imidacloprid.'
    ],

    [
        'crop_name' => 'Garlic',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae stay in soil and cut young garlic plants at night.',
        'symptoms' => 'Young plants suddenly fall or get cut near the base.',
        'protection' => 'Keep field clean and remove weeds before planting.',
        'recommended_control' => 'Apply Chlorpyrifos or Cypermethrin.'
    ],

    [
        'crop_name' => 'Garlic',
        'name' => 'Stem and Bulb Nematode',
        'type' => 'Nematode Pest',
        'how_it_occurs' => 'Microscopic worms live in soil and enter bulbs and stems.',
        'symptoms' => 'Plants become weak, bulbs rot, and growth is stunted.',
        'protection' => 'Use clean seed bulbs and rotate crops regularly.',
        'recommended_control' => 'Use soil treatment with Carbofuran or recommended nematicides.'
    ],

    [
        'crop_name' => 'Garlic',
        'name' => 'White Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus survives in soil and attacks roots and bulbs in cool moist conditions.',
        'symptoms' => 'Leaves turn yellow, plants die early, and bulbs rot with white fluffy growth.',
        'protection' => 'Avoid infected soil and practice long crop rotation.',
        'recommended_control' => 'No strong cure; use soil fumigation and remove infected plants.'
    ],

    [
        'crop_name' => 'Garlic',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in cool and humid weather on leaves.',
        'symptoms' => 'Leaves show pale patches and later become yellow and dry.',
        'protection' => 'Improve air flow and avoid overwatering.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Garlic',
        'name' => 'Purple Blotch',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus develops in warm and humid conditions on leaves.',
        'symptoms' => 'Purple or brown spots appear on leaves and spread, causing drying.',
        'protection' => 'Remove infected leaves and avoid excess moisture.',
        'recommended_control' => 'Apply Azoxystrobin or Propiconazole.'
    ],

    [
        'crop_name' => 'Garlic',
        'name' => 'Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through air in cool and wet weather.',
        'symptoms' => 'Small orange or brown spots on leaves that spread quickly.',
        'protection' => 'Keep proper spacing and avoid wet leaves for long time.',
        'recommended_control' => 'Apply Mancozeb or Sulphur-based fungicides.'
    ],

    [
        'crop_name' => 'Garlic',
        'name' => 'Basal Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks the base of the plant and bulbs.',
        'symptoms' => 'Plants turn yellow, roots rot, and bulbs become soft.',
        'protection' => 'Use well-drained soil and healthy planting material.',
        'recommended_control' => 'Apply Carbendazim or Trichoderma treatment.'
    ],

    [
        'crop_name' => 'Garlic',
        'name' => 'Garlic Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids from infected plants to healthy plants.',
        'symptoms' => 'Yellow streaks on leaves, weak growth, and small bulbs.',
        'protection' => 'Control aphids and remove infected plants quickly.',
        'recommended_control' => 'No direct cure; manage insect vectors only.'
    ],
    [
        'crop_name' => 'Beetroot',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects appear on leaves and suck plant sap, especially in warm weather.',
        'symptoms' => 'Leaves curl, become sticky, and plant growth becomes slow and weak.',
        'protection' => 'Keep field clean, avoid excess nitrogen, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Dimethoate as per agricultural recommendations.'
    ],

    [
        'crop_name' => 'Beetroot',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live inside leaves and feed between leaf layers.',
        'symptoms' => 'White winding lines on leaves and leaves look dry and damaged.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Abamectin or Spinosad.'
    ],

    [
        'crop_name' => 'Beetroot',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae stay in soil and cut young beetroot plants at night.',
        'symptoms' => 'Young plants get cut at the base and suddenly fall.',
        'protection' => 'Keep field clean, remove weeds, and prepare soil properly before planting.',
        'recommended_control' => 'Apply Chlorpyrifos or Cypermethrin.'
    ],

    [
        'crop_name' => 'Beetroot',
        'name' => 'Root-Knot Nematode',
        'type' => 'Nematode Pest',
        'how_it_occurs' => 'Microscopic worms live in soil and attack beetroot roots.',
        'symptoms' => 'Roots develop small knots, plants become weak and grow slowly.',
        'protection' => 'Use crop rotation and healthy seedlings.',
        'recommended_control' => 'Use nematicides like Carbofuran or soil treatment methods.'
    ],

    [
        'crop_name' => 'Beetroot',
        'name' => 'Cercospora Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in warm and humid weather on leaves.',
        'symptoms' => 'Small round brown spots appear on leaves and leaves dry slowly.',
        'protection' => 'Remove infected leaves and avoid overhead watering.',
        'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
    ],

    [
        'crop_name' => 'Beetroot',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'White fungus grows on leaves in dry but warm conditions.',
        'symptoms' => 'White powder-like coating on leaves and weak plant growth.',
        'protection' => 'Keep proper spacing and improve air circulation.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Beetroot',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus develops in cool and humid conditions.',
        'symptoms' => 'Yellow patches on leaves and white growth on underside.',
        'protection' => 'Avoid excess moisture and improve drainage.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Beetroot',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in wet and poorly drained soil.',
        'symptoms' => 'Roots become soft and rotten, plants wilt and die slowly.',
        'protection' => 'Avoid waterlogging and use well-drained soil.',
        'recommended_control' => 'Apply Carbendazim or Trichoderma treatment.'
    ],

    [
        'crop_name' => 'Beetroot',
        'name' => 'Bacterial Leaf Spot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria spread through rain splash and infected seeds.',
        'symptoms' => 'Small dark spots on leaves that slowly grow and damage leaves.',
        'protection' => 'Use clean seeds and avoid overhead irrigation.',
        'recommended_control' => 'Apply copper-based bactericides.'
    ],

    [
        'crop_name' => 'Beetroot',
        'name' => 'Beet Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids from infected plants.',
        'symptoms' => 'Leaves show yellow patches and plant growth becomes weak and uneven.',
        'protection' => 'Control aphids and remove infected plants quickly.',
        'recommended_control' => 'No direct cure; control insect vectors only.'
    ],
    [
        'crop_name' => 'Turnip',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and tender shoots, especially in cool weather.',
        'symptoms' => 'Leaves become curled, sticky, and weak. Plant growth becomes slow and stunted.',
        'protection' => 'Keep field clean, remove weeds, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Use Imidacloprid or Neem-based sprays as recommended.'
    ],

    [
        'crop_name' => 'Turnip',
        'name' => 'Cabbage Root Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Flies lay eggs near roots; larvae feed on roots underground.',
        'symptoms' => 'Plants suddenly wilt, roots get damaged, and growth stops.',
        'protection' => 'Use crop rotation and cover soil around plant base.',
        'recommended_control' => 'Apply soil insecticides or use protective netting.'
    ],

    [
        'crop_name' => 'Turnip',
        'name' => 'Cutworms',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae cut young plants at the soil surface during night.',
        'symptoms' => 'Seedlings are cut down and plants die suddenly.',
        'protection' => 'Remove plant debris and keep field clean before sowing.',
        'recommended_control' => 'Use Carbaryl or Chlorpyrifos as per guidance.'
    ],

    [
        'crop_name' => 'Turnip',
        'name' => 'Flea Beetles',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small jumping beetles feed on leaves, especially in dry weather.',
        'symptoms' => 'Small holes in leaves, leaves look like shot holes.',
        'protection' => 'Keep soil moist and use row covers for protection.',
        'recommended_control' => 'Apply Neem oil or suitable insecticides.'
    ],

    [
        'crop_name' => 'Turnip',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool and humid conditions on leaves.',
        'symptoms' => 'Yellow patches on leaves and white mold on underside.',
        'protection' => 'Avoid overcrowding and improve air circulation.',
        'recommended_control' => 'Apply Mancozeb or Copper-based fungicides.'
    ],

    [
        'crop_name' => 'Turnip',
        'name' => 'Clubroot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus infects roots and causes swelling.',
        'symptoms' => 'Roots become swollen, plants wilt even after watering.',
        'protection' => 'Use crop rotation and maintain soil pH balance.',
        'recommended_control' => 'Use lime treatment and resistant varieties.'
    ],

    [
        'crop_name' => 'Turnip',
        'name' => 'Black Rot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread through infected seeds and water splash.',
        'symptoms' => 'Leaf edges turn yellow then black, veins look dark.',
        'protection' => 'Use clean seeds and avoid overhead irrigation.',
        'recommended_control' => 'Apply copper-based bactericides.'
    ],

    [
        'crop_name' => 'Turnip',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'White fungal growth develops on leaves in dry and warm conditions.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and weaken.',
        'protection' => 'Maintain good spacing and remove infected leaves.',
        'recommended_control' => 'Apply Sulfur or suitable fungicides.'
    ],

    [
        'crop_name' => 'Turnip',
        'name' => 'Alternaria Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in warm and wet conditions.',
        'symptoms' => 'Brown or black spots appear on leaves and grow bigger over time.',
        'protection' => 'Avoid water on leaves and remove infected debris.',
        'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
    ],
    [
        'crop_name' => 'Linseed',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves, shoots, and tender parts of the plant, especially in cool weather.',
        'symptoms' => 'Leaves become curled, sticky, and weak. Plant growth becomes slow and yield reduces.',
        'protection' => 'Keep field clean, remove weeds, and encourage natural enemies like ladybird beetles.',
        'recommended_control' => 'Use Imidacloprid or Neem-based sprays as recommended.'
    ],

    [
        'crop_name' => 'Linseed',
        'name' => 'Cutworms',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at ground level during night.',
        'symptoms' => 'Seedlings get cut at base and plants fall down suddenly.',
        'protection' => 'Remove weeds and plant debris before sowing and keep field clean.',
        'recommended_control' => 'Apply Chlorpyrifos or Carbaryl as per guidelines.'
    ],

    [
        'crop_name' => 'Linseed',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects suck sap from leaves and buds in dry and warm weather.',
        'symptoms' => 'Leaves become curled, silvery, and dry. Plant growth becomes weak.',
        'protection' => 'Maintain proper irrigation and avoid drought stress.',
        'recommended_control' => 'Use Spinosad or Imidacloprid sprays.'
    ],

    [
        'crop_name' => 'Linseed',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small white insects suck plant sap and spread in warm conditions.',
        'symptoms' => 'Leaves turn yellow, sticky honeydew appears, and plant weakens.',
        'protection' => 'Control weeds and avoid overcrowding of crops.',
        'recommended_control' => 'Apply Neem oil or suitable insecticides.'
    ],

    [
        'crop_name' => 'Linseed',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in dry weather with cool nights.',
        'symptoms' => 'White powder-like layer appears on leaves, plants become weak.',
        'protection' => 'Avoid overcrowding and ensure proper air flow in field.',
        'recommended_control' => 'Apply Sulfur or suitable fungicides like Hexaconazole.'
    ],

    [
        'crop_name' => 'Linseed',
        'name' => 'Rust Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid conditions and infects leaves and stems.',
        'symptoms' => 'Orange or brown spots appear on leaves, plants dry early.',
        'protection' => 'Use resistant varieties and remove infected plants.',
        'recommended_control' => 'Apply Mancozeb or Propiconazole.'
    ],

    [
        'crop_name' => 'Linseed',
        'name' => 'Wilt Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus attacks roots and blocks water movement in plant.',
        'symptoms' => 'Plants suddenly wilt, turn yellow, and dry completely.',
        'protection' => 'Use clean soil, crop rotation, and disease-free seeds.',
        'recommended_control' => 'Use Carbendazim soil treatment or recommended fungicides.'
    ],

    [
        'crop_name' => 'Linseed',
        'name' => 'Alternaria Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in warm and wet weather conditions.',
        'symptoms' => 'Dark brown spots appear on leaves and stems, leaves dry and fall.',
        'protection' => 'Avoid waterlogging and remove infected plant parts.',
        'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
    ],
    [
        'crop_name' => 'Coriander',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from tender leaves and stems, especially in cool and dry weather.',
        'symptoms' => 'Leaves become curled, sticky, and weak. Plant growth becomes slow and weak.',
        'protection' => 'Keep field clean, remove weeds, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Use Imidacloprid or Neem oil spray as recommended.'
    ],

    [
        'crop_name' => 'Coriander',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects feed on leaves by sucking plant juices in hot and dry weather.',
        'symptoms' => 'Leaves become curled, dry, and turn silvery or dull green.',
        'protection' => 'Maintain proper irrigation and avoid plant stress.',
        'recommended_control' => 'Apply Spinosad or suitable insecticides.'
    ],

    [
        'crop_name' => 'Coriander',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small white insects suck sap and spread quickly in warm conditions.',
        'symptoms' => 'Leaves turn yellow, sticky substance appears, plant weakens.',
        'protection' => 'Control weeds and avoid overcrowding of plants.',
        'recommended_control' => 'Use Neem oil or Imidacloprid spray.'
    ],

    [
        'crop_name' => 'Coriander',
        'name' => 'Cutworms',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young seedlings at night.',
        'symptoms' => 'Seedlings are cut at base and plants suddenly fall.',
        'protection' => 'Keep field clean and remove plant debris before sowing.',
        'recommended_control' => 'Apply Chlorpyrifos or Carbaryl as recommended.'
    ],

    [
        'crop_name' => 'Coriander',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus develops on leaves in dry weather with cool nights.',
        'symptoms' => 'White powder-like layer appears on leaves, leaves dry and weaken.',
        'protection' => 'Ensure proper spacing and good air circulation.',
        'recommended_control' => 'Apply Sulfur or Hexaconazole fungicide.'
    ],

    [
        'crop_name' => 'Coriander',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in warm and humid conditions through water splash.',
        'symptoms' => 'Small brown or black spots appear on leaves, leaves may dry.',
        'protection' => 'Avoid overhead irrigation and remove infected leaves.',
        'recommended_control' => 'Apply Mancozeb or Copper-based fungicides.'
    ],

    [
        'crop_name' => 'Coriander',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool, wet, and humid conditions.',
        'symptoms' => 'Yellow patches on upper leaf side and gray mold on lower side.',
        'protection' => 'Improve drainage and avoid overcrowding.',
        'recommended_control' => 'Use Metalaxyl or Copper fungicides.'
    ],

    [
        'crop_name' => 'Coriander',
        'name' => 'Stem Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus attacks stem base in wet soil conditions.',
        'symptoms' => 'Stem becomes soft, plant wilts and dies slowly.',
        'protection' => 'Avoid waterlogging and use clean seeds.',
        'recommended_control' => 'Apply Carbendazim or Trichoderma treatment.'
    ],
    [
        'crop_name' => 'SunFlower',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves, stems, and flower buds, especially in warm and dry weather.',
        'symptoms' => 'Leaves become curled, sticky, and weak. Plant growth slows and flowers become small.',
        'protection' => 'Keep field clean, remove weeds, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Use Imidacloprid or Neem oil spray as recommended.'
    ],

    [
        'crop_name' => 'SunFlower',
        'name' => 'Cutworms',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young sunflower plants at ground level during night.',
        'symptoms' => 'Young plants are cut at the base and suddenly fall.',
        'protection' => 'Remove weeds and crop residues before sowing.',
        'recommended_control' => 'Apply Chlorpyrifos or Carbaryl as per guidance.'
    ],

    [
        'crop_name' => 'SunFlower',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small white insects suck sap from leaves and spread quickly in warm conditions.',
        'symptoms' => 'Leaves turn yellow, sticky honeydew appears, and plant weakens.',
        'protection' => 'Control weeds and avoid overcrowding.',
        'recommended_control' => 'Use Neem oil or Imidacloprid spray.'
    ],

    [
        'crop_name' => 'SunFlower',
        'name' => 'Helicoverpa (Bud Borer)',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae feed on flower buds and developing seeds.',
        'symptoms' => 'Holes in flower heads, damaged seeds, and poor yield.',
        'protection' => 'Monitor fields regularly and remove infected heads.',
        'recommended_control' => 'Apply Emamectin Benzoate or suitable insecticides.'
    ],

    [
        'crop_name' => 'SunFlower',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in dry weather with cool nights.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and weaken.',
        'protection' => 'Maintain proper spacing and good air circulation.',
        'recommended_control' => 'Apply Sulfur or Hexaconazole fungicide.'
    ],

    [
        'crop_name' => 'SunFlower',
        'name' => 'Rust Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid conditions and infects leaves.',
        'symptoms' => 'Brown or orange spots on leaves, leaves dry early.',
        'protection' => 'Use resistant varieties and remove infected leaves.',
        'recommended_control' => 'Apply Mancozeb or Propiconazole.'
    ],

    [
        'crop_name' => 'SunFlower',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus develops in cool, wet, and humid weather.',
        'symptoms' => 'Yellow patches on upper leaf side and white/gray mold on lower side.',
        'protection' => 'Improve drainage and avoid waterlogging.',
        'recommended_control' => 'Apply Metalaxyl or Copper-based fungicides.'
    ],

    [
        'crop_name' => 'SunFlower',
        'name' => 'Head Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus attacks flower heads in wet and humid conditions.',
        'symptoms' => 'Flower heads rot, seeds become soft and useless.',
        'protection' => 'Avoid excess moisture and ensure proper spacing.',
        'recommended_control' => 'Apply Carbendazim or recommended fungicides.'
    ],
    [
        'crop_name' => 'Isabgol',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from tender leaves and stems, especially in cool weather.',
        'symptoms' => 'Leaves become curled, weak growth, sticky honey-like substance on plants.',
        'protection' => 'Keep field clean, avoid excess nitrogen, encourage natural predators like ladybirds.',
        'recommended_control' => 'Spray Imidacloprid or Dimethoate as per agricultural advice.'
    ],

    [
        'crop_name' => 'Isabgol',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae stay in soil and cut young seedlings at night.',
        'symptoms' => 'Young plants are cut near soil level and suddenly fall.',
        'protection' => 'Deep ploughing and remove crop debris before sowing.',
        'recommended_control' => 'Apply Chlorpyrifos or use bait traps.'
    ],

    [
        'crop_name' => 'Isabgol',
        'name' => 'White Grub',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Grubs live in soil and feed on roots of plants.',
        'symptoms' => 'Plants turn yellow, weak growth, plants easily pull out from soil.',
        'protection' => 'Deep ploughing and use well-rotted manure.',
        'recommended_control' => 'Apply Carbofuran or recommended soil insecticides.'
    ],

    [
        'crop_name' => 'Isabgol',
        'name' => 'Fusarium Wilt',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus enters through roots and blocks water supply in plants.',
        'symptoms' => 'Plants suddenly wilt, leaves turn yellow and dry.',
        'protection' => 'Use disease-free seeds and rotate crops.',
        'recommended_control' => 'Treat soil with Carbendazim or Trichoderma.'
    ],

    [
        'crop_name' => 'Isabgol',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Develops in cool and humid weather conditions.',
        'symptoms' => 'Yellow patches on leaves and white fungal growth under leaves.',
        'protection' => 'Avoid overcrowding and improve air circulation.',
        'recommended_control' => 'Spray Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Isabgol',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in dry weather with high humidity at night.',
        'symptoms' => 'White powder-like coating on leaves and stems.',
        'protection' => 'Remove infected leaves and avoid dense planting.',
        'recommended_control' => 'Spray Sulphur-based fungicides.'
    ],

    [
        'crop_name' => 'Isabgol',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through infected plant debris and rain splash.',
        'symptoms' => 'Small brown or black spots on leaves, leaves dry early.',
        'protection' => 'Clean field and remove infected plants.',
        'recommended_control' => 'Apply Mancozeb or Copper oxychloride.'
    ],

    [
        'crop_name' => 'Isabgol',
        'name' => 'Rust Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread by spores in windy and humid conditions.',
        'symptoms' => 'Orange or brown powdery spots on leaves.',
        'protection' => 'Avoid overcrowding and use healthy seeds.',
        'recommended_control' => 'Spray Propiconazole or Hexaconazole.'
    ],

    [
        'crop_name' => 'Isabgol',
        'name' => 'Damping Off',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Affects seedlings in wet and poorly drained soil.',
        'symptoms' => 'Seedlings rot at soil level and die quickly.',
        'protection' => 'Use well-drained soil and avoid overwatering.',
        'recommended_control' => 'Treat seeds with Captan or Thiram.'
    ],

    [
        'crop_name' => 'Isabgol',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus attacks plant roots in wet soil.',
        'symptoms' => 'Plants become weak, yellow, and stop growing.',
        'protection' => 'Avoid waterlogging and rotate crops.',
        'recommended_control' => 'Apply Carbendazim or Trichoderma in soil.'
    ],
    [
        'crop_name' => 'Broccoli',
        'name' => 'Cabbage Aphid',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves, especially in cool weather.',
        'symptoms' => 'Leaves become curled, sticky, and plant growth becomes weak and slow.',
        'protection' => 'Keep field clean, avoid too much nitrogen fertilizer, and encourage natural predators.',
        'recommended_control' => 'Spray Imidacloprid or Dimethoate as per recommendation.'
    ],

    [
        'crop_name' => 'Broccoli',
        'name' => 'Diamondback Moth',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae feed on leaves by making small holes and damage the plant.',
        'symptoms' => 'Small holes in leaves, skeleton-like leaves, and slow plant growth.',
        'protection' => 'Use pheromone traps and remove heavily infected leaves.',
        'recommended_control' => 'Apply Emamectin Benzoate or Spinosad.'
    ],

    [
        'crop_name' => 'Broccoli',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at night.',
        'symptoms' => 'Seedlings suddenly cut near soil and fall down.',
        'protection' => 'Deep ploughing before planting and remove weeds.',
        'recommended_control' => 'Use Chlorpyrifos or bait traps.'
    ],

    [
        'crop_name' => 'Broccoli',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in cool, wet, and humid weather.',
        'symptoms' => 'Yellow patches on leaves and white or gray growth under leaves.',
        'protection' => 'Avoid overhead watering and keep good air flow between plants.',
        'recommended_control' => 'Spray Mancozeb or Metalaxyl.'
    ],

    [
        'crop_name' => 'Broccoli',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in dry weather with high humidity at night.',
        'symptoms' => 'White powder-like layer on leaves.',
        'protection' => 'Remove infected leaves and avoid overcrowding.',
        'recommended_control' => 'Spray Sulphur-based fungicides.'
    ],

    [
        'crop_name' => 'Broccoli',
        'name' => 'Black Rot',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread through infected seeds, water, and tools.',
        'symptoms' => 'Yellow V-shaped patches on leaves and leaves dry from edges.',
        'protection' => 'Use clean seeds and avoid water splashes on leaves.',
        'recommended_control' => 'Apply copper-based bactericides.'
    ],

    [
        'crop_name' => 'Broccoli',
        'name' => 'Clubroot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus attacks roots and blocks nutrient uptake.',
        'symptoms' => 'Plants become weak, yellow, and roots become swollen and deformed.',
        'protection' => 'Use crop rotation and maintain soil pH properly.',
        'recommended_control' => 'Apply lime to soil and use resistant varieties.'
    ],

    [
        'crop_name' => 'Broccoli',
        'name' => 'Alternaria Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through infected plant debris and humid weather.',
        'symptoms' => 'Small dark brown spots on leaves that grow bigger over time.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Spray Mancozeb or Chlorothalonil.'
    ],

    [
        'crop_name' => 'Broccoli',
        'name' => 'Damping Off',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Affects seedlings in wet and poorly drained soil.',
        'symptoms' => 'Seedlings rot at soil level and collapse suddenly.',
        'protection' => 'Use well-drained soil and avoid overwatering.',
        'recommended_control' => 'Treat seeds with Captan or Thiram.'
    ],

    [
        'crop_name' => 'Broccoli',
        'name' => 'White Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in cool and humid conditions.',
        'symptoms' => 'White raised spots on leaves and stem.',
        'protection' => 'Avoid overcrowding and remove infected plants.',
        'recommended_control' => 'Spray Metalaxyl or Mancozeb.'
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
