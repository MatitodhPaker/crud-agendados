<script>
    $(document).ready(()=>{
        id=Math.random()*10;
        id=Math.floor(id);
        $('#session').click(()=>{
            $.ajax({
                url: './app/model/process/session.process.php',
                data:{
                    id
                },
                type: "POST",
                success:()=>{
                    Swal.fire({
                        title:'Todo ok :)',
                        text:'Session iniciada',
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
            });
        })
    })
</script>