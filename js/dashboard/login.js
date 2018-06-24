$(document).ready(function(){

   $('#frm-login').submit(function(event){

        let usuario=$('#usuario').val();
        let contrasena=$('#contrasena').val();

        $.ajax({
                method:'POST',
                url:'./index.php?c=login&a=login',
                data:{usuario:usuario,contrasena:contrasena},
                dataType:'json',

        }).done(function(data,textStatus,jqXHR){


                if(parseInt(data.estado)===1){                        
                        
                        const toast = swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                              });
                              
                              toast({
                                type: 'success',
                                title: 'Bienvenido '+data.nombre+' '+data.apellido
                              }).then(()=>{
                                
                                location.href ="./index.php?c=usuarios&a=index";                                
                                
                              });
                              
                        
                }
                else if(data.estado===3){

                        const toast = swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                              });
                              
                              toast({
                                type: 'error',
                                title: 'Usuario o contraseña invalidas'
                              })
                }
                else{

                        const toast = swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                              });
                              
                              toast({
                                type: 'error',
                                title: 'Usuario actualmente inactivo'
                              })

                }

                

        }).fail(function(jqXHR,textStatus){

            console.log(textStatus);

        })



        event.preventDefault();
   });

});