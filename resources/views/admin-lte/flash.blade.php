@if (session('sukses'))
    <script>
        Swal.fire({
            position: "top-end",
            icon: 'success',
            title: '{{ session('title', 'SUCCESS!') }}', // Title dinamis dari session
            text: '{{ session('sukses') }}',
            showConfirmButton: false,
            timer: 1400,
            toast: true,
            background: '#e6ffe6',
            iconColor: '#28a745',
            customClass: {
                title: 'text-dark',  // Mengubah warna title menjadi hitam
                popup: 'text-dark'   // Mengubah warna teks menjadi hitam
            },
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        });
    </script>
@endif

@if (session('gagal'))
    <div class="alert alert-danger text-dark">
        {{session('gagal')}}
    </div>
@endif
