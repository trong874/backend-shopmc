<?php
namespace App;
class Cart{
    public $items = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __constant($cart)
    {
        if ($cart){
            $this->items = $cart->items;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }

    public function addCart($item,$id)
    {
        $newItem =['quanty'=>1,'price'=>$item->price,'itemInfo'=>$item];
        if($this->items){
            if(array_key_exists($id,$items)){
                $newItem = $items[$id];
            }
        }
        $newItem['quanty']++;
        $newItem['price'] = $newItem['quanty']* $item->price ;
        $this->items[$id] = $newItem;
        $this->totalPrice += $item->price;
        $this->totalQuanty++;
    }
}

?>
