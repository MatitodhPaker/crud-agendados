<script>
    $(document).ready(()=>{
        $('#update').click(()=>{
            let nombre=$('#nombre').val();
            let telefono=$('#telefono').val();
            let email=$('#email').val();
            let id=$('#id').val();
            let categoria=$('#categoria').val();
            let ExpReg=["^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$","^[0-9]+$",/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/];
            if (nombre&&telefono&&email&&categoria) {
                if (nombre.match(ExpReg[0])) {
                    if (telefono.match(ExpReg[1])) {
                        if (email.match(ExpReg[2])) {
                            $.ajax({
                                url:"./app/model/process/update.process.php",
                                data: {
                                    id,
                                    nombre,
                                    telefono,
                                    email,
                                    categoria
                                },
                                type: "POST",
                                success:()=>{
                                    Swal.fire({
                                        title:'Todo ok :)',
                                        text:'Contacto actualizado',
                                        icon:'success',
                                        confirmButtonColor: '#3085d6',
                                        confirmButtonText:'OK!!'
                                    }).then((result)=>{
                                        window.location="./read"
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
                                'Error!!!',
                                'E-mail invalido',
                                'error'
                            )
                        }
                    } else {
                        Swal.fire(
                            'Telefono invalido!!',
                            ':( el telefono contiene letras, espacios o carecteres especiales',
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