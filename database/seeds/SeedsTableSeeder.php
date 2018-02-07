<?php

use Illuminate\Database\Seeder;

class SeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Dragon Langerie Bush Wax Bean',
            'latin_name' => 'Phaseolus vulgaris',
            'type' => 'legume',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/277.jpg',
            'description' => 'Wax beans were developed in the 1830s. Open-pollinated. Also known as Dragon’s Tongue. Tasty attractive 19th-century heirloom hails from the Netherlands. Compact stocky bushes bear abundant purple-violet flowers followed by flat 6" creamy yellow pods mottled with purple tiger stripes. Sunlight helps the colors become vivid, so plant farther apart in the row than normal bean spacing so interior sets develop good color. Crisp, stringless and amazingly juicy when eaten fresh. Cook or market promptly after picking; turns rubbery and loses snap when stored. Not recommended for freezing. Loses purple coloration in cooking. Seed purplish brown with blue stripes.',
            'days_to_harvest' => '57',
            'instructions' => 'Legumes have moderate fertility needs. Excessive nitrogen may induce some varieties to develop vines in moist hot weather. Tender, will not survive frost. Plant 3–4 seeds/ft in rows 24–30" apart. Pick frequently for maximum yields, but avoid disturbing foliage in wet weather to prevent spread of fungal diseases. White-seeded beans usually don’t germinate as well as dark-seeded. Minimum germination soil temperature 60°. Optimal range 60–80°. Optimal temperature 77°. Emergence takes 16 days at 59°; only 8 days at 77°. Produce 97% normal seedlings at 77°, but only 47% at 86°. Wider spacing reduces likelihood of SC (white mold). Don’t disturb wet foliage.',
            'pestdisease' => 'Anthracnose, Bacterial Brown Spot, Common Bean Mosaic Virus, Curly Top Virus, Downy Mildew, Halo Blight, NY 15 Mosaic Virus, Powdery Mildew, Pod Mottle Virus, Rust, Sclerotina',
            'saving' => '',
            'source' => 'https://www.fedcoseeds.com/seeds/seeds_images/277.jpg',
        ]);


            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Bleu de Solaize Leek',
            'latin_name' => 'Allium porrum',
            'type' => 'allium',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/2425.jpg',
            'description' => 'Open-pollinated. This hard-to-find French heirloom is so named because its dark green leaves sometimes develop a tinge of blue during cold spells. Hardy fat medium-long shanks with mild flavor good in soups. Dates back to the 19th century. Adam Tomash and June Zellers have successfully overwintered it in Zone 5 and trialer Donna Dyrek in Zone 4 with only straw mulch for protection.',
            'days_to_harvest' => '57',
            'instructions' => 'Start indoors in Feb. or March and transplant out in spring almost as soon as the ground can be worked. Set 6–12" apart in trenches in well-dug beds with generous quantities of organic matter. Avoid transplanting next to grass strips; slugs love to dine on tiny allium seedlings. Irrigate seedlings whenever the topsoil dries out. Early leeks have tall shanks above ground and should be harvested before severe frosts. Hardier leeks have broader, shorter shanks and will hold till November. Leeks brought into the root cellar will survive almost all winter if heeled into soil. Minimum germination temperature 50°, optimum range 60-70°, optimal temp 68°. Emergence 13 days at 50°, only 5 days at 68°, 99% normal seedlings at 68°.',
            'pestdisease' => 'Purple Blotch, Pink Root',
            'saving' => 'Leek seed is short-lived. Retest 1-year-old seed before using, and discard anything older.  ',
            'source' => 'https://www.fedcoseeds.com/seeds/seeds_images/277.jpg',
        ]);

            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Tiger Eye Dry Bean',
            'latin_name' => 'Phaseolus vulgaris',
            'type' => 'legume',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/2425.jpg',
            'description' => 'Open-pollinated. The first time I cooked up a mess of Dolloff beans I was hooked: rich, substantial, meaty—everything I want in a bean. I was not surprised to learn this variety has been cultured for centuries in the Northeast. Seeds of Renewal, a Wabanaki agriculture project in Vermont, added it to their listing in 2014. Not long after, Leigh and Phillip Hurley gave CR seeds of the bean they’d put into circulation in the Seed Savers Network in the ’80s after collecting it in West Burke, Vermont. Named after Roy Dolloff of Burke Hollow, who’d selected for abundant yields of dry beans in cool short seasons.  Prior to full maturity they make tasty green or shelly beans; at shell stage the beans are light salmon pink with darker speckles. It’s worth waiting for the light chestnut-brown dry beans, which are wide and flat like limas. Dolloff got CR’s attention in his hot arid 2016 trials when it was harvestable on Sept. 6, only two days later than bush Tiger Eye. In 2017 he sowed it on May 19 and 20, five or six days earlier than in 2016, yet it was about a week later in this year’s colder wetter season. Those who have trouble maturing dry pole beans in challenging seasons such as this will find Dolloff the closest thing to a cinch.',
            'days_to_harvest' => '90',
            'instructions' => 'In conditions of high nitrogen fertility some bush beans may develop vines in moist hot weather. Tender, will not survive frost. Plant 3–4 seeds/ft in rows 24–30" apart. Pick frequently for maximum yields, but avoid disturbing foliage in wet weather to prevent spread of fungal diseases.  Harvest shell beans when the beans are plump inside pods. For dry beans allow pods to dry on the vine until pressing the beans with your fingernail leaves no indentation. If heavy rains threaten just before maturity, pull plants by the roots and hang them in a dry place to finish or pick pods, shell and finish drying indoors.',
            'pestdisease' => '',
            'saving' => '',
            'source' => '',
        ]);

            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Bulls Blood Beet',
            'latin_name' => 'Beta vulgaris',
            'type' => 'taproot',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/2425.jpg',
            'description' => 'Open-pollinated. Prized for its spectacular leaves, not its rough flattened globe-shaped roots. Runaway winner of the 26 varieties in our beet greens trial years back, sweet and nutty with never a hint of oxalic aftertaste, it again received high praise from our tasters more recently. Also a winner in appearance, with large glossy reddish-purple leaves. No bull, it holds quality all summer, with color intensifying as it grows, especially under cool conditions in fall or under winter cover. Bull’s Blood is Eliot Coleman’s red leaf of choice for winter harvest salad mixes (see p. 230 of The Winter Harvest Handbook). Old variety; its name hints of 19th-century origins when beets were known as blood turnips. Selected around 1840 from the French variety Crapaudine for darkest-colored leaves.',
            'days_to_harvest' => '60',
            'instructions' => 'Hardy and easy to grow. Can be sown almost as soon as ground can be worked. Thin by harvesting greens with baby beets. Beets left to mature to full size should be at least 3" apart.  Minimum germination temperature 40°, optimal range 60–85°, optimal temperature 77°. Emergence takes 17 days at 50°, 10 days at 59°, 5 days at 77°, highest % of normal seedlings at 77°.',
            'pestdisease' => 'Cercospora Leaf Spot',
            'saving' => '',
            'source' => '',
        ]);


            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Red Cored Chantenay Carrot',
            'latin_name' => 'Daucus carota',
            'type' => 'taproot',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/2058.jpg',
            'description' => 'Open-pollinated. According to William Woys Weaver, this heirloom originated in France around 1879 and “needs no improvement.” Produces 5–7" thick red-orange roots that have had excellent carroty flavor in our September taste tests. Dependable performer does well in heavy soils. The storage carrot of choice for Jay and Polly Armour of Four Winds Farm in Gardiner, NY. Devoted customers at their monthly winter markets esteem its taste.',
            'days_to_harvest' => '70',
            'instructions' => 'Very hardy. Early carrots can be sown by late April. Can take up to 3 weeks to germinate; keep rows from drying out for faster emergence. Sow carrots for winter storage in mid-late June. Thinning is critical: At 3" high thin to ½" apart, at 6" thin again to 1" apart. Minimal germination temperature 40°, optimal range 60–85°, optimal temperature 80°. Emergence takes 17 days at 50°, 10 days at 59°, 6 days at 77°, 48% normal seedlings at 41°, 96% normal at 68°.

