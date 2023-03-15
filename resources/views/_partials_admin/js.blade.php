<script src="{{ asset('admin/assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/assets/js/extensions/datatables2.js') }}"></script>
<script src="{{ asset('admin/assets/extensions/datatables.net-bs5/js/datatables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/extensions/datatables.net-bs5/js/datatables.responsive.bootstrap.js') }}"></script>
<script src="{{ asset('admin/assets/extensions/toastify-js/src/toastify.js') }}"></script>
<script>
    @if (Session::has('error'))
        Toastify({
            text: "{{ Session::get('error') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "#B4000D",
        }).showToast()
    @endif

    @if (Session::has('success'))
        Toastify({
            text: "{{ Session::get('success') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "#60AF4B",
        }).showToast()
    @endif
</script>
