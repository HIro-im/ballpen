<?php

class Ballpen
{
  protected $knock = 0;

  public function knockOn(){
    $this->knock = 1;
  }

  public function knockOff(){
    $this->knock = 0;
  }

  public function writeVertical(){
    if ($this->knock === 1){
      echo '|';
      return;
    }
    echo '芯が出ていません。縦線が書けません。';
  }

  public function writeHorizontal(){
    if ($this->knock === 1){
      echo '―';
      return;
    }
    echo '芯が出ていません。横線が書けません。';
  }

  public function writeDiagonal(){
    if ($this->knock === 1){
      echo '/';
      return;
    }
    echo '芯が出ていません。斜線が書けません。';
  }
}

class Colorballpen extends Ballpen
{
  private $color;

  public function selectColer($core){
    $this->knock = 1;
    $this->color = $core;
  }

  public function writeVertical(){
    if ($this->knock === 1){
      echo '|';
      echo '【' . $this->color . '】';
      return;
    }
    echo '芯が出ていません。縦線が書けません。';
  }

  public function writeHorizontal(){
    if ($this->knock === 1){
      echo '―';
      echo '【' . $this->color . '】';
      return;
    }
    echo '芯が出ていません。横線が書けません。';
  }

  public function writeDiagonal(){
    if ($this->knock === 1){
      echo '/';
      echo '【' . $this->color . '】';
      return;
    }
    echo '芯が出ていません。斜線が書けません。';
  }

}

$pen1 = new Ballpen;

$pen1->knockOn();

$pen1->writeVertical();
echo '<br>';
$pen1->writeHorizontal();
echo '<br>';
$pen1->writeDiagonal();
echo '<br>';

$pen1->knockOff();

$pen1->writeVertical();
echo '<br>';
$pen1->writeHorizontal();
echo '<br>';
$pen1->writeDiagonal();
echo '<br>';

$pen2 = new Colorballpen;

$pen2->selectColer('red');

$pen2->writeVertical();
echo '<br>';
$pen2->writeHorizontal();
echo '<br>';
$pen2->writeDiagonal();
echo '<br>';

$pen2->knockOff();

$pen2->writeVertical();
echo '<br>';
$pen2->writeHorizontal();
echo '<br>';
$pen2->writeDiagonal();
echo '<br>';

$pen3 = new Colorballpen;

$pen3->selectColer('black');

$pen3->writeVertical();
echo '<br>';
$pen3->writeHorizontal();
echo '<br>';
$pen3->writeDiagonal();
echo '<br>';

$pen3->knockOff();

$pen3->writeVertical();
echo '<br>';
$pen3->writeHorizontal();
echo '<br>';
$pen3->writeDiagonal();
echo '<br>';

// git merge
?>
