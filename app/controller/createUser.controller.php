<script>
    $(document).ready(()=>{
        $('#registrar').click(()=>{
            let nombre=$('#nombre').val();
            let pass=$('#pass').val();
            let ExpReg=["^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$","^[0-9A-ZÑa-zñ]+$"];
            if (nombre&&pass) {
                if (nombre.match(ExpReg[0])) {
                    if (pass.match(ExpReg[1])) {
                        $.ajax({
                                url:"./app/model/process/createUser.process.php",
                                data: {
                                    nombre,
                                    pass
                                },
                                type: "POST",
                                success:()=>{
                                    Swal.fire({
                                        title:'Todo ok :)',
                                        text:'Nuevo usuario agregado',
                                        icon:'success',
                                        confirmButtonColor: '#3085d6',
                                        confirmButtonText:'OK!!'
                                    }).then((result)=>{
                                        window.location="./home"
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
                    } else {
                        Swal.fire(
                            'Contraseña invalida!!',
                            ':( la contraseña, espacios o carecteres especiales',
                            'error'
                        )
                    }
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