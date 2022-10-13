<?php
	require "Product.php";
	use PHPUnit\Framework\TestCase;
	
	class TestUser extends TestCase{
		private $productTitle="Coca-Cola";
		private $quantity=30;
		private $addItems=3;
		private $delItems=8;
		private $price=30.5;
		private $ProductTestInstance;
		
		protected function setUp():void{
			$this->ProductTestInstance=new Product($this->productTitle,$this->price,$this->quantity);
		}

		/**
		* @dataprovider itemsProvider
		*/
			
		public function testAddItems(){
			$this->ProductTestInstance->addItems($this->addItems);
			$this->assertEquals(($this->quantity+$this->addItems), $this->ProductTestInstance->getQuantity());
		}
		
		public function itemsProvider(){
			return [1, 2, 3];
		}
		

		public function testQuantity(){
			$this->assertEquals($this->quantity, $this->ProductTestInstance->getQuantity());
		}

	}
?>