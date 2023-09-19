<script>
    $(document).ready(()=>{
        $('#crear').click(()=>{
            let nombre=$('#nombre').val();
            let ExpReg="^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$";
            if (nombre) {
                if (nombre.match(ExpReg)) {
                    $.ajax({
                        url:"./app/model/process/createCategoria.process.php",
                        data: {
                                nombre
                            },
                            type: "POST",
                            success:()=>{
                                Swal.fire({
                                    title:'Todo ok :)',
                                    text:'Nueva categoria agregado',
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