<?php

namespace App;

class Cart
{

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
    	if($oldCart)
    	{
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function add($item, $id, $qty = 1)
    {
    	$storedItem = ['qty'=>0, 'price'=>$item->price, 'item'=>$item];

    	if($this->items)
    	{
    		if(array_key_exists($id, $this->items))
    		{
    			$storedItem = $this->items[$id];
                echo "here";
    		}
    	}
    	$storedItem["qty"] += $qty;
    	$storedItem['price'] = $item->price * $storedItem['qty'];        
    	$this->items[$id] = $storedItem;
        $this->validateCart();
    }

    public function isEmpty()
    {
        return ($this->items == null || count($this->items) == 0);
    }

    public function removeItem($id)
    {
        
        if($this->items)
        {
            if(array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
                $this->totalQty -= $storedItem['qty'];
                $this->totalPrice -= $storedItem['price'];
                $this->items = array_except($this->items,$id);
                return true;
            }
        }

        return false;
    }

    public function updateItemQuantity($id,$quantity)
    {
        if($this->items)
        {
            if(array_key_exists($id,$this->items))
            {

                $item = $this->items[$id];                
                $qtyDiff = $quantity - $item['qty'];
                $this->totalQty = $this->totalQty + $qtyDiff;
                $this->totalPrice = $this->totalPrice + ($item['price'] * $qtyDiff);
                $item['qty'] = $quantity;
                $item['price'] = $item['item']->price * $quantity;                
                $this->items[$id] = $item;
                $this->validateCart();
                return true;
            }
        }

        return false;
    }

    private function validateCart()
    {
        if($this->items)
        {
            $this->totalQty = 0;
            $this->totalPrice = 0;
            foreach($this->items as $item)
            {
                $this->totalQty += $item['qty'];
                $this->totalPrice += $item['price'];
            }

            return true;
        }

        return false;
    }
}
