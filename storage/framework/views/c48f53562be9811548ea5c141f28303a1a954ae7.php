<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>notes registration</title>
</head>
<body>
    <div class="main">
        <?php if(auth()->guard()->check()): ?>
        <?php if(session('status')): ?>
            <div><?php echo e(session('status')); ?></div>
            
        <?php endif; ?>
            
        
        <form action="<?php echo e(url('Notes')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="code_eleve">code_eleve</label>
            <input type="text" name="code_eleve"><br>

            <label for="code_elm_mod">element de module</label>
            <input type="text" name="code_elm_mod"><br>
            
            <label for="note">note</label>
            <input type="text" name="note"><br>


            

            <input type="submit" value="register">
        </form>
        <a href="<?php echo e(url('Notes')); ?>">back</a>
        <?php endif; ?>
    </div>
    
</body>
</html><?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/responsable\note_manip\create_note.blade.php ENDPATH**/ ?>