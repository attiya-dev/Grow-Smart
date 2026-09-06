<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\PestManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pest5Seeder extends Seeder
{
    
    public function run(): void
    {
          $pestDetails = [
            [
        'crop_name' => 'Orange',
        'name' => 'Citrus Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small larvae enter young leaves and make tunnels inside them.',
        'symptoms' => 'Leaves become curled, twisted, and look damaged with white lines.',
        'protection' => 'Remove new heavily infected shoots and avoid excessive new soft growth.',
        'recommended_control' => 'Spray Imidacloprid or Spinosad as recommended.'
    ],

    [
        'crop_name' => 'Orange',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from young leaves and shoots.',
        'symptoms' => 'Leaves curl, sticky honeydew appears, and plant growth becomes weak.',
        'protection' => 'Encourage ladybirds and avoid too much nitrogen fertilizer.',
        'recommended_control' => 'Apply Dimethoate or Imidacloprid.'
    ],

    [
        'crop_name' => 'Orange',
        'name' => 'Citrus Psylla',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Insects feed on young shoots and spread quickly in warm weather.',
        'symptoms' => 'Leaves become small, curled, and shoots look dry and weak.',
        'protection' => 'Prune affected shoots and keep orchard clean.',
        'recommended_control' => 'Spray Acetamiprid or Imidacloprid.'
    ],

    [
        'crop_name' => 'Orange',
        'name' => 'Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Female flies lay eggs inside ripe fruits.',
        'symptoms' => 'Fruits rot from inside, fall early, and show small holes.',
        'protection' => 'Collect and destroy fallen fruits and use traps.',
        'recommended_control' => 'Use protein bait sprays or Malathion traps.'
    ],

    [
        'crop_name' => 'Orange',
        'name' => 'Citrus Canker',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria spread through rain, wind, and infected tools.',
        'symptoms' => 'Brown spots on leaves and fruits with raised rough edges.',
        'protection' => 'Remove infected branches and avoid water splashes.',
        'recommended_control' => 'Spray copper-based bactericides.'
    ],

    [
        'crop_name' => 'Orange',
        'name' => 'Gummosis',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus infects trunk through wounds and poor drainage soil.',
        'symptoms' => 'Sticky gum comes out from trunk and bark starts rotting.',
        'protection' => 'Avoid trunk injuries and improve drainage.',
        'recommended_control' => 'Apply Copper oxychloride or Bordeaux paste.'
    ],

    [
        'crop_name' => 'Orange',
        'name' => 'Citrus Scab',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in wet and humid conditions.',
        'symptoms' => 'Rough, brown raised spots on fruits and leaves.',
        'protection' => 'Prune trees for air circulation and avoid overhead watering.',
        'recommended_control' => 'Spray Mancozeb or Copper oxychloride.'
    ],

    [
        'crop_name' => 'Orange',
        'name' => 'Black Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through rain splash and infected leaves.',
        'symptoms' => 'Black spots on fruits and leaves, fruits may drop early.',
        'protection' => 'Keep orchard clean and remove fallen leaves.',
        'recommended_control' => 'Spray Propiconazole or Mancozeb.'
    ],

    [
        'crop_name' => 'Orange',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in waterlogged soil.',
        'symptoms' => 'Leaves turn yellow, plant becomes weak and slowly dies.',
        'protection' => 'Avoid overwatering and improve soil drainage.',
        'recommended_control' => 'Apply Trichoderma or Carbendazim in soil.'
    ],

    [
        'crop_name' => 'Orange',
        'name' => 'Greening Disease (HLB)',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread by psylla insects feeding on infected plants.',
        'symptoms' => 'Leaves turn yellow in patches and fruits become small and bitter.',
        'protection' => 'Control psylla insects and remove infected trees.',
        'recommended_control' => 'No cure; manage vectors using Imidacloprid.'
    ],
    [
        'crop_name' => 'Kinnow',
        'name' => 'Citrus Psylla',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult insects lay eggs on new leaves. Nymphs suck sap from young shoots.',
        'symptoms' => 'Leaves become curled and weak, new shoots dry, plant growth slows down.',
        'protection' => 'Keep orchard clean, prune infected shoots, and monitor new growth regularly.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as per agricultural guidelines.'
    ],

    [
        'crop_name' => 'Kinnow',
        'name' => 'Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult flies lay eggs inside ripening fruits. Larvae feed inside the fruit.',
        'symptoms' => 'Fruits become soft, rot from inside, and fall early.',
        'protection' => 'Collect and destroy fallen fruits and use pheromone traps.',
        'recommended_control' => 'Use protein bait traps or recommended insecticides like Spinosad.'
    ],

    [
        'crop_name' => 'Kinnow',
        'name' => 'Citrus Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae tunnel inside young leaves and feed on leaf tissue.',
        'symptoms' => 'Leaves become curled, shiny trails appear on leaves, growth is weak.',
        'protection' => 'Avoid excessive new growth and prune infected leaves.',
        'recommended_control' => 'Apply Imidacloprid or neem-based sprays.'
    ],

    [
        'crop_name' => 'Kinnow',
        'name' => 'Scale Insects',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects attach to stems and leaves and suck plant sap.',
        'symptoms' => 'Leaves turn yellow, sticky honeydew appears, plant becomes weak.',
        'protection' => 'Remove heavily infected branches and maintain orchard hygiene.',
        'recommended_control' => 'Apply horticultural oil or recommended systemic insecticides.'
    ],

    [
        'crop_name' => 'Kinnow',
        'name' => 'Citrus Canker',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread through wind, rain, and infected plant material.',
        'symptoms' => 'Brown raised spots on leaves and fruits, leaves fall early.',
        'protection' => 'Use disease-free plants and prune infected branches.',
        'recommended_control' => 'Apply copper-based sprays regularly.'
    ],

    [
        'crop_name' => 'Kinnow',
        'name' => 'Citrus Greening (HLB)',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread by citrus psylla insects.',
        'symptoms' => 'Yellow patches on leaves, small bitter fruits, poor yield.',
        'protection' => 'Control psylla insects and remove infected trees.',
        'recommended_control' => 'No complete cure; manage vector with insecticides.'
    ],

    [
        'crop_name' => 'Kinnow',
        'name' => 'Root Rot (Phytophthora)',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus develops in wet soil and attacks roots.',
        'symptoms' => 'Tree wilts, leaves turn yellow, plant slowly dries.',
        'protection' => 'Avoid waterlogging and improve soil drainage.',
        'recommended_control' => 'Apply metalaxyl-based fungicides.'
    ],

    [
        'crop_name' => 'Kinnow',
        'name' => 'Citrus Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool and humid weather on young leaves and flowers.',
        'symptoms' => 'White powder-like coating on leaves, leaves curl and drop.',
        'protection' => 'Prune crowded branches and ensure good air flow.',
        'recommended_control' => 'Apply sulfur or hexaconazole-based fungicides.'
    ],
    [
        'crop_name' => 'Lemon',
        'name' => 'Citrus Psylla',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult insects lay eggs on young shoots and leaves. Nymphs suck sap from new growth.',
        'symptoms' => 'New leaves curl and become weak, shoots dry out, plant growth becomes slow.',
        'protection' => 'Regular pruning of infected shoots, keep orchard clean, and monitor new growth.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as per agricultural guidelines.'
    ],

    [
        'crop_name' => 'Lemon',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae enter young leaves and make tunnels inside the leaf tissue.',
        'symptoms' => 'Leaves become curled and distorted, white or silvery lines appear on leaves.',
        'protection' => 'Avoid excessive fresh flush growth and remove infected leaves.',
        'recommended_control' => 'Use neem oil or Imidacloprid spray.'
    ],

    [
        'crop_name' => 'Lemon',
        'name' => 'Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Female flies lay eggs inside ripening fruits. Larvae feed inside the fruit.',
        'symptoms' => 'Fruits rot from inside, become soft, and fall early.',
        'protection' => 'Collect fallen fruits and destroy them, use pheromone traps.',
        'recommended_control' => 'Use bait traps or Spinosad-based sprays.'
    ],

    [
        'crop_name' => 'Lemon',
        'name' => 'Scale Insects',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects attach to stems and leaves and suck plant sap.',
        'symptoms' => 'Leaves turn yellow, sticky honeydew appears, plant becomes weak.',
        'protection' => 'Prune heavily infected branches and maintain orchard hygiene.',
        'recommended_control' => 'Apply horticultural oil or recommended systemic insecticides.'
    ],

    [
        'crop_name' => 'Lemon',
        'name' => 'Citrus Canker',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria spread through wind, rain, insects, and infected plant material.',
        'symptoms' => 'Brown raised spots on leaves and fruits, leaves fall early.',
        'protection' => 'Use healthy planting material and prune infected branches.',
        'recommended_control' => 'Apply copper-based sprays regularly.'
    ],

    [
        'crop_name' => 'Lemon',
        'name' => 'Root Rot (Phytophthora)',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus develops in wet soil and attacks roots.',
        'symptoms' => 'Tree becomes weak, leaves turn yellow, plant slowly dries.',
        'protection' => 'Avoid waterlogging and improve soil drainage.',
        'recommended_control' => 'Apply metalaxyl-based fungicides.'
    ],

    [
        'crop_name' => 'Lemon',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in cool and humid conditions.',
        'symptoms' => 'White powder-like coating on leaves, leaves curl and fall.',
        'protection' => 'Ensure good air circulation and prune dense branches.',
        'recommended_control' => 'Apply sulfur or hexaconazole fungicide.'
    ],
    [
        'crop_name' => 'GrapeFruit',
        'name' => 'Citrus Psylla',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult insects lay eggs on young leaves and shoots. Nymphs suck sap from tender growth.',
        'symptoms' => 'New leaves become curled, weak shoots, slow plant growth.',
        'protection' => 'Prune infected shoots, keep orchard clean, and regularly monitor new growth.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as per agricultural recommendations.'
    ],

    [
        'crop_name' => 'GrapeFruit',
        'name' => 'Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Female flies lay eggs inside ripening fruits. Larvae feed inside the fruit.',
        'symptoms' => 'Fruits rot from inside, become soft, and fall early.',
        'protection' => 'Collect and destroy fallen fruits and use pheromone traps.',
        'recommended_control' => 'Use bait traps or Spinosad-based sprays.'
    ],

    [
        'crop_name' => 'GrapeFruit',
        'name' => 'Citrus Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae tunnel inside young leaves and feed on leaf tissue.',
        'symptoms' => 'Leaves become curled, twisted, and have silvery lines.',
        'protection' => 'Avoid excessive new flush growth and remove infected leaves.',
        'recommended_control' => 'Apply neem oil or Imidacloprid spray.'
    ],

    [
        'crop_name' => 'GrapeFruit',
        'name' => 'Scale Insects',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects attach to stems and leaves and suck plant sap.',
        'symptoms' => 'Leaves turn yellow, sticky honeydew appears, plant becomes weak.',
        'protection' => 'Prune heavily infected branches and keep orchard clean.',
        'recommended_control' => 'Apply horticultural oil or systemic insecticides.'
    ],

    [
        'crop_name' => 'GrapeFruit',
        'name' => 'Citrus Canker',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria spread through wind, rain, insects, and infected plant material.',
        'symptoms' => 'Brown raised spots on leaves and fruits, leaves fall early.',
        'protection' => 'Use disease-free plants and remove infected branches.',
        'recommended_control' => 'Apply copper-based sprays regularly.'
    ],

    [
        'crop_name' => 'GrapeFruit',
        'name' => 'Citrus Greening (HLB)',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread by citrus psylla insects feeding on infected trees.',
        'symptoms' => 'Yellow patches on leaves, small bitter fruits, low yield.',
        'protection' => 'Control psylla insects and remove infected trees early.',
        'recommended_control' => 'No cure; manage vector using recommended insecticides.'
    ],

    [
        'crop_name' => 'GrapeFruit',
        'name' => 'Root Rot (Phytophthora)',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in wet soil and attacks roots.',
        'symptoms' => 'Tree becomes weak, leaves turn yellow, plant slowly dries.',
        'protection' => 'Avoid waterlogging and improve soil drainage.',
        'recommended_control' => 'Apply metalaxyl-based fungicides.'
    ],

    [
        'crop_name' => 'GrapeFruit',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in cool and humid weather.',
        'symptoms' => 'White powder-like layer on leaves, leaves curl and drop.',
        'protection' => 'Ensure good air flow and prune dense branches.',
        'recommended_control' => 'Apply sulfur or hexaconazole fungicide.'
    ],
    [
        'crop_name' => 'Sweet Lime',
        'name' => 'Citrus Psylla',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult insects lay eggs on young leaves and shoots. Nymphs suck sap from tender new growth.',
        'symptoms' => 'New leaves curl and become weak, shoots dry, plant growth becomes slow.',
        'protection' => 'Prune infected shoots, keep orchard clean, and regularly check new growth.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as per agricultural guidelines.'
    ],

    [
        'crop_name' => 'Sweet Lime',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae enter young leaves and feed inside, making tunnels.',
        'symptoms' => 'Leaves become curled, twisted, and show white silvery lines.',
        'protection' => 'Avoid excessive new flush and remove infected leaves.',
        'recommended_control' => 'Apply neem oil or Imidacloprid spray.'
    ],

    [
        'crop_name' => 'Sweet Lime',
        'name' => 'Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult flies lay eggs inside ripening fruits. Larvae feed inside fruit pulp.',
        'symptoms' => 'Fruits rot from inside, become soft, and fall early.',
        'protection' => 'Collect and destroy fallen fruits and use pheromone traps.',
        'recommended_control' => 'Use bait traps or Spinosad-based sprays.'
    ],

    [
        'crop_name' => 'Sweet Lime',
        'name' => 'Scale Insects',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects attach to stems and leaves and suck plant sap.',
        'symptoms' => 'Leaves turn yellow, sticky honeydew appears, plant becomes weak.',
        'protection' => 'Prune heavily infected branches and maintain orchard cleanliness.',
        'recommended_control' => 'Apply horticultural oil or systemic insecticides.'
    ],

    [
        'crop_name' => 'Sweet Lime',
        'name' => 'Citrus Canker',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria spread through wind, rain, insects, and infected plant material.',
        'symptoms' => 'Brown raised spots on leaves and fruits, leaves fall early.',
        'protection' => 'Use healthy plants and remove infected branches immediately.',
        'recommended_control' => 'Apply copper-based sprays regularly.'
    ],

    [
        'crop_name' => 'Sweet Lime',
        'name' => 'Citrus Greening (HLB)',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread by citrus psylla insects feeding on infected plants.',
        'symptoms' => 'Yellow patches on leaves, small bitter fruits, low yield.',
        'protection' => 'Control psylla insects and remove infected trees early.',
        'recommended_control' => 'No cure; manage insect vector using recommended sprays.'
    ],

    [
        'crop_name' => 'Sweet Lime',
        'name' => 'Root Rot (Phytophthora)',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in wet soil and attacks roots.',
        'symptoms' => 'Tree becomes weak, leaves turn yellow, plant slowly dries.',
        'protection' => 'Avoid waterlogging and improve soil drainage.',
        'recommended_control' => 'Apply metalaxyl-based fungicides.'
    ],

    [
        'crop_name' => 'Sweet Lime',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in cool and humid weather.',
        'symptoms' => 'White powder-like coating on leaves, leaves curl and fall.',
        'protection' => 'Ensure good air circulation and prune dense branches.',
        'recommended_control' => 'Apply sulfur or hexaconazole fungicide.'
    ],
    [
        'crop_name' => 'Pomegranate',
        'name' => 'Pomegranate Fruit Borer',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult moth lays eggs on flowers or young fruits. After hatching, larvae enter the fruit and feed inside.',
        'symptoms' => 'Small holes on fruit, fruit rotting from inside, premature fruit drop.',
        'protection' => 'Remove damaged fruits, use pheromone traps, and keep orchard clean.',
        'recommended_control' => 'Apply Spinosad or Emamectin Benzoate as recommended.'
    ],

    [
        'crop_name' => 'Pomegranate',
        'name' => 'Mealybug',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves, stems, and fruits and spread quickly in dry weather.',
        'symptoms' => 'White cotton-like insects on plant, sticky leaves, weak plant growth, fruit drop.',
        'protection' => 'Keep orchard clean, control ants, and remove infected branches.',
        'recommended_control' => 'Apply Imidacloprid or Chlorpyrifos.'
    ],

    [
        'crop_name' => 'Pomegranate',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects feed on flowers and young leaves, especially in hot and dry conditions.',
        'symptoms' => 'Curling leaves, brown spots on flowers, poor fruit setting.',
        'protection' => 'Regular field monitoring and avoid excessive dry stress.',
        'recommended_control' => 'Apply Spinosad or Fipronil.'
    ],

    [
        'crop_name' => 'Pomegranate',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Insects suck sap from young shoots and tender leaves.',
        'symptoms' => 'Curled leaves, sticky honeydew on plant, slow growth.',
        'protection' => 'Encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Neem oil.'
    ],

    [
        'crop_name' => 'Pomegranate',
        'name' => 'Bacterial Blight',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Spread through rain splashes, infected plant parts, and wounds.',
        'symptoms' => 'Dark spots on leaves and fruits, cracking of fruits, fruit rot.',
        'protection' => 'Use clean planting material and prune infected branches.',
        'recommended_control' => 'Apply copper-based bactericides.'
    ],

    [
        'crop_name' => 'Pomegranate',
        'name' => 'Wilt Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus enters roots and blocks water supply to the plant.',
        'symptoms' => 'Sudden drying of branches, yellow leaves, plant dies slowly.',
        'protection' => 'Improve soil drainage and avoid waterlogging.',
        'recommended_control' => 'Apply Carbendazim or Trichoderma treatment.'
    ],

    [
        'crop_name' => 'Pomegranate',
        'name' => 'Fruit Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in humid weather and infects ripening fruits.',
        'symptoms' => 'Soft rotten patches on fruit, bad smell, fruit drops early.',
        'protection' => 'Avoid excess moisture and remove infected fruits.',
        'recommended_control' => 'Apply Carbendazim or Mancozeb.'
    ],

    [
        'crop_name' => 'Pomegranate',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through rain and humid conditions.',
        'symptoms' => 'Small brown spots on leaves, leaves turn yellow and fall.',
        'protection' => 'Keep orchard clean and avoid overcrowding.',
        'recommended_control' => 'Apply Copper oxychloride or Mancozeb.'
    ],

    [
        'crop_name' => 'Pomegranate',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus attacks fruits and leaves in wet weather.',
        'symptoms' => 'Dark sunken spots on fruit, fruit cracking, leaf spots.',
        'protection' => 'Prune trees and improve air circulation.',
        'recommended_control' => 'Apply Azoxystrobin or Carbendazim.'
    ],

    [
        'crop_name' => 'Pomegranate',
        'name' => 'Fruit Cracking',
        'type' => 'Physiological Disorder',
        'how_it_occurs' => 'Caused by irregular watering and sudden changes in moisture.',
        'symptoms' => 'Fruit skin splits open, fruit becomes unmarketable.',
        'protection' => 'Maintain regular irrigation and avoid water stress.',
        'recommended_control' => 'Apply calcium sprays and proper irrigation management.'
    ],
    [
        'crop_name' => 'Apple',
        'name' => 'Codling Moth',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult moth lays eggs on young fruits. After hatching, larvae enter the fruit and feed inside.',
        'symptoms' => 'Small holes on apples, worms inside fruit, fruit rotting and dropping early.',
        'protection' => 'Remove fallen fruits, use pheromone traps, and keep orchard clean.',
        'recommended_control' => 'Apply Spinosad or Chlorantraniliprole as recommended.'
    ],

    [
        'crop_name' => 'Apple',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from young shoots and leaves, especially in spring.',
        'symptoms' => 'Curled and sticky leaves, weak shoots, slow plant growth.',
        'protection' => 'Encourage ladybirds and maintain orchard hygiene.',
        'recommended_control' => 'Apply Imidacloprid or Neem oil.'
    ],

    [
        'crop_name' => 'Apple',
        'name' => 'Apple Scab',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in wet and humid weather and infects leaves and fruits.',
        'symptoms' => 'Dark rough spots on leaves and apples, fruit cracks, poor quality fruit.',
        'protection' => 'Prune trees for air flow and remove infected leaves.',
        'recommended_control' => 'Apply Mancozeb or Myclobutanil.'
    ],

    [
        'crop_name' => 'Apple',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in dry but warm conditions and spreads on leaves and shoots.',
        'symptoms' => 'White powder-like coating on leaves, curled leaves, stunted shoots.',
        'protection' => 'Prune infected parts and avoid overcrowding of trees.',
        'recommended_control' => 'Apply Sulphur or Penconazole.'
    ],

    [
        'crop_name' => 'Apple',
        'name' => 'Fire Blight',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria spread through rain, insects, and pruning cuts.',
        'symptoms' => 'Blackened leaves and branches, wilted shoots that look burned.',
        'protection' => 'Remove infected branches immediately and disinfect tools.',
        'recommended_control' => 'Apply Streptomycin or Copper-based sprays.'
    ],

    [
        'crop_name' => 'Apple',
        'name' => 'Crown Gall',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through wounds in roots or stem.',
        'symptoms' => 'Swollen lumps (galls) on roots or trunk, weak tree growth.',
        'protection' => 'Avoid plant injuries and use clean planting material.',
        'recommended_control' => 'Remove infected plants and apply biological control agents.'
    ],

    [
        'crop_name' => 'Apple',
        'name' => 'Black Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through rain and infected plant debris.',
        'symptoms' => 'Brown to black spots on leaves and fruits, fruit shriveling.',
        'protection' => 'Remove infected fruits and prune regularly.',
        'recommended_control' => 'Apply Captan or Copper fungicides.'
    ],

    [
        'crop_name' => 'Apple',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in wet or poorly drained soil.',
        'symptoms' => 'Yellow leaves, weak growth, tree slowly dies.',
        'protection' => 'Improve soil drainage and avoid overwatering.',
        'recommended_control' => 'Apply Trichoderma or Metalaxyl-based treatment.'
    ],
    [
        'crop_name' => 'Date',
        'name' => 'Red Palm Weevil',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult weevil lays eggs in trunk wounds. Larvae enter inside the palm and feed on soft tissue.',
        'symptoms' => 'Trunk holes, bad smell from tree, yellowing and drooping leaves, tree may die.',
        'protection' => 'Avoid trunk injuries, keep orchard clean, and regularly inspect palms.',
        'recommended_control' => 'Apply pheromone traps and inject recommended systemic insecticides.'
    ],

    [
        'crop_name' => 'Date',
        'name' => 'Date Palm Scale Insect',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects attach to leaves and suck sap continuously.',
        'symptoms' => 'Yellow patches on leaves, weak plant growth, dry and curled fronds.',
        'protection' => 'Remove heavily infected leaves and maintain orchard hygiene.',
        'recommended_control' => 'Apply mineral oil spray or Imidacloprid.'
    ],

    [
        'crop_name' => 'Date',
        'name' => 'Spider Mites',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny mites multiply in hot and dry weather and feed on leaf sap.',
        'symptoms' => 'Fine webbing on leaves, yellow speckles, leaves become dry.',
        'protection' => 'Keep moisture in orchard and remove dry leaves.',
        'recommended_control' => 'Apply Abamectin or Sulphur spray.'
    ],

    [
        'crop_name' => 'Date',
        'name' => 'Fusarium Wilt',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus enters through roots and blocks water movement in the plant.',
        'symptoms' => 'Lower leaves turn yellow, plant slowly dries from bottom to top.',
        'protection' => 'Use clean soil, avoid overwatering, and plant resistant varieties.',
        'recommended_control' => 'Apply Trichoderma or Carbendazim soil treatment.'
    ],

    [
        'crop_name' => 'Date',
        'name' => 'Black Scorch Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus infects leaves and grows in warm, humid conditions.',
        'symptoms' => 'Black burnt patches on leaves, leaf drying and falling.',
        'protection' => 'Remove infected leaves and improve air circulation.',
        'recommended_control' => 'Apply copper-based fungicides.'
    ],

    [
        'crop_name' => 'Date',
        'name' => 'Bayoud Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus spreads through roots and slowly kills the palm.',
        'symptoms' => 'Leaves turn yellow, then brown, and whole tree dies gradually.',
        'protection' => 'Use disease-free planting material and avoid infected soil.',
        'recommended_control' => 'Remove infected trees and treat soil with fungicides.'
    ],

    [
        'crop_name' => 'Date',
        'name' => 'Fruit Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on ripening fruits in high humidity.',
        'symptoms' => 'Soft, dark and rotten spots on fruits, bad smell, fruit falls early.',
        'protection' => 'Keep bunches dry and remove infected fruits.',
        'recommended_control' => 'Apply Mancozeb or Copper fungicide spray.'
    ],

    [
        'crop_name' => 'Date',
        'name' => 'Graphiola Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid conditions and attacks leaves.',
        'symptoms' => 'Small black dots on leaves, leaves become weak and dry.',
        'protection' => 'Improve air flow and avoid overcrowding.',
        'recommended_control' => 'Apply recommended copper fungicides.'
    ],
    [
        'crop_name' => 'Mint',
        'name' => 'Mint Aphid',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from young leaves and tender shoots, especially in spring and humid weather.',
        'symptoms' => 'Leaves become curled, sticky, and weak growth of plant.',
        'protection' => 'Keep field clean and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Neem oil spray.'
    ],

    [
        'crop_name' => 'Mint',
        'name' => 'Cutworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and cut young plants at the base during night.',
        'symptoms' => 'Young plants suddenly cut and fall, gaps in field.',
        'protection' => 'Remove weeds and plough soil before planting.',
        'recommended_control' => 'Apply Chlorpyrifos or Carbaryl as recommended.'
    ],

    [
        'crop_name' => 'Mint',
        'name' => 'Leaf Roller',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae roll leaves and feed inside them.',
        'symptoms' => 'Rolled leaves, holes in leaves, reduced plant growth.',
        'protection' => 'Remove damaged leaves and monitor crop regularly.',
        'recommended_control' => 'Apply Emamectin Benzoate when infestation increases.'
    ],

    [
        'crop_name' => 'Mint',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small white insects suck sap from the underside of leaves.',
        'symptoms' => 'Yellow leaves, sticky honeydew, weak plant growth.',
        'protection' => 'Use yellow sticky traps and keep field clean.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam.'
    ],

    [
        'crop_name' => 'Mint',
        'name' => 'Mint Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid conditions and infects leaves.',
        'symptoms' => 'Orange or brown powder-like spots on leaves, leaves dry and fall.',
        'protection' => 'Improve air circulation and avoid overhead watering.',
        'recommended_control' => 'Apply Sulphur or Mancozeb spray.'
    ],

    [
        'crop_name' => 'Mint',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaf surface in warm and dry weather.',
        'symptoms' => 'White powder on leaves, leaves become weak and curled.',
        'protection' => 'Avoid overcrowding and keep plants well spaced.',
        'recommended_control' => 'Apply Sulphur or Carbendazim.'
    ],

    [
        'crop_name' => 'Mint',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through water and infected plant debris.',
        'symptoms' => 'Small brown or black spots on leaves, leaves turn yellow.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Copper oxychloride or Mancozeb.'
    ],

    [
        'crop_name' => 'Mint',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in wet and poorly drained soil.',
        'symptoms' => 'Plants wilt suddenly, roots turn black and rot.',
        'protection' => 'Avoid overwatering and improve soil drainage.',
        'recommended_control' => 'Apply Trichoderma or Carbendazim soil treatment.'
    ],
    [
        'crop_name' => 'Fennel',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects appear in clusters on young shoots and leaves and suck plant sap, especially in warm weather.',
        'symptoms' => 'Leaves become curled and sticky, plant looks weak, growth slows down.',
        'protection' => 'Keep field clean, avoid excess nitrogen fertilizer, and encourage natural predators like ladybugs.',
        'recommended_control' => 'Spray Imidacloprid or Neem-based insecticides as per recommendation.'
    ],

    [
        'crop_name' => 'Fennel',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny white insects live under leaves and suck sap, spreading quickly in dry and warm conditions.',
        'symptoms' => 'Leaves turn yellow, plant weakens, and sticky honeydew appears on leaves.',
        'protection' => 'Use yellow sticky traps and keep field free from weeds.',
        'recommended_control' => 'Apply Buprofezin or Neem oil spray.'
    ],

    [
        'crop_name' => 'Fennel',
        'name' => 'Thrips',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Very small insects feed on tender leaves and flowers in dry weather.',
        'symptoms' => 'Leaves become silvery, curled, and dry from edges.',
        'protection' => 'Maintain proper irrigation and avoid dry stress in field.',
        'recommended_control' => 'Spray Spinosad or Imidacloprid.'
    ],

    [
        'crop_name' => 'Fennel',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in humid weather with poor air circulation.',
        'symptoms' => 'White powder-like layer on leaves, leaves turn yellow and dry.',
        'protection' => 'Keep proper spacing between plants and avoid overhead watering.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Fennel',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in overwatered or poorly drained fields.',
        'symptoms' => 'Plants wilt suddenly, roots become brown and rotten.',
        'protection' => 'Avoid waterlogging and improve soil drainage.',
        'recommended_control' => 'Use Carbendazim or Trichoderma treatment in soil.'
    ],

    [
        'crop_name' => 'Fennel',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Appears in cool and humid conditions and spreads through infected leaves.',
        'symptoms' => 'Yellow patches on leaves with grey mold underneath.',
        'protection' => 'Remove infected plants and avoid overcrowding.',
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
