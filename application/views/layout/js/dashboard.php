<script>
    $(document).ready( function () {
        $(".nav-dashboard").addClass("active");
        <?php if($this->session->flashdata("success")):?>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '<?php echo $this->session->flashdata("success"); ?>',
                showConfirmButton: false,
                timer: 2000
            })
        <?php endif; ?>


    });

</script>