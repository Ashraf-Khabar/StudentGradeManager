<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>manipulation des modules</title>
</head>
<body>
    <div class="main">
        <h1>posts</h1>
        <a href="<?php echo e(url('resp_dashboard')); ?>"> back</a>
        <a href="<?php echo e(url('Modules/create')); ?>">create</a>
        <h5><?php echo e(session('status')); ?></h5>
    </div>
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>designation</th>
                    <th>niveau</th>
                    <th>semestre</th>
                    <th>code filiere</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->code); ?></td>
                <td><?php echo e($item->designation); ?></td>
                <td><?php echo e($item->niveau); ?></td>
                <td><?php echo e($item->semestre); ?></td>
                <td><?php echo e($item->code_fil); ?></td>

                <td><a href="<?php echo e(url('Modules/'.$item->id.'/edit')); ?>"> edit</a></td>
                <td><form action="<?php echo e(url('Modules/'.$item->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" value="delete">
                </form></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/responsable\module_manip\module_index.blade.php ENDPATH**/ ?>