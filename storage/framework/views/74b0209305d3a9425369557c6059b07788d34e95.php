<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>manipulation des elements de module</title>
</head>
<body>
    <div class="main">
        <h1>posts</h1>
        <a href="<?php echo e(url('resp_dashboard')); ?>"> back</a>
        <a href="<?php echo e(url('Element_Modules/create')); ?>">create</a>
        <h5><?php echo e(session('status')); ?></h5>
    </div>
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>designation</th>
                    <th>vh</th>
                    <th>pois</th>
                    <th>code module</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->code); ?></td>
                <td><?php echo e($item->designation); ?></td>
                <td><?php echo e($item->vh); ?></td>
                <td><?php echo e($item->poids); ?></td>
                <td><?php echo e($item->code_mod); ?></td>

                <td><a href="<?php echo e(url('Element_Modules/'.$item->id.'/edit')); ?>"> edit</a></td>
                <td><form action="<?php echo e(url('Element_Modules/'.$item->id)); ?>" method="POST">
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
</html><?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/responsable\elem_manip\element_module_index.blade.php ENDPATH**/ ?>