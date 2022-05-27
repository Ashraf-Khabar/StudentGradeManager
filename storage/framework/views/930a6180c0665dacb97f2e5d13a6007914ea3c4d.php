<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=820568f5bc17b2eadf42d912a6587674">
    <title>eleve</title>
</head>
<body>
<section>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('welcome')); ?>">
                <img src="../assets/img/monLogo.png" width="70px">
            </a>
            <button style="background-color: #dc3855" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a style="color: #dc3855" class="nav-link active" href="/messages">Messages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: #dc3855" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Modify
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo e(url('Modules')); ?>">Modify Module</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('Element_Modules')); ?>">modify Element de module</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('Notes')); ?>">modify Notes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">

    <br><a href="<?php echo e(url('Modules')); ?>">modify modules</a>
    <a href="<?php echo e(url('new-pass')); ?>">change password</a>

    <br><a href="<?php echo e(url('Element_Modules')); ?>">modify elements</a>
    <br><a href="<?php echo e(url('Notes')); ?>">modify notes</a>
    <?php if(session('status')): ?>
        <h3><?php echo e(session('status')); ?></h3>
            
        <?php endif; ?>
    <div class="students">
        <table class="table table-hover table-bordered">
            <thead class="bill-header cs">
            <tr style="color: #be0a38 ; font-size: 15px">
                <th>ID</th>
                <th>code</th>
                <th>nom et prenom</th>
                <th>niveau</th>
                <th>code filiere</th>
                <th>login</th>
                
            </tr>
            </thead>
            <tbody>
            
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="color: #110505 ; background-color: #88f5c2">
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->code); ?></td>
                    <td><?php echo e($item->nom); ?></td>
                    <td><?php echo e($item->niveau); ?></td>
                    <td><?php echo e($item->code_fil); ?></td>
                    <td><?php echo e($item->login); ?></td>
                    <td>
                        
                            <a href="<?php echo e(url('Notes/'.$item->code)); ?>" >voir notes</a>
                    </td>
                    <td>
                            <a href="<?php echo e(url('moyennes/'.$item->code)); ?>" >voir moyenne</a>
                            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
                        <a style="color: #dc3855" class="nav-link active" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/\resp_dashboard.blade.php ENDPATH**/ ?>