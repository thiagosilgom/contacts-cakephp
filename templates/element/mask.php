<?php $this->append('script'); ?>
<script>
    $(document).ready(function(){
        $('#phone').inputmask({
            mask: ['(99) 9999-9999', '(99) 99999-9999']
        });
    });
</script>
<?php $this->end(); ?>