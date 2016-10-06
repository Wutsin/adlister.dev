<?php 

require_once __DIR__ . '/../../models/Item.php';

// bike1
$item = new Item;
$item->user_id = 1;
$item->item_type = 1;
$item->headline = "GT hybrid Bicycle";
$item->price = 110;
$item->date_listed = "2016-10-2";
$item->state = "Colorado";
$item->county  = "Boulder County";
$item->image_url = "https://images.craigslist.org/00u0u_9kvG1CcnZfc_600x450.jpg";
$item->description  = "Great bike, perfect for commuting to and from school or commuting in downtown its a GT nomad comfort hybrid style bike the headset adjust back and forth, the only real problem with it is the gel seats leather is starting to peal up, comfortable bike to ride I don't ride this bike anymore cause I have a car now and do not have room for the bike.";
$item->save();

// bike2
$item = new Item;
$item->user_id = 2;
$item->item_type = 1;
$item->headline = "Australian Made by Paul Hillbrick";
$item->price = 999;
$item->date_listed = "2016-03-15";
$item->state = "Washington";
$item->county  = "Wahkiakum County";
$item->image_url = "https://images.craigslist.org/00p0p_gKfdbM7tTiw_600x450.jpg";
$item->description  = "The launch of the Clamont range was based on quality Australian- made frames, durable components, backed up by professional assembly, excellent after sales service at competitive, realistic prices. The range was designed to cover the entire spectrum of bicycle activities from recreational cycling for the family, to off road, mountain bikes, to the highest level of professional and Olympic standard competition. All frames are manufactured in Australia and are built to produce strong, durable frames for Australian conditions. Each bicycle in the range boasts its own range of unique features. To support their commitment to Australian-made quality, Clamont frames carry a lifetime warranty on the frame.";
$item->save();

// uni1
$item = new Item;
$item->user_id = 3;
$item->item_type = 2;
$item->headline = "InMotion ELectric Unicycle";
$item->price = 799;
$item->date_listed = "2016-07-05";
$item->state = "Texas";
$item->county  = "Bexar County";
$item->image_url = "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSukN5rQqbQGA94xhbqpQuo53_w7WPrPKkuLlDYudviKsRq_zmWkZWdySZGMSuNeAZJX4bR4OE&usqp=CAE";
$item->description = "Ninebot One E+  Self Balancing Electric Unicycle manufactured by Ninebot-Segway. Far superior than any Hoverboard. This unit comes with a 1 year warranty with all service work done in the USA not China. The Ninebot One E+ is great for commuting or just cruising around with friends. You can ride off-road and in the rain.  The Ninebot One E+ will go up to 14mph and 17-20 miles on a single charge. Charge time is less than 2.5 hrs. The Ninebot One E+ is a very high quality product and has a very safe Lithium Ion Battery. The same type of battery that Tesla Motors uses.";
$item->save();

// uni2
$item = new Item;
$item->user_id = 4;
$item->item_type = 2;
$item->headline = "SkyHigh 20in. Unicycle";
$item->price = 139.99;
$item->date_listed = "2016-06-08";
$item->state = "Massachusetts";
$item->county  = "Norfolk County";
$item->image_url = "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcStBnFz-zmEkIJj1dVh6023weT_5IZzUfq_uudJ6Qo-1kiQfXLgfUwgDcAaOt1Er0_mA-sggK8&usqp=CAE";
$item->description  = "With the Uno High 20'' Unicycle, you can take your balance and coordination skills to a whole other level! Designed for a whole new challenge, this specialty cycle easily adjusts between 55'' and 60'', depending on the seat height. The High Unicycle features a durable steel construction with a 20'' alloy wheel. The Kenda tire and cartridge bearings ensure a smooth ride with every rotation. Truly test your skills with the Uno High 20'' Unicycle!";
$item->save();

// skateboard1
$item = new Item;
$item->user_id = 5;
$item->item_type = 3;
$item->headline = "10in One Wheel Smart ELectric Skateboard";
$item->price = 469;
$item->date_listed = "2016-04-09";
$item->state = "Texas";
$item->county  = "Gregg County";
$item->image_url = "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ1HT-e8Ge5NaweQcS7cjdYKvxZG997Uu2aaW17UntpA3z_owJfE6FSARu3vkJZd69_gOnWFMs&usqp=CAE";
$item->description  = "Max Speed:25 km/h, Distance:About 16-19km, Max Tilt:Around 45°, Battery:60v 2200mAh, Highest power:500w, Max load:120kg, Engin:2x500w, Size:789*213*264(mm), Charging voltage:AC100-240V 50-60HZ, Using temperature:15 degree centigarde - 45degree centigrade";
$item->save();

// skateboard2
$item = new Item;
$item->user_id = 1;
$item->item_type = 3;
$item->headline = "Krainkn Skateboards Pro Complete ";
$item->price = 69.11;
$item->date_listed = "2016-10-01";
$item->state = "Maryland";
$item->county  = "Howard County";
$item->image_url = "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRnTBZFkn-oXqGbtpUbt2t4UA7fieMEH6-aEminbwYtcgxWCDBwC4lHUhTJ8Y7cQhctE6-M7QCk&usqp=CAE";
$item->description  = "Krainkn is a new way to ride a traditional skateboard. It is a great training tool and also a new extreme sport. Practice new tricks that work well for Krainkn and for snowboarding. Teach yourself, your kids or your friends how to ride a skateboard in one day. It's also a great workout and can be a very extreme sport. ";
$item->save();





































