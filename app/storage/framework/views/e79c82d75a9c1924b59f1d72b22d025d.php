
<?php $__env->startSection('content'); ?>

<h1>Lista de Criptomoeda </h1>
<?php if(count(value: $criptos)): ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sigla</th>
      <th scope="col">nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $criptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cripto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($cripto['sigla']); ?></th>
      <td><?php echo e($cripto['nome']); ?></td>
      <td>R$ <?php echo e(number_format($cripto['valor'],2 , ',', '.')); ?></td>
      <td>Editar|Excluir</td>
    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php else: ?>
    <p>Nenhuma Criptomoeda </p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Alunos\Desktop\WorkSpace\App\app\resources\views/criptomoeda/index.blade.php ENDPATH**/ ?>