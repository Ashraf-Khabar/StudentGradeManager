<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eleve</title>
</head>
<body>
    <h3>hello resp</h3>
    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
        <?php echo e(csrf_field()); ?>

    </form>

    <br><a href="<?php echo e(url('Modules')); ?>">modify modules</a>
    <br><a href="<?php echo e(url('Element_Modules')); ?>">modify elements</a>
    <br><a href="<?php echo e(url('Notes')); ?>">modify notes</a>

</body>
</html><?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/resp_dashboard.blade.php ENDPATH**/ ?>