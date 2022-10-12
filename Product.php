<?php
	class Product{
		
		private $title;
		private $price;
		private $quantity;
		
		public function __construct(string $title, float $price, int $quantity=0) {
			$this->title = $title;
			$this->price = $price;
			$this->quantity=$quantity;
		}
		
		
		public function getTitle(){
			return $this->itemTitle;
		}
		
		public function setPrice(double $price){
			$this->price=$price;
		}
		
		public function getPrice(){
			return $this->price;
		}
		
		public function setQuantity(int $quantity){
			$this->quantity=$quantity;
		}
		
		public function addItems(int $quantity){
			$this->quantity+=$quantity;
		}
		
		public function delItems(int $quantity){
			$this->quantity-=$quantity;
		}
		
		public function getQuantity(){
			return $this->quantity;
		}
	}
?>