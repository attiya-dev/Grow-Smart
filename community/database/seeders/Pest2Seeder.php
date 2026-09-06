<?php

namespace Database\Seeders;
use App\Models\Crop;
use App\Models\PestManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pest2Seeder extends Seeder
{
    
    public function run(): void
    {
          $pestDetails = [
            [
        'crop_name' => 'Groundnut',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects gather on leaves and suck plant sap, multiplying quickly in warm weather.',
        'symptoms' => 'Leaves curl, become sticky, and plants grow slowly.',
        'protection' => 'Use yellow sticky traps and encourage natural predators like ladybugs.',
        'recommended_control' => 'Apply Imidacloprid or Neem oil spray.'
    ],

    [
        'crop_name' => 'Groundnut',
        'name' => 'Jassids (Leafhopper)',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small green insects suck sap from leaves, especially in dry weather.',
        'symptoms' => 'Leaf edges turn yellow and leaves look burnt or dry.',
        'protection' => 'Keep field weed-free and avoid excess nitrogen.',
        'recommended_control' => 'Apply Acetamiprid or Imidacloprid.'
    ],

    [
        'crop_name' => 'Groundnut',
        'name' => 'Leaf Miner',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae make tunnels inside leaves and feed on green tissue.',
        'symptoms' => 'Leaves show white lines or tunnels and slowly dry.',
        'protection' => 'Remove infected leaves and keep field clean.',
        'recommended_control' => 'Apply Abamectin or Spinosad.'
    ],

    [
        'crop_name' => 'Groundnut',
        'name' => 'White Grub',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae live in soil and feed on roots of groundnut plants.',
        'symptoms' => 'Plants turn yellow, wilt, and can be easily pulled from soil.',
        'protection' => 'Deep ploughing and soil treatment before sowing.',
        'recommended_control' => 'Apply Chlorpyrifos or Carbofuran in soil.'
    ],

    [
        'crop_name' => 'Groundnut',
        'name' => 'Tikka Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid weather through rain splash.',
        'symptoms' => 'Brown or black spots on leaves, leaves dry and fall early.',
        'protection' => 'Use clean seeds and remove infected leaves.',
        'recommended_control' => 'Apply Mancozeb or Chlorothalonil.'
    ],

    [
        'crop_name' => 'Groundnut',
        'name' => 'Rust Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through wind in humid conditions.',
        'symptoms' => 'Orange or reddish spots on leaves, leaves dry and fall.',
        'protection' => 'Use resistant varieties and avoid overcrowding.',
        'recommended_control' => 'Apply Propiconazole or Tebuconazole.'
    ],

    [
        'crop_name' => 'Groundnut',
        'name' => 'Collar Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks stem base in wet soil conditions.',
        'symptoms' => 'Stem base rots, plant wilts suddenly and dies.',
        'protection' => 'Avoid water logging and use well-drained soil.',
        'recommended_control' => 'Treat soil with Trichoderma or Carbendazim.'
    ],

    [
        'crop_name' => 'Groundnut',
        'name' => 'Peanut Bud Necrosis Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by thrips insects and infected plants.',
        'symptoms' => 'Leaves become small, curled, and plant growth stops.',
        'protection' => 'Control thrips and use healthy seeds.',
        'recommended_control' => 'No cure; remove infected plants and control insects.'
    ],
    [
        'crop_name' => 'Watermelon',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects gather on young leaves and suck plant sap quickly.',
        'symptoms' => 'Leaves curl, become sticky, and plant growth becomes slow.',
        'protection' => 'Use yellow sticky traps and control weeds around field.',
        'recommended_control' => 'Apply Imidacloprid or Neem oil spray.'
    ],

    [
        'crop_name' => 'Watermelon',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny white insects live under leaves and suck sap from plant.',
        'symptoms' => 'Leaves turn yellow, become weak, and sticky coating appears.',
        'protection' => 'Avoid overcrowding and use sticky traps.',
        'recommended_control' => 'Apply Thiamethoxam or neem-based spray.'
    ],

    [
        'crop_name' => 'Watermelon',
        'name' => 'Red Pumpkin Beetle',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Beetles feed on young leaves and seedlings.',
        'symptoms' => 'Holes in leaves and seedlings get damaged or die.',
        'protection' => 'Cover young plants and keep field clean.',
        'recommended_control' => 'Apply Carbaryl or Cypermethrin.'
    ],

    [
        'crop_name' => 'Watermelon',
        'name' => 'Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Female flies lay eggs inside fruits, and larvae feed inside.',
        'symptoms' => 'Fruits rot from inside, small holes appear, and fruits fall early.',
        'protection' => 'Collect and destroy fallen fruits and use traps.',
        'recommended_control' => 'Use bait traps or Spinosad spray.'
    ],

    [
        'crop_name' => 'Watermelon',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in dry but humid conditions.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and fall.',
        'protection' => 'Improve air flow and avoid overhead watering.',
        'recommended_control' => 'Apply Sulphur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Watermelon',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in cool and wet weather.',
        'symptoms' => 'Yellow patches on leaves and grey mold on leaf underside.',
        'protection' => 'Avoid water on leaves and improve drainage.',
        'recommended_control' => 'Apply Mancozeb or Metalaxyl.'
    ],

    [
        'crop_name' => 'Watermelon',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected seeds and rain splash in wet weather.',
        'symptoms' => 'Dark sunken spots on fruits and leaves, fruits rot.',
        'protection' => 'Use clean seeds and avoid wet leaves.',
        'recommended_control' => 'Apply Copper oxychloride or Mancozeb.'
    ],

    [
        'crop_name' => 'Watermelon',
        'name' => 'Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids and infected plant material.',
        'symptoms' => 'Leaves become yellow-green mixed color and plants grow weak.',
        'protection' => 'Control aphids and remove infected plants.',
        'recommended_control' => 'No cure; remove infected plants and control insects.'
    ],
    [
        'crop_name' => 'Melon',
        'name' => 'Melon Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult flies lay eggs inside young melon fruits. After hatching, larvae feed inside the fruit.',
        'symptoms' => 'Fruits become soft, rotten from inside, and may fall early.',
        'protection' => 'Use fruit bags, remove infected fruits, and maintain field hygiene.',
        'recommended_control' => 'Use pheromone traps and approved insecticides like Spinosad when needed.'
    ],

    [
        'crop_name' => 'Melon',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves and young shoots, especially in warm weather.',
        'symptoms' => 'Leaves curl, turn yellow, and plant growth becomes weak.',
        'protection' => 'Encourage natural predators like ladybirds and avoid over-fertilizing nitrogen.',
        'recommended_control' => 'Apply Imidacloprid or neem-based sprays.'
    ],

    [
        'crop_name' => 'Melon',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny white insects live under leaves and suck plant sap.',
        'symptoms' => 'Leaves turn yellow, sticky surface appears, and plant becomes weak.',
        'protection' => 'Use yellow sticky traps and keep weeds under control.',
        'recommended_control' => 'Apply Buprofezin or recommended insecticides.'
    ],

    [
        'crop_name' => 'Melon',
        'name' => 'Red Spider Mite',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Mites develop in hot and dry conditions and feed on leaf cells.',
        'symptoms' => 'Small yellow spots on leaves, leaves dry and fall early.',
        'protection' => 'Spray water on leaves and avoid dusty dry conditions.',
        'recommended_control' => 'Apply Abamectin or suitable miticides.'
    ],

    [
        'crop_name' => 'Melon',
        'name' => 'Cucumber Beetle',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Beetles feed on leaves, flowers, and young plants.',
        'symptoms' => 'Holes in leaves, damaged flowers, and weak plant growth.',
        'protection' => 'Use row covers and keep fields clean from weeds.',
        'recommended_control' => 'Apply recommended insecticides like Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Melon',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in warm and dry weather with high humidity at night.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and die early.',
        'protection' => 'Improve air flow and avoid overhead watering.',
        'recommended_control' => 'Apply Sulfur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Melon',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread in cool, wet, and humid conditions.',
        'symptoms' => 'Yellow spots on leaves, leaves turn brown and fall.',
        'protection' => 'Avoid leaf wetness and ensure good drainage.',
        'recommended_control' => 'Apply Mancozeb or Metalaxyl.'
    ],

    [
        'crop_name' => 'Melon',
        'name' => 'Fusarium Wilt',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus enters roots and blocks water movement.',
        'symptoms' => 'Plants suddenly wilt even when soil is moist.',
        'protection' => 'Use resistant varieties and crop rotation.',
        'recommended_control' => 'Treat soil with bio-fungicides or Carbendazim.'
    ],

    [
        'crop_name' => 'Melon',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through rain splash and infected seeds.',
        'symptoms' => 'Dark sunken spots on fruits and leaves.',
        'protection' => 'Use clean seeds and remove infected plant parts.',
        'recommended_control' => 'Apply Chlorothalonil or Mancozeb.'
    ],

    [
        'crop_name' => 'Melon',
        'name' => 'Mosaic Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by insects like aphids from infected plants.',
        'symptoms' => 'Leaves become patchy yellow and plant growth becomes stunted.',
        'protection' => 'Control insect vectors and remove infected plants.',
        'recommended_control' => 'No cure, only vector control using insecticides.'
    ],
    [
        'crop_name' => 'Guava',
        'name' => 'Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult flies lay eggs inside ripe or semi-ripe guava fruits. Larvae feed inside the fruit.',
        'symptoms' => 'Fruits become soft, rotten inside, and fall early from the tree.',
        'protection' => 'Collect and destroy fallen fruits and use fruit bagging.',
        'recommended_control' => 'Use pheromone traps and approved insecticides like Spinosad.'
    ],

    [
        'crop_name' => 'Guava',
        'name' => 'Mealybug',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from leaves, stems, and fruits and spread quickly in warm weather.',
        'symptoms' => 'White cotton-like patches on plant, leaves become weak and sticky.',
        'protection' => 'Remove infected parts and control ants that spread mealybugs.',
        'recommended_control' => 'Apply Imidacloprid or neem oil spray.'
    ],

    [
        'crop_name' => 'Guava',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny insects feed on young shoots and leaves by sucking plant sap.',
        'symptoms' => 'Leaves curl, turn yellow, and plant growth becomes slow.',
        'protection' => 'Encourage natural predators like ladybirds and keep field clean.',
        'recommended_control' => 'Use Imidacloprid or organic neem sprays.'
    ],

    [
        'crop_name' => 'Guava',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small white insects live under leaves and suck sap from plants.',
        'symptoms' => 'Leaves turn yellow and sticky honeydew appears on leaves.',
        'protection' => 'Use yellow sticky traps and remove weeds near plants.',
        'recommended_control' => 'Apply Buprofezin or recommended insecticides.'
    ],

    [
        'crop_name' => 'Guava',
        'name' => 'Scale Insect',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Insects attach to stems and leaves and suck plant sap continuously.',
        'symptoms' => 'Small brown/black bumps on stems and leaves, plant becomes weak.',
        'protection' => 'Prune heavily infected branches and improve air flow.',
        'recommended_control' => 'Apply mineral oil spray or systemic insecticides.'
    ],

    [
        'crop_name' => 'Guava',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through rain and infects leaves, flowers, and fruits.',
        'symptoms' => 'Dark sunken spots on fruits and fruit rot before ripening.',
        'protection' => 'Remove infected fruits and avoid overhead watering.',
        'recommended_control' => 'Apply Mancozeb or Copper-based fungicides.'
    ],

    [
        'crop_name' => 'Guava',
        'name' => 'Wilt Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus enters roots and blocks water movement in the plant.',
        'symptoms' => 'Sudden wilting of leaves and whole branches drying.',
        'protection' => 'Use resistant rootstocks and improve soil drainage.',
        'recommended_control' => 'Soil drenching with Carbendazim or Trichoderma.'
    ],

    [
        'crop_name' => 'Guava',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in humid conditions and infects leaves.',
        'symptoms' => 'Small brown or black spots on leaves, leaves fall early.',
        'protection' => 'Remove infected leaves and avoid leaf wetness.',
        'recommended_control' => 'Spray Copper oxychloride or Mancozeb.'
    ],

    [
        'crop_name' => 'Guava',
        'name' => 'Fruit Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus infects fruits during high humidity and poor storage.',
        'symptoms' => 'Fruit becomes soft, black, and completely rotten.',
        'protection' => 'Harvest fruits on time and avoid injury to fruits.',
        'recommended_control' => 'Apply fungicides like Carbendazim or proper post-harvest treatment.'
    ],

    [
        'crop_name' => 'Guava',
        'name' => 'Guava Moth',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae bore into fruits and feed inside, especially in young fruits.',
        'symptoms' => 'Small holes in fruit and internal damage causing premature drop.',
        'protection' => 'Bag fruits and remove infested fruits from orchard.',
        'recommended_control' => 'Use pheromone traps and recommended insecticides.'
    ],
    [
        'crop_name' => 'Papaya',
        'name' => 'Papaya Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult flies lay eggs inside developing papaya fruits. Larvae feed inside the fruit.',
        'symptoms' => 'Fruits show soft patches, rot from inside, and fall before ripening.',
        'protection' => 'Remove fallen fruits and use fruit bagging to protect developing fruits.',
        'recommended_control' => 'Use pheromone traps and approved insecticides like Spinosad.'
    ],

    [
        'crop_name' => 'Papaya',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from young leaves and shoots, especially in warm weather.',
        'symptoms' => 'Leaves curl, turn yellow, and plant growth becomes weak.',
        'protection' => 'Encourage natural enemies like ladybirds and keep field clean from weeds.',
        'recommended_control' => 'Apply Imidacloprid or neem-based sprays.'
    ],

    [
        'crop_name' => 'Papaya',
        'name' => 'Whitefly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Tiny white insects live under leaves and suck plant sap.',
        'symptoms' => 'Leaves become yellow, sticky surface appears, and plant becomes weak.',
        'protection' => 'Use yellow sticky traps and remove weeds around plants.',
        'recommended_control' => 'Apply Buprofezin or recommended insecticides.'
    ],

    [
        'crop_name' => 'Papaya',
        'name' => 'Mealybug',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Insects form cotton-like colonies on leaves, stems, and fruits and suck sap.',
        'symptoms' => 'White cotton patches on plant, leaves become weak and sticky.',
        'protection' => 'Remove infected parts and control ants that spread mealybugs.',
        'recommended_control' => 'Apply neem oil or systemic insecticides.'
    ],

    [
        'crop_name' => 'Papaya',
        'name' => 'Red Spider Mite',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Mites develop in hot and dry conditions and feed on leaf cells.',
        'symptoms' => 'Small yellow dots on leaves, leaves dry and fall early.',
        'protection' => 'Spray water on leaves and avoid dusty dry conditions.',
        'recommended_control' => 'Apply Abamectin or other miticides.'
    ],

    [
        'crop_name' => 'Papaya',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in warm weather with humidity.',
        'symptoms' => 'White powder-like coating on leaves, leaves turn yellow and dry.',
        'protection' => 'Improve air circulation and avoid overhead watering.',
        'recommended_control' => 'Apply Sulfur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Papaya',
        'name' => 'Anthracnose',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through rain splash and infects fruits and leaves.',
        'symptoms' => 'Dark sunken spots on fruits and fruit rot before ripening.',
        'protection' => 'Remove infected fruits and avoid wetting leaves.',
        'recommended_control' => 'Apply Mancozeb or Copper-based fungicides.'
    ],

    [
        'crop_name' => 'Papaya',
        'name' => 'Foot Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus infects roots and stem base in wet soil.',
        'symptoms' => 'Plant wilts, stem base becomes black and soft, plant may die.',
        'protection' => 'Ensure good drainage and avoid waterlogging.',
        'recommended_control' => 'Soil drenching with Metalaxyl or Trichoderma.'
    ],

    [
        'crop_name' => 'Papaya',
        'name' => 'Papaya Ring Spot Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids from infected plants.',
        'symptoms' => 'Yellow ring spots on fruits and leaves, plant growth becomes weak.',
        'protection' => 'Control aphids and remove infected plants immediately.',
        'recommended_control' => 'No cure; only control insect vectors using insecticides.'
    ],

    [
        'crop_name' => 'Papaya',
        'name' => 'Leaf Curl Virus',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by whiteflies feeding on infected plants.',
        'symptoms' => 'Leaves curl upward, become thick, and plant growth stops.',
        'protection' => 'Control whiteflies and remove infected plants.',
        'recommended_control' => 'Manage vectors using insecticides like Imidacloprid.'
    ],
    [
        'crop_name' => 'Peach',
        'name' => 'Peach Fruit Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Adult flies lay eggs inside ripening peach fruits. Larvae develop by feeding inside the fruit.',
        'symptoms' => 'Fruits become soft, rotten inside, and fall from the tree before ripening.',
        'protection' => 'Collect and destroy fallen fruits and use fruit bagging to protect fruits.',
        'recommended_control' => 'Use pheromone traps and approved insecticides like Spinosad.'
    ],

    [
        'crop_name' => 'Peach',
        'name' => 'Aphids',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from young leaves, shoots, and buds.',
        'symptoms' => 'Leaves curl, become sticky, and new shoots grow weak.',
        'protection' => 'Encourage natural predators like ladybirds and remove heavily infested shoots.',
        'recommended_control' => 'Apply Imidacloprid or neem oil spray.'
    ],

    [
        'crop_name' => 'Peach',
        'name' => 'Peach Leaf Curl',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus infects buds during cool and wet weather in early spring.',
        'symptoms' => 'Leaves become thick, curled, and turn red or purple.',
        'protection' => 'Remove infected leaves and maintain orchard cleanliness.',
        'recommended_control' => 'Apply Copper-based fungicides before bud break.'
    ],

    [
        'crop_name' => 'Peach',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in warm weather and spreads on leaves and fruits.',
        'symptoms' => 'White powder-like coating on leaves and fruits, growth becomes weak.',
        'protection' => 'Improve air circulation and avoid overcrowding of branches.',
        'recommended_control' => 'Apply Sulfur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Peach',
        'name' => 'Brown Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus infects flowers and fruits, especially in humid conditions.',
        'symptoms' => 'Fruits rot quickly, become brown and covered with mold.',
        'protection' => 'Remove infected fruits and prune trees for better airflow.',
        'recommended_control' => 'Apply Mancozeb or other recommended fungicides.'
    ],

    [
        'crop_name' => 'Peach',
        'name' => 'Shot Hole Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus infects leaves during wet weather conditions.',
        'symptoms' => 'Small brown spots on leaves that later fall out, leaving holes.',
        'protection' => 'Avoid overhead watering and remove infected leaves.',
        'recommended_control' => 'Apply Copper oxychloride or Mancozeb.'
    ],

    [
        'crop_name' => 'Peach',
        'name' => 'Scale Insect',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Insects attach to branches and suck sap continuously.',
        'symptoms' => 'Small hard bumps on stems, branches become weak and dry.',
        'protection' => 'Prune infected branches and maintain orchard hygiene.',
        'recommended_control' => 'Apply mineral oil spray or systemic insecticides.'
    ],

    [
        'crop_name' => 'Peach',
        'name' => 'Bacterial Canker',
        'type' => 'Bacterial Disease',
        'how_it_occurs' => 'Bacteria enter through wounds in branches and spread in wet conditions.',
        'symptoms' => 'Gum oozing from branches, bark cracks, and branch dieback.',
        'protection' => 'Avoid injuries to trees and prune during dry weather.',
        'recommended_control' => 'Apply copper-based bactericides and prune infected branches.'
    ],

    [
        'crop_name' => 'Peach',
        'name' => 'Spider Mite',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Mites feed on leaf cells in hot and dry conditions.',
        'symptoms' => 'Leaves show yellow spots, become dry and fall early.',
        'protection' => 'Spray water on leaves and avoid dusty conditions.',
        'recommended_control' => 'Apply Abamectin or recommended miticides.'
    ],

    [
        'crop_name' => 'Peach',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungi infect roots in waterlogged soil.',
        'symptoms' => 'Tree becomes weak, leaves turn yellow, and growth stops.',
        'protection' => 'Improve soil drainage and avoid overwatering.',
        'recommended_control' => 'Soil drenching with Carbendazim or Trichoderma.'
    ],
    [
        'crop_name' => 'Wheat',
        'name' => 'Wheat Aphid',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects appear in clusters on leaves and stems and suck plant sap, especially in cool weather.',
        'symptoms' => 'Leaves turn yellow, plants become weak, growth slows down, and grains may not fill properly.',
        'protection' => 'Avoid overuse of nitrogen fertilizer, encourage ladybird insects, and keep field clean.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Wheat',
        'name' => 'Armyworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae hide in soil during day and feed on wheat leaves at night.',
        'symptoms' => 'Leaves are eaten from edges, plants look cut or damaged, and field patches appear empty.',
        'protection' => 'Regular field monitoring and remove weeds from field edges.',
        'recommended_control' => 'Apply Lambda-cyhalothrin or Emamectin Benzoate.'
    ],

    [
        'crop_name' => 'Wheat',
        'name' => 'Leaf Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through wind in cool and moist weather.',
        'symptoms' => 'Small orange-brown spots appear on leaves and plants weaken over time.',
        'protection' => 'Use resistant varieties and avoid overcrowding of crops.',
        'recommended_control' => 'Apply Propiconazole or Tebuconazole.'
    ],

    [
        'crop_name' => 'Wheat',
        'name' => 'Stripe Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Develops in cool weather and spreads quickly through wind.',
        'symptoms' => 'Yellow stripes appear on leaves and plants dry early.',
        'protection' => 'Plant resistant varieties and ensure proper field drainage.',
        'recommended_control' => 'Apply Triazole-based fungicides.'
    ],

    [
        'crop_name' => 'Wheat',
        'name' => 'Stem Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus infects stems and spreads in warm, humid conditions.',
        'symptoms' => 'Dark brown or black spots on stems, plants become weak and may fall.',
        'protection' => 'Use resistant varieties and remove infected plants.',
        'recommended_control' => 'Apply Propiconazole or other recommended fungicides.'
    ],

    [
        'crop_name' => 'Wheat',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'White fungal growth develops on leaves in cool and humid weather.',
        'symptoms' => 'White powder-like layer on leaves, plants look weak and stunted.',
        'protection' => 'Avoid dense planting and ensure proper air flow in field.',
        'recommended_control' => 'Apply Sulfur-based fungicides or Hexaconazole.'
    ],

    [
        'crop_name' => 'Wheat',
        'name' => 'Loose Smut',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Seed-borne fungus infects plants during germination.',
        'symptoms' => 'Black powder replaces wheat grains, and heads look empty.',
        'protection' => 'Use certified disease-free seeds and treat seeds before sowing.',
        'recommended_control' => 'Treat seeds with Carbendazim before planting.'
    ],

    [
        'crop_name' => 'Wheat',
        'name' => 'Karnal Bunt',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus infects grains during flowering in humid conditions.',
        'symptoms' => 'Grains become black inside and give a bad smell.',
        'protection' => 'Use clean seeds and avoid late sowing.',
        'recommended_control' => 'Apply appropriate fungicide sprays during flowering stage.'
    ],

    [
        'crop_name' => 'Wheat',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus attacks roots in wet or poorly drained soil.',
        'symptoms' => 'Plants turn yellow, wilt easily, and roots become dark and weak.',
        'protection' => 'Improve drainage and avoid overwatering.',
        'recommended_control' => 'Apply soil fungicides like Carbendazim or Thiram.'
    ],

    [
        'crop_name' => 'Wheat',
        'name' => 'Termite',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Insects live in soil and feed on roots and plant stems.',
        'symptoms' => 'Plants dry suddenly, roots are damaged, and crop patches die.',
        'protection' => 'Remove crop residues and keep soil well managed.',
        'recommended_control' => 'Apply Chlorpyrifos or Fipronil as soil treatment.'
    ],
    [
        'crop_name' => 'Mustard',
        'name' => 'Aphid (Mustard Aphid)',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects gather on young shoots and flower clusters and suck plant sap, especially in cool weather.',
        'symptoms' => 'Leaves curl and turn yellow, plants become sticky, growth becomes slow, and flowers may dry or fall.',
        'protection' => 'Avoid excess nitrogen fertilizer, keep field clean, and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as per recommendation.'
    ],

    [
        'crop_name' => 'Mustard',
        'name' => 'Sawfly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae feed on leaves in groups and can quickly damage the crop in early stages.',
        'symptoms' => 'Leaves are eaten from edges, only veins may remain, and plants look weak.',
        'protection' => 'Regular field checking and remove infested plants early.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin.'
    ],

    [
        'crop_name' => 'Mustard',
        'name' => 'White Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus develops in cool and humid weather and spreads through wind and water.',
        'symptoms' => 'White powder-like spots appear under leaves and plants become weak.',
        'protection' => 'Use resistant varieties and avoid excess moisture in field.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Mustard',
        'name' => 'Alternaria Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in warm and humid conditions and attacks leaves and pods.',
        'symptoms' => 'Dark brown spots on leaves, leaves dry early, and yield reduces.',
        'protection' => 'Use clean seed and remove infected plant debris.',
        'recommended_control' => 'Apply Mancozeb or Azoxystrobin.'
    ],

    [
        'crop_name' => 'Mustard',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Develops in cool, moist conditions and spreads through infected plant material.',
        'symptoms' => 'Yellow patches on upper leaf side and white growth under leaves.',
        'protection' => 'Avoid overcrowding and improve air circulation in field.',
        'recommended_control' => 'Apply Metalaxyl-based fungicides.'
    ],

    [
        'crop_name' => 'Mustard',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows on leaves in dry weather with humidity at night.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and fall early.',
        'protection' => 'Keep field clean and avoid dense planting.',
        'recommended_control' => 'Apply Sulfur or Hexaconazole.'
    ],

    [
        'crop_name' => 'Mustard',
        'name' => 'Sclerotinia Stem Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus attacks stems in cool and wet conditions.',
        'symptoms' => 'White cotton-like growth on stem, plant wilts and breaks.',
        'protection' => 'Avoid waterlogging and use proper spacing.',
        'recommended_control' => 'Apply Carbendazim or Thiophanate-methyl.'
    ],

    [
        'crop_name' => 'Mustard',
        'name' => 'Leaf Spot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads through infected seeds and crop residues.',
        'symptoms' => 'Small brown spots on leaves that slowly increase and dry the leaf.',
        'protection' => 'Use healthy seeds and remove old crop debris.',
        'recommended_control' => 'Apply Mancozeb spray.'
    ],
    [
        'crop_name' => 'Barley',
        'name' => 'Aphids (Greenbug)',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects suck sap from barley leaves, especially in warm weather.',
        'symptoms' => 'Leaves turn yellow, plants become weak, growth slows down.',
        'protection' => 'Avoid too much nitrogen fertilizer and encourage natural predators like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Barley',
        'name' => 'Armyworm',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Caterpillars feed on leaves, usually appear in groups.',
        'symptoms' => 'Leaves are eaten, plants look cut or damaged, field looks patchy.',
        'protection' => 'Regular field monitoring and remove early infected plants.',
        'recommended_control' => 'Use Chlorpyrifos or Lambda-cyhalothrin if infestation is high.'
    ],

    [
        'crop_name' => 'Barley',
        'name' => 'Hessian Fly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Flies lay eggs on leaves; larvae damage stems.',
        'symptoms' => 'Weak stems, plants fall down easily, poor growth.',
        'protection' => 'Use resistant varieties and destroy crop residues.',
        'recommended_control' => 'Apply recommended systemic insecticides.'
    ],

    [
        'crop_name' => 'Barley',
        'name' => 'Barley Yellow Dwarf Virus (BYDV)',
        'type' => 'Viral Disease',
        'how_it_occurs' => 'Spread by aphids feeding on plants.',
        'symptoms' => 'Leaves turn yellow or red, plants stay short and weak.',
        'protection' => 'Control aphids and use healthy seed.',
        'recommended_control' => 'Control aphid vectors using Imidacloprid or similar insecticides.'
    ],

    [
        'crop_name' => 'Barley',
        'name' => 'Powdery Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool and humid conditions on leaves.',
        'symptoms' => 'White powder-like coating on leaves, leaves dry and weaken.',
        'protection' => 'Use resistant varieties and avoid overcrowding.',
        'recommended_control' => 'Apply Sulfur or Propiconazole.'
    ],

    [
        'crop_name' => 'Barley',
        'name' => 'Leaf Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread by wind-borne fungal spores.',
        'symptoms' => 'Small orange-brown spots on leaves, leaves dry early.',
        'protection' => 'Use resistant varieties and remove infected debris.',
        'recommended_control' => 'Apply Triazole-based fungicides.'
    ],

    [
        'crop_name' => 'Barley',
        'name' => 'Loose Smut',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Seed-borne fungus infects developing grains.',
        'symptoms' => 'Grains turn into black powder, heads look empty.',
        'protection' => 'Use treated and certified seeds.',
        'recommended_control' => 'Treat seeds with Carbendazim before sowing.'
    ],

    [
        'crop_name' => 'Barley',
        'name' => 'Covered Smut',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus stays inside seeds and grows during plant development.',
        'symptoms' => 'Grains are replaced with black powder inside husk.',
        'protection' => 'Use disease-free seed and seed treatment.',
        'recommended_control' => 'Seed treatment with Tebuconazole or Carbendazim.'
    ],

    [
        'crop_name' => 'Barley',
        'name' => 'Root Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil fungus attacks roots in wet conditions.',
        'symptoms' => 'Plants turn yellow, roots rot, plants die early.',
        'protection' => 'Avoid waterlogging and improve soil drainage.',
        'recommended_control' => 'Use soil fungicides like Carbendazim.'
    ],

    [
        'crop_name' => 'Barley',
        'name' => 'Stripe Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread by wind in cool, wet weather.',
        'symptoms' => 'Yellow stripes on leaves, plants weaken quickly.',
        'protection' => 'Plant resistant varieties and monitor early.',
        'recommended_control' => 'Apply Propiconazole or Tebuconazole.'
    ],
    [
        'crop_name' => 'Rapeseed',
        'name' => 'Aphids (Mustard Aphid)',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects gather on young shoots and suck plant sap, especially in cool weather.',
        'symptoms' => 'Leaves curl, plants become weak, flowers dry early, yield decreases.',
        'protection' => 'Remove weeds, avoid excess nitrogen, and encourage natural enemies like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Rapeseed',
        'name' => 'Sawfly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae feed on leaves and can quickly damage the crop in groups.',
        'symptoms' => 'Leaves are eaten, only veins remain, plants look skeleton-like.',
        'protection' => 'Regular field inspection and early removal of infected plants.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin if infestation is severe.'
    ],

    [
        'crop_name' => 'Rapeseed',
        'name' => 'Painted Bug',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Insects suck sap from pods and seeds during pod formation stage.',
        'symptoms' => 'Pods shrink, seeds become weak or empty, yield reduces.',
        'protection' => 'Keep field clean and remove weeds around crop area.',
        'recommended_control' => 'Use recommended pyrethroid insecticides.'
    ],

    [
        'crop_name' => 'Rapeseed',
        'name' => 'White Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus grows in cool and humid conditions on leaves and stems.',
        'symptoms' => 'White raised spots on leaves, leaves turn yellow and dry.',
        'protection' => 'Use resistant varieties and avoid waterlogging.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Rapeseed',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in moist and cool weather conditions.',
        'symptoms' => 'Yellow patches on leaves, white mold under leaves, weak plants.',
        'protection' => 'Ensure proper spacing and good air flow in field.',
        'recommended_control' => 'Apply Metalaxyl-based fungicides.'
    ],

    [
        'crop_name' => 'Rapeseed',
        'name' => 'Alternaria Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected seeds and wet weather.',
        'symptoms' => 'Dark brown spots on leaves and pods, leaves dry early.',
        'protection' => 'Use clean seeds and remove infected crop debris.',
        'recommended_control' => 'Apply Mancozeb or Carbendazim.'
    ],

    [
        'crop_name' => 'Rapeseed',
        'name' => 'Sclerotinia Stem Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus attacks stems in cool, wet, and dense crop conditions.',
        'symptoms' => 'Stem rots, plants fall over, white cotton-like growth appears.',
        'protection' => 'Avoid dense planting and improve field drainage.',
        'recommended_control' => 'Apply Carbendazim or Tebuconazole.'
    ],

    [
        'crop_name' => 'Rapeseed',
        'name' => 'Clubroot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus infects roots in acidic, wet soils.',
        'symptoms' => 'Roots become swollen, plants stay small and wilt easily.',
        'protection' => 'Use well-drained soil and resistant varieties.',
        'recommended_control' => 'Improve soil pH and use soil treatment methods.'
    ],

    [
        'crop_name' => 'Rapeseed',
        'name' => 'Black Leg Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected seeds and crop residue.',
        'symptoms' => 'Dark spots on stem base, plants weaken and die early.',
        'protection' => 'Use certified seeds and rotate crops.',
        'recommended_control' => 'Treat seeds with fungicides like Tebuconazole.'
    ],
    [
        'crop_name' => 'Canola',
        'name' => 'Mustard Aphid',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Small insects gather on young shoots and suck plant sap, especially in cool weather.',
        'symptoms' => 'Leaves curl, plants become weak, flowers dry early, and seed formation is poor.',
        'protection' => 'Remove weeds, avoid excess nitrogen, and encourage natural enemies like ladybirds.',
        'recommended_control' => 'Apply Imidacloprid or Thiamethoxam as recommended.'
    ],

    [
        'crop_name' => 'Canola',
        'name' => 'Sawfly',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Larvae feed on leaves in groups and damage the crop quickly.',
        'symptoms' => 'Leaves are eaten completely, only veins remain, plants look skeleton-like.',
        'protection' => 'Regular field checking and early removal of infected plants.',
        'recommended_control' => 'Apply Chlorpyrifos or Lambda-cyhalothrin if infestation is severe.'
    ],

    [
        'crop_name' => 'Canola',
        'name' => 'Painted Bug',
        'type' => 'Insect Pest',
        'how_it_occurs' => 'Insects suck sap from pods and developing seeds.',
        'symptoms' => 'Pods shrink, seeds become weak or empty, overall yield decreases.',
        'protection' => 'Keep fields clean and remove nearby weeds.',
        'recommended_control' => 'Use recommended pyrethroid insecticides.'
    ],

    [
        'crop_name' => 'Canola',
        'name' => 'White Rust',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus develops in cool and humid conditions on leaves and stems.',
        'symptoms' => 'White raised spots on leaves, leaves turn yellow and dry slowly.',
        'protection' => 'Use resistant varieties and avoid waterlogging.',
        'recommended_control' => 'Apply Metalaxyl or Mancozeb.'
    ],

    [
        'crop_name' => 'Canola',
        'name' => 'Downy Mildew',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus spreads in cool and moist weather conditions.',
        'symptoms' => 'Yellow patches on leaves, white mold under leaves, weak plant growth.',
        'protection' => 'Keep proper spacing between plants for good airflow.',
        'recommended_control' => 'Apply Metalaxyl-based fungicides.'
    ],

    [
        'crop_name' => 'Canola',
        'name' => 'Alternaria Blight',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected seeds and wet weather conditions.',
        'symptoms' => 'Dark brown spots on leaves and pods, leaves dry early.',
        'protection' => 'Use clean seeds and remove infected plant debris.',
        'recommended_control' => 'Apply Mancozeb or Carbendazim.'
    ],

    [
        'crop_name' => 'Canola',
        'name' => 'Sclerotinia Stem Rot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Fungus attacks stems in wet, cool, and dense crop conditions.',
        'symptoms' => 'Stem becomes soft and rotten, plants fall over, white cotton-like growth appears.',
        'protection' => 'Avoid dense planting and improve drainage.',
        'recommended_control' => 'Apply Carbendazim or Tebuconazole.'
    ],

    [
        'crop_name' => 'Canola',
        'name' => 'Clubroot',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Soil-borne fungus infects roots in wet and acidic soils.',
        'symptoms' => 'Roots become swollen, plants stay small, and wilt quickly.',
        'protection' => 'Use well-drained soil and resistant varieties.',
        'recommended_control' => 'Improve soil pH and use proper soil treatment methods.'
    ],

    [
        'crop_name' => 'Canola',
        'name' => 'Blackleg Disease',
        'type' => 'Fungal Disease',
        'how_it_occurs' => 'Spread through infected seeds and crop residue.',
        'symptoms' => 'Dark spots on stem base, plants become weak and may die early.',
        'protection' => 'Use certified seeds and rotate crops.',
        'recommended_control' => 'Treat seeds with fungicides like Tebuconazole.'
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
