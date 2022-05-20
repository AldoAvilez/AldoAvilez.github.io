function registra(){

               var nombre= document.getElementById("nombre").value;
               var edad= document.getElementById("edad").value;
               var escuela= document.getElementById("escuela").value;
               var fecha= document.getElementById("fecha").value;
               var sexo= document.getElementById("sexo").value;

               if(nombre==""){
                    alert("El nombre es obligatorio"); return;
               }

               if(edad==""){
                    alert("La edad es obligatoria"); return;
               }

               if(escuela==""){
                    alert("La escuela es obligatoria"); return;
               }
               
               if(fecha==""){
                    alert("La fecha es obligatoria"); return;
               }
               
               if(sexo==""){
                    alert("El sexo es obligatorio"); return;
               }
               
               //agregar alumnos dentro del contenedor al final del archivo
              
               var doc= new jsPDF();
               doc.text('Nombre:'+nombre, 10, 10);
               doc.text('Edad:'+edad, 20, 20);
               doc.text('Escuela:'+escuela, 30, 30);
               doc.text('Fecha:'+fecha, 40, 40);
               doc.text('Sexo:'+sexo, 50, 50);
               
               doc.save("contacto.pdf");
               }
         
          
          
