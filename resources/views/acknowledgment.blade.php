<script>
    function dev() {
        return {
            greet: function () {
                return DevFromTheFuture;
            }
        }
    }

    
    function() {
        return DevFromTheFuture;
    }
    
    FromTheFuture = dev();
    FromTheFuture.greet();
</script>