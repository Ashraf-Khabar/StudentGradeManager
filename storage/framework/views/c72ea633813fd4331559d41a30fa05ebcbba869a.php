<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>filiere registration</title>
</head>
<body>
    <div class="main">
        <?php if(auth()->guard()->check()): ?>
        <?php if(session('status')): ?>
            <div><?php echo e(session('status')); ?></div>
            
        <?php endif; ?>
            
        
        <form action="<?php echo e(url('Filieres')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="code">code</label>
            <input type="text" name="code"><br>

            <label for="designation">name</label>
            <input type="text" name="designation"><br>
            
            <label for="responsable">responsable</label>
            <input type="text" name="responsable"><br>
            

            <input type="submit" value="register">
        </form>
        <a href="<?php echo e(url('Filieres')); ?>">back</a>
        <?php endif; ?>
    </div>
    
</body>
</html><?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/admin/filiere_manip/create_filiere.blade.php ENDPATH**/ ?>