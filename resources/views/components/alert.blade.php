@if (session('success'))
    <div 
        class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow"
        role="alert"
        style="z-index: 1050; min-width: 300px;"
        id="alert-box"
    >
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if (session('error'))
    <div 
        class="alert alert-danger alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow"
        role="alert"
        style="z-index: 1050; min-width: 300px;"
        id="alert-box"
    >
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<script>
    setTimeout(() => {
        const alertBox = document.getElementById('alert-box');
        if (alertBox) {
            const alert = bootstrap.Alert.getOrCreateInstance(alertBox);
            alert.close();
        }
    }, 3000);
</script>
