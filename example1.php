<!DOCTYPE html>
<html lang="en">
    <head>
        <title>jQuery 1.5 examples: Example 1</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <style type="text/css" media="all">
        .done{color:green;}
        .error{color: red;}
        </style>
        <!-- Include required JS files -->
        <script type="text/javascript" src="shCore.js"></script>
         
        <!--
            At least one brush, here we choose JS. You need to include a brush for every
            language you want to highlight
        -->
        <script type="text/javascript" src="shBrushJScript.js"></script>
         
        <!-- Include *at least* the core style and default theme -->
        <link href="shCore.css" rel="stylesheet" type="text/css" />
        <link href="shThemeDefault.css" rel="stylesheet" type="text/css" /> 
    </head>
    <body>
        <h1>Example 1: When -> Then</h1><br>
        
        <input type="button" value="Start" id="startBtn" />
        <label>Make it fail </label><input type="checkbox" id="checkfail" >
        <img src="load.gif" alt="loading" id="limg" style="margin-left: 10px; display:none;"/>    
        <p id="log"></p>
        <br><br>
        
        <div id="dummyform">
            <label >Name: </label><span id="name"></span><br>
            <label >Surname: </label><span id="surname"></span><br>
            <label >Age: </label><span id="age"></span><br>
            <label >Country: </label><span id="country"></span><br>     
        </div>
        <br>
        <pre class="brush: js">
            $(document).ready(function(){
                $("#startBtn").click(function(){
                    $.when( get_JSON() ).then(
                        function(data){
                            $("#name").html(data.name);
                            $("#surname").html(data.surname);
                            $("#age").html(data.age);
                            $("#country").html(data.country);
                            
                            $("#log").text("getJSON: ajax.php - Done").addClass("done")
                            $("#limg").hide();
                        },
                        function(args){
                            $("#log").text("getJSON: ajax.php - Error!").addClass("error");
                            $("#limg").hide();
                        }
                    );
                });            
            });
            
            function get_JSON(){
                $("#log").removeClass("error done");
                $("#dummyform").find("span").text("");
                var url = "ajax.php";
                if($("#checkfail:checked").length > 0){
                    url += "fail";
                }
                $("#limg").show();
                return $.getJSON(url);
            }
        </pre>
        <br>
            
        <a href="index.php"> << BACK </a>
        
        <script type="text/javascript">
            $(document).ready(function(){
                SyntaxHighlighter.all()
                $("#startBtn").click(function(){
                    $.when( get_JSON() ).then(
                        function(data){
                            $("#name").html(data.name);
                            $("#surname").html(data.surname);
                            $("#age").html(data.age);
                            $("#country").html(data.country);
                            
                            $("#log").text("getJSON: ajax.php - Done").addClass("done")
                            $("#limg").hide();
                        },
                        function(args){
                            $("#log").text("getJSON: ajax.php - Error!").addClass("error");
                            $("#limg").hide();
                        }
                    );
                });            
            });
            
            function get_JSON(){
                $("#log").removeClass("error done");
                $("#dummyform").find("span").text("");
                var url = "ajax.php";
                if($("#checkfail:checked").length > 0){
                    url += "fail";
                }
                $("#limg").show();
                return $.getJSON(url);
            }
        </script>
    </body>
</html>