var quotes=['“The purpose of our lives is to be happy.” — Dalai Lama',
'“Life is what happens when you’re busy making other plans.” — John Lennon',
'“Get busy living or get busy dying.” — Stephen King',
'“You only live once, but if you do it right, once is enough.” — Mae West',
'“Many of life’s failures are people who did not realize how close they were to success when they gave up.”– Thomas A. Edison',
' “The whole secret of a successful life is to find out what is one’s destiny to do, and then do it.”– Henry Ford',
'“In order to write about life first you must live it.”– Ernest Hemingway',
'“The big lesson in life, baby, is never be scared of anyone or anything.”– Frank Sinatra',
'“Curiosity about life in all of its aspects, I think, is still the secret of great creative people.” – Leo Burnett',
'“Life is not a problem to be solved, but a reality to be experienced.”– Soren Kierkegaard',
'“The unexamined life is not worth living.” — Socrates',
'“Turn your wounds into wisdom.” — Oprah Winfrey',
'“Don’t settle for what life gives you; make life better and build something.” — Ashton Kutcher',
'“I like criticism. It makes you strong.” — LeBron James',
'“Everybody wants to be famous, but nobody wants to do the work. I live by that. You grind hard so you can play hard. At the end of the day, you put all the work in, and eventually it’ll pay off. It could be in a year, it could be in 30 years. Eventually, your hard work will pay off.” — Kevin Hart',
'“You never really learn much from hearing yourself speak.” ― George Clooney',
'“Life imposes things on you that you can’t control, but you still have the choice of how you’re going to live through this.” — Celine Dion',
'“Live for each second without hesitation.” — Elton John',
'“Life is like riding a bicycle. To keep your balance, you must keep moving.” — Albert Einstein',
'“Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven’t found it yet, keep looking. Don’t settle. As with all matters of the heart, you’ll know when you find it.” — Steve Jobs',
'“Watch your thoughts; they become words. Watch your words; they become actions. Watch your actions; they become habits. Watch your habits; they become character. Watch your character; it becomes your destiny.”— Lao-Tze',
'“The healthiest response to life is joy.” — Deepak Chopra',
'“Maybe that’s what life is… a wink of the eye and winking stars.” — Jack Kerouac',
'“Life is a flower of which love is the honey.” — Victor Hugo',
'“Life would be tragic if it weren’t funny.” — Stephen Hawking',
'“The greatest pleasure of life is love.” — Euripides'
]

function newquote(){
    var randomnumber= Math.floor(Math.random()*quotes.length);
    document.getElementById('herequotes').innerHTML=quotes[randomnumber];
}


