$(document).ready(function(){
        var button  = $("#avatarka"),interval,file;
   new Ajax_upload(button,{
       action:"ajax/method/upload_img",
       data:{file:"file"},
       name:"userfile",
       onComplete:function(file,response){/* response - ответ от сервера  */

           response = JSON.parse(response);

           $("#response").text('').append(response.answer);
           if(response.answer == "ошибка загрузки файла,не допустимое расширение файлов!!!"){
               return false;
           }
           if(response.answer == "ошибка загрузки файла,файл слишком большой!!!"){
               return false;
           }
           else{

               $("#avatarka").attr('src','images/'+response.file);
           }
       }

   });



});