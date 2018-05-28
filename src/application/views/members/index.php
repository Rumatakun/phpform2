<header class="masthead"">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading text-center">
                <p>All members<p>
            </div>
        </div>
    </div>
</div>
<a href="/">Registation form</a>
<table class="table text-center  ">
    <thead>
    <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Report subject</th>
        <th>Email</th>
    </tr>
    </thead>
     <?php foreach ($members as $key=>$text):?>
    <tbody>
    <tr>
        <td><?php if(!($text['photo']) ){
              echo '<img src="public/images/default.jpg"  alt="lorem">';
            }
            else{echo 'notnull';}
            ?></td>
        <td><?php echo $text['firstname'].' '.$text['lastname'] ?></td>
         <td><?php echo $text['report_subject'] ?></td>
        <td><a href="mailto:<?php echo $text['email']."\">".$text['email'] ?></a></td>
    <?php //echo $text['email'] ?>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</header>