',
            'pestdisease' => 'Alternaria Leaf Spot, Cercospora Leaf Spot, Pythium. Alternaria shows up first on the oldest foliage as brown-black spots edged with yellow. Foliage blackens and shrivels as it develops and spreads. Maintaining a good crop rotation is the best preventive.',
            'saving' => '',
            'source' => '',
        ]);


            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Painted Serpent Long-Fruited Cucumber',
            'latin_name' => 'Cucumis melo var. flexuosus',
            'type' => 'cucumber',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/1388.jpg',
            'description' => 'Open-pollinated. Bite into the snake that doesn’t bite back. Also known as Armenian Cucumber or Snake Melon, native to Armenia and brought to Italy in the 15th century. William Woys Weaver says, “This is one of the oldest of our heirlooms, yet one of the most neglected by our gardeners,” oft exhibited but seldom eaten. Yet its flavor surpasses that of cucumbers, excelling in salads and stir-fries without bitterness or burps. Slender slightly fuzzy flexuous fruits delicately coil like a serpent with alternate light and dark green stripes. Culture like the melon it is, starting indoors in individual pots and transplanting into a low tunnel. Will grow up to 30" but best eaten at 8–18". Straighter if trellised. Never grew well on CR’s central Maine clay, but a prolific producer in his sandy Colrain, Mass., soil, beginning as early as July 26 one warm, dry season.',
            'days_to_harvest' => '55',
            'instructions' => 'May be started indoors for early production, or direct-seeded. Very tender, will not survive frost. Direct seed 3" apart thinning to 1 foot apart in rows 4-6 feet apart or 6 per mound in hills 4 feet apart thinning to 3 best plants. Transplant 1 foot apart in rows 4-6 feet apart. Cucumbers require good fertility and regular rain or irrigation for abundant yields. Without adequate water, fruits will be misshapen and bitter.  Combat striped cucumber beetles by handpicking early AM when the dew makes them sluggish, or use floating row covers, removing when cukes flower. Cucumber beetles are the vector for BW. Pick cukes frequently for best production, or else the plants shut down. Make sure to remove blimps to the compost pile.  Using compost in conjunction with row covers (rather than either alone) increased cucumber yields at the University of Michigan.  Parthenocarpic varieties can set fruit without being pollinated, an advantage in cold cloudy summers. Gynoecious varieties produce almost exclusively female flowers for uniformity and high yields.  Do not sow in cold soil. Minimum germination temperature 60°, optimal range 65–95°, optimal temperature 90°. Emergence takes 13 days at 59°, 6 days at 68°, 4 days at 77°.',
            'pestdisease' => 'Alternaria Leaf Spot, Anthracnose, Bacterial Wilt, Cucumber Mosaic Virus, Cucumber Vein Yellow Virus, Downy Mildew, Powdery Mildew, Papaya Ring Spot Virus, Rust, Watermelon Mosaic Virus, Zucchini Yellows Mosaic Virus, Striped Cucumber Beetle',
            'saving' => '',
            'source' => '',
        ]);

            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'National Pickling Cucumber',
            'latin_name' => 'Cucumis sativus',
            'type' => 'cucumber',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/1226.jpg',
            'description' => 'Open-pollinated. Introduced in 1929, the result of a 5-year collaboration between the National Pickle Packers Association and the Michigan Agricultural Experiment Station. Suitable for both small pickles and dills. Not quite as early as Northern Pickler, but tending to hold quality over a longer season, the firm black-spined dark green fruits are usually quite sweet, rarely bitter. Plants are vigorous dependable producers. Resists CMV and scab.',
            'days_to_harvest' => '52',
            'instructions' => 'May be started indoors for early production, or direct-seeded. Very tender, will not survive frost. Direct seed 3" apart thinning to 1 foot apart in rows 4-6 feet apart or 6 per mound in hills 4 feet apart thinning to 3 best plants. Transplant 1 foot apart in rows 4-6 feet apart. Cucumbers require good fertility and regular rain or irrigation for abundant yields. Without adequate water, fruits will be misshapen and bitter.  Combat striped cucumber beetles by handpicking early AM when the dew makes them sluggish, or use floating row covers, removing when cukes flower. Cucumber beetles are the vector for BW. Pick cukes frequently for best production, or else the plants shut down. Make sure to remove blimps to the compost pile.  Using compost in conjunction with row covers (rather than either alone) increased cucumber yields at the University of Michigan.  Parthenocarpic varieties can set fruit without being pollinated, an advantage in cold cloudy summers. Gynoecious varieties produce almost exclusively female flowers for uniformity and high yields.  Do not sow in cold soil. Minimum germination temperature 60°, optimal range 65–95°, optimal temperature 90°. Emergence takes 13 days at 59°, 6 days at 68°, 4 days at 77°.',
            'pestdisease' => 'Alternaria Leaf Spot, Anthracnose, Bacterial Wilt, Cucumber Mosaic Virus, Cucumber Vein Yellow Virus, Downy Mildew, Powdery Mildew, Papaya Ring Spot Virus, Rust, Watermelon Mosaic Virus, Zucchini Yellows Mosaic Virus, Striped Cucumber Beetle',
            'saving' => '',
            'source' => '',
        ]);


            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Rosa Bianca Eggplant ',
            'latin_name' => 'Solanum melongena',
            'type' => 'eggplant',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/3691.jpg',
            'description' => 'Open-pollinated bicolor Italian heirloom. Alan LePage calls it “the best eggplant in the universe,” with a creamy consistency and delicate flavor. “Head and shoulders above the rest,” adds Tomash, “like eggplant pudding.” “A plump beauty that likes the Michigan climate,” chimes in Anne Elder. Gorgeous fruits, white with lavender streaking down the side, about 3–4" across and 5" long, narrow at the top and widening with indentations almost like folds in draped fabric. Fruits average 2 lb, max out at 4 lb, LePage’s highest-yielding eggplant. Rosa needs to be coddled, particularly in the northern half of New England. Seed needs alternating temperatures to break dormancy: warm days (preferably 80s), cooler nights (around 70°).',
            'days_to_harvest' => '88',
            'instructions' => 'Days to maturity are from date of transplanting, not seeding.  Despite some help from a changing climate, growing eggplant remains a challenge in the north. We recommend raised beds, row covers and plastic or IRT mulch. Our selections are the most reliable producers we’ve found, yet some seasons even our skilled trialers get only sparse production of ripe fruits some seasons.  Minimum germination temperature is 60°, optimal range 75–90°, optimal temperature 85°. Some varieties require fluctuating day and night temperatures. Emergence is 13 days at 68°, 8 days at 77° and only 5 days at 86°. Only 21% normal seedlings at 68°, compared to 60% normal at 86°.',
            'pestdisease' => 'Verticillium, Colorado Potato Beetle',
            'saving' => '',
            'source' => '',
        ]);



            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Benning’s Green Tint Patty Pan Squash',
            'latin_name' => 'Cucurbita pepo',
            'type' => 'squash',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/1590.jpg',
            'description' => 'Open-pollinated. Also known as Farr’s White Bush, developed by Charles N. Farr and introduced in 1914 by F.W. Bolgiano & Co. of Washington, DC. Farr selected for the uniform scallops and the greenish-cream coloring in the younger stages of the fruits. Rated by many as the best-tasting summer squash, especially if picked small at 2–3" diameter when they are especially fine-textured and tender. ',
            'days_to_harvest' => '55',
            'instructions' => 'Tender, will not survive frost. Sow in hills 4 feet apart, 5 seeds/hill. Thin to 2–3 best plants. Floating row covers, especially when used in low tunnels, provide extra heat and can hasten maturity by 1 to 2 weeks. Male blossoms typically precede females by about a week. Females have a bulge at the base of the blossom, an early stage of the fruit forming. In early summer, a combination of cool, cloudy weather and declining bee populations may result in poor pollination causing low yields. Mites and colony collapse disorder have wiped out a high percentage of wild and domesticated honeybee colonies in the last 20 years, creating a real crisis for cucurbit growers. Don’t leave oversized squash on the vines. It shuts down production. Make succession plantings to ensure harvest through the entire frost-free season, insurance against powdery mildew and other diseases tiring old plants. Minimum germination temperature 60°, optimal temperature range 70–90°, optimal temperature 85°. Days to maturity are from direct seeding.  Unless you want to stuff them, for best flavor pick squash when they are small. Squash blossoms are a delicacy. Harvest male blossoms when fully open for salads or stuffing.',
            'pestdisease' => 'Powdery Mildew, Watermelon Mosaic Virus, Zucchini Yellows Mosaic Virus, Striped Cucumber Beetle, Squash Bug, Squash Vine Borer, Bacterial Wilt',
            'saving' => '',
            'source' => '',
        ]);



            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Tetragonia, aka-New Zealand Spinach',
            'latin_name' => 'Tetragonia tetragonioides',
            'type' => 'greens',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/2592.jpg',
            'description' => 'Open-pollinated. Captain Cook’s voyagers noted it in 1770 on the shores of Queen Charlotte’s Sound in New Zealand. Doesn’t look like a true spinach or taste like one, though some find it an acceptable substitute because it stands through the hot summer when true spinach bolts. Chefs have discovered that it is a very good green baked, especially in lasagna. Soak the nut-like seeds before sowing to speed and improve germination. Be patient and don’t give up too soon. Only a few plants are needed to fill in your patch because Tetragonia sprawls. Irrigate frequently and pick often to keep the leaves tender and succulent and to avoid yellowing. Will withstand frosts to the low 20s.',
            'days_to_harvest' => '52',
            'instructions' => '',
            'pestdisease' => '',
            'saving' => '',
            'source' => '',
        ]);



            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Burgess Buttercup/Kabocha Winter Squash',
            'latin_name' => 'Cucurbita maxima',
            'type' => 'squash',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/1628.jpg',
            'description' => 'Open-pollinated. New England’s favorite winter squash, enjoyed for its sweet deep-orange flesh. Fruits, with an acorn-shaped button on the blossom end and flattened shoulders, average 3–4 lb with about 4 per hill. Stem is well dried when ripe.
