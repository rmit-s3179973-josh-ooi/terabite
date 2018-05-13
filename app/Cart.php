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
    		}
    	}
    	$storedItem["qty"] += $qty;
    	$storedItem['price'] = $item->price * $storedItem['qty'];
        $this->totalPrice += $item->price * $qty;
        $this->totalQty += $qty;
    	$this->items[$id] = $storedItem;
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
}
