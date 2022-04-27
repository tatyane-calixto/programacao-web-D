<?php
//$arrayligadajustica = array("batman", "mulher maravilha", "flash", "aquaman");
$arrayligadajustica = ["batman", "mulher maravilha", "flash", "aquaman", "super homem"];
echo "<hr>";
echo $arrayligadajustica[0];
echo "<br/>";
echo $arrayligadajustica[1];
echo "<br/>";
echo $arrayligadajustica[2];
echo "<br/>";
echo $arrayligadajustica[3];
echo "<br/>";
echo "<hr>";

$arrayligadajustica2 = array(
  'heroi1' => "Batman",
  'heroi2' => "Mulher Maravilha",
  'heroi3' => "Flash",
  'heroi4' => "Aquaman",
  'heroi5' => "Super homem"
);
echo "<br/>";
echo $arrayligadajustica2["heroi1"];
$arrayligadajustica2["heroi1"] = "aquaman";
echo "<br/>";
echo $arrayligadajustica2["heroi1"];
echo "<hr>";
echo "Array sendo acessado pelo foreach";
echo "<br/>";
/*$arrayligadajustica2 = array("batman", "mulher maravilha", "flash", "aquaman");
echo "<br/>";
echo $arrayligadajustica2[2];*/
foreach ($arrayligadajustica2 as $chave => $heroi) {
  echo "<hr/>";
  echo "{$chave} : {$heroi}\n";
}
echo "<hr/>";
for ($i = 0; $i < 10; $i++) {
  echo "<br/>" . $i;
}
echo "<hr/>";
for ($i = 0; $i < 5; $i++) {
  echo "<br/>" . $arrayligadajustica[$i];
}
echo "<hr/>";
foreach ($arrayligadajustica2 as $heroi) {
  echo  "<br/>" . $heroi;
}
