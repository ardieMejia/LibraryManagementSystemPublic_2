<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $authors_id=DB::table('authors')->skip(0)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        // ---------- null test
        //        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        $subcategories_id=null;
        App\Book::insert([
            'ISBN' => null,
            'title' => "The Temporal Void",
            'details' => "The Temporal Void picks up after The Dreaming Void.

The Void was created by the Firstlife—the first beings to have existed in the galaxy—to reach the state of post-physical fulfilment. It is where Makkathran is situated. The people in the Void have psychic abilities such as \"farsight\" and the \"third hand\". The Void requires a tremendous amount of energy to sustain itself and the abilities it offers, which it acquires by expanding, consuming planets and star systems and converting them into energy. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(0)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "The Dreaming Void",
            'details' => "What was formerly believed to be a supermassive black hole at the centre of the Milky Way is revealed to be an artificial construct, known as the Void. Inside, there is a strange universe where the laws of physics are very different from those we know. It is slowly consuming the other stars of the galactic core—one day it will have devoured the entire galaxy. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(0)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "The Evolutionary Void",
            'details' => "Exposed as the Second Dreamer, Araminta has become the target of a galaxy-wide search by government agent Paula Myo and the psychopath known as the Cat, along with others equally determined to prevent, or facilitate, the pilgrimage of the Living Dream cult into the heart of the Void. An indestructible microuniverse, the Void may contain paradise, as the cultists believe, but it is also a deadly threat. For the miraculous reality that exists inside its boundaries demands energy, energy drawn from everything outside those boundaries: from planets, stars, galaxies, and everything that lives, for the Pilgrimage will trigger a super-massive expansion of the Void. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(1)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "Rogue Planet",
            'details' => "The story takes place a few years after the events of Star Wars: Episode I – The Phantom Menace. Young Anakin Skywalker chafes under his new life as a Jedi apprentice. He sneaks away from Obi-Wan Kenobi to participate in and gamble on deadly flying games. This is interrupted by a Blood Carver assassin. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(1)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "Garden of Eden",
            'details' => "The novel is fundamentally the story of five months in the lives of David Bourne, an American writer, and his wife Catherine. It is set mainly in the French Riviera, specifically in the Côte d'Azur, and in Spain. The story begins with their honeymoon in the Camargue, then moves to Spain, then back to France (at a \"long low rose-colored Provençal house where they had stayed before... in the pines on the Estérel side of la Napoule\" (within easy driving distance to Cannes). However, early in the book, Catherine seemed to change (from David's point of view -- the novel is entirely from his vantage). ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(0)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "Reality Dysfunction",
            'details' => "The novel is set in the 26th and 27th centuries. The opening chapters cover a period of some thirty years, with the bulk of the story set in the years 2610 and 2611 AD. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(0)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "The Naked God",
            'details' => "In The Reality Dysfunction, the presence of an energy-based alien lifeform during the death of a human on the colony world of Lalonde somehow 'jammed open' the interface between this universe and 'the beyond', an energistic vacuum where the souls of dead humans (and other races, although they inhabit different areas within that realm) have become trapped after death. They are able to cross back over into this universe and possess the living, gaining tremendous strength, agility and the ability to create and alter matter. They overrun the planet Lalonde in a matter of weeks and spread beyond to many other worlds and asteroid settlements. A failed attempt to conquer the planet Atlantis alerts the Edenists to the threat. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(2)->first()->id;
        $categories_id=DB::table('categories')->skip(3)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "American Pastoral",
            'details' => "American Pastoral is a Philip Roth novel published in 1997 concerning Seymour \"Swede\" Levov, a successful Jewish American businessman and former high school star athlete from Newark, New Jersey. Levov's happy and conventional upper middle class life is ruined by the domestic social and political turmoil of the 1960s during the presidency of Lyndon B. Johnson, which in the novel is described as a manifestation of the \"indigenous American berserk\". ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(3)->first()->id;
        $categories_id=DB::table('categories')->skip(2)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "IT",
            'details' => "It is a 1986 horror novel by American author Stephen King. It was his 22nd book, and his 18th novel written under his own name. The story follows the experiences of seven children as they are terrorized by an evil entity that exploits the fears and phobias of its victims to disguise itself while hunting its prey. \"It\" primarily appears in the form of 'Pennywise the Dancing Clown' to attract its preferred prey of young children. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(3)->first()->id;
        $categories_id=DB::table('categories')->skip(2)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "From A Buick 8",
            'details' => "The novel is a series of recollections by the members of Troop D, a state police barracks in western Pennsylvania. After Curtis Wilcox, a well-liked member of Troop D, is killed by a drunk driver, his son Ned begins to visit the barracks. The cops, the dispatcher and the custodian quickly take a liking to him. The troopers begin telling Ned about the \"Buick 8\" and its title. It is in some sense a ghost story in the way that the novel is about a group of people telling an old but unsettling tale. And while the Buick 8 is not a traditional ghost, it is indeed not of their world. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(1)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "Darwins Radio",
            'details' => "In the novel, a new form of endogenous retrovirus has emerged, SHEVA. It controls human evolution by rapidly evolving the next generation while in the womb, leading to speciation.
The novel follows several characters as the \"plague\" is discovered as well as the panicked reaction of the public and the U.S. government to the disease.",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(1)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "Blood Music",
            'details' => "In the novel, renegade biotechnologist Vergil Ulam creates simple biological computers based on his own lymphocytes. Faced with orders from his nervous employer to destroy his work, he injects them into his own body, intending to smuggle the \"noocytes\" (as he calls them) out of the company and work on them elsewhere. Inside Ulam's body, the noocytes multiply and evolve rapidly, altering their own genetic material and quickly becoming self-aware. The nanoscale civilization they construct soon begins to transform Ulam, then others. The people who are infected start to find that genetic faults such as myopia and high blood pressure get fixed. Ulam's eyesight, posture, strength, and intelligence are all improved. The infected can even have conversations with their noocytes, some reporting that the cells seem to sing. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(4)->first()->id;
        $categories_id=DB::table('categories')->skip(6)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "Operating Systems",
            'details' => "The third edition of Operating Systems has been entirely updated to reflect current core operating system concepts and design considerations. To complement the discussion of operating system concepts, the book features two in-depth case studies on Linux and Windows XP. The case studies follow the outline of the book, so readers working through the chapter material can refer to each case study to see how a particular topic is handled in either Linux or Windows XP. Using Java code to illustrate key points, Operating Systems introduces processes, concurrent programming, deadlock and indefinite postponement, mutual exclusion, physical and virtual memory, file systems, disk performance, distributed systems, security and more. New to this edition are a chapter on multithreading and extensive treatments of distributed computing, multiprocessing, performance, and computer security. An ideal up-to-date book for beginner operating systems readers.",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(2)->first()->id;
        $categories_id=DB::table('categories')->skip(3)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "Exit Ghost",
            'details' => "The plot centers on Zuckerman's return home to New York after eleven years in New England. The purpose of Zuckerman's journey, which he takes the week before the 2004 U.S. presidential election, is for him to undergo a medical procedure that might cure or reduce his incontinence. While in New York, Zuckerman meets Amy Bellette, whom he had last encountered during a visit to the writer E.I. Lonoff's house in December, 1956, as depicted in Roth's novel The Ghost Writer. Zuckerman also agrees to a housing swap with a young writing couple, Billy Davidoff and Jamie Logan, and quickly becomes attracted to Logan. In his hotel room at night, Zuckerman writes a play, He and She, composed of imagined conversations between him and Logan. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(2)->first()->id;
        $categories_id=DB::table('categories')->skip(3)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "nemesis",
            'details' => "Nemesis explores the effect of a 1944 polio epidemic on a closely knit, family-oriented Newark Jewish community of Weequahic neighborhood. The children are threatened with maiming, paralysis, lifelong disability, and death. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(2)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "The Martian",
            'details' => "In 2035, the crew of NASA's Ares 3 mission have arrived at Acidalia Planitia for a planned month-long stay on Mars. After only six sols, an intense dust and wind storm threatens to topple their Mars Ascent Vehicle (MAV), trapping them on the planet. During the hurried evacuation, an antenna tears loose and impales astronaut Mark Watney, a botanist and engineer, also disabling his spacesuit radio. He is flung out of sight by the wind and presumed dead. As the MAV teeters dangerously, mission commander Melissa Lewis has no choice but to take off without searching for Watney. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(0)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "Judas Unchained",
            'details' => "Robust, peaceful, and confident, the Commonwealth dispatched a ship to investigate the mystery of a disappearing star, only to inadvertently unleash a predatory alien species that turned on its liberators, striking hard, fast, and utterly without mercy. ",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);



        $authors_id=DB::table('authors')->skip(0)->first()->id;
        $categories_id=DB::table('categories')->skip(1)->first()->id;
        $subcategories_id=DB::table('subcategories')->skip(1)->first()->id;
        App\Book::insert([
            'ISBN' => null,
            'title' => "Neutronium Alchemist",
            'details' => "In The Reality Dysfunction, the presence of an energy-based alien lifeform during the death of a human on the colony world of Lalonde somehow 'jammed open' the interface between this universe and 'the beyond', an energistic vacuum where the souls of dead humans (and possibly other races) have become trapped after death. They are able to cross back over into this universe and possess the living, gaining tremendous strength, agility and the ability to create and alter matter. They overrun the planet Lalonde in a matter of weeks and spread beyond to the planets Atlantis and Norfolk and to the independent habitat Valisk, among others.",
            'authors_id' => $authors_id,
            'categories_id' => $categories_id,
            'subcategories_id' => $subcategories_id,
        ]);
    }
}
