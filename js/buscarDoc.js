 function mostrar(id) {
        if (id == "null") {
            $("#null").show();
            $("#rosa").hide();
            $("#samantha").hide();
            $("#luis").hide();
            $("#teodoro").hide();
            $("#aldair").hide();
            $("#maria").hide();
        }
    
        if (id == "rosa") {
            $("#null").hide();
            $("#rosa").show();
            $("#samantha").hide();
            $("#luis").hide();
            $("#teodoro").hide();
            $("#aldair").hide();
            $("#maria").hide();
        }
    
        if (id == "samantha") {
            $("#null").hide();
            $("#rosa").hide();
            $("#samantha").show();
            $("#luis").hide();
            $("#teodoro").hide();
            $("#aldair").hide();
            $("#maria").hide();
        }    
        if (id == "luis") {
            $("#null").hide();
            $("#rosa").hide();
            $("#samantha").hide();
            $("#luis").show();
            $("#teodoro").hide();
            $("#aldair").hide();
            $("#maria").hide();
        }
        if (id == "teodoro") {
            $("#null").hide();
            $("#rosa").hide();
            $("#samantha").hide();
            $("#luis").hide();
            $("#teodoro").show();
            $("#aldair").hide();
            $("#maria").hide();
        }
        if (id == "aldair") {
            $("#null").hide();
            $("#rosa").hide();
            $("#samantha").hide();
            $("#luis").hide();
            $("#teodoro").hide();
            $("#aldair").show();
            $("#maria").hide();
        }
        if (id == "maria") {
            $("#null").hide();
            $("#rosa").hide();
            $("#samantha").hide();
            $("#luis").hide();
            $("#teodoro").hide();
            $("#aldair").hide();
            $("#maria").show();
        }
    
    }