<?php

use Illuminate\Database\Seeder;
use App\FunFacts;

class FunFactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FunFacts::create([
        	'title' => 'Moonbow',
        	'body' => 'A moonbow is a rainbow produced by moonlight rather tahn sunlight. Other than a difference in light source, its formation is exactly the same as for a solar rainbow. (Also known as lunar rainbow or white rainbow)'
        ]);

        FunFacts::create([
            'title' => 'Numbers and the Alphabet',
            'body' => 'All the numbers from one through to nine hundred and ninety-nine do not have the letter "a" in them.'
        ]);

        FunFacts::create([
            'title' => 'Unicorns',
            'body' => "Scotland's national animal is a Unicorn, and stems from the fact that the Unicorn is believed to be the natural enemy of the lion - a symbol that English royals adopted about 100 years prior."
        ]);

        FunFacts::create([
            'title' => 'Car theft',
            'body' => 'On average, for every 230 cars that are made, 1 will be stolen.'
        ]);

        FunFacts::create([
            'title' => 'Bich',
            'body' => "In the 40's, the Bich pen was changed to Bic for fear that Americans would pronounce it 'Bitch'." 
        ]);

        FunFacts::create([
            'title' => 'Four',
            'body' => 'In the English language, four is the only number that has the same number of letters as its value.'
        ]);

        FunFacts::create([
            'title' => 'On the tip of your tongue',
            'body' => "The word 'lethologica' describes the state of not being able to remember the word you want."
        ]);

        FunFacts::create([
            'title' => 'Spiders or Death?',
            'body' => 'More people are afraid of spiders than death, Amazingly, few people are afraid of Champagne corks even though you are more likely to be killed by one than by a spider.'
        ]);

        FunFacts::create([
            'title' => 'Bookkeeper',
            'body' => 'Bookkeeper is the only word in the English language with three consecutive double letters.'
        ]);

        FunFacts::create([
            'title' => 'Bucktooth',
            'body' => "A rodents teeth never stop growing. They are worn down by the animal's constant gnawing on bark, leaves, and other vegetables."
        ]);

        FunFacts::create([
            'title' => 'Will I fit?',
            'body' => 'A cat uses its whiskers to determine whether a space is wide enough or not for them to squeeze through. If their whiskers can fit, then so can they.'
        ]);

        FunFacts::create([
            'title' => 'Cleopatra',
            'body' => 'Cleopatra lived closer in time to the Moon lnading than to the construction of the Great Pyramid of Giza.'
        ]);

        FunFacts::create([
            'title' => 'Oh Honey!',
            'body' => 'Honey does not spoil. Ever. You could feasibly eat 3000 year old honey and it would be absolutely fine.'
        ]);

        FunFacts::create([
            'title' => 'Static',
            'body' => "A small percentage of the static that you see on 'dead' TV stations is left over radiation from the Big Bang. You're literally seeing the residual effects of the Universe's creation."
        ]);

        FunFacts::create([
            'title' => 'Checkmate!',
            'body' => 'There are more possible iterations of a game of chess than there are atoms in the known universe.'
        ]);

        FunFacts::create([
            'title' => 'Gold Mine.',
            'body' => 'If you somehow found a way to extract all of the gold from the bubbling core of our planet, you would be able to cover all of the land in a layer of gold up to your knees.'
        ]);

        FunFacts::create([
            'title' => 'Mosquitos',
            'body' => 'It would take 1,200,000 mosquitos, each sucking once, to completely drain the average human of blood.'
        ]);

        FunFacts::create([
            'title' => "Can't she just give you a sign?",
            'body' => 'To know when to mate, a male giraffe will continuously headbutt the female in the bladder until she urinates. The male then tastes the urine and that helps determine whether the female is ovulating.'
        ]);

        FunFacts::create([
            'title' => 'Water bears.',
            'body' => 'Water bears, or Tardigrades, are typically 0.5mm in length and can survive virtually anything. Even the vacuum of space.'
        ]);

        FunFacts::create([
            'title' => 'Let there be light.',
            'body' => 'It can take a photon 40,000 years to travel from the core of the sun to the surface, but only 8 minutes to travel the rest of the way to earth.'
        ]);
    }
}
