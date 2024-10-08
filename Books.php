<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      function __construct( $par1, $par2 ) {
			$this->title = $par1;
			$this->price = $par2;
		}
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."\n";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." \n";
      }
   }
   
$physics = new Books;
$maths = new Books;
$chemistry = new Books;
$physics = new Books;
$physics->setTitle( "Physics for High School" ); 
$chemistry->setTitle( "Advanced Chemistry" ); 
$maths->setTitle( "Algebra" ); 
$physics->setPrice( 10 ); 
$chemistry->setPrice( 15 ); $maths->setPrice( 7 );
$physics->getTitle();
$chemistry->getTitle();
$maths->getTitle();
$physics->getPrice();
$chemistry->getPrice();
$maths->getPrice();

?>