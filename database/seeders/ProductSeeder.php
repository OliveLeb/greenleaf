<?php

namespace Database\Seeders;

use App\Models\Picture;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

$products = [
  [
    'name' => 'Orchidée Phalaeonopsis 2 tiges',
    'details' => "Des variations de température entre le jour et la nuit et un arrêt végétatif bien parqué après la floraison sont indispensable pour induire de nouvellles fleurs. Lorsque la plante porte des boutons, la température ne doit pas descendre en dessous de 15°C.",
    'description' => "On dénombre une cinquantaine d'espèces et plus de 5000 hybrides, dont la généalogie très complexe peut remonter sur plus de 10 générations. Ces hybrides sont beaucoup plus faciles à cultiver en appartement. Les espèces réussiront mieux en serre, notamment Phalaenopsis amabilis, à fleurs blanches et au labelle jaune et rose marqué de rouge ; P. lueddemanniana, à fleurs cireuses, blanches et labelle rose pourpre ; P. violacea, petit, parfumé, blanc, jaune et violet-pourpre, une merveille de délicatesse.",
    'product_code' => 'PI-OP-',
    'price' => 1850,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/orchidée_phalaeonopsis.jpg'
  ],
  [
    'name' => 'Aréca',
    'details' => "L'ambiance moite d'un jardin d'hiver est très appréciée.",
    'description' => "Palmier formant une touffe appelé aussi Dypsis.",
    'product_code' => 'PI-AR-',
    'price' => 4499,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/areca.jpg'
  ],
  [
    'name' => 'Spathiphyllum',
    'details' => "Ne déplacez pas le spathiphyllum trop souvent , il est casanier.., Niveau de dépollution : 3, Polluants : Ammoniac , Xylène, Formaldéhyde, Benzène.",
    'description' => "Vivace rhizomateuse persistante, bien touffue.",
    'product_code' => 'PI-SP-',
    'price' => 1749,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/spathiphyllum.jpg'
  ],
  [
    'name' => 'Livistona',
    'details' => "Livistona chinensis est rustique sur la Côte méditerranéenne. En pleine terre, il a résisté au redoutable hiver 1985/1986.",
    'description' => "Espèces et variétés : on connaît 28 espèces de Livistona. L australis, le chou palmiste, à la croissance très lente, peut résister à -8°C. Il se cultive en pleine terre sur la Côte d'Azur et dépasse 15 m de haut. L rotundifolia, aux pinnules très nombreuses, et aux feuilles presque rondes, peut dépasser 10 m dans une serre. Plus frileux , il ne doit pas être exposé à moins de 13°C. Humidité de l'air : le livistona supporte bien l'atmosphère de nos intérieurs. Passez une éponge humide sur les feuilles une fois par semaine. Longévité : au moins 5 ans dans la maison, à condition de ne pas dépasser 15°C en hiver.",
    'product_code' => 'PI-LI-',
    'price' => 3249,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/livistona.jpg'
  ], 
  [
    'name' => 'Beaucarnéa',
    'details' => " Il préfère les expositions ensoleillées et les sols drainés et frais, mais ne supporte en revanche pas les excès d'humidité.",
    'description' => "Très bel arbre d'intérieur, le Beaucarnéa apportera une touche de décoration sophistiquée dans votre salon. Cet arbre est doté d'une apparence originale, car il dispose d'un tronc en pied d'éléphant presque sphérique à la base duquel se détachent plusieurs ramifications, surmontées de feuilles longues et étroites, retombantes, semblant parfois friser. Peu contraignant, le Beaucarnéa se contente d'un faible volume de terre, ce qui lui permet de vivre longtemps en pot ou en jardinière. Le beaucarnea préfère les expositions ensoleillées et les sols drainés et frais, mais ne supporte en revanche pas les excès d'humidité.",
    'product_code' => 'PI-BE-',
    'price' => 2999,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/beaucarnéa.jpg'
  ],  
  [
    'name' => 'Zamioculcas',
    'details' => "Vaporisez la plante 2 fois par semaine durant l'hiver",
    'description' => "Cette étrange plante vivace rhizomateuse à tiges charnues fait partie de la famille des aracées.",
    'product_code' => 'PI-AZ-',
    'price' => 3349,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/zamioculcas.jpg'
  ],  
  [
    'name' => 'Pilea peperomioides',
    'details' => "Conservez cette plante à une température comprise entre 12°C et 22°C. Arrosez deux fois par semaine en été sans laisser de l'eau stagner dans la soucoupe.",
    'description' => "Le genre Pilea comporte environ 300 espèces originaires des régions tropicales et subtropicales. Pilea peperomioides est l'une de ces espèces, originaire du Sud-Ouest de la Chine. Cette plante vivace d'appartement atteint 30 cm de hauteur. C'est une plante remarquable par ses feuilles rondes, vert tendre, portées par de longues tiges et tournées vers le soleil. Cette plante est facile d'entretien à condition de la placer au soleil en évitant une lumière trop directe. Température minimum 12°C, maximum 22°C. Arrosage deux fois par semaine en été, une fois par semaine en hiver, sans laisser de l'eau stagnante dans la soucoupe. Donnez un engrais tous les quinze jours de juin à septembre.",
    'product_code' => 'PI-PP-',
    'price' => 3149,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/pilea_peperomioides.jpg'
  ],
  [
    'name' => 'Dracaena',
    'details' => "Bien que les feuilles soient coriaces, elles supportent mal les produits lustrants (surtout le gaz propulseur)., Utilisez une éponge ou un papier absorbant humide pour nettoyer le feuillage, qui se couvre vite de poussière.",
    'description' => "Arbuste formant une touffe, puis développant un tronc avec l'âge. Les plantes proposées dans le commerce sont souvent des troncs bouturés.",
    'product_code' => 'PI-DR-',
    'price' => 1549,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/dracaena.jpg'
  ],
  [
    'name' => 'Ficus Benjamina',
    'details' => "Eviter de placer le Ficus benjamina près d'une porte donnant sur l'extérieur ou d'une fenêtre très souvent ouverte. Cette plante supporte mal les courants d'air froid qui fond tomber les feuilles et sécher les brindilles les plus faibles. Le chauffage par le sol est mal toléré.",
    'description' => "Grand arbuste ou petit arbre touffu, aux branches arquées ou franchement retombantes.",
    'product_code' => 'PI-FB-',
    'price' => 7999,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/ficus_benjamina.jpg'
  ],
  [
    'name' => 'Monstera Deliciosa',
    'details' => " Plante ornementale de type tropical aux larges feuilles et à la croissance rapide. Facile à cultiver, solide. Ne nécessite pas le plein soleil mais une exposition lumineuse. Idéale pour les grandes pièces.",
    'description' => "Le Monstera Deliciosa est une vigoureuse vivace de type liane, de la famille des Aracées. C'est un faux philodendron, le nom vernaculaire Philodendron étant largement utilisé pour désigner les individus commercialisés comme plante ornementale d'appartement. Le Monstera deliciosa est une plante à la croissance rapide largement utilisée comme plante ornementale dans les régions tropicales et subtropicales.",
    'product_code' => 'PI-MD-',
    'price' => 7499,
    'quantity' => 1000,
    "categorie_code" => "PI",
    "image" => 'plants/monstera_deliciosa.jpg'
  ],
  [
    'name' => 'Plant de Basilic',
    'details' => "Le basilic grandes feuilles est une plante aromatique herbacée, annuelle. Ses feuilles sont grandes, vertes et très parfumées, au goût prononcé caractéristique, elles sont utlisées dans de nombreuses préparations culinaires, dans les sauces, potages, salades, omelletes, poissons ou en infusion.",
    'description' => "Consommer de préférence les feuilles fraîches, vous pouvez aussi les faire sécher ou les congeler, mais elles perdrons de leur arôme.",
    'product_code' => 'PA-BA-',
    'price' => 395,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/basilic.jpg'
  ],
  [
    'name' => 'Plant de Thym commun',
    'details' => "Très aromatique, particulièrement lorsqu'il a poussé dans un sol aride.",
    'description' => "Le thym ordinaire est une des plantes aromatiques les plus utilisées, notamment dans les 'bouquets garnis'. Vivace, sa végétation forme un sous-arbrisseau touffu, aux petites feuilles allongées, très parfumées. Au printemps, fleurs roses regroupées en épis serrés à l'extrémité des rameaux. Les feuilles et fleurs sont utilisées dans les soupes, sauces, ragoûts, avec les légumes, grillades, poissons, également en infusion.",
    'product_code' => 'PA-TH-',
    'price' => 595,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/thym_commun.jpg'
  ],
  [
    'name' => 'Plant de Ciboulette',
    'details' => "Retaillez régulièrement l'ensemble de la plante pour favoriser la repousse de jeunes feuilles tendres et parfumées.",
    'description' => "Fait partie des 'fines herbes'. Cette plante bulbeuse vivace, aux feuilles fines, rondes et creuses, est très odorantes au froissement. A utiliser de préférence fraîche pour parfumer salades, crudités, omelettes, fromage blanc etc…. Fleurs, rose violacée, en ombelles sphériques qu'il est préférable de supprimer.",
    'product_code' => 'PA-CI-',
    'price' => 595,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/ciboulette.jpg'
  ],
  [
    'name' => 'Plant de Romarin',
    'details' => "Très aromatique, particulièrement utilisé pour les grillades.",
    'description' => "Plante très aromatique, le romarin forme une touffe buissonnante, érigée, aux feuilles de 3 à 5 cm de long, coriaces, blanchâtres dessous, au printemps fleurs bleues qui attirent les abeilles. Les rameaux prélevés avant floraison sont généralement plus parfumés, utilisation pour aromatiser les poissons, grillades, sauces et légumes.",
    'product_code' => 'PA-RO-',
    'price' => 595,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/romarin.jpg'
  ],
  [
    'name' => 'Plant de Menthe verte',
    'details' => "Cueillez les feuilles au fur et à mesure des besoins, de préférence le matin.",
    'description' => "La menthe verte est une plante aromatique, vivace, vigoureuse, aux racines traçantes, ses feuilles sont ovales, vertes, dentées, aux nervures profondes. Saveur douce, les feuilles, subtilement parfumées sont utilisées dans les salades de fruits, le taboulé, les sauces et en infusion.",
    'product_code' => 'PA-MV-',
    'price' => 599,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/menthe_verte.jpg'
  ],
  [
    'name' => 'Plant de Persil plat',
    'details' => "Très parfumé, à consommer frais, sec il perd une partie de sa saveur.",
    'description' => "Le persil commun, ou simple, est l'une des plantes condimentaires les plus appréciées. Il forme une touffe herbacée à végétation bisannuelle, ses feuilles, découpées, plates, de couleur vert foncé sont très parfumées. Le persil se consomme cru pour parfumer les salades, les viandes, les farces ou les sauces, il est également utilisé dans les bouquets garnis.",
    'product_code' => 'PA-PP-',
    'price' => 595,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/persil_plat.jpg'
  ],
  [
    'name' => 'Plant de Laurier sauce',
    'details' => "Son feuillage persistant, vous permet de prélever toute l'année les feuilles au fur et à mesure de vos besoins.",
    'description' => "Arbuste aromatique de grande végétation aux feuilles ovales, très parfumées lorsqu'on les froisse, fleurs jaunes en mai. Les feuilles de laurier sauce entrent dans la composition du 'bouquet garni', elles sont utilisées fraîches ou sèches, uniquement cuites, pour parfumer les sauces, ragouts, pots au feu ou courts-bouillons, également pour réaliser des infusions.",
    'product_code' => 'PA-LS-',
    'price' => 950,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/laurier_sauce.jpg'
  ],
  [
    'name' => 'Plant de Sauge officinale',
    'details' => "Feuilles fortement aromatiques, plus parfumées sèches.",
    'description' => "La sauge officinale est une plante à souche ligneuse aux feuilles allongées, vert-grisâtre, très odorantes, fleurs bleu-lilacé en grappes. Récoltez le feuillage de préférence avant la floraison, vous les utiliserez pour parfumer sauces, poissons, farces, légumes et viandes blanches.",
    'product_code' => 'PA-SO-',
    'price' => 595,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/sauge_officinale.jpg'
  ],
  [
    'name' => "Plant d'Estragon",
    'details' => "Fait partie des fines herbes, aromatique à odeur caractéristique.",
    'description' => "L'estragon fait partie des 'fines herbes'. Plante vivace aromatique, à végétation buissonnante, les tiges dressées portent des feuilles plates, étroites, peu épaisses à l'odeur caractéristique. On l'utilise frais pour parfumer salades, sauces, omelettes, il est possible de le conserver dans l'huile ou le vinaigre. L'hiver, aucune partie aérienne ne subsiste.",
    'product_code' => 'PA-ES-',
    'price' => 595,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/estragon.jpg'
  ],
  [
    'name' => 'Plant de Sarriette vivace',
    'details' => "Très parfumée, goût plus relevé que la sarriette commune.",
    'description' => "La sarriette vivace est une plante aromatique, herbacée, rustique, aux petites feuilles étroites, très odorantes, floraison de juillet à octobre en épis blancs ou roses. Cueillez de préférence les feuilles le matin, elles vous serviront, à parfumer salades, grillades et légumineuses, également pour réaliser des infusions.",
    'product_code' => 'PA-SV-',
    'price' => 595,
    'quantity' => 1000,
    "categorie_code" => "PA",
    "image" => 'plants/sarriette_vivace.jpg'
  ],
];

  // [
  //   'name' => '',
  //   'details' => "",
  //   'description' => "",
  //   'product_code' => '',
  //   'price' => '',
  //   'quantity' => '1000',
  //   "categorie_code" => "PA",
  //   "image" => 'plants/.jpg'
  // ],

    foreach($products as $key => $product) {

      $category = Category::where('category_code', $product['categorie_code'])->get(['id']);

      // Product::create(
      //   [
      //     'name' => $product['name'],
      //     'details' => $product['details'],
      //     'description' => $product['description'],
      //     'product_code' => $product['product_code'] . $key,
      //     'price' => $product['price'],
      //     'quantity' => $product['quantity'],
      //   ]
      //   )
      //   ->categories()->attach($category)
      //   ->pictures()->create([
      //     'title' => $product['name'],
      //     'link' => $product['image']
      //   ])
      //   ->save();

      $res_product = Product::create([
        'name' => $product['name'],
        'details' => $product['details'],
        'description' => $product['description'],
        'product_code' => $product['product_code'] . $key,
        'price' => $product['price'],
        'quantity' => $product['quantity'],          
      ]);
      $res_product->categories()->attach($category);
      $res_product->pictures()->create([
        'title' => $product['name'],
        'link' => $product['image']
      ]);
      $res_product->save();

    }

        // Product::factory()
        // ->count(20)
        // ->create()
        // ->each(function($product, $i) {
        //     $category = Category::inRandomOrder()->first();

        //     $product->pictures()->create([
        //         'title' => $product->name,
        //         'link' => 'default/no_image.png'
        //     ]);

        //     $product->product_code = $category->category_code . '-00' . $i++;

        //     $product->categories()->attach($category);

        //     $product->save();
        // });
    }
}
