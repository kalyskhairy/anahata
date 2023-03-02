<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    private static $events = [
        [
            'image' => 'img/restaurant/restaurant_night.jpg',
            'title' => '4 (four) Days Exclusive Program, Getting Slimmer & Younger with MindSlim Program',
            'quote' => '4 DAYS EXCLUSIVE PROGRAM
            Bersiaplah Anda akan merasakan pengalaman yang luar biasa dalam hidup Anda di 4 Days Exclusive Program! Program ini diadakan hanya 2 kali dalam setahun di Ubud, Bali.',
            'slug'  => 'luxury-in-the-heart-of-nature',
            'content' => '<h1>4 DAYS EXCLUSIVE PROGRAM</h1>
            <p>Bersiaplah Anda akan merasakan pengalaman yang luar biasa dalam hidup Anda di 4 Days Exclusive Program! Program ini diadakan hanya 2 kali dalam setahun di Ubud, Bali.</p>
            <ul>
                <li>1. 5 Magic Rules as Healthy Ways to Lose Weight</li>
                <li>2. Getting Slimmer Permanently</li>
                <li>3. Getting Younger with 7th Path Self Hypnosis</li>
                <li>4. Mind Therapy with Neuro Linguistic Programming</li>
                <li>5. Getting Stronger with Fun Exercise</li>
                <li>6. Boosting your Self Esteem</li>
                <li>7. Laughter Yoga</li>
                <li>8. Mind Body Consciousness</li>
                <li>9. Sleeping Better Technique</li>
                <li>10. Facelift with Mind Programming</li>
                <li>11. Being Happy with Ask & Receives</li>
                <li>12. Natural Relaxation</li>
            </ul>
            <p>Selama 4 Hari 3 Malam banyak hal yang Anda alami dan rasakan, nuansa keindahan alam Bali, tempat yang sangat ideal dipilih untuh mendapatkan pengalaman yang luar biasa.</p>
            <p>Ingin mengetahui jadwal dan informasi lebih lanjut mengenai 4 Days Exclusive Program? Hubungi (021) 3333-3168/ 3333-3169 atau email ke info@mindslimprogram.com.</p>',
            'category' => 'Training and Meeting'
        ],
        [
            'image' => 'img/restaurant/restaurant_night.jpg',
            'title' => "BALI NEW YEAR'S EVE YOGA RETREAT",
            'quote' => "Join us for a wonderful week of Yoga and healing in a peaceful and serene Balinese environment. This retreat is designed for guests to de-stress and rejuvenate your body, mind and soul. Feel yourself become physically stronger, increase flexibility and",
            'slug'  => 'bali-new-year-eve-yoga-retreat',
            'content' => '
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Join us for a wonderful week of Yoga and healing in a peaceful and serene Balinese environment. This retreat is designed for guests to de-stress and rejuvenate your body, mind and soul. Feel yourself become physically stronger, increase flexibility and be nurtured by a range of complimentary spa treatments! This is your special time just for yourself to relax, yet feel invigorated and enjoy!</span></span></span></p>
            <br />
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">The focus will be to re-connect with yourself as well as connecting with Balinese culture. These retreats attract many people traveling alone which creates a nice camaraderie with others during the week. Regular practice of yoga and meditation strengthens the mind and body to create an inner harmony. Daily spiritual intention naturally takes us to a deeper place within ourselves and brings more meaning into our daily lives. But perhaps the biggest part of attending a yoga health retreat is simply changing your daily habits. By temporarily pulling yourself back from your social community, it also gives you a chance to evaluate your life and bring on positive lifestyle changes.</span></span></span></p>
            <br />
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><strong>About the Yoga</strong></span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"> Our&nbsp; yoga and meditation classes are taught by highly qualified Yoga Teachers and are taught according to the group level with health, age and lifestyle fully considered. All levels of experience are welcome and an assistant is present in each session to guide&nbsp; students new to yoga and give adjustments to more experienced yogis. Some props are used to help with alignment and to gently open the body to deeper levels of relaxation. You will be gently guided through a range of Yogic practices to help you deepen your awareness and experience a deeper understanding of how to do the poses in a safe and fun environment.</span></span></span></p>
            <br />
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><strong>Ubud</strong></span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"> is famous as the artistic and cultural heart of Bali. There are many art museums to see traditional and modern paintings. The Ubud people are warm and friendly and many are painters, dancers, musicians and carvers. The cool weather in the hill is perfect for nature walks, or visit the monkey forest or the colourful markets with their bright and typically Balinese crafted stalls.The retreat is surrounded by beautiful rice paddies in a quiet and peaceful environment yet very close to shops, fabulous restaurants, affordable day spas, galleries and temples to visit in your free time. Do as little or as much as you like!</span></span></span></p>
            ',
            'category' => 'Training and Meeting'
        ],
        [
            'image' => 'img/restaurant/restaurant_1.jpg',
            'title' => 'Program Meditasi Intensif "Geming, Hening, Bening"',
            'quote' => "",
            'slug'  => 'program-meditasi-intensif',
            'content' => '
            <h2>Program Meditasi Intensif bersama Reza Gunawan</h2>
            <p><span style="font-size:13pt"><span style="font-family:Arial"><span style="color:#000000"><em>&ldquo;Inilah program self healing paling mendalam yang mampu kami sajikan saat ini. Tiada kata yang mampu bercerita ajaibnya berlatih hening bersama secara intensif, masuk ke dalam diri &amp; kembali pada keseharian dengan energi, kesegaran jiwa &amp; kearifan hidup yang baru&rdquo; &ndash; Reza Gunawan</em></span></span></span></p>
            <br />
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Program &ldquo;Geming, Hening, dan Bening&rdquo; adalah sebuah undangan untuk berhenti dan meniti ke dalam diri. Sebuah kesempatan bagi hati untuk bisa rileks sepenuhnya, hingga kita semua kembali mampu merasakan spektrum perasaan dan emosi seluas mungkin&mdash;dari mulai tangis hingga tawa, murka hingga haru. Tanpa perlu takut dirusak olehnya. Kita belajar hanya mengamati dan merasakan.</span></span></span></p>
            <br />
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Melalui berbagai proses dan eksplorasi napas, gerak, sentuhan, bunyi, serta komunikasi yang jujur&mdash;kita akan bersama-sama menjalani untaian meditasi yang mengantarkan kita kepada pusat diri kita yang sejati. Beberapa teknik yang akan dilatih bersama antara lain:</span></span></span></p>
            <br />
            <ul>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Enlightenment Dyad / meditasi menemukan diri sejati</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Surrender meditation</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Meditasi praktis untuk hidup berkesadaran (bernapas, makan, berjalan, beristirahat)</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Sound healing</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Jin Shin Jyutsu</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Tapas Acupressure Technique</span></span></span></li>
            </ul>
            <br />
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Dibimbing oleh Reza Gunawan, praktisi penyembuhan holistik yang telah menekuni dunia penyembuhan selama lebih dari dua dekade, program ini akan berlangsung intensif selama 4 hari 3 malam di Ubud, Bali. Suasana alam yang damai dan tenteram, menu makanan vegetarian yang lezat dan sehat, serta didukung oleh staf yang berpengalaman, akan memastikan para peserta dapat menjalankan program seoptimal mungkin dengan rasa aman dan nyaman.</span></span></span></p>
            <br />
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Berhenti sejenak. Kembali ke dalam. Saat kita menghuni tubuh kita dengan kesadaran penuh, mengamati batin kita secara utuh, maka kita kembali ke pusat roda. Kita kembali mencicipi kepolosan batin seorang bayi yang senantiasa hidup alamiah dan selaras. Kita pun berkesempatan untuk memaknai hidup dalam kejernihan dan kebijaksanaan yang baru. Bening. Geming. Dan hening.</span></span></span></p>
            ',
            'category' => 'Sport Event'
        ],
        [
            'image' => 'img/restaurant/restaurant_2.jpg',
            'title' => 'Sacred Wellness Institute by Nigel Mc Farlan',
            'quote' => "7 Days Residential Life Change Program",
            'slug'  => 'sacred-wellness-institute',
            'content' => '
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">7 Days Residential Life Change Program</span></span></span></p>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">STUCK, LOST, HEAVY, RELATIONSHIP PROBLEMS, HEALTH PROBLEMS....</span></span></span></p>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">WE REACH A HAND OUT TO YOU.... WE&#39;RE HERE WHEN READY...</span></span></span></p>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">DEEP HEART BLESSINGS</span></span></span></p>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">SACRED WELLNESS TEAM</span></span></span></p>
            <a href="https://www.facebook.com/pages/Sacred-Wellness-Institute/121464638045848">https://www.facebook.com/pages/Sacred-Wellness-Institute/121464638045848</a>
            ',
            'category' => 'Training and Meeting'
        ],
        [
            'image' => 'img/restaurant/restaurant_1.jpg',
            'title' => 'Program Meditasi Intensif "Geming, Hening, Bening"',
            'quote' => "",
            'slug'  => 'program-meditasi-intensif',
            'content' => '
            <h4><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><strong>Program Meditasi Intensif bersama Reza Gunawan</strong></span></span></span></h4>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Kamis &ndash; Minggu / 14 &ndash; 17 November 2013 Anahata Villas &amp; Spa Resort, Ubud-Bali</span></span></span><a href="http://www.anahataresort.com/admin/events/edit//%22http:/www.rezagunawan.com/gemingbali2013//%22" style="text-decoration:none"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#1155cc"><u>www.anahataresort.com</u></span></span></span></a><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><em>- tempat terbatas untuk 30 peserta saja -</em></span></span></span></p>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">&nbsp;</span></span></span></p>
            <p><span style="font-size:13pt"><span style="font-family:Arial"><span style="color:#000000"><em>&ldquo;Inilah program self healing paling mendalam yang mampu kami sajikan saat ini. Tiada kata yang mampu bercerita ajaibnya berlatih hening bersama secara intensif, masuk ke dalam diri &amp; kembali pada keseharian dengan energi, kesegaran jiwa &amp; kearifan hidup yang baru&rdquo; &ndash; Reza Gunawan</em></span></span></span></p>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Program &ldquo;Geming, Hening, dan Bening&rdquo; adalah sebuah undangan untuk berhenti dan meniti ke dalam diri. Sebuah kesempatan bagi hati untuk bisa rileks sepenuhnya, hingga kita semua kembali mampu merasakan spektrum perasaan dan emosi seluas mungkin&mdash;dari mulai tangis hingga tawa, murka hingga haru. Tanpa perlu takut dirusak olehnya. Kita belajar hanya mengamati dan merasakan.</span></span></span></p>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Melalui berbagai proses dan eksplorasi napas, gerak, sentuhan, bunyi, serta komunikasi yang jujur&mdash;kita akan bersama-sama menjalani untaian meditasi yang mengantarkan kita kepada pusat diri kita yang sejati. Beberapa teknik yang akan dilatih bersama antara lain:</span></span></span></p>
            <ul>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Enlightenment Dyad / meditasi menemukan diri sejati</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Surrender meditation</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Meditasi praktis untuk hidup berkesadaran (bernapas, makan, berjalan, beristirahat)</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Sound healing</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Jin Shin Jyutsu</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Tapas Acupressure Technique</span></span></span></li>
            </ul>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Dibimbing oleh Reza Gunawan, praktisi penyembuhan holistik yang telah menekuni dunia penyembuhan selama lebih dari dua dekade, program ini akan berlangsung intensif selama 4 hari 3 malam di Ubud, Bali. Suasana alam yang damai dan tenteram, menu makanan vegetarian yang lezat dan sehat, serta didukung oleh staf yang berpengalaman, akan memastikan para peserta dapat menjalankan program seoptimal mungkin dengan rasa aman dan nyaman.</span></span></span></p>
            <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Berhenti sejenak. Kembali ke dalam. Saat kita menghuni tubuh kita dengan kesadaran penuh, mengamati batin kita secara utuh, maka kita kembali ke pusat roda. Kita kembali mencicipi kepolosan batin seorang bayi yang senantiasa hidup alamiah dan selaras. Kita pun berkesempatan untuk memaknai hidup dalam kejernihan dan kebijaksanaan yang baru. Bening. Geming. Dan hening.</span></span></span></p>
            ',
            'category' => 'Sport Event'
        ],
    ];

    public static function getAll()
    {
        return self::$events;
    }

    public static function find($slug)
    {
        $events = self::$events;
        $result = [];

        foreach($events as $event) {
            if ($event['slug'] == $slug) {
                $result = $event;
            }
        }

        return $result;
    }
}
