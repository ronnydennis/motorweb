
<?php
/**
 *
 */
class ClassName{

   function __construct(argument)
   {
      // code...
   }
}

$den = new Person;
$den->setName("Dennis");
$den->setCity("Nairobi");

$rony = clone $den;
print $den->getName()."lives in".$den->getCity();




 ?>
