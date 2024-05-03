<?php
$sc = new Scanner();
$a = $sc->nextInt();
$b = $sc->nextInt();
$c = $sc->nextInt();
$s = $sc->next();
out::println(($a + $b + $c) . " " . $s);
class Scanner
{
    private $arr = [];
    private $count = 0;
    private $pointer = 0;
    public function next()
    {
        if ($this->pointer >= $this->count) {
            $str = trim(fgets(STDIN));
            $this->arr = explode(' ', $str);
            $this->count = count($this->arr);
            $this->pointer = 0;
        }
        $result = $this->arr[$this->pointer];
        $this->pointer++;
        return $result;
    }
    public function hasNext()
    {
        return $this->pointer < $this->count;
    }
    public function nextInt()
    {
        return (int)$this->next();
    }
    public function nextDouble()
    {
        return (float)$this->next();
    }
}

class out
{
    public static function println($str = "")
    {
        echo $str . PHP_EOL;
    }
}
