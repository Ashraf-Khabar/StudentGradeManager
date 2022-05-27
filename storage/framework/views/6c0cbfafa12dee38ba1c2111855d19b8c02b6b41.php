<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bilan</title>
</head>
<body>
    <div class="main">
        <h1>bilan</h1>
        <a href="<?php echo e(url('resp_dashboard')); ?>"> back</a>
        
    </div>
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>module</th>
                    <th>element module</th>
                    <th>note</th>

                    
                    

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($item->code_mod); ?></td>

                <td><?php echo e($item->code_elm_mod); ?></td>
                <td><?php echo e($item->note); ?></td>
                

                
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/responsable\consult\notes.blade.php ENDPATH**/ ?>