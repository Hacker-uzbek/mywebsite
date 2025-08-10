<?php
$name = isset($_GET['name']) ? $_GET['name'] : '';
?>
<script>
    let a = '<?= $name ?>';
    alert(a);
</script>

Hello!
