<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>manipulation des note</title>
</head>
<body>
    <div class="main">
        <h1>posts</h1>
        <a href="<?php echo e(url('resp_dashboard')); ?>"> back</a>
        <a href="<?php echo e(url('Notes/create')); ?>">create</a>
        <h5><?php echo e(session('status')); ?></h5>
    </div>
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code eleve</th>
                    <th>code element de module</th>
                    <th>code module</th>
                    <th>semestre</th>
                    <th>poids</th>
                    <th>note</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->code_eleve); ?></td>
                <td><?php echo e($item->code_elm_mod); ?></td>
                <td><?php echo e($item->code); ?></td>
                <td><?php echo e($item->semestre); ?></td>
                <td><?php echo e($item->poids); ?></td>
                <td><?php echo e($item->note); ?></td>

                <td><a href="<?php echo e(url('Notes/'.$item->id.'/edit')); ?>"> edit</a></td>
                <td><form action="<?php echo e(url('Notes/'.$item->id)); ?>" method="POST">
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
</html><?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/responsable\note_manip\note_index.blade.php ENDPATH**/ ?>