<!DOCTYPE html>
<html lang="en">
    <head>
        <title>jQuery 1.5 examples: Example 3</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <style type="text/css" media="all">
    
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
        <h1>Example 3: Simple animation loop</h1><br>
        <a href="index.php"> << BACK </a><br>
        <br>
        <div style="height: 500px;width: 500px; position: relative">
            <input type="button" value="Start" id="startBtn" />
            <div id="box" style="height: 20px;width:20px;position: absolute; left:50px;top:50px;background:black;"></div>     
        </div>
        <pre class="brush: js">
            step = 0;
            $(document).ready(function(){
                SyntaxHighlighter.all()
                $("#startBtn").click(function(){
                    $.when(next_step(step+1)).then(function(){
                        $("#startBtn").hide().click();      
                    });
                }); 
                         
            });
            
            function next_step(next){
                var def = new $.Deferred();
                if(next == 1){
                    props = {left: "+=400"};
                }else if(next == 2){
                    props = {top: "+=300"};
                }else if(next == 3){
                    props = {left: "-=400"};                    
                }else{
                    props = {top: "-=300"};                                
                }
                $("#box").animate(props, "slow","linear", def.resolve());
                step = (step + 1)%4;
                return def.promise();
                
            }
        </pre>
        
            
        
        <script type="text/javascript">
            step = 0;
            $(document).ready(function(){
                SyntaxHighlighter.all()
                $("#startBtn").click(function(){
                    $.when(next_step(step+1)).then(function(){
                        $("#startBtn").hide().click();      
                    });
                }); 
                         
            });
            
            function next_step(next){
                var def = new $.Deferred();
                if(next == 1){
                    props = {left: "+=400"};
                }else if(next == 2){
                    props = {top: "+=300"};
                }else if(next == 3){
                    props = {left: "-=400"};                    
                }else{
                    props = {top: "-=300"};                                
                }
                $("#box").animate(props, "slow","linear", def.resolve());
                step = (step + 1)%4;
                return def.promise();
                
            }
            
            
        </script>
    </body>
</html>