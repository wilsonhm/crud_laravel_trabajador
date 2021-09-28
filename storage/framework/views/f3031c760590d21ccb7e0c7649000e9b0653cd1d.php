 <?php $__env->slot('header', null, []); ?> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Posts (Laravel 8 Livewire CRUD with Jetstream & Tailwind CSS - ItSolutionStuff.com)
    </h2>
 <?php $__env->endSlot(); ?>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <?php if(session()->has('message')): ?>
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm"><?php echo e(session('message')); ?></p>
                    </div>
                  </div>
                </div>
            <?php endif; ?>
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Agregar Nuevo Usuario</button>
            <?php if($isOpen): ?>
                <?php echo $__env->make('livewire.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">nombre</th>
                        <th class="px-4 py-2">dni</th>
                        <th class="px-4 py-2">email</th>
                        <th class="px-4 py-2">especialidad</th>
                        <th class="px-4 py-2">categoria</th>
                        <th class="px-4 py-2">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo e($post->id); ?></td>
                        <td class="border px-4 py-2"><?php echo e($post->nombre); ?></td>
                        <td class="border px-4 py-2"><?php echo e($post->dni); ?></td>
                        <td class="border px-4 py-2"><?php echo e($post->email); ?></td>
                        <td class="border px-4 py-2"><?php echo e($post->especialidad); ?></td>
                        <td class="border px-4 py-2"><?php echo e($post->categoria); ?></td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit(<?php echo e($post->id); ?>)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                            <button wire:click="delete(<?php echo e($post->id); ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH C:\Users\adami\Documents\laravel\trabajador\resources\views/livewire/posts.blade.php ENDPATH**/ ?>