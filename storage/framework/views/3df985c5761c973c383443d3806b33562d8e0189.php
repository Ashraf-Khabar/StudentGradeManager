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
            
        
        <form action="<?php echo e(url('Modules')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="code">code</label>
            <input type="text" name="code"><br>

            <label for="designation">name</label>
            <input type="text" name="designation"><br>
            
            <label for="niveau">niveau</label>
            <input type="text" name="niveau"><br>

            <label for="semestre">semestre</label>
            <input type="text" name="semestre"><br>

            <label for="code_fil">code_fil</label>
            <input type="text" name="code_fil"><br>
            

            <input type="submit" value="register">
        </form>
        <a href="<?php echo e(url('Modules')); ?>">back</a>
        <?php endif; ?>
    </div>
    
</body>
</html><?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/responsable/module_manip/create_module.blade.php ENDPATH**/ ?>