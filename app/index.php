<?php
//
//$dsn = 'mysql:host=my_database;dbname=nt_db_php;charset=utf8';
//$db_user = 'root';
//$db_pass = 'example';
//
//try {
//    $pdo = new PDO($dsn, $db_user, $db_pass);
//    // Set error mode to exception for easier debugging
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//} catch (\PDOException $e) {
//    throw new \PDOException($e->getMessage(), (int)$e->getCode());
//}

//class Cart{
//    public array $product = [];
//
//    public function AddProduct(array $product): static
//    {
//        $this->product[] = $product;
//        return $this;
//    }
//
//    public function getTotal(): int|float
//    {
//        $total = 0;
//        foreach ($this->product as $item)
//        {
//            $total += $item['price'];
//        }
//        return $total;
//    }
//
//}
//$cart = new Cart();
//echo $cart->AddProduct(["id"=>2, "title"=>'Toy', "price"=>100, "quantity"=>1])->getTotal();
//var_dump($cart->AddProduct(["id"=>2, "title"=>'Toy', "price"=>100, "quantity"=>1])->getTotal());
//var_dump($cart->AddProduct(["id"=>2, "title"=>'Toy', "price"=>100, "quantity"=>1])->getTotal());
//var_dump($cart->AddProduct(["id"=>2, "title"=>'Toy', "price"=>100, "quantity"=>1])->getTotal());
//var_dump($cart->AddProduct(["id"=>2, "title"=>'Toy', "price"=>100, "quantity"=>1])->getTotal());
//var_dump($cart->AddProduct(["id"=>2, "title"=>'Toy', "price"=>100, "quantity"=>1])->getTotal());
//var_dump($cart);

class Product{
    // TO PHP 8
//    public ?string $name;
//    public int|float $price; // cents

//    public function __construct(string $name='No name', int $price=0)
//    {
//    $this->name = $name;
//    $this->price = $price;
//    }
    //AFTER PHP 8
    public function __construct
    (
        public string $name = 'Candy',
        public int|float $price = 10000// cents
    )
    {
    }

    public function getRealPrice(string $currency   ): string{
        return "{$currency}     " . $this->price / 100;
    }

}

$product = new Product();
var_dump($product);
?>