The original buttercup strain showed up in 1925 as a chance cross between Quality and Essex Hybrid in the trial garden at North Dakota Agricultural Experiment Station. After further selection by famous seedsman Albert Yaeger, Oscar H. Will of Bismarck introduced it in his 1931 catalog.

Alan Kapuler has said, “If you pick only one squash to grow, this is it.” Jean Kennedy of Little Red Barn Produce in Walton, OR, agrees: “This squash is not getting the attention others are and it is waaay better! Its texture is perfectly smooth, it has just the perfect sweetness and its flavor isn’t overly squashy. Could be used in any recipe for dessert or dinner.” Gene’s favorite winter squash: “Looking for the best combination of flavor, texture and yield, Burgess always comes out on top.”',
            'days_to_harvest' => '95',
            'instructions' => 'Buttercup squashes, the main type grown in the Northeast, account for about 19% of New England winter squash sales. Classic buttercups have squared-off shoulders, not round, and a protuding cup on the blossom end. Kabocha is a form of Japanese ‘pumpkin.’ Kabochas look like buttercups without the protruding cup. May be direct-seeded or transplanted. Direct seeding: Sow 4–5 seeds per hill when weather has warmed after danger of frost. Allow 4–6 feet between hills. Thin to 3 best plants. Use row covers and low tunnels to hasten maturity and reduce insect damage. Transplanting: Start indoors three weeks before setting out. Do not disturb the roots. Transplant bush varieties 18" apart, vining varieties 30" apart. Tender, not frost hardy. Heavy nitrogen feeders. Excessive heat and/or drought can prevent blossom set, reduce yields. Winter squash can take one or two light frosts on the vine. To improve flavor and storage, field cure for at least 10 days after harvest, covering if hard frost threatens. Store under proper conditions, at least 50° and 60–70% relative humidity in a place with good air circulation. Do not pile up squash. Inspect periodically and be sure to use damaged, stemless or small fruit first. Acorns have the shortest storage time before getting stringy, followed by delicatas, buttercup/kabochas. Minimum germination temperature 60°, optimal temperature range 70–90°, optimal temperature 85°. Green in stems signifies immature fruit. Fat round stems turn corky and woody when the squash is ripe. Fruits tend to be medium to large and often have bumpy surfaces and button-ends. ',
            'pestdisease' => 'Striped Cucumber Beetle, Squash Bug, Squash Vine Borer, Powdery Mildew, Bacterial Wilt',
            'saving' => '',
            'source' => '',
        ]);



            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Feher Ozon Sweet Pepper',
            'latin_name' => 'Capsicum annuum',
            'type' => 'pepper',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/3776.jpg',
            'description' => 'Open-pollinated Hungarian heirloom. My first introduction to this extraordinary pepper was in a jar…dried and ground to a wonderfully sweet paprika. I was intrigued. The field reports didn’t even consider this aspect, instead extolling Feher Ozon for incredible productivity: up to two dozen 3x4½" pointed light yellow fruits per plant. One trialer fed her entire neighborhood with these sweet juicy and flavorful peppers. If you let any turn red, they can be dried for a delicious paprika. The beauty of this pepper as it turns is noteworthy. Beginning with the faintest red overtones blending into its yellow background, the red blush grows more pronounced as it matures. ',
            'days_to_harvest' => '90',
            'instructions' => 'Very tender, will not tolerate frost, dislike wind, will not set fruit in cold or extremely hot temperatures or in drought conditions. Start indoors in March or April. Set out in June. Black plastic highly recommended. Row cover improves fruit set in windy spots. Pick first green peppers when they reach full size to increase total yield significantly. Green peppers, though edible, are not ripe. Peppers ripen to red, yellow, orange, etc.  Minimum germination soil temperature 60°, optimal range 68-95°, optimal temperature 80°. Emergence is 13 days at 68°, only 8 days at 77 or 86°. 70% normal seedlings at 59° increases to 98% at 77°.',
            'pestdisease' => 'Bacterial Leaf Spot, Cucumber Mosaic Virus, Tobacco Mosaic Virus',
            'saving' => 'Use only the first fruits for seed; allow only 3–4 fruits per plant to grow and remove all others. Fewer fruits = larger seeds = greater seed viability. Later fruits often have germination rates of only 60%.',
            'source' => '',
        ]);



            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Anaheim Hot Pepper',
            'latin_name' => 'Capsicum annuum',
            'type' => 'pepper',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/2425.jpg',
            'description' => 'Open-pollinated. Also known as California Chile and Chile Verde. Cultivated for canning in a factory near Anaheim around 1900. Anaheim is the pepper typically used for chiles rellenos. 7" long fruits tapering to a point turn from dark green to red at maturity. Pungent, but not particularly hot. 900–2,500 Scovilles.  Chiles have been consumed in Mexico for more than 5,000 years. In the U.S. hot peppers have increased dramatically in popularity.

