<?php include 'vendor/autoload.php'; ?>
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
            <?php echo $form->label('nam')->indent(3)->wrap($form->text()->id('one')->placeholder('Put your name'))->lf(); ?>
         
        </div>
<br>
        <div>
               <?php echo $form->label('shomare')->indent(3)->wrap($form->text()->id('tow')->placeholder('Put your phone number'))->lf(); ?>
        </div>
       
<br>       
        <div>
               <?php echo $form->label('moadel')->indent(3)->wrap($form->text()->id('three')->placeholder('Put your avrage'))->lf(); ?>
        </div>
<br>
        <div>
               <?php echo $form->label('email')->indent(3)->wrap($form->text()->id('four')->placeholder('Put your email'))->lf(); ?>
        </div>
<br>
        <div>
            <?php echo $form->button()->text('ersal')->lf(); ?>
           
        </div>
          <br>
         <div>
               <?php echo $form->label('name shaxs morede nazare xod ra vared konid')->indent(3)->wrap($form->text()->id('five')->placeholder('Put your name'))->lf(); ?>
        </div>
          <br>
        <div>
             <?php echo $form->submit()->text('Submit')->lf(); ?>
           
            </div>
    <?php echo $form->end(); ?>
</body>
</html>