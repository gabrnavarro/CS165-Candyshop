<?php
namespace Faker\Provider;

class Candy extends   \Faker\Provider\Base{
  protected static $candy=array(
    'Airheads',
' Atomic Fire Balls',
' BB Bats',
' Bit-O-Honey',
' Black Jack Taffy',
' Blow Pops',
' Boston Baked Beans',
' Maple Bun',
' Butterfingers',
' Butterscotch Disks',
' Candy Buttons on paper tape',
' Candy Cigarettes',
' Candy Necklace',
' Charleston Chew',
' Cherry Mash',
' Chick-o-Stick',
' Chiclets',
' Chuckles',
' Cinnamon Bears',
' Dots',
' Dubble Bubble Gum',
' Fizzies Drink Tablets',
' Gummi Hot Dog',
' Hot Dog Bubble Gum',
' Jawbreakers',
' Jelly Nougats',
' Jujubes',
' Junior Mints',
' Kits Taffy',
' Laffy Taffy',
' Lemonheads',
' Life Savers',
' Lik-M-Aid Fun Dip',
' Marshmallow Ice Cream Cones',
' Necco Wafers',
' Now & Laters',
' Oh Henry',
' Pay Day',
' Peanut Butter Bars',
' Pixy Stix',
' Pop Rocks',
' Razzles',
' Red Hots',
' Root Beer Barrels',
' Saf-T-Pops',
' Sixlets',
' Sky Bar',
' Smarties',
' Sour Fruit Balls',
' Peppermint Stick',
' Sugar Daddy',
' Swedish Fish',
' Sweetarts',
' Teaberry Gum',
' Tootsie Pops',
' Tootsie Rolls',
' Warheads',
' Wax Lips',
' Zagnut');

  public function candy(){
    return static::randomElement(static::$candy);
  }



}



 ?>