Capsaicin compounds cause most of the heat in peppers. Warm nighttime temperatures stimulate maximum development of capsaicins and increase pungency levels. Pungency is expressed in Scoville units, after Wilbur Scoville, an Englishman who devised the method used for eighty years to measure the heat in peppers.

Some Scoville ratings for general categories are: sweet bell, Banana and Pimiento peppers 0, Ancho & Poblano 1–2k, Anaheim 0.5–2.5k, Bulgarian Carrot 2.5k, Jalapeño 2.5–8k, Chipotle 5–8k, Long thick Cayenne 6–8.5k, Hot Wax 5–9k, Serrano 8–22k, Aji & Cayenne 30–50k, Super Chili 40–50k, Thai 50–100k, Orange Habanero/Scotch Bonnet 150–325k, commercially available pepper spray for self-defense 2–3M, police-grade spray 5.3M, capsaicin 15–16M.

If you overdose on hot peppers, plain carbs like bread, rice or tortillas are better than any liquid at removing the heat from your mouth. Handle hot peppers with caution; capsaicin is highly alkaloid and can burn skin.',
            'days_to_harvest' => '78',
            'instructions' => 'Very tender, will not tolerate frost, dislike wind, will not set fruit in cold or extremely hot temperatures or in drought conditions. Start indoors in March or April. Set out in June. Black plastic highly recommended. Row cover improves fruit set in windy spots. Pick first green peppers when they reach full size to increase total yield significantly. Green peppers, though edible, are not ripe. Peppers ripen to red, yellow, orange, etc.

