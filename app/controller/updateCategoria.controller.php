<script>
    $(document).ready(()=>{
        $('#update').click(()=>{
            let nombre=$('#nombre').val();
            let id=$('#id').val();
            let ExpReg="^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$";
            if (nombre) {
                if (nombre.match(ExpReg)) {
                    
                            $.ajax({
                                url:"./app/model/process/updateCategoria.process.php",
                                data: {
                                    id,
                                    nombre
                                },
                                type: "POST",
                                success:()=>{
                                    Swal.fire({
                                        title:'Todo ok :)',
                                        text:'Categoria actualizado',
                                        icon:'success',
                                        confirmButtonColor: '#3085d6',
                                        confirmButtonText:'OK!!'
                                    }).then((result)=>{
                                        window.location="./readCategoria"
                                    })
                                },
                                error:()=>{
                                    Swal.fire(
                                        'Error!!!',
                                        'Falla al agregar',
                                        'error'
                                    )
                                }
                            })
                }else{
                    Swal.fire(
                        'Nombre invalido!!',
                        ':( el nombre contiene numeros o carecteres especiales',
                        'error'
                    )
                }
            }else{
                Swal.fire(
                    'Error!!',
                    'Campo o campos vacios',
                    'error'
                )
            }
        });
    });
</script>