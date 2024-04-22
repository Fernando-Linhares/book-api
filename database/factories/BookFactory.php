<?php

namespace Database\Factories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    private static int $less = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return $this->unicBook();
    }

    private function unicBook(): array
    {
        $books = $this->getListBooks();

        $book = $books[self::$less];

        self::$less++;

        return $book;
    }

    public function getAmount(): int
    {
        return $this->getListBooks()->count();
    }

    private function getListBooks(): Collection
    {
        return  collect([
            [
                'name' => 'No Country for Old Men',
                'resume' => "While out hunting, Llewelyn Moss finds the remnants of a drug deal gone wrong and takes off with $2 million. This puts him in the crosshairs of a relentless hitman named Anton Chigurh, who will stop at nothing to recover the money. As Sheriff Bell tries to track down Moss and protect him from Chigurh's wrath, he reflects on the changing nature of crime and violence in society.",
                'category_id' => 1
            ],
            [
                'name' => 'Pride and Prejudice',
                'resume' => "In Jane Austen's classic novel, Elizabeth Bennet navigates the complexities of love, class, and society in 19th-century England. When the wealthy and aloof Mr. Darcy arrives in town, he and Elizabeth clash initially, but as they overcome misunderstandings and prejudices, they find themselves drawn to each other against the backdrop of their social circles."
                ,'category_id' => 2
            ],
            [
                'name' => 'Dracula',
                'resume' => "Bram Stoker's iconic novel tells the story of Count Dracula's attempt to move from Transylvania to England so he may find new blood and spread the undead curse. The novel is narrated through a series of letters, diary entries, and newspaper clippings, as Dracula's pursuers race to stop him before it's too late."
                ,'category_id' => 3
            ],
            [
                'name' => 'Good Omens',
                'resume' => "Written by Terry Pratchett and Neil Gaiman, 'Good Omens' follows an angel named Aziraphale and a demon named Crowley who team up to prevent the apocalypse. As they try to influence the upbringing of the Antichrist, they encounter various quirky characters and obstacles, leading to comedic situations and unexpected alliances."
                ,'category_id' => 4
            ],
            [
                'name' => 'The Adventures of Tom Sawyer',
                'resume' => "Mark Twain's classic novel follows the mischievous Tom Sawyer as he navigates boyhood adventures in a small town on the Mississippi River. From playing pirates to attending their own funeral, Tom and his friend Huckleberry Finn find themselves in one escapade after another, all while learning important lessons about friendship and growing up."
                ,'category_id' => 5
            ],
            [
                'name' => 'Dune',
                'resume' => "Set in a distant future where noble houses vie for control of the universe, 'Dune' follows the young Paul Atreides as he becomes embroiled in political intrigue and prophetic destiny on the desert planet of Arrakis. As Paul learns the ways of the mysterious Fremen and confronts the tyrannical rule of the Emperor, he must navigate treacherous alliances and confront his own inner demons."
                ,'category_id' => 1
            ],
            [
                'name' => 'The Notebook',
                'resume' => "Nicholas Sparks' romantic novel tells the story of Noah Calhoun and Allie Nelson, two young lovers separated by social class and circumstance. Despite their passionate summer romance, they are torn apart by Allie's parents and go on to lead separate lives. However, their love is rekindled years later when they reunite, forcing them to confront the choices they've made and the feelings they still harbor."
                ,'category_id' => 2
            ],
            [
                'name' => 'Frankenstein',
                'resume' => "Mary Shelley's groundbreaking novel explores themes of creation, ambition, and humanity as scientist Victor Frankenstein creates a living being from dead body parts. Horrified by his own creation, Frankenstein abandons the creature, setting off a chain of events that leads to tragedy and revenge. As the creature grapples with his own existence and seeks acceptance in society, he becomes a tragic figure caught between his own desires and the prejudice of humanity."
                ,'category_id' => 3
            ],
            [
                'name' => 'Catch-22',
                'resume' => "Joseph Heller's satirical novel follows the absurd exploits of Captain John Yossarian and his fellow soldiers stationed on a fictional Mediterranean island during World War II. Caught in the bureaucratic absurdity of military life, Yossarian struggles to maintain his sanity while facing the paradoxical 'Catch-22' - a bureaucratic rule that states a man must be insane to fly dangerous combat missions, but if he requests to be grounded for being insane, he's considered rational and must continue flying."
                ,'category_id' => 4
            ],
            [
                'name' => 'Treasure Island',
                'resume' => "Robert Louis Stevenson's classic adventure novel follows young Jim Hawkins as he embarks on a treasure hunt after discovering a map leading to buried pirate gold. Joined by the enigmatic Long John Silver and a crew of pirates, Jim navigates treacherous waters and deadly traps in search of the legendary treasure. Along the way, he learns valuable lessons about loyalty, bravery, and the nature of good and evil."
                ,'category_id' => 5
            ],
            [
                'name' => 'Neuromancer',
                'resume' => "William Gibson's cyberpunk masterpiece follows the adventures of Case, a washed-up computer hacker hired by a mysterious employer to pull off one last job - hacking into the virtual reality network known as the Matrix. As Case delves deeper into the digital underworld, he encounters a cast of eccentric characters, including the enigmatic street samurai Molly Millions and the powerful AI Wintermute. Together, they must navigate a world of corporate intrigue, artificial intelligence, and virtual reality to uncover the truth behind the ultimate hack."
                ,'category_id' => 1
            ],
            [
                'name' => 'The Shining',
                'resume' => "Stephen King's chilling novel follows the Torrance family as they move into the remote Overlook Hotel for the winter, where Jack Torrance has been hired as the caretaker. As the hotel's sinister influence begins to take hold of Jack's mind, his son Danny experiences psychic visions of the hotel's dark past and the malevolent spirits that haunt its halls. Trapped by a blizzard and cut off from the outside world, the Torrances must confront their own inner demons and the supernatural forces that threaten to consume them."
                ,'category_id' => 2
            ],
            [
                'name' => 'Good Omens',
                'resume' => "Written by Terry Pratchett and Neil Gaiman, 'Good Omens' follows an angel named Aziraphale and a demon named Crowley who team up to prevent the apocalypse. As they try to influence the upbringing of the Antichrist, they encounter various quirky characters and obstacles, leading to comedic situations and unexpected alliances."
                ,'category_id' => 3
            ],
            [
                'name' => 'The Hitchhiker\'s Guide to the Galaxy',
                'resume' => "Douglas Adams' comedic science fiction novel follows the misadventures of Arthur Dent, an ordinary human who is whisked away from Earth just before it is destroyed to make way for a hyperspace bypass. Joined by an eclectic cast of characters, including the two-headed, three-armed ex-president of the galaxy Zaphod Beeblebrox and the perpetually depressed robot Marvin, Arthur embarks on a journey across the galaxy to discover the meaning of life, the universe, and everything."
                ,'category_id' => 4
            ],
            [
                'name' => 'Outlander',
                'resume' => "Diana Gabaldon's romantic time-travel series begins when Claire Randall, a World War II nurse, is transported back in time to 18th-century Scotland. There, she meets the dashing Highland warrior Jamie Fraser and becomes embroiled in the Jacobite uprising against British rule. As Claire navigates the dangers of the past and struggles to reconcile her feelings for Jamie with her desire to return home, she discovers the true meaning of love, loyalty, and sacrifice."
                ,'category_id' => 5
            ],
            [
                'name' => 'Jurassic Park',
                'resume' => "Michael Crichton's science fiction thriller follows a group of scientists who are invited to tour a remote island theme park populated by genetically engineered dinosaurs. As chaos erupts when the park's security systems fail, the visitors must fight for survival against the prehistoric predators that roam the island. Meanwhile, the park's creator, John Hammond, wrestles with the consequences of playing god and the ethical implications of resurrecting extinct species."
                ,'category_id' => 1
            ],
            [
                'name' => 'The Great Gatsby',
                'resume' => "F. Scott Fitzgerald's classic novel is set in the Roaring Twenties and follows the enigmatic Jay Gatsby as he throws extravagant parties in the hopes of winning back his lost love, Daisy Buchanan. Narrated by Daisy's cousin Nick Carraway, the novel explores themes of wealth, class, and the American Dream, as Gatsby's obsession with the past leads to tragedy for himself and those around him."
                ,'category_id' => 2
            ],
            [
                'name' => 'To Kill a Mockingbird',
                'resume' => "Harper Lee's Pulitzer Prize-winning novel follows young Scout Finch as she navigates the complexities of race, class, and justice in the Deep South during the 1930s. When her father, Atticus Finch, defends a black man falsely accused of raping a white woman, Scout learns valuable lessons about empathy, courage, and the importance of standing up for what is right in the face of prejudice and intolerance."
                ,'category_id' => 3
            ],
            [
                'name' => '1984',
                'resume' => "George Orwell's dystopian novel is set in a totalitarian society ruled by the Party and its leader, Big Brother. As protagonist Winston Smith navigates the oppressive regime and struggles to maintain his individuality and sanity, he begins a forbidden love affair with Julia and becomes involved in a resistance movement aimed at overthrowing the Party and reclaiming freedom. However, he soon discovers that rebellion comes with dire consequences in a world where truth and reality are constantly manipulated."
                ,'category_id' => 4
            ],
            [
                'name' => 'The Lord of the Rings',
                'resume' => "J.R.R. Tolkien's epic fantasy trilogy follows Frodo Baggins and his companions as they embark on a quest to destroy the One Ring and defeat the Dark Lord Sauron. Along the way, they encounter a host of allies and enemies, including the wise wizard Gandalf, the noble Aragorn, and the treacherous Gollum. As they journey across Middle-earth, they must overcome trials and challenges that will test their courage, friendship, and determination."
                ,'category_id' => 5
            ],
            [
                'name' => 'The Catcher in the Rye',
                'resume' => "J.D. Salinger's coming-of-age novel follows Holden Caulfield, a disillusioned teenager who has been expelled from prep school and embarks on a aimless journey through New York City. As he navigates encounters with various characters and reflects on his own feelings of alienation and disillusionment, Holden grapples with themes of identity, authenticity, and the loss of innocence."
                ,'category_id' => 1
            ],
            [
                'name' => 'Moby-Dick',
                'resume' => "Herman Melville's epic novel follows the obsessive Captain Ahab as he leads his crew on a vengeful quest to hunt down the white whale Moby Dick, who has taken his leg in a previous encounter. As the Pequod sails across the vast expanse of the ocean, Ahab's monomaniacal pursuit of the whale becomes increasingly destructive, leading to a tragic confrontation with nature and the forces of fate."
                ,'category_id' => 2
            ],
            [
                'name' => 'The Hunger Games',
                'resume' => "Suzanne Collins' dystopian trilogy is set in a future society where the government forces children to participate in a televised death match known as the Hunger Games. When her sister is chosen as a tribute, Katniss Everdeen volunteers to take her place, sparking a rebellion against the oppressive Capitol. As Katniss navigates the deadly arena and becomes a symbol of hope for the oppressed districts, she must confront her own moral dilemmas and decide how far she is willing to go to survive."
                ,'category_id' => 3
            ],
            [
                'name' => 'Alice\'s Adventures in Wonderland',
                'resume' => "Lewis Carroll's whimsical novel follows young Alice as she falls down a rabbit hole into a fantastical world filled with bizarre creatures and nonsensical events. As she journeys through Wonderland, Alice encounters a colorful cast of characters, including the Cheshire Cat, the Mad Hatter, and the Queen of Hearts, and navigates a series of surreal adventures that challenge her perceptions of reality and identity."
                ,'category_id' => 4
            ],
            [
                'name' => 'The Picture of Dorian Gray',
                'resume' => "Oscar Wilde's novel follows the handsome and wealthy Dorian Gray as he makes a Faustian pact to preserve his youth and beauty at any cost. As Dorian remains perpetually young and unblemished, a portrait of him ages and bears the physical and moral consequences of his debauched lifestyle. As Dorian descends into a life of vice and depravity, he must confront the consequences of his actions and the nature of his own soul."
                ,'category_id' => 5
            ],
            [
                'name' => 'The Hobbit',
                'resume' => "J.R.R. Tolkien's classic fantasy novel follows the journey of Bilbo Baggins, a hobbit who is swept away on an unexpected adventure by the wizard Gandalf and a company of dwarves. As they embark on a quest to reclaim the dwarves' homeland and treasure from the dragon Smaug, Bilbo encounters trolls, goblins, and other dangers, and discovers courage and resourcefulness he never knew he possessed."
                ,'category_id' => 1
            ],
            [
                'name' => 'One Hundred Years of Solitude',
                'resume' => "Gabriel Garcia Marquez's epic novel tells the multi-generational saga of the Buendia family in the fictional town of Macondo. As the family experiences love, war, and magic realism, they become entwined in the tumultuous history of Latin America. Blending myth, history, and fantasy, 'One Hundred Years of Solitude' explores themes of fate, memory, and the cyclical nature of time."
                ,'category_id' => 2
            ],
            [
                'name' => 'The Road',
                'resume' => "Cormac McCarthy's post-apocalyptic novel follows a father and his young son as they journey through a burned and barren landscape in search of safety and salvation. As they struggle to survive in a world ravaged by an unspecified cataclysm, they encounter danger, despair, and fleeting moments of hope. Through their harrowing journey, they must confront their own mortality and the enduring power of love."
                ,'category_id' => 3
            ],
            [
                'name' => 'The Grapes of Wrath',
                'resume' => "John Steinbeck's Pulitzer Prize-winning novel follows the Joad family as they migrate from the Dust Bowl of Oklahoma to California in search of a better life during the Great Depression. Along the way, they encounter hardship, prejudice, and exploitation, but also solidarity and resilience among the migrant workers. As they confront the harsh realities of poverty and injustice, the Joads strive to preserve their dignity and humanity in the face of adversity."
                ,'category_id' => 4
            ],
            [
                'name' => 'Harry Potter and the Sorcerer\'s Stone',
                'resume' => "J.K. Rowling's fantasy novel introduces readers to the magical world of Harry Potter, a young orphan who discovers he is a wizard on his eleventh birthday. Enrolling at Hogwarts School of Witchcraft and Wizardry, Harry learns about his past, makes new friends, and confronts the dark wizard Voldemort, who murdered his parents. As Harry embarks on a journey of self-discovery and adventure, he uncovers secrets about his own identity and the fate that awaits him."
                ,'category_id' => 5
            ],
            [
                'name' => 'The Stand',
                'resume' => "Stephen King's epic post-apocalyptic novel follows a group of survivors who are drawn together in the aftermath of a deadly pandemic that wipes out most of humanity. As they struggle to rebuild society and confront the forces of good and evil, they must confront their own fears, flaws, and desires. As the battle between the forces of light and darkness reaches its climax, they must make a stand for the future of humanity."
                ,'category_id' => 1
            ]
        ]);
    }
}