Minimum germination soil temperature 60°, optimal range 68-95°, optimal temperature 80°. Emergence is 13 days at 68°, only 8 days at 77 or 86°. 70% normal seedlings at 59° increases to 98% at 77°.',
            'pestdisease' => 'Bacterial Leaf Spot, Cucumber Mosaic Virus, Tobacco Mosaic Virus',
            'saving' => 'Use only the first fruits for seed; allow only 3–4 fruits per plant to grow and remove all others. Fewer fruits = larger seeds = greater seed viability. Later fruits often have germination rates of only 60%.',
            'source' => '',
        ]);


            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Vates Collards',
            'latin_name' => 'Brassica oleracea',
            'type' => 'greens',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/3441.jpg',
            'description' => 'Open-pollinated. Because of their cold hardiness, collards were a miracle crop that sustained many southern folks through the winters during the Great Depression. Vates is the acronym for Virginia Truck Experiment Station, a hotbed of collard research from 1907-1967. Introduced in the 1930s, this was probably the best-known of all the many developed there. Large upright 1½–2 feet plants give generous harvests of dark green thick crumpled leaves with a mild cabbage-like flavor. Will overwinter in high tunnels in our climate. Cold-hardy through at least part of the Maine winter.',
            'days_to_harvest' => '60',
            'instructions' => 'Hardy. Require warm temperatures to germinate (68-86° ideal) but need 60s during seedling stage for optimal growth; higher temperatures make seedlings leggy. Heavy feeders; for best growth, need regular moisture and 2–3 foot spacing. Have done well for us succeeding onions and garlic in beds. Cauliflower and broccoli are damaged by hard frosts, especially in spring.  Young sproutlings make good microgreens.  To avoid flea beetles, plant in July for September maturity. Collards are excellent microgreen crops.',
            'pestdisease' => 'Black Rot, Bacterial Speck, Downy Mildew, Fusarium Yellows, Tipburn, Cabbage Looper, Diamondback Moth, Imported Cabbageworm, Flea Beetle, Cabbage Root Maggot',
            'saving' => '',
            'source' => '',
        ]);


            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Golden Gopher Muskmelon',
            'latin_name' => 'Cucumis melo',
            'type' => 'melon',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/981.jpg',
            'description' => 'Open-pollinated. This is one gopher I won’t be without. Each year it reminds me just how good a melon can be. Though, as usual, they didn’t look too imposing from the outside, the two I harvested on Sept. 3 blew me away with their flavor. The 6" heavily ribbed fruits averaging 2½ lb feature deep orange flesh of superb eating quality. Gopher’s Honeydew parentage helps account for its high sugar content as well as its resistance to F. Developed by the University of Minnesota in the 1930s and introduced by Farmer Seed & Nursery Co. in 1939, saved from probable extinction by Glenn Drowns, discovered and multiplied by our trialer Jeanne Griffin, and popularized by Jack Kertesz at his MOFGA gardens. Called “Pop Open” melons because they sometimes split open when ripe. Very susceptible to PM. Muskmelons are usually heavily netted and deeply ribbed with larger seed cavities than cantaloupes. Percy opines that they are easier and require less heat to grow well than cantaloupes.',
            'days_to_harvest' => '85',
            'instructions' => 'Start indoors in early May (later if the spring is slow to warm) in plastic or peat pots, 2 or 3 seeds to a pot. Melons resent transplanting but will take if their roots are not disturbed.
