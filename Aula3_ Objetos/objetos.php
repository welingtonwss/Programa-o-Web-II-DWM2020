<?php

	class Book
	{
		//Properties
		private $title;
		private $author;
		private $price;

		//Constructor
		function __construct($title, $author, $price){
 		$this->title = $title;
 		$this->author = $author;
 		$this->price = $price;
 		}

		//Methods
		function getTitle(){
			return $this->title;
		}
		function getAuthor(){
			return $this->author;
		}
		function getPrice(){
			return $this->price;
		}
	}

	//Intance a "book" object
	$livro1 = new Book ("Harry Potter", "J. K. Rowling", 20.79);
	$livro2 = new Book ("Bible", "Holly Spirit", 99.99);
	$livro3 = new Book ("Bible of Mormons", "Joseph Smith", 29.99);
	$livro4 = new Book ("Torah", "Juda", 45.99);
	$livro5 = new Book ("Song of life", "Penny Hatcher", 35.99);
	$livro6 = new Book ("Justice", "Steve Ayvery", 30.99);

	$carrinhoCompras = array ($livro1, $livro2, $livro3, $livro4, $livro5, $livro6);

	function somarTotal($carrinhoCompras){
		$total = 0;
		foreach($carrinhoCompras as $livro){
			$total += $livro->getPrice();
		}
	return $total;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Objetos</title>
</head>
<body>

	<h2>Carrinho de Compras</h2>

	<?php foreach($carrinhoCompras as $livro){ ?>
	
		<h3><?php echo $livro->getTitle(); ?></h3>
		Author: <?php echo $livro->getAuthor(); ?><br>
		<strong><?php echo $livro->getPrice(); ?></strong>

<?php } ?>

<h4>Total: <?php echo somarTotal($carrinhoCompras); ?></h4>

<h4>Livros com desconto: <?php ?></h4>

</body>
</html>