<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('{{ route('dashboard.user.check.payment') }}')
            .then(response => response.json())
            .then(data => {
                console.log(data);
            });
    });
</script>
