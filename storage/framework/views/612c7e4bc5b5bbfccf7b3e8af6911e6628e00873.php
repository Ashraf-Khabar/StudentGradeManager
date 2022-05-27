<!DOCTYPE html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=820568f5bc17b2eadf42d912a6587674">
    <title>resp</title>
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
                        <a style="color: #dc3855" class="nav-link active" href="<?php echo e(url('new-pass')); ?>">change password</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #dc3855" class="nav-link active" href="/messages">Messages</a>
                    </li>
                    <li class="nav-item">

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
    <div>
        <div class="main">
            <h1 style="color: #dc3855" class="nav-link active">Bilan</h1>
            <div>
            <a style="color: #dc3855;width:5% ; border:2px solid #dc3855 ; margin-bottom:1em;" class="nav-link active " href="<?php echo e(url('resp_dashboard')); ?>">
                Back
            </a>
        </div>
            
        </div>
        <table class="table table-hover table-bordered">
            <thead class="bill-header cs">
            <tr style="color: #be0a38 ; font-size: 15px">
                
                <th>niveau</th>
                <th>note</th>
                

            </tr>
            </thead>
            <tbody class="text-center">
            <tr class="warning no-result">
                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
            </tr>
            <tr>
                <?php $__currentLoopData = $moyennes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="color: #fc8a48">
                <td><?php echo e($item->niveau); ?></td>
                <td><?php echo e($item->note); ?></td>
                

                
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

            </tbody>
        </table>
    </div>

</body>
</html>
<?php /**PATH C:\Users\yolo\Documents\GitHub\Platform-of-management-of-students\resources\views/responsable\consult\moyennes.blade.php ENDPATH**/ ?>