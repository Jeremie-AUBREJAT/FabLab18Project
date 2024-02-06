<?php include ('src/inc/header.php');?>
<body>
    <div class="formation">
        <select name="session">
            <option value="">Nos formation</option>
            <option value="1">Imprimante 3D</option> 
            <option value="2">Imprimante 2D</option>
        </select>
        
        <!-- J'ai mis des balise avec chacun une value qu'on pourra rappeler en JS pour cacher ou afficher les div corespondantes -->

        <div id="div_1" class="allDiv">
            Test1 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque cum numquam illo. Debitis neque necessitatibus dolorum earum dignissimos! Dolor, esse delectus odio aliquam adipisci voluptas temporibus deserunt harum laudantium quam.
        </div>
        <div id="div_2" class="allDiv">
           
        </div>
    </div>
    <!-- Script JS -->
    
   
    <script type="text/javascript">
        $('div.allDiv').hide(); //On cache une toutes les div avant la sélection d'une formation

$("select[name='session']").change(function(){ //On effectue un changement en fonction du select
    let id = "div_"+$(this).val(); //On créer une variable id qui recuperera la valeur
    $('div.allDiv').hide(); //On recache encore une fois toutes les div non concerne
    $('#'+id).show();//On affiche la div correspondante
 });




    //Prototype de requête ajax pas fini

    // $("select[name='session']").change(function(){
    //     let id = "mesDiv"+$(this).val();
    //     $.ajax({
    //         url:'service.php',
    //         type:'GET',
    //         success:function(choixFormation){
    //             $('div.allDiv').hide;
    //             $('#'+id).show();
    //         },
    //         error:function(xhr,status,error){
    //             alert("error")
    //         }
    //     })
    // })
    </script>
</body>
<?php include ('src/inc/footer.php');?>