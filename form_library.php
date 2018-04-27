<?php include 'vendor/autoload.php'; ?>
<?php 
$a=$b=$c=$d="";

if (!empty($_GET["ersal"])){
    $json= file_get_contents($_GET["k"]);
   $dade=(json_decode($json, true));
 
  $a=$dade['a'];
  $b=$dade['b'];
  $c=$dade['c'];
  $d=$dade['d'];

}
if (!empty($_GET["sabt"])){
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    $d=$_GET['d'];
    $data1=(json_encode($_GET, true));
   file_put_contents($a,$data1);
}
?>
<?php
$form = new Vespula\Form\Form('get');
$form->id('my-form');
?>
<html doctype="html">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <?php echo $form->begin(); ?>
        <div>
            <?php echo $form->label('nam')->indent(3)->wrap($form->text()->name('a')->value($a)->placeholder('Put your name'))->lf(); 
   ?> 
         
        </div>
<br>
        <div>
               <?php echo $form->label('shomare')->indent(3)->wrap($form->text()->name('b')->value($b)->placeholder('Put your phone number'))->lf(); ?>
        </div>
       
<br>       
        <div>
               <?php echo $form->label('moadel')->indent(3)->wrap($form->text()->name('c')->value($c)->placeholder('Put your avrage'))->lf(); ?>
        </div>
<br>
        <div>
               <?php echo $form->label('email')->indent(3)->wrap($form->text()->name('d')->value($d)->placeholder('Put your email'))->lf(); ?>
        </div>
<br>
        <div>
            <?php echo $form->submit()->value('sabt')->text('sabt')->lf()->name('sabt'); ?>
           
        </div>
          <br>
       <?php echo $form->end(); ?>    
          <?php
$form = new Vespula\Form\Form('get');
$form->id('my-form1');
?>

    <?php echo $form->begin(); ?>
         <div>
               <?php echo $form->label('name shaxs morede nazare xod ra vared konid')->indent(3)->wrap($form->text()->name('k')->placeholder('Put your name'))->lf(); ?>
        </div>
          <br>
        <div>
             <?php echo $form->submit()->text('ersal')->value('ersal')->lf()->name('ersal'); ?>
           
            </div>
            echo 'hiii';
    <?php echo $form->end(); ?>
    echo 'hi';
</body>
</html>