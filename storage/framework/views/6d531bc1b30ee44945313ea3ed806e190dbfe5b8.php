swal.fire({
    title: "<?php echo e($title); ?>",
    text: "<?php echo e($text); ?>",
    type: "<?php echo e($type ?? 'error'); ?>",
    buttonsStyling: false,
    confirmButtonClass: "btn btn-<?php echo e($color ?? 'primary'); ?>"
});<?php /**PATH C:\xampp\htdocs\recruitment-main\resources\views/layouts/inc/sweetalert.blade.php ENDPATH**/ ?>