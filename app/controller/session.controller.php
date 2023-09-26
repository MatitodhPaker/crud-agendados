<script>
    $(document).ready(()=>{
        $('#inicio').click(()=>{
            let nombre=$('#nombreU').val();
            let pass=$('#passU').val();
            let ExpReg=["^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$","^[0-9A-ZÑa-zñ]+$"];
            if (nombre&&pass) {
                if (nombre.match(ExpReg[0])) {
                    if (pass.match(ExpReg[1])) {
                        $.ajax({
                                url:"./app/model/process/session.process.php",
                                data: {
                                    nombre,
                                    pass
                                },
                                type: "POST",
                                success:()=>{
                                    window.location="./read"
                                },
                                error:()=>{
                                    Swal.fire(
                                        'Error!!!',
                                        'Falla al iniciar session',
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
        })
    })
</script>