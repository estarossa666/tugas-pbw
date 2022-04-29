<?php


class Book
{
    private $code_book;
    private function setCode($code_book)
    {
        if (!preg_match('/^([A-Z]{2}[0-9]{2}$)/', $code_book)) {
            $this->code_book = "Format kode buku salah! Silahkan Gunakan Kombinasi 2 Huruf Besar dan 2 Angka";
        } else {
            $this->code_book = $code_book;
        }
    }
    public function getCode()
    {
        return $this->code_book;
    }
    private $name;
    private function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    private $qty;
    private function setQty($qty)
    {
        if (preg_match('/^[0-9]*$/', $qty) && $qty > 0) {
            $this->qty = $qty;
        } else {
            $this->qty = "Input Qty ditolak, gunakan angka dan tidak boleh 0";
        }
    }
    public function getQty()
    {
        return $this->qty;
    }
    public function __construct($code_book, $name, $qty)
    {
        $this->setName($name);
        $this->setQty($qty);
        $this->setCode($code_book);
    }
}
$book_one = new book("BO69","Pergi", "85");
echo "Kode : " . $book_one->getCode();
echo "<br>";
echo "Nama : " . $book_one->getName();
echo "<br>";
echo "Qty : " . $book_one->getQty();


