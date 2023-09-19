<script>
    const borrar=(id)=>{
        Swal.fire({
                title: 'Estas Seguro de borar',
                text: "Ya no podras recuperar los datos",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borralo'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"./app/model/process/delete.process.php",
                    data: {
                        id
                    },
                    type: "POST",
                    success:()=>{
                        Swal.fire({
                            title:'Todo ok :)',
                            text:'Se a eliminado el contacto',
                            icon:'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then((result)=>{
                            location.reload();
                        })
                    },
                    error:()=>{
                        Swal.fire(
                            'Error!!!',
                            'Falla al eliminar',
                            'error'
                            )
                        }
                    })
            }
        })
    }
</script>