Prepare hills in advance with liberal amounts of well-rotted manure or compost. Don’t place melons next to vigorous crawling plants like cucumbers, gourds or winter squash.
A cold start can permanently stunt growth, so wait for a warm spell after all danger of frost to transplant, usually between May 20th and June 20th. Water heavily and, if soil is dry, place a temporary hay mulch around plants until a soaking rain comes.
Melons are much more sensitive than squashes so use low tunnels with floating row covers that do not abrade plants. If you have sandy soil, check daily and irrigate when needed.
Use blue, black or clear plastic mulch between plants.
Use a foliar feeding program to speed ripening.
Remove row covers before buds open. Replace them when you don’t desire any more fruit to set.
To reduce rot loss, rotate ripening melons occasionally. To reduce mouse damage, place ripening melons on bricks.
Inspect your patch daily at ripening time. Check fruits for aroma and color and pull gently on those that appear to be ripe. Most muskmelons are ripe when the pressure causes them to slip from the vine. Harvest Galia, Charentais, Honeydews before full slip.
Enjoy an incomparable taste treat!',
            'pestdisease' => 'Striped Cucumber Beetle, Powdery Mildew, Bacterial Wilt',
            'saving' => 'Melon seed lives more than 10 years with proper storage. 18th- and 19th-century growers preferred to sow 4- to 10-year-old melon seed, believing that such seeds produced plants that spread less and fruits with a finer perfume.',
            'source' => '',
        ]);

            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Evergreen Hardy White Scallion',
            'latin_name' => 'Allium fistulosum',
            'type' => 'allium',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/2439.jpg',
            'description' => 'Open-pollinated. Also known as Nebuka, a perennial non-bulbing bunching onion. If overwintered in the ground, develops clumps of scallions in the spring that can be harvested or divided and replanted. A welcome treat in April, one of the first fresh foods. Heirloom from Japan originated in the 1880s. Resists PR and smut.',
            'days_to_harvest' => '65',
            'instructions' => 'Days to maturity are from date of transplanting. Can be direct-seeded, spring or fall. For a steady market crop, seed every two weeks all season.',
            'pestdisease' => 'Purple Blotch, Pink Root',
            'saving' => '',
            'source' => '',
        ]);

            DB::table('seeds')->insert([
            'active' => 'true',
            'name' => 'Alderman or Tall Telephone Shell Pea',
            'latin_name' => 'Pisum sativum',
            'type' => 'legume',
            'photo_url' => 'https://www.fedcoseeds.com/seeds/seeds_images/761.jpg',
            'description' => 'Open-pollinated.',
            'days_to_harvest' => '65',
            'instructions' => 'Peas are legumes with moderate fertility requirements. Avoid excess nitrogen: they can fix their own. Use Legume Inoculant as an aid. They prefer cool, moist weather and dislike dry heat. Sow as early as ground can be worked for best yields. All peas produce more when staked; varieties over 2½ feet must be supported. Use either Trellis Plus or chicken wire. Install support at planting time to avoid disturbing seedlings. Plant 8–10 seeds/ft on each side of supports in double rows. Set supports for rows 3 feet apart (5 feet if very tall varieties).

Young plants are very hardy but frost stops production at the blossom or pod stage. If you love peas as much as we do, try for a second crop in the fall. Timing is crucial, as peas ripen slowly in the cool of September, and frost will halt production. We recommend planting the first two weeks of July for a fall crop in central Maine. Warmer areas try later July. If the summer is hot, cool the soil with a hay mulch in advance of planting, or shade peas with tall crops to hold in soil moisture.

Peas are 25% sucrose by weight and lose nearly half their sugars within 6 hours at room temperature. That’s why they taste best grazed right off the vine. Keep cool and shell as soon as possible after picking for freezing.

Not well adapted to southern climates where the spring heats up too quickly. Pam Dawling in Virginia has great success with Sugar Ann but cannot grow the tall longer-season Sugarsnap in her climate. Smooth-seeded peas germinate better in colder soils than wrinkle-seeded peas, but are not as sweet. Minimal soil temperature for pea seed germination: 40°. Optimal range 50–75°, optimal temp 75°. Emergence takes 14 days at 50°, 9 days at 59°, only 6 days at 77°. Dawling suggests that forsythia flowering signals time to sow snap and snow peas.',
            'pestdisease' => 'Pea Enation Mosaic Virus, Powdery Mildew, Pea Streak Virus, Common Wilt',
            'saving' => '',
            'source' => '',
        ]);

    }
}
